-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2014 at 10:30 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yii_cms`
--
CREATE DATABASE IF NOT EXISTS `yii_cms` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `yii_cms`;

-- --------------------------------------------------------

--
-- Table structure for table `yii_cms_banner`
--

CREATE TABLE IF NOT EXISTS `yii_cms_banner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `banner_url` varchar(1000) DEFAULT NULL,
  `banner_img` char(255) NOT NULL,
  `banner_title` varchar(100) NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `create_user_id` int(10) unsigned DEFAULT NULL,
  `update_user_id` int(10) unsigned DEFAULT NULL,
  `status_id` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `yii_cms_banner`
--

INSERT INTO `yii_cms_banner` (`id`, `banner_url`, `banner_img`, `banner_title`, `create_time`, `update_time`, `create_user_id`, `update_user_id`, `status_id`) VALUES
(1, 'http://www.163.com', 'banner_1395577631.jpg', 'jpg图片', '2014-03-23 20:27:11', '2014-03-23 20:39:30', 2, 1, 1),
(2, 'https://github.com/nadirvishun', 'banner_1395578328.gif', 'gif图片', '2014-03-23 20:32:15', '2014-03-23 20:40:46', 1, 1, 1),
(3, 'http://www.baidu.com', 'banner_1395578117.png', 'png图片', '2014-03-23 20:35:17', '2014-03-23 20:35:17', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `yii_cms_nav`
--

CREATE TABLE IF NOT EXISTS `yii_cms_nav` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nav_url` varchar(1000) DEFAULT NULL,
  `nav_title` char(64) NOT NULL,
  `status_id` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `yii_cms_nav`
--

INSERT INTO `yii_cms_nav` (`id`, `nav_url`, `nav_title`, `status_id`) VALUES
(1, 'http://www.baidu.com', '公司简介', 1);

-- --------------------------------------------------------

--
-- Table structure for table `yii_cms_pruducts`
--

CREATE TABLE IF NOT EXISTS `yii_cms_pruducts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pruducts_name` varchar(255) NOT NULL,
  `pruducts_img` char(255) NOT NULL,
  `pruducts_content` text NOT NULL,
  `type_id` int(10) unsigned NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `create_user_id` int(10) unsigned NOT NULL,
  `update_user_id` int(10) unsigned NOT NULL,
  `status_id` tinyint(2) unsigned NOT NULL,
  `hit` int(255) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `yii_cms_pruducts`
--

INSERT INTO `yii_cms_pruducts` (`id`, `pruducts_name`, `pruducts_img`, `pruducts_content`, `type_id`, `create_time`, `update_time`, `create_user_id`, `update_user_id`, `status_id`, `hit`) VALUES
(1, 'jpg图片', 'pruducts_1395583659.jpg', '<p>\r\n	图片<img alt="" src="/e/Github/yii/yii_cms/upload/pruducts_content/images/steppy04.jpg" style="width: 1920px; height: 1200px;" /></p>\r\n', 1, '2014-03-23 21:57:28', '2014-03-23 22:07:39', 1, 1, 1, 0),
(2, 'gif图片', 'pruducts_1395583144.gif', '<p>\r\n	<img alt="" src="/e/Github/yii/yii_cms/upload/pruducts_content/images/123.gif" style="width: 351px; height: 220px;" /></p>\r\n', 2, '2014-03-23 21:59:04', '2014-03-23 21:59:04', 1, 1, 1, 0),
(3, 'png图片', 'pruducts_1395583194.png', '<p>\r\n	<img alt="" src="/e/Github/yii/yii_cms/upload/pruducts_content/images/logo1.png" style="width: 1000px; height: 707px;" /></p>\r\n', 1, '2014-03-23 21:59:54', '2014-03-23 21:59:54', 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `yii_cms_pruducts_type`
--

CREATE TABLE IF NOT EXISTS `yii_cms_pruducts_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pruducts_type_name` char(60) NOT NULL,
  `pruducts_type_img` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `yii_cms_pruducts_type`
--

INSERT INTO `yii_cms_pruducts_type` (`id`, `pruducts_type_name`, `pruducts_type_img`) VALUES
(1, '钢管', 'pruducts_type_1395929409.jpg'),
(2, '锌锭', 'pruducts_type_1395929384.jpg'),
(3, '有色金属', 'pruducts_type_1395929273.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `yii_cms_status`
--

CREATE TABLE IF NOT EXISTS `yii_cms_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status_name` char(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `yii_cms_status`
--

INSERT INTO `yii_cms_status` (`id`, `status_name`) VALUES
(1, '正常'),
(2, '异常');

-- --------------------------------------------------------

--
-- Table structure for table `yii_cms_user`
--

CREATE TABLE IF NOT EXISTS `yii_cms_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL,
  `password` char(32) NOT NULL,
  `realname` char(6) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `create_user_id` int(10) unsigned DEFAULT NULL,
  `update_user_id` int(10) unsigned DEFAULT NULL,
  `status_id` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `yii_cms_user`
--

INSERT INTO `yii_cms_user` (`id`, `username`, `password`, `realname`, `create_time`, `update_time`, `create_user_id`, `update_user_id`, `status_id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '黑', '2014-03-15 20:20:58', '2014-03-15 20:20:58', 1, 1, 1),
(2, 'vishun', 'e10adc3949ba59abbe56e057f20f883e', '黑', '2014-03-22 23:08:10', '2014-03-24 21:16:34', 1, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
