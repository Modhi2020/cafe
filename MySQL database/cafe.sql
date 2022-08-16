-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 01:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--
CREATE DATABASE IF NOT EXISTS `cafe` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cafe`;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(8) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `user_id` int(8) DEFAULT NULL,
  `service_id` int(8) DEFAULT NULL,
  `price` int(8) DEFAULT NULL,
  `qty` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `date`, `user_id`, `service_id`, `price`, `qty`) VALUES
(8, '2022-08-16', 11, 2, 15, 1),
(9, '2022-08-16', 11, 1, 20, 1),
(10, '2022-08-16', 11, 3, 40, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(2) NOT NULL,
  `cat_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'مشروبات ساخنة'),
(2, 'مشروبات باردة'),
(3, 'مشروبات مثلجة');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(8) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `cat_id` int(5) DEFAULT NULL,
  `price` int(8) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `details`, `cat_id`, `price`, `image`) VALUES
(1, 'إسبريسو ريستريتو', 'تحضر بنصف كمية الماء المستخدم للإسبريسو وتعد أقوى وأصغر من الإسبريسو. وهي إسبريسو قليلة تقريبا 20 مل وتستخدم نفس الكمية من القهوة كما في الإسبريسو، ولكن حجم الماء الساخن هو النصف، حيث لا يحتاج سوى إلى كمية قليلة جدا من الماء، تمتاز قهوة الريستريتو بالطعم الحامض.', 3, 20, 'images/upload/espireso.jpg'),
(2, 'القهوة المحضرة بالتنقيط', 'ظلت نوع القهوة الوحيد المتاح في أمريكا لفترة طويلة جداً وتسمى أيضاً بالقهوة المفلترة (filtered coffee) وتعتمد جودة هذا النوع من القهوة على كمية الماء المستخدمة ونوع حبوب القهوة وطريقة طحنها وكميتها كذلك إناء التقطير المستخدم.', 1, 15, 'images/upload/drip2.jpg'),
(3, 'كابتشينو', 'يمكن القول إنه أكثر أنواع القهوة شهرة في أي مكان على وجه الأرض حيث تعتبر قهوة الكابتشينو قهوة سهلة الشرب بكمية محددة من الرغوة.', 1, 40, 'images/upload/الكابتشينو-في-البيت.jpg'),
(5, 'الأمريكانو', 'بالنسبة للأشخاص غير الخبيرين في القهوة، من السهل أن يخطؤوا بشأن قهوة أمريكانو في كونها قهوة سوداء عادية، لكن هذه القهوة البسيطة واللذيذة والمحبوبة هي أكثر من ذلك بكثير.', 1, 50, 'images/upload/قهوة-أمريكانو.jpg'),
(6, ' اللاتيه', ' اللاتيه تعتبر قهوة شهية ومعروفة تحظى بتقدير في جميع أنحاء العالم، ترسم برغوتها لوحات فنية. ومعنى لاتيه هو الحليب بالإيطالية، لذلك فاللاتيه هو مشروب حليبي ولكن مع رغوة أقل وقوام أكثر نعومة مقارنة بالكابتشينو', 2, 70, 'images/upload/خطوات-عمل-سبانش-لاتيه0-780x470.jpeg'),
(7, 'القهوة المثلجة ', 'إنها باردة ومنعشة ولذيذة تماماً. القهوة المثلّجة هي الرفيق المثاليّ في يومٍ حار، ولكن ما الذي يشاركها نكهتها،', 3, 60, 'images/upload/القهوة المثلجة.jpg'),
(8, 'القهوة العربية', 'تتمتع القهوة العربية بلون فاتح، يتم تحضيرها بدون سكر.\r\n\r\nوتقدم في فناجين صغيرة الحجم، وتقدم إلى جانبها حبات التمر التي تساعد على تعويض مذاق السكر.\r\n\r\nوتضيف إليها بلدان الخليج العربي الهيل أو الزعفران أو مزيج منهما.', 1, 80, 'images/upload/أضرار-القهوة-العربية.jpg'),
(9, 'الموكا', 'هو المشروب المفضل لعشاق القهوة الذين يحبون القهوة بمذاقها الحلو.\r\n\r\nتعتمد طريقة تحضير الموكا على القهوة المحمصة ذات اللون الغامق الممزوجة بملعقة كبيرة من الكاكاو أو الشوكولاتة.\r\n\r\nحيث نقوم بتذويبهم في الماء المغلي ثم نضيف الحليب الساخن. كما يمكنك اضافة الكريمة على سطح الموكا بعد الانتهاء.', 1, 90, 'images/upload/طريقة-الموكا-الباردة.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `phone` int(10) DEFAULT NULL,
  `user_password` varchar(30) DEFAULT NULL,
  `user_state` int(1) DEFAULT NULL,
  `user_type` int(2) DEFAULT NULL,
  `user_name` varchar(40) DEFAULT NULL,
  `user_email` varchar(30) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `phone`, `user_password`, `user_state`, `user_type`, `user_name`, `user_email`, `image`) VALUES
(11, 503200066, '123', 1, 3, 'ميار وائل الشنتف', 'mayar@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cat_id` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `un_user` (`phone`),
  ADD UNIQUE KEY `uq_phone` (`phone`),
  ADD KEY `fk_user_us_type` (`user_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `fk_cat_id` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
