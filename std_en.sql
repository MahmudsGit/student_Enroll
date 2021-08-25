-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 04:54 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `std_en`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `school_name` varchar(250) NOT NULL,
  `roll_no` int(250) NOT NULL,
  `class_id` int(12) NOT NULL,
  `paid` int(250) NOT NULL,
  `phone` int(11) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `school_name`, `roll_no`, `class_id`, `paid`, `phone`, `picture`, `address`) VALUES
(6, 'first name', 'last name', 'abc', 1, 8, 1000, 1725878988, '_112171471_whatsubject.jpg', 'durgapur'),
(7, 'first name', 'last name', 'abc', 1, 8, 1000, 1725878988, '_112171471_whatsubject.jpg', 'durgapur'),
(9, 'golam', 'mehedi', 'dharampur', 1, 10, 1000, 1478545458, 'DSC_00650.jpg', 'durgapur'),
(10, 'Rabbi ', 'Hasan', 'charghat', 3, 6, 800, 1874525845, 'wolfgang-hasselmann-YS4wOSTQZw0-unsplash.jpg', 'Kachupara'),
(11, 'Pronto', 'Nik', 'kachupara', 70, 9, 1000, 1285454546, 'img19_1920x1200.jpg', 'rajshahi'),
(12, 'Pronto', 'Nik', 'kachupara', 70, 9, 1000, 1285454546, 'img19_1920x1200.jpg', 'rajshahi'),
(13, 'first name', 'last name', 'abc', 1, 8, 1000, 1725878988, '_112171471_whatsubject.jpg', 'durgapur'),
(14, 'first name', 'last name', 'abc', 1, 8, 1000, 1725878988, '_112171471_whatsubject.jpg', 'durgapur'),
(15, 'golam', 'mehedi', 'dharampur', 1, 10, 1000, 1478545458, 'DSC_00650.jpg', 'durgapur'),
(16, 'Rabbi ', 'Hasan', 'charghat', 3, 6, 800, 1874525845, 'wolfgang-hasselmann-YS4wOSTQZw0-unsplash.jpg', 'Kachupara'),
(17, 'Pronto', 'Nik', 'kachupara', 70, 9, 1000, 1285454546, 'img19_1920x1200.jpg', 'rajshahi'),
(18, 'Pronto', 'Nik', 'kachupara', 70, 9, 1000, 1285454546, 'img19_1920x1200.jpg', 'rajshahi'),
(19, 'first name', 'last name', 'abc', 1, 8, 1000, 1725878988, '_112171471_whatsubject.jpg', 'durgapur'),
(20, 'first name', 'last name', 'abc', 1, 8, 1000, 1725878988, '_112171471_whatsubject.jpg', 'durgapur'),
(21, 'golam', 'mehedi', 'dharampur', 1, 10, 1000, 1478545458, 'DSC_00650.jpg', 'durgapur'),
(22, 'Rabbi ', 'Hasan', 'charghat', 3, 6, 800, 1874525845, 'wolfgang-hasselmann-YS4wOSTQZw0-unsplash.jpg', 'Kachupara'),
(23, 'Pronto', 'Nik', 'kachupara', 70, 9, 1000, 1285454546, 'img19_1920x1200.jpg', 'rajshahi'),
(24, 'Pronto', 'Nik', 'kachupara', 70, 9, 1000, 1285454546, 'img19_1920x1200.jpg', 'rajshahi'),
(25, 'first name', 'last name', 'abc', 1, 8, 1000, 1725878988, '_112171471_whatsubject.jpg', 'durgapur'),
(26, 'first name', 'last name', 'abc', 1, 8, 1000, 1725878988, '_112171471_whatsubject.jpg', 'durgapur'),
(27, 'golam', 'mehedi', 'dharampur', 1, 10, 1000, 1478545458, 'DSC_00650.jpg', 'durgapur'),
(28, 'Rabbi ', 'Hasan', 'charghat', 3, 6, 800, 1874525845, 'wolfgang-hasselmann-YS4wOSTQZw0-unsplash.jpg', 'Kachupara'),
(29, 'Pronto', 'Nik', 'kachupara', 70, 9, 1000, 1285454546, 'img19_1920x1200.jpg', 'rajshahi'),
(30, 'Pronto', 'Nik', 'kachupara', 70, 9, 1000, 1285454546, 'img19_1920x1200.jpg', 'rajshahi'),
(31, 'sfsf', 'sdfdf', 'sdgfdfg', 123, 7, 250, 2147483647, 'DSC_00650.jpg', 'cdgadfg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'Admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
