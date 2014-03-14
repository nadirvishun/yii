-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2014 at 05:08 PM
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
  `banner_img` char(35) NOT NULL,
  `banner_title` varchar(100) NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `create_user_id` int(10) unsigned DEFAULT NULL,
  `update_user_id` int(10) unsigned DEFAULT NULL,
  `status_id` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `yii_cms_nav`
--

CREATE TABLE IF NOT EXISTS `yii_cms_nav` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nav_url` varchar(1000) DEFAULT NULL,
  `nav_title` int(11) NOT NULL,
  `status_id` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `yii_cms_pruducts`
--

CREATE TABLE IF NOT EXISTS `yii_cms_pruducts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pruducts_name` varchar(255) NOT NULL,
  `pruducts_img` int(255) NOT NULL,
  `pruducts_content` text NOT NULL,
  `type_id` int(10) unsigned NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `create_user_id` int(10) unsigned NOT NULL,
  `update_user_id` int(10) unsigned NOT NULL,
  `status_id` tinyint(2) unsigned NOT NULL,
  `hit` int(255) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `yii_cms_pruducts_type`
--

CREATE TABLE IF NOT EXISTS `yii_cms_pruducts_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pruducts_type_name` char(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `yii_cms_user`
--

INSERT INTO `yii_cms_user` (`id`, `username`, `password`, `realname`, `create_time`, `update_time`, `create_user_id`, `update_user_id`, `status_id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '张海伦', '2014-03-14 17:06:07', '2014-03-14 17:06:07', 1, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
