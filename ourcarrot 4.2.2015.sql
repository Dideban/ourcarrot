/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : ourcarrot

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2015-03-31 12:06:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for oc_comment
-- ----------------------------
DROP TABLE IF EXISTS `oc_comment`;
CREATE TABLE `oc_comment` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `massage` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_user_id_user_comment` (`user_id`),
  KEY `fk_post_id_post_comment` (`post_id`),
  CONSTRAINT `fk_post_id_post_comment` FOREIGN KEY (`post_id`) REFERENCES `oc_post` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_user_id_user_comment` FOREIGN KEY (`user_id`) REFERENCES `oc_user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for oc_post
-- ----------------------------
DROP TABLE IF EXISTS `oc_post`;
CREATE TABLE `oc_post` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `massage` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `editdate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_user_id_user_post` (`user_id`),
  CONSTRAINT `fk_user_id_user_post` FOREIGN KEY (`user_id`) REFERENCES `oc_user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for oc_user
-- ----------------------------
DROP TABLE IF EXISTS `oc_user`;
CREATE TABLE `oc_user` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `userpass` varchar(255) DEFAULT NULL,
  `num_posts` varchar(255) DEFAULT NULL,
  `access` enum('admin','user') DEFAULT 'user',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for oc_space
-- ----------------------------
DROP TABLE IF EXISTS `oc_space`;
CREATE TABLE `oc_space` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `num_members` varchar(255) DEFAULT NULL,
  `num_posts` varchar(255) DEFAULT NULL,
  `access` enum('admin','user') DEFAULT 'user',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for oc_space_members
-- ----------------------------
DROP TABLE IF EXISTS `oc_space_admins`;
CREATE TABLE `oc_space_admins` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `space_id bigint(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
