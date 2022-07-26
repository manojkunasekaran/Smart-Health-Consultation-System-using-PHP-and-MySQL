-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 27, 2021 at 05:49 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hcs`
--
-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin1`;
CREATE TABLE IF NOT EXISTS `admin1` (
  `admin_id` int(100) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_contact` bigint(10) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


-- --------------------------------------------------------
--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_contact`) VALUES
(1, 'manoj', 'manoj@gmail.com', '6e23e21ecf290d22d946e224b0c3e0ef', 8940040210);
COMMIT;
-- password for admin: Manoj@123




--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `d_id` int(100) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(255) NOT NULL,
  `d_special` varchar(255) NOT NULL,
  `d_quali` varchar(255) NOT NULL,
  `d_experience` varchar(255) NOT NULL,
  `d_age` int(200) NOT NULL,
  `d_gender` varchar(255) NOT NULL,
  `d_contact` bigint(255) NOT NULL,
  `d_email` varchar(255) NOT NULL,
  `d_password` varchar(255) NOT NULL,
  `d_city` varchar(255) NOT NULL,
  `d_address` varchar(255) NOT NULL,
  `d_created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `d_updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `doctor` (`d_id`, `d_name`, `d_special`, `d_quali`,`d_experience`, `d_age`, `d_gender`, `d_contact`, `d_email`, `d_password`, `d_city`, `d_address`, `d_created_at`, `d_updated_at`) VALUES 
(1, 'Goutham K', 'CARDIOLOGIST', 'MBBS,MD,DM', '10 Years of experience as a Cardio', '50', 'MALE', '1234567890', 'goutham@gmail.com', '4fede680fd32a2a1e8f88a3128155e5d', 'Coimbatore', 'GCT, Coimbatore-13.',now(),now()),
-- password for goutham: Goutham@123
(2, 'Karthick P', 'CARDIOLOGIST', 'MBBS,MD,DM', 'Worked as Cardiologist for 5 years in Scothouse Hospital', '40', 'MALE', '1234567890', 'karthick@gmail.com', '4fede680fd32a2a1e8f88a3128155e5d', 'Coimbatore', 'GCT, Coimbatore-13.',now(),now()),
-- password for karthi: Karthi@123


(3, 'Mahesh K', 'NEUROLOGIST', 'MD,DO', 'Worked as Neurologist at Highland Hospital with an 10 years Experience', '50', 'MALE', '1234567890', 'mahesh@gmail.com', '733661b0ee1b80c951d58637ee2c1d51', 'Coimbatore', 'GCT, Coimbatore-13.',now(),now()),
-- password for mahesh: Mahesh@123
(4, 'Rajesh S', 'NEUROLOGIST', 'MBBS,MD,DO', 'Worked as Neurologist at KMCH with an 8 years of Experience', '49', 'MALE', '1234567890', 'rajesh@gmail.com', 'cabf031d5e3dc279f3856ac9a4fdde7d', 'Coimbatore', 'GCT, Coimbatore-13.',now(),now()),
-- password for rajesh: Rajesh@123

(5, 'Dharun K', 'DENTIST', 'MBBS,MD,DM', 'Worked as Dentist over an 10 years', '50', 'MALE', '1234567890', 'dharun@gmail.com', 'b82892defd6d5063f756e1e0b8d19dd5', 'Coimbatore', 'GCT, Coimbatore-13.',now(),now()),
-- password for dharun: Dharun@123
(6, 'Varshith R', 'DENTIST', 'MBBS,MD,DM', 'Worked as Dentist over an 10 years', '50', 'MALE', '1234567890', 'varshith@gmail.com', 'e267d2d9dade02e9558498f6e43987e2', 'Coimbatore', 'GCT, Coimbatore-13.',now(),now()),
-- password for varshith: Doctor@123

(7, 'Shruthi K', 'DERMATOLOGIST', 'MBBS,MD', 'Worked as DERMATOLOGIST over an 10 years', '50', 'MALE', '1234567890', 'shruthi@gmail.com', 'e267d2d9dade02e9558498f6e43987e2', 'Coimbatore', 'GCT, Coimbatore-13.',now(),now()), 
-- password for shruthi: Doctor@123
(8, 'Karthikeyan G', 'DERMATOLOGIST', 'MBBS,MD', 'Worked as DERMATOLOGIST over an 10 years', '50', 'MALE', '1234567890', 'karthikeyan@gmail.com', 'e267d2d9dade02e9558498f6e43987e2', 'Coimbatore', 'GCT, Coimbatore-13.',now(),now()),
-- password for karthikeyan: Doctor@123

(9, 'Bharathi A', 'ALLERGIST', 'MBBS,MD', 'Worked as Allergist over an 10 years', '50', 'MALE', '1234567890', 'bharathi@gmail.com', 'e267d2d9dade02e9558498f6e43987e2', 'Coimbatore', 'GCT, Coimbatore-13.',now(),now()),
-- password for bharathi: Doctor@123
(10, 'Vishal B', 'ALLERGIST', 'MBBS,MD', 'Worked as Allergist over an 10 years', '50', 'MALE', '1234567890', 'vishal@gmail.com', 'e267d2d9dade02e9558498f6e43987e2', 'Coimbatore', 'GCT, Coimbatore-13.',now(),now()),
-- password for vishal: Doctor@123

