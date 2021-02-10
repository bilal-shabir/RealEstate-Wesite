-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 09:28 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `489`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `properties` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`, `properties`) VALUES
(1, 'muharraq', 1),
(2, 'arad', 2),
(3, 'manama', 1),
(4, 'Riffa', 2);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `joined` date NOT NULL,
  `untill` date NOT NULL,
  `job` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `u_id`, `joined`, `untill`, `job`, `salary`) VALUES
(7, 2, '2016-02-01', '2022-02-01', 'admin', 800),
(8, 7, '2020-05-31', '2022-05-18', 'agent', 500),
(9, 8, '2020-05-31', '2022-05-18', 'Manager', 400);

-- --------------------------------------------------------

--
-- Table structure for table `pcoverimage`
--

CREATE TABLE `pcoverimage` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `picname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pcoverimage`
--

INSERT INTO `pcoverimage` (`id`, `p_id`, `picname`) VALUES
(15, 12, '5ed3d6a8171ea4.62074393.jpg'),
(16, 13, '5ed3d874917971.56992570.jpg'),
(17, 14, '5ed3da0a5942b6.87701238.jpg'),
(18, 15, '5ed3da949a69a1.89992652.jpg'),
(19, 16, '5ed3dc3fe59140.15494319.jpg'),
(20, 17, '5ed3dd25420ab3.43009667.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pimage`
--

CREATE TABLE `pimage` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `picname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pimage`
--

INSERT INTO `pimage` (`id`, `p_id`, `picname`) VALUES
(51, 12, '5ed3d6a8428296.01273839.jpg'),
(52, 12, '5ed3d6a85e3817.03366021.jpg'),
(53, 12, '5ed3d6a86c4f06.09646595.jpg'),
(54, 12, '5ed3d6a88931e0.88215008.jpeg'),
(55, 12, '5ed3d6a894aa11.52370513.jpg'),
(56, 13, '5ed3d874d29fe1.64393931.jpg'),
(57, 13, '5ed3d874eba2d0.42058977.jpg'),
(58, 13, '5ed3d8750882f6.79869002.jpg'),
(59, 13, '5ed3d8752ac3e6.32637535.jpg'),
(60, 13, '5ed3d8753e5786.16423493.jpg'),
(61, 14, '5ed3da0a8efe55.21876809.jpg'),
(62, 14, '5ed3da0a9fd248.66604673.jpg'),
(63, 14, '5ed3da0aca3236.76540815.jpg'),
(64, 14, '5ed3da0adb1147.01469389.jpg'),
(65, 14, '5ed3da0b0c1a16.29549101.jpg'),
(66, 15, '5ed3da951a4df6.68401008.jpg'),
(67, 15, '5ed3da953127f3.51528111.jpg'),
(68, 15, '5ed3da955390c0.30403500.jpg'),
(69, 15, '5ed3da955ef065.82870066.jpg'),
(70, 15, '5ed3da956a87e2.23669607.jpg'),
(71, 16, '5ed3dc4026a534.80494479.jpg'),
(72, 16, '5ed3dc402f74c8.09199190.jpg'),
(73, 16, '5ed3dc404061a1.87603313.jpg'),
(74, 16, '5ed3dc404baa83.57782629.jpg'),
(75, 16, '5ed3dc4064d033.65056863.jpg'),
(76, 17, '5ed3dd25953725.20036037.jpg'),
(77, 17, '5ed3dd25ba3a81.40033421.jpg'),
(78, 17, '5ed3dd25cb01b0.16068968.jpg'),
(79, 17, '5ed3dd25e13bd8.68696387.jpg'),
(80, 17, '5ed3dd260cb552.23874744.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `p_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bedroom` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `garage` int(11) NOT NULL,
  `hall` int(11) NOT NULL,
  `kitchen` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `road` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `income` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  `u_id` int(11) NOT NULL,
  `reservation_status` int(11) NOT NULL DEFAULT 0,
  `bldg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`p_id`, `name`, `bedroom`, `bathroom`, `garage`, `hall`, `kitchen`, `area`, `city`, `road`, `price`, `type`, `income`, `description`, `u_id`, `reservation_status`, `bldg`) VALUES
(12, 'ahmed buildings', 3, 2, 0, 2, 2, 200, 'arad', 1657, 630, 'villa', 'rent', 'Beautiful villa for rent with ewa', 7, 0, 672),
(13, 'nasir building', 4, 2, 1, 1, 1, 600, 'muharraq', 4523, 200000, 'villa', 'sale', 'Modern style villa for sale', 7, 0, 963),
(14, 'ocean house', 4, 2, 0, 1, 1, 400, 'Riffa', 2539, 700, 'house', 'rent', 'house for rent with pool', 7, 0, 1265),
(15, 'sky house', 3, 3, 1, 2, 1, 100, 'Riffa', 789, 400, 'house', 'rent', 'Furnished House for rent with ewa', 7, 0, 1345),
(16, 'white villa', 3, 2, 1, 1, 1, 200, 'manama', 1563, 1500000, 'house', 'rent', 'House for sale in good area', 7, 0, 869),
(17, 'ahsan building', 2, 1, 0, 1, 1, 90, 'arad', 4236, 283, 'appartment', 'rent', 'Apartment for rent with ewa', 7, 0, 658);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `reservedby` int(11) NOT NULL,
  `agent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `p_id`, `reservedby`, `agent`) VALUES
