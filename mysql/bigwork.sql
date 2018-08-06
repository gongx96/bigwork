/*
Navicat MySQL Data Transfer

Source Server         : 3307
Source Server Version : 50553
Source Host           : localhost:3307
Source Database       : bigwork

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-07-22 22:30:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for employee
-- ----------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salary` int(11) NOT NULL,
  `count` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `education` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `record` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of employee
-- ----------------------------
INSERT INTO `employee` VALUES ('1', 'java', 'aijiajia', '6000', '2', '本科', '一年以上经验', '2018-07-22 13:11:45');
INSERT INTO `employee` VALUES ('2', 'java工程师', 'aijiajia', '6500', '2', '本科', '三年以上经验', '2018-07-22 13:12:30');
INSERT INTO `employee` VALUES ('3', '初级测试工程师', 'aijiajia', '6000', '2', '本科', '一年以上经验', '2018-07-22 13:12:53');

-- ----------------------------
-- Table structure for resume
-- ----------------------------
DROP TABLE IF EXISTS `resume`;
CREATE TABLE `resume` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `worktime` date DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `introduce` text COLLATE utf8_unicode_ci,
  `work_experience` text COLLATE utf8_unicode_ci,
  `edu_experience` text COLLATE utf8_unicode_ci,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of resume
-- ----------------------------
INSERT INTO `resume` VALUES ('1', '1', null, null, null, null, null, null, '2018-07-22 20:32:05');
INSERT INTO `resume` VALUES ('2', '5', '1000-00-00', '0000-00-00', '2341', 'rw2', 'sr', 'rt', '2018-07-22 22:00:39');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sex` tinyint(4) DEFAULT NULL COMMENT '0：男 1：女',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '123456', '0', null, '2018-07-22 19:52:12', '1');
INSERT INTO `user` VALUES ('5', 'zhangr', '123456', '17850033345', '17850033345@139.com', '2018-07-22 21:59:20', '2');
