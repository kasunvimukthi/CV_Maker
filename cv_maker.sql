-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 08:57 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_maker`
--

-- --------------------------------------------------------

--
-- Table structure for table `al_results`
--

CREATE TABLE `al_results` (
  `ID` int(255) NOT NULL,
  `User_ID` int(255) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Result` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cources`
--

CREATE TABLE `cources` (
  `ID` int(255) NOT NULL,
  `User_ID` int(255) NOT NULL,
  `Insitiude_Name` varchar(255) NOT NULL,
  `I_Where` varchar(255) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Cource_Name` varchar(100) NOT NULL,
  `Info` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `extra_activity`
--

CREATE TABLE `extra_activity` (
  `ID` int(255) NOT NULL,
  `User_ID` int(255) NOT NULL,
  `Activity` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `ID` int(255) NOT NULL,
  `User_ID` int(255) NOT NULL,
  `Language` varchar(20) NOT NULL,
  `State` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ol_results`
--

CREATE TABLE `ol_results` (
  `ID` int(255) NOT NULL,
  `User_ID` int(255) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Result` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `ID` int(255) NOT NULL,
  `User_ID` int(255) NOT NULL,
  `Image` longblob NOT NULL,
  `Name` varchar(100) NOT NULL,
  `About_Me` varchar(1000) NOT NULL,
  `Contact_Number` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Civil_Status` int(2) NOT NULL,
  `Religion` varchar(10) NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `School` varchar(30) NOT NULL,
  `Languages` int(2) NOT NULL,
  `work_exeperince` int(11) NOT NULL,
  `Professional_Qualifications` int(2) NOT NULL,
  `Academic_Qualifications` int(10) NOT NULL,
  `Cources` int(2) NOT NULL,
  `Skills` int(2) NOT NULL,
  `Projects` int(2) NOT NULL,
  `AL_Results` int(2) NOT NULL,
  `AL_Year` varchar(10) NOT NULL,
  `OL_Results` int(2) NOT NULL,
  `OL_Year` varchar(10) NOT NULL,
  `Extra` int(2) NOT NULL,
  `Reference` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `professional_qualifications`
--

CREATE TABLE `professional_qualifications` (
  `ID` int(255) NOT NULL,
  `User_ID` int(255) NOT NULL,
  `Cooladge_Name` varchar(100) NOT NULL,
  `C_where` varchar(30) NOT NULL,
  `Year` varchar(20) NOT NULL,
  `Cource_Name` varchar(100) NOT NULL,
  `Info` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `ID` int(255) NOT NULL,
  `User_ID` int(255) NOT NULL,
  `Topic` varchar(100) NOT NULL,
  `T_Explain` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `ID` int(255) NOT NULL,
  `User_ID` int(255) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `State` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `ID` int(255) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Url` varchar(2000) NOT NULL,
  `Image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `template_color`
--

CREATE TABLE `template_color` (
  `ID` int(255) NOT NULL,
  `User_ID` int(255) NOT NULL,
  `Temp_ID` int(255) NOT NULL,
  `T_L_BG` varchar(255) NOT NULL,
  `L_A_BG` varchar(255) NOT NULL,
  `L_A_TE` varchar(255) NOT NULL,
  `L_A_L_BG` varchar(255) NOT NULL,
  `L_A_L_TE` varchar(255) NOT NULL,
  `L_P_B_B_C` varchar(255) NOT NULL,
  `L_P_L` varchar(255) NOT NULL,
  `R_A_BG` varchar(255) NOT NULL,
  `R_A_TE` varchar(255) NOT NULL,
  `R_A_L_BG` varchar(255) NOT NULL,
  `R_A_L_TE` varchar(255) NOT NULL,
  `R_A_L` varchar(255) NOT NULL,
  `R_P_B_B_C` varchar(255) NOT NULL,
  `R_P_L` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `templete_height`
--

CREATE TABLE `templete_height` (
  `ID` int(255) NOT NULL,
  `User_ID` int(255) NOT NULL,
  `Temp_ID` int(255) NOT NULL,
  `L_A_A_M_H` varchar(100) NOT NULL,
  `L_A_L_H` varchar(100) NOT NULL,
  `L_A_P_D_H` varchar(100) NOT NULL,
  `R_A_T_H` varchar(100) NOT NULL,
  `R_A_W_E_H` varchar(255) NOT NULL,
  `R_A_P_Q_H` varchar(100) NOT NULL,
  `R_A_C_H` varchar(100) NOT NULL,
  `R_A_S_H` varchar(100) NOT NULL,
  `R_A_P_H` varchar(100) NOT NULL,
  `R_A_A_Q_H` varchar(100) NOT NULL,
  `R_A_E_A_H` varchar(100) NOT NULL,
  `R_A_R_H` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `u_references`
--

CREATE TABLE `u_references` (
  `ID` int(255) NOT NULL,
  `User_ID` int(255) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Tel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `work_exeperince`
--

CREATE TABLE `work_exeperince` (
  `ID` int(255) NOT NULL,
  `User_ID` int(255) NOT NULL,
  `Company_Name` varchar(255) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Info` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `al_results`
--
ALTER TABLE `al_results`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cources`
--
ALTER TABLE `cources`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `extra_activity`
--
ALTER TABLE `extra_activity`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ol_results`
--
ALTER TABLE `ol_results`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `professional_qualifications`
--
ALTER TABLE `professional_qualifications`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `template_color`
--
ALTER TABLE `template_color`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `templete_height`
--
ALTER TABLE `templete_height`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `u_references`
--
ALTER TABLE `u_references`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `work_exeperince`
--
ALTER TABLE `work_exeperince`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `al_results`
--
ALTER TABLE `al_results`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cources`
--
ALTER TABLE `cources`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `extra_activity`
--
ALTER TABLE `extra_activity`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ol_results`
--
ALTER TABLE `ol_results`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professional_qualifications`
--
ALTER TABLE `professional_qualifications`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template_color`
--
ALTER TABLE `template_color`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `templete_height`
--
ALTER TABLE `templete_height`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `u_references`
--
ALTER TABLE `u_references`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_exeperince`
--
ALTER TABLE `work_exeperince`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
