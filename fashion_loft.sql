-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 10, 2017 at 06:53 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion_loft`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyerandolist`
--

CREATE TABLE `buyerandolist` (
  `BID` mediumint(3) NOT NULL,
  `OID` mediumint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyerandolist`
--

INSERT INTO `buyerandolist` (`BID`, `OID`) VALUES
(1, 101),
(2, 102),
(3, 103);

-- --------------------------------------------------------

--
-- Table structure for table `buyerdec1`
--

CREATE TABLE `buyerdec1` (
  `Bid` mediumint(3) NOT NULL,
  `B.name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyerdec1`
--

INSERT INTO `buyerdec1` (`Bid`, `B.name`) VALUES
(1, 'Kumar'),
(2, 'Amar'),
(3, 'Anil');

-- --------------------------------------------------------

--
-- Table structure for table `buyerdec2`
--

CREATE TABLE `buyerdec2` (
  `B.name` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyerdec2`
--

INSERT INTO `buyerdec2` (`B.name`, `city`) VALUES
('Amar', 'Chennai'),
('Anil', 'Mysore'),
('Kumar', 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `buyerdec3`
--

CREATE TABLE `buyerdec3` (
  `B.name` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `phno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyerdec3`
--

INSERT INTO `buyerdec3` (`B.name`, `mail`, `phno`) VALUES
('Amar', 'amar@gmail.com', 9000002121),
('Anil', 'anil@gmail.com', 9000006565),
('Kumar', 'kumar@gmail.com', 9008878787);

-- --------------------------------------------------------

--
-- Table structure for table `dlistdec1`
--

CREATE TABLE `dlistdec1` (
  `Oid` mediumint(3) NOT NULL,
  `Eid` mediumint(3) NOT NULL,
  `Ddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dlistdec1`
--

INSERT INTO `dlistdec1` (`Oid`, `Eid`, `Ddate`) VALUES
(101, 201, '2017-01-05'),
(102, 202, '2017-01-10'),
(103, 201, '2017-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `dlistdec2`
--

CREATE TABLE `dlistdec2` (
  `Oid` mediumint(3) NOT NULL,
  `amt` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dlistdec2`
--

INSERT INTO `dlistdec2` (`Oid`, `amt`) VALUES
(101, 10000.50),
(102, 20000.50),
(103, 30000.00);

-- --------------------------------------------------------

--
-- Table structure for table `empandbuyer`
--

CREATE TABLE `empandbuyer` (
  `EID` mediumint(3) NOT NULL,
  `BID` mediumint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empandbuyer`
--

INSERT INTO `empandbuyer` (`EID`, `BID`) VALUES
(201, 1),
(202, 2),
(202, 3);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EID` mediumint(3) NOT NULL,
  `Ename` varchar(20) NOT NULL,
  `Pwd` varchar(20) NOT NULL,
  `Phno` bigint(10) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EID`, `Ename`, `Pwd`, `Phno`, `mail`, `city`) VALUES
(101, 'pruthvi', 'prp', 9764556346, 'pruthvi@gmail.com', 'hubli, karnataka'),
(200, 'admin', 'password', 9879797979, 'admin@gmail.com', 'Bangalore'),
(201, 'Harshit', 'Harshit123', 8564646468, 'Harshit@gmail.com', 'Bangalore'),
(202, 'Manish', 'Manish123', 8768448451, 'Manish@gmail.com', 'Mysore'),
(225, 'abc', 'abc', 9879898989, 'abc@gmail.com', 'ka');

-- --------------------------------------------------------

--
-- Table structure for table `olist`
--

CREATE TABLE `olist` (
  `Oid` mediumint(3) NOT NULL,
  `Rdate` date NOT NULL,
  `qtest` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `olist`
--

INSERT INTO `olist` (`Oid`, `Rdate`, `qtest`) VALUES
(101, '2017-01-02', 'YES'),
(102, '2017-01-04', 'NO'),
(103, '2017-01-12', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `qtestdec1`
--

CREATE TABLE `qtestdec1` (
  `RID` mediumint(3) NOT NULL,
  `Oid` mediumint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qtestdec1`
--

INSERT INTO `qtestdec1` (`RID`, `Oid`) VALUES
(0, 0),
(1, 101),
(2, 103);

-- --------------------------------------------------------

--
-- Table structure for table `qtestdec2`
--

CREATE TABLE `qtestdec2` (
  `Oid` mediumint(3) NOT NULL,
  `result` varchar(20) NOT NULL,
  `comment` varchar(20) NOT NULL,
  `Qid` mediumint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qtestdec2`
--

INSERT INTO `qtestdec2` (`Oid`, `result`, `comment`, `Qid`) VALUES
(0, 'sffs', '', 0),
(101, 'good', 'nill', 301),
(103, 'excellent', 'nill', 302),
(315, 'passed', 'nill', 121);

-- --------------------------------------------------------

--
-- Table structure for table `qworkerdec1`
--

CREATE TABLE `qworkerdec1` (
  `Qid` mediumint(3) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qworkerdec1`
--

INSERT INTO `qworkerdec1` (`Qid`, `Name`, `pwd`) VALUES
(301, 'Paul', 'Paul123'),
(302, 'sam', 'sam123');

-- --------------------------------------------------------

--
-- Table structure for table `qworkerdec2`
--

CREATE TABLE `qworkerdec2` (
  `Name` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `ph.no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qworkerdec2`
--

INSERT INTO `qworkerdec2` (`Name`, `pwd`, `qualification`, `ph.no`) VALUES
('Paul', 'Paul123', 'Mtech', 9872982298),
('sam', 'sam123', 'Mtech', 8978836526);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyerandolist`
--
ALTER TABLE `buyerandolist`
  ADD PRIMARY KEY (`BID`,`OID`);

--
-- Indexes for table `buyerdec1`
--
ALTER TABLE `buyerdec1`
  ADD PRIMARY KEY (`Bid`);

--
-- Indexes for table `buyerdec2`
--
ALTER TABLE `buyerdec2`
  ADD PRIMARY KEY (`B.name`);

--
-- Indexes for table `buyerdec3`
--
ALTER TABLE `buyerdec3`
  ADD PRIMARY KEY (`B.name`,`mail`);

--
-- Indexes for table `dlistdec1`
--
ALTER TABLE `dlistdec1`
  ADD PRIMARY KEY (`Oid`,`Eid`);

--
-- Indexes for table `dlistdec2`
--
ALTER TABLE `dlistdec2`
  ADD PRIMARY KEY (`Oid`);

--
-- Indexes for table `empandbuyer`
--
ALTER TABLE `empandbuyer`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EID`);

--
-- Indexes for table `olist`
--
ALTER TABLE `olist`
  ADD PRIMARY KEY (`Oid`);

--
-- Indexes for table `qtestdec1`
--
ALTER TABLE `qtestdec1`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `qtestdec2`
--
ALTER TABLE `qtestdec2`
  ADD PRIMARY KEY (`Oid`);

--
-- Indexes for table `qworkerdec1`
--
ALTER TABLE `qworkerdec1`
  ADD PRIMARY KEY (`Qid`);

--
-- Indexes for table `qworkerdec2`
--
ALTER TABLE `qworkerdec2`
  ADD PRIMARY KEY (`Name`,`pwd`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
