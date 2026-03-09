CREATE DATABASE mvc_biblioteca;

USE mvc_biblioteca;

CREATE TABLE livros(
	ID INTEGER AUTO_INCREMENT PRIMARY KEY,
    Titulo VARCHAR(255),
    Autor VARCHAR(255),
    ano_publicacao DATE,
    Editora VARCHAR(255)
);


SELECT * FROM livros;