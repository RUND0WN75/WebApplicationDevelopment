-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 07:09 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `craig walkup`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `PageID` int(255) NOT NULL,
  `HTML` longtext NOT NULL,
  `Keywords` tinytext NOT NULL,
  `Title` text NOT NULL,
  `Nav Name` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`PageID`, `HTML`, `Keywords`, `Title`, `Nav Name`) VALUES
(0, '<!doctype html>\r\n<html lang="en">\r\n    <head>\r\n        <link rel="stylesheet" href="index.css">\r\n        <meta charset="utf-8">\r\n        <title>Allergy One</title>\r\n    </head>\r\n    <body>\r\n       <div class="wrapper">\r\n           <h1>Welcome</h1>\r\n           <header>\r\n               <div class="flex">\r\n                   \r\n               </div>\r\n               <nav class="flex-nav">\r\n                   <ul>\r\n                       <li><a href="index.html">Home</a></li>\r\n                   </ul>\r\n               </nav>\r\n           </header>\r\n           <footer class="flex-footer">\r\n            <div class="flex-credit">\r\n                <p><strong>Allergy one </strong></p>\r\n            </div>\r\n            <div class="flex-social">\r\n                <ul>\r\n                    <li class="">\r\n                        <a href=""><img src="" alt="Facebook"></a></li>\r\n                </ul>\r\n            </div>\r\n        </footer> \r\n       </div>\r\n    </body>\r\n</html>', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ID` int(255) NOT NULL,
  `Name` tinytext NOT NULL,
  `Email` text NOT NULL,
  `Phone #` int(11) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `ID` int(11) NOT NULL,
  `Payment method` tinytext NOT NULL,
  `Amount paid` int(11) NOT NULL,
  `Date of purchase` date NOT NULL,
  `Confirmation of payment` tinytext NOT NULL,
  `Payment info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `Name` tinytext NOT NULL,
  `Category` tinytext NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products ordered`
--

CREATE TABLE `products ordered` (
  `ID` int(11) NOT NULL,
  `Name` tinytext NOT NULL,
  `Category` tinytext NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Date of purchase` date NOT NULL,
  `Confirmation of payment` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`PageID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
