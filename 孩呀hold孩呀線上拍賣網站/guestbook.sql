-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-04-08 21:45:37
-- 伺服器版本: 10.1.19-MariaDB
-- PHP 版本： 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `guestbook`
--

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `author` varchar(10) NOT NULL DEFAULT '',
  `subject` tinytext NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `message`
--

INSERT INTO `message` (`id`, `author`, `subject`, `content`, `date`) VALUES
(2, '啟維', '我又錄新歌了!', '有Supermarket flower和I will take u home.', '2014-08-01 15:30:03'),
(3, '蛋頭翰', '要去美國十天，有沒有人要一起?', '大概是從舊金山玩到紐約的概念，任務是要花掉我種樂透的100萬獎金', '2014-08-01 15:32:34'),
(4, 'JAYJAY', '大家好我是元智林俊傑JAYJAY。', '新歌雖然沒啟維的好，但還是能來我官網聽聽', '2014-08-01 15:35:54'),
(5, '皮卡丘', '匹咖啾匹咖啾啾', '我的新影集也出來囉，叫皮卡寶貝', '2014-08-01 15:38:29'),
(6, 'YellowHan', '我的新書也出來囉', '冥想才是王道', '2014-08-01 15:40:55'),
(7, 'Hank', '有人要學吉他嗎', '最近去學了很多的吉他fingerstyle技巧，有興趣的人可以來跟我學。', '2014-08-01 15:43:24'),
(8, '賴氏', '來做畢業歌', '我們團隊裡有超猛主唱啟維，誰要加加?', '2014-08-01 15:48:06'),
(9, '正薇', '我最近改名字囉?大家不要叫錯了~', '我改名叫曾正葳。', '2014-08-01 15:52:02'),
(10, 'Sandy', '我是老外殺手', '多國語言樣樣通。', '2014-08-01 15:54:50'),
(11, '阿羊', '最近有學防身術', '啟維很猛，可以找他教妳。', '2014-08-01 15:58:59'),
(12, '王冠', '實習好累', '有人會Python嗎', '2014-08-01 16:01:06'),
(26, '小峻', '想認識名媛先過我這關', '尤其是Brindy。', '2004-08-01 21:31:06'),
(28, 'David', 'I want to post a command', 'Can I?', '2017-04-08 11:47:37'),
(29, 'Micheal', 'i make a coffee', 'i am good at making a cup of coffee.', '2017-04-08 12:05:16');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
