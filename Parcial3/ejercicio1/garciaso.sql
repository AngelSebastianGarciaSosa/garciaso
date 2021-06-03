create database garciaso;
use garciaso;

create table usuarios
(
    nombrealumno varchar(50),
    NumDeControl varchar(50),
    telefono varchar(50),
    email varchar(50),
    carrera varchar(50),
    pass  varchar (30)
    primary key NumDeControl

);
insert into usuarios (nombrealumno,NumDeControl, telsefono,email,carrera,pass)
values('Angel Sebastian Garcia Sosa','18100174','(867)7523656','chevis.123@hotmail.com','ISC' ,'123');

INSERT INTO usuarios (nombrealumno, NumDeControl, telefono, email, carrera, pass) 
VALUES ('Juan Perez', '17100155', '8675756', 'juan.146@hotmail.com', 'ISC', '145')