-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 07:04 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barywala`
--

-- --------------------------------------------------------

--
-- Table structure for table `commercial`
--

CREATE TABLE IF NOT EXISTS `commercial` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `slug` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `rent` int(10) NOT NULL,
  `rooms` varchar(30) NOT NULL,
  `washrooms` varchar(30) NOT NULL,
  `size` int(10) NOT NULL,
  `time_period` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `image` varchar(30) DEFAULT NULL,
  `image1` varchar(30) DEFAULT NULL,
  `image2` varchar(30) DEFAULT NULL,
  `image3` varchar(30) DEFAULT NULL,
  `image4` varchar(30) DEFAULT NULL,
  `short_note` text NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commercial`
--

INSERT INTO `commercial` (`id`, `user_id`, `title`, `slug`, `city`, `area`, `address`, `rent`, `rooms`, `washrooms`, `size`, `time_period`, `contact`, `image`, `image1`, `image2`, `image3`, `image4`, `short_note`, `post_date`) VALUES
(86, 12, 'Multiple Image 555', 'Multiple-Image-555', 'Dhaka', 'Dhanmondi ', 'Dhanmondi, Dhaka', 20000, '04', '1', 1500, '1 month', 124569876, '108986591.jpg', 'a_(1).jpg', 'a_(2).JPG', 'a_(3).jpg', 'a_(4).jpg', 'hello', '2019-02-27 07:57:19'),
(91, 12, 'Multiple Image', 'Multiple-Image', 'Dhaka', 'Gulshan 1', 'Gulshan 1, Dhaka', 60000, '04', '1', 2200, '1 month', 124569876, '108986591.jpg', 'a_(2).JPG', 'a_(3).jpg', 'a_(4).jpg', 'a_(5).jpg', 'hmmmmmm', '2019-03-03 11:13:58'),
(92, 12, 'A', 'A', 'Bagerhat', 'Khulna', 'Bagerhat, Khulna', 20000, '2', '1', 1500, '5 months', 124569876, 'ca.jpg', 'cb.jpg', 'cc.jpg', 'da.jpg', 'db.jpg', 'hello from us', '2019-03-04 09:08:45'),
(94, 12, 'Roommate Wanted', 'Roommate-Wanted', 'Bhola', 'Bhola', 'Bhola', 20000, '2', '2', 1500, '1 month', 124569876, 'a_(1).jpg', 'a_(2).jpg', NULL, NULL, NULL, 'hello', '2019-03-18 06:00:51'),
(95, 12, 'Office for Rent a', 'Office-for-Rent-a', 'Dhaka', 'Dhanmondi ', 'Dhanmondi, Dhaka', 20000, '1', '1', 1500, '1 month', 124569876, 'a_(1)1.jpg', 'a_(2)1.jpg', 'a_(3).jpg', 'a_(4).jpg', NULL, 'dfer', '2019-03-18 06:48:55'),
(96, 12, 'House for rent', 'House-for-rent', 'Chandpur', 'Dhaka', 'Mohammadpur, Dhaka', 20000, '2', '2', 1500, '1 month', 124569876, 'a_(1)2.jpg', NULL, NULL, NULL, NULL, 'hmmm', '2019-03-19 06:21:46'),
(97, 12, 'Office for Rent@Bonani', 'Office-for-RentBonani', 'Dhaka', 'Bonani', 'R#5, H#64', 60000, '3', '2', 2400, '5 months', 124569873, 'db.jpg', 'eb.jpg', 'fa.jpg', 'fb.jpg', NULL, 'testing ', '2019-03-19 06:24:04'),
(98, 12, 'Office for Rent an', 'Office-for-Rent-an', 'Bandarban', 'Dhanmondi ', 'Mohammadpur, Dhaka', 20000, '2', '2', 1500, '1 month', 124569876, NULL, NULL, NULL, NULL, NULL, 'hjnfshjn', '2019-03-20 06:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
  `id` int(2) unsigned NOT NULL,
  `division_id` int(2) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `bn_name` varchar(50) NOT NULL,
  `lat` double NOT NULL,
  `lon` double NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `name`, `bn_name`, `lat`, `lon`, `website`) VALUES
