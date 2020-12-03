create database pruebas;

use pruebas;


CREATE TABLE PERSONAL
(
	IdPersonal int NOT NULL UNIQUE AUTO_INCREMENT,
	NombrePersonal varchar(40) NOT NULL,
	TelefonoPersonal int NOT NULL,
	CorreoPersonal varchar(100) NOT NULL,
	Privilegio int NOT NULL,
	FechaInicioLaboral dateTime NOT NULL,
	Contrato blob,
	Respaldo blob,

	PRIMARY KEY (IdPersonal)
);
