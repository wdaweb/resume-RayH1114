-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-12-12 16:37:19
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `myresume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '流水號',
  `name` varchar(168) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '原始檔名',
  `type` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '檔案類型',
  `path` varchar(168) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '檔案路徑',
  `create_time` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '產生時間',
  `update_time` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '更新時間',
  `see` tinyint(1) NOT NULL DEFAULT 1 COMMENT '使用與否',
  `note` varchar(168) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '說明',
  `thmb` varchar(168) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `files`
--

INSERT INTO `files` (`id`, `name`, `type`, `path`, `create_time`, `update_time`, `see`, `note`, `thmb`) VALUES
(22, 'O_bank01.jpg', 'image/jpeg', './img/O_bank01.jpg', '2019-12-12 00:51:26', '2019-12-12 00:51:26', 1, 'O_bank', ''),
(31, 'O_bank04.jpg', 'image/jpeg', './img/O_bank04.jpg', '2019-12-12 06:05:10', '2019-12-12 06:48:41', 1, 'O_bank', ''),
(32, 'O_bank02.jpg', 'image/jpeg', './img/O_bank02.jpg', '2019-12-12 06:05:19', '2019-12-12 06:05:19', 1, 'O_bank', ''),
(33, 'O_bank03_2.jpg', 'image/jpeg', './img/O_bank03_2.jpg', '2019-12-12 06:05:29', '2019-12-12 06:05:29', 1, 'O_bank', '');

-- --------------------------------------------------------

--
-- 資料表結構 `mydata`
--

CREATE TABLE `mydata` (
  `id` int(10) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addr` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grad_at` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grad_at2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grad_at3` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutMe` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `mydata`
--

INSERT INTO `mydata` (`id`, `name`, `birthday`, `addr`, `tel`, `grad_at`, `grad_at2`, `grad_at3`, `aboutMe`, `email`) VALUES
(0, '黃湧鋭', '1987-11-14', '新北市蘆洲區', '0979040301', '國立ＯＯ國中', '國立ＯＯ高中', 'Parsons School of Design', '擁有三年設計經驗，五年4A廣告經驗。', 'ray19871114@icloud.com');

-- --------------------------------------------------------

--
-- 資料表結構 `ray_photo`
--

CREATE TABLE `ray_photo` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '流水號',
  `name` varchar(168) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '原始檔名',
  `type` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '檔案類型',
  `path` varchar(168) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '檔案路徑',
  `create_time` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '產生時間',
  `update_time` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '更新時間',
  `see` tinyint(1) NOT NULL DEFAULT 1 COMMENT '使用與否',
  `note` varchar(168) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '說明',
  `thmb` varchar(168) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ray_photo`
--

INSERT INTO `ray_photo` (`id`, `name`, `type`, `path`, `create_time`, `update_time`, `see`, `note`, `thmb`) VALUES
(23, 'Descendant.jpg', 'image/jpeg', './Ray_photo/Descendant.jpg', '2019-12-12 05:24:10', '2019-12-12 06:30:10', 1, 'Ray', '');

-- --------------------------------------------------------

--
-- 資料表結構 `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `design` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UIDesign` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WebDesign` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `skills`
--

INSERT INTO `skills` (`id`, `design`, `UIDesign`, `WebDesign`) VALUES
(0, 'photoshop / illustrator  ', 'adobe XD', 'Javascript / PHP');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL COMMENT '主鍵',
  `acc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `pw` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密碼',
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '姓名',
  `addr` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '地址',
  `tel` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '電話',
  `birthday` date NOT NULL COMMENT '生日',
  `email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '電子郵件'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `acc`, `pw`, `name`, `addr`, `tel`, `birthday`, `email`) VALUES
(0, 'rayH108', '1114', 'RayHuang', '新北市蘆洲區', '0979040301', '1987-11-14', 'ray19871114@icloud.com');

-- --------------------------------------------------------

--
-- 資料表結構 `workexperience`
--

CREATE TABLE `workexperience` (
  `id` int(10) NOT NULL,
  `company1` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date1` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job1` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary1` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutJob1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company2` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date2` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job2` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary2` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutJob2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company3` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date3` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job3` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary3` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutJob3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `workexperience`
--

INSERT INTO `workexperience` (`id`, `company1`, `date1`, `job1`, `salary1`, `aboutJob1`, `company2`, `date2`, `job2`, `salary2`, `aboutJob2`, `company3`, `date3`, `job3`, `salary3`, `aboutJob3`) VALUES
(0, 'Ogilvy', '2017-01-13', 'AD', '50000', '藝術指導 :平面設計 /  腳本發想 / 創意發想', 'Havas', '2014-01-01', 'AAD', '40000', '副藝術指導 : 平面設計 /  腳本發想 / 創意發想', 'Proshinead', '2012-01-01', 'SD', '30000', '資深設計 : 平面設計 /  腳本發想 / 創意發想');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `mydata`
--
ALTER TABLE `mydata`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ray_photo`
--
ALTER TABLE `ray_photo`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `workexperience`
--
ALTER TABLE `workexperience`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=34;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ray_photo`
--
ALTER TABLE `ray_photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=24;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主鍵', AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
