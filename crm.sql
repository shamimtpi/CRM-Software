-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 09:51 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoverimg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billto_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billto_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billto_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_dutedate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_subtotal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_shipping` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `from_name`, `from_address`, `from_phone`, `from_email`, `billto_name`, `billto_address`, `billto_phone`, `invoice_date`, `invoice_dutedate`, `invoice_no`, `invoice_note`, `invoice_subtotal`, `invoice_discount`, `invoice_shipping`, `qty`, `total`, `signature`, `payment_status`, `created_at`, `updated_at`) VALUES
(29, 'codepopular', '383/A Katasur, Mohammodpur, Dhaka', '+8801794939992', 'codepopular@gmail.com', 'retretretret', 'dfdsfdsfdsf', '4354545', '06/12/2019', '06/14/2019', '18062019120906', 'dfgdfgfdgfdgfdgfdgfdgfdgfdgfdgfdg', '10.00', '0', '0', '2.00', '10.00', NULL, '0', '2019-06-18 06:09:43', '2019-06-18 09:44:32'),
(30, 'codepopular', '383/A Katasur, Mohammodpur, Dhaka', '+8801794939992', 'codepopular@gmail.com', 'retretretret', 'dfdsfdsfdsf', '4434324234', '06/13/2019', '06/06/2019', '18062019134731', 'sasdfsdfdsf', '49388225450.00', '0', '0', '9087070.00', '49388225450.00', NULL, '0', '2019-06-18 07:48:17', '2019-06-18 09:43:52'),
(31, 'codepopular', '383/A Katasur, Mohammodpur, Dhaka', '+8801794939992', 'codepopular@gmail.com', 'retretretret', 'dfdsfdsfdsf', '4354545', '06/12/2019', '06/13/2019', '18062019144814', 'dsdfsdfsfdsfsdfsdf', '2600.00', '0', '0', '11.00', '2600.00', NULL, '0', '2019-06-18 08:49:45', '2019-06-18 09:40:50');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_name`, `item_price`, `item_qty`, `invoice_id`, `item_total`, `created_at`, `updated_at`) VALUES
(42, 'bbbbnnn', '5', '2', '29', '10.00', '2019-06-18 06:09:43', '2019-06-18 09:44:32'),
(44, 'Hello', '5435', '4543535', '30', '24694112725.00', '2019-06-18 07:48:17', '2019-06-18 07:48:17'),
(45, 'dsfdsf', '5435', '4543535', '30', '24694112725.00', '2019-06-18 07:48:17', '2019-06-18 13:33:37'),
(46, 'This is first', '100', '1', '31', '100.00', '2019-06-18 08:49:45', '2019-06-18 08:49:45'),
(47, 'This is second', '120', '2', '31', '240.00', '2019-06-18 08:49:45', '2019-06-18 08:49:45'),
(48, 'This is third', '320', '3', '31', '960.00', '2019-06-18 08:49:45', '2019-06-18 08:49:45'),
(49, 'This is frour', '300', '4', '31', '1200.00', '2019-06-18 08:49:45', '2019-06-18 08:49:45'),
(50, 'This is first', '100', '1', '31', '100.00', '2019-06-18 08:49:45', '2019-06-18 09:40:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_05_22_083559_create_customers_table', 3),
(5, '2019_05_23_144204_create_user_roles_table', 4),
(6, '2014_10_12_000000_create_users_table', 5),
(11, '2019_06_14_185613_create_invoices_table', 6),
(12, '2019_06_15_100431_create_items_table', 6),
(13, '2019_06_19_065525_create_settings_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('codepopular@gmail.com', '$2y$10$Rjv1WxX7rX3k/ok1wKjdcutxx8hVJxOEfl2ALwlPYuZL9mbHrT0Xm', '2019-05-21 08:00:08');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `box_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bodycolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boxcolor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymentinfo` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `box_size`, `bodycolor`, `boxcolor`, `paymentinfo`, `created_at`, `updated_at`) VALUES
(1, '1300', '#008abb', '#0618f9', 'Payment Details:  <br>\r\nBank Name: Daj Bangla Bank  <br>\r\nAccount Name: Md.Shamim Hasan  <br>\r\nBrach Name: Thakurgaon  <br>\r\nSwift Code: DBBLBDDH  <br>\r\nAccount No: 263151106599', NULL, '2019-06-19 01:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `singature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `company`, `phone`, `username`, `role_id`, `email`, `email_verified_at`, `password`, `address`, `city`, `country`, `post`, `img`, `nid`, `singature`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shamim', NULL, NULL, NULL, '2', 'shamim@gmail.com', NULL, '$2y$10$2dubIfaK1m9QemRZ.GCV3e0FqPAxyOm0ZQJN.aeyxO.8gdd7krtTG', NULL, NULL, NULL, NULL, 'profile_photo_1560531266.jpg', NULL, NULL, NULL, '2019-06-14 04:28:38', '2019-06-14 10:54:26'),
(2, 'scoreboostersnyc', NULL, '+8801794939992', NULL, '2', 'info@scoreboostersnyc.com', NULL, '$2y$10$rVG//62i6GAbdvMFBTmwQO69LCeRlIT59m/Pxhw.iaDqrE7xlRarG', '383/A Katasur, Mohammodpur, Dhaka', NULL, NULL, NULL, 'profile_photo_1560523243.jpg', NULL, NULL, NULL, '2019-06-14 04:43:44', '2019-06-18 23:55:51'),
(4, 'new', NULL, '3453434324', NULL, '1', 'new@gmail.com', NULL, '$2y$10$p.7fKbWEGsozVLHZ1FtiSebA4LQ0EKsA0AzA8HwolkQ6gz1Bf1gZO', 'PO Box 16122 Collins Street West   Victoria 8007 Australia', 'Dhaka', 'Bangladesh', NULL, 'profile_photo_1560522483.jpg', 'nid_1560523010.jpg', 'singature_1560522820.jpg', NULL, '2019-06-14 04:58:51', '2019-06-14 08:39:15'),
(8, 'customer', NULL, NULL, NULL, '1', 'customer@gmail.com', NULL, '$2y$10$2O/XyUHcnpiOJ2N7Hl34neYMTAYo45CiMzsRuLP/ftb2KQPpArU82', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-14 09:02:41', '2019-06-14 09:02:41'),
(12, 'again@gamil.com', NULL, NULL, NULL, '3', 'again@gamil.com', NULL, '$2y$10$gYCnDpO.c3XEt/uoDOtBaeizFTUxPGbNsAVpyIrinGdIWrQjHcY6.', NULL, NULL, 'Israel', NULL, 'profile_photo_1560534862.jpg', NULL, NULL, NULL, '2019-06-14 11:51:57', '2019-06-16 02:52:48'),
(13, 'Md. Shamim Hasan', 'Digital Ocean', '+88200784555', NULL, '3', 'md.shamimtpi@gmail.com', NULL, '$2y$10$o/Xcj4y8RYUuK6wBdo2EeeCO0ceZdHdSiFJH3W/xrHaiFiNXdvkVW', NULL, NULL, 'Zambia', NULL, NULL, NULL, NULL, NULL, '2019-06-16 00:56:09', '2019-06-16 02:52:12'),
(14, 'Hello How are you', 'test', NULL, NULL, '3', 'test@gmail.com', NULL, '$2y$10$7g0BzY009dhNC7wCzLYSIODhE65/kqMaVLlIcHmsLJyeCF.mANGZG', NULL, 'Dhaka', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, '2019-06-16 02:53:30', '2019-06-16 02:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', NULL, NULL),
(2, 'User', NULL, NULL),
(3, 'Customer', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
