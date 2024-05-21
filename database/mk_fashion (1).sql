-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 06:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mk_fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(100) NOT NULL,
  `category` varchar(200) NOT NULL,
  `category_image` varchar(200) NOT NULL,
  `craeted_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `category_image`, `craeted_at`) VALUES
(1, 'Bridal', '1715171704IMG-20240508-WA0107.jpg', '2024-05-08'),
(2, 'Party Wear', '1715235420bridel.png', '2024-05-08'),
(3, 'Women', '1715172333IMG-20240508-WA0100.jpg', '2024-05-08'),
(6, 'Party Wear', '1715668917f2.jpg', '2024-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `mobile`, `city`, `created_at`) VALUES
(1, 'ali malik', 'ali@gmail.com', '12345', '032444444', 'Bahawalpur', '2024-05-09'),
(2, 'Rizwan BHAI', 'rizwanbhutta903@gmail.com', '123', '', '', '2024-05-13'),
(3, '', 'Admin', 'Admin', '', '', '2024-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `product_price` int(200) NOT NULL,
  `category_id` int(100) NOT NULL,
  `product_description` text NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `status` int(100) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_image`, `product_price`, `category_id`, `product_description`, `created_at`, `status`) VALUES
(1, 'Fairy Dress', '17152369451715174282IMG-20240508-WA0152.jpg', 250000, 2, 'M.K Fashion House(Clothing Brand) Clothes your dream.....\r\nArticles : Party Wears & Bridal Wears (Purchased by Order, Customization is Avaible)', '2024-05-08', 2),
(3, 'Bridal Fairy', '1715249988IMG-20240508-WA0104.jpg', 350000, 1, 'M.K Fashion House(Clothing Brand) Clothes your dream.....\r\nArticles : Party Wears & Bridal Wears (Purchased by Order, Customization is Avaible)', '2024-05-08', 2),
(8, 'white bridel maxi', '1715316044IMG-20240508-WA0125.jpg', 120000, 1, 'M.K Fashion House(Clothing Brand) Clothes your dream..... Articles : Party Wears & Bridal Wears (Purchased by Order, Customization is Avaible)', '2024-05-10', 1),
(9, 'Purple Party dress', '1715316111IMG-20240508-WA0096.jpg', 100000, 2, 'M.K Fashion House(Clothing Brand) Clothes your dream..... Articles : Party Wears & Bridal Wears (Purchased by Order, Customization is Avaible)', '2024-05-10', 1),
(10, 'Black Party wear Dress', '1715316254SSP09333.JPG', 50000, 2, 'M.K Fashion House(Clothing Brand) Clothes your dream..... Articles : Party Wears & Bridal Wears (Purchased by Order, Customization is Avaible)', '2024-05-10', 2),
(11, 'white Party wear Dress', '1715316341IMG-20240508-WA0112.jpg', 20000, 1, 'M.K Fashion House(Clothing Brand) Clothes your dream..... Articles : Party Wears & Bridal Wears (Purchased by Order, Customization is Avaible)', '2024-05-10', 2),
(12, 'White fairy bridal', '1715407235m2.jpg', 120000, 1, 'M.K Fashion House(Clothing Brand) Clothes your dream..... Articles : Party Wears & Bridal Wears (Purchased by Order, Customization is Avaible)', '2024-05-11', 1),
(13, 'Bridal Fairy', '1715575521IMG-20240508-WA0169.jpg', 1200000, 2, 'M.K Fashion House(Clothing Brand) Clothes your dream..... Articles : Party Wears & Bridal Wears (Purchased by Order, Customization is Avaible)', '2024-05-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'user',
  `status` int(100) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `image`, `email`, `mobile`, `role`, `status`) VALUES
(1, 'kashi malik', '1234', '1715486769WhatsApp Image 2024-01-16 at 21.36.15_06392e3b.jpg', 'kashii@gmail.com', '03246376711', 'admin', 1),
(2, 'Admin', '123', '1715347991IMG-20240508-WA0091.jpg', 'rizwangulzar903@gmail.com', '03084248903', 'user', 1),
(3, 'kashi malik', '12345', '', 'kashii@gmail.com', '03246376714', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_messages`
--

CREATE TABLE `users_messages` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `status` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_messages`
--

INSERT INTO `users_messages` (`id`, `name`, `email`, `message`, `status`) VALUES
(1, '', 'rizwangulzar903@gmail.com', 'ds', 1),
(2, 'Rizwan gulzar', 'rizwangulzar903@gmail.com', 'ds', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_messages`
--
ALTER TABLE `users_messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_messages`
--
ALTER TABLE `users_messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
