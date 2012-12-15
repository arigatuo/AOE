-- phpMyAdmin SQL Dump
-- version 3.5.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 12 月 11 日 09:18
-- 服务器版本: 5.5.28
-- PHP 版本: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `AOE`
--

-- --------------------------------------------------------

--
-- 表的结构 `aoe_item`
--

CREATE TABLE IF NOT EXISTS `aoe_item` (
  `item_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT '名称',
  `photo` varchar(255) NOT NULL COMMENT '图片',
  `Details` text NOT NULL COMMENT '详情',
  `ctime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `aoe_item`
--

INSERT INTO `aoe_item` (`item_id`, `title`, `photo`, `Details`, `ctime`) VALUES
(5, '尔康林心如', '/AOE/upload/20121209/5fc5e773a3e7cf5dfa184bb1b551d3da.jpg', 'a:4:{s:9:"yPosition";s:11:"303;662;991";s:12:"lineMaxCount";s:2:"22";s:8:"fontSize";s:2:"16";s:7:"fixLeft";s:1:"3";}', 1355066876),
(6, '哈利波特', '/AOE/upload/20121210/a7ba4fb992a50c4fbd7b1e32fb3f419c.jpg', 'a:2:{s:9:"yPosition";s:15:"200;399;612;812";s:7:"fixLeft";s:1:"8";}', 1355071818);

-- --------------------------------------------------------

--
-- 表的结构 `aoe_subtitle`
--

CREATE TABLE IF NOT EXISTS `aoe_subtitle` (
  `subtitle_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `item_id` bigint(20) unsigned NOT NULL,
  `subtilte_info` text NOT NULL,
  `subtilte_photo` varchar(255) NOT NULL COMMENT '最终图',
  `ctime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`subtitle_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='字幕表' AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `aoe_subtitle`
--

INSERT INTO `aoe_subtitle` (`subtitle_id`, `item_id`, `subtilte_info`, `subtilte_photo`, `ctime`) VALUES
(12, 5, 'O:8:"Subtitle":12:{s:18:"\0CActiveRecord\0_md";N;s:19:"\0CActiveRecord\0_new";b:1;s:26:"\0CActiveRecord\0_attributes";a:2:{s:5:"ctime";i:1355070775;s:7:"item_id";s:1:"5";}s:23:"\0CActiveRecord\0_related";a:0:{}s:17:"\0CActiveRecord\0_c";N;s:18:"\0CActiveRecord\0_pk";N;s:21:"\0CActiveRecord\0_alias";s:1:"t";s:15:"\0CModel\0_errors";a:0:{}s:19:"\0CModel\0_validators";N;s:17:"\0CModel\0_scenario";s:6:"insert";s:14:"\0CComponent\0_e";N;s:14:"\0CComponent\0_m";N;}', './upload/20121210/f02750ad742fdf9709c481ab50ce429d.jpg', 1355070775),
(14, 6, 'O:8:"Subtitle":12:{s:18:"\0CActiveRecord\0_md";N;s:19:"\0CActiveRecord\0_new";b:1;s:26:"\0CActiveRecord\0_attributes";a:2:{s:5:"ctime";i:1355071922;s:7:"item_id";s:1:"6";}s:23:"\0CActiveRecord\0_related";a:0:{}s:17:"\0CActiveRecord\0_c";N;s:18:"\0CActiveRecord\0_pk";N;s:21:"\0CActiveRecord\0_alias";s:1:"t";s:15:"\0CModel\0_errors";a:0:{}s:19:"\0CModel\0_validators";N;s:17:"\0CModel\0_scenario";s:6:"insert";s:14:"\0CComponent\0_e";N;s:14:"\0CComponent\0_m";N;}', './upload/20121210/98e99c294c3ed359971da120a65ea2b2.jpg', 1355071922),
(17, 6, 'O:8:"Subtitle":12:{s:18:"\0CActiveRecord\0_md";N;s:19:"\0CActiveRecord\0_new";b:1;s:26:"\0CActiveRecord\0_attributes";a:2:{s:5:"ctime";i:1355114458;s:7:"item_id";s:1:"6";}s:23:"\0CActiveRecord\0_related";a:0:{}s:17:"\0CActiveRecord\0_c";N;s:18:"\0CActiveRecord\0_pk";N;s:21:"\0CActiveRecord\0_alias";s:1:"t";s:15:"\0CModel\0_errors";a:0:{}s:19:"\0CModel\0_validators";N;s:17:"\0CModel\0_scenario";s:6:"insert";s:14:"\0CComponent\0_e";N;s:14:"\0CComponent\0_m";N;}', './upload/20121210/e6fccd97e0cb588ad196c7ad2ba60a62.jpg', 1355114458),
(20, 6, 'O:8:"Subtitle":12:{s:18:"\0CActiveRecord\0_md";N;s:19:"\0CActiveRecord\0_new";b:1;s:26:"\0CActiveRecord\0_attributes";a:2:{s:5:"ctime";i:1355119621;s:7:"item_id";s:1:"6";}s:23:"\0CActiveRecord\0_related";a:0:{}s:17:"\0CActiveRecord\0_c";N;s:18:"\0CActiveRecord\0_pk";N;s:21:"\0CActiveRecord\0_alias";s:1:"t";s:15:"\0CModel\0_errors";a:0:{}s:19:"\0CModel\0_validators";N;s:17:"\0CModel\0_scenario";s:6:"insert";s:14:"\0CComponent\0_e";N;s:14:"\0CComponent\0_m";N;}', './upload/20121210/bafb011dcac9958269884af4ccc0de2c.jpg', 1355119621),
(21, 6, 'O:8:"Subtitle":12:{s:18:"\0CActiveRecord\0_md";N;s:19:"\0CActiveRecord\0_new";b:1;s:26:"\0CActiveRecord\0_attributes";a:2:{s:5:"ctime";i:1355119650;s:7:"item_id";s:1:"6";}s:23:"\0CActiveRecord\0_related";a:0:{}s:17:"\0CActiveRecord\0_c";N;s:18:"\0CActiveRecord\0_pk";N;s:21:"\0CActiveRecord\0_alias";s:1:"t";s:15:"\0CModel\0_errors";a:0:{}s:19:"\0CModel\0_validators";N;s:17:"\0CModel\0_scenario";s:6:"insert";s:14:"\0CComponent\0_e";N;s:14:"\0CComponent\0_m";N;}', './upload/20121210/065783f82adf85faa538e31e5499e3af.jpg', 1355119650),
(22, 6, 'O:8:"Subtitle":12:{s:18:"\0CActiveRecord\0_md";N;s:19:"\0CActiveRecord\0_new";b:1;s:26:"\0CActiveRecord\0_attributes";a:2:{s:5:"ctime";i:1355119717;s:7:"item_id";s:1:"6";}s:23:"\0CActiveRecord\0_related";a:0:{}s:17:"\0CActiveRecord\0_c";N;s:18:"\0CActiveRecord\0_pk";N;s:21:"\0CActiveRecord\0_alias";s:1:"t";s:15:"\0CModel\0_errors";a:0:{}s:19:"\0CModel\0_validators";N;s:17:"\0CModel\0_scenario";s:6:"insert";s:14:"\0CComponent\0_e";N;s:14:"\0CComponent\0_m";N;}', './upload/20121210/733a2eb3fe6035271ec2044d51dc3690.jpg', 1355119717),
(23, 6, 'O:8:"Subtitle":12:{s:18:"\0CActiveRecord\0_md";N;s:19:"\0CActiveRecord\0_new";b:1;s:26:"\0CActiveRecord\0_attributes";a:2:{s:5:"ctime";i:1355153865;s:7:"item_id";s:1:"6";}s:23:"\0CActiveRecord\0_related";a:0:{}s:17:"\0CActiveRecord\0_c";N;s:18:"\0CActiveRecord\0_pk";N;s:21:"\0CActiveRecord\0_alias";s:1:"t";s:15:"\0CModel\0_errors";a:0:{}s:19:"\0CModel\0_validators";N;s:17:"\0CModel\0_scenario";s:6:"insert";s:14:"\0CComponent\0_e";N;s:14:"\0CComponent\0_m";N;}', './upload/20121210/ebd8e30902f86a11e1a36c46d0ee0e38.jpg', 1355153865);

-- --------------------------------------------------------

--
-- 表的结构 `aoe_user`
--

CREATE TABLE IF NOT EXISTS `aoe_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` int(11) NOT NULL,
  `other_id` varchar(50) NOT NULL COMMENT '第三方帐号id',
  `other_type` enum('sina','qq') NOT NULL COMMENT '第三方帐号类型',
  `other_info` text NOT NULL COMMENT '第三方帐号详情',
  `ctime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`uid`),
  KEY `other_id` (`other_id`,`other_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
