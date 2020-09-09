CREATE DATABASE Project1

CREATE TABLE Account ( 
	ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Email VARCHAR(255) UNIQUE,
        Password VARCHAR(255) 
);
CREATE TABLE Persoon (
    Id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Voornaam VARCHAR(255),
    Tussenvoegsel VARCHAR(255),
    Achternaam VARCHAR(255),
    Gebruikersnaam VARCHAR(255) UNIQUE,
    Account_id INT,
    FOREIGN KEY (Account_id) REFERENCES Account(id)
); 
