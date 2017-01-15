-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 15, 2017 at 03:16 PM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Euromed`
--

-- --------------------------------------------------------

--
-- Table structure for table `Papers`
--

CREATE TABLE `Papers` (
  `paper_id` int(11) NOT NULL,
  `Username` varchar(32) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Filename` varchar(32) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `ShortInfo` text CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Papers`
--

INSERT INTO `Papers` (`paper_id`, `Username`, `Filename`, `ShortInfo`, `Type`) VALUES
(1, 'Aris', 'paper.pdf', 'Ut massa felis, placerat non pellentesque ac, rhoncus nec tellus. Duis at auctor ex. Donec vel libero ornare, cursus libero eu, congue nulla. In in quam mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla aliquam eros in quam accumsan, at imperdiet dui sagittis. Aliquam vitae nulla non ante fringilla imperdiet. Nam congue eget tortor vel feugiat. In volutpat nulla purus, vitae pulvinar tellus pellentesque eu. Vestibulum fringilla, libero egestas imperdiet dignissim, velit metus rhoncus magna, vitae sodales libero ipsum rutrum sem. Sed vestibulum eu felis sagittis consequat. Maecenas tortor tellus, placerat at tempus non, dictum id elit. ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Speakers`
--

CREATE TABLE `Speakers` (
  `Username` varchar(32) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `ShortInfo` text NOT NULL,
  `PersonalSite` varchar(32) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Image` varchar(32) CHARACTER SET ascii COLLATE ascii_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Speakers`
--

INSERT INTO `Speakers` (`Username`, `ShortInfo`, `PersonalSite`, `Image`) VALUES
('Aris', ' Aliquam sed nisi magna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ullamcorper libero sit amet nisi facilisis, scelerisque fermentum ante facilisis. Proin aliquet sollicitudin libero et suscipit. Pellentesque augue quam, porta ac leo vitae, dignissim feugiat leo. Fusce in massa eget velit dictum vehicula. Aliquam non elit dui. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut ultricies sed nulla pretium porta. Fusce maximus libero ornare, lobortis mi sit amet, varius magna. Donec ut volutpat diam. Suspendisse elit lorem, sollicitudin at turpis in, scelerisque tincidunt velit. ', 'somewhere.com', 'bla1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `FirstName` varchar(30) COLLATE ascii_bin NOT NULL,
  `LastName` varchar(30) COLLATE ascii_bin NOT NULL,
  `Username` varchar(30) COLLATE ascii_bin NOT NULL,
  `Password` varchar(30) COLLATE ascii_bin NOT NULL,
  `Email` varchar(50) COLLATE ascii_bin NOT NULL,
  `Address` varchar(100) COLLATE ascii_bin NOT NULL,
  `PhoneNumber` varchar(20) COLLATE ascii_bin NOT NULL,
  `Faculty` varchar(100) COLLATE ascii_bin NOT NULL,
  `RegistrationType` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`FirstName`, `LastName`, `Username`, `Password`, `Email`, `Address`, `PhoneNumber`, `Faculty`, `RegistrationType`) VALUES
('Aris', 'Papas', 'Aris', '12345', 'aris@mail.com', 'somewhere', '123456789', 'uoa', 3),
('Euterpi', 'Sitrou', 'eusitr', '12345', 'eusitr@mmail.com', 'Quisquis 24,Athens', '698884484', 'UOA', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Papers`
--
ALTER TABLE `Papers`
  ADD PRIMARY KEY (`paper_id`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `Speakers`
--
ALTER TABLE `Speakers`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Papers`
--
ALTER TABLE `Papers`
  MODIFY `paper_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Papers`
--
ALTER TABLE `Papers`
  ADD CONSTRAINT `name_relation` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Speakers`
--
ALTER TABLE `Speakers`
  ADD CONSTRAINT `speaker username` FOREIGN KEY (`Username`) REFERENCES `Papers` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
