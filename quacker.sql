-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 25, 2018 at 02:18 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zebbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `quacker`
--

CREATE TABLE `quacker` (
  `id` int(11) NOT NULL,
  `Quack` varchar(340) NOT NULL,
  `Waktu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quacker`
--

INSERT INTO `quacker` (`id`, `Quack`, `Waktu`) VALUES
(1, 'test', '25-01-2018 16:10:04'),
(2, 'test', '25-01-2018 16:10:53'),
(3, 'hoi kau nak apa ha', '25-01-2018 16:11:04'),
(4, 'NI ATAS KAN?', '25-01-2018 16:12:42'),
(5, 'tulis disini', '25-01-2018 16:19:17'),
(6, 'isi nya', '25-01-2018 16:42:34'),
(7, 'ayip', '25-01-2018 16:55:25'),
(8, 'This is a free online calculator which counts the number of characters or letters in a text, useful for your tweets on Twitter, as well as a multitude of other applications.This is a free online calculator which counts the number of characters or letters in a text, useful for', '25-01-2018 16:57:43'),
(9, 'This is a free online calculator which counts the number of characters or letters in a text, useful for your tweets on Twitter, as well as a multitude of other applications.This is a free online calculator which counts the number of characters or letters in a text, useful forletters in a text, useful forletters in a text, useful forletter', '25-01-2018 16:59:51'),
(10, 'blurb', '25-01-2018 17:02:42'),
(11, 'refresh 0', '25-01-2018 17:03:41'),
(12, 'lopek', '25-01-2018 17:04:12'),
(13, 'Quack dari fon bro', '25-01-2018 17:05:55'),
(14, 'bangah\r\n', '25-01-2018 17:07:39'),
(15, 'Ayip LO', '25-01-2018 17:07:44'),
(16, 'fsgfgfdgfg', '25-01-2018 17:26:53'),
(17, 'balong test ', '25-01-2018 21:11:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quacker`
--
ALTER TABLE `quacker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quacker`
--
ALTER TABLE `quacker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
