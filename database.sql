CREATE DATABASE gestorImagenes;
USE gestorImagenes;

CREATE TABLE usuarios(
    idUser INT PRIMARY KEY AUTO_INCREMENT,
    user VARCHAR(15) NOT NULL,
    password VARCHAR(20) NOT NULL
);

CREATE TABLE imagenes(
    idImage INT PRIMARY KEY AUTO_INCREMENT,
    imageName VARCHAR(100) NOT NULL
);

INSERT INTO usuarios VALUES (null, "root", "root");