-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 26 Oca 2018, 12:47:33
-- Sunucu sürümü: 5.7.19
-- PHP Sürümü: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sarki_kutuphanesi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilgiler`
--

DROP TABLE IF EXISTS `bilgiler`;
CREATE TABLE IF NOT EXISTS `bilgiler` (
  `sarki_id` int(11) NOT NULL AUTO_INCREMENT,
  `kayit_no` int(11) NOT NULL,
  `sarki_adi` varchar(50) NOT NULL,
  `sanatci` varchar(50) NOT NULL,
  `tarz` varchar(50) NOT NULL,
  `cikis_tarihi` varchar(50) NOT NULL,
  `album` varchar(50) NOT NULL,
  PRIMARY KEY (`sarki_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `bilgiler`
--

INSERT INTO `bilgiler` (`sarki_id`, `kayit_no`, `sarki_adi`, `sanatci`, `tarz`, `cikis_tarihi`, `album`) VALUES
(6, 1, 'When We Were Young', 'Adele', 'Soul', '2015', '25'),
(7, 2, 'Believer', 'Imagine Dragons', 'Rock', '2017', 'Evolve'),
(8, 3, 'Dancing On My Own', 'Calum Scott', 'Pop', '2018', 'Only Human'),
(9, 4, 'Kupa KÄ±zÄ±', 'Teoman', 'Rock', '2003', 'Teoman'),
(15, 5, 'Green Light', 'Lorde', 'Alternatif', '2017', 'Melodrama');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
