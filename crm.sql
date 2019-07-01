-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2019 at 07:37 PM
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
(31, 'customer', NULL, NULL, 'customer@gmail.com', 'retretretret', 'dfdsfdsfdsf', '4354545', '06/12/2019', '06/13/2019', '18062019144814', 'dsdfsdfsfdsfsdfsdf', '2835.00', '0', '0', '11.00', '2835.00', NULL, '0', '2019-06-18 08:49:45', '2019-06-20 12:07:14'),
(32, 'customer', NULL, NULL, 'customer@gmail.com', 'Akash', 'Dhaka', '1341511', '06/21/2019', '06/22/2019', '20062019183609', 'Invoice details.....', '200.00', '0', '0', '2.00', '200.00', NULL, '0', '2019-06-20 12:37:12', '2019-06-21 02:45:57'),
(33, 'customer', NULL, NULL, 'customer@gmail.com', 'Shamim Hasan', 'Shamim@gmail.com', '4354545', '06/12/2019', '06/19/2019', '21062019092445', 'This is invoice', '27175.00', '0', '0', '5.00', '27175.00', NULL, '0', '2019-06-21 03:25:23', '2019-06-21 03:25:23'),
(34, 'customer', NULL, NULL, 'customer@gmail.com', 'Khaled Rahman', 'Khaled@gmail.com', '2332434234324', '06/12/2019', '06/27/2019', '21062019092524', 'Thi is khaled invoice', '16305.00', '0', '0', '3.00', '16305.00', NULL, '0', '2019-06-21 03:26:16', '2019-06-21 03:26:16');

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
(47, 'This is second...', '125', '3', '31', '375.00', '2019-06-18 08:49:45', '2019-06-20 12:07:14'),
(48, 'This is third', '320', '3', '31', '960.00', '2019-06-18 08:49:45', '2019-06-20 12:07:14'),
(49, 'This is four', '350', '4', '31', '1400.00', '2019-06-18 08:49:45', '2019-06-20 12:07:14'),
(50, 'This is first', '100', '1', '31', '100.00', '2019-06-18 08:49:45', '2019-06-20 12:07:14'),
(51, 'Mobile1', '100', '1', '32', '100.00', '2019-06-20 12:37:12', '2019-06-21 02:45:57'),
(52, 'Television1', '100', '1', '32', '100.00', '2019-06-20 12:37:12', '2019-06-21 02:45:57'),
(53, 'Hello', '5435', '5', '33', '27175.00', '2019-06-21 03:25:23', '2019-06-21 03:25:23'),
(54, 'Hello', '5435', '3', '34', '16305.00', '2019-06-21 03:26:17', '2019-06-21 03:26:17');

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
(11, '2019_06_14_185613_create_invoices_table', 6),
(12, '2019_06_15_100431_create_items_table', 6),
(13, '2019_06_19_065525_create_settings_table', 7),
(15, '2019_05_23_144204_create_user_roles_table', 9),
(18, '2014_10_12_000000_create_users_table', 10);

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
(1, '1300', '#aba5fa', '#004080', 'Payment Details:  <br>\r\nBank Name: Daj Bangla Bank  <br>\r\nAccount Name: Md.Shamim Hasan  <br>\r\nBrach Name: Thakurgaon  <br>\r\nSwift Code: DBBLBDDH  <br>\r\nAccount No: 263151106599', NULL, '2019-06-21 03:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refered_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci,
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

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `refered_by`, `username`, `role_id`, `email_verified_at`, `password`, `address`, `city`, `status`, `note`, `country`, `post`, `img`, `nid`, `singature`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'new', NULL, 'codepopular@gmail.com', NULL, NULL, '2', NULL, '$2y$10$8bMsVVp/h4JkfHvx8BqP2.YOKAqKpXMURAraBitTTZlJ.pLEy98E.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-21 08:45:19', '2019-06-21 08:45:19'),
(2, 'Shamm Hasan', '01794939992', 'md.shamimtpi@gmail.com', 'Hasan', NULL, '3', NULL, '$2y$10$cptWuo0lTgpvGL54V9TYB.mvbWm0szJIf0GmMrM.3U2Vm.TiT9AZa', 'Dhaka, Bangladesh', 'Dhaka', 'Lead', 'Write your assignment using your map or plan to guide you.  As you write, you may well get new ideas or think about ideas in slightly different ways.  This is fine, but check back to your map or plan to evaluate whether that idea fits well into the plan or the paragraph that you are writing at the time. Consider:', NULL, '5140', NULL, NULL, NULL, NULL, '2019-06-21 08:49:13', '2019-06-21 09:04:37'),
(3, 'scoreboostersnyc', NULL, 'info@scoreboostersnyc.com', NULL, NULL, '1', NULL, '$2y$10$UfPUu9j.uQnJj.8zw02DdeWRhfqfDLm62t4JNHBWCZ9pRjdb1kQee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-21 09:09:34', '2019-06-21 09:09:34');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
