-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Nis 2024, 09:25:02
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `rand-data`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veriler`
--

CREATE TABLE `veriler` (
  `id` int(11) NOT NULL,
  `kitap` text NOT NULL,
  `yazar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `veriler`
--

INSERT INTO `veriler` (`id`, `kitap`, `yazar`) VALUES
(1, 'Kaşağı', 'Ömer Seyfettin'),
(2, 'Sol Ayağım', 'Christy 	Brown'),
(3, 'Kavgam', 'Adolf Hitler'),
(4, 'Baron İstilası', '	Timur Soykan'),
(5, 'Dedem Bir Kiraz Ağacı', ' Hans Christian Andersen ');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `veriler`
--
ALTER TABLE `veriler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `veriler`
--
ALTER TABLE `veriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
