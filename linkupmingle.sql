-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2019 at 06:06 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linkupmingle`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

DROP TABLE IF EXISTS `applicant`;
CREATE TABLE IF NOT EXISTS `applicant` (
  `applicant_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `m_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `skillarea` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `account_type` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`applicant_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`applicant_id`, `f_name`, `m_name`, `l_name`, `gender`, `email`, `phone`, `photo`, `skillarea`, `password`, `account_type`, `c_name`) VALUES
(1, 'cadain', 'm', 'miller', 'Female', 'cadainmiller@gmail.com', '8764080998', '', 'Hospitality', '$2y$10$fDQofuvF0vJsj.nNz/apHOieCgc7JqQRicUBOWKnu/TFx4VuD6a3q', '0', NULL),
(2, 'cadain', 'm', 'miller', 'Male', '', '8764080998', '', 'Hospitality', '$2y$10$7IJVd56HNefv2Nbv40BVAu5a.9vbUkvhL9Tnqhr50xaIDuAkgfbOq', '0', NULL),
(3, 'cadain', 'b', 'miller', 'Female', 'test@test.com', '8764080998', '', 'Hospitality', '$2y$10$Kb56GYTkdfQwVNtBugIXRu5W1gX1e6jccMlX7Ba/5Iz5M3jIlJLuG', '0', NULL),
(4, 'cadain', 'M', 'miller', 'Male', 'cadainmiller@test.com', '7864534760', '', 'Hospitality', '$2y$10$5X.98Ii.QvmOmKp0RNMxb.KuXm5qu2Nf1A4o5wexTj4JWo3ajxlSO', '0', NULL),
(5, 'cadain', 'd', 'miller', 'Female', 'cadainmiller@test1234.com', '8764080998', '', 'Hospitality', '$2y$10$UPlCAahxXCt6X0VJ6ZqAJ.L66bE7jpHCzMy2tkjWamFS7Pj/quGJ2', '0', NULL),
(7, '', '', '', '', 'test@125553.com', '8764080998', '', 'Hospitality', '$2y$10$c2ufVbRzJAChOttH8w8PO.6SbiDF5WHwaHRh/wytTIdmo4HIWZouC', '0', 'Test Company'),
(8, '', '', '', '', 'test@12555653.com', '8764080998', '', 'Hospitality', '$2y$10$eqzazsEZEPdNWoyN0sVMB.Z4xROQXAAD2ai/KX0a0nIR9qxAgxkpK', '1', 'Test Company'),
(9, '', '', '', '', 'test@1255rf5653.com', '8764080998', '', 'Hospitality', '$2y$10$zbna/D9D0DjG/agSRbR8A.AcfjoEp1Bg/E4a2DpM7iua4QdYzi3T.', '0', 'Test Company'),
(10, '', '', '', '', 'test@1255rggf5653.com', '8764080998', '', 'Hospitality', '$2y$10$G8il9ztwc1sxNzboXC58IeHfWzyX1nPGr3hatEDF98XR166Avo7Kq', 'TRUE', 'Test Company'),
(11, 'Errrol', 'M', 'Test', 'Female', 'test@hshshshs.com', '8764080998', '', 'Business', '$2y$10$8d1YcrpZMyFiZkHrz/dKxeA4bmjM/w1CfQz3Jyw7BOSZxVu481vli', '', NULL),
(12, 'Errrol', 'M', 'Test', 'Male', 'test@hshsweehshs.com', '8764080998', '', 'Business', '$2y$10$4Zmwom72xq6XQTjFv4fGWOc5.tZPlKgCFN3L62Gc5EVFVKmZ6klma', '', NULL),
(13, '', '', '', '', 'shsgshhsj@test.com', '12345667887', '', 'Hospitality', '$2y$10$Af/CQcFz.QX6uN2phVnnmOmTsdtdmFB9zYZVYkubeL3NLsjcZRine', 'TRUE', 'Test Company'),
(14, '', '', '', '', 'Testbjsgsg@test.com', '8764080998', '', 'Business', '$2y$10$kUtZATDVliHDPxcVYwW5c.0oUkJrbg/FUGBEfVL1iMdw9N36v/I7a', 'TRUE', 'Test Company'),
(15, '', '', '', '', 'chadrick.daguilar@yahoo.com', '8765351232', '', 'IT', '$2y$10$aNX2O1vCX8vHSsT3f16sMentaUZgC/cZxQ2GBZJZ78wS/GQG0BFxy', 'TRUE', 'Sys'),
(16, 'Cadain', 'M', 'Photo', 'Male', 'cadainmiller@gmail.test', '8764080998', '', 'Hospitality', '$2y$10$lerEQvD7gjB.ANMAecSXW./esPVw5ZVuKoGcvRKZTVAlG8VT4AZDK', '', NULL),
(17, 'Yes', 'MMM', 'Test Test', 'Male', 'test123@gmail.com', '8764080998', '', 'Hospitality', '$2y$10$s2NGl5Umo5njlMEzZSXGee2hDyxThV/TdgWYQ3GXM0II6CsrS63q.', '', NULL),
(18, 'Test', 'Test', 'Test', 'Female', 'Test.TEst@test123.com', '8764080998', 'image/1574726752_icons8-male-stroke-v-30.png', 'Hospitality', '$2y$10$S5c7IW4VbRYCsawrADIzl.Au/m7AkT3b04KzhjugDBSKLd9900HoK', 'FALSE', NULL),
(19, '', '', '', '', 'test@12556653.com', '99999999999', 'image/1574727564_', 'Business', '$2y$10$IbDGcrMrW.BFp1jw12hc5u6AX.5PPMu76VdIc5cchd62fkmCwcixW', 'TRUE', 'Test Company');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`company_id`),
  UNIQUE KEY `company_id` (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `intrested`
--

DROP TABLE IF EXISTS `intrested`;
CREATE TABLE IF NOT EXISTS `intrested` (
  `intrested_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `job_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `applicant_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `application_due` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`intrested_id`),
  UNIQUE KEY `intrested_id` (`intrested_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
CREATE TABLE IF NOT EXISTS `job` (
  `job_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `job_title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `date_posted` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `date_due` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`job_id`),
  UNIQUE KEY `job_id` (`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=893579078 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_title`, `date_posted`, `date_due`) VALUES
(817912459, 'TEST 2', '06/12/2019', '27/11/2019'),
(893579077, 'Photo Manager', '20/11/2019', '27/11/2019');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
