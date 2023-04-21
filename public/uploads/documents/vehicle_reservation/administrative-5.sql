-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 08:41 AM
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
-- Database: `administrative`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_archive_list`
--

CREATE TABLE `admin_archive_list` (
  `index_no` int(255) NOT NULL,
  `docu_id` int(255) NOT NULL,
  `docu_statusID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_document_archive`
--

CREATE TABLE `admin_document_archive` (
  `docu_id` int(255) NOT NULL,
  `docu_title` varchar(255) NOT NULL,
  `docu_fileFormat_id` int(255) NOT NULL,
  `docu_categoryID` int(255) NOT NULL,
  `docu_path` varchar(255) NOT NULL,
  `docu_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_document_archive`
--

INSERT INTO `admin_document_archive` (`docu_id`, `docu_title`, `docu_fileFormat_id`, `docu_categoryID`, `docu_path`, `docu_status`) VALUES
(8, 'Sample Document', 2, 6, 'asdasdasd', 'Archived');

-- --------------------------------------------------------

--
-- Table structure for table `admin_document_category`
--

CREATE TABLE `admin_document_category` (
  `docu_categoryID` int(255) NOT NULL,
  `docu_categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_document_category`
--

INSERT INTO `admin_document_category` (`docu_categoryID`, `docu_categoryName`) VALUES
(1, 'Contract'),
(2, 'Report'),
(3, 'Invoice'),
(4, 'Receipts'),
(5, 'Case'),
(6, 'Permit');

-- --------------------------------------------------------

--
-- Table structure for table `admin_document_format`
--

CREATE TABLE `admin_document_format` (
  `docu_fileFormat_id` int(255) NOT NULL,
  `docu_fileFormat_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_document_format`
--

INSERT INTO `admin_document_format` (`docu_fileFormat_id`, `docu_fileFormat_desc`) VALUES
(1, 'PDF'),
(2, 'DOCX'),
(3, 'XLSX');

-- --------------------------------------------------------

--
-- Table structure for table `admin_document_info`
--

CREATE TABLE `admin_document_info` (
  `docu_id` int(255) NOT NULL,
  `docu_title` varchar(255) NOT NULL,
  `docu_fileFormat_id` int(255) NOT NULL,
  `docu_categoryID` int(255) NOT NULL,
  `docu_path` varchar(255) NOT NULL,
  `docu_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_document_info`
--

INSERT INTO `admin_document_info` (`docu_id`, `docu_title`, `docu_fileFormat_id`, `docu_categoryID`, `docu_path`, `docu_status`) VALUES
(9, 'Sample Document of Cristine', 2, 2, 'Lugod.docx', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `admin_document_status`
--

CREATE TABLE `admin_document_status` (
  `docu_statusID` int(255) NOT NULL,
  `docu_statusDesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_employee_info`
--

CREATE TABLE `admin_employee_info` (
  `emp_ID` int(255) NOT NULL,
  `emp_fname` varchar(255) DEFAULT NULL,
  `emp_lname` varchar(255) DEFAULT NULL,
  `emp_position` char(255) DEFAULT NULL,
  `emp_department` char(255) DEFAULT NULL,
  `emp_mobileno` int(255) DEFAULT NULL,
  `emp_email` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_employee_info`
--

