CREATE TABLE usuario (
    id int auto_increment primary key,
    nombre varchar(50) not null,
    nick varchar(50) not null,
    pass varchar(250) not null
);

-- Tabla para recuperar la contraseña
-- trabajo opcional
CREATE TABLE llaveUsuario (
    id int,
    llave char(4),
    constraint fk_llaveUsuario foreign key (id) references usuario(id)
);

