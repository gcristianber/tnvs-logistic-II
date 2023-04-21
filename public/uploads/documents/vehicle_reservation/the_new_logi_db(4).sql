-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2023 at 08:28 AM
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
-- Database: `the_new_logi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_um_accounts`
--

CREATE TABLE `admin_um_accounts` (
  `user_id` varchar(50) NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_um_accounts`
--

INSERT INTO `admin_um_accounts` (`user_id`, `display_name`, `username`, `password`, `role_id`, `department_id`, `status_id`) VALUES
('001', 'Super Admin - Logistic', 'super_admin@logistic', 'l0gistic@!', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_um_departments`
--

CREATE TABLE `admin_um_departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_um_departments`
--

INSERT INTO `admin_um_departments` (`department_id`, `department_name`) VALUES
(1, 'logistic'),
(2, 'administrative'),
(3, 'core transaction'),
(4, 'human resource'),
(5, 'finance');

-- --------------------------------------------------------

--
-- Table structure for table `admin_um_roles`
--

CREATE TABLE `admin_um_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_um_roles`
--

INSERT INTO `admin_um_roles` (`role_id`, `role_name`) VALUES
(1, 'super admin'),
(2, 'admin'),
(3, 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `admin_um_status`
--

CREATE TABLE `admin_um_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_um_status`
--

INSERT INTO `admin_um_status` (`status_id`, `status_name`) VALUES
(1, 'active'),
(2, 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `log1_whs_category`
--

CREATE TABLE `log1_whs_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log1_whs_inventory`
--

CREATE TABLE `log1_whs_inventory` (
  `product_id` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `unit_cost` double NOT NULL,
  `total` double NOT NULL,
  `supplier_id` varchar(50) NOT NULL,
  `purchase_date` datetime NOT NULL,
  `inbound_date` datetime NOT NULL,
  `frequency_count` varchar(30) NOT NULL,
  `last_count_date` datetime DEFAULT current_timestamp(),
  `next_count_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log1_whs_locations`
--

CREATE TABLE `log1_whs_locations` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_am_appendices`
--

CREATE TABLE `log2_am_appendices` (
  `file_id` varchar(50) NOT NULL,
  `reference_number` varchar(50) NOT NULL,
  `file_name` varchar(25) NOT NULL,
  `file_size` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_am_audited_items`
--

CREATE TABLE `log2_am_audited_items` (
  `reference_number` varchar(50) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_cost` double NOT NULL,
  `total` double NOT NULL,
  `actual_count` int(11) NOT NULL,
  `variance` varchar(10) NOT NULL,
  `accuracy` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_am_cc_status`
--

CREATE TABLE `log2_am_cc_status` (
  `cc_status_id` int(11) NOT NULL,
  `status_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_am_cycle_count`
--

CREATE TABLE `log2_am_cycle_count` (
  `cc_id` varchar(50) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `actual_count` int(11) NOT NULL,
  `variance` varchar(20) NOT NULL,
  `remarks` text NOT NULL,
  `last_count_date` datetime NOT NULL DEFAULT current_timestamp(),
  `accuracy` varchar(50) NOT NULL,
  `next_count_date` datetime NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_am_frequency`
--

CREATE TABLE `log2_am_frequency` (
  `frequency_count_id` int(11) NOT NULL,
  `frequency_name` varchar(50) NOT NULL,
  `interval` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_am_reports`
--

CREATE TABLE `log2_am_reports` (
  `reference_number` varchar(50) NOT NULL,
  `report` text NOT NULL,
  `overall_accuracy` varchar(20) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_am_requests`
--

CREATE TABLE `log2_am_requests` (
  `reference_number` varchar(50) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `department_id` int(11) NOT NULL,
  `request_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status_id` int(11) NOT NULL DEFAULT 1,
  `decline_remarks` text DEFAULT NULL,
  `remark_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_am_status`
--

CREATE TABLE `log2_am_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_dt_documents`
--

CREATE TABLE `log2_dt_documents` (
  `tracking_id` varchar(50) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `send_to_dept_id` int(11) NOT NULL,
  `sent_by_dept_id` int(11) NOT NULL,
  `sent_date` datetime NOT NULL,
  `remarks` text NOT NULL,
  `author_id` varchar(50) NOT NULL,
  `last_date_activity` datetime NOT NULL DEFAULT current_timestamp(),
  `current_status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_dt_documents`
--

INSERT INTO `log2_dt_documents` (`tracking_id`, `subject`, `send_to_dept_id`, `sent_by_dept_id`, `sent_date`, `remarks`, `author_id`, `last_date_activity`, `current_status_id`) VALUES
('DT-001', 'Test Dummy', 2, 1, '2023-04-20 15:55:43', 'Test dummy description', '001', '2023-04-20 21:56:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log2_dt_status`
--

CREATE TABLE `log2_dt_status` (
  `tracking_status_id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_dt_status`
--

INSERT INTO `log2_dt_status` (`tracking_status_id`, `status_name`) VALUES
(1, 'sent'),
(2, 'received'),
(3, 'forwarded'),
(4, 'returned'),
(5, 'completed'),
(6, 'archived');

-- --------------------------------------------------------

--
-- Table structure for table `log2_dt_track`
--

CREATE TABLE `log2_dt_track` (
  `tracking_id` varchar(50) NOT NULL,
  `action_by_dept_id` int(11) NOT NULL,
  `action_date` datetime NOT NULL DEFAULT current_timestamp(),
  `remarks` text NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_delivery_product`
--

CREATE TABLE `log2_fm_delivery_product` (
  `delivery_product_no` varchar(50) NOT NULL,
  `tracking_id` varchar(50) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `pre_delivery_qty` int(11) NOT NULL,
  `post_delivery_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_delivery_request`
--

CREATE TABLE `log2_fm_delivery_request` (
  `tracking_id` varchar(50) NOT NULL,
  `delivery_type_id` int(11) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `pickup_address` text NOT NULL,
  `dropoff_address` text NOT NULL,
  `telephone_no` varchar(20) NOT NULL,
  `date_requested` datetime NOT NULL DEFAULT current_timestamp(),
  `delivery_date` date NOT NULL,
  `note_for_driver` text NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_delivery_status`
--

CREATE TABLE `log2_fm_delivery_status` (
  `delivery_status_id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_delivery_type`
--

CREATE TABLE `log2_fm_delivery_type` (
  `delivery_type_id` int(11) NOT NULL,
  `delivery_type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_maintenance`
--

CREATE TABLE `log2_fm_maintenance` (
  `maintenance_id` varchar(50) NOT NULL,
  `vehicle_id` varchar(50) NOT NULL,
  `type_id` int(11) NOT NULL,
  `mechanic_name` varchar(50) NOT NULL,
  `date_schedule` date NOT NULL,
  `remarks` text NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_fm_maintenance`
--

INSERT INTO `log2_fm_maintenance` (`maintenance_id`, `vehicle_id`, `type_id`, `mechanic_name`, `date_schedule`, `remarks`, `status_id`) VALUES
('MNT-001', 'FM230420D806C', 1, 'Cristianber Gordora', '0000-00-00', 'Test', 3);

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_maintenance_status`
--

CREATE TABLE `log2_fm_maintenance_status` (
  `maintenance_status_id` int(11) NOT NULL,
  `maintenance_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_fm_maintenance_status`
--

INSERT INTO `log2_fm_maintenance_status` (`maintenance_status_id`, `maintenance_status`) VALUES
(1, 'pending'),
(2, 'in progress'),
(3, 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_maintenance_type`
--

CREATE TABLE `log2_fm_maintenance_type` (
  `maintenance_type_id` int(11) NOT NULL,
  `maintenance_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_fm_maintenance_type`
--

INSERT INTO `log2_fm_maintenance_type` (`maintenance_type_id`, `maintenance_type`) VALUES
(1, 'cleaning'),
(2, 'change oil');

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_trans_types`
--

CREATE TABLE `log2_fm_trans_types` (
  `trans_type_id` int(11) NOT NULL,
  `type_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_fm_trans_types`
--

INSERT INTO `log2_fm_trans_types` (`trans_type_id`, `type_name`) VALUES
(1, 'automatic'),
(2, 'manual');

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_vehicles`
--

CREATE TABLE `log2_fm_vehicles` (
  `vehicle_id` varchar(50) NOT NULL,
  `make` varchar(25) NOT NULL,
  `plate` varchar(15) NOT NULL,
  `vehicle_type_id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `trans_type_id` int(11) NOT NULL,
  `number_of_seats` int(11) NOT NULL,
  `odometer` int(11) NOT NULL,
  `dimensions` varchar(25) NOT NULL,
  `thumbnail_path` varchar(50) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_fm_vehicles`
--

INSERT INTO `log2_fm_vehicles` (`vehicle_id`, `make`, `plate`, `vehicle_type_id`, `description`, `trans_type_id`, `number_of_seats`, `odometer`, `dimensions`, `thumbnail_path`, `status_id`) VALUES
('', 'test', 'test', 1, 'test', 1, 5, 2000, '1415mm 1799mm 4515mm', '', 1),
('FM-230420A1816', 'test', '123', 1, 'testaaaa', 1, 5, 2000, '1.58ht, 2.81mm', 'hondacivic_blue.jpg', 1),
('FM2304200C300', 'test', 'test', 1, 'test', 1, 5, 2000, '1.58ht, 2.81mm', '2020-honda-accord-main-1569324384.jpg', 1),
('FM230420D806C', 'test1', 'test-1', 2, 'test1', 1, 10, 2000, '1415mm 1799mm 4515mm', '2022-express-1wt-gan-colorizer.jpg', 1),
('FMV-001', 'Honda Civic', 'FKY-123', 1, 'Test Dummy', 1, 5, 2500, '1415mm 1799mm 4515mm', 'honda-civic-red-2022-main-1637644905.jpg', 1),
('FMV-644151af4ebe2', 'Honda Accord', 'FTN-577', 1, 'Test', 1, 5, 2000, '1415mm 1799mm 4515mm', '2020-honda-accord-main-1569324384.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_vehicle_status`
--

CREATE TABLE `log2_fm_vehicle_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_fm_vehicle_status`
--

INSERT INTO `log2_fm_vehicle_status` (`status_id`, `status_name`) VALUES
(1, 'available'),
(2, 'unavailable'),
(3, 'maintenance');

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_vehicle_types`
--

CREATE TABLE `log2_fm_vehicle_types` (
  `vehicle_type_id` int(11) NOT NULL,
  `type_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_fm_vehicle_types`
--

INSERT INTO `log2_fm_vehicle_types` (`vehicle_type_id`, `type_name`) VALUES
(1, 'sedan'),
(2, 'van'),
(3, 'truck');

-- --------------------------------------------------------

--
-- Table structure for table `log2_maintenance_status`
--

CREATE TABLE `log2_maintenance_status` (
  `maintenance_status_id` int(11) NOT NULL,
  `maintenance_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_vp_vendors`
--

CREATE TABLE `log2_vp_vendors` (
  `vendor_id` varchar(50) NOT NULL,
  `avatar_path` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL,
  `contact_person` varchar(30) NOT NULL,
  `telephone_no` varchar(30) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `company_type` varchar(30) NOT NULL,
  `web_url` varchar(50) DEFAULT NULL,
  `city` varchar(30) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_vr_reservations`
--

CREATE TABLE `log2_vr_reservations` (
  `reservation_id` varchar(50) NOT NULL,
  `vehicle_id` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `reason` text NOT NULL,
  `pickup_date` datetime NOT NULL,
  `return_date` datetime NOT NULL,
  `date_requested` datetime NOT NULL DEFAULT current_timestamp(),
  `file_path` varchar(50) NOT NULL,
  `requestor_id` varchar(50) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_vr_reserve_status`
--

CREATE TABLE `log2_vr_reserve_status` (
  `reserve_status_id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_um_accounts`
--
ALTER TABLE `admin_um_accounts`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `FK_admin_um_accounts_role_id_admin_um_roles` (`role_id`),
  ADD KEY `FK_admin_um_accounts_department_id_admin_um_departments` (`department_id`),
  ADD KEY `FK_admin_um_accounts_status_id_admin_um_status` (`status_id`);

--
-- Indexes for table `admin_um_departments`
--
ALTER TABLE `admin_um_departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `admin_um_roles`
--
ALTER TABLE `admin_um_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `admin_um_status`
--
ALTER TABLE `admin_um_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `log1_whs_category`
--
ALTER TABLE `log1_whs_category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `FK_log1_whs_category_location_id_log1_whs_locations` (`location_id`);

--
-- Indexes for table `log1_whs_inventory`
--
ALTER TABLE `log1_whs_inventory`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `FK_log1_whs_inventory_category_id_log1_whs_category` (`category_id`);

--
-- Indexes for table `log1_whs_locations`
--
ALTER TABLE `log1_whs_locations`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `log2_am_appendices`
--
ALTER TABLE `log2_am_appendices`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `log2_am_audited_items`
--
ALTER TABLE `log2_am_audited_items`
  ADD KEY `FK_log2_am_audited_items_reference_number_log2_am_requests` (`reference_number`);

--
-- Indexes for table `log2_am_cc_status`
--
ALTER TABLE `log2_am_cc_status`
  ADD PRIMARY KEY (`cc_status_id`);

--
-- Indexes for table `log2_am_cycle_count`
--
ALTER TABLE `log2_am_cycle_count`
  ADD PRIMARY KEY (`cc_id`),
  ADD KEY `FK_log2_am_cycle_count_product_id_log1_whs_inventory` (`product_id`),
  ADD KEY `FK_log2_am_cycle_count_status_id_log2_am_cc_status` (`status_id`);

--
-- Indexes for table `log2_am_frequency`
--
ALTER TABLE `log2_am_frequency`
  ADD PRIMARY KEY (`frequency_count_id`);

--
-- Indexes for table `log2_am_requests`
--
ALTER TABLE `log2_am_requests`
  ADD PRIMARY KEY (`reference_number`),
  ADD KEY `FK_log2_am_requests_product_category_id_category_id` (`product_category_id`),
  ADD KEY `FK_log2_am_requests_department_id_admin_um_departments` (`department_id`),
  ADD KEY `FK_log2_am_requests_status_id_log2_am_status` (`status_id`);

--
-- Indexes for table `log2_am_status`
--
ALTER TABLE `log2_am_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `log2_dt_documents`
--
ALTER TABLE `log2_dt_documents`
  ADD PRIMARY KEY (`tracking_id`),
  ADD KEY `fk_log2_dt_documents_admin_um_departments_sent_by_dept` (`sent_by_dept_id`),
  ADD KEY `fk_log2_dt_documents_admin_um_departments_send_to_dept` (`send_to_dept_id`),
  ADD KEY `fk_log2_dt_documents_log2_dt_status_current_status_id` (`current_status_id`),
  ADD KEY `fk_log2_dt_documents_admin_um_accounts_author_id` (`author_id`);

--
-- Indexes for table `log2_dt_status`
--
ALTER TABLE `log2_dt_status`
  ADD PRIMARY KEY (`tracking_status_id`);

--
-- Indexes for table `log2_dt_track`
--
ALTER TABLE `log2_dt_track`
  ADD KEY `fk_log2_dt_track_log2_dt_documents_tracking_id` (`tracking_id`),
  ADD KEY `fk_log2_dt_track_admin_um_departments_department_id` (`action_by_dept_id`),
  ADD KEY `fk_log2_dt_track_log2_dt_status_status_id` (`status_id`);

--
-- Indexes for table `log2_fm_delivery_product`
--
ALTER TABLE `log2_fm_delivery_product`
  ADD PRIMARY KEY (`delivery_product_no`);

--
-- Indexes for table `log2_fm_delivery_request`
--
ALTER TABLE `log2_fm_delivery_request`
  ADD PRIMARY KEY (`tracking_id`),
  ADD KEY `fk_log2_fm_delivery_request_status_id_log2_fm_delivery_status` (`status_id`),
  ADD KEY `fk_log2_fm_delivery_request_delivery_type_id_log2_fm_del_type` (`delivery_type_id`);

--
-- Indexes for table `log2_fm_delivery_status`
--
ALTER TABLE `log2_fm_delivery_status`
  ADD PRIMARY KEY (`delivery_status_id`);

--
-- Indexes for table `log2_fm_delivery_type`
--
ALTER TABLE `log2_fm_delivery_type`
  ADD PRIMARY KEY (`delivery_type_id`);

--
-- Indexes for table `log2_fm_maintenance`
--
ALTER TABLE `log2_fm_maintenance`
  ADD PRIMARY KEY (`maintenance_id`),
  ADD KEY `fk_log2_fm_maintenance_log2_fm_vehicles_vehicle_id` (`vehicle_id`),
  ADD KEY `fk_log2_fm_maintenance_type_id_log2_fm_maintenance_type` (`type_id`),
  ADD KEY `fk_log2_fm_maintenance_status_id_log2_fm_maintenance_status` (`status_id`);

--
-- Indexes for table `log2_fm_maintenance_status`
--
ALTER TABLE `log2_fm_maintenance_status`
  ADD PRIMARY KEY (`maintenance_status_id`);

--
-- Indexes for table `log2_fm_maintenance_type`
--
ALTER TABLE `log2_fm_maintenance_type`
  ADD PRIMARY KEY (`maintenance_type_id`);

--
-- Indexes for table `log2_fm_trans_types`
--
ALTER TABLE `log2_fm_trans_types`
  ADD PRIMARY KEY (`trans_type_id`);

--
-- Indexes for table `log2_fm_vehicles`
--
ALTER TABLE `log2_fm_vehicles`
  ADD PRIMARY KEY (`vehicle_id`),
  ADD KEY `FK_log2_fm_vehicles_vehicle_type_id_log2_fm_vehicle_types` (`vehicle_type_id`),
  ADD KEY `FK_log2_fm_vehicles_trans_type_id_log2_fm_trans_types` (`trans_type_id`),
  ADD KEY `FK_log2_fm_vehicles_status_id_log2_fm_vehicle_status` (`status_id`);

--
-- Indexes for table `log2_fm_vehicle_status`
--
ALTER TABLE `log2_fm_vehicle_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `log2_fm_vehicle_types`
--
ALTER TABLE `log2_fm_vehicle_types`
  ADD PRIMARY KEY (`vehicle_type_id`);

--
-- Indexes for table `log2_maintenance_status`
--
ALTER TABLE `log2_maintenance_status`
  ADD PRIMARY KEY (`maintenance_status_id`);

--
-- Indexes for table `log2_vp_vendors`
--
ALTER TABLE `log2_vp_vendors`
  ADD PRIMARY KEY (`vendor_id`);

--
-- Indexes for table `log2_vr_reservations`
--
ALTER TABLE `log2_vr_reservations`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `FK_log2_vr_reservations_requestor_id_admin_um_accounts` (`requestor_id`),
  ADD KEY `FK_log2_vr_reservations_status_id_log2_vr_reserve_status` (`status_id`),
  ADD KEY `FK_log2_vr_reservations_vehicle_id_log2_fm_vehicles` (`vehicle_id`);

--
-- Indexes for table `log2_vr_reserve_status`
--
ALTER TABLE `log2_vr_reserve_status`
  ADD PRIMARY KEY (`reserve_status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_um_departments`
--
ALTER TABLE `admin_um_departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_um_roles`
--
ALTER TABLE `admin_um_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_um_status`
--
ALTER TABLE `admin_um_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log1_whs_category`
--
ALTER TABLE `log1_whs_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log1_whs_locations`
--
ALTER TABLE `log1_whs_locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log2_am_cc_status`
--
ALTER TABLE `log2_am_cc_status`
  MODIFY `cc_status_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log2_am_frequency`
--
ALTER TABLE `log2_am_frequency`
  MODIFY `frequency_count_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log2_am_status`
--
ALTER TABLE `log2_am_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log2_dt_status`
--
ALTER TABLE `log2_dt_status`
  MODIFY `tracking_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `log2_fm_delivery_status`
--
ALTER TABLE `log2_fm_delivery_status`
  MODIFY `delivery_status_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log2_fm_delivery_type`
--
ALTER TABLE `log2_fm_delivery_type`
  MODIFY `delivery_type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log2_fm_maintenance_status`
--
ALTER TABLE `log2_fm_maintenance_status`
  MODIFY `maintenance_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log2_fm_maintenance_type`
--
ALTER TABLE `log2_fm_maintenance_type`
  MODIFY `maintenance_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log2_fm_trans_types`
--
ALTER TABLE `log2_fm_trans_types`
  MODIFY `trans_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log2_fm_vehicle_status`
--
ALTER TABLE `log2_fm_vehicle_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log2_fm_vehicle_types`
--
ALTER TABLE `log2_fm_vehicle_types`
  MODIFY `vehicle_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log2_maintenance_status`
--
ALTER TABLE `log2_maintenance_status`
  MODIFY `maintenance_status_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log2_vr_reserve_status`
--
ALTER TABLE `log2_vr_reserve_status`
  MODIFY `reserve_status_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_um_accounts`
--
ALTER TABLE `admin_um_accounts`
  ADD CONSTRAINT `FK_admin_um_accounts_department_id_admin_um_departments` FOREIGN KEY (`department_id`) REFERENCES `admin_um_departments` (`department_id`),
  ADD CONSTRAINT `FK_admin_um_accounts_role_id_admin_um_roles` FOREIGN KEY (`role_id`) REFERENCES `admin_um_roles` (`role_id`),
  ADD CONSTRAINT `FK_admin_um_accounts_status_id_admin_um_status` FOREIGN KEY (`status_id`) REFERENCES `admin_um_status` (`status_id`);

--
-- Constraints for table `log1_whs_category`
--
ALTER TABLE `log1_whs_category`
  ADD CONSTRAINT `FK_log1_whs_category_location_id_log1_whs_locations` FOREIGN KEY (`location_id`) REFERENCES `log1_whs_locations` (`location_id`);

--
-- Constraints for table `log1_whs_inventory`
--
ALTER TABLE `log1_whs_inventory`
  ADD CONSTRAINT `FK_log1_whs_inventory_category_id_log1_whs_category` FOREIGN KEY (`category_id`) REFERENCES `log1_whs_category` (`category_id`);

--
-- Constraints for table `log2_am_audited_items`
--
ALTER TABLE `log2_am_audited_items`
  ADD CONSTRAINT `FK_log2_am_audited_items_reference_number_log2_am_requests` FOREIGN KEY (`reference_number`) REFERENCES `log2_am_requests` (`reference_number`);

--
-- Constraints for table `log2_am_cycle_count`
--
ALTER TABLE `log2_am_cycle_count`
  ADD CONSTRAINT `FK_log2_am_cycle_count_product_id_log1_whs_inventory` FOREIGN KEY (`product_id`) REFERENCES `log1_whs_inventory` (`product_id`),
  ADD CONSTRAINT `FK_log2_am_cycle_count_status_id_log2_am_cc_status` FOREIGN KEY (`status_id`) REFERENCES `log2_am_cc_status` (`cc_status_id`);

--
-- Constraints for table `log2_am_requests`
--
ALTER TABLE `log2_am_requests`
  ADD CONSTRAINT `FK_log2_am_requests_department_id_admin_um_departments` FOREIGN KEY (`department_id`) REFERENCES `admin_um_departments` (`department_id`),
  ADD CONSTRAINT `FK_log2_am_requests_product_category_id_category_id` FOREIGN KEY (`product_category_id`) REFERENCES `log1_whs_category` (`category_id`),
  ADD CONSTRAINT `FK_log2_am_requests_status_id_log2_am_status` FOREIGN KEY (`status_id`) REFERENCES `log2_am_status` (`status_id`);

--
-- Constraints for table `log2_dt_documents`
--
ALTER TABLE `log2_dt_documents`
  ADD CONSTRAINT `fk_log2_dt_documents_admin_um_accounts_author_id` FOREIGN KEY (`author_id`) REFERENCES `admin_um_accounts` (`user_id`),
  ADD CONSTRAINT `fk_log2_dt_documents_admin_um_departments_send_to_dept` FOREIGN KEY (`send_to_dept_id`) REFERENCES `admin_um_departments` (`department_id`),
  ADD CONSTRAINT `fk_log2_dt_documents_admin_um_departments_sent_by_dept` FOREIGN KEY (`sent_by_dept_id`) REFERENCES `admin_um_departments` (`department_id`),
  ADD CONSTRAINT `fk_log2_dt_documents_log2_dt_status_current_status_id` FOREIGN KEY (`current_status_id`) REFERENCES `log2_dt_status` (`tracking_status_id`);

--
-- Constraints for table `log2_dt_track`
--
ALTER TABLE `log2_dt_track`
  ADD CONSTRAINT `fk_log2_dt_track_admin_um_departments_department_id` FOREIGN KEY (`action_by_dept_id`) REFERENCES `admin_um_departments` (`department_id`),
  ADD CONSTRAINT `fk_log2_dt_track_log2_dt_documents_tracking_id` FOREIGN KEY (`tracking_id`) REFERENCES `log2_dt_documents` (`tracking_id`),
  ADD CONSTRAINT `fk_log2_dt_track_log2_dt_status_status_id` FOREIGN KEY (`status_id`) REFERENCES `log2_dt_status` (`tracking_status_id`);

--
-- Constraints for table `log2_fm_delivery_request`
--
ALTER TABLE `log2_fm_delivery_request`
  ADD CONSTRAINT `fk_log2_fm_delivery_request_delivery_type_id_log2_fm_del_type` FOREIGN KEY (`delivery_type_id`) REFERENCES `log2_fm_delivery_type` (`delivery_type_id`),
  ADD CONSTRAINT `fk_log2_fm_delivery_request_status_id_log2_fm_delivery_status` FOREIGN KEY (`status_id`) REFERENCES `log2_fm_delivery_status` (`delivery_status_id`);

--
-- Constraints for table `log2_fm_maintenance`
--
ALTER TABLE `log2_fm_maintenance`
  ADD CONSTRAINT `fk_log2_fm_maintenance_log2_fm_vehicles_vehicle_id` FOREIGN KEY (`vehicle_id`) REFERENCES `log2_fm_vehicles` (`vehicle_id`),
  ADD CONSTRAINT `fk_log2_fm_maintenance_status_id_log2_fm_maintenance_status` FOREIGN KEY (`status_id`) REFERENCES `log2_fm_maintenance_status` (`maintenance_status_id`),
  ADD CONSTRAINT `fk_log2_fm_maintenance_type_id_log2_fm_maintenance_type` FOREIGN KEY (`type_id`) REFERENCES `log2_fm_maintenance_type` (`maintenance_type_id`);

--
-- Constraints for table `log2_fm_vehicles`
--
ALTER TABLE `log2_fm_vehicles`
  ADD CONSTRAINT `FK_log2_fm_vehicles_status_id_log2_fm_vehicle_status` FOREIGN KEY (`status_id`) REFERENCES `log2_fm_vehicle_status` (`status_id`),
  ADD CONSTRAINT `FK_log2_fm_vehicles_trans_type_id_log2_fm_trans_types` FOREIGN KEY (`trans_type_id`) REFERENCES `log2_fm_trans_types` (`trans_type_id`),
  ADD CONSTRAINT `FK_log2_fm_vehicles_vehicle_type_id_log2_fm_vehicle_types` FOREIGN KEY (`vehicle_type_id`) REFERENCES `log2_fm_vehicle_types` (`vehicle_type_id`);

--
-- Constraints for table `log2_vr_reservations`
--
ALTER TABLE `log2_vr_reservations`
  ADD CONSTRAINT `FK_log2_vr_reservations_requestor_id_admin_um_accounts` FOREIGN KEY (`requestor_id`) REFERENCES `admin_um_accounts` (`user_id`),
  ADD CONSTRAINT `FK_log2_vr_reservations_status_id_log2_vr_reserve_status` FOREIGN KEY (`status_id`) REFERENCES `log2_vr_reserve_status` (`reserve_status_id`),
  ADD CONSTRAINT `FK_log2_vr_reservations_vehicle_id_log2_fm_vehicles` FOREIGN KEY (`vehicle_id`) REFERENCES `log2_fm_vehicles` (`vehicle_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
