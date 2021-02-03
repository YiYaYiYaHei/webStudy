/*
Navicat MySQL Data Transfer

Source Server         : link
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2018-10-08 09:03:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号',
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1启用2禁用',
  `type_id` int(11) NOT NULL COMMENT '文章类别编号',
  `picname` varchar(255) DEFAULT NULL,
  `addtime` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('31', 'dsdsadadasd', 'dasdasdsadaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '1', '14', '1538734018215804.jpg', '2018-10-05 16:48:16');
INSERT INTO `article` VALUES ('30', 'sfsdfsfd', 'sfdsdf122398708765432', '1', '14', '1538734350123148.jpg', '2018-10-05 16:47:54');
INSERT INTO `article` VALUES ('26', '', '', '1', '13', '1538726683782791.jpg', '2018-10-05 15:54:55');
INSERT INTO `article` VALUES ('29', 'fdsfdsfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', '1', '15', '1538729252838345.jpg', '2018-10-05 16:47:33');
INSERT INTO `article` VALUES ('25', '秩序持续成都市从大Vcccsdasdadxxsxadsc', '的撒的撒', '1', '15', '1538733846793032.jpg', '2018-10-05 15:30:51');
INSERT INTO `article` VALUES ('21', '钢铁是怎样练成的啊啊啊啊', '习大大啊啊啊', '2', '15', '1538723229726247.jpg', '2018-10-05 14:45:57');
INSERT INTO `article` VALUES ('19', '我爱中国', '嘻嘻嘻', '1', '12', '1538723250105040.jpg', '2018-10-05 14:24:09');
INSERT INTO `article` VALUES ('18', '钢铁是怎样练成的', '习大大', '1', '14', '1538720628571031.jpg', '2018-10-05 14:23:49');

-- ----------------------------
-- Table structure for type
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `id` int(10) NOT NULL COMMENT '编号',
  `name` varchar(255) NOT NULL COMMENT '分类名称',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1启用2禁用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of type
-- ----------------------------
INSERT INTO `type` VALUES ('15', '体育类', '1');
INSERT INTO `type` VALUES ('14', '军事类', '1');
INSERT INTO `type` VALUES ('12', '情感类', '1');
INSERT INTO `type` VALUES ('13', '生活类', '1');
INSERT INTO `type` VALUES ('16', '竞赛类', '2');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('23', 'zhangsan', '123');
INSERT INTO `user` VALUES ('19', '李冒妍', '123');
INSERT INTO `user` VALUES ('18', 'huge', '123');
