-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 06:43 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hireme`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Hair Saloon', NULL, 1, 0, '2020-11-10 13:35:15', '2020-11-10 13:35:15'),
(2, 'Hait Cutting', NULL, 1, 0, '2020-11-19 08:58:35', '2020-11-19 08:58:35'),
(3, 'Spa', 1, 1, 0, '2020-11-19 08:58:35', '2020-11-19 08:58:35'),
(4, 'Massage', 1, 1, 0, '2020-11-19 08:58:35', '2020-11-19 08:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `cms_pages`
--

CREATE TABLE `cms_pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_pages`
--

INSERT INTO `cms_pages` (`id`, `title`, `slug`, `content`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Terms and Conditions', 'terms-conditions', '<p><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry?</strong></p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>\r\n\r\n<p><strong>Lorem Ipsum is simply dummy text of the printing ?</strong></p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p><strong>Lorem Ipsum is simply dummy text of the printing and typesetting?</strong></p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39;</p>\r\n\r\n<p><strong>Lorem Ipsum is simply dummy text of the printing ?</strong></p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 1, 0, '2019-06-19 01:51:23', '2020-04-28 01:58:05'),
(2, 'Privacy Policy', 'privacy-policy', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 1, 0, '2019-06-19 01:52:45', '2019-06-19 01:52:45'),
(7, 'Contact US', 'contact-us', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 1, 0, '2019-06-23 20:28:26', '2019-06-23 20:28:26'),
(11, 'Careers', 'careers', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 1, 0, '2019-06-19 01:52:45', '2019-06-19 01:52:45'),
(13, 'Accessibility', 'accessibility', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 1, 0, '2019-06-19 01:52:45', '2020-11-10 11:33:19');

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `title`, `subject`, `slug`, `content`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Default Template', 'Subject', 'default', '<p>{message}</p>', 1, 0, '2019-06-14 09:05:35', '2020-05-31 14:49:42'),
(2, 'Welcome Mail', 'Welcome Mail', 'verify-email', '<p> Congratulations <strong>{username},</strong></p>\r\n\r\n<p>Welcome to Cloud Polyclinic. Thanks for registering with us! Kindly click on the following link to verify your email:</p>\r\n\r\n<h1><a href=\"{link}\" target=\"_blank\">Link</a></h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks &amp; Regards</p>\r\n\r\n<p><strong>Admin</strong></p>', 1, 0, '2019-06-14 09:24:47', '2019-09-27 00:33:03'),
(4, 'User Register By Admin', 'User Registration', 'user-register-by-admin', '<p>Hello <strong>{username},</strong></p>\r\n\r\n<p>To verify your email please use OTP given below</p>\r\n\r\n<p>{otp}</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks &amp; Regards</p>\r\n\r\n<p><strong>Admin</strong></p>', 1, 0, '2019-06-21 03:29:21', '2019-09-27 00:32:58'),
(7, 'Admin New User Registration', 'New User Registration', 'admin-new-user-registration', '<p>Hello <strong>{username},</strong></p>\r\n\r\n<p>Your email has been registered as <strong>{role}</strong> with us.</p>\r\n\r\n<p>Please login to below url with given credentials:</p>\r\n\r\n<p>Url : <a href=\"{url}\">{url}</a></p>\r\n\r\n<p>Email: {email}</p>\r\n\r\n<p>Password: {password}</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks &amp; Regards</p>\r\n\r\n<p><strong>Admin</strong></p>', 1, 0, '2019-06-25 22:40:30', '2019-09-27 00:32:53'),
(8, 'New User Registration', 'User Registration', 'new-user-registration', '<p>Congratulations <strong>{username},</strong></p>\r\n\r\n<p>Welcome to Cloud Polyclinic. Thanks for registering with us! Kindly click on the following link to verify your email:</p>\r\n\r\n<p>{link}</p>\r\n\r\n<p>Thanks &amp; Regards</p>\r\n\r\n<p><strong>Cloud Polyclinic Team</strong></p>', 1, 0, '2019-07-12 01:42:37', '2020-07-17 04:58:05'),
(16, 'Account Approved by admin', 'Account Approved', 'approve-doctor-profile', '<p>Hello <strong>{username},</strong></p>\r\n\r\n<p>Based on the information provided by you, your profile has been approved by the admin and you can now set your schedule to start getting consultation request from thousands of patients registered on Cloud Polyclinic. Log in to your profile to set your schedule now.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks &amp; Regards</p>\r\n\r\n<p><strong>Admin</strong></p>', 1, 0, '2019-08-26 22:21:52', '2019-09-27 00:32:38'),
(22, 'Admin Enquiry Reply', 'Next Door Kitchen - Enquiry Reply', 'admin-enquiry-reply', '<p>Hello <strong>{user_name},</strong></p>\r\n\r\n<p>{email_content}</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks &amp; Regards</p>\r\n\r\n<p><strong>Admin</strong></p>', 1, 0, '2019-09-04 04:00:44', '2019-09-27 00:32:33'),
(23, 'Enquiry Form Submit Confirmation', 'Contact Us Confirmation Mail', 'enquiry-form-submit-confirmation', '<p>Hello <strong>{user_name},</strong></p>\r\n\r\n<p>Your enquiry has been received and will be processed shortly.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks &amp; Regards</p>\r\n\r\n<p><strong>Admin</strong></p>', 1, 0, '2019-09-18 00:17:05', '2019-09-27 00:32:29'),
(24, 'Support Enquiry Form Submit Confirmation', 'Contact Us Confirmation Mail', 'support-enquiry-form-submit-confirmation', '<p>Hello <strong>{user_name},</strong></p>\r\n\r\n<p>Your enquiry has been received and will be processed shortly.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks &amp; Regards</p>\r\n\r\n<p><strong>Admin</strong></p>', 1, 0, '2019-09-19 00:32:39', '2019-09-27 00:32:20'),
(25, 'Admin Support Enquiry Reply', 'Support Enquiry Reply', 'admin-support-enquiry-reply', '<p>Hello <strong>{user_name},</strong></p>\r\n\r\n<p>{email_content}</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks &amp; Regards</p>\r\n\r\n<p><strong>Admin</strong></p>', 1, 0, '2019-09-19 00:33:16', '2020-05-31 14:43:35'),
(26, 'User Forgot Password', 'Forgot Password', 'forget-password', '<p>Hello <strong>{username}&nbsp;</strong>!&nbsp;</p>\r\n\r\n<p>We have received your password change request. Kindly click on the link below to change your password:</p>\r\n\r\n<h1><a href=\"{link}\" target=\"_blank\">Link</a></h1>\r\n<p>&nbsp;</p>\r\n<p>Thanks &amp; Regards</p>\r\n\r\n<p><strong>Admin</strong></p>', 1, 0, NULL, '2020-07-17 16:37:10'),
(27, 'New Meeting Doctor', 'New Meeting Scheduled', 'new-meeting-doctor', '<p>Hello <strong>{username},</strong></p>\r\n\r\n<p>Congratulations. You have a meeting request with {meeitng_with} on {date} at {time}</p>\r\n\r\n<h1><a href=\"{link}\" target=\"_blank\">Link</a></h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks &amp; Regards</p>\r\n\r\n<p><strong>Admin</strong></p>', 1, 0, '2019-06-25 22:40:30', '2019-09-27 00:32:53'),
(28, 'New Meeting Patient', 'New Meeting Scheduled', 'new-meeting-patient', '<p>Hello <strong>{username},</strong></p>\r\n\r\n<p>You have successfully scheduled a meeting with {meeitng_with} on {date} at {time}</p>\r\n\r\n<h1><a href=\"{link}\" target=\"_blank\">Link</a></h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks &amp; Regards</p>\r\n\r\n<p><strong>Admin</strong></p>', 1, 0, '2019-06-25 22:40:30', '2019-09-27 00:32:53'),
(29, 'New Meeting Admin', 'New Meeting Scheduled', 'new-meeting-admin', '<p>Hello <strong>Admin,</strong></p>\r\n\r\n<p>A meeting has been successfully scheduled between {patien_name} with doctor : {doctor_name} on {date} at {time}</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks &amp; Regards</p>\r\n\r\n<p><strong>Admin</strong></p>', 1, 0, '2019-06-25 22:40:30', '2019-09-27 00:32:53'),
(30, 'Admin Forgot Password', 'Forgot Password', 'admin-forget-password', '<p>Hello <strong>{username}&nbsp;</strong>!&nbsp;</p>\r\n\r\n<p>We have received your password change request. Kindly click on the link below to change your password:</p>\r\n\r\n<h1><a href=\"{link}\" target=\"_blank\">Link</a></h1>\r\n<p>&nbsp;</p>\r\n<p>Thanks &amp; Regards</p>\r\n\r\n<p><strong>Admin</strong></p>', 1, 0, NULL, '2020-07-17 16:37:10');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `freelance_profiles`
--

CREATE TABLE `freelance_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `location_preference` enum('client_travel_to_me','travel_to_client') NOT NULL,
  `range_in_km` varchar(250) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `lat` varchar(250) DEFAULT NULL,
  `lng` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `category` varchar(250) DEFAULT NULL,
  `sub_category` text DEFAULT NULL,
  `exp` varchar(250) DEFAULT NULL,
  `rate` varchar(250) DEFAULT NULL,
  `tagline` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `fb_acc` varchar(250) DEFAULT NULL,
  `twitter_acc` varchar(250) DEFAULT NULL,
  `insta_acc` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freelance_profiles`
--

INSERT INTO `freelance_profiles` (`id`, `user_id`, `location_preference`, `range_in_km`, `location`, `lat`, `lng`, `phone`, `email`, `category`, `sub_category`, `exp`, `rate`, `tagline`, `description`, `fb_acc`, `twitter_acc`, `insta_acc`, `created_at`, `updated_at`) VALUES
(2, 2, 'travel_to_client', '20', NULL, '-74.405663', '40.058323', '7014594477', 'atul@getnada.com', '1', '3', '10+', '25', 'I am an expert', 'I am an expert', 'http://facebook.com/johndoe', NULL, NULL, '2020-12-20 02:45:16', '2020-12-20 02:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `global_settings`
--

CREATE TABLE `global_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `options` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `category` enum('G','PP','N','S') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'G' COMMENT 'G:global N:Notification_settings S:Social_settings PP:Paypal',
  `required` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `global_settings`
--

