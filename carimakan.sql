-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2017 at 03:19 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carimakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID_Login` int(11) NOT NULL,
  `Login_User` varchar(300) NOT NULL,
  `password` varchar(60) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID_Login`, `Login_User`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'FaishalIlham', 'itembanget', NULL, '2017-05-17 08:45:01', '0000-00-00 00:00:00'),
(6, 'DwikaSM', '$2y$10$O0IS59oY1lmNpTMNr8M2B.5PaydiL7mEqXxJ9YEkbbDcgWVldnNyC', NULL, '2017-05-17 08:45:01', '0000-00-00 00:00:00'),
(8, 'asd', '$2y$10$/J571b2UnUsO5EQsV3r1t.0YVCSAxWagyY6UlqKAQ.6XCv0..k5Aa', NULL, '2017-05-17 08:45:01', '0000-00-00 00:00:00'),
(9, 'eerer', '$2y$10$DWMj9z6U57oCzkjhYCApK.JRZMEKYuRZd4qv1d0YbTKjokK4olFEq', NULL, '2017-05-17 08:45:01', '0000-00-00 00:00:00'),
(10, 'test', '$2y$10$cnqlt0mc8fn1ScP528rXmeMbUQKYNFMrXTf0yAT4cfmi1BxjpShXy', NULL, '2017-05-17 08:45:01', '0000-00-00 00:00:00'),
(12, 'ArioBimo', '$2y$10$8NQqpEG0bOnbNGIMhWYC6umPYtPF3U0OphS7lZqZS6XwV1YSg4sAG', 'BlsHnQi7GiXWTI8xltIrcrtOQ0UIEHwY1thp5tx8emsFgiwNSJ6y8DSePeCn', '2017-05-17 13:13:09', '2017-05-17 01:45:50'),
(13, 'amama', '$2y$10$uII7MG1/lvkAdJr3hoff4uxO39IPVKXeuMifBC6NRqgxgVyukpy8m', NULL, '2017-05-17 01:46:40', '2017-05-17 01:46:40'),
(14, 'mako', '$2y$10$8PmpMyeX3r7d3cmwWUNGP.TEZJqAirX6GUWRmZ/DAtRPkA/Tsgw5a', NULL, '2017-05-17 04:02:01', '2017-05-17 04:02:01'),
(15, 'abc', '$2y$10$rQuNIMRDCOY8XNqQtMaGe.Z0rn22n1BUd2lTctXDZr4gCIYd6Dvqe', 'Lw22UsNbQgWCCYpV6kI7UWZvcLXzZAKQg333QWOHiR1bHCXvont6M4imLw2m', '2017-05-17 12:09:51', '2017-05-17 04:53:42'),
(16, 'makaraja', '$2y$10$NSJc8Zt63HgE706AkRhxV.bUnxz/iuzIs4TNJCGMQfSwGkDVWiSue', '9J4BbJWOSez2CZIwBdE4mqzqPnhgLurahXXzSlKuAXSm1YnL2Xi9sIEynFqC', '2017-05-17 12:12:08', '2017-05-17 05:11:42'),
(17, 'makaraja2', '$2y$10$SWfbTo8t6V/BWQmPEbBgOeDHbSPcsdIliNUyKKLemz/Ialcd1gtA.', 'YjwlcRWULKIEbdEeKuzftbu1TS5eYdZpMkks3riisqblPBb3saJU0n0QN4Gi', '2017-05-17 12:13:10', '2017-05-17 05:12:50'),
(18, 'jakko', '$2y$10$AbToDCwiSY9D4yi.swReTuqN/3rCmgop/lrfbe8ZYFqeH/PEU7nZa', '1Lp3zrftqRiqYGUTw3yq8j1caXWwdrxFtyLvH5U0SgTn739yHfOGukUDa5O3', '2017-05-17 12:23:00', '2017-05-17 05:21:48'),
(19, 'mrprk', '$2y$10$9M9MbNioe4dDyUOmUW2Mp.bAfDKjC99PX1ny844hq3lgLJSv.wdf2', 'DJSl478tFr1crasrOEABqPOhFpoZZSKAz8nMHkIXDrlwJRab45t6eReJvNby', '2017-05-17 12:31:09', '2017-05-17 05:29:23'),
(20, 'makakuraja', '$2y$10$a0a5bunbk9yMYi2rZAEnT.gMIGukKVvS5rjvoBQWxaYPrpvh8RUz2', '8hFUQBLzx0coTIljv50E8tiPr1J2CxXaZVhuCBvu75tii0e90abLPkptr61O', '2017-05-17 12:33:22', '2017-05-17 05:31:26'),
(21, 'fasihalhilham', '$2y$10$VI9.uRiwX4tkP6cqSPkvCOsAD3RWRtx8lihVNuY2SuXjJHV7pmc5C', 'G3IrKFIFd6UDq0XFFNDFlfi0EhQvqLiaTFtizo4hMILQDvFXTmRNY4iOfoKh', '2017-05-17 13:02:43', '2017-05-17 06:00:56'),
(22, 'MAKAJAM', '$2y$10$t.rr6dbhUUiBL7AEiCV5ZOt6fgvS/5NR206cv117qKPNjzWK0WCJe', 'SryWhf1YdVK3ywjy0Z0JWm1JrkFhoA2PF7jpIDdHvIFLqj56qj3DJDhFWLsR', '2017-05-17 13:11:19', '2017-05-17 06:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `ID_Picture` int(11) NOT NULL,
  `Picture_Resto` int(11) NOT NULL,
  `Picture_Filename` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resto`
--

CREATE TABLE `resto` (
  `ID_Resto` int(11) NOT NULL,
  `Resto_Name` varchar(140) NOT NULL,
  `Resto_Description` varchar(500) NOT NULL,
  `Resto_Location` varchar(20) NOT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `Type` int(11) DEFAULT NULL,
  `Price_Min` int(11) NOT NULL,
  `Price_Max` int(11) NOT NULL,
  `Hours_Start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Hours_Closed` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Wifi` int(11) DEFAULT NULL,
  `Reservation` int(11) DEFAULT NULL,
  `Smoking_Area` int(11) DEFAULT NULL,
  `Free_Parking` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `ID_Reviews` int(11) NOT NULL,
  `Reviews_Author` varchar(300) NOT NULL,
  `Reviews_Resto` int(11) NOT NULL,
  `Reviews_Description` varchar(2000) NOT NULL,
  `Reviews_Price` int(11) NOT NULL,
  `Reviews_Place` int(11) NOT NULL,
  `Reviews_Service` int(11) NOT NULL,
  `Reviews_Food` int(11) NOT NULL,
  `Reviews_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(300) NOT NULL,
  `Location` varchar(1000) NOT NULL,
  `Display_Picture` varchar(1000) NOT NULL,
  `Email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Location`, `Display_Picture`, `Email`) VALUES
('abc', 'Banten', 'default.jpg', 'masgondi234@gmail.com'),
('amama', 'Banten', 'default.jpg', 'masgondi234@yahoo.com'),
('ArioBimo', 'Banten', 'default.jpg', 'masgondi234@gmail.com'),
('asd', 'JawaBarat', 'default.jpg', 'ario.bimo14@mhs.if.its.ac.id'),
('DwikaSM', 'Jakarta', 'default.jpg', 'ario.bimo14@mhs.if.its.ac.id'),
('eerer', 'JawaBarat', 'default.jpg', 'aa'),
('FaishalIlham', 'JawaTimur', 'default.jpg', 'aefafe@wow.com'),
('fasihalhilham', 'Jakarta', 'default.jpg', 'masgondi234@gmail.com'),
('jakko', 'JawaBarat', 'default.jpg', 'aefafe@wow.com'),
('MAKAJAM', 'JawaTimur', 'default.jpg', 'masgondi234@yahoo.com'),
('makakuraja', 'JawaBarat', 'default.jpg', 'ario.bimo14@mhs.if.its.ac.id'),
('makaraja', 'Jakarta', 'default.jpg', 'aefafe@wow.com'),
('makaraja2', 'Banten', 'default.jpg', 'aefafe@wow.com'),
('mako', 'Banten', 'default.jpg', 'ario.bimo14@mhs.if.its.ac.id'),
('mrprk', 'JawaBarat', 'default.jpg', 'ario.bimo14@mhs.if.its.ac.id'),
('test', 'Jakarta', 'default.jpg', 'masgondi234@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID_Login`),
  ADD KEY `Login_User` (`Login_User`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`ID_Picture`),
  ADD KEY `Picture_Resto` (`Picture_Resto`);

--
-- Indexes for table `resto`
--
ALTER TABLE `resto`
  ADD PRIMARY KEY (`ID_Resto`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`ID_Reviews`),
  ADD KEY `Reviews_Resto` (`Reviews_Resto`),
  ADD KEY `Reviews_Author` (`Reviews_Author`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID_Login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `ID_Picture` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `resto`
--
ALTER TABLE `resto`
  MODIFY `ID_Resto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `ID_Reviews` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`Login_User`) REFERENCES `user` (`Username`) ON DELETE CASCADE;

--
-- Constraints for table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `picture_ibfk_1` FOREIGN KEY (`Picture_Resto`) REFERENCES `resto` (`ID_Resto`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`Reviews_Resto`) REFERENCES `resto` (`ID_Resto`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`Reviews_Author`) REFERENCES `user` (`Username`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
