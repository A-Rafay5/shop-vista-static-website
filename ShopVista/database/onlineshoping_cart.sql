-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 18, 2023 at 11:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshoping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `bannertable`
--

CREATE TABLE `bannertable` (
  `ban_id` int(11) NOT NULL,
  `banner_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bannertable`
--

INSERT INTO `bannertable` (`ban_id`, `banner_image`) VALUES
(1, 'hero-banner.png'),
(2, 'parallax-bg.png');

-- --------------------------------------------------------

--
-- Table structure for table `blogtable`
--

CREATE TABLE `blogtable` (
  `blog_id` int(11) NOT NULL,
  `blog_image` varchar(50) NOT NULL,
  `blog_heading` varchar(500) NOT NULL,
  `blog_des` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogtable`
--

INSERT INTO `blogtable` (`blog_id`, `blog_image`, `blog_heading`, `blog_des`) VALUES
(1, 'm-blog-1.jpg', 'Astronomy Binoculars A Great Alternative', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.'),
(2, 'm-blog-2.jpg', 'The Basics Of Buying A Telescope', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.'),
(3, 'm-blog-3.jpg', 'The Glossary Of Telescopes', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.'),
(4, 'm-blog-4.jpg', 'The Night Sky', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.'),
(5, 'm-blog-5.jpg', 'Telescopes 101', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.');

-- --------------------------------------------------------

--
-- Table structure for table `categorytable`
--

CREATE TABLE `categorytable` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorytable`
--

INSERT INTO `categorytable` (`cat_id`, `cat_name`, `cat_image`) VALUES
(1, 'Arts', 'complex.jfif'),
(2, 'Greeting Cards', 'card1.jfif'),
(3, 'Dolls', '3dolls.jfif'),
(4, 'Files Warps', '2files.jpg'),
(5, 'Hand Bags', '2bags.jpg'),
(6, 'Wallets', '2wallets.jpg'),
(7, 'Cosmetic Items', 'makeup.jpg'),
(8, 'Celebrate Items', 'bircele.jfif'),
(9, 'Gift Articles', 'brass.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contactmessage_table`
--

CREATE TABLE `contactmessage_table` (
  `mess_id` int(11) NOT NULL,
  `mess_name` varchar(50) NOT NULL,
  `mess_email` varchar(100) NOT NULL,
  `mess_subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactmessage_table`
--

INSERT INTO `contactmessage_table` (`mess_id`, `mess_name`, `mess_email`, `mess_subject`, `message`) VALUES
(1, 'Mustufa Kashif', 'mustufakashif37000@gmail', 'for order', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(2, 'Osama', 'osamaameer12345@gmail.com', 'order status', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(3, 'Mustufa', 'mustufakashif37000@gmail.com', 'm', 'text');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emp_ID` int(11) NOT NULL,
  `Emp_F_NAME` varchar(50) NOT NULL,
  `Emp_L_NAME` varchar(50) NOT NULL,
  `Emp_Gender` varchar(20) NOT NULL,
  `Emp_Marital` varchar(50) NOT NULL,
  `Emp_DoB` date NOT NULL,
  `Emp_Email` varchar(100) NOT NULL,
  `Emp_Phone` varchar(50) NOT NULL,
  `Emp_Street` varchar(100) NOT NULL,
  `Emp_City` varchar(100) NOT NULL,
  `Emp_State` varchar(100) NOT NULL,
  `Emp_Country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_ID`, `Emp_F_NAME`, `Emp_L_NAME`, `Emp_Gender`, `Emp_Marital`, `Emp_DoB`, `Emp_Email`, `Emp_Phone`, `Emp_Street`, `Emp_City`, `Emp_State`, `Emp_Country`) VALUES
(1, 'Mustufa', 'Kashif', 'Male', 'Unmarried', '2006-03-14', 'mustufakashif37000@gmail.com', '03000000000', 'Apsara Apartment No 5', 'Karachi', 'Sindh', 'Pakistan'),
(2, 'M.Usamah', 'Ansari', 'Male', 'Unmarried', '1999-01-01', 'mu7523@gmail.com', '03000000000', 'North Nazimabad', 'Karachi', 'Sindh', 'Pakistan'),
(3, 'M.Rohaan', 'Khan', 'Male', 'Unmarried', '2000-05-21', 'rohan@gmail.com', '03000000000', 'North Karachi', 'Karachi', 'Sindh', '');

-- --------------------------------------------------------

--
-- Table structure for table `favoritetable`
--

CREATE TABLE `favoritetable` (
  `fav_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newstable`
--

CREATE TABLE `newstable` (
  `news_id` int(11) NOT NULL,
  `news_image` varchar(50) NOT NULL,
  `news_title` varchar(50) NOT NULL,
  `news_heading` varchar(200) NOT NULL,
  `news_des` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newstable`
--

INSERT INTO `newstable` (`news_id`, `news_image`, `news_title`, `news_heading`, `news_des`) VALUES
(1, 'blog1.png', 'By Admin', 'The Richland Center Shooping News and weekly shooper', 'Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.'),
(2, 'blog2.png', 'By Admin', 'The Shopping News also offers top-quality printing services', 'Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.'),
(3, 'blog3.png', 'By Admin', 'Professional design staff and efficient equipment you’ll find we offer', 'Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.');

-- --------------------------------------------------------

--
-- Table structure for table `ordermanager`
--

CREATE TABLE `ordermanager` (
  `om_id` int(11) NOT NULL,
  `om_fullname` varchar(70) NOT NULL,
  `om_email` varchar(100) NOT NULL,
  `om_phone` int(50) NOT NULL,
  `om_country` varchar(150) NOT NULL,
  `om_state` varchar(150) NOT NULL,
  `om_address` varchar(300) NOT NULL,
  `om_paymode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordermanager`
--

INSERT INTO `ordermanager` (`om_id`, `om_fullname`, `om_email`, `om_phone`, `om_country`, `om_state`, `om_address`, `om_paymode`) VALUES
(1, 'Ali Khan', 'ali@gmail.com', 2147483647, 'Pakistan', 'Sindh', 'ABC', 'COD'),
(2, 'Sara', 'sara@gmail.com', 2147483647, 'Pakistan', 'Punjab', 'ABCDEF', 'COD'),
(15, 'Mustufa', 'mustufakashif37000@gmail.com', 2147483647, '2', 'Sindh', 'North Nazimabad', 'Cash-On-Delievery');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `order_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `order_qty` int(50) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(150) NOT NULL,
  `delivery_date` date NOT NULL,
  `om_id_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`order_id`, `pro_id`, `order_qty`, `order_date`, `order_status`, `delivery_date`, `om_id_fk`) VALUES
(7, 3, 0, '2023-05-10', 'Rejected', '2023-05-17', 1),
(8, 26, 15, '2023-05-10', 'Dispatched', '2023-05-20', 15),
(9, 28, 15, '2023-05-10', 'Dispatched', '2023-05-20', 15),
(10, 26, 15, '2023-05-18', 'Delivered', '2023-05-26', 15);

-- --------------------------------------------------------

--
-- Table structure for table `producttable`
--

CREATE TABLE `producttable` (
  `pro_id` int(11) NOT NULL,
  `pro_code` varchar(50) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_des` varchar(500) NOT NULL,
  `pro_price` int(50) NOT NULL,
  `pro_image` varchar(50) NOT NULL,
  `pro_qty` int(100) NOT NULL,
  `cat_id_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `producttable`
--

INSERT INTO `producttable` (`pro_id`, `pro_code`, `pro_name`, `pro_des`, `pro_price`, `pro_image`, `pro_qty`, `cat_id_fk`) VALUES
(3, '3235484', 'Lovely Card', 'white in color, decorated with red color', 250, 'love.jpeg', 5, 2),
(13, '3262947', 'Painting', 'A type of complex paint', 1200, 'complex.jfif', 3, 1),
(14, '321270', 'Birthday Cards', 'black in color, decorated with golden color', 250, 'card1.jfif', 5, 2),
(15, '3273263', 'Barbie Dolls', 'a set of three barbie dolls with different dresses', 599, '3dolls.jfif', 8, 3),
(16, '3278557', 'File Covers', 'a pack two file cover, blue in color', 399, '2files.jpg', 9, 4),
(17, '3268979', 'Ladies Bags', 'a pair of hand bags, light-blue in color ', 1599, '2bags.jpg', 5, 5),
(18, '321303', 'Wallets', 'a pack two wallets, blue & brown in color ', 999, '2wallets.jpg', 8, 6),
(19, '3258461', 'Makeup ', 'a pack of makeup set including lipstick, nail polish, eye shade and face powder ', 3999, 'makeup.jpg', 6, 7),
(20, '3224193', 'Birthday Celebrate', '3 different caps, 3 different masks and 1 tie bow', 1699, 'bircele.jfif', 7, 8),
(21, '322099', 'Brass Decor Pot', 'brass pot with blue color ', 5999, 'brass.jpg', 2, 9),
(22, '3228812', 'Silver Antique Table Decor', 'Pure silver antique table top gift article  weight - 1400 gram', 206999, 'silver.jpg', 3, 9),
(23, '3269071', 'Wall Painting', 'complex painting of face art', 1199, 'face.jfif', 6, 1),
(24, '3267413', 'Face Wash', 'women and men face wash imported', 599, 'product2.png', 6, 7),
(25, '3249334', 'Perfume light Smell', 'A type of Perfume with light Smell', 999, 'product4.png', 9, 7),
(26, '3284486', 'Quartz Belt Watch', 'Quartz Belt Watch Imported watch', 899, 'product1.png', 4, 9),
(27, '3233706', 'Kids Toy Car chargeable ', 'Kids Toy Car chargeable ', 1599, 'product6.png', 5, 9),
(28, '3275290', 'Man Office Bag', 'Man Office Bag imported', 2999, 'product5.png', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `registrationtable`
--

CREATE TABLE `registrationtable` (
  `res_id` int(11) NOT NULL,
  `res_email` varchar(50) NOT NULL,
  `res_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrationtable`
--

INSERT INTO `registrationtable` (`res_id`, `res_email`, `res_password`) VALUES
(1, 'mustufakashif37000@gmail.com', '1234'),
(2, 'mustufa@gmail.com', ''),
(3, 'ali@gmail.com', '1456'),
(4, 'rohan@gmail.com', '45656'),
(5, 'saad@gmail.com', '7896'),
(6, 'saad@gmail.com', '7896'),
(7, 'saad@gmail.com', '7896');

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `order_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_price` varchar(50) NOT NULL,
  `item_qty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`order_id`, `item_name`, `item_price`, `item_qty`) VALUES
(15, 'Quartz Belt Watch', '899', '1'),
(15, 'Man Office Bag', '2999', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bannertable`
--
ALTER TABLE `bannertable`
  ADD PRIMARY KEY (`ban_id`);

--
-- Indexes for table `blogtable`
--
ALTER TABLE `blogtable`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `categorytable`
--
ALTER TABLE `categorytable`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contactmessage_table`
--
ALTER TABLE `contactmessage_table`
  ADD PRIMARY KEY (`mess_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_ID`);

--
-- Indexes for table `favoritetable`
--
ALTER TABLE `favoritetable`
  ADD PRIMARY KEY (`fav_id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `newstable`
--
ALTER TABLE `newstable`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `ordermanager`
--
ALTER TABLE `ordermanager`
  ADD PRIMARY KEY (`om_id`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `om_id_fk` (`om_id_fk`);

--
-- Indexes for table `producttable`
--
ALTER TABLE `producttable`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `cat_id_fk` (`cat_id_fk`);

--
-- Indexes for table `registrationtable`
--
ALTER TABLE `registrationtable`
  ADD PRIMARY KEY (`res_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bannertable`
--
ALTER TABLE `bannertable`
  MODIFY `ban_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogtable`
--
ALTER TABLE `blogtable`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categorytable`
--
ALTER TABLE `categorytable`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactmessage_table`
--
ALTER TABLE `contactmessage_table`
  MODIFY `mess_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Emp_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `favoritetable`
--
ALTER TABLE `favoritetable`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newstable`
--
ALTER TABLE `newstable`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ordermanager`
--
ALTER TABLE `ordermanager`
  MODIFY `om_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `producttable`
--
ALTER TABLE `producttable`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `registrationtable`
--
ALTER TABLE `registrationtable`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favoritetable`
--
ALTER TABLE `favoritetable`
  ADD CONSTRAINT `favoritetable_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `producttable` (`pro_id`),
  ADD CONSTRAINT `favoritetable_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `ordermanager` (`om_id`);

--
-- Constraints for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD CONSTRAINT `ordertable_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `producttable` (`pro_id`),
  ADD CONSTRAINT `ordertable_ibfk_2` FOREIGN KEY (`om_id_fk`) REFERENCES `ordermanager` (`om_id`);

--
-- Constraints for table `producttable`
--
ALTER TABLE `producttable`
  ADD CONSTRAINT `producttable_ibfk_1` FOREIGN KEY (`cat_id_fk`) REFERENCES `categorytable` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
