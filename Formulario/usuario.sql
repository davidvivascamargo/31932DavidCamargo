DROP SCHEMA IF EXISTS 'asistencia';
CREATE SCHEMA IF NOT EXIST 'asistencia' DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE 'asistencia';

CREATE TABLE 'usuarios'(
    'nombre' text not null,
    'direccion' text not null,
    'telefono' varchar(15) not null,
    'correo' text not null,
    'nombre_usuario' text not null,
    'password' varchar(25) not null,
    'fecha_registro' datetime not null DEFAULT current_timestamp on update current_timestamp,
    'permisos' int(11) not null DEFAULT '1',
    'id' int(11) not null auto_increment,
    PRIMARY KEY ('id')
)ENGINE=InnoDB;