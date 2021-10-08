-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 11, 2016 at 05:29 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clime`
--

-- --------------------------------------------------------

--
-- Table structure for table `cell`
--

CREATE TABLE IF NOT EXISTS `cell` (
  `cid` int(50) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=203 ;

--
-- Dumping data for table `cell`
--

INSERT INTO `cell` (`cid`, `cname`) VALUES
(201, 'kareba'),
(198, 'kora'),
(200, 'kareba'),
(202, 'gasizi');

-- --------------------------------------------------------

--
-- Table structure for table `claim`
--

CREATE TABLE IF NOT EXISTS `claim` (
  `claimid` int(100) NOT NULL AUTO_INCREMENT,
  `claimtype` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `claimdetail` text COLLATE latin1_general_ci NOT NULL,
  `claimdate` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `claimpleaddate` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pid` int(200) NOT NULL,
  `did` int(200) NOT NULL,
  `cid` int(200) NOT NULL,
  `vid` int(200) NOT NULL,
  `sid` int(200) NOT NULL,
  `disid` int(200) NOT NULL,
  `userid` int(200) NOT NULL,
  PRIMARY KEY (`claimid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `claim`
--

INSERT INTO `claim` (`claimid`, `claimtype`, `claimdetail`, `claimdate`, `claimpleaddate`, `pid`, `did`, `cid`, `vid`, `sid`, `disid`, `userid`) VALUES
(1, 'KWIBA', 'dfffffffff', '2016-01-12', '2016-06-10', 1, 1, 201, 93, 16, 17, 1),
(4, 'MBONEMUBANO', 'tizo', '30/06/2016', '12/07/2016', 2, 2, 201, 93, 16, 17, 1),
(5, 'gufata kungufu', 'bgggggggggg', '2016-03-17', '29/12/2016', 4, 3, 200, 93, 25, 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `decition`
--

CREATE TABLE IF NOT EXISTS `decition` (
  `decid` int(100) NOT NULL AUTO_INCREMENT,
  `decdescription` text COLLATE latin1_general_ci NOT NULL,
  `decreaddate` char(200) COLLATE latin1_general_ci NOT NULL,
  `deccomment` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `decdeliverdorgan` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `claimid` int(200) NOT NULL,
  `userid` int(100) NOT NULL,
  PRIMARY KEY (`decid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `decition`
--

INSERT INTO `decition` (`decid`, `decdescription`, `decreaddate`, `deccomment`, `decdeliverdorgan`, `claimid`, `userid`) VALUES
(1, 'nmnmnmnmnmnmnmnmnmnmnmnmnmnmnm', '12/07/2016', 'cccccccccccccc', 'cell organ', 1, 1),
(7, 'ghghghghghghghghghgh', '12/07/2016', 'gggggggggggg', 'primary courthh', 4, 2),
(6, 'ggggggggggg', '12/12/2016', 'cccccccccccc', 'primary courthh', 1, 2),
(5, 'inn', '12/12/2016', 'yyyyyyyyyy', 'cell organ', 4, 1),
(8, 'vvvvvvvvvvvv', '12/12/2016', 'xcxcxcxcxcxcxcxcxcxcxcxc', 'secondafry court', 1, 3),
(9, 'c ccccccccc', '12/07/2016', 'ccccccccccc', 'secondafry court', 4, 3),
(10, 'tttttttttt', '12/12/2016', 'ttttttttttt', 'cell organ', 5, 1),
(11, 'tapo', '12/12/2016', 'iiiiiii', 'primary court', 5, 2),
(12, 'tio', '12/05/2016', '88888888888', 'secondafry court', 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `defendant`
--

CREATE TABLE IF NOT EXISTS `defendant` (
  `did` int(200) NOT NULL AUTO_INCREMENT,
  `dfirstname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `dlastname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `demail` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `dfatherfirstname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `dfatherlastname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `dmotherfirstname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `dmotherlastname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `dvillage` text COLLATE latin1_general_ci NOT NULL,
  `dcell` text COLLATE latin1_general_ci NOT NULL,
  `dsector` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `defendant`
--

INSERT INTO `defendant` (`did`, `dfirstname`, `dlastname`, `demail`, `dfatherfirstname`, `dfatherlastname`, `dmotherfirstname`, `dmotherlastname`, `dvillage`, `dcell`, `dsector`) VALUES
(1, 'charles', 'mujyawimana', 'uwi@gmail.com', 'jack', 'habarurema', 'ange', 'Nyirabarangirana', 'kareba', 'kareba', 'jenda'),
(2, 'damasceni', 'mujyawimana', 'uwi@gmail.com', 'jack', 'habarurema', 'ange', 'Nyirabarangirana', 'kareba', 'kareba', 'jenda'),
(3, 'damasceni', 'mujyawimana', 'uwi@gmail.com', 'jack', 'habarurema', 'noline', 'Nyirabarangirana', 'kareba', 'kareba', 'jenda');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `disid` int(50) NOT NULL AUTO_INCREMENT,
  `dname` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`disid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`disid`, `dname`) VALUES
(17, 'nyabihu');

-- --------------------------------------------------------

--
-- Table structure for table `plaintiff`
--

CREATE TABLE IF NOT EXISTS `plaintiff` (
  `pid` int(200) NOT NULL AUTO_INCREMENT,
  `pfirstname` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `plastname` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `pemail` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `pfatherfirstname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pfatherlastname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pmotherfirstname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pmotherlastname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pvillage` varchar(12) COLLATE latin1_general_ci NOT NULL,
  `pcell` varchar(12) COLLATE latin1_general_ci NOT NULL,
  `psector` varchar(12) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `plaintiff`
--

INSERT INTO `plaintiff` (`pid`, `pfirstname`, `plastname`, `pemail`, `pfatherfirstname`, `pfatherlastname`, `pmotherfirstname`, `pmotherlastname`, `pvillage`, `pcell`, `psector`) VALUES
(1, 'Louise', 'iradukunda', 'ni@gmail.com', 'cloude', 'mbihayimana', 'gloriose', 'nishimwe', 'kivumu', 'mbugangali', 'jenda'),
(2, 'akimana', 'Mukeshimana', 'ni@gmail.com', 'Murangina', 'Nangwahafi', 'nyirankundizanye', 'nishimwe', 'kivumu', 'mbugangali', 'jenda'),
(4, 'akimana', 'iradukunda', 'ni@gmail.com', 'claude', 'mbihayimana', 'gloriose', 'nishimwe', 'kivumu', 'mbugangali', 'jenda');

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE IF NOT EXISTS `sector` (
  `sid` int(50) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`sid`, `sname`) VALUES
(16, 'rugera'),
(17, 'kabatwa'),
(24, 'rurembo'),
(25, 'rurembo');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(100) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `lastname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `age` int(100) NOT NULL,
  `sex` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `categories` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(200) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstname`, `lastname`, `age`, `sex`, `categories`, `username`, `password`) VALUES
(1, 'johntelly', 'iragena', 23, 'm', 'village president', 't', 't'),
(2, 'thierry', 'iradukunda', 19, 'm', 'cell president', 'u', 'u'),
(3, 'emmanuel', 'habinshuti', 20, 'm', 'sector president', 'y', 'y'),
(4, 'patrick', 'niyigena', 12, 'm', 'district president', 'i', 'i');

-- --------------------------------------------------------

--
-- Table structure for table `village`
--

CREATE TABLE IF NOT EXISTS `village` (
  `vid` int(150) NOT NULL AUTO_INCREMENT,
  `vname` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=111 ;

--
-- Dumping data for table `village`
--

INSERT INTO `village` (`vid`, `vname`) VALUES
(93, 'nyacyonga'),
(96, 'rega'),
(98, 'bumba'),
(103, 'cyacyonga'),
(104, 'cyacyonga'),
(105, 'kora'),
(108, 'nyamitanzi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
