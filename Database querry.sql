-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 30, 2021 at 03:13 PM
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
-- Database: `assignment`
--
CREATE DATABASE IF NOT EXISTS `assignment` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `assignment`;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

DROP TABLE IF EXISTS `friends`;
CREATE TABLE IF NOT EXISTS `friends` (
  `Email` varchar(30) NOT NULL,
  `Emailf` varchar(30) NOT NULL,
  PRIMARY KEY (`Email`,`Emailf`),
  KEY `Emailf` (`Emailf`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`Email`, `Emailf`) VALUES
('kajanthan@gmail.com', 'uvidunuwan@gmail.com'),
('Kamal@gmail.com', 'uvidunuwan@gmail.com'),
('lohan@gmail.com', 'manushka@gmail.com'),
('lohan@gmail.com', 'nirmal@gmail.com'),
('lohan@gmail.com', 'sandani@gmail.com'),
('lohan@gmail.com', 'uvidunuwan@gmail.com'),
('lohan@gmail.com', 'vimikthini@gmail.com'),
('mahela@gmail.com', 'vimikthini@gmail.com'),
('manushka@gmail.com', 'lohan@gmail.com'),
('manushka@gmail.com', 'nirmal@gmail.com'),
('manushka@gmail.com', 'sandani@gmail.com'),
('manushka@gmail.com', 'uvidunuwan@gmail.com'),
('manushka@gmail.com', 'vimikthini@gmail.com'),
('nimantha@gmail.com', 'nipuni@gmail.com'),
('nimantha@gmail.com', 'sandani@gmail.com'),
('nimantha@gmail.com', 'uvidunuwan@gmail.com'),
('nimantha@gmail.com', 'vimikthini@gmail.com'),
('nipuni@gmail.com', 'nimantha@gmail.com'),
('nipuni@gmail.com', 'nirmal@gmail.com'),
('nipuni@gmail.com', 'sandun@gmail.com'),
('nipuni@gmail.com', 'uvidunuwan@gmail.com'),
('nipuni@gmail.com', 'vimikthini@gmail.com'),
('nipuni@gmail.com', 'warunajith@gmail.com'),
('nipuni@gmail.com', 'waruni@gmail.com'),
('nirmal@gmail.com', 'lohan@gmail.com'),
('nirmal@gmail.com', 'manushka@gmail.com'),
('nirmal@gmail.com', 'nipuni@gmail.com'),
('nirmal@gmail.com', 'sachintha@gmail.com'),
('nirmal@gmail.com', 'sandani@gmail.com'),
('nirmal@gmail.com', 'uvidunuwan@gmail.com'),
('nirmal@gmail.com', 'vimikthini@gmail.com'),
('nirmal@gmail.com', 'waruni@gmail.com'),
('sachin@gmail.com', 'uvidunuwan@gmail.com'),
('sachin@gmail.com', 'vimikthini@gmail.com'),
('sachin@gmail.com', 'waruni@gmail.com'),
('sachintha@gmail.com', 'nirmal@gmail.com'),
('sachintha@gmail.com', 'sandani@gmail.com'),
('sachintha@gmail.com', 'uvidunuwan@gmail.com'),
('sachintha@gmail.com', 'vimikthini@gmail.com'),
('sandani@gmail.com', 'lohan@gmail.com'),
('sandani@gmail.com', 'manushka@gmail.com'),
('sandani@gmail.com', 'nimantha@gmail.com'),
('sandani@gmail.com', 'nirmal@gmail.com'),
('sandani@gmail.com', 'sachintha@gmail.com'),
('sandani@gmail.com', 'uvidunuwan@gmail.com'),
('sandani@gmail.com', 'waruni@gmail.com'),
('sandun@gmail.com', 'nipuni@gmail.com'),
('sandun@gmail.com', 'vimikthini@gmail.com'),
('Sunil@gmail.com', 'uvidunuwan@gmail.com'),
('tharindu@gmail.com', 'uvidunuwan@gmail.com'),
('uvidunuwan@gmail.com', 'kajanthan@gmail.com'),
('uvidunuwan@gmail.com', 'Kamal@gmail.com'),
('uvidunuwan@gmail.com', 'lohan@gmail.com'),
('uvidunuwan@gmail.com', 'manushka@gmail.com'),
('uvidunuwan@gmail.com', 'nimantha@gmail.com'),
('uvidunuwan@gmail.com', 'nipuni@gmail.com'),
('uvidunuwan@gmail.com', 'nirmal@gmail.com'),
('uvidunuwan@gmail.com', 'sachin@gmail.com'),
('uvidunuwan@gmail.com', 'sachintha@gmail.com'),
('uvidunuwan@gmail.com', 'sandani@gmail.com'),
('uvidunuwan@gmail.com', 'Sunil@gmail.com'),
('uvidunuwan@gmail.com', 'tharindu@gmail.com'),
('uvidunuwan@gmail.com', 'vimikthini@gmail.com'),
('uvidunuwan@gmail.com', 'waruni@gmail.com'),
('vimikthini@gmail.com', 'lohan@gmail.com'),
('vimikthini@gmail.com', 'mahela@gmail.com'),
('vimikthini@gmail.com', 'manushka@gmail.com'),
('vimikthini@gmail.com', 'nimantha@gmail.com'),
('vimikthini@gmail.com', 'nipuni@gmail.com'),
('vimikthini@gmail.com', 'nirmal@gmail.com'),
('vimikthini@gmail.com', 'sachin@gmail.com'),
('vimikthini@gmail.com', 'sachintha@gmail.com'),
('vimikthini@gmail.com', 'sandun@gmail.com'),
('vimikthini@gmail.com', 'uvidunuwan@gmail.com'),
('vimikthini@gmail.com', 'waruni@gmail.com'),
('warunajith@gmail.com', 'nipuni@gmail.com'),
('waruni@gmail.com', 'nipuni@gmail.com'),
('waruni@gmail.com', 'nirmal@gmail.com'),
('waruni@gmail.com', 'sachin@gmail.com'),
('waruni@gmail.com', 'sandani@gmail.com'),
('waruni@gmail.com', 'uvidunuwan@gmail.com'),
('waruni@gmail.com', 'vimikthini@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Pname` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Pname`, `Email`, `Password`) VALUES
('Vidunuwan', 'uvidunuwan@gmail.com', '1218'),
('Sandani', 'sandani@gmail.com', '0108'),
('Sunil', 'Sunil@gmail.com', '1234'),
('Kamal', 'Kamal@gmail.com', 'qwertyui'),
('Tharindu', 'tharindu@gmail.com', '1q2w3e4r'),
('Manushka', 'manushka@gmail.com', 'manu123'),
('Chandimal', 'chandi@gmail.com', 'ch1234'),
('Lohan', 'lohan@gmail.com', 'lh7788'),
('Sachintha', 'sachintha@gmail.com', 'sachi9090'),
('Nimantha', 'nimantha@gmail.com', 'nima1234'),
('Warunajith', 'warunajith@gmail.com', 'war6677'),
('Sandun', 'sandun@gmail.com', 'sa1234'),
('Mahela', 'mahela@gmail.com', 'mahela1'),
('Nirmal', 'nirmal@gmail.com', 'n1n2n3n4'),
('Sachin', 'sachin@gmail.com', 's1234'),
('Vimukthini', 'vimikthini@gmail.com', 'zxcvbnm'),
('Nipuni', 'nipuni@gmail.com', 'n1234'),
('Waruni', 'waruni@gmail.com', 'w1234'),
('Kajanthan', 'kajanthan@gmail.com', 'kaja123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
