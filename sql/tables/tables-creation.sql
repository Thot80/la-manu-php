-- Exercice 1

USE webDevelopment;

CREATE TABLE IF NOT EXISTS languages 
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    language VARCHAR(40)
);

-- Exercice 2

CREATE TABLE IF NOT EXISTS tools 
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    tool VARCHAR(40)
);

-- Exercice 3

CREATE TABLE IF NOT EXISTS frameworks 
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(40)
);

-- Exercice 4

CREATE TABLE IF NOT EXISTS librairies 
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    librairy VARCHAR(40)
);

-- Exercice 5

CREATE TABLE IF NOT EXISTS ide 
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    ideName VARCHAR(40)
);

-- Exercice 6 

CREATE TABLE IF NOT EXISTS frameworks 
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(40)
);

-- Exercice 7
DROP TABLE IF EXISTS tools;

-- Exercice 8

DROP TABLE librairies;

-- Exercice 9
DROP TABLE ide;

-- TP
DROP DATABASE IF EXISTS codex;
CREATE DATABASE IF NOT EXISTS codex;
USE codex;
CREATE TABLE clients
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    lastName VARCHAR(40),
    firstName VARCHAR(40),
    birthDate DATE,
    adress VARCHAR(40),
    firstPhoneNumber VARCHAR(40),
    secondPhoneNumber VARCHAR(40),
    mail VARCHAR(40)
);

