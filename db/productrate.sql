-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 03:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productrate`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `caID` int(6) NOT NULL,
  `caName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`caID`, `caName`) VALUES
(5, 'clothes'),
(2, 'computers'),
(1, 'electronics'),
(4, 'software'),
(3, 'videogames');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comID` int(6) NOT NULL,
  `uID` int(6) NOT NULL,
  `productID` int(6) NOT NULL,
  `content` varchar(100) NOT NULL,
  `time` date DEFAULT NULL,
  `numlikes` int(11) NOT NULL,
  `ratings` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `description`, `price`, `image`, `created`, `modified`) VALUES
(12345678, '    <h1 style=\"color: black;\">iPhone 14</h1>    \n', '<ul style=\"margin:0px;padding:15px;\">			<li>5G / 128 GB ROM|</li>\n				<li>15.49 cm (6.1 inch) Super Retina XDR Display</li>\n				<li>12MP + 12MP | 12MP Front Camera</li>\n				<li>A15 Bionic Chip, 6 Core Processor Processor</li>\n				<li>\n1 Year Warranty for Phone and 6 Months Warranty for In-Box Accessories</li>\n			</ul>	', 84000, '12345678.jpg', '0000-00-00 00:00:00', '2023-10-19 08:43:04'),
(12345680, '<h1 style=\"color: black;\">McAfee AntiVirus Plus\n    </h1> ', '      <ul style=\"margin:0px;padding:15px;\">\n    <h6>Software Details</h6>     <p>McAfee® AntiVirus Plus is a cloud-based antivirus software that protects your devices from viruses, malware, and other online threats.</p>          <h6>System Requirements</h6>             <li><strong>Windows:</strong> Windows 7, 8, 8.1, 10, or 11</li>         <li><strong>Mac:</strong> macOS 10.12 or later</li>         <li><strong>Android:</strong> Android 5.0 or later</li>         <li><strong>iOS:</strong> iOS 11.0 or later</li>     <h6>Pricing</h6>     <ul>         <li><strong>Single-device subscription:</strong> ₹2,999 per year</li>         <li><strong>Multi-device subscription:</strong> ₹3,999 per year</li>         <li><strong>Family subscription:</strong> ₹4,999 per year</li>     </ul></ul> ', 500, '12345680.jpg', '2023-10-29 04:30:00', '2023-10-29 04:30:00'),
(12345600, '    <h1 style=\"color: black;\">BULLMER Peach Trendy Front Printed Oversized Round Neck T-Shirt for Men</h1>    \n', '\n<ul style=\"margin:0px;padding:15px;\">\n <h6>Product Details</h6> <li><strong>Material Composition:</strong> Cottonblend</li>         <li><strong>Pattern:</strong> Printed</li>         <li><strong>Fit Type:</strong> Regular Fit</li>         <li><strong>Sleeve Type:</strong> Half Sleeve</li>         <li><strong>Collar Style:</strong> Club Collar</li>         <li><strong>Length:</strong> Standard Length</li>         <li><strong>Item Weight:</strong> 250 g</li>         <li><strong>Generic Name:</strong> T-Shirt</li>         <li><strong>Country of Origin:</strong> India</li>     </ul>', 400, '12345600.jpg', '2023-10-29 04:30:00', '2023-10-29 04:30:00'),
(12345690, '    <h1 style=\"color: black;\">PUBG: BATTLEGROUNDS</h1>    \n', '    <ul style=\"margin:0px;padding:15px;\"><li> <ul>     <li><strong>Developer:</strong> Krafton</li>     <li><strong>Publisher:</strong> Krafton</li>     <li><strong>Genre:</strong> Battle royale</li>     <li><strong>Platform(s):</strong> Windows, Xbox One, PlayStation 4, Stadia, Xbox Series X/S, PlayStation 5</li>     <li><strong>Release Date:</strong> December 20, 2017</li>     <li><strong>Engine:</strong> Unreal Engine 4</li>     <li><strong>Business Model:</strong> Free-to-play with in-game purchases</li> </ul>  <h2>System Requirements</h2> <h3>Minimum:</h3> <ul>     <li>Windows 7, 8.1, or 10 64-bit</li>     <li>Intel Core i5-4430 or AMD FX-6300</li>     <li>8 GB RAM</li>     <li>NVIDIA GeForce GTX 960 or AMD Radeon R7 370</li>     <li>30 GB of free disk space</li> </ul>  <h3>Recommended:</h3> <ul>     <li>Windows 10 64-bit</li>     <li>Intel Core i7-4770K or AMD Ryzen 5 1600X</li>     <li>16 GB RAM</li>     <li>NVIDIA GeForce GTX 1060 or AMD Radeon RX 580</li>     <li>30 GB of free disk space</li> </ul>', 250, '12345690.jpg', '2023-10-29 04:30:00', '2023-10-29 04:30:00'),
(12345685, '   <h1 style=\"color: black;\">MDH SabziSabji Masala, 100G  (100 g)  </h1> ', '<ul style=\"margin:0px;padding:15px;\"><li> <strong>General:</strong></li>\n  <li>Model Name: Sprint City</li>\n  <li>Brand Color: Blue</li>\n  <li>Mudguard: No Mudguard</li>\n  <li><strong>Drivetrain:</strong></li>\n  <li>Front Derailleur: Non Geared</li>\n  <li>Shifters: Non Geared</li>\n  <li>Rear Derailleur: Non Geared</li>\n  <li><strong>Handlebar:</strong></li>\n  <li>Handlebar Type: MTB Type</li>\n  <li><strong>Components:</strong></li>\n  <li>Stem: Steel</li>\n  <li>Crankset: 44T x 6.5\"</li>\n  <li><strong>Dimensions:</strong></li>\n  <li>Width: 750 cm</li>\n  <li>Height: 1200 cm</li>\n  <li>Depth: 1730 cm</li>\n  <li><strong>Weight:</strong></li>\n  <li>Weight: 17.7 kg</li>\n  <li><strong>Warranty:</strong></li>\n  <li>Warranty: 6</li>', 140, '12345685\n.jpg', '2023-10-23 06:30:00', '2023-10-23 06:30:00'),
(12345601, '  <h1 style=\"color: black;\">HP Victus Gaming Laptop</h1>    \n', '<ul style=\"margin:0px;padding:15px;\">  <li><strong>Specifications:</strong></li>   <li>- 12th Gen Intel Core i5-12450H</li>   <li>- NVIDIA RTX 3050 GPU</li>   <li>- 15.6-inch (39.6 cm), FHD, IPS</li>   <li>- 144Hz display with 9 ms response time</li>   <li>- 16GB DDR4 RAM</li>   <li>- 512GB SSD</li>   <li>- Backlit Keyboard (MSO, Blue)</li>   <li>- Weight: 2.29 kg</li> </ul>', 70000, '12345601.jpg', '2023-10-29 04:30:00', '2023-10-29 04:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `item_rating`
--

CREATE TABLE `item_rating` (
  `ratingId` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `ratingNumber` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = Block, 0 = Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_rating`
