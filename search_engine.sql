-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 27, 2020 at 02:07 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `search_engine`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

DROP TABLE IF EXISTS `websites`;
CREATE TABLE IF NOT EXISTS `websites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `link` text NOT NULL,
  `keyword` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `title`, `link`, `keyword`, `description`, `image`) VALUES
(1, 'Google', 'http://www.google.com/', 'google, blog, test, a, b, c, d, e, f, g, h, i', ' Search the world\'s information, including webpages, images, videos and more. Google has many special features to help you find exactly what you\'re looking', 'google_logo.png'),
(2, 'The world\'s leading software development platform Â· GitHub', 'https://github.com/', 'git, github, g, githubprofile,Mind-Data-Hack', ' GitHub brings together the world\'s largest community of developers to discover, share, and build better software. From open source projects to private team ...\r\n', 'git.jpg'),
(3, 'Mind Data Hack', 'https://github.com/Mind-Data-Hack/google-clone', 'google-clone, clone, google ,Mind-Data-Hack, hlo,github', ' It is a google clone in PHP. Contribute to Mind-Data-Hack/google-clone development by creating an account on GitHub.', 'mind_data_hack.png'),
(4, 'Gihub Blogs', 'https://github.blog/', 'blogs, gihub, Git, blog, github', ' Updates, ideas, and inspiration from GitHub to help developers build and design software.', 'github_aboout.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
