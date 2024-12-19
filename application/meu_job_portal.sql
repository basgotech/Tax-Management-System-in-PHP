-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 10:54 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meu_job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `job_id` int(222) NOT NULL,
  `vacancy_number` text DEFAULT NULL,
  `job_title` text DEFAULT NULL,
  `posting_date` text DEFAULT NULL,
  `closing_date` text DEFAULT NULL,
  `duty_station` text DEFAULT NULL,
  `job_grade` text DEFAULT NULL,
  `vacancy_type` text DEFAULT NULL,
  `job_description` text DEFAULT NULL,
  `qualification` text DEFAULT NULL,
  `experience` text DEFAULT NULL,
  `employment_type` text DEFAULT NULL,
  `job_category` text DEFAULT NULL,
  `job_created_by` text DEFAULT NULL,
  `created_date` timestamp(3) NULL DEFAULT current_timestamp(3),
  `expire_date` text NOT NULL DEFAULT 'Not Expired'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_application`
--

INSERT INTO `job_application` (`job_id`, `vacancy_number`, `job_title`, `posting_date`, `closing_date`, `duty_station`, `job_grade`, `vacancy_type`, `job_description`, `qualification`, `experience`, `employment_type`, `job_category`, `job_created_by`, `created_date`, `expire_date`) VALUES
(2, '2/20', 'Programmer', '2021-12-30', '2022-01-08', 'Metu', 'XII', 'Internal', 'Code', 'Bsc Degree Cosc', '0', 'Permanent', 'Admin', '3', '2021-12-29 16:22:48.550', 'Not Expired'),
(3, '3/20', 'Senior Programmer', '2021-12-30', '2021-12-30', 'Metu', 'XIII', 'Internal', 'Code', 'Bsc Degree Cosc', '4', 'Permanent', 'Admin', '3', '2021-12-29 16:23:29.853', 'EXP'),
(4, '3/20', 'asdf', '2021-12-23', '2021-12-23', 'sdf', 'asdf', 'Internal', 'asdf', 'asdfasdf', 'asdfasdf', 'Permanent', 'sadf', '3', '2021-12-30 13:37:37.441', 'EXP'),
(5, '4/2021', 'asdf', '2021-12-30', '2021-12-31', 'asdf', 'XII', 'External', 'asdf', 'sadf', 'sdf', 'Permanent', 'asdf', '3', '2021-12-30 13:50:28.720', 'Not Expired');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker`
--

