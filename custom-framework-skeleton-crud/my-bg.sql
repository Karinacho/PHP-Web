-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.6-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for probna
CREATE DATABASE IF NOT EXISTS `test_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `test_db`;

-- Dumping structure for table test_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `born_on` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table test_db.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `born_on`) VALUES
	(2, 'admin', '$argon2i$v=19$m=65536,t=4,p=1$Q2QwMXhINUNrVWc1dUV0dg$ljkJd82J/1FBLuRLKCPcbAIxlWSTkLuz7AQUqOclLDY', 'admin', 'admin', '2019-01-01'),
	(3, 'Lori', '$argon2i$v=19$m=65536,t=4,p=1$TVR0SkVvV3MzUlhWVmQvdw$yonSbBGKM76HC24kmhb+WHt0MmYnMwo2JjcUwg3WYuw', 'Lorito', 'Lorisima', '2019-01-01'),
	(4, 'User', '$argon2i$v=19$m=65536,t=4,p=1$eTgxaGs1YkpCUmcvbHN1SA$1rwbgCKMBPmxcdA66BqXL3JYOIR61ClHZ/nE15e7Pl8', 'User', 'Use', '2021-02-02'),
	(5, 'Stephanie', '$argon2i$v=19$m=65536,t=4,p=1$OXpDaWNnbVVEV2J4SXVNVA$7lXkfNIZQAlsEMNQdF8RHrLCcypeb0UauHbl49LgEx8', 'Stef', 'Kocheva', '2019-01-30'),
	(6, 'Karina', '$argon2i$v=19$m=65536,t=4,p=1$cWFPNWZNenRsbVNxUi9NZQ$vEAAWaanwWM4q+IsbmCLy/DVJyMZTiJasim9gKyNGg8', 'Karina', 'Cho', '2021-03-01');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
