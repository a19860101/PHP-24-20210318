-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-03-30 15:58:58
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `php-24-20210318`
--
CREATE DATABASE IF NOT EXISTS `php-24-20210318` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `php-24-20210318`;

-- --------------------------------------------------------

--
-- 資料表結構 `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(10) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `gender` varchar(3) NOT NULL,
  `edu` varchar(5) NOT NULL,
  `skill` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `students`
--

INSERT INTO `students` (`id`, `name`, `phone`, `mail`, `gender`, `edu`, `skill`, `content`, `created_at`) VALUES
(2, 'JOHN', '0912345678', 'asdf@gmail.com', '男', '大專院校', '網頁設計', '', '2021-03-25 20:12:48'),
(5, 'May', '0965321547', 'mary@asdf.com', '女', '大專院校', '', '', '2021-03-30 19:28:22'),
(6, 'Nick', '0987652154', 'nick@gmail.com', '男', '研究所以上', '網頁設計,平面設計', '', '2021-03-30 21:05:28'),
(7, 'Kate', '0963215478', 'kjage@gmail.com', '女', '大專院校', '3D動畫', '無', '2021-03-30 21:06:25'),
(8, 'Vivian', '0965321548', 'vivi@gmail.com', '女', '研究所以上', '平面設計', 'HELLO', '2021-03-30 21:18:59');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