(1, 3, 'Dhaka', 'ঢাকা', 23.7115253, 90.4111451, 'www.dhaka.gov.bd'),
(2, 3, 'Faridpur', 'ফরিদপুর', 23.6070822, 89.8429406, 'www.faridpur.gov.bd'),
(3, 3, 'Gazipur', 'গাজীপুর', 24.0022858, 90.4264283, 'www.gazipur.gov.bd'),
(4, 3, 'Gopalganj', 'গোপালগঞ্জ', 23.0050857, 89.8266059, 'www.gopalganj.gov.bd'),
(5, 8, 'Jamalpur', 'জামালপুর', 24.937533, 89.937775, 'www.jamalpur.gov.bd'),
(6, 3, 'Kishoreganj', 'কিশোরগঞ্জ', 24.444937, 90.776575, 'www.kishoreganj.gov.bd'),
(7, 3, 'Madaripur', 'মাদারীপুর', 23.164102, 90.1896805, 'www.madaripur.gov.bd'),
(8, 3, 'Manikganj', 'মানিকগঞ্জ', 0, 0, 'www.manikganj.gov.bd'),
(9, 3, 'Munshiganj', 'মুন্সিগঞ্জ', 0, 0, 'www.munshiganj.gov.bd'),
(10, 8, 'Mymensingh', 'ময়মনসিংহ', 0, 0, 'www.mymensingh.gov.bd'),
(11, 3, 'Narayanganj', 'নারায়াণগঞ্জ', 23.63366, 90.496482, 'www.narayanganj.gov.bd'),
(12, 3, 'Narsingdi', 'নরসিংদী', 23.932233, 90.71541, 'www.narsingdi.gov.bd'),
(13, 8, 'Netrokona', 'নেত্রকোণা', 24.870955, 90.727887, 'www.netrokona.gov.bd'),
(14, 3, 'Rajbari', 'রাজবাড়ি', 23.7574305, 89.6444665, 'www.rajbari.gov.bd'),
(15, 3, 'Shariatpur', 'শরীয়তপুর', 0, 0, 'www.shariatpur.gov.bd'),
(16, 8, 'Sherpur', 'শেরপুর', 25.0204933, 90.0152966, 'www.sherpur.gov.bd'),
(17, 3, 'Tangail', 'টাঙ্গাইল', 0, 0, 'www.tangail.gov.bd'),
(18, 5, 'Bogura', 'বগুড়া', 24.8465228, 89.377755, 'www.bogra.gov.bd'),
(19, 5, 'Joypurhat', 'জয়পুরহাট', 0, 0, 'www.joypurhat.gov.bd'),
(20, 5, 'Naogaon', 'নওগাঁ', 0, 0, 'www.naogaon.gov.bd'),
(21, 5, 'Natore', 'নাটোর', 24.420556, 89.000282, 'www.natore.gov.bd'),
(22, 5, 'Nawabganj', 'নবাবগঞ্জ', 24.5965034, 88.2775122, 'www.chapainawabganj.gov.bd'),
(23, 5, 'Pabna', 'পাবনা', 23.998524, 89.233645, 'www.pabna.gov.bd'),
(24, 5, 'Rajshahi', 'রাজশাহী', 0, 0, 'www.rajshahi.gov.bd'),
(25, 5, 'Sirajgonj', 'সিরাজগঞ্জ', 24.4533978, 89.7006815, 'www.sirajganj.gov.bd'),
(26, 6, 'Dinajpur', 'দিনাজপুর', 25.6217061, 88.6354504, 'www.dinajpur.gov.bd'),
(27, 6, 'Gaibandha', 'গাইবান্ধা', 25.328751, 89.528088, 'www.gaibandha.gov.bd'),
(28, 6, 'Kurigram', 'কুড়িগ্রাম', 25.805445, 89.636174, 'www.kurigram.gov.bd'),
(29, 6, 'Lalmonirhat', 'লালমনিরহাট', 0, 0, 'www.lalmonirhat.gov.bd'),
(30, 6, 'Nilphamari', 'নীলফামারী', 25.931794, 88.856006, 'www.nilphamari.gov.bd'),
(31, 6, 'Panchagarh', 'পঞ্চগড়', 26.3411, 88.5541606, 'www.panchagarh.gov.bd'),
(32, 6, 'Rangpur', 'রংপুর', 25.7558096, 89.244462, 'www.rangpur.gov.bd'),
(33, 6, 'Thakurgaon', 'ঠাকুরগাঁও', 26.0336945, 88.4616834, 'www.thakurgaon.gov.bd'),
(34, 1, 'Barguna', 'বরগুনা', 0, 0, 'www.barguna.gov.bd'),
(35, 1, 'Barishal', 'বরিশাল', 0, 0, 'www.barisal.gov.bd'),
(36, 1, 'Bhola', 'ভোলা', 22.685923, 90.648179, 'www.bhola.gov.bd'),
(37, 1, 'Jhalokati', 'ঝালকাঠি', 0, 0, 'www.jhalakathi.gov.bd'),
(38, 1, 'Patuakhali', 'পটুয়াখালী', 22.3596316, 90.3298712, 'www.patuakhali.gov.bd'),
(39, 1, 'Pirojpur', 'পিরোজপুর', 0, 0, 'www.pirojpur.gov.bd'),
(40, 2, 'Bandarban', 'বান্দরবান', 22.1953275, 92.2183773, 'www.bandarban.gov.bd'),
(41, 2, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', 23.9570904, 91.1119286, 'www.brahmanbaria.gov.bd'),
(42, 2, 'Chandpur', 'চাঁদপুর', 23.2332585, 90.6712912, 'www.chandpur.gov.bd'),
(43, 2, 'Chattogram', 'চট্টগ্রাম', 22.335109, 91.834073, 'www.chittagong.gov.bd'),
(44, 2, 'Cumilla', 'কুমিল্লা', 23.4682747, 91.1788135, 'www.comilla.gov.bd'),
(45, 2, 'Cox''s Bazar', 'কক্স বাজার', 0, 0, 'www.coxsbazar.gov.bd'),
(46, 2, 'Feni', 'ফেনী', 23.023231, 91.3840844, 'www.feni.gov.bd'),
(47, 2, 'Khagrachari', 'খাগড়াছড়ি', 23.119285, 91.984663, 'www.khagrachhari.gov.bd'),
(48, 2, 'Lakshmipur', 'লক্ষ্মীপুর', 22.942477, 90.841184, 'www.lakshmipur.gov.bd'),
(49, 2, 'Noakhali', 'নোয়াখালী', 22.869563, 91.099398, 'www.noakhali.gov.bd'),
(50, 2, 'Rangamati', 'রাঙ্গামাটি', 0, 0, 'www.rangamati.gov.bd'),
(51, 7, 'Habiganj', 'হবিগঞ্জ', 24.374945, 91.41553, 'www.habiganj.gov.bd'),
(52, 7, 'Maulvibazar', 'মৌলভীবাজার', 24.482934, 91.777417, 'www.moulvibazar.gov.bd'),
(53, 7, 'Sunamganj', 'সুনামগঞ্জ', 25.0658042, 91.3950115, 'www.sunamganj.gov.bd'),
(54, 7, 'Sylhet', 'সিলেট', 24.8897956, 91.8697894, 'www.sylhet.gov.bd'),
(55, 4, 'Bagerhat', 'বাগেরহাট', 22.651568, 89.785938, 'www.bagerhat.gov.bd'),
(56, 4, 'Chuadanga', 'চুয়াডাঙ্গা', 23.6401961, 88.841841, 'www.chuadanga.gov.bd'),
(57, 4, 'Jashore', 'যশোর', 23.16643, 89.2081126, 'www.jessore.gov.bd'),
(58, 4, 'Jhenaidah', 'ঝিনাইদহ', 23.5448176, 89.1539213, 'www.jhenaidah.gov.bd'),
(59, 4, 'Khulna', 'খুলনা', 22.815774, 89.568679, 'www.khulna.gov.bd'),
(60, 4, 'Kushtia', 'কুষ্টিয়া', 23.901258, 89.120482, 'www.kushtia.gov.bd'),
(61, 4, 'Magura', 'মাগুরা', 23.487337, 89.419956, 'www.magura.gov.bd'),
(62, 4, 'Meherpur', 'মেহেরপুর', 23.762213, 88.631821, 'www.meherpur.gov.bd'),
(63, 4, 'Narail', 'নড়াইল', 23.172534, 89.512672, 'www.narail.gov.bd'),
(64, 4, 'Satkhira', 'সাতক্ষীরা', 0, 0, 'www.satkhira.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE IF NOT EXISTS `divisions` (
  `id` int(2) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `bn_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `bn_name`) VALUES
(1, 'Barishal', 'বরিশাল'),
(2, 'Chattogram', 'চট্টগ্রাম'),
(3, 'Dhaka', 'ঢাকা'),
(4, 'Khulna', 'খুলনা'),
(5, 'Rajshahi', 'রাজশাহী'),
(6, 'Rangpur', 'রংপুর'),
(7, 'Sylhet', 'সিলেট'),
(8, 'Mymensingh', 'ময়মনসিংহ');

-- --------------------------------------------------------

--
-- Table structure for table `renters`
--

CREATE TABLE IF NOT EXISTS `renters` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `renters`
--

INSERT INTO `renters` (`id`, `name`, `email`, `password`, `address`, `contact`) VALUES
(12, 'Akash Ahmed', 'akash@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Dhanmondi, Dhaka', '01701083326'),
(15, 'Jibon Nahar', 'jibon@gmail.com', '4ebe7c58bc215459085a6bb82be271c0', '', '01725698965'),
(16, 'abc', 'abc@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '', '01258963256');

-- --------------------------------------------------------

--
-- Table structure for table `residential`
--

CREATE TABLE IF NOT EXISTS `residential` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `slug` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `rent` int(10) NOT NULL,
  `category` varchar(30) NOT NULL,
  `size` int(10) NOT NULL,
  `rooms` varchar(30) NOT NULL,
  `washrooms` varchar(30) NOT NULL,
  `veranda` varchar(30) NOT NULL,
  `parking` varchar(30) NOT NULL,
  `lift` varchar(30) NOT NULL,
  `gas` varchar(30) NOT NULL,
  `floor` varchar(30) NOT NULL,
  `bills` varchar(30) NOT NULL,
  `smoking` varchar(30) NOT NULL,
  `bachelor` varchar(30) DEFAULT NULL,
  `time_period` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `image` varchar(30) DEFAULT NULL,
  `image1` varchar(30) DEFAULT NULL,
  `image2` varchar(30) DEFAULT NULL,
  `image3` varchar(30) DEFAULT NULL,
  `image4` varchar(30) DEFAULT NULL,
  `short_note` text NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residential`
--

INSERT INTO `residential` (`id`, `user_id`, `title`, `slug`, `city`, `area`, `address`, `rent`, `category`, `size`, `rooms`, `washrooms`, `veranda`, `parking`, `lift`, `gas`, `floor`, `bills`, `smoking`, `bachelor`, `time_period`, `contact`, `image`, `image1`, `image2`, `image3`, `image4`, `short_note`, `post_date`) VALUES
(1, 12, 'House available for rent', 'House-available-for-rent', 'Barishal', 'Barguna', 'Chadni Housing,Barisal,Barguna', 20000, 'Family', 3000, '4', '2', '2', 'Not Available', 'Not Available', 'Available', '5', 'Not Included', 'Not Allowed', 'Allowed Female Only', '1 month', 124569876, 'aa.jpg', 'ab.jpg', 'ac.jpg', 'ad.jpg', NULL, 'Contact us for more details', '2019-03-12 10:16:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commercial`
--
ALTER TABLE `commercial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division_id` (`division_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renters`
--
ALTER TABLE `renters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residential`
--
ALTER TABLE `residential`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commercial`
--
ALTER TABLE `commercial`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(2) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(2) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `renters`
--
ALTER TABLE `renters`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `residential`
--
ALTER TABLE `residential`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_ibfk_1` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
