create database Fit_Gym_Sistem;
use Fit_Gym_Sistem;
​
-- Tablas Fuertes --
​
create table FGS_rol(
id_rol tinyint not null,
nombre_rol varchar(30) not null,
primary key (id_rol)
);
​
create table FGS_tipo_documento(
id_tipo_documento tinyint  not null,
nombre_documento varchar (30) not null,
siglas_documento varchar (10) not null,
primary key (id_tipo_documento)
);
​
create table FGS_planes(
id_plan tinyint not null,
duracion varchar(10) not null,
precio_plan float not null,
primary key (id_plan)       
);
​
create table FGS_dietas(
id_dietas tinyint not null,
nombre_dietas varchar(30) not null,
tipo_dietas text not null,
duracion_dietas varchar(20) not null,
descripcion_dietas text not null,
primary key (id_dietas)
);
​
create table FGS_rutinas(
id_rutinas tinyint not null,
nombre_rutinas varchar(50) not null,
repeticiones_rutinas text not null,
descripcion_rutinas text not null,
primary key (id_rutinas)
);
​
create table FGS_proveedor(
id_proveedor tinyint not null,
primer_nombre_proveedor varchar(20) not null,
segundo_nombre_proveedor varchar(20),
primer_apellido_proveedor varchar(20) not null,
segundo_apellido_proveedor varchar(20),
numero_telefono_proveerdor bigint not null,
primary key (id_proveedor)
);
​
create table FGS_tipo_de_pago(
id_tipo_de_pago int not null,
nombre_tipo_pago varchar (20)not null,
primary key (id_tipo_de_pago)
);    
​
-- Tablas Debiles --
​
create table FGS_carro_compras(
id_carro_compras int not null,
id_producto int  not null,
id_tipo_de_pago int not null,
primary key (id_carro_compras)
);
​
-- Campos Foraneos --
alter table FGS_carro_compras add  foreign key (id_producto) references FGS_producto (id_producto);
alter table FGS_carro_compras add  foreign key (id_tipo_de_pago) references FGS_tipo_de_pago (id_tipo_de_pago);
​
create table FGS_usuario(
numero_documento bigint  not null,
primer_nombre_usuario varchar (30) not null,
segundo_nombre_usuario varchar (30) not null,
primer_apellido_usuario varchar (30) not null,
segundo_apellido_usuario varchar (30) not null,
correo_usuario varchar (30) not null unique,
fecha_nacimiento date not null,
peso_usuario float  not null,
estatura_usuario float  not null,
tipo_sangre_usuario varchar (5) not null,
numero_telefono_usuario bigint not null,
id_rol tinyint not null,
id_tipo_documento tinyint  not null
);
​
-- Campos Foraneos --
alter table FGS_usuario add foreign key (id_rol) references FGS_rol (id_rol)
alter table FGS_usuario add foreign key (id_tipo_documento) references FGS_tipo_documento (id_tipo_documento)
alter table FGS_usuario add primary key (numero_documento, id_tipo_documento);
---------------------------------------------------------------------------------------------------------------------------------------------------
​
create table FGS_factura (
id_factura int  not null,
fecha_factura date  not null,
id_carro_compras int not null,
numero_documento bigint  not null,
id_tipo_documento tinyint not null,
primary key (id_factura)
);
​
-- Campos Foraneos --
alter table FGS_factura add  foreign key (numero_documento, id_tipo_documento) references FGS_usuario (numero_documento, id_tipo_documento) 
alter table FGS_factura add  foreign key (id_carro_compras) references FGS_carro_compras (id_carro_compras);
​
---------------------------------------------------------------------------------------------------------------------------------------------------
​
create table FGS_envio (
id_envio int  not null,
fecha_envio date not null,
id_factura int  not null,
primary key (id_envio)
);
​
-- Campos Foraneos --
alter table FGS_envio add  foreign key (id_factura) references FGS_factura (id_factura) on update cascade;
---------------------------------------------------------------------------------------------------------------------------------------------------
​
create table FGS_producto (
id_producto int  not null,
nombre_producto varchar (40) not null,
imagen_producto varbinary,
fecha_vencimiento_producto date not null,
precio float  not null,
marca varchar (20) not null,
id_proveedor tinyint not null,
primary key (id_producto)
);
​
-- Campos Foraneos --
alter table FGS_producto add  foreign key (id_proveedor) references FGS_proveedor (id_proveedor) on update cascade;

---------------------------------------------------------------------------------------------------------------------------------------------------
​
-- Tablas Muchos a Muchos --
​
create table FGS_usuario_dietas(
numero_documento bigint  not null,
id_tipo_documento tinyint not null,
id_dietas tinyint not null
);
​
-- Campos Foraneos --
alter table FGS_usuario_dietas add foreign key (numero_documento, id_tipo_documento) references FGS_usuario (numero_documento, id_tipo_documento) 
alter table FGS_usuario_dietas add foreign key (id_dietas) references FGS_dietas (id_dietas)
alter table FGS_usuario_dietas add primary key (numero_documento, id_tipo_documento, id_dietas);
​
---------------------------------------------------------------------------------------------------------------------------------------------------
​
create table FGS_usuario_rutinas(
numero_documento bigint  not null,
id_tipo_documento tinyint  not null,
id_rutinas tinyint not null
);
​
-- Campos Foraneos --
alter table FGS_usuario_rutinas add  foreign key (numero_documento, id_tipo_documento) references FGS_usuario (numero_documento, id_tipo_documento) 
alter table FGS_usuario_rutinas add  foreign key (id_rutinas) references FGS_rutinas (id_rutinas) 
alter table FGS_usuario_rutinas add primary key (numero_documento, id_tipo_documento, id_rutinas);
​
---------------------------------------------------------------------------------------------------------------------------------------------------
​
create table FGS_usuario_producto(
numero_documento bigint  not null,
id_tipo_documento tinyint  not null,
id_producto int  not null
);
​
-- Campos Foraneos --
alter table FGS_usuario_producto add  foreign key (numero_documento, id_tipo_documento) references FGS_usuario (numero_documento, id_tipo_documento) on update cascade;
alter table FGS_usuario_producto add  foreign key (id_producto) references FGS_producto (id_producto) 
alter table FGS_usuario_producto add primary key (numero_documento, id_tipo_documento, id_producto);
​
---------------------------------------------------------------------------------------------------------------------------------------------------
​
create table FGS_usuario_plan(
numero_documento bigint  not null,
id_tipo_documento tinyint  not null,
id_plan tinyint not null
); 
​
-- Campos Foraneos --
alter table FGS_usuario_plan add foreign key (numero_documento, id_tipo_documento) references FGS_usuario (numero_documento, id_tipo_documento) on update cascade;
alter table FGS_usuario_plan add foreign key (id_plan) references FGS_planes (id_plan) on update cascade;
alter table FGS_usuario_plan add primary key (numero_documento, id_tipo_documento, id_plan);
​
​
---------------------------------------------------------------------------------------------------------------------------------------------------
​
create table FGS_plan_tipo_de_pago(
id_tipo_de_pago int not null,
id_plan tinyint not null
);
​
-- Campos Foraneos --
alter table FGS_plan_tipo_de_pago add foreign key (id_tipo_de_pago) references FGS_tipo_de_pago (id_tipo_de_pago) 
alter table FGS_plan_tipo_de_pago add foreign key (id_plan) references FGS_planes (id_plan) 
alter table FGS_plan_tipo_de_pago add primary key (id_tipo_de_pago, id_plan);