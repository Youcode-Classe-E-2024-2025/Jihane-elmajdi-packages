-- 1. Création de la base de données
CREATE DATABASE GestionPackagesSimple;
USE gestion_packages;

-- Création des tables
CREATE TABLE Auteurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

CREATE TABLE Packages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    auteur_id INT,
    FOREIGN KEY (auteur_id) REFERENCES Auteurs(id)
);

CREATE TABLE Versions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_version VARCHAR(20) NOT NULL,
    package_id INT,
    FOREIGN KEY (package_id) REFERENCES Packages(id)
);

-- 2. Insertion de données
INSERT INTO Auteurs (nom) VALUES
('Alice Dupont'),
('Mohamed Benali');

INSERT INTO Packages (nom, auteur_id) VALUES
('GestionnaireJS', 1),
('LibrairieGraphique', 2);

INSERT INTO Versions (numero_version, package_id) VALUES
('1.0.0', 1),
('2.0.0', 1),
('1.0.0', 2);

-- 3. Lecture des données
SELECT * FROM Auteurs;
SELECT * FROM Packages;
SELECT * FROM Versions;

-- 4. Requête de jointure simple
SELECT 
    Packages.nom AS Nom_Package,
    Auteurs.nom AS Nom_Auteur,
    Versions.numero_version AS Version
FROM 
    Versions
JOIN 
    Packages ON Versions.package_id = Packages.id
JOIN 
    Auteurs ON Packages.auteur_id = Auteurs.id;