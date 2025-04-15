-- Étape 1 : Création de la base et des tables (Clés primaires et étrangères)
-- Créer la base de données
CREATE DATABASE zelda_db;
USE zelda_db;

-- Créer la table Personnages
CREATE TABLE Personnages (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Nom VARCHAR(50),
    Role VARCHAR(50),
    Jeu VARCHAR(100)
);

-- Créer la table Actions avec partitionnement par année
CREATE TABLE Actions (
    ID_Action INT AUTO_INCREMENT,
    Personnage_ID INT,
    Type VARCHAR(50),
    Annee INT,
    PRIMARY KEY (ID_Action, Annee),
    FOREIGN KEY (Personnage_ID) REFERENCES Personnages(ID)
);

-- Insérer des données initiales
INSERT INTO Personnages (Nom, Role, Jeu) VALUES
('Link', 'Héros', 'Breath of the Wild'),
('Zelda', 'Princesse', 'Breath of the Wild'),
('Ganondorf', 'Antagoniste', 'Ocarina of Time');

INSERT INTO Actions (Personnage_ID, Type, Annee) VALUES
(1, 'Combat', 2017),
(1, 'Quête', 2017),
(2, 'Diplomatie', 2019),
(3, 'Combat', 2023);

-- Étape 2 : Ajout d’index (Index)
-- Créer un index sur la colonne Type
CREATE INDEX idx_type ON Actions (Type);

-- Vérifier les index
SHOW INDEX FROM Actions;

-- Étape 3 : Transaction sécurisée (Transactions)
-- Transaction réussie
START TRANSACTION;
INSERT INTO Personnages (Nom, Role, Jeu) VALUES ('Impa', 'Sage', 'Breath of the Wild');
INSERT INTO Actions (Personnage_ID, Type, Annee) VALUES (LAST_INSERT_ID(), 'Conseil', 2019);
COMMIT;

-- Transaction avec erreur (pour tester ROLLBACK)
START TRANSACTION;
INSERT INTO Actions (Personnage_ID, Type, Annee) VALUES (999, 'Combat', 2023);
ROLLBACK;

-- Étape 4 : Trigger pour journalisation (Triggers)
-- Créer la table Journal avec le moteur Aria
CREATE TABLE Journal (
    ID_Log INT PRIMARY KEY AUTO_INCREMENT,
    Evenement VARCHAR(100),
    Date_Heure DATETIME
) ENGINE=Aria;

-- Créer un trigger pour journaliser les nouvelles actions
DELIMITER //
CREATE TRIGGER log_nouvelle_action
AFTER INSERT ON Actions
FOR EACH ROW
BEGIN
    INSERT INTO Journal (Evenement, Date_Heure)
    VALUES (CONCAT('Action ajoutée : ', NEW.Type), NOW());
END//
DELIMITER ;

-- Tester le trigger
INSERT INTO Actions (Personnage_ID, Type, Annee) VALUES (1, 'Exploration', 2023);
SELECT * FROM Journal;

-- Étape 5 : Procédure stockée (Procédures stockées)
-- Créer une procédure pour ajouter un personnage et une action
DELIMITER //
CREATE PROCEDURE AjouterPersonnageAction(
    IN nom VARCHAR(50),
    IN role VARCHAR(50),
    IN jeu VARCHAR(100),
    IN type_action VARCHAR(50),
    IN annee INT
)
BEGIN
    DECLARE new_id INT;
    INSERT INTO Personnages (Nom, Role, Jeu) VALUES (nom, role, jeu);
    SET new_id = LAST_INSERT_ID();
    INSERT INTO Actions (Personnage_ID, Type, Annee) VALUES (new_id, type_action, annee);
    SELECT 'Personnage et action ajoutés' AS Message;
END//
DELIMITER ;

-- Tester la procédure
CALL AjouterPersonnageAction('Midna', 'Alliée', 'Twilight Princess', 'Aide', 2019);
SELECT * FROM Personnages;
SELECT * FROM Actions;

