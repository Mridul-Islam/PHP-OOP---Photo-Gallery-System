-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 09:35 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `photo_id`, `author`, `body`) VALUES
(15, 15, 'Arfan', 'This is good'),
(16, 17, 'Shohan', 'This blue audi is rock..'),
(17, 21, 'Showrab', 'This is very large image...'),
(18, 25, 'Mridul Islam', 'This is very nice car'),
(19, 21, 'Shohan', 'This is a nice picture...');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  `alternate_text` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title`, `caption`, `description`, `filename`, `alternate_text`, `type`, `size`) VALUES
(15, 'Black Rolls-royce', 'Awesome car New caption', '<p>This is one of the best car in the world..</p>', 'black rolls-royce.jpg', '', 'image/jpeg', 7724),
(17, 'Blue Audi', '', '', 'blue audi.jpg', '', 'image/jpeg', 12793),
(18, 'Red Audi', '', '', 'red audi.jpg', '', 'image/jpeg', 189892),
(19, 'White Rolls-Royce', '', '', 'white rolls-royce.jpg', '', 'image/jpeg', 5796),
(20, 'White Audi', '', '', 'white_audi.jpg', '', 'image/jpeg', 10997),
(21, 'large photo', '', '', '_large_image_3.jpg', '', 'image/jpeg', 165053),
(22, 'Yellow Car', '', '', 'images-1 copy.jpg', '', 'image/jpeg', 28947),
(23, 'Lighting Car', '', '', 'images-4.jpg', '', 'image/jpeg', 23270),
(24, 'Accidental Car', '', '', 'images-15.jpg', '', 'image/jpeg', 28466),
(25, 'Image 40', '', '', 'images-40 copy.jpg', '', 'image/jpeg', 24385),
(26, 'Red Big Car', '', '', '_large_image_1.jpg', '', 'image/jpeg', 479843),
(27, 'Image 16', '', '', 'images-16.jpg', '', 'image/jpeg', 21133),
(28, 'Image 2', '', '', 'images_2.jpg', '', 'image/jpeg', 18578);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `user_image`) VALUES
(1, 'Mridul islam', 'mridul', 'Mridul ', 'Islam', 'IMG_1545.JPG'),
(34, 'Shamim Mridha', '12345', 'Shamim', 'Hossain', 'IMG_0950.JPG'),
(36, 'Azizul Haq', '12345', 'Azizul', 'Haq', 'IMG_1222.JPG'),
(37, 'Showrab Ahmed', '12345', 'Showrab', 'Ahmed', 'IMG_1522.JPG'),
(38, 'Shad', '12345', 'Shad', 'Khan', 'IMG_0802.JPG'),
(39, 'Shakil Khan', '12345', 'Shakil', 'Khan', 'IMG_1462.JPG'),
(40, 'Mahadi Hasan', '12345', 'Mahadi', ' Hasan', 'IMG_1217.JPG'),
(41, 'Biplob', '12345', 'Biplob', 'Khan', 'IMG_0398.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
