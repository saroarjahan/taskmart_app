-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2019 at 09:43 PM
-- Server version: 10.1.40-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snapkdlp_tasks`
--

-- --------------------------------------------------------

--
-- Table structure for table `completed_tasks`
--

CREATE TABLE `completed_tasks` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `user_id` varchar(128) NOT NULL DEFAULT '',
  `tags` varchar(256) NOT NULL DEFAULT '',
  `reward` int(11) NOT NULL,
  `S1` varchar(1000) NOT NULL,
  `S2` varchar(1000) NOT NULL,
  `S3` varchar(1000) NOT NULL,
  `S4` varchar(1000) NOT NULL,
  `session_id` varchar(100) NOT NULL DEFAULT '',
  `valid` int(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userAgent` varchar(1000) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `completed_tasks`
--

INSERT INTO `completed_tasks` (`id`, `task_id`, `user_id`, `tags`, `reward`, `S1`, `S2`, `S3`, `S4`, `session_id`, `valid`, `created`, `userAgent`) VALUES
(1, -1, '', '', 0, 'NA', 'NA', 'NA', 'NA', '5d1b41ae54d4d', 1, '2019-07-02 14:36:15', '{\"ip\":\"::1\",\"useragent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/75.0.3770.100 Safari\\/537.36\",\"referer\":\"http:\\/\\/localhost\\/saroarmp\\/demotask\\/\"}'),
(2, -1, '', '', 0, 'NA', 'NA', 'NA', 'NA', '5d1b41ae54d4d', 1, '2019-07-02 14:37:53', '{\"ip\":\"::1\",\"useragent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/75.0.3770.100 Safari\\/537.36\",\"referer\":\"http:\\/\\/localhost\\/saroarmp\\/demotask\\/\"}'),
(3, -1, '', '', 0, 'NA', 'NA', 'NA', 'NA', '5d1b41ae54d4d', 1, '2019-07-02 14:38:33', '{\"ip\":\"::1\",\"useragent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/75.0.3770.100 Safari\\/537.36\",\"referer\":\"http:\\/\\/localhost\\/saroarmp\\/demotask\\/\"}'),
(4, -1, '', '', 3, 'NA', 'NA', 'NA', 'NA', '5d1b41ae54d4d', 1, '2019-07-02 14:39:45', '{\"ip\":\"::1\",\"useragent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/75.0.3770.100 Safari\\/537.36\",\"referer\":\"http:\\/\\/localhost\\/saroarmp\\/demotask\\/\"}'),
(5, -1, '', '', 3, 'NA', 'NA', 'NA', 'NA', '5d1b41ae54d4d', 1, '2019-07-02 14:40:51', '{\"ip\":\"::1\",\"useragent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/75.0.3770.100 Safari\\/537.36\",\"referer\":\"http:\\/\\/localhost\\/saroarmp\\/demotask\\/\"}'),
(6, -1, 'NA', '', 3, 'NA', 'NA', 'NA', 'NA', '5d1b42fe42d79', 1, '2019-07-02 14:42:38', '{\"ip\":\"::1\",\"useragent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/75.0.3770.100 Safari\\/537.36\",\"referer\":\"http:\\/\\/localhost\\/saroarmp\\/demotask\\/\"}'),
(7, -1, 'NA', '', 3, 'NA', 'NA', 'NA', 'NA', '5d1b42fe42d79', 1, '2019-07-02 14:43:44', '{\"ip\":\"::1\",\"useragent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/75.0.3770.100 Safari\\/537.36\",\"referer\":\"http:\\/\\/localhost\\/saroarmp\\/demotask\\/\"}'),
(8, -1, 'NA', '', 3, 'NA', 'NA', 'NA', 'NA', '5d1b4371cd393', 1, '2019-07-02 14:43:47', '{\"ip\":\"::1\",\"useragent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/75.0.3770.100 Safari\\/537.36\",\"referer\":\"http:\\/\\/localhost\\/saroarmp\\/demotask\\/\"}'),
(9, -1, 'NA', '', 3, 'NA', 'NA', 'NA', 'NA', '5d1e1ceb123bb', 1, '2019-07-04 11:36:12', '{\"ip\":\"130.231.165.243\",\"useragent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/75.0.3770.100 Safari\\/537.36\",\"referer\":\"http:\\/\\/taskmart.online\\/php\\/demotask\\/\"}'),
(10, -1, 'NA', '', 3, 'NA', 'NA', 'NA', 'NA', '5d1e1ceb123bb', 1, '2019-07-04 11:36:16', '{\"ip\":\"130.231.165.243\",\"useragent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/75.0.3770.100 Safari\\/537.36\",\"referer\":\"http:\\/\\/taskmart.online\\/php\\/demotask\\/\"}'),
(11, -1, 'NA', '', 3, 'NA', 'NA', 'NA', 'NA', '5d1e1ceb123bb', 1, '2019-07-04 11:36:20', '{\"ip\":\"130.231.165.243\",\"useragent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/75.0.3770.100 Safari\\/537.36\",\"referer\":\"http:\\/\\/taskmart.online\\/php\\/demotask\\/\"}'),
(12, -1, 'NA', '', 3, 'NA', 'NA', 'NA', 'NA', '5d1e1ceb123bb', 1, '2019-07-04 11:37:12', '{\"ip\":\"130.231.165.243\",\"useragent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/75.0.3770.100 Safari\\/537.36\",\"referer\":\"http:\\/\\/taskmart.online\\/php\\/demotask\\/\"}'),
(13, -1, 'NA', '', 3, 'NA', 'NA', 'NA', 'NA', '5d1e1d2bd82bb', 1, '2019-07-04 11:37:17', '{\"ip\":\"130.231.165.243\",\"useragent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/75.0.3770.100 Safari\\/537.36\",\"referer\":\"http:\\/\\/taskmart.online\\/php\\/demotask\\/\"}'),
(14, -1, 'NA', '', 3, 'NA', 'NA', 'NA', 'NA', '5d1e1d2bd82bb', 1, '2019-07-04 11:37:20', '{\"ip\":\"130.231.165.243\",\"useragent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/75.0.3770.100 Safari\\/537.36\",\"referer\":\"http:\\/\\/taskmart.online\\/php\\/demotask\\/\"}'),
(15, -1, 'NA', '', 1, 'NA', 'NA', 'NA', 'NA', '5d1e1e1fed58a', 1, '2019-07-04 11:41:42', '{\"ip\":\"130.231.165.243\",\"useragent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/75.0.3770.100 Safari\\/537.36\",\"referer\":\"http:\\/\\/taskmart.online\\/php\\/demotask\\/\"}'),
(16, -1, 'NA', '', 1, 'NA', 'NA', 'NA', 'NA', '5d1e1e1fed58a', 1, '2019-07-04 11:41:45', '{\"ip\":\"130.231.165.243\",\"useragent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/75.0.3770.100 Safari\\/537.36\",\"referer\":\"http:\\/\\/taskmart.online\\/php\\/demotask\\/\"}'),
(17, -1, 'NA', '', 1, 'NA', 'NA', 'NA', 'NA', '5d233f56ba40d', 1, '2019-07-08 09:04:24', '{\"ip\":\"130.231.165.243\",\"useragent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/75.0.3770.100 Safari\\/537.36\",\"referer\":\"http:\\/\\/taskmart.online\\/php\\/demotask\\/\"}');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(11) NOT NULL,
  `user_id` varchar(128) NOT NULL,
  `valid` int(1) NOT NULL DEFAULT '1',
  `tags` varchar(128) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `user_id`, `valid`, `tags`, `created`) VALUES