-- Étape 6 : Fonction stockée (Fonctions stockées)
-- Créer une fonction pour compter les actions d’un personnage
DELIMITER //
CREATE FUNCTION CompterActions(perso_id INT)
RETURNS INT
BEGIN
    DECLARE nb INT;
    SELECT COUNT(*) INTO nb FROM Actions WHERE Personnage_ID = perso_id;
    RETURN nb;
END//
DELIMITER ;

-- Tester la fonction
SELECT Nom, CompterActions(ID) AS Nb_Actions
FROM Personnages;

-- Étape 7 : Sécurisation (Sécurité)
-- Créer un utilisateur avec lecture seule
CREATE USER 'joueur'@'localhost' IDENTIFIED BY 'Zelda2023!';
GRANT SELECT ON zelda_db.* TO 'joueur'@'localhost';

-- Créer un utilisateur admin sans droit de suppression
CREATE USER 'admin'@'localhost' IDENTIFIED BY 'Hyrule2023!';
GRANT ALL PRIVILEGES ON zelda_db.* TO 'admin'@'localhost';
REVOKE DELETE ON zelda_db.* FROM 'admin'@'localhost';

-- Vérifier les privilèges
SHOW GRANTS FOR 'joueur'@'localhost';
SHOW GRANTS FOR 'admin'@'localhost';


-- Étape 8 : Fonctionnalités spécifiques (MariaDB : Fonctionnalités spécifiques)
-- Ajouter une colonne JSON
ALTER TABLE Personnages ADD Details JSON;
UPDATE Personnages SET Details = '{"arme": "Épée", "niveau": 5}' WHERE Nom = 'Link';

-- Interroger le JSON
SELECT Nom, JSON_EXTRACT(Details, '$.arme') AS Arme FROM Personnages WHERE Nom = 'Link';

-- Créer une table temporaire
CREATE TEMPORARY TABLE TempRapport (
    Nom VARCHAR(50),
    Nb_Actions INT
);
INSERT INTO TempRapport
SELECT Nom, CompterActions(ID) FROM Personnages;
SELECT * FROM TempRapport;



-- ----------------------------------------------------------------------------------------
-- ----------------------------------------------------------------------------------------
-- ----------------------------------------------------------------------------------------

-- ----------------------------------------------------------------------------------------
-- Étape 9 : Optimisation des requêtes (Optimisation)
-- Analyser une requête sans index composite
EXPLAIN SELECT Nom, Type
FROM Personnages
JOIN Actions ON Personnages.ID = Actions.Personnage_ID
WHERE Type = 'Combat';

-- Créer un index composite
CREATE INDEX idx_perso_type ON Actions (Personnage_ID, Type);

-- Re-tester avec EXPLAIN
EXPLAIN SELECT Nom, Type
FROM Personnages
JOIN Actions ON Personnages.ID = Actions.Personnage_ID
WHERE Type = 'Combat';

-- Étape 10 : Gestion des erreurs (Gestion des erreurs et débogage)
-- Modifier la procédure avec gestion d’erreur
DROP PROCEDURE IF EXISTS AjouterPersonnageAction;
DELIMITER //
CREATE PROCEDURE AjouterPersonnageAction(
    IN nom VARCHAR(50),
    IN role VARCHAR(50),
    IN jeu VARCHAR(100),
    IN type_action VARCHAR(50),
    IN annee INT
)
BEGIN
    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
        SELECT 'Erreur : Impossible d’ajouter' AS Message;
    END;
    DECLARE new_id INT;
    INSERT INTO Personnages (Nom, Role, Jeu) VALUES (nom, role, jeu);
    SET new_id = LAST_INSERT_ID();
    INSERT INTO Actions (Personnage_ID, Type, Annee) VALUES (new_id, type_action, annee);
    SELECT 'Personnage et action ajoutés' AS Message;
END//
DELIMITER ;

-- Tester avec une année hors partition (pour déclencher une erreur)
CALL AjouterPersonnageAction('Tingle', 'Marchand', 'Wind Waker', 'Vente', 2026);


