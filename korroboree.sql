-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 05:49 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `korroboree`
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
(1, 'admin@korroboree.com', 'passw123', 'kr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'ad@5d', 'password', '5d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ci_session`
--

CREATE TABLE `ci_session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_session`
--

INSERT INTO `ci_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0fg48iie06ta9i2b032mdoqvl7kdb6lm', '::1', 1615876382, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837363233373b),
('496p767fcvlrce0r5rr072bebag4gr8g', '::1', 1615874415, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837343431353b),
('6q463fbp47rq4lkj0lkokui8t70ikaib', '::1', 1615953772, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353935333737323b),
('6v7befoeljsm8obralnt5s5muo6k2ajn', '::1', 1615872694, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837323639343b),
('8sikm62q959am99suejb8m15imso9v1a', '::1', 1615872176, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837323137363b),
('96hog832napsfol758436oo7up6mhpek', '::1', 1615875029, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837353032393b),
('arr0ssujaobft0munhsk0nsk5t2cl7dg', '::1', 1615877539, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837373533393b),
('b7nbsqo0sf7l0a027fa2d4vb43e7gbib', '::1', 1615874887, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837343838373b),
('bb56p3s1mdni3u94k8745gmmaro3a0jq', '::1', 1615953010, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353935333031303b),
('divhr0k8atu3obj8fpq784tn7440ch9f', '::1', 1615876237, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837363233373b),
('enb1ohh679ioqafbcdldueeognsltbab', '::1', 1615873781, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837333738313b),
('ep7r8j1sqf8sgfk49as6gmu05c2hat0u', '::1', 1615954151, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353935343135313b),
('fmr6m3tt2pbg4el549ha5f1m67pt2hgf', '::1', 1615875920, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837353932303b),
('hcguvbv89d79lid25lpjh4p0c7fe37a8', '::1', 1615873227, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837333232373b),
('l7jsascj5hna5c1lbvj2mpvviekf40m5', '::1', 1615874088, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837343038383b),
('od4p10gaeti6fvsgqkm02vub8o6dcqif', '::1', 1615873767, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837333736373b),
('oei6ecnqnr6bcgq4g2007t1uk8nfhg3n', '::1', 1615871539, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837313533393b),
('ph1cpkk2ebh10b1l3vk7u1e4v9b3svo9', '::1', 1615873004, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837333030343b),
('r6tbnjkbi030el2rg9vj8105bv4coiei', '::1', 1615871872, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837313837323b),
('rgcq4fu22kbejkhbhnk4kv16hkfpq1km', '::1', 1615871235, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837313233353b),
('slte78vq9gb8m4qg42gniqnmnmjudcj6', '::1', 1615954492, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353935343439323b),
('ucf7ni8b4ippqhkse9cbuuvp9cajmvsk', '::1', 1615954782, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353935343439323b),
('vc7aev232earassvfpit965k9bq1dqt1', '::1', 1615877580, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837373533393b);

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
-- Table structure for table `topics_data_list`
--

CREATE TABLE `topics_data_list` (
  `id` int(11) NOT NULL,
  `topic_name` text NOT NULL,
  `topic_info` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics_data_list`
--

INSERT INTO `topics_data_list` (`id`, `topic_name`, `topic_info`, `create_date`) VALUES
(1, 'other', 'rajkumar', '2021-03-16 05:50:24'),
(2, 'no', '', '2021-03-16 05:53:32'),
(3, 'other', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', '2021-03-17 04:17:10'),
(4, 'other', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', '2021-03-17 04:17:53');

-- --------------------------------------------------------

--
-- Table structure for table `topics_data_list_1`
--

CREATE TABLE `topics_data_list_1` (
  `id` int(11) NOT NULL,
  `topics_name` text NOT NULL,
  `topic_type` varchar(255) NOT NULL,
  `topics_name_1` text NOT NULL,
  `topics_name_2` text NOT NULL,
  `topics_name_3` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics_data_list_1`
--

INSERT INTO `topics_data_list_1` (`id`, `topics_name`, `topic_type`, `topics_name_1`, `topics_name_2`, `topics_name_3`, `create_date`) VALUES
(1, 'cdscdscdsc', '', 'NOTE : Click on the same space to edit your answers.', 'NOTE : Click on the same space to edit your answers.', 'csacsa', '2021-03-16 06:33:02'),
(2, '', '', 'topic_3_c', 'topic_3_c', 'topic_3_c', '2021-03-17 04:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `topics_data_list_2`
--

CREATE TABLE `topics_data_list_2` (
  `id` int(11) NOT NULL,
  `topics_name_1` text NOT NULL,
  `topics_name_2` text NOT NULL,
  `topics_name_3` text NOT NULL,
  `topics_name_4` text NOT NULL,
  `topics_name_5` text NOT NULL,
  `topics_name_6` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics_data_list_2`
--

INSERT INTO `topics_data_list_2` (`id`, `topics_name_1`, `topics_name_2`, `topics_name_3`, `topics_name_4`, `topics_name_5`, `topics_name_6`, `created_date`) VALUES
(1, 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', '2021-03-17 04:13:08'),
(2, 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', '2021-03-17 04:13:25'),
(3, 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', '2021-03-17 04:13:46'),
(4, 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', 'Please what am i getting wrong,I have read some questions on this which isn\'t working for me. Thank you!', '2021-03-17 04:14:54');

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
-- Indexes for table `ci_session`
--
ALTER TABLE `ci_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

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
-- Indexes for table `topics_data_list`
--
ALTER TABLE `topics_data_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics_data_list_1`
--
ALTER TABLE `topics_data_list_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics_data_list_2`
--
ALTER TABLE `topics_data_list_2`
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
-- AUTO_INCREMENT for table `topics_data_list`
--
ALTER TABLE `topics_data_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `topics_data_list_1`
--
ALTER TABLE `topics_data_list_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `topics_data_list_2`
--
ALTER TABLE `topics_data_list_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `topic_info`
--
ALTER TABLE `topic_info`
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
