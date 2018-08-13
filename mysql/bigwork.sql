/*
Navicat MySQL Data Transfer

Source Server         : php_studywork
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : bigwork

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-08-13 17:08:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `company_news`
-- ----------------------------
DROP TABLE IF EXISTS `company_news`;
CREATE TABLE `company_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `address` varchar(32) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `employee` char(16) DEFAULT NULL,
  `introduce` varchar(32) DEFAULT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `companyname` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of company_news
-- ----------------------------
INSERT INTO `company_news` VALUES ('1', '1', '龙河大厦', '15105177246', '15105177246@139.com', '20-99', '正处于创业初期，期待有志之士的加入', '2018-08-13 15:56:34', 'i++');

-- ----------------------------
-- Table structure for `company_user`
-- ----------------------------
DROP TABLE IF EXISTS `company_user`;
CREATE TABLE `company_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `companyname` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of company_user
-- ----------------------------
INSERT INTO `company_user` VALUES ('1', 'ABCD', '111111', '2018-08-07 14:42:43');

-- ----------------------------
-- Table structure for `employ`
-- ----------------------------
DROP TABLE IF EXISTS `employ`;
CREATE TABLE `employ` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(32) DEFAULT NULL,
  `position` varchar(32) DEFAULT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `salary` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `record` varchar(32) DEFAULT NULL,
  `education` varchar(32) DEFAULT NULL,
  `express` text,
  `duty` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of employ
-- ----------------------------
INSERT INTO `employ` VALUES ('1', 'i++', 'java开发工程师', '2018-07-06 14:03:36', '5000', '2', '2', '本科', null, null);
INSERT INTO `employ` VALUES ('2', 'aijia软件公司', 'java开发', '2018-08-06 17:04:27', '4000', '5', '1', '大专', '1.开发经验2年以上。2.独立开发过中型网站。3.会数据库优化的优先考虑。。。。。。。。。。。。。。。。。。。。。。。。。。。。', null);
INSERT INTO `employ` VALUES ('3', 'i++', '软件测试工程师', '2018-08-09 15:53:23', '4000', '1', '1', '大专', '1.熟练掌握测试方法2.熟练使用测试工具如jmeter,postman LR,3.至少熟悉一门开发语言', null);

-- ----------------------------
-- Table structure for `resume`
-- ----------------------------
DROP TABLE IF EXISTS `resume`;
CREATE TABLE `resume` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `picture` varchar(128) DEFAULT NULL,
  `sex` varchar(32) DEFAULT NULL,
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `salary` int(11) DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `work_time` datetime DEFAULT NULL,
  `introduce` text,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of resume
-- ----------------------------
INSERT INTO `resume` VALUES ('1', null, '1', '2018-08-10 17:40:35', '6000', '2018-08-08 17:38:32', '2017-08-08 17:38:32', '热爱学习', '1');
INSERT INTO `resume` VALUES ('2', null, '2', '2018-07-25 10:36:10', '8000', '1996-02-19 00:00:00', '1996-02-19 00:00:00', '', '18');

-- ----------------------------
-- Table structure for `resume_send`
-- ----------------------------
DROP TABLE IF EXISTS `resume_send`;
CREATE TABLE `resume_send` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userid` int(11) DEFAULT NULL,
  `employ_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of resume_send
-- ----------------------------
INSERT INTO `resume_send` VALUES ('1', '2018-08-13 10:56:04', '1', '2');
INSERT INTO `resume_send` VALUES ('4', '2018-08-13 14:49:13', '1', '1');

-- ----------------------------
-- Table structure for `store`
-- ----------------------------
DROP TABLE IF EXISTS `store`;
CREATE TABLE `store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `resume_id` int(11) DEFAULT NULL,
  `company` varchar(32) DEFAULT NULL,
  `position` varchar(32) DEFAULT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `salary` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of store
-- ----------------------------
INSERT INTO `store` VALUES ('20', '1', '1', 'i++', 'java开发工程师', '2018-08-13 14:21:50', '5000');
INSERT INTO `store` VALUES ('19', '1', '3', 'i++', '软件测试工程师', '2018-08-13 14:14:49', '4000');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `phone` varchar(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '123456', '2018-08-10 17:40:35', '15062280157', '15062280157@139.com', null);
INSERT INTO `user` VALUES ('15', '1234567', '123456', '2018-07-25 10:09:00', '15062280157', '1602507955@qq.com', null);
INSERT INTO `user` VALUES ('16', '12345678', '123456', '2018-07-25 10:10:08', '15062280157', '1602507955@qq.com', null);
INSERT INTO `user` VALUES ('17', '123456789', '123456', '2018-07-25 10:11:40', '15062280157', '1602507955@qq.com', null);
INSERT INTO `user` VALUES ('18', '1234567890', '123456', '2018-07-25 10:12:46', '15062280157', '1602507955@qq.com', null);
