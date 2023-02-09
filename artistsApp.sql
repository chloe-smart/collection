-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Feb 07, 2023 at 10:10 AM
-- Server version: 5.7.41
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artistsApp`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  `yearsLived` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  `image` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  `favouriteMedium` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  `knownFor` varchar(1000) COLLATE latin1_bin DEFAULT NULL,
  `placeOfBirth` varchar(255) COLLATE latin1_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `name`, `yearsLived`, `image`, `favouriteMedium`, `knownFor`, `placeOfBirth`) VALUES
(1, 'Salvador Dali', '11 May 1904 - 23 January 1989', 'dali.jpg', 'oil on canvas ', 'Known for exploring subconscious imagery, his most famous painting is The Persistence of Memory (1931), depicting limp melting watches', 'Spain'),
(2, 'Frida Kahlo ', '6 July 1907 - 13 July 1954', 'kahlo.jpeg', 'oil painting', 'Known for her uncompromising and brilliantly coloured self-portraits that deal with such themes as idetity, the human body, and death', 'Mexico'),
(3, 'Grayson Perry', '24 March 1960 - Present', 'perry.jpeg', 'ceramics and tapestries ', 'Known for his observations of the contemporary arts scene, and for dissecting British \"prejudices, fashions and foibles', 'United Kingdom'),
(4, 'Pablo Picasso ', '25 October 1881 - 8 April 1973', 'picasso.jpeg', 'oil on canvas, ink, pastels', ' Known for being the most dominant and influential artist of the first half of the 20th century. Associated most of all with pioneering Cubism, he also invented collage and made major contributions to Symbolism and Surrealism', 'Spain'),
(5, 'David Hockney ', '9 July 1937 - Present', 'hockney.jpeg', 'acrylic paints', 'Known as an important contributor to the pop art movement of the 1960s and is one of the most influential British artists of the 20th century', 'United Kingdom'),
(6, 'Henri Matisse', '31 December 1869 - 3 November 1954', 'matisse.jpeg', 'paper cutouts', 'Known for both his use of colour and his fluid and original draughtsmanship', 'France');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
