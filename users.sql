-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 03:40 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codecourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(7, 'test', 'test@gmail.com', '$2y$10$UkYf/6RW.ib/SQ0yHTqC3OVdfI4phegAnhqGU5yTViy8vBsw2Feju', '2018-10-11 14:46:30', '2018-10-11 14:46:30'),
(8, 'testtest', 'test111@gmail.com', '$2y$10$d/RamlKx1ULs8ytuJt9H3ORvwRJvMdm.q24eRZzK818uJUL/Y6W2W', '2018-10-12 14:20:15', '2018-10-12 14:20:15'),
(9, 'thenext', 'thenexttest@gmail.com', '$2y$10$4K1nhgLFgJ4tjIJozqcTf.DRPRt2C3dl9PRqXTSAJSqbovE.JYogG', '2018-10-12 15:43:09', '2018-10-12 15:43:09'),
(10, 'hello', 'hello@gmail.com', '$2y$10$GxWi.G1IWB4vS3BE.VTTu.kz6u5fg0lP/QY18c843VzE2ABSWlVR6', '2018-10-12 17:43:20', '2018-10-12 17:43:20'),
(11, 'some', 'some@gmail.com', '$2y$10$d4MZUh.aMlHW/8OsgylXkOWppHSZMxjsMfnzt4vj9442UXUkYVqCq', '2018-10-15 10:10:52', '2018-10-15 10:10:52'),
(12, 'testagain', 'testagain@gmail.com', '$2y$10$g66YP7qH/xXhWPgNWvI7P.Ejf0HyfznPW7fDQZK2n8Z5hr74aOY6i', '2018-10-16 10:11:11', '2018-10-16 11:32:38'),
(13, 'FuckConnor', 'olivertaylor3@yahoo.co.uk', '$2y$10$oho8DV8TQqDO5jGQP1uDv.Jx3NOzoQyvCpl2EWbxOwE9zq2NRs0i2', '2018-10-16 12:03:20', '2018-10-16 12:03:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
