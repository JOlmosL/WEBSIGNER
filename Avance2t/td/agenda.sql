create database pruebas;

use pruebas;

create table t_persona(
	id int auto_increment,
	nombre varchar(50),
	correo varchar(50),
	telefono varchar(50),
	cargo varchar(50),
	fechacolab varchar(50),
	primary key(id)

);