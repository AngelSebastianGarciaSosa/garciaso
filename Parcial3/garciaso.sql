create database garciaso;
use garciaso;

create table usuarios
(
    nombrealumno varchar(50),
    NumDeControl varchar(50),
    telefono varchar(50),
    email varchar(50),
    carrera varchar(50),
    password  varchar (30)
    primary key NumDeControl

);
insert into usuarios (nombrealumno,NumDeControl, telefono,email,carrera,password)
values('Angel Sebastian Garcia Sosa','18100174','(867)7523656','chevis.123@hotmail.com','ISC' ,'123');