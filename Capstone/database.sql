-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 07:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrations`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_archived` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clinics`
--

CREATE TABLE `clinics` (
  `clinic_id` int(11) NOT NULL,
  `clinic_name` varchar(255) NOT NULL,
  `clinic_type` varchar(255) NOT NULL,
  `clinic_description` varchar(255) NOT NULL,
  `clinic_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinics`
--

INSERT INTO `clinics` (`clinic_id`, `clinic_name`, `clinic_type`, `clinic_description`, `clinic_address`) VALUES
(0, 'Dot\'s Clinic', 'public', 'Medical Clinic in Mandaluyong', 'B-23 F. Martinez Ave, Mandaluyong, 1550 Metro Manila'),
(1, '9 De Febrero Family Clinic', 'public', 'Free Clinic in Mandaluyong', '559 Nueve de Febrero, Pleasant Hills, Mandaluyong, 1550 Kalakhang Maynila'),
(2, 'Bgy. Addition Hills', 'public', 'Medical Clinic in San Juan, Metro Manila', 'Hoover, San Juan, 1556 Metro Manila'),
(3, 'Pleasant Hills Health Center and Lying In Clinic', 'public', 'Community health Centre in Mandaluyong', '626-628 Nueve de Febrero, Pleasant Hills, Mandaluyong, 1553 Kalakhang Maynila'),
(4, 'Docs M.D. Healthcare Clinic', 'private', 'Medical Clinic in Mandaluyong', 'Maysilo Cir, Mandaluyong, 1550 Metro Manila'),
(5, 'Managed Care Phil., Inc.\r\n', 'private', 'Medical Clinic in Mandaluyong\r\n', 'Order Taking Philippines 33rd Floor, Summit One Tower, 530 Shaw Blvd, Mandaluyong, Metro Manila'),
(6, 'Janette P. Tuquero, MD @ Holy Spirit Polyclinic & Diagnostic Center', 'private', 'Medical Clinic in Mandaluyong', 'Holy Spirit Polyclinic & Diagnostic Center, Shaw Boulevard, Mandaluyong City'),
(7, 'Aerin Medical Aesthetics and Wellness Clinic', 'private', 'Medical Clinic in Mandaluyong\r\n', 'Synetserve, Unit 12, Ground Floor 500 Shaw Zentrum, 500 Shaw Blvd, Pleasant Hills, Mandaluyong, 1550 Metro Manila'),
(8, 'SHIP Clinic', 'private', 'Medical Clinic in Mandaluyong\r\n', '566 Shaw Blvd, Pleasant Hills, Mandaluyong, Metro Manila'),
(9, 'Lady Of Manaoag Health Care Clinic\r\n', 'private', 'Medical Clinic in Mandaluyong\r\n', '486 Boni Avenue Corner San Joaquin, Plain View, Mandaluyong, 1550 Metro Manila'),
(10, 'Global Multi-Specialty Health and Wellness Clinic', 'private', 'Medical Clinic in Mandaluyong\r\n', '113 Rt. Rev. G. Aglipay, Mandaluyong, Metro Manila');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `Id` int(11) NOT NULL,
  `medicine` varchar(255) NOT NULL,
  `infected` varchar(255) NOT NULL,
  `quarantine` varchar(255) NOT NULL,
  `vaccinated` varchar(255) NOT NULL,
  `persons` varchar(255) NOT NULL,
  `cough` varchar(255) NOT NULL,
  `fever` varchar(255) NOT NULL,
  `smell` varchar(255) NOT NULL,
  `taste` varchar(255) NOT NULL,
  `tired` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `due_date` varchar(20) NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `due_date`, `role`) VALUES
(1, 'Admin', 'Admin', 'adminauthority@database.com', '5b56707735bed7117162b252685a19a1', '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clinics`
--
ALTER TABLE `clinics`
  ADD PRIMARY KEY (`clinic_id`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD KEY `FK_UserID` (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fullname` (`fullname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
