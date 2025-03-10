
DROP DATABASE IF EXISTS yon;
CREATE DATABASE yon CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE yon;


-- Table structure for table `articles`
DROP TABLE IF EXISTS `articles`;
CREATE TABLE articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    contenu TEXT NOT NULL,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Records of articles
INSERT INTO articles (titre, contenu) VALUES
('Premier article', 'Ceci est le contenu du premier article.'),
('Deuxième article', 'Ceci est le contenu du deuxième article.');


-- Table structure for users
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `passwd` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
); 


-- Records of users
INSERT INTO `users` VALUES (1, 'ak@ak.be', '$2y$10$Htvogfx4qFm5QSqbzP.Bu..wFzfkZUxo3iPW5NzDOYoM.hU7u/5Pq');
