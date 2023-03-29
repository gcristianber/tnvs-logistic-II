-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 04:23 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `log_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `log1_inv_categories`
--

CREATE TABLE `log1_inv_categories` (
  `whs_category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log1_inv_categories`
--

INSERT INTO `log1_inv_categories` (`whs_category_id`, `category_name`) VALUES
(1, 'vehicles'),
(2, 'electronics'),
(3, 'office supplies'),
(4, 'foods and beverages');

-- --------------------------------------------------------

--
-- Table structure for table `log1_whs_inventory`
--

CREATE TABLE `log1_whs_inventory` (
  `item_id` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `item_description` text NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log1_whs_inventory`
--

INSERT INTO `log1_whs_inventory` (`item_id`, `item_name`, `category_id`, `item_description`, `manufacturer`, `quantity`) VALUES
('001', 'Intel Computer', 2, 'Test description', 'SM Supermalls', 100),
('002', 'Papers', 3, 'Papers only', 'Robinsons', 50),
('003', 'Electronics Sample', 2, 'This is electronics sample', 'Bestlink', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log1_inv_categories`
--
ALTER TABLE `log1_inv_categories`
  ADD PRIMARY KEY (`whs_category_id`);

--
-- Indexes for table `log1_whs_inventory`
--
ALTER TABLE `log1_whs_inventory`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `fk_log1_whs_inventory_category_id_ref_log1_inv_categories` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log1_inv_categories`
--
ALTER TABLE `log1_inv_categories`
  MODIFY `whs_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log1_whs_inventory`
--
ALTER TABLE `log1_whs_inventory`
  ADD CONSTRAINT `fk_log1_whs_inventory_category_id_ref_log1_inv_categories` FOREIGN KEY (`category_id`) REFERENCES `log1_inv_categories` (`whs_category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
