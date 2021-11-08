/*
 Navicat Premium Data Transfer

 Source Server         : LocalMySQL
 Source Server Type    : MySQL
 Source Server Version : 100139
 Source Host           : 127.0.0.1:3306
 Source Schema         : monitoring

 Target Server Type    : MySQL
 Target Server Version : 100139
 File Encoding         : 65001

 Date: 08/11/2021 15:38:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for node_ipal_1
-- ----------------------------
DROP TABLE IF EXISTS `node_ipal_1`;
CREATE TABLE `node_ipal_1`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `datetime` datetime NULL DEFAULT NULL,
  `pH` double NULL DEFAULT NULL,
  `Suhu` double NULL DEFAULT NULL,
  `TSS` double NULL DEFAULT NULL,
  `DO` double NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of node_ipal_1
-- ----------------------------
INSERT INTO `node_ipal_1` VALUES (1, '2021-11-08 02:48:54', 7, 23, 3, 4);

-- ----------------------------
-- Table structure for node_ipal_2
-- ----------------------------
DROP TABLE IF EXISTS `node_ipal_2`;
CREATE TABLE `node_ipal_2`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `datetime` datetime NULL DEFAULT NULL,
  `pH` double NULL DEFAULT NULL,
  `Suhu` double NULL DEFAULT NULL,
  `TSS` double NULL DEFAULT NULL,
  `DO` double NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of node_ipal_2
-- ----------------------------
INSERT INTO `node_ipal_2` VALUES (1, '2021-11-08 03:19:02', 7, 23, 3, 4);
INSERT INTO `node_ipal_2` VALUES (2, '2021-11-08 03:27:43', 8.41, 26.44, 3000, 8318);
INSERT INTO `node_ipal_2` VALUES (3, '2021-11-08 03:28:11', 8.47, 26.44, 3000, 8359);
INSERT INTO `node_ipal_2` VALUES (4, '2021-11-08 03:28:40', 8.44, 26.44, 3000, 8330);
INSERT INTO `node_ipal_2` VALUES (5, '2021-11-08 03:29:09', 8.4, 26.44, 3000, 8346);
INSERT INTO `node_ipal_2` VALUES (6, '2021-11-08 03:29:37', 8.42, 26.44, 3000, 9347);
INSERT INTO `node_ipal_2` VALUES (7, '2021-11-08 03:30:06', 8.42, 26.44, 3000, 8281);
INSERT INTO `node_ipal_2` VALUES (8, '2021-11-08 03:30:35', 8.42, 26.44, 3000, 8371);
INSERT INTO `node_ipal_2` VALUES (9, '2021-11-08 03:31:03', 8.41, 26.44, 3000, 8383);
INSERT INTO `node_ipal_2` VALUES (10, '2021-11-08 03:31:32', 8.42, 26.5, 3000, 8400);
INSERT INTO `node_ipal_2` VALUES (11, '2021-11-08 03:32:01', 8.44, 26.44, 3000, 8400);

-- ----------------------------
-- Table structure for node_ipal_3
-- ----------------------------
DROP TABLE IF EXISTS `node_ipal_3`;
CREATE TABLE `node_ipal_3`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `datetime` datetime NULL DEFAULT NULL,
  `pH` double NULL DEFAULT NULL,
  `Suhu` double NULL DEFAULT NULL,
  `TSS` double NULL DEFAULT NULL,
  `DO` double NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of node_ipal_3
-- ----------------------------

-- ----------------------------
-- Table structure for node_ipal_4
-- ----------------------------
DROP TABLE IF EXISTS `node_ipal_4`;
CREATE TABLE `node_ipal_4`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `datetime` datetime NULL DEFAULT NULL,
  `pH` double NULL DEFAULT NULL,
  `Suhu` double NULL DEFAULT NULL,
  `TSS` double NULL DEFAULT NULL,
  `DO` double NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of node_ipal_4
-- ----------------------------

-- ----------------------------
-- Table structure for node_ipal_5
-- ----------------------------
DROP TABLE IF EXISTS `node_ipal_5`;
CREATE TABLE `node_ipal_5`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `datetime` datetime NULL DEFAULT NULL,
  `pH` double NULL DEFAULT NULL,
  `Suhu` double NULL DEFAULT NULL,
  `TSS` double NULL DEFAULT NULL,
  `DO` double NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of node_ipal_5
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
