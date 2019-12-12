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
-- 資料表結構 `workExperience`
--

CREATE TABLE `workExperience` (
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
-- 傾印資料表的資料 `workExperience`
--

INSERT INTO `workExperience` (`id`, `company1`, `date1`, `job1`, `salary1`, `aboutJob1`, `company2`, `date2`, `job2`, `salary2`, `aboutJob2`, `company3`, `date3`, `job3`, `salary3`, `aboutJob3`) VALUES
(18, 'ogilvy', '2017-01-13', 'AD', '50000', '藝術指導 / 平面設計 /  腳本發想 / 創意發想', 'Havas', '2014-01-01', 'AAD', '40000', '藝術指導 / 平面設計 /  腳本發想 / 創意發想', 'proshinead', '2012-01-01', 'SD', '30000', '藝術指導 / 平面設計 /  腳本發想 / 創意發想');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `workExperience`
--
ALTER TABLE `workExperience`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `workExperience`
--
ALTER TABLE `workExperience`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
