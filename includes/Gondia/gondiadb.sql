-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2018 at 05:36 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gondiadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `daignosis`
--

CREATE TABLE `daignosis` (
  `dia_id` int(11) NOT NULL,
  `p_id` varchar(15) NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  `earlier_treat` varchar(255) NOT NULL,
  `conc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daignosis`
--

INSERT INTO `daignosis` (`dia_id`, `p_id`, `symptoms`, `earlier_treat`, `conc`) VALUES
(1, '45dw33', 'vommit,headache,fever, no stools', 'N/A', 'Food Poisioning'),
(2, '23se11', 'itching,skin redening', 'N/A', 'Skin allergy'),
(3, '6xy231', 'chest pain,high bp', 'Engioplasty', 'blockage in heart'),
(4, '89yy51', 'knee pain,cannot walk or stand', 'N/A', 'Knee plate damaged'),
(5, '44ac42', 'ear pain, hearing loss', 'N/A', 'EarDrum Rupture');

-- --------------------------------------------------------

--
-- Table structure for table `daily_reading`
--

CREATE TABLE `daily_reading` (
  `daily_readid` int(11) NOT NULL,
  `p_id` varchar(15) NOT NULL,
  `pusle` varchar(10) NOT NULL,
  `bp` varchar(50) NOT NULL,
  `temp` varchar(50) NOT NULL,
  `respi` varchar(50) NOT NULL,
  `ivfluids` varchar(255) NOT NULL,
  `date _time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_reading`
--

INSERT INTO `daily_reading` (`daily_readid`, `p_id`, `pusle`, `bp`, `temp`, `respi`, `ivfluids`, `date _time`) VALUES
(1, '45dw33', '80', 'S: 110 D:130', '32', '121', 'Glucose: 33 Glucose 2: 55 Glucose 3:11', '2017-12-21 13:39:03'),
(2, '23se11', '84', 'S:90 D:133', '33', '31', 'Glucose: 31 Glucose 2: 25 Glucose 3:33', '2017-12-21 13:39:03'),
(3, '6xy231', '83', 'S:120 D:144', '34', '211', 'Glucose: 63 Glucose 2: 53 Glucose 3:43', '2017-12-21 13:39:03'),
(4, '89yy51', '70', 'S:93 D:123', '38', '123', 'Glucose: 31 Glucose 2: 57 Glucose 3:14', '2017-12-21 13:39:03'),
(5, '44ac42', '87', 'S: 99 D:122', '35', '122', 'Glucose: 32 Glucose 2: 35 Glucose 3:54', '2017-12-21 13:39:03');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` int(10) NOT NULL,
  `type` varchar(255) NOT NULL,
  `specialist` varchar(255) NOT NULL,
  `visiting` varchar(255) NOT NULL,
  `hours` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `type`, `specialist`, `visiting`, `hours`) VALUES
(1, 'Cardiologist', 'specialist', 'Y', '9'),
(2, 'ENT', 'Normal', 'N', '24'),
(3, 'Dermatalogist', 'Specialist', 'Y', '16'),
(4, 'Dentist', 'Specialist', 'Y', '20'),
(5, 'Surgeon', 'Highly Specialized', 'Y', '10');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_findings`
--

CREATE TABLE `doctor_findings` (
  `Findings_id` int(11) NOT NULL,
  `p_id` varchar(15) NOT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `Findings` varchar(255) NOT NULL,
  `Td` varchar(255) NOT NULL,
  `picpath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_findings`
--

INSERT INTO `doctor_findings` (`Findings_id`, `p_id`, `Date`, `Time`, `Findings`, `Td`, `picpath`) VALUES
(1, '6xy231', '2017-12-12', '13:17:00', 'Chest pain, Head Ache', 'Amplopin 1-0-1. NO cheese, less salt diet', ''),
(2, '23se11', '2017-12-26', '04:18:00', 'itching, infection', 'Btex', ''),
(3, '44ac42', '2017-12-13', '03:19:00', 'Can\'t hear, Ear pain', 'Ear drops, Balm', ''),
(4, '45dw33', '2017-12-21', '03:19:00', 'Stomach ache, indigestion', 'Antacids, Digestion syrup', ''),
(5, '89yy51', '2017-12-23', '11:23:00', 'knee pain , can\'t walk', 'volini,high calcium diet', ''),
(8, '44ac42', '2017-12-13', '07:00:00', 'Head Ache', 'Saridon', ''),
(9, '45dw33', '0000-00-00', '00:00:00', 'Head Ache', 'Saridon', ''),
(10, '45dw33', '0000-00-00', '00:00:00', 'Head Ache', 'Saridon', ''),
(11, '45dw33', '0000-00-00', '00:00:00', 'Head Ache', 'Saridon', ''),
(12, '23se11', '2017-12-13', '02:01:00', 'fshbhd', 'fhbhbx', ''),
(13, '45dw33', '2017-12-12', '17:02:00', 'dhtdt', 'hgdg', ''),
(14, '23se11', '2017-12-06', '02:03:00', 'dthtsfh', 'dhhst', ''),
(15, '6xy231', '2018-03-08', '01:00:00', 'aaaaaa', 'asdsad', ''),
(16, '6xy231', '2018-03-20', '01:02:00', 'sgfdgH', 'bsHs', ''),
(17, '6xy231', '2018-03-22', '03:03:00', 'asdj', 'sjhbd', ''),
(18, '45dw33', NULL, NULL, '', '', 'uploads/1521901744_test1.jpg'),
(19, '89yy51', NULL, NULL, '', '', 'uploads/1521901973_test2.jpg'),
(20, '89yy51', NULL, NULL, '', '', 'uploads/1521902261_test1.jpg'),
(21, '6xy231', NULL, NULL, '', '', 'uploads/1522071824_test2.jpg'),
(22, '89yy51', NULL, NULL, '', '', 'uploads/1522086708_test2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inven_id` varchar(10) NOT NULL,
  `inven_name` varchar(20) NOT NULL,
  `inven_cost` varchar(20) NOT NULL,
  `available` int(11) NOT NULL DEFAULT '0',
  `stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inven_id`, `inven_name`, `inven_cost`, `available`, `stamp`) VALUES
('I1', 'Consultation Charges', '344', 72, '2018-02-13 13:18:35'),
('I10', 'Rt. Catherter', '100', 25, '2017-12-21 08:46:01'),
('I11', 'Oxygen Plain', '400', 14, '2017-12-21 08:48:47'),
('I12', 'Pathology', '400', 15, '2017-12-20 10:41:04'),
('I13', 'X Ray', '600', 10, '2017-12-20 10:41:04'),
('I14', 'Nebulisation', '420', 2, '2017-12-21 12:00:16'),
('I15', 'Ventiliator', '600', 10, '2017-12-20 10:42:35'),
('I16', 'Oxygen', '700', 0, '2017-12-20 10:41:04'),
('I17', 'Intubution & HM', '500', 0, '2017-12-20 10:41:04'),
('I18', 'ECG', '400', 0, '2017-12-20 10:41:04'),
('I19', 'Bi-Pap', '500', 0, '2017-12-20 10:41:04'),
('I2', 'IPD Registration', '200', 0, '2017-12-20 10:41:04'),
('I20', 'Oxygen', '500', 0, '2017-12-20 10:41:04'),
('I21', 'Airbed', '400', 0, '2017-12-20 10:41:04'),
('I22', 'Special Visit', '500', 0, '2017-12-20 10:41:04'),
('I23', 'USG', '500', 0, '2017-12-20 10:41:04'),
('I24', 'Central Line & HM', '500', 0, '2017-12-20 10:41:04'),
('I25', 'Tapping & HM', '1000', 0, '2017-12-20 10:41:04'),
('I26', 'Thrombolysis & HM', '800', 0, '2017-12-20 10:41:04'),
('I27', 'Physio Visit', '1000', 0, '2017-12-20 10:41:04'),
('I28', 'Diet Charges', '1000', 0, '2017-12-20 10:41:04'),
('I29', 'Echo', '400', 0, '2017-12-20 10:41:04'),
('I3', 'Room Type', '300', 0, '2017-12-20 10:41:04'),
('I30', 'CPR', '500', 0, '2017-12-20 10:41:04'),
('I31', 'MLC', '1000', 0, '2017-12-20 10:41:04'),
('I32', 'Platelet Transfusion', '1000', 0, '2017-12-20 10:41:04'),
('I33', 'Blood Transfusion', '600', 0, '2017-12-20 10:41:04'),
('I34', 'Lumber Puncher', '600', 0, '2017-12-20 10:41:04'),
('I35', 'Other Charges', '700', 0, '2017-12-20 10:41:04'),
('I4', 'Bed Charges', '300', 0, '2017-12-20 10:41:04'),
('I5', 'Doctor Visit Charges', '400', 0, '2017-12-20 10:41:04'),
('I6', 'Nursing Charges', '500', 0, '2017-12-20 10:41:04'),
('I7', 'RMO Charges', '200', 0, '2017-12-20 10:41:04'),
('I8', 'Monitor', '200', 0, '2017-12-20 10:41:04'),
('I9', 'Pulse Oxy', '1000', 0, '2017-12-20 10:41:04');

--
-- Triggers `inventory`
--
DELIMITER $$
CREATE TRIGGER `availability_check` AFTER UPDATE ON `inventory` FOR EACH ROW BEGIN
	IF NEW.available < 5 THEN
    INSERT INTO reqtest values(NEW.inven_id);
    END IF;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_updatelog`
--

CREATE TABLE `inventory_updatelog` (
  `Record` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `equipment_name` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory_updatelog`
--

INSERT INTO `inventory_updatelog` (`Record`, `timestamp`, `equipment_name`, `Quantity`) VALUES
(1, '2017-12-21 09:04:00', 'Rt. Catherter', 5),
(2, '2017-12-21 09:04:00', 'Rt. Catherter', 6),
(4, '2017-12-21 09:04:00', 'Oxygen Plain', 4),
(5, '0000-00-00 00:00:00', 'Consultation Charges', 2),
(6, '2017-12-21 09:05:15', 'Consultation Charges', 1),
(7, '2018-02-05 06:11:47', 'Consultation Charges', 25),
(8, '2018-02-05 06:50:52', 'Consultation Charges', 12);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_used`
--

CREATE TABLE `inventory_used` (
  `use_id` int(11) NOT NULL,
  `Invent_id` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory_used`
--

INSERT INTO `inventory_used` (`use_id`, `Invent_id`, `Date`, `Time`, `Quantity`) VALUES
(1, 'I4', '2017-12-05', '06:13:00', 2),
(2, 'I5', '2017-12-03', '03:14:00', 1),
(3, 'I18', '2017-12-27', '06:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `P_id` varchar(15) NOT NULL,
  `P_name` varchar(100) NOT NULL,
  `PType` varchar(30) DEFAULT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Consulting_DR` varchar(100) NOT NULL,
  `Ref_by` varchar(100) NOT NULL,
  `Admission_date` date NOT NULL,
  `Discharge_date` date DEFAULT NULL,
  `Admission_time` time NOT NULL,
  `Ward_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`P_id`, `P_name`, `PType`, `Age`, `Gender`, `Consulting_DR`, `Ref_by`, `Admission_date`, `Discharge_date`, `Admission_time`, `Ward_no`) VALUES
('23se11', 'Sushant Rajput', NULL, 22, 'Male', 'DR Venkat Subramaniam', 'Dr Iyer', '2017-12-05', '2017-12-13', '01:12:00', '2'),
('44ac42', 'Lucifer dubey', NULL, 30, 'Male', 'Dr Phantom ', '', '2017-12-06', '2017-12-27', '03:00:00', '5'),
('45dw33', 'Sushant Khattar', NULL, 35, 'Male', 'DR. Ram Manauj', 'DR. Yeshwant Jadhav', '2017-12-12', '2017-12-20', '05:00:00', '4'),
('6xy231', 'Tanmay Bhatt', NULL, 60, 'Male', 'Dr SHaymdas Pal', 'DR Sambandh Singh', '2017-12-05', '2017-12-21', '05:11:00', '5'),
('89yy51', 'Chetan Shah', NULL, 45, 'Male', 'DR Aurobindo ghosh', 'DR Sameer Gaikwad', '2017-12-19', '2017-12-21', '05:09:00', '2');

-- --------------------------------------------------------

--
-- Table structure for table `patient_inventory`
--

CREATE TABLE `patient_inventory` (
  `patient_id` varchar(20) NOT NULL,
  `inven_id` varchar(30) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_inventory`
--

INSERT INTO `patient_inventory` (`patient_id`, `inven_id`, `Quantity`, `timestamp`) VALUES
('23se11', 'I20', 0, '2018-02-13 18:11:35'),
('44ac42', 'I2', 0, '2018-02-13 18:11:35'),
('45dw33', 'I3', 0, '2018-02-13 18:11:35'),
('6xy231', 'I24', 0, '2018-02-13 18:11:35'),
('89yy51', 'I28', 0, '2018-02-13 18:11:35'),
('44ac42', 'I27', 0, '2018-02-13 18:11:35'),
('44ac42', 'I1', 2, '0000-00-00 00:00:00'),
('44ac42', 'I1', 3, '0000-00-00 00:00:00'),
('44ac42', 'I1', 4, '2018-02-13 18:48:35');

-- --------------------------------------------------------

--
-- Table structure for table `reqtest`
--

CREATE TABLE `reqtest` (
  `invenav` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reqtest`
--

INSERT INTO `reqtest` (`invenav`) VALUES
('I14');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `S_id` varchar(15) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Shift` varchar(15) NOT NULL,
  `Salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`S_id`, `Name`, `Address`, `Age`, `Gender`, `Shift`, `Salary`) VALUES
('S1E', 'Rahul Zaveri', 'G-2,bldg1,Mumbai', 22, 'Male', 'night', 15000),
('S2E', 'Dravish Shah', 'G-3,BLDG 2, Mumbai', 25, 'Male', 'Rotaional', 15000),
('S3E', 'Manoj Jathan', 'G-3,23,Mumbai', 23, 'Male', 'Day', 15000),
('S4E', 'Nirmala Guppta', 'G-3,Bkldg 3, Mumbai', 22, 'Female', 'Day', 12000),
('S5E', 'Anchal Mehra', 'G-6,Bldg3 , Mumbai', 30, 'Female', 'Rotational', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `treatment_charges`
--

CREATE TABLE `treatment_charges` (
  `C_ID` varchar(15) NOT NULL,
  `Treatment` varchar(100) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment_charges`
--

INSERT INTO `treatment_charges` (`C_ID`, `Treatment`, `Price`) VALUES
('c1', 'Consulting', 1000),
('c2', 'Others', 2000),
('c3', 'ICU', 4000),
('c4', 'general ward', 2000),
('c5', 'charge1', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daignosis`
--
ALTER TABLE `daignosis`
  ADD PRIMARY KEY (`dia_id`),
  ADD KEY `F_k` (`p_id`);

--
-- Indexes for table `daily_reading`
--
ALTER TABLE `daily_reading`
  ADD PRIMARY KEY (`daily_readid`),
  ADD KEY `F_k1` (`p_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `doctor_findings`
--
ALTER TABLE `doctor_findings`
  ADD PRIMARY KEY (`Findings_id`),
  ADD KEY `F_k2` (`p_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inven_id`);

--
-- Indexes for table `inventory_updatelog`
--
ALTER TABLE `inventory_updatelog`
  ADD PRIMARY KEY (`Record`);

--
-- Indexes for table `inventory_used`
--
ALTER TABLE `inventory_used`
  ADD PRIMARY KEY (`use_id`),
  ADD KEY `fk4` (`Invent_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD UNIQUE KEY `P_id` (`P_id`);

--
-- Indexes for table `patient_inventory`
--
ALTER TABLE `patient_inventory`
  ADD KEY `fk3` (`patient_id`);

--
-- Indexes for table `reqtest`
--
ALTER TABLE `reqtest`
  ADD UNIQUE KEY `invenav` (`invenav`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`S_id`);

--
-- Indexes for table `treatment_charges`
--
ALTER TABLE `treatment_charges`
  ADD PRIMARY KEY (`C_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daignosis`
--
ALTER TABLE `daignosis`
  MODIFY `dia_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `daily_reading`
--
ALTER TABLE `daily_reading`
  MODIFY `daily_readid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor_findings`
--
ALTER TABLE `doctor_findings`
  MODIFY `Findings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `inventory_updatelog`
--
ALTER TABLE `inventory_updatelog`
  MODIFY `Record` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inventory_used`
--
ALTER TABLE `inventory_used`
  MODIFY `use_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daignosis`
--
ALTER TABLE `daignosis`
  ADD CONSTRAINT `F_k` FOREIGN KEY (`p_id`) REFERENCES `patient` (`P_id`);

--
-- Constraints for table `daily_reading`
--
ALTER TABLE `daily_reading`
  ADD CONSTRAINT `F_k1` FOREIGN KEY (`p_id`) REFERENCES `patient` (`P_id`);

--
-- Constraints for table `doctor_findings`
--
ALTER TABLE `doctor_findings`
  ADD CONSTRAINT `F_k2` FOREIGN KEY (`p_id`) REFERENCES `patient` (`P_id`);

--
-- Constraints for table `inventory_used`
--
ALTER TABLE `inventory_used`
  ADD CONSTRAINT `fk4` FOREIGN KEY (`Invent_id`) REFERENCES `inventory` (`inven_id`);

--
-- Constraints for table `patient_inventory`
--
ALTER TABLE `patient_inventory`
  ADD CONSTRAINT `fk3` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`P_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
