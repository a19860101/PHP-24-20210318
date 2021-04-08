-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-04-08 15:11:27
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
(7, 'Kate', '0963215478', 'kjage@gmail.com', '女', '研究所以上', '3D動畫', '無', '2021-03-30 21:06:25'),
(8, 'Vivian', '0965321548', 'vivi@gmail.com', '女', '研究所以上', '平面設計', 'HELLO', '2021-03-30 21:18:59'),
(12, 'Kelly Lee', '0963258741', '12345798@gmail.com', '女', '研究所以上', '網頁設計,平面設計,3D動畫', 'test', '2021-04-01 20:02:33'),
(13, '陳大華', '0965478912', '123@gmail.com', '男', '國小', '網頁設計', '123456789', '2021-04-01 20:58:26'),
(18, 'Louis', 'asdgasdg', 'asdgasdg', '男', '大專院校', '網頁設計', 'asdgasdg', '2021-04-01 21:39:47'),
(27, '789', '789', '789', '男', '研究所以上', '網頁設計', '789', '2021-04-06 21:25:40');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
