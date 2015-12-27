/*
Navicat MySQL Data Transfer

Source Server         : chengxixi
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : top

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-12-27 22:14:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for webs
-- ----------------------------
DROP TABLE IF EXISTS `webs`;
CREATE TABLE `webs` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `webname` varchar(255) NOT NULL,
  `webadress` varchar(255) NOT NULL,
  `flag` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of webs
-- ----------------------------
INSERT INTO `webs` VALUES ('1', '教务在线', 'http://jwzx.cqupt.edu.cn/', '1');
INSERT INTO `webs` VALUES ('2', '红岩网校', 'http://202.202.43.125/', '1');
INSERT INTO `webs` VALUES ('3', 'hao123家', 'http://hao123.com/', '1');
INSERT INTO `webs` VALUES ('4', '百度', 'http://www.baidu.com/', '1');
INSERT INTO `webs` VALUES ('5', '4399小游戏', 'http://www.4399.com/', '1');
INSERT INTO `webs` VALUES ('6', '电影天堂', 'http://www.dytt8.net/', '1');
