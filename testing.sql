-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 05:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(5, 'Mr Sea', '2021-09-13 08:30:00', '2021-09-13 11:00:00'),
(6, 'Mr Yang', '2021-09-13 11:00:00', '2021-09-13 14:00:00'),
(9, 'Kevin ', '2021-09-13 14:00:00', '2021-09-13 19:00:00'),
(10, 'DIe', '2021-09-06 00:00:00', '2021-09-07 00:00:00'),
(12, 'Haraan', '2021-12-22 00:00:00', '2021-12-23 00:00:00'),
(14, 'Haraan', '2021-12-22 06:00:00', '2021-12-22 06:30:00'),
(15, 'Haraan', '2021-12-22 06:00:00', '2021-12-22 06:30:00'),
(17, 'asdasd', '2021-12-22 06:30:00', '2021-12-22 07:00:00'),
(18, 'Haraan', '2021-12-22 06:30:00', '2021-12-22 07:00:00'),
(19, 'haraan', '2021-12-22 06:00:00', '2021-12-22 06:30:00'),
(20, 'haha', '2021-11-28 00:00:00', '2021-11-29 00:00:00'),
(21, 'haha', '2021-12-22 00:00:00', '2021-12-23 00:00:00'),
(22, 'haha', '2021-12-22 06:00:00', '2021-12-22 06:30:00'),
(23, 'Noice', '2021-12-22 06:00:00', '2021-12-22 06:30:00'),
(24, 'Haraan', '2021-12-22 06:00:00', '2021-12-22 06:30:00'),
(25, 'Haraan', '2021-12-22 09:00:00', '2021-12-22 12:00:00'),
(26, 'Haraan', '2021-12-22 06:00:00', '2021-12-22 06:30:00'),
(27, 'Haraan', '2021-12-22 06:00:00', '2021-12-22 06:30:00'),
(29, 'Haraan', '2021-12-22 09:00:00', '2021-12-22 09:30:00'),
(31, 'Haraan', '2021-12-22 06:00:00', '2021-12-22 06:30:00'),
(32, 'a', '2021-12-12 06:30:00', '2021-12-12 07:00:00'),
(33, 'Ahhh', '2021-12-22 06:00:00', '2021-12-22 06:30:00'),
(34, 'haraan', '2021-12-23 03:30:00', '2021-12-23 05:30:00'),
(35, 'Sea Shao Kang', '2021-12-27 08:00:00', '2021-12-27 11:30:00'),
(36, 'Sea Shao Kang', '2021-12-29 08:00:00', '2021-12-29 10:00:00'),
(37, 'Guo Jie', '2022-01-03 08:00:00', '2022-01-03 10:00:00'),
(40, 'Mr Sea', '2022-01-11 07:00:00', '2022-01-11 08:30:00'),
(41, 'haiya', '2021-12-14 06:00:00', '2021-12-14 08:30:00'),
(42, 'Hai', '2022-01-19 00:00:00', '2022-01-20 00:00:00'),
(43, 'Mr Tan', '2022-01-25 06:00:00', '2022-01-25 10:00:00'),
(48, 'Mr Rip', '2022-01-25 10:00:00', '2022-01-25 13:00:00'),
(53, 'Mr Sea', '2022-01-26 06:00:00', '2022-01-26 08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `name`, `status`) VALUES
(1, 'Antidote', 'Available'),
(2, 'Cream', 'Available'),
(3, 'Soap', 'Available'),
(4, 'Devices', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_detail`
--

CREATE TABLE `inventory_detail` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `a_status` varchar(50) NOT NULL,
  `a_remark` varchar(50) NOT NULL,
  `i_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory_detail`
--

INSERT INTO `inventory_detail` (`id`, `type`, `item_name`, `a_status`, `a_remark`, `i_price`) VALUES
(5, '1', 'Sleeping Pill', '', 'Expired In 25/12/2024', 'RM45.50'),
(7, '1', 'Sleeping Pill', 'Available', 'Expired In 25/12/2024 two pills after meals', 'RM30.50'),
(8, '1', 'Sleeping Pill', 'Available', 'Expired In 25/12/2024 two pills after meals', 'RM25.50'),
(9, '4', 'Hearing Devices', '', 'Once a day', 'RM120.50'),
(10, '3', 'Powerful Soup', 'Available', '500ml bodywash 23/1/2022 Expired', 'RM45.50'),
(11, '3', 'Powerful Soup', 'Available', '500ml bodywash 23/1/2022 Expired', 'RM80.50'),
(12, '4', 'Motion Sensor', 'Available', 'From Haiya Company at 20/12/2021', 'RM45.50'),
(13, '4', 'Skin Scanner ', 'Available', 'From Haiya Company at 20/12/2021', 'RM41.50'),
(14, '4', 'Oxygen tester', 'Damaged', 'From Haiya Company at 20/12/2021', 'RM30.50'),
(15, '2', 'Dry Care Cream 3', 'Available', 'Expired In 25/1/2023', 'RM25.50'),
(16, '1', 'Sleeping Pill 2', 'Available', 'Expired In 25/1/2024', 'RM25.50'),
(17, '1', 'Sleeping Pill 2', 'Available', 'Expired In 25/1/2024', 'RM80.50'),
(18, '1', 'Sleeping Pill 3', 'Available', 'Expired In 25/1/2023', 'RM44.50'),
(19, '1', 'Sleeping Pill 3', 'Available', 'Expired In 25/1/2023', 'RM70.50'),
(20, '1', 'Sleeping Pill 4', 'Available', 'Expired In 25/12/2024', 'RM45.50'),
(21, '2', 'Dry Care Cream 3', 'Available', 'Expired In 25/1/2024', 'RM20.50'),
(22, '2', 'Dry Care Cream 5', 'Available', 'From Haiya Company at 20/12/2021', 'RM80.50'),
(33, '3', 'Duave 7', 'Available', 'Expired In 25/1/2023', 'RM70.50'),
(34, '3', 'Duave 10', 'Damaged', '500ml bodywash 23/1/2022 Expired', 'RM50.50'),
(35, '1', 'Sleeping Pill 69420', 'Available', 'Expired In 25/1/2023', 'RM60.50'),
(37, '2', 'Dry Care Cream 2', 'Available', '---', 'RM12.50');

-- --------------------------------------------------------

--
-- Table structure for table `namelist`
--

CREATE TABLE `namelist` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `namelist`
--

INSERT INTO `namelist` (`id`, `name`, `status`, `date`) VALUES
(4, 'Mr Fish', 'Arrived', '2021-12-27 07:51:16'),
(13, 'Mr Cat', 'Arrived', '2022-01-25 13:42:06'),
(14, 'Mr Haraan', 'Arrived', '2022-01-26 02:03:16'),
(15, 'Mr Tee', 'Completed', '2022-01-26 02:03:25'),
(16, 'Mr Cake', 'Completed', '2022-01-26 03:24:42');

-- --------------------------------------------------------

--
-- Table structure for table `patientacc`
--

CREATE TABLE `patientacc` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `ic_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientacc`
--

INSERT INTO `patientacc` (`id`, `username`, `f_name`, `ic_number`, `email`, `phone_no`) VALUES
(7, 'Mr Sea', 'Sea Shao Kang', '980710016137', 'tysonaresu2016@gmail.com', '0167236880'),
(8, 'Mr Weak', 'Sea Weak Kang', '123122321321', 'tysonaresu2001@gmail.com', '0123456789'),
(9, 'Mr Te', 'Te Yong Wei', '73737171727', 'ggp@gmail.com', '0456789152'),
(10, 'Haraan', 'Haraan A/P Ramamadram', '878787878787', 'haraan@gmail.com', '0123456789'),
(11, 'Mr Yeng', 'Yeng Shao Kang', '980710016135', 'tysonaresu2016@gmail.com', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `patient_detail`
--

CREATE TABLE `patient_detail` (
  `id` int(11) NOT NULL,
  `ic_number` varchar(50) NOT NULL,
  `detail` varchar(50) NOT NULL,
  `detail_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_detail`
--

INSERT INTO `patient_detail` (`id`, `ic_number`, `detail`, `detail_date`) VALUES
(10004, '980710016137', 'Allegic to crab', '2021-12-25 13:12:12'),
(10005, '123122321321', 'Nothing very good', '2022-01-24 09:57:55'),
(10006, '73737171727', 'Allegic to Eren', '2021-12-25 13:15:04'),
(10007, '878787878787', 'Allegic to clown', '2022-01-24 10:00:50'),
(10008, '980710016135', 'Allegic to fish', '2022-01-26 03:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `a_remark` varchar(50) NOT NULL,
  `r_date` timestamp(6) NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `patient_name`, `item_name`, `amount`, `a_remark`, `r_date`) VALUES
(10, 'Mr Sea', 'Suicide Pill', 'RM50.50', 'From Haiya Company at 20/12/2021', '2022-01-25 05:01:03.924803'),
(11, 'Mr Ash', 'Duave 4', 'RM50.50', 'Expired In 25/1/2024', '2022-01-24 13:51:24.442521'),
(12, 'Mr Kevin', 'Sleeping Pill', 'RM50.50', '500ml bodywash 23/1/2022 Expired', '2022-01-24 13:51:41.683812');

-- --------------------------------------------------------

--
-- Table structure for table `useacc`
--

CREATE TABLE `useacc` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `ic_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useacc`
--

INSERT INTO `useacc` (`id`, `username`, `f_name`, `ic_number`, `email`, `phone_no`, `role`, `status`) VALUES
(1, 'Mr nani', 'Sea Shao Kang', '1000000011212', 'tysonaresu2016@gmail.com', '0167236880', '1', 'Not-Active'),
(2, 'Mr Nani 2', 'nani2', '123122315456', 'tysonaresu2036@gmail.com', '0123456789', '2', 'Not-Active'),
(3, 'Mr Nani3', 'nani3', '123122315453', 'tysonaresu2037@gmail.com', '0123456788', '1', 'Not-Active'),
(4, 'tysonaresu2016@gmail.com', 'Sea Shao Kang', '12312123123', 'tysonaresu2016@gmail.com', '0167236880', '1', 'Active'),
(5, 'shahsi', 'Sea Shao Kang', '73737171727', 'tysonswqasd@gmail.com', '0167236880', '2', 'Active'),
(6, 'Mr lucnid', 'Lucnid Wei', '980711014345', 'will@gmail.com', '0167744553', '1', 'Not-Active'),
(7, 'Mr IDK', 'I Dont Know', '779324026224', 'sus@gmail.com', '0117744552', '2', 'Active'),
(8, 'screeniew', 'Michalle Wong', '785465123264', 'michalle@gmail.com', '0123456789', '2', 'Not-Active'),
(9, 'Miss Reborn', 'Siew Man', '565689891212', 'Siew@gmail.com', '0123789456', '1', 'Not-Active'),
(10, 'Fatian', 'She Fa Tian', '991007017744', 'dinny1007@gmail.com', '0112274466', '2', 'Active'),
(11, 'shakuganx', 'See Tee Zee', '652454036165', 'stz@gmail.com', '01237451244', '2', 'Active'),
(12, 'Miss Pw', 'Tee Pei Weng', '010218015545', 'peiweng@gmail.com', '014567823', '2', 'Not-Active'),
(13, 'Mr Ehe', 'Ehe Te Nandayo', '998877450124', 'ehe@gmail.com', '0123654784', '2', 'Active'),
(14, 'Miss Ham', 'Ham I weak', '73737171727', 'hiw@gmail.com', '0123654786', '2', 'Active'),
(15, 'Mr Lumine', 'Lumine Wei', '874501016135', 'lume@gmail.com', '01235487', '2', 'Not-Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_detail`
--
ALTER TABLE `inventory_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `namelist`
--
ALTER TABLE `namelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientacc`
--
ALTER TABLE `patientacc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_detail`
--
ALTER TABLE `patient_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useacc`
--
ALTER TABLE `useacc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inventory_detail`
--
ALTER TABLE `inventory_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `namelist`
--
ALTER TABLE `namelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `patientacc`
--
ALTER TABLE `patientacc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patient_detail`
--
ALTER TABLE `patient_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10009;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `useacc`
--
ALTER TABLE `useacc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