INSERT INTO `global_settings` (`id`, `label`, `slug`, `value`, `options`, `type`, `category`, `required`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Site Title', 'site-title', 'HireMe25', NULL, 'text', 'G', '1', 1, 0, '2019-06-18 05:22:32', '2020-11-09 06:38:23'),
(2, 'Admin Receive Email', 'admin-receive-email', 'admin@hireme24.com', NULL, 'email', 'G', '1', 1, 0, '2019-06-18 08:22:49', '2020-11-08 06:10:00'),
(3, 'Contact Number', 'contact-number', '7014594477', NULL, 'tel', 'G', '1', 1, 0, '2019-06-19 05:56:13', '2020-11-08 06:10:12'),
(4, 'Address', 'address', '727 Meadow Drive,\nBillings, MT Montana 59101', NULL, 'textarea', 'G', '1', 1, 0, '2019-06-19 05:56:13', '2020-11-08 06:14:14'),
(8, 'User Registration', 'user-registration', 'true', NULL, 'checkbox', 'N', '0', 1, 0, '2019-06-24 04:23:05', '2019-06-23 22:54:34'),
(9, 'Copyright Text', 'copyright-text', '© copyright 2020 all rights reserved', NULL, 'text', 'G', '1', 1, 0, '2019-07-09 07:03:34', '2020-05-30 05:23:04'),
(10, 'Facebook', 'facebook', 'http://facebook.com/', NULL, 'url', 'S', '1', 1, 0, '2019-07-17 07:51:40', '2020-11-08 06:10:23'),
(11, 'Twitter', 'twitter', 'http://twitter.com/', NULL, 'url', 'S', '1', 1, 0, '2019-07-17 07:51:40', '2020-11-08 06:10:29'),
(12, 'Instagram', 'instagram', 'http://instagram.com/', NULL, 'url', 'S', '1', 1, 0, '2019-07-17 07:51:40', '2020-11-08 06:10:35'),
(13, 'Youtube', 'youtube', 'https://youtu.be/', NULL, 'url', 'S', '1', 1, 0, '2019-07-17 07:51:40', '2020-11-08 06:10:42'),
(14, 'Site Description', 'site-description', 'Lorem Ipsum is simply a dummy text of the printing and typesetting industry.', NULL, 'textarea', 'G', '1', 1, 0, '2019-06-19 05:56:13', '2020-11-08 06:12:31'),
(20, 'Admin Commission (in %)', 'admin-commission', '40', NULL, 'number', 'G', '1', 1, 0, '2019-06-24 01:46:17', '2019-09-19 23:49:43'),
(21, 'Payment Mode', 'payment-mode', 'sandbox', '{\"sandbox\":\"Test\",\"live\":\"Live\"}', 'select', 'PP', '1', 1, 0, '2019-08-11 23:51:15', '2020-04-17 02:37:58'),
(22, 'Test Client ID', 'test-client-id', 'AVjeIiD9viBL2BUipUGhP0zgC5p6UehMlpahIvVfgnaQTOix82iKBou1-xmcqAJ9RvE1WIEKEjeCzxlX', NULL, 'text', 'PP', '1', 0, 0, '2019-08-11 23:51:15', '2019-08-11 18:21:48'),
(23, 'Test Client Secret', 'test-client-secret', 'EN79aTyNmc1HrZgZSG9HedrevPd0i8Le-rXl33uoaUzOFT3oGFjqUH2prBCpEMnd05Ia_dVcOP6XjwvK', NULL, 'text', 'PP', '1', 0, 0, '2019-08-11 23:51:15', '2019-08-11 18:21:49'),
(24, 'Live Client ID', 'live-client-id', NULL, NULL, 'text', 'PP', '1', 0, 0, '2019-08-11 23:51:15', '2019-08-11 23:51:15'),
(25, 'Live Client Secret', 'live-client-secret', NULL, NULL, 'text', 'PP', '1', 0, 0, '2019-08-11 23:51:15', '2019-08-11 23:51:15'),
(26, 'Test Username', 'test-username', 'testingonlyaccount_api1.gmail.com', NULL, 'text', 'PP', '1', 1, 0, '2019-08-12 00:10:57', '2019-08-11 18:41:14'),
(27, 'Test Password', 'test-password', 'GXLV5N8KMELXPPGF', NULL, 'text', 'PP', '1', 1, 0, '2019-08-12 00:10:57', '2019-08-11 18:41:20'),
(28, 'Test Signature', 'test-signature', 'AB4D1gCIktIekr43tuy.8HapuNzkAJtaozk-tReBAhNLept9zxKMSIJb', NULL, 'text', 'PP', '1', 1, 0, '2019-08-12 00:10:57', '2019-08-11 18:41:27'),
(29, 'Live Username', 'live-username', 'testingonlyaccount_api1.gmail.com', NULL, 'text', 'PP', '1', 1, 0, '2019-08-12 00:10:57', '2019-08-11 22:31:42'),
(30, 'Live Password', 'live-password', 'GXLV5N8KMELXPPGF', NULL, 'text', 'PP', '1', 1, 0, '2019-08-12 00:10:57', '2019-08-11 22:31:45'),
(31, 'Live Signature', 'live-signature', 'AB4D1gCIktIekr43tuy.8HapuNzkAJtaozk-tReBAhNLept9zxKMSIJb', NULL, 'text', 'PP', '1', 1, 0, '2019-08-12 00:10:57', '2019-08-11 22:31:48'),
(32, 'Play Store', 'play-store', 'https://play.google.com/store', NULL, 'url', 'S', '1', 1, 0, '2019-07-17 07:51:40', '2020-04-17 06:17:38'),
(33, 'App Store', 'app-store', 'https://www.apple.com/in/ios/app-store/', NULL, 'url', 'S', '1', 1, 0, '2019-07-17 07:51:40', '2020-04-17 02:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Manoj Soni', 'manoj@getnada.com', 'Enquiry Form', 'How can we contact to a doctor, if we are going to appointment any doctor and he is not available ?', '2020-06-06 14:51:57', '2020-06-06 14:51:57');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `type`, `from_id`, `to_id`, `body`, `attachment`, `seen`, `created_at`, `updated_at`) VALUES
(1, 'user', 3, 2, 'hi', NULL, 1, '2020-12-27 04:39:34', '2020-12-27 04:39:34'),
(1804392803, 'user', 2, 3, 'jg', NULL, 0, '2020-12-27 04:56:58', '2020-12-27 04:56:58'),
(2531797491, 'user', 2, 3, 'hi', NULL, 0, '2020-12-27 04:39:34', '2020-12-27 04:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2020_04_16_120558_create_email_templates_table', 2),
(8, '2020_04_16_141404_create_cms_pages_table', 3),
(9, '2020_04_16_142329_create_faqs_table', 4),
(10, '2020_04_17_061226_create_password_resets_table', 5),
(11, '2020_04_17_072000_create_glabal_settings_table', 6),
(12, '2020_04_18_085836_add_mobile_number_and_country_code_and_dob_and_gender_and_image_to_users', 7),
(13, '2020_06_20_190232_create_notifications_table', 8),
(14, '2019_09_22_192348_create_messages_table', 9),
(15, '2019_10_16_211433_create_favorites_table', 9),
(16, '2019_10_18_223259_add_avatar_to_users', 9),
(17, '2019_10_20_211056_add_messenger_color_to_users', 9),
(18, '2019_10_22_000539_add_dark_mode_to_users', 9),
(19, '2019_10_25_214038_add_active_status_to_users', 9);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_numbers`
--

CREATE TABLE `mobile_numbers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `verification_code` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile_numbers`
--

INSERT INTO `mobile_numbers` (`id`, `user_id`, `mobile_number`, `verification_code`, `status`, `created_at`, `updated_at`) VALUES
(2, 7, '+917014594477', 13985, 1, '2020-06-24 10:56:44', '2020-06-24 12:46:23'),
(5, 13, '+919988776655', 99966, 1, '2020-06-26 22:41:34', '2020-07-28 23:43:06'),
(11, 3, '+96897728165', 46659, 1, '2020-07-13 22:18:32', '2020-07-13 22:19:03'),
(12, 4, '+96897728165', 66508, 1, '2020-07-13 22:58:47', '2020-07-13 23:00:03'),
(13, 12, '+919876543210', 20558, 0, '2020-07-28 23:21:01', '2020-07-28 23:21:02'),
(14, 14, '+919785082368', 45881, 1, '2020-07-30 13:36:05', '2020-09-08 17:43:30'),
(17, 17, '+96879398103', 35473, 1, '2020-08-01 20:00:38', '2020-08-01 20:01:04'),
(18, 18, '+96897728165', 84914, 1, '2020-08-07 21:04:21', '2020-08-07 21:04:51'),
(19, 19, '+96897728165', 72908, 1, '2020-08-09 03:18:18', '2020-08-09 03:18:58'),
(20, 20, '+639175668613', 96947, 0, '2020-08-09 13:41:15', '2020-08-14 07:33:57'),
(21, 22, '+919785082368', 33361, 1, '2020-08-10 16:13:15', '2020-08-10 18:37:24'),
(22, 21, '+917340560434', 70605, 1, '2020-08-10 18:07:19', '2020-08-10 18:07:39'),
(24, 15, '+917014594477', 85214, 1, '2020-08-13 18:38:51', '2020-08-13 18:38:51'),
(25, 24, '+639260867145', 10131, 1, '2020-08-16 12:23:26', '2020-09-29 03:17:20'),
(26, 26, '+639290207203', 99258, 1, '2020-08-17 10:25:17', '2020-09-29 10:32:54'),
(27, 32, '+639178116426', 78070, 0, '2020-08-17 10:38:50', '2020-08-17 11:21:19'),
(28, 31, '+639175230307', 14718, 1, '2020-08-17 10:46:40', '2020-09-30 13:29:07'),
(29, 34, '+6309178436511', 35309, 0, '2020-08-17 10:54:53', '2020-08-26 07:17:15'),
(30, 36, '+639171451008', 91361, 0, '2020-08-17 11:26:59', '2020-08-17 12:22:53'),
(31, 30, '+6309232966862', 11070, 0, '2020-08-17 11:40:31', '2020-09-29 05:21:50'),
(32, 37, '+639173098932', 46313, 1, '2020-08-17 12:12:28', '2020-09-29 07:50:35'),
(33, 28, '+639064879367', 61435, 0, '2020-08-17 12:29:06', '2020-08-17 12:35:35'),
(34, 38, '+6309176350213', 53167, 1, '2020-08-17 15:37:09', '2020-09-29 04:38:52'),
(35, 39, '+639176523223', 81147, 1, '2020-08-17 16:23:47', '2020-10-03 18:02:24'),
(36, 40, '+919785082368', 29030, 0, '2020-08-17 18:34:16', '2020-08-17 18:34:17'),
(37, 45, '+96879398103', 31811, 1, '2020-08-19 18:25:48', '2020-08-19 18:26:11'),
(38, 46, '+639998843470', 21829, 1, '2020-08-21 13:57:32', '2020-09-30 09:29:59'),
(39, 35, '+639770953782', 52402, 1, '2020-08-21 16:01:57', '2020-09-30 07:30:42'),
(40, 33, '+639228352955', 42303, 0, '2020-08-24 12:25:04', '2020-08-24 12:25:48'),
(42, 52, '+639673548586', 41919, 0, '2020-09-07 11:46:19', '2020-09-16 09:03:54'),
(43, 53, '+6309534031443', 74266, 0, '2020-09-10 06:21:02', '2020-09-10 06:26:39'),
(44, 56, '+639218649911', 69032, 1, '2020-09-13 17:46:57', '2020-10-18 07:38:20'),
(45, 58, '+639778320426', 80397, 0, '2020-09-14 08:02:15', '2020-09-15 00:38:38'),
(46, 59, '+96897728165', 63719, 1, '2020-09-14 18:49:10', '2020-09-14 18:49:34'),
(47, 60, '+639994750285', 75511, 1, '2020-09-15 04:49:25', '2020-09-30 12:24:39'),
(48, 65, '+639194135588', 99439, 1, '2020-09-16 01:35:32', '2020-10-06 04:06:21'),
(49, 66, '+639396071220', 86313, 0, '2020-09-16 04:46:17', '2020-09-25 02:14:12'),
(50, 68, '+639178317694', 98516, 0, '2020-09-19 00:17:18', '2020-09-19 00:18:42'),
(51, 70, '+639175976979', 40282, 0, '2020-09-19 13:03:23', '2020-09-19 13:03:24'),
(52, 62, '+6309953369719', 35018, 0, '2020-09-19 16:12:39', '2020-09-19 16:13:15'),
(53, 85, '+639067208683', 65737, 0, '2020-09-27 00:56:18', '2020-09-27 01:07:18'),
(54, 86, '+6309465467321', 87974, 0, '2020-09-27 22:36:15', '2020-09-27 22:36:16'),
(55, 87, '+639357018438', 82767, 0, '2020-09-28 13:26:08', '2020-09-28 13:36:44'),
(56, 94, '+639473361831', 23905, 0, '2020-09-28 13:35:14', '2020-09-28 13:35:16'),
(57, 97, '+639280887036', 70047, 0, '2020-09-28 13:40:37', '2020-09-28 13:41:34'),
(58, 98, '+639553069757', 59501, 0, '2020-09-28 13:42:22', '2020-09-28 13:42:24'),
(59, 99, '+639150532259', 63281, 0, '2020-09-28 13:51:32', '2020-09-28 13:51:34'),
(60, 102, '+6309095338159', 79869, 0, '2020-09-28 15:01:17', '2020-09-28 15:04:54'),
(61, 104, '+639163276311', 10594, 0, '2020-09-28 15:17:38', '2020-09-28 15:18:48'),
(62, 105, '+639151119526', 38292, 0, '2020-09-28 15:54:32', '2020-09-28 15:54:52'),
(63, 111, '+639450834515', 34667, 0, '2020-09-28 18:00:33', '2020-09-30 09:39:09'),
(64, 112, '+6309952389881', 57932, 1, '2020-09-28 18:48:44', '2020-09-28 18:49:29'),
(65, 114, '+639204551134', 95026, 1, '2020-09-29 00:12:38', '2020-09-29 00:13:04'),
(66, 115, '+639998659629', 85797, 1, '2020-09-29 00:33:07', '2020-09-29 00:33:36'),
(67, 116, '+6309175391931', 92857, 0, '2020-09-29 01:50:09', '2020-09-29 01:50:11'),
(68, 118, '+818042111024', 34736, 0, '2020-09-29 01:59:53', '2020-09-29 01:59:55'),
(69, 119, '+639062775106', 72311, 1, '2020-09-29 02:15:41', '2020-09-29 02:16:17'),
(70, 121, '+639497983112', 46084, 1, '2020-09-29 03:11:16', '2020-09-29 03:11:54'),
(71, 126, '+639494271029', 48412, 1, '2020-09-29 06:44:44', '2020-09-29 06:44:59'),
(72, 127, '+639175193694', 36888, 1, '2020-09-29 07:28:04', '2020-09-29 07:28:21'),
(73, 129, '+639985543054', 38394, 1, '2020-09-29 07:59:55', '2020-09-29 08:00:22'),
(74, 132, '+639091577308', 46466, 1, '2020-09-29 12:14:14', '2020-09-29 12:15:04'),
(75, 136, '+639552288809', 42528, 1, '2020-09-29 21:41:21', '2020-09-29 21:41:58'),
(76, 140, '+639152945990', 39784, 1, '2020-09-30 08:04:16', '2020-09-30 08:04:46'),
(77, 130, '+639153308933', 30646, 1, '2020-09-30 22:45:54', '2020-09-30 22:46:34'),
(78, 144, '+639985543054', 16074, 1, '2020-10-01 02:16:12', '2020-10-01 02:16:53'),
(79, 146, '+639617230726', 47545, 1, '2020-10-01 03:58:41', '2020-10-01 04:19:28'),
(80, 151, '+639668491395', 74794, 1, '2020-10-02 09:41:27', '2020-10-02 09:43:35'),
(81, 152, '+639988403659', 62359, 1, '2020-10-02 11:21:47', '2020-10-02 11:22:35'),
(82, 154, '+639168273795', 65186, 1, '2020-10-02 16:12:34', '2020-10-02 16:12:52'),
(83, 157, '+639171062256', 28541, 1, '2020-10-03 02:34:14', '2020-10-03 02:34:55'),
(84, 41, '+639982072419', 23787, 1, '2020-10-04 02:01:12', '2020-10-04 02:01:33'),
(85, 165, '+639164205287', 83904, 1, '2020-10-04 02:01:52', '2020-10-04 02:02:37'),
(86, 167, '+639494050967', 39005, 1, '2020-10-04 09:44:00', '2020-10-04 09:44:38'),
(87, 29, '+639491431226', 16219, 1, '2020-10-04 14:39:42', '2020-10-04 14:40:11'),
(88, 172, '+639293808503', 13018, 1, '2020-10-05 02:12:11', '2020-10-05 02:15:21'),
(89, 169, '+639171124979', 79897, 1, '2020-10-05 08:19:18', '2020-10-05 08:19:52'),
(90, 174, '+6309772705079', 56047, 1, '2020-10-05 08:44:13', '2020-10-05 08:44:52'),
(91, 176, '+639164339316', 61002, 1, '2020-10-06 14:14:46', '2020-10-06 14:15:14'),
(92, 179, '+639129658625', 80983, 0, '2020-10-07 03:59:25', '2020-10-07 03:59:48'),
(93, 180, '+6309956193259', 13999, 1, '2020-10-07 08:58:39', '2020-10-07 08:59:18'),
(94, 181, '+639178832168', 15894, 1, '2020-10-07 15:30:55', '2020-10-07 15:31:07'),
(95, 184, '+639233401376', 17140, 1, '2020-10-09 02:19:23', '2020-10-09 02:19:47'),
(96, 185, '+639063469502', 80411, 0, '2020-10-09 15:09:37', '2020-10-09 15:09:40'),
(97, 186, '+6309503134406', 33346, 0, '2020-10-09 22:40:11', '2020-10-09 22:40:12'),
(98, 188, '+639324306334', 66446, 1, '2020-10-10 09:43:33', '2020-10-10 09:44:00'),
(99, 189, '+639175423002', 92677, 1, '2020-10-11 01:52:41', '2020-10-11 01:53:02'),
(100, 190, '+639265868317', 42230, 1, '2020-10-11 04:19:51', '2020-10-11 04:20:34'),
(101, 191, '+6309564833808', 40105, 1, '2020-10-11 11:33:20', '2020-10-11 11:34:08'),
(102, 192, '+639610086993', 39184, 1, '2020-10-11 12:26:29', '2020-10-11 12:26:49'),
(103, 194, '+639567233353', 86193, 1, '2020-10-12 07:46:16', '2020-10-12 07:46:32'),
(104, 196, '+639611633344', 57058, 1, '2020-10-13 03:03:35', '2020-10-13 03:03:52'),
(105, 206, '+639483950998', 95130, 1, '2020-10-16 23:08:44', '2020-10-16 23:09:12'),
(106, 208, '+639062866007', 87725, 1, '2020-10-19 06:10:01', '2020-10-19 06:10:16'),
(107, 209, '+639176775333', 87406, 0, '2020-10-19 11:56:16', '2020-10-19 11:56:18'),
(108, 211, '+96892852471', 66094, 0, '2020-10-20 08:00:30', '2020-10-20 08:00:33'),
(109, 213, '+639950065282', 58262, 1, '2020-10-21 05:04:41', '2020-10-21 05:05:04'),
(110, 215, '+639175550745', 55987, 1, '2020-10-22 05:17:11', '2020-10-22 05:17:31'),
(111, 218, '+6394606038095', 90633, 0, '2020-10-23 23:25:34', '2020-10-23 23:26:15'),
(112, 221, '+639616712414', 58639, 1, '2020-10-26 07:23:40', '2020-10-26 07:24:15'),
(113, 222, '+639498515800', 57660, 1, '2020-10-27 04:41:54', '2020-10-27 04:42:25'),
(114, 226, '+6309264527184', 24237, 1, '2020-10-29 15:25:31', '2020-10-29 15:25:54'),
(115, 227, '+639217677726', 92286, 1, '2020-10-29 19:14:48', '2020-10-29 19:15:11'),
(116, 228, '+639217677726', 61440, 1, '2020-10-29 19:20:43', '2020-10-29 19:21:13'),
(117, 236, '+639653172752', 14690, 1, '2020-11-08 00:42:53', '2020-11-08 00:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('0050b582-d796-487c-b048-b59736aa0e4d', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 15, '{\"data\":\"Payment request has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/withdraw\",\"date\":\"2020-09-26T06:12:47.151350Z\"}', '2020-09-26 17:53:37', '2020-09-26 06:12:47', '2020-09-26 17:53:37'),
('0053f87b-41b1-4ef2-8002-4a5fbb210ae6', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 46, '{\"data\":\"Congratulations! You\'ve received a meeting request fromKian Fernando\",\"user\":{\"id\":69,\"first_name\":\"kian\",\"last_name\":\"fernando\",\"email\":\"kianfernanfo0906@gmail.com\",\"email_verified_at\":\"2020-09-24T02:20:04.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-19T02:45:49.000000Z\",\"updated_at\":\"2020-09-24T02:20:04.000000Z\",\"mobile_number\":null,\"country_code\":null,\"dob\":null,\"gender\":\"male\",\"address\":null,\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/MzE=\",\"date\":\"2020-09-24T02:34:31.720425Z\"}', '2020-09-24 02:36:23', '2020-09-24 02:34:31', '2020-09-24 02:36:23'),
('02bf5314-b259-470c-9d1a-8c4036298a43', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 56, '{\"data\":\"Congratulations! You\'ve received a meeting request fromAdomar Aguibiador\",\"user\":{\"id\":128,\"first_name\":\"adomar\",\"last_name\":\"aguibiador\",\"email\":\"adomaraguibiador@gmail.com\",\"email_verified_at\":\"2020-09-29T07:35:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-29T07:34:24.000000Z\",\"updated_at\":\"2020-09-29T07:35:41.000000Z\",\"mobile_number\":null,\"country_code\":null,\"dob\":null,\"gender\":\"male\",\"address\":null,\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NDU=\",\"date\":\"2020-09-29T07:51:07.766652Z\"}', '2020-10-18 06:23:26', '2020-09-29 07:51:07', '2020-10-18 06:23:26'),
('0441f525-e30f-407f-8cb0-61b97da5c830', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 25, '{\"data\":\"Congratulations! You\'ve received a meeting request fromRetchen Corpuz\",\"user\":{\"id\":66,\"first_name\":\"Retchen\",\"last_name\":\"Corpuz\",\"email\":\"morgan.morganette@rocketmail.com\",\"email_verified_at\":\"2020-09-16T04:43:29.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-16T04:42:04.000000Z\",\"updated_at\":\"2020-09-16T04:49:47.000000Z\",\"mobile_number\":\"9396071220\",\"country_code\":\"+63\",\"dob\":\"10\\/06\\/1985\",\"gender\":\"female\",\"address\":\"63 Ilang-Ilang St. Karuhatan, Valenzuela City\",\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/MzM=\",\"date\":\"2020-09-25T01:49:08.755601Z\"}', '2020-09-25 01:51:45', '2020-09-25 01:49:08', '2020-09-25 01:51:45'),
('08d097bf-e4f1-472c-a485-d29cc7507685', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 31, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-19T15:22:53.482014Z\"}', '2020-09-30 13:08:47', '2020-09-19 15:22:53', '2020-09-30 13:08:47'),
('0a9410ad-e0e0-4ebb-a116-fef201852aa1', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 62, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-19T16:15:49.790021Z\"}', '2020-09-19 16:18:53', '2020-09-19 16:15:49', '2020-09-19 16:18:53'),
('0cd4b253-a735-496c-aab3-71e9f7e0458a', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 25, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/MzA=\",\"date\":\"2020-09-23T12:05:11.878917Z\"}', '2020-09-23 12:05:42', '2020-09-23 12:05:11', '2020-09-23 12:05:42'),
('0e0fd7d6-06aa-4282-a546-a553ab2e2434', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":45,\"first_name\":\"Emmalene\",\"last_name\":\"Albor\",\"email\":\"emmalene.morales13@gmail.com\",\"email_verified_at\":\"2020-08-19T18:16:05.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-08-19T18:15:38.000000Z\",\"updated_at\":\"2020-09-06T19:17:26.000000Z\",\"mobile_number\":\"79398103\",\"country_code\":\"+968\",\"dob\":\"10\\/13\\/1986\",\"gender\":\"female\",\"address\":\"Muntinlupa City\",\"image\":\"7d01ff64df9c64dfda400f087b8ee525.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-19T15:51:45.322070Z\"}', '2020-09-19 15:52:04', '2020-09-19 15:51:45', '2020-09-19 15:52:04'),
('0e4080ee-7030-479d-b2ce-fb36aebddc7b', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 14, '{\"data\":\"Sick certificate has been received\",\"user\":{\"id\":15,\"first_name\":\"Manoj\",\"last_name\":\"Kumar Soni\",\"email\":\"manoj.upwork87@gmail.com\",\"email_verified_at\":\"2020-07-30T16:37:55.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-07-30T16:37:19.000000Z\",\"updated_at\":\"2020-08-08T11:57:52.000000Z\",\"mobile_number\":\"7014594477\",\"country_code\":\"+91\",\"dob\":\"07\\/28\\/1987\",\"gender\":\"male\",\"address\":\"Pratap Nagar\",\"image\":\"fcbe464b7aaf9bb96daa90d4a0934fa3.jpg\",\"city\":null,\"timezone\":\"Asia\\/Calcutta\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-26T06:07:35.068351Z\"}', '2020-09-26 06:07:40', '2020-09-26 06:07:35', '2020-09-26 06:07:40'),
('0e8f3a05-0c23-4fb1-a5b9-173c2a893b21', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 194, '{\"data\":\"Congratulations! You\'ve received a meeting request fromMar Juj Bartolome\",\"user\":{\"id\":198,\"first_name\":\"Mar Juj\",\"last_name\":\"Bartolome\",\"email\":\"marjunb05@yahoo.com\",\"email_verified_at\":\"2020-10-14T02:08:00.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-10-14T02:05:09.000000Z\",\"updated_at\":\"2020-10-14T02:08:00.000000Z\",\"mobile_number\":null,\"country_code\":null,\"dob\":null,\"gender\":\"male\",\"address\":null,\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NTU=\",\"date\":\"2020-10-14T03:55:37.191729Z\"}', '2020-10-14 06:05:00', '2020-10-14 03:55:37', '2020-10-14 06:05:00'),
('0f732257-4b06-41b6-add1-9eaeb82d7cf5', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"Sick certificate has been received\",\"user\":{\"id\":46,\"first_name\":\"Cyryl\",\"last_name\":\"Rejuso Kalbit\",\"email\":\"cyrylrae@gmail.com\",\"email_verified_at\":\"2020-08-21T13:42:11.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-08-21T13:41:50.000000Z\",\"updated_at\":\"2020-09-16T08:51:29.000000Z\",\"mobile_number\":\"9998843470\",\"country_code\":\"+63\",\"dob\":\"06\\/12\\/1986\",\"gender\":\"female\",\"address\":\"Marikina City\",\"image\":\"60373d92c21c6e7925cc8656f558f88b.jpeg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-23T11:17:05.018866Z\"}', '2020-09-23 11:31:05', '2020-09-23 11:17:05', '2020-09-23 11:31:05'),
('11bdfab8-b70d-4154-bc20-04aad8b9aa71', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 25, '{\"data\":\"Congratulations! You\'ve received a appointment request from Eulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/MTE=\",\"date\":\"2020-09-16T10:24:02.615577Z\"}', '2020-09-16 10:27:22', '2020-09-16 10:24:02', '2020-09-16 10:27:22'),
('12525753-089a-4751-b89e-15e752a0166e', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 188, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-10-10T15:28:23.583394Z\"}', '2020-10-10 15:31:36', '2020-10-10 15:28:23', '2020-10-10 15:31:36'),
('13dae50b-5321-4b11-9c70-67481b839986', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 41, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-10-04T02:04:01.613594Z\"}', '2020-10-04 02:06:25', '2020-10-04 02:04:01', '2020-10-04 02:06:25'),
('14de624f-e00b-4da0-b8ca-6bb5cae3368e', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 70, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-19T15:16:26.604576Z\"}', '2020-09-24 04:53:25', '2020-09-19 15:16:26', '2020-09-24 04:53:25'),
('1663795b-ba78-4a2b-8ba1-895cc69e4804', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":37,\"first_name\":\"Monique Therese\",\"last_name\":\"Punsalan\",\"email\":\"moniquepunsalan@gmail.com\",\"email_verified_at\":\"2020-08-17T12:09:03.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-08-17T12:07:32.000000Z\",\"updated_at\":\"2020-09-30T10:56:20.000000Z\",\"mobile_number\":\"9173098932\",\"country_code\":\"+63\",\"dob\":\"06\\/10\\/1986\",\"gender\":\"female\",\"address\":\"Quezon City\",\"image\":\"a90785fc6153ac130a96b029ef7f3bff.jpg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-10-11T11:01:11.901470Z\"}', '2020-10-11 11:02:52', '2020-10-11 11:01:11', '2020-10-11 11:02:52'),
('16f905cc-1645-4021-a945-645e73c6b537', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 45, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEdilberta Albor\",\"user\":{\"id\":82,\"first_name\":\"Edilberta\",\"last_name\":\"Albor\",\"email\":\"eulysis.albor@omanair.com\",\"email_verified_at\":\"2020-09-26T09:18:16.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-09-26T08:59:07.000000Z\",\"updated_at\":\"2020-09-26T09:23:11.000000Z\",\"mobile_number\":\"9089074034\",\"country_code\":\"+63\",\"dob\":\"10\\/29\\/1958\",\"gender\":\"female\",\"address\":\"Las Pinas City\",\"image\":\"2c1f6f540ff71b7310bd7e32bea55c58.jpg\",\"city\":\"Las Pinas City\",\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NDA=\",\"date\":\"2020-09-26T18:35:04.140708Z\"}', '2020-09-26 18:35:45', '2020-09-26 18:35:04', '2020-09-26 18:35:45'),
('1b9c652f-e668-4b3f-8910-2255c6798e4c', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"Medical certificate has been received\",\"user\":{\"id\":45,\"first_name\":\"Emmalene\",\"last_name\":\"Albor\",\"email\":\"emmalene.morales13@gmail.com\",\"email_verified_at\":\"2020-08-19T18:16:05.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-08-19T18:15:38.000000Z\",\"updated_at\":\"2020-09-06T19:17:26.000000Z\",\"mobile_number\":\"79398103\",\"country_code\":\"+968\",\"dob\":\"10\\/13\\/1986\",\"gender\":\"female\",\"address\":\"Muntinlupa City\",\"image\":\"7d01ff64df9c64dfda400f087b8ee525.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-19T15:55:24.556949Z\"}', '2020-09-19 15:55:28', '2020-09-19 15:55:24', '2020-09-19 15:55:28'),
('20816350-ea1f-4000-9550-8d70b3adfb67', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 58, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-16T19:38:15.750038Z\"}', '2020-09-17 06:41:18', '2020-09-16 19:38:15', '2020-09-17 06:41:18'),
('20a95232-2350-4af5-aae4-8e76f3d2511b', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 194, '{\"data\":\"Congratulations! You\'ve received a meeting request fromGia Hamilton\",\"user\":{\"id\":200,\"first_name\":\"Gia\",\"last_name\":\"Hamilton\",\"email\":\"giahamilton@outlook.com\",\"email_verified_at\":\"2020-10-14T06:36:23.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-10-14T06:31:16.000000Z\",\"updated_at\":\"2020-10-14T06:36:23.000000Z\",\"mobile_number\":null,\"country_code\":null,\"dob\":null,\"gender\":\"male\",\"address\":null,\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/room\\/join\\/NTc=\",\"date\":\"2020-10-14T06:39:10.131196Z\"}', '2020-10-14 06:41:35', '2020-10-14 06:39:10', '2020-10-14 06:41:35'),
('21033ba0-3dbf-4f33-bc9d-0e7ec18f363b', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"Sick certificate has been received\",\"user\":{\"id\":25,\"first_name\":\"Aubrey\",\"last_name\":\"Artienda\",\"email\":\"aubreyartienda@yahoo.com\",\"email_verified_at\":\"2020-08-16T21:56:16.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-08-16T21:54:24.000000Z\",\"updated_at\":\"2020-09-08T17:47:53.000000Z\",\"mobile_number\":\"9985543054\",\"country_code\":\"+63\",\"dob\":\"12\\/20\\/1989\",\"gender\":\"female\",\"address\":\"Old Balara, Quezon City\",\"image\":\"7521448cbe1e35b76dce5a80a6398f70.jpg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-23T12:31:39.541472Z\"}', '2020-09-24 02:29:34', '2020-09-23 12:31:39', '2020-09-24 02:29:34'),
('216cbd2d-6c44-445e-b12a-3b20b8fd419b', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 25, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-29T07:42:25.028518Z\"}', '2020-09-29 07:44:06', '2020-09-29 07:42:25', '2020-09-29 07:44:06'),
('23c2013b-323a-4972-977a-fb373054523b', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 69, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":46,\"first_name\":\"Cyryl\",\"last_name\":\"Rejuso Kalbit\",\"email\":\"cyrylrae@gmail.com\",\"email_verified_at\":\"2020-08-21T13:42:11.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-08-21T13:41:50.000000Z\",\"updated_at\":\"2020-09-16T08:51:29.000000Z\",\"mobile_number\":\"9998843470\",\"country_code\":\"+63\",\"dob\":\"06\\/12\\/1986\",\"gender\":\"female\",\"address\":\"Marikina City\",\"image\":\"60373d92c21c6e7925cc8656f558f88b.jpeg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-24T03:02:05.459017Z\"}', NULL, '2020-09-24 03:02:05', '2020-09-24 03:02:05'),
('266c028c-b005-4ff0-a28e-802b509cb4e5', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 68, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-19T10:39:06.878936Z\"}', NULL, '2020-09-19 10:39:06', '2020-09-19 10:39:06'),
('28b9aedc-0b05-47e4-9495-3beacc2edbb8', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 14, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":15,\"first_name\":\"Manoj\",\"last_name\":\"Kumar Soni\",\"email\":\"manoj.upwork87@gmail.com\",\"email_verified_at\":\"2020-07-30T16:37:55.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-07-30T16:37:19.000000Z\",\"updated_at\":\"2020-08-08T11:57:52.000000Z\",\"mobile_number\":\"7014594477\",\"country_code\":\"+91\",\"dob\":\"07\\/28\\/1987\",\"gender\":\"male\",\"address\":\"Pratap Nagar\",\"image\":\"fcbe464b7aaf9bb96daa90d4a0934fa3.jpg\",\"city\":null,\"timezone\":\"Asia\\/Calcutta\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-16T18:19:46.160525Z\"}', '2020-09-16 18:43:28', '2020-09-16 18:19:46', '2020-09-16 18:43:28'),
('2b951f16-22b4-4fb7-93dc-6f1d4d3bb206', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 45, '{\"data\":\"Congratulations! You\'ve received a appointment request from Eulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/MTI=\",\"date\":\"2020-09-16T10:31:48.345623Z\"}', '2020-09-16 10:38:10', '2020-09-16 10:31:48', '2020-09-16 10:38:10'),
('2bad9b77-6dad-44b3-813d-84c050bd6ec0', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 25, '{\"data\":\"Congratulations! You\'ve received a meeting request fromRaquel Bering\",\"user\":{\"id\":76,\"first_name\":\"Raquel\",\"last_name\":\"Bering\",\"email\":\"raq_15qelly@yahoo.com\",\"email_verified_at\":\"2020-09-23T05:08:42.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-23T05:07:23.000000Z\",\"updated_at\":\"2020-09-23T05:08:42.000000Z\",\"mobile_number\":null,\"country_code\":null,\"dob\":null,\"gender\":\"male\",\"address\":null,\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/MzY=\",\"date\":\"2020-09-25T03:16:09.754683Z\"}', '2020-09-25 03:46:52', '2020-09-25 03:16:09', '2020-09-25 03:46:52'),
('2c055371-d2aa-44db-871c-4c44e38a24eb', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 15, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/MTU=\",\"date\":\"2020-09-16T19:06:41.772229Z\"}', '2020-09-16 19:07:51', '2020-09-16 19:06:41', '2020-09-16 19:07:51'),
('2e09b309-687b-4cb2-bade-1bf4630c3aed', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 25, '{\"data\":\"Congratulations! You\'ve received a meeting request fromRetchen Corpuz\",\"user\":{\"id\":66,\"first_name\":\"Retchen\",\"last_name\":\"Corpuz\",\"email\":\"morgan.morganette@rocketmail.com\",\"email_verified_at\":\"2020-09-16T04:43:29.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-16T04:42:04.000000Z\",\"updated_at\":\"2020-09-16T04:49:47.000000Z\",\"mobile_number\":\"9396071220\",\"country_code\":\"+63\",\"dob\":\"10\\/06\\/1985\",\"gender\":\"female\",\"address\":\"63 Ilang-Ilang St. Karuhatan, Valenzuela City\",\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/MzU=\",\"date\":\"2020-09-25T02:20:42.016317Z\"}', '2020-09-25 02:57:22', '2020-09-25 02:20:42', '2020-09-25 02:57:22'),
('2e1e15da-8cd5-43ba-9097-f1c7f88db510', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 56, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-28T11:28:22.440953Z\"}', '2020-09-28 18:36:58', '2020-09-28 11:28:22', '2020-09-28 18:36:58'),
('36cfdccb-2545-4863-a375-e20e59e92b8e', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 14, '{\"data\":\"Sick certificate has been received\",\"user\":{\"id\":15,\"first_name\":\"Manoj\",\"last_name\":\"Kumar Soni\",\"email\":\"manoj.upwork87@gmail.com\",\"email_verified_at\":\"2020-07-30T16:37:55.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-07-30T16:37:19.000000Z\",\"updated_at\":\"2020-09-29T04:30:13.000000Z\",\"mobile_number\":\"7014594477\",\"country_code\":\"+91\",\"dob\":\"07\\/28\\/1987\",\"gender\":\"male\",\"address\":\"Pratap Nagar\",\"image\":\"fcbe464b7aaf9bb96daa90d4a0934fa3.jpg\",\"city\":null,\"timezone\":\"Asia\\/Calcutta\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-11-01T11:04:11.289227Z\"}', '2020-11-01 11:06:20', '2020-11-01 11:04:11', '2020-11-01 11:06:20'),
('3a18ee47-14fd-4340-af38-e8d253accfe0', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 46, '{\"data\":\"Congratulations! You\'ve received a appointment request from Eulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/Mjg=\",\"date\":\"2020-09-23T10:57:50.151750Z\"}', '2020-09-23 11:15:38', '2020-09-23 10:57:50', '2020-09-23 11:15:38'),
('3a41ad28-f77c-49f8-bda4-f76a1c896fea', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 157, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":144,\"first_name\":\"Aubrey\",\"last_name\":\"Artienda\",\"email\":\"aubreyartienda@yahoo.com\",\"email_verified_at\":\"2020-10-01T02:13:36.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-10-01T02:12:41.000000Z\",\"updated_at\":\"2020-10-01T02:40:24.000000Z\",\"mobile_number\":\"9985543054\",\"country_code\":\"+63\",\"dob\":\"12\\/20\\/1989\",\"gender\":\"male\",\"address\":\"Manotok Drive, Old Balara, Quezon CIty\",\"image\":\"ef357ab80d3c09aa1d1bbe7be6368cdf.jpg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-10-03T06:18:59.299085Z\"}', '2020-10-03 07:56:35', '2020-10-03 06:18:59', '2020-10-03 07:56:35'),
('3e2a3b1e-19ca-48b5-ba2e-98a8c1e38f25', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 46, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/Mjk=\",\"date\":\"2020-09-23T11:03:30.045014Z\"}', '2020-09-23 11:15:38', '2020-09-23 11:03:30', '2020-09-23 11:15:38'),
('3ed880b5-d7f1-47ef-896f-f303fc06a8bb', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":15,\"first_name\":\"Manoj\",\"last_name\":\"Kumar Soni\",\"email\":\"manoj.upwork87@gmail.com\",\"email_verified_at\":\"2020-07-30T16:37:55.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-07-30T16:37:19.000000Z\",\"updated_at\":\"2020-08-08T11:57:52.000000Z\",\"mobile_number\":\"7014594477\",\"country_code\":\"+91\",\"dob\":\"07\\/28\\/1987\",\"gender\":\"male\",\"address\":\"Pratap Nagar\",\"image\":\"fcbe464b7aaf9bb96daa90d4a0934fa3.jpg\",\"city\":null,\"timezone\":\"Asia\\/Calcutta\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-16T19:27:29.924017Z\"}', '2020-09-16 19:28:51', '2020-09-16 19:27:29', '2020-09-16 19:28:51'),
('402ccf22-63a2-4d1c-bf96-147eac788017', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 56, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NjA=\",\"date\":\"2020-10-18T07:35:23.239692Z\"}', '2020-10-18 07:36:29', '2020-10-18 07:35:23', '2020-10-18 07:36:29'),
('41094056-9680-4504-a27c-232422704743', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 36, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-28T17:58:45.377503Z\"}', NULL, '2020-09-28 17:58:45', '2020-09-28 17:58:45'),
('418797af-747e-4abe-aefa-c5123af75bd6', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"Sick certificate has been received\",\"user\":{\"id\":188,\"first_name\":\"Joy Ann\",\"last_name\":\"de Castro\",\"email\":\"joyous_angel2001@yahoo.com\",\"email_verified_at\":\"2020-10-10T09:34:50.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-10-10T09:34:18.000000Z\",\"updated_at\":\"2020-10-10T15:28:23.000000Z\",\"mobile_number\":\"9324306334\",\"country_code\":\"+63\",\"dob\":\"12\\/11\\/1986\",\"gender\":\"female\",\"address\":\"Block 26 Lot 20 Carmela Valley Homes Talisay City Negros Occidental\",\"image\":\"443c42f6d7730e5bf165dd904eb9b8ba.jpeg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-10-25T10:22:43.596286Z\"}', '2020-10-25 12:14:11', '2020-10-25 10:22:43', '2020-10-25 12:14:11'),
('424b2870-051d-436e-aa2c-c4db9cfa21ad', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 45, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/MTA=\",\"date\":\"2020-09-15T20:20:56.936394Z\"}', '2020-09-15 20:21:23', '2020-09-15 20:20:56', '2020-09-15 20:21:23'),
('43d0a485-e46b-46c2-8c60-f8a6f2a249d2', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 24, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NDI=\",\"date\":\"2020-09-29T03:23:09.908421Z\"}', '2020-09-29 03:25:03', '2020-09-29 03:23:09', '2020-09-29 03:25:03'),
('466d9d83-221a-4441-9c20-8450ad1044e5', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 14, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":15,\"first_name\":\"Manoj\",\"last_name\":\"Kumar Soni\",\"email\":\"manoj.upwork87@gmail.com\",\"email_verified_at\":\"2020-07-30T16:37:55.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-07-30T16:37:19.000000Z\",\"updated_at\":\"2020-08-08T11:57:52.000000Z\",\"mobile_number\":\"7014594477\",\"country_code\":\"+91\",\"dob\":\"07\\/28\\/1987\",\"gender\":\"male\",\"address\":\"Pratap Nagar\",\"image\":\"fcbe464b7aaf9bb96daa90d4a0934fa3.jpg\",\"city\":null,\"timezone\":\"Asia\\/Calcutta\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-15T20:08:54.871834Z\"}', '2020-09-16 18:43:28', '2020-09-15 20:08:54', '2020-09-16 18:43:28'),
('46b556c1-2569-4f41-8043-2a42f0608d7c', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 38, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-29T04:43:44.118390Z\"}', '2020-09-29 04:45:36', '2020-09-29 04:43:44', '2020-09-29 04:45:36'),
('47e1b999-1919-48a3-ae5b-8071e218d341', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 62, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/room\\/join\\/MTk=\",\"date\":\"2020-09-19T16:58:05.663752Z\"}', '2020-09-19 17:01:02', '2020-09-19 16:58:05', '2020-09-19 17:01:02'),
('47f01e04-ab7e-416a-80b7-58acc65e7a1b', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 169, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-10-05T12:36:22.530712Z\"}', NULL, '2020-10-05 12:36:22', '2020-10-05 12:36:22'),
('4a80380c-5a07-4739-9304-aac555029bb8', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 14, '{\"data\":\"Medical certificate has been received\",\"user\":{\"id\":15,\"first_name\":\"Manoj\",\"last_name\":\"Kumar Soni\",\"email\":\"manoj.upwork87@gmail.com\",\"email_verified_at\":\"2020-07-30T16:37:55.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-07-30T16:37:19.000000Z\",\"updated_at\":\"2020-08-08T11:57:52.000000Z\",\"mobile_number\":\"7014594477\",\"country_code\":\"+91\",\"dob\":\"07\\/28\\/1987\",\"gender\":\"male\",\"address\":\"Pratap Nagar\",\"image\":\"fcbe464b7aaf9bb96daa90d4a0934fa3.jpg\",\"city\":null,\"timezone\":\"Asia\\/Calcutta\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-26T17:54:14.181225Z\"}', '2020-09-28 17:48:27', '2020-09-26 17:54:14', '2020-09-28 17:48:27'),
('4abd87f6-3f93-4ddd-b930-d73ea07ce394', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 45, '{\"data\":\"Congratulations! You\'ve received a appointment request from Edilberta Albor\",\"user\":{\"id\":82,\"first_name\":\"Edilberta\",\"last_name\":\"Albor\",\"email\":\"eulysis.albor@omanair.com\",\"email_verified_at\":\"2020-09-26T09:18:16.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-09-26T08:59:07.000000Z\",\"updated_at\":\"2020-09-26T09:23:11.000000Z\",\"mobile_number\":\"9089074034\",\"country_code\":\"+63\",\"dob\":\"10\\/29\\/1958\",\"gender\":\"female\",\"address\":\"Las Pinas City\",\"image\":\"2c1f6f540ff71b7310bd7e32bea55c58.jpg\",\"city\":\"Las Pinas City\",\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/Mzk=\",\"date\":\"2020-09-26T18:29:02.782321Z\"}', '2020-09-26 18:30:20', '2020-09-26 18:29:02', '2020-09-26 18:30:20'),
('4aec0499-a629-4f91-a13e-a641b3f71f79', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 41, '{\"data\":\"Congratulations! You\'ve received a meeting request fromZavina Azcarrate\",\"user\":{\"id\":165,\"first_name\":\"Zavina\",\"last_name\":\"Azcarrate\",\"email\":\"ronamay.lucero@yahoo.com\",\"email_verified_at\":\"2020-10-04T01:59:05.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-10-04T01:57:36.000000Z\",\"updated_at\":\"2020-10-04T02:01:53.000000Z\",\"mobile_number\":\"9164205287\",\"country_code\":\"+63\",\"dob\":\"02\\/06\\/2016\",\"gender\":\"female\",\"address\":\"No. 6 Do\\u00f1a Isidora Street brgy Holy Spirit Quezon City\",\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NTE=\",\"date\":\"2020-10-06T09:02:47.880011Z\"}', '2020-10-12 19:53:21', '2020-10-06 09:02:47', '2020-10-12 19:53:21'),
('4b972c4f-d1a6-4908-a747-391111e0e43c', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 82, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":45,\"first_name\":\"Emmalene\",\"last_name\":\"Albor\",\"email\":\"emmalene.morales13@gmail.com\",\"email_verified_at\":\"2020-08-19T18:16:05.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-08-19T18:15:38.000000Z\",\"updated_at\":\"2020-09-06T19:17:26.000000Z\",\"mobile_number\":\"79398103\",\"country_code\":\"+968\",\"dob\":\"10\\/13\\/1986\",\"gender\":\"female\",\"address\":\"Muntinlupa City\",\"image\":\"7d01ff64df9c64dfda400f087b8ee525.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-26T18:37:51.363030Z\"}', '2020-09-26 18:38:34', '2020-09-26 18:37:51', '2020-09-26 18:38:34'),
('4bf703f3-f2b2-42d9-9ca2-c1bed74586ac', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 15, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/MTQ=\",\"date\":\"2020-09-16T18:53:31.308147Z\"}', '2020-09-16 18:56:43', '2020-09-16 18:53:31', '2020-09-16 18:56:43'),
('51ed98b8-6f5d-413c-bbdf-0dce1a206564', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 66, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":25,\"first_name\":\"Aubrey\",\"last_name\":\"Artienda\",\"email\":\"aubreyartienda@yahoo.com\",\"email_verified_at\":\"2020-08-16T21:56:16.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-08-16T21:54:24.000000Z\",\"updated_at\":\"2020-09-08T17:47:53.000000Z\",\"mobile_number\":\"9985543054\",\"country_code\":\"+63\",\"dob\":\"12\\/20\\/1989\",\"gender\":\"female\",\"address\":\"Old Balara, Quezon City\",\"image\":\"7521448cbe1e35b76dce5a80a6398f70.jpg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-25T02:56:13.322867Z\"}', '2020-09-25 04:46:41', '2020-09-25 02:56:13', '2020-09-25 04:46:41'),
('549c7b97-ce9a-488d-b8ce-eec1988352c0', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 144, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-10-01T02:40:24.591015Z\"}', '2020-10-01 06:43:23', '2020-10-01 02:40:24', '2020-10-01 06:43:23'),
('5557ff1f-9af3-418b-9556-6951e35ecb40', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 45, '{\"data\":\"Congratulations! You\'ve received a appointment request from Rachelle Cosgafa\",\"user\":{\"id\":206,\"first_name\":\"Rachelle\",\"last_name\":\"Cosgafa\",\"email\":\"chelcosgafa@gmail.com\",\"email_verified_at\":\"2020-10-16T23:06:48.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-10-16T22:58:07.000000Z\",\"updated_at\":\"2020-10-16T23:08:46.000000Z\",\"mobile_number\":\"9483950998\",\"country_code\":\"+63\",\"dob\":\"07\\/17\\/1994\",\"gender\":\"female\",\"address\":\"Tubigon Bohol\",\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NTk=\",\"date\":\"2020-10-16T23:17:11.188472Z\"}', '2020-10-17 04:57:19', '2020-10-16 23:17:11', '2020-10-17 04:57:19'),
('56da595c-e14e-46cf-b01b-8e2df2868313', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 45, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/MTg=\",\"date\":\"2020-09-19T15:47:21.613077Z\"}', '2020-09-19 15:47:58', '2020-09-19 15:47:21', '2020-09-19 15:47:58'),
('57d22cf4-d906-4f91-a61f-9738f2ef3798', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 76, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":25,\"first_name\":\"Aubrey\",\"last_name\":\"Artienda\",\"email\":\"aubreyartienda@yahoo.com\",\"email_verified_at\":\"2020-08-16T21:56:16.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-08-16T21:54:24.000000Z\",\"updated_at\":\"2020-09-08T17:47:53.000000Z\",\"mobile_number\":\"9985543054\",\"country_code\":\"+63\",\"dob\":\"12\\/20\\/1989\",\"gender\":\"female\",\"address\":\"Old Balara, Quezon City\",\"image\":\"7521448cbe1e35b76dce5a80a6398f70.jpg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-25T03:46:41.004046Z\"}', '2020-09-25 03:46:51', '2020-09-25 03:46:41', '2020-09-25 03:46:51'),
('5b64adcc-10f1-4496-9c9c-043104b4612c', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 25, '{\"data\":\"Congratulations! You\'ve received a meeting request fromRetchen Corpuz\",\"user\":{\"id\":66,\"first_name\":\"Retchen\",\"last_name\":\"Corpuz\",\"email\":\"morgan.morganette@rocketmail.com\",\"email_verified_at\":\"2020-09-16T04:43:29.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-16T04:42:04.000000Z\",\"updated_at\":\"2020-09-16T04:49:47.000000Z\",\"mobile_number\":\"9396071220\",\"country_code\":\"+63\",\"dob\":\"10\\/06\\/1985\",\"gender\":\"female\",\"address\":\"63 Ilang-Ilang St. Karuhatan, Valenzuela City\",\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/MzQ=\",\"date\":\"2020-09-25T02:07:34.167815Z\"}', '2020-09-25 02:07:53', '2020-09-25 02:07:34', '2020-09-25 02:07:53');
INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('5c105321-0cb5-49f2-ab90-9767f0e5f3f1', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 32, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-28T17:59:05.350326Z\"}', NULL, '2020-09-28 17:59:05', '2020-09-28 17:59:05'),
('5cd5cb9e-6a24-411a-9264-11a6a6170423', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"Medical certificate has been received\",\"user\":{\"id\":188,\"first_name\":\"Joy Ann\",\"last_name\":\"de Castro\",\"email\":\"joyous_angel2001@yahoo.com\",\"email_verified_at\":\"2020-10-10T09:34:50.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-10-10T09:34:18.000000Z\",\"updated_at\":\"2020-10-10T15:28:23.000000Z\",\"mobile_number\":\"9324306334\",\"country_code\":\"+63\",\"dob\":\"12\\/11\\/1986\",\"gender\":\"female\",\"address\":\"Block 26 Lot 20 Carmela Valley Homes Talisay City Negros Occidental\",\"image\":\"443c42f6d7730e5bf165dd904eb9b8ba.jpeg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-10-25T10:23:13.414900Z\"}', '2020-10-25 12:14:11', '2020-10-25 10:23:13', '2020-10-25 12:14:11'),
('5db21702-a41c-497b-81d7-726ee8b2e108', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":56,\"first_name\":\"Deriza Marie\",\"last_name\":\"Quintana\",\"email\":\"quintanadeemd@gmail.com\",\"email_verified_at\":\"2020-09-13T17:37:24.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-13T17:36:56.000000Z\",\"updated_at\":\"2020-09-28T11:28:21.000000Z\",\"mobile_number\":\"9218649911\",\"country_code\":\"+63\",\"dob\":\"04\\/30\\/1987\",\"gender\":\"female\",\"address\":\"38 Daisy Road Phase 5A Pilar Village Las Pinas\",\"image\":\"14e3ecb03a5d4f3fd1adc97e96ece2d9.jpg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-10-18T07:52:43.127838Z\"}', '2020-10-18 07:52:50', '2020-10-18 07:52:43', '2020-10-18 07:52:50'),
('5eba17ec-034a-4785-b92a-1b31ce1a22de', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 45, '{\"data\":\"Congratulations! You\'ve received a meeting request fromCiara Magallanes\",\"user\":{\"id\":73,\"first_name\":\"Ciara\",\"last_name\":\"Magallanes\",\"email\":\"mommydiariesblog@gmail.com\",\"email_verified_at\":\"2020-09-21T08:52:59.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-21T08:52:15.000000Z\",\"updated_at\":\"2020-09-21T08:52:59.000000Z\",\"mobile_number\":null,\"country_code\":null,\"dob\":null,\"gender\":\"male\",\"address\":null,\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/MjQ=\",\"date\":\"2020-09-21T12:03:31.318886Z\"}', '2020-09-21 12:04:56', '2020-09-21 12:03:31', '2020-09-21 12:04:56'),
('5f434503-c285-40b5-8d10-aa37deda10bb', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 25, '{\"data\":\"Congratulations! You\'ve received a meeting request fromAnna Marie Ylade\",\"user\":{\"id\":138,\"first_name\":\"Anna Marie\",\"last_name\":\"Ylade\",\"email\":\"mc.claveria@yahoo.com\",\"email_verified_at\":\"2020-09-30T02:16:51.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-30T02:15:43.000000Z\",\"updated_at\":\"2020-09-30T02:16:51.000000Z\",\"mobile_number\":null,\"country_code\":null,\"dob\":null,\"gender\":\"male\",\"address\":null,\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NDc=\",\"date\":\"2020-09-30T02:24:46.467212Z\"}', NULL, '2020-09-30 02:24:46', '2020-09-30 02:24:46'),
('600228a0-0fdb-4663-a098-93cb55529631', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":180,\"first_name\":\"Gracielle May\",\"last_name\":\"Mendoza Yu\",\"email\":\"gmendozayu@gmail.com\",\"email_verified_at\":\"2020-10-07T08:49:53.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-10-07T08:49:20.000000Z\",\"updated_at\":\"2020-10-11T06:00:12.000000Z\",\"mobile_number\":\"9956193259\",\"country_code\":\"+63\",\"dob\":\"05\\/18\\/1985\",\"gender\":\"female\",\"address\":\"4 yakal road pilar village las pinas\",\"image\":\"3f17c367624dde4ddc39419483929b6f.jpg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-10-20T06:26:18.336116Z\"}', '2020-10-20 07:28:19', '2020-10-20 06:26:18', '2020-10-20 07:28:19'),
('624c3dea-f4d8-4407-ac26-6360c940ab6b', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 25, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NDQ=\",\"date\":\"2020-09-29T07:47:52.084286Z\"}', '2020-09-29 07:49:16', '2020-09-29 07:47:52', '2020-09-29 07:49:16'),
('631d070a-8735-49ca-b2d4-343954407114', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":188,\"first_name\":\"Joy Ann\",\"last_name\":\"de Castro\",\"email\":\"joyous_angel2001@yahoo.com\",\"email_verified_at\":\"2020-10-10T09:34:50.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-10-10T09:34:18.000000Z\",\"updated_at\":\"2020-10-10T15:28:23.000000Z\",\"mobile_number\":\"9324306334\",\"country_code\":\"+63\",\"dob\":\"12\\/11\\/1986\",\"gender\":\"female\",\"address\":\"Block 26 Lot 20 Carmela Valley Homes Talisay City Negros Occidental\",\"image\":\"443c42f6d7730e5bf165dd904eb9b8ba.jpeg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-10-25T10:19:57.833040Z\"}', '2020-10-25 10:21:16', '2020-10-25 10:19:57', '2020-10-25 10:21:16'),
('64edff5a-78da-4977-afd5-769a8e78b6d6', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 25, '{\"data\":\"Congratulations! You\'ve received a meeting request fromManoj Kumar\",\"user\":{\"id\":14,\"first_name\":\"Manoj\",\"last_name\":\"Kumar\",\"email\":\"mk5103@gmail.com\",\"email_verified_at\":\"2020-07-30T13:35:01.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-07-30T13:31:57.000000Z\",\"updated_at\":\"2020-08-16T16:28:48.000000Z\",\"mobile_number\":\"9785082368\",\"country_code\":\"+91\",\"dob\":\"07\\/28\\/1987\",\"gender\":\"male\",\"address\":\"Pratap Nagar, Sanganer, Jaipur (Rajasthan), 302033\",\"image\":\"8d744628d3600bbdee787882bae1a352.jpg\",\"city\":null,\"timezone\":\"Asia\\/Calcutta\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/room\\/join\\/Mzc=\",\"date\":\"2020-09-26T05:57:34.206014Z\"}', '2020-09-26 07:30:37', '2020-09-26 05:57:34', '2020-09-26 07:30:37'),
('65ea6c9f-b966-44c2-ba4a-2038eb63b285', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 39, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-28T17:58:37.921251Z\"}', '2020-09-29 03:49:18', '2020-09-28 17:58:37', '2020-09-29 03:49:18'),
('65f40e53-d318-4102-b520-0bed600cca2b', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 45, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/room\\/join\\/MjA=\",\"date\":\"2020-09-19T17:08:56.191874Z\"}', '2020-09-21 06:54:02', '2020-09-19 17:08:56', '2020-09-21 06:54:02'),
('678d069e-781f-47b0-b74c-30564ada2c73', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 14, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":15,\"first_name\":\"Manoj\",\"last_name\":\"Kumar Soni\",\"email\":\"manoj.upwork87@gmail.com\",\"email_verified_at\":\"2020-07-30T16:37:55.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-07-30T16:37:19.000000Z\",\"updated_at\":\"2020-08-08T11:57:52.000000Z\",\"mobile_number\":\"7014594477\",\"country_code\":\"+91\",\"dob\":\"07\\/28\\/1987\",\"gender\":\"male\",\"address\":\"Pratap Nagar\",\"image\":\"fcbe464b7aaf9bb96daa90d4a0934fa3.jpg\",\"city\":null,\"timezone\":\"Asia\\/Calcutta\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-26T06:05:53.965247Z\"}', '2020-09-26 06:07:40', '2020-09-26 06:05:53', '2020-09-26 06:07:40'),
('67987600-ea46-4206-91a6-19d2a91eb018', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 45, '{\"data\":\"Congratulations! You\'ve received a meeting request fromCiara Magallanes\",\"user\":{\"id\":73,\"first_name\":\"Ciara\",\"last_name\":\"Magallanes\",\"email\":\"mommydiariesblog@gmail.com\",\"email_verified_at\":\"2020-09-21T08:52:59.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-21T08:52:15.000000Z\",\"updated_at\":\"2020-09-21T08:52:59.000000Z\",\"mobile_number\":null,\"country_code\":null,\"dob\":null,\"gender\":\"male\",\"address\":null,\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/MjU=\",\"date\":\"2020-09-21T12:33:38.774504Z\"}', '2020-09-21 12:38:22', '2020-09-21 12:33:38', '2020-09-21 12:38:22'),
('680e712a-00cf-4c40-8a90-0f80084e87e2', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 48, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-28T17:58:29.734382Z\"}', '2020-09-29 03:27:30', '2020-09-28 17:58:29', '2020-09-29 03:27:30'),
('6990c0b3-d539-4a99-b5ef-d100efe27a40', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":188,\"first_name\":\"Joy Ann\",\"last_name\":\"de Castro\",\"email\":\"joyous_angel2001@yahoo.com\",\"email_verified_at\":\"2020-10-10T09:34:50.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-10-10T09:34:18.000000Z\",\"updated_at\":\"2020-10-10T15:28:23.000000Z\",\"mobile_number\":\"9324306334\",\"country_code\":\"+63\",\"dob\":\"12\\/11\\/1986\",\"gender\":\"female\",\"address\":\"Block 26 Lot 20 Carmela Valley Homes Talisay City Negros Occidental\",\"image\":\"443c42f6d7730e5bf165dd904eb9b8ba.jpeg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-10-25T10:19:57.980589Z\"}', '2020-10-25 10:21:16', '2020-10-25 10:19:57', '2020-10-25 10:21:16'),
('69e7c4ec-ce13-476f-a2c5-17a34d6e5a89', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 1, '{\"data\":\"Withdraw request has been received\",\"user\":{\"id\":15,\"first_name\":\"Manoj\",\"last_name\":\"Kumar Soni\",\"email\":\"manoj.upwork87@gmail.com\",\"email_verified_at\":\"2020-07-30T16:37:55.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-07-30T16:37:19.000000Z\",\"updated_at\":\"2020-08-08T11:57:52.000000Z\",\"mobile_number\":\"7014594477\",\"country_code\":\"+91\",\"dob\":\"07\\/28\\/1987\",\"gender\":\"male\",\"address\":\"Pratap Nagar\",\"image\":\"fcbe464b7aaf9bb96daa90d4a0934fa3.jpg\",\"city\":null,\"timezone\":\"Asia\\/Calcutta\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/admin\\/withdraw\",\"date\":\"2020-09-26T06:08:55.773318Z\"}', '2020-10-19 08:52:59', '2020-09-26 06:08:55', '2020-10-19 08:52:59'),
('6aa4acbb-8a90-4d53-87e5-304a28269817', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"Medical certificate has been received\",\"user\":{\"id\":25,\"first_name\":\"Aubrey\",\"last_name\":\"Artienda\",\"email\":\"aubreyartienda@yahoo.com\",\"email_verified_at\":\"2020-08-16T21:56:16.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-08-16T21:54:24.000000Z\",\"updated_at\":\"2020-09-08T17:47:53.000000Z\",\"mobile_number\":\"9985543054\",\"country_code\":\"+63\",\"dob\":\"12\\/20\\/1989\",\"gender\":\"female\",\"address\":\"Old Balara, Quezon City\",\"image\":\"7521448cbe1e35b76dce5a80a6398f70.jpg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-23T12:32:41.024053Z\"}', '2020-09-24 02:29:34', '2020-09-23 12:32:41', '2020-09-24 02:29:34'),
('6bcf47fe-72be-49f0-8675-797354b7286e', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 37, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-30T10:56:20.410992Z\"}', '2020-09-30 11:02:45', '2020-09-30 10:56:20', '2020-09-30 11:02:45'),
('6cd89981-ac3e-4642-9117-9a78930f0ffa', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 37, '{\"data\":\"Congratulations! You\'ve received a meeting request fromRosalia Roman\",\"user\":{\"id\":190,\"first_name\":\"Rosalia\",\"last_name\":\"Roman\",\"email\":\"rosalia092677@gmail.com\",\"email_verified_at\":\"2020-10-11T03:23:47.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-10-11T03:21:03.000000Z\",\"updated_at\":\"2020-10-11T04:44:51.000000Z\",\"mobile_number\":\"9265868317\",\"country_code\":\"+63\",\"dob\":\"09\\/26\\/1977\",\"gender\":\"female\",\"address\":\"General Santos City\",\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NTI=\",\"date\":\"2020-10-11T09:36:34.489913Z\"}', '2020-10-11 09:37:38', '2020-10-11 09:36:34', '2020-10-11 09:37:38'),
('6e6d1386-0380-42c6-928f-31907c1f7615', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":25,\"first_name\":\"Aubrey\",\"last_name\":\"Artienda\",\"email\":\"aubreyartienda@yahoo.com\",\"email_verified_at\":\"2020-08-16T21:56:16.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-08-16T21:54:24.000000Z\",\"updated_at\":\"2020-09-08T17:47:53.000000Z\",\"mobile_number\":\"9985543054\",\"country_code\":\"+63\",\"dob\":\"12\\/20\\/1989\",\"gender\":\"female\",\"address\":\"Old Balara, Quezon City\",\"image\":\"7521448cbe1e35b76dce5a80a6398f70.jpg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-23T12:18:43.715880Z\"}', '2020-09-23 12:24:38', '2020-09-23 12:18:43', '2020-09-23 12:24:38'),
('6ee76f4e-624d-4b1f-b015-bdc5f981e604', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 37, '{\"data\":\"Congratulations! You\'ve received a meeting request fromRosalia Roman\",\"user\":{\"id\":190,\"first_name\":\"Rosalia\",\"last_name\":\"Roman\",\"email\":\"rosalia092677@gmail.com\",\"email_verified_at\":\"2020-10-11T03:23:47.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-10-11T03:21:03.000000Z\",\"updated_at\":\"2020-10-11T04:44:51.000000Z\",\"mobile_number\":\"9265868317\",\"country_code\":\"+63\",\"dob\":\"09\\/26\\/1977\",\"gender\":\"female\",\"address\":\"General Santos City\",\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NTM=\",\"date\":\"2020-10-11T10:03:05.926077Z\"}', '2020-10-11 10:06:22', '2020-10-11 10:03:05', '2020-10-11 10:06:22'),
('6f43475a-a90c-4f33-8bc2-e0d1790e373e', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 180, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-10-07T16:15:34.855896Z\"}', '2020-10-08 13:49:06', '2020-10-07 16:15:34', '2020-10-08 13:49:06'),
('6f861d3e-c2ba-4c1a-a797-b72b7f3d36ee', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":38,\"first_name\":\"Marie Franz\",\"last_name\":\"Alcala\",\"email\":\"mariefranzdalcala@gmail.com\",\"email_verified_at\":\"2020-08-17T12:16:41.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-08-17T12:15:44.000000Z\",\"updated_at\":\"2020-09-29T04:43:43.000000Z\",\"mobile_number\":\"9176350213\",\"country_code\":\"+63\",\"dob\":\"02\\/13\\/1988\",\"gender\":\"female\",\"address\":\"1635 A caton st. brgay La Paz Makati City\",\"image\":\"3638f9ef0c6dda7ecb2903e1a24e7d19.jpeg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-10-25T12:22:49.578981Z\"}', '2020-10-26 06:59:49', '2020-10-25 12:22:49', '2020-10-26 06:59:49'),
('704601dd-b330-434a-9fad-a057a660a0d8', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 26, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-28T17:59:21.624882Z\"}', '2020-09-29 10:33:15', '2020-09-28 17:59:21', '2020-09-29 10:33:15'),
('71ab9b89-2d0c-4763-9bca-99b4e271d99d', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 58, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-10-04T13:54:42.220548Z\"}', '2020-10-14 06:39:19', '2020-10-04 13:54:42', '2020-10-14 06:39:19'),
('72743940-6e8e-4a87-be65-fcbf3bd33b99', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 60, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-28T17:57:55.401636Z\"}', '2020-09-30 12:24:52', '2020-09-28 17:57:55', '2020-09-30 12:24:52'),
('758f4b8a-5e06-45aa-873c-9161cb884b85', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 56, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-25T07:50:03.156288Z\"}', '2020-09-28 18:36:58', '2020-09-25 07:50:03', '2020-09-28 18:36:58'),
('7864f553-a9d2-4bc9-8589-0c83b2239868', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 180, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NjM=\",\"date\":\"2020-10-20T06:11:44.123316Z\"}', '2020-10-20 06:12:08', '2020-10-20 06:11:44', '2020-10-20 06:12:08'),
('798b4d38-267e-4580-914c-bd8677931041', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"Sick certificate has been received\",\"user\":{\"id\":45,\"first_name\":\"Emmalene\",\"last_name\":\"Albor\",\"email\":\"emmalene.morales13@gmail.com\",\"email_verified_at\":\"2020-08-19T18:16:05.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-08-19T18:15:38.000000Z\",\"updated_at\":\"2020-09-06T19:17:26.000000Z\",\"mobile_number\":\"79398103\",\"country_code\":\"+968\",\"dob\":\"10\\/13\\/1986\",\"gender\":\"female\",\"address\":\"Muntinlupa City\",\"image\":\"7d01ff64df9c64dfda400f087b8ee525.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-19T15:54:50.135782Z\"}', '2020-09-19 15:55:28', '2020-09-19 15:54:50', '2020-09-19 15:55:28'),
('7a797f82-40e5-49cf-9fdb-737ce7bf0f74', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"Sick certificate has been received\",\"user\":{\"id\":56,\"first_name\":\"Deriza Marie\",\"last_name\":\"Quintana\",\"email\":\"quintanadeemd@gmail.com\",\"email_verified_at\":\"2020-09-13T17:37:24.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-13T17:36:56.000000Z\",\"updated_at\":\"2020-09-28T11:28:21.000000Z\",\"mobile_number\":\"9218649911\",\"country_code\":\"+63\",\"dob\":\"04\\/30\\/1987\",\"gender\":\"female\",\"address\":\"38 Daisy Road Phase 5A Pilar Village Las Pinas\",\"image\":\"14e3ecb03a5d4f3fd1adc97e96ece2d9.jpg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-10-18T07:53:26.555985Z\"}', '2020-10-18 07:58:01', '2020-10-18 07:53:26', '2020-10-18 07:58:01'),
('7a928872-beac-439f-9d46-518ec989719b', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 34, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-28T17:58:54.808494Z\"}', '2020-10-02 13:23:57', '2020-09-28 17:58:54', '2020-10-02 13:23:57'),
('7af4d272-2290-4e1f-b7e7-210cb54a68cd', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 82, '{\"data\":\"Medical certificate has been received\",\"user\":{\"id\":45,\"first_name\":\"Emmalene\",\"last_name\":\"Albor\",\"email\":\"emmalene.morales13@gmail.com\",\"email_verified_at\":\"2020-08-19T18:16:05.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-08-19T18:15:38.000000Z\",\"updated_at\":\"2020-09-06T19:17:26.000000Z\",\"mobile_number\":\"79398103\",\"country_code\":\"+968\",\"dob\":\"10\\/13\\/1986\",\"gender\":\"female\",\"address\":\"Muntinlupa City\",\"image\":\"7d01ff64df9c64dfda400f087b8ee525.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-26T18:44:05.511941Z\"}', '2020-09-26 19:19:37', '2020-09-26 18:44:05', '2020-09-26 19:19:37'),
('7b593db0-ccf2-4383-9a2a-9156be3e120e', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 1, '{\"data\":\"Approval request has been received\",\"user\":{\"id\":189,\"first_name\":\"Joanne Karen\",\"last_name\":\"Recacho Turingan\",\"email\":\"drajoannekaren@yahoo.com\",\"email_verified_at\":\"2020-10-11T01:46:58.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-10-11T01:46:05.000000Z\",\"updated_at\":\"2020-10-11T01:52:41.000000Z\",\"mobile_number\":\"9175423002\",\"country_code\":\"+63\",\"dob\":\"02\\/19\\/1977\",\"gender\":\"female\",\"address\":\"11A Kaimito Avenue Town and Country Executive Village Antipolo City, Rizal\",\"image\":\"940251aa144cc19df40b48e3a6605f4a.jpeg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/admin\\/users\\/doctors\",\"date\":\"2020-10-11T01:54:40.562498Z\"}', '2020-10-19 08:52:59', '2020-10-11 01:54:40', '2020-10-19 08:52:59'),
('7ec588c1-4f17-4b5a-a13a-4d412f9222a2', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 15, '{\"data\":\"Congratulations! You\'ve received a meeting request fromManoj Kumar\",\"user\":{\"id\":14,\"first_name\":\"Manoj\",\"last_name\":\"Kumar\",\"email\":\"mk5103@gmail.com\",\"email_verified_at\":\"2020-07-30T13:35:01.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-07-30T13:31:57.000000Z\",\"updated_at\":\"2020-08-16T16:28:48.000000Z\",\"mobile_number\":\"9785082368\",\"country_code\":\"+91\",\"dob\":\"07\\/28\\/1987\",\"gender\":\"male\",\"address\":\"Pratap Nagar, Sanganer, Jaipur (Rajasthan), 302033\",\"image\":\"8d744628d3600bbdee787882bae1a352.jpg\",\"city\":null,\"timezone\":\"Asia\\/Calcutta\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/room\\/join\\/OQ==\",\"date\":\"2020-09-15T20:08:21.697764Z\"}', '2020-09-16 17:58:49', '2020-09-15 20:08:21', '2020-09-16 17:58:49'),
('80ad58f3-ec01-4ba0-a3ba-1443a0e44451', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 68, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-28T17:57:41.868129Z\"}', NULL, '2020-09-28 17:57:41', '2020-09-28 17:57:41'),
('8163f1ff-ba4f-4ad5-9226-f274040c15b5', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 62, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-28T17:57:50.902232Z\"}', NULL, '2020-09-28 17:57:50', '2020-09-28 17:57:50'),
('8755dccb-846d-4c37-91df-14e3070891c6', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"Medical certificate has been received\",\"user\":{\"id\":37,\"first_name\":\"Monique Therese\",\"last_name\":\"Punsalan\",\"email\":\"moniquepunsalan@gmail.com\",\"email_verified_at\":\"2020-08-17T12:09:03.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-08-17T12:07:32.000000Z\",\"updated_at\":\"2020-09-30T10:56:20.000000Z\",\"mobile_number\":\"9173098932\",\"country_code\":\"+63\",\"dob\":\"06\\/10\\/1986\",\"gender\":\"female\",\"address\":\"Quezon City\",\"image\":\"a90785fc6153ac130a96b029ef7f3bff.jpg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-10-11T11:17:56.137940Z\"}', '2020-10-11 11:18:39', '2020-10-11 11:17:56', '2020-10-11 11:18:39'),
('8a3e34e8-8c4a-4288-bb8f-2d96200ed635', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 221, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-10-28T06:15:58.932023Z\"}', NULL, '2020-10-28 06:15:58', '2020-10-28 06:15:58'),
('8ac4c273-02fd-4ceb-8737-a93f7cc9fd03', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 73, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":45,\"first_name\":\"Emmalene\",\"last_name\":\"Albor\",\"email\":\"emmalene.morales13@gmail.com\",\"email_verified_at\":\"2020-08-19T18:16:05.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-08-19T18:15:38.000000Z\",\"updated_at\":\"2020-09-06T19:17:26.000000Z\",\"mobile_number\":\"79398103\",\"country_code\":\"+968\",\"dob\":\"10\\/13\\/1986\",\"gender\":\"female\",\"address\":\"Muntinlupa City\",\"image\":\"7d01ff64df9c64dfda400f087b8ee525.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-21T13:00:01.632158Z\"}', '2020-09-28 06:10:57', '2020-09-21 13:00:01', '2020-09-28 06:10:57'),
('8bb35b93-d00d-4538-9ee0-3c436dcf0246', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 206, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":45,\"first_name\":\"Emmalene\",\"last_name\":\"Albor\",\"email\":\"emmalene.morales13@gmail.com\",\"email_verified_at\":\"2020-08-19T18:16:05.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-08-19T18:15:38.000000Z\",\"updated_at\":\"2020-10-07T16:20:04.000000Z\",\"mobile_number\":\"79398103\",\"country_code\":\"+968\",\"dob\":\"10\\/13\\/1986\",\"gender\":\"female\",\"address\":\"Muntinlupa City\",\"image\":\"7d01ff64df9c64dfda400f087b8ee525.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-10-18T02:32:49.804420Z\"}', NULL, '2020-10-18 02:32:49', '2020-10-18 02:32:49'),
('8ca11c8a-f9aa-4be5-8a53-f60cd642e6a4', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 65, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-28T17:57:46.213638Z\"}', NULL, '2020-09-28 17:57:46', '2020-09-28 17:57:46'),
('8fe69c49-693d-4401-8cad-341e7c39e8f2', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 41, '{\"data\":\"Congratulations! You\'ve received a meeting request fromZavina Azcarrate\",\"user\":{\"id\":165,\"first_name\":\"Zavina\",\"last_name\":\"Azcarrate\",\"email\":\"ronamay.lucero@yahoo.com\",\"email_verified_at\":\"2020-10-04T01:59:05.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-10-04T01:57:36.000000Z\",\"updated_at\":\"2020-10-04T02:01:53.000000Z\",\"mobile_number\":\"9164205287\",\"country_code\":\"+63\",\"dob\":\"02\\/06\\/2016\",\"gender\":\"female\",\"address\":\"No. 6 Do\\u00f1a Isidora Street brgy Holy Spirit Quezon City\",\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NTA=\",\"date\":\"2020-10-04T08:00:53.561200Z\"}', '2020-10-04 08:02:23', '2020-10-04 08:00:53', '2020-10-04 08:02:23'),
('9077831d-83e6-45a8-ad0c-8d3bc3e87e13', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 15, '{\"data\":\"Congratulations! You\'ve received a appointment request from Manoj Kumar\",\"user\":{\"id\":14,\"first_name\":\"Manoj\",\"last_name\":\"Kumar\",\"email\":\"mk5103@gmail.com\",\"email_verified_at\":\"2020-07-30T13:35:01.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-07-30T13:31:57.000000Z\",\"updated_at\":\"2020-08-16T16:28:48.000000Z\",\"mobile_number\":\"9785082368\",\"country_code\":\"+91\",\"dob\":\"07\\/28\\/1987\",\"gender\":\"male\",\"address\":\"Pratap Nagar, Sanganer, Jaipur (Rajasthan), 302033\",\"image\":\"8d744628d3600bbdee787882bae1a352.jpg\",\"city\":null,\"timezone\":\"Asia\\/Calcutta\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/room\\/join\\/NzA=\",\"date\":\"2020-11-01T11:05:53.067055Z\"}', '2020-11-01 11:06:08', '2020-11-01 11:05:53', '2020-11-01 11:06:08'),
('909378ed-802f-4914-8569-a38e7c95ac01', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"Medical certificate has been received\",\"user\":{\"id\":56,\"first_name\":\"Deriza Marie\",\"last_name\":\"Quintana\",\"email\":\"quintanadeemd@gmail.com\",\"email_verified_at\":\"2020-09-13T17:37:24.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-13T17:36:56.000000Z\",\"updated_at\":\"2020-09-28T11:28:21.000000Z\",\"mobile_number\":\"9218649911\",\"country_code\":\"+63\",\"dob\":\"04\\/30\\/1987\",\"gender\":\"female\",\"address\":\"38 Daisy Road Phase 5A Pilar Village Las Pinas\",\"image\":\"14e3ecb03a5d4f3fd1adc97e96ece2d9.jpg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-10-18T07:43:06.672422Z\"}', '2020-10-18 07:43:09', '2020-10-18 07:43:06', '2020-10-18 07:43:09'),
('950eafcc-1254-444c-8c51-48775312a99b', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 73, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":45,\"first_name\":\"Emmalene\",\"last_name\":\"Albor\",\"email\":\"emmalene.morales13@gmail.com\",\"email_verified_at\":\"2020-08-19T18:16:05.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-08-19T18:15:38.000000Z\",\"updated_at\":\"2020-09-06T19:17:26.000000Z\",\"mobile_number\":\"79398103\",\"country_code\":\"+968\",\"dob\":\"10\\/13\\/1986\",\"gender\":\"female\",\"address\":\"Muntinlupa City\",\"image\":\"7d01ff64df9c64dfda400f087b8ee525.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-21T12:39:21.991869Z\"}', '2020-09-21 12:40:04', '2020-09-21 12:39:21', '2020-09-21 12:40:04'),
('964ab59d-537c-4e1b-9cdc-e8c44b2eac7a', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"Sick certificate has been received\",\"user\":{\"id\":180,\"first_name\":\"Gracielle May\",\"last_name\":\"Mendoza Yu\",\"email\":\"gmendozayu@gmail.com\",\"email_verified_at\":\"2020-10-07T08:49:53.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-10-07T08:49:20.000000Z\",\"updated_at\":\"2020-10-11T06:00:12.000000Z\",\"mobile_number\":\"9956193259\",\"country_code\":\"+63\",\"dob\":\"05\\/18\\/1985\",\"gender\":\"female\",\"address\":\"4 yakal road pilar village las pinas\",\"image\":\"3f17c367624dde4ddc39419483929b6f.jpg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-10-20T06:31:52.153331Z\"}', '2020-10-20 07:28:19', '2020-10-20 06:31:52', '2020-10-20 07:28:19'),
('988e530d-2197-426c-865e-277b0e852d22', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 38, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/Njc=\",\"date\":\"2020-10-25T12:15:31.968226Z\"}', '2020-10-25 12:16:52', '2020-10-25 12:15:31', '2020-10-25 12:16:52'),
('98ef3a2d-8695-40f1-a95b-cf2c14cd5418', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 15, '{\"data\":\"Congratulations! You\'ve received a meeting request fromManoj Kumar\",\"user\":{\"id\":14,\"first_name\":\"Manoj\",\"last_name\":\"Kumar\",\"email\":\"mk5103@gmail.com\",\"email_verified_at\":\"2020-07-30T13:35:01.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-07-30T13:31:57.000000Z\",\"updated_at\":\"2020-08-16T16:28:48.000000Z\",\"mobile_number\":\"9785082368\",\"country_code\":\"+91\",\"dob\":\"07\\/28\\/1987\",\"gender\":\"male\",\"address\":\"Pratap Nagar, Sanganer, Jaipur (Rajasthan), 302033\",\"image\":\"8d744628d3600bbdee787882bae1a352.jpg\",\"city\":null,\"timezone\":\"Asia\\/Calcutta\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/room\\/join\\/Mzg=\",\"date\":\"2020-09-26T06:03:49.226934Z\"}', '2020-09-26 06:04:18', '2020-09-26 06:03:49', '2020-09-26 06:04:18'),
('9b2e309a-52dd-47ca-8a49-d1a3b494fb1f', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 45, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NDE=\",\"date\":\"2020-09-28T18:52:10.655212Z\"}', '2020-09-28 18:53:11', '2020-09-28 18:52:10', '2020-09-28 18:53:11'),
('9c335a0f-2ff9-4443-9422-3cbdbdcf3c58', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 25, '{\"data\":\"Congratulations! You\'ve received a appointment request from Retchen Corpuz\",\"user\":{\"id\":66,\"first_name\":\"Retchen\",\"last_name\":\"Corpuz\",\"email\":\"morgan.morganette@rocketmail.com\",\"email_verified_at\":\"2020-09-16T04:43:29.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-16T04:42:04.000000Z\",\"updated_at\":\"2020-09-16T04:49:47.000000Z\",\"mobile_number\":\"9396071220\",\"country_code\":\"+63\",\"dob\":\"10\\/06\\/1985\",\"gender\":\"female\",\"address\":\"63 Ilang-Ilang St. Karuhatan, Valenzuela City\",\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/MTc=\",\"date\":\"2020-09-18T10:42:56.187678Z\"}', '2020-09-18 10:45:02', '2020-09-18 10:42:56', '2020-09-18 10:45:02'),
('9d583867-516a-477c-a6e9-a4e48658b77d', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 129, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-30T20:51:13.179901Z\"}', '2020-10-03 04:17:29', '2020-09-30 20:51:13', '2020-10-03 04:17:29'),
('a2b9f549-1366-454a-97b5-a35140a9e037', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 25, '{\"data\":\"Congratulations! You\'ve received a meeting request fromAnna Marie Ylade\",\"user\":{\"id\":138,\"first_name\":\"Anna Marie\",\"last_name\":\"Ylade\",\"email\":\"mc.claveria@yahoo.com\",\"email_verified_at\":\"2020-09-30T02:16:51.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-30T02:15:43.000000Z\",\"updated_at\":\"2020-09-30T02:16:51.000000Z\",\"mobile_number\":null,\"country_code\":null,\"dob\":null,\"gender\":\"male\",\"address\":null,\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NDg=\",\"date\":\"2020-09-30T03:06:43.096657Z\"}', NULL, '2020-09-30 03:06:43', '2020-09-30 03:06:43'),
('a6d758aa-5b88-4c06-834a-3de2059a9691', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 29, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-10-04T14:50:37.485857Z\"}', '2020-10-04 15:04:05', '2020-10-04 14:50:37', '2020-10-04 15:04:05'),
('a8780887-2d62-4348-9035-d99bc1239ba6', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"Medical certificate has been received\",\"user\":{\"id\":194,\"first_name\":\"Amethyst\",\"last_name\":\"Montilla\",\"email\":\"thysiapsyayay@gmail.com\",\"email_verified_at\":\"2020-10-12T07:41:14.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-10-12T07:40:44.000000Z\",\"updated_at\":\"2020-10-12T10:54:04.000000Z\",\"mobile_number\":\"9567233353\",\"country_code\":\"+63\",\"dob\":\"12\\/05\\/1992\",\"gender\":\"female\",\"address\":\"Dasmarinas, Cavite\",\"image\":\"e73be9e9d37f2398be6a4e9f3ce0b451.jpg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-10-15T06:38:54.229456Z\"}', '2020-10-15 06:39:37', '2020-10-15 06:38:54', '2020-10-15 06:39:37'),
('abc4013d-69c3-43f4-93e1-fd2124593dc3', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 37, '{\"data\":\"Congratulations! You\'ve received a meeting request fromCiara Magallanes\",\"user\":{\"id\":74,\"first_name\":\"Ciara\",\"last_name\":\"Magallanes\",\"email\":\"vladmagallanes@gmail.com\",\"email_verified_at\":\"2020-10-28T04:25:39.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-21T11:56:27.000000Z\",\"updated_at\":\"2020-10-28T04:25:39.000000Z\",\"mobile_number\":null,\"country_code\":null,\"dob\":null,\"gender\":\"male\",\"address\":null,\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Shanghai\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/room\\/join\\/Njg=\",\"date\":\"2020-10-28T06:36:51.480871Z\"}', '2020-10-28 06:55:09', '2020-10-28 06:36:51', '2020-10-28 06:55:09');
INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('abfd6175-d401-4f52-a79a-a12b17c1460c', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":194,\"first_name\":\"Amethyst\",\"last_name\":\"Montilla\",\"email\":\"thysiapsyayay@gmail.com\",\"email_verified_at\":\"2020-10-12T07:41:14.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-10-12T07:40:44.000000Z\",\"updated_at\":\"2020-10-12T10:54:04.000000Z\",\"mobile_number\":\"9567233353\",\"country_code\":\"+63\",\"dob\":\"12\\/05\\/1992\",\"gender\":\"female\",\"address\":\"Dasmarinas, Cavite\",\"image\":\"e73be9e9d37f2398be6a4e9f3ce0b451.jpg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-10-15T06:36:21.624574Z\"}', '2020-10-15 06:37:36', '2020-10-15 06:36:21', '2020-10-15 06:37:36'),
('ac4bb662-b4fe-4fef-8dd8-cd24efee1990', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":56,\"first_name\":\"Deriza Marie\",\"last_name\":\"Quintana\",\"email\":\"quintanadeemd@gmail.com\",\"email_verified_at\":\"2020-09-13T17:37:24.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-13T17:36:56.000000Z\",\"updated_at\":\"2020-09-28T11:28:21.000000Z\",\"mobile_number\":\"9218649911\",\"country_code\":\"+63\",\"dob\":\"04\\/30\\/1987\",\"gender\":\"female\",\"address\":\"38 Daisy Road Phase 5A Pilar Village Las Pinas\",\"image\":\"14e3ecb03a5d4f3fd1adc97e96ece2d9.jpg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-10-18T07:41:14.012639Z\"}', '2020-10-18 07:43:09', '2020-10-18 07:41:14', '2020-10-18 07:43:09'),
('acdee542-e350-40c6-b1a9-f9f5f061f458', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 45, '{\"data\":\"Congratulations! You\'ve received a meeting request fromCiara Magallanes\",\"user\":{\"id\":73,\"first_name\":\"Ciara\",\"last_name\":\"Magallanes\",\"email\":\"mommydiariesblog@gmail.com\",\"email_verified_at\":\"2020-09-21T08:52:59.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-21T08:52:15.000000Z\",\"updated_at\":\"2020-09-21T08:52:59.000000Z\",\"mobile_number\":null,\"country_code\":null,\"dob\":null,\"gender\":\"male\",\"address\":null,\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/MjY=\",\"date\":\"2020-09-21T12:43:56.616465Z\"}', '2020-09-21 12:44:57', '2020-09-21 12:43:56', '2020-09-21 12:44:57'),
('acf33f2a-82a3-4fc3-b5ea-e23ce136000d', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 27, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-29T04:30:25.923354Z\"}', NULL, '2020-09-29 04:30:25', '2020-09-29 04:30:25'),
('ad647658-0f8a-49b5-a57f-d7f96e23d726', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"Sick certificate has been received\",\"user\":{\"id\":194,\"first_name\":\"Amethyst\",\"last_name\":\"Montilla\",\"email\":\"thysiapsyayay@gmail.com\",\"email_verified_at\":\"2020-10-12T07:41:14.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-10-12T07:40:44.000000Z\",\"updated_at\":\"2020-10-12T10:54:04.000000Z\",\"mobile_number\":\"9567233353\",\"country_code\":\"+63\",\"dob\":\"12\\/05\\/1992\",\"gender\":\"female\",\"address\":\"Dasmarinas, Cavite\",\"image\":\"e73be9e9d37f2398be6a4e9f3ce0b451.jpg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-10-15T06:41:04.361559Z\"}', '2020-10-15 07:14:52', '2020-10-15 06:41:04', '2020-10-15 07:14:52'),
('b0135cdc-ee22-460b-a0bb-1b9d1b69140b', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 180, '{\"data\":\"Congratulations! You\'ve received a meeting request fromLEONORA TUMALA\",\"user\":{\"id\":217,\"first_name\":\"LEONORA\",\"last_name\":\"TUMALA\",\"email\":\"princessjhoannetumala@gmail.com\",\"email_verified_at\":\"2020-10-23T04:30:08.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-10-23T04:26:38.000000Z\",\"updated_at\":\"2020-10-23T04:30:08.000000Z\",\"mobile_number\":null,\"country_code\":null,\"dob\":null,\"gender\":\"male\",\"address\":null,\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Shanghai\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/room\\/join\\/NjQ=\",\"date\":\"2020-10-23T09:23:09.749852Z\"}', '2020-10-23 09:23:50', '2020-10-23 09:23:09', '2020-10-23 09:23:50'),
('b163b376-8a04-4bbe-84fe-3d3e6c3c1be8', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 65, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-16T09:56:07.051269Z\"}', '2020-09-16 09:56:52', '2020-09-16 09:56:07', '2020-09-16 09:56:52'),
('b1f7effc-37b9-427e-9e0e-185fd6bb1335', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 194, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-10-12T10:54:05.231698Z\"}', '2020-10-12 11:04:15', '2020-10-12 10:54:05', '2020-10-12 11:04:15'),
('b328f0c7-dd62-4fdb-9ed4-40fa81372be5', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":45,\"first_name\":\"Emmalene\",\"last_name\":\"Albor\",\"email\":\"emmalene.morales13@gmail.com\",\"email_verified_at\":\"2020-08-19T18:16:05.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-08-19T18:15:38.000000Z\",\"updated_at\":\"2020-09-06T19:17:26.000000Z\",\"mobile_number\":\"79398103\",\"country_code\":\"+968\",\"dob\":\"10\\/13\\/1986\",\"gender\":\"female\",\"address\":\"Muntinlupa City\",\"image\":\"7d01ff64df9c64dfda400f087b8ee525.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-21T07:47:50.853364Z\"}', '2020-09-21 07:51:24', '2020-09-21 07:47:50', '2020-09-21 07:51:24'),
('b49546ae-411c-4969-bc36-edfe1b160771', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 45, '{\"data\":\"Congratulations! You\'ve received a appointment request from Eulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/room\\/join\\/MjI=\",\"date\":\"2020-09-21T09:15:46.599976Z\"}', '2020-09-21 09:57:35', '2020-09-21 09:15:46', '2020-09-21 09:57:35'),
('b6eaed18-f1d8-4667-8fc1-6ca468295924', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 45, '{\"data\":\"Congratulations! You\'ve received a appointment request from Ciara Magallanes\",\"user\":{\"id\":73,\"first_name\":\"Ciara\",\"last_name\":\"Magallanes\",\"email\":\"mommydiariesblog@gmail.com\",\"email_verified_at\":\"2020-09-21T08:52:59.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-21T08:52:15.000000Z\",\"updated_at\":\"2020-09-21T08:52:59.000000Z\",\"mobile_number\":null,\"country_code\":null,\"dob\":null,\"gender\":\"male\",\"address\":null,\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/MjM=\",\"date\":\"2020-09-21T09:41:43.443025Z\"}', '2020-09-21 09:57:35', '2020-09-21 09:41:43', '2020-09-21 09:57:35'),
('b865ffbb-88cb-4a70-89c4-1b988b496565', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 188, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NjY=\",\"date\":\"2020-10-25T10:03:21.961285Z\"}', '2020-10-25 10:04:11', '2020-10-25 10:03:21', '2020-10-25 10:04:11'),
('b8d31366-36d5-42fd-84a4-0f312b94d403', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 56, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NjE=\",\"date\":\"2020-10-18T07:47:09.836725Z\"}', '2020-10-18 07:50:28', '2020-10-18 07:47:09', '2020-10-18 07:50:28'),
('bd1c34df-e3d7-4cd6-9abe-d4b94f36affe', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 15, '{\"data\":\"Congratulations! You\'ve received a meeting request fromManoj Kumar\",\"user\":{\"id\":14,\"first_name\":\"Manoj\",\"last_name\":\"Kumar\",\"email\":\"mk5103@gmail.com\",\"email_verified_at\":\"2020-07-30T13:35:01.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-07-30T13:31:57.000000Z\",\"updated_at\":\"2020-08-16T16:28:48.000000Z\",\"mobile_number\":\"9785082368\",\"country_code\":\"+91\",\"dob\":\"07\\/28\\/1987\",\"gender\":\"male\",\"address\":\"Pratap Nagar, Sanganer, Jaipur (Rajasthan), 302033\",\"image\":\"8d744628d3600bbdee787882bae1a352.jpg\",\"city\":null,\"timezone\":\"Asia\\/Calcutta\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/room\\/join\\/MTM=\",\"date\":\"2020-09-16T18:18:52.853313Z\"}', '2020-09-16 18:56:43', '2020-09-16 18:18:52', '2020-09-16 18:56:43'),
('bdd0c7a9-86cd-435a-94b0-5393283a7600', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 1, '{\"data\":\"Withdraw request has been received\",\"user\":{\"id\":45,\"first_name\":\"Emmalene\",\"last_name\":\"Albor\",\"email\":\"emmalene.morales13@gmail.com\",\"email_verified_at\":\"2020-08-19T18:16:05.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-08-19T18:15:38.000000Z\",\"updated_at\":\"2020-10-04T14:35:14.000000Z\",\"mobile_number\":\"79398103\",\"country_code\":\"+968\",\"dob\":\"10\\/13\\/1986\",\"gender\":\"female\",\"address\":\"Muntinlupa City\",\"image\":\"7d01ff64df9c64dfda400f087b8ee525.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/admin\\/withdraw\",\"date\":\"2020-10-04T16:45:52.927747Z\"}', '2020-10-19 08:52:59', '2020-10-04 16:45:52', '2020-10-19 08:52:59'),
('c0dfe375-f0d5-4c49-af5c-9b17e22167e7', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 34, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-10-19T04:38:49.473850Z\"}', NULL, '2020-10-19 04:38:49', '2020-10-19 04:38:49'),
('c214f01d-bf31-4486-a421-5381b2db7ac9', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 70, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-24T03:47:22.829611Z\"}', '2020-09-24 04:53:25', '2020-09-24 03:47:22', '2020-09-24 04:53:25'),
('c248977c-b257-430c-8bee-dfb9b85e64e4', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 144, '{\"data\":\"Congratulations! You\'ve received a meeting request fromCleofe Asignacion\",\"user\":{\"id\":157,\"first_name\":\"Cleofe\",\"last_name\":\"Asignacion\",\"email\":\"cleo_kleng0317@yahoo.com\",\"email_verified_at\":\"2020-10-03T02:01:03.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-10-03T01:52:50.000000Z\",\"updated_at\":\"2020-10-03T02:34:16.000000Z\",\"mobile_number\":\"9171062256\",\"country_code\":\"+63\",\"dob\":\"03\\/17\\/1982\",\"gender\":\"female\",\"address\":\"Zone 6 #0352 Asan Norte, Sison, Pangasinan 2434\",\"image\":\"715894b8cf34010667d68f817093f792.JPG\",\"city\":null,\"timezone\":\"Asia\\/Shanghai\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NDk=\",\"date\":\"2020-10-03T05:35:25.045431Z\"}', '2020-10-03 05:36:39', '2020-10-03 05:35:25', '2020-10-03 05:36:39'),
('c2bfc0de-b294-4dc7-8cf9-8195d6d94752', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"Medical certificate has been received\",\"user\":{\"id\":56,\"first_name\":\"Deriza Marie\",\"last_name\":\"Quintana\",\"email\":\"quintanadeemd@gmail.com\",\"email_verified_at\":\"2020-09-13T17:37:24.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-13T17:36:56.000000Z\",\"updated_at\":\"2020-09-28T11:28:21.000000Z\",\"mobile_number\":\"9218649911\",\"country_code\":\"+63\",\"dob\":\"04\\/30\\/1987\",\"gender\":\"female\",\"address\":\"38 Daisy Road Phase 5A Pilar Village Las Pinas\",\"image\":\"14e3ecb03a5d4f3fd1adc97e96ece2d9.jpg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-10-18T07:53:49.016115Z\"}', '2020-10-18 07:58:01', '2020-10-18 07:53:49', '2020-10-18 07:58:01'),
('c34afea8-bc48-4b91-8bde-d85699eba17d', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"Sick certificate has been received\",\"user\":{\"id\":56,\"first_name\":\"Deriza Marie\",\"last_name\":\"Quintana\",\"email\":\"quintanadeemd@gmail.com\",\"email_verified_at\":\"2020-09-13T17:37:24.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-13T17:36:56.000000Z\",\"updated_at\":\"2020-09-28T11:28:21.000000Z\",\"mobile_number\":\"9218649911\",\"country_code\":\"+63\",\"dob\":\"04\\/30\\/1987\",\"gender\":\"female\",\"address\":\"38 Daisy Road Phase 5A Pilar Village Las Pinas\",\"image\":\"14e3ecb03a5d4f3fd1adc97e96ece2d9.jpg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-10-18T07:42:34.027335Z\"}', '2020-10-18 07:43:09', '2020-10-18 07:42:34', '2020-10-18 07:43:09'),
('c395b319-1d33-48cb-8092-8a8a7167e61b', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 181, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-10-07T16:15:21.124882Z\"}', '2020-10-07 17:04:07', '2020-10-07 16:15:21', '2020-10-07 17:04:07'),
('c5aada4c-16ac-403b-9fa5-a533388ecbb8', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"New prescription has been received\",\"user\":{\"id\":15,\"first_name\":\"Manoj\",\"last_name\":\"Kumar Soni\",\"email\":\"manoj.upwork87@gmail.com\",\"email_verified_at\":\"2020-07-30T16:37:55.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-07-30T16:37:19.000000Z\",\"updated_at\":\"2020-08-08T11:57:52.000000Z\",\"mobile_number\":\"7014594477\",\"country_code\":\"+91\",\"dob\":\"07\\/28\\/1987\",\"gender\":\"male\",\"address\":\"Pratap Nagar\",\"image\":\"fcbe464b7aaf9bb96daa90d4a0934fa3.jpg\",\"city\":null,\"timezone\":\"Asia\\/Calcutta\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-16T18:58:06.196615Z\"}', '2020-09-16 19:01:02', '2020-09-16 18:58:06', '2020-09-16 19:01:02'),
('cb5cad36-5bc6-44db-be37-ffd601f15db6', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 20, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-28T17:59:26.752161Z\"}', NULL, '2020-09-28 17:59:26', '2020-09-28 17:59:26'),
('cb5f0889-e3b8-4aef-bc91-8079ab0aedd0', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 25, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NDY=\",\"date\":\"2020-09-29T08:11:22.807031Z\"}', NULL, '2020-09-29 08:11:22', '2020-09-29 08:11:22'),
('cc82d63c-5529-44d6-846e-799f805da493', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 129, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-29T08:02:17.647886Z\"}', '2020-09-29 08:03:40', '2020-09-29 08:02:17', '2020-09-29 08:03:40'),
('ce9738e8-61c9-4d2a-805d-02f219bd9b8c', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 46, '{\"data\":\"Congratulations! You\'ve received a appointment request from Eulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/Mjc=\",\"date\":\"2020-09-23T10:31:07.682078Z\"}', '2020-09-23 10:35:53', '2020-09-23 10:31:07', '2020-09-23 10:35:53'),
('d04169d6-ff63-4c82-9150-6d8641b22943', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 35, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-28T17:58:50.745131Z\"}', '2020-09-30 07:30:59', '2020-09-28 17:58:50', '2020-09-30 07:30:59'),
('d192eade-a4b1-4c72-b4a2-18b278711932', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 189, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-10-11T05:25:59.920847Z\"}', '2020-10-11 06:00:37', '2020-10-11 05:25:59', '2020-10-11 06:00:37'),
('d30af44a-aa75-432a-a651-da49b59860ac', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 45, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-10-07T16:20:04.632600Z\"}', '2020-10-11 05:24:48', '2020-10-07 16:20:04', '2020-10-11 05:24:48'),
('d3f30e32-5a22-4aab-a32a-814d698f64b1', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 15, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/MTY=\",\"date\":\"2020-09-16T19:26:35.855681Z\"}', '2020-09-16 19:26:55', '2020-09-16 19:26:35', '2020-09-16 19:26:55'),
('d7ff320d-5753-4a63-a60a-5b45a3b2b4f8', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 82, '{\"data\":\"Sick certificate has been received\",\"user\":{\"id\":45,\"first_name\":\"Emmalene\",\"last_name\":\"Albor\",\"email\":\"emmalene.morales13@gmail.com\",\"email_verified_at\":\"2020-08-19T18:16:05.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-08-19T18:15:38.000000Z\",\"updated_at\":\"2020-09-06T19:17:26.000000Z\",\"mobile_number\":\"79398103\",\"country_code\":\"+968\",\"dob\":\"10\\/13\\/1986\",\"gender\":\"female\",\"address\":\"Muntinlupa City\",\"image\":\"7d01ff64df9c64dfda400f087b8ee525.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-09-26T18:41:13.465969Z\"}', '2020-09-26 19:19:37', '2020-09-26 18:41:13', '2020-09-26 19:19:37'),
('d9b4165d-f4b3-4bb0-9bcb-e2d08545d740', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 24, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NDM=\",\"date\":\"2020-09-29T03:34:30.947451Z\"}', '2020-09-29 04:53:07', '2020-09-29 03:34:30', '2020-09-29 04:53:07'),
('db1b44bf-4cb9-45b8-bdfd-47f7ccbb9667', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 37, '{\"data\":\"Congratulations! You\'ve received a meeting request fromAnna Marie Ylade\",\"user\":{\"id\":138,\"first_name\":\"Anna Marie\",\"last_name\":\"Ylade\",\"email\":\"mc.claveria@yahoo.com\",\"email_verified_at\":\"2020-09-30T02:16:51.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-30T02:15:43.000000Z\",\"updated_at\":\"2020-10-18T10:19:25.000000Z\",\"mobile_number\":null,\"country_code\":null,\"dob\":null,\"gender\":\"male\",\"address\":null,\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NjI=\",\"date\":\"2020-10-19T08:19:57.795025Z\"}', '2020-10-19 08:22:28', '2020-10-19 08:19:57', '2020-10-19 08:22:28'),
('dd0b90bc-474a-4767-8ca0-15c74e6cf434', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 31, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-28T17:59:10.799329Z\"}', '2020-09-30 13:08:47', '2020-09-28 17:59:10', '2020-09-30 13:08:47'),
('dec3504b-9eac-4d74-908e-c7aa7a90b91c', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 188, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NjU=\",\"date\":\"2020-10-25T06:29:08.392124Z\"}', '2020-10-25 06:29:40', '2020-10-25 06:29:08', '2020-10-25 06:29:40'),
('df68a7d3-c9ce-4643-8aac-2efa9047e776', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 15, '{\"data\":\"Congratulations! You\'ve received a meeting request fromManoj Kumar\",\"user\":{\"id\":14,\"first_name\":\"Manoj\",\"last_name\":\"Kumar\",\"email\":\"mk5103@gmail.com\",\"email_verified_at\":\"2020-07-30T13:35:01.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-07-30T13:31:57.000000Z\",\"updated_at\":\"2020-08-16T16:28:48.000000Z\",\"mobile_number\":\"9785082368\",\"country_code\":\"+91\",\"dob\":\"07\\/28\\/1987\",\"gender\":\"male\",\"address\":\"Pratap Nagar, Sanganer, Jaipur (Rajasthan), 302033\",\"image\":\"8d744628d3600bbdee787882bae1a352.jpg\",\"city\":null,\"timezone\":\"Asia\\/Calcutta\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/room\\/join\\/Njk=\",\"date\":\"2020-11-01T10:54:07.761021Z\"}', '2020-11-01 10:54:41', '2020-11-01 10:54:07', '2020-11-01 10:54:41'),
('ebcaf70a-5b1c-419c-b510-bfb22889bdd9', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 59, '{\"data\":\"Sick certificate has been received\",\"user\":{\"id\":37,\"first_name\":\"Monique Therese\",\"last_name\":\"Punsalan\",\"email\":\"moniquepunsalan@gmail.com\",\"email_verified_at\":\"2020-08-17T12:09:03.000000Z\",\"role_id\":2,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-08-17T12:07:32.000000Z\",\"updated_at\":\"2020-09-30T10:56:20.000000Z\",\"mobile_number\":\"9173098932\",\"country_code\":\"+63\",\"dob\":\"06\\/10\\/1986\",\"gender\":\"female\",\"address\":\"Quezon City\",\"image\":\"a90785fc6153ac130a96b029ef7f3bff.jpg\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/patient\\/meetings\",\"date\":\"2020-10-11T11:16:28.482752Z\"}', '2020-10-11 11:16:54', '2020-10-11 11:16:28', '2020-10-11 11:16:54'),
('ef8367fd-82d6-45a6-b1a6-31365a75cb16', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 45, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/MjE=\",\"date\":\"2020-09-21T07:45:13.807918Z\"}', '2020-09-21 07:54:14', '2020-09-21 07:45:13', '2020-09-21 07:54:14'),
('efd1bfb6-0a1d-463a-9e35-6d1e9ec98f34', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 46, '{\"data\":\"Congratulations! You\'ve received a meeting request fromKian Fernando\",\"user\":{\"id\":69,\"first_name\":\"kian\",\"last_name\":\"fernando\",\"email\":\"kianfernanfo0906@gmail.com\",\"email_verified_at\":\"2020-09-24T02:20:04.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-19T02:45:49.000000Z\",\"updated_at\":\"2020-09-24T02:20:04.000000Z\",\"mobile_number\":null,\"country_code\":null,\"dob\":null,\"gender\":\"male\",\"address\":null,\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/room\\/join\\/MzI=\",\"date\":\"2020-09-24T02:48:22.142484Z\"}', '2020-09-24 02:50:12', '2020-09-24 02:48:22', '2020-09-24 02:50:12'),
('f2f89e5b-a396-469f-b9e0-6e55f73f2106', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 45, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-10-19T16:57:05.396877Z\"}', '2020-10-20 06:02:38', '2020-10-19 16:57:05', '2020-10-20 06:02:38'),
('f3fb9646-8f54-40d1-8da2-f43f29a1efad', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 51, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-28T17:58:13.690574Z\"}', NULL, '2020-09-28 17:58:13', '2020-09-28 17:58:13'),
('f4384002-6bbc-4b84-85dc-f1e9e3f245c8', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 37, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NTQ=\",\"date\":\"2020-10-11T10:55:52.847202Z\"}', '2020-10-11 11:01:20', '2020-10-11 10:55:52', '2020-10-11 11:01:20'),
('f48068ba-11e6-494a-a0a0-eb4e7da966a2', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 33, '{\"data\":\"Congratulation, Your Account has been approved\",\"user\":{\"id\":1,\"first_name\":\"Cloud\",\"last_name\":\"PolyClinic\",\"email\":\"admin@getnada.com\",\"email_verified_at\":\"2020-07-13T14:10:31.000000Z\",\"role_id\":1,\"status\":1,\"is_deleted\":0,\"is_approved\":0,\"created_at\":\"2020-04-16T08:06:36.000000Z\",\"updated_at\":\"2020-05-31T15:21:45.000000Z\",\"mobile_number\":\"98745698573\",\"country_code\":\"+968\",\"dob\":\"02\\/10\\/2004\",\"gender\":\"male\",\"address\":\"\",\"image\":\"1587201672.png\",\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/cloudpolyclinic.com\\/doctor\\/profile\",\"date\":\"2020-09-28T17:59:00.003407Z\"}', NULL, '2020-09-28 17:59:00', '2020-09-28 17:59:00'),
('f9901440-30ec-446e-a32f-97f514b11b78', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 194, '{\"data\":\"Congratulations! You\'ve received a meeting request fromEulysis Albor\",\"user\":{\"id\":59,\"first_name\":\"Eulysis\",\"last_name\":\"Albor\",\"email\":\"eulysis_albor@yahoo.com\",\"email_verified_at\":\"2020-09-14T18:47:41.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-09-14T18:47:02.000000Z\",\"updated_at\":\"2020-09-15T13:03:47.000000Z\",\"mobile_number\":\"97728165\",\"country_code\":\"+968\",\"dob\":\"01\\/01\\/1989\",\"gender\":\"male\",\"address\":\"Manila \\/ Oman Air\",\"image\":\"9460f3409f5a80a1603ac025a9e18173.jpg\",\"city\":null,\"timezone\":\"Asia\\/Muscat\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NTg=\",\"date\":\"2020-10-15T06:33:02.544850Z\"}', '2020-10-15 06:36:27', '2020-10-15 06:33:02', '2020-10-15 06:36:27'),
('feb7f134-191c-4827-9c9d-1ea40db281d7', 'App\\Notifications\\TaskComplete', 'App\\Models\\User', 194, '{\"data\":\"Congratulations! You\'ve received a meeting request fromMar Juj Bartolome\",\"user\":{\"id\":198,\"first_name\":\"Mar Juj\",\"last_name\":\"Bartolome\",\"email\":\"marjunb05@yahoo.com\",\"email_verified_at\":\"2020-10-14T02:08:00.000000Z\",\"role_id\":3,\"status\":1,\"is_deleted\":0,\"is_approved\":1,\"created_at\":\"2020-10-14T02:05:09.000000Z\",\"updated_at\":\"2020-10-14T02:08:00.000000Z\",\"mobile_number\":null,\"country_code\":null,\"dob\":null,\"gender\":\"male\",\"address\":null,\"image\":null,\"city\":null,\"timezone\":\"Asia\\/Manila\"},\"action\":\"https:\\/\\/www.cloudpolyclinic.com\\/room\\/join\\/NTY=\",\"date\":\"2020-10-14T04:29:08.294740Z\"}', '2020-10-14 06:05:00', '2020-10-14 04:29:08', '2020-10-14 06:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `created_at`, `updated_at`) VALUES
(1, 'nicolobadillo@gmail.com', 'NDk5NTcx', '2020-09-07 06:26:25', '2020-09-07 06:26:25'),
(10, 'rosalia092677@gmail.com', 'OTA3NTUw', '2020-10-11 05:06:46', '2020-10-11 05:06:46'),
(13, 'chelcosgafa@gmail.com', 'MTY4Nzk3', '2020-10-16 23:04:01', '2020-10-16 23:04:01');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `slug` varchar(250) DEFAULT NULL,
  `price` decimal(7,2) NOT NULL DEFAULT 0.00,
  `billing_type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1-monthly, 2-yearly',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `title`, `slug`, `price`, `billing_type`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Monthly Plan', 'monthly-plan', '50.01', 1, 1, 0, '2020-11-12 11:57:35', '2020-11-12 12:02:06'),
