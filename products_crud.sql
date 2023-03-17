-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 17, 2023 at 03:20 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(512) NOT NULL,
  `description` longtext,
  `image` varchar(2024) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `price`, `create_date`) VALUES
(26, 'Composer', 'PHP Tool', 'images/dWnpUWHl/composer-logo.png', '300.00', '2023-03-12 19:09:21'),
(28, 'PHP', 'Back-end technology', 'images/tqO9pDAw/php.png', '500.00', '2023-03-12 19:13:16'),
(29, 'MySQL', 'DB', 'images/jWyuaRle/mysql-logo.png', '400.00', '2023-03-12 21:39:37'),
(31, 'JS', 'Front-end technology', 'images/QY0s2DkF/js-logo.png', '500.00', '2023-03-17 14:45:18'),
(33, 'PDO', 'PHP Data Object', 'images/7MlHO2Eo/pdo-logo.jpeg', '350.00', '2023-03-17 14:51:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
