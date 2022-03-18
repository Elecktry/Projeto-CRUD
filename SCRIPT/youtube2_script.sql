#Criando o banco de dados
CREATE DATABASE `youtube2`;
#Selecionar o BD
USE `youtube2`; 
 
#Criar tabela do video
CREATE TABLE `video`(
    `ID_video` INT AUTO_INCREMENT,
    `titulo` VARCHAR(50) NOT NULL,
    `descricao` VARCHAR(255) NULL,
    `cod_youtube` VARCHAR(255) UNIQUE NOT NULL,
    
    PRIMARY KEY(`ID_video`) 
);