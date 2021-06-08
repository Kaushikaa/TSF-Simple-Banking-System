-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 07:31 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsf bs`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `C_ID` varchar(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`C_ID`, `Name`, `Email`, `Balance`) VALUES
('C01', 'Kaushikaa', 'kaushikaa27@gmail.com', 123000),
('C02', 'Nandha Kumar', 'nandha27@gmail.com', 49200),
('C03', 'Lokeshwari', 'loki25@gmail.com', 57000),
('C04', 'Revanth', 'reva11@gmail.com', 40000),
('C05', 'Mythili', 'mythili2001@gmail.com', 75500),
('C06', 'Midhila', 'midhila.10@gmail.com', 119800),
('C07', 'Sushmi', 'sushmi6@gmail.com', 89400),
('C08', 'Maha', 'maha@gmail.com', 55000),
('C09', 'Kalyani', 'kallu9@gmail.com', 55000),
('C10', 'Swetha', 'swe@gmail.com', 45600);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `Sender` text NOT NULL,
  `Receiver` text NOT NULL,
  `Amount` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`Sender`, `Receiver`, `Amount`) VALUES
('Kaushikaa', 'Lokeshwari', 5000),
('Kalyani', 'Sushmi', 10000),
('Kaushikaa', 'Mythili', 300),
('Lokeshwari', 'Kaushikaa', 3000),
('Midhila', 'Mythili', 200),
('Nandha Kumar', 'Kaushikaa', 800),
('Sushmi', 'Swetha', 600);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
