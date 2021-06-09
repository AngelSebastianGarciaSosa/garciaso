create database login_usuarios;
use login_usuarios;
create table usuarios
(
    primary key id int Auto_Increment,
    Usuario varchar(200),
    Email varchar(200),
    Contraseña varchar(200),
    primary key (id)
);
create table alumnos
(
    primary key id int Auto_Increment,
    NumControl varchar(150),
    NombreAlumno varchar(150),
    Email varchar(150),
    Carrera varchar(150),
    primary key (id)
);
insert into usuarios(Usuario,Email,Contraseña)
values ('sebastian','Sebastian','$2y$10$8W8eupTlaUaO.5RJafYJReF6soSzuqsPi/4oW8sZPObAx99FiUwdO');
