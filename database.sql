DROP DATABASE IF EXISTS Todolistapp;
CREATE DATABASE Todolistapp;
USE Todolistapp;

CREATE TABLE list(
    id_list INT PRIMARY KEY AUTO_INCREMENT,   
    Tittle VARCHAR(100),
    State INT
);