(26, 'boom', 1, '', '2019-06-05 12:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `reward` decimal(18,2) NOT NULL,
  `URL` varchar(1000) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(1000) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `reward`, `URL`, `created`, `image`) VALUES
(-1, 'Test title', 'Test description', '1.00', 'https://google.com', '2019-06-05 12:14:37', 'http://taskmart.online/static/css/image/task.jpg'),
(5, 'Test title 2', 'Test description 2', '2.00', 'https://google.com', '2019-06-05 12:14:37', 'http://taskmart.online/static/css/image/task.jpg'),
(6, 'Test title 3', 'Task number 3', '2.00', 'https://task3.com', '2019-06-05 12:14:37', 'http://taskmart.online/static/css/image/task.jpg'),
(7, 'Test title 5', 'Test description 5', '1.00', 'https://google.com', '2019-06-05 12:14:37', 'http://taskmart.online/static/css/image/task.jpg'),
(8, 'Test title 6', 'Test description 6', '1.00', 'https://google.com', '2019-06-05 12:14:37', 'http://taskmart.online/static/css/image/task.jpg'),
(9, 'Test title 7', 'Test description 7', '1.00', 'https://google.com', '2019-06-05 12:14:37', 'http://taskmart.online/static/css/image/task.jpg'),
(10, 'Test title 8', 'Test description 8', '1.00', 'https://google.com', '2019-06-05 12:14:37', 'http://taskmart.online/static/css/image/task.jpg'),
(39, 'Title', 'write description', '10.00', 'http://taskmart.online/php/taskedit.php', '2019-07-16 11:35:06', 'http://taskmart.online/static/css/image/task.jpg'),
(55, 'This is Title', 'This is description', '11.00', 'http://taskmart.online/php/taskedit.php', '2019-07-17 20:43:05', 'http://taskmart.online/static/css/image/task.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `completed_tasks`
--
ALTER TABLE `completed_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `completed_tasks`
--
ALTER TABLE `completed_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
