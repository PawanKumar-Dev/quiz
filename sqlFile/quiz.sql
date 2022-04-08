-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 02:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answer_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `q_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answer_id`, `answer`, `q_id`) VALUES
(1, 'Hyper Masking Language', 1),
(2, 'HyperLink Messaging Language', 1),
(3, 'HyperText Markup Language', 1),
(4, 'HyperLink Markup Language', 1),
(5, 'Personal Homepage', 2),
(6, 'Page Hyperlink Process', 2),
(7, 'HyperText PreProcessor', 2),
(8, 'Persoanl HyperLink Page', 2),
(9, 'Structure Question Language', 3),
(10, 'Structured Query Language', 3),
(11, 'Sequal Question Language', 3),
(12, 'Semantic Query Langauge', 3),
(17, 'PHP Example Amplified Resolution', 10),
(18, 'PHP Extension and Application Repository', 10),
(19, 'Pear Evaluation Amplified Repository', 10),
(20, 'Pear Extension And Repo', 10),
(33, 'Bootstrap', 14),
(34, 'Salesforce', 14),
(35, 'React', 14),
(36, 'CodeIgniter', 14);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer_id`) VALUES
(1, 'What does HTML stand for?', 3),
(2, 'What is the full form of PHP?', 7),
(3, 'What is SQL?', 10),
(10, 'What does PEAR stands for?', 18),
(14, 'Which one is the popular framework in PHP?', 36);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
