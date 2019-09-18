-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 03:21 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satta`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `admin_img` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `g` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `lastname`, `username`, `admin_img`, `email`, `g`, `country`, `city`, `phone`, `password`, `date`) VALUES
(4, 'Satta', 'Bazar', 'sattabazar', '', 'sattabazar@gmail.com', 'male', 'Pakistan', 'Karachi', '0000000000', '123', '2019-03-10 00:44:48');

-- --------------------------------------------------------

--
-- Table structure for table `allbid`
--

CREATE TABLE `allbid` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `open` varchar(50) NOT NULL,
  `biding` varchar(50) NOT NULL,
  `bidnumber` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allbid`
--

INSERT INTO `allbid` (`id`, `userid`, `username`, `email`, `cityname`, `open`, `biding`, `bidnumber`, `point`, `date_time`) VALUES
(77, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR NIGHT', 'Open', 'Single', 1, 7, '2019-06-28 18:07:05'),
(78, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR NIGHT', 'Open', 'Single', 4, 9, '2019-06-28 18:07:05'),
(79, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR NIGHT', 'Open', 'Single', 7, 9, '2019-06-28 18:07:05'),
(80, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR NIGHT', 'Open', 'Single', 9, 8, '2019-06-28 18:07:05'),
(81, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MAIN MUMBAI', 'Open', 'Jodi', 6, 7, '2019-06-28 18:07:22'),
(82, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR DAY', 'Open', 'Single Patti', 8, 8, '2019-06-28 18:07:42'),
(83, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR DAY', 'Open', 'Single Patti', 8, 5, '2019-06-28 18:07:42'),
(84, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR NIGHT', 'Open', 'Double Patti', 7, 55, '2019-06-28 18:08:04'),
(85, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR NIGHT', 'Open', 'Double Patti', 4, 5, '2019-06-28 18:08:04'),
(86, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR NIGHT', 'Open', 'Double Patti', 33, 4, '2019-06-28 18:08:04'),
(87, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'RAJDHANI NIGHT', 'Open', 'Tripal Patti', 7, 67, '2019-06-28 18:08:30'),
(88, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'RAJDHANI NIGHT', 'Open', 'Tripal Patti', 6, 55, '2019-06-28 18:08:30'),
(89, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'RAJDHANI NIGHT', 'Open', 'Tripal Patti', 55, 76, '2019-06-28 18:08:30'),
(90, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'RAJDHANI NIGHT', 'Open', 'Tripal Patti', 55, 767, '2019-06-28 18:08:30'),
(91, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'RAJDHANI NIGHT', 'Open', 'Tripal Patti', 6, 6, '2019-06-28 18:08:30');

-- --------------------------------------------------------

--
-- Table structure for table `doublepatti`
--

CREATE TABLE `doublepatti` (
  `id` int(11) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `citynametype` varchar(50) NOT NULL,
  `open` varchar(50) NOT NULL,
  `timing` varchar(50) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doublepatti`
--

INSERT INTO `doublepatti` (`id`, `cityname`, `citynametype`, `open`, `timing`, `date_time`) VALUES
(5, 'MADHUR NIGHT', 'MADHUR NIGHT Open', 'Open', '02:39 PM', '2019-06-25 23:44:43'),
(7, 'MADHUR DAY', 'MADHUR DAY Close', 'Close', '00:39 PM', '2019-06-25 23:45:07');

-- --------------------------------------------------------

--
-- Table structure for table `doublepattibid`
--

CREATE TABLE `doublepattibid` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `open` varchar(50) NOT NULL,
  `biding` varchar(50) NOT NULL,
  `doublepattinumber` varchar(50) NOT NULL,
  `bidamount` double NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doublepattibid`
--

INSERT INTO `doublepattibid` (`id`, `userid`, `username`, `email`, `cityname`, `open`, `biding`, `doublepattinumber`, `bidamount`, `date_time`) VALUES
(13, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR NIGHT', 'Open', 'Double Patti', '7', 55, '2019-06-28 18:08:04'),
(14, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR NIGHT', 'Open', 'Double Patti', '4', 5, '2019-06-28 18:08:04'),
(15, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR NIGHT', 'Open', 'Double Patti', '33', 4, '2019-06-28 18:08:04');

-- --------------------------------------------------------

--
-- Table structure for table `dpbid`
--

CREATE TABLE `dpbid` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `n0` int(11) NOT NULL,
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL,
  `n4` int(11) NOT NULL,
  `n5` int(11) NOT NULL,
  `n6` int(11) NOT NULL,
  `n7` int(11) NOT NULL,
  `n8` int(11) NOT NULL,
  `n9` int(11) NOT NULL,
  `n10` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dpbid`
--

INSERT INTO `dpbid` (`id`, `userid`, `username`, `email`, `cityname`, `n0`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `n8`, `n9`, `n10`, `date_time`) VALUES
(2, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'RAJDHANI NIG', 0, 5, 6, 0, 0, 0, 0, 0, 0, 0, 11, '2019-06-25 03:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `fbid`
--

CREATE TABLE `fbid` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `n0` int(11) NOT NULL,
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL,
  `n4` int(11) NOT NULL,
  `n5` int(11) NOT NULL,
  `n6` int(11) NOT NULL,
  `n7` int(11) NOT NULL,
  `n8` int(11) NOT NULL,
  `n9` int(11) NOT NULL,
  `n10` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fbid`
--

INSERT INTO `fbid` (`id`, `userid`, `username`, `email`, `cityname`, `n0`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `n8`, `n9`, `n10`, `date_time`) VALUES
(2, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MAIN MUMBAI', 0, 7, 0, 0, 0, 0, 0, 0, 6, 0, 0, '2019-06-25 03:19:03');

-- --------------------------------------------------------

--
-- Table structure for table `fullsangam`
--

CREATE TABLE `fullsangam` (
  `id` int(11) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `citynametype` varchar(50) NOT NULL,
  `open` varchar(50) NOT NULL,
  `timing` varchar(50) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fullsangam`
--

INSERT INTO `fullsangam` (`id`, `cityname`, `citynametype`, `open`, `timing`, `date_time`) VALUES
(5, 'MADHUR NIGHT', 'MADHUR NIGHT Close', 'Close', '02:39 PM', '2019-06-25 23:45:52'),
(6, 'MAIN MUMBAI', 'MAIN MUMBAI Open', 'Open', '10:39 PM', '2019-06-25 23:45:59');

-- --------------------------------------------------------

--
-- Table structure for table `fullsangambid`
--

CREATE TABLE `fullsangambid` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `open` varchar(50) NOT NULL,
  `biding` varchar(50) NOT NULL,
  `closepatti` varchar(50) NOT NULL,
  `openpatti` double NOT NULL,
  `amount` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fullsangambid`
--

INSERT INTO `fullsangambid` (`id`, `userid`, `username`, `email`, `cityname`, `open`, `biding`, `closepatti`, `openpatti`, `amount`, `date_time`) VALUES
(12, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR NIGHT', 'Close', 'Full Sangam', '9', 5, 34, '2019-06-28 18:06:30'),
(13, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MAIN MUMBAI', 'Open', 'Full Sangam', '9', 6, 359, '2019-06-28 18:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `halfsangam`
--

CREATE TABLE `halfsangam` (
  `id` int(11) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `citynametype` varchar(50) NOT NULL,
  `open` varchar(50) NOT NULL,
  `timing` varchar(50) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halfsangam`
--

INSERT INTO `halfsangam` (`id`, `cityname`, `citynametype`, `open`, `timing`, `date_time`) VALUES
(5, 'MAIN MUMBAI', 'MAIN MUMBAI Open', 'Open', '00:39 PM', '2019-06-25 23:45:32'),
(6, 'MADHUR NIGHT', 'MADHUR NIGHT Open', 'Open', '14:38 PM', '2019-06-25 23:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `halfsangambid`
--

CREATE TABLE `halfsangambid` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `biding` varchar(50) NOT NULL,
  `ank` varchar(50) NOT NULL,
  `anks` varchar(50) NOT NULL,
  `patti` varchar(50) NOT NULL,
  `pattis` double NOT NULL,
  `amount` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halfsangambid`
--

INSERT INTO `halfsangambid` (`id`, `userid`, `username`, `email`, `cityname`, `biding`, `ank`, `anks`, `patti`, `pattis`, `amount`, `date_time`) VALUES
(18, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MAIN MUMBAI Open', 'Half Sangam', 'Close Ank', '2', 'Open Patti', 5, 34, '2019-06-28 18:05:48'),
(19, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR NIGHT Open', 'Half Sangam', 'Open Ank', '7', 'Close Patti', 8, 34, '2019-06-28 18:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `hbid`
--

CREATE TABLE `hbid` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `n0` int(11) NOT NULL,
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL,
  `n4` int(11) NOT NULL,
  `n5` int(11) NOT NULL,
  `n6` int(11) NOT NULL,
  `n7` int(11) NOT NULL,
  `n8` int(11) NOT NULL,
  `n9` int(11) NOT NULL,
  `n10` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hbid`
--

INSERT INTO `hbid` (`id`, `userid`, `username`, `email`, `cityname`, `n0`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `n8`, `n9`, `n10`, `date_time`) VALUES
(2, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MAIN MUMBAI', 0, 0, 6, 0, 0, 0, 0, 0, 0, 7, 13, '2019-06-25 03:18:45');

-- --------------------------------------------------------

--
-- Table structure for table `insertgamerate`
--

CREATE TABLE `insertgamerate` (
  `id` int(11) NOT NULL,
  `gametype` varchar(50) NOT NULL,
  `bidamount` varchar(50) NOT NULL,
  `winamount` varchar(50) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insertgamerate`
--

INSERT INTO `insertgamerate` (`id`, `gametype`, `bidamount`, `winamount`, `date_time`) VALUES
(1, 'Half Sangam', '10', '100', '2019-06-20 18:51:38'),
(2, 'Double Patti', '10', '100', '2019-06-20 18:51:48'),
(3, 'Single', '10', '100', '2019-06-20 18:52:02'),
(4, 'Full Sangam', '10', '100', '2019-06-20 18:52:12'),
(5, 'Tripal Patti', '10', '100', '2019-06-20 18:52:22');

-- --------------------------------------------------------

--
-- Table structure for table `insertgameresult`
--

CREATE TABLE `insertgameresult` (
  `id` int(11) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `sattanumber` varchar(50) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insertgameresult`
--

INSERT INTO `insertgameresult` (`id`, `cityname`, `sattanumber`, `date_time`) VALUES
(1, 'MADHUR DAY', '123-54-987', '2019-06-20 18:50:51'),
(2, 'MAIN MUMBAI', '123-54-987', '2019-06-20 18:50:56'),
(3, 'MADHUR NIGHT', '123-54-987', '2019-06-20 18:51:00'),
(4, 'RAJDHANI NIGHT', '123-54-987', '2019-06-20 18:51:05'),
(5, 'MADHUR DAY1', '123-54-987', '2019-06-20 18:51:09'),
(6, 'MADHUR DAY2', '123-54-987', '2019-06-20 18:51:13'),
(7, 'MADHUR DAY', '123-54-987', '2019-06-20 18:51:19'),
(8, 'MADHUR DAY1', '123-54-987', '2019-06-20 18:51:23');

-- --------------------------------------------------------

--
-- Table structure for table `insertgametimeing`
--

CREATE TABLE `insertgametimeing` (
  `id` int(11) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `opentime` varchar(50) NOT NULL,
  `closetime` varchar(50) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insertgametimeing`
--

INSERT INTO `insertgametimeing` (`id`, `cityname`, `opentime`, `closetime`, `date_time`) VALUES
(1, 'MADHUR DAY', '12:00 PM', '02:00 PM', '2019-06-20 23:14:33'),
(2, 'MAIN MUMBAI', '12:00 PM', '02:00 PM', '2019-06-20 23:14:40'),
(3, 'MADHUR NIGHT', '12:00 PM', '02:00 PM', '2019-06-20 23:14:50'),
(4, 'MADHUR DAY', '12:00 PM', '02:00 PM', '2019-06-20 23:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `insertnews`
--

CREATE TABLE `insertnews` (
  `id` int(11) NOT NULL,
  `news` varchar(10000) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insertnews`
--

INSERT INTO `insertnews` (`id`, `news`, `date_time`) VALUES
(1, 'Online à¤–à¥‡à¤² à¤–à¥‡à¤²à¤¨à¥‡ à¤•à¥‡ à¤²à¤¿à¤ à¤¸à¤¬à¤¸à¥‡ à¤ªà¤¹à¤²à¥‡ à¤†à¤ª à¤¨à¤¯à¤¾ à¤…à¤•à¤¾à¤‰à¤‚à¤Ÿ Register à¤•à¤°à¥‡ à¤”à¤° Whatsapp à¤ªà¤° à¤¸à¤®à¥à¤ªà¤°à¥à¤• à¤•à¤°à¥‡| à¤‡à¤¸à¤•à¥‡ à¤¬à¤¾à¤¦ à¤®à¥‡à¤‚ Min. Rs.1000 Online,Paytm, Tez à¤¯à¤¾ PhonePe à¤•à¥‡ à¤¦à¥à¤µà¤¾à¤°à¤¾ à¤¹à¤®à¤¾à¤°à¥‡ à¤…à¤•à¤¾à¤‰à¤‚à¤Ÿ à¤®à¥‡à¤‚ à¤œà¤®à¤¾ à¤•à¤°à¥‡| à¤¹à¤®à¤¾à¤°à¥‡ à¤¦à¥à¤µà¤¾à¤°à¤¾ à¤œà¤®à¤¾ amount à¤•à¥€ à¤ªà¥à¤·à¥à¤Ÿà¤¿ à¤¹à¥‹à¤¤à¥‡ à¤¹à¥€ à¤†à¤ªà¤•à¤¾ à¤…à¤•à¤¾à¤‰à¤‚à¤Ÿ à¤šà¤¾à¤²à¥‚ à¤•à¤° à¤‰à¤¸à¤®à¥‡ à¤‰à¤•à¥à¤¤ à¤°à¤¾à¤¶à¤¿ à¤ªà¥‰à¤‡à¤‚à¤Ÿ à¤•à¥‡ à¤°à¥‚à¤ª à¤®à¥‡à¤‚(Rs.1 = 1 Point) à¤†à¤ªà¤•à¥‡ à¤–à¤¾à¤¤à¥‡ à¤®à¥‡à¤‚ à¤œà¤®à¤¾ à¤•à¤° à¤¦à¤¿à¤¯à¥‡ à¤œà¤¾à¤¯à¥‡à¤—à¥‡| à¤§à¤¨à¥à¤¯à¤µà¤¾à¤¦! à¤–à¥‡à¤² à¤¸à¤‚à¤¬à¤‚à¤§à¤¿à¤¤ à¤…à¤§à¤¿à¤• à¤œà¤¾à¤¨à¤•à¤¾à¤°à¥€ à¤¹à¥‡à¤¤à¥ Web-Admin à¤¸à¥‡ à¤¸à¤®à¥à¤ªà¤°à¥à¤• à¤•à¤°à¥‡ - +91 9024457140', '2019-06-20 23:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `insertnotices`
--

CREATE TABLE `insertnotices` (
  `id` int(11) NOT NULL,
  `notices` varchar(10000) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insertnotices`
--

INSERT INTO `insertnotices` (`id`, `notices`, `date_time`) VALUES
(1, 'Online à¤–à¥‡à¤² à¤–à¥‡à¤²à¤¨à¥‡ à¤•à¥‡ à¤²à¤¿à¤ à¤¸à¤¬à¤¸à¥‡ à¤ªà¤¹à¤²à¥‡ à¤†à¤ª à¤¨à¤¯à¤¾ à¤…à¤•à¤¾à¤‰à¤‚à¤Ÿ Register à¤•à¤°à¥‡ à¤”à¤° Whatsapp à¤ªà¤° à¤¸à¤®à¥à¤ªà¤°à¥à¤• à¤•à¤°à¥‡| à¤‡à¤¸à¤•à¥‡ à¤¬à¤¾à¤¦ à¤®à¥‡à¤‚ Min. Rs.1000 Online,Paytm, Tez à¤¯à¤¾ PhonePe à¤•à¥‡ à¤¦à¥à¤µà¤¾à¤°à¤¾ à¤¹à¤®à¤¾à¤°à¥‡ à¤…à¤•à¤¾à¤‰à¤‚à¤Ÿ à¤®à¥‡à¤‚ à¤œà¤®à¤¾ à¤•à¤°à¥‡| à¤¹à¤®à¤¾à¤°à¥‡ à¤¦à¥à¤µà¤¾à¤°à¤¾ à¤œà¤®à¤¾ amount à¤•à¥€ à¤ªà¥à¤·à¥à¤Ÿà¤¿ à¤¹à¥‹à¤¤à¥‡ à¤¹à¥€ à¤†à¤ªà¤•à¤¾ à¤…à¤•à¤¾à¤‰à¤‚à¤Ÿ à¤šà¤¾à¤²à¥‚ à¤•à¤° à¤‰à¤¸à¤®à¥‡ à¤‰à¤•à¥à¤¤ à¤°à¤¾à¤¶à¤¿ à¤ªà¥‰à¤‡à¤‚à¤Ÿ à¤•à¥‡ à¤°à¥‚à¤ª à¤®à¥‡à¤‚(Rs.1 = 1 Point) à¤†à¤ªà¤•à¥‡ à¤–à¤¾à¤¤à¥‡ à¤®à¥‡à¤‚ à¤œà¤®à¤¾ à¤•à¤° à¤¦à¤¿à¤¯à¥‡ à¤œà¤¾à¤¯à¥‡à¤—à¥‡| à¤§à¤¨à¥à¤¯à¤µà¤¾à¤¦! à¤–à¥‡à¤² à¤¸à¤‚à¤¬à¤‚à¤§à¤¿à¤¤ à¤…à¤§à¤¿à¤• à¤œà¤¾à¤¨à¤•à¤¾à¤°à¥€ à¤¹à¥‡à¤¤à¥ Web-Admin à¤¸à¥‡ à¤¸à¤®à¥à¤ªà¤°à¥à¤• à¤•à¤°à¥‡ - +91 9024457140', '2019-06-20 23:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `jbid`
--

CREATE TABLE `jbid` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `n0` int(11) NOT NULL,
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL,
  `n4` int(11) NOT NULL,
  `n5` int(11) NOT NULL,
  `n6` int(11) NOT NULL,
  `n7` int(11) NOT NULL,
  `n8` int(11) NOT NULL,
  `n9` int(11) NOT NULL,
  `n10` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jbid`
--

INSERT INTO `jbid` (`id`, `userid`, `username`, `email`, `cityname`, `n0`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `n8`, `n9`, `n10`, `date_time`) VALUES
(2, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR DAY', 0, 6, 0, 0, 0, 0, 0, 8, 7, 0, 21, '2019-06-25 03:17:33'),
(3, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR NIGHT', 0, 0, 6, 0, 0, 0, 0, 0, 0, 7, 13, '2019-06-25 16:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `jodi`
--

CREATE TABLE `jodi` (
  `id` int(11) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `citynametype` varchar(50) NOT NULL,
  `open` varchar(50) NOT NULL,
  `timing` varchar(50) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jodi`
--

INSERT INTO `jodi` (`id`, `cityname`, `citynametype`, `open`, `timing`, `date_time`) VALUES
(12, 'MAIN MUMBAI', 'MAIN MUMBAI Open', 'Open', '07:39 PM', '2019-06-25 23:43:13'),
(13, 'MADHUR NIGHT', 'MADHUR NIGHT Open', 'Open', '07:39 PM', '2019-06-25 23:43:23');

-- --------------------------------------------------------

--
-- Table structure for table `jodibid`
--

CREATE TABLE `jodibid` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `open` varchar(50) NOT NULL,
  `biding` varchar(50) NOT NULL,
  `jodinumber` varchar(50) NOT NULL,
  `bidamount` double NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jodibid`
--

INSERT INTO `jodibid` (`id`, `userid`, `username`, `email`, `cityname`, `open`, `biding`, `jodinumber`, `bidamount`, `date_time`) VALUES
(52, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MAIN MUMBAI', 'Open', 'Jodi', '6', 7, '2019-06-28 18:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `point`
--

CREATE TABLE `point` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `point` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `point`
--

INSERT INTO `point` (`id`, `userid`, `username`, `point`, `date_time`) VALUES
(7, 2678, 'hamzaazad222', 2000, '2019-06-27 05:12:57');

-- --------------------------------------------------------

--
-- Table structure for table `point1`
--

CREATE TABLE `point1` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `point` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `point1`
--

INSERT INTO `point1` (`id`, `userid`, `username`, `point`, `date_time`) VALUES
(14, 2678, 'hamzaazad222', 2000, '2019-06-27 05:12:57');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_img` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `last_name`, `username`, `user_img`, `email`, `gender`, `country`, `city`, `phone`, `password`, `status`, `date_time`) VALUES
(2678, 'Muhammad', '', 'hamzaazad222', '', 'hamzaazad222@gmail.com', 'male', 'Pakistan', 'Karachi', 3102237789, '123', 'Aprovel', '2019-06-20 23:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `sinbid`
--

CREATE TABLE `sinbid` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `open` varchar(50) NOT NULL,
  `biding` varchar(50) NOT NULL,
  `bidnumber` varchar(11) NOT NULL,
  `point` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sinbid`
--

INSERT INTO `sinbid` (`id`, `userid`, `username`, `email`, `cityname`, `open`, `biding`, `bidnumber`, `point`, `date_time`) VALUES
(77, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR NIGHT', 'Open', 'Single', '1', 7, '2019-06-28 18:07:05'),
(78, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR NIGHT', 'Open', 'Single', '4', 9, '2019-06-28 18:07:05'),
(79, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR NIGHT', 'Open', 'Single', '7', 9, '2019-06-28 18:07:05'),
(80, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR NIGHT', 'Open', 'Single', '9', 8, '2019-06-28 18:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `single`
--

CREATE TABLE `single` (
  `id` int(11) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `citynametype` varchar(50) NOT NULL,
  `open` varchar(50) NOT NULL,
  `timing` varchar(50) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `single`
--

INSERT INTO `single` (`id`, `cityname`, `citynametype`, `open`, `timing`, `date_time`) VALUES
(17, 'MAIN MUMBAI', 'MAIN MUMBAI Open', 'Open', '07:39 PM', '2019-06-25 23:29:32'),
(18, 'MADHUR NIGHT', 'MADHUR NIGHT Open', 'Open', '10:39 PM', '2019-06-25 23:29:40'),
(19, 'MADHUR DAY1', 'MADHUR DAY1 Open', 'Open', '10:39 PM', '2019-06-25 23:29:48'),
(20, 'MADHUR DAY2', 'MADHUR DAY2 Close', 'Close', '12:38 PM', '2019-06-25 23:29:57'),
(21, 'MAIN MUMBAI', 'MAIN MUMBAI Close', 'Close', '07:39 PM', '2019-06-25 23:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `singlebid`
--

CREATE TABLE `singlebid` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `singlenumber` varchar(50) NOT NULL,
  `bidamount` double NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `singlebid`
--

INSERT INTO `singlebid` (`id`, `userid`, `username`, `email`, `cityname`, `singlenumber`, `bidamount`, `date_time`) VALUES
(3, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR DAY', '2', 10, '2019-06-23 04:32:57'),
(4, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR NIGHT', '4', 55, '2019-06-23 04:33:09'),
(5, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MAIN MUMBAI', '4', 10, '2019-06-23 04:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `singlepatti`
--

CREATE TABLE `singlepatti` (
  `id` int(11) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `citynametype` varchar(50) NOT NULL,
  `open` varchar(50) NOT NULL,
  `timing` varchar(50) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `singlepatti`
--

INSERT INTO `singlepatti` (`id`, `cityname`, `citynametype`, `open`, `timing`, `date_time`) VALUES
(6, 'MADHUR DAY', 'MADHUR DAY Open', 'Open', '00:39 PM', '2019-06-25 23:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `singlepattibid`
--

CREATE TABLE `singlepattibid` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `open` varchar(50) NOT NULL,
  `biding` varchar(50) NOT NULL,
  `singlepattinumber` varchar(50) NOT NULL,
  `bidamount` double NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `singlepattibid`
--

INSERT INTO `singlepattibid` (`id`, `userid`, `username`, `email`, `cityname`, `open`, `biding`, `singlepattinumber`, `bidamount`, `date_time`) VALUES
(19, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR DAY', 'Open', 'Single Patti', '6', 90, '2019-06-27 05:14:10'),
(20, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR DAY', 'Open', 'Single Patti', '7', 7, '2019-06-27 05:14:10'),
(21, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR DAY', 'Open', 'Single Patti', '66', 98, '2019-06-27 05:14:10'),
(22, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR DAY', 'Open', 'Single Patti', '8', 8, '2019-06-28 18:07:42'),
(23, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR DAY', 'Open', 'Single Patti', '8', 5, '2019-06-28 18:07:42');

-- --------------------------------------------------------

--
-- Table structure for table `spbid`
--

CREATE TABLE `spbid` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `n0` int(11) NOT NULL,
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL,
  `n4` int(11) NOT NULL,
  `n5` int(11) NOT NULL,
  `n6` int(11) NOT NULL,
  `n7` int(11) NOT NULL,
  `n8` int(11) NOT NULL,
  `n9` int(11) NOT NULL,
  `n10` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spbid`
--

INSERT INTO `spbid` (`id`, `userid`, `username`, `email`, `cityname`, `n0`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `n8`, `n9`, `n10`, `date_time`) VALUES
(2, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MAIN MUMBAI', 4, 0, 0, 7, 0, 0, 0, 5, 0, 0, 16, '2019-06-25 03:17:54');

-- --------------------------------------------------------

--
-- Table structure for table `tpbid`
--

CREATE TABLE `tpbid` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `n0` int(11) NOT NULL,
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL,
  `n4` int(11) NOT NULL,
  `n5` int(11) NOT NULL,
  `n6` int(11) NOT NULL,
  `n7` int(11) NOT NULL,
  `n8` int(11) NOT NULL,
  `n9` int(11) NOT NULL,
  `n10` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpbid`
--

INSERT INTO `tpbid` (`id`, `userid`, `username`, `email`, `cityname`, `n0`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `n8`, `n9`, `n10`, `date_time`) VALUES
(2, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'MADHUR NIGHT', 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 6, '2019-06-25 03:18:21');

-- --------------------------------------------------------

--
-- Table structure for table `tripalpatti`
--

CREATE TABLE `tripalpatti` (
  `id` int(11) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `citynametype` varchar(50) NOT NULL,
  `open` varchar(50) NOT NULL,
  `timing` varchar(50) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tripalpatti`
--

INSERT INTO `tripalpatti` (`id`, `cityname`, `citynametype`, `open`, `timing`, `date_time`) VALUES
(5, 'RAJDHANI NIGHT', 'RAJDHANI NIGHT Open', 'Open', '10:39 PM', '2019-06-25 23:45:18'),
(6, 'MAIN MUMBAI', 'MAIN MUMBAI Open', 'Open', '02:39 PM', '2019-06-25 23:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `tripalpattibid`
--

CREATE TABLE `tripalpattibid` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `open` varchar(50) NOT NULL,
  `biding` varchar(50) NOT NULL,
  `tripalpattinumber` varchar(50) NOT NULL,
  `bidamount` double NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tripalpattibid`
--

INSERT INTO `tripalpattibid` (`id`, `userid`, `username`, `email`, `cityname`, `open`, `biding`, `tripalpattinumber`, `bidamount`, `date_time`) VALUES
(17, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'RAJDHANI NIGHT', 'Open', 'Tripal Patti', '7', 67, '2019-06-28 18:08:30'),
(18, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'RAJDHANI NIGHT', 'Open', 'Tripal Patti', '6', 55, '2019-06-28 18:08:30'),
(19, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'RAJDHANI NIGHT', 'Open', 'Tripal Patti', '55', 76, '2019-06-28 18:08:30'),
(20, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'RAJDHANI NIGHT', 'Open', 'Tripal Patti', '55', 767, '2019-06-28 18:08:30'),
(21, 2678, 'hamzaazad222', 'hamzaazad222@gmail.com', 'RAJDHANI NIGHT', 'Open', 'Tripal Patti', '6', 6, '2019-06-28 18:08:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `allbid`
--
ALTER TABLE `allbid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doublepatti`
--
ALTER TABLE `doublepatti`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cityname` (`cityname`);

--
-- Indexes for table `doublepattibid`
--
ALTER TABLE `doublepattibid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dpbid`
--
ALTER TABLE `dpbid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fbid`
--
ALTER TABLE `fbid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fullsangam`
--
ALTER TABLE `fullsangam`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cityname` (`cityname`);

--
-- Indexes for table `fullsangambid`
--
ALTER TABLE `fullsangambid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halfsangam`
--
ALTER TABLE `halfsangam`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cityname` (`cityname`);

--
-- Indexes for table `halfsangambid`
--
ALTER TABLE `halfsangambid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hbid`
--
ALTER TABLE `hbid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insertgamerate`
--
ALTER TABLE `insertgamerate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insertgameresult`
--
ALTER TABLE `insertgameresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insertgametimeing`
--
ALTER TABLE `insertgametimeing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insertnews`
--
ALTER TABLE `insertnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insertnotices`
--
ALTER TABLE `insertnotices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jbid`
--
ALTER TABLE `jbid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jodi`
--
ALTER TABLE `jodi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cityname` (`cityname`);

--
-- Indexes for table `jodibid`
--
ALTER TABLE `jodibid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `point`
--
ALTER TABLE `point`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `point1`
--
ALTER TABLE `point1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `sinbid`
--
ALTER TABLE `sinbid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `single`
--
ALTER TABLE `single`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `singlebid`
--
ALTER TABLE `singlebid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `singlepatti`
--
ALTER TABLE `singlepatti`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cityname` (`cityname`);

--
-- Indexes for table `singlepattibid`
--
ALTER TABLE `singlepattibid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spbid`
--
ALTER TABLE `spbid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpbid`
--
ALTER TABLE `tpbid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tripalpatti`
--
ALTER TABLE `tripalpatti`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cityname` (`cityname`);

--
-- Indexes for table `tripalpattibid`
--
ALTER TABLE `tripalpattibid`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `allbid`
--
ALTER TABLE `allbid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `doublepatti`
--
ALTER TABLE `doublepatti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doublepattibid`
--
ALTER TABLE `doublepattibid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `dpbid`
--
ALTER TABLE `dpbid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fbid`
--
ALTER TABLE `fbid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fullsangam`
--
ALTER TABLE `fullsangam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fullsangambid`
--
ALTER TABLE `fullsangambid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `halfsangam`
--
ALTER TABLE `halfsangam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `halfsangambid`
--
ALTER TABLE `halfsangambid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hbid`
--
ALTER TABLE `hbid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `insertgamerate`
--
ALTER TABLE `insertgamerate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `insertgameresult`
--
ALTER TABLE `insertgameresult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `insertgametimeing`
--
ALTER TABLE `insertgametimeing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `insertnews`
--
ALTER TABLE `insertnews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `insertnotices`
--
ALTER TABLE `insertnotices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jbid`
--
ALTER TABLE `jbid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jodi`
--
ALTER TABLE `jodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jodibid`
--
ALTER TABLE `jodibid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `point`
--
ALTER TABLE `point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `point1`
--
ALTER TABLE `point1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2679;

--
-- AUTO_INCREMENT for table `sinbid`
--
ALTER TABLE `sinbid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `single`
--
ALTER TABLE `single`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `singlebid`
--
ALTER TABLE `singlebid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `singlepatti`
--
ALTER TABLE `singlepatti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `singlepattibid`
--
ALTER TABLE `singlepattibid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `spbid`
--
ALTER TABLE `spbid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tpbid`
--
ALTER TABLE `tpbid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tripalpatti`
--
ALTER TABLE `tripalpatti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tripalpattibid`
--
ALTER TABLE `tripalpattibid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