CREATE TABLE `job_seeker` (
  `sekker_id` int(225) NOT NULL,
  `user_id` text DEFAULT NULL,
  `fname` text DEFAULT NULL,
  `mname` text DEFAULT NULL,
  `lname` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `birth_date` text DEFAULT NULL,
  `home_phone_number` text DEFAULT NULL,
  `mobile_phone_number` text DEFAULT NULL,
  `credential_document` text DEFAULT NULL,
  `reg_date` timestamp(3) NOT NULL DEFAULT current_timestamp(3)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_seeker`
--

INSERT INTO `job_seeker` (`sekker_id`, `user_id`, `fname`, `mname`, `lname`, `gender`, `birth_date`, `home_phone_number`, `mobile_phone_number`, `credential_document`, `reg_date`) VALUES
(4, '5', 'Feben', 'Addisu', 'Degu', 'Feben', '1999-04-24', '0936116907', '0937188813', 'credntialFebenAddisu', '2022-01-02 19:00:38.622');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_certification`
--

CREATE TABLE `job_seeker_certification` (
  `certe_id` int(11) NOT NULL,
  `user_id` text DEFAULT NULL,
  `certification_name` text DEFAULT NULL,
  `certification_description` text DEFAULT NULL,
  `add_date` timestamp(3) NOT NULL DEFAULT current_timestamp(3)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_seeker_certification`
--

INSERT INTO `job_seeker_certification` (`certe_id`, `user_id`, `certification_name`, `certification_description`, `add_date`) VALUES
(1, '5', 'Oracle', 'I Got from Oracle Meeting', '2022-01-08 20:29:53.022');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_edu_qualification`
--

CREATE TABLE `job_seeker_edu_qualification` (
  `edu_qua_id` int(11) NOT NULL,
  `user_id` text DEFAULT NULL,
  `degree` text DEFAULT NULL,
  `subject_of_stu` text DEFAULT NULL,
  `institution` text DEFAULT NULL,
  `comulative_gpa` text DEFAULT NULL,
  `enrollment_type` text DEFAULT NULL,
  `graduation_date` text DEFAULT NULL,
  `add_date` timestamp(3) NOT NULL DEFAULT current_timestamp(3)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_seeker_edu_qualification`
--

INSERT INTO `job_seeker_edu_qualification` (`edu_qua_id`, `user_id`, `degree`, `subject_of_stu`, `institution`, `comulative_gpa`, `enrollment_type`, `graduation_date`, `add_date`) VALUES
(1, '5', 'Diploma', 'HNS', 'Metu TVET Collage', '', 'Regular', '2019-05-09', '2022-01-08 13:37:23.778'),
(2, '5', 'Bachilor of Science', 'Computer Science', 'Metu University', '4', 'weekend', '2021-01-01', '2022-01-08 19:37:09.537');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_lang_skill`
--

CREATE TABLE `job_seeker_lang_skill` (
  `lang_skill_id` int(11) NOT NULL,
  `user_id` text DEFAULT NULL,
  `Language` text DEFAULT NULL,
  `speaking_skill` text DEFAULT NULL,
  `writing_skill` text DEFAULT NULL,
  `reading_skill` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `add_date` timestamp(3) NOT NULL DEFAULT current_timestamp(3)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_seeker_lang_skill`
--

INSERT INTO `job_seeker_lang_skill` (`lang_skill_id`, `user_id`, `Language`, `speaking_skill`, `writing_skill`, `reading_skill`, `Description`, `add_date`) VALUES
(1, '5', 'English', 'Excellent', 'Excellent', 'Excellent', '', '2022-01-08 21:28:38.485'),
(3, '5', 'Amharic', 'Excellent', 'Excellent', 'Excellent', '', '2022-01-08 21:29:08.908'),
(4, '5', 'Afan Oromo', 'Excellent', 'Excellent', 'Excellent', '', '2022-01-08 21:29:20.949');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_work_exp`
--

CREATE TABLE `job_seeker_work_exp` (
  `exp_id` int(11) NOT NULL,
  `user_id` text DEFAULT NULL,
  `employer_name` text DEFAULT NULL,
  `job_title` text DEFAULT NULL,
  `start_date` text DEFAULT NULL,
  `end_date` text DEFAULT NULL,
  `salary` text DEFAULT NULL,
  `currency` text DEFAULT NULL,
  `add_date` timestamp(3) NOT NULL DEFAULT current_timestamp(3)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_seeker_work_exp`
--

INSERT INTO `job_seeker_work_exp` (`exp_id`, `user_id`, `employer_name`, `job_title`, `start_date`, `end_date`, `salary`, `currency`, `add_date`) VALUES
(1, '5', 'Feben Addisu Degu', 'Network Technician', '2022-01-08', '2022-01-14', '25000', 'ETB', '2022-01-07 14:39:16.314'),
(2, '5', 'Feben Addisu Degu', 'Programmer', '2022-01-02', '2022-01-28', '30000', 'ETB', '2022-01-07 15:03:38.547');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` text DEFAULT NULL,
  `lname` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `role` text DEFAULT '',
  `sex` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `reg_date` timestamp(3) NOT NULL DEFAULT current_timestamp(3),
  `applicant_type` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `phone`, `role`, `sex`, `address`, `password`, `reg_date`, `applicant_type`) VALUES
(1, 'Basliel', 'Tegegn', 'tegegnbasliel@gmail.com', '0937188813', 'Admin', 'Male', 'Mettu', '123123', '0000-00-00 00:00:00.000', NULL),
(3, 'Telile', 'Taddese', 'telile@gmail.com', '0912345678', 'HR', 'female', 'Metu', '123123', '2021-12-28 11:42:51.044', NULL),
(5, 'Feben', 'Addisu', 'febenaddisu@gmail.com', '0937188813', 'Job Seekers', NULL, NULL, '123123', '2022-01-01 17:05:23.885', 'Fresh Gradudate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD PRIMARY KEY (`sekker_id`);

--
-- Indexes for table `job_seeker_certification`
--
ALTER TABLE `job_seeker_certification`
  ADD PRIMARY KEY (`certe_id`);

--
-- Indexes for table `job_seeker_edu_qualification`
--
ALTER TABLE `job_seeker_edu_qualification`
  ADD PRIMARY KEY (`edu_qua_id`);

--
-- Indexes for table `job_seeker_lang_skill`
--
ALTER TABLE `job_seeker_lang_skill`
  ADD PRIMARY KEY (`lang_skill_id`);

--
-- Indexes for table `job_seeker_work_exp`
--
ALTER TABLE `job_seeker_work_exp`
  ADD PRIMARY KEY (`exp_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `job_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `sekker_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_seeker_certification`
--
ALTER TABLE `job_seeker_certification`
  MODIFY `certe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_seeker_edu_qualification`
--
ALTER TABLE `job_seeker_edu_qualification`
  MODIFY `edu_qua_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_seeker_lang_skill`
--
ALTER TABLE `job_seeker_lang_skill`
  MODIFY `lang_skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_seeker_work_exp`
--
ALTER TABLE `job_seeker_work_exp`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
