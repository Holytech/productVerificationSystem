-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 03:16 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oraimo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`, `name`) VALUES
(1, 'akeemqudus2016@gmail.com', 'JS_Lover', 'dee1eb0a17b89ee10e8277a3fdd706da', 'Akeem Qudus'),
(2, 'akeemqudus2016@gmail.com', 'DevShola', '0192023a7bbd73250516f069df18b500', 'Qudus Akeem'),
(4, 'gbeneejegi@gmail.com', 'Gbene', '5fac6c7f7846abc185b0fea12c9124d5', 'Gbene Ejegi');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `point_of_pur` varchar(255) NOT NULL,
  `date_of_pur` date NOT NULL,
  `evidence_of_pay` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `name`, `email`, `product_name`, `point_of_pur`, `date_of_pur`, `evidence_of_pay`) VALUES
(1, 'Akeem Qudus', 'akeemqudus2016@gmail.com', 'FreePod 3', 'Aguda, Surulere, Lagos.', '2022-06-22', 'freepod3.jpg'),
(3, 'Temitope Ajala', 'ajalatemp@gmail.com', 'Oraimo Riff', 'Lakowe, Aja, Lagos.', '2022-07-19', 'obs-82dn-09.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(2, 'akeemqudus2016@gmail.com'),
(3, 'akeem@tqstem.org');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `verification_num` varchar(100) NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `verification_num`, `added_by`, `image`) VALUES
(3, 'oraimo FreePods 3 ENC Calling Noise Cancellation TWS True Wireless Earbuds - Black', 'BT Version: V5.2 <br>\r\nBattery Life: Up to 8 hours of playtime.<br>\r\n2baba tuned for Afrobeat <br>\r\nClear Voice in Calls- Like Face-To-Face Conversation <br>\r\nOne Pair, Two Different Fits-More Choices To Go Truly Wireless <br>\r\nIncredibly Powerful Bass- Power To Amaze You <br>\r\nIPX5 Waterproof - More Sweat? No Fear! <br>\r\nIntuitive Force Sensor-Control at A Touch <br>', '5877-2042-9693-9903', 'Akeem Qudus', 'freepod3.jpg'),
(4, 'oraimo SoundPro 2C 10W Portable Wireless Bluetooth Speaker - Online Exclusive', 'BT Version: V5.0; <br>\r\nFrequency Response: 120Hz-18KHz;<br>\r\nBattery Capacity: 1500mAh;<br>\r\nMusic Play Time: Up to 6 hours;<br>\r\nSpeaker Output: 5W*2;<br>\r\nSize: 190*70*56mm.', '9927-1097-5485-6660', 'Akeem Qudus', 'obs-82dn-09.jpg'),
(5, 'oraimo Pilot 20000mAh 2.1A Fast Charging Power Bank - Online Exclusive', 'Battery Cell Type: Lithium battery <br>\r\nCapacity: 20000mAh (74Wh)<br>\r\nInput1 (Type-C): DC 5.0V 2A<br>\r\nInput2 (Micro USB): DC 5.0V 2A<br>\r\nOutput1 (USB): DC 5.0V 2.1A Max<br>\r\nOutput2 (USB): DC 5.0V 2.1A Max<br>\r\nDimension: 157*78.5*22mm', '2666-8754-4496-7106', 'Akeem Qudus', 'opb-p206dn-01_1.jpg'),
(6, 'oraimo Traveler 3 Byte Massive Power 27000mAh Power Bank', 'Battery Cell Type: Lithium battery<br>\r\nCapacity: 27000mAh<br>\r\nInput1(Lightning): 5V-2A<br>\r\nInput2(Type-C): 5V-2A<br>\r\nInput3(Micro USB): 5V-2A<br>\r\nOutput1(USB): 5VâŽ“2.1A Max<br>\r\nOutput2(USB): 5VâŽ“2.1A Max<br>\r\nDimension: 159*81*32mm<br>', '9591-3607-4275-1598', 'Akeem Qudus', 'opb-p271d_680_-08.jpg'),
(7, 'oraimo FreePods Pro ANC Active Noise Cancellation TWS True Wireless Earbuds', 'BT  Version: V5.2 Range: 10m <br>\r\nBattery  Capacity: 70mAh(earbud), 510mAh(case)<br> \r\nMusic Playtime: \r\nUp to 13 hours; Case provides additional 30 hours (ANC OFF)<br>\r\nUp to 9 hours; Case provides additional 23 hours (ANC ON) \r\nCase Input: Type-C<br>', '4459-4159-9044-8096', 'Akeem Qudus', '20220413-172626.jpeg'),
(8, 'oraimo Handheld Cordless Mini Vacuum Cleaner Foldable Hand Vacuum for Desktop, Keyboard, Drawer, Car, Home and Office Cleaning', 'ã€Powerful Suctionã€‘ Oraimo mini vacuum cleaner provides stable and super suction, which can easily pick up a smartphone, and run for more than 20 mins. A powerful and convenient helper for your daily cleaning. Note: Make sure to charge it by 5V, 1A~2A current.<br>\r\n\r\nã€3 in 1 Multi-functionã€‘Mini car vacuum comes with 2 upgraded attachments. Crevice tool for narrow crevices and corners, brush tool for pet hair, bread crumbs and debris on sofa or mat. Keep your surrounding clean and neat.<br>\r\n\r\nã€Foldable & Lightweightã€‘ The foldable mini handheld vacuum easily fits into the included storage bag. Weighs only 1 lbs, not only suitable for home and office, but also travel-friendly. <br>\r\n\r\nã€Double Filtering, Much Cleanerã€‘ Outer stainless filter separates big dirt, inner Hepa filter removes small dust and ashes. Both are easily detachable and washable. <br>\r\n\r\nã€Exquisite Giftã€‘ The small handheld vacuum cordless has stylish design with high quality storage bag, easy to carry, suitable for gift to your family, friends or colleagues.', '6126-8523-1959-2399', 'Akeem Qudus', 'ohv-102-_-20220601-680.jpg'),
(9, 'oraimo Colorful Light Triple Thumping Bass SoundFlow Wireless Soundbar', 'Size: 172*172*195mm<br>\r\nBT Version: V5.0<br>\r\nBT Range: 15m<br>\r\nFrequency Response: 50Hz-20KHz<br>\r\nBattery Capacity: 6000mAh<br>\r\nPlay Time: 4-6 hours<br>\r\nSpeaker Output: 50W', '6654-3575-3615-2190', 'Akeem Qudus', 'obs-72d_680_-08_1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
