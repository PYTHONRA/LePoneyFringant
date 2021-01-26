DROP DATABASE IF EXISTS poneyfringant; 
CREATE DATABASE poneyfringant; 
USE poneyfringant; 

CREATE USER IF NOT EXISTS 'poney'@'localhost' IDENTIFIED BY 'fringant'; 
GRANT ALL ON poneyfringant.* TO 'poney'@'localhost';

CREATE TABLE `interetAdherent` (
    `centreInteret_id` int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `adherent_id` int(10) DEFAULT NULL,
    `interet_id` int(10) NOT NULL
)ENGINE=InnoDB; 


CREATE TABLE `adherents`(
  `adherent_id` int NOT NULL AUTO_INCREMENT,
  `prenom` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `numero` int(100) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `code_postal` int(10) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `numero_adhesion` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_adhesion` DATE DEFAULT (curdate()),
  PRIMARY KEY (`adherent_id`),
  UNIQUE KEY `pseudo` (`pseudo`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `numero` (`numero`)
)ENGINE=InnoDB; 

CREATE TABLE`profils` (
    `profil_id` int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `titre` varchar(30) NOT NULL,
    `photo` varchar(30) NOT NULL,
    `description` varchar(200) NOT NULL,
    `adherent_id` int(10) NOT NULL,
    CONSTRAINT `contrainte_cle_etrangere_adherents` FOREIGN KEY(`adherent_id`) REFERENCES `adherents`(`adherent_id`)
)ENGINE=InnoDB; 

CREATE TABLE `Interets` (
    `interet_id` int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nom` varchar(40) NOT NULL
)ENGINE=InnoDB; 

INSERT INTO Interets(nom) VALUES ('sport'),('musique'),('jeux vidéos'),('lecture'),('informatique'),('sorties'),('cuisine'),('aviation'),('mécanique'),('licornes'),
('joaillerie'),('agriculture'),('cinéma'),('politique'),('couture'),('animaux'),('science'),('histoire'),('svt'),('physique-chimie'),('taxidermie'),('philatélie');


INSERT INTO adherents(prenom, nom, pseudo, email, numero, adresse, code_postal, ville, numero_adhesion, password) VALUES('eve', 'jourdan' ,'evejourdan', 'jourdan@blonde.fr', '0612345667', '15 rue de la eve', '13127', 'licorne', 'adh-2045-','$2y$10$O0NcIevZxKjAoa2QwDfeLeaTd3Oxzmrbwa.db5DL8AWa4AEm3xx6G'); -- password

