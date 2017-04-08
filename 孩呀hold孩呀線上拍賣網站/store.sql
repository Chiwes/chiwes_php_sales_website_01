-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-04-08 21:46:15
-- 伺服器版本: 10.1.19-MariaDB
-- PHP 版本： 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `store`
--

-- --------------------------------------------------------

--
-- 資料表結構 `customer_order`
--

CREATE TABLE `customer_order` (
  `customer_name` varchar(30) NOT NULL,
  `product` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `customer_order`
--

INSERT INTO `customer_order` (`customer_name`, `product`, `quantity`, `price`, `date`) VALUES
('KIWI', '奇異果', 10, 100, 20170409),
('YellowHan', '巨量奶粉', 20, 1000, 20170422),
('蛋頭翰', '超大奶嘴', 3, 3000, 20170410);

-- --------------------------------------------------------

--
-- 資料表結構 `product_list`
--

CREATE TABLE `product_list` (
  `book_no` varchar(20) NOT NULL DEFAULT '',
  `book_name` varchar(30) NOT NULL DEFAULT '',
  `price` int(11) NOT NULL DEFAULT '0',
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `product_list`
--

INSERT INTO `product_list` (`book_no`, `book_name`, `price`, `content`, `filename`) VALUES
('P022', '啟維吉他技巧大全', 600, '想學吉他就是要每天碰一些些，想要學好歌就是多練多錄，相信自己，好聲音不是夢。', 'yellowwei.jpg'),
('S55555', '冥想的技巧', 10, '冥想這件事情，就是找到一個合適的床，心理存在著一個理由，一個世界，自然就會漸漸進入冥想的狀態', 'think.jpg');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`customer_name`);

--
-- 資料表索引 `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`book_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
