-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2013 at 09:02 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forumasistema`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `image` longtext NOT NULL,
  `tags` text,
  `subcategory_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `title`, `content`, `author_id`, `image`, `tags`, `subcategory_id`) VALUES
(1, 'FirstCategory', 'First category content', 14, '', NULL, '26'),
(24, 'First group', 'First group description goes here', 14, 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSRMZBhPHjmY4iA-HI32co-5pQJMBychfoEp6CFSrie5zYt1AO3', '', NULL),
(25, 'Second group', 'Second group description goes here', 14, 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQAsKka9wzhJaflogubsBHdEWi9VeqLAShtegb99iNhELchlLcHxA', '', NULL),
(26, 'Third group', 'Third group description goes here', 14, 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTjMOWwGKwmYhPolWo3k-CNJbkmbIN-_Z-BVbBGdfBgFuDbOp26Uw', '', NULL),
(27, 'Forth group', 'Forth group description goes here', 14, 'data:image/jpeg;base64,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', '', '25'),
(28, '123', '123', 14, 'http://123', '123', '26'),
(29, 'LOL', 'LOLLOLLOLLOLLOL', 14, 'http://', 'LOLLOL', '26'),
(30, '/create_category/create_catego', '/create_category/create_category', 14, 'http://', '', NULL),
(32, 'under first category', 'under first category', 14, '', NULL, '1'),
(33, 'wdasd', 'wdasd', 14, '', NULL, '32'),
(34, 'qwe', 'qwe', 14, '', NULL, '33');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('3c5cf104abfb99b6873b633ecaa44aeb', '54.236.244.89', '0', 1371036941, ''),
('730667aaf5d19b93888539acccc0f83a', '::1', 'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', 1371098364, ''),
('78c26970332562006081c9b9d0149d4a', '::1', 'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', 1370959008, '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext NOT NULL,
  `thread_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `date` text NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `thread_id` (`thread_id`),
  KEY `author_id` (`author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=167 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `content`, `thread_id`, `author_id`, `date`) VALUES
(140, '1', 62, 14, '11-06-2013 11:14:33'),
(141, '2', 63, 14, '11-06-2013 11:15:43'),
(142, '3', 64, 14, '11-06-2013 11:15:48'),
(143, '1', 65, 14, '11-06-2013 11:16:59'),
(144, '2', 66, 14, '11-06-2013 11:17:03'),
(145, '2', 62, 14, '11-06-2013 11:17:57'),
(146, '3', 62, 14, '11-06-2013 11:17:59'),
(147, '4', 62, 14, '11-06-2013 11:18:01'),
(148, '5', 62, 14, '11-06-2013 11:18:09'),
(149, '6', 67, 14, '11-06-2013 11:18:29'),
(150, '123', 68, 14, '11-06-2013 01:37:50'),
(151, '123', 69, 14, '11-06-2013 01:38:06'),
(152, '123', 69, 14, '11-06-2013 01:38:06'),
(153, 'qwe', 67, 14, '11-06-2013 01:39:57'),
(154, 'das', 67, 14, '11-06-2013 01:39:59'),
(155, 'qwe', 67, 14, '11-06-2013 01:40:01'),
(156, 'qweqweqwe', 67, 14, '11-06-2013 01:40:04'),
(157, 'qweqweqwe', 67, 14, '11-06-2013 01:40:04'),
(158, 'qweqweqwe', 67, 14, '11-06-2013 01:40:05'),
(159, 'qweqweqweqwe', 67, 14, '11-06-2013 01:40:07'),
(160, 'qweqweqweqwe', 67, 14, '11-06-2013 01:40:08'),
(161, 'qweqweqweqwe', 67, 14, '11-06-2013 01:40:08'),
(162, 'qweqweqweqwe', 67, 14, '11-06-2013 01:40:08'),
(163, 'qweqweqweqwe', 67, 14, '11-06-2013 01:40:08'),
(164, 'qweqweqweqwe', 67, 14, '11-06-2013 01:40:08'),
(165, 'qweqweqweqwe', 67, 14, '11-06-2013 01:40:08'),
(166, 'qweqweqweqwe', 67, 14, '11-06-2013 01:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE IF NOT EXISTS `threads` (
  `thread_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf16 COLLATE utf16_latvian_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `date` text NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_latvian_ci,
  PRIMARY KEY (`thread_id`),
  KEY `category_id` (`category_id`),
  KEY `author_id` (`author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `title`, `category_id`, `author_id`, `date`, `content`) VALUES
(62, '1', 26, 14, '11-06-2013 11:14:33', '1'),
(63, '2', 26, 14, '11-06-2013 11:15:43', '2'),
(64, '3', 26, 14, '11-06-2013 11:15:48', '3'),
(65, '1', 1, 14, '11-06-2013 11:16:59', '1'),
(66, '2', 1, 14, '11-06-2013 11:17:03', '2'),
(67, '6', 26, 14, '11-06-2013 11:18:29', '6'),
(68, '123', 26, 14, '11-06-2013 01:37:50', '123'),
(69, '123', 26, 14, '11-06-2013 01:38:06', '123'),
(70, '123', 26, 14, '11-06-2013 01:38:06', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `access_level` int(1) DEFAULT '1',
  `avatar_link` text,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `access_level`, `avatar_link`, `email`) VALUES
(14, 'asd', 'sAM5ddDyIUKtBCwofZU4BCHa3+Ft/FGL3TuKo9/tWJmQqu/JBgsq6aJRuiD3fHsqgPUJ28rW6LP4XHue1kxDnA==', 1, 'http://findicons.com/files/icons/376/the_blacy/128/amazing.png', NULL),
(19, 'asd2', 'aivars', 1, NULL, NULL),
(20, 'aivars', 'mW+BNBZcUzyHhL61o8Mi+8zPmZpVT9PfOQVN6WjGVKmkXsLgfwvdigPy10qi30lTY', 1, NULL, NULL),
(21, 'pimp', 'sAM5ddDyIUKtBCwofZU4BCHa3+Ft/FGL3TuKo9/tWJmQqu/JBgsq6aJRuiD3fHsqgPUJ28rW6LP4XHue1kxDnA==', 1, NULL, NULL),
(22, 'epic', 'aW7EHTgBK6HiWtXdoNCfr1OcIiHM5JMCi+nq7/oB9lo45AWsiGWZwz8BPd1sTJns14TFGgn11bxcjRX75NLA4Q==', 1, NULL, 'gester.gester@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`thread_id`) REFERENCES `threads` (`thread_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `threads`
--
ALTER TABLE `threads`
  ADD CONSTRAINT `threads_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `threads_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
