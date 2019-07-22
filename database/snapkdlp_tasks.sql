-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2019 at 10:21 PM
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
  `task_secrete` varchar(1000) NOT NULL,
  `user_id` varchar(128) NOT NULL DEFAULT '',
  `tags` varchar(256) NOT NULL DEFAULT '',
  `reward` int(11) NOT NULL,
  `session_id` varchar(100) NOT NULL DEFAULT '',
  `valid` int(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userAgent` varchar(1000) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `completed_tasks`
--

INSERT INTO `completed_tasks` (`id`, `task_secrete`, `user_id`, `tags`, `reward`, `session_id`, `valid`, `created`, `userAgent`) VALUES
(42, '2147483647', 'google-oauth2|109346374245203627270', '', 5, '', 1, '2019-07-20 21:52:29', ''),
(43, '8990261280', 'google-oauth2|109346374245203627270', '', 5, '', 1, '2019-07-20 21:54:37', ''),
(44, '136216080', 'google-oauth2|109346374245203627270', '', 10, '', 1, '2019-07-20 21:59:24', '');

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
  `secrete` varchar(1000) NOT NULL,
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

INSERT INTO `tasks` (`id`, `secrete`, `title`, `description`, `reward`, `URL`, `created`, `image`) VALUES
(1, '', 'Test title 3', 'Task number 3', '2.00', 'https://task3.com', '2019-06-05 12:14:37', 'http://taskmart.online/static/css/image/task.jpg'),
(2, '', 'Test title 5', 'Test description 5', '1.00', 'https://google.com', '2019-06-05 12:14:37', 'http://taskmart.online/static/css/image/task.jpg'),
(3, '', 'Test title 7', 'Test description 7', '1.00', 'https://google.com', '2019-06-05 12:14:37', 'http://taskmart.online/static/css/image/task.jpg'),
(4, '', 'Title', 'write description', '10.00', 'http://taskmart.online/php/taskedit.php', '2019-07-16 11:35:06', 'http://taskmart.online/static/css/image/task.jpg'),
(5, '', 'This is Title', 'This is description', '11.00', 'http://taskmart.online/php/taskedit.php', '2019-07-17 20:43:05', 'http://taskmart.online/static/css/image/task.jpg'),
(6, '', 'This is new Title', 'submit of new post', '5.00', 'http://taskmart.online/php/taskedit.php', '2019-07-17 23:48:04', 'http://taskmart.online/static/css/image/task.jpg'),
(7, '136216080', 'task', 'descriptipns', '10.00', 'http://taskmart.online/php/taskedit.php', '2019-07-18 20:36:11', 'http://taskmart.online/static/css/image/task.jpg'),
(8, '8990261280', 'Title2', 'descriptipns', '5.00', 'http://taskmart.online/php/taskedit.php', '2019-07-18 20:41:05', 'http://taskmart.online/static/css/image/task.jpg'),
(68, '120960', 'tile', 'descriptipns', '15.00', 'http://taskmart.online/php/taskedit.php', '2019-07-18 20:43:54', 'http://taskmart.online/static/css/image/task.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
