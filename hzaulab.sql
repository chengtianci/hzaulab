-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-08-23 09:49:20
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hzaulab`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_gz`
--

CREATE TABLE `tp_gz` (
  `id` varchar(100) NOT NULL COMMENT '温网编号',
  `name` varchar(100) DEFAULT NULL COMMENT '温网名称',
  `location` varchar(100) DEFAULT NULL COMMENT '温网位置',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='光照培养室';

--
-- 转存表中的数据 `tp_gz`
--

INSERT INTO `tp_gz` (`id`, `name`, `location`, `status`) VALUES
('D1-1-1-1', '', '东附楼B102', 0),
('D1-1-1-2', '', '东附楼B102', 0),
('D1-1-1-3', '', '东附楼B102', 0),
('D1-1-2-1', '', '东附楼B102', 0),
('D1-1-2-2', '', '东附楼B102', 0),
('D1-1-2-3', '', '东附楼B102', 0),
('D1-1-3-1', '', '东附楼B102', 0),
('D1-1-3-2', '', '东附楼B102', 0),
('D1-1-3-3', '', '东附楼B102', 0),
('D1-2-1-1', '', '东附楼B102', 0),
('D1-2-1-2', '', '东附楼B102', 0),
('D1-2-1-3', '', '东附楼B102', 0),
('D1-2-1-4', '', '东附楼B102', 0),
('D1-2-1-5', '', '东附楼B102', 0),
('D1-2-2-1', '', '东附楼B102', 0),
('D1-2-2-2', '', '东附楼B102', 0),
('D1-2-2-3', '', '东附楼B102', 0),
('D1-2-2-4', '', '东附楼B102', 0),
('D1-2-2-5', '', '东附楼B102', 0),
('D1-2-3-1', '', '东附楼B102', 0),
('D1-2-3-2', '', '东附楼B102', 0),
('D1-2-3-3', '', '东附楼B102', 0),
('D1-2-3-4', '', '东附楼B102', 0),
('D1-2-3-5', '', '东附楼B102', 0),
('D1-2-4-1', '', '东附楼B102', 0),
('D1-2-4-2', '', '东附楼B102', 0),
('D1-2-4-3', '', '东附楼B102', 0),
('D1-2-4-4', '', '东附楼B102', 0),
('D1-2-4-5', '', '东附楼B102', 0),
('D1-3-1-1', '', '东附楼B102', 0),
('D1-3-1-2', '', '东附楼B102', 0),
('D1-3-1-3', '', '东附楼B102', 0),
('D1-3-1-4', '', '东附楼B102', 0),
('D1-3-1-5', '', '东附楼B102', 0),
('D1-3-2-1', '', '东附楼B102', 0),
('D1-3-2-2', '', '东附楼B102', 0),
('D1-3-2-3', '', '东附楼B102', 0),
('D1-3-2-4', '', '东附楼B102', 0),
('D1-3-2-5', '', '东附楼B102', 0),
('D1-3-3-1', '', '东附楼B102', 0),
('D1-3-3-2', '', '东附楼B102', 0),
('D1-3-3-3', '', '东附楼B102', 0),
('D1-3-3-4', '', '东附楼B102', 0),
('D1-3-3-5', '', '东附楼B102', 0),
('D1-3-4-1', '', '东附楼B102', 0),
('D1-3-4-2', '', '东附楼B102', 0),
('D1-3-4-3', '', '东附楼B102', 0),
('D1-3-4-4', '', '东附楼B102', 0),
('D1-3-4-5', '', '东附楼B102', 0),
('D2-1-1-1', '', '东附楼B102', 0),
('D2-1-1-2', '', '东附楼B102', 0),
('D2-1-1-3', '', '东附楼B102', 0),
('D2-1-2-1', '', '东附楼B102', 0),
('D2-1-2-2', '', '东附楼B102', 0),
('D2-1-2-3', '', '东附楼B102', 0),
('D2-1-3-1', '', '东附楼B102', 0),
('D2-1-3-2', '', '东附楼B102', 0),
('D2-1-3-3', '', '东附楼B102', 0),
('D2-1-4-1', '', '东附楼B102', 0),
('D2-1-4-2', '', '东附楼B102', 0),
('D2-1-4-3', '', '东附楼B102', 0),
('D2-2-1-1', '', '东附楼B102', 0),
('D2-2-1-2', '', '东附楼B102', 0),
('D2-2-1-3', '', '东附楼B102', 0),
('D2-2-1-4', '', '东附楼B102', 0),
('D2-2-1-5', '', '东附楼B102', 0),
('D2-2-2-1', '', '东附楼B102', 0),
('D2-2-2-2', '', '东附楼B102', 0),
('D2-2-2-3', '', '东附楼B102', 0),
('D2-2-2-4', '', '东附楼B102', 0),
('D2-2-2-5', '', '东附楼B102', 0),
('D2-2-3-1', '', '东附楼B102', 0),
('D2-2-3-2', '', '东附楼B102', 0),
('D2-2-3-3', '', '东附楼B102', 0),
('D2-2-3-4', '', '东附楼B102', 0),
('D2-2-3-5', '', '东附楼B102', 0),
('D2-2-4-1', '', '东附楼B102', 0),
('D2-2-4-2', '', '东附楼B102', 0),
('D2-2-4-3', '', '东附楼B102', 0),
('D2-2-4-4', '', '东附楼B102', 0),
('D2-2-4-5', '', '东附楼B102', 0),
('D2-3-1-1', '', '东附楼B102', 0),
('D2-3-1-2', '', '东附楼B102', 0),
('D2-3-1-3', '', '东附楼B102', 0),
('D2-3-1-4', '', '东附楼B102', 0),
('D2-3-1-5', '', '东附楼B102', 0),
('D2-3-2-1', '', '东附楼B102', 0),
('D2-3-2-2', '', '东附楼B102', 0),
('D2-3-2-3', '', '东附楼B102', 0),
('D2-3-2-4', '', '东附楼B102', 0),
('D2-3-2-5', '', '东附楼B102', 0),
('D2-3-3-1', '', '东附楼B102', 0),
('D2-3-3-2', '', '东附楼B102', 0),
('D2-3-3-3', '', '东附楼B102', 0),
('D2-3-3-4', '', '东附楼B102', 0),
('D2-3-3-5', '', '东附楼B102', 0),
('D2-3-4-1', '', '东附楼B102', 0),
('D2-3-4-2', '', '东附楼B102', 0),
('D2-3-4-3', '', '东附楼B102', 0),
('D2-3-4-4', '', '东附楼B102', 0),
('D2-3-4-5', '', '东附楼B102', 0),
('D3-1-1-1', '', '东附楼B103', 0),
('D3-1-1-2', '', '东附楼B103', 0),
('D3-1-1-3', '', '东附楼B103', 0),
('D3-1-2-1', '', '东附楼B103', 0),
('D3-1-2-2', '', '东附楼B103', 0),
('D3-1-2-3', '', '东附楼B103', 0),
('D3-1-3-1', '', '东附楼B103', 0),
('D3-1-3-2', '', '东附楼B103', 0),
('D3-1-3-3', '', '东附楼B103', 0),
('D3-1-4-1', '', '东附楼B103', 0),
('D3-1-4-2', '', '东附楼B103', 0),
('D3-1-4-3', '', '东附楼B103', 0),
('D3-2-1-1', '', '东附楼B103', 0),
('D3-2-1-2', '', '东附楼B103', 0),
('D3-2-1-3', '', '东附楼B103', 0),
('D3-2-2-1', '', '东附楼B103', 0),
('D3-2-2-2', '', '东附楼B103', 0),
('D3-2-2-3', '', '东附楼B103', 0),
('D3-2-3-1', '', '东附楼B103', 0),
('D3-2-3-2', '', '东附楼B103', 0),
('D3-2-3-3', '', '东附楼B103', 0),
('D3-2-4-1', '', '东附楼B103', 0),
('D3-2-4-2', '', '东附楼B103', 0),
('D3-2-4-3', '', '东附楼B103', 0),
('D3-3-1-1', '', '东附楼B103', 0),
('D3-3-1-2', '', '东附楼B103', 0),
('D3-3-1-3', '', '东附楼B103', 0),
('D3-3-2-1', '', '东附楼B103', 0),
('D3-3-2-2', '', '东附楼B103', 0),
('D3-3-2-3', '', '东附楼B103', 0),
('D3-3-3-1', '', '东附楼B103', 0),
('D3-3-3-2', '', '东附楼B103', 0),
('D3-3-3-3', '', '东附楼B103', 0),
('D3-3-4-1', '', '东附楼B103', 0),
('D3-3-4-2', '', '东附楼B103', 0),
('D3-3-4-3', '', '东附楼B103', 0),
('D3-4-1-1', '', '东附楼B103', 0),
('D3-4-1-2', '', '东附楼B103', 0),
('D3-4-1-3', '', '东附楼B103', 0),
('D3-4-2-1', '', '东附楼B103', 0),
('D3-4-2-2', '', '东附楼B103', 0),
('D3-4-2-3', '', '东附楼B103', 0),
('D3-4-3-1', '', '东附楼B103', 0),
('D3-4-3-2', '', '东附楼B103', 0),
('D3-4-3-3', '', '东附楼B103', 0),
('D3-4-4-1', '', '东附楼B103', 0),
('D3-4-4-2', '', '东附楼B103', 0),
('D3-4-4-3', '', '东附楼B103', 0),
('D3-5-1-1', '', '东附楼B103', 0),
('D3-5-1-2', '', '东附楼B103', 0),
('D3-5-1-3', '', '东附楼B103', 0),
('D3-5-2-1', '', '东附楼B103', 0),
('D3-5-2-2', '', '东附楼B103', 0),
('D3-5-2-3', '', '东附楼B103', 0),
('D3-5-3-1', '', '东附楼B103', 0),
('D3-5-3-2', '', '东附楼B103', 0),
('D3-5-3-3', '', '东附楼B103', 0),
('D3-5-4-1', '', '东附楼B103', 0),
('D3-5-4-2', '', '东附楼B103', 0),
('D3-5-4-3', '', '东附楼B103', 0),
('D3-6-1-1', '', '东附楼B103', 0),
('D3-6-1-2', '', '东附楼B103', 0),
('D3-6-1-3', '', '东附楼B103', 0),
('D3-6-2-1', '', '东附楼B103', 0),
('D3-6-2-2', '', '东附楼B103', 0),
('D3-6-2-3', '', '东附楼B103', 0),
('D3-7-1-1', '', '东附楼B103', 0),
('D3-7-1-2', '', '东附楼B103', 0),
('D3-7-1-3', '', '东附楼B103', 0),
('D3-7-2-1', '', '东附楼B103', 0),
('D3-7-2-2', '', '东附楼B103', 0),
('D3-7-2-3', '', '东附楼B103', 0),
('D3-8-1-1', '', '东附楼B103', 0),
('D3-8-1-2', '', '东附楼B103', 0),
('D3-8-1-3', '', '东附楼B103', 0),
('D3-8-2-1', '', '东附楼B103', 0),
('D3-8-2-2', '', '东附楼B103', 0),
('D3-8-2-3', '', '东附楼B103', 0),
('D3-8-3-1', '', '东附楼B103', 0),
('D3-8-3-2', '', '东附楼B103', 0),
('D3-8-3-3', '', '东附楼B103', 0);

-- --------------------------------------------------------

--
-- 表的结构 `tp_js`
--

CREATE TABLE `tp_js` (
  `id` int(11) NOT NULL COMMENT '主键',
  `content` text COMMENT '内容'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='平台介绍性表格，包括平台概况、联系我们、资源共享';

--
-- 转存表中的数据 `tp_js`
--

INSERT INTO `tp_js` (`id`, `content`) VALUES
(1, '<p style="white-space: normal; line-height: 2em; text-indent: 2em;"><span style="text-decoration: none; font-size: 12px;">作物学实验教学中心成立于2002年，2007年批准为湖北省实验教学示范中心，2008年批准为国家级实验教学示范中心建设单位。拥有作物学国家一级重点学科和植物保护学湖北省重点学科，作物学和植物保护学两个一级学科博士后科研流动站；依托平台有作物遗传改良国家重点实验室、国家农作物分子技术育种中心、国家植物基因研究中心、国家油菜工程技术研究中心和国家油菜武汉改良分中心等5个国家级重点实验室与工程中心，7个省部级重点实验室和研发中心，8个校级研发中心。&nbsp;</span></p><p style="white-space: normal; line-height: 2em; text-indent: 2em;"><span style="text-decoration: none; font-size: 12px;">中心有实验及基地用房7560平米，温室、网室群3880平米，校内本科实习用地40多亩，形成了植物生理生化、通用显微观察、多功能化学分析、生态与信息4个大类教学功能实验室，1个大学生创新实验室，1个中心共享平台，1个校内实践创新基地和3个校外大型综合实习基地的实践教学平台，仪器设备总数7860台/件，总值7852万元，可同时开出15个班次不同类型的课程实验、实习。面向全校17个专业的本科生，开设52门实验课程123。</span></p>'),
(2, '<p>这里写要的简介123456</p><p><br/></p>'),
(7, '<p>这里是农田土地发布页面</p>'),
(3, '<h1 id="title" style="margin: 0px; padding: 0px; border: 0px; outline: none; list-style: none; font-stretch: normal; font-size: 22px; line-height: 35px; color: rgb(51, 51, 51); text-align: center;">习近平对四川九寨沟7.0级地震作出重要指示 李克强就抗震救灾工作作出批示</h1><p style="text-align:center;margin-top: 0px; margin-bottom: 15px; padding: 0px; border: 0px; outline: none; list-style: none;"><strong><span style="color:navy">习近平对四川九寨沟7.0级地震作出重要指示</span></strong></p><p style="text-align:center;margin-top: 0px; margin-bottom: 15px; padding: 0px; border: 0px; outline: none; list-style: none; color: navy;"><strong>要求迅速组织力量救灾全力以赴抢救伤员 最大限度减少人员伤亡</strong></p><p style="text-align:center;margin-top: 0px; margin-bottom: 15px; padding: 0px; border: 0px; outline: none; list-style: none;"><strong><span style="color:navy">　李克强就抗震救灾工作作出批示</span></strong>　　</p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; border: 0px; outline: none; list-style: none;">　　新华社北京8月8日电 8月8日21时19分，四川省阿坝州九寨沟县（北纬33.2度，东经103.82度）发生7.0级地震，震源深度20公里。截至8月8日23时30分，地震已造成5人死亡、70余人受伤。</p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; border: 0px; outline: none; list-style: none;">　　地震发生后，中共中央总书记、国家主席、中央军委主席习近平高度重视，立即作出重要指示，要求抓紧了解核实九寨沟7.0级地震灾情，迅速组织力量救灾，全力以赴抢救伤员，疏散安置好游客和受灾群众，最大限度减少人员伤亡。目前正值主汛期，又处旅游旺季，要进一步加强气象预警和地质监测，密切防范各类灾害，切实做好抗灾救灾工作，尽最大努力保障人民群众生命财产安全。</p><p style="margin-top: 0px; margin-bottom: 15px; padding: 0px; border: 0px; outline: none; list-style: none;">　　中共中央政治局常委、国务院总理李克强作出批示，要求抓紧核实灾情，全力组织抢险救援，最大程度减少人员伤亡，妥善转移安置受灾群众。加强震情监测，防范次生灾害。</p><p style="list-style: none; padding: 0px; outline: invert; border: 0px; border-image: none; margin-top: 0px; margin-bottom: 15px;">　　根据习近平指示和李克强要求，国务院已派出由国家减灾委、国务院抗震救灾指挥部组成的工作组赶赴现场指导抗震救灾工作。四川省委、省政府主要负责同志已赶赴现场开展救援工作。四川省、阿坝州已启动Ⅰ级地震应急响应。目前，抗震救灾各项工作正在紧张有序进行123456789请问12323434565yy。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;<br/></p>'),
(4, '<p style="text-align: justify;">这里是培养室的页面发布</p>'),
(5, '<p>这里是实验室的页面发布</p>'),
(6, '<p>这是仪器设备的页面发布</p>');

-- --------------------------------------------------------

--
-- 表的结构 `tp_log`
--

CREATE TABLE `tp_log` (
  `id` int(11) NOT NULL COMMENT '预约记录的主键',
  `username` varchar(20) NOT NULL COMMENT '预约人',
  `kssj` date NOT NULL COMMENT '开始时间',
  `jshj` date NOT NULL COMMENT '结束时间',
  `yiid` varchar(20) NOT NULL COMMENT '仪器的id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='仪器预约的记录表';

-- --------------------------------------------------------

--
-- 表的结构 `tp_pz`
--

CREATE TABLE `tp_pz` (
  `id` varchar(100) NOT NULL COMMENT '设备编号',
  `pzlocation` varchar(100) DEFAULT NULL COMMENT '设备位置',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '设备的状态，0表示被占用，1表示被锁定'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='盆栽设备';

--
-- 转存表中的数据 `tp_pz`
--

INSERT INTO `tp_pz` (`id`, `pzlocation`, `status`) VALUES
('PZ-18', '露天盆栽场', 0),
('PZ-17', '露天盆栽场', 0),
('PZ-16', '露天盆栽场', 0),
('PZ-15', '露天盆栽场', 0),
('PZ-14', '露天盆栽场', 0),
('PZ-13', '露天盆栽场', 0),
('PZ-12', '露天盆栽场', 0),
('PZ-11', '露天盆栽场', 0),
('PZ-10', '露天盆栽场', 0),
('PZ-9', '露天盆栽场', 0),
('PZ-8', '露天盆栽场', 0),
('PZ-7', '露天盆栽场', 0),
('PZ-6', '露天盆栽场', 0),
('PZ-5', '露天盆栽场', 0),
('PZ-4', '露天盆栽场', 0),
('PZ-3', '露天盆栽场', 0),
('PZ-2', '露天盆栽场', 0),
('PZ-1', '露天盆栽场', 0),
('PZ-19', '露天盆栽场', 0),
('PZ-20', '露天盆栽场', 0),
('PZ-21', '露天盆栽场', 0),
('PZ-22', '露天盆栽场', 0),
('PZ-23', '露天盆栽场', 0),
('PZ-24', '露天盆栽场', 0),
('PZ-25', '露天盆栽场', 0),
('PZ-26', '露天盆栽场', 0),
('PZ-27', '露天盆栽场', 0),
('PZ-28', '露天盆栽场', 0),
('PZ-29', '露天盆栽场', 0),
('PZ-30', '露天盆栽场', 0),
('PZ-31', '露天盆栽场', 0),
('PZ-32', '露天盆栽场', 0),
('PZ-33', '露天盆栽场', 0),
('PZ-34', '露天盆栽场', 0),
('PZ-35', '露天盆栽场', 0);

-- --------------------------------------------------------

--
-- 表的结构 `tp_sb`
--

CREATE TABLE `tp_sb` (
  `id` int(11) NOT NULL COMMENT '设备主键',
  `name` varchar(50) DEFAULT NULL COMMENT '设备名称',
  `num` varchar(50) DEFAULT NULL COMMENT '设备编号',
  `location` varchar(50) DEFAULT NULL COMMENT '设备位置',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '设备状态',
  `bigiType` tinyint(4) DEFAULT NULL COMMENT '设备类别',
  `square` int(11) DEFAULT NULL COMMENT '设备占地面积',
  `user` int(11) DEFAULT NULL COMMENT '设备用途',
  `other` text NOT NULL COMMENT '其他用途'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tp_sq`
--

CREATE TABLE `tp_sq` (
  `id` int(11) NOT NULL COMMENT '申请的主键',
  `dateks` varchar(50) NOT NULL COMMENT '申请开始时间',
  `datejs` varchar(50) NOT NULL COMMENT '申请结束时间',
  `uid` varchar(50) NOT NULL COMMENT '申请人信息',
  `status` int(11) NOT NULL COMMENT '申请的状态，是否同意申请'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='这个是场地的申请表';

-- --------------------------------------------------------

--
-- 表的结构 `tp_tz`
--

CREATE TABLE `tp_tz` (
  `id` int(11) NOT NULL COMMENT '通知公告主键',
  `infoname` varchar(100) DEFAULT NULL COMMENT '通知名称',
  `infotime` varchar(100) DEFAULT NULL COMMENT '通知时间',
  `infoowner` varchar(1000) DEFAULT NULL COMMENT '发布者',
  `infoct` text COMMENT '通知的详细内容'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='通知公告模块表';

--
-- 转存表中的数据 `tp_tz`
--

INSERT INTO `tp_tz` (`id`, `infoname`, `infotime`, `infoowner`, `infoct`) VALUES
(1, '习近平向中国国际发展知识中心启动仪式致贺信', '2017-08-22', 'Admin', '<table width="100%" cellpadding="0" cellspacing="0"><tbody><tr class="firstRow"><td style="font-size: 12px;">习近平向中国国际发展知识中心启动仪式致贺信</td></tr><tr><td class="font6" style="font-size: 15px; line-height: 22.5px; font-family: 宋体; text-indent: 12px; padding-right: 8px; padding-left: 8px;"><span style="zoom: 1; float: left; text-indent: 0px; line-height: 22.5px; letter-spacing: 1px;"><p><br/></p><p>　　据新华社北京8月21日电　中国国际发展知识中心启动仪式暨《中国落实2030年可持续发展议程进展报告》发布会21日举行。国家主席习近平致贺信并指出，中国将坚持不懈落实可持续发展议程，推动国家发展不断朝着更高质量、更有效率、更加公平、更可持续的方向前进。希望中心为研究交流发展理念、推动全球落实可持续发展议程作出积极贡献。哈哈哈</p></span></td></tr></tbody></table><p><br/></p>');

-- --------------------------------------------------------

--
-- 表的结构 `tp_wj`
--

CREATE TABLE `tp_wj` (
  `id` int(11) NOT NULL COMMENT '资源数据表自增主键',
  `rsName` varchar(100) NOT NULL COMMENT '资源的名字',
  `rsDesp` text NOT NULL COMMENT '资源的描述',
  `rsWay` varchar(100) NOT NULL COMMENT '资源在服务器上的保存路径',
  `rsType` smallint(6) NOT NULL DEFAULT '0' COMMENT '资源的类型，默认为空，必填项目',
  `rsLength` varchar(32) NOT NULL COMMENT '上传的文件长度',
  `rsOwner` varchar(100) NOT NULL COMMENT '文件上传者',
  `rsDate` date NOT NULL COMMENT '文件上传时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='资源上传模块数据表';

-- --------------------------------------------------------

--
-- 表的结构 `tp_ww`
--

CREATE TABLE `tp_ww` (
  `id` varchar(100) NOT NULL COMMENT '温网室编号',
  `wwname` varchar(100) DEFAULT NULL COMMENT '温网室名称',
  `wwlocation` varchar(100) DEFAULT NULL COMMENT '温网室位置',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '温网室状态',
  `nos` tinyint(4) NOT NULL DEFAULT '0' COMMENT '山南或者山北，默认为山北'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='温网室';

--
-- 转存表中的数据 `tp_ww`
--

INSERT INTO `tp_ww` (`id`, `wwname`, `wwlocation`, `status`, `nos`) VALUES
('SA1-1', '', '', 0, 0),
('SA1-2', '', '', 0, 0),
('SA1-3', '', '', 0, 0),
('SA1-4', '', '', 0, 0),
('SA1-5', '', '', 0, 0),
('SA1-6', '', '', 0, 0),
('SA1-7', '', '', 0, 0),
('SA1-8', '', '', 0, 0),
('SA1-9', '', '', 0, 0),
('SA1-10', '', '', 0, 0),
('SA1-11', '', '', 0, 0),
('SA1-12', '', '', 0, 0),
('SA1-13', '', '', 0, 0),
('SA1-14', '', '', 0, 0),
('SB1-1', '', '', 0, 0),
('SB1-2', '', '', 0, 0),
('SB1-3', '', '', 0, 0),
('SB1-4', '', '', 0, 0),
('SB1-5', '', '', 0, 0),
('SB1-6', '', '', 0, 0),
('SB1-7', '', '', 0, 0),
('SB1-8', '', '', 0, 0),
('SB2-1', '', '', 0, 0),
('SB2-2', '', '', 0, 0),
('SB2-3', '', '', 0, 0),
('SB2-4', '', '', 0, 0),
('SB2-5', '', '', 0, 0),
('SB2-6', '', '', 0, 0),
('SB2-7', '', '', 0, 0),
('SB2-8', '', '', 0, 0),
('SB3-1', '', '', 0, 0),
('SB3-2', '', '', 0, 0),
('SB3-3', '', '', 0, 0),
('SB3-4', '', '', 0, 0),
('SB3-5', '', '', 0, 0),
('SB3-6', '', '', 0, 0),
('SB3-7', '', '', 0, 0),
('SB3-8', '', '', 0, 0),
('SB4-1', '', '', 0, 0),
('SB4-2', '', '', 0, 0),
('SB4-3', '', '', 0, 0),
('SB4-4', '', '', 0, 0),
('SB4-5', '', '', 0, 0),
('SB4-6', '', '', 0, 0),
('SB4-7', '', '', 0, 0),
('SB4-8', '', '', 0, 0),
('SB5-1', '', '', 0, 0),
('SB5-2', '', '', 0, 0),
('SB5-3', '', '', 0, 0),
('SB5-4', '', '', 0, 0),
('SB5-5', '', '', 0, 0),
('SB5-6', '', '', 0, 0),
('SB5-7', '', '', 0, 0),
('SB5-8', '', '', 0, 0),
('SB6-1', '', '', 0, 0),
('SB6-2', '', '', 0, 0),
('SB6-3', '', '', 0, 0),
('SB6-4', '', '', 0, 0),
('SB6-5', '', '', 0, 0),
('SB6-6', '', '', 0, 0),
('SB6-7', '', '', 0, 0),
('SB6-8', '', '', 0, 0),
('SC1-1', '', '', 0, 0),
('SC1-2', '', '', 0, 0),
('SC1-3', '', '', 0, 0),
('SC1-4', '', '', 0, 0),
('SC2-1', '', '', 0, 0),
('SC2-2', '', '', 0, 0),
('SC2-3', '', '', 0, 0),
('SC2-4', '', '', 0, 0),
('N1-1', '', '', 0, 1),
('N1-2', '', '', 0, 1),
('N1-3', '', '', 0, 1),
('N1-4', '', '', 0, 1),
('N1-5', '', '', 0, 1),
('N1-6', '', '', 0, 1),
('N2-1', '', '', 0, 1),
('N2-2', '', '', 0, 1),
('N2-3', '', '', 0, 1),
('N2-4', '', '', 0, 1),
('N2-5', '', '', 0, 1),
('N2-6', '', '', 0, 1),
('N3-1', '', '', 0, 1),
('N3-2', '', '', 0, 1),
('N3-3', '', '', 0, 1),
('N3-4', '', '', 0, 1),
('N3-5', '', '', 0, 1),
('N3-6', '', '', 0, 1),
('N4-1', '', '', 0, 1),
('N4-2', '', '', 0, 1),
('N4-3', '', '', 0, 1),
('N4-4', '', '', 0, 1),
('N4-5', '', '', 0, 1),
('N4-6', '', '', 0, 1),
('N5-1', '', '', 0, 1),
('N5-2', '', '', 0, 1),
('N5-3', '', '', 0, 1),
('N5-4', '', '', 0, 1),
('N5-5', '', '', 0, 1),
('N5-6', '', '', 0, 1),
('N6-1', '', '', 0, 1),
('N6-2', '', '', 0, 1),
('N6-3', '', '', 0, 1),
('N6-4', '', '', 0, 1),
('N6-5', '', '', 0, 1),
('N6-6', '', '', 0, 1),
('SA2-1', '', '', 0, 0),
('SA2-2', NULL, NULL, 0, 0),
('SA2-3', NULL, NULL, 0, 0),
('SA2-4', NULL, NULL, 0, 0),
('SA2-5', NULL, NULL, 0, 0),
('SA2-6', NULL, NULL, 0, 0),
('SA2-7', NULL, NULL, 0, 0),
('SA2-8', NULL, NULL, 0, 0),
('SA2-9', NULL, NULL, 0, 0),
('SA2-10', NULL, NULL, 0, 0),
('SA2-11', NULL, NULL, 0, 0),
('SA2-12', NULL, NULL, 0, 0),
('SA2-13', NULL, NULL, 0, 0),
('SA2-14', NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `tp_yy`
--

CREATE TABLE `tp_yy` (
  `id` int(11) NOT NULL COMMENT '预约表的主键',
  `yqid` varchar(100) DEFAULT NULL COMMENT '一起设备编号',
  `uid` varchar(100) DEFAULT NULL COMMENT '预约人',
  `ks` varchar(100) DEFAULT NULL COMMENT '预约开始时间',
  `js` varchar(100) DEFAULT NULL COMMENT '预约结束时间',
  `status` int(11) DEFAULT NULL COMMENT '是否允许预约',
  `ypwz` varchar(100) DEFAULT NULL COMMENT '这里是样品物种',
  `other` varchar(100) DEFAULT NULL COMMENT '这里是备注',
  `ssname` varchar(100) DEFAULT NULL COMMENT '设施名称',
  `sslocation` varchar(100) DEFAULT NULL COMMENT '设施位置',
  `date` varchar(100) NOT NULL COMMENT '预约生成时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='仪器设备预约表格';

--
-- 转存表中的数据 `tp_yy`
--

INSERT INTO `tp_yy` (`id`, `yqid`, `uid`, `ks`, `js`, `status`, `ypwz`, `other`, `ssname`, `sslocation`, `date`) VALUES
(5, 'PZ-6,PZ-7', 'admin', '2017-08-23', '2017-08-25', 1, '苹果', '123', '露天盆栽', '露天盆栽场', ''),
(6, 'PZ-6,PZ-7', 'admin', '2017-08-23', '2017-08-25', 1, '所有新生', '当天使用', '露天盆栽', '露天盆栽场', '2017-08-23'),
(7, 'PZ-1,PZ-2,PZ-3,PZ-4,PZ-12', 'admin', '2017-08-23', '2017-08-25', 0, '89849', '489489', '露天盆栽', '露天盆栽场', '2017-08-23'),
(8, 'PZ-6,PZ-7', 'admin', '2017-08-23', '2017-08-24', 0, '', '', '露天盆栽', '露天盆栽场', '2017-08-23'),
(9, 'PZ-6,PZ-7', 'admin', '2017-08-23', '2017-08-25', 1, '', '', '露天盆栽', '露天盆栽场', '2017-08-23');

-- --------------------------------------------------------

--
-- 表的结构 `tp_zp`
--

CREATE TABLE `tp_zp` (
  `id` int(12) NOT NULL,
  `imgname` varchar(100) NOT NULL,
  `imgintro` text,
  `imgadd` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp_zp`
--

INSERT INTO `tp_zp` (`id`, `imgname`, `imgintro`, `imgadd`) VALUES
(20, '789', '', './File/2017-08-22/1503394317.jpg'),
(19, '456', '', './File/2017-08-22/1503394309.jpg'),
(18, '123', '', './File/2017-08-22/1503394301.jpg'),
(16, '4256-106.jpg', '', './File/2017-08-22/1503393617.jpg'),
(17, '123', '', './File/2017-08-22/1503394041.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tp_gz`
--
ALTER TABLE `tp_gz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_js`
--
ALTER TABLE `tp_js`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_log`
--
ALTER TABLE `tp_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_pz`
--
ALTER TABLE `tp_pz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_sb`
--
ALTER TABLE `tp_sb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_sq`
--
ALTER TABLE `tp_sq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_tz`
--
ALTER TABLE `tp_tz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_wj`
--
ALTER TABLE `tp_wj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_ww`
--
ALTER TABLE `tp_ww`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_yy`
--
ALTER TABLE `tp_yy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_zp`
--
ALTER TABLE `tp_zp`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tp_js`
--
ALTER TABLE `tp_js`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `tp_log`
--
ALTER TABLE `tp_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '预约记录的主键';
--
-- 使用表AUTO_INCREMENT `tp_sb`
--
ALTER TABLE `tp_sb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '设备主键';
--
-- 使用表AUTO_INCREMENT `tp_sq`
--
ALTER TABLE `tp_sq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '申请的主键';
--
-- 使用表AUTO_INCREMENT `tp_tz`
--
ALTER TABLE `tp_tz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '通知公告主键', AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `tp_wj`
--
ALTER TABLE `tp_wj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '资源数据表自增主键', AUTO_INCREMENT=26;
--
-- 使用表AUTO_INCREMENT `tp_yy`
--
ALTER TABLE `tp_yy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '预约表的主键', AUTO_INCREMENT=10;
--
-- 使用表AUTO_INCREMENT `tp_zp`
--
ALTER TABLE `tp_zp`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
