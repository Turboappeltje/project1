-- Aanmaken van database genaamd Project1
CREATE DATABASE Project1

-- Tabel genaamd account aanmaken met id email en password.
CREATE TABLE Account (
ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
Email VARCHAR(255) UNIQUE,
Password VARCHAR(255)
);

-- Tabel genaamd Persoon met voornaam Tussenvoegsel achternaam en Gebruikersnaam.
-- Primary key op de dezelfde regel werkt ook
CREATE TABLE Persoon (
Id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
Voornaam VARCHAR(255),
Tussenvoegsel VARCHAR(255),
Achternaam VARCHAR(255),
Gebruikersnaam VARCHAR(255) UNIQUE,
Account_id INT,
FOREIGN KEY (Account_id) REFERENCES Account(id)
);

-- Voegt een admin gebruiker toe aan je account - en persoon tabel
CREATE USER 'Jari'@'localhost' IDENTIFIED BY '12345';
GRANT ALL PRIVILEGES ON *.* TO 'Jari'@'localhost';