INSERT INTO `admin_employee_info` (`emp_ID`, `emp_fname`, `emp_lname`, `emp_position`, `emp_department`, `emp_mobileno`, `emp_email`) VALUES
(1, 'User', 'Admin', 'User Admin', 'Administrative', 123456, 'user@lulan.com'),
(2, 'Document', 'Manager', 'Document Manager', 'Administrative', 123456, 'docu@lulan.com'),
(3, 'Legal', 'Manager', 'Legal Manager', 'Administrative', 123456, 'legal@lulan.com'),
(4, 'Facility', 'Manager', 'Facility Manager', 'Administrative', 123456, 'facility@lulan.com'),
(5, 'Recep', 'Tionist', 'Receptionist', 'Administrative', 123456, 'visitor@lulan.com'),
(6, 'Super', 'Admin', 'Super Admin', 'Administrative', 123456, 'superadmin@lulan.com'),
(7, 'Admin', 'Admin', 'Admin', 'Administrative', 123456, 'admin@lulan.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin_facility_info`
--

CREATE TABLE `admin_facility_info` (
  `facility_ID` int(255) NOT NULL,
  `facility_name` char(255) NOT NULL,
  `facility_desc` char(255) DEFAULT NULL,
  `facility_capacity` int(255) DEFAULT NULL,
  `facilityType_ID` int(255) NOT NULL,
  `facilityStatus_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_facility_info`
--

INSERT INTO `admin_facility_info` (`facility_ID`, `facility_name`, `facility_desc`, `facility_capacity`, `facilityType_ID`, `facilityStatus_ID`) VALUES
(1, 'Transportation Facility', 'vehicles and equipment for transportation services', 15, 1, 3),
(2, 'Warehouse', 'Large storage facility to store goods and materials', 20, 2, 1),
(3, 'Meeting Lounge', 'for meeting purposes', 10, 1, 1),
(4, 'Conference Room', 'for formal meetings', 20, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_facility_reservations`
--

CREATE TABLE `admin_facility_reservations` (
  `rsrv_id` int(255) NOT NULL,
  `rsrv_name` varchar(255) DEFAULT NULL,
  `facility_ID` int(255) NOT NULL,
  `rsrvPurpose_ID` int(255) NOT NULL,
  `rsrv_date` date DEFAULT NULL,
  `rsrv_time` time(6) DEFAULT NULL,
  `rsrv_occupants` int(255) DEFAULT NULL,
  `rsrv_mobile` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_facility_reservations`
--

INSERT INTO `admin_facility_reservations` (`rsrv_id`, `rsrv_name`, `facility_ID`, `rsrvPurpose_ID`, `rsrv_date`, `rsrv_time`, `rsrv_occupants`, `rsrv_mobile`) VALUES
(1, 'Joshua Gallano', 1, 1, '2023-03-17', '03:12:00.000000', 10, '097857657'),
(2, 'Cristine Lugod', 2, 1, '2023-03-25', '09:19:00.000000', 14, '091231231'),
(3, 'Kent Rillo', 3, 1, '2023-03-24', '06:41:00.000000', 3, '092131231'),
(4, 'Joshua Gallano', 1, 2, '2023-03-25', '09:42:00.000000', 15, '093434234');

-- --------------------------------------------------------

--
-- Table structure for table `admin_facility_status`
--

CREATE TABLE `admin_facility_status` (
  `facilityStatus_ID` int(255) NOT NULL,
  `facilityStatus_desc` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_facility_status`
--

INSERT INTO `admin_facility_status` (`facilityStatus_ID`, `facilityStatus_desc`) VALUES
(1, 'Available'),
(2, 'Reserved'),
(3, 'Occupied');

-- --------------------------------------------------------

--
-- Table structure for table `admin_facility_type`
--

CREATE TABLE `admin_facility_type` (
  `facilityType_ID` int(255) NOT NULL,
  `facilityType_desc` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_facility_type`
--

INSERT INTO `admin_facility_type` (`facilityType_ID`, `facilityType_desc`) VALUES
(1, 'Open for Reservation'),
(2, 'Facility use only');

-- --------------------------------------------------------

--
-- Table structure for table `admin_legal_approval`
--

CREATE TABLE `admin_legal_approval` (
  `approval_id` int(255) NOT NULL,
  `approval_title` varchar(255) NOT NULL,
  `approval_author` varchar(255) NOT NULL,
  `docu_id` int(255) NOT NULL,
  `approval_date` date NOT NULL DEFAULT current_timestamp(),
  `approval_department` varchar(255) NOT NULL,
  `approval_status_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_legal_approvalstatus`
--

CREATE TABLE `admin_legal_approvalstatus` (
  `approval_status_id` int(255) NOT NULL,
  `approval_status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_legal_case`
--

CREATE TABLE `admin_legal_case` (
  `case_id` int(255) NOT NULL,
  `case_title` varchar(255) NOT NULL,
  `case_author` varchar(255) NOT NULL,
  `case_timeCreated` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `case_path` varchar(255) NOT NULL,
  `case_type_id` int(255) NOT NULL,
  `case_status_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_legal_casestatus`
--

CREATE TABLE `admin_legal_casestatus` (
  `case_status_id` int(255) NOT NULL,
  `case_status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_legal_casestatus`
--

INSERT INTO `admin_legal_casestatus` (`case_status_id`, `case_status_name`) VALUES
(1, 'Open'),
(2, 'Closed');

-- --------------------------------------------------------

--
-- Table structure for table `admin_legal_casetype`
--

CREATE TABLE `admin_legal_casetype` (
  `case_type_id` int(255) NOT NULL,
  `case_type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_legal_casetype`
--

INSERT INTO `admin_legal_casetype` (`case_type_id`, `case_type_name`) VALUES
(1, 'Civil'),
(2, 'Criminal');

-- --------------------------------------------------------

--
-- Table structure for table `admin_legal_contract`
--

CREATE TABLE `admin_legal_contract` (
  `contracts_id` int(255) NOT NULL,
  `contracts_title` varchar(255) NOT NULL,
  `contracts_author` varchar(255) NOT NULL,
  `docu_id` int(255) NOT NULL,
  `contracts_date` date NOT NULL DEFAULT current_timestamp(),
  `contracts_department` varchar(255) NOT NULL,
  `contracts_status_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_legal_contractstatus`
--

CREATE TABLE `admin_legal_contractstatus` (
  `contract_status_ID` int(255) NOT NULL,
  `contract_status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_legal_subject`
--

CREATE TABLE `admin_legal_subject` (
  `legal_subjectID` int(255) NOT NULL,
  `legal_subjectName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_reserve_purpose`
--

CREATE TABLE `admin_reserve_purpose` (
  `rsrvPurpose_ID` int(255) NOT NULL,
  `rsrvPurpose_desc` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_reserve_purpose`
--

INSERT INTO `admin_reserve_purpose` (`rsrvPurpose_ID`, `rsrvPurpose_desc`) VALUES
(1, 'Event'),
(2, 'Meeting');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user_accounts`
--

CREATE TABLE `admin_user_accounts` (
  `user_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(255) NOT NULL,
  `emp_ID` int(255) NOT NULL,
  `user_dept_ID` int(255) NOT NULL,
  `userStatus_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_user_accounts`
--

INSERT INTO `admin_user_accounts` (`user_id`, `username`, `password`, `role_id`, `emp_ID`, `user_dept_ID`, `userStatus_ID`) VALUES
(1, 'user@lulan.com', 'Usermanagement1!', 1, 1, 4, 1),
(2, 'docu@lulan.com', 'Documanagement1!', 2, 2, 4, 1),
(3, 'legal@lulan.com', 'Legalmanagement1!', 3, 3, 4, 1),
(4, 'facility@lulan.com', 'Facilityreservation1!', 4, 4, 4, 1),
(5, 'visit@lulan.com', 'Visitmanagement1!', 5, 5, 4, 1),
(6, 'superadmin@lulan.com', 'Superadmin1!', 6, 6, 4, 1),
(7, 'admin@lulan.com', 'Admin24^', 7, 7, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_user_department`
--

CREATE TABLE `admin_user_department` (
  `user_dept_ID` int(255) NOT NULL,
  `user_dept_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_user_department`
--

INSERT INTO `admin_user_department` (`user_dept_ID`, `user_dept_name`) VALUES
(1, 'Logistics'),
(2, 'Human Resource'),
(3, 'Core Transaction'),
(4, 'Administrative'),
(5, 'Finance');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user_roles`
--

CREATE TABLE `admin_user_roles` (
  `role_id` int(255) NOT NULL,
  `role_name` char(255) DEFAULT NULL,
  `role_address` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_user_roles`
--

INSERT INTO `admin_user_roles` (`role_id`, `role_name`, `role_address`) VALUES
(1, 'User Admin', './user-management/dashboard.php'),
(2, 'Document Manager', './document-management/dashboard.php'),
(3, 'Legal Manager', './legal-management/dashboard.php'),
(4, 'Facility Manager', './facility-reservation/dashboard.php'),
(5, 'Receptionist', './visitor-management/dashboard.php'),
(6, 'Super Admin', './super-admin.php/dashboard.php'),
(7, 'Administrative', './modules/dashboard.php');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user_session`
--

CREATE TABLE `admin_user_session` (
  `session_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `session_time` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_user_session`
--

INSERT INTO `admin_user_session` (`session_id`, `user_id`, `session_time`) VALUES
(4, 7, '0000-00-00 00:00:00.000000'),
(5, 7, '0000-00-00 00:00:00.000000'),
(6, 7, '0000-00-00 00:00:00.000000'),
(7, 3, '0000-00-00 00:00:00.000000'),
(8, 7, '0000-00-00 00:00:00.000000'),
(9, 7, '0000-00-00 00:00:00.000000'),
(10, 6, '0000-00-00 00:00:00.000000'),
(11, 6, '2023-03-15 07:01:06.876662');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user_status`
--

CREATE TABLE `admin_user_status` (
  `userStatus_ID` int(255) NOT NULL,
  `userStatus_desc` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_user_status`
--

INSERT INTO `admin_user_status` (`userStatus_ID`, `userStatus_desc`) VALUES
(1, 'Active'),
(2, 'Inactive'),
(3, 'Unknown');

-- --------------------------------------------------------

--
-- Table structure for table `admin_visitors_scheduled`
--

CREATE TABLE `admin_visitors_scheduled` (
  `schedVstr_id` int(255) NOT NULL,
  `schedVstr_fname` varchar(255) DEFAULT NULL,
  `schedVstr_lname` varchar(255) DEFAULT NULL,
  `vstrPurpose_id` int(255) NOT NULL,
  `schedVstr_timeOfVisit` datetime(6) DEFAULT NULL,
  `schedVstr_mobile` text DEFAULT NULL,
  `schedVstr_status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_visitors_scheduled`
--

INSERT INTO `admin_visitors_scheduled` (`schedVstr_id`, `schedVstr_fname`, `schedVstr_lname`, `vstrPurpose_id`, `schedVstr_timeOfVisit`, `schedVstr_mobile`, `schedVstr_status`) VALUES
(1, 'Joshua', 'Gallano', 5, '2023-03-21 09:10:00.000000', '09668079342', 'Active'),
(7, 'Genicko', 'Feliciano', 2, '2023-04-25 04:10:00.000000', '096675123214', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `admin_visitor_count`
--

CREATE TABLE `admin_visitor_count` (
  `vstr_session_ID` int(255) NOT NULL,
  `vstr_id` int(255) NOT NULL,
  `vstr_timeOfVisit` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_visitor_info`
--

CREATE TABLE `admin_visitor_info` (
  `vstr_id` int(255) NOT NULL,
  `vstr_fname` char(255) DEFAULT NULL,
  `vstr_lname` char(255) DEFAULT NULL,
  `vstrPurpose_id` int(255) NOT NULL,
  `vstr_type_ID` int(255) NOT NULL,
  `vstr_mobile` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_visitor_info`
--

INSERT INTO `admin_visitor_info` (`vstr_id`, `vstr_fname`, `vstr_lname`, `vstrPurpose_id`, `vstr_type_ID`, `vstr_mobile`) VALUES
(1, 'Joshua', 'Gallano', 5, 4, '09668079342');

-- --------------------------------------------------------

--
-- Table structure for table `admin_visitor_purpose`
--

CREATE TABLE `admin_visitor_purpose` (
  `vstrPurpose_id` int(255) NOT NULL,
  `vstrPurpose_type` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_visitor_purpose`
--

INSERT INTO `admin_visitor_purpose` (`vstrPurpose_id`, `vstrPurpose_type`) VALUES
(1, 'Business Meeting'),
(2, 'Job Interview'),
(3, 'Facility Tour'),
(4, 'Training Session'),
(5, 'Networking Events'),
(6, 'Vendor Visits');

-- --------------------------------------------------------

--
-- Table structure for table `admin_visitor_type`
--

CREATE TABLE `admin_visitor_type` (
  `vstr_type_ID` int(255) NOT NULL,
  `vstr_type_desc` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_visitor_type`
--

INSERT INTO `admin_visitor_type` (`vstr_type_ID`, `vstr_type_desc`) VALUES
(1, 'Visit'),
(2, 'Applicant'),
(3, 'Guest'),
(4, 'VIP'),
(5, 'Stockholder');

-- --------------------------------------------------------

--
-- Table structure for table `archived_visitors_scheduled`
--

CREATE TABLE `archived_visitors_scheduled` (
  `schedVstr_id` int(255) NOT NULL,
  `schedVstr_fname` varchar(255) DEFAULT NULL,
  `schedVstr_lname` varchar(255) DEFAULT NULL,
  `vstrPurpose_id` int(255) NOT NULL,
  `schedVstr_timeOfVisit` datetime(6) DEFAULT NULL,
  `schedVstr_mobile` text DEFAULT NULL,
  `schedVstr_status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archived_visitors_scheduled`
--

INSERT INTO `archived_visitors_scheduled` (`schedVstr_id`, `schedVstr_fname`, `schedVstr_lname`, `vstrPurpose_id`, `schedVstr_timeOfVisit`, `schedVstr_mobile`, `schedVstr_status`) VALUES
(2, 'Jeffrey', 'Cruz', 2, '2023-03-23 01:18:00.000000', '09456464641', 'Archived'),
(3, 'Leandro', 'Quisado', 4, '2023-03-22 01:00:00.000000', '09674563453', 'Archived'),
(4, 'Kent', 'Rillo', 2, '2023-03-27 10:00:00.000000', '09342123123', 'Archived'),
(5, 'Cristine', 'Lugod', 5, '2023-03-30 11:09:00.000000', '091231231', 'Archived'),
(6, 'Meng', 'Bulano', 2, '2023-03-30 13:24:00.000000', '092342342342', 'Archived');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_archive_list`
--
ALTER TABLE `admin_archive_list`
  ADD PRIMARY KEY (`index_no`),
  ADD KEY `FK_admin_document_info_TO_admin_archive_list` (`docu_id`),
  ADD KEY `FK_admin_document_status_TO_admin_archive_list` (`docu_statusID`);

--
-- Indexes for table `admin_document_archive`
--
ALTER TABLE `admin_document_archive`
  ADD PRIMARY KEY (`docu_id`),
  ADD KEY `FK_admin_document_format_TO_admin_document_info` (`docu_fileFormat_id`),
  ADD KEY `FK_admin_document_category_TO_admin_document_info` (`docu_categoryID`);

--
-- Indexes for table `admin_document_category`
--
ALTER TABLE `admin_document_category`
  ADD PRIMARY KEY (`docu_categoryID`);

--
-- Indexes for table `admin_document_format`
--
ALTER TABLE `admin_document_format`
  ADD PRIMARY KEY (`docu_fileFormat_id`);

--
-- Indexes for table `admin_document_info`
--
ALTER TABLE `admin_document_info`
  ADD PRIMARY KEY (`docu_id`),
  ADD KEY `FK_admin_document_format_TO_admin_document_info` (`docu_fileFormat_id`),
  ADD KEY `FK_admin_document_category_TO_admin_document_info` (`docu_categoryID`);

--
-- Indexes for table `admin_document_status`
--
ALTER TABLE `admin_document_status`
  ADD PRIMARY KEY (`docu_statusID`);

--
-- Indexes for table `admin_employee_info`
--
ALTER TABLE `admin_employee_info`
  ADD PRIMARY KEY (`emp_ID`);

--
-- Indexes for table `admin_facility_info`
--
ALTER TABLE `admin_facility_info`
  ADD PRIMARY KEY (`facility_ID`),
  ADD KEY `FK_facility_type_TO_facility_info` (`facilityType_ID`),
  ADD KEY `FK_facility_status_TO_facility_info` (`facilityStatus_ID`);

--
-- Indexes for table `admin_facility_reservations`
--
ALTER TABLE `admin_facility_reservations`
  ADD PRIMARY KEY (`rsrv_id`),
  ADD KEY `FK_facility_info_TO_facility_reservations` (`facility_ID`),
  ADD KEY `FK_reservePurpose_TO_facility_reservations` (`rsrvPurpose_ID`);

--
-- Indexes for table `admin_facility_status`
--
ALTER TABLE `admin_facility_status`
  ADD PRIMARY KEY (`facilityStatus_ID`);

--
-- Indexes for table `admin_facility_type`
--
ALTER TABLE `admin_facility_type`
  ADD PRIMARY KEY (`facilityType_ID`);

--
-- Indexes for table `admin_legal_approval`
--
ALTER TABLE `admin_legal_approval`
  ADD PRIMARY KEY (`approval_id`),
  ADD KEY `FK_admin_document_info_TO_admin_legal_approval` (`docu_id`),
  ADD KEY `FK_admin_legal_approvalStatus_TO_admin_legal_approval` (`approval_status_id`);

--
-- Indexes for table `admin_legal_approvalstatus`
--
ALTER TABLE `admin_legal_approvalstatus`
  ADD PRIMARY KEY (`approval_status_id`);

--
-- Indexes for table `admin_legal_case`
--
ALTER TABLE `admin_legal_case`
  ADD PRIMARY KEY (`case_id`),
  ADD KEY `FK_admin_legal_casestatus_TO_admin_legal_case` (`case_status_id`),
  ADD KEY `FK_admin_legal_casetype_TO_admin_legal_case` (`case_type_id`);

--
-- Indexes for table `admin_legal_casestatus`
--
ALTER TABLE `admin_legal_casestatus`
  ADD PRIMARY KEY (`case_status_id`);

--
-- Indexes for table `admin_legal_casetype`
--
ALTER TABLE `admin_legal_casetype`
  ADD PRIMARY KEY (`case_type_id`);

--
-- Indexes for table `admin_legal_contract`
--
ALTER TABLE `admin_legal_contract`
  ADD PRIMARY KEY (`contracts_id`),
  ADD KEY `FK_admin_document_info_TO_admin_legal_contract` (`docu_id`),
  ADD KEY `FK_admin_legal_contractStatus_TO_admin_legal_contract` (`contracts_status_id`);

--
-- Indexes for table `admin_legal_contractstatus`
--
ALTER TABLE `admin_legal_contractstatus`
  ADD PRIMARY KEY (`contract_status_ID`);

--
-- Indexes for table `admin_legal_subject`
--
ALTER TABLE `admin_legal_subject`
  ADD PRIMARY KEY (`legal_subjectID`);

--
-- Indexes for table `admin_reserve_purpose`
--
ALTER TABLE `admin_reserve_purpose`
  ADD PRIMARY KEY (`rsrvPurpose_ID`);

--
-- Indexes for table `admin_user_accounts`
--
ALTER TABLE `admin_user_accounts`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `FK_employee_info_TO_user_accounts` (`emp_ID`),
  ADD KEY `FK_user_status_TO_user_accounts` (`userStatus_ID`),
  ADD KEY `FK_user_roles_TO_user_accounts` (`role_id`),
  ADD KEY `FK_user_department_TO_user_accounts` (`user_dept_ID`);

--
-- Indexes for table `admin_user_department`
--
ALTER TABLE `admin_user_department`
  ADD PRIMARY KEY (`user_dept_ID`);

--
-- Indexes for table `admin_user_roles`
--
ALTER TABLE `admin_user_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `admin_user_session`
--
ALTER TABLE `admin_user_session`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `FK_user_accounts_TO_user_session` (`user_id`);

--
-- Indexes for table `admin_user_status`
--
ALTER TABLE `admin_user_status`
  ADD PRIMARY KEY (`userStatus_ID`);

--
-- Indexes for table `admin_visitors_scheduled`
--
ALTER TABLE `admin_visitors_scheduled`
  ADD PRIMARY KEY (`schedVstr_id`),
  ADD KEY `FK_visitor_purpose_TO_visitors_scheduled` (`vstrPurpose_id`);

--
-- Indexes for table `admin_visitor_count`
--
ALTER TABLE `admin_visitor_count`
  ADD PRIMARY KEY (`vstr_session_ID`),
  ADD KEY `FK_visitor_info_TO_visitor_count` (`vstr_id`);

--
-- Indexes for table `admin_visitor_info`
--
ALTER TABLE `admin_visitor_info`
  ADD PRIMARY KEY (`vstr_id`),
  ADD KEY `FK_visitor_purpose_TO_visitor_info` (`vstrPurpose_id`),
  ADD KEY `FK_visitor_type_TO_visitor_info` (`vstr_type_ID`);

--
-- Indexes for table `admin_visitor_purpose`
--
ALTER TABLE `admin_visitor_purpose`
  ADD PRIMARY KEY (`vstrPurpose_id`);

--
-- Indexes for table `admin_visitor_type`
--
ALTER TABLE `admin_visitor_type`
  ADD PRIMARY KEY (`vstr_type_ID`);

--
-- Indexes for table `archived_visitors_scheduled`
--
ALTER TABLE `archived_visitors_scheduled`
  ADD PRIMARY KEY (`schedVstr_id`),
  ADD KEY `FK_visitor_purpose_TO_visitors_scheduled` (`vstrPurpose_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_archive_list`
--
ALTER TABLE `admin_archive_list`
  MODIFY `index_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_document_archive`
--
ALTER TABLE `admin_document_archive`
  MODIFY `docu_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_document_category`
--
ALTER TABLE `admin_document_category`
  MODIFY `docu_categoryID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_document_format`
--
ALTER TABLE `admin_document_format`
  MODIFY `docu_fileFormat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_document_info`
--
ALTER TABLE `admin_document_info`
  MODIFY `docu_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_document_status`
--
ALTER TABLE `admin_document_status`
  MODIFY `docu_statusID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_employee_info`
--
ALTER TABLE `admin_employee_info`
  MODIFY `emp_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin_facility_info`
--
ALTER TABLE `admin_facility_info`
  MODIFY `facility_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_facility_reservations`
--
ALTER TABLE `admin_facility_reservations`
  MODIFY `rsrv_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_facility_status`
--
ALTER TABLE `admin_facility_status`
  MODIFY `facilityStatus_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_facility_type`
--
ALTER TABLE `admin_facility_type`
  MODIFY `facilityType_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_legal_approval`
--
ALTER TABLE `admin_legal_approval`
  MODIFY `approval_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_legal_approvalstatus`
--
ALTER TABLE `admin_legal_approvalstatus`
  MODIFY `approval_status_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_legal_case`
--
ALTER TABLE `admin_legal_case`
  MODIFY `case_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_legal_casestatus`
--
ALTER TABLE `admin_legal_casestatus`
  MODIFY `case_status_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_legal_casetype`
--
ALTER TABLE `admin_legal_casetype`
  MODIFY `case_type_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_legal_contract`
--
ALTER TABLE `admin_legal_contract`
  MODIFY `contracts_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_legal_contractstatus`
--
ALTER TABLE `admin_legal_contractstatus`
  MODIFY `contract_status_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_legal_subject`
--
ALTER TABLE `admin_legal_subject`
  MODIFY `legal_subjectID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_reserve_purpose`
--
ALTER TABLE `admin_reserve_purpose`
  MODIFY `rsrvPurpose_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_user_accounts`
--
ALTER TABLE `admin_user_accounts`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_user_department`
--
ALTER TABLE `admin_user_department`
  MODIFY `user_dept_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_user_roles`
--
ALTER TABLE `admin_user_roles`
  MODIFY `role_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_user_session`
--
ALTER TABLE `admin_user_session`
  MODIFY `session_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `admin_user_status`
--
ALTER TABLE `admin_user_status`
  MODIFY `userStatus_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_visitors_scheduled`
--
ALTER TABLE `admin_visitors_scheduled`
  MODIFY `schedVstr_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin_visitor_count`
--
ALTER TABLE `admin_visitor_count`
  MODIFY `vstr_session_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_visitor_info`
--
ALTER TABLE `admin_visitor_info`
  MODIFY `vstr_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_visitor_purpose`
--
ALTER TABLE `admin_visitor_purpose`
  MODIFY `vstrPurpose_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_visitor_type`
--
ALTER TABLE `admin_visitor_type`
  MODIFY `vstr_type_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `archived_visitors_scheduled`
--
ALTER TABLE `archived_visitors_scheduled`
  MODIFY `schedVstr_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_archive_list`
--
ALTER TABLE `admin_archive_list`
  ADD CONSTRAINT `FK_admin_document_info_TO_admin_archive_list` FOREIGN KEY (`docu_id`) REFERENCES `admin_document_info` (`docu_id`),
  ADD CONSTRAINT `FK_admin_document_status_TO_admin_archive_list` FOREIGN KEY (`docu_statusID`) REFERENCES `admin_document_status` (`docu_statusID`);

--
-- Constraints for table `admin_document_info`
--
ALTER TABLE `admin_document_info`
  ADD CONSTRAINT `FK_admin_document_category_TO_admin_document_info` FOREIGN KEY (`docu_categoryID`) REFERENCES `admin_document_category` (`docu_categoryID`),
  ADD CONSTRAINT `FK_admin_document_format_TO_admin_document_info` FOREIGN KEY (`docu_fileFormat_id`) REFERENCES `admin_document_format` (`docu_fileFormat_id`);

--
-- Constraints for table `admin_facility_info`
--
ALTER TABLE `admin_facility_info`
  ADD CONSTRAINT `FK_facility_status_TO_facility_info` FOREIGN KEY (`facilityStatus_ID`) REFERENCES `admin_facility_status` (`facilityStatus_ID`),
  ADD CONSTRAINT `FK_facility_type_TO_facility_info` FOREIGN KEY (`facilityType_ID`) REFERENCES `admin_facility_type` (`facilityType_ID`);

--
-- Constraints for table `admin_facility_reservations`
--
ALTER TABLE `admin_facility_reservations`
  ADD CONSTRAINT `FK_facility_info_TO_facility_reservations` FOREIGN KEY (`facility_ID`) REFERENCES `admin_facility_info` (`facility_ID`),
  ADD CONSTRAINT `FK_reservePurpose_TO_facility_reservations` FOREIGN KEY (`rsrvPurpose_ID`) REFERENCES `admin_reserve_purpose` (`rsrvPurpose_ID`);

--
-- Constraints for table `admin_legal_approval`
--
ALTER TABLE `admin_legal_approval`
  ADD CONSTRAINT `FK_admin_document_info_TO_admin_legal_approval` FOREIGN KEY (`docu_id`) REFERENCES `admin_document_info` (`docu_id`),
  ADD CONSTRAINT `FK_admin_legal_approvalStatus_TO_admin_legal_approval` FOREIGN KEY (`approval_status_id`) REFERENCES `admin_legal_approvalstatus` (`approval_status_id`);

--
-- Constraints for table `admin_legal_case`
--
ALTER TABLE `admin_legal_case`
  ADD CONSTRAINT `FK_admin_legal_casestatus_TO_admin_legal_case` FOREIGN KEY (`case_status_id`) REFERENCES `admin_legal_casestatus` (`case_status_id`),
  ADD CONSTRAINT `FK_admin_legal_casetype_TO_admin_legal_case` FOREIGN KEY (`case_type_id`) REFERENCES `admin_legal_casetype` (`case_type_id`);

--
-- Constraints for table `admin_legal_contract`
--
ALTER TABLE `admin_legal_contract`
  ADD CONSTRAINT `FK_admin_document_info_TO_admin_legal_contract` FOREIGN KEY (`docu_id`) REFERENCES `admin_document_info` (`docu_id`),
  ADD CONSTRAINT `FK_admin_legal_contractStatus_TO_admin_legal_contract` FOREIGN KEY (`contracts_status_id`) REFERENCES `admin_legal_contractstatus` (`contract_status_ID`);

--
-- Constraints for table `admin_user_accounts`
--
ALTER TABLE `admin_user_accounts`
  ADD CONSTRAINT `FK_employee_info_TO_user_accounts` FOREIGN KEY (`emp_ID`) REFERENCES `admin_employee_info` (`emp_ID`),
  ADD CONSTRAINT `FK_user_department_TO_user_accounts` FOREIGN KEY (`user_dept_ID`) REFERENCES `admin_user_department` (`user_dept_ID`),
  ADD CONSTRAINT `FK_user_roles_TO_user_accounts` FOREIGN KEY (`role_id`) REFERENCES `admin_user_roles` (`role_id`),
  ADD CONSTRAINT `FK_user_status_TO_user_accounts` FOREIGN KEY (`userStatus_ID`) REFERENCES `admin_user_status` (`userStatus_ID`);

--
-- Constraints for table `admin_user_session`
--
ALTER TABLE `admin_user_session`
  ADD CONSTRAINT `FK_user_accounts_TO_user_session` FOREIGN KEY (`user_id`) REFERENCES `admin_user_accounts` (`user_id`);

--
-- Constraints for table `admin_visitors_scheduled`
--
ALTER TABLE `admin_visitors_scheduled`
  ADD CONSTRAINT `FK_visitor_purpose_TO_visitors_scheduled` FOREIGN KEY (`vstrPurpose_id`) REFERENCES `admin_visitor_purpose` (`vstrPurpose_id`);

--
-- Constraints for table `admin_visitor_count`
--
ALTER TABLE `admin_visitor_count`
  ADD CONSTRAINT `FK_visitor_info_TO_visitor_count` FOREIGN KEY (`vstr_id`) REFERENCES `admin_visitor_info` (`vstr_id`);

--
-- Constraints for table `admin_visitor_info`
--
ALTER TABLE `admin_visitor_info`
  ADD CONSTRAINT `FK_visitor_purpose_TO_visitor_info` FOREIGN KEY (`vstrPurpose_id`) REFERENCES `admin_visitor_purpose` (`vstrPurpose_id`),
  ADD CONSTRAINT `FK_visitor_type_TO_visitor_info` FOREIGN KEY (`vstr_type_ID`) REFERENCES `admin_visitor_type` (`vstr_type_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
