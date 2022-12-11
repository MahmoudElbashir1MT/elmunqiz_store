-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 08:15 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone`, `password`, `city`, `address`) VALUES
(19, 'Ù…Ø­Ù…ÙˆØ¯ Ø§Ù„ÙƒÙ„Ø³', 'asas@gmail.com', '76865754673', '67b3baaa6e78ba2803d476a003dca7e4', 'Ø§Ù„Ø¯ÙˆÙŠÙ…', 'Ø´Ø§Ø±Ø¹ Ø¨Ø®Øª Ø§Ù„Ø±Ø¶Ø§ Ø§Ù„Ù…Ù†Ø§Ù‡Ø¬ '),
(22, 'ÙŠÙˆØ³Ù Ø§Ù„Ù„ÙˆØ·ÙŠ', 'asass@gmail.com', '45654', '67b3baaa6e78ba2803d476a003dca7e4', 'Ù‚Ø±ÙŠØ© 13', 'Ø§Ù„ÙØ§Ùˆ'),
(25, 'Ø§Ù„ØµØ§Ø¯Ù‚ Ø¬Ù„Ø®Ø©', 'asasss@gmail.com', '33', '67b3baaa6e78ba2803d476a003dca7e4', 'Ø§Ù„Ø®Ø±ÙˆØ¹Ø©', 'ÙˆÙ„Ø§ÙŠØ© Ø§Ù„Ø¬Ø²ÙŠØ±Ø© Ù…Ø­Ù„ÙŠØ© Ø§Ù„Ù…Ù†Ø§Ù‚Ù„'),
(27, 'Ø¯Ø¹Ø¨Ø§Ø´ Ø§Ù„ÙƒØ³Ø§Ø±', 'dabaash@gmail.com', '45654453', '67b3baaa6e78ba2803d476a003dca7e4', 'Ø§Ù„ÙÙƒÙŠ Ø¨Ø´ÙŠØ±', 'Ø§Ù„Ø¬Ø²ÙŠØ±Ø© Ø§Ù„Ù…Ù†Ø§Ù‚Ù„'),
(28, 'Ø¹Ø¸Ù…Ø© Ø§Ø§Ù„Ù†ÙˆØ§Ù…', 'azama@gmail.com', '768645754673', '67b3baaa6e78ba2803d476a003dca7e4', 'ØªÙƒØ³Ø¨ÙˆÙ†', 'Ø§Ù„Ø¬Ø¨Ù„ÙŠÙ†');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `active` varchar(3) NOT NULL,
  `description` text NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `active`, `description`, `pic`) VALUES
(13, 'Ø³Ø§Ø¹Ø§Øª', 'yes', 'Ù‚Ø³Ù… Ù…Ø®ØµØµ Ù„Ù„Ø³Ø§Ø¹Ø§Øª ÙÙ‚Ø·', 'watch.jpg'),
(14, 'Ù…Ù„Ø§Ø¨Ø³', 'yes', 'Ù‚Ø³Ù… Ù…Ø®ØµØµ Ù„Ù„Ù…Ù„Ø§Ø¨Ø³ ÙÙ‚Ø·', 'shirt.jpg'),
(15, 'ÙƒØ§Ù…ÙŠØ±Ø§Øª', 'yes', 'Ù‚Ø³Ù… Ù…Ø®ØµØµ Ù„Ù„ÙƒØ§Ù…ÙŠØ±Ø§Øª ÙÙ‚Ø·', 'camera.jpg'),
(19, 'Ø£Ø­Ø°ÙŠØ©', 'yes', 'Ù‚Ø³Ù… Ù…Ø®ØµØµ Ù„Ù„Ø§Ø­Ø°ÙŠØ© ÙÙ‚Ø·', 'charles.jpg'),
(20, 'Ù…Ø§ÙƒÙˆÙ„Ø§Øª', 'yes', 'Ù‚Ø³Ù… Ù…Ø®ØµØµ Ù„Ù„Ù…Ø§ÙƒÙˆÙ„Ø§Øª ÙÙ‚Ø·', 'menu-burger.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `active` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `pic`, `cat_id`, `active`) VALUES
(16, 'Ù‚Ù…ÙŠØµ', 'Ù‚Ù…ÙŠØµ Ø§Ø­Ù…Ø± Ø§Ù„Ù„ÙˆÙ†', 5330, 'HXR.jpg', 14, 'yes'),
(17, 'Ù‚Ù…ÙŠØµ', 'Ù‚Ù…ÙŠØµ ÙƒØ§Ø±ÙˆÙ‡Ø§Øª', 3000, 'pink.jpg', 14, 'yes'),
(18, 'Ù‚Ù…ÙŠØµ', 'Ù‚Ù…ÙŠØµ Ù†Øµ ÙƒÙ… ', 3000, 'charles.jpg', 14, 'yes'),
(19, 'Ù‚Ù…ÙŠØµ', 'Ù‚Ù…ÙŠØµ Ù†Øµ ÙƒÙ… ', 3000, 'charles.jpg', 14, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `site_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `site_name`) VALUES
(1, 'المنقذ الإلكتروني');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `type` enum('normal','super','admin','superadmin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `city`, `address`, `type`) VALUES
(2, 'ÙŠÙˆØ³Ù Ø³Ù„ÙŠÙ…Ø§Ù†', 'asass@gmail.com', '67b3baaa6e78ba2803d476a003dca7e4', '7686575467', 'Ù‚Ø±ÙŠØ© 13', 'Ø§Ù„ÙØ§Ùˆ', 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
