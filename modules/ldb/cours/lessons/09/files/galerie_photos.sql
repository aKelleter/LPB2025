CREATE DATABASE galerie_photos CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE galerie_photos;

-- Table des utilisateurs (si nécessaire)
CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Table des albums
CREATE TABLE albums (
    id INT AUTO_INCREMENT PRIMARY KEY,
    utilisateur_id INT, -- Si chaque utilisateur a ses propres albums
    nom VARCHAR(255) NOT NULL,
    description TEXT,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id) ON DELETE SET NULL
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Table des photos
CREATE TABLE photos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    album_id INT NOT NULL,
    titre VARCHAR(255),
    description TEXT,
    chemin_fichier VARCHAR(255) NOT NULL, -- Stocke le chemin de la photo sur le serveur
    date_ajout TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (album_id) REFERENCES albums(id) ON DELETE CASCADE
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Table des tags (facultatif, pour organiser les photos par mot-clé)
CREATE TABLE tags (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) UNIQUE NOT NULL
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Table de liaison entre photos et tags (facultatif)
CREATE TABLE photo_tags (
    photo_id INT NOT NULL,
    tag_id INT NOT NULL,
    PRIMARY KEY (photo_id, tag_id),
    FOREIGN KEY (photo_id) REFERENCES photos(id) ON DELETE CASCADE,
    FOREIGN KEY (tag_id) REFERENCES tags(id) ON DELETE CASCADE
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;