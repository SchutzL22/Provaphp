CREATE DATABASE IF NOT EXISTS escalacao_time;

USE escalacao_time;

CREATE TABLE IF NOT EXISTS escalacao (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Jogador VARCHAR(255) NOT NULL,
    Posicao VARCHAR(100),
    Numero_Camisa INT,
    Idade INT
);