(24, 12, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `commision` float NOT NULL,
  `date` date NOT NULL,
  `bid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `aid`, `pid`, `city`, `price`, `commision`, `date`, `bid`) VALUES
(13, 7, 17, 'arad', 283, 283, '2020-05-31', 1),
(14, 7, 13, 'muharraq', 200000, 10000, '2020-05-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `number` int(11) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `type` varchar(10) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `fullname`, `number`, `address`, `type`, `u_id`) VALUES
('bilal', '$2y$10$ML/0LOpnXS8FS/Ig/TpKveQfItncqAbXjA/7dfPKRplsgtFxN3cOS', 'bilal@gmail.com', 'bilal shabir', 33125703, 'road 1611 bldg 572G flat 2', 'customer', 1),
('taha123', '$2y$10$ML/0LOpnXS8FS/Ig/TpKveQfItncqAbXjA/7dfPKRplsgtFxN3cOS', 'taha@gmail.com', 'taha ', 33124568, 'road 1611 bldg 572G flat 2', 'admin', 2),
('murtada', '$2y$10$mMc7t9HyCVGwY5nQOQR0.uTIhoovNOnWvmNb189OyNbL3vlm9tgDG', 'm@gmail.com', 'Murtada', 33345684, 'road 1611 bldg 572G flat 2', 'seller', 7),
('ahmed', '$2y$10$t4WtDzY1u.Nsl91s3YdJAuN9DLTvnc.s4EiEq/ttih4udHxbN.e82', 'a@gmail.com', 'ahmed nasir', 33124568, 'road 1611 bldg 572G flat 2', 'manager', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `city` (`city`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `pcoverimage`
--
ALTER TABLE `pcoverimage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `pimage`
--
ALTER TABLE `pimage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `reservedby` (`reservedby`),
  ADD KEY `agent` (`agent`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aid` (`aid`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pcoverimage`
--
ALTER TABLE `pcoverimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pimage`
--
ALTER TABLE `pimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`);

--
-- Constraints for table `pcoverimage`
--
ALTER TABLE `pcoverimage`
  ADD CONSTRAINT `pcoverimage_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `property` (`p_id`);

--
-- Constraints for table `pimage`
--
ALTER TABLE `pimage`
  ADD CONSTRAINT `pimage_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `property` (`p_id`);

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `property` (`p_id`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`reservedby`) REFERENCES `users` (`u_id`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`agent`) REFERENCES `users` (`u_id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `users` (`u_id`),
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`bid`) REFERENCES `users` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
