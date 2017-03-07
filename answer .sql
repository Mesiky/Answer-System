-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-03-05 15:04:51
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `answer`
--

-- --------------------------------------------------------

--
-- 表的结构 `aswer_que`
--

CREATE TABLE IF NOT EXISTS `aswer_que` (
  `awe_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `awe_tit` varchar(250) NOT NULL DEFAULT '',
  `awe_mark` tinyint(4) unsigned DEFAULT NULL,
  PRIMARY KEY (`awe_id`),
  KEY `awe_tit` (`awe_tit`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `aswer_que`
--

INSERT INTO `aswer_que` (`awe_id`, `awe_tit`, `awe_mark`) VALUES
(1, '本来是别人做过的事，回忆成自己做过的事，这属于', 4),
(6, '宗教改革B文艺复兴C智者运动D启蒙运动', NULL),
(3, '首次对斯大林体制进行改革的是谁', NULL),
(5, '首次对斯大林体制进行改革的是谁', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `aswer_result`
--

CREATE TABLE IF NOT EXISTS `aswer_result` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `aswer_id` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `resa` varchar(80) NOT NULL DEFAULT ' ',
  `resb` varchar(80) NOT NULL DEFAULT ' ',
  `resc` varchar(80) DEFAULT NULL,
  `resd` varchar(80) DEFAULT NULL,
  `rese` varchar(80) DEFAULT NULL,
  `real_res` char(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `aswer_result`
--

INSERT INTO `aswer_result` (`id`, `aswer_id`, `resa`, `resb`, `resc`, `resd`, `rese`, `real_res`) VALUES
(1, 1, '错构', '虚构', '错觉', '记忆减退', '', 'resb'),
(6, 6, '宗教改革', '文艺复兴', '智者运动', '启蒙运动', NULL, 'resa'),
(3, 3, '列宁', '赫鲁晓夫', '戈尔巴乔夫', '勃列日涅夫', NULL, 'resb'),
(5, 5, '列宁', '赫鲁晓夫', '戈尔巴乔夫', '勃列日涅夫', NULL, 'resb');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
