-- -------------------------------------------------------------
-- Exercice 1 : Création de la base de données et des tables
-- -------------------------------------------------------------

-- 1. Création de la base de données
CREATE DATABASE collection_jeux_video;
USE collection_jeux_video;

-- 2. Création des tables
CREATE TABLE plateformes (
    id_plateforme INT PRIMARY KEY AUTO_INCREMENT,
    nom_plateforme VARCHAR(50) UNIQUE
);

CREATE TABLE editeurs (
    id_editeur INT PRIMARY KEY AUTO_INCREMENT,
    nom_editeur VARCHAR(50) NOT NULL
);

CREATE TABLE jeux (
    id_jeu INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(100) NOT NULL,
    annee_sortie INT,
    id_plateforme INT,
    id_editeur INT,
    FOREIGN KEY (id_plateforme) REFERENCES plateformes(id_plateforme),
    FOREIGN KEY (id_editeur) REFERENCES editeurs(id_editeur)
);

-- 3. Insertion de données
INSERT INTO plateformes (nom_plateforme) VALUES ('Nintendo Switch');
INSERT INTO editeurs (nom_editeur) VALUES ('Nintendo');
INSERT INTO jeux (titre, annee_sortie, id_plateforme, id_editeur) 
VALUES ('The Legend of Zelda: Breath of the Wild', 2017, 1, 1);

-- -------------------------------------------------------------
-- Exercice 2 : Requêtes SELECT avec jointures
-- -------------------------------------------------------------

-- 1. Ajout des données
INSERT INTO plateformes (nom_plateforme) VALUES ('PlayStation 5');
INSERT INTO editeurs (nom_editeur) VALUES ('Square Enix');
INSERT INTO jeux (titre, annee_sortie, id_plateforme, id_editeur) 
VALUES ('Final Fantasy XVI', 2023, 2, 2);

-- 2. Requête avec jointures
SELECT j.titre, p.nom_plateforme, e.nom_editeur
FROM jeux j
JOIN plateformes p ON j.id_plateforme = p.id_plateforme
JOIN editeurs e ON j.id_editeur = e.id_editeur;
/* Résultat attendu :
   titre                            | nom_plateforme    | nom_editeur
   The Legend of Zelda: BotW       | Nintendo Switch   | Nintendo
   Final Fantasy XVI               | PlayStation 5     | Square Enix
*/

-- -------------------------------------------------------------
-- Exercice 3 : Fonctions de chaînes et de dates
-- -------------------------------------------------------------

-- 1. Création de la table joueurs
CREATE TABLE joueurs (
    id_joueur INT PRIMARY KEY AUTO_INCREMENT,
    pseudo VARCHAR(50) NOT NULL,
    date_inscription DATE
);

-- 2. Insertion des joueurs
INSERT INTO joueurs (pseudo, date_inscription) 
VALUES 
    ('Gamer42', '2025-04-01'),
    ('PixelKing', '2025-03-08');

-- 3. Requête avec fonctions
SELECT UPPER(pseudo) AS pseudo_maj, DATEDIFF('2025-04-08', date_inscription) AS jours_inscrits
FROM joueurs;
/* Résultat attendu :
   pseudo_maj  | jours_inscrits
   GAMER42     | 0
   PIXELKING   | 0
*/

-- -------------------------------------------------------------
-- Exercice 4 : Triggers
-- -------------------------------------------------------------

-- 1. Création de la table inventaire
CREATE TABLE inventaire (
    id_inventaire INT PRIMARY KEY AUTO_INCREMENT,
    id_joueur INT,
    id_jeu INT,
    date_achat DATE,
    FOREIGN KEY (id_joueur) REFERENCES joueurs(id_joueur),
    FOREIGN KEY (id_jeu) REFERENCES jeux(id_jeu)
);

-- 2. Création du trigger
DELIMITER //
CREATE TRIGGER before_insert_inventaire
BEFORE INSERT ON inventaire
FOR EACH ROW
BEGIN
    IF NEW.date_achat IS NULL THEN
        SET NEW.date_achat = CURDATE();
    END IF;
END//
DELIMITER ;

-- 3. Test du trigger
INSERT INTO inventaire (id_joueur, id_jeu) VALUES (1, 1); -- Sans date_achat
SELECT * FROM inventaire;
/* Résultat attendu :
   id_inventaire | id_joueur | id_jeu | date_achat
   1             | 1         | 1      | 2025-04-08
*/


-- -------------------------------------------------------------
-- Exercice 5 : Vues
-- -------------------------------------------------------------

-- 1. Création de la vue
CREATE VIEW vue_collection_joueurs AS
SELECT jo.pseudo, j.titre, p.nom_plateforme
FROM inventaire i
JOIN joueurs jo ON i.id_joueur = jo.id_joueur
JOIN jeux j ON i.id_jeu = j.id_jeu
JOIN plateformes p ON j.id_plateforme = p.id_plateforme;

-- 2. Ajout d'une entrée et interrogation
INSERT INTO inventaire (id_joueur, id_jeu, date_achat) 
VALUES (2, 2, '2025-04-07');

SELECT * FROM vue_collection_joueurs;
/* Résultat attendu :
   pseudo    | titre                          | nom_plateforme
   Gamer42   | The Legend of Zelda: BotW     | Nintendo Switch
   PixelKing | Final Fantasy XVI             | PlayStation 5
*/

-- -------------------------------------------------------------
-- Exercice 6 : Optimisation avec index
-- -------------------------------------------------------------

-- 1. Création de l'index
CREATE INDEX idx_titre ON jeux(titre);

-- 2. Requête de recherche
SELECT titre, annee_sortie 
FROM jeux 
WHERE titre LIKE 'F%';
/* Résultat attendu :
   titre              | annee_sortie
   Final Fantasy XVI  | 2023
*/

-- Explication : 
-- L'index sur `titre` accélère les recherches avec LIKE 'F%' car il permet à MariaDB 
-- de localiser rapidement les lignes correspondantes sans parcourir toute la table.