-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 16, 2018 at 11:51 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baza-funkc`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `add_users`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_users` (IN `name` VARCHAR(100), IN `lastname` VARCHAR(100), IN `b_day` INT, IN `id_country` INT, IN `email` VARCHAR(100), IN `users_name` VARCHAR(100), IN `cv` TEXT, IN `url_photo` TEXT)  begin
	insert into korisnik (`name`, `lastname`, `b_day`, `id_country`, `email`, `users_name`, `cv`, `url_photo`) 
	values (name, lastname, b_day, id_country, email, users_name, cv, url_photo);
end$$

DROP PROCEDURE IF EXISTS `delete_users`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_users` (IN `id` INT)  begin
	delete from users where users.id=id;
end$$

DROP PROCEDURE IF EXISTS `update_users`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_users` (IN `id` INT, IN `name` VARCHAR(100), IN `lastname` VARCHAR(100), IN `b_day` INT, IN `id_country` INT, IN `email` VARCHAR(100), IN `users_name` VARCHAR(100), IN `cv` TEXT, IN `url_photo` TEXT)  begin
	update
    	users
    set
        users.name = name, 
        users.lastname = lastname, 
        users.b_day = b_day, 
        users.id_country = id_country, 
        users.email = email, 
        users.users_name=users_name, 
        users.cv = cv, 
        users.url_photo = url_photo
    where
    	users.id=id;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `addfriend`
--

DROP TABLE IF EXISTS `addfriend`;
CREATE TABLE IF NOT EXISTS `addfriend` (
  `id_users` int(11) NOT NULL,
  `id_friend` int(11) NOT NULL,
  `request_time` int(11) NOT NULL,
  `accept_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_users`,`id_friend`),
  KEY `idx_id_friend_addFriend` (`id_friend`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ct_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ct_name` (`ct_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `b_day` int(11) NOT NULL,
  `id_country` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `users_names` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cv` text COLLATE utf8_unicode_ci NOT NULL,
  `url_photo` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `users_names` (`users_names`),
  KEY `idx_id_country` (`id_country`),
  KEY `idx_name` (`name`),
  KEY `idx_lastname` (`lastname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `users_simple_data`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `users_simple_data`;
CREATE TABLE IF NOT EXISTS `users_simple_data` (
`name` varchar(100)
,`lastname` varchar(100)
,`b_day_time` datetime
,`b_plc` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `users_stats`
--

DROP TABLE IF EXISTS `users_stats`;
CREATE TABLE IF NOT EXISTS `users_stats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `heading` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `stats_text` text COLLATE utf8_unicode_ci,
  `url_photo` text COLLATE utf8_unicode_ci,
  `stats_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_id_users_users_stats` (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure for view `users_simple_data`
--
DROP TABLE IF EXISTS `users_simple_data`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `users_simple_data`  AS  select `users`.`name` AS `name`,`users`.`lastname` AS `lastname`,from_unixtime(`users`.`b_day`) AS `b_day_time`,`country`.`ct_name` AS `b_plc` from (`users` join `country` on((`users`.`id_country` = `country`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_stats`
--
ALTER TABLE `users_stats` ADD FULLTEXT KEY `idx_heading_stats_text_users_stats` (`heading`,`stats_text`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addfriend`
--
ALTER TABLE `addfriend`
  ADD CONSTRAINT `fk_id_friend_addFriend` FOREIGN KEY (`id_friend`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_id_users_addFriend` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_id_country_users` FOREIGN KEY (`id_country`) REFERENCES `country` (`id`);

--
-- Constraints for table `users_stats`
--
ALTER TABLE `users_stats`
  ADD CONSTRAINT `fk_id_users_users_stats` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
