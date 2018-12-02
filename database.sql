-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Eyl 2016, 21:00:01
-- Sunucu sürümü: 5.7.9
-- PHP Sürümü: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `parodi3`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

DROP TABLE IF EXISTS `kategoriler`;
CREATE TABLE IF NOT EXISTS `kategoriler` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_ad` text NOT NULL,
  `kategori_link` text NOT NULL,
  `kategori_keyw` text NOT NULL,
  `kategori_resim` text NOT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_ad`, `kategori_link`, `kategori_keyw`, `kategori_resim`) VALUES
(8, 'Slimfit', 'slimfit', 'slimfit,dar,slim,fit', '../assets/media/kategori_resim/1.jpg'),
(9, 'Klasik', 'klasik', 'klasik,düz', '../assets/media/kategori_resim/1.jpg'),
(10, 'Büyük Beden', 'buyuk-beden', 'buyukbeden,buyuk,kilolu', '../assets/media/kategori_resim/1.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

DROP TABLE IF EXISTS `mesajlar`;
CREATE TABLE IF NOT EXISTS `mesajlar` (
  `mesaj_id` int(11) NOT NULL AUTO_INCREMENT,
  `mesaj_ad` text NOT NULL,
  `mesaj_tel` text NOT NULL,
  `mesaj_email` text NOT NULL,
  `mesaj_konu` text NOT NULL,
  `mesaj` text NOT NULL,
  `mesaj_tarih` date NOT NULL,
  `mesaj_okunma` int(11) NOT NULL,
  PRIMARY KEY (`mesaj_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider_resim`
--

DROP TABLE IF EXISTS `slider_resim`;
CREATE TABLE IF NOT EXISTS `slider_resim` (
  `slider_resim_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_resim_ad` text NOT NULL,
  `slider_resim_link` text NOT NULL,
  PRIMARY KEY (`slider_resim_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `slider_resim`
--

INSERT INTO `slider_resim` (`slider_resim_id`, `slider_resim_ad`, `slider_resim_link`) VALUES
(1, '311824.jpg-358124.jpg', '#');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE IF NOT EXISTS `urunler` (
  `urun_id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_ad` text NOT NULL,
  `urun_link` text NOT NULL,
  `urun_aciklama` text NOT NULL,
  `urun_keyw` text NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `urun_resim1` text NOT NULL,
  `urun_resim2` text NOT NULL,
  `urun_resim3` text NOT NULL,
  `urun_resim4` text NOT NULL,
  `urun_resim5` text,
  `urun_resim6` text,
  `urun_resim7` text,
  `urun_resim8` text,
  `urun_resim9` text NOT NULL,
  `urun_resim10` text NOT NULL,
  PRIMARY KEY (`urun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_ad`, `urun_link`, `urun_aciklama`, `urun_keyw`, `kategori_id`, `urun_resim1`, `urun_resim2`, `urun_resim3`, `urun_resim4`, `urun_resim5`, `urun_resim6`, `urun_resim7`, `urun_resim8`, `urun_resim9`, `urun_resim10`) VALUES
(1, 'aaa', 'aaa-567505', '', '', 10, 'aaa-567505-172272.jpg', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
(4, 'asdasd', 'asdasd-625245', '', '', 10, 'asdasd-625245-403351.jpg', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE IF NOT EXISTS `uyeler` (
  `uye_id` int(11) NOT NULL AUTO_INCREMENT,
  `uye_kadi` varchar(200) NOT NULL,
  `uye_sifre` varchar(200) NOT NULL,
  `uye_ad` varchar(200) NOT NULL,
  `uye_soyad` varchar(200) NOT NULL,
  `uye_eposta` varchar(200) NOT NULL,
  `uye_rutbe` int(11) NOT NULL,
  `uye_onay` int(11) NOT NULL,
  PRIMARY KEY (`uye_id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uye_id`, `uye_kadi`, `uye_sifre`, `uye_ad`, `uye_soyad`, `uye_eposta`, `uye_rutbe`, `uye_onay`) VALUES
(3, 'mustafa', 'kahya', 'Mustafa', 'KAHYAOĞLU', 'mustafakahyaoglu1905@gmail.com', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
