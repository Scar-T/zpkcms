/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : yii2

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-12-26 17:46:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for auth_assignment
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `user_id` (`user_id`),
  KEY `created_at` (`created_at`),
  KEY `item_name` (`item_name`),
  CONSTRAINT `auth_assignment_ibfk_2` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='管理员授权表';

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
INSERT INTO `auth_assignment` VALUES ('系统管理员', '1', '1448545349');
INSERT INTO `auth_assignment` VALUES ('超级管理员', '1', '1448545360');

-- ----------------------------
-- Table structure for auth_item
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `type` (`type`),
  KEY `name` (`name`),
  KEY `created_at` (`created_at`),
  CONSTRAINT `auth_item_ibfk_2` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='管理权权限条目';

-- ----------------------------
-- Records of auth_item
-- ----------------------------
INSERT INTO `auth_item` VALUES ('/*', '2', null, null, null, '1476842780', '1476842780');
INSERT INTO `auth_item` VALUES ('/admin/*', '2', null, null, null, '1476842762', '1476842762');
INSERT INTO `auth_item` VALUES ('/admin/assignment/*', '2', null, null, null, '1544774595', '1544774595');
INSERT INTO `auth_item` VALUES ('/admin/assignment/assign', '2', null, null, null, '1544774595', '1544774595');
INSERT INTO `auth_item` VALUES ('/admin/assignment/index', '2', null, null, null, '1544774595', '1544774595');
INSERT INTO `auth_item` VALUES ('/admin/assignment/revoke', '2', null, null, null, '1544774595', '1544774595');
INSERT INTO `auth_item` VALUES ('/admin/assignment/view', '2', null, null, null, '1544774595', '1544774595');
INSERT INTO `auth_item` VALUES ('/admin/default/*', '2', null, null, null, '1544774595', '1544774595');
INSERT INTO `auth_item` VALUES ('/admin/default/index', '2', null, null, null, '1544774595', '1544774595');
INSERT INTO `auth_item` VALUES ('/admin/menu/*', '2', null, null, null, '1544774595', '1544774595');
INSERT INTO `auth_item` VALUES ('/admin/menu/create', '2', null, null, null, '1544774595', '1544774595');
INSERT INTO `auth_item` VALUES ('/admin/menu/delete', '2', null, null, null, '1544774595', '1544774595');
INSERT INTO `auth_item` VALUES ('/admin/menu/index', '2', null, null, null, '1544774595', '1544774595');
INSERT INTO `auth_item` VALUES ('/admin/menu/update', '2', null, null, null, '1544774595', '1544774595');
INSERT INTO `auth_item` VALUES ('/admin/menu/view', '2', null, null, null, '1544774595', '1544774595');
INSERT INTO `auth_item` VALUES ('/admin/permission/*', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/permission/assign', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/permission/create', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/permission/delete', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/permission/index', '2', null, null, null, '1544774595', '1544774595');
INSERT INTO `auth_item` VALUES ('/admin/permission/remove', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/permission/update', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/permission/view', '2', null, null, null, '1544774595', '1544774595');
INSERT INTO `auth_item` VALUES ('/admin/role/*', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/role/assign', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/role/create', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/role/delete', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/role/index', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/role/remove', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/role/update', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/role/view', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/route/*', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/route/assign', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/route/create', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/route/index', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/route/refresh', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/route/remove', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/rule/*', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/rule/create', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/rule/delete', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/rule/index', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/rule/update', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/rule/view', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/user/*', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/admin/user/activate', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/admin/user/change-password', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/admin/user/delete', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/user/index', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/user/login', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/user/logout', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/user/request-password-reset', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/admin/user/reset-password', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/admin/user/signup', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/admin/user/view', '2', null, null, null, '1544774596', '1544774596');
INSERT INTO `auth_item` VALUES ('/debug/*', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/debug/default/*', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/debug/default/db-explain', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/debug/default/download-mail', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/debug/default/index', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/debug/default/toolbar', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/debug/default/view', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/debug/user/*', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/debug/user/reset-identity', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/debug/user/set-identity', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/gii/*', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/gii/default/*', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/gii/default/action', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/gii/default/diff', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/gii/default/index', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/gii/default/preview', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/gii/default/view', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/level/*', '2', null, null, null, '1476842767', '1476842767');
INSERT INTO `auth_item` VALUES ('/level/create', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/level/delete', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/level/index', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/level/update', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/level/view', '2', null, null, null, '1544774597', '1544774597');
INSERT INTO `auth_item` VALUES ('/member/*', '2', null, null, null, '1476842770', '1476842770');
INSERT INTO `auth_item` VALUES ('/member/create', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/member/delete', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/member/index', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/member/update', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/member/view', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/message/*', '2', null, null, null, '1476842774', '1476842774');
INSERT INTO `auth_item` VALUES ('/message/create', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/message/delete', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/message/index', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/message/update', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/message/view', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/site/*', '2', null, null, null, '1476842776', '1476842776');
INSERT INTO `auth_item` VALUES ('/site/captcha', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/site/error', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/site/index', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/site/login', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/site/logout', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/user/*', '2', null, null, null, '1476842778', '1476842778');
INSERT INTO `auth_item` VALUES ('/user/create', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/user/delete', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/user/index', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/user/mymessage', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/user/myview', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/user/update', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('/user/view', '2', null, null, null, '1544774598', '1544774598');
INSERT INTO `auth_item` VALUES ('系统管理员', '1', null, null, null, '1448545005', '1448545005');
INSERT INTO `auth_item` VALUES ('超级管理员', '2', null, null, null, '1448544909', '1448544909');

-- ----------------------------
-- Table structure for auth_item_child
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  KEY `parent` (`parent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='管理员权限关系表';

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/assignment/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/assignment/assign');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/assignment/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/assignment/search');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/assignment/view');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/default/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/default/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/menu/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/menu/create');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/menu/delete');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/menu/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/menu/update');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/menu/view');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/assign');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/create');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/delete');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/search');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/update');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/view');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/assign');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/create');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/delete');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/search');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/update');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/view');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/route/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/route/assign');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/route/create');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/route/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/route/search');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/rule/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/rule/create');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/rule/delete');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/rule/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/rule/update');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/rule/view');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/site/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/site/captcha');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/site/error');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/site/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/site/login');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/site/logout');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/user/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/user/create');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/user/delete');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/user/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/user/update');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/user/view');
INSERT INTO `auth_item_child` VALUES ('系统管理员', '超级管理员');

-- ----------------------------
-- Table structure for auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `name` (`name`),
  KEY `created_at` (`created_at`),
  KEY `updated_at` (`updated_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='管理员权限规则表';

-- ----------------------------
-- Records of auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `cKey` varchar(255) DEFAULT NULL COMMENT '键值',
  `cValue` varchar(255) DEFAULT NULL COMMENT '值',
  `createTime` datetime DEFAULT NULL COMMENT '创建时间',
  `modifyTime` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config
-- ----------------------------

-- ----------------------------
-- Table structure for level
-- ----------------------------
DROP TABLE IF EXISTS `level`;
CREATE TABLE `level` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '等级名称',
  `sort` int(11) DEFAULT NULL COMMENT '排序',
  `score` int(11) DEFAULT NULL COMMENT '升级分值',
  `createTime` datetime DEFAULT NULL,
  `modifyTime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of level
-- ----------------------------

-- ----------------------------
-- Table structure for member
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '帐号',
  `password` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '密码',
  `nickname` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '昵称',
  `role` int(11) DEFAULT NULL COMMENT '角色名称',
  `sex` int(11) DEFAULT NULL COMMENT '性别',
  `birthday` datetime DEFAULT NULL COMMENT '生日',
  `status` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '状态',
  `avatarTm` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '头像缩略图',
  `avatar` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '头像',
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '邮箱',
  `createTime` datetime DEFAULT NULL COMMENT '创建时间',
  `modifyTime` datetime DEFAULT NULL COMMENT '修改时间',
  `last_visit` datetime DEFAULT NULL COMMENT '最后登录时间',
  `userType` int(11) DEFAULT NULL COMMENT '用户类别',
  `authkey` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '授权',
  `accessToken` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `remainder` decimal(10,0) DEFAULT '0' COMMENT '余额',
  `integral` int(11) DEFAULT '0' COMMENT '积分',
  `rank` int(11) DEFAULT '0' COMMENT '等级分数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of member
-- ----------------------------
INSERT INTO `member` VALUES ('3', 'hexiaolin', '$2y$13$OHyjEQKqWZizHmZ9DdUBXO50skRBo5NBTgrtZ6/c1fkgwAvU93zdG', '呵呵', '1', '1', '2016-06-28 17:25:20', '1', '/uploads/member/headPicThumbnail/201606231125399553500891.jpg', '/uploads/member/headPic/201606231125393957299314.jpg', 'hxl@lsy.com', '2015-12-22 03:12:55', '2015-12-22 03:12:55', null, '2', null, null, '0', null, null);
INSERT INTO `member` VALUES ('4', 'hexiaolin1', '$2y$13$KGO87C0zbmF8l8rX/odbkOChrVEXnEH3KuudzYUuvd4T1jfhz1HkC', null, '1', '1', null, '1', null, 'images/hd.jpg', null, '2015-12-22 03:16:28', '2015-12-22 03:16:28', null, '2', null, null, '0', null, null);

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(256) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` text,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '权限管理', null, '/admin/default/index', '99', '<i class=\"menu-icon fa fa-cogs\"></i>');
INSERT INTO `menu` VALUES ('2', '权限分配', '1', '/admin/assignment/index', '0', null);
INSERT INTO `menu` VALUES ('3', '菜单管理', '1', '/admin/menu/index', null, null);
INSERT INTO `menu` VALUES ('4', '角色列表', '1', '/admin/role/index', null, null);
INSERT INTO `menu` VALUES ('5', '功能列表', '1', '/admin/route/index', null, null);
INSERT INTO `menu` VALUES ('6', '规则列表', '1', '/admin/permission/index', null, null);
INSERT INTO `menu` VALUES ('7', '后台用户管理', '1', '/user/index', '1', null);
INSERT INTO `menu` VALUES ('8', '会员管理', null, null, '20', '<i class=\"menu-icon fa  fa-users\"></i>');
INSERT INTO `menu` VALUES ('9', '会员列表', '8', '/member/index', '1', null);
INSERT INTO `menu` VALUES ('10', '会员等级', '8', '/level/index', '2', null);

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` bigint(20) DEFAULT NULL COMMENT '消息所属人id',
  `despatcher` bigint(20) DEFAULT NULL COMMENT '发送人id',
  `type` int(11) DEFAULT NULL COMMENT '消息类型',
  `content
内容
content` text COMMENT '消息类容',
  `createTime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of message
-- ----------------------------

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1448203583');
INSERT INTO `migration` VALUES ('m140602_111327_create_menu_table', '1448203587');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '用户名',
  `password` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '密码',
  `role` int(11) DEFAULT NULL COMMENT '角色',
  `sex` int(11) DEFAULT '0' COMMENT '性别',
  `birthday` datetime DEFAULT NULL COMMENT '生日',
  `status` int(255) DEFAULT '1' COMMENT '状态',
  `avatarTm` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '头像缩略图',
  `avatar` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '头像',
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '邮箱',
  `createTime` datetime DEFAULT NULL COMMENT '创建时间',
  `modifyTime` datetime DEFAULT NULL COMMENT '修改时间',
  `last_visit` datetime DEFAULT NULL COMMENT '最后登录时间',
  `userType` int(11) DEFAULT NULL COMMENT '用户类型',
  `authkey` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `accessToken` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `remainder` decimal(10,0) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '$2y$13$Y7psSUjREttue9Z0ghuJ0eyPTQ9KDLbFOV956Dm0nEpwGMa8Zmj3i', '1', '1', '2015-05-29 14:17:57', '1', '/uploads/user/headPicThumbnail/201606230913209440357802.jpg', '/uploads/user/headPic/201606230913204526883922.jpg', '1', '2015-05-29 14:18:21', '2015-05-29 14:18:23', '2015-04-27 15:09:01', '1', '', '', '0');
