CREATE DATABASE yon;
USE yon;

CREATE TABLE articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    contenu TEXT NOT NULL,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Insertion de données d'exemple
INSERT INTO articles (titre, contenu) VALUES
('Premier article', 'Ceci est le contenu du premier article.'),
('Deuxième article', 'Ceci est le contenu du deuxième article.');