-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2023 at 11:50 AM
-- Server version: 8.0.34
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zrklekxc_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `meta_desc` text COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `desc`, `image`, `tags`, `meta_title`, `meta_keyword`, `meta_desc`, `slug`, `created_at`) VALUES
(1, 'The Construction Business', '<p>Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestlibos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentue ipsum Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software.</p>\r\n\r\n<p>Farming dolor sit amet, consectetur adipiscing elit. Cras sollicitin, tellus vitae condimem egestlibers dolosr auctor tellus, eu consectetur neque elit quinunc. Cras elemenm pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum Quisque thsr augue ipsum, vehicula tellus maximus.</p>', '1679668450.jpg', 'Health, Agriculture', 'The Construction Business', 'The Construction Business', '<p>Farming Has A Banking Problem Crop</p>', 'the-construction-business', '2023-03-10 19:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int NOT NULL,
  `imgdata` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `imgdata`, `created_at`) VALUES
(2, '8.jpg', '2023-03-09 21:34:43'),
(3, '7.jpg', '2023-03-09 21:34:43'),
(4, '6.jpg', '2023-03-09 21:34:43'),
(5, '5.jpg', '2023-03-09 21:34:43'),
(6, '4.jpg', '2023-03-09 21:34:43'),
(7, '3 (1).jpg', '2023-03-09 21:34:43'),
(8, '2 (2).jpg', '2023-03-09 21:34:43'),
(9, '1 (1).jpg', '2023-03-09 21:34:43');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `phone` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone1` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email1` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `maplink` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `admin` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `fb` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `insta` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `phone`, `address`, `email`, `phone1`, `email1`, `maplink`, `admin`, `fb`, `insta`, `twitter`, `linkedin`, `map`, `logo`, `created_at`) VALUES
(1, '(123) 456-789', '1234 Street Name, City Name, United States', 'info@growthvault.com', '(123) 456-789', 'info@growthvault.com', '#', 'info@growthvault.com', 'https://www.facebook.com/', '#', '#', '#', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.5466566553987!2d77.31316931503513!3d28.583372982437268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf3b04325d403%3A0xd7c9c4a360456c75!2sTechonika%20-%20Top%20Web%20Designing%20Company%20in%20Noida!5e0!3m2!1sen!2sin!4v1651934886115!5m2!1sen!2sin\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '1679407388.png', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`) VALUES
(2, 'Rohan Verma', 'admin@gmail.com', '7011232425', 'Test', 'Test', '2022-12-01 05:07:16'),
(3, 'testing', 'sdsakjdfd@gmail.com', '0112345678', '21212', 'hi', '2022-12-01 05:11:36'),
(4, 'Robert Peary', 'pearyrobert89@gmail.com', '8332906999', 'Test', 'Test', '2023-01-13 22:06:53'),
(5, 'Robert Peary', 'pearyrobert89@gmail.com', '8332906999', 'Test', 'Test', '2023-01-13 22:08:06'),
(6, 'rohan verma', 'Rohanverma25dec@gmail.com', '+917011243534', 'Test', 'Test', '2023-03-10 20:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE `interview` (
  `id` int NOT NULL,
  `todo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_general_ci,
  `meta_title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `meta_desc` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `desc`, `meta_title`, `slug`, `meta_keyword`, `meta_desc`, `created_at`) VALUES
(4, 'Home', '<section class=\"features-area gray-bg pt-80 pb-90\">\r\n<div class=\"container\">\r\n<div class=\"row justify-content-center\">\r\n<div class=\"col-xl-6 col-lg-8\">\r\n<div class=\"section-title text-center mb-70\">\r\n<h6 class=\"sub-title\">WHAT WE DO</h6>\r\n\r\n<h2 class=\"title\"><span>Welcome to</span> Organic Farm</h2>\r\n\r\n<p>Eco- friendly aquatourism facilities are provided in the ambience of backwaters.Boating, angling and rowing facilities.Ethnic food with fresh farm reared fishes served in bamboo restaurant. A golden opportunity to enjoy the picturesque beauty of nature and the tranquility of backwaters.</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row justify-content-center\">\r\n<div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-8\">\r\n<div class=\"features-item text-center mb-30\">\r\n<div class=\"features-thumb\"><img alt=\"\" src=\"frontend/img/images/features_img01.png\" />\r\n<div class=\"features-overlay\"><i class=\"flaticon-cauliflower\"></i></div>\r\n</div>\r\n\r\n<div class=\"features-content\">\r\n<h4><a href=\"#\">BOATING</a></h4>\r\n\r\n<p>Boating is the leisurely activity of travelling by boat, or the recreational use of a boat whether powerboats, sailboats.</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-8\">\r\n<div class=\"features-item text-center mb-30\">\r\n<div class=\"features-thumb\"><img alt=\"\" src=\"frontend/img/images/features_img02.png\" />\r\n<div class=\"features-overlay\"><i class=\"flaticon-cow-head\"></i></div>\r\n</div>\r\n\r\n<div class=\"features-content\">\r\n<h4><a href=\"#\">BONFIRE</a></h4>\r\n\r\n<p>A bonfire is a large but controlled outdoor fire, used either for informal disposal of burnable waste material or as part of a celebration.</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-8\">\r\n<div class=\"features-item text-center mb-30\">\r\n<div class=\"features-thumb\"><img alt=\"\" src=\"frontend/img/images/features_img03.png\" />\r\n<div class=\"features-overlay\"><i class=\"flaticon-rooster\"></i></div>\r\n</div>\r\n\r\n<div class=\"features-content\">\r\n<h4><a href=\"#\">SPORT ACTIVITES</a></h4>\r\n\r\n<p>We also offer different sports activities at our camp so that you have full-on fun and have an unforgettable experience at our camp</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-8\">\r\n<div class=\"features-item text-center mb-30\">\r\n<div class=\"features-thumb\"><img alt=\"\" src=\"frontend/img/images/features_img04.png\" />\r\n<div class=\"features-overlay\"><i class=\"flaticon-heavy-vehicle\"></i></div>\r\n</div>\r\n\r\n<div class=\"features-content\">\r\n<h4><a href=\"#\">TENTING</a></h4>\r\n\r\n<p>Whether you&rsquo;re looking for a rugged, outdoorsy adventure or an indulgent, romantic vacation, our tented camps have you covered.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', 'Home', 'home', 'Home', '<p>Home</p>', '2022-11-09 15:31:04'),
(5, 'About', '<section class=\"faq-area faq-bg pt-120 pb-120\" data-background=\"frontend/img/bg/faq_bg02.jpg\">\n                <div class=\"container\">\n                    <div class=\"row\">\n                        <div class=\"col-lg-6\">\n                            <div class=\"faq-image\">\n                                <img src=\"frontend/img/images/faq_img.jpg\" alt=\"\">\n                            </div>\n                        </div>\n                        <div class=\"col-lg-6\">\n                            <div class=\"faq-wrap faq-style-two\">\n                                <div class=\"section-title mb-50\">\n                                    <h6 class=\"sub-title\">About Masuri Jheel</h6>\n                                    <h2 class=\"title\"><span>WE ARE </span>MASURI JHEEL</h2>\n                                </div>\n                                <p>Eco- friendly aquatourism facilities are provided in the ambience of backwaters.Boating, angling and rowing facilities.Ethnic food with fresh farm reared fishes served in bamboo restaurant. A golden opportunity to enjoy the picturesque beauty of nature and the tranquility of backwaters.                                    </p>\n\n                                <!-- <div id=\"accordion\">\n                                    <h3>What is farming in agriculture?</h3>\n                                        <div class=\"accordion-content\">\n                                            <p>Farming is growing crops or keeping animals by people for food and raw materials. Farming is a part of agriculture.\n                                            People probably started agriculture</p>\n                                        </div>\n                                    <h3>What is difference between farming and agriculture?</h3>\n                                    <div class=\"accordion-content\">\n                                        <p>Farming is growing crops or keeping animals by people for food and raw materials. Farming is a part of agriculture.\n                                        People probably started agriculture</p>\n                                    </div>\n                                    <h3>What is importance of farming?</h3>\n                                    <div class=\"accordion-content\">\n                                        <p>Farming is growing crops or keeping animals by people for food and raw materials. Farming is a part of agriculture.\n                                        People probably started agriculture</p>\n                                    </div>\n                                    <h3>What is agriculture and its importance?</h3>\n                                    <div class=\"accordion-content\">\n                                        <p>Farming is growing crops or keeping animals by people for food and raw materials. Farming is a part of agriculture.\n                                        People probably started agriculture</p>\n                                    </div>\n                                </div> -->\n                            </div>\n                        </div>\n                    </div>\n                </div>\n            </section>', 'About', 'about', 'About', 'About', '2022-11-09 16:08:53'),
(6, 'Package', '', 'Package', 'package', 'Package', 'Package', '2022-11-09 16:31:15'),
(7, 'Gallery', '', 'Gallery', 'gallery', 'Gallery', 'Gallery', '2022-11-10 13:51:41'),
(8, 'Contact', '<p>.</p>', 'Contact', 'contact', 'Contact', '<p>Contact</p>', '2022-11-10 14:47:54'),
(14, 'Blogs', NULL, 'Blogs', 'blogs', 'Blogs', '<p>Blogs</p>', '2023-03-10 20:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `technology` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `url`, `technology`, `image`, `category`, `created_at`) VALUES
(1, 'Test', 'Test', 'Test', '1679672059.jpg', 'Websites', '2023-03-24 21:04:19');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`title`, `image`, `price`, `created_at`, `id`) VALUES
('BOATING', '1678377271.jpg', 2500, '2023-03-09 21:24:31', 1),
('BOATING', '1678377271.jpg', 2500, '2023-03-09 21:24:31', 2),
('BOATING', '1678377271.jpg', 2500, '2023-03-09 21:24:31', 3),
('BOATING', '1678377271.jpg', 2500, '2023-03-09 21:24:31', 4),
('BOATING', '1678377271.jpg', 2500, '2023-03-09 21:24:31', 5);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `desc` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `desc`, `image`, `created_at`) VALUES
(14, 'COMPLETE E-BUSINESS SOLUTIONS', '<p>Building Brands with Technology, Design and Creativity.<br>&nbsp;</p>', '1679407826.png', '2023-03-09 19:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `comment` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `comment`, `image`, `created_at`) VALUES
(1, 'John Smith', 'Okler', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur vel eu lacus. Morbi.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur vel eu lacus. Morbi.</p>', '1679666375.jpg', '2023-03-09 20:48:52');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `owner_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` bigint NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `constitution` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `industry` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pan` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `number_belongs` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mobile_holder_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pan_mobile_holder` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email_belongs` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email_holder_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pan_email_holder` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pan_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `marital` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `experience` int DEFAULT NULL,
  `annual_income` int DEFAULT NULL,
  `acc_no` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ifsc` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `micr` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bank` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `branch` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `branch_address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bank_city` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sign` longtext COLLATE utf8mb4_general_ci,
  `otp` int DEFAULT NULL,
  `verified` int NOT NULL DEFAULT '0',
  `business_setup` int NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `business_name`, `owner_name`, `mobile`, `email`, `state`, `city`, `constitution`, `industry`, `duration`, `pan`, `date_of_birth`, `number_belongs`, `mobile_holder_name`, `pan_mobile_holder`, `email_belongs`, `email_holder_name`, `pan_email_holder`, `pan_image`, `user_image`, `father_name`, `marital`, `occupation`, `experience`, `annual_income`, `acc_no`, `ifsc`, `micr`, `bank`, `branch`, `branch_address`, `bank_city`, `sign`, `otp`, `verified`, `business_setup`, `created_at`) VALUES
