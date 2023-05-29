USE personal;

CREATE TABLE usuarios(
    id_usuario INT(10),
    nombre VARCHAR(50),
    edad INT(3) UNSIGNED,
    correo VARCHAR(20),

    PRIMARY KEY(id_usuario)
) ENGINE=InnoDB


CREATE TABLE libros(
    id_libro INT(10),
    titulo VARCHAR(50),
    autor VARCHAR(50),
    id_usuario INT(10),

    PRIMARY KEY(id_libro),
    CONSTRAINT FOREIGN KEY(id_usuario)REFERENCES usuarios(id_usuario)
) ENGINE=InnoDB

