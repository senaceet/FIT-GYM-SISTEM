create database Fit_Gym_Sistem;
use Fit_Gym_Sistem;

-- Tablas Fuertes --

create table FGS_rol(
id_rol tinyint(5) not null,
nombre_rol varchar(30) not null,
primary key (id_rol)
);

create table FGS_tipo_documento(
id_tipo_documento tinyint (5) not null,
nombre_documento varchar (30) not null,
siglas_documento varchar (10) not null,
primary key (id_tipo_documento)
);

create table FGS_planes(
id_plan tinyint(5) not null,
duracion varchar(10) not null,
precio_plan float(10) not null,
primary key (id_plan)       
);

create table FGS_dietas(
id_dietas tinyint(5) not null,
nombre_dietas varchar(30) not null,
tipo_dietas text(70) not null,
duracion_dietas varchar(20) not null,
descripcion_dietas text(300) not null,
primary key (id_dietas)
);

create table FGS_rutinas(
id_rutinas tinyint(5) not null,
nombre_rutinas varchar(50) not null,
repeticiones_rutinas text(400) not null,
descripcion_rutinas text(500)not null,
primary key (id_rutinas)
);

create table FGS_proveedor(
id_proveedor tinyint(5) not null,
primer_nombre_proveedor varchar(20) not null,
segundo_nombre_proveedor varchar(20),
primer_apellido_proveedor varchar(20) not null,
segundo_apellido_proveedor varchar(20),
numero_telefono_proveerdor bigint(15) not null,
primary key (id_proveedor)
);

create table FGS_tipo_de_pago(
id_tipo_de_pago tinyint (3)not null,
nombre_tipo_pago varchar (20)not null,
primary key (id_tipo_de_pago)
);    

-- Tablas Debiles --

create table FGS_carro_compras(
id_carro_compras int (10)not null,
id_producto int (10) not null,
id_tipo_de_pago int (10)not null,
primary key (id_carro_compras)
);

-- Campos Foraneos --
alter table FGS_carro_compras add constraint fk_id_producto foreign key (id_producto) references FGS_producto (id_producto) on update cascade;
alter table FGS_carro_compras add constraint fk_id_tipo_de_pago foreign key (id_tipo_de_pago) references FGS_tipo_de_pago (id_tipo_de_pago) on update cascade;
alter table FGS_carro_compras add index fk_id_tipo_de_pago_idx (id_tipo_de_pago);
alter table FGS_carro_compras add index fk_id_producto_idx (id_producto);

create table FGS_usuario(
numero_documento bigint (15) not null,
primer_nombre_usuario varchar (30) not null,
segundo_nombre_usuario varchar (30),
primer_apellido_usuario varchar (30) not null,
segundo_apellido_usuario varchar (30),
correo_usuario varchar (30) not null unique,
fecha_nacimiento date not null,
peso_usuario float (5) not null,
estatura_usuario float (10) not null,
tipo_sangre_usuario varchar (5) not null,
numero_telefono_usuario bigint(20) not null,
id_rol tinyint(5) not null,
id_tipo_documento tinyint (5) not null
);

-- Campos Foraneos --
alter table FGS_usuario add constraint fk_id_rol foreign key (id_rol) references FGS_rol (id_rol) on update cascade;
alter table FGS_usuario add constraint fk_id_tipo_documento foreign key (id_tipo_documento) references FGS_tipo_documento (id_tipo_documento) on update cascade;
alter table FGS_usuario add index fk_id_rol_idx (id_rol);
alter table FGS_usuario add index fk_id_tipo_documento_idx (id_tipo_documento);
alter table FGS_usuario add primary key (numero_documento, id_tipo_documento);
---------------------------------------------------------------------------------------------------------------------------------------------------

create table FGS_factura (
id_factura int (10) not null,
fecha_factura date  not null,
id_carro_compras int (10)not null,
numero_documento bigint (15) not null,
id_tipo_documento tinyint (5) not null,
primary key (id_factura)
);

-- Campos Foraneos --
alter table FGS_factura add constraint fk_usuario foreign key (numero_documento, id_tipo_documento) references FGS_usuario (numero_documento, id_tipo_documento) on update cascade;
alter table FGS_factura add index fk_usuario_idx (numero_documento, id_tipo_documento);
alter table FGS_factura add constraint fk_id_carro_compras foreign key (id_carro_compras) references FGS_carro_compras (id_carro_compras) on update cascade;
alter table FGS_factura add index fk_id_carro_compras_idx (id_carro_compras);
---------------------------------------------------------------------------------------------------------------------------------------------------

create table FGS_envio (
id_envio int (10) not null,
fecha_envio date not null,
id_factura int (10) not null,
primary key (id_envio)
);

-- Campos Foraneos --
alter table FGS_envio add constraint fk_id_factura foreign key (id_factura) references FGS_factura (id_factura) on update cascade;
alter table FGS_envio add index fk_id_factura_idx (id_factura);
---------------------------------------------------------------------------------------------------------------------------------------------------

