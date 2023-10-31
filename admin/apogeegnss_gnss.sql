-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2023 at 09:43 AM
-- Server version: 10.3.39-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apogeegnss_gnss`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'apogeegnss', 'MTIzNDU2', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `video_link` varchar(555) DEFAULT NULL,
  `type` int(11) NOT NULL COMMENT '1: Image, 2: Video',
  `title` varchar(255) NOT NULL,
  `article_category_id` int(11) NOT NULL,
  `header_content` text NOT NULL,
  `description` text NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE `article_category` (
  `id` int(11) NOT NULL,
  `article_category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article_category`
--

INSERT INTO `article_category` (`id`, `article_category_name`) VALUES
(1, 'Blog'),
(2, 'Event');

-- --------------------------------------------------------

--
-- Table structure for table `become_dealer`
--

CREATE TABLE `become_dealer` (
  `id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `web` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `is_read` int(11) NOT NULL COMMENT '0:Read\r\n1: No Read',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `become_dealer`
--

INSERT INTO `become_dealer` (`id`, `company`, `state`, `city`, `street`, `telephone`, `mobile`, `web`, `fname`, `lname`, `email`, `message`, `is_read`, `created_at`) VALUES
(1, 'kundan LTD', 'fg', 'Faridabad', 'dfg', '1212121212', '8700328890', 'http://zxfdsf.vpm', 'dfg', 'sdfsd', 'admin@gmail.com', 'afasdad', 0, '0000-00-00 00:00:00'),
(2, 'kundan LTD', 'fg', 'Faridabad', 'dfg', '', '8700328890', '', 'dfg', '', 'admin@gmail.com', '', 0, '0000-00-00 00:00:00'),
(5, 'saaaaaaaaaa', 'fgfdg', 'dfg', 'dfgfd', '', '8700328890', '', 'dfg', '', 'admin@gmail.com', '', 0, '0000-00-00 00:00:00'),
(7, 'Kundan Testing Now', 'dfd', 'Faridabad', 'dfg', '1212121212', '8700328890', 'http://zxfdsf.vpm', 'dfg', 'sdfsd', 'admin@gmail.com', 'fsdfsdf', 0, '0000-00-00 00:00:00'),
(8, 'PARAGON NSTRUMEMTS PVT LTD', 'UP', 'Noida', 'A Block', '1212121212', '8700328890', 'http://zxfdsf.vpm', 'Tanuj ', 'Bartar', 'tanuj@gmail.com', 'This is testing  msg', 0, '0000-00-00 00:00:00'),
(9, 'Apogee Precision LLP', 'Uttar Pradesh', 'noida', 'sec 63 noida', '', '7624002254', '', 'shalu', 'kansal', 'apogeepre@gmail.com', '', 0, '0000-00-00 00:00:00'),
(10, 'kundan 12345 LTD', 'dfdsf', 'Faridabad', 'dfg', '1212121212', '8700328890', '', 'dfg', 'sdfsd', 'kundanpandey638@yahoo.in', 'fgfdgfd', 0, '0000-00-00 00:00:00'),
(11, 'Apogee Precision LLP', 'Uttar Pradesh', 'noida', 'sec 64 noida', '', '7624002254', '', 'shalu', 'kansal', 'apogeepre@gmail.com', '', 0, '0000-00-00 00:00:00'),
(12, 'apogeegnss', 'UP', 'Noida', 'Sector 63', '', '7624002254', '', 'Shalu ', 'Kansal', 'sales@apogeegnss.com', 'This is for the testing purpose', 0, '2022-08-06 12:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form_query`
--

CREATE TABLE `contact_form_query` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL COMMENT '0: Resolved\r\n1: Active\r\n2: In Progress',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form_query`
--

INSERT INTO `contact_form_query` (`id`, `name`, `email`, `location`, `mobile`, `message`, `status`, `created_at`, `updated_at`) VALUES
(309, 'Shalu kansal', 'sales@apogeegnss.com', 'Noida', '7624002254', 'testing', 1, '2022-09-19 03:14:15', '0000-00-00 00:00:00'),
(310, 'Apogee', 'apogeeleveller123@gmail.com', 'noida', '7624002254', 'testing', 1, '2022-09-19 03:15:10', '0000-00-00 00:00:00'),
(436, 'Shalu Kansal', 'apogeegnss@gmail.com', 'noida', '7624002254', 'asas', 1, '2022-10-15 05:10:07', '0000-00-00 00:00:00'),
(700, 'Apogee', 'apogeeleveller123@gmail.com', 'noida', '7624002254', 'sssss', 1, '2022-12-14 06:03:52', '0000-00-00 00:00:00'),
(1617, 'BorisTob', '2.83.51.s.b.9xm.@hexagonaldrawings.com', 'Russia', '83227717951', 'ÐºÐ°Ð·Ð¸Ð½Ð¾ ÑÐµÐ»ÐµÐºÑ‚Ð¾Ñ€ Ð¸Ð³Ñ€Ð°Ñ‚ÑŒ Ð¾Ð½Ð»Ð°Ð¹Ð½ \r\n<a href=\"https://bike.by/forum/viewtopic.php?f=90&t=18159&p=25981\r\nhttps://www.mobilegta.net/en/user/uuaba\r\nhttp://www.gotai.net/forum/default.aspx?threadid=202328&page=5\r\n\">https://bike.by/forum/viewtopic.php?f=90&t=18159&p=25981\r\nhttps://www.mobilegta.net/en/user/uuaba\r\nhttp://www.gotai.net/forum/default.aspx?threadid=202328&page=5\r\n</a> \r\nÐ’Ð°Ñ Ð¾Ð¶Ð¸Ð´Ð°ÑŽÑ‚ Ð½ÐµÐ²ÐµÑ€Ð¾ÑÑ‚Ð½Ñ‹Ðµ ÑÐ»Ð¾Ñ‚Ñ‹, ÐºÐ»Ð°ÑÑÐ¸Ñ‡ÐµÑÐºÐ¸Ðµ ÐºÐ°Ñ€Ñ‚Ð¾Ñ‡Ð½Ñ‹Ðµ Ð¸Ð³Ñ€Ñ‹, Ð·Ð°Ñ…Ð²Ð°Ñ‚Ñ‹Ð²Ð°ÑŽÑ‰Ð¸Ðµ Ñ€ÑƒÐ»ÐµÑ‚ÐºÐ¸ Ð¸ Ð¼Ð½Ð¾Ð³Ð¾Ðµ Ð´Ñ€ÑƒÐ³Ð¾Ðµ. Ð’ ÐšÐ°Ð·Ð¸Ð½Ð¾ Ð¡ÐµÐ»ÐµÐºÑ‚Ð¾Ñ€ Ð²Ñ‹ Ð½Ð°Ð¹Ð´ÐµÑ‚Ðµ Ð½Ðµ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð¿Ð¾Ð¿ÑƒÐ»ÑÑ€Ð½Ñ‹Ðµ Ð¸Ð³Ñ€Ñ‹, Ð½Ð¾ Ð¸ ÑÐºÑÐºÐ»ÑŽÐ·Ð¸Ð²Ð½Ñ‹Ðµ Ð²Ð°Ñ€Ð¸Ð°Ð½Ñ‚Ñ‹, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ðµ Ð½Ðµ Ð²ÑÑ‚Ñ€ÐµÑ‚Ð¸Ñ‚Ðµ Ð±Ð¾Ð»ÑŒÑˆÐµ Ð½Ð¸Ð³Ð´Ðµ. ÐžÐ½Ð¸ Ð¿Ñ€ÐµÐ´Ð»Ð°Ð³Ð°ÑŽÑ‚ ÑƒÐ½Ð¸ÐºÐ°Ð»ÑŒÐ½Ñ‹Ðµ ÐºÐ¾Ð¼Ð±Ð¸Ð½Ð°Ñ†Ð¸Ð¸, Ð±Ð¾Ð½ÑƒÑÐ½Ñ‹Ðµ Ñ€Ð°ÑƒÐ½Ð´Ñ‹ Ð¸ Ñ„Ð°Ð½Ñ‚Ð°ÑÑ‚Ð¸Ñ‡ÐµÑÐºÐ¸Ðµ Ð´Ð¶ÐµÐºÐ¿Ð¾Ñ‚Ñ‹, Ñ‡Ñ‚Ð¾Ð±Ñ‹ Ð¿Ð¾Ð´Ð°Ñ€Ð¸Ñ‚ÑŒ Ð²Ð°Ð¼ Ð½ÐµÐ·Ð°Ð±Ñ‹Ð²Ð°ÐµÐ¼Ñ‹Ðµ Ð¼Ð¾Ð¼ÐµÐ½Ñ‚Ñ‹ Ð²Ñ‹Ð¸Ð³Ñ€Ñ‹ÑˆÐµÐ¹.ÐÐ° Ð¾Ñ„Ð¸Ñ†Ð¸Ð°Ð»ÑŒÐ½Ð¾Ð¼ ÑÐ°Ð¹Ñ‚Ðµ ÐšÐ°Ð·Ð¸Ð½Ð¾ Ð¡ÐµÐ»ÐµÐºÑ‚Ð¾Ñ€ Ð²Ñ‹ Ð½Ð°Ð¹Ð´ÐµÑ‚Ðµ ÑˆÐ¸Ñ€Ð¾ÐºÐ¸Ð¹ Ð²Ñ‹Ð±Ð¾Ñ€ Ð¸Ð³Ñ€, Ñ‡Ñ‚Ð¾Ð±Ñ‹ Ð¿Ð¾Ð»Ð½Ð¾ÑÑ‚ÑŒÑŽ Ð¿Ð¾Ð³Ñ€ÑƒÐ·Ð¸Ñ‚ÑŒÑÑ Ð² Ð¼Ð¸Ñ€ Ñ€Ð°Ð·Ð²Ð»ÐµÑ‡ÐµÐ½Ð¸Ð¹. Ð‘Ð»Ð°Ð³Ð¾Ð´Ð°Ñ€Ñ ÑƒÐ´Ð¾Ð±Ð½Ð¾Ð¼Ñƒ Ð¸Ð½Ñ‚ÐµÑ€Ñ„ÐµÐ¹ÑÑƒ Ð¸ Ð¸Ð½Ñ‚ÑƒÐ¸Ñ‚Ð¸Ð²Ð½Ð¾ Ð¿Ð¾Ð½ÑÑ‚Ð½Ð¾Ð¹ Ð½Ð°Ð²Ð¸Ð³Ð°Ñ†Ð¸Ð¸, Selector Casino Ð¿Ñ€ÐµÐ´Ð»Ð°Ð³Ð°ÐµÑ‚ Ð±ÐµÐ·ÑƒÐ¿Ñ€ÐµÑ‡Ð½Ñ‹Ð¹ Ð¸Ð³Ñ€Ð¾Ð²Ð¾Ð¹ Ð¾Ð¿Ñ‹Ñ‚, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ð¹ Ð¾ÑÑ‚Ð°Ð²Ð¸Ñ‚ Ð²Ð°Ñ Ð² Ð²Ð¾ÑÑ‚Ð¾Ñ€Ð³Ðµ.ÐšÐ°Ð·Ð¸Ð½Ð¾ Ð¡ÐµÐ»ÐµÐºÑ‚Ð¾Ñ€ - Ð²Ð°Ñˆ Ð¿ÑƒÑ‚ÑŒ Ðº Ð·Ð°Ñ…Ð²Ð°Ñ‚Ñ‹Ð²Ð°ÑŽÑ‰ÐµÐ¼Ñƒ Ð¼Ð¸Ñ€Ñƒ Ð°Ð·Ð°Ñ€Ñ‚Ð½Ñ‹Ñ… Ð¸Ð³Ñ€ Ð¸ Ð±Ð¾Ð»ÑŒÑˆÐ¸Ñ… Ð²Ñ‹Ð¸Ð³Ñ€Ñ‹ÑˆÐµÐ¹! Ð•ÑÐ»Ð¸ Ð²Ñ‹ Ð¸Ñ‰ÐµÑ‚Ðµ Ð½Ð°Ð´ÐµÐ¶Ð½Ð¾Ðµ Ð¸ ÐºÐ°Ñ‡ÐµÑÑ‚Ð²ÐµÐ½Ð½Ð¾Ðµ Ð¾Ð½Ð»Ð°Ð¹Ð½-ÐºÐ°Ð·Ð¸Ð½Ð¾, Ð¡ÐµÐ»ÐµÐºÑ‚Ð¾Ñ€ ÐšÐ°Ð·Ð¸Ð½Ð¾ - Ð²Ð°Ñˆ Ð¸Ð´ÐµÐ°Ð»ÑŒÐ½Ñ‹Ð¹ Ð²Ñ‹Ð±Ð¾Ñ€. ÐœÑ‹ Ñ€Ð°Ð´Ñ‹ Ð¿Ñ€ÐµÐ´Ð»Ð¾Ð¶Ð¸Ñ‚ÑŒ Ð²Ð°Ð¼ ÑƒÐ½Ð¸ÐºÐ°Ð»ÑŒÐ½ÑƒÑŽ Ð²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ÑÑ‚ÑŒ ÑÐºÐ°Ñ‡Ð°Ñ‚ÑŒ Ð¸ Ð¸Ð³Ñ€Ð°Ñ‚ÑŒ Ð±ÐµÑÐ¿Ð»Ð°Ñ‚Ð½Ð¾ Ð¾Ð½Ð»Ð°Ð¹Ð½, Ð° Ñ‚Ð°ÐºÐ¶Ðµ Ð¿Ð¾Ð»ÑƒÑ‡Ð¸Ñ‚ÑŒ Ð´Ð¾ÑÑ‚ÑƒÐ¿ Ðº Ð¿Ð¾Ð»Ð½Ð¾Ð¹ Ð²ÐµÑ€ÑÐ¸Ð¸ ÑÐ°Ð¹Ñ‚Ð° Ð² Ð Ð¾ÑÑÐ¸Ð¸ Ð¸ Ð½Ð°ÑÐ»Ð°Ð´Ð¸Ñ‚ÑŒÑÑ Ð¸Ð³Ñ€Ð¾Ð¹ Ð½Ð° Ð´ÐµÐ½ÑŒÐ³Ð¸.Selector Casino Ð¿Ñ€ÐµÐ´Ð»Ð°Ð³Ð°ÐµÑ‚ Ð²Ð°Ð¼ ÑˆÐ¸Ñ€Ð¾ÐºÐ¸Ð¹ Ð²Ñ‹Ð±Ð¾Ñ€ Ð¸Ð³Ñ€, Ð¾Ñ‚ ÐºÐ»Ð°ÑÑÐ¸Ñ‡ÐµÑÐºÐ¸Ñ… ÑÐ»Ð¾Ñ‚Ð¾Ð² Ð´Ð¾ Ð·Ð°Ñ…Ð²Ð°Ñ‚Ñ‹Ð²Ð°ÑŽÑ‰Ð¸Ñ… Ð½Ð°ÑÑ‚Ð¾Ð»ÑŒÐ½Ñ‹Ñ… Ð¸Ð³Ñ€, Ñ‚Ð°ÐºÐ¸Ñ… ÐºÐ°Ðº Ð¿Ð¾ÐºÐµÑ€, Ð±Ð»ÑÐºÐ´Ð¶ÐµÐº Ð¸ Ñ€ÑƒÐ»ÐµÑ‚ÐºÐ°. ÐÐ°ÑˆÐµ ÐºÐ°Ð·Ð¸Ð½Ð¾ Ñ€Ð°Ð±Ð¾Ñ‚Ð°ÐµÑ‚ Ð½Ð° Ð¿ÐµÑ€ÐµÐ´Ð¾Ð²Ð¾Ð¹ Ð¿Ð»Ð°Ñ‚Ñ„Ð¾Ñ€Ð¼Ðµ, Ð¾Ð±ÐµÑÐ¿ÐµÑ‡Ð¸Ð²Ð°Ñ Ð±ÐµÐ·Ð¾Ð¿Ð°ÑÐ½Ð¾ÑÑ‚ÑŒ Ð¸ Ð½Ð°Ð´ÐµÐ¶Ð½Ð¾ÑÑ‚ÑŒ Ð² ÐºÐ°Ð¶Ð´Ð¾Ð¹ Ð¸Ð³Ñ€Ðµ. ÐœÑ‹ Ð³Ð°Ñ€Ð°Ð½Ñ‚Ð¸Ñ€ÑƒÐµÐ¼ Ñ‡ÐµÑÑ‚Ð½Ñ‹Ðµ Ñ€ÐµÐ·ÑƒÐ»ÑŒÑ‚Ð°Ñ‚Ñ‹ Ð¸ ÑÐ»ÑƒÑ‡Ð°Ð¹Ð½Ð¾ÑÑ‚ÑŒ ÐºÐ°Ð¶Ð´Ð¾Ð³Ð¾ ÑÐ¿Ð¸Ð½Ð°, Ñ‡Ñ‚Ð¾Ð±Ñ‹ Ð²Ð°ÑˆÐ¸ ÑˆÐ°Ð½ÑÑ‹ Ð½Ð° Ð¿Ð¾Ð±ÐµÐ´Ñƒ Ð±Ñ‹Ð»Ð¸ Ð°Ð±ÑÐ¾Ð»ÑŽÑ‚Ð½Ð¾ Ñ€Ð°Ð²Ð½Ñ‹.Ð¡ÐµÐ»ÐµÐºÑ‚Ð¾Ñ€ ÐšÐ°Ð·Ð¸Ð½Ð¾ Ð¿Ñ€ÐµÐ´Ð»Ð°Ð³Ð°ÐµÑ‚ ÑÐ²Ð¾Ð¸Ð¼ Ð¸Ð³Ñ€Ð¾ÐºÐ°Ð¼ Ð¼Ð°ÐºÑÐ¸Ð¼Ð°Ð»ÑŒÐ½Ð¾Ðµ ÑƒÐ´Ð¾Ð±ÑÑ‚Ð²Ð¾ Ð¸ Ð³Ð¸Ð±ÐºÐ¾ÑÑ‚ÑŒ. Ð£ Ð½Ð°Ñ ÐµÑÑ‚ÑŒ Ð²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ÑÑ‚ÑŒ Ð¸Ð³Ñ€Ð°Ñ‚ÑŒ Ð¾Ð½Ð»Ð°Ð¹Ð½ Ð¿Ñ€ÑÐ¼Ð¾ Ð½Ð° Ð½Ð°ÑˆÐµÐ¼ ÑÐ°Ð¹Ñ‚Ðµ Ð±ÐµÐ· Ð½ÐµÐ¾Ð±Ñ…Ð¾Ð´Ð¸Ð¼Ð¾ÑÑ‚Ð¸ ÑÐºÐ°Ñ‡Ð¸Ð²Ð°Ñ‚ÑŒ Ð´Ð¾Ð¿Ð¾Ð»Ð½Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ð¾Ðµ Ð¿Ñ€Ð¾Ð³Ñ€Ð°Ð¼Ð¼Ð½Ð¾Ðµ Ð¾Ð±ÐµÑÐ¿ÐµÑ‡ÐµÐ½Ð¸Ðµ. Ð’Ñ‹ Ð¼Ð¾Ð¶ÐµÑ‚Ðµ Ð½Ð°ÑÐ»Ð°Ð¶Ð´Ð°Ñ‚ÑŒÑÑ ÑƒÐ²Ð»ÐµÐºÐ°Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ð¼Ð¸ Ð¸Ð³Ñ€Ð°Ð¼Ð¸ Ñ Ð»ÑŽÐ±Ð¾Ð³Ð¾ ÑƒÑÑ‚Ñ€Ð¾Ð¹ÑÑ‚Ð²Ð°, Ð±ÑƒÐ´ÑŒ Ñ‚Ð¾ ÐºÐ¾Ð¼Ð¿ÑŒÑŽÑ‚ÐµÑ€, Ð¿Ð»Ð°Ð½ÑˆÐµÑ‚ Ð¸Ð»Ð¸ ÑÐ¼Ð°Ñ€Ñ‚Ñ„Ð¾Ð½. ÐœÑ‹ Ð¿Ð¾Ð´Ð´ÐµÑ€Ð¶Ð¸Ð²Ð°ÐµÐ¼ Ð²ÑÐµ Ð¿Ð¾Ð¿ÑƒÐ»ÑÑ€Ð½Ñ‹Ðµ Ð¾Ð¿ÐµÑ€Ð°Ñ†Ð¸Ð¾Ð½Ð½Ñ‹Ðµ ÑÐ¸ÑÑ‚ÐµÐ¼Ñ‹, Ñ‡Ñ‚Ð¾Ð±Ñ‹ Ð²Ñ‹ Ð¼Ð¾Ð³Ð»Ð¸ Ð¸Ð³Ñ€Ð°Ñ‚ÑŒ Ð² Ð»ÑŽÐ±Ð¾Ðµ Ð²Ñ€ÐµÐ¼Ñ Ð¸ Ð² Ð»ÑŽÐ±Ð¾Ð¼ Ð¼ÐµÑÑ‚Ðµ.ÐžÐ´Ð¸Ð½ Ð¸Ð· Ð³Ð»Ð°Ð²Ð½Ñ‹Ñ… Ð¿Ñ€ÐµÐ¸Ð¼ÑƒÑ‰ÐµÑÑ‚Ð² ÐšÐ°Ð·Ð¸Ð½Ð¾ Ð¡ÐµÐ»ÐµÐºÑ‚Ð¾Ñ€ ? Ð²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ÑÑ‚ÑŒ ÑÐºÐ°Ñ‡Ð°Ñ‚ÑŒ Ð¸Ð³Ñ€Ñ‹ Ð¸ Ð½Ð°ÑÐ»Ð°Ð¶Ð´Ð°Ñ‚ÑŒÑÑ Ð¸Ð¼Ð¸ Ð² Ð»ÑŽÐ±Ð¾Ðµ ÑƒÐ´Ð¾Ð±Ð½Ð¾Ðµ Ð²Ñ€ÐµÐ¼Ñ. Ð‘Ð»Ð°Ð³Ð¾Ð´Ð°Ñ€Ñ ÑÐ¾Ð²Ñ€ÐµÐ¼ÐµÐ½Ð½Ð¾Ð¹ Ñ‚ÐµÑ…Ð½Ð¾Ð»Ð¾Ð³Ð¸Ð¸, Ð¸Ð³Ñ€Ð° Ð½Ð° Ð´ÐµÐ½ÑŒÐ³Ð¸ ÑÑ‚Ð°Ð»Ð° ÐµÑ‰Ðµ Ð±Ð¾Ð»ÐµÐµ Ð´Ð¾ÑÑ‚ÑƒÐ¿Ð½Ð¾Ð¹ Ð¸ Ð·Ð°Ñ…Ð²Ð°Ñ‚Ñ‹Ð²Ð°ÑŽÑ‰ÐµÐ¹. ÐŸÐ¾Ð´ÐºÐ»ÑŽÑ‡Ð°Ð¹Ñ‚ÐµÑÑŒ Ðº Ð°Ð·Ð°Ñ€Ñ‚Ð½Ð¾Ð¹ Ð²Ð¾Ð»Ð½Ðµ, Ð¸Ð³Ñ€Ð°Ñ Ð² Ð»ÑŽÐ±Ð¸Ð¼Ñ‹Ðµ ÑÐ»Ð¾Ñ‚Ñ‹ Ð½Ð° ÑÐ²Ð¾ÐµÐ¼ ÑƒÑÑ‚Ñ€Ð¾Ð¹ÑÑ‚Ð²Ðµ. ÐšÐ°Ð·Ð¸Ð½Ð¾ Ð¡ÐµÐ»ÐµÐºÑ‚Ð¾Ñ€ Ð´Ð°ÐµÑ‚ Ð²Ð°Ð¼ Ð²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ÑÑ‚ÑŒ Ð¸ÑÐ¿Ñ‹Ñ‚Ð°Ñ‚ÑŒ Ð¾ÑÑ‚Ñ€Ñ‹Ðµ Ð¾Ñ‰ÑƒÑ‰ÐµÐ½Ð¸Ñ Ð¸ Ð²Ñ‹Ð¸Ð³Ñ€Ð°Ñ‚ÑŒ ÐºÑ€ÑƒÐ¿Ð½Ñ‹Ðµ ÑÑƒÐ¼Ð¼Ñ‹ Ð´ÐµÐ½ÐµÐ³, Ð½Ðµ Ð²Ñ‹Ñ…Ð¾Ð´Ñ Ð¸Ð· Ð´Ð¾Ð¼Ð°. \r\n \r\n[url=https://newssnipe.com/top-5-serial-killers-scary-stories-that-were-never-caught/#comment-59514]Ð·Ð°Ð¹Ñ‚Ð¸ Ð½Ð° selector casino[/url]  f8d328c ', 1, '2023-07-07 10:53:05', '0000-00-00 00:00:00'),
(1618, 'LucilleAgode', 'lion.pirogoff@yandex.ru', 'https://clck.ru/34aceS', '83719321931', 'https://clck.ru/34acem', 1, '2023-07-08 03:08:09', '0000-00-00 00:00:00'),
(1619, 'Gordonhyday', 'yh8xu@course-fitness.com', 'Uzbekistan', '87881531882', 'ç¬¬ä¸€å€ŸéŒ¢ç¶²-å€ŸéŒ¢,å°é¡å€Ÿæ¬¾,å°é¡å€ŸéŒ¢ \r\n \r\n \r\nhttps://168cash.com.tw/', 1, '2023-07-08 03:40:49', '0000-00-00 00:00:00'),
(1620, 'Victorbeida', 'u7fpni@course-fitness.com', 'Angola', '83918951449', 'å† å¤©ä¸‹å¨›æ¨‚åŸŽ \r\n \r\n \r\n \r\nhttps://xn--ghq10gw1gvobv8a5z0d.com/', 1, '2023-07-08 08:00:48', '0000-00-00 00:00:00'),
(1621, 'JosephJak', 'yourmail@gmail.com', 'Marshall Islands', '87428211734', 'Ð¡ÐµÑ€Ð³ÐµÐ¹ Ð¡Ð°Ñ€Ð¾ÑÐ½: Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´ Ð½Ð°Ð·Ð½Ð°Ñ‡Ð¸Ð» Ð¾Ñ‚ÑŠÑÐ²Ð»ÐµÐ½Ð½Ð¾Ð³Ð¾ Ð¼Ð¾ÑˆÐµÐ½Ð½Ð¸ÐºÐ° ÐºÑƒÑ€Ð°Ñ‚Ð¾Ñ€Ð¾Ð¼ Ð¿Ð¾ Ð£ÐºÑ€Ð°Ð¸Ð½Ðµ \r\n \r\nÐ¡ÐµÑ€Ð³ÐµÐ¹ Ð¡Ð°Ñ€Ð¾ÑÐ½: Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´ Ð½Ð°Ð·Ð½Ð°Ñ‡Ð¸Ð» Ð¾Ñ‚ÑŠÑÐ²Ð»ÐµÐ½Ð½Ð¾Ð³Ð¾ Ð¼Ð¾ÑˆÐµÐ½Ð½Ð¸ÐºÐ° ÐºÑƒÑ€Ð°Ñ‚Ð¾Ñ€Ð¾Ð¼ Ð¿Ð¾ Ð£ÐºÑ€Ð°Ð¸Ð½Ðµ \r\n \r\n29 Ð¼Ð°Ñ 2021 Ð³. \r\n \r\nÐœÐ¸Ñ…Ð°Ð¸Ð» Ð–ÑƒÑ€ÐµÐ½ÐºÐ¾Ð² \r\n \r\nÐ‘Ñ€Ð¾ÐºÐµÑ€ÑÐºÐ°Ñ ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ñ Â«Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´Â» ÑƒÐ¶Ðµ Ð´Ð°Ð²Ð½Ð¾ Ð¸Ð·Ð²ÐµÑÑ‚Ð½Ð° ÐºÐ°Ðº Ð¼Ð¾ÑˆÐµÐ½Ð½Ð¸Ñ‡ÐµÑÐºÐ°Ñ ÑÑ‚Ñ€ÑƒÐºÑ‚ÑƒÑ€Ð°, Ð²Ñ‹ÐºÐ°Ñ‡Ð¸Ð²Ð°ÑŽÑ‰Ð°Ñ Ð´ÐµÐ½ÑŒÐ³Ð¸ Ð¸Ð· Ð¸Ð½Ð²ÐµÑÑ‚Ð¾Ñ€Ð¾Ð². \r\n \r\nÐ¢ÐµÐ¼ Ð½Ðµ Ð¼ÐµÐ½ÐµÐµ, Ð¸Ð¼ÐµÐ½Ð° Ñ‚ÐµÑ…, ÐºÑ‚Ð¾ Ñ€Ð°Ð·Ñ€Ð°Ð±Ð°Ñ‚Ñ‹Ð²Ð°ÐµÑ‚ Ð¸ Ð²Ð¾Ð¿Ð»Ð¾Ñ‰Ð°ÐµÑ‚ Ð² Ð¶Ð¸Ð·Ð½ÑŒ Ð¼Ð½Ð¾Ð³Ð¾Ñ‡Ð¸ÑÐ»ÐµÐ½Ð½Ñ‹Ðµ Ð¿Ñ€ÐµÑÑ‚ÑƒÐ¿Ð½Ñ‹Ðµ ÑÑ…ÐµÐ¼Ñ‹, Ð·Ð²ÑƒÑ‡Ð°Ñ‚ Ñ€ÐµÐ´ÐºÐ¾, Ð° Ð¸Ð½Ð¾Ð³Ð´Ð° Ð¸ Ð²Ð¾Ð²ÑÐµ Ð½ÐµÐ¸Ð·Ð²ÐµÑÑ‚Ð½Ñ‹. Ð’ ÑÑ‚Ð¾Ð¹ ÑÑ‚Ð°Ñ‚ÑŒÐµ Ð½ÐµÑÐ¿Ñ€Ð°Ð²ÐµÐ´Ð»Ð¸Ð²Ð¾ÑÑ‚ÑŒ Ð±ÑƒÐ´ÐµÑ‚ Ñ‡Ð°ÑÑ‚Ð¸Ñ‡Ð½Ð¾ Ð¸ÑÐ¿Ñ€Ð°Ð²Ð»ÐµÐ½Ð°. Ð•Ðµ Ð³ÐµÑ€Ð¾ÐµÐ¼ ÑÑ‚Ð°Ð» Ð¡ÐµÑ€Ð³ÐµÐ¹ Ð¡Ð°Ñ€Ð¾ÑÐ½ â€” Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€ ÑÐµÑ‚Ð¸ Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´ Ð² Ð£ÐºÑ€Ð°Ð¸Ð½Ðµ. ÐÐ¾ Ð½Ð°Ñ‡Ð°Ñ‚ÑŒ ÑÑ‚Ð¾Ð¸Ñ‚ Ñ Ð¿ÐµÑ€Ð²Ñ‹Ñ… Ð»Ð¸Ñ†, Ð² Ñ‡Ð°ÑÑ‚Ð½Ð¾ÑÑ‚Ð¸, Ñ Â«Ð¾Ñ‚Ñ†Ð°-Ð¾ÑÐ½Ð¾Ð²Ð°Ñ‚ÐµÐ»ÑÂ» Ð¼ÐµÐ¶Ð´ÑƒÐ½Ð°Ñ€Ð¾Ð´Ð½Ð¾Ð³Ð¾ Ñ„Ð¾Ñ€ÐµÐºÑ-Ð¼Ð¾ÑˆÐµÐ½Ð½Ð¸Ñ‡ÐµÑÑ‚Ð²Ð°, Ð³Ð»Ð°Ð²Ñ‹ Ð¸Ð¼Ð¿ÐµÑ€Ð¸Ð¸ Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´ Ð’Ð»Ð°Ð´Ð¸Ð¼Ð¸Ñ€Ð° Ð§ÐµÑ€Ð½Ð¾Ð±Ð°Ñ. ÐŸÑ€Ð°Ð²Ð¾ÑÑƒÐ´Ð¸Ðµ Ñ‚Ð°Ðº Ð¸ Ð½Ðµ Ð½Ð°ÑÑ‚Ð¸Ð³Ð»Ð¾ ÐµÐ³Ð¾ â€” ÑÐ¼ÐµÑ€Ñ‚ÑŒ Ð¾ÐºÐ°Ð·Ð°Ð»Ð°ÑÑŒ Ð¿Ñ€Ð¾Ð²Ð¾Ñ€Ð½ÐµÐ¹. \r\n \r\nÐÐ°ÑÐ»ÐµÐ´Ð½Ð¸ÐºÐ¸ Ð§ÐµÑ€Ð½Ð¾Ð±Ð°Ñ: Ð²Ð´Ð¾Ð²Ð° ÐÐ½Ð½Ð° Ð§ÐµÑ€Ð½Ð¾Ð±Ð°Ð¹ ÐžÐ»ÐµÐ³ Ð¡ÑƒÐ²Ð¾Ñ€Ð¾Ð², Ð¿Ð»ÐµÐ¼ÑÐ½Ð½Ð¸Ðº â€” Ð° Ñ‚Ð°ÐºÐ¶Ðµ Ñ‚Ðµ, ÐºÑ‚Ð¾ ÐºÐ¾Ñ€Ð¼Ð¸Ð»ÑÑ Ñ ÐµÐ³Ð¾ ÑÑ‚Ð¾Ð»Ð° Ð¿Ñ€Ð¸ Ð¶Ð¸Ð·Ð½Ð¸, Ð¿Ñ€Ð¾Ð´Ð¾Ð»Ð¶Ð°ÑŽÑ‚ Ð·Ð°Ñ€Ð°Ð±Ð°Ñ‚Ñ‹Ð²Ð°Ñ‚ÑŒ Ð½Ð°Ð»Ð°Ð¶ÐµÐ½Ð½Ñ‹Ð¼Ð¸ Ð¿Ð¾ÐºÐ¾Ð¹Ð½Ð¸ÐºÐ¾Ð¼ Ð¼ÐµÑ‚Ð¾Ð´Ð°Ð¼Ð¸. ÐŸÑ€Ð°Ð²Ð¾Ð¾Ñ…Ñ€Ð°Ð½Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ðµ Ð¾Ñ€Ð³Ð°Ð½Ñ‹ Ð½ÐµÑÐºÐ¾Ð»ÑŒÐºÐ¸Ñ… ÑÑ‚Ñ€Ð°Ð½ ÐºÐ²Ð°Ð»Ð¸Ñ„Ð¸Ñ†Ð¸Ñ€Ð¾Ð²Ð°Ð»Ð¸ ÑÑ‚Ð¸ Ð¼ÐµÑ‚Ð¾Ð´Ñ‹ ÐºÐ°Ðº Â«Ð¼Ð¾ÑˆÐµÐ½Ð½Ð¸Ñ‡ÐµÑÑ‚Ð²Ð¾ Ð² Ð¾ÑÐ¾Ð±Ð¾ ÐºÑ€ÑƒÐ¿Ð½Ñ‹Ñ… Ñ€Ð°Ð·Ð¼ÐµÑ€Ð°Ñ…Â». Ð£Ð³Ð¾Ð»Ð¾Ð²Ð½Ñ‹Ðµ Ð´ÐµÐ»Ð° Ð¿Ð¾ ÑÐ¾Ð¾Ñ‚Ð²ÐµÑ‚ÑÑ‚Ð²ÑƒÑŽÑ‰Ð¸Ð¼ ÑÑ‚Ð°Ñ‚ÑŒÑÐ¼ Ð²Ð¾Ð·Ð±ÑƒÐ¶Ð´ÐµÐ½Ñ‹ Ð½Ð° Ð±Ñ€Ð¾ÐºÐµÑ€Ð° Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´ Ð² Ð Ð¾ÑÑÐ¸Ð¸ Ð¸ ÐšÐ°Ð·Ð°Ñ…ÑÑ‚Ð°Ð½Ðµ. \r\n \r\nÐ Ð²Ð¾Ñ‚ Ð² Ð£ÐºÑ€Ð°Ð¸Ð½Ðµ, Ð³Ð´Ðµ Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´ Ñ Ñ‚Ð°ÐºÐ¸Ð¼ Ð¶Ðµ ÑƒÑÐ¿ÐµÑ…Ð¾Ð¼ Ð¾Ð±Ð´Ð¸Ñ€Ð°ÐµÑ‚ ÐºÐ»Ð¸ÐµÐ½Ñ‚Ð¾Ð², ÑƒÐ³Ð¾Ð»Ð¾Ð²Ð½Ð¾Ð¼Ñƒ Ð¿Ñ€ÐµÑÐ»ÐµÐ´Ð¾Ð²Ð°Ð½Ð¸ÑŽ Ð±Ñ€Ð¾ÐºÐµÑ€Ð° Ð´Ð¾ ÑÐ¸Ñ… Ð¿Ð¾Ñ€ Ð½Ðµ Ð¿Ð¾Ð´Ð²ÐµÑ€Ð³Ð°Ð»Ð¸. ÐŸÐ¾Ñ…Ð¾Ð¶Ðµ, Ñ‡Ñ‚Ð¾ Ñ€ÐµÐ³Ð¸Ð¾Ð½Ð°Ð»ÑŒÐ½Ñ‹Ð¹ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€ Ð¡ÐµÑ€Ð³ÐµÐ¹ Ð¡Ð°Ñ€Ð¾ÑÐ½ Ð´ÐµÐ¹ÑÑ‚Ð²Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ð¾ Â«Ð½Ðµ Ð·Ñ€ÑÂ» Ð·Ð°Ð½Ð¸Ð¼Ð°ÐµÑ‚ ÑÐ²Ð¾Ðµ Ñ‚ÐµÐ¿Ð»Ð¾Ðµ Ð¼ÐµÑÑ‚ÐµÑ‡ÐºÐ¾ Ð¸ Ð² ÑÐ¾ÑÑ‚Ð¾ÑÐ½Ð¸Ð¸ Â«Ð¾Ñ‚Ð¼Ð°Ð·Ð°Ñ‚ÑŒÂ» Ð²Ð²ÐµÑ€ÐµÐ½Ð½ÑƒÑŽ ÐµÐ¼Ñƒ ÑÑ‚Ñ€ÑƒÐºÑ‚ÑƒÑ€Ñƒ Ð¾Ñ‚ Ð½ÐµÐ¶ÐµÐ»Ð°Ñ‚ÐµÐ»ÑŒÐ½Ð¾Ð³Ð¾ Ð²Ð½Ð¸Ð¼Ð°Ð½Ð¸Ñ Ð²Ð»Ð°ÑÑ‚ÐµÐ¹ Ð¸ Ð¿Ð¾Ð»Ð¸Ñ†Ð¸Ð¸. ÐŸÐ¾Ð´ ÐºÑ€Ñ‹Ð»Ñ‹ÑˆÐºÐ¾Ð¼ Ñƒ ÑÐ²Ð¾ÐµÐ³Ð¾ Ñ€ÑƒÐºÐ¾Ð²Ð¾Ð´Ð¸Ñ‚ÐµÐ»Ñ Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´ Ð¿Ñ€Ð¾Ð´Ð¾Ð»Ð¶Ð°ÐµÑ‚ Ð±ÐµÐ·Ð½Ð°ÐºÐ°Ð·Ð°Ð½Ð½Ð¾ Ð¿Ð¾Ñ…Ð¸Ñ‰Ð°Ñ‚ÑŒ Ð´ÐµÐ½ÑŒÐ³Ð¸ ÑƒÐºÑ€Ð°Ð¸Ð½Ñ†ÐµÐ², Ð° Ð¼Ð½Ð¾Ð¶ÐµÑÑ‚Ð²Ð¾ Ð¶Ð°Ð»Ð¾Ð± Ð¾ÑÑ‚Ð°ÑŽÑ‚ÑÑ Ð±ÐµÐ· Ð¾Ñ‚Ð²ÐµÑ‚Ð°. \r\n \r\nÐšÐ°ÐºÑƒÑŽ Ñ€Ð¾Ð»ÑŒ Ð¸Ð³Ñ€Ð°ÐµÑ‚ Ð¡ÐµÑ€Ð³ÐµÐ¹ Ð¡Ð°Ñ€Ð¾ÑÐ½ Ð² Ð¿Ñ€ÐµÑÑ‚ÑƒÐ¿Ð»ÐµÐ½Ð¸ÑÑ… Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´ \r\n \r\nÐ¡ÐµÑ€Ð³ÐµÐ¹ Ð¡Ð°Ñ€Ð¾ÑÐ½ Ð¸Ð·Ð²ÐµÑÑ‚ÐµÐ½ ÐºÐ°Ðº Ñ‡ÐµÐ»Ð¾Ð²ÐµÐº Ñ Ð½ÐµÐ¿Ð¾Ð¼ÐµÑ€Ð½Ñ‹Ð¼ ÑÐ°Ð¼Ð¾Ð»ÑŽÐ±Ð¸ÐµÐ¼ Ð¸ Ð·Ð°ÑˆÐºÐ°Ð»Ð¸Ð²Ð°ÑŽÑ‰Ð¸Ð¼Ð¸ Ð°Ð¼Ð±Ð¸Ñ†Ð¸ÑÐ¼Ð¸. ÐžÐ½ ÑƒÐ¼ÐµÐµÑ‚ Ñ€Ð°ÑÐ¿Ð¾Ð»Ð°Ð³Ð°Ñ‚ÑŒ Ðº ÑÐµÐ±Ðµ Ð¸Ð·Ð´Ð°Ð»Ð¸, Ñ Ñ‚Ñ€Ð¸Ð±ÑƒÐ½Ñ‹ Ð¸Ð»Ð¸ Ñ‡ÐµÑ€ÐµÐ· Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚, Ñ‰ÐµÐ´Ñ€Ð¾ Ñ€Ð°Ð·Ð´Ð°ÐµÑ‚ Ð¾Ð±ÐµÑ‰Ð°Ð½Ð¸Ñ, Ð½Ð¾ Ð²Ñ‹Ð¿Ð¾Ð»Ð½ÑÐµÑ‚ Ð¸Ñ… Ð»Ð¸ÑˆÑŒ Ñ‚Ð¾Ð³Ð´Ð°, ÐºÐ¾Ð³Ð´Ð° Ð²Ð¸Ð´Ð¸Ñ‚ Ð¿Ñ€ÑÐ¼ÑƒÑŽ Ð²Ñ‹Ð³Ð¾Ð´Ñƒ Ð´Ð»Ñ ÑÐµÐ±Ñ. Ð¡Ñ‚Ð¾Ð¸Ñ‚ Ð¿Ð¾Ð·Ð½Ð°ÐºÐ¾Ð¼Ð¸Ñ‚ÑŒÑÑ Ñ Ð½Ð¸Ð¼ Ð¿Ð¾Ð±Ð»Ð¸Ð¶Ðµ, Ð½Ð° Ð¿Ð¾Ð²ÐµÑ€Ñ…Ð½Ð¾ÑÑ‚ÑŒ Ð²Ñ‹Ð¿Ð»Ñ‹Ð²Ð°ÐµÑ‚ ÐµÐ³Ð¾ Ñ…Ð¸Ñ‚Ñ€Ð¾ÑÑ‚ÑŒ Ð¸ Ð´Ð²ÑƒÐ»Ð¸Ñ‡Ð½Ð¾ÑÑ‚ÑŒ. Ð¡Ð°Ñ€Ð¾ÑÐ½ ÑÑ‚Ñ€Ð¾Ð³Ð¾ Ð±Ð»ÑŽÐ´ÐµÑ‚ ÑÐ²Ð¾Ð¸ Ð¸Ð½Ñ‚ÐµÑ€ÐµÑÑ‹ Ð¸ Ð³Ð¾Ñ‚Ð¾Ð² Ð¿Ñ€Ð¾Ð³Ð½ÑƒÑ‚ÑŒÑÑ Ð¿Ð¾Ð´ Ð»ÑŽÐ±ÑƒÑŽ ÑÐ¸Ñ‚ÑƒÐ°Ñ†Ð¸ÑŽ, Ð»Ð¸ÑˆÑŒ Ð±Ñ‹ ÑÐ¾Ñ…Ñ€Ð°Ð½Ð¸Ñ‚ÑŒ ÑÑ‚Ð°Ñ‚ÑƒÑ-ÐºÐ²Ð¾. ÐžÐ´Ð½Ð°ÐºÐ¾ Ð¸Ð½Ð¾Ð³Ð´Ð° Ð²ÑÐµ ÐµÐ³Ð¾ ÑÑ‚Ð°Ñ€Ð°Ð½Ð¸Ñ Ð¾ÐºÐ°Ð·Ñ‹Ð²Ð°ÑŽÑ‚ÑÑ Ñ‚Ñ‰ÐµÑ‚Ð½Ñ‹Ð¼Ð¸ â€” Ð½ÐµÑÐºÐ¾Ð»ÑŒÐºÐ¾ Ð»ÐµÑ‚ Ð½Ð°Ð·Ð°Ð´ Ð¾Ð½ Ð¿Ð¾Ñ‚ÐµÑ€ÑÐ» ÑÐ»Ð°Ð´ÐºÑƒÑŽ Ð´Ð¾Ð»Ð¶Ð½Ð¾ÑÑ‚ÑŒ Ð² Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´ Ð¸ Ð¾ÑÑ‚Ð°Ð»ÑÑ Ð½Ðµ Ñƒ Ð´ÐµÐ». ÐŸÑ€ÐµÐ¶Ð´Ðµ Ñ‡ÐµÐ¼ Ñ€Ð°ÑÐºÑ€Ñ‹Ð²Ð°Ñ‚ÑŒ Ð´ÐµÑ‚Ð°Ð»Ð¸, Ñ€Ð°ÑÑÐ¼Ð¾Ñ‚Ñ€Ð¸Ð¼ ÐµÐ³Ð¾ ÐºÐ°Ñ€ÑŒÐµÑ€Ð½Ñ‹Ð¹ Ð¿ÑƒÑ‚ÑŒ Ð¿Ð¾Ð¿Ð¾Ð´Ñ€Ð¾Ð±Ð½ÐµÐµ. \r\n \r\nÐ¡ÐµÑ€Ð³ÐµÐ¹ Ð¡Ð°Ñ€Ð¾ÑÐ½ â€” Ð²Ñ‹Ð¿ÑƒÑÐºÐ½Ð¸Ðº ÐžÐ´ÐµÑÑÐºÐ¾Ð¹ Ð°ÐºÐ°Ð´ÐµÐ¼Ð¸Ð¸ ÑÐ²ÑÐ·Ð¸ Ð¸ ÑÐ²Ð¾ÑŽ ÐºÐ°Ñ€ÑŒÐµÑ€Ñƒ Ð½Ð°Ñ‡Ð°Ð» Ñ Ñ€Ð°Ð±Ð¾Ñ‚Ñ‹ Ð¿Ð¾ ÑÐ¿ÐµÑ†Ð¸Ð°Ð»ÑŒÐ½Ð¾ÑÑ‚Ð¸. Ð’ Ñ‚ÐµÐ»ÐµÐºÐ¾Ð¼Ð¼ÑƒÐ½Ð¸ÐºÐ°Ñ†Ð¸Ð¾Ð½Ð½Ð¾Ð¹ ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ð¸ Ð¾Ð½ Ð½Ðµ Ñ…Ð²Ð°Ñ‚Ð°Ð» Ð±Ð¾Ð»ÑŒÑˆÐ¸Ñ… Ð·Ð²ÐµÐ·Ð´ Ñ Ð½ÐµÐ±Ð° Ð¸ Ñ€ÐµÑˆÐ¸Ð» Ð¾Ñ‚Ð»Ð¸Ñ‡Ð¸Ñ‚ÑŒÑÑ Ð² Ð³Ð»Ð°Ð·Ð°Ñ… Ñ€ÑƒÐºÐ¾Ð²Ð¾Ð´ÑÑ‚Ð²Ð° Ð¸Ð½Ð°Ñ‡Ðµ â€” Ð² ÐºÐ°Ñ‡ÐµÑÑ‚Ð²Ðµ Ð´Ð¾Ð½Ð¾ÑÑ‡Ð¸ÐºÐ°. Ð’ Ð¾Ð±Ð¼ÐµÐ½ Ð½Ð° Ð¿Ð¾Ð±Ð»Ð°Ð¶ÐºÐ¸ Ð¸ Ð±Ð¾Ð½ÑƒÑÑ‹ Ð¾Ð½ Ð¿Ñ€ÐµÐ´Ð»Ð¾Ð¶Ð¸Ð» Ð½Ð°Ñ‡Ð°Ð»ÑŒÑÑ‚Ð²Ñƒ Ð¸Ð½Ñ„Ð¾Ñ€Ð¼Ð°Ñ†Ð¸ÑŽ Ð¾ Ñ‚Ð¾Ð¼, Ñ‡ÐµÐ¼ Â«Ð´Ñ‹ÑˆÐ¸Ñ‚Â» ÐºÐ¾Ð»Ð»ÐµÐºÑ‚Ð¸Ð², ÐºÑ‚Ð¾ Ñ ÐºÐµÐ¼ Ð´Ñ€ÑƒÐ¶Ð¸Ñ‚ Ð¸ Ð²Ñ€Ð°Ð¶Ð´ÑƒÐµÑ‚, Ð¾ Ñ‡ÐµÐ¼ Ð³Ð¾Ð²Ð¾Ñ€ÑÑ‚ Ð² ÐºÑƒÑ€Ð¸Ð»ÐºÐ°Ñ… Ð¸ Ñ‚Ð¾Ð¼Ñƒ Ð¿Ð¾Ð´Ð¾Ð±Ð½Ð¾Ðµ. ÐžÐ´Ð½Ð°ÐºÐ¾ Ð¿Ñ€ÐµÐ´Ð»Ð¾Ð¶ÐµÐ½Ð¸Ðµ Ð½Ðµ Ð²ÑÑ‚Ñ€ÐµÑ‚Ð¸Ð»Ð¾ Ð¾Ñ‚ÐºÐ»Ð¸ÐºÐ°, Ð¸ Ð½ÐµÑÐ¾ÑÑ‚Ð¾ÑÐ²ÑˆÐµÐ³Ð¾ÑÑ ÑÑ‚ÑƒÐºÐ°Ñ‡Ð° Ð²Ñ‹Ð½ÑƒÐ´Ð¸Ð»Ð¸ ÑƒÐ²Ð¾Ð»Ð¸Ñ‚ÑŒÑÑ. Ð¡Ð²Ð¾Ð¹ Ñ‚Ð°Ð»Ð°Ð½Ñ‚ Ð´Ð¾Ð½Ð¾ÑÑ‡Ð¸ÐºÐ° Ð¡Ð°Ñ€Ð¾ÑÐ½ Ñ€ÐµÐ°Ð»Ð¸Ð·Ð¾Ð²Ð°Ð» Ð¿Ð¾Ð·Ð¶Ðµ, ÑƒÐ¶Ðµ Ð² Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´. \r\n \r\nÐ—Ð´ÐµÑÑŒ Ð¾Ð½, ÐºÐ°Ð·Ð°Ð»Ð¾ÑÑŒ, Ð½Ð°ÑˆÐµÐ» ÑÐµÐ±Ñ Ð¸ Ñ€Ð°ÑÐºÑ€Ñ‹Ð» Ð¿Ð¾Ñ‚ÐµÐ½Ñ†Ð¸Ð°Ð». Ð’ 2005-2006 Ð³Ð³. Ð¡ÐµÑ€Ð³ÐµÐ¹ Ð¡Ð°Ñ€Ð¾ÑÐ½ Ð·Ð°Ð½Ð¸Ð¼Ð°Ð» Ð´Ð¾Ð»Ð¶Ð½Ð¾ÑÑ‚ÑŒ Ñ€ÐµÐ³Ð¸Ð¾Ð½Ð°Ð»ÑŒÐ½Ð¾Ð³Ð¾ ÐºÑƒÑ€Ð°Ñ‚Ð¾Ñ€Ð° Ð² Ð£ÐºÑ€Ð°Ð¸Ð½Ðµ. Ð¤Ð°ÐºÑ‚Ð¸Ñ‡ÐµÑÐºÐ¸, Ð¾Ð½ ÑÐ²Ð»ÑÐ»ÑÑ Ð¿ÐµÑ€Ð²Ñ‹Ð¼ Ð»Ð¸Ñ†Ð¾Ð¼ Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´ Ð² ÑÑ‚Ñ€Ð°Ð½Ðµ Ð¸ Ñ€ÑƒÐºÐ¾Ð²Ð¾Ð´Ð¸Ð» Ð±Ð¾Ð»ÐµÐµ Ñ‡ÐµÐ¼ Ñ‚Ñ€ÐµÐ¼Ñ Ð´ÐµÑÑÑ‚ÐºÐ°Ð¼Ð¸ Ð¾Ñ„Ð¸ÑÐ¾Ð² Ð² Ð´ÐµÑÑÑ‚ÐºÐ°Ñ… Ð³Ð¾Ñ€Ð¾Ð´Ð¾Ð². ÐšÑ€Ð¾Ð¼Ðµ Ñ‚Ð¾Ð³Ð¾, Ð¡Ð°Ñ€Ð¾ÑÐ½ Ð¾Ñ‚Ð²ÐµÑ‡Ð°Ð» Ð·Ð° Ð´ÐµÑÑ‚ÐµÐ»ÑŒÐ½Ð¾ÑÑ‚ÑŒ Ð¾Ñ„Ð¸ÑÐ¾Ð² Ð·Ð° Ñ€ÑƒÐ±ÐµÐ¶Ð¾Ð¼ â€” ÐµÐ¼Ñƒ Ð¿Ð¾Ð´Ñ‡Ð¸Ð½ÑÐ»Ð¸ÑÑŒ Ñ„Ð¸Ð»Ð¸Ð°Ð»Ñ‹ Ð² ÐŸÐ¾Ñ€Ñ‚ÑƒÐ³Ð°Ð»Ð¸Ð¸, Ð˜Ñ‚Ð°Ð»Ð¸Ð¸, Ð’ÐµÐ½Ð³Ñ€Ð¸Ð¸, ÐŸÐ¾Ð»ÑŒÑˆÐµ, ÐœÐ°Ð»Ð°Ð¹Ð·Ð¸Ð¸ Ð¸ Ñ‚.Ð´. \r\n \r\nÐ­Ñ‚Ð° Ñ€ÑƒÐºÐ¾Ð²Ð¾Ð´ÑÑ‰Ð°Ñ Ñ€Ð°Ð±Ð¾Ñ‚Ð° Ð¾Ñ‡ÐµÐ½ÑŒ Ñ…Ð¾Ñ€Ð¾ÑˆÐ¾ Ð¾Ð¿Ð»Ð°Ñ‡Ð¸Ð²Ð°Ð»Ð°ÑÑŒ â€” Ð¡ÐµÑ€Ð³ÐµÐ¹ Ð¡Ð°Ñ€Ð¾ÑÐ½ ÐºÐ°Ñ‚Ð°Ð»ÑÑ ÐºÐ°Ðº ÑÑ‹Ñ€ Ð² Ð¼Ð°ÑÐ»Ðµ. Ð˜ ÐµÑÐ»Ð¸ Ð²Ñ‹ Ð´ÑƒÐ¼Ð°ÐµÑ‚Ðµ, Ñ‡Ñ‚Ð¾ Ð¿Ð»Ð°Ñ‚Ð¸Ð»Ð¸ ÐµÐ¼Ñƒ Ð·Ð° Ð¾Ð±Ñ‰ÐµÑÑ‚Ð²ÐµÐ½Ð½Ð¾ Ð¿Ð¾Ð»ÐµÐ·Ð½ÑƒÑŽ Ð´ÐµÑÑ‚ÐµÐ»ÑŒÐ½Ð¾ÑÑ‚ÑŒ, Ð²Ñ‹ Ð¾ÑˆÐ¸Ð±Ð°ÐµÑ‚ÐµÑÑŒ. ÐšÐ°Ðº Ð²ÑÐµ Ñ€ÑƒÐºÐ¾Ð²Ð¾Ð´Ð¸Ñ‚ÐµÐ»Ð¸ Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´, Ð¡Ð°Ñ€Ð¾ÑÐ½ ÑÐ¸Ð´ÐµÐ» Ð½Ð° Ð¿Ñ€Ð¾Ñ†ÐµÐ½Ñ‚Ðµ Ð¾Ñ‚ ÑÑƒÐ¼Ð¼Ñ‹ Ñ Ñ…Ð°Ñ€Ð°ÐºÑ‚ÐµÑ€Ð½Ñ‹Ð¼ Ð½Ð°Ð·Ð²Ð°Ð½Ð¸ÐµÐ¼ Â«Ð¸Ð½Ð°ÑƒÑ‚Â» (in-out). Ð˜Ð½Ð°ÑƒÑ‚ â€” ÑÑ‚Ð¾ Ñ€Ð°Ð·Ð½Ð¸Ñ†Ð° Ð¼ÐµÐ¶Ð´Ñƒ Ð²Ð²Ð¾Ð´Ð¾Ð¼ ÐºÐ»Ð¸ÐµÐ½Ñ‚ÑÐºÐ¸Ñ… Ð´ÐµÐ½ÐµÐ³ Ð² ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸ÑŽ Ð¸ Ð²Ñ‹Ð²Ð¾Ð´Ð¾Ð¼ Ð¸Ð· Ð½ÐµÐµ. Ð˜ Ð² Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´ ÑÑ‚Ð¾ ÑÐ¾ÑÑ‚Ð°Ð²Ð»ÑÐ»Ð¾ Ð³Ð¸Ð³Ð°Ð½Ñ‚ÑÐºÑƒÑŽ ÑÑƒÐ¼Ð¼Ñƒ. Ð›Ð¸ÑˆÑŒ Ð² ÑƒÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¸Ñ… Ð¾Ñ„Ð¸ÑÐ°Ñ… Ð»ÑŽÐ´Ð¸ ÐµÐ¶ÐµÐ¼ÐµÑÑÑ‡Ð½Ð¾ Ð¸Ð½Ð²ÐµÑÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ð»Ð¸ Ð¿Ð¾Ð»Ñ‚Ð¾Ñ€Ð° Ð¼Ð¸Ð»Ð»Ð¸Ð¾Ð½Ð°Ð¼Ð¸ Ð´Ð¾Ð»Ð»Ð°Ñ€Ð¾Ð² Ð¸ Ð±Ð¾Ð»ÐµÐµ, Ð° Ð²Ñ‹Ð²Ð¾Ð´Ð¸Ð»Ð¸ Ð² Ñ‚Ñ€Ð¸ Ñ€Ð°Ð·Ð° Ð¼ÐµÐ½ÑŒÑˆÐµ â€” Ð¾ÐºÐ¾Ð»Ð¾ 500 Ñ‚Ñ‹ÑÑÑ‡. Ð˜Ð½Ð°ÑƒÑ‚ Ð²Ñ‹Ñ…Ð¾Ð´Ð¸Ð» Ð² Ñ€Ð°Ð·Ð¼ÐµÑ€Ðµ Ð¼Ð¸Ð»Ð»Ð¸Ð¾Ð½Ð°, Ð¸ Ð¾Ñ‚ ÑÑ‚Ð¾Ð¹ ÑÑƒÐ¼Ð¼Ñ‹ Ð¡ÐµÑ€Ð³ÐµÐ¹ Ð¡Ð°Ñ€Ð¾ÑÐ½ Ð¿Ð¾Ð»ÑƒÑ‡Ð°Ð» 3%. Ð¢Ð°ÐºÐ¸Ð¼ Ð¾Ð±Ñ€Ð°Ð·Ð¾Ð¼, ÐµÐ³Ð¾ Ð´Ð¾Ñ…Ð¾Ð´ ÑÐ¾ÑÑ‚Ð°Ð²Ð»ÑÐ» Ð½Ðµ Ð¼ÐµÐ½ÐµÐµ 30 Ñ‚Ñ‹ÑÑÑ‡ Ð´Ð¾Ð»Ð»Ð°Ñ€Ð¾Ð² Ð² Ð¼ÐµÑÑÑ†. ÐžÐ´Ð½Ð°ÐºÐ¾ ÐµÐ³Ð¾ Ð°Ð»Ñ‡Ð½Ð¾ÑÑ‚ÑŒ Ñ‚Ñ€ÐµÐ±Ð¾Ð²Ð°Ð»Ð° Ð±Ð¾Ð»ÑŒÑˆÐµÐ³Ð¾. Ð¡ÐµÑ€Ð³ÐµÐ¹ Ð¡Ð°Ñ€Ð¾ÑÐ½ Ð¿Ñ‹Ñ‚Ð°Ð»ÑÑ Ð¸Ð·Ð±ÐµÐ¶Ð°Ñ‚ÑŒ Ð²Ð¾Ð¾Ð±Ñ‰Ðµ ÐºÐ°ÐºÐ¾Ð³Ð¾-Ð»Ð¸Ð±Ð¾ Ð²Ñ‹Ð²Ð¾Ð´Ð° ÑÑ€ÐµÐ´ÑÑ‚Ð² Ð¸Ð· ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ð¸ Ð¸ Ð´Ð»Ñ ÑÑ‚Ð¾Ð³Ð¾ Ñ‚Ñ€ÐµÐ±Ð¾Ð²Ð°Ð» Ñƒ Ð¿Ð¾Ð´Ñ‡Ð¸Ð½ÐµÐ½Ð½Ñ‹Ñ… ÑƒÐ³Ð¾Ð²Ð°Ñ€Ð¸Ð²Ð°Ñ‚ÑŒ ÐºÐ»Ð¸ÐµÐ½Ñ‚Ð¾Ð² ÑƒÑ‡Ð°ÑÑ‚Ð²Ð¾Ð²Ð°Ñ‚ÑŒ Ð² ÑÑƒÐ³ÑƒÐ±Ð¾ Ð¼Ð¾ÑˆÐµÐ½Ð½Ð¸Ñ‡ÐµÑÐºÐ¾Ð¼ Ð¿Ñ€Ð¾ÐµÐºÑ‚Ðµ Â«Ð‘Ð¸Ñ€Ð¶Ð° Ñ‚Ñ€ÐµÐ¹Ð´ÐµÑ€Ð¾Ð²Â». Ð¢Ð¾Ñ€Ð³Ð¾Ð²Ð°Ñ‚ÑŒ Ð½Ð° Ð±Ð¸Ñ€Ð¶Ðµ â€” ÑÐ»Ð¾Ð¶Ð½Ð°Ñ Ð¸ Ð½ÐµÑ€Ð²Ð½Ð°Ñ Ð´ÐµÑÑ‚ÐµÐ»ÑŒÐ½Ð¾ÑÑ‚ÑŒ, Ð° Ð´Ð°Ð½Ð½Ñ‹Ð¹ Ð¿Ñ€Ð¾ÐµÐºÑ‚ Ð¾Ð±ÐµÑ‰Ð°Ð» ÑÐ¾Ð¸Ð·Ð¼ÐµÑ€Ð¸Ð¼Ñ‹Ð¹ Ð¿Ð°ÑÑÐ¸Ð²Ð½Ñ‹Ð¹ Ð´Ð¾Ñ…Ð¾Ð´ Ð¿ÑƒÑ‚ÐµÐ¼ Ð´Ð¾Ð²ÐµÑ€Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ð¾Ð³Ð¾ ÑƒÐ¿Ñ€Ð°Ð²Ð»ÐµÐ½Ð¸Ñ ÑÑ€ÐµÐ´ÑÑ‚Ð² ÐºÐ»Ð¸ÐµÐ½Ñ‚Ð¾Ð². Ð‘Ñ€Ð¾ÐºÐµÑ€ Ð½Ðµ Ð¸Ð¼ÐµÐµÑ‚ Ð¿Ñ€Ð°Ð²Ð° ÑÑ‚Ð¸Ð¼ Ð·Ð°Ð½Ð¸Ð¼Ð°Ñ‚ÑŒÑÑ, Ð¿Ð¾ÑÑ‚Ð¾Ð¼Ñƒ Â«Ð‘Ð¸Ñ€Ð¶Ð° Ñ‚Ñ€ÐµÐ¹Ð´ÐµÑ€Ð¾Ð²Â» Ñ€ÐµÐºÐ»Ð°Ð¼Ð¸Ñ€Ð¾Ð²Ð°Ð»Ð°ÑÑŒ ÐºÐ°Ðº Ð½ÐµÐ·Ð°Ð²Ð¸ÑÐ¸Ð¼Ñ‹Ð¹ Ð¿Ñ€Ð¾ÐµÐºÑ‚, Ð² ÐºÐ¾Ñ‚Ð¾Ñ€Ð¾Ð¼ Ñ€Ð°Ð±Ð¾Ñ‚Ð°ÑŽÑ‚ Ñ‚Ñ€ÐµÐ¹Ð´ÐµÑ€Ñ‹-Ð¿Ñ€Ð¾Ñ„ÐµÑÑÐ¸Ð¾Ð½Ð°Ð»Ñ‹, Ð½Ðµ Ð¸Ð¼ÐµÑŽÑ‰Ð¸Ðµ Ð¾Ñ‚Ð½Ð¾ÑˆÐµÐ½Ð¸Ñ Ðº Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´. ÐÐ° ÑÐ°Ð¼Ð¾Ð¼ Ð´ÐµÐ»Ðµ, Ñ‚Ñ€ÐµÐ¹Ð´ÐµÑ€Ñ‹ Ð±Ñ‹Ð»Ð¸ Ð¿Ð¾Ð»Ð½Ð¾ÑÑ‚ÑŒÑŽ Ð¿Ð¾Ð´ÐºÐ¾Ð½Ñ‚Ñ€Ð¾Ð»ÑŒÐ½Ñ‹, Ð¸ Ð¿Ð¾ Ð·Ð²Ð¾Ð½ÐºÑƒ Ð¾Ñ‚ Ð¡Ð°Ñ€Ð¾ÑÐ½Ð° ÑÐ»Ð¸Ð²Ð°Ð»Ð¸ Ð´Ð¾Ð²ÐµÑ€ÐµÐ½Ð½Ñ‹Ðµ Ð¸Ð¼ Ð´ÐµÐ½ÑŒÐ³Ð¸ Ð² Ð½Ð¾Ð»ÑŒ, Ð¸Ð½Ð¾Ð³Ð´Ð° Ð¼ÐµÐ½ÑŒÑˆÐµ Ñ‡ÐµÐ¼ Ð·Ð° ÑÑƒÑ‚ÐºÐ¸. \r\n \r\nÐ‘Ð»Ð°Ð³Ð¾Ð´Ð°Ñ€Ñ Ð¿ÐµÑ€ÐµÐ²Ð¾Ð´Ñƒ Ð±Ð¾Ð»ÑŒÑˆÐ¸Ð½ÑÑ‚Ð²Ð° ÐºÐ»Ð¸ÐµÐ½Ñ‚Ð¾Ð² Ð½Ð° Â«Ð‘Ð¸Ñ€Ð¶Ñƒ Ñ‚Ñ€ÐµÐ¹Ð´ÐµÑ€Ð¾Ð²Â», Ð²Ñ‹Ð²Ð¾Ð´Ð¸Ñ‚ÑŒ Ð¿Ñ€Ð°ÐºÑ‚Ð¸Ñ‡ÐµÑÐºÐ¸ Ð±Ñ‹Ð»Ð¾ Ð½ÐµÑ‡ÐµÐ³Ð¾, Ñ‚Ð°Ðº ÐºÐ°Ðº Ð² Ð¿Ñ€Ð¾ÐµÐºÑ‚Ðµ Ð¸Ð¼ ÑÐ»Ð¸Ð²Ð°Ð»Ð¸ Ð²ÑÐµ ÑÑ€ÐµÐ´ÑÑ‚Ð²Ð°. Ð˜ 3% Ð¡Ð°Ñ€Ð¾ÑÐ½Ð° Ð¿Ñ€ÐµÐ²Ñ€Ð°Ñ‰Ð°Ð»Ð¸ÑÑŒ ÑƒÐ¶Ðµ Ð² 45 Ñ‚Ñ‹Ñ. Ð´Ð¾Ð»Ð»Ð°Ñ€Ð¾Ð² Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ñ ÑƒÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¸Ñ… Ð¾Ñ„Ð¸ÑÐ¾Ð². Ð¢Ð°Ðº Ð¡ÐµÑ€Ð³ÐµÐ¹ Ð¡Ð°Ñ€Ð¾ÑÐ½ Ð¿Ñ€Ð¾Ñ†Ð²ÐµÑ‚Ð°Ð» Ð½Ð° Ð¿Ð¾Ñ…Ð¸Ñ‰ÐµÐ½Ð½Ñ‹Ñ… ÑÑ€ÐµÐ´ÑÑ‚Ð²Ð°Ñ… Ð½ÐµÑÐºÐ¾Ð»ÑŒÐºÐ¾ Ð»ÐµÑ‚. ÐžÐ´Ð½Ð°ÐºÐ¾ Ð² Ð¸Ñ‚Ð¾Ð³Ðµ ÐµÐ³Ð¾ Ð´ÐµÑÑ‚ÐµÐ»ÑŒÐ½Ð¾ÑÑ‚ÑŒ Ð¿ÐµÑ€ÐµÑˆÐ»Ð° Ð²ÑÐµ Ð³Ñ€Ð°Ð½Ð¸Ñ†Ñ‹ Ð´Ð°Ð¶Ðµ Ð¿Ð¾ Ð¼ÐµÑ€ÐºÐ°Ð¼ Teletrade, Ð¸ Ð¼Ð¾ÑˆÐµÐ½Ð½Ð¸ÐºÐ° ÑƒÐ²Ð¾Ð»Ð¸Ð»Ð¸. ÐŸÐ¾ÑÐ»Ðµ ÑÑ‚Ð¾Ð³Ð¾ Ð²Ñ‹ÑÑÐ½Ð¸Ð»Ð¾ÑÑŒ, Ñ‡Ñ‚Ð¾ ÑÐ¿ÐµÑ†Ð¸Ñ„Ð¸Ñ‡ÐµÑÐºÐ¸Ðµ Ñ‚Ð°Ð»Ð°Ð½Ñ‚Ñ‹, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ð¼Ð¸ Ð¾Ð½ Ð·Ð°Ñ€Ð°Ð±Ð°Ñ‚Ñ‹Ð²Ð°Ð», Ð½Ðµ Ð¸Ð¼ÐµÑŽÑ‚ Ð²Ð¾ÑÑ‚Ñ€ÐµÐ±Ð¾Ð²Ð°Ð½Ð½Ð¾ÑÑ‚Ð¸ Ð½Ð° Ñ€Ñ‹Ð½ÐºÐµ Ñ‚Ñ€ÑƒÐ´Ð°. Ð’Ð¾ Ð²ÑÑÐºÐ¾Ð¼ ÑÐ»ÑƒÑ‡Ð°Ðµ, Ð½Ð¸ Ð¾Ð´Ð½Ð° ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ñ Ð½Ðµ Ð¿Ñ€ÐµÐ´Ð»Ð¾Ð¶Ð¸Ð»Ð° ÐµÐ¼Ñƒ Ð´Ð¾Ð»Ð¶Ð½Ð¾ÑÑ‚Ð¸ Ñ‚Ð¾Ð¿-Ð¼ÐµÐ½ÐµÐ´Ð¶ÐµÑ€Ð°, Ð½Ð° ÐºÐ¾Ñ‚Ð¾Ñ€ÑƒÑŽ Ð¾Ð½ Ð¿Ñ€ÐµÑ‚ÐµÐ½Ð´Ð¾Ð²Ð°Ð» Ð¿Ð¾ÑÐ»Ðµ ÐºÐ°Ñ€ÑŒÐµÑ€Ð½Ñ‹Ñ… Ð²Ñ‹ÑÐ¾Ñ‚ Ð² Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´. Ð ÐµÐ¼ÐµÐ½ÑŒ Ð¿Ñ€Ð¸ÑˆÐ»Ð¾ÑÑŒ Ð·Ð°Ñ‚ÑÐ½ÑƒÑ‚ÑŒ â€” ÑƒÑ€Ð¾Ð²ÐµÐ½ÑŒ Ð¶Ð¸Ð·Ð½Ð¸ Ð¼Ð¾ÑˆÐµÐ½Ð½Ð¸ÐºÐ° ÑÐ¸Ð»ÑŒÐ½Ð¾ Ð¿Ñ€Ð¾ÑÐµÐ», Ð¿ÑÑ‚ÑŒ Ð»ÐµÑ‚ Ð¡Ð°Ñ€Ð¾ÑÐ½ Ð¿Ñ€Ð¾ÐµÐ´Ð°Ð» Ð·Ð°Ñ€Ð°Ð±Ð¾Ñ‚Ð°Ð½Ð½Ñ‹Ðµ Ñ€Ð°Ð½ÐµÐµ ÐºÐ°Ð¿Ð¸Ñ‚Ð°Ð»Ñ‹, Ñ‚Ð°Ðº Ð¸ Ð½Ðµ ÑÑƒÐ¼ÐµÐ² ÑÐµÐ±Ñ Ð¿Ñ€Ð¸ÑÑ‚Ñ€Ð¾Ð¸Ñ‚ÑŒ. \r\n \r\nÐ Ð·Ð°Ñ‚ÐµÐ¼ ÐµÐ¼Ñƒ Ð¿Ð¾Ð²ÐµÐ·Ð»Ð¾. Ð’ Â«Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´Â» Ð²ÑÐ¿Ð¾Ð¼Ð½Ð¸Ð»Ð¸ Ð¾ ÐµÐ³Ð¾ Ñ‚Ð°Ð»Ð°Ð½Ñ‚Ðµ Ðº Ñ€Ð°Ð·Ð²Ð¾Ð´Ñƒ Ð¸ Ð¼Ð¾ÑˆÐµÐ½Ð½Ð¸Ñ‡ÐµÑÑ‚Ð²Ñƒ Ð¸ Ñ€ÐµÑˆÐ¸Ð»Ð¸ Ð´Ð°Ñ‚ÑŒ Ð²Ñ‚Ð¾Ñ€Ð¾Ð¹ ÑˆÐ°Ð½Ñ. Ð¡Ð°Ñ€Ð¾ÑÐ½ Ñ Ñ€Ð°Ð´Ð¾ÑÑ‚ÑŒÑŽ ÑƒÑ…Ð²Ð°Ñ‚Ð¸Ð»ÑÑ Ð·Ð° Ð¿Ñ€ÐµÐ´Ð»Ð¾Ð¶ÐµÐ½Ð¸Ðµ Ð²ÐµÑ€Ð½ÑƒÑ‚ÑŒÑÑ. Ð¢ÐµÐ¿ÐµÑ€ÑŒ ÐµÐ¼Ñƒ Ð¿Ñ€ÐµÐ´Ð»Ð¾Ð¶Ð¸Ð»Ð¸ Ð´Ð¾Ð»Ð¶Ð½Ð¾ÑÑ‚ÑŒ ÐµÑ‰Ðµ ÑÐ¾Ð»Ð¸Ð´Ð½ÐµÐµ â€” Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð° ÐºÐ»Ð¸ÐµÐ½Ñ‚ÑÐºÐ¸Ñ… Ð¾Ñ„Ð¸ÑÐ¾Ð² Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´ Ð² Ð•Ð²Ñ€Ð¾Ð¿Ðµ: Ð£ÐºÑ€Ð°Ð¸Ð½Ðµ, ÐŸÐ¾Ñ€Ñ‚ÑƒÐ³Ð°Ð»Ð¸Ð¸, Ð˜Ñ‚Ð°Ð»Ð¸Ð¸, Ð’ÐµÐ½Ð³Ñ€Ð¸Ð¸, Ð ÑƒÐ¼Ñ‹Ð½Ð¸Ð¸ Ð¸ ÐŸÐ¾Ð»ÑŒÑˆÐµ. ÐšÐ°Ðº Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€, Ð¾Ð½ Ð¿Ð¾Ð»ÑƒÑ‡Ð°ÐµÑ‚ ÑÐ¾Ð»Ð¸Ð´Ð½ÑƒÑŽ Ð´Ð¾Ð»ÑŽ ÑƒÐ¶Ðµ Ð½ÐµÐ¿Ð¾ÑÑ€ÐµÐ´ÑÑ‚Ð²ÐµÐ½Ð½Ð¾ ÑÐ¾ ÑÐ»Ð¸Ñ‚Ñ‹Ñ… Ð´ÐµÐ¿Ð¾Ð·Ð¸Ñ‚Ð¾Ð². \r\n \r\nÐ¥Ð²Ð°ÑÑ‚Ð°Ñ‚ÑŒÑÑ Ñ‚Ð°ÐºÐ¾Ð¹ Ð½ÐµÑÐ»Ñ‹Ñ…Ð°Ð½Ð½Ð¾Ð¹ ÐºÐ°Ñ€ÑŒÐµÑ€Ð½Ð¾Ð¹ ÑƒÐ´Ð°Ñ‡ÐµÐ¹ Ð¸ Ñ€Ð¾ÑÑ‚Ð¾Ð¼ Ð² ÑÐ¾Ñ†ÑÐµÑ‚ÑÑ… Ð¡ÐµÑ€Ð³ÐµÐ¹ Ð¡Ð°Ñ€Ð¾ÑÐ½ Ð½Ðµ ÑÐ¿ÐµÑˆÐ¸Ñ‚ â€” Ð²Ð¸Ð´Ð¸Ð¼Ð¾, Ð±Ñ€ÐµÐ½Ð´ Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´ Ð½Ðµ Ð¸Ð· Ñ‚ÐµÑ…, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ðµ Ð¼Ð¾Ð³ÑƒÑ‚ Ð¿Ð¾Ð²Ñ‹ÑÐ¸Ñ‚ÑŒ ÑÐ¾Ñ†Ð¸Ð°Ð»ÑŒÐ½Ñ‹Ð¹ ÐºÐ°Ð¿Ð¸Ñ‚Ð°Ð». ÐÐ¾Ð²Ð¾Ð¸ÑÐ¿ÐµÑ‡ÐµÐ½Ð½Ñ‹Ð¹ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€ Ð¾Ð³Ñ€Ð°Ð½Ð¸Ñ‡Ð¸Ð»ÑÑ ÑÐ¾Ð¾Ð±Ñ‰ÐµÐ½Ð¸ÐµÐ¼ Ð¾ Ñ‚Ð¾Ð¼, Ñ‡Ñ‚Ð¾ Ð¾ÐºÐ°Ð·Ñ‹Ð²Ð°ÐµÑ‚ Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´ ÑƒÑÐ»ÑƒÐ³Ð¸ ÐºÐ¾Ð½ÑÑƒÐ»ÑŒÑ‚Ð°Ð½Ñ‚Ð°, Ð¾Ð´Ð½Ð°ÐºÐ¾ Ð¾Ð±Ð¼Ð°Ð½ÑƒÑ‚Ñ‹Ðµ ÐºÐ»Ð¸ÐµÐ½Ñ‚Ñ‹ Ð²Ñ‹Ð²ÐµÐ»Ð¸ Ð°Ñ„ÐµÑ€Ð¸ÑÑ‚Ð° Ð½Ð° Ñ‡Ð¸ÑÑ‚ÑƒÑŽ Ð²Ð¾Ð´Ñƒ. ÐŸÐ¾Ð»ÑƒÑ‡ÐµÐ½Ð¾ Ð´Ð¾ÐºÐ°Ð·Ð°Ñ‚ÐµÐ»ÑŒÑÑ‚Ð²Ð¾ Ñ‚Ð¾Ð³Ð¾, Ñ‡Ñ‚Ð¾ Ð¸Ð¼ÐµÐ½Ð½Ð¾ Ð¡ÐµÑ€Ð³ÐµÐ¹ Ð¡Ð°Ñ€Ð¾ÑÐ½ Ñ€ÑƒÐºÐ¾Ð²Ð¾Ð´Ð¸Ñ‚ ÑÐµÐ³Ð¾Ð´Ð½Ñ ÑƒÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¸Ð¼ Ð¸ Ð½Ðµ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´. ÐžÐ½ ÑÐ°Ð¼ Ð¿Ñ€Ð¸Ð·Ð½Ð°ÐµÑ‚ÑÑ Ð² ÑÑ‚Ð¾Ð¼ Ð½Ð° Ð²Ð¸Ð´ÐµÐ¾, Ñ€Ð°Ð·Ð´Ð¾Ð±Ñ‹Ñ‚Ð¾Ð¼ Ð¸Ð½Ð¸Ñ†Ð¸Ð°Ñ‚Ð¸Ð²Ð½Ð¾Ð¹ Ð³Ñ€ÑƒÐ¿Ð¿Ð¾Ð¹ Ð¿Ð¾ÑÑ‚Ñ€Ð°Ð´Ð°Ð²ÑˆÐ¸Ñ…. Ð’Ð¸Ð´ÐµÐ¾Ð´Ð¾ÐºÐ°Ð·Ð°Ñ‚ÐµÐ»ÑŒÑÑ‚Ð²Ð¾ Ð¿Ñ€ÐµÐ´ÑÑ‚Ð°Ð²Ð¸Ð»Ð¸ Ð½Ð° Ð¿Ñ€ÐµÑÑ-ÐºÐ¾Ð½Ñ„ÐµÑ€ÐµÐ½Ñ†Ð¸Ð¸, Ð¿Ñ€Ð¾ÑˆÐµÐ´ÑˆÐµÐ¹ Ð² Ð¸ÑŽÐ»Ðµ 2020 Ð³Ð¾Ð´Ð°, Ð½Ð° ÑÐºÑ€Ð°Ð½Ðµ Ð¼Ð¾Ð¶Ð½Ð¾ Ð½Ð°Ð±Ð»ÑŽÐ´Ð°Ñ‚ÑŒ Ð²ÑÑ‚Ñ€ÐµÑ‡Ñƒ Ð½Ð¾Ð²Ð¾Ð³Ð¾ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð° Ñ ÑÐ¾Ñ‚Ñ€ÑƒÐ´Ð½Ð¸ÐºÐ°Ð¼Ð¸ ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ð¸ Ð¦ÐµÐ½Ñ‚Ñ€ Ð‘Ð¸Ñ€Ð¶ÐµÐ²Ñ‹Ñ… Ð¢ÐµÑ…Ð½Ð¾Ð»Ð¾Ð³Ð¸Ð¹, ÑƒÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¾Ð¹ Â«Ð´Ð¾Ñ‡ÐºÐ¸Â» Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´. \r\n \r\n \r\n \r\nÐŸÑ€ÐµÑÑ-ÐºÐ¾Ð½Ñ„ÐµÑ€ÐµÐ½Ñ†Ð¸ÑŽ Ð¿Ñ€Ð¾Ð²ÐµÐ»Ð¸ ÐºÐ»Ð¸ÐµÐ½Ñ‚Ñ‹, Ð¿Ð¾Ñ‚ÐµÑ€ÑÐ²ÑˆÐ¸Ð¹ Ð² Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´ Ð´ÐµÐ½ÑŒÐ³Ð¸. ÐžÐ½Ð¸ Ñ…Ð¾Ñ‚ÑÑ‚ Ð¾Ð±Ð½Ð°Ñ€Ð¾Ð´Ð¾Ð²Ð°Ñ‚ÑŒ Ð½ÐµÐ·Ð°ÐºÐ¾Ð½Ð½ÑƒÑŽ Ð´ÐµÑÑ‚ÐµÐ»ÑŒÐ½Ð¾ÑÑ‚ÑŒ Ð±Ñ€Ð¾ÐºÐµÑ€Ð°-Ð¼Ð¾ÑˆÐµÐ½Ð½Ð¸ÐºÐ° Ð¸ ÑÐ´ÐµÐ»Ð°Ñ‚ÑŒ Ð´Ð¾ÑÑ‚Ð¾ÑÐ½Ð¸ÐµÐ¼ Ð¿ÑƒÐ±Ð»Ð¸ÐºÐ¸ Ð¸Ð¼ÐµÐ½Ð° Ð²ÑÐµÑ… Ð¾Ñ€Ð³Ð°Ð½Ð¸Ð·Ð°Ñ‚Ð¾Ñ€Ð¾Ð² Ð¼Ð°Ñ…Ð¸Ð½Ð°Ñ†Ð¸Ð¹. Ð Ñ‚Ð°ÐºÐ¶Ðµ Ð¿Ð¾Ð¿Ñ‹Ñ‚Ð°Ñ‚ÑŒÑÑ Ð²ÐµÑ€Ð½ÑƒÑ‚ÑŒ ÑÐ²Ð¾Ð¸ Ð´ÐµÐ½ÑŒÐ³Ð¸. Ð¡Ñ€ÐµÐ´Ð¸ Ð¾Ð³Ñ€Ð¾Ð¼Ð½Ð¾Ð³Ð¾ ÐºÐ¾Ð»Ð¸Ñ‡ÐµÑÑ‚Ð²Ð° ÑÐ¾Ð±Ñ€Ð°Ð½Ð½Ñ‹Ñ… Ð¸Ð¼Ð¸ Ð¼Ð°Ñ‚ÐµÑ€Ð¸Ð°Ð»Ð¾Ð², ÐµÑÑ‚ÑŒ Ð²ÑÐµ ÑÑ…ÐµÐ¼Ñ‹ Ñ€Ð°Ð·Ð²Ð¾Ð´Ð°, Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·ÑƒÐµÐ¼Ñ‹Ðµ Ð² Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´. ÐÐ°Ð¿Ñ€Ð¸Ð¼ÐµÑ€, Ð¿Ñ€Ð¾ÐµÐºÑ‚ Â«Ð¡Ð¸Ð½Ñ…Ñ€Ð¾Ð½Ð½Ð°Ñ Ñ‚Ð¾Ñ€Ð³Ð¾Ð²Ð»ÑÂ» â€” Ð¿Ð¾Ñ‚Ð¾Ð¼Ð¾Ðº Ð¿ÐµÑ‡Ð°Ð»ÑŒÐ½Ð¾ Ð¸Ð·Ð²ÐµÑÑ‚Ð½Ð¾Ð¹ (Ð½Ð¾ Ð½ÐµÐ²ÐµÑ€Ð¾ÑÑ‚Ð½Ð¾ Ð¿Ñ€Ð¸Ð±Ñ‹Ð»ÑŒÐ½Ð¾Ð¹) Â«Ð‘Ð¸Ñ€Ð¶Ð¸ Ñ‚Ñ€ÐµÐ¹Ð´ÐµÑ€Ð¾Ð²Â». Ð–Ð¸Ð²Ñ‹Ñ… Ñ‚Ñ€ÐµÐ¹Ð´ÐµÑ€Ð¾Ð² Ð·Ð°Ð¼ÐµÐ½Ð¸Ð»Ð¸ Ñ‚Ð¾Ñ€Ð³Ð¾Ð²Ñ‹Ðµ Ð¿Ñ€Ð¾Ð³Ñ€Ð°Ð¼Ð¼Ñ‹. ÐÐµÐºÐ¾Ñ‚Ð¾Ñ€Ð¾Ðµ Ð²Ñ€ÐµÐ¼Ñ Ñ‚Ð¾Ñ€Ð³Ð¾Ð²Ñ‹Ðµ Ñ€Ð¾Ð±Ð¾Ñ‚Ñ‹ Ñ‚Ð¾Ñ€Ð³ÑƒÑŽÑ‚ Ð² Ð¿Ð»ÑŽÑ. ÐÐ¾ Ð·Ð°Ñ‚ÐµÐ¼, ÐºÐ¾Ð³Ð´Ð° ÑÑƒÐ¼Ð¼Ð° ÑÑ€ÐµÐ´ÑÑ‚Ð² Ð½Ð° Ð¿Ð¾Ð´ÐºÐ»ÑŽÑ‡ÐµÐ½Ð½Ñ‹Ñ… ÑÑ‡ÐµÑ‚Ð°Ñ… Ð´Ð¾ÑÑ‚Ð¸Ð³Ð°ÐµÑ‚ Ð½ÑƒÐ¶Ð½Ð¾Ð¹ Ð¾Ñ‚Ð¼ÐµÑ‚ÐºÐ¸, Ð¿Ð¾ ÐºÐ¾Ð¼Ð°Ð½Ð´Ðµ Ð¡Ð°Ñ€Ð¾ÑÐ½Ð° Ð¿Ñ€Ð¾Ð³Ñ€Ð°Ð¼Ð¼Ð¸ÑÑ‚Ñ‹ Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´ Ð¼ÐµÐ½ÑÑŽÑ‚ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼ Ñ€Ð°Ð±Ð¾Ñ‚Ñ‹ Ñ€Ð¾Ð±Ð¾Ñ‚Ð° Ñ‚Ð°Ðº, Ñ‡Ñ‚Ð¾ Ð¿Ñ€Ð¾Ð³Ñ€Ð°Ð¼Ð¼Ð° Ð½Ð°Ñ‡Ð¸Ð½Ð°ÐµÑ‚ Ð¾Ñ‚ÐºÑ€Ñ‹Ð²Ð°Ñ‚ÑŒ ÑƒÐ±Ñ‹Ñ‚Ð¾Ñ‡Ð½Ñ‹Ðµ ÑÐ´ÐµÐ»ÐºÐ¸, Ð¿Ð¾ÐºÐ° Ð´ÐµÐ¿Ð¾Ð·Ð¸Ñ‚Ñ‹ Ð¿Ð¾Ð»Ð½Ð¾ÑÑ‚ÑŒÑŽ Ð½Ðµ ÑÐ¾Ð»ÑŒÑŽÑ‚ÑÑ. \r\n \r\nÐ’ Ð Ð¾ÑÑÐ¸Ð¸ Ð¿Ñ€Ð°Ð²Ð¾Ð¾Ñ…Ñ€Ð°Ð½Ð¸Ñ‚ÐµÐ»Ð¸ Ð¾ÑÐ²ÐµÐ´Ð¾Ð¼Ð»ÐµÐ½Ñ‹ Ð¾ Ñ‚Ð¾Ð¼, Ñ‡Ñ‚Ð¾ Ð¸Ð· ÑÐµÐ±Ñ Ð¿Ñ€ÐµÐ´ÑÑ‚Ð°Ð²Ð»ÑÐµÑ‚ Â«Ð¡Ð¸Ð½Ñ…Ñ€Ð¾Ð½Ð½Ð°Ñ Ñ‚Ð¾Ñ€Ð³Ð¾Ð²Ð»ÑÂ» â€” ÐµÑ‰Ðµ Ð² 2018 Ð³Ð¾Ð´Ñƒ Ð±Ñ‹Ð»Ð¾ Ð·Ð°Ð²ÐµÐ´ÐµÐ½Ð¾ ÑƒÐ³Ð¾Ð»Ð¾Ð²Ð½Ð¾Ðµ Ð´ÐµÐ»Ð¾ Ð¿Ð¾ Ñ„Ð°ÐºÑ‚Ñƒ Ð¼Ð¾ÑˆÐµÐ½Ð½Ð¸Ñ‡ÐµÑÑ‚Ð²Ð° Ð² ÑÑ‚Ð¾Ð¼ Ð¿Ñ€Ð¾ÐµÐºÑ‚Ðµ. \r\n \r\nÐ’ 2020 Ð³Ð¾Ð´Ñƒ ÐºÐ°Ð·Ð°Ñ…ÑÐºÐ¸Ðµ Ð¿Ñ€Ð°Ð²Ð¾Ð¾Ñ…Ñ€Ð°Ð½Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ðµ Ð¾Ñ€Ð³Ð°Ð½Ñ‹ Ð¿Ð¾ÑÐ»ÐµÐ´Ð¾Ð²Ð°Ð»Ð¸ Ð¿Ñ€Ð¸Ð¼ÐµÑ€Ñƒ Ñ€Ð¾ÑÑÐ¸Ð¹ÑÐºÐ¸Ñ… Ð¸ Ñ‚Ð°ÐºÐ¶Ðµ Ð½Ð°Ñ‡Ð°Ð»Ð¸ ÑƒÐ³Ð¾Ð»Ð¾Ð²Ð½Ð¾Ðµ Ð¿Ñ€Ð¾Ð¸Ð·Ð²Ð¾Ð´ÑÑ‚Ð²Ð¾. ÐÑ€ÐµÑÑ‚Ð¾Ð²Ð°Ð½Ñ‹ Ð¸ Ð¿Ð¾Ð¼ÐµÑ‰ÐµÐ½Ñ‹ Ð² Ð¡Ð˜Ð—Ðž Ñ€ÑƒÐºÐ¾Ð²Ð¾Ð´Ð¸Ñ‚ÐµÐ»ÑŒ ÐºÐ°Ð·Ð°Ñ…ÑÐºÐ¾Ð³Ð¾ Ñ„Ð¸Ð»Ð¸Ð°Ð»Ð° Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´ Ð¸ Ð³Ð»Ð°Ð²Ð° Wall Street Invest Partners â€” Ð´Ð¾Ñ‡ÐµÑ€Ð½ÐµÐ¹ ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ð¸. \r\n \r\nÂ«Ð‘Ð¾Ð»ÑŒÑˆÐ¸Ðµ Ð±Ð¾ÑÑÑ‹Â» Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´ Ð¡ÐµÑ€Ð³ÐµÐ¹ Ð¨Ð°Ð¼Ñ€Ð°ÐµÐ², ÐœÐ¸Ð½Ð³Ð¸ÑÐ½ ÐœÐ°Ð½Ð¶Ð¸ÐºÐ¾Ð² Ð¸ ÐžÐ»ÐµÐ³ Ð¡ÑƒÐ²Ð¾Ñ€Ð¾Ð² Ð¿Ñ‹Ñ‚Ð°ÑŽÑ‚ÑÑ Ð·Ð°Ð¼ÑÑ‚ÑŒ ÑƒÐ³Ð¾Ð»Ð¾Ð²Ð½Ñ‹Ðµ Ð´ÐµÐ»Ð°. ÐžÐ½Ð¸ Ð´Ð°ÑŽÑ‚ Ð¾Ð³Ñ€Ð¾Ð¼Ð½Ñ‹Ðµ Ð²Ð·ÑÑ‚ÐºÐ¸, ÐµÐ¶ÐµÐ¼ÐµÑÑÑ‡Ð½Ð¾ Ð¿ÐµÑ€ÐµÐ²Ð¾Ð´ÑÑ‚ Ð¿ÑÑ‚ÑƒÑŽ Ñ‡Ð°ÑÑ‚ÑŒ Ð²ÑÐµÑ… Ð¿Ð¾ÑÑ‚ÑƒÐ¿Ð»ÐµÐ½Ð¸Ð¹ â€” ÑÐ¾Ñ‚Ð½Ð¸ Ñ‚Ñ‹ÑÑÑ‡ Ð´Ð¾Ð»Ð»Ð°Ñ€Ð¾Ð². Ð£Ð´Ð°Ð»Ð¾ÑÑŒ Ð²Ñ‹ÑÑÐ½Ð¸Ñ‚ÑŒ Ñ‚Ð°ÐºÐ¶Ðµ, Ñ‡Ñ‚Ð¾ Ð¼Ð¾ÑˆÐµÐ½Ð½Ð¸ÐºÐ¾Ð² Ð²Ñ‹Ð½ÑƒÐ¶Ð´Ð°ÑŽÑ‚ 10% Ð¿Ñ€Ð¸Ð±Ñ‹Ð»ÐµÐ¹ Ð´Ð¾Ð¿Ð¾Ð»Ð½Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ð¾ Ð¾Ñ‚Ð´Ð°Ð²Ð°Ñ‚ÑŒ Ð½Ð° Ñ„Ð¸Ð½Ð°Ð½ÑÐ¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ðµ Ð²Ð¾Ð¹Ð½Ñ‹ Ð½Ð° Ð²Ð¾ÑÑ‚Ð¾ÐºÐµ Ð£ÐºÑ€Ð°Ð¸Ð½Ñ‹. Ð’Ñ‹Ñ…Ð¾Ð´Ð¸Ñ‚, Ñ‡Ñ‚Ð¾ Ð¡ÐµÑ€Ð³ÐµÐ¹ Ð¡Ð°Ñ€Ð¾ÑÐ½, Ð² ÐºÐ°Ñ‡ÐµÑÑ‚Ð²Ðµ Ð³Ð»Ð°Ð²Ñ‹ ÑƒÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¾Ð³Ð¾ Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´, Ð½Ðµ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð¾Ð±ÐºÑ€Ð°Ð´Ñ‹Ð²Ð°ÐµÑ‚ Ð»ÑŽÐ´ÐµÐ¹, Ð½Ð¾ Ð¸Ð· ÑÑ‚Ð¸Ñ… Ð¶Ðµ ÑÑ€ÐµÐ´ÑÑ‚Ð² ÑÐ¾Ð´ÐµÑ€Ð¶Ð¸Ñ‚ Ñ‚ÐµÑ€Ñ€Ð¾Ñ€Ð¸ÑÑ‚Ð¾Ð² Ð”ÐÐ  Ð¸ Ð›ÐÐ , ÑƒÐ±Ð¸Ð²Ð°ÑŽÑ‰Ð¸Ñ… ÑƒÐºÑ€Ð°Ð¸Ð½Ñ†ÐµÐ². \r\n \r\nÐ”Ð²Ð°Ð´Ñ†Ð°Ñ‚ÑŒ Ð¿ÑÑ‚ÑŒ Ð»ÐµÑ‚ Ð¼Ð°Ñ…Ð¸Ð½Ð°Ñ†Ð¸Ð¸ Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´ Ð² Ð£ÐºÑ€Ð°Ð¸Ð½Ðµ Ð¿Ñ€Ð¾Ñ…Ð¾Ð´ÑÑ‚ Ð¼Ð¸Ð¼Ð¾ Ð²Ð½Ð¸Ð¼Ð°Ð½Ð¸Ñ Ð²Ð»Ð°ÑÑ‚Ð½Ñ‹Ñ… ÑÑ‚Ñ€ÑƒÐºÑ‚ÑƒÑ€, Ð±Ñ€Ð¾ÐºÐµÑ€Ð°-Ð¼Ð¾ÑˆÐµÐ½Ð½Ð¸ÐºÐ° Ñ„Ð°ÐºÑ‚Ð¸Ñ‡ÐµÑÐºÐ¸ Ð½Ð¸ÐºÑ‚Ð¾ Ð½Ðµ ÐºÐ¾Ð½Ñ‚Ñ€Ð¾Ð»Ð¸Ñ€ÑƒÐµÑ‚. Ð¢ÐµÐ¼ Ð²Ñ€ÐµÐ¼ÐµÐ½ÐµÐ¼, ÐºÐ¾Ð»Ð¸Ñ‡ÐµÑÑ‚Ð²Ð¾ Ð»ÑŽÐ´ÐµÐ¹, Ð¿Ð¾ÑÑ‚Ñ€Ð°Ð´Ð°Ð²ÑˆÐ¸Ñ… Ð¾Ñ‚ ÑÑ‚Ð¾Ð¹ Ð´ÐµÑÑ‚ÐµÐ»ÑŒÐ½Ð¾ÑÑ‚Ð¸, Ð½Ð°ÑÑ‡Ð¸Ñ‚Ñ‹Ð²Ð°ÐµÑ‚ Ð´ÐµÑÑÑ‚ÐºÐ¸ Ñ‚Ñ‹ÑÑÑ‡, Ð° Ð² Ð¾Ñ„ÑˆÐ¾Ñ€Ñ‹ Ð¸Ð· ÑƒÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¾Ð¹ ÑÐºÐ¾Ð½Ð¾Ð¼Ð¸ÐºÐ¸ ÐµÐ¶ÐµÐ¼ÐµÑÑÑ‡Ð½Ð¾ Ð²Ñ‹Ð²Ð¾Ð´ÑÑ‚ÑÑ Ð¼Ð¸Ð»Ð»Ð¸Ð¾Ð½Ñ‹ Ð´Ð¾Ð»Ð»Ð°Ñ€Ð¾Ð². ÐŸÐ¾Ñ‡ÐµÐ¼Ñƒ Ð¶Ðµ Ð¿Ð¾Ð»Ð¸Ñ†Ð¸Ñ, Ð¿Ñ€Ð¾ÐºÑƒÑ€Ð°Ñ‚ÑƒÑ€Ð° Ð¸ Ð¡Ð‘Ð£ Ð½Ðµ Ð¶ÐµÐ»Ð°ÑŽÑ‚ Ð·Ð°Ð¼ÐµÑ‡Ð°Ñ‚ÑŒ Ð±ÐµÑÐ¿Ñ€ÐµÐ´ÐµÐ»Ð°, Ñ‚Ð²Ð¾Ñ€ÑÑ‰ÐµÐ³Ð¾ÑÑ Ñƒ Ð½Ð¸Ñ… Ð¿Ð¾Ð´ Ð½Ð¾ÑÐ¾Ð¼? Ð˜ÑÑ‚Ð¾Ñ‡Ð½Ð¸ÐºÐ¸ Ð² ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ð¸ Ñ€Ð°ÑÑÐºÐ°Ð·Ñ‹Ð²Ð°ÑŽÑ‚, Ñ‡Ñ‚Ð¾ Ð¡ÐµÑ€Ð³ÐµÐ¹ Ð¡Ð°Ñ€Ð¾ÑÐ½ ÑƒÐ²ÐµÑ€ÑÐµÑ‚ ÑƒÐ¿Ñ€Ð°Ð²Ð»ÑÑŽÑ‰Ð¸Ñ… Ð¾Ñ„Ð¸ÑÐ¾Ð²: Ð¸Ð¼ Ð½ÐµÑ‡ÐµÐ³Ð¾ Ð±Ð¾ÑÑ‚ÑŒÑÑ, Ð²Ñ‹ÑÑˆÐ¸Ðµ Ñ‡Ð¸Ð½Ñ‹ ÐºÐ¸Ð±ÐµÑ€Ð¿Ð¾Ð»Ð¸Ñ†Ð¸Ð¸ Ð½Ð°ÐºÐ¾Ñ€Ð¼Ð»ÐµÐ½Ñ‹ Ð¸ Ð¿Ñ€Ð¸Ñ€ÑƒÑ‡ÐµÐ½Ñ‹. Ð•ÑÐ»Ð¸ ÑÑ‚Ð¾ Ð¿Ñ€Ð°Ð²Ð´Ð°, Ñ‚Ð¾ Ð¡ÐµÑ€Ð³ÐµÐ¹ Ð¡Ð°Ñ€Ð¾ÑÐ½ Ð¿Ñ€Ð¾Ð´Ð¾Ð»Ð¶Ð¸Ñ‚ Ð±ÐµÐ·Ð½Ð°ÐºÐ°Ð·Ð°Ð½Ð½Ð¾ Ñ€Ð°Ð·Ð¾Ñ€ÑÑ‚ÑŒ ÑÑ‚Ñ€Ð°Ð½Ñƒ Ð¸ ÐµÐµ Ð¶Ð¸Ñ‚ÐµÐ»ÐµÐ¹, Ð·Ð°Ð¾Ð´Ð½Ð¾ ÑÐ¿Ð¾Ð½ÑÐ¸Ñ€ÑƒÑ Ð²Ð¾ÐµÐ½Ð½Ñ‹Ðµ Ð´ÐµÐ¹ÑÑ‚Ð²Ð¸Ñ Ð¿Ñ€Ð¾Ñ‚Ð¸Ð² Ð½ÐµÐµ Ð¶Ðµ. \r\n \r\n \r\n \r\n \r\nÐ¢ÐµÐ³Ð¸ ÑÑ‚Ð°Ñ‚ÑŒÐ¸: Ð¨Ð°Ð¼Ñ€Ð°ÐµÐ² Ð¡ÐµÑ€Ð³ÐµÐ¹Ð§ÐµÑ€Ð½Ð¾Ð±Ð°Ð¹ Ð’Ð»Ð°Ð´Ð¸Ð¼Ð¸Ñ€Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´Ð¡ÑƒÐ²Ð¾Ñ€Ð¾Ð² ÐžÐ»ÐµÐ³Ð¡Ð°Ñ€Ð¾ÑÐ½ Ð¡ÐµÑ€Ð³ÐµÐ¹ÐžÐžÐž Ð¢ÐµÐ»ÐµÑ‚Ñ€ÐµÐ¹Ð´ Ð“Ñ€ÑƒÐ¿Ð¿ÐœÐ¾ÑˆÐµÐ½Ð½Ð¸Ñ‡ÐµÑÑ‚Ð²Ð¾Ð¼Ð¾ÑˆÐµÐ½Ð½Ð¸ÐºÐ¸ÐœÐ¸Ð½Ð³Ð¸ÑÐ½ ÐœÐ°Ð½Ð¶Ð¸ÐºÐ¾Ð² \r\nÐ¡Ñ‚Ð°Ñ‚ÑŒÐ¸ Ð¿Ð¾ Ñ‚ÐµÐ¼Ðµ: \r\nÐ¡Ñ‚Ñ€Ð¾Ð¸Ñ‚ÐµÐ»ÑŒ Ð•Ð³Ð¾Ñ€Ð¾Ð² Ð² Ð¿Ð¾Ð¸ÑÐºÐ°Ñ… ÑÑƒÐ´ÐµÐ±Ð½Ð¾Ð¹ ÑÐ½Ð¸ÑÑ…Ð¾Ð´Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ð¾ÑÑ‚Ð¸ \r\nÐ Ð°Ð·Ð²Ð¾Ð´ Ð˜Ð»ÑŒÐ¸ ÐšÐ»Ð¸Ð³Ð¼Ð°Ð½Ð° Ð½Ð° $1 Ð¼Ð»Ð½ Ð¾Ñ†ÐµÐ½Ð¸Ð»Ð¸ ÑƒÑÐ»Ð¾Ð²Ð½Ð¾. Ð˜Ð³Ð¾Ñ€ÑŒ Ð®Ñ€Ð°ÑÐ¾Ð² Ð¸ Ð‘Ð°ÑˆÐ¸Ñ€ ÐšÑƒÑˆÑ‚Ð¾Ð² Ñ€Ð°ÑÐºÐ°ÑÐ»Ð¸ÑÑŒ Ð·Ð° Ð¿Ð¾Ð¿Ñ‹Ñ‚ÐºÑƒ \"Ð¾Ñ‚Ð¼Ð°Ð·Ð°Ñ‚ÑŒ\" Ñ€Ð°Ð·Ñ‹ÑÐºÐ¸Ð²Ð°ÐµÐ¼Ð¾Ð³Ð¾ Ð·Ð° Ñ…Ð¸Ñ‰ÐµÐ½Ð¸Ðµ 7 Ð¼Ð»Ñ€Ð´ Ñ€ÑƒÐ±. Ð¸Ð· Ð±Ð°Ð½ÐºÐ° \"ÐÐ³Ñ€Ð¾ÑÐ¾ÑŽÐ·\" \r\nÐ Ð¾ÑÑÐ¸Ð¹ÑÐºÐ¾Ð³Ð¾ Ð°Ð´Ð²Ð¾ÐºÐ°Ñ‚Ð° Ð¾ÑÑƒÐ´Ð¸Ð»Ð¸ Ð½Ð° Ñ‚Ñ€Ð¸ Ð³Ð¾Ð´Ð° Ð·Ð° Ð°Ñ„ÐµÑ€Ñƒ Ð½Ð° 7,4 Ð¼Ð¸Ð»Ð»Ð¸Ð¾Ð½Ð° Ñ€ÑƒÐ±Ð»ÐµÐ¹ \r\nÐ’ ÑÐµÑ‚Ð¸ Ð½Ð°Ñ‡Ð°Ð»Ð¸ Ð·Ð°Ñ€Ð°Ð±Ð°Ñ‚Ñ‹Ð²Ð°Ñ‚ÑŒ Ð½Ð° Ð¸Ð¼ÐµÐ½Ð¸ Ð³ÐµÐ½ÐµÑ€Ð°Ð»Ð° Ð¡ÑƒÑ€Ð¾Ð²Ð¸ÐºÐ¸Ð½Ð° \r\nÐ“Ð¾ÑÑ‚ÑŒ ÑÐ²ÑÐ·Ð°Ð» Ñ€Ð¾ÑÑÐ¸ÑÐ½ÐºÑƒ Ð¿Ð¾ÑÑÐ¾Ð¼ Ð¾Ñ‚ ÐºÐ¸Ð¼Ð¾Ð½Ð¾ Ð¸ Ð¾Ð³Ñ€Ð°Ð±Ð¸Ð» ÐµÐµ \r\nÐ Ð°ÑÐ¿ÐµÑ‡Ð°Ñ‚Ð°Ñ‚ÑŒ ÐŸÐ¾ÑÐ»Ð°Ñ‚ÑŒ Ð´Ñ€ÑƒÐ³Ñƒ', 1, '2023-07-08 07:17:15', '0000-00-00 00:00:00'),
(1622, 'HaroldDeste', '2amw@course-fitness.com', 'Denmark', '88326485611', 'æ­å®¢ä½¬ç²¾å“å’–å•¡ ï½œOKLAO COFFEEï½œè¦çš®å•†åŸŽï½œå’–å•¡è±†ï½œæŽ›è€³ï½œç²¾å“å’–å•¡ï½œå’–å•¡ç¦®ç›’ å°ˆè³£ï½œç²¾å“éºµåŒ… \r\n \r\nhttps://first-cafe.com/', 1, '2023-07-08 08:20:03', '0000-00-00 00:00:00'),
(1623, 'JamesKic', 'pdq0v@course-fitness.com', 'Vietnam', '81784132119', 'ä¸–ç•Œæ£’çƒç¶“å…¸è³½å³å°‡é–‹è·‘ï¼9Jå¨›æ¨‚åŸŽé™æ™‚æ´»å‹•å„ªæƒ  \r\n \r\n \r\nhttps://tx9j.tw/', 1, '2023-07-08 11:53:34', '0000-00-00 00:00:00'),
(1624, 'RobertVop', 'alfredegov@gmail.com', 'Georgia', '82734441716', 'Kaixo, zure prezioa jakin nahi nuen.', 1, '2023-07-09 03:20:03', '0000-00-00 00:00:00'),
(1625, 'LavillBox', 'revers@1ti.ru', 'United States', '87541574547', '[url=https://chimmed.ru/products/anti-glutathione-s-transferase-a5-id=4008165]anti-glutathione s-transferase a5 ÐºÑƒÐ¿Ð¸Ñ‚ÑŒ Ð¾Ð½Ð»Ð°Ð¹Ð½ Ð² Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚-Ð¼Ð°Ð³Ð°Ð·Ð¸Ð½Ðµ Ñ…Ð¸Ð¼Ð¼ÐµÐ´ [/url] \r\nTegs: [u]Ñ„ÐµÑ€Ñ€Ð¾Ð¸Ð½ Ñ€Ð°ÑÑ‚Ð²Ð¾Ñ€, Ð¾Ð²-Ð¸Ð½Ð´Ð¸ÐºÐ°Ñ‚Ð¾Ñ€, Ñ€ÐµÐ°Ð³. Ñ„Ð°Ñ€Ð¼. ÐºÑƒÐ¿Ð¸Ñ‚ÑŒ Ð¾Ð½Ð»Ð°Ð¹Ð½ Ð² Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚-Ð¼Ð°Ð³Ð°Ð·Ð¸Ð½Ðµ Ñ…Ð¸Ð¼Ð¼ÐµÐ´ [/u] \r\n[i]Ñ„ÐµÑ€Ñ€Ð¾Ð¸Ð½ Ñ€Ð°ÑÑ‚Ð²Ð¾Ñ€, Ð¾Ð²-Ð¸Ð½Ð´Ð¸ÐºÐ°Ñ‚Ð¾Ñ€, Ñ€ÐµÐ°Ð³. Ñ„Ð°Ñ€Ð¼. ÐºÑƒÐ¿Ð¸Ñ‚ÑŒ Ð¾Ð½Ð»Ð°Ð¹Ð½ Ð² Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚-Ð¼Ð°Ð³Ð°Ð·Ð¸Ð½Ðµ Ñ…Ð¸Ð¼Ð¼ÐµÐ´ [/i] \r\n[b]Ñ„ÐµÑ€Ñ€Ð¾Ð¸Ð½ ÑÑƒÐ»ÑŒÑ„Ð°Ñ‚ ÐºÑƒÐ¿Ð¸Ñ‚ÑŒ Ð¾Ð½Ð»Ð°Ð¹Ð½ Ð² Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚-Ð¼Ð°Ð³Ð°Ð·Ð¸Ð½Ðµ Ñ…Ð¸Ð¼Ð¼ÐµÐ´ [/b] \r\n \r\nanti-glutathione s-transferase mu 1 ÐºÑƒÐ¿Ð¸Ñ‚ÑŒ Ð¾Ð½Ð»Ð°Ð¹Ð½ Ð² Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚-Ð¼Ð°Ð³Ð°Ð·Ð¸Ð½Ðµ Ñ…Ð¸Ð¼Ð¼ÐµÐ´  https://chimmed.ru/products/anti-glutathione-s-transferase-mu-1-id=474985', 1, '2023-07-09 11:48:05', '0000-00-00 00:00:00'),
(1626, 'bam', '9whvjv7v@icloud.com', 'Nigeria', '85546839255', 'Hi, this is Julia. I am sending you my intimate photos as I promised. https://tinyurl.com/22r47ten', 1, '2023-07-09 02:07:54', '0000-00-00 00:00:00'),
(1627, 'letitiasm4', 'victoriaia60@yoshito5810.akio40.drkoop.site', '', '88634228371', 'Browse over 500 000 of the best porn galleries, daily updated collections\r\nhttp://porn.clipx.instasexyblog.com/?post-melinda \r\n\r\n humor car porn young girls teen porn amateur porn t8ube porn beat content control vintage fucking my sister porn \r\n\r\n', 1, '2023-07-09 02:20:22', '0000-00-00 00:00:00'),
(1628, 'Orlandofax', 'dfdffd@gmail.com', 'United States', '88465162321', '[url=http://smartmonetize.top/tovarka/penis/xrumer/1/]Fresh and free deepthroat popn! Watch -->[/url] \r\n \r\n<a href=\"http://smartmonetize.top/tovarka/penis/xrumer/1/\">Fresh and free deepthroat popn! Watch --></a> \r\n<meta http-equiv=\'refresh\' content=\'0; url=http://smartmonetize.top/tovarka/penis/xrumer/1/\'>', 1, '2023-07-10 01:26:07', '0000-00-00 00:00:00'),
(1629, 'Megan Atkinson', 'Megan Atkinson', 'Qdsbpgn', 'meganatkinson352@gmail.com', 'Hi there,\r\n\r\nWe run an Instagram growth service, which increases your number of followers both safely and practically. \r\n\r\n- Guaranteed: We guarantee to gain you 400-1200+ followers per month.\r\n- Real, human followers: People follow you because they are interested in your business or niche.\r\n- Safe: All actions are made manually. We do not use any bots.\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately.\r\n\r\nIf you are interested, and would like to see some of our previous work, let me know and we can discuss further.\r\n\r\nKind Regards,\r\nMegan', 1, '2023-07-10 04:04:16', '0000-00-00 00:00:00'),
(1630, 'Elinor Tuttle', 'Elinor Tuttle', 'Oumlc Ezqaefi', 'elinor.tuttle@gmail.com', 'Hello apogeegnss.com Admin.,\r\n\r\nIntroducing AdCreative.ai - the premier AI-powered advertising platform that\'s taking the industry by storm!\r\n\r\nAs a Global Partner with Google and a Premier Partner, we have exclusive access to the latest tools and insights to help your business succeed. And now, we\'re offering new users $500 in free Google Ad Credits to get started with advertising - no upfront costs, no hidden fees.\r\n\r\nWith AdCreative.ai, you\'ll enjoy advanced AI algorithms that optimize your campaigns for maximum impact, as well as seamless integration with Google Ads for unparalleled performance.\r\n\r\nDon\'t wait - sign up for our free trial today a https://free-trial.adcreative.ai/seo2650 and experience the power of AdCreative.ai for yourself!', 1, '2023-07-10 04:12:44', '0000-00-00 00:00:00'),
(1631, 'Eric Jones', 'Eric Jones', 'X u wjysai', 'ericjonesmyemail@gmail.com', 'Hi apogeegnss.com Admin! \r\n\r\nMy name is Eric and unlike a lot of emails you might get, I wanted to instead provide you with a word of encouragement â€“ Congratulations\r\n\r\nWhat for?  \r\n\r\nPart of my job is to check out websites and the work youâ€™ve done with apogeegnss.com definitely stands out. \r\n\r\nItâ€™s clear you took building a website seriously and made a real investment of time and resources into making it top quality.\r\n\r\nThere is, however, a catchâ€¦ more accurately, a questionâ€¦\r\n\r\nSo when someone like me happens to find your site â€“ maybe at the top of the search results (nice job BTW) or just through a random link, how do you know? \r\n\r\nMore importantly, how do you make a connection with that person?\r\n\r\nStudies show that 7 out of 10 visitors donâ€™t stick around â€“ theyâ€™re there one second and then gone with the wind.\r\n\r\nHereâ€™s a way to create INSTANT engagement that you may not have known aboutâ€¦ \r\n\r\nWeb Visitors Into Leads is a software widget thatâ€™s works on your site, ready to capture any visitorâ€™s Name, Email address and Phone Number.  It lets you know INSTANTLY that theyâ€™re interested â€“ so that you can talk to that lead while theyâ€™re literally checking out apogeegnss.com.\r\n\r\nCLICK HERE https://advanceleadgeneration.com to try out a Live Demo with Web Visitors Into Leads now to see exactly how it works.\r\n\r\nIt could be a game-changer for your business â€“ and it gets even betterâ€¦ once youâ€™ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation â€“ immediately (and thereâ€™s literally a 100X difference between contacting someone within 5 minutes versus 30 minutes.)\r\n\r\nPlus then, even if you donâ€™t close a deal right away, you can connect later on with text messages for new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything Iâ€™ve just described is simple, easy, and effective. \r\n\r\nCLICK HERE https://advanceleadgeneration.com to discover what Web Visitors Into Leads can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Web Visitors Into Leads offers a FREE 14 days trial â€“ and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right nowâ€¦ donâ€™t keep them waiting. \r\nCLICK HERE https://advanceleadgeneration.com to try Web Visitors Into Leads now.\r\n\r\nIf you\'d like to unsubscribe click here http://advanceleadgeneration.com/unsubscribe.aspx?d=apogeegnss.com\r\n', 1, '2023-07-10 07:19:00', '0000-00-00 00:00:00'),
(1632, 'Eric Jones', 'Eric Jones', 'Ikgapfazq', 'ericjonesmyemail@gmail.com', 'Dear apogeegnss.com Owner! \r\n\r\nMy name is Eric and unlike a lot of emails you might get, I wanted to instead provide you with a word of encouragement â€“ Congratulations\r\n\r\nWhat for?  \r\n\r\nPart of my job is to check out websites and the work youâ€™ve done with apogeegnss.com definitely stands out. \r\n\r\nItâ€™s clear you took building a website seriously and made a real investment of time and resources into making it top quality.\r\n\r\nThere is, however, a catchâ€¦ more accurately, a questionâ€¦\r\n\r\nSo when someone like me happens to find your site â€“ maybe at the top of the search results (nice job BTW) or just through a random link, how do you know? \r\n\r\nMore importantly, how do you make a connection with that person?\r\n\r\nStudies show that 7 out of 10 visitors donâ€™t stick around â€“ theyâ€™re there one second and then gone with the wind.\r\n\r\nHereâ€™s a way to create INSTANT engagement that you may not have known aboutâ€¦ \r\n\r\nWeb Visitors Into Leads is a software widget thatâ€™s works on your site, ready to capture any visitorâ€™s Name, Email address and Phone Number.  It lets you know INSTANTLY that theyâ€™re interested â€“ so that you can talk to that lead while theyâ€™re literally checking out apogeegnss.com.\r\n\r\nCLICK HERE http://jumboleadmagnet.com to try out a Live Demo with Web Visitors Into Leads now to see exactly how it works.\r\n\r\nIt could be a game-changer for your business â€“ and it gets even betterâ€¦ once youâ€™ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation â€“ immediately (and thereâ€™s literally a 100X difference between contacting someone within 5 minutes versus 30 minutes.)\r\n\r\nPlus then, even if you donâ€™t close a deal right away, you can connect later on with text messages for new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything Iâ€™ve just described is simple, easy, and effective. \r\n\r\nCLICK HERE http://jumboleadmagnet.com to discover what Web Visitors Into Leads can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Web Visitors Into Leads offers a FREE 14 days trial â€“ and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right nowâ€¦ donâ€™t keep them waiting. \r\nCLICK HERE http://jumboleadmagnet.com to try Web Visitors Into Leads now.\r\n\r\nIf you\'d like to unsubscribe click here http://jumboleadmagnet.com/unsubscribe.aspx?d=apogeegnss.com', 1, '2023-07-10 10:05:39', '0000-00-00 00:00:00'),
(1633, 'Eric Jones', 'Eric Jones', 'F Sjkw', 'ericjonesmyemail@gmail.com', 'Hi apogeegnss.com Owner!\r\n\r\nEric here with a quick thought about your website apogeegnss.com...\r\n\r\nIâ€™m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content. \r\n\r\nBut all too often, they come up short when it comes to engaging and connecting with anyone who visits.\r\n\r\nI get it â€“ itâ€™s hard.  Studies show 7 out of 10 people who land on a site, abandon it in moments without leaving even a trace.  You got the eyeball, but nothing else.\r\n\r\nHereâ€™s a solution for youâ€¦\r\n\r\nWeb Visitors Into Leads is a software widget thatâ€™s works on your site, ready to capture any visitorâ€™s Name, Email address and Phone Number.  Youâ€™ll know immediately theyâ€™re interested and you can call them directly to talk with them literally while theyâ€™re still on the web looking at your site.\r\n\r\nCLICK HERE http://jumboleadmagnet.com to try out a Live Demo with Web Visitors Into Leads now to see exactly how it works.\r\n\r\nIt could be huge for your business â€“ and because youâ€™ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation â€“ immediatelyâ€¦ and contacting someone in that 5 minute window is 100 times more powerful than reaching out 30 minutes or more later.\r\n\r\nPlus, with text messaging you can follow up later with new offers, content links, even just follow up notes to keep the conversation going.\r\n\r\nEverything Iâ€™ve just described is extremely simple to implement, cost-effective, and profitable. \r\n \r\nCLICK HERE http://jumboleadmagnet.com to discover what Web Visitors Into Leads can do for your business.\r\n\r\nYou could be converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Web Visitors Into Leads offers a FREE 14 days trial â€“ and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right nowâ€¦ donâ€™t keep them waiting. \r\nCLICK HERE http://jumboleadmagnet.com to try Web Visitors Into Leads now.\r\n\r\nIf you\'d like to unsubscribe click here http://jumboleadmagnet.com/unsubscribe.aspx?d=apogeegnss.com', 1, '2023-07-10 05:42:57', '0000-00-00 00:00:00'),
(1634, 'PetarWah', 'spbetcas738@gmail.com', 'Venezuela', '88215918634', 'Best onlÑ–nÐµ ÑÐ°sÑ–no \r\nBÑ–g bÐ¾nus Ð°nd FrÐµÐµsÑ€Ñ–ns \r\nSpÐ¾rt bÐµttÑ–ng Ð°nd pÐ¾kÐµr \r\n \r\ngo now https://tinyurl.com/3hvm2wxu', 1, '2023-07-11 04:21:14', '0000-00-00 00:00:00'),
(1635, 'Eric Jones', 'Eric Jones', 'Wjjcexyoy a', 'ericjonesmyemail@gmail.com', 'To the apogeegnss.com Admin.\r\n\r\nMy nameâ€™s Eric and for just a second, imagine thisâ€¦\r\n\r\n- Someone does a search and winds up at apogeegnss.com.\r\n\r\n- They hang out for a minute to check it out.  â€œIâ€™m interestedâ€¦ butâ€¦ maybeâ€¦â€\r\n\r\n- And then they hit the back button and check out the other search results instead. \r\n\r\n- Bottom line â€“ you got an eyeball, but nothing else to show for it.\r\n\r\n- There they go.\r\n\r\nThis isnâ€™t really your fault â€“ it happens a LOT â€“ studies show 7 out of 10 visitors to any site disappear without leaving a trace.\r\n\r\nBut you CAN fix that.\r\n\r\nWeb Visitors Into Leads is a software widget thatâ€™s works on your site, ready to capture any visitorâ€™s Name, Email address and Phone Number.  It lets you know right then and there â€“ enabling you to call that lead while theyâ€™re literally looking over your site.\r\n\r\nCLICK HERE http://jumboleadmagnet.com to try out a Live Demo with Web Visitors Into Leads now to see exactly how it works.\r\n\r\nTime is money when it comes to connecting with leads â€“ the difference between contacting someone within 5 minutes versus 30 minutes later can be huge â€“ like 100 times better!\r\n\r\nPlus, now that you have their phone number, with our new SMS Text With Lead feature you can automatically start a text (SMS) conversationâ€¦ so even if you donâ€™t close a deal then, you can follow up with text messages for new offers, content links, even just â€œhow you doing?â€ notes to build a relationship.\r\n\r\nStrong stuff.\r\n\r\nCLICK HERE http://jumboleadmagnet.com to discover what Web Visitors Into Leads can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Web Visitors Into Leads offers a FREE 14 days trial â€“ and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right nowâ€¦ donâ€™t keep them waiting. \r\nCLICK HERE http://jumboleadmagnet.com to try Web Visitors Into Leads now.\r\n\r\nIf you\'d like to unsubscribe click here http://jumboleadmagnet.com/unsubscribe.aspx?d=apogeegnss.com\r\n', 1, '2023-07-11 05:04:27', '0000-00-00 00:00:00'),
(1636, 'Bryanpobre', 'socha.pola.97@wp.pl', 'Lebanon', '83115538751', 'morgangiovanni90, Evansville - Gravatar Profile   [url=https://en.gravatar.com/morgangiovanni90]More info!..[/url]', 1, '2023-07-11 08:57:40', '0000-00-00 00:00:00'),
(1637, 'GladysRooda', 'info@hermes-doors.ru', 'Lithuania', '82617126265', '[url=][/url] \r\n[url=][/url] \r\n[url=][/url]', 1, '2023-07-11 09:09:43', '0000-00-00 00:00:00'),
(1638, 'OscarNus', 'ufhik7@course-fitness.com', 'Mozambique', '83985255479', '9Jå¨›æ¨‚åŸŽ \r\n \r\n \r\n \r\nhttps://9jcasino.com.tw/', 1, '2023-07-11 01:27:42', '0000-00-00 00:00:00'),
(1639, 'Heike Ansell', 'Heike Ansell', 'Vby qi', 'ansell.heike@msn.com', 'To the apogeegnss.com Administrator.,\r\n\r\nIntroducing AdCreative.ai - the premier AI-powered advertising platform that\'s taking the industry by storm!\r\n\r\nAs a Global Partner with Google and a Premier Partner, we have exclusive access to the latest tools and insights to help your business succeed. And now, we\'re offering new users $500 in free Google Ad Credits to get started with advertising - no upfront costs, no hidden fees.\r\n\r\nWith AdCreative.ai, you\'ll enjoy advanced AI algorithms that optimize your campaigns for maximum impact, as well as seamless integration with Google Ads for unparalleled performance.\r\n\r\nDon\'t wait - sign up for our free trial today a https://free-trial.adcreative.ai/seo2650 and experience the power of AdCreative.ai for yourself!', 1, '2023-07-11 08:40:50', '0000-00-00 00:00:00'),
(1640, 'Veronique Mcneal', 'Veronique Mcneal', 'K lwyh', 'mcneal.veronique@yahoo.com', 'Hey,\r\n\r\nEver wished for a magic button that turns you into a Super Affiliate in less than 60 seconds?\r\n\r\nWell, we\'ve got something even better!\r\n\r\nIntroducing... Super Affiliate A.I. - your new secret weapon.\r\n\r\nSo, what\'s it all about?\r\n\r\nâœ… One-click magic: With a single click, create full-fledged A.I Affiliate marketing campaigns. No tech skills required!\r\n\r\nâœ… AMAZING Facebook ads in a snap: Generate eye-catching ads. If you don\'t love it, click to regenerate  a new one in seconds\r\n\r\nâœ… Hot Selling Affiliate products in 1 click: Direct links in Clickbank, JV and Warrior Plus and builds your campaigns\r\n\r\nBuilds for your clients, your own business - even create content in minutes and sell on Fiverr \r\n\r\nNow, are you ready to go see it in action?\r\n\r\nWatch it here >>> https://bit.ly/44g8EPU\r\n\r\nIt can even create Keywords Lists, YouTube Scripts. Linked In, Google Ads, Email Subjects, Amazon reviews.\r\n\r\nTurning into a super affiliate has never been easier thanks to A.I.\r\n\r\nGenerate Super Affiliate Campaigns in less than 60  seconds here\r\n\r\nStart today\r\n\r\nRichard\r\n78 Road St, NYC\r\n===============\r\nClick here to Unsubscribe.\r\nhttps://bit.ly/stop69', 1, '2023-07-11 08:51:14', '0000-00-00 00:00:00'),
(1641, 'Kathrynhes', 'alexpopov716253@gmail.com', 'Ð Ð¾ÑÑÐ¸Ñ', '81652721583', 'ÐŸÑ€Ð¸Ð³Ð»Ð°ÑˆÐ°ÐµÐ¼ Ð’Ð°ÑˆÐµ Ð¿Ñ€ÐµÐ´Ð¿Ñ€Ð¸ÑÑ‚Ð¸Ðµ Ðº Ð²Ð·Ð°Ð¸Ð¼Ð¾Ð²Ñ‹Ð³Ð¾Ð´Ð½Ð¾Ð¼Ñƒ ÑÐ¾Ñ‚Ñ€ÑƒÐ´Ð½Ð¸Ñ‡ÐµÑÑ‚Ð²Ñƒ Ð² ÑÑ„ÐµÑ€Ðµ Ð¿Ñ€Ð¾Ð¸Ð·Ð²Ð¾Ð´ÑÑ‚Ð²Ð° Ð¸ Ð¿Ð¾ÑÑ‚Ð°Ð²ÐºÐ¸ [url=] Ð Â¤Ð Ñ•Ð Â»Ð¡ÐŠÐ Ñ–Ð Â° Ð Ð†Ð Ñ•Ð Â»Ð¡ÐŠÐ¡â€žÐ¡Ð‚Ð Â°Ð Ñ˜Ð Ñ•Ð Ð†Ð Â°Ð¡Ð W  [/url] Ð¸ Ð¸Ð·Ð´ÐµÐ»Ð¸Ð¹ Ð¸Ð· Ð½ÐµÐ³Ð¾. \r\n \r\n \r\n-	ÐŸÐ¾ÑÑ‚Ð°Ð²ÐºÐ° ÐºÐ¾Ð½Ñ†ÐµÐ½Ñ‚Ñ€Ð°Ñ‚Ð¾Ð², Ð¸ Ð¾ÐºÑÐ¸Ð´Ð¾Ð² \r\n-	ÐŸÐ¾ÑÑ‚Ð°Ð²ÐºÐ° Ð¸Ð·Ð´ÐµÐ»Ð¸Ð¹ Ð¿Ñ€Ð¾Ð¸Ð·Ð²Ð¾Ð´ÑÑ‚Ð²ÐµÐ½Ð½Ð¾-Ñ‚ÐµÑ…Ð½Ð¸Ñ‡ÐµÑÐºÐ¾Ð³Ð¾ Ð½Ð°Ð·Ð½Ð°Ñ‡ÐµÐ½Ð¸Ñ (Ñ„Ð¾Ñ€Ð¼Ð¾Ð¾Ð±Ñ€Ð°Ð·Ð¾Ð²Ð°Ñ‚ÐµÐ»Ð¸). \r\n-       Ð›ÑŽÐ±Ñ‹Ðµ Ñ‚Ð¸Ð¿Ð¾Ñ€Ð°Ð·Ð¼ÐµÑ€Ñ‹, Ð¸Ð·Ð³Ð¾Ñ‚Ð¾Ð²Ð»ÐµÐ½Ð¸Ðµ Ð¿Ð¾ Ñ‡ÐµÑ€Ñ‚ÐµÐ¶Ð°Ð¼ Ð¸ ÑÐ¿ÐµÑ†Ð¸Ñ„Ð¸ÐºÐ°Ñ†Ð¸ÑÐ¼ Ð·Ð°ÐºÐ°Ð·Ñ‡Ð¸ÐºÐ°. \r\n \r\n \r\n[url=https://redmetsplav.ru/store/volfram/splavy-volframa-1/volfram-w-1/folga-volframovaya-w/ ][img][/img][/url] \r\n \r\n \r\n[url=https://www.kane6.jp/check/?companyname=KathrynSup&name_a=KathrynSup&kana_a=%D0%BF%D1%80%D0%BE%D0%B4%D0%B0%D0%B6%D0%B0%20%D1%82%D1%83%D0%B3%D0%BE%D0%BF%D0%BB%D0%B0%D0%B2%D0%BA%D0%B8%D1%85%20%D0%BC%D0%B5%D1%82%D0%B0%D0%BB%D0%BB%D0%BE%D0%B2&email=alexpopov716253%40gmail.com&tel=88935928658&postalcode=%D0%BF%D1%80%D0%BE%D0%B4%D0%B0%D0%B6%D0%B0%20%D1%82%D1%83%D0%B3%D0%BE%D0%BF%D0%BB%D0%B0%D0%B2%D0%BA%D0%B8%D1%85%20%D0%BC%D0%B5%D1%82%D0%B0%D0%BB%D0%BB%D0%BE%D0%B2&addr=alexpopov716253%40gmail.com&sex=%3F%3F&age=%3F19&bod1=%D0%9F%D1%80%D0%B8%D0%B3%D0%BB%D0%B0%D1%88%D0%B0%D0%B5%D0%BC%20%D0%92%D0%B0%D1%88%D0%B5%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B5%20%D0%BA%20%D0%B2%D0%B7%D0%B0%D0%B8%D0%BC%D0%BE%D0%B2%D1%8B%D0%B3%D0%BE%D0%B4%D0%BD%D0%BE%D0%BC%D1%83%20%D1%81%D0%BE%D1%82%D1%80%D1%83%D0%B4%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D1%82%D0%B2%D1%83%20%D0%B2%20%D1%81%D1%84%D0%B5%D1%80%D0%B5%20%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D1%81%D1%82%D0%B2%D0%B0%20%D0%B8%20%D0%BF%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%BA%D0%B8%20%3Ca%20href%3D%3E%20%D0%A0%D1%9E%D0%A1%D0%82%D0%A1%D1%93%D0%A0%C2%B1%D0%A0%C2%B0%20%20%D0%A0%D1%9A%D0%A0%D1%95%D0%A0%C2%BB%D0%A0%D1%91%D0%A0%C2%B1%D0%A0%D2%91%D0%A0%C2%B5%D0%A0%D0%85%D0%A0%D1%95%D0%A0%D0%86%D0%A0%C2%B0%D0%A1%D0%8F%20%20%3C%2Fa%3E%20%D0%B8%20%D0%B8%D0%B7%D0%B4%D0%B5%D0%BB%D0%B8%D0%B9%20%D0%B8%D0%B7%20%D0%BD%D0%B5%D0%B3%D0%BE.%20%20%20-%09%D0%9F%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%BA%D0%B0%20%D0%BA%D0%B0%D1%80%D0%B1%D0%B8%D0%B4%D0%BE%D0%B2%20%D0%B8%20%D0%BE%D0%BA%D1%81%D0%B8%D0%B4%D0%BE%D0%B2%20-%09%D0%9F%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%BA%D0%B0%20%D0%B8%D0%B7%D0%B4%D0%B5%D0%BB%D0%B8%D0%B9%20%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE-%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B3%D0%BE%20%D0%BD%D0%B0%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%BD%D0%B8%D1%8F%20%28%D1%80%D0%B8%D1%84%D0%BB%D1%91%D0%BD%D0%B0%D1%8F%D0%BF%D0%BB%D0%B0%D1%81%D1%82%D0%B8%D0%BD%D0%B0%29.%20-%20%20%20%20%20%20%20%D0%9B%D1%8E%D0%B1%D1%8B%D0%B5%20%D1%82%D0%B8%D0%BF%D0%BE%D1%80%D0%B0%D0%B7%D0%BC%D0%B5%D1%80%D1%8B%2C%20%D0%B8%D0%B7%D0%B3%D0%BE%D1%82%D0%BE%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%BF%D0%BE%20%D1%87%D0%B5%D1%80%D1%82%D0%B5%D0%B6%D0%B0%D0%BC%20%D0%B8%20%D1%81%D0%BF%D0%B5%D1%86%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D1%8F%D0%BC%20%D0%B7%D0%B0%D0%BA%D0%B0%D0%B7%D1%87%D0%B8%D0%BA%D0%B0.%20%20%20%3Ca%20href%3Dhttps%3A%2F%2Fredmetsplav.ru%2Fstore%2Fmolibden-i-ego-splavy%2Fmolibden-mchvp-2%2Ftruba-molibdenovaya-mchvp%2F%3E%3Cimg%20src%3D%22%22%3E%3C%2Fa%3E%20%20%20%2026f52a0%20&bod2=%D0%9F%D1%80%D0%B8%D0%B3%D0%BB%D0%B0%D1%88%D0%B0%D0%B5%D0%BC%20%D0%92%D0%B0%D1%88%D0%B5%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B5%20%D0%BA%20%D0%B2%D0%B7%D0%B0%D0%B8%D0%BC%D0%BE%D0%B2%D1%8B%D0%B3%D0%BE%D0%B4%D0%BD%D0%BE%D0%BC%D1%83%20%D1%81%D0%BE%D1%82%D1%80%D1%83%D0%B4%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D1%82%D0%B2%D1%83%20%D0%B2%20%D1%81%D1%84%D0%B5%D1%80%D0%B5%20%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D1%81%D1%82%D0%B2%D0%B0%20%D0%B8%20%D0%BF%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%BA%D0%B8%20%3Ca%20href%3D%3E%20%D0%A0%D1%9E%D0%A1%D0%82%D0%A1%D1%93%D0%A0%C2%B1%D0%A0%C2%B0%20%20%D0%A0%D1%9A%D0%A0%D1%95%D0%A0%C2%BB%D0%A0%D1%91%D0%A0%C2%B1%D0%A0%D2%91%D0%A0%C2%B5%D0%A0%D0%85%D0%A0%D1%95%D0%A0%D0%86%D0%A0%C2%B0%D0%A1%D0%8F%20%20%3C%2Fa%3E%20%D0%B8%20%D0%B8%D0%B7%D0%B4%D0%B5%D0%BB%D0%B8%D0%B9%20%D0%B8%D0%B7%20%D0%BD%D0%B5%D0%B3%D0%BE.%20%20%20-%09%D0%9F%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%BA%D0%B0%20%D0%BA%D0%B0%D1%80%D0%B1%D0%B8%D0%B4%D0%BE%D0%B2%20%D0%B8%20%D0%BE%D0%BA%D1%81%D0%B8%D0%B4%D0%BE%D0%B2%20-%09%D0%9F%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%BA%D0%B0%20%D0%B8%D0%B7%D0%B4%D0%B5%D0%BB%D0%B8%D0%B9%20%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE-%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B3%D0%BE%20%D0%BD%D0%B0%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%BD%D0%B8%D1%8F%20%28%D1%80%D0%B8%D1%84%D0%BB%D1%91%D0%BD%D0%B0%D1%8F%D0%BF%D0%BB%D0%B0%D1%81%D1%82%D0%B8%D0%BD%D0%B0%29.%20-%20%20%20%20%20%20%20%D0%9B%D1%8E%D0%B1%D1%8B%D0%B5%20%D1%82%D0%B8%D0%BF%D0%BE%D1%80%D0%B0%D0%B7%D0%BC%D0%B5%D1%80%D1%8B%2C%20%D0%B8%D0%B7%D0%B3%D0%BE%D1%82%D0%BE%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%BF%D0%BE%20%D1%87%D0%B5%D1%80%D1%82%D0%B5%D0%B6%D0%B0%D0%BC%20%D0%B8%20%D1%81%D0%BF%D0%B5%D1%86%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D1%8F%D0%BC%20%D0%B7%D0%B0%D0%BA%D0%B0%D0%B7%D1%87%D0%B8%D0%BA%D0%B0.%20%20%20%3Ca%20href%3Dhttps%3A%2F%2Fredmetsplav.ru%2Fstore%2Fmolibden-i-ego-splavy%2Fmolibden-mchvp-2%2Ftruba-molibdenovaya-mchvp%2F%3E%3Cimg%20src%3D%22%22%3E%3C%2Fa%3E%20%20%20%2026f52a0%20&bod3=%D0%9F%D1%80%D0%B8%D0%B3%D0%BB%D0%B0%D1%88%D0%B0%D0%B5%D0%BC%20%D0%92%D0%B0%D1%88%D0%B5%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B5%20%D0%BA%20%D0%B2%D0%B7%D0%B0%D0%B8%D0%BC%D0%BE%D0%B2%D1%8B%D0%B3%D0%BE%D0%B4%D0%BD%D0%BE%D0%BC%D1%83%20%D1%81%D0%BE%D1%82%D1%80%D1%83%D0%B4%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D1%82%D0%B2%D1%83%20%D0%B2%20%D1%81%D1%84%D0%B5%D1%80%D0%B5%20%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D1%81%D1%82%D0%B2%D0%B0%20%D0%B8%20%D0%BF%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%BA%D0%B8%20%3Ca%20href%3D%3E%20%D0%A0%D1%9E%D0%A1%D0%82%D0%A1%D1%93%D0%A0%C2%B1%D0%A0%C2%B0%20%20%D0%A0%D1%9A%D0%A0%D1%95%D0%A0%C2%BB%D0%A0%D1%91%D0%A0%C2%B1%D0%A0%D2%91%D0%A0%C2%B5%D0%A0%D0%85%D0%A0%D1%95%D0%A0%D0%86%D0%A0%C2%B0%D0%A1%D0%8F%20%20%3C%2Fa%3E%20%D0%B8%20%D0%B8%D0%B7%D0%B4%D0%B5%D0%BB%D0%B8%D0%B9%20%D0%B8%D0%B7%20%D0%BD%D0%B5%D0%B3%D0%BE.%20%20%20-%09%D0%9F%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%BA%D0%B0%20%D0%BA%D0%B0%D1%80%D0%B1%D0%B8%D0%B4%D0%BE%D0%B2%20%D0%B8%20%D0%BE%D0%BA%D1%81%D0%B8%D0%B4%D0%BE%D0%B2%20-%09%D0%9F%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%BA%D0%B0%20%D0%B8%D0%B7%D0%B4%D0%B5%D0%BB%D0%B8%D0%B9%20%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE-%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B3%D0%BE%20%D0%BD%D0%B0%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%BD%D0%B8%D1%8F%20%28%D1%80%D0%B8%D1%84%D0%BB%D1%91%D0%BD%D0%B0%D1%8F%D0%BF%D0%BB%D0%B0%D1%81%D1%82%D0%B8%D0%BD%D0%B0%29.%20-%20%20%20%20%20%20%20%D0%9B%D1%8E%D0%B1%D1%8B%D0%B5%20%D1%82%D0%B8%D0%BF%D0%BE%D1%80%D0%B0%D0%B7%D0%BC%D0%B5%D1%80%D1%8B%2C%20%D0%B8%D0%B7%D0%B3%D0%BE%D1%82%D0%BE%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%BF%D0%BE%20%D1%87%D0%B5%D1%80%D1%82%D0%B5%D0%B6%D0%B0%D0%BC%20%D0%B8%20%D1%81%D0%BF%D0%B5%D1%86%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D1%8F%D0%BC%20%D0%B7%D0%B0%D0%BA%D0%B0%D0%B7%D1%87%D0%B8%D0%BA%D0%B0.%20%20%20%3Ca%20href%3Dhttps%3A%2F%2Fredmetsplav.ru%2Fstore%2Fmolibden-i-ego-splavy%2Fmolibden-mchvp-2%2Ftruba-molibdenovaya-mchvp%2F%3E%3Cimg%20src%3D%22%22%3E%3C%2Fa%3E%20%20%20%2026f52a0%20&submit]ÑÐ¿Ð»Ð°Ð²[/url]\r\n 92ee62b ', 1, '2023-07-11 11:45:41', '0000-00-00 00:00:00'),
(1642, 'ginaks11', 'warrenag7@hiroyuki4010.masaaki77.infospace.fun', '', '89254517247', 'New project started to be available today, check it out\r\nhttp://appstopostnudes.showmeabluefilm.xblognetwork.com/?post-madyson \r\n\r\n freegangbang porn porn movie blue trooper tube porn sex porn video free full free porn no pass \r\n\r\n', 1, '2023-07-12 10:45:10', '0000-00-00 00:00:00'),
(1643, 'rGtJrImNoC', 'callvisvetlana@list.ru', '', '86238259216', 'Ð­Ñ‚Ð¾Ñ‚ Ð³Ð¾Ð´ Ð·Ð°Ð¿Ð¾Ð¼Ð½Ð¸Ñ‚ÑÑ Ð½Ð° Ð´Ð¾Ð»Ð³Ð¸Ðµ Ð²Ñ€ÐµÐ¼ÐµÐ½Ð° https://senler.ru/a/2d0za/5job/534556554-o7Tj7AfXzDC https://mail.ru apogeegnss.com', 1, '2023-07-12 12:58:42', '0000-00-00 00:00:00');
INSERT INTO `contact_form_query` (`id`, `name`, `email`, `location`, `mobile`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1644, '× ×¢×¨×•×ª ×œ×™×•×•×™chorn', 'agnessavolkova@seobomba.com', 'Iceland', '87212397982', 'Good point, makes a sence especially when one is experienced in the topic. So keep righting and share your thoughts and experiences. \r\nI like this website too: \r\n \r\n[url=https://www.vsexy.co.il/%d7%a0%d7%a2%d7%a8%d7%95%d7%aa-%d7%9c%d7%99%d7%95%d7%95%d7%99-%d7%91%d7%9e%d7%a8%d7%9b%d7%96/%d7%a0%d7%a2%d7%a8%d7%95%d7%aa-%d7%9c%d7%99%d7%95%d7%95%d7%99-%d7%91%d7%a8%d7%97%d7%95%d7%91%d7%95%d7%aa/]× ×¢×¨×•×ª ×œ×™×•×•×™ ×‘×¨×—×•×‘×•×ª[/url]                                ', 1, '2023-07-12 10:11:37', '0000-00-00 00:00:00'),
(1645, 'Kevindok', 'eokort@course-fitness.com', 'Saudi Arabia', '88563613196', 'å† å¤©ä¸‹å¨›æ¨‚åŸŽ \r\n \r\n \r\n \r\nhttps://xn--ghq10gw1gvobv8a5z0d.com/', 1, '2023-07-13 01:20:16', '0000-00-00 00:00:00'),
(1646, 'LavillBox', 'revers@1ti.ru', 'United States', '83285763946', '[url=https://chimmed.ru/products/5-bromtiazol-2-karbonovaya-kislota-id=8515229]5-Ð±Ñ€Ð¾Ð¼Ñ‚Ð¸Ð°Ð·Ð¾Ð»-2-ÐºÐ°Ñ€Ð±Ð¾Ð½Ð¾Ð²Ð°Ñ ÐºÐ¸ÑÐ»Ð¾Ñ‚Ð° ÐºÑƒÐ¿Ð¸Ñ‚ÑŒ Ð¾Ð½Ð»Ð°Ð¹Ð½ Ð² Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚-Ð¼Ð°Ð³Ð°Ð·Ð¸Ð½Ðµ Ñ…Ð¸Ð¼Ð¼ÐµÐ´ [/url] \r\nTegs: [u]anti-habh1 antibody, mouse monoclonal, & ÐºÑƒÐ¿Ð¸Ñ‚ÑŒ Ð¾Ð½Ð»Ð°Ð¹Ð½ Ð² Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚-Ð¼Ð°Ð³Ð°Ð·Ð¸Ð½Ðµ Ñ…Ð¸Ð¼Ð¼ÐµÐ´ [/u] \r\n[i]anti-habh2 antibody, mouse monoclonal, & ÐºÑƒÐ¿Ð¸Ñ‚ÑŒ Ð¾Ð½Ð»Ð°Ð¹Ð½ Ð² Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚-Ð¼Ð°Ð³Ð°Ð·Ð¸Ð½Ðµ Ñ…Ð¸Ð¼Ð¼ÐµÐ´ [/i] \r\n[b]anti-habh2 antibody, mouse monoclonal, & ÐºÑƒÐ¿Ð¸Ñ‚ÑŒ Ð¾Ð½Ð»Ð°Ð¹Ð½ Ð² Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚-Ð¼Ð°Ð³Ð°Ð·Ð¸Ð½Ðµ Ñ…Ð¸Ð¼Ð¼ÐµÐ´ [/b] \r\n \r\n5-Ð±Ñ€Ð¾Ð¼Ñ‚Ð¸Ð°Ð·Ð¾Ð»-4-ÐºÐ°Ñ€Ð±Ð¾Ð½Ð¾Ð²Ð°Ñ ÐºÐ¸ÑÐ»Ð¾Ñ‚Ð° ÐºÑƒÐ¿Ð¸Ñ‚ÑŒ Ð¾Ð½Ð»Ð°Ð¹Ð½ Ð² Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚-Ð¼Ð°Ð³Ð°Ð·Ð¸Ð½Ðµ Ñ…Ð¸Ð¼Ð¼ÐµÐ´  https://chimmed.ru/products/5-bromtiazol-4-karbonovaya-kislota-id=8593827', 1, '2023-07-13 06:12:07', '0000-00-00 00:00:00'),
(1647, 'ismailfisher', 'ismailfisher@rambler.ru', 'Slovenia', '89527875559', 'ÐšÑƒÐ¿Ð¸Ñ‚ÑŒ ÐºÐ°Ñ‡ÐµÑÑ‚Ð²ÐµÐ½Ð½ÑƒÑŽ Ñ…Ð¸Ð¼Ð¸ÑŽ Ð´Ð»Ñ Ð¼Ð¾Ð¹ÐºÐ¸ ÐºÐ°Ñ‚ÐµÑ€Ð¾Ð² [url=http://regionsv.ru/chem4.html]ÐšÐ°ÐºÐ¾Ð¹ Ñ…Ð¸Ð¼Ð¸ÐµÐ¹ Ð¾Ñ‚Ð¼Ñ‹Ñ‚ÑŒ Ð´Ð½Ð¸Ñ‰Ðµ Ð»Ð¾Ð´ÐºÐ¸[/url]. Ð’Ñ‹ÑÐ¾ÐºÐ°Ñ ÑÑ„Ñ„ÐµÐºÑ‚Ð¸Ð²Ð½Ð¾ÑÑ‚ÑŒ Ð¼Ð¾Ð¹ÐºÐ¸. ÐžÑ‚Ð¼Ñ‹Ð²Ð°ÐµÑ‚ Ð´Ð°Ð¶Ðµ ÑÑ‚Ð¾Ð¹ÐºÐ¸Ðµ Ð·Ð°Ð³Ñ€ÑÐ·Ð½ÐµÐ½Ð¸Ñ.  ÐšÐ°ÐºÐ¾Ð¹ Ñ Ð¾Ñ‚Ð¼Ñ‹Ð²Ð°Ð» ÐºÐ°Ñ‚ÐµÑ€. ÐšÐ°Ðº Ð±Ñ‹ÑÑ‚Ñ€Ð¾ Ð¾Ñ‚Ð¼Ñ‹Ñ‚ÑŒ ÐºÐ°Ñ‚ÐµÑ€Ð¾Ð² Ð¾Ñ‚ Ñ‚Ð¸Ð½Ñ‹ Ð¸ Ð²Ð¾Ð´Ð¾Ñ€Ð¾ÑÐ»ÐµÐ¹. \r\nÐœÐ¾Ð¹ÐºÐ° Ð´Ð½Ð¸Ñ‰Ð° Ð¿Ð»Ð°ÑÑ‚Ð¸ÐºÐ¾Ð²Ð¾Ð³Ð¾ Ð¸ Ð°Ð»ÑŽÐ¼Ð¸Ð½Ð¸ÐµÐ²Ð¾Ð³Ð¾ ÐºÐ°Ñ‚ÐµÑ€Ð° Ð±ÐµÐ· Ð·Ð°Ð±Ð¾Ñ‚. Ð±Ñ‹ÑÑ‚Ñ€Ð¾ Ð¸ Ð±ÑŽÐ´Ð¶ÐµÑ‚Ð½Ð¾. \r\n \r\nÐšÐ°Ðº Ð¾Ñ‡Ð¸ÑÑ‚Ð¸Ñ‚ÑŒ Ñ„Ð¾Ñ€ÑÑƒÐ½ÐºÐ¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ð±Ð¸Ð»Ñ ÑÐ²Ð¾Ð¸Ð¼Ð¸ Ñ€ÑƒÐºÐ°Ð¼Ð¸  [url=http://www.uzo.matrixplus.ru/]ÐžÑ‡Ð¸ÑÑ‚ÐºÐ° ÑƒÐ»ÑŒÑ‚Ñ€Ð°Ð·Ð²ÑƒÐºÐ¾Ð¼ Ð¸ Ð¾Ñ‡Ð¸ÑÑ‚Ð¸Ñ‚ÐµÐ»Ð¸[/url] ÐºÐ°ÐºÐ¸Ðµ Ð¾Ñ‡Ð¸ÑÑ‚Ð¸Ñ‚ÐµÐ»Ð¸ ÑÑƒÑ‰ÐµÑÑ‚Ð²ÑƒÑŽÑ‚ Ð² Ð¿Ñ€Ð¸Ñ€Ð¾Ð´Ðµ. Ð¡Ñ‚ÐµÐ¿ÐµÐ½ÑŒ ÑƒÐ»ÑŒÑ‚Ñ€Ð°Ð·Ð²ÑƒÐºÐ¾Ð²Ð¾Ð¹ Ð¾Ñ‡Ð¸ÑÑ‚ÐºÐ¸ Ð² Ð·Ð°Ð²Ð¸ÑÐ¸Ð¼Ð¾ÑÑ‚Ð¸ Ð¾Ñ‚ Ð·Ð°Ð³Ñ€ÑÐ·Ð½ÐµÐ½Ð¸Ñ. ÐŸÑ€Ð°ÐºÑ‚Ð¸Ñ‡ÐµÑÐºÐ¸Ðµ Ð·Ð°Ð½ÑÑ‚Ð¸Ñ. \r\n \r\nÐšÐ°Ðº ÑÐ¾Ð±Ð¸Ñ€Ð°Ñ‚ÑŒ 8-Ð¼Ð¸ Ð±Ð¸Ñ‚Ð½Ñ‹Ð¹ ÐŸÐš, ÑÑ‚Ð°Ñ€Ð¸Ð½Ð½Ñ‹Ðµ ÐºÐ¾Ð¼Ð¿ÑŒÑŽÑ‚ÐµÑ€Ñ‹ Ð½Ð° Ð¼Ð¸ÐºÑ€Ð¾Ð¿Ñ€Ð¾Ñ†ÐµÑÑÐ¾Ñ€Ð°Ñ… Z80 Ð¸ Ðº580Ð²Ð¼80Ð°, Ðº1821Ð²Ð¼85, i8085 - Ð´Ð»Ñ ÑˆÐºÐ¾Ð»ÑŒÐ½Ð¸ÐºÐ¾Ð²[url=http://rdk.regionsv.ru/]Ð¡Ð±Ð¾Ñ€ÐºÐ° Ð¸ Ð½Ð°ÑÑ‚Ñ€Ð¾Ð¹ÐºÐ° ÐºÐ¾Ð¼Ð¿ÑŒÑŽÑ‚ÐµÑ€Ð° ÐžÑ€Ð¸Ð¾Ð½-128, Ð¡Ð±Ð¾Ñ€ÐºÐ° Ð®Ð¢-88[/url] \r\n \r\nÐ¥Ð¸Ð¼Ð¸Ñ Ð´Ð»Ñ ÑƒÐ»ÑŒÑ‚Ñ€Ð°Ð·Ð²ÑƒÐºÐ¾Ð²Ð¾Ð¹ Ð¾Ñ‡Ð¸ÑÑ‚ÐºÐ¸ Ð¸ Ñ‚ÐµÑÑ‚Ð¾Ð²Ñ‹Ðµ Ð¶Ð¸Ð´ÐºÐ¾ÑÑ‚Ð¸ Ð¿Ñ€Ð¾Ð²ÐµÑ€ÐºÐ¸ Ñ„Ð¾Ñ€ÑÑƒÐ½Ð¾Ðº [url=http://www.matrixboard.ru]www.matrixboard.ru[/url] \r\n \r\nÐšÑƒÐ¿Ð¸Ñ‚ÑŒ ÐºÐ°Ñ‡ÐµÑÑ‚Ð²ÐµÐ½Ð½ÑƒÑŽ Ñ…Ð¸Ð¼Ð¸ÑŽ Ð´Ð»Ñ Ð¼Ð¾Ð¹ÐºÐ¸, ÐšÑƒÐ¿Ð¸Ñ‚ÑŒ Ð°Ð²Ñ‚Ð¾ÑˆÐ°Ð¼Ð¿ÑƒÐ½Ð¸, Ñ…Ð¸Ð¼Ð¸ÑŽ Ð´Ð»Ñ ÑƒÐ±Ð¾Ñ€ÐºÐ¸ [url=http://www.matrixplus.ru]ÑÐ¾ÑÑ‚Ð°Ð²Ñ‹ Ð´Ð»Ñ Ð¾Ñ‡Ð¸ÑÑ‚ÐºÐ¸ Ð´Ð½Ð¸Ñ‰Ð° ÐºÐ°Ñ‚ÐµÑ€Ð°, Ð»Ð¾Ð´ÐºÐ¸, ÑÑ…Ñ‚Ñ‹[/url] \r\n \r\nÐ¥Ð¸Ð¼Ð¸Ñ Ð´Ð»Ñ ÑƒÐ»ÑŒÑ‚Ñ€Ð°Ð·Ð²ÑƒÐºÐ¾Ð²Ð¾Ð¹ Ð¾Ñ‡Ð¸ÑÑ‚ÐºÐ¸ Ñ„Ð¾Ñ€ÑÑƒÐ½Ð¾Ðº Ð¸ Ð´ÐµÑ‚Ð°Ð»ÐµÐ¹ [url=http://regionsv.ru/chem6.html]ÐšÐ°Ðº ÑÐ°Ð¼Ð¾Ð¼Ñƒ Ð¿Ñ€Ð¾Ð¼Ñ‹Ñ‚ÑŒ Ñ„Ð¾Ñ€ÑÑƒÐ½ÐºÐ¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ð±Ð¸Ð»Ñ[/url] \r\n \r\n[url=http://wc.matrixplus.ru]Ð’ÑÑ Ð½Ð°ÑƒÐºÐ° Ð´Ð»Ñ ÑÑ…Ñ‚ÑÐ¼ÐµÐ½Ð¾Ð², Ð¿Ð»Ð°Ð²Ð°Ð½ÑŒÐµ Ð¿Ð¾ Ñ€ÐµÐºÐ°Ð¼, Ð¾Ð·ÐµÑ€Ð°Ð¼, Ð¼Ð¾Ñ€ÑÐ¼[/url] \r\n \r\n[url=http://wb.matrixplus.ru]ÐŸÐ»Ð°Ð²Ð°Ð½ÑŒÐµ Ð¿Ð¾ Ñ€ÐµÐºÐ°Ð¼, Ð¾Ð·ÐµÑ€Ð°Ð¼, Ð¼Ð¾Ñ€ÑÐ¼[/url] Ð² Ð Ð¾ÑÑÐ¸Ð¹ÑÐºÐ¾Ð¹ Ñ„ÐµÐ´Ð¸Ñ€Ð°Ñ†Ð¸Ð¸ \r\n \r\n[url=http://boat.matrixplus.ru]Ð¿Ñ€Ð¾Ð²ÐµÑ€ÐºÐ¸ ÑÑ…Ñ‚Ñ‹ Ð¸ ÐºÐ°Ñ‚ÐµÑ€Ð°[/url]  Ð½Ð°Ð²Ð¸Ð³Ð°Ñ†Ð¸Ñ Ð¸ Ñ‡Ñ‚Ð¾ Ñ ÑÑ‚Ð¸Ð¼ ÑÐ²ÑÐ·Ð°Ð½Ð¾, ÐšÑƒÐ¿Ð¸Ñ‚ÑŒ Ð¿Ñ€Ð°Ð²Ð° Ð½Ð° ÐºÐ°Ñ‚ÐµÑ€Ð¾Ð², Ð»Ð¾Ð´ÐºÑƒ Ð³Ð¸Ð´Ñ€Ð¾Ñ†Ð¸ÐºÐ»', 1, '2023-07-14 09:45:35', '0000-00-00 00:00:00'),
(1648, 'RobertVop', 'alfredegov@gmail.com', 'Germany', '86356219169', 'ÕˆÕ²Õ»Õ¸Ö‚ÕµÕ¶, Õ¥Õ½ Õ¸Ö‚Õ¦Õ¸Ö‚Õ´ Õ§Õ« Õ«Õ´Õ¡Õ¶Õ¡Õ¬ Õ±Õ¥Ö€ Õ£Õ«Õ¶Õ¨.', 1, '2023-07-14 02:39:23', '0000-00-00 00:00:00'),
(1649, 'LavillBox', 'revers@1ti.ru', 'United States', '86334994648', '[url=https://chimmed.ru/products/4-metoksibenzil-hlorid-id=8465830]4-Ð¼ÐµÑ‚Ð¾ÐºÑÐ¸Ð±ÐµÐ½Ð·Ð¸Ð» Ñ…Ð»Ð¾Ñ€Ð¸Ð´ ÐºÑƒÐ¿Ð¸Ñ‚ÑŒ Ð¾Ð½Ð»Ð°Ð¹Ð½ Ð² Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚-Ð¼Ð°Ð³Ð°Ð·Ð¸Ð½Ðµ Ñ…Ð¸Ð¼Ð¼ÐµÐ´ [/url] \r\nTegs: [u]6-chloro-1h-indazole 95% ÐºÑƒÐ¿Ð¸Ñ‚ÑŒ Ð¾Ð½Ð»Ð°Ð¹Ð½ Ð² Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚-Ð¼Ð°Ð³Ð°Ð·Ð¸Ð½Ðµ Ñ…Ð¸Ð¼Ð¼ÐµÐ´ [/u] \r\n[i]6-chloro-1h-indazole 95% ÐºÑƒÐ¿Ð¸Ñ‚ÑŒ Ð¾Ð½Ð»Ð°Ð¹Ð½ Ð² Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚-Ð¼Ð°Ð³Ð°Ð·Ð¸Ð½Ðµ Ñ…Ð¸Ð¼Ð¼ÐµÐ´ [/i] \r\n[b]6-chloro-1h-indene ÐºÑƒÐ¿Ð¸Ñ‚ÑŒ Ð¾Ð½Ð»Ð°Ð¹Ð½ Ð² Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚-Ð¼Ð°Ð³Ð°Ð·Ð¸Ð½Ðµ Ñ…Ð¸Ð¼Ð¼ÐµÐ´ [/b] \r\n \r\n4-Ð¼ÐµÑ‚Ð¾ÐºÑÐ¸Ð±ÐµÐ½Ð·Ð¸Ð» Ñ…Ð»Ð¾Ñ€Ð¸Ð´ ÐºÑƒÐ¿Ð¸Ñ‚ÑŒ Ð¾Ð½Ð»Ð°Ð¹Ð½ Ð² Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚-Ð¼Ð°Ð³Ð°Ð·Ð¸Ð½Ðµ Ñ…Ð¸Ð¼Ð¼ÐµÐ´  https://chimmed.ru/products/4-metoksibenzil-hlorid-id=8465831', 1, '2023-07-14 04:13:21', '0000-00-00 00:00:00'),
(1650, 'Eric Jones', 'Eric Jones', 'Oogrkvjzv Kkc', 'ericjonesmyemail@gmail.com', 'Hello apogeegnss.com Webmaster! I just found your site, quick questionâ€¦\r\n\r\nMy nameâ€™s Eric, I found apogeegnss.com after doing a quick search â€“ you showed up near the top of the rankings, so whatever youâ€™re doing for SEO, looks like itâ€™s working well.\r\n\r\nSo hereâ€™s my question â€“ what happens AFTER someone lands on your site?  Anything?\r\n\r\nResearch tells us at least 70% of the people who find your site, after a quick once-over, they disappearâ€¦ forever.\r\n\r\nThat means that all the work and effort you put into getting them to show up, goes down the tubes.\r\n\r\nWhy would you want all that good work â€“ and the great site youâ€™ve built â€“ go to waste?\r\n\r\nBecause the odds are theyâ€™ll just skip over calling or even grabbing their phone, leaving you high and dry.\r\n\r\nBut hereâ€™s a thoughtâ€¦ what if you could make it super-simple for someone to raise their hand, say, â€œokay, letâ€™s talkâ€ without requiring them to even pull their cell phone from their pocket?\r\n  \r\nYou can â€“ thanks to revolutionary new software that can literally make that first call happen NOW.\r\n\r\nWeb Visitors Into Leads is a software widget that sits on your site, ready and waiting to capture any visitorâ€™s Name, Email address and Phone Number.  It lets you know IMMEDIATELY â€“ so that you can talk to that lead while theyâ€™re still there at your site.\r\n  \r\nYou know, strike when the ironâ€™s hot!\r\n\r\nCLICK HERE https://advanceleadgeneration.com to try out a Live Demo with Web Visitors Into Leads now to see exactly how it works.\r\n\r\nWhen targeting leads, you HAVE to act fast â€“ the difference between contacting someone within 5 minutes versus 30 minutes later is huge â€“ like 100 times better!\r\n\r\nThatâ€™s why you should check out our new SMS Text With Lead feature as wellâ€¦ once youâ€™ve captured the phone number of the website visitor, you can automatically kick off a text message (SMS) conversation with them. \r\n \r\nImagine how powerful this could be â€“ even if they donâ€™t take you up on your offer immediately, you can stay in touch with them using text messages to make new offers, provide links to great content, and build your credibility.\r\n\r\nJust this alone could be a game changer to make your website even more effective.\r\n\r\nStrike when  the ironâ€™s hot!\r\n\r\nCLICK HERE https://advanceleadgeneration.com to learn more about everything Web Visitors Into Leads can do for your business â€“ youâ€™ll be amazed.\r\n\r\nThanks and keep up the great work!\r\n\r\nEric\r\nPS: Web Visitors Into Leads offers a FREE 14 days trial â€“ you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nStop wasting money chasing eyeballs that donâ€™t turn into paying customers. \r\nCLICK HERE https://advanceleadgeneration.com to try Web Visitors Into Leads now.\r\n\r\nIf you\'d like to unsubscribe click here http://advanceleadgeneration.com/unsubscribe.aspx?d=apogeegnss.com\r\n', 1, '2023-07-14 06:00:45', '0000-00-00 00:00:00'),
(1651, 'DanielUsemi', 'meneazovutsasak.ihaise.iy@gmail.com', 'Andorra', '89388285164', 'Ñ€ÐµÐ·Ð¸Ð½Ð° Ð°Ð²Ñ‚Ð¾ ÐºÑƒÐ¿Ð¸Ñ‚ÑŒhttp://mythosconcepts.com/anvelope-camioane-k.html', 1, '2023-07-15 12:02:39', '0000-00-00 00:00:00'),
(1652, 'Jeromeerume', 'udaeer@course-fitness.com', 'Algeria', '86927465917', 'æ¼«éŠè€…é«”å£‡ \r\n \r\n \r\nhttps://sports99.tw', 1, '2023-07-15 02:56:49', '0000-00-00 00:00:00'),
(1653, 'XRumerTest', 'yourmail@gmail.com', '', '84228192832', 'Hello. And Bye.', 1, '2023-07-15 06:50:42', '0000-00-00 00:00:00'),
(1654, 'Colinaburi', 'f0ne@course-fitness.com', 'Oman', '82517458746', 'å°çªå…’å¨›æ¨‚ \r\n \r\n \r\n \r\n \r\nhttps://taipei9527.com/', 1, '2023-07-15 08:26:01', '0000-00-00 00:00:00'),
(1655, 'AlbertFlish', '9udi1@course-fitness.com', 'Virgin Islands', '82559355747', 'Giáº£i TrÃ­ã€Ã‚m Nháº¡cã€Phim áº¢nh \r\n \r\n \r\n \r\nhttps://saocoitin.com', 1, '2023-07-15 11:19:23', '0000-00-00 00:00:00'),
(1656, 'Eric Jones', 'Eric Jones', 'T qsk wp oetj', 'ericjonesmyemail@gmail.com', 'Hi apogeegnss.com Webmaster!\r\n\r\nCool website!\r\n\r\nMy nameâ€™s Eric, and I just found your site - apogeegnss.com - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what youâ€™re doing is pretty cool.\r\n \r\nBut if you donâ€™t mind me asking â€“ after someone like me stumbles across apogeegnss.com, what usually happens?\r\n\r\nIs your site generating leads for your business? \r\n \r\nIâ€™m guessing some, but I also bet youâ€™d like moreâ€¦ studies show that 7 out 10 who land on a site wind up leaving without a trace.\r\n\r\nNot good.\r\n\r\nHereâ€™s a thought â€“ what if there was an easy way for every visitor to â€œraise their handâ€ to get a phone call from you INSTANTLYâ€¦ the second they hit your site and said, â€œcall me now.â€\r\n\r\nYou can â€“\r\n  \r\nWeb Visitors Into Leads is a software widget thatâ€™s works on your site, ready to capture any visitorâ€™s Name, Email address and Phone Number.  It lets you know IMMEDIATELY â€“ so that you can talk to that lead while theyâ€™re literally looking over your site.\r\n\r\nCLICK HERE https://advanceleadgeneration.com to try out a Live Demo with Web Visitors Into Leads now to see exactly how it works.\r\n\r\nTime is money when it comes to connecting with leads â€“ the difference between contacting someone within 5 minutes versus 30 minutes later can be huge â€“ like 100 times better!\r\n\r\nThatâ€™s why we built out our new SMS Text With Lead featureâ€¦ because once youâ€™ve captured the visitorâ€™s phone number, you can automatically start a text message (SMS) conversation.\r\n  \r\nThink about the possibilities â€“ even if you donâ€™t close a deal then and there, you can follow up with text messages for new offers, content links, even just â€œhow you doing?â€ notes to build a relationship.\r\n\r\nWouldnâ€™t that be cool?\r\n\r\nCLICK HERE https://advanceleadgeneration.com to discover what Web Visitors Into Leads can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\nEric\r\n\r\nPS: Web Visitors Into Leads offers a FREE 14 days trial â€“ and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right nowâ€¦ donâ€™t keep them waiting. \r\nCLICK HERE https://advanceleadgeneration.com to try Web Visitors Into Leads now.\r\n\r\nIf you\'d like to unsubscribe click here http://advanceleadgeneration.com/unsubscribe.aspx?d=apogeegnss.com\r\n', 1, '2023-07-16 12:01:42', '0000-00-00 00:00:00'),
(1657, 'JamesUrged', 'dk42gu@course-fitness.com', 'Sri Lanka', '84576812848', 'å† å¤©ä¸‹ \r\n \r\n \r\nhttps://xn--ghq10gmvi961at1bmail479e.com/', 1, '2023-07-16 07:10:11', '0000-00-00 00:00:00'),
(1658, 'Gregoryslunk', 'yourmail@gmail.com', 'Malta', '83596977792', 'Press releases are a powerful tool for businesses to communicate their news, achievements, and promotions to the media and the public. They can help generate buzz, increase brand awareness, and boost SEO rankings. \r\n \r\n \r\nBut how can you offer press release services to your clients as a freelancer or an agency? Here are some tips to help you get started: \r\n \r\n \r\nIdentify your target market. Who are your ideal clients for press release services? What kind of industries, niches, or topics do they cover? What are their goals and pain points? How can you help them solve their problems and reach their audience with press releases? \r\n \r\n \r\nCreate a portfolio. Showcase your previous work and results with press releases. Include samples of press releases you have written, distributed, or secured coverage for. Highlight the benefits and outcomes of your press releases, such as increased traffic, leads, sales, or media mentions. \r\n \r\n \r\nSet your pricing. How much will you charge for your press release services? Consider the value you provide, the time and effort involved, and the market rates. You can offer different packages or tiers of services, such as writing only, writing and distribution, or writing, distribution, and follow-up. \r\n \r\n \r\nPitch your services. Reach out to potential clients who could benefit from your press release services. Use email, social media, or online platforms to introduce yourself and your services. Explain how you can help them achieve their goals with press releases. Provide relevant examples and testimonials from your portfolio. Include a clear call to action and a link to your website or landing page. \r\n \r\n \r\nDeliver quality work. Once you land a client, make sure you deliver high-quality work that meets their expectations and deadlines. Follow the best practices for writing press releases, such as using a catchy headline, a clear and concise body, a strong quote, and a compelling call to action. Use reputable distribution channels and tools to send out your press releases to relevant media outlets and journalists. Track and measure the results of your press releases, such as views, clicks, shares, or coverage. Provide feedback and reports to your client on the performance of your press releases. \r\n \r\n \r\nOffering press release services to your clients can be a lucrative and rewarding way to grow your freelance or agency business. By following these tips, you can establish yourself as a trusted and professional press release provider who can help your clients reach their target audience and achieve their business goals. \r\n \r\n \r\n \r\n[b]1000$[/b] per post permanent for all sites bulk deal \r\n[b]50$[/b] per post \r\n \r\nhttps://www.canadiannewstoday.com/ \r\nhttps://www.thetelegraphnewstoday.com/ \r\nhttps://www.timesofnetherland.com/ \r\nhttps://www.washingtontimesnewstoday.com/ \r\nhttps://www.australiannewstoday.com/ \r\nhttps://www.bloombergnewstoday.com/ \r\nhttps://www.cnbcnewstoday.com/ \r\nhttps://www.bostonnewstoday.com/ \r\nhttps://www.oxfordnewstoday.com/ \r\nhttps://www.irishnewstoday.com/ \r\nhttps://www.chinaworldnewstoday.com/ \r\nhttps://www.crunchbasenewstoday.com/ \r\nhttps://www.topeuropenews.com/ \r\nhttps://www.dailyexpressnewstoday.com/ \r\nhttps://www.thesunnewstoday.com/ \r\nhttps://www.huffingtonposttoday.com/ \r\nhttps://www.nationalposttoday.com/ \r\nhttps://www.germaynewstoday.com/ \r\nhttps://www.scotlandnewstoday.com/ \r\nhttps://www.maltanewstime.com \r\nhttps://www.mirrornewstoday.com/ \r\nhttps://www.timesofspanish.com \r\nhttps://www.italiannewstoday.com/ \r\nhttps://www.turkeynewstoday.com/ \r\nhttps://www.walesnewstoday.com/ \r\nhttps://www.washingtonposttoday.com/ \r\nhttps://www.thestarnewstoday.com \r\nhttps://www.theindependentnewstoday.com/ \r\nhttps://www.spanenewstoday.com/ \r\nhttps://www.chroniclenewstoday.com \r\nhttps://www.dutchnewstoday.com/ \r\nhttps://www.dwnewstoday.com/ \r\nhttps://www.dailymirrornewstoday.com/ \r\nhttps://www.thequintnewstoday.com/ \r\nhttps://www.portugalnewstoday.com/ \r\nhttps://www.dailyheraldnewstoday.com/ \r\nhttps://www.dailystarnewstoday.com/ \r\nhttps://www.dailytelegraphnewstoday.com/ \r\nhttps://www.dwnewstoday.com/ \r\nhttps://www.europeannewstoday.com \r\nhttps://www.frenchnewstoday.com \r\nhttps://www.guardiannewstoday.com/ \r\nhttps://www.headlinesworldnews.com/ \r\nhttps://www.livemintnewstoday.com/ \r\nhttps://www.neatherlandnewstoday.com/ \r\n \r\nhttps://www.neweuropetoday.com/ \r\nhttps://www.norwaynewstoday.com/ \r\nhttps://www.postgazettenewstoday.com/ \r\nhttps://www.republicofchinatoday.com/ \r\nhttps://www.reuterstoday.com/ \r\nhttps://www.russiannewstoday.com/ \r\nhttps://www.switzerlandnewstoday.com/ \r\nhttps://www.thedailymailnewstoday.com/ \r\nhttps://www.thedailytelegraphnewstoday.com/ \r\nhttps://www.theexpressnewstoday.com/ \r\nhttps://www.theheraldnewstoday.com/ \r\nhttps://www.theirishtimesnewstoday.com/ \r\nhttps://www.forbesnewstoday.com/ \r\nhttps://www.britishnewstoday.com/ \r\nhttps://www.themetronewstoday.com/ \r\nhttps://www.theirishtimestoday.com/ \r\nhttps://www.themirrornewstoday.com/', 1, '2023-07-16 09:48:45', '0000-00-00 00:00:00'),
(1659, 'JoshuaBum', 'ydh1nc@course-fitness.com', 'Guyana', '84658719113', 'à¸‚à¸™à¸¡à¹ƒà¸ªà¹ˆà¸à¸±à¸à¸Šà¸²ã€à¸à¸±à¸à¸Šà¸² à¹à¸™à¸°à¸™à¸³ã€à¸à¸à¸«à¸¡à¸²à¸¢ à¸à¸±à¸à¸Šà¸² \r\n \r\n \r\n \r\n \r\nhttps://kubet.party', 1, '2023-07-16 01:02:59', '0000-00-00 00:00:00'),
(1660, 'Eric Jones', 'Eric Jones', 'Wannxjammzeel', 'ericjonesmyemail@gmail.com', 'Dear apogeegnss.com Admin. this is Eric and I ran across apogeegnss.com a few minutes ago.\r\n\r\nLooks greatâ€¦ but now what?\r\n\r\nBy that I mean, when someone like me finds your website â€“ either through Search or just bouncing around â€“ what happens next?  Do you get a lot of leads from your site, or at least enough to make you happy?\r\n\r\nHonestly, most business websites fall a bit short when it comes to generating paying customers. Studies show that 70% of a siteâ€™s visitors disappear and are gone forever after just a moment.\r\n\r\nHereâ€™s an ideaâ€¦\r\n \r\nHow about making it really EASY for every visitor who shows up to get a personal phone call you as soon as they hit your siteâ€¦\r\n \r\nYou can â€“\r\n  \r\nWeb Visitors Into Leads is a software widget thatâ€™s works on your site, ready to capture any visitorâ€™s Name, Email address and Phone Number.  It signals you the moment they let you know theyâ€™re interested â€“ so that you can talk to that lead while theyâ€™re literally looking over your site.\r\n\r\nCLICK HERE https://advanceleadgeneration.com to try out a Live Demo with Web Visitors Into Leads now to see exactly how it works.\r\n\r\nYouâ€™ll be amazed - the difference between contacting someone within 5 minutes versus a half-hour or more later could increase your results 100-fold.\r\n\r\nIt gets even betterâ€¦ once youâ€™ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation.\r\n  \r\nThat way, even if you donâ€™t close a deal right away, you can follow up with text messages for new offers, content links, even just â€œhow you doing?â€ notes to build a relationship.\r\n\r\nPretty sweet â€“ AND effective.\r\n\r\nCLICK HERE https://advanceleadgeneration.com to discover what Web Visitors Into Leads can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Web Visitors Into Leads offers a FREE 14 days trial â€“ and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right nowâ€¦ donâ€™t keep them waiting. \r\nCLICK HERE https://advanceleadgeneration.com to try Web Visitors Into Leads now.\r\n\r\nIf you\'d like to unsubscribe click here http://advanceleadgeneration.com/unsubscribe.aspx?d=apogeegnss.com\r\n', 1, '2023-07-16 09:28:31', '0000-00-00 00:00:00'),
(1661, 'Ingridaz', 'celiad3cy@gmail.com', 'United States', '87916685975', 'Hey .. Im looking a man. \r\nDo you want to see a beautiful female body? Here are my erotic photos - tinyurl.com/2ptqf2jm', 1, '2023-07-17 12:51:55', '0000-00-00 00:00:00');
INSERT INTO `contact_form_query` (`id`, `name`, `email`, `location`, `mobile`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1662, 'kazinoWetly', 'kazinolain@gmail.com', 'Australia', '83935571697', 'ÐšÐ°Ðº ÑÐ°Ð¼Ð¾Ñ‡ÑƒÐ²ÑÑ‚Ð²Ð¸Ðµ? -Ð²Ð¸Ð´Ð¸ÑˆÑŒ.Â  \r\nÂ  \r\n Ð±ÐµÐ·Ð´ÐµÐ¿Ð¾Ð·Ð¸Ñ‚Ð½Ñ‹Ðµ Ð±Ð¾Ð½ÑƒÑ forexÂ  \r\nÂ  \r\n 10 Ð»ÑƒÑ‡ÑˆÐ¸Ñ… Ð¿Ñ€Ð¸Ñ‡Ð¸Ð½ Ð´Ð»Ñ Ð´Ð²Ð¸Ð¶ÐµÐ½Ð¸Ñ Ðº ÑƒÑÐ¿ÐµÑ…Ñƒ.Â  \r\nÂ  \r\nÐ­Ñ‚Ð¾ - Ð¾Ð´Ð¾Ð±Ñ€ÐµÐ½Ð¸Ðµ! ÐšÐ°ÐºÑƒÑŽ Ð¾Ñ†ÐµÐ½ÐºÑƒ Ð¼Ð¾Ð¶Ð½Ð¾ Ð²Ñ‹ÑÑ‚Ð°Ð²Ð¸Ñ‚ÑŒ ÑÐµÐ³Ð¾Ð´Ð½ÑÑˆÐ½ÐµÐ¼Ñƒ Ð´Ð½ÑŽ? . Ð—Ð½Ð°ÑŽÑ‚ Ð»Ð¸ Ð»ÑŽÐ´Ð¸, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ñ… Ð²Ñ‹ Ð»ÑŽÐ±Ð¸Ñ‚Ðµ Ð±Ð¾Ð»ÑŒÑˆÐµ Ð²ÑÐµÐ³Ð¾, ÐºÐ°Ðº Ð²Ñ‹ Ð¸Ñ… Ð»ÑŽÐ±Ð¸Ñ‚Ðµ?Â  \r\nÂ  \r\nÐ½Ð°Ð¿Ñ€Ð¸Ð¼ÐµÑ€, ÐµÑÐ»Ð¸ Ð¿Ð¾Ð»ÑƒÑ‡Ð¸Ñ‚ÑŒÂ 500$ + 225 FS Ð² Ð¾Ð½Ð»Ð°Ð¹Ð½ ÐºÐ°Ð·Ð¸Ð½Ð¾ ÐºÐ°Ðº,Â [url=http://playfortuna-ru.tb.ru/]Ð±Ð¾Ð½ÑƒÑ Ð¾Ð½Ð»Ð°Ð¹Ð½ ÐºÐ°Ð·Ð¸Ð½Ð¾ Ð·Ð° Ñ€ÐµÐ³Ð¸ÑÑ‚Ñ€Ð°Ñ†Ð¸ÑŽ[/url]Â Ð½Ð° ÑÐ°Ð¹Ñ‚Ðµ:Â https://playfortuna-ru.tb.ru/, Ñ€ÐµÐ°Ð»ÑŒÐ½Ð¾ Ð»Ð¸ Ð¾Ñ‚Ñ‹Ð³Ñ€Ð°Ñ‚ÑŒ Ð²ÐµÐ¹Ð´Ð¶ÐµÑ€ Ð¥30 Ð·Ð° ÑÐµÑÑÐ¸ÑŽ Ð¸Ð³Ñ€Ñ‹ Ð² Ð¸Ð³Ñ€Ð¾Ð²Ñ‹Ðµ Ð°Ð²Ñ‚Ð¾Ð¼Ð°Ñ‚Ñ‹?Â  \r\nÂ  \r\nÐ•ÑÐ»Ð¸, ÐºÑ‚Ð¾ Ð½Ðµ Ð² ÐºÑƒÑ€ÑÐµ, Ð¿Ð¾Ð»ÑƒÑ‡Ð¸Ð» Ð°Ð½Ñ‚Ð¸Ñ„ÐµÑ€Ð½Ð°Â Ð·Ð´ÐµÑÑŒ: [url=http://socprofile.com/bonusi-kazino-2023]Ð±ÐµÐ·Ð´ÐµÐ¿Ð¾Ð·Ð¸Ñ‚Ð½Ñ‹Ð¹ Ð±Ð¾Ð½ÑƒÑ[/url], Ð° Ð¸Ð¼ÐµÐ½Ð½Ð¾:Â Â  \r\nÂ  \r\n[url=http://socprofile.com/bonusicasinonew]Ð‘ÐžÐÐ£Ð¡Ð« ÐžÐÐ›ÐÐ™Ð 2000$ + 200 FS >>>[/url]Â  \r\nÂ  \r\nÐ£Ð²Ð¸Ð´ÐµÐ» Ð¿Ð¾Ð´Ð°Ñ€ÐµÐ½ÐºÐ°Â Ð² Ñ‚ÐµÐ»ÐµÐ³Ñ€Ð°Ð¼Ðµ - Ð³Ð¸Ð¿ÐµÑ€Ð¿Ð¾Ð¿ÑƒÐ»ÑÑ€Ð½Ñ‹Ð¹Â ÐºÐ°Ð½Ð°Ð»: @new_bonuses, Ð±ÐµÑ€Ð¸Ñ‚Ðµ -Â http://t.me/new_bonusesÂ  \r\nÂ  \r\nÐ¾Ñ‡ÐµÐ²Ð¸Ð´Ð½o Ð¾ Ð±Ð¾Ð½ÑƒÑÐ°Ñ… Ð¾Ð½Ð»Ð°Ð¹Ð½:Â [url=http://socprofile.com/bonusy-casino] play fortuna com Ð¾Ñ„Ð¸Ñ†Ð¸Ð°Ð»ÑŒÐ½Ñ‹Ð¹[/url]Â  \r\n \r\nÐŸÐ¾Ð´Ñ€Ð¾Ð±Ð½ÐµÐµ:http://vk.com/bonusycasino_online \r\nÂ  \r\n Ð¾Ñ‚ÑÑŽÐ´Ð° Ð¿Ð¾Ð¿Ð¾Ð´Ñ€Ð¾Ð±Ð½ÐµÐ¹, Ð¿Ð¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð° - Ð»ÐµÐ¶Ð°Ñ‰Ð¸Ð¹ Ð² Ð¾ÑÐ½Ð¾Ð²Ðµ: [url=http://bonusi.tb.ru/zaim]ÐºÑ€ÐµÐ´Ð¸Ñ‚Ñ‹ Ð±Ð°Ð½ÐºÐ¸ ÑƒÑÐ»Ð¾Ð²Ð¸Ñ[/url] \r\nÐ½Ð°Ð¿Ñ€Ð¸Ð¼ÐµÑ€: \r\n \r\nÐ”Ð°ÑÑ‚ Ð»Ð¸ Ð±Ð°Ð½Ðº Ð¸Ð¿Ð¾Ñ‚ÐµÐºÑƒ, ÐµÑÐ»Ð¸ Ñƒ Ð¿Ð¾Ñ‚ÐµÐ½Ñ†Ð¸Ð°Ð»ÑŒÐ½Ð¾Ð³Ð¾ Ð·Ð°ÐµÐ¼Ñ‰Ð¸ÐºÐ° Ð´ÐµÐ½ÑŒÐ³Ð¸ Ð½Ð° Ð¿ÐµÑ€Ð²Ð¾Ð½Ð°Ñ‡Ð°Ð»ÑŒÐ½Ñ‹Ð¹ Ð²Ð·Ð½Ð¾Ñ Ð¾Ñ‚ÑÑƒÑ‚ÑÑ‚Ð²ÑƒÑŽÑ‚? \r\n \r\nÐŸÑ€ÐµÐºÑ€Ð°ÑÐ½Ð¾ Ð¾ Ð·Ð°Ð¹Ð¼Ð°Ñ…: loan.tb.ru -  ÐºÑ€ÐµÐ´Ð¸Ñ‚Ð½Ñ‹Ð¹ ÐºÑ€ÐµÐ´Ð¸Ñ‚ - Ð—Ð°Ð¹Ð¼ Ð±ÐµÐ· Ð¿Ñ€Ð¾Ñ†ÐµÐ½Ñ‚Ð¾Ð² - Ð˜Ñ‰Ð¸Ñ‚Ðµ: Ð·Ð°Ð¹Ð¼Ñ‹ ÐºÑ€ÑƒÐ³Ð»Ð¾ÑÑƒÑ‚Ð¾Ñ‡Ð½Ð¾ - ÑÐ¼Ð¾Ñ‚Ñ€Ð¸Ñ‚Ðµ: Ð ÐµÐ¹Ñ‚Ð¸Ð½Ð³ ÐœÐ¤Ðž Ð¾Ð½Ð»Ð°Ð¹Ð½ 2021 Ð¿Ð¾ Ð¾Ñ‚Ð·Ñ‹Ð²Ð°Ð¼ Ð¸ Ð¾Ð´Ð¾Ð±Ñ€ÐµÐ½Ð¸ÑŽ. Ð ÐµÐ¹Ñ‚Ð¸Ð½Ð³ ÐœÐ¤Ðž.Ð ÐµÐ¹Ñ‚Ð¸Ð½Ð³ Ð¼Ð¸ÐºÑ€Ð¾Ñ„Ð¸Ð½Ð°Ð½ÑÐ¾Ð²Ñ‹Ñ… Ð¾Ñ€Ð³Ð°Ð½Ð¸Ð·Ð°Ñ†Ð¸Ð¹. Ð¡Ð¿Ð¸ÑÐ¾Ðº ÐœÐ¤Ðž. ÐŸÑ€Ð¾Ñ†ÐµÐ½Ñ‚Ñ‹. ÐžÑ‚Ð·Ñ‹Ð²Ñ‹. Ð ÐµÐ¹Ñ‚Ð¸Ð½Ð³ ÐœÐ¤Ðž 2021 Ð³Ð¾Ð´Ð°. ÐŸÑ€ÐµÐ´Ð»Ð°Ð³Ð°ÐµÐ¼ Ð¾Ð·Ð½Ð°ÐºÐ¾Ð¼Ð¸Ñ‚ÑŒÑÑ Ñ Ð½ÐµÐ·Ð°Ð²Ð¸ÑÐ¸Ð¼Ñ‹Ð¼ Ð¾Ð½Ð»Ð°Ð¹Ð½-Ñ€ÐµÐ¹Ñ‚Ð¸Ð½Ð³Ð¾Ð¼ Ð¼Ð¸ÐºÑ€Ð¾Ñ„Ð¸Ð½Ð°Ð½ÑÐ¾Ð²Ñ‹Ñ… Ð¾Ñ€Ð³Ð°Ð½Ð¸Ð·Ð°Ñ†Ð¸Ð¹ Ð Ð¾ÑÑÐ¸Ð¸, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ð¹ ÑÑ„Ð¾Ñ€Ð¼Ð¸Ñ€Ð¾Ð²Ð°Ð½ Ð½Ð° Ð¾ÑÐ½Ð¾Ð²Ðµ Ð¾Ñ‚Ð·Ñ‹Ð²Ð¾Ð² Ñ€ÐµÐ°Ð»ÑŒÐ½Ñ‹Ñ… Ð·Ð°Ñ‘Ð¼Ñ‰Ð¸ÐºÐ¾Ð². Ð”Ð»Ñ Ñ‚Ð¾Ð³Ð¾, Ñ‡Ñ‚Ð¾Ð±Ñ‹ Ð¾Ñ†ÐµÐ½Ð¸Ñ‚ÑŒ ÐœÐ¤Ðž Ð¸Ð· ÑÐ¿Ð¸ÑÐºÐ° Ð¸ Ð¾ÑÑ‚Ð°Ð²Ð¸Ñ‚ÑŒ Ð¾Ñ‚Ð·Ñ‹Ð², Ð½ÐµÐ¾Ð±Ñ…Ð¾Ð´Ð¸Ð¼Ð¾ Ð·Ð°Ð¹Ñ‚Ð¸ Ð½Ð° ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ñƒ ÐºÐ¾Ð½ÐºÑ€ÐµÑ‚Ð½Ð¾Ð¹ Ð¾Ñ€Ð³Ð°Ð½Ð¸Ð·Ð°Ñ†Ð¸Ð¸: Ð›Ð°Ð¹Ð¼-Ð—Ð°Ð¹Ð¼, ÐœÐ°Ð½Ð¸Ð¼ÐµÐ½, Ð—Ð°Ð¹Ð¼Ð¸Ð³Ð¾, ÐœÐ°ÐºÑ ÐšÑ€ÐµÐ´Ð¸Ñ‚, Ð—Ð°Ð¹Ð¼ÐµÑ€, Ð’ÐµÐ±Ð±Ð°Ð½ÐºÐ¸Ñ€. - online Ð·Ð°Ð¹Ð¼ Ð½Ð° ÐºÐ°Ñ€Ñ‚Ñƒ ÐšÐ»Ð¸Ð½Ñ†Ñ‹ \r\n \r\n Ð½Ñƒ, Ð¿Ð¾Ð³Ð¾Ð´Ð¸: [url=http://creditonline.tb.ru/]Ð¿Ð¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ»ÑŒÑÐºÐ¸Ð¹ ÐºÑ€ÐµÐ´Ð¸Ñ‚ ÐºÐ°Ð»ÑŒÐºÑƒÐ»ÑÑ‚Ð¾Ñ€[/url] \r\n \r\nÐ¿ÐµÑ€Ð²Ð¾Ðµ: [url=http://bonuses.turbo.site/]Ð±ÐµÐ· Ñ€ÐµÐ³Ð¸ÑÑ‚Ñ€Ð°Ñ†Ð¸Ñ[/url] \r\n \r\nÐºÐ»ÑŽÑ‡ÐµÐ²Ð¾Ð¹: [url=http://bonusi.tb.ru/]Ð¸ÑÑ‚Ð¾Ñ€Ð¸Ñ ÐºÑ€ÐµÐ´Ð¸Ñ‚Ð°[/url] \r\n \r\n Ð·Ð°Ñ…Ð²Ð°Ñ‚Ñ‹Ð²Ð°ÑŽÑ‰Ðµ - Ð¾Ð¿Ñ€ÐµÐ´ÐµÐ»ÑÑŽÑ‰Ð¸Ð¹: [url=http://bonusi.tb.ru/kredit]Ð·Ð°Ð¹Ð¼ Ñ Ð¿Ð»Ð¾Ñ…Ð¾Ð¹ ÐºÑ€ÐµÐ´Ð¸Ñ‚Ð½Ð¾Ð¹ Ð¸ÑÑ‚Ð¾Ñ€Ð¸ÐµÐ¹[/url] \r\n \r\n Ð¾Ñ‚ÑÑŽÐ´Ð° Ð¿Ð¾Ð¿Ð¾Ð´Ñ€Ð¾Ð±Ð½ÐµÐ¹, Ð¿Ð¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð°:[url=http://slotwins.mya5.ru/]casino bonus 2021[/url] \r\n \r\n Ð²Ð¸Ð´Ð¸ÑˆÑŒ: [url=http://credit-online.turbo.site/]Ð°Ð²Ñ‚Ð¾ Ð² ÐºÑ€ÐµÐ´Ð¸Ñ‚ Ð² Ð°Ð²Ñ‚Ð¾ÑÐ°Ð»Ð¾Ð½Ðµ[/url] \r\n \r\nÑÐ´Ñ€Ð¾: [url=http://credits.mya5.ru/]Ð¼Ð¾Ð¶Ð½Ð¾ Ð·Ð°Ð¹Ð¼[/url] \r\n \r\nÑ†ÐµÐ½Ñ‚Ñ€Ð°Ð»ÑŒÐ½Ñ‹Ð¹: [url=http://credits-online.mya5.ru/]Ð¼Ñ‚Ñ ÐºÑ€ÐµÐ´Ð¸Ñ‚[/url] \r\n \r\nÐºÐ°Ð½Ð°ÐµÑ‚:[url=http://boosty.to/casino-online]Ð±ÐµÐ·Ð´ÐµÐ¿Ð¾Ð·Ð¸Ñ‚Ð½Ñ‹Ð¹ Ð±Ð¾Ð½ÑƒÑ Ð·Ð° Ñ€ÐµÐ³Ð¸ÑÑ‚Ñ€Ð°Ñ†Ð¸ÑŽ Ð² ÐºÐ°Ð·Ð¸Ð½Ð¾[/url] \r\n \r\n Ð¿Ñ€ÐµÐ»ÑŽÐ±Ð¾Ð¿Ñ‹Ñ‚Ð½Ð¾:[url=http://vk.com/casino_bez_depozita_2021]ÐºÐ°Ð·Ð¸Ð½Ð¾ Ð°Ð²Ñ‚Ð¾Ð¼Ð°Ñ‚Ñ‹ Ð¾Ð½Ð»Ð°Ð¹Ð½[/url] \r\n \r\nÑÐ°Ð¼Ð¾Ð³Ð»Ð°Ð²Ð½ÐµÐ¹ÑˆÐ¸Ð¹: [url=http://bonus.ru.net/]ÐºÐ°Ð·Ð¸Ð½Ð¾ Ð¾Ð½Ð»Ð°Ð¹Ð½[/url] \r\n \r\nÑ€Ð°Ð·ÑƒÐ¹ Ð±ÐµÐ»ÑŒÐ¼Ð°: [url=http://bonusi.tb.ru/]Ð²Ñ‹Ð´Ð°Ñ‡Ð° ÐºÑ€ÐµÐ´Ð¸Ñ‚Ð° Ð±Ð°Ð½ÐºÐ¾Ð¼[/url] \r\n \r\n Ð½Ñƒ, Ð³Ð»ÑÐ´Ð¸: [url=http://kredity.tb.ru/]Ðµ ÐºÑ€ÐµÐ´Ð¸Ñ‚ Ð±Ð°Ð½Ðº[/url] \r\nÐ°Ð²Ð°Ð½Ñ‚Ð°Ð¶Ð½Ð¾:[url=http://boosty.to/casinoonline]Ð±Ð¾Ð½ÑƒÑÑ‹ ÐºÐ°Ð·Ð¸Ð½Ð¾ Ð¿Ð¾Ð»ÑƒÑ‡Ð¸Ñ‚ÑŒ[/url] \r\n \r\nÐ´ÐµÐ»Ð¾ Ñ…Ð¾Ð·ÑÐ¹ÑÐºÐ¾Ðµ: [url=http://boosty.to/credits]ÐºÑ€ÐµÐ´Ð¸Ñ‚Ñ‹ Ð±Ð°Ð½ÐºÐ¸ Ð²Ñ‹Ð±Ñ€Ð°Ñ‚ÑŒ[/url] \r\n \r\n ÑÐ¼Ð¾Ñ‚Ñ€Ð¸Ñ‚Ðµ Ñƒ Ð¼ÐµÐ½Ñ: [url=http://zen.yandex.ru/media/id/6022fdd34d8f9e01f450c29b/kredit-6022fdda9eeef76a6925c6fe]Ð¾Ñ‚Ð¿ Ð±Ð°Ð½Ðº Ð¾Ð¿Ð»Ð°Ñ‚Ð¸Ñ‚ÑŒ ÐºÑ€ÐµÐ´Ð¸Ñ‚[/url] \r\n \r\nÐ¿Ñ€Ð¸ÐºÐ¾Ð»ÑŒÐ½Ð¾:[url=http://boosty.to/casino-online]Ð±ÐµÐ·Ð´ÐµÐ¿Ð¾Ð·Ð¸Ñ‚Ð½Ñ‹Ð¹ Ð±Ð¾Ð½ÑƒÑ Ð´ÐµÐ½ÑŒÐ³Ð°Ð¼Ð¸[/url] \r\n \r\n Ð·Ð°Ñ†ÐµÐ½Ð¸: [url=http://spark.ru/startup/credits/blog/72453/kredit-banki-krediti-banki-krediti-bank-vzyat-kredit-kredit-onlajn-houm-kredit-kredit-v-banke-kredit-bez-sberbank-kredit-kredit-nalichnimi-kredit-pod-credit-potrebitelskij-kredit]Ð¼Ð¾Ð¼ÐµÐ½Ñ‚Ð°Ð»ÑŒÐ½Ñ‹Ð¹ ÐºÑ€ÐµÐ´Ð¸Ñ‚[/url] \r\n \r\nÐ²Ð¾Ñ‚ Ð¾Ð½Ð¾ ÐºÐ°Ðº: [url=https://user373133.tourister.ru/blog/19226]ÐºÑ€ÐµÐ´Ð¸Ñ‚ Ð¼Ð¾Ð¶Ð½Ð¾[/url] \r\n \r\nÐ´ÑƒÑˆÐ°: [url=http://sites.google.com/view/zaimy-tyt/]ÐºÑ€ÐµÐ´Ð¸Ñ‚ Ð¿Ð¾Ð´ Ð¿Ñ€Ð¾Ñ†ÐµÐ½Ñ‚Ñ‹[/url] \r\n \r\nÐ½Ð°Ð±Ð¾Ð»ÑŒÑˆÐ¸Ð¹: [url=https://zen.yandex.ru/id/6022fdd34d8f9e01f450c29b]Ð»ÑƒÑ‡ÑˆÐ¸Ðµ ÐºÑ€ÐµÐ´Ð¸Ñ‚Ñ‹[/url] \r\n \r\n \r\nhttp://www.avito.ru/moskva/predlozheniya_uslug/avitolog_prodvizhenie_na_avito_posting_2731917893 \r\nhttp://vk.com/@avitolog_2023-posting-na-avito-razmeschenie-obyavlenii-na-avito \r\nhttp://vk.com/avitolog_2023 \r\nhttp://vk.com/avito_2023 \r\nhttp://vk.com/burger_pushkin \r\nhttp://tgstat.ru/en/chat/@new_bonuses \r\nhttp://tgstat.ru/en/chat/@zaimonlinetyt \r\nhttp://tgstat.ru/en/chat/@casinos_2021 \r\nhttp://tgstat.ru/en/chat/@zaimycredity \r\nhttp://credit-online.turbo.site/ \r\nhttp://twitter.com/CasinoBonusi \r\nhttp://vk.com/bonuses23 \r\nhttp://vk.com/@bonuses23-casino-registration \r\nhttp://socprofile.com/bonusicasinonew \r\nhttp://vk.com/@playfortunacomru-play-fortuna-registraciya \r\nhttp://vk.com/playfortunacomru \r\nhttp://twitter.com/bonusykazino \r\nhttp://twitter.com/bonusykazino/status/1606330268985475075 \r\nhttp://twitter.com/bonusykazino/status/1606334813241085953 \r\nhttp://twitter.com/bonusykazino/status/1606326484758667264 \r\nhttp://twitter.com/CasinoBonusi/status/1602974856496271361 \r\nhttp://twitter.com/CasinoBonusi/status/1602981560525160448 \r\nhttp://twitter.com/CasinoBonusi/status/1602979584340889601 \r\nhttp://www.facebook.com/permalink.php?story_fbid=pfbid02NYYTYVahaaixRzHZuXfni1ekC928TDMDdTcCUdmy52zJUt4MrTuPAhB58uDwpZYil&id=100017183618781 \r\nhttp://www.facebook.com/permalink.php?story_fbid=pfbid0eimWgqQgdxZ1k9R1L9Fe5nopxZjKpthzU1MeYtdeEM8eF5YZKV9YxpYA5HJEgu9Fl&id=100017183618781 \r\nhttp://vk.com/bonusesnew \r\nhttp://vk.com/@bonusesnew-bezdepozitnye-bonusy-kazino-2023-za-registraciu \r\nhttp://vk.com/zajmy_onlajn_na_kartu_2023 \r\nhttp://vk.com/@zajmy_onlajn_na_kartu_2023-zaimy-na-kartu-vzyat-zaim-bez-otkaza \r\nhttp://bit.ly/casinobonusy \r\nhttp://yandex.ru/collections/user/949d3tg485gjcy4027bb8j1q48/bonusy-kazino-za-registratsiiu/?share=NWVhMjA0ZjAwMzNlZGExOTEwMTYzZDRlXzVkNDk5MWMxYTg5NWIyMDBhNWM5ZDE2Mg%3D%3D \r\nhttp://vk.com/bonuses_new \r\nhttp://vk.com/@bonuses_new-bonusy-za-registraciu \r\nhttp://vk.com/bonusycasino_online \r\nhttp://vk.com/@bonusycasino_online-bezdepozitnye-bonusy-onlain-kazino-2023 \r\nhttp://vk.com/dating_website + http://vk.link/dating_website \r\nhttp://spark.ru/startup/credit-loan/blog/99728/krediti-i-zajmi-rossii \r\nhttp://vk.link/credit_online_rf + http://vk.com/credit_online_rf \r\nhttp://www.facebook.com/CreditOnlineNow + http://vk.com/strahovanieresospb http://strahovanie-reso.turbo.site/ http://vk.com/kredity_banki http://vk.com/creditsru http://vk.com/credit_online_rf http://vk.link/credit_online_rf http://vk.link/strahovanieresospb \r\nhttp://bonusi.tb.ru/| http://bonusi.tb.ru/kredit| http://bonusi.tb.ru/zaim| http://bonusi.tb.ru/bank| http://bonusi.tb.ru/credit-cards|http://bonusi.tb.ru/avtokredit| http://bonusi.tb.ru/ipoteka \r\nhttp://creditonline.tb.ru \r\nhttp://creditonline.tb.ru/microloans \r\nhttp://creditonline.tb.ru/avtokredity \r\nhttp://creditonline.tb.ru/bez-spravok \r\nhttp://creditonline.tb.ru/dengi \r\nhttp://creditonline.tb.ru/banki \r\nhttp://creditonline.tb.ru/kreditnye-karty \r\nhttp://creditonline.tb.ru/potrebitelskie-kredity \r\nhttp://creditonline.tb.ru/refinansirovanie \r\nhttp://creditonline.tb.ru/zajmy-na-kartu \r\nhttp://creditonline.tb.ru/kalkulyator \r\nhttp://creditonline.tb.ru/kreditovanie \r\nhttp://creditonline.tb.ru/debetovye-karty \r\nhttp://creditonline.tb.ru/kredity-nalichnymi \r\nhttp://creditonline.tb.ru/banki-kredity \r\nhttp://creditonline.tb.ru/zaimy \r\nhttp://creditonline.tb.ru/kredity-ru \r\nhttp://creditonline.tb.ru/moskva \r\nhttp://creditonline.tb.ru/lichnyj-kabinet \r\nhttp://creditonline.tb.ru/news \r\nhttp://creditonline.tb.ru/usloviya-kredita \r\nhttp://creditonline.tb.ru/zayavka \r\nhttp://creditonline.tb.ru/vzyat-kredit \r\nhttp://loan.tb.ru/bez-proverok \r\nhttp://loan.tb.ru/bez-procentov \r\nhttp://loan.tb.ru/mikrozajm \r\nhttp://loan.tb.ru/mfo \r\nhttp://loan.tb.ru/online \r\nhttp://loan.tb.ru/na-kartu \r\nhttp://loan.tb.ru/ \r\nhttp://loan.tb.ru/bistriy \r\nhttp://loan.tb.ru/web-zaim \r\nhttp://loan.tb.ru/zaimy-rf \r\nhttp://loan.tb.ru/zaimy \r\nhttp://zaimi.tb.ru/kredit-zajm \r\nhttp://zaimi.tb.ru/zajmy-onlajn \r\nhttp://zaimi.tb.ru/zajmy-na-kartu \r\nhttp://zaimi.tb.ru/zajmy-moskva \r\nhttp://zaimi.tb.ru/zajm-na-kartu \r\nhttp://zaimi.tb.ru/kredity-2023 \r\nhttp://zaimi.tb.ru/kredit \r\nhttp://credit-online.tb.ru/ \r\nhttp://zajm.tb.ru/ \r\nhttp://boosty.to/creditonline \r\nhttp://boosty.to/zaimy/ \r\nhttp://yandex.ru/collections/user/bonusy2021/zaim-onlain-na-kartu-24-chasa-onlain-zaim-vsia-rossiia/ \r\nhttp://bonusi.tb.ru/refinansirovanie \r\nhttp://bonusi.tb.ru/dengi \r\nhttp://bonusi.tb.ru/mikrozajm \r\nhttp://bonusi.tb.ru/termins \r\nhttp://t.me/new_bonuses \r\nhttp://t.me/casinos_2021 \r\nhttp://t.me/zaimonlinetyt \r\nhttp://t.me/zaimycredity \r\nhttp://vk.com/zajm_bot_vk \r\nhttp://vk.com/dengi_nakarty \r\nhttp://vk.com/bystryj_zajm_online \r\nhttp://vk.com/bank_kredity \r\nhttp://www.google.com/maps/d/u/4/edit?mid=1K1HqvZqkUKSFs6lIsMn0DTIl9uSXahE&usp=sharing \r\nhttp://new.c.mi.com/my/post/668426/ \r\nhttp://new.c.mi.com/my/post/668253/ \r\nhttp://vk.com/slot_machines_bonuses \r\nhttp://vk.com/bezdepozitnye \r\nhttp://vk.com/@bezdepozitnye-bonusy \r\nhttp://vk.com/casino_for_money_online \r\nhttp://vk.com/playfortuna16 \r\nhttp://vk.com/playfortuna16?w=wall-216823266_3 \r\nhttp://vk.com/bezdepozity \r\nhttp://vk.com/@bezdepozity-bezdepozitnyi-bonus-kazino \r\nhttp://vk.com/bezdepozitnyj_bonus_online \r\nhttp://vk.com/bonusy_bez_depozita_new \r\nhttp://vk.com/bezdepy \r\nhttp://vk.com/@bezdepy-bezdepozitnye-bonusy-za-registraciu-v-kazino \r\nhttp://vk.com/kazino_na_dengi_online \r\nhttp://documenter.getpostman.com/view/24070153/2s8YCYpGaw \r\nhttp://my.mail.ru/community/play-fortuna/ \r\nhttp://postila.ru/post/76089974 \r\nhttp://postila.ru/post/76090029 \r\nhttp://ru.pinterest.com/pin/864480090992222652/ \r\nhttp://ru.pinterest.com/pin/864480090992247653/ \r\nhttp://postila.ru/post/76090340 \r\nhttp://vk.com/bonus_casino_2023 \r\nhttp://vk.com/casino_bonuses_2023 \r\nhttp://vk.com/zaimy2023 \r\nhttp://vk.com/bonusycasino_online?w=wall-217366200_28 \r\nhttp://vk.com/bonusycasino_online?w=wall-217366200_29 \r\nhttp://documenter.getpostman.com/view/24070153/2s8YemuETy \r\nhttp://drive.google.com/file/d/16fhEUAYvJNc4YUKQxYzDBS0w7uWMaoOj/view \r\nhttp://drive.google.com/file/d/1aiYZWR-H7egf2lug98vEfgeFikRbyNhh/view \r\nhttp://vk.com/bonusycasino_online?w=wall-217366200_22 \r\nhttp://career.habr.com/monicdub \r\nhttp://playfortuna-1.tb.ru/ \r\nhttp://playfortuna-1.tb.ru/en-official \r\nhttp://playfortuna-1.tb.ru/obzor \r\nhttp://playfortuna-1.tb.ru/com \r\nhttp://playfortuna-1.tb.ru/rus \r\nhttp://playfortuna-1.tb.ru/bonusy \r\nhttp://vk.com/@756954084-bezdepozitnye-bonusy-kazino \r\nhttp://vk.com/id756954084?w=wall756954084_873 \r\nhttp://vk.com/id756954084?z=video756954084_456239022%2F29ca6e00b90559d7f8%2Fpl_wall_756954084 \r\nhttp://vk.com/id756954084?z=video756954084_456239021%2Ff18949c9329767722b%2Fpl_wall_756954084 \r\nhttp://vk.com/id756954084?z=video-216823266_456239018%2F0f0b590470fe1d6f38%2Fpl_wall_756954084 \r\nhttp://ru.pinterest.com/pin/864480090992272116/ \r\nhttp://ru.pinterest.com/pin/864480090992271895/ \r\nhttp://ru.pinterest.com/pin/864480090992271636/ \r\nhttp://postila.ru/post/76094724 \r\nhttp://postila.ru/post/76094911 \r\nhttp://texas-burgers.ru/burgery \r\nhttp://texas-burgers.ru/ \r\nhttp://vk.com/zajmy_na_karty_ru \r\nhttp://vk.com/@zajmy_na_karty_ru-zaimy-na-kartu \r\nhttp://documenter.getpostman.com/view/24070153/2s8YRcNbtb \r\nhttp://documenter.getpostman.com/view/24070153/2s8YsozujW \r\nhttp://website.informer.com/casino-bonus.tb.ru \r\nhttp://ssylki.info/site/play-fortuna.tb.ru \r\nhttp://website.informer.com/play-fortuna.tb.ru \r\nhttp://website.informer.com/playfortuna-1.tb.ru \r\nhttp://vk.com/no_deposit_casino_bonus \r\nhttp://www.youtube.com/channel/UCZ4UU2V9qDLao1djUaqgxpQ \r\nhttp://youtu.be/dgB1nnvwctI \r\nhttp://youtu.be/30cZekHrv54 \r\nhttp://youtu.be/aepVU8eNo8M \r\nhttp://youtu.be/gSvIbYdvHhk \r\nhttp://youtu.be/Um99VG1_9P4 \r\nhttp://youtu.be/FCVxTuM42bg \r\nhttp://youtu.be/92s_OAYoiEg \r\nhttp://youtu.be/hBnUJgyL2WY \r\nhttp://youtu.be/ls-dYEI1luI \r\nhttp://youtu.be/arwTMDzn3k4 \r\nhttp://youtu.be/4Gl8owCtOOA \r\nhttp://youtu.be/Z-sqfwmKQOA \r\nhttp://texas-burgers.ru/pushkin \r\nhttp://spark.ru/startup/burger \r\nhttp://vk.com/burgerii \r\nhttp://vc.ru/u/1580685-burger-2023-burgery \r\nhttp://vc.ru/s/1580754-burger \r\nhttp://vk.link/dostavka_burgerov \r\nhttp://vk.com/dostavka_burgerov \r\nhttp://vk.link/burger_pushkin \r\nhttp://www.reddit.com/user/bonusy \r\nhttp://www.reddit.com/user/bonusy/comments/11cglg5/casino_bonuses_2023_without_deposit/ \r\nhttp://www.reddit.com/user/bonusy/comments/11cl6hi/casino_bonuses_for_registration/ \r\nhttp://casino-bonus.tb.ru/ \r\nhttp://casino-bonus.tb.ru/bez-registracii \r\nhttp://casino-bonus.tb.ru/bonus-kazino \r\nhttp://casino-bonus.tb.ru/bezdepozitnyj-bonus \r\nhttp://forms.yandex.ru/u/62f3a0273eb2741b1773074d/ \r\nhttp://bonusy-2020-onlajjn.tourister.ru/blog/17137 \r\nhttp://bonusy-2020-onlajjn.tourister.ru/blog/17144 \r\nhttp://bonusy-2020-onlajjn.tourister.ru/blog/17145 \r\nhttp://my.mail.ru/community/credit-online/ \r\nhttp://twitter.com/credit_2021 \r\nhttp://zaimy.taplink.ws/ \r\nhttp://vk.com/kreditnaya_karta_bank \r\nhttp://credit-zaim.livejournal.com/ \r\nhttp://vk.com/burgery_spb \r\nhttp://www.liveinternet.ru/users/credit-loan/ \r\nhttp://loanonline24.blogspot.com/ \r\nhttp://goo-gl.ru/credit \r\nhttp://goo-gl.ru/casino \r\nhttp://goo-gl.ru/casino-online \r\nhttp://goo-gl.ru/casinoonline \r\nhttp://kredity.tb.ru/ \r\nhttp://vk.com/kredity_banki \r\nhttp://vk.link/kredity_banki \r\nhttp://zajmy.tb.ru/ \r\nhttp://vk.link/vzyat_zajmy \r\nhttp://vk.com/@kreditnaya_karta_bank-kreditnaya-karta \r\nhttp://vk.com/kazinoregistraciya \r\nhttp://credits2021.blogspot.com/ \r\nhttp://boosty.to/zaimy \r\nhttp://colab.research.google.com/drive/1km69a7-HeP9D0t9LGGJ3fLCFluPSS4qY?usp=sharing \r\nhttp://ssylki.info/?who=zen.yandex.ru%2Fid%2F5c913dd978fa7d00b3fd7c3e \r\nhttp://user373133.tourister.ru/ \r\nhttp://user373133.tourister.ru/blog/19226 \r\nhttp://vk.com/vzyat_kredity \r\nhttp://vk.link/vzyat_kredity \r\nhttp://www.google.com/maps/d/u/0/edit?mid=1sNM2We7Q76dHjxgXKXijkQ4h7971mjU&usp=sharing \r\nhttp://www.google.com/maps/d/u/0/edit?mid=1xi0GlSWIekopF7RHo0YC33qIN7oexuw&usp=sharing \r\nhttp://forms.yandex.ru/admin/62f3a0273eb2741b1773074d/ \r\nhttp://colab.research.google.com/drive/1B07W9vpAMqz4WCAXnZiBoddRrRb80cy5?usp=sharing \r\nhttp://strahovanie-reso.turbo.site/ \r\nhttp://uslugi.yandex.ru/profile/StrakhovanieReso-1656508 \r\nhttp://vk.link/strahovanieresospb \r\nhttp://vk.com/strahovanieresospb \r\nhttp://vk.com/public206653026 \r\nhttp://user386508.tourister.ru/blog/18816 \r\nhttp://www.pinterest.ru/creditloannew/ \r\nhttp://www.youtube.com/channel/UCbsGWACEP_XYTklwYaa4veA \r\nhttp://www.youtube.com/watch?v=2MPgsZsHKIc \r\nhttp://www.youtube.com/watch?v=WChO-KhlY9Q \r\nhttp://kredity.tb.ru/credits \r\nhttp://kredity.tb.ru/kredit \r\nhttp://credity.tb.ru/kalkulyator \r\nhttp://credity.tb.ru/bez-spravok \r\nhttp://credity.tb.ru/ \r\nhttp://vk.com/obrazovanie_kursy \r\nhttp://vk.com/zajmy_ru \r\nhttp://postila.ru/id7628153/1486569-zaymyi_onlayn__zaymyi_0__dlya_vseh_i_vsegda \r\nhttp://postila.ru/id7629420/1486666-srochnyie_zaymyi_onlayn_pod_0__protsentov \r\nhttp://www.google.com/maps/d/u/4/edit?mid=1mIKbaQc9-acTXCFzgaaNCtVwMv43oeM&usp=sharing \r\nhttp://www.pinterest.ru/kreditszaim/ \r\nhttp://datastudio.google.com/reporting/6edeb8da-f3a4-4831-8fb6-70d0aa9b0bf1 \r\nhttp://ssylki.info/site/playfortuna-1.tb.ru \r\nhttp://zen.yandex.ru/media/id/6022fdd34d8f9e01f450c29b/debetovye-karty-i-keshbek-61fea3e99ddacf7d825691de?& \r\nhttp://vk.link/debetovie_karti_ru \r\nhttp://vk.com/debetovie_karti_ru \r\nhttp://zen.yandex.ru/media/id/6022fdd34d8f9e01f450c29b/vziat-potrebitelskii-kredit-6201130f93f62940e602398d?& \r\nhttp://zaimy.taplink.ws \r\nhttp://nethouse.id/banki.ru \r\nhttp://ssylki.info/site/zaimi.tb.ru \r\nhttp://zaimi.tb.ru/ \r\nhttp://yandex.ru/maps/?um=constructor%3A62630da191da5305d66b73c9daa64c39d73abc9d82bb7eaba4965d4e5d2b83dc&source=constructorLink \r\nhttp://sites.google.com/view/zaimy-tyt/ \r\nhttp://sites.google.com/view/zajmy-zdes/ \r\nhttp://vk.com/webzajm \r\nhttp://vk.link/webzajm \r\nhttp://webzaim.tb.ru/ \r\nhttp://web-zaim.tb.ru/ \r\nhttp://ssylki.info/site/web-zaim.tb.ru/ \r\nhttp://spark.ru/startup/krediti-na-kartu \r\nhttp://ok.ru/group/59713776189459 \r\nhttp://vk.link/zaimy_web \r\nhttp://vk.com/zaimy_web \r\nhttp://ssylki.info/site/creditonline.tb.ru/ \r\nhttp://ssylki.info/site/loan.tb.ru/ \r\nhttp://ssylki.info/site/webzaim.tb.ru/ \r\nhttp://ssylki.info/site/zajmy.tb.ru/ \r\nhttp://ssylki.info/site/zajm.tb.ru/ \r\nhttp://ssylki.info/site/vzyat-kredit.tb.ru/ \r\nhttp://ssylki.info/site/credit-online.tb.ru/ \r\nhttp://ssylki.info/site/credity.tb.ru/ \r\nhttp://ssylki.info/site/kredity.tb.ru/ \r\nhttp://ssylki.info/site/bonusi.tb.ru/ \r\nhttp://ssylki.info/site/credit-zajm.blogspot.com/ \r\nhttp://ssylki.info/site/zaimy.taplink.ws/ \r\nhttp://ssylki.info/site/credits.mya5.ru/ \r\nhttp://ssylki.info/site/credits-online.mya5.ru/ \r\nhttp://webzaim.tb.ru/zajmy \r\nhttp://webzaim.tb.ru/zajmy-na-kartu \r\nhttp://webzaim.tb.ru/zajmy-online \r\nhttp://webzaim.tb.ru/mikrozajmy \r\nhttp://loan.tb.ru/mikrokredit \r\nhttp://website.informer.com/web-zaim.tb.ru \r\nhttp://website.informer.com/loan.tb.ru \r\nhttp://website.informer.com/webzaim.tb.ru \r\nhttp://website.informer.com/creditonline.tb.ru \r\nhttp://website.informer.com/kredity.tb.ru \r\nhttp://website.informer.com/credity.tb.ru \r\nhttp://website.informer.com/bonusi.tb.ru \r\nhttp://website.informer.com/credit-online.tb.ru \r\nhttp://website.informer.com/credits-online.mya5.ru \r\nhttp://website.informer.com/credits.mya5.ru \r\nhttp://website.informer.com/zaimy.taplink.ws \r\nhttp://website.informer.com/zajm.tb.ru \r\nhttp://website.informer.com/credit-zajm.blogspot.com \r\nhttp://website.informer.com/bonuska.tb.ru \r\nhttp://website.informer.com/vzyat-kredit.tb.ru \r\nhttp://website.informer.com/zaimi.tb.ru \r\nhttp://zajm.taplink.ws/ \r\nhttp://website.informer.com/zajm.taplink.ws \r\nhttp://ssylki.info/site/zajm.taplink.ws \r\nhttp://brunj.ru/zaimy \r\nhttp://vk.com/nerudnye_materialy_spb \r\nhttp://creditonline.tb.ru/kredity \r\nhttp://ssylki.info/site/vzyat-kredit.tb.ru \r\nhttp://vzyat-kredit.tb.ru/ \r\nhttp://vk.com/casinoslot777?w=wall-216572659_5 \r\nhttp://vk.com/casinoslot777?w=wall-216572659_8 \r\nhttp://vk.com/casinoslot777?w=wall-216572659_4 \r\nhttp://vk.com/casinoslot777 \r\nhttp://vk.com/@playfortuna16-play-fortuna-kazino-plei-fortuna-oficialnyi-sait \r\nhttp://vk.com/@zajmy_ru-zaimy-onlain-zayavka-na-poluchenie-zaima \r\nhttp://vk.com/zajmy_ru?w=wall-210046735_321 \r\nhttp://vk.com/@zaimy_web-zaimy-na-kartu-onlain-vzyat-zaim \r\nhttp://vk.com/@zaimy_web-kredityzaimy-na-kartu-dostupny-onlain-24-chasa \r\nhttp://vk.com/zaimy_web?w=wall-211720264_145 \r\nhttp://vk.com/zaimy_web?z=video-211720264_456239027%2F8e70a069c6922b36ea%2Fpl_wall_-211720264 \r\nhttp://vk.com/playfortuna_com_ru?w=wall-217345110_4 \r\nhttp://www.google.com/maps/d/u/0/edit?mid=19ABYF3Nc25g87HOjde7qdDMaIrGd_cY&usp=sharing \r\nhttp://vk.com/playfortuna_com_ru \r\nhttp://vk.com/casinoslot777?w=wall-216572659_12 \r\nhttp://vk.com/@casinoslot777-bezdepozitnye-bonusy \r\nhttp://vk.com/casinoslot777?z=video-216572659_456239017%2Fa31fd939938a6358db%2Fpl_wall_-216572659 \r\nhttp://vk.com/feed?z=video752633660_456239019%2F3172d9b7c6924c31cc%2Fpl_post_752633660_1339 \r\nhttp://vk.com/feed?z=video752633660_456239017 \r\nhttp://vk.com/feed?z=video756954084_456239021%2F103f19776768a4d630%2Fpl_post_756954084_242 \r\nhttp://vk.com/playfortuna16?z=video-216823266_456239017%2F514a578ebcc258e68c%2Fpl_wall_-216823266 \r\nhttp://vk.com/@bonuses2you-zaim \r\nhttp://www.google.com/maps/d/u/4/edit?mid=1ZulMnVDQeIQS6guOddxYJK3GxHx6DSo&usp=sharing \r\nhttp://www.google.com/maps/d/u/4/edit?mid=1Xr6pQK1o5GHCouOUngmuYQ4Euj0w9uI&usp=sharing \r\nhttp://vk.com/@zaim_na_karty_rf-zaim-onlain-vzyat-zaim-na-kartu \r\nhttp://vk.com/@zajm_na_karty-studencheskii-kredit \r\nhttp://vk.com/id758247422?z=video758247422_456239017%2Ff27cda04057fb318f3%2Fpl_wall_758247422 \r\nhttp://ssylki.info/site/asfaltirovanie.nethouse.ru \r\nhttp://kredity-tyt.ru/ \r\nhttp://ssylki.info/site/kredity-tyt.ru \r\nhttp://www.avito.ru/sankt-peterburg/predlozheniya_uslug/asfaltirovanie_2439837125 \r\nhttp://kredits.for.ru/ \r\nhttp://vk.com/kompyuternyj_monster \r\nhttp://ssylki.info/site/texas-burgers.ru \r\nhttp://vk.com/casino_bez_depozita_2021 \r\nhttp://website.informer.com/playfortuna.tb.ru \r\nhttp://website.informer.com/kredity-tyt.ru \r\nhttp://vk.com/karkasnye_doma_plus \r\nhttp://vk.com/playfortunacasino_com \r\nhttp://vk.com/karkasnye_doma_plus?w=wall-215463638_49 \r\nhttp://vk.com/zaim_na_karty_rf?w=wall-208767782_289 \r\nhttp://vk.com/zaim_na_karty_rf?w=wall-208767782_288 \r\nhttp://vk.com/zajm_na_karty?w=wall-208875123_188 \r\nhttp://vk.com/rejting_kazino_2023 \r\nhttp://vk.com/@rejting_kazino_2023-bezdepozitnye-bonusy \r\nhttp://vk.com/no_deposit_bonuses \r\nhttp://vk.com/bonusescasinotwit \r\nhttp://www.liveinternet.ru/users/kazino_bonusy/ \r\nhttp://vk.com/burger_menyu \r\nhttp://bonusbezdepozit.blogspot.com/ \r\nhttp://www.twitter.com/BonusesGames \r\nhttp://vk.com/nodepositbonusy \r\nhttp://www.youtube.com/@casino-bonuses \r\nhttp://nethouse.id/bonusy \r\nhttp://www.mattandrewsmentoring.org/profile/casino-bonuses/profile \r\nhttp://vk.com/bonus_bezdep \r\nhttp://vk.com/bonus_bezdep?w=wall-218355384_2 \r\nhttp://vk.com/@bonus_bezdep-bezdepozitnye-bonusy-kazino \r\nhttp://vk.com/@nodepositbonusy-bezdepozitnyi-bonus-kazino \r\nhttp://vk.com/bonusescasinobezdep \r\nhttp://vk.com/@bonusescasinobezdep-bezdepozitnye-bonusy \r\nhttp://tgstat.ru/chat/@new_bonuses \r\nhttp://ssylki.info/site/casino-bonus.tb.ru \r\nhttp://g.co/kgs/oN6RGe \r\nhttp://casino-registration.blogspot.com/ \r\nhttp://vk.com/zaimy_2023 \r\nhttp://vk.com/@zaimy_2023-zaimy-na-kartu \r\nhttp://www.youtube.com/channel/UCUgpbs4ZMOFpoEIZoV7Ibhw \r\nhttp://ru.pinterest.com/bonusycasino2023 \r\nhttp://socprofile.com/bonusy-casino \r\nhttp://vk.link/bezdepozitnye_bonusy \r\nhttp://vk.com/bez_depozit \r\nhttp://vk.link/bez_depozit \r\nhttp://worldcrisis.ru/crisis/bonusy \r\nhttp://7ooo.ru/2023/02/03/bezdepozitnye-bonusy-onlayn-kazino-reyting-kazino-45730.html \r\nhttp://bonusy-2023.tourister.ru/info \r\nhttp://tenchat.ru/media/1018635-bonusy-bez-depozita \r\nhttp://vk.com/zaimyweb \r\nhttp://vk.com/zajmy_2023 \r\nhttp://vk.com/zaimy_nakartu \r\nhttp://www.youtube.com/channel/@casino-bonuses \r\nhttp://twitter.com/bonusykazino/status/1624339081265119238?s=20&t=d4Iy9OLDHwgg6dFczhDsOw \r\nhttp://yandex.ru/profile/-/CCUCI6sIwB \r\nhttp://vk.com/bezdepozitnye_bonusy \r\nhttp://socprofile.com/bonusi-kazino-2023 \r\nhttp://bonuski.tb.ru/ \r\nhttp://spark.ru/startup/kazino-bonuses \r\nhttp://m.7ooo.ru/o/bonusykazino/ \r\nhttp://creditonline.tb.ru/ \r\nhttp://vk.com/clredits_2023 \r\nhttp://user373133.tourister.ru/blog/21517 \r\nhttp://vk.com/zajm2023 \r\nhttp://vk.com/bankir_rf \r\nhttp://dzen.ru/a/Y-4LRff0Hwcnlpk8 \r\nhttp://vk.com/kreditykarta \r\nhttp://user414082.tourister.ru/info \r\nhttp://vk.com/burgery_shushary \r\nhttp://vk.link/burgery_shushary \r\nhttp://vk.link/burgery_spb \r\nhttp://zaimi.tb.ru/finuslugi \r\nhttp://zaimi.tb.ru/zajm \r\nhttp://spark.ru/startup/zajmi-na-kartu \r\nhttp://spark.ru/user/150431 \r\nhttp://www.9111.ru/questions/7777777772483935/ \r\nhttp://www.9111.ru/questions/7777777772495993/ \r\nhttp://vc.ru/s/1583540-zaymy-na-kartu \r\nhttp://www.9111.ru/questions/7777777772342567/ \r\nhttp://www.9111.ru/questions/7777777772345251/ \r\nhttp://spark.ru/user/149657/blogs \r\nhttp://spark.ru/startup/banki-finansy \r\nhttp://www.9111.ru/questions/7777777772350182/ \r\nhttp://www.9111.ru/questions/7777777772370990/ \r\nhttp://www.youtube.com/@dating-2023 \r\nhttp://www.9111.ru/id-novosti/ \r\nhttp://www.9111.ru/questions/7777777772404160/ \r\nhttp://www.9111.ru/questions/7777777772403850/ \r\nhttp://www.9111.ru/questions/7777777772403518/ \r\nhttp://www.9111.ru/questions/7777777772403231/ \r\nhttp://www.9111.ru/questions/7777777772403382/ \r\nhttp://www.9111.ru/questions/7777777772403739/ \r\nhttp://www.9111.ru/questions/7777777772408662/ \r\nhttp://gogole-advertising.blogspot.com/ \r\nhttp://www.9111.ru/questions/7777777772422494/ \r\nhttp://burger-pushkin.taplink.ws \r\nhttp://vk.com/bonuses2you?z=video-218802370_456239018%2Fd4a1ae2d68bf1777ac%2Fpl_wall_130211982 \r\nhttp://www.9111.ru/questions/7777777772446392/ \r\nhttp://www.9111.ru/questions/7777777772452601/ \r\nhttp://stopgame.ru/user/kazino \r\nhttp://socprofile.com/kazino \r\nhttp://user386508.tourister.ru/info \r\nhttp://user413876.tourister.ru/info \r\nhttp://vc.ru/u/1568913-bonus-sasino \r\nhttp://user413876.tourister.ru/info \r\nhttp://vk.com/casino_bonus_no_deposit \r\nhttp://texas-burgers.ru/pushkin \r\nhttp://spark.ru/startup/burger \r\nhttp://vk.com/burgerii \r\nhttp://user414082.tourister.ru/info \r\nhttp://vc.ru/u/1580685-burger-2023-burgery \r\nhttp://vc.ru/s/1580754-burger \r\nhttp://vk.link/dostavka_burgerov \r\nhttp://vk.com/burger_pushkin \r\nhttp://vk.com/dostavka_burgerov \r\nhttp://vk.link/burger_pushkin \r\nhttp://vk.com/burgery_shushary \r\nhttp://vk.link/burgery_shushary \r\nhttp://vk.com/burger_menyu \r\nhttp://vk.com/burgery_spb \r\nhttp://vk.link/burgery_spb \r\nhttp://dzen.ru/id/5c9139b563a30300b22a243c \r\nhttp://dzen.ru/video/watch/63fe071d2a996e27d0f5728c \r\nhttp://my.mail.ru/community/credit-online/ \r\nhttp://www.9111.ru/questions/7777777772509448/ \r\nhttp://dzen.ru/kredity \r\nhttp://vk.com/credits_2023 \r\nhttp://www.9111.ru/questions/7777777772373820/ \r\nhttp://stopgame.ru/user/kazino \r\nhttp://www.youtube.com/@dating-2023 \r\nhttp://www.youtube.com/@dating-online \r\nhttp://vk.link/credits_2023 \r\nhttp://www.9111.ru/questions/7777777772525632/ \r\nhttp://vk.link/kredity_banki \r\nhttp://zaim-na-karty.nethouse.ru/ \r\nhttp://zaim-na-karty.nethouse.ru/zajmy \r\nhttp://zaim-na-karty.nethouse.ru/vse-zajmy \r\nhttp://zaimi.tb.ru/ \r\nhttp://zaimi.tb.ru/zajmy-na-kartu \r\nhttp://zaimi.tb.ru/finuslugi \r\nhttp://zaimi.tb.ru/kredit-zajm \r\nhttp://zaimi.tb.ru/zajmy-onlajn \r\nhttp://zaimi.tb.ru/zajmy-moskva \r\nhttp://zaimi.tb.ru/zajm-na-kartu \r\nhttp://zaimi.tb.ru/kredity-2023 \r\nhttp://zaimi.tb.ru/kredit \r\nhttp://zaimi.tb.ru/mikrozajm-na-kartu \r\nhttp://zaimi.tb.ru/vse-mfo-rossii \r\nhttp://zaimi.tb.ru/dengi-v-dolg-na-kartu-srochno \r\nhttp://zaimi.tb.ru/web-zajm \r\nhttp://zaimi.tb.ru/zajmy-rf \r\nhttp://zaimi.tb.ru/vzyat-zajm \r\nhttp://zaim-na-karty.nethouse.ru/ \r\nhttp://zaim-na-karty.nethouse.ru/zajmy \r\nhttp://zaim-na-karty.nethouse.ru/vse-zajmy \r\nhttp://www.avito.ru/user/e83bbe97f4f237635620697408dbb9a8/profile \r\nhttp://www.avito.ru/sankt-peterburg/remont_i_stroitelstvo/pesok_scheben_grunt_torf_s_dostavkoy_2375033632 \r\nhttp://futbolkas.vsemaykishop.ru/ \r\nhttp://vk.com/futbolkasi \r\nhttp://www.9111.ru/questions/7777777772633672/ \r\nhttp://www.youtube.com/@stroitelstvo-doma \r\nhttp://www.avito.ru/user/3681c6b6cea34d81ba34d12c05bae4ca/profile \r\nhttp://www.youtube.com/watch?v=4hQQWOljucA \r\nhttp://www.youtube.com/watch?v=xtFJ0r6sW8g \r\nhttp://www.youtube.com/watch?v=x_X8tdS7T-4 \r\nhttp://www.youtube.com/watch?v=ASS17ULQfYE \r\nhttp://www.youtube.com/watch?v=fcl-4bOX7Ws \r\nhttp://www.avito.ru/user/3681c6b6cea34d81ba34d12c05bae4ca/profile \r\nhttp://www.avito.ru/sankt-peterburg_lomonosov/predlozheniya_uslug/karkasnyy_dom_3034758742 \r\nhttp://www.avito.ru/sankt-peterburg/predlozheniya_uslug/modulnyy_dom_modulnye_doma_pod_klyuch_3034775004 \r\nhttp://www.avito.ru/gatchina/remont_i_stroitelstvo/karkasnyy_dom_pod_klyuch_3035487642 \r\nhttp://www.avito.ru/vsevolozhsk/remont_i_stroitelstvo/modulnyy_doma_8h8_3035631920 \r\nhttp://www.avito.ru/tosno/remont_i_stroitelstvo/modulnye_karkasnye_doma_s_otdelkoy_i_santehnikoy_3034811977 \r\nhttp://www.avito.ru/priozersk/remont_i_stroitelstvo/karkasnyy_modulnyy_dom_3034966288 \r\nhttp://www.avito.ru/leningradskaya_oblast_kommunar/remont_i_stroitelstvo/karkasnye_modulnye_doma_pod_klyuch_3035501500 \r\nhttp://www.avito.ru/sankt-peterburg/predlozheniya_uslug/karkasnye_doma_karkasnyy_dom_pod_klyuch_3003639987 \r\nhttp://www.9111.ru/questions/7777777772668782/ \r\nhttp://vk.link/stroitelstvo_domov_2023 \r\nhttp://www.9111.ru/questions/7777777772673120/ \r\nhttp://www.pinterest.com/stroitelstvospb/ \r\nhttp://ssylki.info/site/stek-stroy.online \r\nhttp://ssylki.info/site/moduldom.spb.ru \r\nhttp://ssylki.info/site/stek-stroy.ru \r\nhttp://stek-stroy.online/ \r\nhttp://stek-stroy.online/proekty \r\nhttp://stek-stroy.online/karkasnye-doma \r\nhttp://moduldom.spb.ru/karkasnye-doma-pod-klyuch \r\nhttp://moduldom.spb.ru/stroitelstvo-domov \r\nhttp://moduldom.spb.ru/karkasnye-doma \r\nhttp://moduldom.spb.ru/modulnye-doma \r\nhttp://moduldom.spb.ru/modulnyj-dom \r\nhttp://moduldom.spb.ru/dom-pod-klyuch \r\nhttp://moduldom.spb.ru/doma-iz-brusa \r\nhttp://moduldom.spb.ru/ \r\nhttp://website.informer.com/stek-stroy.online \r\nhttp://website.informer.com/stek-stroy.ru \r\nhttp://website.informer.com/moduldom.spb.ru \r\nhttp://moduldom.spb.ru/karkasnyj-dom \r\nhttp://moduldom.spb.ru/karkasnyj-dom-cena \r\nhttp://moduldom.spb.ru/proekty-domov \r\nhttp://moduldom-spb.ru/ \r\nhttp://www.9111.ru/questions/7777777772725021/ \r\nhttp://www.9111.ru/questions/7777777772747682/ \r\nhttp://burgeri.tb.ru/burger \r\nhttp://www.youtube.com/watch?v=Zy0tAy2b6TE&list=UULF0zb6p6mAak674zKNCFo5rQ \r\nhttp://stek-stroy.ru/ \r\n \r\nÐ’ÑÐµÐ¼ ÑƒÐ´Ð°Ñ‡Ð¸! Ð¡Ð¿Ð°ÑÐ¸Ð±Ð¾!', 1, '2023-07-17 03:15:30', '0000-00-00 00:00:00'),
(1663, 'Georgesen', 'lialina_marina_1989_13_9@list.ru', 'Oman', '81295693367', 'Ð Ñ‹Ð½Ð¾Ðº ÐºÐ»Ð¸Ð½Ð¸Ð½Ð³Ð¾Ð²Ñ‹Ñ… ÑƒÑÐ»ÑƒÐ³ Ð² ÑÑ‚Ñ€Ð°Ð½Ðµ, Ð½ÐµÐ²Ð·Ð¸Ñ€Ð°Ñ Ð½Ð° Ð¼Ð¾Ð»Ð¾Ð´Ð¾ÑÑ‚ÑŒ, Ð¾Ð±ÑˆÐ¸Ñ€ÐµÐ½ https://getclean.guru/uborka-kvartiry-posle-remonta\r\n  Ð‘Ð¾Ð»ÑŒÑˆÐ°Ñ Ñ‡Ð°ÑÑ‚ÑŒ ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ð¹ Ñ„ÑƒÐ½ÐºÑ†Ð¸Ð¾Ð½Ð¸Ñ€ÑƒÐµÑ‚ Ð² Ð´Ð²ÑƒÑ… ÐºÑ€ÑƒÐ¿Ð½ÐµÐ¹ÑˆÐ¸Ñ… Ð³Ð¾Ñ€Ð¾Ð´Ð°Ñ… Ð Ð¾ÑÑÐ¸Ð¸: ÐœÐ¾ÑÐºÐ²Ðµ Ð¸ Ð¡Ð°Ð½ÐºÑ‚-ÐŸÐµÑ‚ÐµÑ€Ð±ÑƒÑ€Ð³Ðµ https://getclean.guru/portfolio/uborka-i-himchistka-teatralnogo-zala\r\n  Ð—Ð°Ñ€Ð°Ð±Ð¾Ñ‚Ð¾Ðº Ð² ÑÑ‚Ð¾Ð¹ Ð¾Ð±Ð»Ð°ÑÑ‚Ð¸ Ð½ÐµÐ¿Ð»Ð¾Ñ…Ð¾Ð¹, Ñ‚ https://getclean.guru/uborka-dachi\r\n Ðº https://getclean.guru/himchistka-kozhanogo-divana\r\n  ÐºÐ¾Ð»Ð¸Ñ‡ÐµÑÑ‚Ð²Ð¾ Ð·Ð°ÐºÐ°Ð·Ñ‡Ð¸ÐºÐ¾Ð² Ð¿Ð¾ÑÑ‚Ð¾ÑÐ½Ð½Ð¾ Ñ€Ð°ÑÑ‚ÐµÑ‚ https://getclean.guru/myte-polov\r\n  Ð§Ñ‚Ð¾Ð±Ñ‹ Ð½Ðµ Ð¾ÑˆÐ¸Ð±Ð¸Ñ‚ÑŒÑÑ Ñ Ð²Ñ‹Ð±Ð¾Ñ€Ð¾Ð¼, Ð¸Ñ‰Ð¸Ñ‚Ðµ ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸ÑŽ, ÑÐ¿Ð¾ÑÐ¾Ð±Ð½ÑƒÑŽ Ð³Ð°Ñ€Ð°Ð½Ñ‚Ð¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ Ñ€ÐµÐ·ÑƒÐ»ÑŒÑ‚Ð°Ñ‚ https://getclean.guru/uborka-ofisa-qbf-posle-remonta\r\n  ÐžÐ·Ð½Ð°ÐºÐ¾Ð¼ÑŒÑ‚ÐµÑÑŒ Ñ Ð¾Ñ‚Ð·Ñ‹Ð²Ð°Ð¼Ð¸ Ð½Ð°ÑÐµÐ»ÐµÐ½Ð¸Ñ, Ð¿Ñ€Ð¾Ñ‡Ð¸Ñ‚Ð°Ð¹Ñ‚Ðµ Ð¼Ð¸Ð½Ð¸Ð¼ÑƒÐ¼ 10-15 Ð¼Ð½ÐµÐ½Ð¸Ð¹ https://getclean.guru/clients-opinions\r\n  ÐÐ°Ð¹Ñ‚Ð¸ Ð¸Ñ… Ð¼Ð¾Ð¶Ð½Ð¾ Ð½Ð° Ð¾Ñ„Ð¸Ñ†Ð¸Ð°Ð»ÑŒÐ½Ð¾Ð¼ ÑÐ°Ð¹Ñ‚Ðµ Ñ„Ð¸Ñ€Ð¼Ñ‹ Ð¸Ð»Ð¸ Ð½Ð° Ð³Ð¾Ñ€Ð¾Ð´ÑÐºÐ¸Ñ… Ñ„Ð¾Ñ€ÑƒÐ¼Ð°Ñ… https://getclean.guru/uborka-chastnogo-doma\r\n  ÐŸÑ€Ð°Ð²Ð´Ð°, Ð´Ð¾Ð²ÐµÑ€ÑÑ‚ÑŒ Ð¸Ð¼ Ð½Ð° 100% Ð½Ðµ ÑÑ‚Ð¾Ð¸Ñ‚, Ñ‚ https://getclean.guru/kompleksnaya-uborka-kvartiry\r\n Ðº https://getclean.guru/generalnaya-uborka-doma\r\n  Ð½Ðµ Ð²ÑÐµ Ð¾Ñ‚Ð·Ñ‹Ð²Ñ‹ Ð½Ð°Ð¿Ð¸ÑÐ°Ð½Ñ‹ Ð¾Ð±ÑŠÐµÐºÑ‚Ð¸Ð²Ð½Ð¾ Ñ€ÐµÐ°Ð»ÑŒÐ½Ñ‹Ð¼Ð¸ ÐºÐ»Ð¸ÐµÐ½Ñ‚Ð°Ð¼Ð¸ https://getclean.guru/uborka-kottedzhej-posle-remonta\r\n \r\nÐ·Ð°ÐºÑƒÐ¿ÐºÐ° Ð¾Ð±Ð¾Ñ€ÑƒÐ´Ð¾Ð²Ð°Ð½Ð¸Ñ Ð¸ Ñ€Ð°ÑÑ…Ð¾Ð´Ð½Ñ‹Ñ… Ð¼Ð°Ñ‚ÐµÑ€Ð¸Ð°Ð»Ð¾Ð²; \r\nÐŸÑ€ÐµÐ¶Ð´Ðµ Ñ‡ÐµÐ¼ Ð¿Ð»Ð°Ð½Ð¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ Ð¾Ñ‚ÐºÑ€Ñ‹Ñ‚Ð¸Ðµ ÐºÐ»Ð¸Ð½Ð¸Ð½Ð³Ð¾Ð²Ð¾Ð¹ ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ð¸, Ð½ÑƒÐ¶Ð½Ð¾ Ð¾Ñ†ÐµÐ½Ð¸Ñ‚ÑŒ ÑƒÑ€Ð¾Ð²ÐµÐ½ÑŒ ÐºÐ¾Ð½ÐºÑƒÑ€ÐµÐ½Ñ†Ð¸Ð¸ Ð² Ð²Ð°ÑˆÐµÐ¼ Ð³Ð¾Ñ€Ð¾Ð´Ðµ https://getclean.guru/promyshlennyj-klining\r\n  Ð”Ð»Ñ ÑÑ‚Ð¾Ð³Ð¾ Ð¿Ñ€Ð¾Ð²ÐµÑ€ÑŒÑ‚Ðµ ÐºÐ¾Ð»Ð¸Ñ‡ÐµÑÑ‚Ð²Ð¾ ÐºÐ»Ð¸Ð½Ð¸Ð½Ð³Ð¾Ð²Ñ‹Ñ… ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ð¹, Ñ€Ð°Ð±Ð¾Ñ‚Ð°ÑŽÑ‰Ð¸Ñ… Ð² Ð²Ð°ÑˆÐµÐ¼ Ñ€ÐµÐ³Ð¸Ð¾Ð½Ðµ, Ð¸ Ð¾Ñ†ÐµÐ½Ð¸Ñ‚Ðµ ÑÐ¿ÐµÐºÑ‚Ñ€ Ð¿Ñ€ÐµÐ´Ð»Ð°Ð³Ð°ÐµÐ¼Ñ‹Ñ… Ð¸Ð¼Ð¸ ÑƒÑÐ»ÑƒÐ³ https://getclean.guru/blog\r\n  Ð§Ñ‚Ð¾Ð±Ñ‹ Ñ€Ð°ÑÑÑ‡Ð¸Ñ‚Ð°Ñ‚ÑŒ Ð¿ÐµÑ€ÑÐ¿ÐµÐºÑ‚Ð¸Ð²Ñ‹ ÐºÐ»Ð¸Ð½Ð¸Ð½Ð³Ð¾Ð²Ñ‹Ñ… ÑƒÑÐ»ÑƒÐ³ Ð² ÑÐ²Ð¾ÐµÐ¼ Ð³Ð¾Ñ€Ð¾Ð´Ðµ, Ð²Ñ‹ Ð´Ð¾Ð»Ð¶Ð½Ñ‹ Ñ‚Ð°ÐºÐ¶Ðµ ÑƒÐ·Ð½Ð°Ñ‚ÑŒ Ñ‡Ð¸ÑÐ»Ð¾ Ð±Ð¸Ð·Ð½ÐµÑ-Ñ†ÐµÐ½Ñ‚Ñ€Ð¾Ð², Ñ‚Ð¾Ñ€Ð³Ð¾Ð²Ð¾-Ñ€Ð°Ð·Ð²Ð»ÐµÐºÐ°Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ñ… ÐºÐ¾Ð¼Ð¿Ð»ÐµÐºÑÐ¾Ð² Ð¸ Ð¾Ñ„Ð¸ÑÐ¾Ð² â€“ ÑÑ‚Ð¾ Ð¸ Ð±ÑƒÐ´ÐµÑ‚ Ð¾Ñ€Ð¸ÐµÐ½Ñ‚Ð¸Ñ€Ð¾Ð²Ð¾Ñ‡Ð½Ñ‹Ð¹ ÐºÑ€ÑƒÐ³ Ð²Ð°ÑˆÐ¸Ñ… ÐºÐ¾Ð¼Ð¼ÐµÑ€Ñ‡ÐµÑÐºÐ¸Ñ… ÐºÐ»Ð¸ÐµÐ½Ñ‚Ð¾Ð² https://getclean.guru/uborka-chastnogo-doma\r\n  ÐŸÑ€Ð¸Ð¼ÐµÑ€Ð½ÑƒÑŽ ÐºÐ°Ñ€Ñ‚Ð¸Ð½Ñƒ Ð¼Ð¾Ð¶Ð½Ð¾ Ð¿Ð¾Ð»ÑƒÑ‡Ð¸Ñ‚ÑŒ Ñ Ð¿Ð¾Ð¼Ð¾Ñ‰ÑŒÑŽ Ð¾Ð½Ð»Ð°Ð¹Ð½-ÑÐµÑ€Ð²Ð¸ÑÐ¾Ð², Ð¾Ñ‚Ð¾Ð±Ñ€Ð°Ð¶Ð°ÑŽÑ‰Ð¸Ñ… ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ð¸ Ð½Ð° ÑÐ»ÐµÐºÑ‚Ñ€Ð¾Ð½Ð½Ñ‹Ñ… ÐºÐ°Ñ€Ñ‚Ð°Ñ… https://getclean.guru/obespylivanie-posle-remonta\r\n  Ð—Ð½Ð°Ñ Ð¶Ðµ Ñ‡Ð¸ÑÐ»ÐµÐ½Ð½Ð¾ÑÑ‚ÑŒ Ð½Ð°ÑÐµÐ»ÐµÐ½Ð¸Ñ Ð³Ð¾Ñ€Ð¾Ð´Ð° Ð¸ ÑƒÑ‡Ð¸Ñ‚Ñ‹Ð²Ð°Ñ Ñ‚Ð¾Ñ‚ Ñ„Ð°ÐºÑ‚, Ñ‡Ñ‚Ð¾ Ð¾ÐºÐ¾Ð»Ð¾ 8% Ð´Ð¾Ð¼Ð¾Ñ…Ð¾Ð·ÑÐ¹ÑÑ‚Ð² Ð¿Ð¾Ð»ÑŒÐ·ÑƒÑŽÑ‚ÑÑ ÐºÐ»Ð¸Ð½Ð¸Ð½Ð³Ð¾Ð²Ñ‹Ð¼Ð¸ ÑƒÑÐ»ÑƒÐ³Ð°Ð¼Ð¸, Ð²Ñ‹ Ð¼Ð¾Ð¶ÐµÑ‚Ðµ Ð¾Ñ†ÐµÐ½Ð¸Ñ‚ÑŒ Ð¿ÐµÑ€ÑÐ¿ÐµÐºÑ‚Ð¸Ð²Ñ‹ Ñ€Ð°Ð±Ð¾Ñ‚Ñ‹ Ñ Ñ‡Ð°ÑÑ‚Ð½Ñ‹Ð¼Ð¸ ÐºÐ»Ð¸ÐµÐ½Ñ‚Ð°Ð¼Ð¸ https://getclean.guru/portfolio/mytyo-ostekleniya-ohta-moll\r\n \r\nÐ‘Ñ‹ÑÑ‚Ñ€Ñ‹Ð¹ Ñ€Ð°ÑÑ‡ÐµÑ‚ ÑÑ‚Ð¾Ð¸Ð¼Ð¾ÑÑ‚Ð¸ ÑƒÐ±Ð¾Ñ€ÐºÐ¸ https://getclean.guru/chistka-linoleuma\r\n \r\nÐ’ Ð’Ð»Ð°Ð´ÐµÐ»ÑŒÑ†Ñ‹ ÐºÐ»Ð¸Ð½Ð¸Ð½Ð³Ð¾Ð²Ð¾Ð¹ ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ð¸  ÐÐ½Ð´Ñ€ÐµÐ¹ Ð¸ ÐœÐ°ÐºÑÐ¸Ð¼ Ð”Ð»Ñ Ð¿Ñ€Ð¸Ð²Ð»ÐµÑ‡ÐµÐ½Ð¸Ñ ÐºÐ»Ð¸ÐµÐ½Ñ‚Ð¾Ð² Ð¼Ñ‹ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·ÑƒÐµÐ¼ Ñ€Ð°Ð·Ð»Ð¸Ñ‡Ð½Ñ‹Ðµ Ñ€ÐµÐºÐ»Ð°Ð¼Ð½Ñ‹Ðµ ÐºÐ°Ð½Ð°Ð»Ñ‹ https://getclean.guru/himchistka-kozhanogo-divana\r\n  Ð’ Ð¾ÑÐ½Ð¾Ð²Ð½Ð¾Ð¼ ÑÑ‚Ð¾ ÑÐ¾Ñ†Ð¸Ð°Ð»ÑŒÐ½Ñ‹Ðµ ÑÐµÑ‚Ð¸, ÐºÐ¾Ð½Ñ‚ÐµÐºÑÑ‚Ð½Ð°Ñ Ð¸ Ð½Ð°Ñ€ÑƒÐ¶Ð½Ð°Ñ Ñ€ÐµÐºÐ»Ð°Ð¼Ð° https://getclean.guru/uborka-kottedzhej-posle-remonta\r\n  ÐÐ° Ð´Ð°Ð½Ð½Ñ‹Ð¹ Ð¼Ð¾Ð¼ÐµÐ½Ñ‚ ÑÐ°Ð¼Ñ‹Ð¼ ÑÑ„Ñ„ÐµÐºÑ‚Ð¸Ð²Ð½Ñ‹Ð¼Ð¸ ÐºÐ°Ð½Ð°Ð»Ð°Ð¼Ð¸ ÑÐ²Ð»ÑÑŽÑ‚ÑÑ ÑÐ¾Ñ†Ð¸Ð°Ð»ÑŒÐ½Ñ‹Ðµ ÑÐµÑ‚Ð¸ Ð¸ â€œÑÐ°Ñ€Ð°Ñ„Ð°Ð½Ð½Ð¾Ðµ Ñ€Ð°Ð´Ð¸Ð¾â€ https://getclean.guru/myte-okon-v-kvartire\r\n  Ð•Ð¶ÐµÐ¼ÐµÑÑÑ‡Ð½Ñ‹Ðµ Ñ€Ð°ÑÑ…Ð¾Ð´Ñ‹ Ð½Ð° Ñ€ÐµÐºÐ»Ð°Ð¼Ñƒ ÑÐ¾ÑÑ‚Ð°Ð²Ð»ÑÑŽÑ‚ Ð¾ÐºÐ¾Ð»Ð¾ 60 â€“ 80 Ñ‚Ñ‹Ñ https://getclean.guru/myte-polov\r\n  Ñ€ÑƒÐ± https://getclean.guru/himchistka-kozhanoj-mebeli\r\n \r\nÐ‘Ñ‹Ð»Ð° ÑÐ¾Ð·Ð´Ð°Ð½Ð° ÐÑÑÐ¾Ñ†Ð¸Ð°Ñ†Ð¸Ñ ÐºÐ»Ð¸Ð½Ð¸Ð½Ð³Ð¾Ð²Ñ‹Ñ… Ð¸ Ñ„Ð°ÑÐ¸Ð»Ð¸Ñ‚Ð¸ Ð¾Ð¿ÐµÑ€Ð°Ñ‚Ð¾Ñ€Ð¾Ð², Ð² Ð·Ð°Ð´Ð°Ñ‡Ð¸ ÐºÐ¾Ñ‚Ð¾Ñ€Ð¾Ð¹ Ð²Ñ…Ð¾Ð´Ð¸Ñ‚ Ð½Ðµ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ ÑƒÐ±Ð¾Ñ€ÐºÐ° Ð¿Ð¾Ð¼ÐµÑ‰ÐµÐ½Ð¸Ð¹, Ð½Ð¾ Ð¸ ÐºÐ¾Ð¼Ð¿Ð»ÐµÐºÑ Ð´Ñ€ÑƒÐ³Ð¸Ñ… ÑƒÑÐ»ÑƒÐ³ Ð¿Ð¾ Ð¾Ð±ÑÐ»ÑƒÐ¶Ð¸Ð²Ð°Ð½Ð¸ÑŽ Ð¾Ð±ÑŠÐµÐºÑ‚Ð¾Ð² Ð½ÐµÐ´Ð²Ð¸Ð¶Ð¸Ð¼Ð¾ÑÑ‚Ð¸ (Ñ€Ð°Ð±Ð¾Ñ‚Ð° Ð»Ð¸Ñ„Ñ‚Ð¾Ð², Ð±ÐµÑÐ¿ÐµÑ€ÐµÐ±Ð¾Ð¹Ð½Ð°Ñ Ð¿Ð¾Ð´Ð°Ñ‡Ð° Ð²Ð¾Ð´Ñ‹, Ñ‚ÐµÐ¿Ð»Ð°, ÑÐ²ÐµÑ‚Ð°, Ð²Ñ‹Ð²Ð¾Ð· Ð¼ÑƒÑÐ¾Ñ€Ð° Ð¸ Ð´Ñ€ https://getclean.guru/chistka-polov\r\n ) https://getclean.guru/chistka-polov\r\n  Ð¡ÐµÐ¹Ñ‡Ð°Ñ Ð² ÐÐšÐ¤Ðž Ð²Ñ…Ð¾Ð´Ð¸Ñ‚ Ð¿Ð¾Ñ‡Ñ‚Ð¸ 300 Ð¾Ñ€Ð³Ð°Ð½Ð¸Ð·Ð°Ñ†Ð¸Ð¹, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ðµ ÑÑ‚Ñ€Ð°Ñ…ÑƒÑŽÑ‚ Ð¾Ñ‚Ð²ÐµÑ‚ÑÑ‚Ð²ÐµÐ½Ð½Ð¾ÑÑ‚ÑŒ Ð´Ñ€ÑƒÐ³ Ð´Ñ€ÑƒÐ³Ð° https://getclean.guru/generalnaya-uborka-kottedzhej\r\n \r\n', 1, '2023-07-17 03:34:01', '0000-00-00 00:00:00'),
(1664, 'RandyBET', 'keithy2ar.t.e.r.b.e.r.r.y.r.l.@gmail.com', 'Yemen', '88194266786', 'pharmacy shopping online  [url= https://www.nvoad.org/forums/users/buymethadone/ ] https://www.nvoad.org/forums/users/buymethadone/ [/url]  sterling drug testing ', 1, '2023-07-17 04:16:37', '0000-00-00 00:00:00'),
(1665, 'Nathansaupt', 'valentinellington@wwjmp.com', 'United Arab Emirates', '81948468159', '<a href=https://accounts.binance.com/en/register?ref=25293193>how to colonize as russia eu4</a>', 1, '2023-07-17 05:50:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `content_format`
--

CREATE TABLE `content_format` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content_format`
--

INSERT INTO `content_format` (`id`, `title`, `value`) VALUES
(1, 'Full Size Image', 'fullSizeImg'),
(2, 'Full Size Text', 'fullSizeText'),
(3, 'Half Image/Half Text', 'halfImgHalfText'),
(4, 'Both Side Image', 'bothSideImg'),
(5, 'Both Side Text', 'bothSideText'),
(6, 'Full Video', 'fullVideo'),
(7, 'Both Side Video', 'bothSideVideo'),
(8, 'Half Video/Half Text', 'halfVideoHalfText'),
(9, 'Half Text/Half Image', 'halfText/halfImage'),
(10, 'Half Text/Half Video', 'HalfTextHalfVideo');

-- --------------------------------------------------------

--
-- Table structure for table `download_center`
--

CREATE TABLE `download_center` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL COMMENT '1:Brochure2: Manual 3:Video 4:Software',
  `video_title` varchar(255) NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `apk_software_name` varchar(255) NOT NULL,
  `apk_software` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `download_center`
--

INSERT INTO `download_center` (`id`, `name`, `file_name`, `file_type`, `video_title`, `video_link`, `apk_software_name`, `apk_software`, `created_at`, `updated_at`) VALUES
(26, 'GH-55 GIS Handheld Brochure', 'GH-55-gis-handheld (1).pdf', '1', '', '', '', '', '2022-06-28 15:05:29', '2023-05-17 10:49:12'),
(34, 'UAV Solution Brochure', 'UAV_solutions_DEC_22.pdf', '1', '', '', '', '', '2022-08-16 11:44:29', '2023-05-17 10:49:00'),
(36, 'Navik 200 GNSS Receiver Brochure', 'navik 200 brochure june 2023.pdf', '1', '', '', '', '', '2022-08-18 12:15:32', '2023-06-16 03:16:07'),
(37, 'CORS Brochure', 'Cors_brochure_DEC_22.pdf', '1', '', '', '', '', '2022-08-18 01:14:44', '2023-05-17 10:48:48'),
(39, 'Navik 200 Datasheet', 'Navik 200 Datasheet mar 23.pdf', '1', '', '', '', '', '2022-08-18 03:03:15', '2023-03-03 11:46:06'),
(40, 'Navik 200 GNSS Receiver User Manual', 'FINAL NAVIK_200_User_Manual v1.5 A5.pdf', '2', '', '', '', '', '2022-09-15 05:00:40', '2023-01-02 06:03:43'),
(41, 'Navik 200 Quick Guide', 'NAVIK 200 quick guide A6 v 1.3.pdf', '2', '', '', '', '', '2022-09-15 05:00:59', '2023-01-02 06:03:59'),
(43, '', '', '3', 'First Made in India GNSS Receiver : Apogee GNSS', 'https://www.youtube.com/embed/sOgDL6BKzek', '', '', '2022-10-12 05:30:51', '2023-05-16 04:51:40'),
(44, 'Navik 50 Brochure', 'navik-50 brochure feb 23.pdf', '1', '', '', '', '', '2022-10-29 10:13:24', '2023-05-17 10:48:35'),
(46, 'AR - X1 UHF DATALINK Datasheet', 'Radio_GIS_Leaflet_DEC_22.pdf', '1', '', '', '', '', '2022-12-14 05:31:21', '2023-01-02 05:51:04'),
(47, '', '', '4', '', '', 'GeoMasterVersion_10.5.1', 'GeoMasterVersion_10.5.1.apk', '2023-01-04 03:30:32', '2023-01-04 03:31:18'),
(48, '', '', '4', '', '', 'GeoMasterV_10.5.3', 'GeoMasterV_10.5.3.apk', '2023-01-20 06:13:01', '2023-01-20 06:13:01'),
(49, '', '', '4', '', '', 'GeoMasterV_10.5.4', 'GeoMasterV_10.5.4.apk', '2023-01-23 01:34:06', '2023-01-23 01:34:06'),
(50, '', '', '3', 'NAVIK 200 GNSS Receiver Internal Structure', 'https://www.youtube.com/embed/zqUBQ8HfbGY', '', '', '2023-02-10 01:04:19', '2023-05-16 04:51:56'),
(51, 'Navik 50 Datasheet', 'Navik 50 Datasheet feb 23.pdf', '1', '', '', '', '', '2023-02-21 10:55:04', '2023-02-24 01:01:42'),
(52, '', '', '3', 'GeoMaster Survey App ', 'https://www.youtube.com/embed/YVxh_m23anA', '', '', '2023-04-11 12:25:18', '2023-05-16 04:51:00'),
(54, 'GeoMaster Survey App User Manual', 'GeoMaster Survey App User Manual.pdf', '2', '', '', '', '', '2023-04-11 04:55:14', '2023-04-11 04:55:14'),
(55, '', '', '3', 'GeoMaster Survey App Function - RTK survey by Radio', 'https://www.youtube.com/embed/giGk6CTjP6M', '', '', '2023-05-16 04:53:36', '2023-05-16 04:53:36'),
(56, '', '', '3', 'Apogee Navik 200 Rover Structure | Geo Master Survey App Basics', 'https://www.youtube.com/embed/5si6OPYiAE8', '', '', '2023-05-16 04:55:14', '2023-05-16 04:55:14'),
(57, '', '', '3', 'How to Export Data in GeoMaster Survey App - Survey Basics', 'https://www.youtube.com/embed/eqQ63T4ooK4', '', '', '2023-05-16 04:56:37', '2023-05-16 04:56:37'),
(58, '', '', '3', 'Importing CSV file in GeoMaster App for all Surveys', 'https://www.youtube.com/embed/3ViFw98m1hU', '', '', '2023-05-16 04:57:45', '2023-05-16 04:57:45'),
(59, '', '', '3', 'Point Stakeout / Layout feature in Apogee GeoMaster Survey App', 'https://www.youtube.com/embed/zZXwlAUL0v4', '', '', '2023-05-16 04:58:33', '2023-05-16 04:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `industries_page_content`
--

CREATE TABLE `industries_page_content` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `alt` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `industries_type_id` int(11) NOT NULL,
  `industries_sub_type_id` int(11) NOT NULL,
  `is_active` int(255) NOT NULL COMMENT '1: active\r\n0 : Not Active',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `industries_page_content`
--

INSERT INTO `industries_page_content` (`id`, `img`, `alt`, `title`, `description`, `industries_type_id`, `industries_sub_type_id`, `is_active`, `created_at`, `updated_at`) VALUES
(13, '220628104839surveying-and-engineering.webp', 'Surveying & Engineerig GNSS Receiver AGPL Apogee GNSS Leading in technology', 'Surveying & Engineering', 'With decades of experience in surveying solutions, Apogee delivers robust and reliable data to the surveyors. Different types of surveys such as land surveys, topographic surveys, Geodetic surveys, etc played a very crucial role in making our solutions popular and authenticated..\r\n\r\nAGPL\'s GNSS Receiver solutions provide both centimeter and millimeter level accuracy to survey professionals. Also, UAV RTK and PPK solutions give precise positioning in the most efficient way and also operate in challenging environments like bridges, trees, es, pipelines, etc. ', 18, 0, 1, '0000-00-00 00:00:00', '2022-12-07 04:05:42'),
(14, '220628111315agriculture.webp', 'Agriculture GNSS RTK solution Apogee GNSS', 'Agriculture', 'Make farming easy with Apogee GNSS which provides solutions that not only increase the crop\'s yield but also help you in water saving.\r\n\r\nAGPL\'s precise, easily operated technology boosts productivity and ROI. It also helps farmers in saving their time by giving them automatic solutions.', 20, 0, 1, '0000-00-00 00:00:00', '2022-10-13 12:41:16'),
(15, '220628113352construction.webp', 'Construction GNSS Receiver technology GNSS RTK system AGPL', 'Construction', 'We here at Apogee are offering an expansive range of solutions to overcome the problems that professionals face on construction sites. In the previous times, a survey of the construction sites was very cumbersome. It was hard to monitor the site as the old methods were costly as well as did not give precise results. But the technologies like Robots, GNSS, UAVs, etc ensure maximum efficiency and lessen product damages.', 21, 0, 1, '0000-00-00 00:00:00', '2022-10-13 12:40:17'),
(16, '220628113438communication.webp', 'UHF datalink Radio Technology Communication Apogee GNSS', 'Communication', 'Apogee GNSS offers radio technology for satellite communication. Radio technology has an important role in communication as it is used to transfer data and information. Apogee provides 865 to 867 MHz License free LoRa frequency bands approved by WPC.\r\n\r\nLoRa stands for Long Range Radio which allows the long-range communication link. LoRa technology has many advantages like better battery life, cost-effectiveness, and its long-range of working.', 22, 0, 1, '0000-00-00 00:00:00', '2022-10-13 12:39:33'),
(17, '220628115321levelling.webp', 'GNSS Land Leveller GNSS Control System AGPL Agriculture', 'Levelling', 'Satellite data is used through GNSS Receivers to identify the exact 3- dimensional position of the bucket, We can set the reference height of the soil cutting blade as per the field requirement. As the equipment will move, it will compare that particular position with the reference height to guide and control the hydraulics movement.', 20, 10, 1, '0000-00-00 00:00:00', '2022-10-13 12:38:38'),
(18, '220628115440gnss-guided-system.webp', 'Agriculture GNSS Land Leveller grading solution AGPL', 'Grading', 'The field requirements conclude the plane that is used as the reference by GNSS Controller. While Working, 3d coordinates of different points of the field are received by the receiver and help in moving the hydraulics to match the desired field requirement.', 20, 10, 1, '0000-00-00 00:00:00', '2022-10-13 12:38:09'),
(19, '220628115526levelling.webp', 'GNSS Land Leveller GNSS Control System AGPL Construction', 'Levelling', 'Satellite data is used through GNSS Receivers to identify the exact 3-dimensional position of the construction equipment, We can set the reference height of equipment as per the site requirement. As the equipment will move, it will compare that particular position with the reference height to guide and control the hydraulics movement.', 21, 12, 1, '0000-00-00 00:00:00', '2022-10-13 12:38:53'),
(20, '220628115602gnss-guided-system.webp', 'Construction GNSS Land Leveller grading solution AGPL', 'Grading', 'The site requirements conclude the plain that is used as the reference by GNSS Controller. While Working, the receiver receives the 3d coordinates of different points of the site and moves the hydraulics to match the desired site requirement.', 21, 12, 1, '0000-00-00 00:00:00', '2022-10-13 12:37:46'),
(21, '220628115758drone-solution.webp', 'UAV (Unmannes Aerial Vehicle) RTK Solution Apogee GNSS', 'UAV RTK Solutions', 'Apogee\'s UAVs RTK solutions help in the agriculture fields in providing the most efficient solutions. There are many benefits of drone systems in agriculture fields. Drone RTK solutions provide real-time data in field surveying. They also provide real-time pictures of agriculture fields.', 20, 11, 1, '0000-00-00 00:00:00', '2022-10-13 12:31:29'),
(22, '220628115836uav-rtk.webp', 'UAV (Unmannes Aerial Vehicle) RTK Solution Apogee GNSS', 'UAV RTK Solutions', 'Previous methods of manual spraying are very time taking and are not of use for all farmers. Drone solutions are used in spraying pesticides, water, etc. This method gives a precise positioning for spraying, reduces time, and increases productivity. This process decreases the need for ground control points, reduces repeatability and increases the accuracy of the operation.', 20, 11, 1, '0000-00-00 00:00:00', '2022-10-13 12:31:19'),
(23, '220628120323uav-rtk-solution.webp', 'Drone Solution AGPL Construction Apogee GNSS', 'Drone Solutions', 'In the construction industry, UAVs such as drones are used widely. they can do surveys quickly as compared to other methods and give accurate results at cheaper prices.\r\n\r\nThey are more beneficial in the areas where it is very hard to reach such as power lines, tall buildings, bridges. They perform the work easily there and can monitor the progress of the site easily.', 21, 13, 1, '0000-00-00 00:00:00', '2022-10-13 12:30:56');

-- --------------------------------------------------------

--
-- Table structure for table `industries_sub_type`
--

CREATE TABLE `industries_sub_type` (
  `id` int(11) NOT NULL,
  `img_icon` varchar(255) NOT NULL,
  `alt` text NOT NULL,
  `page_url` text NOT NULL,
  `industries_sub_type_name` varchar(255) NOT NULL,
  `industries_type_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `header_content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `industries_sub_type`
--

INSERT INTO `industries_sub_type` (`id`, `img_icon`, `alt`, `page_url`, `industries_sub_type_name`, `industries_type_id`, `is_active`, `header_content`, `created_at`, `updated_at`) VALUES
(10, '220628114817gnss-guided-control-system.webp', 'GNSS guided system Agriculture Apogee GNSS AGPL', 'agriculture-gnss-control-system', 'GNSS Guided Control System', 20, 1, '                                      <title>GNSS Guided Control System</title>                                                                                           ', '0000-00-00 00:00:00', '2023-06-01 04:23:17'),
(11, '220628114856uav-rtk.webp', 'UAV (Unmannes Aerial Vehicle) RTK Solution Apogee GNSS', 'uav-rtk-solutions', 'UAV RTK Solutions', 20, 1, '                                       <title>UAV RTK Solutions</title>                                                                                                                    ', '0000-00-00 00:00:00', '2023-06-01 04:23:32'),
(12, '220628114932gnss-guided-control-system.webp', 'Apogee GNSS AGPL GNSS Guided Control system solution', 'construction-gnss-guided-system', 'GNSS Guided Control System', 21, 1, '                                      <title>GNSS Guided Control System</title>                                                                        ', '0000-00-00 00:00:00', '2023-06-01 04:22:55'),
(13, '220628114956drone-solution.webp', 'Drone Solution AGPL APOGEE GNSs', 'drone-solutions', 'Drone Solutions', 21, 1, '                                                                            <title>Drone Solution</title>                                                                                                                                                ', '0000-00-00 00:00:00', '2023-06-07 03:29:32'),
(14, '220809053753220628103540communication.webp', '', '', 'testing 1', 23, 0, '', '2022-08-09 05:37:53', '2022-10-12 11:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `industries_type`
--

CREATE TABLE `industries_type` (
  `id` int(11) NOT NULL,
  `img_icon` varchar(255) NOT NULL,
  `alt` text NOT NULL,
  `page_url` text NOT NULL,
  `industries_type_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `main_menu_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `img_icon_white` varchar(255) NOT NULL,
  `header_content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `industries_type`
--

INSERT INTO `industries_type` (`id`, `img_icon`, `alt`, `page_url`, `industries_type_name`, `description`, `main_menu_id`, `is_active`, `img_icon_white`, `header_content`, `created_at`, `updated_at`) VALUES
(18, '220628103154survying-engineering.webp', 'Surveying and Engineerig GNSS Receiver AGPL', 'surveying-and-engineering', 'Surveying & Engineering', 'With decades of expertise, Apogee GNSS comes up with advanced products and solutions to help surveyors make their projects more profitableâ€¦\r\n', 1, 1, '220917033641surveying-icon.webp', '<link rel=\"canonical\" href=\"https://www.apogeegnss.com/industries.php?indtypeurl=surveying-and-engineering\" >\r\n <title>APOGEE GNSS | Surveying and Engineering Solutions</title>\r\n <meta name = \"og_title\" property = \"og:title\" content = \"APOGEE GNSS | Surveying and Engineering Solutions\">\r\n <meta property = \"og:type\" content = \"website\">\r\n <meta name = \"og_site_name\" property =\"og:site_name\" content = \"apogeegnss.com\">\r\n <meta name = \"Keywords\" content=\"\">\r\n <meta name = \"Description\" content = \"\">\r\n <meta property = \"og:description\" content = \"\">\r\n<meta name = \"og_url\" property = \"og:url\" content = \"https://www.apogeegnss.com/industries.php?indtypeurl=surveying-and-engineering\">\r\n<meta name = \"og_image\" property=\"og:image\" content = \"https://www.apogeegnss.com/assets/images/industries/220628104839surveying-and-engineering.webp\">', '2023-06-01 04:10:04', '0000-00-00 00:00:00'),
(19, '220628103236smart-city.webp', 'AGPL Smart technologies smart cities Apogee GNSS', 'smart-cities', 'Smart Cities', 'Smart Cities are urban area that uses different types of electronic data collection sensors to supply...', 1, 1, '220917033628smart-city.webp', '<title>smart cities</title>', '2023-06-01 03:15:37', '0000-00-00 00:00:00'),
(20, '220628103302agriculture-farming.webp', 'GNSS Guided Solutions drone RTK Solutions Agriculture APOGEE GNSS', 'agriculture-gnss', 'Agriculture', 'Make farming easy with Apogee precision that provides solutions that increase the crop\'s yield and...', 1, 1, '220917033616agriculture.webp', '<link rel=\"canonical\" href=\"https://www.apogeegnss.com/industries.php?indtypeurl=agriculture-gnss\" >\r\n <title>APOGEE GNSS | Agriculture GNSS RTK Solutions</title>\r\n <meta name = \"og_title\" property = \"og:title\" content = \"APOGEE GNSS | Agriculture GNSS RTK Solutions\">\r\n <meta property = \"og:type\" content = \"website\">\r\n <meta name = \"og_site_name\" property =\"og:site_name\" content = \"apogeegnss.com\">\r\n <meta name = \"Keywords\" content=\"\">\r\n <meta name = \"Description\" content = \"\">\r\n <meta property = \"og:description\" content = \"\">\r\n<meta name = \"og_url\" property = \"og:url\" content = \"https://www.apogeegnss.com/industries.php?indtypeurl=agriculture-gnss\">\r\n<meta name = \"og_image\" property=\"og:image\" content = \"https://www.apogeegnss.com/assets/images/industries/220628111315agriculture.webp\">', '2023-06-01 04:12:01', '0000-00-00 00:00:00'),
(21, '220628103403construction.webp', 'GNSS Guided Solution drone Solution Construction Apogee GNSS', 'construction-dgps', 'Construction', 'Grading in civil engineering and landscape architectural construction is ensuring a level base...\r\n', 1, 1, '220917033603construction.webp', '<link rel=\"canonical\" href=\"https://www.apogeegnss.com/industries.php?indtypeurl=Construction-dgps\" >\r\n <title>APOGEE GNSS | Efficient and Precise Construction Technologies</title>\r\n <meta name = \"og_title\" property = \"og:title\" content = \"APOGEE GNSS | Efficient and Precise Construction Technologies\">\r\n <meta property = \"og:type\" content = \"website\">\r\n <meta name = \"og_site_name\" property =\"og:site_name\" content = \"apogeegnss.com\">\r\n <meta name = \"Keywords\" content=\"\">\r\n <meta name = \"Description\" content = \"\">\r\n <meta property = \"og:description\" content = \"\">\r\n<meta name = \"og_url\" property = \"og:url\" content = \"https://www.apogeegnss.com/industries.php?indtypeurl=Construction-dgps\">\r\n<meta name = \"og_image\" property=\"og:image\" content = \"https://www.apogeegnss.com/assets/images/industries/220628113352construction.webp\">', '2023-06-07 03:29:17', '0000-00-00 00:00:00'),
(22, '220628103540communication.webp', 'Apogee GNSS Radio technology communication', 'communication', 'Communication', 'Sensor sockets enabling reliable communication using a context-based grouping mechanism...', 1, 1, '220917033549networking.webp', '<link rel=\"canonical\" href=\"https://www.apogeegnss.com/industries.php?indtypeurl=Communication\" >\r\n <title>APOGEE GNSS | Long - Range Satellite Communication Technology</title>\r\n <meta name = \"og_title\" property = \"og:title\" content = \"APOGEE GNSS | Long - Range Satellite Communication Technology\">\r\n <meta property = \"og:type\" content = \"website\">\r\n <meta name = \"og_site_name\" property =\"og:site_name\" content = \"apogeegnss.com\">\r\n <meta name = \"Keywords\" content=\"\">\r\n <meta name = \"Description\" content = \"\">\r\n <meta property = \"og:description\" content = \"\">\r\n<meta name = \"og_url\" property = \"og:url\" content = \"https://www.apogeegnss.com/industries.php?indtypeurl=Communication\">\r\n<meta name = \"og_image\" property=\"og:image\" content = \"https://www.apogeegnss.com/assets/images/industries/220628113438communication.webp\">', '2023-06-07 03:28:57', '2022-08-09 05:35:43');

-- --------------------------------------------------------

--
-- Table structure for table `main_menu`
--

CREATE TABLE `main_menu` (
  `id` int(11) NOT NULL,
  `main_menu_name` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_menu`
--

INSERT INTO `main_menu` (`id`, `main_menu_name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Industries', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Products', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `page_header_content`
--

CREATE TABLE `page_header_content` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `gtm_head` text NOT NULL,
  `gtm_body` text NOT NULL,
  `header_content` longtext NOT NULL,
  `is_active` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page_header_content`
--

INSERT INTO `page_header_content` (`id`, `page_name`, `page_url`, `gtm_head`, `gtm_body`, `header_content`, `is_active`, `created_at`, `updated_at`) VALUES
(16, 'home_page', 'index.php', '                       ', '                   ', '   <meta name=\"google-site-verification\" content=\"eIaTogBPBn3yQJ-IKdf7Ve84xxKQxZPRKhp2c1b2BTc\" />\r\n\r\n<link rel=\"canonical\" href=\"https://www.apogeegnss.com/\" >\r\n <title>APOGEE GNSS: Leading GNSS Receiver Manufacturer in India</title>\r\n <meta name = \"og_title\" property = \"og:title\" content = \"APOGEE GNSS: Leading GNSS Receiver Manufacturer in India\">\r\n <meta property = \"og:type\" content = \"website\">\r\n <meta name = \"og_site_name\" property =\"og:site_name\" content = \"apogeegnss.com\">\r\n <meta name = \"Keywords\" content=\"RTK GNSS receiver, GPS, AGPL GNSS receiver, apogee GNSS, best RTK GNSS receiver, AGPL GNSS RTK system, satellite navigation,  gnss surveying, GNSS technology, how RTK gnss works, low-cost RTK GNSS receiver, RTK GNSS receiver price, GNSS receiver manufacturers in India, gnss receiver accuracy, gnss receiver vs GPS, GPS GNSS receiver, CORS, surveying equipment, Dgps\">\r\n <meta name = \"Description\" content = \"Apogee GNSS PVT LTD is the leading manufacturer of GNSS RTK Systems in India. Apogee GNSS introduces India\'s first ever Made in India GNSS Receiver (Navik Series).\">\r\n <meta property = \"og:description\" content = \"Apogee GNSS PVT LTD is the leading manufacturer of GNSS RTK Systems in India. Apogee GNSS introduces India\'s first ever Made in India GNSS Receiver (Navik Series).\">\r\n<meta name = \"og_url\" property = \"og:url\" content = \"https://www.apogeegnss.com\">\r\n<meta name = \"og_image\" property=\"og:image\" content = \"https://apogeegnss.com/assets/images/slider/gnss-banner.webp\">   ', 'y', '0000-00-00 00:00:00', '2023-07-10 12:42:19'),
(17, 'about_page', 'about.php', '   ', '   ', '   <link rel=\"canonical\" href=\"https://www.apogeegnss.com/about.php\" >\r\n <title>About APOGEE GNSS - Leading with Technology</title>\r\n <meta name = \"og_title\" property = \"og:title\" content = \"About APOGEE GNSS - Leading with Technology\">\r\n <meta property = \"og:type\" content = \"website\">\r\n <meta name = \"og_site_name\" property =\"og:site_name\" content = \"apogeegnss.com\">\r\n <meta name = \"Keywords\" content=\"apogee GNSS, GNSS receiver, Apogee GNSS India, apogee gnss leading with technology in india, GNSS receiver manufacturers, agpl gnss receiver, CORS, GIS Handheld, agriculture, Radio, construction, UAV Solution, VRS, NTRIP, surveying, communication, drone survey\">\r\n <meta name = \"Description\" content = \"APOGEE GNSS offers an extensive range of equipment like GNSS Receivers, CORS, Unmanned systems (UAV Solutions), GIS handheld, Radio, & software like VRS, NTRIP.\">\r\n <meta property = \"og:description\" content = \"APOGEE GNSS offers an extensive range of equipment like GNSS Receivers, CORS, Unmanned systems (UAV Solutions), GIS handheld, Radio, & software like VRS, NTRIP.\">\r\n<meta name = \"og_url\" property = \"og:url\" content = \"https://www.apogeegnss.com/about.php\">\r\n<meta name = \"og_image\" property=\"og:image\" content = \"https://apogeegnss.com/assets/images/slider/gnss-banner.webp\">   ', 'y', '0000-00-00 00:00:00', '2023-05-22 04:28:05'),
(18, 'download_center_page', 'download.php', '    ', '    ', '   <link rel=\"canonical\" href=\"https://www.apogeegnss.com/download.php\" >\r\n <title>APOGEE GNSS: Download all archives brochures, datasheet, Manuals</title>\r\n <meta name =\"og_title\" property =\"og:title\" content =\"APOGEE GNSS: Download all archives brochures, datasheet, Manuals\">\r\n <meta property =\"og:type\" content =\"website\">\r\n <meta name =\"og_site_name\" property =\"og:site_name\" content =\"apogeegnss.com\">\r\n <meta name =\"Keywords\" content=\"apogee download brochure, apogee download user manual, apogee download datasheet, download apogee GeoMaster survey app, download videos apogee gnss\">\r\n <meta name = \"Description\" content = \"Download datasheets, user manuals, brochures with specifications & features, learning & detailing video of all products. Versions of the GeoMaster app are also available\">\r\n <meta property = \"og:description\" content = \"Download datasheets, user manuals, brochures with specifications & features, learning & detailing video of all products. Versions of the GeoMaster app are also available\">\r\n<meta name = \"og_url\" property = \"og:url\" content = \"https://www.apogeegnss.com/download.php\">\r\n<meta name = \"og_image\" property=\"og:image\" content = \"https://apogeegnss.com/assets/images/slider/gnss-banner.webp\">   ', 'y', '0000-00-00 00:00:00', '2023-05-22 04:35:27'),
(24, 'contact_page', 'contact.php', '', '', '<link rel=\"canonical\" href=\"https://www.apogeegnss.com/contact.php\" >\r\n<title>Contact APOGEE GNSS | Support, and More</title>\r\n<meta name = \"og_title\" property = \"og:title\" content = \"Contact APOGEE GNSS | Support, and More\">\r\n<meta property = \"og:type\" content = \"website\">\r\n<meta name = \"og_site_name\" property = \"og:site_name\" content = \"apogeegnss.com\">\r\n<meta name = \"Keywords\"  content = \"Contact us APOGEE GNSS, contact apogee, feedback apogee, contact us, apogee complaints, apogee talk to us\">\r\n<meta name = \"Description\" content = \"Contact us at www.apogeegnss.com for more details. You can also email at sales@apogeegnss.com or contact at 7624002254, we will reply to you shortly.\">\r\n<meta property = \"og:description\" content = \"Contact us at www.apogeegnss.com for more details. You can also email at sales@apogeegnss.com or contact at 7624002254, we will reply to you shortly.\">\r\n<meta name = \"og_url\" property = \"og:url\" content = \"https://www.apogeegnss.com/contact.php\">\r\n<meta name = \"og_image\" property=\"og:image\" content = \"https://apogeegnss.com/assets/images/slider/gnss-banner.webp\">', 'y', '0000-00-00 00:00:00', '2023-05-22 04:17:30'),
(30, 'become_a_dealer', 'become-a-dealer.php', '', '', ' <link rel=\"canonical\" href=\"https://www.apogeegnss.com/become-a-dealer.php\" >\r\n <title>Become an APOGEE GNSS Dealer</title>\r\n <meta name = \"og_title\" property = \"og:title\" content = \"Become an APOGEE GNSS Dealer\">\r\n <meta property = \"og:type\" content = \"website\">\r\n <meta name = \"og_site_name\" property =\"og:site_name\" content = \"apogeegnss.com\">\r\n <meta name = \"Keywords\" content=\"Become a dealer, Apogee gnss dealer, GNSS Receiver dealer, how to become a dealer, procedure to become a dealer\">\r\n <meta name = \"Description\" content = \"Official Apogee GNSS Become a Dealer Site\">\r\n <meta property = \"og:description\" content = \"Official Apogee GNSS Become a Dealer Site\">\r\n<meta name = \"og_url\" property = \"og:url\" content = \"https://www.apogeegnss.com/become-a-dealer.php\">\r\n<meta name = \"og_image\" property=\"og:image\" content = \"https://www.apogeegnss.com/assets/images/become-a-dealer.webp\"> ', 'y', '2023-05-22 03:04:36', '2023-05-22 03:07:39'),
(31, 'career_page', 'career.php', '', '', '<link rel=\"canonical\" href=\"https://www.apogeegnss.com/career.php\" >\r\n <title>APOGEE GNSS| Career</title>', 'y', '2023-05-22 05:09:03', '2023-05-22 05:09:03');

-- --------------------------------------------------------

--
-- Table structure for table `product_page_content`
--

CREATE TABLE `product_page_content` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `alt` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `product_type_id` int(11) NOT NULL,
  `product_sub_type_id` int(11) NOT NULL,
  `is_active` int(255) NOT NULL COMMENT '1: active\r\n0 : Not Active',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_page_content`
--

INSERT INTO `product_page_content` (`id`, `img`, `alt`, `title`, `description`, `product_type_id`, `product_sub_type_id`, `is_active`, `created_at`, `updated_at`) VALUES
(24, '220705050933navik-100-gnss-receiver.webp', '', 'An Advanced and Reliable Surveying Solution', 'The Navik 100 receiver has a compact design, rugged form, and is easy to use with its small volume (850 gm). It is powered by a high capacity (6800 mAh) Li-ion single battery to ensure continuous operation. Build-in 4G modem makes sure Navik-100 flawlessly works with every type of cors.', 23, 16, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '220705051157navik-100-gnss-receiver-1.webp', '', 'Greater efficiency with enhanced UHF', 'Up to 4 km range with 1W power consumption, Tx/Rx with a full frequency range from 866 MHz.', 23, 16, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '220705051303navik-100-3-gnss-receiver.webp', '', 'High level accuracy', 'Navik 100 receiver brings both centimeter and millimeter level accuracy no matter where you are.', 23, 16, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, '220705051349navik-100-2-gnss-receiver.webp', '', 'Extensive range of Applications', 'Navik 100 Receiver can be paired with ranges of GIS handhelds and data collectors to provide easy to use solution for surveying, mapping and navigation, etc.', 23, 16, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, '220714110823navik200-gnss-receiver.webp', '', 'Advanced RTK GNSS with millimeter accuracy', 'With its innovative and rugged design\r\n All constellation tracking GNSS receiver\r\n Internal 4G Connectivity\r\n Comes up with an android application', 23, 17, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, '220714111159gnss-receiver-navik200.webp', '', 'Easy to carry', 'Less than 1-kg weight makes the receiver one of the most portable GNSS receivers meeting your RTK survey demands.', 23, 17, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, '220714111232gnss-receiver-navik200-1.webp', '', 'High level accuracy', 'Navik 200 GNSS RECEIVER brings both centimeter and millimeter level accuracy no matter where you are and excellent experience with its innovative technology and portable design.', 23, 17, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, '220714111314navik-200-gnss-receiver.webp', '', 'Integrated GNSS Receiver', 'With the combination of a GNSS board, Bluetooth®, and adjustable TX & RX UHF datalink, Navik 200 GNSS Receiver has become one of the most reliable choices of surveyors. Build-in 4G modem makes sure Navik 200 flawlessly works with every type of CORS.', 23, 17, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, '220714112225navik300-gnss-receiver.webp', '', 'Advanced RTK GNSS with millimeter accuracy', ' APME+ Multipath Mitigation Technology\r\n IONO+ : Ionospheric Scintillation Monitoring\r\n Advanced (GPS/ GNSS) Interference Monitoring & Mitigation (AIM+)\r\n Septentrio Technology Inside !', 23, 18, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '220714112330gnss-receiver-navik300-1.webp', '', 'Multi constellations Tracking', '448 tracking channels.\r\n Supports GPS, Beidou, GLONASS, Galileo, Navic, SBAS/GAGAN, QZSS.', 23, 18, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, '220714112355gnss-receiver-navik300.webp', '', 'Greater efficiency with enhanced UHF', 'Upto 5 km range.\r\n Tx/Rx in the frequency range of 866 MHz or 403 - 473 MHz optional.', 23, 18, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, '220714112425navik-300-gnss-receiver.webp', '', 'High level accuracy', 'Navik 300 GNSS RECEIVER brings both centimeter and millimeter level accuracy no matter where you are and excellent experience with its innovative technology and portable design.', 23, 18, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, '220714115016gis.webp', '', 'MOBILE PORTABLE HANDHELD TERMINAL', 'GH-55 mobile IOS terminal is a rugged GIS Handheld device that delivers higher productivity and accuracy in positioning to its users. It can withstand up to a 1.5-m drop and a 2-ton shock pressure test. While it also comes with a suite of integrated features, which are high-integration, high-performance, high-reliability, high- flexibility. Also, it goes with a long-life 6000mAh battery, sunlight-readable, and operating under extremely low temperature.', 24, 19, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, '220714115049gis-data-collector.webp', '', 'Military Appearance', 'Rugged design, full view display, toughened glasses with aero grade titanium alloy material frame.', 24, 19, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, '220714115109gis-mapping.webp', '', 'High Precision', 'GH-55 supports all constellations tracking GNSS with 184 channels positioning chip.', 24, 19, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, '220714115732cors-solution.webp', '', 'CORS (Continuously Operating Reference Station)', 'CORS is a reference base station that is used to collect GNSS satellite data continuously and transmit them via the internet to the central server. Combined with both advanced and traditional GNSS technology CORS provides an entire solution for data processing, management, etc.', 25, 20, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, '220714115803continuously-operating-reference-station.webp', '', 'Excellent Compatibility', 'Tracking 574 channels, HRS-1 has excellent compatibility with all GNSS satellites like Galileo, QZSS, IRNSS, GLONASS, Beidou etc.', 25, 20, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, '220714120531drone-solutions.webp', '', 'UAV (Unmanned Aerial Vehicle)', 'EAGLE UAV RTK (Real-Time Kinematic) and PPK (Post Processing Kinematic) solutions give you highly precise correction data in mapping and surveying, agriculture, etc. By dint of the advanced GNSS technologies, the UAV has become the most wanted vehicle in today’s industries. Apogee offers you various kinds of GNSS solutions for UAV systems for surveying and mapping, agriculture fields.', 26, 21, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, '220714120630uav-rtk-solutions.webp', '', 'Highly Accurate', 'UAVs such as drones give highly accurate solutions through RTK and PPK methods. RTK provides real-time correction data and is primarily used in field surveying. We need a continuous connection for the RTK method. PPK provides correction data after processing its post-survey. This method is used when there are not good signals between base and rover such as hazardous parts of forests, powerlines, etc.', 26, 21, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, '220714120655uav-ppk-solutions.webp', '', 'Applications', 'Construction & Infrastructure, Surveying & Mapping, Mining, Agriculture, Science & Research, Environmental Monitoring, etc.', 26, 21, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, '220714121034radio.webp', '', '865-867 MHz License free frequency bands', 'Apogee GNSS provides AR-X1 866 MHz Indian License-free frequency band UHF external datalink. It is used for GNSS RTK (Real-time kinematic ) solutions. With the help of its metal-constructed body, it provides excellent performance for harsh environments.', 27, 22, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, '220714121102radio-technology.webp', '', 'Performance', 'High performance with its fully metal constructed and rugged body.', 27, 22, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_page_content_new`
--

CREATE TABLE `product_page_content_new` (
  `id` int(11) NOT NULL,
  `content_format_id` int(11) NOT NULL,
  `full_size_img` varchar(255) NOT NULL,
  `full_size_img_alt` text NOT NULL,
  `full_size_img_title` varchar(255) NOT NULL,
  `full_size_img_description` text NOT NULL,
  `full_size_text_title` varchar(255) NOT NULL,
  `full_size_text_description` text NOT NULL,
  `half_img_half_text_img` varchar(255) NOT NULL,
  `half_img_half_text_img_alt` text NOT NULL,
  `half_img_half_text_title` varchar(255) NOT NULL,
  `half_img_half_text_description` text NOT NULL,
  `both_side_left_img` varchar(255) NOT NULL,
  `both_side_left_img_alt` text NOT NULL,
  `both_side_left_img_title` varchar(255) NOT NULL,
  `both_side_left_img_description` text NOT NULL,
  `both_side_right_img` varchar(255) NOT NULL,
  `both_side_right_img_alt` text NOT NULL,
  `both_side_right_img_title` varchar(255) NOT NULL,
  `both_side_right_img_description` text NOT NULL,
  `both_side_left_text_title` varchar(255) NOT NULL,
  `both_side_left_text_description` text NOT NULL,
  `both_side_right_text_title` varchar(255) NOT NULL,
  `both_side_right_text_description` text NOT NULL,
  `full_video` varchar(255) NOT NULL,
  `both_side_left_video` varchar(255) NOT NULL,
  `both_side_right_video` varchar(255) NOT NULL,
  `half_video_half_text_video` varchar(255) NOT NULL,
  `half_video_half_text_title` varchar(255) NOT NULL,
  `half_video_half_text_description` text NOT NULL,
  `half_text_half_img_img` varchar(255) NOT NULL,
  `half_text_half_img_img_alt` text NOT NULL,
  `half_text_half_img_title` varchar(555) NOT NULL,
  `half_text_half_img_description` text NOT NULL,
  `half_text_half_video_video` varchar(255) NOT NULL,
  `half_text_half_video_title` varchar(555) NOT NULL,
  `half_text_half_video_description` text NOT NULL,
  `sequence_no` int(11) DEFAULT NULL,
  `product_type_id` int(11) NOT NULL,
  `product_sub_type_id` int(11) NOT NULL,
  `is_active` int(255) NOT NULL COMMENT '1: active\r\n0 : Not Active',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_page_content_new`
--

INSERT INTO `product_page_content_new` (`id`, `content_format_id`, `full_size_img`, `full_size_img_alt`, `full_size_img_title`, `full_size_img_description`, `full_size_text_title`, `full_size_text_description`, `half_img_half_text_img`, `half_img_half_text_img_alt`, `half_img_half_text_title`, `half_img_half_text_description`, `both_side_left_img`, `both_side_left_img_alt`, `both_side_left_img_title`, `both_side_left_img_description`, `both_side_right_img`, `both_side_right_img_alt`, `both_side_right_img_title`, `both_side_right_img_description`, `both_side_left_text_title`, `both_side_left_text_description`, `both_side_right_text_title`, `both_side_right_text_description`, `full_video`, `both_side_left_video`, `both_side_right_video`, `half_video_half_text_video`, `half_video_half_text_title`, `half_video_half_text_description`, `half_text_half_img_img`, `half_text_half_img_img_alt`, `half_text_half_img_title`, `half_text_half_img_description`, `half_text_half_video_video`, `half_text_half_video_title`, `half_text_half_video_description`, `sequence_no`, `product_type_id`, `product_sub_type_id`, `is_active`, `created_at`, `updated_at`) VALUES
(83, 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '230214032341Radio Apogee.webp', 'AR - X1 UHF Datalink Apogee GNSS  Radio AGPL GNSS RTK', 'AR-X1 UHF DATALINK', '<p><strong>865-867 MHz License Free Frequency Bands</strong></p><p>Apogee GNSS provides AR-X1 866 MHz Indian License-free frequency band UHF external datalink. It is used for GNSS RTK (Real-time kinematic ) solutions. With the help of its metal-constructed body, it provides excellent performance in harsh environments.</p>', '', '', '', 1, 27, 26, 1, '2022-08-18 05:42:48', '2023-02-14 03:23:41'),
(84, 3, '', '', '', '', '', '', '220824112112Apogee Radio.webp', 'AR - X1 UHF Datalink Apogee GNSS  Radio 866 License free frequency band AGPL', 'Performance', '<p>High performance with its fully metal constructed and rugged body.</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, 27, 26, 1, '2022-08-18 05:44:04', '2023-01-03 11:46:08'),
(88, 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '221222110732uav2.webp', 'PPK RTK drone solution Apogee GNSS', 'EAGLE', '<p><strong>UAV (Unmanned Aerial Vehicle)&nbsp;</strong></p><p>Eagle UAV RTK (Real Time Kinematic) and PPK (Post Processing Kinematics) solutions give you highly precise correction data in mapping and surveying, agriculture, etc. By dint of the advanced GNSS technologies, the UAV has become the most wanted vehicle in todayâ€™s industries. Apogee offers you various kinds of GNSS solutions for UAV systems for surveying and mapping, agriculture fields.</p>', '', '', '', 1, 26, 21, 1, '2022-08-24 11:08:44', '2022-12-22 11:07:32'),
(89, 3, '', '', '', '', '', '', '220824111324UAV-SOLUTION.webp', 'AGPL Drone solution GIS mapping Apogee', 'Highly Accurate', '<p>UAVs such as drone gives highly accurate solution through RTK and PPK methods. RTK provides real-time correction data and is primarily used in field surveying. We need a continuous connection for the RTK method. PPK provides correction data after processing it post-survey. This method is used when there are no good signals between base and rover such as&nbsp;hazardous parts of forests, powerlines, etc.</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, 26, 21, 1, '2022-08-24 11:13:24', '2022-12-15 04:13:19'),
(90, 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '221222111036uav1.webp', 'Eagle UAV(unmanned aerial vehicle) solution Apogee GNSS', 'Applications', '<p>Construction &amp; Infrastructure, Surveying &amp; Mapping, Mining, Agriculture, Science &amp; Research, Environmental Monitoring,&nbsp; etc.</p>', '', '', '', 3, 26, 21, 1, '2022-08-24 11:15:10', '2022-12-22 11:10:36'),
(91, 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '221222110446cors1.webp', 'Continuously operating reference station AGPL Apogee GNSS', 'HRS - 1', '<p><strong>CORS (Continuously Operating Reference System)</strong></p><p>CORS is a reference base station used to collect GNSS satellite data continuously and transmit it via the internet to a central server. Combined with advanced and traditional GNSS technology CORS provides an entire solution for data processing, management, etc.</p><p><br>&nbsp;</p>', '', '', '', 1, 25, 20, 1, '2022-08-24 01:34:44', '2022-12-22 11:04:46'),
(92, 3, '', '', '', '', '', '', '220824013657CORS solution.webp', 'Continuously Operating Reference Station Apogee GNSS AGPL', 'Excellent Compatibility', '<p>Tracking 574 channels, HRS-1 has excellent compatibility with all GNSS satellites like Galileo, QZSS, IRNSS, GLONASS, Beidou, etc.</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, 25, 20, 1, '2022-08-24 01:36:57', '2022-12-15 04:10:45'),
(93, 1, '220824013729vrs.webp', 'Virtual Reference Station CORS Apogee GNSS AGPL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3, 25, 20, 1, '2022-08-24 01:37:29', '2022-12-15 04:05:14'),
(94, 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '221222110116gis-handheld-1.webp', 'Data Collector GIS Handheld GH - 55', 'GH-55', '<p><strong>Mobile Portable Handheld Terminal</strong></p><p>GH-55 mobile IOS terminal is a rugged GIS Handheld device that delivers higher productivity and accuracy in positioning to its users. It can withstand up to a 1.5-m drop and a 2-ton shock pressure test. While it also comes with a suite of integrated features, which are high integration, high performance, high reliability, and high- flexibility. Also, it goes with a long-life 6000mAh battery, is sunlight-readable, and operates under extremely low temperatures.</p>', '', '', '', 1, 24, 19, 1, '2022-08-24 03:21:06', '2022-12-22 11:01:16'),
(95, 3, '', '', '', '', '', '', '220824032220gis Handheld.webp', 'GH - 55 GIS Handheld Apogee GNSS ', 'Military Appearance', '<p>Rugged design, full view display, toughened glasses with aero grade titanium alloy material frame</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, 24, 19, 1, '2022-08-24 03:22:20', '2022-12-15 04:00:10'),
(96, 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '221222110138gis Handheld2.webp', 'Data Collector GH -55 GIS Handheld AGPL', ' High precision', '<p>GH-55 supports all constellations tracking GNSS with 184 channels positioning chip.</p><p><br>&nbsp;</p>', '', '', '', 3, 24, 19, 1, '2022-08-24 03:23:56', '2022-12-22 11:01:38'),
(97, 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '220923031854navik 100 receiver GNSS.webp', '', 'NAVIK 100', '<p><strong>An Advanced and Reliable Surveying Solution</strong></p><p>The Navik 100 receiver has a compact design, and rugged form, and is easy to use with its small weight (900 gm). It is powered by a high capacity (6800 mAh) Li-ion single battery to ensure continuous operation. Build-in 4G modem makes sure Navik-100 flawlessly works with every type of cors.</p>', '', '', '', 1, 23, 16, 1, '2022-08-24 04:06:28', '2022-09-23 03:18:54'),
(98, 3, '', '', '', '', '', '', '220923031806navik -100 GNSS receiver.webp', '', 'Greater Efficiency with enhanced UHF', '<p>Up to 5 km range with 1 W power consumption, Tx/Rx with a full frequency range from 866 MHz</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, 23, 16, 1, '2022-08-24 04:08:10', '2022-09-23 03:18:06'),
(99, 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '220824040926navik -100 receiver.webp', '', 'High-level accuracy', '<p>Navik 100 GNSS receiver brings both centimeter and millimeter level accuracy no matter where you are</p>', '', '', '', 3, 23, 16, 1, '2022-08-24 04:09:26', '2022-08-24 04:09:32'),
(100, 3, '', '', '', '', '', '', '220824041013navik -100 GNSS.webp', '', 'Extensive range of Applications', '<p>Navik 100 GNSS Receiver can be paired with a range of GIS handhelds and data collectors to provide an easy-to-use solution for surveying, mapping, and navigation, etc</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 4, 23, 16, 1, '2022-08-24 04:10:13', '2022-08-24 04:10:18'),
(101, 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '230427040858navik200-gnss-receiver.webp', 'AGPL Apogee GNSS Navik 200 GNSS Receiver', 'NAVIK 200', '<p><strong>Advanced DGPS Solution with millimeter accuracy</strong></p><ul><li>With its innovative and rugged design</li><li>All constellation tracking&nbsp; GNSS receiver</li><li>Internal 4G Connectivity</li><li>Comes up with an android application</li></ul>', '', '', '', 1, 23, 17, 1, '2022-08-24 04:25:41', '2023-04-27 04:08:58'),
(102, 3, '', '', '', '', '', '', '230428115330Apogee-gnss-dgps-navik-200.webp', 'NAVIK 200 GNSS Receiver Apogee GNSS ', 'Easy to carry ', '<p>Less than 1 kg weight&nbsp;makes the receiver one of the most portable GNSS receivers meeting your RTK survey demands.</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, 23, 17, 1, '2022-08-24 04:33:43', '2023-04-28 11:53:30'),
(103, 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '230428115038Navik-200-receiver-gnss.webp', 'NAVIK 200 GNSS rtk system AGPL DGPS', 'High level accuracy', '<p>NAVIK 200 GNSS RTK RECEIVER brings&nbsp;both centimeter and&nbsp;millimeter level accuracy no matter where you are and excellent experience with its innovative technology and portable design.</p>', '', '', '', 3, 23, 17, 1, '2022-08-24 04:40:40', '2023-04-28 11:50:38'),
(104, 3, '', '', '', '', '', '', '230428115217gnss-receiver-dgps-navik-200.webp', 'NAVIK 200 GNSS Receiver Apogee GNSS AGPL DGPS', 'Integrated GNSS Receiver', '<p>With the combination of&nbsp;GNSS board, BluetoothÂ®, and adjustable TX &amp; RX UHF into one compact device, NAVIK 200 GNSS Receiver has become one of the most reliable choices for surveyors. The Built-in 4G modem makes sure the NAVIK 200 Dgps flawlessly works with every type of CORS</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 4, 23, 17, 1, '2022-08-24 04:43:48', '2023-04-28 11:52:17'),
(105, 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '221222105840navik200-2.webp', 'AGPL Apogee GNSS Navik 300 GNSS Receiver', 'NAVIK 300', '<p><strong>Advanced RTK GNSS with millimeter/centimeter accuracy</strong></p><ul><li>Supports center point RTX enabling survey without base station CORS.</li><li>Extended RTK support by using TRIMBLE Technology.</li><li>Everest Plusâ„¢ multipath mitigation technology.</li><li>Proven TRIMBLE low elevation tracking technology.</li></ul>', '', '', '', 1, 23, 18, 1, '2022-09-16 06:01:14', '2022-12-22 10:58:40'),
(106, 3, '', '', '', '', '', '', '220916060428navik -300 GNSS receiver.webp', 'Navik 300 GNSS Receiver Apogee GNSS', 'Multi constellations Tracking', '<ul><li>336 tracking channels</li><li>Supports GPS, Beidou, GLONASS, Galileo, Navic, SBAS, QZSS, etc.</li></ul>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, 23, 18, 1, '2022-09-16 06:04:28', '2022-12-15 03:14:29'),
(107, 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '221222105916navik200-1.webp', 'GNSS RTK Navik 300 GNSS Receiver positioning technology', 'Greater efficiency with enhanced UHF', '<ul><li>Upto 5 km range</li><li>Tx/Rx in the frequency range of 866 MHz or 403 - 473 MHz optional</li></ul>', '', '', '', 3, 23, 18, 1, '2022-09-16 06:06:09', '2022-12-22 10:59:16'),
(108, 3, '', '', '', '', '', '', '220916060735NAVIK 300 RECEIVER GNSS.webp', 'GNSS RTK solution AGPL GNSS receiver', 'High level accuracy', '<p>Navik 300 GNSS Receiver brings both centimeter and millimeter level accuracy no matter where you are and excellent experience with its innovative technology and portable design.</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 4, 23, 18, 1, '2022-09-16 06:07:35', '2022-12-15 03:35:48'),
(109, 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '230428125001NAVIK 50 GNSS.webp', 'Navik 50 GNSS Receiver AGPL', 'NAVIK 50', '<p><strong>Highly Accurate, Innovative Design</strong></p><p>Navik 50 GNSS receiver is one of the extensive ranges of AGPLâ€™s ultra-compact GNSS modules. It is easy to use&nbsp;with&nbsp;its rugged form and compact size along with a very easy app interface. It is powered by a high-capacity (6800 mAh) Li-ion External battery.&nbsp;</p>', '', '', '', 1, 23, 27, 1, '2022-09-23 04:36:11', '2023-04-28 12:50:01'),
(110, 3, '', '', '', '', '', '', '230428125014NAVIK 50 LED.webp', 'DGPS NAVIK 50 GNSS Receiver Apogee GNSS', 'Multi Network Connection ', '<p>DGPS Navik 50 Supports Wi-Fi, BLE, Radio, and NTRIP.</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, 23, 27, 1, '2022-09-23 04:38:29', '2023-04-28 12:50:14'),
(111, 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '230428125044NAVIK 50 Receiver.webp', 'NAVIK 50 GNSS rtk system AGPL', 'Multi constellations Tracking', '<p>184 tracking channels&nbsp;</p><p>Supports GPS, Beidou, GLONASS, Galileo&nbsp;</p>', '', '', '', 3, 23, 27, 1, '2022-09-23 05:40:42', '2023-04-28 12:50:44'),
(112, 3, '', '', '', '', '', '', '230428125057NAVIK 50 GNSS.webp', 'NAVIK 50 GNSS Receiver Apogee GNSS AGPL', 'Greater efficiency with enhanced UHF', '<p>Upto 5 km range with 1W power consumption.&nbsp;&nbsp;</p><p>Tx/Rx in the frequency range of 866 MHz or 403 â€“ 473 MHz optional.</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 4, 23, 27, 1, '2022-09-23 05:41:44', '2023-04-28 12:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `product_parameter`
--

CREATE TABLE `product_parameter` (
  `id` int(11) NOT NULL,
  `key_point` varchar(255) NOT NULL,
  `key_value` text NOT NULL,
  `product_sub_type_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_parameter`
--

INSERT INTO `product_parameter` (`id`, `key_point`, `key_value`, `product_sub_type_id`, `is_active`, `created_at`, `updated_at`) VALUES
(15, 'Size	', '120 * 85 mm', 26, 1, '2022-08-23 05:50:08', '2022-08-23 05:50:08'),
(16, 'Frequency', '866 MHz', 26, 1, '2022-08-23 05:50:31', '2022-08-23 05:50:31'),
(17, 'Number of Channels', '184', 21, 1, '2022-08-25 11:45:58', '2022-08-25 12:17:08'),
(18, 'Dimensions', '56.4 * 45.3 * 14.6 mm', 21, 1, '2022-08-25 11:48:04', '2022-08-25 11:48:04'),
(19, 'Weight', '58 gm', 21, 1, '2022-08-25 11:48:38', '2022-08-25 11:48:38'),
(20, 'Internal Storage', '16 GB', 21, 1, '2022-08-25 11:49:13', '2022-08-25 11:49:13'),
(21, 'Number of Channels', '574', 20, 1, '2022-08-25 12:02:30', '2022-08-25 12:17:00'),
(22, 'Power Consumption', '15W', 20, 1, '2022-08-25 12:03:53', '2022-08-25 12:03:53'),
(24, 'Size(L x W x H)', '204mm x 156.3mm x 87mm', 20, 1, '2022-08-25 12:11:05', '2022-08-25 12:11:05'),
(25, 'Weight', '1.586 Kg', 20, 1, '2022-08-25 12:11:44', '2022-08-25 12:11:44'),
(26, 'Number of Channels', '184', 19, 1, '2022-08-25 12:16:31', '2022-08-25 12:16:39'),
(27, 'OS Platform', '8.1', 19, 1, '2022-08-25 12:17:39', '2022-08-25 12:17:39'),
(28, 'Battery', '6000mAh', 19, 1, '2022-08-25 12:18:08', '2022-08-25 12:18:08'),
(29, 'Number of Channels', '184', 16, 1, '2022-08-25 12:20:20', '2022-08-25 12:20:20'),
(30, 'size', '141 mm x 115 mm', 16, 1, '2022-08-25 12:21:16', '2022-08-25 12:21:37'),
(31, 'Weight', '900 gm', 16, 1, '2022-08-25 12:21:52', '2022-08-25 12:21:52'),
(32, 'IP Rating', 'IP67', 16, 1, '2022-08-25 12:58:14', '2022-08-25 12:58:14'),
(33, 'Number of Channels', '700+', 17, 1, '2022-08-25 01:01:18', '2022-08-25 01:01:18'),
(34, 'Size', '156 mm x 106 mm', 17, 1, '2022-08-25 01:01:56', '2022-08-25 01:01:56'),
(35, 'Weight', '950 gm (Approx.)', 17, 1, '2022-08-25 01:02:19', '2022-08-25 01:02:19'),
(36, 'IP Rating', 'IP67', 17, 1, '2022-08-25 01:02:45', '2022-08-25 01:02:45'),
(37, 'Number of Channels', '336', 18, 1, '2022-09-16 06:09:00', '2022-12-15 02:50:34'),
(38, 'Size	', '156 mm x 106 mm', 18, 1, '2022-09-16 06:09:50', '2022-09-16 06:09:50'),
(39, 'Weight', '1.3 kg', 18, 1, '2022-09-16 06:10:27', '2022-12-15 03:02:26'),
(40, 'IP Rating', 'IP67', 18, 1, '2022-09-16 06:10:45', '2022-09-16 06:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `product_sub_type`
--

CREATE TABLE `product_sub_type` (
  `id` int(11) NOT NULL,
  `img_icon` varchar(255) NOT NULL,
  `alt` text NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `product_sub_type_name` varchar(255) NOT NULL,
  `product_type_id` int(11) NOT NULL,
  `front_title` text NOT NULL,
  `download_center_id` int(11) DEFAULT NULL,
  `short_description` text NOT NULL,
  `header_content` text NOT NULL,
  `is_active` int(11) NOT NULL,
  `is_featured` int(11) NOT NULL,
  `sequence_no` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_sub_type`
--

INSERT INTO `product_sub_type` (`id`, `img_icon`, `alt`, `page_url`, `product_sub_type_name`, `product_type_id`, `front_title`, `download_center_id`, `short_description`, `header_content`, `is_active`, `is_featured`, `sequence_no`, `created_at`, `updated_at`) VALUES
(16, '220824041124navik 100 receiver GNSS.webp', 'NAVIK 100 GNSS RTK GNSS Receiver Apogee GNSS AGPL', '', 'Navik 100', 23, 'An Advanced and Reliable Surveying Solution', 35, 'Tracks multi constellations', '', 0, 0, 0, '0000-00-00 00:00:00', '2022-12-14 05:39:48'),
(17, '230428115523Apogee-gnss-dgps-navik-200.webp', 'NAVIK 200 GNSS RTK DGPS GNSS Receiver Apogee GNSS AGPL', 'navik-200-gnss-receiver-dgps', 'Navik 200', 23, 'Advanced RTK GNSS Receiver with Millimeter Accuracy', 36, 'With its innovative and rugged design', '<link rel=\"canonical\" href=\"https://www.apogeegnss.com/product-sub-type.php?product_url=navik-200-gnss-receiver-dgps\" >\r\n <title>Advanced Navik 200 GNSS Receiver DGPS | Apogee GNSS </title>\r\n <meta name = \"og_title\" property = \"og:title\" content = \"Advanced Navik 200 GNSS Receiver DGPS | Apogee GNSS\">\r\n <meta property = \"og:type\" content = \"website\">\r\n <meta name = \"og_site_name\" property =\"og:site_name\" content = \"apogeegnss.com\">\r\n <meta name = \"Keywords\" content=\"RTK GNSS receiver, AGPL GNSS receiver, Apogee made in india GNSS receiver, best rtk GNSS receiver, gnss surveying, GNSS technology, low-cost rtk GNSS receiver, rtk GNSS receiver price, GNSS receiver manufacturers in India, gnss receiver accuracy, Apogee Navik 200 GNSS Receiver, Apogee first Dgps made in india, Apogee surveying equipment, DGPS\">\r\n <meta name = \"Description\" content = \"Apogee\'s Navik 200 GNSS RTK Receiver is used to improve accuracy of the positioning data. This Dgps solution is used in all types of surveying applications.\">\r\n <meta property = \"og:description\" content = \"Apogee\'s Navik 200 GNSS RTK Receiver is used to improve accuracy of the positioning data. This Dgps solution is used in all types of surveying applications.\">\r\n<meta name = \"og_url\" property = \"og:url\" content = \"https://www.apogeegnss.com/product-sub-type.php?product_url=navik-200-gnss-receiver-dgps\">\r\n<meta name = \"og_image\" property=\"og:image\" content = \"https://apogeegnss.com/assets/images/product/230427040858navik200-gnss-receiver.webp\">', 1, 1, 2, '0000-00-00 00:00:00', '2023-06-01 03:25:16'),
(18, '220926104458NAVIK 300 GNSS RECEIVER.webp', 'NAVIK 300 GNSS RTK DGPS GNSS Receiver Apogee GNSS AGPL', 'navik-300-gnss-receiver', 'Navik 300', 23, 'Highly Precise GNSS RTK System', 0, 'High Performance and reliable DGPS', '<link rel=\"canonical\" href=\"https://www.apogeegnss.com/product-sub-type.php?product_url=navik-300-gnss-receiver\" >\r\n <title>APOGEE GNSS | Navik 300 DGPS</title>\r\n <meta name = \"og_title\" property = \"og:title\" content = \"\">\r\n <meta property = \"og:type\" content = \"website\">\r\n <meta name = \"og_site_name\" property =\"og:site_name\" content = \"apogeegnss.com\">\r\n <meta name = \"Keywords\" content=\"RTK GNSS receiver, AGPL GNSS receiver, Apogee made in india GNSS receiver, best rtk GNSS receiver, gnss surveying, GNSS technology, low-cost rtk GNSS receiver, rtk GNSS receiver price, GNSS receiver manufacturers in India, gnss receiver accuracy, Apogee Navik 300 GNSS Receiver, Apogee first Dgps made in india, Apogee surveying equipment\">\r\n <meta name = \"Description\" content = \"\">\r\n <meta property = \"og:description\" content = \"\">\r\n<meta name = \"og_url\" property = \"og:url\" content = \"https://www.apogeegnss.com/product-sub-type.php?product_url=navik-300-gnss-receiver\r\n\">\r\n<meta name = \"og_image\" property=\"og:image\" content = \"https://www.apogeegnss.com/assets/images/product/220916060428navik%20-300%20GNSS%20receiver.webp\">', 1, 0, 3, '0000-00-00 00:00:00', '2023-06-01 03:26:20'),
(19, '220824031657gis-handheld.webp', 'GIS Handheld Data Controller DGPS Apogee GNSS AGPL', 'gh-55-gis-handheld', 'GH-55', 24, 'MOBILE PORTABLE HANDHELD TERMINAL', 26, 'Rugged design with high flexibility and reliability', '<link rel=\"canonical\" href=\"https://www.apogeegnss.com/product-sub-type.php?product_url=gh-55-gis-handheld\" >\r\n <title>APOGEE GNSS | GH-55 DGPS GIS Handheld</title>\r\n <meta name = \"og_title\" property = \"og:title\" content = \"APOGEE GNSS | GH-55 DGPS GIS Handheld\">\r\n <meta property = \"og:type\" content = \"website\">\r\n <meta name = \"og_site_name\" property =\"og:site_name\" content = \"apogeegnss.com\">\r\n <meta name = \"Keywords\" content=\"\">\r\n <meta name = \"Description\" content = \"\">\r\n <meta property = \"og:description\" content = \"\">\r\n<meta name = \"og_url\" property = \"og:url\" content = \"https://www.apogeegnss.com/product-sub-type.php?product_url=gh-55-gis-handheld\">\r\n<meta name = \"og_image\" property=\"og:image\" content = \"https://www.apogeegnss.com/assets/images/product/220824032220gis%20Handheld.webp\">', 1, 0, 0, '0000-00-00 00:00:00', '2023-06-01 03:40:30'),
(20, '220824013036cors - solution.webp', 'HRS - 1 Continuously operating Reference System ( CORS ) AGPL', 'hrs-1-cors', 'HRS-1', 25, 'CORS (Continuously Operating Reference Station)', 37, 'CORS solution for GNSS network', '<link rel=\"canonical\" href=\"https://www.apogeegnss.com/product-sub-type.php?product_url=hrs-1-cors\" >\r\n <title>APOGEE GNSS | HRS-1 CORS (Continuously Operating Reference Station)</title>\r\n <meta name = \"og_title\" property = \"og:title\" content = \"APOGEE GNSS | HRS-1 CORS (Continuously Operating Reference Station)\">\r\n <meta property = \"og:type\" content = \"website\">\r\n <meta name = \"og_site_name\" property =\"og:site_name\" content = \"apogeegnss.com\">\r\n <meta name = \"Keywords\" content=\"apogee GNSS CORS, continuously operating reference station, gnss base, satellite navigation, CORS price, GNSS receiver manufacturers, CORS base\">\r\n <meta name = \"Description\" content = \"\">\r\n <meta property = \"og:description\" content = \"\">\r\n<meta name = \"og_url\" property = \"og:url\" content = \"https://www.apogeegnss.com/product-sub-type.php?product_url=hrs-1-cors\">\r\n<meta name = \"og_image\" property=\"og:image\" content = \"https://www.apogeegnss.com/assets/images/product/220824013657CORS%20solution.webp\">', 1, 1, 0, '0000-00-00 00:00:00', '2023-06-01 03:35:29'),
(21, '220714103858uav.webp', 'EAGLE UAV Solution AGPL Apogee GNSS ', 'eagle-uav-solution', 'EAGLE', 26, 'UAV (Unmanned Aerial Vehicle)', 34, 'Designed for high precision surveying', 'link rel=\"canonical\" href=\"https://www.apogeegnss.com/product-sub-type.php?product_url=eagle-uav-solution\" >\r\n <title>APOGEE GNSS | Eagle UAV PPK RTK Solution</title>\r\n <meta name = \"og_title\" property = \"og:title\" content = \"APOGEE GNSS | Eagle UAV PPK RTK Solution\">\r\n <meta property = \"og:type\" content = \"website\">\r\n <meta name = \"og_site_name\" property =\"og:site_name\" content = \"apogeegnss.com\">\r\n <meta name = \"Keywords\" content=\"\">\r\n <meta name = \"Description\" content = \"\">\r\n <meta property = \"og:description\" content = \"\">\r\n<meta name = \"og_url\" property = \"og:url\" content = \"https://www.apogeegnss.com/product-sub-type.php?product_url=eagle-uav-solution\">\r\n<meta name = \"og_image\" property=\"og:image\" content = \"https://www.apogeegnss.com/assets/images/product/220824111324UAV-SOLUTION.webp\">', 1, 0, 0, '0000-00-00 00:00:00', '2023-06-01 04:01:15'),
(26, '220824112223radio.webp', 'AR - X1 UHF datalink Radio Apogee GNSS (AGPL)', 'ar-x1-uhf-datalink-radio', 'AR - X1 UHF Radio DATALINK', 27, 'Designed for GNSS RTK Survey Systems', 46, '865-867 MHz License Free Frequency Bands', '<link rel=\"canonical\" href=\"https://www.apogeegnss.com/product-sub-type.php?product_url=ar-x1-uhf-datalink-radio\" >\r\n <title>APOGEE GNSS | AR-X1 UHF Datalink Radio</title>\r\n <meta name = \"og_title\" property = \"og:title\" content = \"APOGEE GNSS | AR-X1 UHF Datalink Radio\">\r\n <meta property = \"og:type\" content = \"website\">\r\n <meta name = \"og_site_name\" property =\"og:site_name\" content = \"apogeegnss.com\">\r\n <meta name = \"Keywords\" content=\"\">\r\n <meta name = \"Description\" content = \"\">\r\n <meta property = \"og:description\" content = \"\">\r\n<meta name = \"og_url\" property = \"og:url\" content = \"https://www.apogeegnss.com/product-sub-type.php?product_url=ar-x1-uhf-datalink-radio\">\r\n<meta name = \"og_image\" property=\"og:image\" content = \"https://www.apogeegnss.com/assets/images/product/220824112223radio.webp\">', 1, 1, 0, '2022-08-18 05:31:04', '2023-06-01 04:05:05'),
(27, '230428124930NAVIK 50 GNSS.webp', 'GNSS Receiver NAVIK 50 DGPS Apogee GNSS ', 'navik-50-gnss-receiver', 'NAVIK 50', 23, 'High - Performance Solution for Professional Surveyors', 44, 'Highly Accurate, Innovative Design', '<link rel=\"canonical\" href=\"https://www.apogeegnss.com/product-sub-type.php?product_url=navik-50-gnss-receiver\" >\r\n <title>Apogee GNSS | Navik 50 DGPS RTK GNSS Receiver</title>\r\n <meta name = \"og_title\" property = \"og:title\" content = \"Apogee GNSS | Navik 50 Apogee DGPS RTK GNSS Receiver\">\r\n <meta property = \"og:type\" content = \"website\">\r\n <meta name = \"og_site_name\" property =\"og:site_name\" content = \"apogeegnss.com\">\r\n <meta name = \"Keywords\" content=\"RTK GNSS receiver, AGPL GNSS receiver, Apogee made in india GNSS receiver, best rtk GNSS receiver, gnss surveying, GNSS technology, low-cost rtk GNSS receiver, rtk GNSS receiver price, GNSS receiver manufacturers in India, gnss receiver accuracy, Apogee Navik 50 GNSS Receiver, Apogee first Dgps made in india, Apogee surveying equipment, DGPS\">\r\n <meta name = \"Description\" content = \"Navik 50 GNSS RTK Receiver provides accurate correction data. Due to its lightweight and easy app interface, DGPS is easy to use and comes with an external battery.\">\r\n <meta property = \"og:description\" content = \"Navik 50 GNSS RTK Receiver provides accurate correction data. Due to its lightweight and very easy app interface, DGPS is easy to use and comes with an external battery.\">\r\n<meta name = \"og_url\" property = \"og:url\" content = \"https://www.apogeegnss.com/product-sub-type.php?product_url=navik-50-gnss-receiver\">\r\n<meta name = \"og_image\" property=\"og:image\" content = \"https://apogeegnss.com/assets/images/product/230428125001NAVIK%2050%20GNSS.webp\">', 1, 1, 1, '2022-09-23 04:34:22', '2023-06-01 03:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `img_icon` varchar(255) NOT NULL,
  `alt` text NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `product_type_name` varchar(255) NOT NULL,
  `header_content` text NOT NULL,
  `main_menu_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `img_icon`, `alt`, `page_url`, `product_type_name`, `header_content`, `main_menu_id`, `is_active`, `created_at`, `updated_at`) VALUES
(23, '220714100229220704050347gnss-rtk.webp', 'GNSS RTK GNSS Receiver Surveying equipment AGPL DGPS', 'gnss-rtk', 'GNSS RTK', '<link rel=\"canonical\" href=\"https://www.apogeegnss.com/product.php?protypeurl=gnss-rtk\" >\r\n <title>India\'s first Made in India GNSS Receiver DGPS | APOGEE GNSS</title>\r\n <meta name = \"og_title\" property = \"og:title\" content = \"India\'s first Made in India GNSS Receiver DGPS | APOGEE GNSS\">\r\n <meta property = \"og:type\" content = \"website\">\r\n <meta name = \"og_site_name\" property =\"og:site_name\" content = \"apogeegnss.com\">\r\n <meta name = \"Keywords\" content=\"RTK GNSS receiver, AGPL GNSS receiver, Apogee made in india GNSS receiver, best rtk GNSS receiver, gnss surveying, GNSS technology, how rtk gnss works, low-cost rtk GNSS receiver, rtk GNSS receiver price, GNSS receiver manufacturers in India, gnss receiver accuracy, Apogee Navik 50 GNSS Receiver, Apogee Navik 200 GNSS Receiver, Apogee Navik 300 GNSS Receiver, Apogee first Dgps made in india, Apogee surveying equipment, DGPS\">\r\n <meta name = \"Description\" content = \"Apogee GNSS introduces first ever Made in India GNSS Receiver (Navik Series). AGPL\'s advanced DGPS are highly accurate and best for survey professionals.\">\r\n <meta property = \"og:description\" content = \"Apogee GNSS introduces first ever Made in India GNSS Receiver (Navik Series). AGPL\'s advanced DGPS are highly accurate and best for survey professionals\">\r\n<meta name = \"og_url\" property = \"og:url\" content = \"https://www.apogeegnss.com/product.php?protypeurl=gnss-rtk\">\r\n<meta name = \"og_image\" property=\"og:image\" content = \"https://apogeegnss.com/assets/images/product/230427040858navik200-gnss-receiver.webp\">', 2, 1, '0000-00-00 00:00:00', '2023-06-01 03:20:44'),
(24, '220713071217220704050648gis.webp', 'GIS Handheld Data Controller Apogee GNSS AGPL', 'gis-handheld', 'GIS Handheld', '<link rel=\"canonical\" href=\"https://www.apogeegnss.com/product.php?protypeurl=gis-handheld\" >\r\n <title>APOGEE GNSS | GNSS Data Controller, GIS Handheld</title>\r\n <meta name = \"og_title\" property = \"og:title\" content = \"APOGEE GNSS | GNSS Data Controller, GIS Handheld\">\r\n <meta property = \"og:type\" content = \"website\">\r\n <meta name = \"og_site_name\" property =\"og:site_name\" content = \"apogeegnss.com\">\r\n <meta name = \"Keywords\" content=\"\">\r\n <meta name = \"Description\" content = \"\">\r\n <meta property = \"og:description\" content = \"\">\r\n<meta name = \"og_url\" property = \"og:url\" content = \"https://www.apogeegnss.com/product.php?protypeurl=gis-handheld\">\r\n<meta name = \"og_image\" property=\"og:image\" content = \"https://www.apogeegnss.com/assets/images/product/220824031657gis-handheld.webp\">', 2, 1, '0000-00-00 00:00:00', '2023-06-01 03:37:50'),
(25, '220713071209220704050721satellite.webp', 'HRS - 1 Continuously operating Reference System ( CORS ) AGPL', 'cors-and-precise-positioning', 'CORS & Precise Positioning', '\r\n<link rel=\"canonical\" href=\"https://www.apogeegnss.com/product.php?protypeurl=cors-and-precise-positioning\" >\r\n <title>APOGEE GNSS | CORS & Precise Positioning</title>\r\n <meta name = \"og_title\" property = \"og:title\" content = \"APOGEE GNSS | CORS & Precise Positioning\">\r\n <meta property = \"og:type\" content = \"website\">\r\n <meta name = \"og_site_name\" property =\"og:site_name\" content = \"apogeegnss.com\">\r\n <meta name = \"Keywords\" content=\"apogee GNSS CORS, continuously operating reference station, gnss base, satellite navigation, CORS price, GNSS receiver manufacturers, CORS base\">\r\n <meta name = \"Description\" content = \"\">\r\n <meta property = \"og:description\" content = \"\">\r\n<meta name = \"og_url\" property = \"og:url\" content = \"https://www.apogeegnss.com/product.php?protypeurl=cors-and-precise-positioning\">\r\n<meta name = \"og_image\" property=\"og:image\" content = \"https://www.apogeegnss.com/assets/images/product/220824013036cors%20-%20solution.webp\">', 2, 1, '0000-00-00 00:00:00', '2023-06-01 03:31:49'),
(26, '220713071144220704050738uav.webp', 'UAV RTK PPK Solution AGPL Apogee GNSS ', 'uav-solution', 'UAV', '<link rel=\"canonical\" href=\"https://www.apogeegnss.com/product.php?protypeurl=uav-solution\" >\r\n <title>APOGEE GNSS | UAV RTK PPK Solution</title>\r\n <meta name = \"og_title\" property = \"og:title\" content = \"APOGEE GNSS | UAV RTK PPK Solution\">\r\n <meta property = \"og:type\" content = \"website\">\r\n <meta name = \"og_site_name\" property =\"og:site_name\" content = \"apogeegnss.com\">\r\n <meta name = \"Keywords\" content=\"\">\r\n <meta name = \"Description\" content = \"\">\r\n <meta property = \"og:description\" content = \"\">\r\n<meta name = \"og_url\" property = \"og:url\" content = \"https://www.apogeegnss.com/product.php?protypeurl=uav-solution\">\r\n<meta name = \"og_image\" property=\"og:image\" content = \"https://www.apogeegnss.com/assets/images/product/220714103858uav.webp\">', 2, 1, '0000-00-00 00:00:00', '2023-06-01 03:42:52'),
(27, '220713071135220705092601radio-antenna.webp', 'UHF datalink Radio Apogee GNSS (AGPL)', 'uhf-datalink-radio', 'Radio', '<link rel=\"canonical\" href=\"https://www.apogeegnss.com/product.php?protypeurl=uhf-datalink-radio\" >\r\n <title>APOGEE GNSS | UHF Datalink Frequency Bands Radio</title>\r\n <meta name = \"og_title\" property = \"og:title\" content = \"APOGEE GNSS | UHF Datalink Frequency Bands Radio\">\r\n <meta property = \"og:type\" content = \"website\">\r\n <meta name = \"og_site_name\" property =\"og:site_name\" content = \"apogeegnss.com\">\r\n <meta name = \"Keywords\" content=\"\">\r\n <meta name = \"Description\" content = \"\">\r\n <meta property = \"og:description\" content = \"\">\r\n<meta name = \"og_url\" property = \"og:url\" content = \"https://www.apogeegnss.com/product.php?protypeurl=uhf-datalink-radio\">\r\n<meta name = \"og_image\" property=\"og:image\" content = \"https://www.apogeegnss.com/assets/images/product/220824112223radio.webp\">', 2, 1, '0000-00-00 00:00:00', '2023-06-01 04:03:26'),
(29, '220809011013220713071135220705092601radio-antenna.webp', '', '', 'Test', '', 2, 0, '2022-08-09 01:10:13', '2022-08-18 05:03:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_download_file`
--

CREATE TABLE `user_download_file` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `download_center_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_download_file`
--

INSERT INTO `user_download_file` (`id`, `name`, `email`, `company`, `download_center_id`, `created_at`) VALUES
(203, 'Manjeet singh', 'manjeetsinghgpl@gmail.com', 'Genius electrical and electronics pvt ltd', 39, '0000-00-00 00:00:00'),
(207, 'Yasg', 'rama.123@gnail.com', 'Rama infrastructure ', 39, '0000-00-00 00:00:00'),
(209, 'Zaheer', 'zaheershaik1580@gmail.com', '', 40, '0000-00-00 00:00:00'),
(210, 'Zaheer', 'zaheershaik1580@gmail.com', '', 36, '0000-00-00 00:00:00'),
(219, 'Pratap ', 'pratap20196@gmail.com', '', 40, '0000-00-00 00:00:00'),
(220, 'Sairam', 'sairam.urrinkala666@gmail.com', 'Survey dept', 37, '0000-00-00 00:00:00'),
(221, 'Kalyan', 'kalyankumar995@gmail.com', 'Survey dept', 37, '0000-00-00 00:00:00'),
(222, 'Kalyan', 'kalyankumar995@gmail.com', 'Survey dept', 40, '0000-00-00 00:00:00'),
(225, 'Ram', 'konda.v555@gmail.com', 'Ram', 40, '0000-00-00 00:00:00'),
(228, 'Ram', 'konda.v555@gmail.com', 'Ram', 39, '0000-00-00 00:00:00'),
(229, 'Ram', 'konda.v555@gmail.com', 'Ram', 37, '0000-00-00 00:00:00'),
(231, 'Ram', 'konda.v555@gmail.com', 'Ram', 41, '0000-00-00 00:00:00'),
(232, 'Ram', 'konda.v555@gmail.com', 'Ram', 36, '0000-00-00 00:00:00'),
(233, 'prathap', 'praatap20196@gmail.com', '', 36, '0000-00-00 00:00:00'),
(234, 'prathap', 'praatap20196@gmail.com', '', 41, '0000-00-00 00:00:00'),
(237, 'Manohar', 'akm9848@gmail.com', 'Survey and land records', 40, '0000-00-00 00:00:00'),
(238, 'Manohar', 'akm9848@gmail.com', 'Survey and land records', 41, '0000-00-00 00:00:00'),
(239, 'Manohar', 'akm9848@gmail.com', 'Survey and land records', 36, '0000-00-00 00:00:00'),
(243, 'B.GUNASEKHAR', 'gunasekhar.jaya@gmail.com', 'APOGEE', 36, '0000-00-00 00:00:00'),
(244, 'B.GUNASEKHAR', 'gunasekhar.jaya@gmail.com', 'APOGEE', 40, '0000-00-00 00:00:00'),
(245, 'Srikanth', 'suryat00098@gmail.com', 'Navik', 36, '0000-00-00 00:00:00'),
(249, 'Chaitanya', 'chaitusvs.1@gmail.com', '', 36, '0000-00-00 00:00:00'),
(250, 'Chaitanya', 'chaitusvs.1@gmail.com', '', 40, '0000-00-00 00:00:00'),
(252, 'Trtr', 'tulasi7013@gmail.com', 'Trtrtr', 45, '0000-00-00 00:00:00'),
(253, 'Naresh', 'nareshsandra97@gmail.com', 'Survey Dept', 40, '0000-00-00 00:00:00'),
(254, 'Chaitu', 'chaitusvs.1@gmail.com', '', 40, '0000-00-00 00:00:00'),
(256, 'THEEDA RAMESH', 'rameshrms321@gmail.com', 'Design', 36, '0000-00-00 00:00:00'),
(258, 'THEEDA RAMESH', 'rameshrms321@gmail.com', 'Design', 39, '0000-00-00 00:00:00'),
(259, 'THEEDA RAMESH', 'rameshrms321@gmail.com', 'Design', 37, '0000-00-00 00:00:00'),
(260, 'THEEDA RAMESH', 'rameshrms321@gmail.com', 'Design', 37, '0000-00-00 00:00:00'),
(261, 'javed ali', 'geo.matic@yahoo.com', 'geomatic instruments', 39, '0000-00-00 00:00:00'),
(262, 'Zaheer ', 'zaheershaik1994@gmail.com', 'Resurvey ', 41, '0000-00-00 00:00:00'),
(265, 'CHANDRADEEP BHUPATHI', 'chandradeepb4u@gmail.com', 'MK', 41, '0000-00-00 00:00:00'),
(270, 'Phaneendra Mattaparthi ', 'mphani036@gmail.com', '', 41, '0000-00-00 00:00:00'),
(272, 'Phaneendra Mattaparthi ', 'mphani036@gmail.com', '', 40, '0000-00-00 00:00:00'),
(273, 'THEEDA RAMESH', 'rameshrms321@gmail.com', 'Design', 40, '0000-00-00 00:00:00'),
(280, 'mhr', 'vesok18116@tebyy.com', '123', 40, '0000-00-00 00:00:00'),
(281, 'Raju', 'lpcchennai@gmail.com', 'Land point surveyors And Engineers ', 37, '0000-00-00 00:00:00'),
(282, 'Raju', 'lpcchennai@gmail.com', 'Land point surveyors And Engineers ', 36, '0000-00-00 00:00:00'),
(283, 'Sachin Gupta ', 'roansgupta@gmail.com', '', 40, '0000-00-00 00:00:00'),
(287, 'JONNALAGADDA WIJAY KRRISHNA', 'j.wijaykrrishna2666@gmail.com', 'SURVEY & LAND RECORDS', 39, '0000-00-00 00:00:00'),
(288, 'JONNALAGADDA WIJAY KRRISHNA', 'j.wijaykrrishna2666@gmail.com', 'SURVEY & LAND RECORDS', 41, '0000-00-00 00:00:00'),
(289, 'JONNALAGADDA WIJAY KRRISHNA', 'j.wijaykrrishna2666@gmail.com', 'SURVEY & LAND RECORDS', 36, '0000-00-00 00:00:00'),
(291, 'JONNALAGADDA WIJAY KRRISHNA', 'j.wijaykrrishna2666@gmail.com', 'SURVEY & LAND RECORDS', 40, '0000-00-00 00:00:00'),
(294, 'JONNALAGADDA WIJAY KRRISHNA', 'j.wijaykrrishna2666@gmail.com', 'SURVEY & LAND RECORDS', 37, '0000-00-00 00:00:00'),
(295, 'k balaji', 'balujik7@gmail.com', 'Bhhj', 36, '0000-00-00 00:00:00'),
(296, 'Aa ', 'chaitusvs.1@gmail.com', '', 36, '0000-00-00 00:00:00'),
(297, 'sigaredla chaitanya kumar', 'chaitusvs.1@gmail.com', '', 40, '0000-00-00 00:00:00'),
(302, 'dholinbanglore.online', 'admin@gmail.com', 'wewer', 46, '0000-00-00 00:00:00'),
(306, 'narendra', 'narilalam1108@gmail.com', 'Survey and land records', 40, '0000-00-00 00:00:00'),
(307, 'Raajeev Raajeev', 'raajeevgandhi083@gmail.com', 'Land point surveyors And Engineers ', 36, '0000-00-00 00:00:00'),
(326, 'Xyz', 'xzdsarg@gmail.xom', '', 36, '0000-00-00 00:00:00'),
(327, 'Xyz', 'xzdsarg@gmail.xom', '', 40, '0000-00-00 00:00:00'),
(328, 'Juturu pradeep kumar', 'Jpradeepce08@gmail.com', 'APGOVT', 41, '0000-00-00 00:00:00'),
(329, 'Juturu pradeep kumar', 'Jpradeepce08@gmail.com', 'APGOVT', 40, '0000-00-00 00:00:00'),
(330, 'Juturu pradeep kumar', 'Jpradeepce08@gmail.com', 'APGOVT', 41, '0000-00-00 00:00:00'),
(332, 'Juturu pradeep kumar', 'Jpradeepce08@gmail.com', 'APGOVT', 40, '0000-00-00 00:00:00'),
(333, 'Tanuj', 'tanujbartar@gmail.com', '', 44, '0000-00-00 00:00:00'),
(334, 'Mind', 'errabaduresurvey2022@gmail.com', 'R', 36, '0000-00-00 00:00:00'),
(335, 'mohammad ansar', 'mdansar9396@gmail.com', 'SURVEYOR', 40, '0000-00-00 00:00:00'),
(336, 'AJAY SINGH NEGI', 'ajunegi216@gmail.com', 'Survey of India ', 39, '0000-00-00 00:00:00'),
(337, 'AJAY SINGH NEGI', 'ajunegi216@gmail.com', 'Soi', 40, '0000-00-00 00:00:00'),
(338, 'AJAY SINGH NEGI', 'ajunegi216@gmail.com', 'SURVEY OF INDIA ', 41, '0000-00-00 00:00:00'),
(339, 'MANOJ KUMAR', 'geomanojkumar@rediffmail.com', 'ROCK RESOLVE', 39, '0000-00-00 00:00:00'),
(342, 'Gopinath', 'pmu.resurvey@cdma.gov.in', 'Cdma', 39, '0000-00-00 00:00:00'),
(343, 'Gopinath', 'pmu.resurvey@cdma.gov.in', 'Cdma', 41, '0000-00-00 00:00:00'),
(344, 'Gopinath', 'pmu.resurvey@cdma.gov.in', 'Cdma', 37, '0000-00-00 00:00:00'),
(345, 'Gopinath', 'pmu.resurvey@cdma.gov.in', 'Cdma', 36, '0000-00-00 00:00:00'),
(346, 'Anshul Jangid', 'a.k.anshuljangid@gmail.com', 'MAnoj Associates Shamli', 36, '0000-00-00 00:00:00'),
(347, 'Anshul Jangid', 'a.k.anshuljangid@gmail.com', 'MAnoj Associates Shamli', 39, '0000-00-00 00:00:00'),
(348, 'Hardeep', 'hardeephev@gmail.com', 'Cme', 39, '0000-00-00 00:00:00'),
(349, 'Hardeep', 'hardeephev@gmail.com', 'Cme', 41, '0000-00-00 00:00:00'),
(350, 'Amit', 'shloka.303@gmail.com', 'Survey gp', 41, '0000-00-00 00:00:00'),
(351, 'Amit', 'shloka.303@gmail.com', 'Survey gp', 51, '0000-00-00 00:00:00'),
(353, 'Saurabh ', 'saurabhramola35@gmail.com', 'Abc', 41, '0000-00-00 00:00:00'),
(354, 'Saurabh ', 'saurabhramola35@gmail.com', 'Adff', 40, '0000-00-00 00:00:00'),
(355, '67jh', 'ythyth@gmail.com', 'ythy', 51, '0000-00-00 00:00:00'),
(358, 'vijay teja gutam', 'vijayteja110@gmail.com', 'Kakinada municipal corporation', 39, '0000-00-00 00:00:00'),
(360, 'rohit', 'rohit.kur2001@gmail.com', 'Sai survey', 36, '0000-00-00 00:00:00'),
(362, 'rohit', 'rohit.kur2001@gmail.com', 'Sai survey', 39, '0000-00-00 00:00:00'),
(363, 'uday', 'test@gmail.com', 'test', 39, '0000-00-00 00:00:00'),
(364, 'Test', 'test@gmail.com', 'Test', 39, '0000-00-00 00:00:00'),
(365, 'Parveen', 'parveenchaiirman@gmail.com', 'Ps', 51, '0000-00-00 00:00:00'),
(366, 'Akhil', 'Akhilsharma24360@gmail.com', '', 54, '0000-00-00 00:00:00'),
(367, 'Akhil', 'Akhilsharma24360@gmail.com', '', 41, '0000-00-00 00:00:00'),
(368, 'Akhil', 'akhilsharma24360@gmail.com', '', 26, '0000-00-00 00:00:00'),
(369, 'Manish Ranjan prasad', 'manish@xtragen.in', 'trading', 39, '0000-00-00 00:00:00'),
(370, 'Samy', 'csamy2012@gmail.com', 'No', 37, '0000-00-00 00:00:00'),
(371, 'Samy', 'csamy2012@gmail.com', 'No', 51, '0000-00-00 00:00:00'),
(372, 'Samy', 'csamy2012@gmail.com', 'No', 39, '0000-00-00 00:00:00'),
(373, 'Samy', 'csamy2012@gmail.com', 'No', 37, '0000-00-00 00:00:00'),
(374, 'Shashidhar Reddy', 'shashidharreddy@acceluav.com', 'Acceluav', 51, '0000-00-00 00:00:00'),
(375, 'Shashidhar Reddy', 'shashidharreddy@acceluav.com', 'Acceluav', 41, '0000-00-00 00:00:00'),
(376, 'Jemal', 'JemalAbibeker46@gmail.com', 'Land administration ', 36, '0000-00-00 00:00:00'),
(377, 'Jemal', 'JemalAbibeker46@gmail.com', 'Land administration ', 54, '0000-00-00 00:00:00'),
(379, 'Horst Lukschanderl', 'horst.lukschanderl@oebb.at', 'Ã–BB Infra AG', 36, '0000-00-00 00:00:00'),
(380, 'Horst Lukschanderl', 'horst.lukschanderl@oebb.at', 'Ã–BB Infra AG', 40, '0000-00-00 00:00:00'),
(381, 'Horst Lukschanderl', 'Horstlukschanderl@gmail.com', '', 40, '0000-00-00 00:00:00'),
(382, 'Katarzyna Zhukova', 'katarzyna.zhukova@gmail.com', 'Privat', 34, '0000-00-00 00:00:00'),
(383, 'Katarzyna Zhukova', 'katarzyna.zhukova@gmail.com', 'Privat', 39, '0000-00-00 00:00:00'),
(384, 'Dileep ', 'dilleeb@gmail.com', 'deep', 44, '0000-00-00 00:00:00'),
(385, 'aditya pathak', 'aditappa@gmail.com', 'Student', 39, '0000-00-00 00:00:00'),
(386, 'xcv', 'zvzvz@fsdf.com', 'fsdf', 37, '0000-00-00 00:00:00'),
(387, 'aewadad', 'asdad@dfg.nh', 'sdfsdf', 36, '0000-00-00 00:00:00'),
(388, 'xvxvx', 'xcvxcv', 'xcv', 34, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `become_dealer`
--
ALTER TABLE `become_dealer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form_query`
--
ALTER TABLE `contact_form_query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_format`
--
ALTER TABLE `content_format`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download_center`
--
ALTER TABLE `download_center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries_page_content`
--
ALTER TABLE `industries_page_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries_sub_type`
--
ALTER TABLE `industries_sub_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries_type`
--
ALTER TABLE `industries_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_menu`
--
ALTER TABLE `main_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_header_content`
--
ALTER TABLE `page_header_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_page_content`
--
ALTER TABLE `product_page_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_page_content_new`
--
ALTER TABLE `product_page_content_new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_parameter`
--
ALTER TABLE `product_parameter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sub_type`
--
ALTER TABLE `product_sub_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_download_file`
--
ALTER TABLE `user_download_file`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `become_dealer`
--
ALTER TABLE `become_dealer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact_form_query`
--
ALTER TABLE `contact_form_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1666;

--
-- AUTO_INCREMENT for table `content_format`
--
ALTER TABLE `content_format`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `download_center`
--
ALTER TABLE `download_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `industries_page_content`
--
ALTER TABLE `industries_page_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `industries_sub_type`
--
ALTER TABLE `industries_sub_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `industries_type`
--
ALTER TABLE `industries_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `main_menu`
--
ALTER TABLE `main_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `page_header_content`
--
ALTER TABLE `page_header_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product_page_content`
--
ALTER TABLE `product_page_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `product_page_content_new`
--
ALTER TABLE `product_page_content_new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `product_parameter`
--
ALTER TABLE `product_parameter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `product_sub_type`
--
ALTER TABLE `product_sub_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user_download_file`
--
ALTER TABLE `user_download_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=389;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