--

INSERT INTO `item_rating` (`ratingId`, `itemId`, `userId`, `ratingNumber`, `title`, `comments`, `created`, `modified`, `status`) VALUES
(14, 12345678, 1, 2, 'its awesome', 'It\'s awesome!!!', '2018-08-19 09:13:01', '2018-08-19 09:13:01', 1),
(15, 12345678, 2, 5, 'Nice product', 'Really quality product!', '2018-08-19 09:13:37', '2018-08-19 09:13:37', 1),
(16, 12345678, 3, 1, 'best buy', 'its\'s best but item.', '2018-08-19 09:14:19', '2018-08-19 09:14:19', 1),
(17, 12345678, 4, 1, 'super awesome ', 'i think its supper products', '2018-08-19 09:18:00', '2018-08-19 09:18:00', 1),
(22, 12345679, 5, 1, 'adada', 'daDad', '2019-01-20 17:00:58', '2019-01-20 17:00:58', 1),
(23, 12345678, 5, 5, 'Nice product', 'this is nice!', '2019-01-20 17:01:37', '2019-01-20 17:01:37', 1),
(24, 12345679, 3, 1, 'really nice', 'Good!', '2019-01-20 21:06:48', '2019-01-20 21:06:48', 1),
(25, 12345690, 1, 1, 'm', 'hi', '2023-10-29 00:05:47', '2023-10-29 00:05:47', 1),
(26, 12345600, 1, 1, 'AUTO DETAILING', 'j', '2023-10-29 06:00:29', '2023-10-29 06:00:29', 1),
(33, 12345601, 10, 1, 'f', 'fd', '2023-10-29 20:22:38', '2023-10-29 20:22:38', 1),
(34, 12345678, 3, 1, 'mst', 'mst', '2023-11-01 15:02:09', '2023-11-01 15:02:09', 1),
(35, 12345678, 25, 1, 'must', 'must', '2023-11-02 19:12:20', '2023-11-02 19:12:20', 1),
(36, 12345600, 25, 1, 'nn', 'n', '2023-11-02 19:18:39', '2023-11-02 19:18:39', 1),
(37, 12345690, 25, 1, 'n', ' m', '2023-11-02 19:21:51', '2023-11-02 19:21:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `item_users`
--

CREATE TABLE `item_users` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `item_users`
--

INSERT INTO `item_users` (`userid`, `username`, `password`, `avatar`, `name`) VALUES
(1, 'rose', '123', 'user1.jpg', ''),
(2, 'smith', '123', 'user2.jpg', ''),
(3, 'adam', '123', 'user3.jpg', ''),
(4, 'merry', '123', 'user4.jpg', ''),
(5, 'katrina', '123', 'user5.jpg', ''),
(6, 'rhodes', '123', 'user6.jpg', ''),
(28, 'suraj123@gmail.com', '12345678', 'image/userpics/user3.jpg', 'Suraj'),
(46, 'suraj686@outlook.com', '0', 'image/userpics/user5.jpg', 'Suraj Verma'),
(47, 'suraj686@outlook.com', '0', 'user2.jpg', 'Suraj Verma'),
(48, 'don@gmail.com', '12345', 'image/userpics/user5.jpg', 'don'),
(49, 'don@gmail.com', '12345', 'user4.jpg', 'don'),
(50, 'don@gmail.com', '12345', 'image/userpics/user3.jpg', 'don'),
(51, 'don@gmail.com', '12345', 'user2.jpg', 'don'),
(52, 'don@gmail.com', '12345', 'image/userpics/profile.jpg', 'don'),
(53, '', '12345', 'user3.jpg', 'don');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(6) NOT NULL,
  `productName` varchar(60) NOT NULL,
  `price` double NOT NULL,
  `mrates` float NOT NULL,
  `origin` varchar(100) NOT NULL,
  `mnation` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`caID`),
  ADD UNIQUE KEY `caName_2` (`caName`),
  ADD UNIQUE KEY `caName_5` (`caName`),
  ADD KEY `caID` (`caID`),
  ADD KEY `caID_2` (`caID`),
  ADD KEY `caID_3` (`caID`),
  ADD KEY `caID_4` (`caID`),
  ADD KEY `caName` (`caName`),
  ADD KEY `caName_3` (`caName`),
  ADD KEY `caName_4` (`caName`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comID`,`uID`,`productID`),
  ADD KEY `fk1` (`uID`),
  ADD KEY `fk2` (`productID`),
  ADD KEY `ratings` (`ratings`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_rating`
--
ALTER TABLE `item_rating`
  ADD PRIMARY KEY (`ratingId`);

--
-- Indexes for table `item_users`
--
ALTER TABLE `item_users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD UNIQUE KEY `productName` (`productName`),
  ADD KEY `productID` (`productID`),
  ADD KEY `productID_2` (`productID`),
  ADD KEY `productID_3` (`productID`),
  ADD KEY `mrates` (`mrates`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `caID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2359;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12345691;

--
-- AUTO_INCREMENT for table `item_rating`
--
ALTER TABLE `item_rating`
  MODIFY `ratingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `item_users`
--
ALTER TABLE `item_users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
