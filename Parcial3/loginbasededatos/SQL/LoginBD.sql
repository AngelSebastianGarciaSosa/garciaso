create database login_usuarios;
use login_usuarios;
create table usuarios
{
    id int Auto_Increment;
    Usuario varchar(200);
    Email varchar(200);
    Contraseña varchar(200);

};

insert into usuarios(Usuario,Email,Contraseña)
values ('sebastian','Sebastian','$2y$10$8W8eupTlaUaO.5RJafYJReF6soSzuqsPi/4oW8sZPObAx99FiUwdO');
