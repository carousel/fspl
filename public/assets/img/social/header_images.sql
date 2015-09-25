-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2015 at 09:53 AM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.6.13-1+deb.sury.org~trusty+3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `centralpark`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--


--
-- Table structure for table `header_images`
--

CREATE TABLE IF NOT EXISTS `header_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `default` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `credits` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `credits_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=44 ;

--
-- Dumping data for table `header_images`
--

INSERT INTO `header_images` (`id`, `path`, `default`, `created_at`, `updated_at`, `credits`, `credits_url`, `page_name`) VALUES
(1, 'images/headers/weddings-in-central-park.jpg', '', '2015-09-22 05:21:31', '2015-09-22 05:21:46', '', '', ''),
(2, 'images/headers/water.jpg', '', '2015-09-22 05:21:43', '2015-09-22 05:22:37', '', '', ''),
(3, 'images/headers/thin_long800.jpg', '', '2015-09-22 05:22:06', '2015-09-22 05:22:06', '', '', ''),
(4, 'images/headers/the_rock.jpg', '', '2015-09-22 05:22:16', '2015-09-22 05:22:16', '', '', ''),
(5, 'images/headers/softball.jpg', '', '2015-09-22 05:22:26', '2015-09-22 05:22:26', '', '', ''),
(6, 'images/headers/belvedere.jpg', '', '2015-09-22 05:22:34', '2015-09-22 05:23:19', '', '', ''),
(8, 'images/headers/belvedere_castle.jpg', '', '2015-09-22 05:22:53', '2015-09-22 05:22:53', '', '', ''),
(9, 'images/headers/bethesda.jpg', '', '2015-09-22 05:23:07', '2015-09-22 05:23:07', '', '', ''),
(10, 'images/headers/bethesda_winter.jpg', '', '2015-09-22 05:23:16', '2015-09-22 05:24:56', '', '', ''),
(11, 'images/headers/boatpond800.jpg', '', '2015-09-22 05:24:39', '2015-09-22 05:24:39', '', '', ''),
(12, 'images/headers/bow_bridge.jpg', '', '2015-09-22 05:24:46', '2015-09-22 05:24:46', '', '', ''),
(13, 'images/headers/bow_bridge_gondola.jpg', '', '2015-09-22 05:24:52', '2015-09-22 05:25:35', '', '', ''),
(14, 'images/headers/carousel.jpg', '', '2015-09-22 05:25:12', '2015-09-22 05:25:12', '', '', ''),
(15, 'images/headers/columbus_circle.jpg', '', '2015-09-22 05:25:20', '2015-09-22 05:25:20', '', '', ''),
(16, 'images/headers/columbus_circle2.jpg', '', '2015-09-22 05:25:31', '2015-09-22 05:25:58', '', '', ''),
(17, 'images/headers/conservatory-garden.jpg', '', '2015-09-22 05:25:56', '2015-09-22 05:45:03', '', '', ''),
(18, 'images/headers/dairy.jpg', '', '2015-09-22 05:39:55', '2015-09-22 05:39:55', '', '', ''),
(19, 'images/headers/default.jpg', '', '2015-09-22 05:40:07', '2015-09-22 05:40:07', '', '', ''),
(20, 'images/headers/gray-line.jpg', '', '2015-09-22 05:40:19', '2015-09-22 05:40:19', '', '', ''),
(21, 'images/headers/gray-line-v1.jpg', '', '2015-09-22 05:40:40', '2015-09-22 05:40:40', '', '', ''),
(22, 'images/headers/great_lawn.jpg', '', '2015-09-22 05:40:51', '2015-09-22 05:40:51', '', '', ''),
(23, 'images/headers/great_lawn_rick.jpg', '', '2015-09-22 05:41:11', '2015-09-22 05:41:11', '', '', ''),
(24, 'images/headers/horsebuggy800.jpg', '', '2015-09-22 05:41:47', '2015-09-22 05:41:47', '', '', ''),
(25, 'images/headers/lake800.jpg', '', '2015-09-22 05:42:28', '2015-09-22 05:42:28', '', '', ''),
(26, 'images/headers/mall.jpg', '', '2015-09-22 05:42:39', '2015-09-22 05:42:39', '', '', ''),
(27, 'images/headers/meadow.jpg', '', '2015-09-22 05:42:48', '2015-09-22 05:42:48', '', '', ''),
(28, 'images/headers/monkeys.jpg', '', '2015-09-22 05:43:02', '2015-09-22 05:43:02', '', '', ''),
(29, 'images/headers/night_resorvoir800.jpg', '', '2015-09-22 05:43:25', '2015-09-22 05:43:25', '', '', ''),
(30, 'images/headers/nightstreet800.jpg', '', '2015-09-22 05:43:43', '2015-09-22 05:43:43', '', '', ''),
(31, 'images/headers/nyc-marathon.jpg', '', '2015-09-22 05:43:49', '2015-09-22 05:43:49', '', '', ''),
(32, 'images/headers/police.jpg', '', '2015-09-22 05:43:54', '2015-09-22 05:43:54', '', '', ''),
(33, 'images/headers/resorvoir.jpg', '', '2015-09-22 05:43:59', '2015-09-22 05:43:59', '', '', ''),
(34, 'images/headers/room_with_a_view.jpg', '', '2015-09-22 05:44:04', '2015-09-22 05:44:04', '', '', ''),
(35, 'images/headers/sailboat800.jpg', '', '2015-09-22 05:44:15', '2015-09-22 05:44:15', '', '', ''),
(36, 'images/headers/sea_lion.jpg', '', '2015-09-22 05:44:21', '2015-09-22 05:44:21', '', '', ''),
(37, 'images/headers/sea_lions.jpg', '', '2015-09-22 05:44:27', '2015-09-22 05:44:27', '', '', ''),
(38, 'images/headers/sheep_meadow.jpg', '', '2015-09-22 05:44:33', '2015-09-22 05:44:33', '', '', '')


