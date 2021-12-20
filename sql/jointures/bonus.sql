-- EX 1 

CREATE DATABASE laManu CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;

-- EX 2

USE laManu;

CREATE TABLE clients;
CREATE TABLE cities;

-- EX 3 

ALTER TABLE clients 
ADD id INT AUTO_INCREMENT PRIMARY KEY,
lasName VARCHAR (50),
firstName VARCHAR(50),
age INT,
email VARCHAR(50),
phone VARCHAR(50);

-- EX 4
ALTER TABLE cities 
ADD id INT AUTO_INCREMENT PRIMARY KEY,
cityName VARCHAR(100),
zipCode VARCHAR(50);

-- EX 5

INSERT INTO clients (lastname, firstName, age, zipCode)
VALUES ("Doe", "John", 42, "80000"),
("Dae", "Jane", 24, "80942"),
("Tete", "Toto", 22, "95000"),
("Tete", "Tata", 22, "95000"),
("Tete", "Titi", 2, "95000"),
("Kessous", "Jeremy", 33, "80000"),
("El Manouzi", "Youness", 24, "75000"),
("Delahaye", "Luc", 34, "34000"),
("Tavernier", "Tibau", 24, "78000"),
("Giraud", "Antoine", 24, "13000");

-- EX 5
INSERT INTO cities (cityName, zipCode)
VALUES ("Doe", "John", 42, "80000"),
("Dae", "Jane", 24, "80942"),
("Tete", "Toto", 22, "95000"),
("Tete", "Tata", 22, "95000"),
("Tete", "Titi", 2, "95000"),
("Kessous", "Jeremy", 33, "80000"),
("El Manouzi", "Youness", 24, "75000"),
("Delahaye", "Luc", 34, "34000"),
("Tavernier", "Tibau", 24, "78000"),
("Giraud", "Antoine", 24, "13000");