(12, 'IBG Reality', 'Vikram', 9822549300, 'bbuildcon2018@gmail.com', 'Andhra Pradesh', 'Delhi', NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', 0, 0, '0', NULL, NULL, NULL, NULL, NULL, NULL, '', 714778, 0, 0, '2023-03-28 13:21:20'),
(18, 'KLS', 'Kunal', 8800989927, 'Kunal.shishodia@sntinfotech.com', 'Bihar', 'Andhra Pradesh', NULL, 'Manufacturer', 'monthly', 'gffghfjh', '2002-10-22', 'self', '234345345', '23423423423', 'self', '234234', 'rr234', '1680240999.jpg', '', NULL, NULL, NULL, NULL, NULL, '2332344', 'BARB0AANTIY', '3423423', NULL, 'Bank of Maharashtra', 'Delhi', 'noida', '', 100749, 1, 1, '2023-03-31 05:26:31'),
(20, 'Test', 'Test', 7011243534, 'rohan.verma@sntinfotech.com', 'Andhra Pradesh', 'Hyderabad', 'Professional (Self Employed Individual)', 'Agriculture And Agri Allied', 'monthly', 'ABCDES34345', '2023-03-07', 'self', 'Test', '53453453453', 'self', 'Test', '43432423', '1680250970.jpg', '', 'Test', 'married', 'test', 12, 23412334, '6465465465464', '65765765', '4543543543543', NULL, 'Bank of Maharashtra', 'Delhi', '2323', 'data:image/png;base64,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', 591373, 1, 1, '2023-03-31 08:21:05'),
(21, 'World Wide Wit', 'SHeetal', 9921591119, 'sheetal@worldwidewit.in', 'Andhra Pradesh', 'Bangalore', 'Proprietorship', 'Service Provider', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 952042, 1, 1, '2023-04-18 07:57:39'),
(22, 'Ashish Enterprises', 'ashish', 8130170250, 'ashisg301@gmail.com', 'Arunachal Pradesh', 'Bangalore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 986809, 0, 0, '2023-04-27 04:40:01'),
(23, 'Ashish ss', 'ashish', 8130170200, 'ashisg302@gmail.com', 'Andhra Pradesh', 'Bangalore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 585553, 1, 1, '2023-05-04 07:00:06'),
(24, 'IBG INFOTECH PVT LTD', 'B B', 7391012316, 'projectmanager@ibginfotech.com', 'Andhra Pradesh', 'Bangalore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 791058, 1, 1, '2023-05-13 05:29:59'),
(25, 'infinity production', 'shraddha', 8888039292, 'shraddhamohitegraphics@gmail.com', 'Andhra Pradesh', 'Andhra Pradesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 678786, 1, 1, '2023-05-16 09:08:55'),
(26, 'gh', 'ghhg', 6398679515, 'helpdesk@siaadvertisment.com', 'Andhra Pradesh', 'Bangalore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 574361, 1, 0, '2023-05-18 10:34:59'),
(27, 'IBG Reality', 'Vikram', 7391012316, 'vikramrajacharya@gmail.com', 'Andhra Pradesh', 'Andhra Pradesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 785025, 1, 1, '2023-05-20 06:59:20'),
(28, 'gh', 'ghhg', 6398679515, 'admin@gmail.com', 'Andhra Pradesh', 'Bangalore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 478906, 0, 0, '2023-05-24 12:20:39'),
(29, 'Dr. Anupam Jaiswal', 'Dr. Jaiswal', 7387039191, 'dr.anshkjaiswal@gmail.com', 'Andhra Pradesh', 'Bangalore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 659421, 0, 0, '2023-05-24 12:31:16'),
(30, 'gh', 'ghhg', 6398679515, 'sharma.ashish@sntinfotech.com', 'Andhra Pradesh', 'Bangalore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 272463, 0, 0, '2023-05-25 06:28:21'),
(31, 'gh', 'ghhg', 6398679515, 'ashishs.edunext@gmail.com', 'Andhra Pradesh', 'Bangalore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 264149, 0, 0, '2023-05-25 06:28:43'),
(32, 'Classic Garden Shop', 'Sunny Khatate', 9822487172, 'sunnykhatate11@gmail.com', 'Andhra Pradesh', 'Bangalore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 978513, 1, 1, '2023-06-06 05:36:46'),
(33, 'Monika', 'hkghk', 9998887675, 'mnkgupta85@gmail.com', 'Andhra Pradesh', 'Delhi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 979629, 0, 0, '2023-06-14 09:21:14'),
(34, 'ibg reality', 'Abiraj', 9330856363, 'ibgfincon@gmail.com', 'Andhra Pradesh', 'Hyderabad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 831877, 1, 1, '2023-06-14 10:06:20'),
(35, 'ibg reality', 'Abiraj', 8265922332, 'monikadmdigital@gmail.com', 'Andhra Pradesh', 'Bangalore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 421943, 1, 0, '2023-06-14 11:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2022-10-10 07:45:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interview`
--
ALTER TABLE `interview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `interview`
--
ALTER TABLE `interview`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;