(2, 'Yearly Plan', 'yearly-plan', '500.00', 2, 1, 0, '2020-11-12 12:02:41', '2020-11-12 12:02:56');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1,
  `path` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `user_id`, `type`, `path`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '1608452219-woman-3288365_640.jpg', '2020-12-20 08:16:59', '2020-12-20 08:16:59'),
(2, 2, 1, '1608452219-models-3740609_640.jpg', '2020-12-20 08:16:59', '2020-12-20 08:16:59'),
(3, 2, 1, '1608452219-hair-2537564_640.jpg', '2020-12-20 08:16:59', '2020-12-20 08:16:59'),
(4, 2, 1, '1608452219-females-1450050_640.jpg', '2020-12-20 08:16:59', '2020-12-20 08:16:59'),
(5, 2, 1, '1608452219-beauty-salon-3277314_640.jpg', '2020-12-20 08:16:59', '2020-12-20 08:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `exp` varchar(250) DEFAULT NULL,
  `tagline` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_paid` tinyint(4) NOT NULL DEFAULT 0,
  `subscription_id` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `user_id`, `category_id`, `exp`, `tagline`, `description`, `created_at`, `updated_at`, `is_paid`, `subscription_id`) VALUES
(5, 2, 1, '2', 'asdasd', 'asdasd', '2021-01-09 11:03:15', '2021-01-09 11:03:15', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `store_portfolios`
--

CREATE TABLE `store_portfolios` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1-image, 2-video',
  `file_name` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store_portfolios`
--

INSERT INTO `store_portfolios` (`id`, `user_id`, `store_id`, `type`, `file_name`, `created_at`, `updated_at`) VALUES
(1, 2, 5, 1, '1610209995-avatar.png', '2021-01-09 16:33:15', '2021-01-09 16:33:15'),
(2, 2, 5, 1, '1610209995-avatar2.png', '2021-01-09 16:33:15', '2021-01-09 16:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `store_sub_categories`
--

CREATE TABLE `store_sub_categories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `sub_cat_id` varchar(250) DEFAULT NULL,
  `sub_cat_price` varchar(250) DEFAULT NULL,
  `sub_cat_time` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store_sub_categories`
--

INSERT INTO `store_sub_categories` (`id`, `user_id`, `store_id`, `sub_cat_id`, `sub_cat_price`, `sub_cat_time`, `created_at`, `updated_at`) VALUES
(3, 2, 5, '4', '4', '60', '2021-01-09 16:33:15', '2021-01-09 16:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 0,
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `messenger_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#2180f3',
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `is_approved` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'male',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Asia/Manila'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `active_status`, `dark_mode`, `messenger_color`, `avatar`, `email_verified_at`, `password`, `role_id`, `status`, `is_deleted`, `is_approved`, `remember_token`, `created_at`, `updated_at`, `mobile_number`, `country_code`, `dob`, `gender`, `address`, `image`, `lat`, `lng`, `timezone`) VALUES
(1, 'Ndigbo', 'Admin', 'admin@getnada.com', 0, 0, '#2180f3', 'avatar.png', '2020-07-13 14:10:31', '$2y$10$ZxIxQtvLBRu77vofIkDVauXPKVX8fTe7kngLQ6AQTFRpUztItCzfK', 1, 1, 0, 0, 'IcuS3jzm1s9jrQnMOywmjxJwSfDXQnTztJ3eqtVtTfnLn6VPTcSpJbjwwk56', '2020-04-16 08:06:36', '2020-11-09 07:55:50', '98745698573', '+968', '02/10/2004', 'male', '', '1f1ca2fa00cf87e2c63af3ef31bbd33b.jpg', NULL, NULL, 'Asia/Manila'),
(2, 'Freelancer', 'Profile', 'freelancer@getnada.com', 0, 0, '#2180f3', 'avatar.png', NULL, '$2y$10$0ttbjWVQO7vla8r8Pc6oNeMHWsHY4NxjJDMvxiaJ5hJ/ie8axymMC', 3, 1, 0, 0, 'TX63UXZCiZIlUgwGmmbQo4OIaWFLJs4lA8wMpLshQg2gQ0GiIM39HEwFVWuw', '2020-12-20 00:13:30', '2020-12-27 04:55:08', NULL, NULL, '02/14/2000', 'male', 'Jaipur, Rajasthan, India', '1f1ca2fa00cf87e2c63af3ef31bbd33b.jpg', NULL, NULL, 'Asia/Calcutta'),
(3, 'customer', 'Profile', 'customer@getnada.com', 0, 0, '#2180f3', 'avatar.png', NULL, '$2y$10$QUHJ8uPnd4/8S23S4yNx0O3.U0J8vG2JdkkmIc3rKi1.pTX9u3xhK', 2, 1, 0, 0, 'N0YMTpafEBC7p68a2aqG8DeDP4jXZFGx9UeKDAo51QPdnlFYeBV8LGNbK1Ng', '2020-12-20 10:24:31', '2020-12-22 22:16:18', NULL, NULL, '02/14/2000', 'male', 'Jaipur, Rajasthan, India', '1f1ca2fa00cf87e2c63af3ef31bbd33b.jpg', '26.9124336', '75.7872709', 'Asia/Calcutta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_pages`
--
ALTER TABLE `cms_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelance_profiles`
--
ALTER TABLE `freelance_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `global_settings`
--
ALTER TABLE `global_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_numbers`
--
ALTER TABLE `mobile_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_portfolios`
--
ALTER TABLE `store_portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_sub_categories`
--
ALTER TABLE `store_sub_categories`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cms_pages`
--
ALTER TABLE `cms_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `freelance_profiles`
--
ALTER TABLE `freelance_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `global_settings`
--
ALTER TABLE `global_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mobile_numbers`
--
ALTER TABLE `mobile_numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `store_portfolios`
--
ALTER TABLE `store_portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `store_sub_categories`
--
ALTER TABLE `store_sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
