use Fit_Gym_Sistem;

-- Consultas --
-- 1- Lista de usuarios registrados con el tipo de documento 
SELECT primer_nombre_usuario, segundo_nombre_usuario, primer_apellido_usuario, segundo_apellido_usuario, nombre_documento
FROM FGS_usuario
JOIN FGS_tipo_documento ON
FGS_usuario.id_tipo_documento = FGS_tipo_documento.id_tipo_documento;

-- 2- Lista de usuarios registrados con el tipo de documento diferente de 'CC'
SELECT primer_nombre_usuario, segundo_nombre_usuario, primer_apellido_usuario, segundo_apellido_usuario, siglas_documento
FROM FGS_usuario
JOIN FGS_tipo_documento ON
FGS_usuario.id_tipo_documento = FGS_tipo_documento.id_tipo_documento
WHERE siglas_documento <> 'CC';

-- 3- Cantidad de usarios registrados 
SELECT COUNT(*)
FROM FGS_usuario;

-- 4- Lista de usuarios con rol administrador con sus datos
SELECT * 
FROM FGS_usuario
JOIN FGS_rol ON 
FGS_usuario.id_rol = FGS_rol.id_rol
WHERE nombre_rol = "Administrador";

-- 5- Reporte de ventas por día, semana, mes --
SELECT *
FROM FGS_factura
ORDER BY fecha_factura DESC;

-- 6- Usuarios, la compra que realizó, el método de pago utilizado
SELECT primer_nombre_usuario, segundo_nombre_usuario, primer_apellido_usuario, segundo_apellido_usuario, nombre_producto, nombre_tipo_pago
FROM FGS_factura
JOIN FGS_carro_compras ON	
FGS_carro_compras.id_carro_compras = FGS_factura.id_carro_compras
JOIN FGS_usuario ON
FGS_factura.numero_documento = FGS_usuario.numero_documento
JOIN FGS_producto ON
FGS_carro_compras.id_producto = FGS_producto.id_producto
JOIN FGS_tipo_de_pago ON
FGS_tipo_de_pago.id_tipo_de_pago = FGS_carro_compras.id_tipo_de_pago;

-- 7- Lista de productos y proveedor (inventario)
SELECT nombre_producto, primer_nombre_proveedor, segundo_nombre_proveedor, primer_apellido_proveedor, segundo_apellido_proveedor
FROM FGS_producto
INNER JOIN FGS_proveedor ON
FGS_producto.id_proveedor = FGS_proveedor.id_proveedor;

-- 8- Cantidad total de productos registrados
SELECT COUNT(*)
FROM FGS_producto;

-- 9- Lista de marca de productos
SELECT DISTINCT marca 
FROM FGS_producto;

-- 10- Cantidad de entrenadores --
SELECT COUNT(*)
FROM FGS_usuario
JOIN FGS_rol ON
FGS_usuario.id_rol = FGS_rol.id_rol
WHERE nombre_rol = "Entrenador";

-- 11- Nombres y apellidos, documento de identidad del cliente que realizó la compra de mayor valor --
SELECT primer_nombre_usuario, segundo_nombre_usuario, primer_apellido_usuario, segundo_apellido_usuario, precio
FROM FGS_factura
JOIN FGS_usuario ON
FGS_factura.numero_documento = FGS_usuario.numero_documento
JOIN FGS_carro_compras ON
FGS_carro_compras.id_carro_compras = FGS_factura.id_carro_compras
JOIN FGS_producto ON
FGS_carro_compras.id_producto = FGS_producto.id_producto
where precio  =  (SELECT max(precio) FROM FGS_producto);

-- 12- Nombres y apellidos, documento de identidad del cliente que realizó la compra de menor valor
SELECT primer_nombre_usuario, segundo_nombre_usuario, primer_apellido_usuario, segundo_apellido_usuario, precio
FROM FGS_factura
JOIN FGS_usuario ON
FGS_factura.numero_documento = FGS_usuario.numero_documento
JOIN FGS_carro_compras ON
FGS_carro_compras.id_carro_compras = FGS_factura.id_carro_compras
JOIN FGS_producto ON
FGS_carro_compras.id_producto = FGS_producto.id_producto
where precio  =  (SELECT min(precio) FROM FGS_producto);

-- 13- Nombres y apellidos, documento de identidad del cliente que no haya realizado compra
SELECT primer_nombre_usuario, segundo_nombre_usuario, primer_apellido_usuario, segundo_apellido_usuario
FROM FGS_factura 
JOIN FGS_usuario ON
FGS_factura.numero_documento = FGS_usuario.numero_documento 
WHERE id_carro_compras = 0;
 
-- 14- Ordenar usuarios, rutinas, dietas (ASC)
SELECT primer_nombre_usuario, segundo_nombre_usuario, primer_apellido_usuario, segundo_apellido_usuario, nombre_rutinas, nombre_dietas
FROM FGS_usuario
JOIN FGS_usuario_dietas ON
FGS_usuario.numero_documento = FGS_usuario_dietas.numero_documento
JOIN FGS_dietas ON
FGS_usuario_dietas.id_dietas = FGS_dietas.id_dietas
JOIN FGS_usuario_rutinas ON
FGS_usuario_rutinas.numero_documento = FGS_usuario.numero_documento
JOIN FGS_rutinas ON
FGS_usuario_rutinas.id_rutinas = FGS_rutinas.id_rutinas
ORDER BY primer_nombre_usuario DESC;

-- 15- Ordenar ventas por fecha (Desde la más actual a la más antigua) 
SELECT *
FROM FGS_factura
ORDER BY fecha_factura DESC;
               																				