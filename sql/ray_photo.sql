-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-12-12 16:37:57
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

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `ray_photo`
--
ALTER TABLE `ray_photo`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ray_photo`
--
ALTER TABLE `ray_photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
