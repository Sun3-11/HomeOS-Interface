-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 24 مايو 2021 الساعة 13:58
-- إصدار الخادم: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeos`
--

-- --------------------------------------------------------

--
-- بنية الجدول `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lag` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `line1` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `line2` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `line3` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `line4` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `line5` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `line6` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `butt1` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `butt2` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `butt3` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `butt4` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `butt5` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `butt6` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `butt7` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `butt8` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `img1` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `img2` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `img3` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `img4` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `img5` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `info`
--

INSERT INTO `info` (`id`, `lag`, `name`, `line1`, `line2`, `line3`, `line4`, `line5`, `line6`, `butt1`, `butt2`, `butt3`, `butt4`, `butt5`, `butt6`, `butt7`, `butt8`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
(1, 'ar', '', 'Hommme', '', '', 'dfsf', '', 'sdfsaf', 'windows', 'home', 'about', 'content', 'signin', 'signup', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pwd`, `status`) VALUES
(1, 'wwss', 'www@gmail.com', '222', 'مستخدم'),
(4, 'sun', 'sun@gmail.com', '123', 'مدير'),
(5, 'sss', 'sss@gmail.com', 'on12', 'مستخدم'),
(7, 'se', 'se@gmail.com', '333', 'مستخدم'),
(9, 'entesar', 'entesar@gmail.com', '123', 'مستخدم'),
(8, 'victoria', 'victoria@gmail.com', '111', 'مستخدم'),
(10, 'alham', 'alham@gmail.com', '222', 'مستخدم'),
(11, 'sosha', 'sosha@gmail.com', '333', 'مدير');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
