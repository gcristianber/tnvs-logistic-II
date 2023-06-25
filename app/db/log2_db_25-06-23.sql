-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 05:21 PM
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
  `avatar_path` text NOT NULL,
  `role_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_um_accounts`
--

INSERT INTO `admin_um_accounts` (`user_id`, `display_name`, `username`, `password`, `avatar_path`, `role_id`, `department_id`, `status_id`) VALUES
('001', 'Super Admin - Logistic', 'super_admin@logistic', 'l0gistic@!', 'uploads\\users\\001\\avatar\\avatar.jpg', 1, 1, 1),
('L001', 'Staff', 'staff@logistic', 'l0gistic@staff!', 'uploads\\users\\L001\\avatar\\avatar.jpg', 3, 1, 1),
('L002', 'Audit Manager', 'audit.manager@logistic', 'l0gistic@manager!', '', 4, 1, 1),
('L003', 'Fleet Manager', 'fleet.manager@logistic', 'l0gistic@manager!', '', 5, 1, 1),
('L004', 'Vendor Manager', 'vendor.manager@logistic', 'l0gistic@manager!', '', 6, 1, 1),
('L005', 'Fleet Driver 1', 'fleet.driver_1@logistic', 'l0gistic@driver!', '', 7, 1, 1);

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
(3, 'staff'),
(4, 'audit manager'),
(5, 'fleet manager'),
(6, 'vendor manager'),
(7, 'fleet driver'),
(8, 'vendor');

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
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log1_whs_category`
--

INSERT INTO `log1_whs_category` (`category_id`, `category_name`) VALUES
(1, 'office supplies'),
(2, 'foods and beverages'),
(3, 'stationery'),
(4, 'clothes ');

-- --------------------------------------------------------

--
-- Table structure for table `log1_whs_inventory`
--

CREATE TABLE `log1_whs_inventory` (
  `product_id` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_cost` double NOT NULL,
  `total` double NOT NULL,
  `purchase_date` datetime NOT NULL,
  `inbound_date` datetime NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log1_whs_inventory`
--

INSERT INTO `log1_whs_inventory` (`product_id`, `product_name`, `quantity`, `unit_cost`, `total`, `purchase_date`, `inbound_date`, `location_id`) VALUES
('PID-001', 'Banana', 69, 10, 690, '2023-05-09 04:41:38', '2023-05-09 04:41:38', 1),
('PID-002', 'Keyboard', 10, 2000, 20000, '2023-05-09 07:03:22', '2023-05-09 07:03:22', 2),
('PID-003', 'Apple', 57, 10, 570, '2023-05-09 08:16:24', '2023-05-09 08:16:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log1_whs_locations`
--

CREATE TABLE `log1_whs_locations` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(50) NOT NULL,
  `abc` varchar(2) NOT NULL,
  `frequency_count` varchar(50) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `last_audit_date` datetime NOT NULL DEFAULT current_timestamp(),
  `location_status_id` int(11) NOT NULL,
  `next_count_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log1_whs_locations`
--

