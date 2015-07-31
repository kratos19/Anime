
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2015 at 02:33 PM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u991742597_baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime`
--

CREATE TABLE IF NOT EXISTS `anime` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titlu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagine` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `continut` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`id`, `titlu`, `imagine`, `continut`) VALUES
(21, 'Naruto', 'images/gaara.png', '	&lt;div class=&quot;animeImg&quot;&gt;\n		&lt;h1&gt;\n			Naruto\n		&lt;/h1&gt;\n		&lt;button class=&quot;button-lista-anime&quot;&gt;\n			Arata Lista Anime-uri\n		&lt;/button&gt;\n		&lt;p&gt;\n			Naruto este o serie manga japoneza scrisa si ilustrata de Masashi Kishimoto, avand si o adaptare anime. \n			Personajul principal, Naruto Uzumaki, este un ninja adolescent, imprevizibil si hiperactiv, care este intr-o constanta cautare de cunoastere, \n			visand sa devina Hokage, un ninja recunoscut ca cel mai puternic dintre toti si liderul satului.\n		&lt;/p&gt;\n		&lt;img src=&quot;images/narutoImgPage.jpg&quot;&gt;	\n	&lt;/div&gt;\n	&lt;div class=&quot;animeImg&quot;&gt;\n		&lt;h1&gt;\n			Naruto Shippuuden\n		&lt;/h1&gt;\n		&lt;p&gt;\n			Naruto Shippuuden este continuarea seriei originale Naruto. \n			Povestea se invarte in jurul unui Naruto Uzumaki mai in varsta si mai matur, fiind intr-o continua cautare care spera sa duca la salvarea prietenului sau Uchiha Sasuke din mainile sarpelui Shinobi, Orochimaru. \n			Dupa doi ani si jumatate, Naruto se intoarce in Konoha si decide sa faca totul pentru ca drumul sau sa fie pavat cu fapte reale. Dar cand in atentia sa apare o noua grupare numita Akatsuki... lucrurile se complica.\n		&lt;/p&gt;\n		&lt;img src=&quot;images/akatsuki.jpg&quot;&gt;\n	&lt;/div&gt;');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
