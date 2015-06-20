/*
Navicat MySQL Data Transfer

Source Server         : DarkTibiaFun
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : margonem

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2015-06-20 20:02:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for mapa
-- ----------------------------
DROP TABLE IF EXISTS `mapa`;
CREATE TABLE `mapa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(55) COLLATE utf8_polish_ci NOT NULL,
  `maps` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- ----------------------------
-- Records of mapa
-- ----------------------------
INSERT INTO `mapa` VALUES ('1', 'Ithan', 'data/mapy/ithan3.png');

-- ----------------------------
-- Table structure for npc
-- ----------------------------
DROP TABLE IF EXISTS `npc`;
CREATE TABLE `npc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(255) NOT NULL,
  `obrazek` varchar(255) NOT NULL,
  `mapa` varchar(255) NOT NULL,
  `x` varchar(255) NOT NULL,
  `y` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of npc
-- ----------------------------
INSERT INTO `npc` VALUES ('1', '', '', '', '', '');

-- ----------------------------
-- Table structure for player
-- ----------------------------
DROP TABLE IF EXISTS `player`;
CREATE TABLE `player` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(25) COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(25) COLLATE utf8_polish_ci NOT NULL,
  `nazwa` varchar(25) COLLATE utf8_polish_ci NOT NULL,
  `poziom` int(11) NOT NULL DEFAULT '1',
  `profesja` varchar(50) COLLATE utf8_polish_ci NOT NULL DEFAULT 'none',
  `avatar` varchar(255) COLLATE utf8_polish_ci NOT NULL DEFAULT 'data/avatar/paladyn/m_pal22.gif',
  `x` int(11) NOT NULL DEFAULT '35',
  `y` int(11) NOT NULL DEFAULT '37',
  `mapa` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- ----------------------------
-- Records of player
-- ----------------------------
INSERT INTO `player` VALUES ('1', 'test', '123', 'Fenikss', '1', 'Mag', 'data/avatar/paladyn/m_pal22.gif', '35', '37', '1');
INSERT INTO `player` VALUES ('2', '2', '2', 'matri', '1', 'none', 'data/avatar/paladyn/m_pal22.gif', '35', '37', '1');
