-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 02:46 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `income_tax`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Reg_ID` int(11) NOT NULL,
  `F_Name` varchar(50) NOT NULL,
  `L_Name` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Dob` varchar(50) NOT NULL,
  `Pre_Addr` varchar(50) NOT NULL,
  `Comm_Addr` varchar(50) NOT NULL,
  `Phone_Number` bigint(20) NOT NULL,
  `Reg_Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Reg_ID`, `F_Name`, `L_Name`, `Gender`, `Email`, `Password`, `Dob`, `Pre_Addr`, `Comm_Addr`, `Phone_Number`, `Reg_Type`) VALUES
(1, 'Veera', 'Venkat', 'Male', 'Veera@gmail.com', 'veer', '1996-09-19', 'Salem', 'Bangalore', 9976755529, 'Admin'),
(2, 'Rathna', 'M', 'Female', 'selvi@uniqtechnologies.co.in', 'rat', '2020-01-23', 'sdf', 'sdf', 7898989834, 'TaxPayer'),
(3, 'Subash', 'Bharath', 'Male', 'subash@gmail.com', 'sub', '2016-06-23', 'fg', 'sdfg', 7094981047, 'Accountant');

-- --------------------------------------------------------

--
-- Table structure for table `tax_form`
--

CREATE TABLE `tax_form` (
  `Tax_ID` int(11) NOT NULL,
  `User_ID` varchar(100) NOT NULL,
  `Payer_Name` varchar(100) NOT NULL,
  `PAN` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `PIN` bigint(20) NOT NULL,
  `Contact_Number` bigint(20) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `F_Date` varchar(200) NOT NULL,
  `T_Date` varchar(200) NOT NULL,
  `F_Income` bigint(20) NOT NULL,
  `O_Income` bigint(20) NOT NULL,
  `No_Res` bigint(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `F_Name` varchar(100) NOT NULL,
  `Work` varchar(200) NOT NULL,
  `N_Rupees` bigint(20) NOT NULL,
  `W_Rupees` varchar(200) NOT NULL,
  `Referral` varchar(200) NOT NULL,
  `Date` varchar(200) NOT NULL,
  `Place` varchar(200) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax_form`
--

INSERT INTO `tax_form` (`Tax_ID`, `User_ID`, `Payer_Name`, `PAN`, `Address`, `City`, `State`, `PIN`, `Contact_Number`, `Email`, `F_Date`, `T_Date`, `F_Income`, `O_Income`, `No_Res`, `Name`, `F_Name`, `Work`, `N_Rupees`, `W_Rupees`, `Referral`, `Date`, `Place`, `Status`) VALUES
(1, 'selvi@uniqtechnologies.co.in', 'Rathna', 'ASADD098HU', 'Chennai', 'Chennai', 'TN', 625520, 7894512365, 'selvi@uniqtechnologies.co.in', '2020-02-19', '2020-02-10', 25000, 25000, 4, 'Rathna', 'Samy', 'Software Developer', 45621, 'sfdgfg', 'Veera', '2020-02-19', 'Chennai', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Reg_ID`);

--
-- Indexes for table `tax_form`
--
ALTER TABLE `tax_form`
  ADD PRIMARY KEY (`Tax_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Reg_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tax_form`
--
ALTER TABLE `tax_form`
  MODIFY `Tax_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
