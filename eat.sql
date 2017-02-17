/*
 Navicat MySQL Data Transfer

 Source Server         : 本机
 Source Server Version : 50633
 Source Host           : localhost
 Source Database       : eat

 Target Server Version : 50633
 File Encoding         : utf-8

 Date: 02/17/2017 15:41:55 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `eat_list`
-- ----------------------------
DROP TABLE IF EXISTS `eat_list`;
CREATE TABLE `eat_list` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT '1 早餐 2中餐 3 晚餐',
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `eat_list`
-- ----------------------------
BEGIN;
INSERT INTO `eat_list` VALUES ('1', '清真火腿三明治', '1', '0'), ('2', '心形鸡蛋', '1', '0'), ('3', '健康早餐美味土豆饼', '1', '0'), ('4', '杏仁草莓奶伴早餐', '1', '0'), ('5', '松仔烤南瓜', '1', '0'), ('6', '椰子早餐煎饼', '1', '0'), ('7', '黑米粥', '1', '0'), ('8', '英式早餐', '1', '0'), ('9', '香蕉玛芬', '1', '0'), ('10', '美味早餐意大利面', '1', '0'), ('11', '美式早餐闷考牛肉汉堡', '1', '0'), ('12', '银鱼蛋羹', '1', '0'), ('13', '芝心烤虾土司', '1', '0');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
