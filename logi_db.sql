-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 05:21 AM
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
-- Database: `logi_db`
--

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
('doc6401b17b9f198', 'PO.docx', 7312, 'docx', 'PO', 4, 'sa12345', '2023-03-03 09:36:11', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `admin_dm_documents_view`
-- (See below for the actual view)
--
CREATE TABLE `admin_dm_documents_view` (
`document_id` varchar(50)
,`document_name` varchar(50)
,`document_size` float
,`document_purpose` text
,`date_created` datetime
,`display_name` varchar(50)
,`account_type_name` varchar(50)
,`document_category_name` varchar(50)
,`department_name` varchar(50)
,`document_status` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `admin_dm_document_category`
--

CREATE TABLE `admin_dm_document_category` (
  `category_id` int(11) NOT NULL,
  `document_category_name` varchar(50) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_dm_document_category`
--

INSERT INTO `admin_dm_document_category` (`category_id`, `document_category_name`, `department_id`) VALUES
(1, 'contract', 1),
(2, 'invoice', 2),
(3, 'employment certificate', 3),
(4, 'purchase order', 4);

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
(8, 'archived');

-- --------------------------------------------------------

--
-- Table structure for table `admin_doc_req_access`
--

CREATE TABLE `admin_doc_req_access` (
  `doc_req_access_id` varchar(50) NOT NULL,
  `document_id` varchar(50) NOT NULL,
  `requestor_id` varchar(50) NOT NULL,
  `reason_for_access` text NOT NULL,
  `date_requested` datetime NOT NULL,
  `is_granted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_doc_req_access`
--

INSERT INTO `admin_doc_req_access` (`doc_req_access_id`, `document_id`, `requestor_id`, `reason_for_access`, `date_requested`, `is_granted`) VALUES
('docreq63fe56fd2d6bf', 'doc63fe2023c0f16', 'sa12345', 'Requesting for this document to access', '2023-02-28 08:33:17', 0),
('docreq63fe57129d62e', 'doc63fe204b1bcca', 'sa12345', 'testing bcaa', '2023-02-28 08:33:38', 0),
('docreq63fe58a069e69', 'doc63fe2023c0f16', 'sa12345', 'tes', '2023-02-28 08:40:16', 0),
('docreq63fe58a95e42c', 'doc63fe34a4be9cf', 'sa12345', 'yodipungol', '2023-02-28 08:40:25', 0),
('docreq63fe58bf2914b', 'doc63fe2023c0f16', 'sa12345', 'text', '2023-02-28 08:40:47', 0),
('docreq63fe64a072f98', 'doc63fe20877f3fe', 'sa12345', 'te', '2023-02-28 09:31:28', 0),
('docreq63fe64a59c388', 'doc63fe34a4be9cf', 'sa12345', 'test', '2023-02-28 09:31:33', 0),
('docreq63fe64cd65353', 'doc63fe5982c45c8', 'sa12345', 'try ko nga to', '2023-02-28 09:32:13', 0),
('docreq63fe65c76b4c0', 'doc63fe204b1bcca', 'sa12345', 'test', '2023-02-28 09:36:23', 0),
('docreq63fe71e2c41e4', 'doc63fe20737d12f', 'sa12345', 'pa request nitong resources gonitro', '2023-02-28 10:28:02', 0),
('docreq63ff1606cbaff', 'doc63ff1542b09a3', 'sa12345', 'parequest', '2023-03-01 10:08:22', 0),
('docreq63ff5a5ad1795', 'doc63fe724649256', 'sa12345', 'request', '2023-03-01 02:59:54', 0),
('docreq6401b37492baa', 'doc6401b17b9f198', 'sa12345', 'TEAWDAWADWW', '2023-03-03 09:44:36', 0),
('docreq64020fac93580', 'doc63ffa8bc6c699', 'sa12345', 'pa req nitong 699 yung dulo agahaha', '2023-03-03 04:18:04', 0);

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
('sa12345', '123', 'John Doe', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `admin_um_accounts_view`
-- (See below for the actual view)
--
CREATE TABLE `admin_um_accounts_view` (
`account_id` varchar(50)
,`password` varchar(50)
,`display_name` varchar(50)
,`account_type_name` varchar(50)
,`department_name` varchar(50)
);

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
(1, 'super admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log1_am_vehicles`
--

CREATE TABLE `log1_am_vehicles` (
  `vehicle_id` varchar(50) NOT NULL,
  `vehicle_model_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log1_am_vehicle_model_type`
--

CREATE TABLE `log1_am_vehicle_model_type` (
  `vehicle_model_type_id` int(11) NOT NULL,
  `vehicle_model_type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log1_whs_inventory`
--

CREATE TABLE `log1_whs_inventory` (
  `item_id` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_description` text NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `section_id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log1_whs_sections`
--

CREATE TABLE `log1_whs_sections` (
  `section_id` varchar(50) NOT NULL,
  `section_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_am_audit_report`
--

CREATE TABLE `log2_am_audit_report` (
  `item_id` varchar(50) NOT NULL,
  `item_name` varchar(25) NOT NULL,
  `item_desc` text NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `system_count` int(11) NOT NULL,
  `actual_count` int(11) NOT NULL,
  `accuracy` varchar(25) NOT NULL,
  `variance` int(11) NOT NULL,
  `conclusion` text NOT NULL,
  `date_audited` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_am_audit_report`
--

INSERT INTO `log2_am_audit_report` (`item_id`, `item_name`, `item_desc`, `manufacturer`, `system_count`, `actual_count`, `accuracy`, `variance`, `conclusion`, `date_audited`) VALUES
('A001', 'Item A', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'SM Supermalls', 99, 50, '50.51%', -49, '', '0000-00-00 00:00:00'),
('A002', 'Item B', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Lulan Incorp', 28, 50, '178.57%', 22, '', '0000-00-00 00:00:00'),
('A001', 'Item A', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'SM Supermalls', 99, 22, '22.22%', -77, '', '2023-03-02 23:55:36'),
('A002', 'Item B', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Lulan Incorp', 28, 22, '78.57%', -6, '', '2023-03-02 23:55:36'),
('A001', 'Item A', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'SM Supermalls', 99, 80, '80.81%', -19, '', '2023-03-03 00:21:25'),
('A002', 'Item B', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Lulan Incorp', 28, 29, '103.57%', 1, '', '2023-03-03 00:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `log2_am_audit_sched`
--

CREATE TABLE `log2_am_audit_sched` (
  `audit_schedule_id` varchar(25) NOT NULL,
  `title` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `section_id` varchar(25) NOT NULL,
  `date_schedule` date NOT NULL,
  `time_schedule` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_am_audit_sched`
--

INSERT INTO `log2_am_audit_sched` (`audit_schedule_id`, `title`, `description`, `section_id`, `date_schedule`, `time_schedule`) VALUES
('au6400be6c306ae', 'test', 'test', 'A', '2023-03-15', '11:19 PM'),
('au6400be861cc21', 'test2', 'test2', 'A', '2023-03-11', '11:19 PM'),
('au6400c02936580', 'adwdwa', 'dawdwa', 'A', '2023-03-10', '11:26 PM'),
('au6400c0eb367e2', 'teasdw', 'test', 'A', '2023-03-17', '11:29 PM'),
('au6400c10e7c8bb', 'Testing 123', 'test', 'A', '2023-03-17', '11:30 PM'),
('au6400c2df1a26e', 'test', 'tawdadwa', 'A', '2023-03-17', '11:38 PM'),
('au6400c2dfc8191', 'test', 'tawdadwa', 'A', '2023-03-17', '11:38 PM'),
('au6400c2dfeb877', 'test', 'tawdadwa', 'A', '2023-03-17', '11:38 PM'),
('au6400c2e01a2a9', 'test', 'tawdadwa', 'A', '2023-03-17', '11:38 PM'),
('au6400c2e044a8b', 'test', 'tawdadwa', 'A', '2023-03-17', '11:38 PM'),
('au6400c31a5c813', 'test', 'tawdadwa', 'A', '2023-03-16', '11:38 PM'),
('au6400c31a9eddf', 'test', 'tawdadwa', 'A', '2023-03-16', '11:38 PM'),
('au6400c31ac1891', 'test', 'tawdadwa', 'A', '2023-03-16', '11:38 PM'),
('au6400c31ae708f', 'test', 'tawdadwa', 'A', '2023-03-16', '11:38 PM'),
('au6400c31b17c44', 'test', 'tawdadwa', 'A', '2023-03-16', '11:38 PM'),
('au6400c334898b7', 'test', 'tawdadwa', 'A', '2023-03-10', '11:38 PM'),
('au6400c35e2c570', 'tesadaw', 'teawwda', 'A', '2023-03-14', '11:40 PM'),
('au6400c36772451', 'tesadaw', 'teawwda', 'A', '2023-03-04', '11:40 PM'),
('au6401f410531db', 'test', 'tst', 'A', '2023-03-14', '9:20 PM'),
('au6401f44393c49', 'test', 'test', 'A', '2023-03-17', '9:21 AM'),
('au6401f44443cd7', 'test', 'test', 'A', '2023-03-17', '9:21 AM'),
('au6401f4446746d', 'test', 'test', 'A', '2023-03-17', '9:21 AM'),
('au6401f44492cc4', 'test', 'test', 'A', '2023-03-17', '9:21 AM'),
('au6401f444b79cf', 'test', 'test', 'A', '2023-03-17', '9:21 AM'),
('au6401f491cf0f0', 'test', 'test', 'A', '2023-03-10', '9:21 AM'),
('au6401f4926d24e', 'test', 'test', 'A', '2023-03-10', '9:21 AM'),
('au6401f4929055e', 'test', 'test', 'A', '2023-03-10', '9:21 AM'),
('au6401f492b1043', 'test', 'test', 'A', '2023-03-10', '9:21 AM'),
('au6401f492d2f5c', 'test', 'test', 'A', '2023-03-10', '9:21 AM');

-- --------------------------------------------------------

--
-- Table structure for table `log2_dt_doc_req`
--

CREATE TABLE `log2_dt_doc_req` (
  `doc_req_id` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `employee_position_id` int(11) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `reason_for_request` text NOT NULL,
  `date_created` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `requestor_id` varchar(50) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_dt_doc_req`
--

INSERT INTO `log2_dt_doc_req` (`doc_req_id`, `category_id`, `employee_id`, `employee_position_id`, `email_address`, `reason_for_request`, `date_created`, `due_date`, `requestor_id`, `status_id`) VALUES
('docreq63ff656410c8e', 1, 'test', 1, '123@gmail.com', 'test', '2023-03-01 03:47:00', '2023-03-01 03:47:00', 'sa12345', 1),
('docreq63ff6c808fc1f', 1, '001', 1, 'test12@gmail.com', 'need ko lang', '2023-03-01 04:17:20', '2023-03-01 04:17:20', 'sa12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log2_dt_doc_req_status`
--

CREATE TABLE `log2_dt_doc_req_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log2_dt_doc_req_status`
--

INSERT INTO `log2_dt_doc_req_status` (`status_id`, `status_name`) VALUES
(1, 'sent'),
(2, 'ongoing'),
(3, 'completed'),
(4, 'declined'),
(5, 'followed up'),
(6, 'expired');

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_fleet_vehicles`
--

CREATE TABLE `log2_fm_fleet_vehicles` (
  `fleet_vehicle_id` varchar(50) NOT NULL,
  `vehicle_id` varchar(50) NOT NULL,
  `fleet_vehicle_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_fm_fleet_vehicle_status`
--

CREATE TABLE `log2_fm_fleet_vehicle_status` (
  `fleet_vehicle_status_id` int(11) NOT NULL,
  `fleet_vehicle_status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `log2_vr_reservations`
--

CREATE TABLE `log2_vr_reservations` (
  `reservation_id` varchar(50) NOT NULL,
  `fleet_id` varchar(50) NOT NULL,
  `hirer_id` varchar(50) NOT NULL,
  `reservation_reason` text NOT NULL,
  `pickup_date` datetime NOT NULL,
  `return_date` datetime NOT NULL,
  `reservation_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log2_vr_reserve_status`
--

CREATE TABLE `log2_vr_reserve_status` (
  `reserve_status_id` int(11) NOT NULL,
  `reserve_status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure for view `admin_dm_documents_view`
--
DROP TABLE IF EXISTS `admin_dm_documents_view`;

CREATE VIEW `admin_dm_documents_view`  AS SELECT `admin_dm_documents`.`document_id` AS `document_id`, `admin_dm_documents`.`document_name` AS `document_name`, `admin_dm_documents`.`document_size` AS `document_size`, `admin_dm_documents`.`document_purpose` AS `document_purpose`, `admin_dm_documents`.`date_created` AS `date_created`, `author`.`display_name` AS `display_name`, `author_role`.`account_type_name` AS `account_type_name`, `document_category`.`document_category_name` AS `document_category_name`, `departments_of_category`.`department_name` AS `department_name`, `document_status`.`status_name` AS `document_status` FROM (((((`admin_dm_documents` left join `admin_um_accounts` `author` on(`admin_dm_documents`.`author_id` = `author`.`account_id`)) left join `admin_um_account_type` `author_role` on(`author`.`account_type_id` = `author_role`.`account_type_id`)) left join `admin_dm_document_category` `document_category` on(`admin_dm_documents`.`category_id` = `document_category`.`category_id`)) left join `admin_dm_departments` `departments_of_category` on(`document_category`.`department_id` = `departments_of_category`.`department_id`)) left join `admin_dm_document_status` `document_status` on(`admin_dm_documents`.`status_id` = `document_status`.`status_id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `admin_um_accounts_view`
--
DROP TABLE IF EXISTS `admin_um_accounts_view`;

CREATE VIEW `admin_um_accounts_view`  AS SELECT `admin_um_accounts`.`account_id` AS `account_id`, `admin_um_accounts`.`password` AS `password`, `admin_um_accounts`.`display_name` AS `display_name`, `admin_um_account_type`.`account_type_name` AS `account_type_name`, `admin_dm_departments`.`department_name` AS `department_name` FROM ((`admin_um_accounts` left join `admin_um_account_type` on(`admin_um_accounts`.`account_type_id` = `admin_um_account_type`.`account_type_id`)) left join `admin_dm_departments` on(`admin_um_account_type`.`department_id` = `admin_dm_departments`.`department_id`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_dm_departments`
--
ALTER TABLE `admin_dm_departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `admin_dm_documents`
--
ALTER TABLE `admin_dm_documents`
  ADD PRIMARY KEY (`document_id`),
  ADD KEY `fk_admin_dm_documents_category_id_ref_admin_dm_document_category` (`category_id`),
  ADD KEY `fk_admin_dm_documents_author_id_ref_admin_um_accounts` (`author_id`),
  ADD KEY `fk_admin_dm_documents_status_id_ref_admin_dm_document_status` (`status_id`);

--
-- Indexes for table `admin_dm_document_category`
--
ALTER TABLE `admin_dm_document_category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `fk_admin_dm_document_category_department_id_admin_dm_departments` (`department_id`);

--
-- Indexes for table `admin_dm_document_status`
--
ALTER TABLE `admin_dm_document_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `admin_doc_req_access`
--
ALTER TABLE `admin_doc_req_access`
  ADD PRIMARY KEY (`doc_req_access_id`),
  ADD KEY `fk_admin_doc_req_access_document_id_admin_dm_documents` (`document_id`),
  ADD KEY `fk_admin_doc_req_access_requestor_id_admin_um_accounts` (`requestor_id`);

--
-- Indexes for table `admin_um_accounts`
--
ALTER TABLE `admin_um_accounts`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `fk_admin_um_accounts_account_type_id_ref_admin_um_account_type` (`account_type_id`);

--
-- Indexes for table `admin_um_account_type`
--
ALTER TABLE `admin_um_account_type`
  ADD PRIMARY KEY (`account_type_id`),
  ADD KEY `fk_admin_um_account_type_department_id_ref_admin_dm_departments` (`department_id`);

--
-- Indexes for table `log1_am_vehicles`
--
ALTER TABLE `log1_am_vehicles`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Indexes for table `log1_am_vehicle_model_type`
--
ALTER TABLE `log1_am_vehicle_model_type`
  ADD PRIMARY KEY (`vehicle_model_type_id`);

--
-- Indexes for table `log1_whs_inventory`
--
ALTER TABLE `log1_whs_inventory`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `log1_whs_sections`
--
ALTER TABLE `log1_whs_sections`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `log2_dt_doc_req`
--
ALTER TABLE `log2_dt_doc_req`
  ADD PRIMARY KEY (`doc_req_id`),
  ADD KEY `fk_log2_dt_doc_req_doc_req_id_ref_admin_dm_document_category` (`category_id`),
  ADD KEY `fk_log2_dt_doc_req_requestor_id_admin_um_accounts` (`requestor_id`),
  ADD KEY `fk_log2_dt_doc_req_status_id_ref_log2_dt_doc_req_status` (`status_id`);

--
-- Indexes for table `log2_dt_doc_req_status`
--
ALTER TABLE `log2_dt_doc_req_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `log2_fm_fleet_vehicles`
--
ALTER TABLE `log2_fm_fleet_vehicles`
  ADD PRIMARY KEY (`fleet_vehicle_id`);

--
-- Indexes for table `log2_fm_fleet_vehicle_status`
--
ALTER TABLE `log2_fm_fleet_vehicle_status`
  ADD PRIMARY KEY (`fleet_vehicle_status_id`);

--
-- Indexes for table `log2_vr_reports`
--
ALTER TABLE `log2_vr_reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `log2_vr_reservations`
--
ALTER TABLE `log2_vr_reservations`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `log2_vr_reserve_status`
--
ALTER TABLE `log2_vr_reserve_status`
  ADD PRIMARY KEY (`reserve_status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_dm_departments`
--
ALTER TABLE `admin_dm_departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_dm_document_category`
--
ALTER TABLE `admin_dm_document_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_dm_document_status`
--
ALTER TABLE `admin_dm_document_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_um_account_type`
--
ALTER TABLE `admin_um_account_type`
  MODIFY `account_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log1_am_vehicle_model_type`
--
ALTER TABLE `log1_am_vehicle_model_type`
  MODIFY `vehicle_model_type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log2_dt_doc_req_status`
--
ALTER TABLE `log2_dt_doc_req_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `log2_fm_fleet_vehicle_status`
--
ALTER TABLE `log2_fm_fleet_vehicle_status`
  MODIFY `fleet_vehicle_status_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log2_vr_reserve_status`
--
ALTER TABLE `log2_vr_reserve_status`
  MODIFY `reserve_status_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_dm_documents`
--
ALTER TABLE `admin_dm_documents`
  ADD CONSTRAINT `fk_admin_dm_documents_author_id_ref_admin_um_accounts` FOREIGN KEY (`author_id`) REFERENCES `admin_um_accounts` (`account_id`),
  ADD CONSTRAINT `fk_admin_dm_documents_category_id_ref_admin_dm_document_category` FOREIGN KEY (`category_id`) REFERENCES `admin_dm_document_category` (`category_id`),
  ADD CONSTRAINT `fk_admin_dm_documents_status_id_ref_admin_dm_document_status` FOREIGN KEY (`status_id`) REFERENCES `admin_dm_document_status` (`status_id`);

--
-- Constraints for table `admin_dm_document_category`
--
ALTER TABLE `admin_dm_document_category`
  ADD CONSTRAINT `fk_admin_dm_document_category_department_id_admin_dm_departments` FOREIGN KEY (`department_id`) REFERENCES `admin_dm_departments` (`department_id`);

--
-- Constraints for table `admin_doc_req_access`
--
ALTER TABLE `admin_doc_req_access`
  ADD CONSTRAINT `fk_admin_doc_req_access_document_id_admin_dm_documents` FOREIGN KEY (`document_id`) REFERENCES `admin_dm_documents` (`document_id`),
  ADD CONSTRAINT `fk_admin_doc_req_access_requestor_id_admin_um_accounts` FOREIGN KEY (`requestor_id`) REFERENCES `admin_um_accounts` (`account_id`);

--
-- Constraints for table `admin_um_accounts`
--
ALTER TABLE `admin_um_accounts`
  ADD CONSTRAINT `fk_admin_um_accounts_account_type_id_ref_admin_um_account_type` FOREIGN KEY (`account_type_id`) REFERENCES `admin_um_account_type` (`account_type_id`);

--
-- Constraints for table `admin_um_account_type`
--
ALTER TABLE `admin_um_account_type`
  ADD CONSTRAINT `fk_admin_um_account_type_department_id_ref_admin_dm_departments` FOREIGN KEY (`department_id`) REFERENCES `admin_dm_departments` (`department_id`);

--
-- Constraints for table `log2_dt_doc_req`
--
ALTER TABLE `log2_dt_doc_req`
  ADD CONSTRAINT `fk_log2_dt_doc_req_doc_req_id_ref_admin_dm_document_category` FOREIGN KEY (`category_id`) REFERENCES `admin_dm_document_category` (`category_id`),
  ADD CONSTRAINT `fk_log2_dt_doc_req_requestor_id_admin_um_accounts` FOREIGN KEY (`requestor_id`) REFERENCES `admin_um_accounts` (`account_id`),
  ADD CONSTRAINT `fk_log2_dt_doc_req_status_id_ref_log2_dt_doc_req_status` FOREIGN KEY (`status_id`) REFERENCES `log2_dt_doc_req_status` (`status_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