INSERT INTO `log1_whs_locations` (`location_id`, `location_name`, `abc`, `frequency_count`, `product_category_id`, `last_audit_date`, `location_status_id`, `next_count_date`) VALUES
(1, 'Section A', 'a', 'weekly', 3, '2023-05-23 06:02:05', 1, '2023-05-30'),
(2, 'Section B', 'b', 'monthly', 1, '2023-05-13 08:09:51', 1, '2023-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `log1_whs_location_status`
--

CREATE TABLE `log1_whs_location_status` (
  `status_id` int(11) NOT NULL,
  `location_status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log1_whs_location_status`
--

INSERT INTO `log1_whs_location_status` (`status_id`, `location_status_name`) VALUES
(1, 'up to date'),
(2, 'need an update');

-- --------------------------------------------------------

--
-- Table structure for table `log1_whs_transfers`
--

CREATE TABLE `log1_whs_transfers` (
  `transfer_id` varchar(50) NOT NULL,
  `location_id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `transfer_type_id` int(11) NOT NULL,
  `author_id` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL,
  `is_audited` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log1_whs_transfers`
--

INSERT INTO `log1_whs_transfers` (`transfer_id`, `location_id`, `subject`, `transfer_type_id`, `author_id`, `date_created`, `is_audited`) VALUES
('TID1240014899', 2, 'Delivery', 2, 'L001', '2023-05-21 18:17:54', 1),
('TID1240018812', 1, 'Restocking', 1, 'L001', '2023-05-21 16:27:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log1_whs_transfer_items`
--

CREATE TABLE `log1_whs_transfer_items` (
  `transfer_item_id` varchar(50) NOT NULL,
  `transfer_id` varchar(50) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `variance` bigint(20) NOT NULL,
  `actual_count` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log1_whs_transfer_items`
--

INSERT INTO `log1_whs_transfer_items` (`transfer_item_id`, `transfer_id`, `product_id`, `variance`, `actual_count`) VALUES
('T1002316618', 'TID1240014899', 'PID-003', -50, 57),
('T1002318155', 'TID1240018812', 'PID-001', -5, 577),
('T1002318221', 'TID1240018812', 'PID-002', 5, 577);

-- --------------------------------------------------------

--
-- Table structure for table `log1_whs_transfer_types`
--

CREATE TABLE `log1_whs_transfer_types` (
  `type_id` int(11) NOT NULL,
  `transfer_type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log1_whs_transfer_types`
--

INSERT INTO `log1_whs_transfer_types` (`type_id`, `transfer_type_name`) VALUES
(1, 'inbound'),
(2, 'outbound');

-- --------------------------------------------------------

--
-- Table structure for table `log2_am_attachments`
--

CREATE TABLE `log2_am_attachments` (
  `file_id` varchar(50) NOT NULL,
  `report_id` varchar(50) NOT NULL,
  `file_name` text NOT NULL,
  `size` double NOT NULL,
  `file_path` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_am_attachments`
--

INSERT INTO `log2_am_attachments` (`file_id`, `report_id`, `file_name`, `size`, `file_path`, `date_added`) VALUES
('FILE-23051202979', 'AUDIT-23051269969', 'Gordora-Cristianber-OJT-Resume.docx', 51335, 'uploads/audit_management/AUDIT-23051269969/', '2023-05-12 06:06:25'),
('FILE-2305122C90B', 'AUDIT-23051226FBD', 'Video-Submission-Form-Researchers-Details.docx', 17273, 'uploads/audit_management/AUDIT-23051226FBD/', '2023-05-12 06:05:32'),
('FILE-2305128714A', 'AUDIT-23051269969', 'DATA-DICTIONARY.docx', 1088305, 'uploads/audit_management/AUDIT-23051269969/', '2023-05-12 06:06:25'),
('FILE-230512981FB', 'AUDIT-2305123F285', 'Gordora-Cristianber-OJT-Resume.docx', 51335, 'uploads/audit_management/AUDIT-2305123F285/', '2023-05-12 05:51:08'),
('FILE-230512D985A', 'AUDIT-23051261439', 'bpaversion1.9.drawio', 100040, 'uploads/audit_management/AUDIT-23051261439/', '2023-05-12 05:59:00'),
('FILE-230512DAC6C', 'AUDIT-23051261439', 'LOGISTIC_2_DIAGRAMS_UPDATED_08-05-2023.drawio', 35849, 'uploads/audit_management/AUDIT-23051261439/', '2023-05-12 05:59:00'),
('FILE-230512F610E', 'AUDIT-23051226FBD', 'Mga-gagawin-pi(1).docx', 585896, 'uploads/audit_management/AUDIT-23051226FBD/', '2023-05-12 06:05:32'),
('FILE-230512FCE9C', 'AUDIT-23051261439', 'LOGISTIC_2_DIAGRAMS_UPDATED_08-05-2023 2.0.drawio', 35849, 'uploads/audit_management/AUDIT-23051261439/', '2023-05-12 05:59:00'),
('FILE-23051391B66', 'AUDIT-23051367CEA', 'DATA-DICTIONARY.docx', 1088305, 'uploads/audit_management/AUDIT-23051367CEA/', '2023-05-13 06:41:31'),
('FILE-23051392023', 'AUDIT-23051367CEA', 'Video-Submission-Form-Researchers-Details.docx', 17273, 'uploads/audit_management/AUDIT-23051367CEA/', '2023-05-13 06:41:31'),
('FILE-230513A1B10', 'AUDIT-23051356202', 'DATA-DICTIONARY.docx', 1088305, 'uploads/audit_management/AUDIT-23051356202/', '2023-05-13 03:46:09'),
('FILE-230513C266F', 'AUDIT-23051356202', 'Gordora-Cristianber-OJT-Resume.docx', 51335, 'uploads/audit_management/AUDIT-23051356202/', '2023-05-13 03:46:09'),
('FILE-230513E4772', 'AUDIT-23051367CEA', 'Mga-gagawin-pi(1).docx', 585896, 'uploads/audit_management/AUDIT-23051367CEA/', '2023-05-13 06:41:31'),
('FILE-230513F3210', 'AUDIT-230513369E5', 'DATA-DICTIONARY.docx', 1088305, 'uploads/audit_management/AUDIT-230513369E5/', '2023-05-13 08:09:51'),
('FILE-2305211284D', 'AUDIT-230521F19D6', '', 0, 'uploads/audit_management/AUDIT-230521F19D6/', '2023-05-21 07:25:42'),
('FILE-230521FD332', 'AUDIT-2305214ED43', '6fb45ba93adc4f368b3ef0ce32bf813f.jpg', 463485, 'uploads/audit_management/AUDIT-2305214ED43/', '2023-05-21 12:00:50'),
('FILE-230523B2BC8', 'AUDIT-23052341D8C', 'file-1.docx', 5120, 'uploads/audit_management/AUDIT-23052341D8C/', '2023-05-23 06:02:05');

-- --------------------------------------------------------

--
-- Table structure for table `log2_am_line_items`
--

CREATE TABLE `log2_am_line_items` (
  `line_item_id` varchar(50) NOT NULL,
  `report_id` varchar(50) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `actual_count` int(11) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_am_line_items`
--

INSERT INTO `log2_am_line_items` (`line_item_id`, `report_id`, `product_id`, `product_name`, `quantity`, `actual_count`, `location_id`) VALUES
('645e606c05fb7', 'AUDIT-2305123F285', 'PID-002', '', 10, 10, 2),
('645e62440380b', 'AUDIT-23051261439', 'PID-001', '', 69, 69, 1),
('645e6244043ce', 'AUDIT-23051261439', 'PID-003', '', 57, 57, 1),
('645e63ccef843', 'AUDIT-23051226FBD', 'PID-002', '', 10, 10, 2),
('645e64013c3e7', 'AUDIT-23051269969', 'PID-002', 'Keyboard', 10, 10, 2),
('645f29afb95b3', 'AUDIT-230513369E5', 'PID-002', 'Keyboard', 10, 0, 2),
('645f94a19eab4', 'AUDIT-23051356202', 'PID-001', 'Banana', 69, 69, 1),
('645f94a1a0174', 'AUDIT-23051356202', 'PID-003', 'Apple', 57, 57, 1),
('645fbdbbb3e09', 'AUDIT-23051367CEA', 'PID-001', 'Banana', 69, 69, 1),
('645fbdbbb4dfa', 'AUDIT-23051367CEA', 'PID-003', 'Apple', 57, 57, 1),
('6469ebd20398d', 'AUDIT-2305214ED43', 'PID-001', 'Banana', 69, 69, 1),
('6469ebd207979', 'AUDIT-2305214ED43', 'PID-003', 'Apple', 57, 57, 1),
('646a5416e35dd', 'AUDIT-230521F19D6', 'PID-001', 'Banana', 69, 69, 1),
('646a5416e4437', 'AUDIT-230521F19D6', 'PID-003', 'Apple', 57, 57, 1),
('646c3abd622e8', 'AUDIT-23052341D8C', 'PID-001', 'Banana', 69, 69, 1),
('646c3abd6373d', 'AUDIT-23052341D8C', 'PID-003', 'Apple', 57, 57, 1);

-- --------------------------------------------------------

--
-- Table structure for table `log2_am_reports`
--

CREATE TABLE `log2_am_reports` (
  `report_id` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `remarks` text NOT NULL,
  `location_id` int(11) NOT NULL,
  `report_date` datetime NOT NULL DEFAULT current_timestamp(),
  `author_id` varchar(50) NOT NULL,
  `report_status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_am_reports`
--

INSERT INTO `log2_am_reports` (`report_id`, `subject`, `remarks`, `location_id`, `report_date`, `author_id`, `report_status_id`) VALUES
('AUDIT-23051226FBD', 'Cycle Count for Office Supplies', 'test', 2, '2023-05-13 00:05:32', '001', 2),
('AUDIT-2305123F285', 'Test', 'Test', 2, '2023-05-12 23:51:08', '001', 1),
('AUDIT-23051261439', 'Test Stationery', 'None', 1, '2023-05-12 23:59:00', '001', 1),
('AUDIT-23051269969', 'TESTING with Name', 'Test', 2, '2023-05-13 00:06:25', '001', 1),
('AUDIT-230513369E5', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a velit justo. Morbi ut leo vitae sem malesuada sodales. In vehicula, lorem sit amet aliquet venenatis, nulla eros dictum neque, non consectetur elit arcu fringilla magna. Ut cursus lacus a efficitur iaculis. Vestibulum at elit magna. Nunc consectetur tortor id auctor gravida. Nullam sed tincidunt diam. Praesent tincidunt dictum sapien sit amet aliquam.\r\n\r\nVivamus est quam, porttitor non erat et, commodo volutpat ligula. Sed commodo hendrerit dignissim. Proin vestibulum eget tortor elementum venenatis. Nulla nec augue interdum, scelerisque justo in, viverra sem. Duis ornare dolor leo, a euismod sapien maximus ut. Sed enim metus, interdum eu varius ut, euismod vitae ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi vel ultricies metus. ', 2, '2023-05-13 14:09:51', '001', 1),
('AUDIT-23051356202', 'SECTION A: Audit for Food and Beverages 2', 'Test', 1, '2023-05-13 21:46:09', '001', 1),
('AUDIT-23051367CEA', 'Test Foods and Beverage', 'Test', 1, '2023-05-14 00:41:31', '001', 1),
('AUDIT-2305214ED43', 'test', 'test', 1, '2023-05-21 18:00:50', '001', 1),
('AUDIT-230521F19D6', 'testing hahaha1', 'test', 1, '2023-05-22 01:25:42', '001', 1),
('AUDIT-23052341D8C', 'Test subject', 'test remarks', 1, '2023-05-23 12:02:05', '001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log2_am_report_status`
--

CREATE TABLE `log2_am_report_status` (
  `status_id` int(11) NOT NULL,
  `report_status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_am_report_status`
--

INSERT INTO `log2_am_report_status` (`status_id`, `report_status_name`) VALUES
(1, 'completed'),
(2, 'request for adjustment');

-- --------------------------------------------------------

--
-- Table structure for table `log2_am_transfer_reports`
--

CREATE TABLE `log2_am_transfer_reports` (
  `report_id` varchar(50) NOT NULL,
  `transfer_id` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `file_path` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `author_id` varchar(50) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_am_transfer_reports`
--

INSERT INTO `log2_am_transfer_reports` (`report_id`, `transfer_id`, `comment`, `file_path`, `date_created`, `author_id`, `status_id`) VALUES
('AUDIT-230521F1CB3', 'TID1240014899', 'test', '', '2023-05-22 01:13:14', '001', 1),
('AUDIT-23052399F27', 'TID1240014899', 'Test comment', '', '2023-05-23 12:03:09', '001', 1),
('AUDIT-230545116AB', 'TID1240018812', 'test', '', '2023-05-22 01:09:27', 'L001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log2_dt_documents`
--

CREATE TABLE `log2_dt_documents` (
  `tracking_id` varchar(50) NOT NULL,
  `document_name` varchar(30) NOT NULL,
  `file_path` text NOT NULL,
  `subject` varchar(20) NOT NULL,
  `send_to_dept_id` int(11) NOT NULL,
  `sent_by_dept_id` int(11) NOT NULL,
  `sent_date` datetime NOT NULL,
  `remarks` text NOT NULL,
  `author_id` varchar(50) NOT NULL,
  `last_date_activity` datetime NOT NULL DEFAULT current_timestamp(),
  `status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_dt_documents`
--

INSERT INTO `log2_dt_documents` (`tracking_id`, `document_name`, `file_path`, `subject`, `send_to_dept_id`, `sent_by_dept_id`, `sent_date`, `remarks`, `author_id`, `last_date_activity`, `status_id`) VALUES
('D012367123456', 'Purchase_order.docx', 'uploads/documents/document_tracking/Info-Sec-VMMC-report(1).pptx', 'Purchase Order', 1, 5, '2023-05-20 04:21:23', 'Test', 'L001', '2023-05-20 10:22:07', 2),
('D01236712891', 'Document.pdf', 'uploads/documents/document_tracking/AUDIT-230513369E5.pdf', 'Contract Agreement', 2, 4, '2023-05-20 02:28:18', '', 'L001', '2023-05-20 08:29:03', 2),
('D012367224466', 'Supplier_contract.pdf', 'uploads/documents/document_tracking/Mga-gagawin-pi.docx', 'Contact Signing', 2, 1, '2023-05-19 04:39:06', 'Test', 'L001', '2023-05-20 10:39:59', 4);

-- --------------------------------------------------------

--
-- Table structure for table `log2_dt_files`
--

CREATE TABLE `log2_dt_files` (
  `file_id` varchar(50) NOT NULL,
  `tracking_id` varchar(50) NOT NULL,
  `file_name` text NOT NULL,
  `file_size` varchar(50) NOT NULL,
  `file_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'incoming'),
(2, 'outgoing'),
(3, 'pending'),
(4, 'received'),
(5, 'reviewed'),
(6, 'declined');

-- --------------------------------------------------------

--
-- Table structure for table `log2_dt_track`
--

CREATE TABLE `log2_dt_track` (
  `tracking_id` varchar(50) NOT NULL,
  `action_by_id` varchar(50) NOT NULL,
  `action_by_dept_id` int(11) NOT NULL,
  `action_date` datetime NOT NULL DEFAULT current_timestamp(),
  `remarks` text NOT NULL,
  `ip_address` varchar(30) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_dt_track`
--

INSERT INTO `log2_dt_track` (`tracking_id`, `action_by_id`, `action_by_dept_id`, `action_date`, `remarks`, `ip_address`, `status_id`) VALUES
('D012367123456', '001', 1, '2023-06-02 01:08:24', 'Document is ready set to Incoming ', '127.1.1.0', 1),
('D012367123456', '001', 1, '2023-06-02 01:16:04', 'Document has been set to Outgoing', '127.1.1.0', 2),
('D012367123456', 'L001', 5, '2023-06-02 01:17:25', 'Document has been received by Finance Department', '127.1.1.1', 4);

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_delivery`
--

CREATE TABLE `log2_fm_delivery` (
  `tracking_id` varchar(50) NOT NULL,
  `delivery_type_id` int(11) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `pickup_location` text NOT NULL,
  `pickup_country` text NOT NULL,
  `pickup_city` text NOT NULL,
  `dropoff_location` text NOT NULL,
  `dropoff_country` text NOT NULL,
  `dropoff_city` text NOT NULL,
  `notes_for_driver` text NOT NULL,
  `delivery_date` date NOT NULL,
  `driver_id` varchar(50) DEFAULT NULL,
  `vehicle_id` varchar(50) DEFAULT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_fm_delivery`
--

INSERT INTO `log2_fm_delivery` (`tracking_id`, `delivery_type_id`, `contact_person`, `phone_number`, `pickup_location`, `pickup_country`, `pickup_city`, `dropoff_location`, `dropoff_country`, `dropoff_city`, `notes_for_driver`, `delivery_date`, `driver_id`, `vehicle_id`, `date_created`, `status_id`) VALUES
('FM-23052515AEE', 1, 'Test', 'test', 'test', 'Philippines', 'Abucay', 'test', 'Philippines', 'Abucay', 'test', '2023-05-26', 'FMD-646F9125', 'FM-2305110D227', '2023-05-26', 3),
('FM-23052522F5F', 1, 'John Doe', '09995645382', 'Test', 'Philippines', 'Abucay', 'Test', 'Philippines', 'Abucay', 'test', '2023-05-26', 'FMD-646F9125', 'FMV-001', '2023-05-26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_delivery_items`
--

CREATE TABLE `log2_fm_delivery_items` (
  `tracking_id` varchar(50) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_fm_delivery_items`
--

INSERT INTO `log2_fm_delivery_items` (`tracking_id`, `product_id`, `product_name`, `quantity`) VALUES
('FM-23052515AEE', '001', 'Test', 1),
('FM-23052522F5F', '001', 'Test', 100);

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_delivery_status`
--

CREATE TABLE `log2_fm_delivery_status` (
  `status_id` int(11) NOT NULL,
  `delivery_status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_fm_delivery_status`
--

INSERT INTO `log2_fm_delivery_status` (`status_id`, `delivery_status_name`) VALUES
(1, 'pending'),
(2, 'preparing'),
(3, 'in transit'),
(4, 'delivered');

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_delivery_type`
--

CREATE TABLE `log2_fm_delivery_type` (
  `delivery_type_id` int(11) NOT NULL,
  `delivery_type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_fm_delivery_type`
--

INSERT INTO `log2_fm_delivery_type` (`delivery_type_id`, `delivery_type_name`) VALUES
(1, 'delivery'),
(2, 'pickup');

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_drivers`
--

CREATE TABLE `log2_fm_drivers` (
  `driver_id` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 7,
  `display_name` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `emergency_number` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `last_active` datetime NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `avatar_thumbnail` varchar(250) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_fm_drivers`
--

INSERT INTO `log2_fm_drivers` (`driver_id`, `role_id`, `display_name`, `email_address`, `username`, `password`, `phone_number`, `emergency_number`, `address`, `last_active`, `date_created`, `avatar_thumbnail`, `status_id`) VALUES
('FMD-646F9125', 7, 'Cristianber Gordora', 'gcristianber@gmail.com', 'gcristianber@logistic_driver', '123', '09995645382', '09995645382', 'Quezon City', '0000-00-00 00:00:00', '2023-05-26 00:47:33', 'uploads/fleet_management/users/FMD-646F9125/1685033253_345154272_6201246746635851_366404278028920003_n.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_drivers_attachments`
--

CREATE TABLE `log2_fm_drivers_attachments` (
  `file_id` varchar(50) NOT NULL,
  `driver_id` varchar(50) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_driver_logs`
--

CREATE TABLE `log2_fm_driver_logs` (
  `log_id` varchar(50) NOT NULL,
  `activity` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `ip_address` text NOT NULL,
  `user_agent` text NOT NULL,
  `driver_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_fm_driver_logs`
--

INSERT INTO `log2_fm_driver_logs` (`log_id`, `activity`, `date_time`, `ip_address`, `user_agent`, `driver_id`) VALUES
('646bfeecd55ff', 'FM-230522EF605 is out for delivery', '2023-05-23 07:46:52', '127.0.0.1', '', 'FMD-645F5B1F'),
('646c004c1b99c', 'FM-230522ADBA1 is out for delivery', '2023-05-23 07:52:44', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0', 'FMD-645F5B1F'),
('646c00f912804', 'You logged in', '2023-05-23 07:55:37', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0', 'FMD-645F5B1F'),
('646c11958a34d', 'You logged in', '2023-05-23 09:06:29', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0', 'FMD-645F5B1F'),
('646c119a0cfc7', 'You logged out', '2023-05-23 09:06:34', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0', 'FMD-645F5B1F'),
('646c119bee25b', 'You logged in', '2023-05-23 09:06:35', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0', 'FMD-645F5B1F'),
('646c11b59a39d', 'You logged out', '2023-05-23 09:07:01', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0', 'FMD-645F5B1F'),
('646c11be51350', 'You logged in', '2023-05-23 09:07:10', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0', 'FMD-64650643'),
('646c126202ff6', 'You logged out', '2023-05-23 09:09:54', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0', 'FMD-64650643'),
('646c1267f3823', 'You logged in', '2023-05-23 09:09:59', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0', 'FMD-645F5B1F'),
('646c1282c7ee9', 'You logged out', '2023-05-23 09:10:26', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0', 'FMD-645F5B1F'),
('646f4b5f5b1f8', 'You logged in', '2023-05-25 19:49:51', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0', 'FMD-645F5B1F'),
('646f4c7d2c637', 'FM-230522EF605 is out for delivery', '2023-05-25 19:54:37', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0', 'FMD-645F5B1F'),
('646f730bdf21b', 'You logged out', '2023-05-25 22:39:07', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0', 'FMD-645F5B1F'),
('646f790220dd6', 'You logged in', '2023-05-25 23:04:34', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0', 'FMD-645F5B1F'),
('646f790cc4fcf', 'You logged out', '2023-05-25 23:04:44', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0', 'FMD-645F5B1F'),
('646f96a6745e1', 'You logged in', '2023-05-26 01:11:02', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0', 'FMD-646F9125'),
('646f974102ae3', 'FM-23052515AEE is out for delivery', '2023-05-26 01:13:37', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0', 'FMD-646F9125'),
('647010341c510', 'You logged in', '2023-05-26 09:49:40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0', 'FMD-646F9125');

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_driver_status`
--

CREATE TABLE `log2_fm_driver_status` (
  `driver_status_id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_fm_driver_status`
--

INSERT INTO `log2_fm_driver_status` (`driver_status_id`, `status_name`) VALUES
(1, 'active'),
(2, 'inactive'),
(3, 'idle'),
(4, 'on road');

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_maintenance`
--

CREATE TABLE `log2_fm_maintenance` (
  `maintenance_id` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `vehicle_id` varchar(50) NOT NULL,
  `maintenance_type_id` int(11) NOT NULL,
  `mechanic_name` varchar(50) DEFAULT NULL,
  `date_schedule` date NOT NULL,
  `remarks` text NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_fm_maintenance`
--

INSERT INTO `log2_fm_maintenance` (`maintenance_id`, `subject`, `vehicle_id`, `maintenance_type_id`, `mechanic_name`, `date_schedule`, `remarks`, `status_id`) VALUES
('MNT-230505D22C5', 'Tingin nga', 'FM-230420A1816', 1, '', '2023-05-05', 'test', 3),
('MNT-230506265AB', 'test', 'FM-230420A1816', 2, NULL, '2023-05-06', 'test', 3),
('MNT-2305064CE0E', 'Yes Par', 'FM-230420A1816', 1, '', '2023-05-06', 'testing', 3),
('MNT-2305066D4AD', 'test', 'FM-230420A1816', 1, '', '2023-05-06', 'test', 2),
('MNT-230506983D1', 'hahaha nyark', 'FM-230420A1816', 1, '', '2023-05-06', 'hahaha nyark', 1),
('MNT-230506EE000', 'test14', 'FMV-644151af4ebe2', 1, NULL, '2023-05-06', 'test14', 3),
('MNT-2305230571F', 'Test subject', 'FM-230420A1816', 1, NULL, '2023-05-24', 'Test remarks', 1);

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
('FM-230420A1816', 'Honda Civic', '123', 1, 'Test description', 2, 4, 5000, '1.58ht, 2.82mm', 'hondacivic_blue.jpg', 1),
('FM-2305110D227', 'Lamborghini Urus', 'LUV-143', 1, 'Lamborghini Urus is awesome <3', 1, 2, 5000, '1.58ht, 2.81mm', 'lambo-urus.jpeg', 1),
('FM2304200C300', 'Silver Sedan', 'test', 1, 'Just try this brand new sedan', 1, 5, 2000, '1.58ht, 2.81mm', '2020-honda-accord-main-1569324384.jpg', 1),
('FM230420D806C', 'Large Van', 'test-1', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 1, 10, 2000, '1415mm 1799mm 4515mm', '2022-express-1wt-gan-colorizer.jpg', 1),
('FMV-001', 'Honda Civic', 'FKY-123', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 1, 5, 2500, '1415mm 1799mm 4515mm', 'honda-civic-red-2022-main-1637644905.jpg', 1),
('FMV-644151af4ebe2', 'Honda Accord', 'FTN-577', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 1, 5, 2000, '1415mm 1799mm 4515mm', '2020-honda-accord-main-1569324384.jpg', 1);

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
-- Table structure for table `log2_vp_awards`
--

CREATE TABLE `log2_vp_awards` (
  `award_id` varchar(50) NOT NULL,
  `bid_id` varchar(50) NOT NULL,
  `date_awarded` datetime NOT NULL DEFAULT current_timestamp(),
  `award_status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_vp_awards`
--

INSERT INTO `log2_vp_awards` (`award_id`, `bid_id`, `date_awarded`, `award_status_id`) VALUES
('AWARD-646C3A8D', 'BID-001', '2023-05-23 12:01:17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log2_vp_award_status`
--

CREATE TABLE `log2_vp_award_status` (
  `status_id` int(11) NOT NULL,
  `award_status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_vp_award_status`
--

INSERT INTO `log2_vp_award_status` (`status_id`, `award_status_name`) VALUES
(1, 'pending'),
(2, 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `log2_vp_company_types`
--

CREATE TABLE `log2_vp_company_types` (
  `type_id` int(11) NOT NULL,
  `company_type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_vp_company_types`
--

INSERT INTO `log2_vp_company_types` (`type_id`, `company_type_name`) VALUES
(1, 'public company'),
(2, 'private company');

-- --------------------------------------------------------

--
-- Table structure for table `log2_vp_invites`
--

CREATE TABLE `log2_vp_invites` (
  `invite_id` varchar(50) NOT NULL,
  `template_id` varchar(50) NOT NULL,
  `tender_id` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `is_accepted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_vp_invite_templates`
--

CREATE TABLE `log2_vp_invite_templates` (
  `template_id` int(11) NOT NULL,
  `template_name` varchar(50) NOT NULL,
  `template` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_vp_invite_templates`
--

INSERT INTO `log2_vp_invite_templates` (`template_id`, `template_name`, `template`) VALUES
(1, 'invitation to bid', ''),
(2, 'notification', ''),
(3, 'rfq', ''),
(4, 'rfp', '');

-- --------------------------------------------------------

--
-- Table structure for table `log2_vp_supply_category`
--

CREATE TABLE `log2_vp_supply_category` (
  `category_id` int(11) NOT NULL,
  `supply_category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_vp_supply_category`
--

INSERT INTO `log2_vp_supply_category` (`category_id`, `supply_category_name`) VALUES
(1, 'office supplies'),
(2, 'food and beverages'),
(3, 'transportation'),
(4, 'services');

-- --------------------------------------------------------

--
-- Table structure for table `log2_vp_tenders`
--

CREATE TABLE `log2_vp_tenders` (
  `tender_id` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `closing_date` datetime NOT NULL,
  `contract_budget` double NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_vp_tenders`
--

INSERT INTO `log2_vp_tenders` (`tender_id`, `subject`, `description`, `category_id`, `date_created`, `closing_date`, `contract_budget`, `status_id`) VALUES
('T123004123456', 'Looking for Water Supply', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero qui nam molestias non, ut, iusto cum nisi facilis amet dolor voluptatibus nihil odit eveniet quo. Cupiditate, nihil. Nostrum dolorum voluptatum maxime explicabo harum esse, dignissimos excepturi id deserunt, cupiditate porro iusto quis quod dicta. Perspiciatis voluptatibus eligendi sint repellat iure voluptas provident molestiae culpa laboriosam illum. ', 2, '2023-05-16 03:52:07', '2023-05-15 21:51:13', 500000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `log2_vp_tender_attachments`
--

CREATE TABLE `log2_vp_tender_attachments` (
  `attachment_id` varchar(50) NOT NULL,
  `tender_id` varchar(50) NOT NULL,
  `file_name` text NOT NULL,
  `file_size` double NOT NULL,
  `file_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_vp_tender_bids`
--

CREATE TABLE `log2_vp_tender_bids` (
  `bid_id` varchar(50) NOT NULL,
  `tender_id` varchar(50) NOT NULL,
  `vendor_id` varchar(50) DEFAULT NULL,
  `message` text NOT NULL,
  `bid` varchar(250) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `delivery_time` varchar(20) NOT NULL,
  `date_submitted` date NOT NULL DEFAULT current_timestamp(),
  `is_awarded` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_vp_tender_bids`
--

INSERT INTO `log2_vp_tender_bids` (`bid_id`, `tender_id`, `vendor_id`, `message`, `bid`, `discount`, `delivery_time`, `date_submitted`, `is_awarded`) VALUES
('BID-001', 'T123004123456', 'VENDOR-001', 'Dummy message', 'PHP 20,000,000.00', '20', '1-2 days', '2023-05-23', 1),
('BID-002', 'T123004123456', 'VENDOR-002', 'Dummy Text', 'PHP 23,000,000.00', '10', '1-2 days', '2023-05-23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `log2_vp_tender_lines`
--

CREATE TABLE `log2_vp_tender_lines` (
  `line_item_id` varchar(50) NOT NULL,
  `tender_id` varchar(50) NOT NULL,
  `goods_services_name` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_vp_tender_lines`
--

INSERT INTO `log2_vp_tender_lines` (`line_item_id`, `tender_id`, `goods_services_name`, `amount`) VALUES
('TL001', 'T123004123456', 'Janitorial Service', '26,002,677.84');

-- --------------------------------------------------------

--
-- Table structure for table `log2_vp_tender_status`
--

CREATE TABLE `log2_vp_tender_status` (
  `status_id` int(11) NOT NULL,
  `tender_status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_vp_tender_status`
--

INSERT INTO `log2_vp_tender_status` (`status_id`, `tender_status_name`) VALUES
(1, 'pending'),
(2, 'published'),
(3, 'awarded');

-- --------------------------------------------------------

--
-- Table structure for table `log2_vp_user_status`
--

CREATE TABLE `log2_vp_user_status` (
  `status_id` int(11) NOT NULL,
  `user_status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_vp_user_status`
--

INSERT INTO `log2_vp_user_status` (`status_id`, `user_status_name`) VALUES
(1, 'verified'),
(2, 'pending'),
(3, 'declined');

-- --------------------------------------------------------

--
-- Table structure for table `log2_vp_vendors`
--

CREATE TABLE `log2_vp_vendors` (
  `vendor_id` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `supply_category_id` int(11) NOT NULL,
  `company_type_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 2,
  `otp` varchar(4) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 8
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_vp_vendors`
--

INSERT INTO `log2_vp_vendors` (`vendor_id`, `email_address`, `password`, `fullname`, `display_name`, `location`, `supply_category_id`, `company_type_id`, `status_id`, `otp`, `role_id`) VALUES
('VENDOR-001', 'gcristianber@gmail.com', '123', 'Cristianber Gordora', 'ABC Company', 'Quezon City, Philippines', 4, 2, 2, '6991', 8),
('VENDOR-002', 'slipperymeow27@gmail.com', '123', 'Slippery Meow', 'SLP Company', 'Quezon City, Philippines', 2, 2, 2, '5238', 8);

-- --------------------------------------------------------

--
-- Table structure for table `log2_vr_issues`
--

CREATE TABLE `log2_vr_issues` (
  `issue_id` int(11) NOT NULL,
  `issue_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_vr_issues`
--

INSERT INTO `log2_vr_issues` (`issue_id`, `issue_name`) VALUES
(1, 'break malfunction'),
(2, 'fuel issue');

-- --------------------------------------------------------

--
-- Table structure for table `log2_vr_reports`
--

CREATE TABLE `log2_vr_reports` (
  `report_id` varchar(50) NOT NULL,
  `reservation_id` varchar(50) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `remarks` text NOT NULL,
  `report_date` datetime NOT NULL DEFAULT current_timestamp(),
  `report_status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_vr_report_status`
--

CREATE TABLE `log2_vr_report_status` (
  `status_id` int(11) NOT NULL,
  `report_status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_vr_report_status`
--

INSERT INTO `log2_vr_report_status` (`status_id`, `report_status_name`) VALUES
(1, 'issued'),
(2, 'in progress'),
(3, 'solved');

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

--
-- Dumping data for table `log2_vr_reservations`
--

INSERT INTO `log2_vr_reservations` (`reservation_id`, `vehicle_id`, `full_name`, `email_address`, `reason`, `pickup_date`, `return_date`, `date_requested`, `file_path`, `requestor_id`, `status_id`) VALUES
('VR-23062428901', 'FM-230420A1816', 'Cristianber Gordora', 'test@gmail.com', 'test', '2023-06-24 15:45:00', '2023-06-29 15:45:00', '2023-06-24 15:45:59', 'GORDORA, CRISTIANBER - OJT DOCU - 1.docx', '001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log2_vr_reserve_status`
--

CREATE TABLE `log2_vr_reserve_status` (
  `reserve_status_id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_vr_reserve_status`
--

INSERT INTO `log2_vr_reserve_status` (`reserve_status_id`, `status_name`) VALUES
(1, 'pending'),
(2, 'approved'),
(3, 'dispatched'),
(4, 'returned'),
(5, 'declined'),
(6, 'cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `log2_vr_tags`
--

CREATE TABLE `log2_vr_tags` (
  `tag_id` int(11) NOT NULL,
  `tag_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_vr_tags`
--

INSERT INTO `log2_vr_tags` (`tag_id`, `tag_name`) VALUES
(1, 'important'),
(2, 'convinient'),
(3, 'not important');

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
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `log1_whs_inventory`
--
ALTER TABLE `log1_whs_inventory`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_log1_whs_inventory_location_id_log1_whs_locations` (`location_id`);

--
-- Indexes for table `log1_whs_locations`
--
ALTER TABLE `log1_whs_locations`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `FK_log1_whs_locations_product_category_id_log1_whs_cat` (`product_category_id`),
  ADD KEY `FK_log1_whs_locations_status_id_log1_whs_location_status` (`location_status_id`);

--
-- Indexes for table `log1_whs_location_status`
--
ALTER TABLE `log1_whs_location_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `log1_whs_transfers`
--
ALTER TABLE `log1_whs_transfers`
  ADD PRIMARY KEY (`transfer_id`),
  ADD KEY `FK_log1_whs_transfers_transfer_type_id_log1_whs_transfer_types` (`transfer_type_id`),
  ADD KEY `FK_log1_whs_transfers_location_id` (`location_id`),
  ADD KEY `FK_log1_whs_transfers_author_id_admin_um_accounts` (`author_id`);

--
-- Indexes for table `log1_whs_transfer_items`
--
ALTER TABLE `log1_whs_transfer_items`
  ADD PRIMARY KEY (`transfer_item_id`),
  ADD KEY `FK_log1_whs_transfer_items_product_id_ Structure log1_whs_invent` (`product_id`),
  ADD KEY `FK_ Structure log1_whs_transfer_items_transfer_id_log1_whs_trans` (`transfer_id`);

--
-- Indexes for table `log1_whs_transfer_types`
--
ALTER TABLE `log1_whs_transfer_types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `log2_am_attachments`
--
ALTER TABLE `log2_am_attachments`
  ADD PRIMARY KEY (`file_id`),
  ADD KEY `FK_log2_am_attachments_report_id_log2_am_reports` (`report_id`);

--
-- Indexes for table `log2_am_line_items`
--
ALTER TABLE `log2_am_line_items`
  ADD PRIMARY KEY (`line_item_id`);

--
-- Indexes for table `log2_am_reports`
--
ALTER TABLE `log2_am_reports`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `FK_log2_am_reports_location_id_log1_whs_locations` (`location_id`),
  ADD KEY `FK_log2_am_reports_author_id_admin_um_accounts` (`author_id`),
  ADD KEY `FK_log2_am_reports_report_status_id_log2_am_report_status` (`report_status_id`);

--
-- Indexes for table `log2_am_report_status`
--
ALTER TABLE `log2_am_report_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `log2_am_transfer_reports`
--
ALTER TABLE `log2_am_transfer_reports`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `FK_log2_am_transfer_reports_transfer_id_log1_whs_transfers` (`transfer_id`),
  ADD KEY `FK_log2_am_transfer_reports_author_id_admin_um_accounts` (`author_id`),
  ADD KEY `FK_log2_am_transfer_reports_report_id_log2_am_report_status` (`status_id`);

--
-- Indexes for table `log2_dt_documents`
--
ALTER TABLE `log2_dt_documents`
  ADD PRIMARY KEY (`tracking_id`),
  ADD KEY `fk_log2_dt_documents_admin_um_departments_sent_by_dept` (`sent_by_dept_id`),
  ADD KEY `fk_log2_dt_documents_admin_um_departments_send_to_dept` (`send_to_dept_id`),
  ADD KEY `fk_log2_dt_documents_log2_dt_status_current_status_id` (`status_id`),
  ADD KEY `fk_log2_dt_documents_admin_um_accounts_author_id` (`author_id`);

--
-- Indexes for table `log2_dt_files`
--
ALTER TABLE `log2_dt_files`
  ADD KEY `FK_log2_dt_files_tracking_id_log2_dt_documents` (`tracking_id`);

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
  ADD KEY `fk_log2_dt_track_log2_dt_status_status_id` (`status_id`),
  ADD KEY `fk_log2_dt_track_admin_um_accounts_action_by_id` (`action_by_id`);

--
-- Indexes for table `log2_fm_delivery`
--
ALTER TABLE `log2_fm_delivery`
  ADD PRIMARY KEY (`tracking_id`),
  ADD KEY `FK_log2_fm_delivery_delivery_type_id_log2_fm_delivery_type` (`delivery_type_id`),
  ADD KEY `FK_log2_fm_delivery_status_id_log2_fm_delivery_status` (`status_id`),
  ADD KEY `FK_log2_fm_delivery_driver_id_log2_fm_drivers` (`driver_id`),
  ADD KEY `FK_log2_fm_delivery_vehicle_id_log2_fm_vehicles` (`vehicle_id`);

--
-- Indexes for table `log2_fm_delivery_status`
--
ALTER TABLE `log2_fm_delivery_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `log2_fm_delivery_type`
--
ALTER TABLE `log2_fm_delivery_type`
  ADD PRIMARY KEY (`delivery_type_id`);

--
-- Indexes for table `log2_fm_drivers`
--
ALTER TABLE `log2_fm_drivers`
  ADD PRIMARY KEY (`driver_id`),
  ADD KEY `FK_log2_fm_drivers_role_id_admin_um_accounts` (`role_id`),
  ADD KEY `FK_log2_fm_drivers_status_id_log2_fm_drivers` (`status_id`);

--
-- Indexes for table `log2_fm_drivers_attachments`
--
ALTER TABLE `log2_fm_drivers_attachments`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `log2_fm_driver_logs`
--
ALTER TABLE `log2_fm_driver_logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `FK_log2_fm_driver_logs_driver_id_log2_fm_drivers` (`driver_id`);

--
-- Indexes for table `log2_fm_driver_status`
--
ALTER TABLE `log2_fm_driver_status`
  ADD PRIMARY KEY (`driver_status_id`);

--
-- Indexes for table `log2_fm_maintenance`
--
ALTER TABLE `log2_fm_maintenance`
  ADD PRIMARY KEY (`maintenance_id`),
  ADD KEY `fk_log2_fm_maintenance_log2_fm_vehicles_vehicle_id` (`vehicle_id`),
  ADD KEY `fk_log2_fm_maintenance_type_id_log2_fm_maintenance_type` (`maintenance_type_id`),
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
-- Indexes for table `log2_vp_awards`
--
ALTER TABLE `log2_vp_awards`
  ADD PRIMARY KEY (`award_id`),
  ADD KEY `log2_vp_awards_award_status_id_log2_vp_award_status` (`award_status_id`),
  ADD KEY `log2_vp_awards_bid_id_log2_vp_tender_bids` (`bid_id`);

--
-- Indexes for table `log2_vp_award_status`
--
ALTER TABLE `log2_vp_award_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `log2_vp_company_types`
--
ALTER TABLE `log2_vp_company_types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `log2_vp_invites`
--
ALTER TABLE `log2_vp_invites`
  ADD PRIMARY KEY (`invite_id`);

--
-- Indexes for table `log2_vp_invite_templates`
--
ALTER TABLE `log2_vp_invite_templates`
  ADD PRIMARY KEY (`template_id`);

--
-- Indexes for table `log2_vp_supply_category`
--
ALTER TABLE `log2_vp_supply_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `log2_vp_tenders`
--
ALTER TABLE `log2_vp_tenders`
  ADD PRIMARY KEY (`tender_id`),
  ADD KEY `fk_log2_vp_tenders_category_id_log2_vp_supply_category` (`category_id`),
  ADD KEY `fk_log2_vp_tenders_status_id_ Structure log2_vp_tender_status` (`status_id`);

--
-- Indexes for table `log2_vp_tender_attachments`
--
ALTER TABLE `log2_vp_tender_attachments`
  ADD PRIMARY KEY (`attachment_id`);

--
-- Indexes for table `log2_vp_tender_bids`
--
ALTER TABLE `log2_vp_tender_bids`
  ADD PRIMARY KEY (`bid_id`),
  ADD KEY `fk_log2_vp_tender_bids_tender_id_log2_vp_tenders` (`tender_id`),
  ADD KEY `fk_log2_vp_tender_bids_vendor_id_log2_vp_vendors` (`vendor_id`);

--
-- Indexes for table `log2_vp_tender_lines`
--
ALTER TABLE `log2_vp_tender_lines`
  ADD PRIMARY KEY (`line_item_id`),
  ADD KEY `FK_log2_vp_tender_lines_tender_id_log2_vp_tenders` (`tender_id`);

--
-- Indexes for table `log2_vp_tender_status`
--
ALTER TABLE `log2_vp_tender_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `log2_vp_user_status`
--
ALTER TABLE `log2_vp_user_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `log2_vp_vendors`
--
ALTER TABLE `log2_vp_vendors`
  ADD PRIMARY KEY (`vendor_id`),
  ADD KEY `fk_log2_vp_vendors_company_type_id_log2_vp_company_ty` (`company_type_id`),
  ADD KEY `fk_log2_vp_vendors_status_id_ Structure log2_vp_user_status` (`status_id`),
  ADD KEY `fk_log2_vp_vendors_supply_category_id_log2_vp_supply_category` (`supply_category_id`),
  ADD KEY `fk_log2_vp_vendors_role_id_admin_um_roles` (`role_id`);

--
-- Indexes for table `log2_vr_issues`
--
ALTER TABLE `log2_vr_issues`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `log2_vr_reports`
--
ALTER TABLE `log2_vr_reports`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `FK_log2_vr_reports_reservation_id_log2_vr_reservations` (`reservation_id`),
  ADD KEY `FK_log2_vr_reports_report_status_id_log2_vr_report_status` (`report_status_id`);

--
-- Indexes for table `log2_vr_report_status`
--
ALTER TABLE `log2_vr_report_status`
  ADD PRIMARY KEY (`status_id`);

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
-- Indexes for table `log2_vr_tags`
--
ALTER TABLE `log2_vr_tags`
  ADD PRIMARY KEY (`tag_id`);

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
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_um_status`
--
ALTER TABLE `admin_um_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log1_whs_category`
--
ALTER TABLE `log1_whs_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log1_whs_locations`
--
ALTER TABLE `log1_whs_locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log1_whs_location_status`
--
ALTER TABLE `log1_whs_location_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log1_whs_transfer_types`
--
ALTER TABLE `log1_whs_transfer_types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log2_am_report_status`
--
ALTER TABLE `log2_am_report_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log2_dt_status`
--
ALTER TABLE `log2_dt_status`
  MODIFY `tracking_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `log2_fm_delivery_status`
--
ALTER TABLE `log2_fm_delivery_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log2_fm_delivery_type`
--
ALTER TABLE `log2_fm_delivery_type`
  MODIFY `delivery_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log2_fm_driver_status`
--
ALTER TABLE `log2_fm_driver_status`
  MODIFY `driver_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `log2_vp_award_status`
--
ALTER TABLE `log2_vp_award_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log2_vp_company_types`
--
ALTER TABLE `log2_vp_company_types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log2_vp_invite_templates`
--
ALTER TABLE `log2_vp_invite_templates`
  MODIFY `template_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log2_vp_supply_category`
--
ALTER TABLE `log2_vp_supply_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log2_vp_tender_status`
--
ALTER TABLE `log2_vp_tender_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log2_vp_user_status`
--
ALTER TABLE `log2_vp_user_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log2_vr_issues`
--
ALTER TABLE `log2_vr_issues`
  MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log2_vr_report_status`
--
ALTER TABLE `log2_vr_report_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log2_vr_reserve_status`
--
ALTER TABLE `log2_vr_reserve_status`
  MODIFY `reserve_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `log2_vr_tags`
--
ALTER TABLE `log2_vr_tags`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- Constraints for table `log1_whs_inventory`
--
ALTER TABLE `log1_whs_inventory`
  ADD CONSTRAINT `fk_log1_whs_inventory_location_id_log1_whs_locations` FOREIGN KEY (`location_id`) REFERENCES `log1_whs_locations` (`location_id`);

--
-- Constraints for table `log1_whs_locations`
--
ALTER TABLE `log1_whs_locations`
  ADD CONSTRAINT `FK_log1_whs_locations_product_category_id_log1_whs_cat` FOREIGN KEY (`product_category_id`) REFERENCES `log1_whs_category` (`category_id`),
  ADD CONSTRAINT `FK_log1_whs_locations_status_id_log1_whs_location_status` FOREIGN KEY (`location_status_id`) REFERENCES `log1_whs_location_status` (`status_id`);

--
-- Constraints for table `log1_whs_transfers`
--
ALTER TABLE `log1_whs_transfers`
  ADD CONSTRAINT `FK_log1_whs_transfers_author_id_admin_um_accounts` FOREIGN KEY (`author_id`) REFERENCES `admin_um_accounts` (`user_id`),
  ADD CONSTRAINT `FK_log1_whs_transfers_location_id` FOREIGN KEY (`location_id`) REFERENCES `log1_whs_locations` (`location_id`),
  ADD CONSTRAINT `FK_log1_whs_transfers_transfer_type_id_log1_whs_transfer_types` FOREIGN KEY (`transfer_type_id`) REFERENCES `log1_whs_transfer_types` (`type_id`);

--
-- Constraints for table `log1_whs_transfer_items`
--
ALTER TABLE `log1_whs_transfer_items`
  ADD CONSTRAINT `FK_ Structure log1_whs_transfer_items_transfer_id_log1_whs_trans` FOREIGN KEY (`transfer_id`) REFERENCES `log1_whs_transfers` (`transfer_id`),
  ADD CONSTRAINT `FK_log1_whs_transfer_items_product_id_ Structure log1_whs_invent` FOREIGN KEY (`product_id`) REFERENCES `log1_whs_inventory` (`product_id`);

--
-- Constraints for table `log2_am_attachments`
--
ALTER TABLE `log2_am_attachments`
  ADD CONSTRAINT `FK_log2_am_attachments_report_id_log2_am_reports` FOREIGN KEY (`report_id`) REFERENCES `log2_am_reports` (`report_id`);

--
-- Constraints for table `log2_am_reports`
--
ALTER TABLE `log2_am_reports`
  ADD CONSTRAINT `FK_log2_am_reports_author_id_admin_um_accounts` FOREIGN KEY (`author_id`) REFERENCES `admin_um_accounts` (`user_id`),
  ADD CONSTRAINT `FK_log2_am_reports_location_id_log1_whs_locations` FOREIGN KEY (`location_id`) REFERENCES `log1_whs_locations` (`location_id`),
  ADD CONSTRAINT `FK_log2_am_reports_report_status_id_log2_am_report_status` FOREIGN KEY (`report_status_id`) REFERENCES `log2_am_report_status` (`status_id`);

--
-- Constraints for table `log2_am_transfer_reports`
--
ALTER TABLE `log2_am_transfer_reports`
  ADD CONSTRAINT `FK_log2_am_transfer_reports_author_id_admin_um_accounts` FOREIGN KEY (`author_id`) REFERENCES `admin_um_accounts` (`user_id`),
  ADD CONSTRAINT `FK_log2_am_transfer_reports_report_id_log2_am_report_status` FOREIGN KEY (`status_id`) REFERENCES `log2_am_report_status` (`status_id`),
  ADD CONSTRAINT `FK_log2_am_transfer_reports_transfer_id_log1_whs_transfers` FOREIGN KEY (`transfer_id`) REFERENCES `log1_whs_transfers` (`transfer_id`);

--
-- Constraints for table `log2_dt_documents`
--
ALTER TABLE `log2_dt_documents`
  ADD CONSTRAINT `fk_log2_dt_documents_admin_um_accounts_author_id` FOREIGN KEY (`author_id`) REFERENCES `admin_um_accounts` (`user_id`),
  ADD CONSTRAINT `fk_log2_dt_documents_admin_um_departments_send_to_dept` FOREIGN KEY (`send_to_dept_id`) REFERENCES `admin_um_departments` (`department_id`),
  ADD CONSTRAINT `fk_log2_dt_documents_admin_um_departments_sent_by_dept` FOREIGN KEY (`sent_by_dept_id`) REFERENCES `admin_um_departments` (`department_id`),
  ADD CONSTRAINT `fk_log2_dt_documents_log2_dt_status_current_status_id` FOREIGN KEY (`status_id`) REFERENCES `log2_dt_status` (`tracking_status_id`);

--
-- Constraints for table `log2_dt_files`
--
ALTER TABLE `log2_dt_files`
  ADD CONSTRAINT `FK_log2_dt_files_tracking_id_log2_dt_documents` FOREIGN KEY (`tracking_id`) REFERENCES `log2_dt_documents` (`tracking_id`);

--
-- Constraints for table `log2_dt_track`
--
ALTER TABLE `log2_dt_track`
  ADD CONSTRAINT `fk_log2_dt_track_admin_um_accounts_action_by_id` FOREIGN KEY (`action_by_id`) REFERENCES `admin_um_accounts` (`user_id`),
  ADD CONSTRAINT `fk_log2_dt_track_admin_um_departments_department_id` FOREIGN KEY (`action_by_dept_id`) REFERENCES `admin_um_departments` (`department_id`),
  ADD CONSTRAINT `fk_log2_dt_track_log2_dt_documents_tracking_id` FOREIGN KEY (`tracking_id`) REFERENCES `log2_dt_documents` (`tracking_id`),
  ADD CONSTRAINT `fk_log2_dt_track_log2_dt_status_status_id` FOREIGN KEY (`status_id`) REFERENCES `log2_dt_status` (`tracking_status_id`);

--
-- Constraints for table `log2_fm_delivery`
--
ALTER TABLE `log2_fm_delivery`
  ADD CONSTRAINT `FK_log2_fm_delivery_delivery_type_id_log2_fm_delivery_type` FOREIGN KEY (`delivery_type_id`) REFERENCES `log2_fm_delivery_type` (`delivery_type_id`),
  ADD CONSTRAINT `FK_log2_fm_delivery_driver_id_log2_fm_drivers` FOREIGN KEY (`driver_id`) REFERENCES `log2_fm_drivers` (`driver_id`),
  ADD CONSTRAINT `FK_log2_fm_delivery_status_id_log2_fm_delivery_status` FOREIGN KEY (`status_id`) REFERENCES `log2_fm_delivery_status` (`status_id`),
  ADD CONSTRAINT `FK_log2_fm_delivery_vehicle_id_log2_fm_vehicles` FOREIGN KEY (`vehicle_id`) REFERENCES `log2_fm_vehicles` (`vehicle_id`);

--
-- Constraints for table `log2_fm_drivers`
--
ALTER TABLE `log2_fm_drivers`
  ADD CONSTRAINT `FK_log2_fm_drivers_role_id_admin_um_accounts` FOREIGN KEY (`role_id`) REFERENCES `admin_um_roles` (`role_id`),
  ADD CONSTRAINT `FK_log2_fm_drivers_status_id_log2_fm_drivers` FOREIGN KEY (`status_id`) REFERENCES `log2_fm_driver_status` (`driver_status_id`);

--
-- Constraints for table `log2_fm_driver_logs`
--
ALTER TABLE `log2_fm_driver_logs`
  ADD CONSTRAINT `FK_log2_fm_driver_logs_driver_id_log2_fm_drivers` FOREIGN KEY (`driver_id`) REFERENCES `log2_fm_drivers` (`driver_id`);

--
-- Constraints for table `log2_fm_maintenance`
--
ALTER TABLE `log2_fm_maintenance`
  ADD CONSTRAINT `fk_log2_fm_maintenance_log2_fm_vehicles_vehicle_id` FOREIGN KEY (`vehicle_id`) REFERENCES `log2_fm_vehicles` (`vehicle_id`),
  ADD CONSTRAINT `fk_log2_fm_maintenance_status_id_log2_fm_maintenance_status` FOREIGN KEY (`status_id`) REFERENCES `log2_fm_maintenance_status` (`maintenance_status_id`),
  ADD CONSTRAINT `fk_log2_fm_maintenance_type_id_log2_fm_maintenance_type` FOREIGN KEY (`maintenance_type_id`) REFERENCES `log2_fm_maintenance_type` (`maintenance_type_id`);

--
-- Constraints for table `log2_fm_vehicles`
--
ALTER TABLE `log2_fm_vehicles`
  ADD CONSTRAINT `FK_log2_fm_vehicles_status_id_log2_fm_vehicle_status` FOREIGN KEY (`status_id`) REFERENCES `log2_fm_vehicle_status` (`status_id`),
  ADD CONSTRAINT `FK_log2_fm_vehicles_trans_type_id_log2_fm_trans_types` FOREIGN KEY (`trans_type_id`) REFERENCES `log2_fm_trans_types` (`trans_type_id`),
  ADD CONSTRAINT `FK_log2_fm_vehicles_vehicle_type_id_log2_fm_vehicle_types` FOREIGN KEY (`vehicle_type_id`) REFERENCES `log2_fm_vehicle_types` (`vehicle_type_id`);

--
-- Constraints for table `log2_vp_awards`
--
ALTER TABLE `log2_vp_awards`
  ADD CONSTRAINT `log2_vp_awards_award_status_id_log2_vp_award_status` FOREIGN KEY (`award_status_id`) REFERENCES `log2_vp_award_status` (`status_id`),
  ADD CONSTRAINT `log2_vp_awards_bid_id_log2_vp_tender_bids` FOREIGN KEY (`bid_id`) REFERENCES `log2_vp_tender_bids` (`bid_id`);

--
-- Constraints for table `log2_vp_tenders`
--
ALTER TABLE `log2_vp_tenders`
  ADD CONSTRAINT `fk_log2_vp_tenders_category_id_log2_vp_supply_category` FOREIGN KEY (`category_id`) REFERENCES `log2_vp_supply_category` (`category_id`),
  ADD CONSTRAINT `fk_log2_vp_tenders_status_id_ Structure log2_vp_tender_status` FOREIGN KEY (`status_id`) REFERENCES `log2_vp_tender_status` (`status_id`);

--
-- Constraints for table `log2_vp_tender_bids`
--
ALTER TABLE `log2_vp_tender_bids`
  ADD CONSTRAINT `fk_log2_vp_tender_bids_tender_id_log2_vp_tenders` FOREIGN KEY (`tender_id`) REFERENCES `log2_vp_tenders` (`tender_id`),
  ADD CONSTRAINT `fk_log2_vp_tender_bids_vendor_id_log2_vp_vendors` FOREIGN KEY (`vendor_id`) REFERENCES `log2_vp_vendors` (`vendor_id`);

--
-- Constraints for table `log2_vp_tender_lines`
--
ALTER TABLE `log2_vp_tender_lines`
  ADD CONSTRAINT `FK_log2_vp_tender_lines_tender_id_log2_vp_tenders` FOREIGN KEY (`tender_id`) REFERENCES `log2_vp_tenders` (`tender_id`);

--
-- Constraints for table `log2_vp_vendors`
--
ALTER TABLE `log2_vp_vendors`
  ADD CONSTRAINT `fk_log2_vp_vendors_company_type_id_log2_vp_company_ty` FOREIGN KEY (`company_type_id`) REFERENCES `log2_vp_company_types` (`type_id`),
  ADD CONSTRAINT `fk_log2_vp_vendors_role_id_admin_um_roles` FOREIGN KEY (`role_id`) REFERENCES `admin_um_roles` (`role_id`),
  ADD CONSTRAINT `fk_log2_vp_vendors_status_id_ Structure log2_vp_user_status` FOREIGN KEY (`status_id`) REFERENCES `log2_vp_user_status` (`status_id`),
  ADD CONSTRAINT `fk_log2_vp_vendors_supply_category_id_log2_vp_supply_category` FOREIGN KEY (`supply_category_id`) REFERENCES `log2_vp_supply_category` (`category_id`);

--
-- Constraints for table `log2_vr_reports`
--
ALTER TABLE `log2_vr_reports`
  ADD CONSTRAINT `FK_log2_vr_reports_report_status_id_log2_vr_report_status` FOREIGN KEY (`report_status_id`) REFERENCES `log2_vr_report_status` (`status_id`),
  ADD CONSTRAINT `FK_log2_vr_reports_reservation_id_log2_vr_reservations` FOREIGN KEY (`reservation_id`) REFERENCES `log2_vr_reservations` (`reservation_id`);

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
