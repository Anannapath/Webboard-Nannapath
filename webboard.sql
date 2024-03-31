-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2024 at 03:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'เรื่องทั่วไป'),
(2, 'เรื่องเรียน'),
(3, 'เรื่องกีฬา'),
(5, 'ไร้สาร'),
(6, 'บันเทิง'),
(7, 'งง');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` varchar(20148) NOT NULL,
  `post_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `content`, `post_date`, `user_id`, `post_id`) VALUES
(3, 'fvzdfbzdfv', '2024-03-08 11:26:31', 5, 5),
(4, 'ไทร์ไปเถอะแฮรี่ ไม่ขยันแบบนี้', '2024-03-08 11:27:39', 5, 5),
(5, 'ิมิ่าม้่าม้่มใ', '2024-03-08 11:28:59', 5, 4),
(6, '่้อสา่ิฝมา \r\n', '2024-03-31 20:10:04', 8, 13),
(7, '้า่ิส่้ิใ่ใา่ิวรีิมท ใ่้อ่ืม ิส่อวา่\r\n', '2024-03-31 20:10:13', 8, 13);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `content` varchar(2048) NOT NULL,
  `post_date` datetime NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `post_date`, `cat_id`, `user_id`) VALUES
(1, 'จะ F มั๊ยครับ', 'ผมเอาแต่ลอกงานเพื่อน ผมจะ F มั๊ยครับ', '2024-03-01 11:51:05', 2, 3),
(3, 'b', 'b', '2024-03-01 12:08:25', 1, 5),
(4, 'จะ F มั๊ยครับ ', 'ผมเอาแต่ลอกงานเพื่อน ผมจะ F มั๊ยครับ', '2024-03-01 12:09:21', 2, 5),
(5, 'xsx', 'xsx', '2024-03-31 19:53:20', 5, 5),
(11, '1', '1', '2024-03-30 16:20:19', 1, 5),
(12, '2', '2', '2024-03-30 16:20:24', 2, 5),
(13, '3', '3', '2024-03-31 19:57:20', 1, 5),
(15, '32', '32', '2024-03-30 16:20:46', 3, 5),
(16, '33', '33', '2024-03-30 16:20:51', 1, 5),
(24, 'aaaaaaaaaaaa', 'a', '2024-03-31 19:01:55', 5, 8),
(25, 'eeeeeeeeeeeeeeeeee', 'eeeeeeeeeeeeeeeeeeeee', '2024-03-31 19:24:03', 5, 9),
(26, 'eeeeeeeeeeeeeeeeeerrrrrrrrrrrrr', 'eeeeeeeeeeeeeeeeeeeee', '2024-03-31 19:43:00', 5, 9),
(29, 'สวส', '้่ิสา่ิวา่', '2024-03-31 20:09:55', 6, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(32) NOT NULL,
  `role` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `name`, `gender`, `email`, `role`) VALUES
(5, 'b', 'e9d71f5ee7c92d6dc9e92ffdad17b8bd49418f98', 'b', 'm', 'b@b.com', 'm'),
(8, 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'a', 'o', 'a@a.com', 'a'),
(9, 'f', '4a0a19218e082a343a1b17e5333409af9d98f0f5', 'f', 'o', 'f@f.com', 'm'),
(10, 'ืืืืn', 'd1854cae891ec7b29161ccaf79a24b00c274bdaa', 'n', 'f', 'n@n.com', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
