-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 02:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adoptail`
--

-- --------------------------------------------------------

--
-- Table structure for table `adopt`
--

CREATE TABLE `adopt` (
  `id` int(11) NOT NULL,
  `pid` varchar(225) NOT NULL,
  `uname` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `mobile` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adopt`
--

INSERT INTO `adopt` (`id`, `pid`, `uname`, `address`, `mobile`) VALUES
(46, '53', 'shubham488', 'xyz', '6385274185'),
(47, '56', 'shubham488', 'xyz', '9635217414');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `message` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `image_name` varchar(224) NOT NULL,
  `name` varchar(225) NOT NULL,
  `breed` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `age` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `state` varchar(225) NOT NULL,
  `category` varchar(225) NOT NULL,
  `userid` varchar(225) NOT NULL,
  `owner` varchar(225) NOT NULL,
  `vaccinated` int(225) NOT NULL,
  `sprayed` int(225) NOT NULL,
  `adesc` varchar(225) NOT NULL,
  `ddesc` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `request` int(11) NOT NULL,
  `urequest` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `image_name`, `name`, `breed`, `gender`, `age`, `city`, `state`, `category`, `userid`, `owner`, `vaccinated`, `sprayed`, `adesc`, `ddesc`, `status`, `request`, `urequest`) VALUES
(47, 'images/pet/Bear.svg', 'Bear', 'Boxer', 'Male', 'Adolescence', 'Visakhapatnam', 'AndhraPradesh', 'dog', 'peopleforanimals', 'People For Animals', 0, 0, 'Bear is an energetic and playful with a friendly and outgoing personality.', 'Rescued from a critical condition', '0', 0, ''),
(48, 'images/pet/Bob.svg', 'Bob', 'Siamese', 'Male', 'Adulthood', 'Kochi', 'Kerala', 'cat', 'peopleforanimals', 'People For Animals', 1, 1, 'He may enjoy playing with kids, participating in their games, and being a loyal and protective companion.', 'Rescued from Tunnel', '0', 0, ''),
(49, 'images/pet/Luna.svg', 'Luna', 'Himalayan', 'Female', 'Adolescence', 'Vadodara', 'Gujarat', 'cat', 'peopleforanimals', 'People For Animals', 1, 0, 'She is very calm and sweet. Love to sleep a lot', 'Rescued from Flood.', '0', 0, ''),
(50, 'images/pet/Mau.svg', 'Mau', 'Bengal', 'Female', 'Puppyhood', 'Bishnupur', 'Manipur', 'cat', 'peopleforanimals', 'People For Animals', 1, 1, 'She is calm and friendly', 'Owner is financially weak(We are NGO)', '0', 0, ''),
(51, 'images/pet/Bella.svg', 'Bella', 'Dachshund', 'Female', 'Senior', 'Dallopura', 'Delhi', 'dog', 'peopleforanimals', 'People For Animals', 1, 1, 'Bella loves to eat bread. She is very playful and intelligent as well.', 'Owner is not financially stable(We are NGO)', '0', 0, ''),
(52, 'images/pet/Buddy.svg', 'Buddy', 'German shepherd', 'Male', 'Senior', 'Kondli', 'Delhi', 'dog', 'friendicoes', 'Friendicoes', 1, 0, 'Always alert and loves to play with ball. ', 'Rescued from a car accident', '0', 0, ''),
(53, 'images/pet/Ollie.svg', 'Ollie', 'Persian', 'Female', 'Adulthood', 'Burari', 'Delhi', 'cat', 'shubham488', 'sujal_b', 0, 1, 'Ollie need petting a lot. She loves to play with ball and her teddy toy.', 'Unable to take ollie with us out of the country as we are moving to other country.', '1', 1, 'shubham488'),
(56, 'images/pet/Max.svg', 'Max', 'Labrador retriever', 'Male', 'Puppyhood', 'Dallopura', 'Delhi', 'dog', 'shubham488', 'sujal_b', 1, 1, 'test', 'Rescued', '0', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `rehome`
--

CREATE TABLE `rehome` (
  `id` int(11) NOT NULL,
  `pid` varchar(225) NOT NULL,
  `uname` varchar(225) NOT NULL,
  `oname` varchar(225) NOT NULL,
  `number` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rehome`
--

INSERT INTO `rehome` (`id`, `pid`, `uname`, `oname`, `number`) VALUES
(24, '47', 'peopleforanimals', 'People For Animals', '1123719293'),
(25, '48', 'peopleforanimals', 'People For Animals', '1123719294'),
(26, '49', 'peopleforanimals', 'People For Animals', '1123719294'),
(27, '50', 'peopleforanimals', 'People For Animals', '1123719294'),
(28, '51', 'peopleforanimals', 'People For Animals', '1132541294'),
(29, '52', 'friendicoes', 'Friendicoes', '1124314787'),
(30, '53', 'sujal_b', 'Sujal Bhatnagar', '9971245566'),
(32, '56', 'sujal_b', 'Sujal', '9971252582');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(225) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `lname` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `mobile` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `fname`, `lname`, `username`, `email`, `password`, `address`, `mobile`) VALUES
(5, 'Shubham', 'Pal', 'shubham488', 'shubham@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'abcd', '1234567890'),
(6, 'Sujal', 'B', 'sujal_b', 'sujal@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'K gate', '7418529635'),
(12, 'Aadrsh', '', 'aadrsh1873', 'aadrsh@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'K gate', '9638527412'),
(13, 'People For Animals', '', 'peopleforanimals', 'gandhim@nic.in', '827ccb0eea8a706c4c34a16891f84e7b', 'Jantar Mantar Road, New Delhi', '1123719294'),
(14, 'Friendicoes', 'Seca', 'friendicoes', 'friendicoes.india@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Defence Colony, Jangpura Side, New Delhi,', '1124314787');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adopt`
--
ALTER TABLE `adopt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rehome`
--
ALTER TABLE `rehome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adopt`
--
ALTER TABLE `adopt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `rehome`
--
ALTER TABLE `rehome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
 
 
 