(11, 'Kamal K', 'NEPHROLOGIST', 'MBBS,MD', 'Worked as Nephrologist over an 10 years', '50', 'MALE', '1234567890', 'kamal@gmail.com', 'e267d2d9dade02e9558498f6e43987e2', 'Coimbatore', 'GCT, Coimbatore-13.',now(),now()), 
-- password for Kamal: Doctor@123
(12, 'Siva M', 'NEPHROLOGIST', 'MBBS,MD', 'Worked as Nephrologist over an 10 years', '50', 'MALE', '1234567890', 'siva@gmail.com', 'e267d2d9dade02e9558498f6e43987e2', 'Coimbatore', 'GCT, Coimbatore-13.',now(),now()),
-- password for siva: Doctor@123

(13, 'Vijay P', 'PEDIATRICIANS', 'MBBS,MD', 'Worked as Pediatrician over an 10 years', '50', 'MALE', '1234567890', 'vijay@gmail.com', 'e267d2d9dade02e9558498f6e43987e2', 'Coimbatore', 'GCT, Coimbatore-13.',now(),now()), 
-- password for vijay: Doctor@123
(14, 'Nithin S', 'PEDIATRICIANS', 'MBBS,MD', 'Worked as Pediatrician over an 10 years', '50', 'MALE', '1234567890', 'nithin@gmail.com', 'e267d2d9dade02e9558498f6e43987e2', 'Coimbatore', 'GCT, Coimbatore-13.',now(),now()), 
-- password for nithin: Doctor@123

(15, 'Arun V', 'PSYCHIATRISTS', 'MBBS,MD', 'Worked as PSYCHIATRIST over an 10 years', '50', 'MALE', '1234567890', 'arun@gmail.com', 'e267d2d9dade02e9558498f6e43987e2', 'Coimbatore', 'GCT, Coimbatore-13.',now(),now()),
-- password for arun: Doctor@123
(16, 'Ajay P', 'PSYCHIATRISTS', 'MBBS,MD', 'Worked as PSYCHIATRIST over an 10 years', '50', 'MALE', '1234567890', 'ajay@gmail.com', 'e267d2d9dade02e9558498f6e43987e2', 'Coimbatore', 'GCT, Coimbatore-13.',now(),now()), 
-- password for ajay: Doctor@123

(17, 'Vimal P', 'OTHERS', 'Diploma(Lab)', 'Worked as lab assisstant over an 5 years', '50', 'MALE', '1234567890', 'vimal@gmail.com', 'e267d2d9dade02e9558498f6e43987e2', 'Coimbatore', 'GCT, Coimbatore-13.',now(),now()), 
-- password for vimal: Doctor@123
(18, 'Kumar S', 'OTHERS', 'MSC(Nursing)', 'Worked as Nurse over an 15 years', '50', 'FEMALE', '1234567890', 'kumar@gmail.com', 'e267d2d9dade02e9558498f6e43987e2', 'Coimbatore', 'GCT, Coimbatore-13.',now(),now()),
-- password for kumar: Doctor@123

(19, 'Doctor', 'OTHERS', 'MBBS', 'Temporary Doctor over', '40', 'FEMALE', '1234567890', 'doctor@gmail.com', 'e267d2d9dade02e9558498f6e43987e2', 'Coimbatore', 'GCT, Coimbatore-13.',now(),now()),
-- password for doctor: Doctor@123
(20, 'Doctor', 'CARDIOLOGIST', 'MBBS', 'Worked as Cardiologist for 5 years in Scothouse Hospital', '40', 'MALE', '1234567890', 'doctorcardio@gmail.com', 'e267d2d9dade02e9558498f6e43987e2', 'Coimbatore', 'GCT, Coimbatore-13.',now(),now()); 
-- password for doctor: Doctor@123


-- --------------------------------------------------------
COMMIT;
--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(100) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(255) NOT NULL,
  `u_age` int(200) NOT NULL,
  `u_gender` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_contact` bigint(10) NOT NULL,
  `u_city` varchar(255) NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `u_created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `u_updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_age`,`u_gender`,`u_email`, `u_password`, `u_contact`, `u_city`, `u_address`,`u_created_at`,`u_updated_at`) VALUES
(1, 'user',  '20', 'male', 'user@gmail.com', '448ddd517d3abb70045aea6929f02367', 1234567890, 'Coimbatore', 'GCT,Coimbatore-13',now(),now());

COMMIT;
-- password for user: User@123


DROP TABLE IF EXISTS `appoint`;
CREATE TABLE IF NOT EXISTS `appoint` (
  `appoint_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_contact` bigint(10) NOT NULL,
  `user_aptmt_reason` varchar(255) NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `doc_id` int(100) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `u_scheduled_at` VARCHAR(255) NOT NULL,
  `u_consulted_at` DATETIME NOT NULL,
  `prescription` varchar(255) NOT NULL,
  `u_application_submitted_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `u_updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`appoint_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