create table FGS_producto (
id_producto int (10) not null,
nombre_producto varchar (40) not null,
imagen_producto blob,
fecha_vencimiento_producto date not null,
precio float (12) not null,
marca varchar (20) not null,
id_proveedor tinyint(5) not null,
primary key (id_producto)
);

-- Campos Foraneos --
alter table FGS_producto add constraint fk_id_proveedor foreign key (id_proveedor) references FGS_proveedor (id_proveedor) on update cascade;
alter table FGS_producto add index fk_id_proveedor_idx (id_proveedor);
---------------------------------------------------------------------------------------------------------------------------------------------------

-- Tablas Muchos a Muchos --

create table FGS_usuario_dietas(
numero_documento bigint (15) not null,
id_tipo_documento tinyint (5) not null,
id_dietas tinyint(5) not null
);

-- Campos Foraneos --
alter table FGS_usuario_dietas add constraint fk_usuario foreign key (numero_documento, id_tipo_documento) references FGS_usuario (numero_documento, id_tipo_documento) on update cascade;
alter table FGS_usuario_dietas add constraint fk_id_dietas foreign key (id_dietas) references FGS_dietas (id_dietas) on update cascade;
alter table FGS_usuario_dietas add primary key (numero_documento, id_tipo_documento, id_dietas);
alter table FGS_usuario_dietas add index fk_usuario_idx (numero_documento, id_tipo_documento);
alter table FGS_usuario_dietas add index fk_id_dietas_idx (id_dietas);
---------------------------------------------------------------------------------------------------------------------------------------------------

create table FGS_usuario_rutinas(
numero_documento bigint (15) not null,
id_tipo_documento tinyint (5) not null,
id_rutinas tinyint(5) not null
);

-- Campos Foraneos --
alter table FGS_usuario_rutinas add constraint fk_usuario foreign key (numero_documento, id_tipo_documento) references FGS_usuario (numero_documento, id_tipo_documento) on update cascade;
alter table FGS_usuario_rutinas add constraint fk_id_rutinas foreign key (id_rutinas) references FGS_rutinas (id_rutinas) on update cascade;
alter table FGS_usuario_rutinas add primary key (numero_documento, id_tipo_documento, id_rutinas);
alter table FGS_usuario_rutinas add index fk_usuario_idx (numero_documento, id_tipo_documento);
alter table FGS_usuario_rutinas add index fk_id_rutinas_idx (id_rutinas);
---------------------------------------------------------------------------------------------------------------------------------------------------

create table FGS_usuario_producto(
numero_documento bigint (15) not null,
id_tipo_documento tinyint (5) not null,
id_producto int (10) not null
);

-- Campos Foraneos --
alter table FGS_usuario_producto add constraint fk_usuario foreign key (numero_documento, id_tipo_documento) references FGS_usuario (numero_documento, id_tipo_documento) on update cascade;
alter table FGS_usuario_producto add constraint fk_id_producto foreign key (id_producto) references FGS_producto (id_producto) on update cascade;
alter table FGS_usuario_producto add primary key (numero_documento, id_tipo_documento, id_producto);
alter table FGS_usuario_producto add index fk_usuario_idx (numero_documento, id_tipo_documento);
alter table FGS_usuario_producto add index fk_id_producto_idx (id_producto); 
---------------------------------------------------------------------------------------------------------------------------------------------------

create table FGS_usuario_plan(
numero_documento bigint (15) not null,
id_tipo_documento tinyint (5) not null,
id_plan tinyint(5) not null
); 

-- Campos Foraneos --
alter table FGS_usuario_plan add constraint fk_usuario foreign key (numero_documento, id_tipo_documento) references FGS_usuario (numero_documento, id_tipo_documento) on update cascade;
alter table FGS_usuario_plan add constraint fk_id_plan foreign key (id_plan) references FGS_planes (id_plan) on update cascade;
alter table FGS_usuario_plan add primary key (numero_documento, id_tipo_documento, id_plan);
alter table FGS_usuario_plan add index fk_usuario_idx (numero_documento, id_tipo_documento);
alter table FGS_usuario_plan add index fk_id_plan_idx (id_plan); 
---------------------------------------------------------------------------------------------------------------------------------------------------

create table FGS_plan_tipo_de_pago(
id_tipo_de_pago int (10)not null,
id_plan tinyint(5) not null
);

-- Campos Foraneos --
alter table FGS_plan_tipo_de_pago add constraint fk_id_tipo_de_pago foreign key (id_tipo_de_pago) references FGS_tipo_de_pago (id_tipo_de_pago) on update cascade;
alter table FGS_plan_tipo_de_pago add constraint fk_id_plan foreign key (id_plan) references FGS_planes (id_plan) on update cascade;
alter table FGS_plan_tipo_de_pago add primary key (id_tipo_de_pago, id_plan);
alter table FGS_plan_tipo_de_pago add index fk_id_tipo_de_pago_idx (id_tipo_de_pago);
alter table FGS_plan_tipo_de_pago add index fk_id_plan_idx (id_plan);
---------------------------------------------------------------------------------------------------------------------------------------------------
