-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 04:45 PM
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
-- Database: `lulan_tnvs`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_payable_reports`
--

CREATE TABLE `account_payable_reports` (
  `db_id` int(11) NOT NULL,
  `db_date` date NOT NULL,
  `db_requestor` varchar(255) NOT NULL,
  `db_amount` decimal(10,2) NOT NULL,
  `db_purpose` varchar(255) NOT NULL,
  `db_department` varchar(255) NOT NULL,
  `db_payment_type` varchar(255) NOT NULL,
  `db_status` enum('pending','accepted','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_dm_category`
--

CREATE TABLE `admin_dm_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_dm_category`
--

INSERT INTO `admin_dm_category` (`category_id`, `category_name`, `department_id`) VALUES
(1, 'contract', 1),
(2, 'invoice', 2),
(3, 'employment certificate', 3),
(4, 'purchase order', 4),
(1, 'contract', 1),
(2, 'invoice', 2),
(3, 'employment certificate', 3),
(4, 'purchase order', 4);

-- --------------------------------------------------------

--
-- Table structure for table `admin_dm_departments`
--

CREATE TABLE `admin_dm_departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_dm_departments`
--

INSERT INTO `admin_dm_departments` (`department_id`, `department_name`) VALUES
(1, 'administrative'),
(2, 'finance'),
(3, 'human resource'),
(4, 'logistic'),
(1, 'administrative'),
(2, 'finance'),
(3, 'human resource'),
(4, 'logistic');

-- --------------------------------------------------------

--
-- Table structure for table `admin_dm_documents`
--

