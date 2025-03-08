/*
 Navicat MariaDB Data Transfer

 Source Server         : Localhost Homebrew (TYUPOI)
 Source Server Type    : MariaDB
 Source Server Version : 110602 (11.6.2-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : login

 Target Server Type    : MariaDB
 Target Server Version : 110602 (11.6.2-MariaDB)
 File Encoding         : 65001

 Date: 08/03/2025 11:56:32
*/

CREATE DATABASE IF NOT EXISTS `login` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `login`;

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `nom`, `email`, `passwd`) VALUES (1, 'Alain', 'ak@ak.be', '$2y$10$Ty4173t7lulv6PPP.9.Kj.OA2k6WdWMI9EQO79Wva1tZuV5ui/vni');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
