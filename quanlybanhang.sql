-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 31, 2022 at 10:46 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlybanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `parent_id` bigint DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` text COLLATE utf8_unicode_ci,
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_share` text COLLATE utf8_unicode_ci,
  `title` text COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `summary`, `parent_id`, `image`, `alias`, `keyword`, `description`, `image_share`, `title`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Thu Đông 2021', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:04:45', '2022-03-03 19:53:12', 1),
(2, 'Đầm', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:14:35', '2022-03-03 19:53:12', 1),
(3, 'Áo', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:14:35', '2022-03-03 19:53:12', 1),
(4, 'Chân Váy', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:14:35', '2022-03-03 19:53:12', 1),
(5, 'Quần', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:14:35', '2022-03-03 19:53:12', 1),
(6, 'Thời Trang Trẻ Em', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:16:15', '2022-03-19 10:02:40', 2),
(7, 'Phụ Kiện', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:18:15', '2022-03-03 19:53:12', 1),
(8, 'Giày', NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:18:55', '2022-03-03 19:53:12', 1),
(9, 'Túi', NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:18:55', '2022-03-03 19:53:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` int DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

DROP TABLE IF EXISTS `configs`;
CREATE TABLE IF NOT EXISTS `configs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8_unicode_ci,
  `summary` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'text',
  PRIMARY KEY (`id`),
  UNIQUE KEY `configs_key_unique` (`key`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `key`, `value`, `summary`, `created_at`, `updated_at`, `type`) VALUES
(1, 'logo', '/upload/users/file_1640178921.png', 'logo admin', NULL, '2022-03-28 14:34:58', 'image'),
(2, 'title', 'My Website', 'title admin', NULL, '2022-03-28 14:34:58', 'text'),
(3, 'description', 'web', 'Description', NULL, '2022-03-28 14:34:58', 'textarea'),
(4, 'tcontent', 'content', 'Content', NULL, '2022-03-28 14:34:58', 'editor');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8_unicode_ci,
  `phone` int DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `email`, `phone`, `image`, `created_at`, `updated_at`, `status`) VALUES
(1, '1', 'agjkjgljgk', 'jfkjafkjf@sjfagkg.klashghgl', 768678, 'jfkjfkjaf.àkgjkg', '2022-01-12 19:35:29', '2022-01-12 19:35:29', 1),
(2, '2', 'agjkjgljgk', 'jfkjafkjf@sjfagkg.klashghgl', 768678, 'jfkjfkjaf.àkgjkg', '2022-01-12 19:37:25', '2022-01-12 19:37:25', 1),
(3, 'an', 'agjkjgljgk', 'jfkjafkjf@sjfagkg.klashghgl', 768678, 'jfkjfkjaf.àkgjkg', '2022-01-12 19:37:25', '2022-01-12 19:37:25', 1),
(4, 'tiên', 'agjkjgljgk', 'jfkjafkjf@sjfagkg.klashghgl', 768678, 'jfkjfkjaf.àkgjkg', '2022-01-12 19:37:25', '2022-01-12 19:37:25', 1),
(5, 'cơ', 'agjkjgljgk', 'jfkjafkjf@sjfagkg.klashghgl', 768678, 'jfkjfkjaf.àkgjkg', '2022-01-12 19:37:25', '2022-01-12 19:37:25', 1),
(6, 'Hùng', '123 Hàng phở', 'Hung@gmail.com', 768678, 'jfkjfkjaf.àkgjkg', '2022-01-12 19:37:25', '2022-01-12 19:37:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
CREATE TABLE IF NOT EXISTS `districts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` int DEFAULT NULL,
  `city_id` int DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `functions`
--

DROP TABLE IF EXISTS `functions`;
CREATE TABLE IF NOT EXISTS `functions` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `parent_id` bigint DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint DEFAULT '1',
  `show_menu` tinyint(1) DEFAULT '1',
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `controller` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `allow` tinyint(1) NOT NULL DEFAULT '0',
  `pos` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `functions`
--

INSERT INTO `functions` (`id`, `name`, `icon`, `parent_id`, `created_at`, `updated_at`, `status`, `show_menu`, `route`, `controller`, `action`, `allow`, `pos`) VALUES
(6, 'Tổng quan', ' <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-airplay\">\n                             <path d=\"M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1\"></path>\n                             <polygon points=\"12 15 17 21 7 21 12 15\"></polygon>\n                         </svg>', 0, '2022-03-02 18:08:38', '2022-03-29 10:47:09', 1, 1, 'admin.home', 'demo', 'index', 1, 1),
(7, 'Quản lý user', ' <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-cpu\">\n                             <rect x=\"4\" y=\"4\" width=\"16\" height=\"16\" rx=\"2\" ry=\"2\"></rect>\n                             <rect x=\"9\" y=\"9\" width=\"6\" height=\"6\"></rect>\n                             <line x1=\"9\" y1=\"1\" x2=\"9\" y2=\"4\"></line>\n                             <line x1=\"15\" y1=\"1\" x2=\"15\" y2=\"4\"></line>\n                             <line x1=\"9\" y1=\"20\" x2=\"9\" y2=\"23\"></line>\n                             <line x1=\"15\" y1=\"20\" x2=\"15\" y2=\"23\"></line>\n                             <line x1=\"20\" y1=\"9\" x2=\"23\" y2=\"9\"></line>\n                             <line x1=\"20\" y1=\"14\" x2=\"23\" y2=\"14\"></line>\n                             <line x1=\"1\" y1=\"9\" x2=\"4\" y2=\"9\"></line>\n                             <line x1=\"1\" y1=\"14\" x2=\"4\" y2=\"14\"></line>\n                         </svg>', 0, '2022-03-02 18:10:02', '2022-03-29 10:47:17', 1, 1, '', '', '', 0, 2),
(8, 'Danh sách', '', 7, '2022-03-02 18:10:02', '2022-03-31 10:16:26', 1, 1, 'users.index', 'user', 'index', 0, 1),
(10, 'Cập nhật', '', 7, '2022-03-02 18:10:02', '2022-03-31 10:16:31', 1, 0, 'users.update', 'user', 'edit', 0, 1),
(11, 'Xóa', '', 7, '2022-03-02 18:10:02', '2022-03-31 10:16:45', 1, 0, 'users.destroy', 'user', 'delete', 0, 1),
(9, 'Tạo mới', '', 7, '2022-03-02 18:10:02', '2022-03-31 10:16:50', 1, 1, 'users.create', 'user', 'create', 0, 1),
(12, 'Quản lý sản phẩm', ' <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-cpu\">\r\n                             <rect x=\"4\" y=\"4\" width=\"16\" height=\"16\" rx=\"2\" ry=\"2\"></rect>\r\n                             <rect x=\"9\" y=\"9\" width=\"6\" height=\"6\"></rect>\r\n                             <line x1=\"9\" y1=\"1\" x2=\"9\" y2=\"4\"></line>\r\n                             <line x1=\"15\" y1=\"1\" x2=\"15\" y2=\"4\"></line>\r\n                             <line x1=\"9\" y1=\"20\" x2=\"9\" y2=\"23\"></line>\r\n                             <line x1=\"15\" y1=\"20\" x2=\"15\" y2=\"23\"></line>\r\n                             <line x1=\"20\" y1=\"9\" x2=\"23\" y2=\"9\"></line>\r\n                             <line x1=\"20\" y1=\"14\" x2=\"23\" y2=\"14\"></line>\r\n                             <line x1=\"1\" y1=\"9\" x2=\"4\" y2=\"9\"></line>\r\n                             <line x1=\"1\" y1=\"14\" x2=\"4\" y2=\"14\"></line>\r\n                         </svg>', 0, '2022-03-02 18:10:02', '2022-03-28 22:20:22', 1, 1, '', '', '', 0, 3),
(13, 'Danh sách', '', 12, '2022-03-02 18:10:02', '2022-03-28 22:20:24', 1, 1, 'products.index', 'product', 'index', 0, 1),
(14, 'Cập nhật', '', 12, '2022-03-02 18:10:02', '2022-03-28 22:19:50', 1, 0, 'products.update', 'product', 'edit', 0, 1),
(15, 'Xóa', '', 12, '2022-03-02 18:10:02', '2022-03-31 10:13:22', 1, 0, 'products.destroy', 'product', 'delete', 0, 1),
(16, 'Tạo mới', '', 12, '2022-03-02 18:10:02', '2022-03-31 09:53:16', 1, 1, 'products.create', 'product', 'create', 0, 1),
(17, 'Quyền hạn', ' <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-cpu\">\r\n                             <rect x=\"4\" y=\"4\" width=\"16\" height=\"16\" rx=\"2\" ry=\"2\"></rect>\r\n                             <rect x=\"9\" y=\"9\" width=\"6\" height=\"6\"></rect>\r\n                             <line x1=\"9\" y1=\"1\" x2=\"9\" y2=\"4\"></line>\r\n                             <line x1=\"15\" y1=\"1\" x2=\"15\" y2=\"4\"></line>\r\n                             <line x1=\"9\" y1=\"20\" x2=\"9\" y2=\"23\"></line>\r\n                             <line x1=\"15\" y1=\"20\" x2=\"15\" y2=\"23\"></line>\r\n                             <line x1=\"20\" y1=\"9\" x2=\"23\" y2=\"9\"></line>\r\n                             <line x1=\"20\" y1=\"14\" x2=\"23\" y2=\"14\"></line>\r\n                             <line x1=\"1\" y1=\"9\" x2=\"4\" y2=\"9\"></line>\r\n                             <line x1=\"1\" y1=\"14\" x2=\"4\" y2=\"14\"></line>\r\n                         </svg>', 0, '2022-03-02 18:10:02', '2022-03-03 20:02:35', 1, 1, '', '', '', 0, 4),
(18, 'Phân quyền', '', 17, '2022-03-02 18:10:02', '2022-03-31 09:45:51', 1, 1, 'role.index', 'role', 'index', 0, 1),
(19, 'Ghi', '', 17, '2022-03-02 18:10:02', '2022-03-31 09:46:32', 1, 0, 'role.access', 'role', 'accesspost', 0, 3),
(20, 'Cấp quyền', '', 17, '2022-03-02 18:10:02', '2022-03-31 09:46:51', 1, 0, 'role.accessput', 'role', 'access', 0, 2),
(21, 'Thoát', '', 0, '2022-03-02 18:08:38', '2022-03-31 09:14:04', 1, 0, 'admin.logout', 'user', 'logout', 1, 1),
(22, 'Cập nhật create sp', NULL, 12, '2022-03-31 09:59:42', '2022-03-31 10:12:25', 1, 0, 'products.store', '', '', 0, 1),
(23, 'Cập nhật Sản phẩm', NULL, 12, '2022-03-31 10:21:41', '2022-03-31 10:21:52', 1, 0, 'products.edit', '', '', 0, 1),
(24, 'Store User', NULL, 7, '2022-03-31 10:54:16', '2022-03-31 10:54:16', 1, 0, 'users.store', '', '', 0, 1),
(25, 'Edit User', NULL, 7, '2022-03-31 16:19:14', '2022-03-31 16:19:14', 1, 0, 'users.edit', '', '', 0, 1),
(26, 'Update User', NULL, 7, '2022-03-31 16:30:03', '2022-03-31 16:30:41', 1, 0, 'users.update', '', '', 0, 1),
(27, 'Profile', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-user\">\r\n                                     <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path>\r\n                                     <circle cx=\"12\" cy=\"7\" r=\"4\"></circle>\r\n                                 </svg>', 0, '2022-03-31 16:38:41', '2022-03-31 16:48:58', 1, 0, 'admin.profile', '', '', 0, 5),
(28, 'Sửa', NULL, 27, '2022-03-31 16:38:41', '2022-03-31 16:49:01', 1, 0, 'admin.profilesetting', '', '', 0, 1),
(29, 'Cập nhật', NULL, 27, '2022-03-31 16:39:21', '2022-03-31 16:49:03', 1, 0, 'admin.profilesettingput', '', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_03_27_084340_create_configs_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 2),
(5, '2022_03_28_201943_add_type_configs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` text COLLATE utf8_unicode_ci,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `image` text COLLATE utf8_unicode_ci,
  `group_id` int DEFAULT NULL,
  `alias` int DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_share` text COLLATE utf8_unicode_ci,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_groups`
--

DROP TABLE IF EXISTS `news_groups`;
CREATE TABLE IF NOT EXISTS `news_groups` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `parent_id` int DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci,
  `alias` text COLLATE utf8_unicode_ci,
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_share` text COLLATE utf8_unicode_ci,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` int DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `customer_id` int DEFAULT NULL,
  `total_amount` int DEFAULT NULL,
  `order_status` int DEFAULT NULL COMMENT '1.mới đặt\r\n2.đã xác nhận\r\n3.đang đóng gói\r\n4.chuyển cho shipper\r\n5.đang giao\r\n6.đã giao\r\n7.giao thất bại\r\n8.hủy đơn',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `code`, `order_date`, `customer_id`, `total_amount`, `order_status`, `created_at`, `updated_at`, `status`) VALUES
(1, 0, '2022-01-13', 1, NULL, 1, '2022-01-12 07:27:48', '2022-03-26 11:34:51', 1),
(2, 0, '2022-01-12', 1, NULL, 2, '2022-01-12 07:27:48', '2022-03-03 20:03:13', 1),
(3, 0, '2022-01-12', 3, NULL, 2, '2022-01-12 07:27:48', '2022-03-03 20:03:13', 1),
(4, 0, '2022-01-12', 3, NULL, 8, '2022-01-12 07:27:48', '2022-03-03 20:03:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `order_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `price` int DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `product_id`, `qty`, `price`, `created_at`, `updated_at`, `status`) VALUES
(1, 12, 1, NULL, '2022-01-12 07:36:31', '2022-03-03 20:09:05', 1),
(1, 15, 1, NULL, '2022-01-12 07:36:31', '2022-03-03 20:09:05', 1),
(2, 15, 2, NULL, '2022-01-12 07:36:31', '2022-03-03 20:09:05', 1),
(3, 20, 1, NULL, '2022-01-12 07:36:31', '2022-03-03 20:09:05', 1),
(4, 20, 3, NULL, '2022-01-12 07:36:31', '2022-03-03 20:09:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int DEFAULT NULL,
  `supplier_id` int DEFAULT NULL,
  `sku` text COLLATE utf8_unicode_ci,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `summary` text COLLATE utf8_unicode_ci,
  `image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `images` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `alias` text COLLATE utf8_unicode_ci,
  `keyword` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_share` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=122 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `supplier_id`, `sku`, `name`, `price`, `qty`, `content`, `summary`, `image`, `images`, `alias`, `keyword`, `description`, `image_share`, `title`, `created_at`, `updated_at`, `status`) VALUES
(12, 9, 1, 'FS2104007BHPUWH', 'TÚI XÁCH TRẮNG NẮP BÁN NGUYỆT', 1872138, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 0),
(9, 9, 1, 'FS2104001BHPUGE', 'TÚI XÁCH XANH DA TRƠN', 1476545, 69, 'Hahahaha', '<img alt=\"\" src=\"/lrvbanhang1/public/upload/users/file_1640178863.jpg\" style=\"width: 200px; height: 201px;\" />OK', '/upload/users/file_1640178886.png', NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-31 10:22:16', 2),
(10, 9, 1, 'FS2104005BHPUBK', 'TÚI XÁCH ĐEN DÂY XÍCH', 1766309, 999, NULL, NULL, '/upload/users/file_1640178886.png', NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-25 18:45:17', 1),
(13, 9, 1, 'FS2104003BHPUYL', 'TÚI XÁCH VÀNG NẮP VUÔNG', 4401910, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(14, 9, 1, 'FS2104006BHPUGR', 'TÚI XÁCH MÀU GREY VUÔNG', 6710627, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(15, 9, 1, 'FS2104003BHPUPU', 'TÚI XÁCH PURPLE NẮP VUÔNG', 347407, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(16, 9, 1, 'FS2002017BHPUPK', 'TÚI XÁCH HỒNG XÍCH VÀNG', 1605152, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 0),
(17, 9, 1, 'FS2002006BHPUGR', 'TÚI XÁCH GHI NGỌC TRAI', 6983541, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(18, 9, 1, 'FS2002016BHPUGE', 'TÚI XÁCH XANH NẮP HỒNG', 102251, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(19, 8, 1, 'FS2105007FSLEBR', 'GIÀY DA MÀU COFFEE MŨI VUÔNG', 9560629, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(20, 8, 1, 'FS2105001FSLEBK', 'GIÀY ĐEN MŨI NHỌN', 7496395, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 2),
(118, 33, NULL, 'dsd', 'fhjafhjkaf', 4, 5, '<figure class=\"image\"><img src=\"/lrvbanhang (3)/public/upload/images/__thumbs/11.jpg/11__480x270.jpg\"></figure><h2><span style=\"background-color:hsl(180, 75%, 60%);\">Zig Siêu Quậy</span></h2>', NULL, '/lrvbanhang (3)/public/upload/images/12.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-25 17:24:31', '2022-03-29 12:27:44', 0),
(22, 8, 1, 'FS2105008FSLERE', 'GIÀY ĐỎ ĐẾ VUÔNG', 1511266, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(23, 8, 1, 'FS2105004FSLEWH', 'GIÀY TRẮNG PHỤ KIỆN', 1156061, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(24, 8, 1, 'FS2104002FSLEPU', 'GIÀY PURPLE MŨI BO', 1246504, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(25, 8, 1, 'FS2105005FSLEBK', 'GIÀY ĐEN VIỀN XÍCH', 2764340, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 2),
(26, 8, 1, 'FS2105002FSLEAP', 'GIÀY DA MŨI VUÔNG', 82190, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 0),
(27, 8, 1, 'FS2105006FSLEWH', 'GIÀY TRẮNG MŨI VUÔNG', 2117928, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 2),
(28, 8, 1, 'FS2105007FSLEBR', 'GIÀY DA MÀU COFFEE MŨI VUÔNG', 343069, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 2),
(29, 6, 1, 'GW2107048BKLAPL', 'CV REN HOA XANH XẾP TẦNG', 5361564, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(30, 6, 1, 'GS2104235BKWOBE', 'CHÂN VÁY ĐŨI BE XẾP LY', 5778614, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(31, 6, 1, 'GS2107025BKORBK', 'CHÂN VÁY XÒE TƠ ĐEN', 2808377, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 0),
(32, 6, 1, 'GW2105069BKWOPW', 'TCV SẠN TRẮNG HOA BÈO GẤU', 6706044, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 0),
(33, 6, 1, 'GW2009014TUWOPK', 'VEST HỒNG NHẠT', 5105093, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(34, 6, 1, 'GW2009015BSWOPK', 'QUẦN SOOC HỒNG NHẠT', 5407331, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 2),
(35, 6, 1, 'GS2105065DILAPK', 'VÁY LƯỚI HỒNG 2 DÂY NHÚN NGỰC', 1721377, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(36, 6, 1, 'GS2104173DXWOGE', 'VÁY VOAN XANH HOA BÈO CỔ', 2384892, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(37, 6, 1, 'BW2002038TSKCNV', 'ÁO THUN TÍM THAN IN CHỮ', 6760331, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 2),
(38, 6, 1, 'GS2105052DIWOBK', 'TVÁY 2 DÂY HOA ĐEN TRẮNG', 6646979, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 0),
(39, 6, 1, 'BW2009019OCKCGD', 'ÁO KHOÁC THUN GHI ĐẬM', 2953903, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(40, 6, 1, 'GS2104164DIORGE', 'VÁY TƠ XANH TRỄ VAI', 4828577, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(41, 6, 1, 'BW2009024BPKCNV', 'QUẦN THUN XANH ĐẬM THÊU LOGO', 5281177, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(42, 6, 1, 'GS2105158DILABK', 'VÁY 2 DÂY LƯỚI ĐEN CHẤM BI', 1920156, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(43, 6, 1, 'GW2009116BSKCNV', 'QUẦN SOOC TÍM THAN', 3757249, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 0),
(44, 6, 1, 'GW2002049DMKCPB', 'VÁY ĐEN HT PHỐI LƯỚI', 3025778, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(45, 6, 1, 'GW1911021JLKCBK', 'JUMPSUIT ĐEN PHỐI REN', 3857141, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(46, 6, 1, 'GW2006108BKWOPK', 'CHÂN VÁY HỒNG PHỐI 2 DÂY', 208376, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(47, 6, 1, 'BW2009019OCKCGD', 'ÁO KHOÁC THUN GHI ĐẬM', 9470453, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(48, 6, 1, 'GW2105062TSWOPW', 'ÁO SẠN TRẮNG HOA DÂY RÚT NHÚN', 6727140, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 14:38:14', '2022-03-03 20:09:31', 1),
(49, 2, 1, 'FW2110016SDVEBK', 'SET ĐẦM NHUNG ĐEN KHOÁC LỬNG', 5224343, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:40:54', '2022-03-03 20:09:31', 0),
(50, 2, 1, 'FW2109055DMWOBK', 'ĐẦM ĐEN CỔ TƠ TRẮNG ĐÍNH TRAI', 5940293, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:40:54', '2022-03-03 20:09:31', 1),
(51, 2, 1, 'FW2109048DIWOBK', 'ĐẦM ĐEN TAY VOAN ĐÍNH DÂY PK', 4028440, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:40:54', '2022-03-03 20:09:31', 2),
(52, 2, 1, 'FW2112004DMVENV', 'ĐẦM NHUNG TÍM THAN GẤU PHỒNG', 2321322, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:40:54', '2022-03-03 20:09:31', 0),
(53, 2, 1, 'FW2108008DIWOPK', 'ĐẦM HỒNG NƠ TRỄ VAI', 9521287, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:40:54', '2022-03-03 20:09:31', 0),
(54, 2, 1, 'FW2110004SEKFPK', 'SET LEN HỒNG CỔ LỌ', 642472, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:40:54', '2022-03-03 20:09:31', 1),
(55, 2, 1, 'FW2108005DILAWH', 'ĐẦM REN TRẮNG NƠ CỔ', 4648499, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:40:54', '2022-03-03 20:09:31', 1),
(56, 2, 1, 'FW2109056DMLEBE', 'ĐẦM DA BE VAI CHỜM', 1315079, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:40:54', '2022-03-03 20:09:31', 1),
(57, 2, 1, 'FW2110007SEKFBE', 'BỘ LEN BE CÚC GẤU', 2629896, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:40:54', '2022-03-03 20:09:31', 1),
(58, 2, 1, 'FW2108045DIWOPK', 'ĐẦM HỒNG XOÈ TAY CÚC', 9204246, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:40:54', '2022-03-03 20:09:31', 1),
(59, 2, 1, 'FW2105089SDLAWH', 'SET ĐẦM REN TRẮNG CỔ ĐỨC (2D)', 8131544, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:40:54', '2022-03-03 20:09:31', 0),
(60, 2, 1, 'FW2106096DIWOWH', 'ĐẦM LƯỚI TRẮNG ĐAI EO', 3044985, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:40:54', '2022-03-03 20:09:31', 0),
(61, 2, 1, 'FS2012212DMLABK', 'ĐẦM ĐEN PHỐI LƯỚI ĐÈ REN', 830292, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:40:54', '2022-03-03 20:09:31', 2),
(62, 2, 1, 'FW2109024DISIPB', 'ĐẦM LỤA ĐEN HT XẺ VẠT', 5016504, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:40:54', '2022-03-03 20:09:31', 1),
(63, 2, 1, 'FW2106173DILAWH', 'ĐẦM ÔM REN TRẮNG TAY XÒE', 2591646, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:40:54', '2022-03-03 20:09:31', 1),
(64, 2, 1, 'FS2105037SDLAWH', 'SET ĐẦM REN TRẮNG (KÈM 2D)', 7908716, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:40:54', '2022-03-03 20:09:31', 1),
(65, 3, 1, 'FW2107016STLAPW', 'SET ÁO LƯỚI HỌA TIẾT TRẮNG ĐEN', 1768647, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:50:12', '2022-03-03 20:09:31', 1),
(66, 3, 1, 'FW2112002TLVEGE', 'ÁO NHUNG XANH VAI GẬP', 5117083, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:50:12', '2022-03-03 20:09:31', 2),
(67, 3, 1, 'FW2106194TSWOPK', 'ÁO HỒNG CHỒNG VẠT CÀI SAU', 279479, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:50:12', '2022-03-03 20:09:31', 2),
(68, 3, 1, 'FW2106035TNWOWH', 'SƠ MI THÔ TRẮNG PHỦ BÈO NGỰC', 6046142, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:50:12', '2022-03-03 20:09:31', 1),
(69, 3, 1, 'FW2109034TLKFBE', 'ÁO LEN BE VẠT CHÉO', 9392277, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:50:12', '2022-03-03 20:09:31', 1),
(70, 3, 1, 'FW2109033TLKFBR', 'ÁO LEN NÂU HỞ VAI', 8822960, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:50:12', '2022-03-03 20:09:31', 0),
(71, 3, 1, 'FW2106048TSKCBK', 'ÁO THUN ĐEN THÊU LOGO TAY', 5937969, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:50:12', '2022-03-03 20:09:31', 0),
(72, 3, 1, 'FS2103139TSKCWH', 'ÁO THUN TRẮNG ĐÍNH KIM SA', 3220968, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:50:12', '2022-03-03 20:09:31', 0),
(73, 3, 1, 'FS2105056TSKCWH', 'ÁO THUN TRẮNG IN LOGO ELISE', 8290933, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:50:12', '2022-03-03 20:09:31', 0),
(74, 3, 1, 'FS2104056TSKCYL', 'ÁO THUN VÀNG ĐÍNH TRAI', 1791761, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:50:12', '2022-03-03 20:09:31', 2),
(75, 3, 1, 'FW2110075TUWOBK', 'VEST GẤM ĐEN HOA LỬNG', 4086007, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:50:12', '2022-03-03 20:09:31', 1),
(76, 3, 1, 'FS2104044TSKCWH', 'ÁO THUN TRẮNG TAY BÈO CỔ XÍCH', 5054753, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:50:12', '2022-03-03 20:09:31', 1),
(77, 3, 1, 'FW2107116TUWOPP', 'VEST LỬNG HỒNG KẺ', 3015746, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:50:12', '2022-03-03 20:09:31', 0),
(78, 3, 1, 'FW2108034TNVEBK', 'ÁO NHUNG ĐEN 2D THÊU LOGO', 9914470, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:50:12', '2022-03-03 20:09:31', 2),
(79, 3, 1, 'FW2111006TUWOCK', 'VEST KẺ CARO ĐEN TRẮNG', 525115, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:50:12', '2022-03-03 20:09:31', 1),
(80, 3, 1, 'FS2104155TSKCBK', 'ÁO THUN ĐEN VIỀN XÍCH', 2882163, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 06:50:12', '2022-03-03 20:09:31', 1),
(81, 4, 1, 'FW2111186BKVEBK', 'JUPE NHUNG ĐEN CÚC TÚI', 2835471, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:00:36', '2022-03-03 20:09:31', 0),
(82, 4, 1, 'FS2104085BKWOBK', 'JUPE ĐEN PHỐI CÚC', 5530866, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:00:36', '2022-03-03 20:09:31', 1),
(83, 4, 1, 'FW2104045BKDEGR', 'CHÂN VÁY JEAN GHI DẬP LY', 9147920, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:00:36', '2022-03-03 20:09:31', 0),
(84, 4, 1, 'FS2105087BKWORE', 'JUPE HỌA TIẾT ĐỎ XẾP TẦNG', 9147003, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:00:36', '2022-03-03 20:09:31', 1),
(85, 4, 1, 'FW2105111BKWOPW', 'CHÂN VÁY CHIFFON HT NHÚN LY', 8291255, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:00:36', '2022-03-03 20:09:31', 1),
(86, 4, 1, 'FS2104222BKLABK', 'JUPE LƯỚI ĐEN CHẤM BI ĐÈ REN', 4015267, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:00:36', '2022-03-03 20:09:31', 1),
(87, 4, 1, 'FW2109012BKTWPW', 'JUPE BÚT CHÌ DẠ TWEED KẺ VÀNG', 5202572, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:00:36', '2022-03-03 20:09:31', 1),
(88, 4, 1, 'FW2107074BKWLBK', 'JUPE DẠ ĐEN LÔNG CỪU', 3967060, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:00:36', '2022-03-03 20:09:31', 0),
(89, 4, 1, 'FS2105126BKORBR', 'JUPE TƠ NÂU CẠP ĐÍNH LOGO', 4227584, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:00:36', '2022-03-03 20:09:31', 1),
(90, 4, 1, 'FW2107144BKWOWH', 'JUPE BÚT CHÌ TRẮNG XẺ SAU', 9236739, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:00:37', '2022-03-03 20:09:31', 2),
(91, 4, 1, 'FW2106061BKWOBK', 'JUPE TAFTA PHỐI DẬP LY TƠ', 3500948, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:00:37', '2022-03-03 20:09:31', 0),
(92, 4, 1, 'FW2108060BKTWRD', 'JUPE BÚT CHÌ DẠ TWEED ĐỎ', 9794521, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:00:37', '2022-03-03 20:09:31', 1),
(93, 4, 1, 'FW2108040BKTWPT', 'JUPE DẠ TWEED DÂY PK GẤU', 8469764, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:00:37', '2022-03-03 20:09:31', 1),
(94, 4, 1, 'FW2108036BKTWPP', 'JUPE DẠ TWEED HỒNG ĐEN ĐUÔI CÁ', 2965256, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:00:37', '2022-03-03 20:09:31', 1),
(95, 4, 1, 'FW2107146BKORBK', 'JUPE TƠ ĐEN 2 TẦNG', 9416990, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:00:37', '2022-03-03 20:09:31', 2),
(96, 4, 1, 'FW2108062BKTWPP', 'JUPE DẠ TWEED HỒNG CAM', 8189184, 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:00:37', '2022-03-03 20:09:31', 1),
(97, 5, 1, 'FW2108088BPWOBK', 'QUẦN DÀI ĐEN LOE ỐNG', 2694951, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:11:36', '2022-03-03 20:09:31', 2),
(98, 5, 1, 'FW2112003BPVEGE', 'QUẦN SUÔNG NHUNG XANH', 8907202, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:11:36', '2022-03-03 20:09:31', 1),
(99, 5, 1, 'FW2107095BPWOPK', 'QUẦN DÀI HỒNG CẠP CHUN SAU', 6451161, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:11:36', '2022-03-03 20:09:31', 1),
(100, 5, 1, 'FW2105122BPWOBK', 'QUẦN BAGGY ĐEN LY GIỮA', 5534200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:11:36', '2022-03-03 20:09:31', 2),
(101, 5, 1, 'FW2105101BPDEGR', 'QUẦN JEANS LỬNG SUÔNG GHI', 8317515, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:11:36', '2022-03-03 20:09:31', 0),
(102, 5, 1, 'FW2108096BPWOBK', 'QUẦN ĐEN ỐNG VẨY TÚI CHÉO', 4984978, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:11:36', '2022-03-03 20:09:31', 1),
(103, 5, 1, 'FW2105084BPWOPG', 'QUẦN SỌC TRẮNG XANH DẬP LY', 9972343, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:11:36', '2022-03-03 20:09:31', 2),
(104, 5, 1, 'FW2108050BPWOPU', 'QUẦN SUÔNG TÍM XẾP LY', 4906784, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:11:36', '2022-03-03 20:09:31', 1),
(105, 5, 1, 'FW2106195BPWOPK', 'QUẦN SUÔNG HỒNG LY TRƯỚC', 4616893, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:11:36', '2022-03-03 20:09:31', 0),
(106, 5, 1, 'FS2105091BPWOPW', 'QUẦN LỬNG SUÔNG HT ĐAI EO', 8364111, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:11:36', '2022-03-03 20:09:31', 1),
(107, 5, 1, 'FW2108007BPWOBK', 'QUẦN SUÔNG ĐEN LY TRƯỚC', 7969879, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:11:36', '2022-03-03 20:09:31', 1),
(108, 5, 1, 'FW2107129BPWOBK', 'QUẦN SUÔNG ĐEN LY TRƯỚC', 4757063, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:11:36', '2022-03-03 20:09:31', 1),
(109, 5, 1, 'FS2105135BPWOBK', 'QUẦN SUÔNG ĐEN TÚI CHÉO', 9875676, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:11:36', '2022-03-03 20:09:31', 1),
(110, 5, 1, 'FW2108064BPWOBK', 'QUẦN SUÔNG ĐEN KHÓA SAU', 5107193, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:11:36', '2022-03-03 20:09:31', 2),
(111, 5, 1, 'FW2111005BSTWPL', 'QUẦN SOOC DẠ TWEED XANH', 5908940, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:11:36', '2022-03-03 20:09:31', 1),
(112, 5, 1, 'FW2104122BPDEGR', 'QUẦN JEANS GHI XẺ TRƯỚC', 4223121, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 07:11:36', '2022-03-03 20:09:31', 1),
(113, 9, NULL, 'ag', 'facok', 5899, 4, 'day la quan ao tre em', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-14 18:04:05', '2022-03-14 11:47:32', 1),
(115, 3, NULL, 'kajf', 'alona', 4, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-14 18:57:38', '2022-03-24 09:21:27', 0),
(119, 24, NULL, 'kạk', 'giày thể thao', 5500, 500, '<h2><span style=\"color:hsl(0, 0%, 0%);\">Đây là giày thể thao</span></h2>', '<h1><span style=\"color:#DAA520;\"><span style=\"background-color:#AFEEEE;\">Làm được rồi</span></span></h1>', '/upload/users/file_1640178863.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-25 17:28:27', '2022-03-25 18:23:16', 1),
(120, 29, NULL, 'kjakfjkfjf', 'giày rẻ', 7000, 80, '<h2><span style=\"color:hsl(270, 75%, 60%);\">Giày thể thao đẹp fake</span></h2>', NULL, '/upload/images/11.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-25 17:39:37', '2022-03-29 12:28:03', 0),
(121, 30, NULL, 'afffa', 'giay bootcamp', 7777777, 666, 'alo', NULL, '/upload/users/file_1640178921.png', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-25 20:20:49', '2022-03-31 10:18:17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `user_id` int DEFAULT NULL,
  `func_id` int DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint DEFAULT '1',
  `roles_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`roles_id`)
) ENGINE=MyISAM AUTO_INCREMENT=290 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`user_id`, `func_id`, `created_at`, `updated_at`, `status`, `roles_id`) VALUES
(4, 20, '2022-03-31 09:01:42', '2022-03-31 09:01:42', 1, 127),
(4, 18, '2022-03-31 09:01:42', '2022-03-31 09:01:42', 1, 126),
(4, 17, '2022-03-31 09:01:42', '2022-03-31 09:01:42', 1, 125),
(1, 27, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 287),
(1, 29, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 289),
(1, 28, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 288),
(1, 19, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 286),
(1, 20, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 285),
(1, 18, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 284),
(1, 17, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 283),
(1, 23, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 282),
(1, 22, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 281),
(1, 16, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 280),
(1, 15, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 279),
(1, 14, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 278),
(1, 13, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 277),
(1, 12, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 276),
(1, 26, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 275),
(1, 25, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 274),
(1, 24, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 273),
(1, 9, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 272),
(1, 11, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 271),
(1, 10, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 270),
(4, 19, '2022-03-31 09:01:42', '2022-03-31 09:01:42', 1, 128),
(1, 8, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 269),
(1, 7, '2022-03-31 16:48:22', '2022-03-31 16:48:22', 1, 268);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

DROP TABLE IF EXISTS `shipping`;
CREATE TABLE IF NOT EXISTS `shipping` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` text COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` text COLLATE utf8_unicode_ci,
  `phone` int DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci,
  `alias` int DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_share` text COLLATE utf8_unicode_ci,
  `title` text COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8_unicode_ci,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8_unicode_ci,
  `phone` int DEFAULT NULL,
  `address` varchar(10000) COLLATE utf8_unicode_ci DEFAULT '110 Hàng Bưởi',
  `birthday` date DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8_unicode_ci,
  `profession` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin_link` text COLLATE utf8_unicode_ci,
  `facebook_link` text COLLATE utf8_unicode_ci,
  `twitter_link` text COLLATE utf8_unicode_ci,
  `website_link` text COLLATE utf8_unicode_ci,
  `group_id` int DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint DEFAULT '1',
  `email_verified_at` datetime NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `timelife` datetime DEFAULT NULL,
  `reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `phone`, `address`, `birthday`, `image`, `about`, `profession`, `linkedin_link`, `facebook_link`, `twitter_link`, `website_link`, `group_id`, `created_at`, `updated_at`, `status`, `email_verified_at`, `remember_token`, `timelife`, `reset_token`) VALUES
(1, 'admin', '$2y$10$z.MjDmL7Kav793UWy2ry5u/ImeItrZmY2Tv5cqrHCkFeyyZkyUNKG', 'admin khoa', 'admin@gmail.com', 123456789, '111 Hàng Bưởi', '1999-01-01', '/upload/users/file_1640175774.png', '<span style=\"background-color:#FFFF00;\">In the event of a critical issue or urgent matter affecting this site, please contact us at <a href=\"https://icons8.com/contact\"><span style=\"color:#0000FF;\"><u>https://icons8.com/contact.</u></span></a></span>', 'ÀAFAFggh', 'linkedin.com', NULL, NULL, NULL, NULL, '2022-03-24 08:15:36', '2022-03-31 16:34:38', 1, '2022-03-24 01:14:38', 'l4fq6EPCyERHfuWVlxOGGXLlP2ZTuU9k74BgWGEFy8dEwlRxEzQWwkvcIFjH', '2022-03-25 00:42:13', '7654fd7d2ebffb38e3347bda23e2c859'),
(2, 'admin2', '$2y$10$Cjt2UKFcEQBSYIytCqenHenz0t0hbnQcsAg/dsVhMl.VLMlDRPSYm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-24 08:15:36', '2022-03-31 09:32:30', 1, '2022-03-24 01:14:38', 'tZIQTkStXq6yazwcaaXRKQNZ91OWKwkBA15DRF78k0cUYI8xN0nU9n1HPhgd', '2022-03-25 20:16:01', 'd18bb2f6bb01140d45c4cf755b4d2255'),
(3, 'admin3', '$2y$10$cqDWH4V6NTH3doQhzqD1u.EbhNJVV2y3Pq9mRU0MGmoIag4b1QVau', 'admin3', 'admin3@gmail.com', 584578895, '110 Hàng Bưởi', '1990-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-24 10:13:48', '2022-03-26 11:37:51', 2, '2022-03-24 03:13:13', '', '0000-00-00 00:00:00', ''),
(4, 'admin4', '$2y$10$kMQNVjc.IwBSQ6gZn7ngVuABA5MVegtgVB2s8pF165KUknRroWiMC$2y$10$QcPyjmOPwCAFcCC1lCdqhOeunmirKVUvd.nGT4M7G41AY2MMwjU.K', 'admin4', 'admin4@gmail.com', NULL, '110 Hàng Bưởi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-29 08:50:26', '2022-03-31 11:02:59', 0, '2022-03-29 01:49:57', '', '2022-03-29 01:49:57', NULL),
(5, 'admin5', '$2y$10$AzYeo4wLYXDm80.apCaQSe/l5UKFDoAHkSjM/qJSi7XE4QwtincsG', 'admin5', 'admin5@gmail.com', 123456789, '110 Hàng Bưởi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-31 10:59:06', '2022-03-31 10:59:06', 1, '0000-00-00 00:00:00', '', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