CREATE TABLE `admin_dm_documents` (
  `document_id` varchar(50) NOT NULL,
  `document_name` varchar(50) NOT NULL,
  `document_size` float NOT NULL,
  `document_extension` varchar(10) NOT NULL,
  `document_purpose` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `author_id` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_dm_documents`
--

INSERT INTO `admin_dm_documents` (`document_id`, `document_name`, `document_size`, `document_extension`, `document_purpose`, `category_id`, `author_id`, `date_created`, `status_id`) VALUES
('doc63fe2023c0f16', 'Contractdocx', 7321, 'docx', 'contract', 1, 'sa12345', '2023-02-28 04:39:15', 2),
('doc63fe204b1bcca', 'contract.docx', 7304, 'docx', 'test', 1, 'sa12345', '2023-02-28 04:39:55', 1),
('doc63fe20737d12f', 'resources.gonitro.jpg', 115392, 'jpg', 'invoice', 2, 'sa12345', '2023-02-28 11:40:35', 1),
('doc63fe20877f3fe', 'Audit_and_Control_Report.docx', 20960, 'docx', '', 4, 'sa12345', '2023-02-28 11:40:55', 1),
('doc63fe34a4be9cf', 'contract.docx', 7304, 'docx', 'teszzx111', 1, 'sa12345', '2023-03-01 01:06:44', 1),
('doc63fe58d4d3e03', 'convert.docx', 7465, 'docx', 'test', 1, 'sa12345', '2023-03-01 03:41:08', 1),
('doc63fe592ad4551', 'Employment.docx', 7308, 'docx', 'EMPLOYMENT', 3, 'sa12345', '2023-02-28 08:42:34', 1),
('doc63fe5982c45c8', 'try ko.docx', 7268, 'docx', '', 2, 'sa12345', '2023-02-28 08:44:02', 1),
('doc63fe724649256', 'Gawa ako document.docx', 7322, 'docx', 'gagaga', 3, 'sa12345', '2023-02-28 10:29:42', 1),
('doc63ff1542b09a3', 'Resignation_Letter_Virgilio_Gordora.docx', 12801, 'docx', 'contract', 1, 'sa12345', '2023-03-01 05:05:06', 1),
('doc63ff15791bd99', 'invoice-1.docx', 7348, 'docx', 'text image', 2, 'sa12345', '2023-03-01 10:06:01', 1),
('doc63ff6993c6271', 'TESTING.docx', 7383, 'docx', 'Para sa contract', 1, 'sa12345', '2023-03-01 04:04:51', 1),
('doc63ffa8bc6c699', 'Dashboard.jpg', 91130, 'jpg', 'test', 2, 'sa12345', '2023-03-02 03:34:20', 1),
('doc6401b14d633ef', 'contract(1).docx', 7304, 'docx', 'haha', 1, 'sa12345', '2023-03-03 04:35:25', 1),
('doc6401b17b9f198', 'PO.docx', 7312, 'docx', 'PO', 4, 'sa12345', '2023-03-03 09:36:11', 8),
('doc640721404e6b8', 'yay1.docx', 7320, 'docx', 'c', 3, 'sa12345', '2023-03-07 12:34:24', 1),
('doc63fe2023c0f16', 'Contractdocx', 7321, 'docx', 'contract', 1, 'sa12345', '2023-02-28 04:39:15', 2),
('doc63fe204b1bcca', 'contract.docx', 7304, 'docx', 'test', 1, 'sa12345', '2023-02-28 04:39:55', 1),
('doc63fe20737d12f', 'resources.gonitro.jpg', 115392, 'jpg', 'invoice', 2, 'sa12345', '2023-02-28 11:40:35', 1),
('doc63fe20877f3fe', 'Audit_and_Control_Report.docx', 20960, 'docx', '', 4, 'sa12345', '2023-02-28 11:40:55', 1),
('doc63fe34a4be9cf', 'contract.docx', 7304, 'docx', 'teszzx111', 1, 'sa12345', '2023-03-01 01:06:44', 1),
('doc63fe58d4d3e03', 'convert.docx', 7465, 'docx', 'test', 1, 'sa12345', '2023-03-01 03:41:08', 1),
('doc63fe592ad4551', 'Employment.docx', 7308, 'docx', 'EMPLOYMENT', 3, 'sa12345', '2023-02-28 08:42:34', 1),
('doc63fe5982c45c8', 'try ko.docx', 7268, 'docx', '', 2, 'sa12345', '2023-02-28 08:44:02', 1),
('doc63fe724649256', 'Gawa ako document.docx', 7322, 'docx', 'gagaga', 3, 'sa12345', '2023-02-28 10:29:42', 1),
('doc63ff1542b09a3', 'Resignation_Letter_Virgilio_Gordora.docx', 12801, 'docx', 'contract', 1, 'sa12345', '2023-03-01 05:05:06', 1),
('doc63ff15791bd99', 'invoice-1.docx', 7348, 'docx', 'text image', 2, 'sa12345', '2023-03-01 10:06:01', 1),
('doc63ff6993c6271', 'TESTING.docx', 7383, 'docx', 'Para sa contract', 1, 'sa12345', '2023-03-01 04:04:51', 1),
('doc63ffa8bc6c699', 'Dashboard.jpg', 91130, 'jpg', 'test', 2, 'sa12345', '2023-03-02 03:34:20', 1),
('doc6401b14d633ef', 'contract(1).docx', 7304, 'docx', 'haha', 1, 'sa12345', '2023-03-03 04:35:25', 1),
('doc6401b17b9f198', 'PO.docx', 7312, 'docx', 'PO', 4, 'sa12345', '2023-03-03 09:36:11', 8),
('doc640721404e6b8', 'yay1.docx', 7320, 'docx', 'c', 3, 'sa12345', '2023-03-07 12:34:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_dm_document_status`
--

CREATE TABLE `admin_dm_document_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_dm_document_status`
--

INSERT INTO `admin_dm_document_status` (`status_id`, `status_name`) VALUES
(1, 'pending'),
(2, 'received'),
(3, 'on hold'),
(4, 'declined'),
(5, 'followed up'),
(6, 'returned'),
(7, 'endorsed'),
(8, 'archived'),
(1, 'pending'),
(2, 'received'),
(3, 'on hold'),
(4, 'declined'),
(5, 'followed up'),
(6, 'returned'),
(7, 'endorsed'),
(8, 'archived');

-- --------------------------------------------------------

--
-- Table structure for table `admin_um_accounts`
--

CREATE TABLE `admin_um_accounts` (
  `account_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `account_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_um_accounts`
--

INSERT INTO `admin_um_accounts` (`account_id`, `password`, `display_name`, `account_type_id`) VALUES
('sa12345', '123', 'John Doe', 1),
('sa12345', '123', 'John Doe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_um_accounts_view`
--

CREATE TABLE `admin_um_accounts_view` (
  `account_id` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `display_name` varchar(50) DEFAULT NULL,
  `account_type_name` varchar(50) DEFAULT NULL,
  `department_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_um_account_type`
--

CREATE TABLE `admin_um_account_type` (
  `account_type_id` int(11) NOT NULL,
  `account_type_name` varchar(50) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_um_account_type`
--

INSERT INTO `admin_um_account_type` (`account_type_id`, `account_type_name`, `department_id`) VALUES
(1, 'super admin', 1),
(1, 'super admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `core1_cm_customerlist`
--

CREATE TABLE `core1_cm_customerlist` (
  `c_id` int(255) NOT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` blob DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core1_cm_customerlist`
--

INSERT INTO `core1_cm_customerlist` (`c_id`, `customer_id`, `firstname`, `lastname`, `username`, `email`, `phone`, `password`, `address`, `image`, `date`) VALUES
(1, 'CT952', 'Jerry', 'Borromeo', 'Jebo2001', 'jborromeo2001@gmail.com', '09455462625', '$2y$10$5Nkk4asgqCQj9AolDjrfXeVieELDaffy.PabQdIpjVLDE3FeuZg.m', 'Tandang Sora', 0x4a656e6e69652e6a706567, '2023-03-14 16:22:31'),
(2, 'CT983', '[James]', '[Borromeo]', 'anne_onia', '[jamesborromeo@gmail.com]', '[09455462625]', '$2y$10$j4YVgavvgm45laapjCqBPOctzqTEBIktS9z.SJ6DaXzaCTNwmOL52', '[Manila]', 0x5b3f3f3f3f00104a464946000101000001000100003f3f0043000403030403030404040405050405070b07070606070e0a0a080b100e1111100e100f12141a16121318130f10161f17181b1b1d1d1d111620221f1c221a1c1d1c3f3f0043010505050706070d07070d1c1210121c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c1c3f3f001108013f033f030111000211010311013f3f001d0000000603010000000000000000000000000304050607010208093f3f001b010101000301010100000000000000000000010203040506073f3f000c030100021003100000003f3f7c, '2023-03-14 16:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `core1_dp`
--

CREATE TABLE `core1_dp` (
  `driver_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `licenseType` varchar(50) NOT NULL,
  `licenseNum` varchar(50) NOT NULL,
  `expDate` varchar(50) NOT NULL,
  `licenseImage` varchar(255) NOT NULL,
  `driverSSS` varchar(255) NOT NULL,
  `driverTIN` varchar(255) NOT NULL,
  `PClearance` varchar(255) NOT NULL,
  `BClearance` varchar(255) NOT NULL,
  `earnings` varchar(100) NOT NULL,
  `driverload` varchar(100) NOT NULL,
  `driverStatus` int(11) NOT NULL DEFAULT 0 COMMENT '0=Pending, 1=Approved, 2=Denied'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core1_dp`
--

INSERT INTO `core1_dp` (`driver_id`, `firstname`, `lastname`, `phone`, `email`, `birthday`, `address`, `photo`, `licenseType`, `licenseNum`, `expDate`, `licenseImage`, `driverSSS`, `driverTIN`, `PClearance`, `BClearance`, `earnings`, `driverload`, `driverStatus`) VALUES
(1, 'f', 'gfdg', 'f', 'f@gma.com', '2023-03-13', 'd', 'wallpaperflare.com_wallpaper.jpg', '', '', '', '', '', '', '', '', '', '', 1),
(2, 'gfdg', 'gdg', 'fdgfdg', 'fdgfd@gfdg.com', '2023-03-08', 'fds', 'wallpaperflare.com_wallpaper.jpg', 'Professional', 'fdsf', '432f', 'wp4813161-simple-minimalist-wallpapers.jpg', '', '', '', '', '', '', 0),
(3, 'fdgd', 'gfdgfdgd', 'gfgdf', 'gfdgfd@gmail.com', '2023-03-06', 'fds', 'wallpaperflare.com_wallpaper.jpg', 'Professional', 'fdsf', 'fdsf', 'wp4813161-simple-minimalist-wallpapers.jpg', 'wallpaperflare.com_wallpaper.jpg', 'wallpaperflare.com_wallpaper.jpg', 'wallpaperflare.com_wallpaper.jpg', 'wallpaperflare.com_wallpaper.jpg', 'fdsfs', '', 2),
(4, 'Sample', 'Sample', 'Sample', 'Sample@gmail.com', '2023-03-12', 'Sample', '1.jpg', 'Professional', 'Sample', 'Sample', '2.jpg', '3.jpg', '4.jpg', '11.jpg', '12.jpg', 'Sample', 'Sample', 2),
(5, 'NEW Sample', 'NEW Sample', 'NEW Sample', 'NEWample@gmail.com', '2023-03-13', 'NEW Sample', '17.jpg', 'Professional', 'NEW Sample', 'NEW Sample', '14.jpg', '12.jpg', '13.jpg', '18.jpg', '12.jpg', 'NEW Sample', 'NEW Sample', 1);

-- --------------------------------------------------------

--
-- Table structure for table `core1_fm_vehiclelist`
--

CREATE TABLE `core1_fm_vehiclelist` (
  `fleet_id` int(11) NOT NULL,
  `model` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `driver` varchar(100) NOT NULL,
  `plateNum` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `transmission` varchar(100) NOT NULL,
  `OR_receipt` varchar(255) NOT NULL,
  `CR_receipt` varchar(255) NOT NULL,
  `photos` varchar(255) NOT NULL,
  `fleetStatus` int(11) NOT NULL COMMENT '0=Available, 1=Booked'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core1_fm_vehiclelist`
--

INSERT INTO `core1_fm_vehiclelist` (`fleet_id`, `model`, `type`, `driver`, `plateNum`, `color`, `transmission`, `OR_receipt`, `CR_receipt`, `photos`, `fleetStatus`) VALUES
(1, 'dsdsad', '4-seater', '1', 'fdsfs', 'fdsfsfs', 'Automatic', '2.png', '6207ad7e34af5.jpg', '6207ad7e34af5.jpg,4297150.jpg,minimalism-1644666519306-6515.jpg', 1),
(2, 'gfdgd', '4-seater', '0', 'gfdgdg', 'fdgfdg', 'Automatic', 'wp4813161-simple-minimalist-wallpapers.jpg', 'wp4813161-simple-minimalist-wallpapers.jpg', 'wallpaperflare.com_wallpaper.jpg', 0),
(3, 'ytut', '4-seater', 'hgfhgf hgfh', 'yutut', 'uytut', 'Automatic', 'wallpaperflare.com_wallpaper.jpg', 'wallpaperflare.com_wallpaper.jpg', 'wallpaperflare.com_wallpaper.jpg', 0),
(4, 'fdsfdsf', '4-seater', 'fdgd gfdgfdgd', 'fdsfs', 'fdsfsd', 'Automatic', 'wallpaperflare.com_wallpaper.jpg', 'wallpaperflare.com_wallpaper.jpg', 'wallpaperflare.com_wallpaper.jpg', 0),
(5, 'Sample', '4-seater', 'Sample Sample', 'Sample', 'Sample', 'Manual', '14.jpg', '15.jpg', '', 0),
(6, 'NEW Sample', '4-seater', 'NEW Sample NEW Sample', 'NEW Sample', 'NEW Sample', 'Automatic', '12.jpg', '12.jpg', 'aics.jpg,aisat.png,alexis.png,ama.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fin_bm_annual_budget`
--

CREATE TABLE `fin_bm_annual_budget` (
  `ab_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `budget_amount` decimal(10,2) NOT NULL,
  `remaining_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fin_bm_annual_budget`
--

INSERT INTO `fin_bm_annual_budget` (`ab_id`, `year`, `budget_amount`, `remaining_amount`) VALUES
(20, 2023, '25000000.00', '21000000.00');

-- --------------------------------------------------------

--
-- Table structure for table `fin_bm_budget_allocation`
--

CREATE TABLE `fin_bm_budget_allocation` (
  `budget_allocation_id` varchar(23) NOT NULL,
  `ba_date` datetime DEFAULT current_timestamp(),
  `ba_requestor` varchar(255) DEFAULT NULL,
  `ba_amount` decimal(10,2) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `purpose_id` int(11) DEFAULT NULL,
  `payment_type_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fin_bm_budget_allocation`
--

INSERT INTO `fin_bm_budget_allocation` (`budget_allocation_id`, `ba_date`, `ba_requestor`, `ba_amount`, `department_id`, `purpose_id`, `payment_type_id`, `status_id`) VALUES
('BR0001', '2023-03-13 14:37:38', 'Jeffrey Cruz', '3772000.00', 7, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `fin_bm_budget_request`
--

CREATE TABLE `fin_bm_budget_request` (
  `budget_request_id` varchar(23) NOT NULL,
  `br_requestor` varchar(50) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `br_amount` decimal(10,2) DEFAULT NULL,
  `purpose_id` int(11) DEFAULT NULL,
  `payment_type_id` int(11) DEFAULT NULL,
  `br_date` datetime DEFAULT current_timestamp(),
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fin_bm_budget_request`
--

INSERT INTO `fin_bm_budget_request` (`budget_request_id`, `br_requestor`, `department_id`, `br_amount`, `purpose_id`, `payment_type_id`, `br_date`, `status_id`) VALUES
('BR0001', 'Jeffrey Cruz', 7, '4000000.00', 1, 1, '2023-03-13 14:37:38', 2),
('BR0002', 'Genicko Feliciano', 1, '6000000.00', 1, 2, '2023-03-13 14:39:24', 3);

-- --------------------------------------------------------

--
-- Table structure for table `fin_bm_expense_request`
--

CREATE TABLE `fin_bm_expense_request` (
  `expense_request_id` varchar(23) NOT NULL,
  `expr_date` datetime DEFAULT current_timestamp(),
  `expr_requestor` varchar(255) DEFAULT NULL,
  `expr_amount` decimal(10,2) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `purpose_id` int(11) DEFAULT NULL,
  `payment_type_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fin_bm_expense_request`
--

INSERT INTO `fin_bm_expense_request` (`expense_request_id`, `expr_date`, `expr_requestor`, `expr_amount`, `department_id`, `purpose_id`, `payment_type_id`, `status_id`) VALUES
('EXP0001', '2023-03-13 14:41:07', 'Kouji Villacuatro', '25000.00', 7, 2, 3, 2),
('EXP0002', '2023-03-13 14:41:21', 'Shanti Dope', '78000.00', 7, 2, 1, 2),
('EXP0003', '2023-03-13 22:11:58', 'Kent Rillo', '45000.00', 4, 2, 3, 3),
('EXP0004', '2023-03-13 22:28:19', 'Addie', '125000.00', 7, 2, 2, 2),
('EXP0005', '2023-03-13 23:40:23', 'Zack Kuragi', '80000.00', 1, 2, 3, 2),
('EXP0006', '2023-03-14 00:14:38', 'zxc', '2555.00', 1, 2, 1, 2),
('EXP0007', '2023-03-14 00:25:38', 'aaaah', '25252.00', 1, 2, 1, 2),
('EXP0008', '2023-03-14 04:01:19', 'Rillo', '23123.00', 3, 2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `fin_db_disbursement`
--

CREATE TABLE `fin_db_disbursement` (
  `disbursement_id` int(23) NOT NULL,
  `db_date` datetime DEFAULT current_timestamp(),
  `db_requestor` varchar(255) DEFAULT NULL,
  `db_amount` decimal(10,2) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `purpose_id` int(11) DEFAULT NULL,
  `payment_type_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fin_db_disbursement`
--

INSERT INTO `fin_db_disbursement` (`disbursement_id`, `db_date`, `db_requestor`, `db_amount`, `department_id`, `purpose_id`, `payment_type_id`, `status_id`) VALUES
(21, '2023-03-13 14:41:21', 'Shanti Dope', '78000.00', 7, 2, 1, 4),
(22, '2023-03-13 22:28:19', 'Addie', '125000.00', 7, 2, 2, 4),
(23, '2023-03-13 23:40:23', 'Zack Kuragi', '80000.00', 1, 2, 3, 4),
(24, '2023-03-14 00:14:38', 'zxc', '2555.00', 1, 2, 1, 4),
(25, '2023-03-14 00:25:38', 'aaaah', '25252.00', 1, 2, 1, 1),
(26, '2023-03-13 14:41:07', 'Kouji Villacuatro', '25000.00', 7, 2, 3, 4),
(27, '2023-03-14 04:01:19', 'Rillo', '23123.00', 3, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fin_department`
--

CREATE TABLE `fin_department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fin_department`
--

INSERT INTO `fin_department` (`department_id`, `department_name`) VALUES
(1, 'HR-1'),
(2, 'HR-2'),
(3, 'Core-1'),
(4, 'Core-2'),
(5, 'Logistics-1'),
(6, 'Logistics-2'),
(7, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `fin_gl_account_group`
--

CREATE TABLE `fin_gl_account_group` (
  `account_group_id` int(11) NOT NULL,
  `account_group_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fin_gl_account_group`
--

INSERT INTO `fin_gl_account_group` (`account_group_id`, `account_group_name`) VALUES
(1, 'Assets'),
(2, 'Disbursement'),
(3, 'Equity'),
(4, 'Revenue'),
(5, 'Liabilities');

-- --------------------------------------------------------

--
-- Table structure for table `fin_gl_account_type`
--

CREATE TABLE `fin_gl_account_type` (
  `account_type_id` int(11) NOT NULL,
  `account_type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fin_gl_account_type`
--

INSERT INTO `fin_gl_account_type` (`account_type_id`, `account_type_name`) VALUES
(1, 'Accounts Payable'),
(2, 'Accounts Receivable'),
(3, 'Cash'),
(4, 'Owner\'s Capital'),
(5, 'Expenses');

-- --------------------------------------------------------

--
-- Table structure for table `fin_gl_journal_entries`
--

CREATE TABLE `fin_gl_journal_entries` (
  `journal_entry_id` int(11) NOT NULL,
  `je_date` datetime DEFAULT current_timestamp(),
  `je_description` varchar(255) DEFAULT NULL,
  `account_type_id` int(11) DEFAULT NULL,
  `account_group_id` int(11) DEFAULT NULL,
  `debit` int(255) DEFAULT NULL,
  `credit` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fin_gl_journal_entries`
--

INSERT INTO `fin_gl_journal_entries` (`journal_entry_id`, `je_date`, `je_description`, `account_type_id`, `account_group_id`, `debit`, `credit`) VALUES
(2, '2023-03-14 01:40:44', 'To record accounts payable', 1, 5, 0, 89000),
(3, '2023-03-14 01:41:17', 'To record accounts receivable', 2, 1, 89000, 0),
(4, '2023-03-14 03:58:37', 'werwr', 2, 1, 123, 0),
(5, '2023-03-14 03:59:00', 'tyu', 4, 1, 123, 0),
(6, '2023-03-14 04:00:46', 'zxc', 3, 2, 0, 246);

-- --------------------------------------------------------

--
-- Table structure for table `fin_inv_invoice`
--

CREATE TABLE `fin_inv_invoice` (
  `invoice_id` int(11) NOT NULL,
  `invoice_date` datetime DEFAULT current_timestamp(),
  `invoice_description` varchar(255) DEFAULT NULL,
  `invoice_purpose_id` int(11) DEFAULT NULL,
  `invoice_quantity` decimal(10,2) DEFAULT NULL,
  `invoice_unit_cost` decimal(10,2) DEFAULT NULL,
  `invoice_amount` decimal(10,2) DEFAULT NULL,
  `invoice_total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fin_inv_invoice_purpose`
--

CREATE TABLE `fin_inv_invoice_purpose` (
  `invoice_purpose_id` int(11) NOT NULL,
  `invoice_purpose_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fin_inv_invoice_purpose`
--

INSERT INTO `fin_inv_invoice_purpose` (`invoice_purpose_id`, `invoice_purpose_name`) VALUES
(1, 'Goods'),
(2, 'Services');

-- --------------------------------------------------------

--
-- Table structure for table `fin_payment_type`
--

CREATE TABLE `fin_payment_type` (
  `payment_type_id` int(11) NOT NULL,
  `payment_type_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fin_payment_type`
--

INSERT INTO `fin_payment_type` (`payment_type_id`, `payment_type_name`) VALUES
(1, 'Cash'),
(2, 'Cheque'),
(3, 'E-Wallet');

-- --------------------------------------------------------

--
-- Table structure for table `fin_purpose`
--

CREATE TABLE `fin_purpose` (
  `purpose_id` int(11) NOT NULL,
  `purpose_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fin_purpose`
--

INSERT INTO `fin_purpose` (`purpose_id`, `purpose_name`) VALUES
(1, 'Department Budget'),
(2, 'Expense');

-- --------------------------------------------------------

--
-- Table structure for table `fin_status`
--

CREATE TABLE `fin_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fin_status`
--

INSERT INTO `fin_status` (`status_id`, `status_name`) VALUES
(1, 'pending'),
(2, 'accepted'),
(3, 'rejected'),
(4, 'released');

-- --------------------------------------------------------

--
-- Table structure for table `fin_users`
--

CREATE TABLE `fin_users` (
  `users_id` int(11) NOT NULL,
  `users_uid` tinytext NOT NULL,
  `users_pwd` longtext NOT NULL,
  `users_email` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fin_users`
--

INSERT INTO `fin_users` (`users_id`, `users_uid`, `users_pwd`, `users_email`) VALUES
(1, 'jeysi', '$2y$10$L8gF4Rbuw9Q5.U/60Ixoj.OqXiHNmLc4B1f5ylv6ZucoVkOhoyduG', 'jeysi@gmail.com'),
(2, 'admin', '$2y$10$Lm.RVXwu3sKCVyPJfEH5B.qxqYnQCYwsb2xhzEZTpYr2eiwXKcwee', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `hr1_applications`
--

CREATE TABLE `hr1_applications` (
  `id` varchar(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Type` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Date` datetime NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Pending',
  `File` varchar(255) NOT NULL,
  `Batch` int(11) NOT NULL,
  `Location` text NOT NULL,
  `job_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr1_applications`
--

INSERT INTO `hr1_applications` (`id`, `Firstname`, `Lastname`, `Department`, `Type`, `Email`, `Date`, `Gender`, `Status`, `File`, `Batch`, `Location`, `job_title`) VALUES
('64105e6451394', 'Aldion', 'Belo', 'Admin', 'Full-time', 'aldionbelo@gmail.com', '2023-03-14 19:45:40', 'Male', 'Reject', 'Assessment-for-Module-9 (3).docx', 0, '', 'Administrator'),
('6410602be1035', 'asdasdasd', 'sdfasd', 'Human_Resources', 'Full-time', 'sadfasdfa23@gmail.com', '2023-03-14 19:53:15', 'Male', 'Orientation', 'HR_1-Chapter-1-4.docx', 1, 'Room2', 'HR Manager');

-- --------------------------------------------------------

--
-- Table structure for table `hr1_competency`
--

CREATE TABLE `hr1_competency` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `task1` int(11) NOT NULL,
  `task2` int(11) NOT NULL,
  `task3` int(11) NOT NULL,
  `task4` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `progress` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `task` int(11) NOT NULL,
  `competency` text NOT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr1_competency`
--

INSERT INTO `hr1_competency` (`id`, `employee_name`, `department`, `job_title`, `task1`, `task2`, `task3`, `task4`, `start_date`, `end_date`, `progress`, `status`, `task`, `competency`, `no`) VALUES
(25, 'asdfasfasd', 'Human_Resources', 'HR Manager', 7, 0, 0, 0, '2023-03-14', '2023-03-21', 70, '', 7, 'Monitoring', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hr1_department`
--

CREATE TABLE `hr1_department` (
  `id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr1_department`
--

INSERT INTO `hr1_department` (`id`, `department`, `Description`) VALUES
(8, 'Human_Resources', 'Human Resources is the department in charge of all employees and employee-related operations.'),
(9, 'Logistics', ' the process of coordinating and moving resources—people, materials, inventory, and equipment—from one location to storage at the desired destination.'),
(10, 'Core', ''),
(11, 'Finance', 'a term for matters regarding the management, creation, and study of money and investments. It involves the use of credit and debt, securities, and investment to finance current projects using future income flows.'),
(12, 'Admin', ' support the smooth running of offices by carrying out clerical tasks and projects. As an administrator in the construction industry, you could be organising project meetings. You\'d be typing up documents, responding to business enquiries, drawing up contracts and providing customer service.');

-- --------------------------------------------------------

--
-- Table structure for table `hr1_employees`
--

CREATE TABLE `hr1_employees` (
  `id` varchar(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Date` datetime NOT NULL,
  `Age` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Contact` text NOT NULL,
  `File` longblob NOT NULL,
  `Type` text NOT NULL,
  `is_Status` varchar(255) NOT NULL DEFAULT 'New Hire Onboard',
  `job_title` varchar(255) NOT NULL,
  `is_archive` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr1_employees`
--

INSERT INTO `hr1_employees` (`id`, `Firstname`, `Lastname`, `Email`, `Department`, `Date`, `Age`, `Gender`, `Address`, `Contact`, `File`, `Type`, `is_Status`, `job_title`, `is_archive`) VALUES
('6410622d07c0e', 'asdasdasd', 'asdasd', 'asdasfgasdf2134@gmail.com', 'Human_Resources', '2023-03-14 20:01:49', '32', 'Male', 'Blk 5 lot 1 asdsdfgas', '12343215235123', 0x48525f312d436861707465722d312d342e646f6378, 'Full-time', 'Regular', 'HR Manager', '0');

-- --------------------------------------------------------

--
-- Table structure for table `hr1_employee_performance`
--

CREATE TABLE `hr1_employee_performance` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Years` bigint(255) NOT NULL,
  `attendance` int(255) NOT NULL,
  `punctuality` int(255) NOT NULL,
  `communication` int(255) NOT NULL,
  `quality` int(255) NOT NULL,
  `total_score` int(255) NOT NULL,
  `percentage` int(255) NOT NULL,
  `is_status` varchar(255) NOT NULL DEFAULT 'On Review'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr1_employee_performance`
--

INSERT INTO `hr1_employee_performance` (`id`, `employee_name`, `job_title`, `Department`, `Date`, `Years`, `attendance`, `punctuality`, `communication`, `quality`, `total_score`, `percentage`, `is_status`) VALUES
(15, 'sadfasd', 'fasdfasd', '', '2023-03-14', 0, 7, 6, 6, 8, 27, 68, 'On Review');

-- --------------------------------------------------------

--
-- Table structure for table `hr1_evaluate_emp`
--

CREATE TABLE `hr1_evaluate_emp` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `overall` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr1_jobposting`
--

CREATE TABLE `hr1_jobposting` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_des` text NOT NULL,
  `job_quali` varchar(255) NOT NULL,
  `salary` bigint(20) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `date_posted` date NOT NULL,
  `department` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `Vacancies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr1_jobposting`
--

INSERT INTO `hr1_jobposting` (`id`, `job_title`, `job_des`, `job_quali`, `salary`, `status`, `date_posted`, `department`, `type`, `Vacancies`) VALUES
(33, 'Administrator', 'A. Review future staffing schedules of each unit in order to plan anticipated staffing needs\r\nB. Assist with entering last minutes changes to the staffing schedule in the Time and Attendance Program\r\nC. Participate in the annual performance evaluation of the per diem and float pool RNs and ancillary staff\r\nD. Assist with staff scheduling for unit coverage when in services/training are planned, collaborating with nursing leadership and nursing education\r\nE. Copy typing and data entry\r\nF. Administration of company phones\r\nG. Administration of all necessary documents\r\nH. File correspondence\r\nI. Arrange and service meetings including conference rooms and refreshments\r\nJ. Provide cover for reception and other administrative team members', 'A. Co-ordinating meetings including conference rooms and refreshments\r\nB. Restaurant, hotel, flight etc reservations\r\nC. Dealing with outgoing and incoming mail\r\nD. Superior organizational skills and the ability to multi-task\r\nE. Scheduling of conferences', 30000, 'Active', '2023-03-15', 'Admin', 'Full-time', 2),
(34, 'HR Manager', 'asdasdasdas', 'asdfasdasdasd', 123412541, 'Active', '2023-03-16', 'Human_Resources', 'Full-time', 4),
(35, 'Project Management Staff ', 'asdasdasdasd', 'asfasdasdasd', 32314323, 'Active', '2023-03-17', 'Logistics', 'Part-time', 3);

-- --------------------------------------------------------

--
-- Table structure for table `hr1_seminar`
--

CREATE TABLE `hr1_seminar` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Batch` varchar(255) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr1_status_application`
--

CREATE TABLE `hr1_status_application` (
  `id` int(11) NOT NULL,
  `status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr1_status_application`
--

INSERT INTO `hr1_status_application` (`id`, `status_name`) VALUES
(1, 'Applied'),
(2, 'On-Review'),
(3, 'Exam'),
(4, 'Final Interview'),
(5, 'Offered'),
(6, 'Hired'),
(7, 'Initial Interview'),
(8, 'Reject'),
(9, 'Orientation'),
(10, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `hr1_status_competency`
--

CREATE TABLE `hr1_status_competency` (
  `id` int(11) NOT NULL,
  `status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr1_status_competency`
--

INSERT INTO `hr1_status_competency` (`id`, `status_name`) VALUES
(1, 'In-Progress');

-- --------------------------------------------------------

--
-- Table structure for table `hr1_status_employee`
--

CREATE TABLE `hr1_status_employee` (
  `id` int(11) NOT NULL,
  `status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr1_status_employee`
--

INSERT INTO `hr1_status_employee` (`id`, `status_name`) VALUES
(1, 'New hire Onboard'),
(2, 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `hr1_type`
--

CREATE TABLE `hr1_type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr1_type`
--

INSERT INTO `hr1_type` (`id`, `type`) VALUES
(1, 'Full-time'),
(2, 'Part-time');

-- --------------------------------------------------------

--
-- Table structure for table `hr1_upload`
--

CREATE TABLE `hr1_upload` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr1_upload`
--

INSERT INTO `hr1_upload` (`id`, `filename`) VALUES
(14, 'Certificate-of-Recognition.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `hr1_user_table`
--

CREATE TABLE `hr1_user_table` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `User_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr1_user_table`
--

INSERT INTO `hr1_user_table` (`id`, `Username`, `Password`, `User_type`) VALUES
(1, 'Admin@Admin', 'admin123', 1),
(2, 'Staff@Staff', 'staff123', 2),
(4, 'Employee', 'employee123', 3);

-- --------------------------------------------------------

--
-- Table structure for table `hr1_user_type`
--

CREATE TABLE `hr1_user_type` (
  `id` int(11) NOT NULL,
  `user_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr1_user_type`
--

INSERT INTO `hr1_user_type` (`id`, `user_title`) VALUES
(1, 'admin'),
(2, 'staff'),
(3, 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `hr2_admin_account`
--

CREATE TABLE `hr2_admin_account` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hr2_admin_account`
--

INSERT INTO `hr2_admin_account` (`id`, `name`, `email`, `password`) VALUES
(1, 'Ericka Aquino', 'admin@gmail.com', 'admin'),
(1, 'Ericka Aquino', 'admin@gmail.com', 'admin'),
(1, 'Erick', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `hr2_analytics_dashboard`
--

CREATE TABLE `hr2_analytics_dashboard` (
  `id` int(11) NOT NULL,
  `total_emp` int(11) NOT NULL,
  `total_leave` int(11) NOT NULL,
  `active_inactive` int(11) NOT NULL,
  `attendance_today` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr2_chc_files`
--

CREATE TABLE `hr2_chc_files` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `document_type` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr2_chc_vacancy`
--

CREATE TABLE `hr2_chc_vacancy` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr2_claimandreimbursement_reimbursement`
--

CREATE TABLE `hr2_claimandreimbursement_reimbursement` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `purpose` text NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `file_size` int(11) NOT NULL,
  `file_content` longblob NOT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending',
  `date_submitted` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL,
  `file_data` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr2_compensation_compe`
--

CREATE TABLE `hr2_compensation_compe` (
  `id` int(11) NOT NULL,
  `employee name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `type_compensation` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr2_ess_account`
--

CREATE TABLE `hr2_ess_account` (
  `id` int(11) NOT NULL,
  `e_name` varchar(255) NOT NULL,
  `e_age` varchar(255) NOT NULL,
  `e_birthdate` varchar(255) NOT NULL,
  `e_contactno` varchar(255) NOT NULL,
  `e_address` varchar(255) NOT NULL,
  `e_hiredate` timestamp NOT NULL DEFAULT current_timestamp(),
  `e_email` varchar(255) NOT NULL,
  `e_depart` varchar(255) NOT NULL,
  `e_position` varchar(255) NOT NULL,
  `e_password` varchar(255) NOT NULL,
  `total_hours_worked` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr2_ess_account`
--

INSERT INTO `hr2_ess_account` (`id`, `e_name`, `e_age`, `e_birthdate`, `e_contactno`, `e_address`, `e_hiredate`, `e_email`, `e_depart`, `e_position`, `e_password`, `total_hours_worked`) VALUES
(20, 'ericka', '22', '2023-03-23', '99999999999', 'asdds', '2023-03-07 17:54:03', 'ericka@gmail.com', 'Asset Staff', 'Manager', '9199a71a523314906ddd3a7fb56ca122', '5.72'),
(21, 'John Lawrence Domer', '33', '2023-03-15', '00000000000', 'asdasd', '2023-03-08 06:52:09', 'john@gmail.com', 'Office Staff', 'Manager', '527bd5b5d689e2c32ae974c6229ff785', '0.00'),
(22, 'Kyla Babs', '25', '2023-03-21', '77777777777', 'werwer', '2023-03-08 10:30:34', 'kyla@gmail.com', 'Admin Staff', 'Manager', '66c9cf70db2ea58979a224e618d50bda', '0.00'),
(23, 'rica babs', '26', '2023-03-24', '55555555555', 'asdasdasd', '2023-03-08 13:23:45', 'rica@gmail.com', 'Asset Staff', 'Manager', 'af539734a008c642ee93133553d74fd0', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `hr2_leave_leaves`
--

CREATE TABLE `hr2_leave_leaves` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `leavedate` date NOT NULL,
  `leavereason` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hr2_leave_leaves`
--

INSERT INTO `hr2_leave_leaves` (`name`, `email`, `department`, `leavedate`, `leavereason`, `status`, `id`) VALUES
('Ericka Aquino', 'ericka@gmail.com', 'Test Team', '2023-03-22', '<p>qweqweqwe</p>\r\n', 1, 13),
('Ericka Aquino', 'ericka@gmail.com', 'UX', '2023-03-21', '<p>qweqwe</p>\r\n', 1, 14),
('Ericka Aquino', 'ericka@gmail.com', 'Development', '2023-03-22', '<p>jhgjgjgjgjh</p>\r\n', 1, 15),
('Ericka Aquino', 'ericka@gmail.com', 'HR', '2023-03-21', '<p>asdasd</p>\r\n', 1, 16),
('Ericka Aquino', 'ericka@gmail.com', 'Development', '2023-03-23', '<p>sdfsdf</p>\r\n', 3, 17),
('Ericka Aquino', 'ericka@gmail.com', 'Finance', '2023-03-16', '<p>dasdasdasd</p>\r\n', 1, 18),
('Ericka Aquino', 'ericka@gmail.com', 'Development', '2023-03-21', '<p>asdasd</p>\r\n', 1, 19),
('Ericka Aquino', 'ericka@gmail.com', 'Test Team', '2023-03-13', '<p>gdfgdfgdfg</p>\r\n', 1, 20),
('ert', 'ericka@gmail.com', 'Test Team', '2023-03-24', '<p>dgfgdfg</p>\r\n', 1, 21),
('Ericka Aquino', 'ericka1621@gmail.com', 'Development', '2023-03-13', '<p>rtyrty</p>\r\n', 1, 22),
('Ericka Aquino', 'admin@gmail.com', 'Test Team', '2023-03-15', '<p>serserser</p>\r\n', 1, 23),
('Ericka Aquino', 'admin@gmail.com', 'Test Team', '2023-03-13', '<p>qweqweqweqwe</p>\r\n', 1, 24),
('Ericka Aquino', 'admin@gmail.com', 'Marketing', '2023-03-15', '<p>asdasdasd</p>\r\n', 1, 25),
('Ericka Aquino', 'admin@gmail.com', 'Test Team', '0000-00-00', '<p>ahhahahhahha</p>\r\n', 2, 26),
('Ericka Aquino', 'admin@gmail.com', 'Finance', '2023-03-08', '<p>hehhehehe</p>\r\n', 2, 27),
('Ericka Aquino', 'admin@gmail.com', 'Development', '2023-03-22', '<p>testing</p>\r\n', 2, 28);

-- --------------------------------------------------------

--
-- Table structure for table `hr2_payroll_fund`
--

CREATE TABLE `hr2_payroll_fund` (
  `req_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr2_payroll_salary`
--

CREATE TABLE `hr2_payroll_salary` (
  `employee_id` int(11) NOT NULL,
  `rate` float NOT NULL,
  `total_allowance` float NOT NULL,
  `sss_deduction` float NOT NULL,
  `pagibig_deduction` float NOT NULL,
  `philhealth_deduction` float NOT NULL,
  `compensation` float NOT NULL,
  `basic_salary` float NOT NULL,
  `overtime_rate` float NOT NULL,
  `gross_salary` decimal(10,2) NOT NULL,
  `total_hours_worked` float DEFAULT NULL,
  `hours_worked` decimal(10,2) NOT NULL,
  `overtime_hours` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr2_payroll_salary`
--

INSERT INTO `hr2_payroll_salary` (`employee_id`, `rate`, `total_allowance`, `sss_deduction`, `pagibig_deduction`, `philhealth_deduction`, `compensation`, `basic_salary`, `overtime_rate`, `gross_salary`, `total_hours_worked`, `hours_worked`, `overtime_hours`) VALUES
(20, 57, 0, 500, 500, 500, 1000, 0, 0, '8050.00', 150, '50.00', '2.00');

-- --------------------------------------------------------

--
-- Table structure for table `hr2_request_payslip`
--

CREATE TABLE `hr2_request_payslip` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_of_payslip` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr2_shift_schedule`
--

CREATE TABLE `hr2_shift_schedule` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `schedule_type` varchar(255) NOT NULL,
  `day_off` varchar(255) NOT NULL,
  `monday_start` varchar(255) NOT NULL,
  `monday_end` varchar(255) NOT NULL,
  `tuesday_start` varchar(255) NOT NULL,
  `tuesday_end` varchar(255) NOT NULL,
  `wednesday_start` varchar(255) NOT NULL,
  `wednesday_end` varchar(255) NOT NULL,
  `thursday_start` varchar(255) NOT NULL,
  `thursday_end` varchar(255) NOT NULL,
  `friday_start` varchar(255) NOT NULL,
  `friday_end` varchar(255) NOT NULL,
  `saturday_start` varchar(255) NOT NULL,
  `saturday_end` varchar(255) NOT NULL,
  `sunday_start` varchar(255) NOT NULL,
  `sunday_end` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr2_tna_attendance`
--

CREATE TABLE `hr2_tna_attendance` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `picture` varchar(255) NOT NULL,
  `picture_path` varchar(255) NOT NULL,
  `time_in` timestamp NOT NULL DEFAULT current_timestamp(),
  `time_out` timestamp NOT NULL DEFAULT current_timestamp(),
  `picture_out` varchar(255) NOT NULL,
  `total_hours_worked` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr2_tna_attendance`
--

INSERT INTO `hr2_tna_attendance` (`id`, `employee_id`, `date`, `picture`, `picture_path`, `time_in`, `time_out`, `picture_out`, `total_hours_worked`) VALUES
(44, 20, '2023-03-10 00:00:00', 'upload/640a1e8fe9f1d.png', '', '2023-03-09 17:59:43', '2023-03-09 19:30:27', 'upload/640a33d3b4fa2.png', '0.94');

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
(4, 'foods and beverages'),
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
('003', 'Electronics Sample', 2, 'This is electronics sample', 'Bestlink', 25),
('001', 'Intel Computer', 2, 'Test description', 'SM Supermalls', 100),
('002', 'Papers', 3, 'Papers only', 'Robinsons', 50),
('003', 'Electronics Sample', 2, 'This is electronics sample', 'Bestlink', 25);

-- --------------------------------------------------------

--
-- Table structure for table `log1_whs_inventory_view`
--

CREATE TABLE `log1_whs_inventory_view` (
  `item_id` varchar(50) DEFAULT NULL,
  `item_name` varchar(50) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `item_description` text DEFAULT NULL,
  `manufacturer` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `category_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_am_audit_items`
--

CREATE TABLE `log2_am_audit_items` (
  `audit_report_id` varchar(50) NOT NULL,
  `item_id` varchar(50) NOT NULL,
  `actual_count` int(11) NOT NULL,
  `accuracy` varchar(25) NOT NULL,
  `variance` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_am_audit_report`
--

CREATE TABLE `log2_am_audit_report` (
  `audit_report_id` varchar(50) NOT NULL,
  `report_title` varchar(50) NOT NULL,
  `conclusion` text NOT NULL,
  `category_type_id` int(11) NOT NULL,
  `author_id` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `last_update` datetime DEFAULT NULL,
  `status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_am_audit_report`
--

INSERT INTO `log2_am_audit_report` (`audit_report_id`, `report_title`, `conclusion`, `category_type_id`, `author_id`, `date_created`, `last_update`, `status_id`) VALUES
('001', 'Test Audit', 'Test Audit Scope', 2, 'sa12345', '2023-03-09 20:16:11', '2023-03-09 20:16:11', 1),
('100000000', 'lmao', '<p>hahaha</p>', 2, 'sa12345', '2023-03-14 14:41:46', NULL, 1),
('38010129', 'test555', '<p>hey</p>', 2, 'sa12345', '2023-03-14 14:57:04', NULL, 1),
('38200386', 'hahahaha123', '<p>lol something</p>', 2, 'sa12345', '2023-03-14 14:48:15', NULL, 1),
('5908868', 'Title1', '<p>test1</p>', 2, 'sa12345', '2023-03-14 22:54:02', NULL, 1),
('70679847', 'Test Title', '<p>may kulang ka tnga</p>', 3, 'sa12345', '2023-03-14 18:01:57', NULL, 1),
('99999999', 'hahaha', '<p>lol</p>', 2, 'sa12345', '2023-03-14 14:42:34', NULL, 1),
('001', 'Test Audit', 'Test Audit Scope', 2, 'sa12345', '2023-03-09 20:16:11', '2023-03-09 20:16:11', 1),
('100000000', 'lmao', '<p>hahaha</p>', 2, 'sa12345', '2023-03-14 14:41:46', NULL, 1),
('38010129', 'test555', '<p>hey</p>', 2, 'sa12345', '2023-03-14 14:57:04', NULL, 1),
('38200386', 'hahahaha123', '<p>lol something</p>', 2, 'sa12345', '2023-03-14 14:48:15', NULL, 1),
('5908868', 'Title1', '<p>test1</p>', 2, 'sa12345', '2023-03-14 22:54:02', NULL, 1),
('70679847', 'Test Title', '<p>may kulang ka tnga</p>', 3, 'sa12345', '2023-03-14 18:01:57', NULL, 1),
('99999999', 'hahaha', '<p>lol</p>', 2, 'sa12345', '2023-03-14 14:42:34', NULL, 1),
('001', 'Test Audit', 'Test Audit Scope', 2, 'sa12345', '2023-03-09 20:16:11', '2023-03-09 20:16:11', 1),
('100000000', 'lmao', '<p>hahaha</p>', 2, 'sa12345', '2023-03-14 14:41:46', NULL, 1),
('38010129', 'test555', '<p>hey</p>', 2, 'sa12345', '2023-03-14 14:57:04', NULL, 1),
('38200386', 'hahahaha123', '<p>lol something</p>', 2, 'sa12345', '2023-03-14 14:48:15', NULL, 1),
('5908868', 'Title1', '<p>test1</p>', 2, 'sa12345', '2023-03-14 22:54:02', NULL, 1),
('70679847', 'Test Title', '<p>may kulang ka tnga</p>', 3, 'sa12345', '2023-03-14 18:01:57', NULL, 1),
('99999999', 'hahaha', '<p>lol</p>', 2, 'sa12345', '2023-03-14 14:42:34', NULL, 1),
('001', 'Test Audit', 'Test Audit Scope', 2, 'sa12345', '2023-03-09 20:16:11', '2023-03-09 20:16:11', 1),
('100000000', 'lmao', '<p>hahaha</p>', 2, 'sa12345', '2023-03-14 14:41:46', NULL, 1),
('38010129', 'test555', '<p>hey</p>', 2, 'sa12345', '2023-03-14 14:57:04', NULL, 1),
('38200386', 'hahahaha123', '<p>lol something</p>', 2, 'sa12345', '2023-03-14 14:48:15', NULL, 1),
('5908868', 'Title1', '<p>test1</p>', 2, 'sa12345', '2023-03-14 22:54:02', NULL, 1),
('70679847', 'Test Title', '<p>may kulang ka tnga</p>', 3, 'sa12345', '2023-03-14 18:01:57', NULL, 1),
('99999999', 'hahaha', '<p>lol</p>', 2, 'sa12345', '2023-03-14 14:42:34', NULL, 1),
('001', 'Test Audit', 'Test Audit Scope', 2, 'sa12345', '2023-03-09 20:16:11', '2023-03-09 20:16:11', 1),
('100000000', 'lmao', '<p>hahaha</p>', 2, 'sa12345', '2023-03-14 14:41:46', NULL, 1),
('38010129', 'test555', '<p>hey</p>', 2, 'sa12345', '2023-03-14 14:57:04', NULL, 1),
('38200386', 'hahahaha123', '<p>lol something</p>', 2, 'sa12345', '2023-03-14 14:48:15', NULL, 1),
('5908868', 'Title1', '<p>test1</p>', 2, 'sa12345', '2023-03-14 22:54:02', NULL, 1),
('70679847', 'Test Title', '<p>may kulang ka tnga</p>', 3, 'sa12345', '2023-03-14 18:01:57', NULL, 1),
('99999999', 'hahaha', '<p>lol</p>', 2, 'sa12345', '2023-03-14 14:42:34', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `log2_am_audit_report_view`
--

CREATE TABLE `log2_am_audit_report_view` (
  `audit_report_id` varchar(50) DEFAULT NULL,
  `report_title` varchar(50) DEFAULT NULL,
  `conclusion` text DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `author_name` varchar(50) DEFAULT NULL,
  `author_role` varchar(50) DEFAULT NULL,
  `status_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_am_audit_status`
--

CREATE TABLE `log2_am_audit_status` (
  `audit_status_id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_am_audit_status`
--

INSERT INTO `log2_am_audit_status` (`audit_status_id`, `status_name`) VALUES
(1, 'ongoing'),
(2, 'done'),
(1, 'ongoing'),
(2, 'done'),
(1, 'ongoing'),
(2, 'done'),
(1, 'ongoing'),
(2, 'done'),
(1, 'ongoing'),
(2, 'done');

-- --------------------------------------------------------

--
-- Table structure for table `log2_dt_activity`
--

CREATE TABLE `log2_dt_activity` (
  `activity_id` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `executor_id` varchar(50) NOT NULL,
  `action_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_dt_file_manager`
--

CREATE TABLE `log2_dt_file_manager` (
  `document_id` varchar(50) NOT NULL,
  `document_name` varchar(50) NOT NULL,
  `document_size` double NOT NULL,
  `category_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `department_id` int(11) NOT NULL,
  `author_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_dt_file_manager`
--

INSERT INTO `log2_dt_file_manager` (`document_id`, `document_name`, `document_size`, `category_id`, `date_created`, `department_id`, `author_id`) VALUES
('19036222621', 'example.pdf', 0, 1, '2023-03-14 00:17:12', 1, 'sa12345'),
('30338669218', 'example.pdf', 0, 3, '2023-03-14 00:22:45', 1, 'sa12345'),
('34199959534', 'example.pdf', 0, 1, '2023-03-14 00:23:59', 1, 'sa12345'),
('37040879323', 'example.pdf', 24195, 3, '2023-03-14 00:25:33', 1, 'sa12345'),
('40603662404', 'example.pdf', 24043, 2, '2023-03-14 01:38:37', 1, 'sa12345'),
('32996445177', 'example.pdf', 24043, 1, '2023-03-14 01:50:38', 1, 'sa12345'),
('11544744911', 'example.pdf', 24104, 1, '2023-03-14 12:28:20', 1, 'sa12345'),
('73378995068', 'example.pdf', 24045, 1, '2023-03-14 12:29:40', 1, 'sa12345'),
('21339461533', 'example.pdf', 24115, 3, '2023-03-14 18:26:07', 1, 'sa12345'),
('19036222621', 'example.pdf', 0, 1, '2023-03-14 00:17:12', 1, 'sa12345'),
('30338669218', 'example.pdf', 0, 3, '2023-03-14 00:22:45', 1, 'sa12345'),
('34199959534', 'example.pdf', 0, 1, '2023-03-14 00:23:59', 1, 'sa12345'),
('37040879323', 'example.pdf', 24195, 3, '2023-03-14 00:25:33', 1, 'sa12345'),
('40603662404', 'example.pdf', 24043, 2, '2023-03-14 01:38:37', 1, 'sa12345'),
('32996445177', 'example.pdf', 24043, 1, '2023-03-14 01:50:38', 1, 'sa12345'),
('11544744911', 'example.pdf', 24104, 1, '2023-03-14 12:28:20', 1, 'sa12345'),
('73378995068', 'example.pdf', 24045, 1, '2023-03-14 12:29:40', 1, 'sa12345'),
('21339461533', 'example.pdf', 24115, 3, '2023-03-14 18:26:07', 1, 'sa12345'),
('19036222621', 'example.pdf', 0, 1, '2023-03-14 00:17:12', 1, 'sa12345'),
('30338669218', 'example.pdf', 0, 3, '2023-03-14 00:22:45', 1, 'sa12345'),
('34199959534', 'example.pdf', 0, 1, '2023-03-14 00:23:59', 1, 'sa12345'),
('37040879323', 'example.pdf', 24195, 3, '2023-03-14 00:25:33', 1, 'sa12345'),
('40603662404', 'example.pdf', 24043, 2, '2023-03-14 01:38:37', 1, 'sa12345'),
('32996445177', 'example.pdf', 24043, 1, '2023-03-14 01:50:38', 1, 'sa12345'),
('11544744911', 'example.pdf', 24104, 1, '2023-03-14 12:28:20', 1, 'sa12345'),
('73378995068', 'example.pdf', 24045, 1, '2023-03-14 12:29:40', 1, 'sa12345'),
('21339461533', 'example.pdf', 24115, 3, '2023-03-14 18:26:07', 1, 'sa12345'),
('19036222621', 'example.pdf', 0, 1, '2023-03-14 00:17:12', 1, 'sa12345'),
('30338669218', 'example.pdf', 0, 3, '2023-03-14 00:22:45', 1, 'sa12345'),
('34199959534', 'example.pdf', 0, 1, '2023-03-14 00:23:59', 1, 'sa12345'),
('37040879323', 'example.pdf', 24195, 3, '2023-03-14 00:25:33', 1, 'sa12345'),
('40603662404', 'example.pdf', 24043, 2, '2023-03-14 01:38:37', 1, 'sa12345'),
('32996445177', 'example.pdf', 24043, 1, '2023-03-14 01:50:38', 1, 'sa12345'),
('11544744911', 'example.pdf', 24104, 1, '2023-03-14 12:28:20', 1, 'sa12345'),
('73378995068', 'example.pdf', 24045, 1, '2023-03-14 12:29:40', 1, 'sa12345'),
('21339461533', 'example.pdf', 24115, 3, '2023-03-14 18:26:07', 1, 'sa12345'),
('19036222621', 'example.pdf', 0, 1, '2023-03-14 00:17:12', 1, 'sa12345'),
('30338669218', 'example.pdf', 0, 3, '2023-03-14 00:22:45', 1, 'sa12345'),
('34199959534', 'example.pdf', 0, 1, '2023-03-14 00:23:59', 1, 'sa12345'),
('37040879323', 'example.pdf', 24195, 3, '2023-03-14 00:25:33', 1, 'sa12345'),
('40603662404', 'example.pdf', 24043, 2, '2023-03-14 01:38:37', 1, 'sa12345'),
('32996445177', 'example.pdf', 24043, 1, '2023-03-14 01:50:38', 1, 'sa12345'),
('11544744911', 'example.pdf', 24104, 1, '2023-03-14 12:28:20', 1, 'sa12345'),
('73378995068', 'example.pdf', 24045, 1, '2023-03-14 12:29:40', 1, 'sa12345'),
('21339461533', 'example.pdf', 24115, 3, '2023-03-14 18:26:07', 1, 'sa12345');

-- --------------------------------------------------------

--
-- Table structure for table `log2_dt_file_manager_view`
--

CREATE TABLE `log2_dt_file_manager_view` (
  `document_id` varchar(50) DEFAULT NULL,
  `document_name` varchar(50) DEFAULT NULL,
  `document_size` double DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `author_id` varchar(50) DEFAULT NULL,
  `department_name` varchar(50) DEFAULT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `display_name` varchar(50) DEFAULT NULL,
  `account_type_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_dt_request`
--

CREATE TABLE `log2_dt_request` (
  `tracking_id` varchar(50) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `option_category` varchar(50) DEFAULT NULL,
  `purpose` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_released` datetime DEFAULT NULL,
  `requestor_id` varchar(50) NOT NULL,
  `requestor_dept_id` int(11) NOT NULL,
  `current_status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_dt_request`
--

INSERT INTO `log2_dt_request` (`tracking_id`, `receiver_id`, `category_id`, `option_category`, `purpose`, `date_created`, `date_released`, `requestor_id`, `requestor_dept_id`, `current_status_id`) VALUES
('11544744911', 2, 1, '', 'test', '2023-03-14 12:09:04', NULL, 'sa12345', 1, 4),
('21339461533', 1, 3, '', 'test', '2023-03-14 18:23:55', NULL, 'sa12345', 1, 4),
('32996445177', 3, 1, '', 'tara', '2023-03-14 01:48:11', NULL, 'sa12345', 1, 4),
('40451173419', 3, 2, '', 'lol', '2023-03-14 01:40:18', NULL, 'sa12345', 1, 1),
('40603662404', 3, 2, '', 'low', '0000-00-00 00:00:00', NULL, 'sa12345', 1, 4),
('73378995068', 1, 1, '', 'pareq', '2023-03-14 12:29:07', NULL, 'sa12345', 1, 4),
('11544744911', 2, 1, '', 'test', '2023-03-14 12:09:04', NULL, 'sa12345', 1, 4),
('21339461533', 1, 3, '', 'test', '2023-03-14 18:23:55', NULL, 'sa12345', 1, 4),
('32996445177', 3, 1, '', 'tara', '2023-03-14 01:48:11', NULL, 'sa12345', 1, 4),
('40451173419', 3, 2, '', 'lol', '2023-03-14 01:40:18', NULL, 'sa12345', 1, 1),
('40603662404', 3, 2, '', 'low', '0000-00-00 00:00:00', NULL, 'sa12345', 1, 4),
('73378995068', 1, 1, '', 'pareq', '2023-03-14 12:29:07', NULL, 'sa12345', 1, 4),
('11544744911', 2, 1, '', 'test', '2023-03-14 12:09:04', NULL, 'sa12345', 1, 4),
('21339461533', 1, 3, '', 'test', '2023-03-14 18:23:55', NULL, 'sa12345', 1, 4),
('32996445177', 3, 1, '', 'tara', '2023-03-14 01:48:11', NULL, 'sa12345', 1, 4),
('40451173419', 3, 2, '', 'lol', '2023-03-14 01:40:18', NULL, 'sa12345', 1, 1),
('40603662404', 3, 2, '', 'low', '0000-00-00 00:00:00', NULL, 'sa12345', 1, 4),
('73378995068', 1, 1, '', 'pareq', '2023-03-14 12:29:07', NULL, 'sa12345', 1, 4),
('11544744911', 2, 1, '', 'test', '2023-03-14 12:09:04', NULL, 'sa12345', 1, 4),
('21339461533', 1, 3, '', 'test', '2023-03-14 18:23:55', NULL, 'sa12345', 1, 4),
('32996445177', 3, 1, '', 'tara', '2023-03-14 01:48:11', NULL, 'sa12345', 1, 4),
('40451173419', 3, 2, '', 'lol', '2023-03-14 01:40:18', NULL, 'sa12345', 1, 1),
('40603662404', 3, 2, '', 'low', '0000-00-00 00:00:00', NULL, 'sa12345', 1, 4),
('73378995068', 1, 1, '', 'pareq', '2023-03-14 12:29:07', NULL, 'sa12345', 1, 4),
('11544744911', 2, 1, '', 'test', '2023-03-14 12:09:04', NULL, 'sa12345', 1, 4),
('21339461533', 1, 3, '', 'test', '2023-03-14 18:23:55', NULL, 'sa12345', 1, 4),
('32996445177', 3, 1, '', 'tara', '2023-03-14 01:48:11', NULL, 'sa12345', 1, 4),
('40451173419', 3, 2, '', 'lol', '2023-03-14 01:40:18', NULL, 'sa12345', 1, 1),
('40603662404', 3, 2, '', 'low', '0000-00-00 00:00:00', NULL, 'sa12345', 1, 4),
('73378995068', 1, 1, '', 'pareq', '2023-03-14 12:29:07', NULL, 'sa12345', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `log2_dt_request_view`
--

CREATE TABLE `log2_dt_request_view` (
  `tracking_id` varchar(50) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `option_category` varchar(50) DEFAULT NULL,
  `purpose` text DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_released` datetime DEFAULT NULL,
  `requestor_id` varchar(50) DEFAULT NULL,
  `requestor_dept_id` int(11) DEFAULT NULL,
  `current_status_id` int(11) DEFAULT NULL,
  `receiver_department` varchar(50) DEFAULT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `requestor_name` varchar(50) DEFAULT NULL,
  `department_name` varchar(50) DEFAULT NULL,
  `status_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_dt_status`
--

CREATE TABLE `log2_dt_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_dt_status`
--

INSERT INTO `log2_dt_status` (`status_id`, `status_name`) VALUES
(1, 'received'),
(2, 'review'),
(3, 'work in progress'),
(4, 'released'),
(5, 'declined'),
(1, 'received'),
(2, 'review'),
(3, 'work in progress'),
(4, 'released'),
(5, 'declined'),
(1, 'received'),
(2, 'review'),
(3, 'work in progress'),
(4, 'released'),
(5, 'declined'),
(1, 'received'),
(2, 'review'),
(3, 'work in progress'),
(4, 'released'),
(5, 'declined'),
(1, 'received'),
(2, 'review'),
(3, 'work in progress'),
(4, 'released'),
(5, 'declined');

-- --------------------------------------------------------

--
-- Table structure for table `log2_dt_templates`
--

CREATE TABLE `log2_dt_templates` (
  `template_id` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` varchar(35) NOT NULL,
  `is_enabled` int(11) NOT NULL DEFAULT 1,
  `content` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_dt_templates`
--

INSERT INTO `log2_dt_templates` (`template_id`, `category_id`, `description`, `is_enabled`, `content`, `date_created`) VALUES
('7691679236', 2, 'hey pre', 1, '<p>lolzzzz</p>', '2023-03-13 16:08:06'),
('7737399416', 2, 'wala', 1, '<p>test</p>', '2023-03-13 14:25:57'),
('7691679236', 2, 'hey pre', 1, '<p>lolzzzz</p>', '2023-03-13 16:08:06'),
('7737399416', 2, 'wala', 1, '<p>test</p>', '2023-03-13 14:25:57'),
('7691679236', 2, 'hey pre', 1, '<p>lolzzzz</p>', '2023-03-13 16:08:06'),
('7737399416', 2, 'wala', 1, '<p>test</p>', '2023-03-13 14:25:57'),
('7691679236', 2, 'hey pre', 1, '<p>lolzzzz</p>', '2023-03-13 16:08:06'),
('7737399416', 2, 'wala', 1, '<p>test</p>', '2023-03-13 14:25:57'),
('7691679236', 2, 'hey pre', 1, '<p>lolzzzz</p>', '2023-03-13 16:08:06'),
('7737399416', 2, 'wala', 1, '<p>test</p>', '2023-03-13 14:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `log2_dt_templates_view`
--

CREATE TABLE `log2_dt_templates_view` (
  `template_id` varchar(50) DEFAULT NULL,
  `description` varchar(35) DEFAULT NULL,
  `is_enabled` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `category_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_dt_tracking`
--

CREATE TABLE `log2_dt_tracking` (
  `tracking_id` varchar(50) NOT NULL,
  `action_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status_id` int(11) NOT NULL,
  `remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_dt_tracking`
--

INSERT INTO `log2_dt_tracking` (`tracking_id`, `action_date`, `status_id`, `remarks`) VALUES
('40603662404', '2023-03-14 01:04:00', 1, NULL),
('40603662404', '2023-03-14 01:37:51', 2, 'wew'),
('40603662404', '2023-03-14 01:38:07', 3, 'hahaha'),
('40603662404', '2023-03-14 01:38:37', 4, 'lol'),
('40451173419', '2023-03-14 01:40:18', 1, NULL),
('32996445177', '2023-03-14 01:48:11', 1, NULL),
('32996445177', '2023-03-14 01:48:33', 2, 'hello par'),
('32996445177', '2023-03-14 01:48:40', 3, 'babaha'),
('32996445177', '2023-03-14 01:50:38', 4, 'ito na'),
('11544744911', '2023-03-14 12:09:04', 1, NULL),
('11544744911', '2023-03-14 12:27:40', 2, 'par'),
('11544744911', '2023-03-14 12:27:51', 3, 'taaaaa'),
('11544744911', '2023-03-14 12:28:19', 4, 'hahaha'),
('73378995068', '2023-03-14 12:29:07', 1, NULL),
('73378995068', '2023-03-14 12:29:20', 2, 'dadada'),
('73378995068', '2023-03-14 12:29:27', 3, 'teasdaw'),
('73378995068', '2023-03-14 12:29:40', 4, 'wala lang'),
('21339461533', '2023-03-14 18:23:55', 1, NULL),
('21339461533', '2023-03-14 18:24:56', 2, 'test'),
('21339461533', '2023-03-14 18:25:16', 3, 'taseasd'),
('21339461533', '2023-03-14 18:26:07', 4, 'ito na'),
('40603662404', '2023-03-14 01:04:00', 1, NULL),
('40603662404', '2023-03-14 01:37:51', 2, 'wew'),
('40603662404', '2023-03-14 01:38:07', 3, 'hahaha'),
('40603662404', '2023-03-14 01:38:37', 4, 'lol'),
('40451173419', '2023-03-14 01:40:18', 1, NULL),
('32996445177', '2023-03-14 01:48:11', 1, NULL),
('32996445177', '2023-03-14 01:48:33', 2, 'hello par'),
('32996445177', '2023-03-14 01:48:40', 3, 'babaha'),
('32996445177', '2023-03-14 01:50:38', 4, 'ito na'),
('11544744911', '2023-03-14 12:09:04', 1, NULL),
('11544744911', '2023-03-14 12:27:40', 2, 'par'),
('11544744911', '2023-03-14 12:27:51', 3, 'taaaaa'),
('11544744911', '2023-03-14 12:28:19', 4, 'hahaha'),
('73378995068', '2023-03-14 12:29:07', 1, NULL),
('73378995068', '2023-03-14 12:29:20', 2, 'dadada'),
('73378995068', '2023-03-14 12:29:27', 3, 'teasdaw'),
('73378995068', '2023-03-14 12:29:40', 4, 'wala lang'),
('21339461533', '2023-03-14 18:23:55', 1, NULL),
('21339461533', '2023-03-14 18:24:56', 2, 'test'),
('21339461533', '2023-03-14 18:25:16', 3, 'taseasd'),
('21339461533', '2023-03-14 18:26:07', 4, 'ito na'),
('40603662404', '2023-03-14 01:04:00', 1, NULL),
('40603662404', '2023-03-14 01:37:51', 2, 'wew'),
('40603662404', '2023-03-14 01:38:07', 3, 'hahaha'),
('40603662404', '2023-03-14 01:38:37', 4, 'lol'),
('40451173419', '2023-03-14 01:40:18', 1, NULL),
('32996445177', '2023-03-14 01:48:11', 1, NULL),
('32996445177', '2023-03-14 01:48:33', 2, 'hello par'),
('32996445177', '2023-03-14 01:48:40', 3, 'babaha'),
('32996445177', '2023-03-14 01:50:38', 4, 'ito na'),
('11544744911', '2023-03-14 12:09:04', 1, NULL),
('11544744911', '2023-03-14 12:27:40', 2, 'par'),
('11544744911', '2023-03-14 12:27:51', 3, 'taaaaa'),
('11544744911', '2023-03-14 12:28:19', 4, 'hahaha'),
('73378995068', '2023-03-14 12:29:07', 1, NULL),
('73378995068', '2023-03-14 12:29:20', 2, 'dadada'),
('73378995068', '2023-03-14 12:29:27', 3, 'teasdaw'),
('73378995068', '2023-03-14 12:29:40', 4, 'wala lang'),
('21339461533', '2023-03-14 18:23:55', 1, NULL),
('21339461533', '2023-03-14 18:24:56', 2, 'test'),
('21339461533', '2023-03-14 18:25:16', 3, 'taseasd'),
('21339461533', '2023-03-14 18:26:07', 4, 'ito na'),
('40603662404', '2023-03-14 01:04:00', 1, NULL),
('40603662404', '2023-03-14 01:37:51', 2, 'wew'),
('40603662404', '2023-03-14 01:38:07', 3, 'hahaha'),
('40603662404', '2023-03-14 01:38:37', 4, 'lol'),
('40451173419', '2023-03-14 01:40:18', 1, NULL),
('32996445177', '2023-03-14 01:48:11', 1, NULL),
('32996445177', '2023-03-14 01:48:33', 2, 'hello par'),
('32996445177', '2023-03-14 01:48:40', 3, 'babaha'),
('32996445177', '2023-03-14 01:50:38', 4, 'ito na'),
('11544744911', '2023-03-14 12:09:04', 1, NULL),
('11544744911', '2023-03-14 12:27:40', 2, 'par'),
('11544744911', '2023-03-14 12:27:51', 3, 'taaaaa'),
('11544744911', '2023-03-14 12:28:19', 4, 'hahaha'),
('73378995068', '2023-03-14 12:29:07', 1, NULL),
('73378995068', '2023-03-14 12:29:20', 2, 'dadada'),
('73378995068', '2023-03-14 12:29:27', 3, 'teasdaw'),
('73378995068', '2023-03-14 12:29:40', 4, 'wala lang'),
('21339461533', '2023-03-14 18:23:55', 1, NULL),
('21339461533', '2023-03-14 18:24:56', 2, 'test'),
('21339461533', '2023-03-14 18:25:16', 3, 'taseasd'),
('21339461533', '2023-03-14 18:26:07', 4, 'ito na'),
('40603662404', '2023-03-14 01:04:00', 1, NULL),
('40603662404', '2023-03-14 01:37:51', 2, 'wew'),
('40603662404', '2023-03-14 01:38:07', 3, 'hahaha'),
('40603662404', '2023-03-14 01:38:37', 4, 'lol'),
('40451173419', '2023-03-14 01:40:18', 1, NULL),
('32996445177', '2023-03-14 01:48:11', 1, NULL),
('32996445177', '2023-03-14 01:48:33', 2, 'hello par'),
('32996445177', '2023-03-14 01:48:40', 3, 'babaha'),
('32996445177', '2023-03-14 01:50:38', 4, 'ito na'),
('11544744911', '2023-03-14 12:09:04', 1, NULL),
('11544744911', '2023-03-14 12:27:40', 2, 'par'),
('11544744911', '2023-03-14 12:27:51', 3, 'taaaaa'),
('11544744911', '2023-03-14 12:28:19', 4, 'hahaha'),
('73378995068', '2023-03-14 12:29:07', 1, NULL),
('73378995068', '2023-03-14 12:29:20', 2, 'dadada'),
('73378995068', '2023-03-14 12:29:27', 3, 'teasdaw'),
('73378995068', '2023-03-14 12:29:40', 4, 'wala lang'),
('21339461533', '2023-03-14 18:23:55', 1, NULL),
('21339461533', '2023-03-14 18:24:56', 2, 'test'),
('21339461533', '2023-03-14 18:25:16', 3, 'taseasd'),
('21339461533', '2023-03-14 18:26:07', 4, 'ito na');

-- --------------------------------------------------------

--
-- Table structure for table `log2_dt_tracking_view`
--

CREATE TABLE `log2_dt_tracking_view` (
  `tracking_id` varchar(50) DEFAULT NULL,
  `action_date` datetime DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `date_released` datetime DEFAULT NULL,
  `status_name` varchar(50) DEFAULT NULL,
  `receiver` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_delivery_req`
--

CREATE TABLE `log2_fm_delivery_req` (
  `tracking_id` int(11) NOT NULL,
  `requestor_id` int(11) NOT NULL,
  `pickup_location` int(11) NOT NULL,
  `drop_off_location` int(11) NOT NULL,
  `date_requested` int(11) NOT NULL,
  `document_name` int(11) NOT NULL,
  `document_size` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `fleet_driver_id` int(11) NOT NULL,
  `fleet_delivery_status_id` int(11) NOT NULL,
  `is_received` int(11) NOT NULL,
  `date_received` int(11) NOT NULL,
  `note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_fleets`
--

CREATE TABLE `log2_fm_fleets` (
  `fleet_id` varchar(50) NOT NULL,
  `fleet_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_gearbox_type`
--

CREATE TABLE `log2_fm_gearbox_type` (
  `gearbox_type_id` int(11) NOT NULL,
  `gearbox_type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_fm_gearbox_type`
--

INSERT INTO `log2_fm_gearbox_type` (`gearbox_type_id`, `gearbox_type_name`) VALUES
(1, 'automatic'),
(2, 'manual'),
(1, 'automatic'),
(2, 'manual'),
(1, 'automatic'),
(2, 'manual'),
(1, 'automatic'),
(2, 'manual'),
(1, 'automatic'),
(2, 'manual');

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_model_types`
--

CREATE TABLE `log2_fm_model_types` (
  `model_type_id` int(11) NOT NULL,
  `model_type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_fm_model_types`
--

INSERT INTO `log2_fm_model_types` (`model_type_id`, `model_type_name`) VALUES
(1, 'sedan'),
(2, 'vans'),
(3, 'trucks'),
(1, 'sedan'),
(2, 'vans'),
(3, 'trucks'),
(1, 'sedan'),
(2, 'vans'),
(3, 'trucks');

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_vehicles`
--

CREATE TABLE `log2_fm_vehicles` (
  `vehicle_id` varchar(50) NOT NULL,
  `img_name` varchar(50) NOT NULL,
  `make` varchar(50) NOT NULL,
  `plate` varchar(50) NOT NULL,
  `model_type_id` int(11) NOT NULL,
  `gearbox_type_id` int(11) NOT NULL,
  `color` varchar(50) NOT NULL,
  `no_seaters` int(11) NOT NULL,
  `odometer` varchar(50) NOT NULL,
  `dimensions` varchar(50) NOT NULL,
  `fleet_id` varchar(50) DEFAULT NULL,
  `vehicle_status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_fm_vehicles`
--

INSERT INTO `log2_fm_vehicles` (`vehicle_id`, `img_name`, `make`, `plate`, `model_type_id`, `gearbox_type_id`, `color`, `no_seaters`, `odometer`, `dimensions`, `fleet_id`, `vehicle_status_id`) VALUES
('vh6406da084a6fc', 'vh6406da084a6fc.jpg', 'test', 'test', 1, 1, '#DD0F20', 4, '5000', '2500x2500x2500', NULL, 1),
('vh6407041ed951b', 'vh6407041ed951b.jpg', 'Test Vehicle', 'TYT-424', 1, 1, '#DD0F20', 0, '2000', '250x250x250', NULL, 1),
('vh64070541d41c0', 'vh64070541d41c0.jpg', 'Truck Test', 'TRK-211', 3, 1, '#DD0F20', 0, '2500', '2500x2500x2500', NULL, 1),
('vh640730eced607', 'vh640730eced607.jpg', 'Vios', 'XLR-200', 1, 1, '#DD0F20', 4, '5000', '250x250x250', NULL, 1),
('vh64077b3add49d', 'vh64077b3add49d.jpg', 'Vios Red', 'WKN-2020', 1, 1, '#DD0F20', 4, '2500', '2500x2500', NULL, 1),
('vh640d546e5f4ec', 'vh640d546e5f4ec.jpg', 'dawdawdwadawd', 'dawdwawddwa', 1, 1, '#DD0F20', 0, 'dwdwdwddwdwdwad', 'dwad', NULL, 1),
('vh64101b8fcced9', 'vh64101b8fcced9.png', 'yrdy', 'test', 1, 1, '#DD0F20', 4, '124', '14', NULL, 1),
('vh6406da084a6fc', 'vh6406da084a6fc.jpg', 'test', 'test', 1, 1, '#DD0F20', 4, '5000', '2500x2500x2500', NULL, 1),
('vh6407041ed951b', 'vh6407041ed951b.jpg', 'Test Vehicle', 'TYT-424', 1, 1, '#DD0F20', 0, '2000', '250x250x250', NULL, 1),
('vh64070541d41c0', 'vh64070541d41c0.jpg', 'Truck Test', 'TRK-211', 3, 1, '#DD0F20', 0, '2500', '2500x2500x2500', NULL, 1),
('vh640730eced607', 'vh640730eced607.jpg', 'Vios', 'XLR-200', 1, 1, '#DD0F20', 4, '5000', '250x250x250', NULL, 1),
('vh64077b3add49d', 'vh64077b3add49d.jpg', 'Vios Red', 'WKN-2020', 1, 1, '#DD0F20', 4, '2500', '2500x2500', NULL, 1),
('vh640d546e5f4ec', 'vh640d546e5f4ec.jpg', 'dawdawdwadawd', 'dawdwawddwa', 1, 1, '#DD0F20', 0, 'dwdwdwddwdwdwad', 'dwad', NULL, 1),
('vh64101b8fcced9', 'vh64101b8fcced9.png', 'yrdy', 'test', 1, 1, '#DD0F20', 4, '124', '14', NULL, 1),
('vh6406da084a6fc', 'vh6406da084a6fc.jpg', 'test', 'test', 1, 1, '#DD0F20', 4, '5000', '2500x2500x2500', NULL, 1),
('vh6407041ed951b', 'vh6407041ed951b.jpg', 'Test Vehicle', 'TYT-424', 1, 1, '#DD0F20', 0, '2000', '250x250x250', NULL, 1),
('vh64070541d41c0', 'vh64070541d41c0.jpg', 'Truck Test', 'TRK-211', 3, 1, '#DD0F20', 0, '2500', '2500x2500x2500', NULL, 1),
('vh640730eced607', 'vh640730eced607.jpg', 'Vios', 'XLR-200', 1, 1, '#DD0F20', 4, '5000', '250x250x250', NULL, 1),
('vh64077b3add49d', 'vh64077b3add49d.jpg', 'Vios Red', 'WKN-2020', 1, 1, '#DD0F20', 4, '2500', '2500x2500', NULL, 1),
('vh640d546e5f4ec', 'vh640d546e5f4ec.jpg', 'dawdawdwadawd', 'dawdwawddwa', 1, 1, '#DD0F20', 0, 'dwdwdwddwdwdwad', 'dwad', NULL, 1),
('vh64101b8fcced9', 'vh64101b8fcced9.png', 'yrdy', 'test', 1, 1, '#DD0F20', 4, '124', '14', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_vehicles_view`
--

CREATE TABLE `log2_fm_vehicles_view` (
  `vehicle_id` varchar(50) DEFAULT NULL,
  `img_name` varchar(50) DEFAULT NULL,
  `make` varchar(50) DEFAULT NULL,
  `plate` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `no_seaters` int(11) DEFAULT NULL,
  `odometer` varchar(50) DEFAULT NULL,
  `dimensions` varchar(50) DEFAULT NULL,
  `model_type_name` varchar(50) DEFAULT NULL,
  `gearbox_type_name` varchar(50) DEFAULT NULL,
  `fleet_id` varchar(50) DEFAULT NULL,
  `status_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_vehicle_status`
--

CREATE TABLE `log2_fm_vehicle_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_fm_vehicle_status`
--

INSERT INTO `log2_fm_vehicle_status` (`status_id`, `status_name`) VALUES
(1, 'available'),
(2, 'reserved'),
(3, 'unavailable'),
(1, 'available'),
(2, 'reserved'),
(3, 'unavailable'),
(1, 'available'),
(2, 'reserved'),
(3, 'unavailable');

-- --------------------------------------------------------

--
-- Table structure for table `log2_vp_pr`
--

CREATE TABLE `log2_vp_pr` (
  `pr_id` varchar(50) NOT NULL,
  `title` varchar(25) NOT NULL,
  `body` text NOT NULL,
  `file_name` varchar(50) DEFAULT NULL,
  `file_size` double DEFAULT NULL,
  `author_id` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `pr_status_id` int(11) NOT NULL DEFAULT 1,
  `request_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_vp_pr`
--

INSERT INTO `log2_vp_pr` (`pr_id`, `title`, `body`, `file_name`, `file_size`, `author_id`, `date_created`, `end_date`, `pr_status_id`, `request_category_id`) VALUES
('001', 'PR Title', 'This is a test only', 'test.docx', 0, 'sa12345', '2023-03-08 14:02:19', '2023-03-08 14:02:19', 2, 2),
('002', 'Intel Computers ', 'Hello, We need a 100 pcs of computers that has a good quality and can provide a speed of work to our employees.', 'test_pr.docx', 0, 'sa12345', '2023-03-08 17:31:07', '2023-03-08 17:31:07', 2, 3),
('003', 'Test No File', 'Test No File', '', 0, 'sa12345', '2023-03-08 18:51:07', '2023-03-08 18:51:07', 2, 1),
('1234', 'Hello', 'hahahha hello', NULL, NULL, 'sa12345', '2023-03-13 20:09:38', '2023-03-13 20:09:38', 2, 1),
('001', 'PR Title', 'This is a test only', 'test.docx', 0, 'sa12345', '2023-03-08 14:02:19', '2023-03-08 14:02:19', 2, 2),
('002', 'Intel Computers ', 'Hello, We need a 100 pcs of computers that has a good quality and can provide a speed of work to our employees.', 'test_pr.docx', 0, 'sa12345', '2023-03-08 17:31:07', '2023-03-08 17:31:07', 2, 3),
('003', 'Test No File', 'Test No File', '', 0, 'sa12345', '2023-03-08 18:51:07', '2023-03-08 18:51:07', 2, 1),
('1234', 'Hello', 'hahahha hello', NULL, NULL, 'sa12345', '2023-03-13 20:09:38', '2023-03-13 20:09:38', 2, 1),
('001', 'PR Title', 'This is a test only', 'test.docx', 0, 'sa12345', '2023-03-08 14:02:19', '2023-03-08 14:02:19', 2, 2),
('002', 'Intel Computers ', 'Hello, We need a 100 pcs of computers that has a good quality and can provide a speed of work to our employees.', 'test_pr.docx', 0, 'sa12345', '2023-03-08 17:31:07', '2023-03-08 17:31:07', 2, 3),
('003', 'Test No File', 'Test No File', '', 0, 'sa12345', '2023-03-08 18:51:07', '2023-03-08 18:51:07', 2, 1),
('1234', 'Hello', 'hahahha hello', NULL, NULL, 'sa12345', '2023-03-13 20:09:38', '2023-03-13 20:09:38', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `log2_vp_pr_category`
--

CREATE TABLE `log2_vp_pr_category` (
  `request_category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_vp_pr_category`
--

INSERT INTO `log2_vp_pr_category` (`request_category_id`, `category_name`) VALUES
(1, 'electronics'),
(2, 'vehicles'),
(3, 'office supplies'),
(1, 'electronics'),
(2, 'vehicles'),
(3, 'office supplies'),
(1, 'electronics'),
(2, 'vehicles'),
(3, 'office supplies');

-- --------------------------------------------------------

--
-- Table structure for table `log2_vp_pr_status`
--

CREATE TABLE `log2_vp_pr_status` (
  `pr_status_id` int(11) NOT NULL,
  `pr_status_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_vp_pr_status`
--

INSERT INTO `log2_vp_pr_status` (`pr_status_id`, `pr_status_name`) VALUES
(1, 'pending'),
(2, 'ongoing'),
(3, 'ended'),
(1, 'pending'),
(2, 'ongoing'),
(3, 'ended'),
(1, 'pending'),
(2, 'ongoing'),
(3, 'ended');

-- --------------------------------------------------------

--
-- Table structure for table `log2_vp_pr_view`
--

CREATE TABLE `log2_vp_pr_view` (
  `pr_id` varchar(50) DEFAULT NULL,
  `title` varchar(25) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `file_name` varchar(50) DEFAULT NULL,
  `author_id` varchar(50) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `pr_status_id` int(11) DEFAULT NULL,
  `request_category_id` int(11) DEFAULT NULL,
  `display_name` varchar(50) DEFAULT NULL,
  `account_type_name` varchar(50) DEFAULT NULL,
  `pr_status_name` varchar(25) DEFAULT NULL,
  `category_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_vp_vendors`
--

CREATE TABLE `log2_vp_vendors` (
  `vendor_id` varchar(50) NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `otp` varchar(20) NOT NULL,
  `is_otp_verified` tinyint(1) NOT NULL DEFAULT 0,
  `is_account_verified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_vp_vendors`
--

INSERT INTO `log2_vp_vendors` (`vendor_id`, `display_name`, `password`, `email_address`, `otp`, `is_otp_verified`, `is_account_verified`) VALUES
('001', 'Vendor Test', '001', 'gcristianber@gmail.com', '590128', 0, 1),
('002', 'Slippery Meow', '002', 'slipperymeow27@gmail.com', '363177', 0, 1),
('001', 'Vendor Test', '001', 'gcristianber@gmail.com', '590128', 0, 1),
('002', 'Slippery Meow', '002', 'slipperymeow27@gmail.com', '363177', 0, 1),
('001', 'Vendor Test', '001', 'gcristianber@gmail.com', '590128', 0, 1),
('002', 'Slippery Meow', '002', 'slipperymeow27@gmail.com', '363177', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `log2_vp_vendor_invites`
--

CREATE TABLE `log2_vp_vendor_invites` (
  `vendor_invite_id` varchar(50) NOT NULL,
  `purchase_request_id` varchar(50) NOT NULL,
  `vendor_id` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `sent_date` datetime DEFAULT NULL,
  `is_accepted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_vp_vendor_invites`
--

INSERT INTO `log2_vp_vendor_invites` (`vendor_invite_id`, `purchase_request_id`, `vendor_id`, `body`, `file_name`, `sent_date`, `is_accepted`) VALUES
('640a1c0dce516', '001', '001', '', '', NULL, 0),
('640a1c0dcee19', '001', '002', '', '', NULL, 0),
('6410479570706', '003', '001', '', '', NULL, 0),
('6410479577db4', '003', '002', '', '', NULL, 0),
('640a1c0dce516', '001', '001', '', '', NULL, 0),
('640a1c0dcee19', '001', '002', '', '', NULL, 0),
('6410479570706', '003', '001', '', '', NULL, 0),
('6410479577db4', '003', '002', '', '', NULL, 0),
('640a1c0dce516', '001', '001', '', '', NULL, 0),
('640a1c0dcee19', '001', '002', '', '', NULL, 0),
('6410479570706', '003', '001', '', '', NULL, 0),
('6410479577db4', '003', '002', '', '', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `log2_vr_reports`
--

CREATE TABLE `log2_vr_reports` (
  `report_id` varchar(50) NOT NULL,
  `reservation_id` varchar(50) NOT NULL,
  `report_body` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rejected_budget_request`
--

CREATE TABLE `rejected_budget_request` (
  `rejected_budget_request_id` int(11) NOT NULL,
  `rejected_budget_request_date` datetime DEFAULT current_timestamp(),
  `rejected_budget_request_requestor` varchar(255) DEFAULT NULL,
  `rejected_budget_request_amount` decimal(10,2) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `purpose_id` int(11) DEFAULT NULL,
  `payment_type_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rejected_budget_request`
--

INSERT INTO `rejected_budget_request` (`rejected_budget_request_id`, `rejected_budget_request_date`, `rejected_budget_request_requestor`, `rejected_budget_request_amount`, `department_id`, `purpose_id`, `payment_type_id`, `status_id`) VALUES
(0, '2023-03-13 14:39:24', 'Genicko Feliciano', '6000000.00', 1, 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `rejected_expense_request`
--

CREATE TABLE `rejected_expense_request` (
  `rejected_expense_request_id` int(11) NOT NULL,
  `rejected_expense_request_date` datetime NOT NULL DEFAULT current_timestamp(),
  `rejected_expense_request_requestor` varchar(255) NOT NULL,
  `rejected_expense_request_amount` decimal(10,2) NOT NULL,
  `department_id` int(11) NOT NULL,
  `purpose_id` int(11) NOT NULL,
  `payment_type_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rejected_expense_request`
--

INSERT INTO `rejected_expense_request` (`rejected_expense_request_id`, `rejected_expense_request_date`, `rejected_expense_request_requestor`, `rejected_expense_request_amount`, `department_id`, `purpose_id`, `payment_type_id`, `status_id`) VALUES
(1, '2023-03-13 22:11:58', 'Kent Rillo', '45000.00', 4, 2, 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_payable_reports`
--
ALTER TABLE `account_payable_reports`
  ADD PRIMARY KEY (`db_id`);

--
-- Indexes for table `core1_cm_customerlist`
--
ALTER TABLE `core1_cm_customerlist`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `core1_dp`
--
ALTER TABLE `core1_dp`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `core1_fm_vehiclelist`
--
ALTER TABLE `core1_fm_vehiclelist`
  ADD PRIMARY KEY (`fleet_id`);

--
-- Indexes for table `fin_bm_annual_budget`
--
ALTER TABLE `fin_bm_annual_budget`
  ADD PRIMARY KEY (`ab_id`);

--
-- Indexes for table `fin_bm_budget_allocation`
--
ALTER TABLE `fin_bm_budget_allocation`
  ADD PRIMARY KEY (`budget_allocation_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `purpose_id` (`purpose_id`),
  ADD KEY `payment_type_id` (`payment_type_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `fin_bm_budget_request`
--
ALTER TABLE `fin_bm_budget_request`
  ADD PRIMARY KEY (`budget_request_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `purpose_id` (`purpose_id`),
  ADD KEY `payment_type_id` (`payment_type_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `fin_bm_expense_request`
--
ALTER TABLE `fin_bm_expense_request`
  ADD PRIMARY KEY (`expense_request_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `purpose_id` (`purpose_id`),
  ADD KEY `payment_type_id` (`payment_type_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `fin_db_disbursement`
--
ALTER TABLE `fin_db_disbursement`
  ADD PRIMARY KEY (`disbursement_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `purpose_id` (`purpose_id`),
  ADD KEY `payment_type_id` (`payment_type_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `fin_department`
--
ALTER TABLE `fin_department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `fin_gl_account_group`
--
ALTER TABLE `fin_gl_account_group`
  ADD PRIMARY KEY (`account_group_id`);

--
-- Indexes for table `fin_gl_account_type`
--
ALTER TABLE `fin_gl_account_type`
  ADD PRIMARY KEY (`account_type_id`);

--
-- Indexes for table `fin_gl_journal_entries`
--
ALTER TABLE `fin_gl_journal_entries`
  ADD PRIMARY KEY (`journal_entry_id`),
  ADD KEY `account_type_id` (`account_type_id`),
  ADD KEY `account_group_id` (`account_group_id`);

--
-- Indexes for table `fin_inv_invoice`
--
ALTER TABLE `fin_inv_invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `invoice_purpose_id` (`invoice_purpose_id`);

--
-- Indexes for table `fin_inv_invoice_purpose`
--
ALTER TABLE `fin_inv_invoice_purpose`
  ADD PRIMARY KEY (`invoice_purpose_id`);

--
-- Indexes for table `fin_payment_type`
--
ALTER TABLE `fin_payment_type`
  ADD PRIMARY KEY (`payment_type_id`);

--
-- Indexes for table `fin_purpose`
--
ALTER TABLE `fin_purpose`
  ADD PRIMARY KEY (`purpose_id`);

--
-- Indexes for table `fin_status`
--
ALTER TABLE `fin_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `fin_users`
--
ALTER TABLE `fin_users`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `hr1_applications`
--
ALTER TABLE `hr1_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr1_competency`
--
ALTER TABLE `hr1_competency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr1_department`
--
ALTER TABLE `hr1_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr1_employees`
--
ALTER TABLE `hr1_employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Status` (`is_Status`);

--
-- Indexes for table `hr1_employee_performance`
--
ALTER TABLE `hr1_employee_performance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr1_evaluate_emp`
--
ALTER TABLE `hr1_evaluate_emp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN KEY` (`overall`);

--
-- Indexes for table `hr1_jobposting`
--
ALTER TABLE `hr1_jobposting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department` (`department`);

--
-- Indexes for table `hr1_seminar`
--
ALTER TABLE `hr1_seminar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr1_status_application`
--
ALTER TABLE `hr1_status_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr1_status_competency`
--
ALTER TABLE `hr1_status_competency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr1_status_employee`
--
ALTER TABLE `hr1_status_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr1_type`
--
ALTER TABLE `hr1_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr1_upload`
--
ALTER TABLE `hr1_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr1_user_table`
--
ALTER TABLE `hr1_user_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `User_type` (`User_type`);

--
-- Indexes for table `hr1_user_type`
--
ALTER TABLE `hr1_user_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr2_analytics_dashboard`
--
ALTER TABLE `hr2_analytics_dashboard`
  ADD PRIMARY KEY (`id`),
  ADD KEY `total leave` (`total_leave`),
  ADD KEY `total employee` (`total_emp`),
  ADD KEY `attendance today` (`attendance_today`);

--
-- Indexes for table `hr2_chc_files`
--
ALTER TABLE `hr2_chc_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr2_chc_vacancy`
--
ALTER TABLE `hr2_chc_vacancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr2_claimandreimbursement_reimbursement`
--
ALTER TABLE `hr2_claimandreimbursement_reimbursement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reimbursement_frk` (`employee_id`);

--
-- Indexes for table `hr2_compensation_compe`
--
ALTER TABLE `hr2_compensation_compe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr2_ess_account`
--
ALTER TABLE `hr2_ess_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr2_leave_leaves`
--
ALTER TABLE `hr2_leave_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr2_payroll_fund`
--
ALTER TABLE `hr2_payroll_fund`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `hr2_payroll_salary`
--
ALTER TABLE `hr2_payroll_salary`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `hr2_request_payslip`
--
ALTER TABLE `hr2_request_payslip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr2_shift_schedule`
--
ALTER TABLE `hr2_shift_schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee id` (`employee_id`);

--
-- Indexes for table `hr2_tna_attendance`
--
ALTER TABLE `hr2_tna_attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `rejected_budget_request`
--
ALTER TABLE `rejected_budget_request`
  ADD PRIMARY KEY (`rejected_budget_request_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `purpose_id` (`purpose_id`),
  ADD KEY `payment_type_id` (`payment_type_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `rejected_expense_request`
--
ALTER TABLE `rejected_expense_request`
  ADD PRIMARY KEY (`rejected_expense_request_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `purpose_id` (`purpose_id`),
  ADD KEY `payment_type_id` (`payment_type_id`),
  ADD KEY `status_id` (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_payable_reports`
--
ALTER TABLE `account_payable_reports`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `core1_cm_customerlist`
--
ALTER TABLE `core1_cm_customerlist`
  MODIFY `c_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `core1_dp`
--
ALTER TABLE `core1_dp`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `core1_fm_vehiclelist`
--
ALTER TABLE `core1_fm_vehiclelist`
  MODIFY `fleet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fin_bm_annual_budget`
--
ALTER TABLE `fin_bm_annual_budget`
  MODIFY `ab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `fin_db_disbursement`
--
ALTER TABLE `fin_db_disbursement`
  MODIFY `disbursement_id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `fin_gl_account_group`
--
ALTER TABLE `fin_gl_account_group`
  MODIFY `account_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fin_gl_account_type`
--
ALTER TABLE `fin_gl_account_type`
  MODIFY `account_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fin_gl_journal_entries`
--
ALTER TABLE `fin_gl_journal_entries`
  MODIFY `journal_entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fin_inv_invoice_purpose`
--
ALTER TABLE `fin_inv_invoice_purpose`
  MODIFY `invoice_purpose_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fin_users`
--
ALTER TABLE `fin_users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hr1_competency`
--
ALTER TABLE `hr1_competency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `hr1_department`
--
ALTER TABLE `hr1_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hr1_employee_performance`
--
ALTER TABLE `hr1_employee_performance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hr1_evaluate_emp`
--
ALTER TABLE `hr1_evaluate_emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `hr1_jobposting`
--
ALTER TABLE `hr1_jobposting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `hr1_seminar`
--
ALTER TABLE `hr1_seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hr1_status_application`
--
ALTER TABLE `hr1_status_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hr1_status_competency`
--
ALTER TABLE `hr1_status_competency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hr1_status_employee`
--
ALTER TABLE `hr1_status_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hr1_type`
--
ALTER TABLE `hr1_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hr1_upload`
--
ALTER TABLE `hr1_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hr1_user_table`
--
ALTER TABLE `hr1_user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hr1_user_type`
--
ALTER TABLE `hr1_user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hr2_analytics_dashboard`
--
ALTER TABLE `hr2_analytics_dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hr2_chc_files`
--
ALTER TABLE `hr2_chc_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hr2_chc_vacancy`
--
ALTER TABLE `hr2_chc_vacancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hr2_claimandreimbursement_reimbursement`
--
ALTER TABLE `hr2_claimandreimbursement_reimbursement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `hr2_compensation_compe`
--
ALTER TABLE `hr2_compensation_compe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hr2_ess_account`
--
ALTER TABLE `hr2_ess_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `hr2_leave_leaves`
--
ALTER TABLE `hr2_leave_leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `hr2_payroll_fund`
--
ALTER TABLE `hr2_payroll_fund`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hr2_payroll_salary`
--
ALTER TABLE `hr2_payroll_salary`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `hr2_request_payslip`
--
ALTER TABLE `hr2_request_payslip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hr2_shift_schedule`
--
ALTER TABLE `hr2_shift_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hr2_tna_attendance`
--
ALTER TABLE `hr2_tna_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `rejected_expense_request`
--
ALTER TABLE `rejected_expense_request`
  MODIFY `rejected_expense_request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fin_bm_budget_allocation`
--
ALTER TABLE `fin_bm_budget_allocation`
  ADD CONSTRAINT `fin_bm_budget_allocation_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `fin_department` (`department_id`),
  ADD CONSTRAINT `fin_bm_budget_allocation_ibfk_2` FOREIGN KEY (`purpose_id`) REFERENCES `fin_purpose` (`purpose_id`),
  ADD CONSTRAINT `fin_bm_budget_allocation_ibfk_3` FOREIGN KEY (`payment_type_id`) REFERENCES `fin_payment_type` (`payment_type_id`),
  ADD CONSTRAINT `fin_bm_budget_allocation_ibfk_4` FOREIGN KEY (`status_id`) REFERENCES `fin_status` (`status_id`);

--
-- Constraints for table `fin_bm_budget_request`
--
ALTER TABLE `fin_bm_budget_request`
  ADD CONSTRAINT `fin_bm_budget_request_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `fin_department` (`department_id`),
  ADD CONSTRAINT `fin_bm_budget_request_ibfk_2` FOREIGN KEY (`purpose_id`) REFERENCES `fin_purpose` (`purpose_id`),
  ADD CONSTRAINT `fin_bm_budget_request_ibfk_3` FOREIGN KEY (`payment_type_id`) REFERENCES `fin_payment_type` (`payment_type_id`),
  ADD CONSTRAINT `fin_bm_budget_request_ibfk_4` FOREIGN KEY (`status_id`) REFERENCES `fin_status` (`status_id`);

--
-- Constraints for table `fin_bm_expense_request`
--
ALTER TABLE `fin_bm_expense_request`
  ADD CONSTRAINT `fin_bm_expense_request_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `fin_department` (`department_id`),
  ADD CONSTRAINT `fin_bm_expense_request_ibfk_2` FOREIGN KEY (`purpose_id`) REFERENCES `fin_purpose` (`purpose_id`),
  ADD CONSTRAINT `fin_bm_expense_request_ibfk_3` FOREIGN KEY (`payment_type_id`) REFERENCES `fin_payment_type` (`payment_type_id`),
  ADD CONSTRAINT `fin_bm_expense_request_ibfk_4` FOREIGN KEY (`status_id`) REFERENCES `fin_status` (`status_id`);

--
-- Constraints for table `fin_db_disbursement`
--
ALTER TABLE `fin_db_disbursement`
  ADD CONSTRAINT `fin_db_disbursement_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `fin_department` (`department_id`),
  ADD CONSTRAINT `fin_db_disbursement_ibfk_2` FOREIGN KEY (`purpose_id`) REFERENCES `fin_purpose` (`purpose_id`),
  ADD CONSTRAINT `fin_db_disbursement_ibfk_3` FOREIGN KEY (`payment_type_id`) REFERENCES `fin_payment_type` (`payment_type_id`),
  ADD CONSTRAINT `fin_db_disbursement_ibfk_4` FOREIGN KEY (`status_id`) REFERENCES `fin_status` (`status_id`);

--
-- Constraints for table `fin_gl_journal_entries`
--
ALTER TABLE `fin_gl_journal_entries`
  ADD CONSTRAINT `fin_gl_journal_entries_ibfk_1` FOREIGN KEY (`account_type_id`) REFERENCES `fin_gl_account_type` (`account_type_id`),
  ADD CONSTRAINT `fin_gl_journal_entries_ibfk_2` FOREIGN KEY (`account_group_id`) REFERENCES `fin_gl_account_group` (`account_group_id`);

--
-- Constraints for table `fin_inv_invoice`
--
ALTER TABLE `fin_inv_invoice`
  ADD CONSTRAINT `fin_inv_invoice_ibfk_1` FOREIGN KEY (`invoice_purpose_id`) REFERENCES `fin_inv_invoice_purpose` (`invoice_purpose_id`);

--
-- Constraints for table `hr1_user_table`
--
ALTER TABLE `hr1_user_table`
  ADD CONSTRAINT `hr1_user_table_ibfk_1` FOREIGN KEY (`User_type`) REFERENCES `hr1_user_type` (`id`);

--
-- Constraints for table `hr2_analytics_dashboard`
--
ALTER TABLE `hr2_analytics_dashboard`
  ADD CONSTRAINT `attendance today` FOREIGN KEY (`attendance_today`) REFERENCES `hr2_tna_attendance` (`id`),
  ADD CONSTRAINT `total employee` FOREIGN KEY (`total_emp`) REFERENCES `hr2_ess_account` (`id`),
  ADD CONSTRAINT `total leave` FOREIGN KEY (`total_leave`) REFERENCES `hr2_leave_leaves` (`id`);

--
-- Constraints for table `hr2_claimandreimbursement_reimbursement`
--
ALTER TABLE `hr2_claimandreimbursement_reimbursement`
  ADD CONSTRAINT `reimbursement_frk` FOREIGN KEY (`employee_id`) REFERENCES `hr2_ess_account` (`id`);

--
-- Constraints for table `hr2_compensation_compe`
--
ALTER TABLE `hr2_compensation_compe`
  ADD CONSTRAINT `compensation` FOREIGN KEY (`id`) REFERENCES `hr2_payroll_salary` (`employee_id`);

--
-- Constraints for table `hr2_payroll_salary`
--
ALTER TABLE `hr2_payroll_salary`
  ADD CONSTRAINT `payroll` FOREIGN KEY (`employee_id`) REFERENCES `hr2_ess_account` (`id`);

--
-- Constraints for table `hr2_shift_schedule`
--
ALTER TABLE `hr2_shift_schedule`
  ADD CONSTRAINT `employee id` FOREIGN KEY (`employee_id`) REFERENCES `hr2_ess_account` (`id`);

--
-- Constraints for table `hr2_tna_attendance`
--
ALTER TABLE `hr2_tna_attendance`
  ADD CONSTRAINT `hr2_tna_attendance_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `hr2_ess_account` (`id`);

--
-- Constraints for table `rejected_budget_request`
--
ALTER TABLE `rejected_budget_request`
  ADD CONSTRAINT `rejected_budget_request_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `fin_department` (`department_id`),
  ADD CONSTRAINT `rejected_budget_request_ibfk_2` FOREIGN KEY (`purpose_id`) REFERENCES `fin_purpose` (`purpose_id`),
  ADD CONSTRAINT `rejected_budget_request_ibfk_3` FOREIGN KEY (`payment_type_id`) REFERENCES `fin_payment_type` (`payment_type_id`),
  ADD CONSTRAINT `rejected_budget_request_ibfk_4` FOREIGN KEY (`status_id`) REFERENCES `fin_status` (`status_id`);

--
-- Constraints for table `rejected_expense_request`
--
ALTER TABLE `rejected_expense_request`
  ADD CONSTRAINT `rejected_expense_request_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `fin_department` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rejected_expense_request_ibfk_2` FOREIGN KEY (`purpose_id`) REFERENCES `fin_purpose` (`purpose_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rejected_expense_request_ibfk_3` FOREIGN KEY (`payment_type_id`) REFERENCES `fin_payment_type` (`payment_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rejected_expense_request_ibfk_4` FOREIGN KEY (`status_id`) REFERENCES `fin_status` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
