-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 08:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcgdotr`
--

-- --------------------------------------------------------

--
-- Table structure for table `conduct_of_activity`
--

CREATE TABLE `conduct_of_activity` (
  `conduct_of_activity_id` int(11) NOT NULL,
  `conduct_of_activity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conduct_of_activity`
--

INSERT INTO `conduct_of_activity` (`conduct_of_activity_id`, `conduct_of_activity`) VALUES
(2, 'JOINT'),
(3, 'PARTICIPATED FROM OTHER AGENCY'),
(1, 'PCG INITIATED');

-- --------------------------------------------------------

--
-- Table structure for table `report_selection`
--

CREATE TABLE `report_selection` (
  `report_selection_id` int(11) NOT NULL,
  `report_selection` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_selection`
--

INSERT INTO `report_selection` (`report_selection_id`, `report_selection`) VALUES
(1, 'COASTAL CLEAN-UP'),
(5, 'LAND BASE INSPECTION'),
(2, 'MANGROVE PLANTING'),
(7, 'MARITIME INCIDENT'),
(6, 'TRAININGS CONDUCTED'),
(3, 'TREE PLANTING'),
(4, 'VESSEL INSPECTION');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `station_id` int(11) NOT NULL,
  `station` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`station_id`, `station`) VALUES
(1, 'CGS CAMIGUIN'),
(2, 'CGS LANAO DEL NORTE'),
(3, 'CGS MISAMIS OCCIDENTAL'),
(4, 'CGS NMISOR'),
(5, 'CGS WMISOR');

-- --------------------------------------------------------

--
-- Table structure for table `sub_station`
--

CREATE TABLE `sub_station` (
  `sub_station_id` int(11) NOT NULL,
  `sub_station` varchar(100) NOT NULL,
  `station_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_station`
--

INSERT INTO `sub_station` (`sub_station_id`, `sub_station`, `station_id`) VALUES
(1, 'CGSS MAHINOG', 1),
(2, 'CGSS MAMBAJAO', 1),
(3, 'CGSS KAUSWAGAN', 2),
(4, 'CGSS KOLAMBUGAN', 2),
(5, 'CGSS TUBOD', 2),
(6, 'CGSS JIMENEZ', 3),
(7, 'CGSS OROQUITA', 3),
(8, 'CGSS OZAMIS', 3),
(9, 'CGSS PLARIDEL', 3),
(10, 'CGSS BALINGASAG', 4),
(11, 'CGSS BALINGOAN', 4),
(12, 'CGSS GINGOOG', 4),
(13, 'CGSS MEDINA', 4),
(14, 'CGSS TALISAYAN', 4),
(15, 'CGSS CAGAYAN DE ORO', 5),
(16, 'CGSS EL SALVADOR', 5),
(17, 'CGSS JASAAN', 5),
(18, 'CGSS LAGUINDINGAN', 5),
(19, 'CGSS LUGAIT', 5),
(20, 'CGSS NAAWAN', 5),
(21, 'CGSS OPOL', 5),
(22, 'CGSS TAGOLOAN', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_registered` datetime NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `profile_picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `date_registered`, `first_name`, `last_name`, `profile_picture`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'asdfasdf@gma.com', '2022-10-26 07:50:40', 'asdf', 'asdf', 'asdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `user_role_id` int(11) NOT NULL,
  `value` varchar(100) DEFAULT NULL,
  `text` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`user_role_id`, `value`, `text`) VALUES
(1, 'um_cg-admin', 'CG ADMIN'),
(2, 'um_cgss-mambajao', 'CGSS MAMBAJAO'),
(3, 'um_cgss-mahinog', 'CGSS MAHINOG'),
(4, 'um_cgs-camiguin', 'CGS CAMIGUIN'),
(5, 'um_cgss-jimenez', 'CGSS JIMENEZ'),
(6, 'um_cgss-oroquieta', 'CGSS OROQUIETA'),
(7, 'um_cgss-plaridel', 'CGSS PLARIDEL'),
(8, 'um_cgss-ozamiz', 'CGSS OZAMIZ'),
(9, 'um_cgs-misamis-occidental', 'CGS MISAMIS OCCIDENTAL'),
(10, 'um_cgss-tubod', 'CGSS TUBOD'),
(11, 'um_cgss-kauswagan', 'CGSS KAUSWAGAN'),
(12, 'um_cgss-kolambungan', 'CGSS KOLAMBUNGAN'),
(13, 'um_cgs-lanao-del-norte', 'CGS LANAO DEL NORTE'),
(14, 'um_cgss-naawan', 'CGSS NAAWAN'),
(15, 'um_cgss-lugait', 'CGSS LUGAIT'),
(16, 'um_cgss-jasaan', 'CGSS JASAAN'),
(17, 'um_cgss-tagoloan', 'CGSS TAGOLOAN'),
(18, 'um_cgss-cagayan-de-oro', 'CGSS CAGAYAN DE ORO'),
(19, 'um_cgss-opol', 'CGSS OPOL'),
(20, 'um_cgss-el-salvador', 'CGSS EL SALVADOR'),
(21, 'um_cgss-laguindingan', 'CGSS LAGUINDINGAN'),
(22, 'um_cgs-western-misamis-oriental', 'CGS WESTERN MISAMIS ORIENTAL'),
(23, 'um_cgss-medina', 'CGSS MEDINA'),
(24, 'um_cgss-talisayan', 'CGSS TALISAYAN'),
(25, 'um_cgss-balingasag', 'CGSS BALINGASAG'),
(26, 'um_cgss-gingoog', 'CGSS GINGOOG'),
(27, 'um_cgss-balingoan', 'CGSS BALINGOAN'),
(28, 'um_cgs-northeastern-misamis-oriental', 'CGS NORTHEASTERN MISAMIS ORIENTAL'),
(29, 'subscriber', 'Subscriber'),
(30, 'contributor', 'Contributor'),
(31, 'author', 'Author'),
(32, 'editor', 'Editor'),
(33, 'administrator', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conduct_of_activity`
--
ALTER TABLE `conduct_of_activity`
  ADD PRIMARY KEY (`conduct_of_activity_id`),
  ADD UNIQUE KEY `conduct_of_activity` (`conduct_of_activity`);

--
-- Indexes for table `report_selection`
--
ALTER TABLE `report_selection`
  ADD PRIMARY KEY (`report_selection_id`),
  ADD UNIQUE KEY `report_selection` (`report_selection`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`station_id`),
  ADD UNIQUE KEY `station` (`station`);

--
-- Indexes for table `sub_station`
--
ALTER TABLE `sub_station`
  ADD PRIMARY KEY (`sub_station_id`),
  ADD UNIQUE KEY `sub_station` (`sub_station`),
  ADD KEY `station_id` (`station_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`user_role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conduct_of_activity`
--
ALTER TABLE `conduct_of_activity`
  MODIFY `conduct_of_activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `report_selection`
--
ALTER TABLE `report_selection`
  MODIFY `report_selection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `station_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_station`
--
ALTER TABLE `sub_station`
  MODIFY `sub_station_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `user_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
