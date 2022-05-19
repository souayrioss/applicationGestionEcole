-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 12:43 PM
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
-- Database: `gestionecole`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_first_name` varchar(20) NOT NULL,
  `admin_last_name` varchar(20) NOT NULL,
  `admin_role` varchar(20) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(200) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_first_name`, `admin_last_name`, `admin_role`, `admin_email`, `admin_password`, `create_at`, `update_at`) VALUES
(1, 'oussama', 'souayri', 'admin', 'souayri.oussama@gmail.com', 'azerty123', '2022-05-19 10:33:35', '2022-05-19 10:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id_class` int(11) NOT NULL,
  `name_class` varchar(50) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id_class`, `name_class`, `create_at`, `update_at`) VALUES
(1, 'Error404', '2022-05-19 10:32:23', '2022-05-19 10:32:23'),
(2, 'Namek', '2022-05-19 10:32:23', '2022-05-19 10:32:23');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `parent_id` int(11) NOT NULL,
  `parent_first_name` varchar(30) NOT NULL,
  `parent_last_name` varchar(50) NOT NULL,
  `parent_gender` varchar(25) NOT NULL,
  `parent_job` varchar(25) NOT NULL,
  `parent_address` varchar(255) NOT NULL,
  `parent_phone` varchar(25) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`parent_id`, `parent_first_name`, `parent_last_name`, `parent_gender`, `parent_job`, `parent_address`, `parent_phone`, `create_at`, `update_at`) VALUES
(1, 'raouya', 'el yaagoubi', 'female', 'dévelopeuse web', 'El Kssar Kabir', '0123456789', '2022-05-19 10:35:06', '2022-05-19 10:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_first_name` varchar(20) NOT NULL,
  `student_last_name` varchar(50) NOT NULL,
  `student_gender` varchar(20) NOT NULL,
  `student_address` varchar(60) NOT NULL,
  `student_class` varchar(50) NOT NULL,
  `student_birthday` date NOT NULL,
  `student_email` varchar(20) NOT NULL,
  `id_parent` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_first_name`, `student_last_name`, `student_gender`, `student_address`, `student_class`, `student_birthday`, `student_email`, `id_parent`, `created_at`, `updated_at`) VALUES
(3, 'soumia', 'el yaqni', 'female', 'Khribga', 'error404', '1997-07-01', 'soumia@gmail.com', 1, '2022-05-19 10:36:50', '2022-05-19 10:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher_first_name` varchar(20) NOT NULL,
  `teacher_last_name` varchar(50) NOT NULL,
  `teacher_gender` varchar(10) NOT NULL,
  `teacher_subject` varchar(50) NOT NULL,
  `teacher_phone` varchar(20) NOT NULL,
  `teacher_class` varchar(30) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_first_name`, `teacher_last_name`, `teacher_gender`, `teacher_subject`, `teacher_phone`, `teacher_class`, `create_at`, `update_at`) VALUES
(1, 'Mourad', 'Zerzkhane', 'male', 'PHP', '0987654321', 'error404', '2022-05-19 10:40:53', '2022-05-19 10:40:53'),
(2, 'Naser', 'Sendali', 'male', 'JavaScript', '0567894321', 'Namek', '2022-05-19 10:41:46', '2022-05-19 10:41:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id_class`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `fr_std_prt` (`id_parent`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `parent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fr_std_prt` FOREIGN KEY (`id_parent`) REFERENCES `parent` (`parent_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
