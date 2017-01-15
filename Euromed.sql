-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 15, 2017 at 10:16 PM
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
  `Filename` varchar(60) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `ShortInfo` text CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Type` varchar(60) CHARACTER SET ascii COLLATE ascii_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Papers`
--

INSERT INTO `Papers` (`paper_id`, `Username`, `Filename`, `ShortInfo`, `Type`) VALUES
(1, 'Aris', 'paper.pdf', 'Ut massa felis, placerat non pellentesque ac, rhoncus nec tellus. Duis at auctor ex. Donec vel libero ornare, cursus libero eu, congue nulla. In in quam mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla aliquam eros in quam accumsan, at imperdiet dui sagittis. Aliquam vitae nulla non ante fringilla imperdiet. Nam congue eget tortor vel feugiat. In volutpat nulla purus, vitae pulvinar tellus pellentesque eu. Vestibulum fringilla, libero egestas imperdiet dignissim, velit metus rhoncus magna, vitae sodales libero ipsum rutrum sem. Sed vestibulum eu felis sagittis consequat. Maecenas tortor tellus, placerat at tempus non, dictum id elit. ', '1'),
(2, 'mustafa', 'paper 2.pdf', 'Mauris commodo magna fringilla tortor elementum vestibulum. Quisque ac accumsan ipsum, vitae facilisis purus. Praesent faucibus accumsan turpis iaculis tempor. Phasellus faucibus efficitur quam suscipit aliquam. Praesent nec dolor vehicula, interdum massa at, tempor est. Fusce vel dapibus dui. Maecenas imperdiet sagittis posuere. Pellentesque sagittis et nunc et hendrerit. Suspendisse potenti. Vivamus sapien tellus, sagittis cursus egestas sit amet, posuere et ligula. ', 'Earthquake engineering handbook'),
(3, 'Kippes', 'nano.pdf', 'Mauris commodo magna fringilla tortor elementum vestibulum. Quisque ac accumsan ipsum, vitae facilisis purus. Praesent faucibus accumsan turpis iaculis tempor. Phasellus faucibus efficitur quam suscipit aliquam. Praesent nec dolor vehicula, interdum massa at, tempor est. Fusce vel dapibus dui. Maecenas imperdiet sagittis posuere. Pellentesque sagittis et nunc et hendrerit. Suspendisse potenti. Vivamus sapien tellus, sagittis cursus egestas sit amet, posuere et ligula. ', 'Chaotisches Rauschen im Laser  versteckt Nachrichten'),
(4, 'dieter', 'paper.pdf', 'The Interactive Graphics Systems Group is focusing on a wide range of research topics in the field of Computer Graphics, such as the Geometric Search and Semantic Modeling for Digital Libraries applications and Digitisation in Computer Graphics, Medical Image Processing and Visual Search and Analysis. ', ' The Interactive Graphics Systems Group');

-- --------------------------------------------------------

--
-- Table structure for table `Speakers`
--

CREATE TABLE `Speakers` (
  `Username` varchar(32) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `ShortInfo` text CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `PersonalSite` varchar(90) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Image` varchar(32) CHARACTER SET ascii COLLATE ascii_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Speakers`
--

INSERT INTO `Speakers` (`Username`, `ShortInfo`, `PersonalSite`, `Image`) VALUES
('Aris', ' Aliquam sed nisi magna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ullamcorper libero sit amet nisi facilisis, scelerisque fermentum ante facilisis. Proin aliquet sollicitudin libero et suscipit. Pellentesque augue quam, porta ac leo vitae, dignissim feugiat leo. Fusce in massa eget velit dictum vehicula. Aliquam non elit dui. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut ultricies sed nulla pretium porta. Fusce maximus libero ornare, lobortis mi sit amet, varius magna. Donec ut volutpat diam. Suspendisse elit lorem, sollicitudin at turpis in, scelerisque tincidunt velit. ', 'aasasas', '59206561.jpg'),
('Kippes', 'Mauris commodo magna fringilla tortor elementum vestibulum. Quisque ac accumsan ipsum, vitae facilisis purus. Praesent faucibus accumsan turpis iaculis tempor. Phasellus faucibus efficitur quam suscipit aliquam. Praesent nec dolor vehicula, interdum massa at, tempor est. Fusce vel dapibus dui. Maecenas imperdiet sagittis posuere. Pellentesque sagittis et nunc et hendrerit. Suspendisse potenti. Vivamus sapien tellus, sagittis cursus egestas sit amet, posuere et ligula. ', 'http://www.physik.uni-wuerzburg.de/?id=2229', 'wolfgang.jpg'),
('dieter', 'ince Oct 2006 Dieter Fellner is Professor of Computer Science at TU Darmstadt, Germany, and Director of the Fraunhofer Institute for Computer Graphics Research (IGD) at the same location. Previously he has held academic positions at the Graz University of Technology, Austria, the University of Technology in Braunschweig, Germany, the University of Bonn, Germany, the Memorial University of Newfoundland, Canada, and the University of Denver, Colorado. ', 'https://www.igd.fraunhofer.de/institut/ueber-uns/ansprechpartner/dieter-w-fellner', 'fellner.jpg'),
('mustafa', 'Professor of Earthquake Engineering\r\nBogazici Univ Kandilli Observatory and Earthquake Research Institute, Department of Earthquake Engineering, 81220, Cengelkoy, Istanbul, Turkey', 'bllalasas.com', 'image.jpg');

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
('Agamemnon', 'Alugistos', 'Agam34', '12345', 'ag@anmail.com', 'Palace 23,Sparth', '6988348348', 'None', 1),
('Aris', 'Papas', 'Aris', '12345', 'aris@mail.com', 'somewhere', '123456789', 'uoa', 3),
('Kippes', 'Wolfgang', 'Kippes', '12345', 'kippes@mail.com', 'Paliou 23', '544545454', 'None', 3),
(' Dieter', 'Fellner', 'dieter', '12345', 'diter@mail.com', 'Fraunhofer 23', '6884848847', 'Nanyang Technological University', 3),
('Euterpi', 'Sitrou', 'eusitr', '12345', 'eusitr@mmail.com', 'Quisquis 24,Athens', '698884484', 'UOA', 1),
('Mustafa', 'Erdrik', 'mustafa', '12345', 'mustafa@mustafamail.com', 'Cusuurk 23', '6993499439', 'None', 3);

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
  MODIFY `paper_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  ADD CONSTRAINT `user_update` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
