-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2024 at 05:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edm_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `email`, `password`) VALUES
(1, 'johndoe@gmail.com', '$2y$10$k/TZvMUCr7w4plt64RnHl.B490kewzXi4fER6Teji8Zm.MeAjI0rq'),
(2, 'vins@gmail.com', '$2y$10$lE8KGHpJR.tqHoYtCGSDFet25yMXFV5TIX9SLWGGxEhC76/muvgka'),
(3, 'test2@gmail.com', '$2y$10$bxEalaXNvdUMW783H5tN/e6r9El0fQzE/hXRVVDcziBY1VNtK2IfO'),
(4, 'chaewon@maganda.com', '$2y$10$mFa8e/BgVjo6YypVGL9gSewTAC7AjuNO0LuAZcXlbegmHfHU.ZjfC'),
(5, 'joren@email.com', '$2y$10$Xer/yOBiQj/n2xrxlV2Lu.d6ha2kOlt0BrCx8tBwZ7Y6/OYZcRekq'),
(6, 'diddy@party.com', '$2y$10$d2SfLJ6Y8IhGb8E8hbV9PObXbx43CkmYFk5mbVh3l0NwnllujEz5G');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `UID` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`UID`, `fname`, `lname`, `DOB`) VALUES
(1, 'john', 'doe', '2003-10-16'),
(2, 'vins', 'ren', '2000-10-11'),
(3, 'test', 'ttest2', '2024-10-30'),
(4, 'Chaewon Love', 'Joren', '2024-09-09'),
(5, 'joren', 'hyeung-nim', '2024-09-09'),
(6, 'DIddy', 'Party', '9999-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `users_todo`
--

CREATE TABLE `users_todo` (
  `id` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `TODO` text NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `DateToDo` date NOT NULL,
  `Created` datetime DEFAULT NULL,
  `Modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_todo`
--

INSERT INTO `users_todo` (`id`, `UID`, `TODO`, `completed`, `DateToDo`, `Created`, `Modified`) VALUES
(1, 2, 'asdasd', 0, '2024-10-31', '2024-10-18 05:48:57', '0000-00-00 00:00:00'),
(2, 2, 'test 2', 0, '2024-10-31', '2024-10-18 06:26:09', '0000-00-00 00:00:00'),
(3, 3, 'todo 1', 0, '2024-10-31', '2024-10-18 06:33:42', '0000-00-00 00:00:00'),
(4, 4, 'ohh frr', 0, '2024-10-19', '2024-10-18 11:45:31', '0000-00-00 00:00:00'),
(5, 5, 'read manhwa', 0, '0322-02-23', '2024-10-18 16:14:14', '0000-00-00 00:00:00'),
(6, 5, '9 PM sleep', 0, '2024-09-09', '2024-10-18 16:14:44', '0000-00-00 00:00:00'),
(7, 5, 'watch love next door last episode', 0, '2024-09-09', '2024-10-18 16:14:57', '0000-00-00 00:00:00'),
(8, 1, 'adasd', 0, '2020-12-09', '2024-10-18 16:40:38', '0000-00-00 00:00:00'),
(10, 1, 'joren is cute', 1, '2002-09-09', '2024-10-18 16:51:13', '0000-00-00 00:00:00'),
(11, 5, 'spread misinformation online', 0, '2002-12-09', '2024-10-18 17:22:36', '0000-00-00 00:00:00'),
(12, 5, 'oakwokoakokwa', 0, '9999-09-09', '2024-10-18 17:23:15', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD KEY `UID` (`UID`);

--
-- Indexes for table `users_todo`
--
ALTER TABLE `users_todo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UID` (`UID`),
  ADD KEY `UID_2` (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_todo`
--
ALTER TABLE `users_todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_info`
--
ALTER TABLE `users_info`
  ADD CONSTRAINT `users_info_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `users` (`UID`) ON UPDATE CASCADE;

--
-- Constraints for table `users_todo`
--
ALTER TABLE `users_todo`
  ADD CONSTRAINT `users_todo_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `users` (`UID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
