-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 27, 2019 at 04:23 AM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bms`
--

-- --------------------------------------------------------

--
-- Table structure for table `banking`
--

DROP TABLE IF EXISTS `banking`;
CREATE TABLE IF NOT EXISTS `banking` (
  `aid` varchar(20) NOT NULL,
  `atype` varchar(20) CHARACTER SET latin1 NOT NULL,
  `ano` int(255) NOT NULL AUTO_INCREMENT,
  `balance` int(20) NOT NULL,
  PRIMARY KEY (`ano`)
) ENGINE=InnoDB AUTO_INCREMENT=2000522011 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banking`
--

INSERT INTO `banking` (`aid`, `atype`, `ano`, `balance`) VALUES
('200', 'saving', 2000522000, 6000),
('201', 'current', 2000522001, 6000),
('251', 'saving', 2000522002, 2000),
('shivam', 'saving', 2000522004, 6000),
('yogesh9891', 'saving', 2000522005, 2000),
('mdzishan11', 'Saving', 2000522007, 10000),
('solshivam12', 'current', 2000522008, 500000),
('rkjrocks', 'Salary', 2000522009, 40000),
('gaurav0713', 'saving', 2000522010, 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cid` varchar(130) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `city` varchar(15) NOT NULL,
  `father` varchar(40) NOT NULL,
  `balnce` int(100) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `password`, `name`, `mob`, `city`, `father`, `balnce`) VALUES
('200', '1234', 'yogesh', 711283632, 'kolkata', 'jagdish', 2000),
('201', '1234', 'akshay kumar', 5236987411, 'East delhi', 'harish', 4460),
('gaurav0713', '', 'Gaurav', 9990871636, 'Delhi', 'subhash', 0),
('mdzishan11', 'hrllo', 'Md Zishan', 9971826835, 'Delhi', 'MF husaain', 10400),
('rkjrocks', 'Ravi@100', 'Ravi Jaiswal', 9990996755, 'Delhi', 'Mr Jaiswal', 2050999),
('solshivam12', 'Ilove@u2', 'shivam solanki', 7404201088, 'bahadurgarh', 'mahesh solanki', 480535),
('yogesh9891', '', 'yogesh', 54543543543, 'kirari', 'devender singh', 5500);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `hid` int(20) NOT NULL AUTO_INCREMENT,
  `amount` bigint(200) NOT NULL,
  `balance` int(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cid` varchar(20) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB AUTO_INCREMENT=203746 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`hid`, `amount`, `balance`, `time`, `cid`, `type`) VALUES
(203729, 200, 550135, '2019-08-22 09:18:13', 'solshivam12', 'Deposit'),
(203730, 5000, 545135, '2019-08-22 09:27:48', 'solshivam12', 'Withdraw'),
(203731, 2000, 5500, '2019-08-22 09:28:41', 'yogesh9891', 'Deposit'),
(203732, 200, 544935, '2019-08-22 09:40:23', 'solshivam12', 'Withdraw'),
(203733, 200, 544735, '2019-08-22 09:41:49', 'solshivam12', 'Withdraw'),
(203734, 200, 544535, '2019-08-22 09:46:40', 'solshivam12', 'Withdraw'),
(203735, 66000, 478535, '2019-08-22 09:49:01', 'solshivam12', 'Withdraw'),
(203736, 2000, 480535, '2019-08-22 10:03:39', 'solshivam12', 'Deposit'),
(203737, 1000, 41000, '2019-08-22 10:12:57', 'rkjrocks', 'Withdraw'),
(203738, 7000, 48000, '2019-08-22 10:13:29', 'rkjrocks', 'Deposit'),
(203739, 500000, 9500000, '2019-08-22 10:19:59', 'gaurav0713', 'Withdraw'),
(203740, 2000000, 2048000, '2019-08-22 10:21:11', 'rkjrocks', 'Deposit'),
(203741, 1, 2047999, '2019-08-22 10:21:19', 'rkjrocks', 'Withdraw'),
(203742, 2000, 2050999, '2019-08-22 10:23:01', 'rkjrocks', 'Withdraw'),
(203743, 99999999, 1099999998, '2019-08-22 10:38:24', 'gaurav0713', 'Deposit'),
(203744, 999999999, 2099999997, '2019-08-22 10:38:48', 'gaurav0713', 'Deposit'),
(203745, 2099999997, 0, '2019-08-22 10:39:18', 'gaurav0713', 'Withdraw');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
