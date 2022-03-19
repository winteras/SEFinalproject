-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-12-21 12:20:33
-- 伺服器版本： 10.4.22-MariaDB
-- PHP 版本： 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `softwareengineer`
--

-- --------------------------------------------------------

--
-- 資料表結構 `airplane`
--

CREATE TABLE `airplane` (
  `airplane_id` varchar(50) NOT NULL,
  `company_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `airplane`
--

INSERT INTO `airplane` (`airplane_id`, `company_id`) VALUES
('CI-123', 1),
('CI-654', 1),
('AI-654', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `airport`
--

CREATE TABLE `airport` (
  `airport_id` int(10) NOT NULL,
  `airport_name` varchar(50) NOT NULL,
  `airport_aka` varchar(50) NOT NULL,
  `severity_level_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `airport`
--

INSERT INTO `airport` (`airport_id`, `airport_name`, `airport_aka`, `severity_level_id`) VALUES
(1, '洛杉磯', 'LAX', 3),
(2, '上海/浦東', 'PVG', 2),
(3, '胡志明市', 'SGN', 1),
(4, '桃園', 'TAOYUAN', 4);

-- --------------------------------------------------------

--
-- 資料表結構 `company`
--

CREATE TABLE `company` (
  `company_id` int(10) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_aka` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_aka`) VALUES
(1, 'Teamw254', 'CI'),
(2, 'Team2w', 'AI');

-- --------------------------------------------------------

--
-- 資料表結構 `flight`
--

CREATE TABLE `flight` (
  `airport_id` int(10) NOT NULL,
  `airplane_id` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `flight`
--

INSERT INTO `flight` (`airport_id`, `airplane_id`, `time`, `status`) VALUES
(1, 'AI-654', '2021-12-16 15:37:48', ''),
(2, 'CI-123', '2021-12-16 15:37:16', ''),
(3, 'CI-654', '2021-12-16 15:37:26', '');

-- --------------------------------------------------------

--
-- 資料表結構 `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(10) NOT NULL,
  `hotel_name` varchar(50) NOT NULL,
  `airport_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `hotel_name`, `airport_id`) VALUES
(1, '酒店1號', 4),
(2, '金錢豹', 4),
(3, '羊咩咩', 4);

-- --------------------------------------------------------

--
-- 資料表結構 `severity`
--

CREATE TABLE `severity` (
  `severity_level_id` int(10) NOT NULL,
  `alert_disease` varchar(50) NOT NULL,
  `area_desc` varchar(50) NOT NULL,
  `severity_level` varchar(50) NOT NULL,
  `chinese_area_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `severity`
--

INSERT INTO `severity` (`severity_level_id`, `alert_disease`, `area_desc`, `severity_level`, `chinese_area_desc`) VALUES
(1, '嚴重特殊傳染性肺炎', 'Vietnam', '第三級:警告(Warning)', '越南'),
(2, '嚴重特殊傳染性肺炎', 'China', '第三級:警告(Warning)', '中國'),
(3, '嚴重特殊傳染性肺炎', 'USA', '第三級:警告(Warning)', '美國'),
(4, '嚴重特殊傳染性肺炎', 'Taiwan', '第二級:警示(Alert)', '台灣');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `airplane`
--
ALTER TABLE `airplane`
  ADD PRIMARY KEY (`airplane_id`),
  ADD KEY `company_id` (`company_id`);

--
-- 資料表索引 `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`airport_id`),
  ADD KEY `severity_level_id` (`severity_level_id`);

--
-- 資料表索引 `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- 資料表索引 `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`airport_id`,`airplane_id`,`time`),
  ADD KEY `airplane_id` (`airplane_id`);

--
-- 資料表索引 `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`),
  ADD KEY `airport_id` (`airport_id`);

--
-- 資料表索引 `severity`
--
ALTER TABLE `severity`
  ADD PRIMARY KEY (`severity_level_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `airplane`
--
ALTER TABLE `airplane`
  ADD CONSTRAINT `airplane_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`);

--
-- 資料表的限制式 `airport`
--
ALTER TABLE `airport`
  ADD CONSTRAINT `airport_ibfk_1` FOREIGN KEY (`severity_level_id`) REFERENCES `severity` (`severity_level_id`);

--
-- 資料表的限制式 `flight`
--
ALTER TABLE `flight`
  ADD CONSTRAINT `flight_ibfk_1` FOREIGN KEY (`airport_id`) REFERENCES `airport` (`airport_id`),
  ADD CONSTRAINT `flight_ibfk_2` FOREIGN KEY (`airplane_id`) REFERENCES `airplane` (`airplane_id`);

--
-- 資料表的限制式 `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`airport_id`) REFERENCES `airport` (`airport_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
