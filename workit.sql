-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2018 at 10:59 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workit`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `TIME` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Firstname`, `lastname`, `email`, `username`, `password`, `TIME`) VALUES
(1, 'alfred', 'johnson', 'johnsonmessilo19@gmail.com', 'ceofred', '$2y$10$OQ7Tv6QM2246mHOTn4R5/un9VlAfBL3o4VGP7.B0vlgsFBMMBnyAm', '2018-03-18 16:43:41'),
(2, 'alfred', 'johnson', 'johnsonmessilo19@gmail.com', 'opo', '$2y$10$IY67cCxIpF4b7ah3V0wYl.JVArO2h05xw70i4gOCU7QLX1FQM98Vu', '2018-03-18 16:51:29'),
(3, 'chike', 'fed', 'johnsonmessilo19@gmail.com', 'frd', '$2y$10$GnEgcvZ9zfHAqjVRNVKXhusTM9aqd0jr2rVmEstSjeayTaJoloyAq', '2018-03-21 13:19:05'),
(4, 'junior', 'ntomchukwu', 'jay@gmail.com', 'jayman', '$2y$10$1cglCzKYii5hlt1EqzxWre68WURFGnWtLc5fkAmebYRvbtHdJg2N.', '2018-03-22 09:35:27');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
