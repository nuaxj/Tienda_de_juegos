/* Crear la base de datos */
drop database if exists proyecto;
create database proyecto;
use proyecto;
 
/*Crear Catalogo de tipos de usuario */
create table tiposusuario
(
id_tipoUsuario  int not null auto_increment,
tipoUsuario  varchar(100),
primary key(id_tipoUsuario)
);
 
 
/* Catalogo de usuarios */
create table usuarios(
id_usuario int not null auto_increment,
nombre varchar(50) not null,
apellidos varchar(100) not null,
email varchar(100) not null,
username varchar(20) not null,
password varchar(8) not null,
id_tipoUsuario int not null,
primary key(id_usuario),
foreign key(id_tipoUsuario) references tiposusuario(id_tipoUsuario)
);
 
/*Insertar tipos de usuarios de prueba*/
INSERT INTO tiposusuario(tipoUsuario) VALUES ('Administrador');
INSERT INTO tiposusuario(tipoUsuario) VALUES ('Usuario');
 
/* La contraseña no será encriptada, de momento*/
/*Insertar usuario de prueba*/
INSERT INTO usuarios(nombre,apellidos,email,username,password,id_tipoUsuario) 
VALUES('Gustavo','Perfecto','gcp.mgr@gmail.com','gusprof','1234',1);

INSERT INTO usuarios(nombre,apellidos,email,username,password,id_tipoUsuario) 
VALUES('Ataulfo','Berebere','borrico@gmail.com','ataul','1234',2);

INSERT INTO usuarios(nombre,apellidos,email,username,password,id_tipoUsuario) 
VALUES('Antonio','García','ccc@gmail.com','antonio','1234',2);

INSERT INTO usuarios(nombre,apellidos,email,username,password,id_tipoUsuario) 
VALUES('Diego','Pérez','ddd@gmail.com','diego','1234',2);

 
create table proveedores
(
id_proveedor int not null auto_increment primary key,
proveedor varchar(200) not null,
domicilio varchar(100) not null,
telefono varchar(9) not null,
email varchar(100) not null,
cif varchar(50) not null
);

INSERT INTO proveedores(proveedor,domicilio,telefono,email,cif) 
VALUES('hp','C\ Lorca','111111111','aaa@aaa.com','A11111111');
INSERT INTO proveedores(proveedor,domicilio,telefono,email,cif) 
VALUES('Microsoft','C\ Arboleas','222222222','bbb@bbb.com','A22222222');
INSERT INTO proveedores(proveedor,domicilio,telefono,email,cif) 
VALUES('Samsung','C\ Albox','333333333','ccc@ccc.com','A33333333');
INSERT INTO proveedores(proveedor,domicilio,telefono,email,cif) 
VALUES('LG','C\ Oria','444444444','ddd@ddd.com','A44444444');
 
create table productos
(
id_producto int not null auto_increment primary key,
foto varchar(200) not null,
producto varchar(100) not null,
descripcion varchar(200) not null,
precio decimal(9,2) not null,
stock int not null,
id_proveedor int not null,
foreign key(id_proveedor) references proveedores(id_proveedor)
);

INSERT INTO productos(foto,producto,descripcion,precio,stock,id_proveedor) 
VALUES('raton1.jpg','ratón','ratón óptico wireless',15.20,3,1);
INSERT INTO productos(foto,producto,descripcion,precio,stock,id_proveedor)
VALUES('pantalla1.jpg','pantalla','pantalla samsung 30 pulgadas',150.35,15,2);
INSERT INTO productos(foto,producto,descripcion,precio,stock,id_proveedor)
VALUES('teclado1.jpg','teclado','teclado intel',36.10,5,3);
INSERT INTO productos(foto,producto,descripcion,precio,stock,id_proveedor)
VALUES('altavoces.jpg','altavoces','altavode de 200 watios',28.50,10,3);
INSERT INTO productos(foto,producto,descripcion,precio,stock,id_proveedor)
VALUES('pendrive1.jpg','pen-drive','pen-drive de 32 GB',33.40,10,4);

create table pedidos
(
	id_pedido int not null auto_increment primary key,
	fecha date not null,
	total decimal(9,2) not null,
	id_usuario int not null,
	foreign key(id_usuario) references usuarios(id_usuario)
);

INSERT INTO pedidos (fecha,total,id_usuario)
VALUES ('2015-10-10',350.2,2);
INSERT INTO pedidos (fecha,total,id_usuario)
VALUES ('2015-11-11',550.2,3);
INSERT INTO pedidos (fecha,total,id_usuario)
VALUES ('2015-09-09',344.5,2);
INSERT INTO pedidos (fecha,total,id_usuario)
VALUES ('2015-08-11',50.2,4);

create table detallePedidos
(
	id_detallePedido int not null auto_increment primary key,
	id_pedido int not null,
	id_producto int not null,
	cantidad int not null,
	foreign key(id_producto) references productos(id_producto),
	foreign key(id_pedido) references pedidos(id_pedido)
);

INSERT INTO detallePedidos (id_pedido,id_producto,cantidad)
VALUES (1,1,2);
INSERT INTO detallePedidos (id_pedido,id_producto,cantidad)
VALUES (1,2,3);
INSERT INTO detallePedidos (id_pedido,id_producto,cantidad)
VALUES (1,4,5);
INSERT INTO detallePedidos (id_pedido,id_producto,cantidad)
VALUES (1,5,10);

INSERT INTO detallePedidos (id_pedido,id_producto,cantidad)
VALUES (2,2,1);
INSERT INTO detallePedidos (id_pedido,id_producto,cantidad)
VALUES (2,3,2);
INSERT INTO detallePedidos (id_pedido,id_producto,cantidad)
VALUES (2,4,2);
INSERT INTO detallePedidos (id_pedido,id_producto,cantidad)
VALUES (2,5,4);



