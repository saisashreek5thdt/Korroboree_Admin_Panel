-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 09:44 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kr`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(252) NOT NULL,
  `activity` varchar(999) DEFAULT NULL,
  `topic_id` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(252) NOT NULL,
  `username` varchar(999) DEFAULT NULL,
  `password` varchar(999) DEFAULT NULL,
  `user_type` varchar(999) DEFAULT NULL,
  `project` int(252) DEFAULT NULL,
  `episodes` int(252) DEFAULT NULL,
  `topics` int(252) DEFAULT NULL,
  `user_data` int(252) DEFAULT NULL,
  `file` int(252) DEFAULT NULL,
  `tracker` int(252) DEFAULT NULL,
  `error` int(252) DEFAULT NULL,
  `access` int(252) DEFAULT NULL,
  `dates` int(252) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `user_type`, `project`, `episodes`, `topics`, `user_data`, `file`, `tracker`, `error`, `access`, `dates`) VALUES
(1, 'admin@kr', 'passw123', 'kr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'ad@5d', 'password', '5d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

CREATE TABLE `episode` (
  `id` int(252) NOT NULL,
  `episode_number` varchar(999) DEFAULT NULL,
  `title` varchar(999) DEFAULT NULL,
  `month` varchar(999) DEFAULT NULL,
  `story_board` varchar(999) DEFAULT NULL,
  `dates` int(252) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `id` int(252) NOT NULL,
  `episode` varchar(999) DEFAULT NULL,
  `title` varchar(999) DEFAULT NULL,
  `topic_number` varchar(999) DEFAULT NULL,
  `month` varchar(999) DEFAULT NULL,
  `dates` int(252) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `topic_info`
--

CREATE TABLE `topic_info` (
  `id` int(252) NOT NULL,
  `title` varchar(999) DEFAULT NULL,
  `about` varchar(999) DEFAULT NULL,
  `status` varchar(999) DEFAULT NULL,
  `dates` int(252) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic_info`
--
ALTER TABLE `topic_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `episode`
--
ALTER TABLE `episode`
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topic_info`
--
ALTER TABLE `topic_info`
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
