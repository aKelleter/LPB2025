-- 1. Création de la base de données
CREATE DATABASE BoutiqueVetements;
USE BoutiqueVetements;

-- 2. Création de la table Categories
CREATE TABLE Categories (
    id_categorie INT AUTO_INCREMENT PRIMARY KEY,
    nom_categorie VARCHAR(30) NOT NULL
);

-- 3. Création de la table Produits
CREATE TABLE Produits (
    id_produit INT AUTO_INCREMENT PRIMARY KEY,
    nom_produit VARCHAR(50) NOT NULL,
    prix DECIMAL(5,2),
    id_categorie INT,
    FOREIGN KEY (id_categorie) REFERENCES Categories(id_categorie)
);

-- 4. Création de la table Commandes
CREATE TABLE Commandes (
    id_commande INT AUTO_INCREMENT PRIMARY KEY,
    id_produit INT,
    date_commande DATE,
    quantite INT NOT NULL,
    FOREIGN KEY (id_produit) REFERENCES Produits(id_produit)
);

-- 5. Insertion de données d'exemple dans Categories
INSERT INTO Categories (nom_categorie) VALUES
('T-shirts'),
('Pantalons');

-- 6. Insertion de données d'exemple dans Produits
INSERT INTO Produits (nom_produit, prix, id_categorie) VALUES
('T-shirt blanc', 15.99, 1),  -- id_categorie 1 = T-shirts
('Jean slim', 39.99, 2);     -- id_categorie 2 = Pantalons

-- 7. Insertion de données d'exemple dans Commandes
INSERT INTO Commandes (id_produit, date_commande, quantite) VALUES
(1, '2025-04-01', 2),  -- Commande de 2 T-shirts blancs
(2, '2025-04-02', 1);  -- Commande de 1 Jean slim

-- 8. Création de la vue Vue_Commandes_Detaillees
CREATE VIEW Vue_Commandes_Detaillees AS
SELECT 
    p.nom_produit,
    c.nom_categorie,
    com.quantite,
    com.date_commande
FROM 
    Commandes com
JOIN 
    Produits p ON com.id_produit = p.id_produit
JOIN 
    Categories c ON p.id_categorie = c.id_categorie;

-- 9. Test de la vue (facultatif)
SELECT * FROM Vue_Commandes_Detaillees;