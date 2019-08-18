/*
 Navicat Premium Data Transfer

 Source Server         : Prototype
 Source Server Type    : MySQL
 Source Server Version : 100203
 Source Host           : localhost:3306
 Source Schema         : sdcreative

 Target Server Type    : MySQL
 Target Server Version : 100203
 File Encoding         : 65001

 Date: 18/08/2019 10:36:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fullname` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `phone_number` varchar(14) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `role` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `display_picture` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of account
-- ----------------------------
INSERT INTO `account` VALUES (1, 'admin', '4a7d1ed414474e4033ac29ccb8653d9b', 'Tito Anugerah', 'titoanugerah@gmail.com', '085520902920', 'admin', 'display_picture_1.jpg');
INSERT INTO `account` VALUES (2, 'staf1', '4a7d1ed414474e4033ac29ccb8653d9b', 'Staff satu', 'titoanugerah@gmail.com', '085520902933', 'staff', 'display_picture_2.JPG');
INSERT INTO `account` VALUES (3, 'client', '4a7d1ed414474e4033ac29ccb8653d9b', 'Klien Satu', 'titoanugerah@student.undip.ac.id', '085520902933', 'client', 'display_picture_3.JPG');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(24) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `info` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_admin` int(11) NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (1, 'Pernikahan', 'Coba pernikahan', 1, 'category_1.JPG', 1);
INSERT INTO `category` VALUES (2, 'Sweet Seventeen', NULL, 1, 'category_2.JPG', 1);

-- ----------------------------
-- Table structure for content
-- ----------------------------
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `subtitle` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `content` varchar(2048) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `img_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `img_2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `img_3` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `video` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_admin` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for detail_order
-- ----------------------------
DROP TABLE IF EXISTS `detail_order`;
CREATE TABLE `detail_order`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_order` int(11) NULL DEFAULT NULL,
  `id_package` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of detail_order
-- ----------------------------
INSERT INTO `detail_order` VALUES (2, NULL, 1);
INSERT INTO `detail_order` VALUES (3, NULL, 2);
INSERT INTO `detail_order` VALUES (4, 1, 2);
INSERT INTO `detail_order` VALUES (5, 2, 1);

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) NULL DEFAULT NULL,
  `link_1` varchar(1024) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link_2` varchar(1024) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_order` timestamp(0) NULL DEFAULT current_timestamp(0),
  `date_respond` datetime(0) NULL DEFAULT NULL,
  `date_event` date NULL DEFAULT NULL,
  `date_execution` date NULL DEFAULT NULL,
  `date_payment_dp` datetime(0) NULL DEFAULT NULL,
  `date_payment_full` datetime(0) NULL DEFAULT NULL,
  `date_result_1` datetime(0) NULL DEFAULT NULL,
  `date_result_2` datetime(0) NULL DEFAULT NULL,
  `date_delivered` datetime(0) NULL DEFAULT NULL,
  `date_recieved` datetime(0) NULL DEFAULT NULL,
  `status` int(2) NULL DEFAULT NULL,
  `rating` int(1) NULL DEFAULT NULL,
  `pic_1` int(11) NULL DEFAULT NULL,
  `pic_2` int(11) NULL DEFAULT NULL,
  `pic_3` int(11) NULL DEFAULT NULL,
  `pic_4` int(11) NULL DEFAULT NULL,
  `pic_5` int(11) NULL DEFAULT NULL,
  `pic_6` int(11) NULL DEFAULT NULL,
  `pic_7` int(11) NULL DEFAULT NULL,
  `pic_8` int(11) NULL DEFAULT NULL,
  `pic_9` int(11) NULL DEFAULT NULL,
  `pic_10` int(11) NULL DEFAULT NULL,
  `extra_charge` int(11) NULL DEFAULT NULL,
  `need_hardfile` int(1) NULL DEFAULT NULL,
  `promo` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `address_event` varchar(1024) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `address_sent` varchar(1024) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_admin` int(11) NULL DEFAULT NULL,
  `payment_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `payment_2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `payment_amount_1` int(11) NULL DEFAULT NULL,
  `payment_amount_2` int(11) NULL DEFAULT NULL,
  `delivery_fee` int(11) NULL DEFAULT NULL,
  `awb` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES (1, 3, 'https://drive.google.com/drive/folders/0B6YaxB89celFblJXTXZZZ3QtNms', 'google.com', '2019-07-16 14:42:50', '2019-07-17 17:03:00', '2019-07-17', '2019-07-18', '2019-07-17 17:51:52', '2019-07-18 04:58:39', '2019-07-18 04:07:29', '2019-07-18 05:18:48', '2019-07-18 07:05:27', '2019-07-18 07:22:35', 15, 4, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'ddd', 'dw', 1, 'payment_1_order_1.JPG', 'payment_2_order_1.JPG', 12000, 88000, 15000, '123');
INSERT INTO `order` VALUES (2, 3, NULL, NULL, '2019-07-25 13:26:46', '2019-07-25 13:27:32', '2019-07-18', NULL, '2019-07-25 06:29:47', NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'payment_1_order_2.jpg', NULL, 25000000, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for package
-- ----------------------------
DROP TABLE IF EXISTS `package`;
CREATE TABLE `package`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package` varchar(24) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `price` int(11) NULL DEFAULT NULL,
  `id_category` int(11) NULL DEFAULT NULL,
  `pic_count` int(2) NULL DEFAULT NULL,
  `id_admin` int(11) NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT 1,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of package
-- ----------------------------
INSERT INTO `package` VALUES (1, 'Paket Pernikahan A', 'Ya namanya juga paket', 50000000, 1, 1, 1, 1, 'package_1.JPG');
INSERT INTO `package` VALUES (2, 'Paket Pernikahan Jawa', 'Paket pernikahan jawa, harganya emang dimahalin', 100000, 1, 1, 1, 1, 'package_2.JPG');

-- ----------------------------
-- Table structure for promo
-- ----------------------------
DROP TABLE IF EXISTS `promo`;
CREATE TABLE `promo`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `promo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `promo_code` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `discount` int(11) NULL DEFAULT NULL,
  `quota` int(3) NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `promo_code`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of promo
-- ----------------------------
INSERT INTO `promo` VALUES (1, 'Diskon 5rb', 'KUYCOBAIN', 5000, 100);

-- ----------------------------
-- Table structure for webconf
-- ----------------------------
DROP TABLE IF EXISTS `webconf`;
CREATE TABLE `webconf`  (
  `id` int(1) NOT NULL,
  `website_name` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `host` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `crypto` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `port` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `youtube` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `office_number` varchar(14) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bank_account` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bank` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `phone_number` varchar(14) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of webconf
-- ----------------------------
INSERT INTO `webconf` VALUES (1, 'SDCreative', 'smtp.office365.com', 'Teknik@2019', 'smtp.office365.com', 'TLS', '587', 'a', 'a', 'v', '222', 'Semarang', 'logo.png', NULL, '0262365189', 'BNI', '021212992');

-- ----------------------------
-- View structure for view_detail_order
-- ----------------------------
DROP VIEW IF EXISTS `view_detail_order`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_detail_order` AS SELECT
	a.id,
	a.id_order,
	a.id_package,
	c.package,
	c.price,
	c.pic_count
FROM
	`detail_order` AS a,
	`order` AS b,
	package as c
	
where
a.id_order = b.id
and
a.id_package = c.id ;

-- ----------------------------
-- View structure for view_order
-- ----------------------------
DROP VIEW IF EXISTS `view_order`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_order` AS SELECT
	a.id,
	a.id_customer,
	b.fullname,
	b.email,
	b.phone_number,
	a.date_event,
	a.date_order,
	a.date_respond,
	a.date_payment_dp,
	a.date_execution,
	a.date_payment_full,
	a.date_result_1,
	a.date_result_2,
	a.date_delivered,
	a.date_recieved,
	a.`status`,
	a.rating,
	n.pic_count,
	a.pic_1,
	c.fullname as fullname_pic1,
	c.display_picture as dp_pic1,
a.pic_2,
	d.fullname as fullname_pic2,
	d.display_picture as dp_pic2,
	a.pic_3,
	e.fullname as fullname_pic3,
	e.display_picture as dp_pic3,
	a.pic_4,
	f.fullname as fullname_pic4,
	f.display_picture as dp_pic4,
	a.pic_5,
	g.fullname as fullname_pic5,
	g.display_picture as dp_pic5,
	a.pic_6,
	h.fullname as fullname_pic6,
	h.display_picture as dp_pic6,
	a.pic_7,
	i.fullname as fullname_pic7,
	i.display_picture as dp_pic7,
	a.pic_8,
	j.fullname as fullname_pic8,
	j.display_picture as dp_pic8,
	a.pic_9,
	k.fullname as fullname_pic9,
	k.display_picture as dp_pic9,
	a.pic_10,
	l.fullname as fullname_pic10,
	l.display_picture as dp_pic10,
	a.extra_charge,
	a.need_hardfile,
	a.link_1,
	a.link_2,
	count(m.id) as order_count,
	sum(n.price) as total,
	(IFNULL(a.extra_charge,0) + sum(n.price) - IFNULL(o.discount,0)) as subtotal,
	n.image,
	n.package,
	a.promo,
	IFNULL(o.discount,0) as discount,
	a.address_event,
	a.address_sent,
	a.id_admin,
	p.fullname as admin,
	a.payment_1,
	a.payment_2,
	a.payment_amount_1,
	a.payment_amount_2,
	a.delivery_fee,
	a.awb
	
	
FROM
	`order` as a INNER JOIN
	account as b on a.id_customer = b.id LEFT JOIN
	account as c on a.pic_1	= c.id LEFT JOIN
	account as d on a.pic_2	= d.id LEFT JOIN
	account as e on a.pic_3	= e.id LEFT JOIN
	account as f on a.pic_4	= f.id LEFT JOIN
	account as g on a.pic_5	= g.id LEFT JOIN
	account as h on a.pic_6	= h.id LEFT JOIN
	account as i on a.pic_7	= i.id LEFT JOIN
	account as j on a.pic_8	= j.id LEFT JOIN
	account as k on a.pic_9	= k.id LEFT JOIN
	account as l on a.pic_10	= l.id LEFT JOIN 
	detail_order as m on a.id = m.id_order INNER JOIN 
	package as n on m.id_package = n.id LEFT JOIN 
	promo as o on a.promo = o.promo_code left join 
	account as p on a.id_admin = p.id 
	
	GROUP BY m.id_order ;

-- ----------------------------
-- View structure for view_package
-- ----------------------------
DROP VIEW IF EXISTS `view_package`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_package` AS SELECT
	a.id,
	a.package,
	a.description,
	a.price,
	a.id_category,
	b.category,
	a.pic_count,
	a.id_admin,
	c.fullname,
	a.`status`,
	a.image
	
FROM
	`package` AS a,
	category AS b,
	account as c
	
where
a.id_category = b.id
and
a.id_admin = c.id ;

-- ----------------------------
-- View structure for view_promo
-- ----------------------------
DROP VIEW IF EXISTS `view_promo`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_promo` AS SELECT
	a.id,
	a.promo,
	a.promo_code,
	a.discount,
	a.quota,
	IFNULL(count( a.id ),0) as `usage`,
	(a.quota - count( a.id )) as `available`
	
FROM
	`promo` AS a LEFT JOIN
	`order` AS b on 
	a.promo_code = b.promo
	GROUP BY a.id ;

SET FOREIGN_KEY_CHECKS = 1;
