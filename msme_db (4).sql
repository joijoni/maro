-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 12:12 AM
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
-- Database: `msme_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `street` varchar(222) NOT NULL,
  `city` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `slug` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--


-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

CREATE TABLE `industry` (
  `industry_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industry`
--

INSERT INTO `industry` (`industry_id`, `name`, `description`) VALUES
(1, 'Agriculture', 'Agriculture'),
(2, 'Fashion', 'Fashion'),
(3, 'Banking', 'Banking');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `incoming_message` varchar(1000) NOT NULL,
  `response` varchar(500) NOT NULL,
  `link` varchar(225) NOT NULL,
  `image` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `industry_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `query_id` int(11) NOT NULL,
  `incoming_message` varchar(225) NOT NULL,
  `response` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL,
  `status_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `industry_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queries`
--
-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `resource_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `summary` varchar(225) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `incoming_message` varchar(1000) NOT NULL,
  `response` varchar(500) NOT NULL,
  `image` text NOT NULL,
  `link` varchar(225) NOT NULL,
  `status_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `industry_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resources`
--
-------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `name`) VALUES
(1, 'external'),
(2, 'internal');

-- --------------------------------------------------------

--
-- Table structure for table `templatecategory`
--

CREATE TABLE `templatecategory` (
  `templatecategory_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `templatecategory`
--

INSERT INTO `templatecategory` (`templatecategory_id`, `name`) VALUES
(1, 'sales and marketing'),
(2, 'accounting'),
(3, 'business development'),
(4, 'financial planning');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `template_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `incoming_message` varchar(225) NOT NULL,
  `response` varchar(225) NOT NULL,
  `dlink` varchar(225) NOT NULL,
  `status_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `templatecategory_id` int(11) NOT NULL,
  `templatetype_id` int(11) NOT NULL,
  `industry_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `templates`
--
 --------------------------------------------------------

--
-- Table structure for table `templatetype`
--

CREATE TABLE `templatetype` (
  `templatetype_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `icon` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `templatetype`
--

INSERT INTO `templatetype` (`templatetype_id`, `name`, `icon`) VALUES
(1, 'doc', 'fa-file-word-o'),
(2, 'xls', 'fa-file-excel-o'),
(3, 'pdf', 'fa-file-pdf-o'),
(4, 'ppt', 'fa-file-powerpoint-o'),
(5, 'zip', 'fa-file-archive-o'),
(6, 'txt', 'fa-file-text-o'),
(7, 'img', 'fa-file-image-o'),
(8, 'video', 'fa-file-video-o'),
(9, 'audio', 'fa-file-audio-o'),
(10, 'other', 'fa-file-o');
-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `name`) VALUES
(1, 'private'),
(2, 'public');
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `occupation` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `industry_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `industry`
--
ALTER TABLE `industry`
  ADD PRIMARY KEY (`industry_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `user_id_fk_idx` (`user_id`),
  ADD KEY `status_id_fk_idx` (`status_id`),
  ADD KEY `industry_id_fk_idx` (`industry_id`),
  ADD KEY `category_id_fk_idx` (`category_id`),
  ADD KEY `type_id_fk_idx` (`type_id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`query_id`),
  ADD KEY `status_id_fk_idx` (`status_id`),
  ADD KEY `industry_id_fk_idx` (`industry_id`),
  ADD KEY `category_id_fk_idx` (`category_id`),
  ADD KEY `type_id_fk_idx` (`type_id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`resource_id`),
  ADD KEY `status_id_fk_idx` (`status_id`),
  ADD KEY `industry_id_fk_idx` (`industry_id`),
  ADD KEY `category_id_fk_idx` (`category_id`),
  ADD KEY `type_id_fk_idx` (`type_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `templatecategory`
--
ALTER TABLE `templatecategory`
  ADD PRIMARY KEY (`templatecategory_id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`template_id`),
  ADD KEY `status_id_fk_idx` (`status_id`),
  ADD KEY `industry_id_fk_idx` (`industry_id`),
  ADD KEY `category_id_fk_idx` (`category_id`),
  ADD KEY `templatecategory_id_fk_idx` (`templatecategory_id`),
  ADD KEY `templatetype_id_fk_idx` (`templatetype_id`),
  ADD KEY `type_id_fk_idx` (`type_id`);

--
-- Indexes for table `templatetype`
--
ALTER TABLE `templatetype`
  ADD PRIMARY KEY (`templatetype_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `industry_id_fk_idx` (`industry_id`),
  ADD KEY `designation_id_fk_idx` (`designation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `industry`
--
ALTER TABLE `industry`
  MODIFY `industry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `query_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `resource_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `templatecategory`
--
ALTER TABLE `templatecategory`
  MODIFY `templatecategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `template_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `templatetype`
--
ALTER TABLE `templatetype`
  MODIFY `templatetype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`industry_id`) REFERENCES `industry` (`industry_id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `products_ibfk_4` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`);

--
-- Constraints for table `queries`
--
ALTER TABLE `queries`
  ADD CONSTRAINT `queries_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`),
  ADD CONSTRAINT `queries_ibfk_2` FOREIGN KEY (`industry_id`) REFERENCES `industry` (`industry_id`),
  ADD CONSTRAINT `queries_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `queries_ibfk_4` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`);

--
-- Constraints for table `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `resources_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`),
  ADD CONSTRAINT `resources_ibfk_2` FOREIGN KEY (`industry_id`) REFERENCES `industry` (`industry_id`),
  ADD CONSTRAINT `resources_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `resources_ibfk_4` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`);

--
-- Constraints for table `templates`
--
ALTER TABLE `templates`
  ADD CONSTRAINT `templates_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`),
  ADD CONSTRAINT `templates_ibfk_2` FOREIGN KEY (`industry_id`) REFERENCES `industry` (`industry_id`),
  ADD CONSTRAINT `templates_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `templates_ibfk_4` FOREIGN KEY (`templatecategory_id`) REFERENCES `templatecategory` (`templatecategory_id`),
  ADD CONSTRAINT `templates_ibfk_5` FOREIGN KEY (`templatetype_id`) REFERENCES `templatetype` (`templatetype_id`),
  ADD CONSTRAINT `templates_ibfk_6` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`designation_id`) REFERENCES `designation` (`designation_id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`industry_id`) REFERENCES `industry` (`industry_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
