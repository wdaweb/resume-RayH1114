-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2019 年 12 月 10 日 16:34
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
-- 資料表結構 `myData`
--

CREATE TABLE `myData` (
  `id` int(10) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addr` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grad_at` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grad_at2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grad_at3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutMe` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `myData`
--

INSERT INTO `myData` (`id`, `name`, `birthday`, `addr`, `tel`, `grad_at`, `grad_at2`, `grad_at3`, `aboutMe`, `email`) VALUES
(18, '黃湧鋭', '1987-11-14', '新北市蘆洲區', '0979040301', '國立ＯＯ國中', '國立ＯＯ高中', '國立ＯＯ大學', '擁有三年設計經驗，五年4A廣告經驗。', 'ray19871114@icloud.com');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `myData`
--
ALTER TABLE `myData`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `myData`
--
ALTER TABLE `myData`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
