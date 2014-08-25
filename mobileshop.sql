-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2014 at 02:11 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mobileshop`
--
CREATE DATABASE IF NOT EXISTS `mobileshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `mobileshop`;

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE IF NOT EXISTS `chitietdonhang` (
  `ma` int(11) NOT NULL,
  `tensp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dienthoai`
--

CREATE TABLE IF NOT EXISTS `dienthoai` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `loai` int(11) NOT NULL,
  `hdh` int(11) NOT NULL,
  `nsx` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `icon` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `xuatxu` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT '20',
  `soluotxem` int(11) NOT NULL DEFAULT '0',
  `soluotban` int(11) NOT NULL DEFAULT '0',
  `mota` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tinhtrang` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=128 ;

--
-- Dumping data for table `dienthoai`
--

INSERT INTO `dienthoai` (`ma`, `ten`, `loai`, `hdh`, `nsx`, `gia`, `icon`, `cover`, `xuatxu`, `soluong`, `soluotxem`, `soluotban`, `mota`, `tinhtrang`) VALUES
(1, 'iPhone 5S 32GB', 1, 1, 1, 19490000, 'images/icon/1.jpg', 'images/cover/1.jpg', 'Mỹ', 20, 2, 0, 'Màn hình: DVGA, 4.0 inches<br>HĐH: iOS<br>CPU: 2 nhân 1.3GHz, RAM 1GB<br>Camera: 8.0 MP<br>Dung lượng pin: 1560 mAh', 2),
(2, 'iPhone 5S 16GB', 1, 1, 1, 16990000, 'images/icon/2.jpg', 'images/cover/2.jpg', 'Mỹ', 20, 0, 0, 'Màn hình: DVGA, 4.0 inches<br>HĐH: iOS<br>CPU: 2 nhân 1.3GHz, RAM 1GB<br>Camera: 8.0 MP<br>Dung lượng pin: 1560 mAh', 1),
(3, 'iPhone 5 32GB', 1, 1, 1, 13990000, 'images/icon/3.jpg', 'images/cover/3.jpg', 'Mỹ', 20, 0, 0, 'Màn hình: DVGA, 4.0 inches<br>HĐH: iOS<br>CPU: 2 nhân 1.3GHz, RAM 1GB<br>Camera: 8.0 MP<br>Dung lượng pin: 1440 mAh', 1),
(4, 'iPhone 4S 8GB', 1, 1, 1, 9990000, 'images/icon/4.jpg', 'images/cover/4.jpg', 'Mỹ', 20, 0, 0, 'Màn hình: DVGA, 3.5 inches<br>HĐH: iOS<br>CPU: 2 nhân 1GHz, RAM 512MB<br>Bộ nhớ trong: 8GB<br>Dung lượng pin: 1420 mAh', 1),
(5, 'iPhone 4 8GB', 1, 1, 1, 6690000, 'images/icon/5.jpg', 'images/cover/5.jpg', 'Mỹ', 20, 0, 0, 'Màn hình: DVGA, 3.5 inches<br>HĐH: iOS<br>CPU: 1GHz, RAM 512MB<br>Camera: 5.0 MP<br>Dung lượng pin: 1420 mAh', 1),
(6, 'Samsung Galaxy S5', 1, 2, 2, 15990000, 'images/icon/6.jpg', 'images/cover/6.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: Full HD, 5.1 inches<br>HĐH: Android<br>CPU: 2 lõi 4 nhân, RAM 2GB<br>Camera: 16 MP<br>Dung lượng pin: 2800 mAh', 2),
(7, 'Samsung Galaxy Note 3', 1, 2, 2, 14990000, 'images/icon/7.jpg', 'images/cover/7.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: Full HD, 5.7 inches<br>HĐH: Android<br>CPU: 2 lõi 4 nhân, RAM 3GB<br>Camera: 13 MP<br>Dung lượng pin: 3200 mAh', 2),
(8, 'Samsung Galaxy S4', 1, 2, 2, 11990000, 'images/icon/8.jpg', 'images/cover/8.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: Full HD, 5.0 inches<br>HĐH: Android<br>CPU: 8 nhân, RAM 2GB<br>Camera: 13 MP<br>Dung lượng pin: 2600 mAh', 1),
(9, 'Samsung Galaxy Note 3 Neo', 1, 2, 2, 11990000, 'images/icon/9.jpg', 'images/cover/9.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: HD, 5.5 inches<br>HĐH: Android<br>CPU: 6 nhân, RAM 2GB<br>Camera: 8.0 MP<br>Dung lượng pin: 3100 mAh', 1),
(10, 'Samsung Galaxy S3', 1, 2, 2, 7990000, 'images/icon/10.jpg', 'images/cover/10.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: Full HD, 4.8 inches<br>HĐH: Android<br>CPU: 4 nhân 1.4GHz, RAM 1GB<br>Camera: 8.0 MP<br>Dung lượng pin: 2100 mAh', 1),
(11, 'Samsung Galaxy Grand 2', 1, 2, 2, 7990000, 'images/icon/11.jpg', 'images/cover/11.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: HD, 5.25 inches<br>HĐH: Android<br>CPU: 4 nhân 1.2GHz, RAM 1.5GB<br>Camera: 8.0 MP, 2 sim<br>Dung lượng pin: 2600 mAh', 1),
(12, 'Samsung Galaxy Win', 1, 2, 2, 5590000, 'images/icon/12.jpg', 'images/cover/12.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: WVGA, 4.7 inches<br>HĐH: Android<br>CPU: 4 nhân 1.2GHz, RAM 1GB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 2000 mAh', 1),
(13, 'Samsung Galaxy Core Duos', 1, 2, 2, 3990000, 'images/icon/13.jpg', 'images/cover/13.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: WVGA, 4.3 inches<br>HĐH: Android<br>CPU: 2 nhân 1.2GHz, RAM 1GB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 1800 mAh', 1),
(14, 'Samsung Galaxy Trend Plus', 1, 2, 2, 3490000, 'images/icon/14.jpg', 'images/cover/14.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: WVGA, 4.0 inches<br>HĐH: Android<br>CPU: 2 nhân 1.2GHz, RAM 768MB<br>Camera: 5.0 MP<br>Dung lượng pin: 1500 mAh', 3),
(15, 'Samsung Galaxy Trend Lite', 1, 2, 2, 2490000, 'images/icon/15.jpg', 'images/cover/15.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: WVGA, 4.0 inches<br>HĐH: Android<br>CPU: 1 nhân 1GHz, RAM 512MB<br>Camera: 3.0 MP, 2 sim<br>Dung lượng pin: 1500 mAh', 3),
(16, 'Samsung Galaxy Y', 1, 2, 2, 1540000, 'images/icon/16.jpg', 'images/cover/16.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: QVGA, 4.3 inches<br>HĐH: Android<br>CPU: 830MHz, RAM 290MB<br>Camera: 2.0 MP<br>Dung lượng pin: 1200 mAh', 3),
(17, 'Samsung C3520', 3, 4, 2, 990000, 'images/icon/17.jpg', 'images/cover/17.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: QVGA, 2.4 inches<br>Danh bạ: 1000 số<br>Bộ nhớ trong: 28MB, RAM 1GB<br>Camera: 1.3 MP<br>Dung lượng pin: 800 mAh', 1),
(18, 'Samsung Rex 60 C3312R', 1, 4, 2, 790000, 'images/icon/18.jpg', 'images/cover/18.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: QVGA, 2.8 inches<br>Hỗ trợ: 2 sim 2 sóng<br>Danh bạ: 1000 số<br>Camera: 1.3 MP<br>Dung lượng pin: 1000 mAh', 1),
(19, 'Samsung Piton B310', 2, 4, 2, 650000, 'images/icon/19.jpg', 'images/cover/19.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: QVGA, 2.0 inches<br>Hỗ trợ: 2 sim<br>Danh bạ: 1000 số<br>Tích hợp đèn pin, FM<br>Dung lượng pin: 800 mAh', 1),
(20, 'Samsung E1200', 2, 4, 2, 350000, 'images/icon/20.jpg', 'images/cover/20.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: QCIF, 1.5 inches<br>Danh bạ 200 số<br>Bàn phím cao su chống bụi<br>Hỗ trợ chức năng đèn pin<br>Dung lượng pin: 800 mAh', 1),
(21, 'Nokia Lumia 1520', 1, 3, 3, 12990000, 'images/icon/21.jpg', 'images/cover/21.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: Full HD, 6.0 inches<br>HĐH: Windows Phone<br>CPU: 4 nhân 2.2GHz, RAM 2GB<br>Camera: 20 MP<br>Dung lượng pin: 3400 mAh', 2),
(22, 'Nokia Lumia 925', 1, 3, 3, 8990000, 'images/icon/22.jpg', 'images/cover/22.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: HD, 4.5 inches<br>HĐH: Windows Phone<br>CPU: 2 nhân 1.5GHz, RAM 1GB<br>Camera: 8.7 MP<br>Dung lượng pin: 2000 mAh', 1),
(23, 'Nokia Lumia 1320', 1, 3, 3, 7490000, 'images/icon/23.jpg', 'images/cover/23.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: HD, 6.0 inches<br>HĐH: Windows Phone<br>CPU: 2 nhân 1.7GHz, RAM 1GB<br>Camera: 5.0 MP<br>Dung lượng pin: 3400 mAh', 1),
(24, 'Nokia Lumia 720', 1, 3, 3, 6690000, 'images/icon/24.jpg', 'images/cover/24.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: WVGA, 4.3 inches<br>HĐH: Windows Phone<br>CPU: 2 nhân 1GHz, RAM 512MB<br>Camera: 6.7 MP<br>Dung lượng pin: 2000 mAh', 1),
(25, 'Nokia Lumia 625', 1, 3, 3, 4990000, 'images/icon/25.jpg', 'images/cover/25.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: WVGA, 4.7 inches<br>HĐH: Windows Phone<br>CPU: 2 nhân 1GHz, RAM 512MB<br>Camera: 5.0 MP<br>Dung lượng pin: 2000 mAh', 1),
(26, 'Nokia XL', 1, 2, 3, 3700000, 'images/icon/26.jpg', 'images/cover/26.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: WVGA, 5.0 inches<br>HĐH: Nokia X platform<br>CPU: 1 nhân 1GHz, RAM 768MB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 2000 mAh', 2),
(27, 'Nokia 515', 2, 4, 3, 3500000, 'images/icon/27.jpg', 'images/cover/27.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: QVGA, 2.4 inches<br>Hỗ trợ: 2 sim 2 sóng<br>Danh bạ: 1000 số<br>Camera: 5.0 MP<br>Dung lượng pin: 1200 mAh', 1),
(28, 'Nokia Lumia 630', 1, 3, 3, 3500000, 'images/icon/28.jpg', 'images/cover/28.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: FWVGA, 4.5 inches<br>HĐH: Windows Phone<br>CPU: 4 nhân 1.2GHz, RAM 512MB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 1830 mAh', 2),
(29, 'Nokia Lumia 525', 1, 3, 3, 2990000, 'images/icon/29.jpg', 'images/cover/29.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: WVGA, 4.0 inches<br>HĐH: Windows Phone<br>CPU: 2 nhân 1GHz, RAM 1GB<br>Camera: 5.0 MP<br>Dung lượng pin: 1430 mAh', 3),
(30, 'Nokia X+', 1, 2, 3, 2750000, 'images/icon/30.jpg', 'images/cover/30.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: WVGA, 4.0 inches<br>HĐH: Nokia X platform<br>CPU: 2 nhân 1GHz, RAM 768MB<br>Camera: 3.0 MP, 2 sim<br>Dung lượng pin: 1500 mAh', 1),
(31, 'Nokia Lumia 520', 1, 3, 3, 2690000, 'images/icon/31.jpg', 'images/cover/31.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: WVGA, 4.0 inches<br>HĐH: Windows Phone<br>CPU: 2 nhân 1GHz, RAM 512MB<br>Camera: 5.0 MP<br>Dung lượng pin: 1430 mAh', 3),
(32, 'Nokia X', 1, 2, 3, 2550000, 'images/icon/32.jpg', 'images/cover/32.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: WVGA, 4.0 inches<br>HĐH: Nokia X platform<br>CPU: 2 nhân 1GHz, RAM 512MB<br>Camera: 3.0 MP, 2 sim<br>Dung lượng pin: 1500 mAh', 1),
(33, 'Nokia Asha 503 Dual', 1, 4, 3, 1790000, 'images/icon/33.jpg', 'images/cover/33.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: QVGA, 3.0 inches<br>HĐH: Nokia Asha platform<br>Hỗ trợ 2 sim 2 sóng<br>Camera: 5.0 MP<br>Dung lượng pin: 1200 mAh', 1),
(34, 'Nokia 301', 2, 4, 3, 1700000, 'images/icon/34.jpg', 'images/cover/34.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: QVGA, 2.4 inches<br>Hỗ trợ 2 sim 2 sóng<br>Danh bạ: 1000 số<br>Camera: 3.2 MP<br>Dung lượng pin: 1110 mAh', 1),
(35, 'Nokia 206', 2, 4, 3, 1300000, 'images/icon/35.jpg', 'images/cover/35.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: QVGA, 2.4 inches<br>Hỗ trợ 2 sim 2 sóng<br>Danh bạ: 1000 số<br>Camera: 1.3 MP hỗ trợ quay phim<br>Dung lượng pin: 1110 mAh', 1),
(36, 'Nokia 220', 2, 4, 3, 1000000, 'images/icon/36.jpg', 'images/cover/36.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: QVGA, 2.4 inches<br>Hỗ trợ 2 sim 2 sóng<br>Danh bạ: 500 số<br>Camera: 2.0 MP<br>Dung lượng pin: 1100 mAh', 1),
(37, 'Nokia 112', 2, 4, 3, 930000, 'images/icon/37.jpg', 'images/cover/37.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: QCIF, 1.8 inches<br>Hỗ trợ 2 sim 2 sóng<br>Danh bạ: 1000 số<br>Camera: VGA, hỗ trợ quay phim<br>Dung lượng pin: 1400 mAh', 1),
(38, 'Nokia 109', 2, 4, 3, 850000, 'images/icon/38.jpg', 'images/cover/38.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: QQVGA, 1.8 inches<br>Danh bạ: 1000 số<br>Hỗ trợ thẻ nhớ ngoài đến 32GB<br>Hỗ trợ online qua GPRS<br>Dung lượng pin: 800 mAh', 1),
(39, 'Nokia 108', 2, 4, 3, 740000, 'images/icon/39.jpg', 'images/cover/39.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: QQVGA, 1.8 inches<br>Hỗ trợ 2 sim 2 sóng<br>Danh bạ: 500 số<br>Camera: VGA (0.3 MP)<br>Dung lượng pin: 950 mAh', 1),
(40, 'Nokia 107', 2, 4, 3, 650000, 'images/icon/40.jpg', 'images/cover/40.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: QQVGA, 1.8 inches<br>Hỗ trợ 2 sim 2 sóng<br>Danh bạ: 500 số<br>Hỗ trợ thẻ nhớ 16GB<br>Dung lượng pin: 1020 mAh', 1),
(41, 'Nokia 106', 2, 4, 3, 500000, 'images/icon/41.jpg', 'images/cover/41.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: QQVGA, 1.8 inches<br>Danh bạ: 500 số<br>FM tích hợp sẵn<br>Đèn pin sáng<br>Dung lượng pin: 800 mAh', 1),
(42, 'Nokia 105', 2, 4, 3, 420000, 'images/icon/42.jpg', 'images/cover/42.jpg', 'Phần Lan', 20, 0, 0, 'Màn hình: QCIF, 1.4 inches<br>Danh bạ: 500 số<br>Bộ nhớ trong 8MB<br>Bàn phím chống bụi và nước<br>Dung lượng pin: 800 mAh', 3),
(43, 'Sony Xperia Z2', 1, 2, 4, 16990000, 'images/icon/43.jpg', 'images/cover/43.jpg', 'Nhật Bản', 20, 0, 0, 'Màn hình: Full HD, 5.2 inches<br>HĐH: Android<br>CPU: 4 nhân 2.3GHz, RAM 3GB<br>Camera: 20.7 MP<br>Dung lượng pin: 3200 mAh', 2),
(44, 'Sony Xperia Z1', 1, 2, 4, 13990000, 'images/icon/44.jpg', 'images/cover/44.jpg', 'Nhật Bản', 20, 0, 0, 'Màn hình: Full HD, 5.0 inches<br>HĐH: Android<br>CPU: 4 nhân 2.2GHz, RAM 2GB<br>Camera: 20.7 MP<br>Dung lượng pin: 3000 mAh', 1),
(45, 'Sony Xperia Z', 1, 2, 4, 10990000, 'images/icon/45.jpg', 'images/cover/45.jpg', 'Nhật Bản', 20, 0, 0, 'Màn hình: Full HD, 5.0 inches<br>HĐH: Android<br>CPU: 4 nhân 1.5GHz, RAM 2GB<br>Camera: 13 MP<br>Dung lượng pin: 2330 mAh', 1),
(46, 'Sony Xperia T2 Ultra', 1, 2, 4, 9990000, 'images/icon/46.jpg', 'images/cover/46.jpg', 'Nhật Bản', 20, 0, 0, 'Màn hình: HD, 6.0 inches<br>HĐH: Android<br>CPU: 4 nhân 1.4GHz, RAM 1GB<br>Camera: 13 MP, 2 sim<br>Dung lượng pin: 3000 mAh', 1),
(47, 'Sony Xperia Z Ultra', 1, 2, 4, 8990000, 'images/icon/47.jpg', 'images/cover/47.jpg', 'Nhật Bản', 20, 0, 0, 'Màn hình: Full HD, 6.4 inches<br>HĐH: Android<br>CPU: 4 nhân 2.2GHz, RAM 2GB<br>Camera: 8.0 MP<br>Dung lượng pin: 3050 mAh', 1),
(48, 'Sony Xperia M2', 1, 2, 4, 6990000, 'images/icon/48.jpg', 'images/cover/48.jpg', 'Nhật Bản', 20, 0, 0, 'Màn hình: qHD, 4.8 inches<br>HĐH: Android<br>CPU: 4 nhân 1.2GHz, RAM 1GB<br>Camera: 8.0 MP<br>Dung lượng pin: 2300 mAh', 1),
(49, 'Sony Xperia C', 1, 2, 4, 5990000, 'images/icon/49.jpg', 'images/cover/49.jpg', 'Nhật Bản', 20, 0, 0, 'Màn hình: qHD, 5.0 inches<br>HĐH: Android<br>CPU: 4 nhân 1.2GHz, RAM 1GB<br>Camera: 8.0 MP, 2 sim<br>Dung lượng pin: 2390 mAh', 1),
(50, 'Sony Xperia M', 1, 2, 4, 4490000, 'images/icon/50.jpg', 'images/cover/50.jpg', 'Nhật Bản', 20, 0, 0, 'Màn hình: FWVGA, 4.0 inches<br>HĐH: Android<br>CPU: 2 nhân 1GHz, RAM 1GB<br>Camera: 5.0 MP<br>Dung lượng pin: 1700 mAh', 1),
(51, 'Sony Xperia E1', 1, 2, 4, 3190000, 'images/icon/51.jpg', 'images/cover/51.jpg', 'Nhật Bản', 20, 0, 0, 'Màn hình: WVGA, 4.0 inches<br>HĐH: Android<br>CPU: 2 nhân 1.2GHz, RAM 512MB<br>Camera: 3.15 MP<br>Dung lượng pin: 1750 mAh', 1),
(52, 'Sony Xperia E', 1, 2, 4, 1990000, 'images/icon/52.jpg', 'images/cover/52.jpg', 'Nhật Bản', 20, 0, 0, 'Màn hình: HVGA, 3.5 inches<br>HĐH: Android<br>CPU: 1 nhân 1GHz, RAM 512MB<br>Camera: 3.2 MP<br>Dung lượng pin: 1530 mAh', 1),
(53, 'HTC One M8', 1, 2, 5, 16790000, 'images/icon/53.jpg', 'images/cover/53.jpg', 'Đài Loan', 20, 0, 0, 'Màn hình: Full HD, 5.0 inches<br>HĐH: Android<br>CPU: 4 nhân 2.5GHz, RAM 2GB<br>Camera: 4.0 UP<br>Dung lượng pin: 2600 mAh', 2),
(54, 'HTC One 16GB', 1, 2, 5, 11900000, 'images/icon/54.jpg', 'images/cover/54.jpg', 'Đài Loan', 20, 0, 0, 'Màn hình: Full HD, 4.7 inches<br>HĐH: Android<br>CPU: 4 nhân 1.7GHz, RAM 2GB<br>Camera: 4.0 UP<br>Dung lượng pin: 2300 mAh', 1),
(55, 'HTC One Mini', 1, 2, 5, 7890000, 'images/icon/55.jpg', 'images/cover/55.jpg', 'Đài Loan', 20, 0, 0, 'Màn hình: HD, 4.3 inches<br>HĐH: Android<br>CPU: 2 nhân 1.4GHz, RAM 1GB<br>Camera: 4.0 UP<br>Dung lượng pin: 1800 mAh', 1),
(56, 'HTC Desire 816', 1, 2, 5, 8490000, 'images/icon/56.jpg', 'images/cover/56.jpg', 'Đài Loan', 20, 0, 0, 'Màn hình: HD, 5.5 inches<br>HĐH: Android<br>CPU: Quad-core 1.6GHz<br>Camera: 13 MP<br>Dung lượng pin: 2600 mAh', 1),
(57, 'HTC Desire 700', 1, 2, 5, 6990000, 'images/icon/57.jpg', 'images/cover/57.jpg', 'Đài Loan', 20, 0, 0, 'Màn hình: qHD, 5.0 inches<br>HĐH: Android<br>CPU: 4 nhân 1.2GHz, RAM 1GB<br>Camera: 8.0 MP, 2 sim<br>Dung lượng pin: 2100 mAh', 1),
(58, 'HTC Desire 610', 1, 2, 5, 6990000, 'images/icon/58.jpg', 'images/cover/58.jpg', 'Đài Loan', 20, 0, 0, 'Màn hình: qHD, 4.7 inches<br>HĐH: Android<br>CPU: Quad-core 1.2GHz, RAM 1GB<br>Camera: 8.0 MP<br>Dung lượng pin: 2040 mAh', 1),
(59, 'HTC Desire 300', 1, 2, 5, 4590000, 'images/icon/59.jpg', 'images/cover/59.jpg', 'Đài Loan', 20, 0, 0, 'Màn hình: WVGA, 4.3 inches<br>HĐH: Android<br>CPU: 2 nhân 1GHz, RAM 512MB<br>Camera: 5.0 MP<br>Dung lượng pin: 1650 mAh', 1),
(60, 'HTC Desire 501 Dual Sim', 1, 2, 5, 4490000, 'images/icon/60.jpg', 'images/cover/60.jpg', 'Đài Loan', 20, 0, 0, 'Màn hình: WVGA, 4.3 inches<br>HĐH: Android<br>CPU: 2 nhân 1.15GHz, RAM 1GB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 2100 mAh', 1),
(61, 'HTC Desire 310', 1, 2, 5, 3890000, 'images/icon/61.jpg', 'images/cover/61.jpg', 'Đài Loan', 20, 0, 0, 'Màn hình: FWVGA, 4.5 inches<br>HĐH: Android<br>CPU: 4 nhân 1.3GHz, RAM 512MB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 2000 mAh', 1),
(62, 'HTC Desire 210 Dual Sim', 1, 2, 5, 2590000, 'images/icon/62.jpg', 'images/cover/62.jpg', 'Đài Loan', 20, 0, 0, 'Màn hình: WVGA, 4.0 inches<br>HĐH: Android<br>CPU: 2 nhân 1GHz, RAM 512MB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 1300 mAh', 1),
(63, 'LG G Pro 2', 1, 2, 6, 13990000, 'images/icon/63.jpg', 'images/cover/63.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: Full HD, 5.9 inches<br>HĐH: Android<br>CPU: 4 nhân 2.26GHz, RAM 3GB<br>Camera: 13 MP<br>Dung lượng pin: 3200 mAh', 2),
(64, 'LG G2 16GB', 1, 2, 6, 11490000, 'images/icon/64.jpg', 'images/cover/64.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: Full HD, 5.2 inches<br>HĐH: Android<br>CPU: 4 nhân 2.26GHz, RAM 2GB<br>Camera: 13 MP<br>Dung lượng pin: 3000 mAh', 1),
(65, 'LG G2 Mini', 1, 2, 6, 7390000, 'images/icon/65.jpg', 'images/cover/65.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: qHD, 4.7 inches<br>HĐH: Android<br>CPU: 4 nhân 1.2GHz, RAM 1GB<br>Camera: 8.0 MP, 2 sim<br>Dung lượng pin: 2440 mAh', 1),
(66, 'LG G Pro Lite Dual', 1, 2, 6, 6490000, 'images/icon/66.jpg', 'images/cover/66.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: qHD, 5.5 inches<br>HĐH: Android<br>CPU: 2 nhân 1GHz, RAM 1GB<br>Camera: 8.0 MP, 2 sim<br>Dung lượng pin: 3140 mAh', 1),
(67, 'LG L90 Dual D410', 1, 2, 6, 6190000, 'images/icon/67.jpg', 'images/cover/67.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: qHD, 4.7 inches<br>HĐH: Android<br>CPU: 4 nhân 1.2GHz, RAM 1GB<br>Camera: 8.0 MP, 2 sim<br>Dung lượng pin: 2540 mAh', 1),
(68, 'LG G Pro Lite', 1, 2, 6, 5990000, 'images/icon/68.jpg', 'images/cover/68.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: qHD, 5.5 inches<br>HĐH: Android<br>CPU: 2 nhân 1GHz, RAM 1GB<br>Camera: 8.0 MP<br>Dung lượng pin: 3140 mAh', 1),
(69, 'LG L70 Dual', 1, 2, 6, 4490000, 'images/icon/69.jpg', 'images/cover/69.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: WVGA, 4.5 inches<br>HĐH: Android<br>CPU: 2 nhân 1.2GHz, RAM 1GB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 2100 mAh', 1),
(70, 'LG L80', 1, 2, 6, 4490000, 'images/icon/70.jpg', 'images/cover/70.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: WVGA, 5.0 inches<br>HĐH: Android<br>CPU: 2 nhân 1.2GHz, RAM 1GB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 2540 mAh', 1),
(71, 'LG Optimus L7', 1, 2, 6, 2990000, 'images/icon/71.jpg', 'images/cover/71.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: HVGA, 4.3 inches<br>HĐH: Android<br>CPU: 1 nhân 1GHz, RAM 512MB<br>Camera: 5.0 MP<br>Dung lượng pin: 1700 mAh', 1),
(72, 'LG Optimus L5 Dual', 1, 2, 6, 2490000, 'images/icon/72.jpg', 'images/cover/72.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: HVGA, 4.0 inches<br>HĐH: Android<br>CPU: 800MHz, RAM 512MB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 1540 mAh', 1),
(73, 'LG Optimus L5', 1, 2, 6, 2390000, 'images/icon/73.jpg', 'images/cover/73.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: HVGA, 4.0 inches<br>HĐH: Android<br>CPU: 800MHz, RAM 512M<br>Camera: 5.0 MP<br>Dung lượng pin: 1500 mAh', 1),
(74, 'LG Optimus L4 II', 1, 2, 6, 1890000, 'images/icon/74.jpg', 'images/cover/74.jpg', 'Hàn Quốc', 20, 0, 0, 'Màn hình: HVGA, 3.8 inches<br>HĐH: Android<br>CPU: 1 nhân 1GHz, RAM 512MB<br>Camera: 3.0 MP<br>Dung lượng pin: 1700 mAh', 1),
(75, 'OPPO Find 7a', 1, 2, 7, 10490000, 'images/icon/75.jpg', 'images/cover/75.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: Full HD, 5.5 inches<br>HĐH: Android<br>CPU: 4 nhân 2.3GHz, RAM 2GB<br>Camera: 13 MP<br>Dung lượng pin: 2800 mAh', 1),
(76, 'OPPO R1', 1, 2, 7, 8990000, 'images/icon/76.jpg', 'images/cover/76.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: HD, 5.0 inches<br>HĐH: Android<br>CPU: 4 nhân 1.3GHz, RAM 1GB<br>Camera: 8.0 MP, 2 sim<br>Dung lượng pin: 2410 mAh', 1),
(77, 'OPPO Find Way S', 1, 2, 7, 7990000, 'images/icon/77.jpg', 'images/cover/77.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: HD, 5.5 inches<br>HĐH: Android<br>CPU: 4 nhân 1.5GHz, RAM 1GB<br>Camera: 8.0 MP, 2 sim<br>Dung lượng pin: 3000 mAh', 1),
(78, 'OPPO Find 5 Mini', 1, 2, 7, 6490000, 'images/icon/78.jpg', 'images/cover/78.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: qHD, 4.7 inches<br>HĐH: Android<br>CPU: 4 nhân 1.3GHz, RAM 1GB<br>Camera: 8.0 MP, 2 sim<br>Dung lượng pin: 2000 mAh', 1),
(79, 'OPPO YoYo', 1, 2, 7, 5490000, 'images/icon/79.jpg', 'images/cover/79.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: qHD, 4.7 inches<br>HĐH: Android<br>CPU: 4 nhân 1.3GHz, RAM 1GB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 1900 mAh', 1),
(80, 'OPPO Find Clover', 1, 2, 7, 4990000, 'images/icon/80.jpg', 'images/cover/80.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: WVGA, 4.3 inches<br>HĐH: Android<br>CPU: 4 nhân 1.2GHz, RAM 1GB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 1700 mAh', 1),
(81, 'OPPO Neo R831', 1, 2, 7, 3690000, 'images/icon/81.jpg', 'images/cover/81.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: FWVGA, 4.5 inches<br>HĐH: Android<br>CPU: 2 nhân 1.3GHz, RAM 512MB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 1900 mAh', 1),
(82, 'OPPO Joy', 1, 2, 7, 2990000, 'images/icon/82.jpg', 'images/cover/82.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: WVGA, 4.0 inches<br>HĐH: Android<br>CPU: 2 nhân 1.3GHz, RAM 512MB<br>Camera: 3.0 MP, 2 sim<br>Dung lượng pin: 1700 mAh', 1),
(83, 'OPPO Find Muse', 1, 2, 7, 2500000, 'images/icon/83.jpg', 'images/cover/83.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: WVGA, 4.0 inches<br>HĐH: Android<br>CPU: 2 nhân 1.2GHz, RAM 512MB<br>Camera: 3.0 MP, 2 sim<br>Dung lượng pin: 1700 mAh', 1),
(84, 'Gionee Elife E7 Mini', 1, 2, 8, 5700000, 'images/icon/84.jpg', 'images/cover/84.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: HD, 4.7 inches<br>HĐH: Android<br>CPU: 8 nhân 1.7GHz, RAM 1GB<br>Camera: 13 MP, 2 sim<br>Dung lượng pin: 2200 mAh', 1),
(85, 'Gionee Pioneer P4', 1, 2, 8, 2700000, 'images/icon/85.jpg', 'images/cover/85.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: FWVGA, 4.5 inches<br>HĐH: Android<br>CPU: 4 nhân 1.3GHz, RAM 1GB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 1800 mAh', 1),
(86, 'Gionee Pioneer P2', 1, 2, 8, 1800000, 'images/icon/86.jpg', 'images/cover/87.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: WVGA, 4.0 inches<br>HĐH: Android<br>CPU: 2 nhân 1.3GHz, RAM 512MB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 1700 mAh', 1),
(87, 'Gionee L800', 2, 4, 8, 790000, 'images/icon/87.jpg', 'images/cover/88.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: QVGA, 2.6 inches<br>Hỗ trợ 2 sim 2 sóng<br>Danh bạ 1000 số<br>Camera: 1.3 MP<br>Dung lượng pin: 3000 mAh', 1),
(88, 'Gionee S30', 2, 4, 8, 590000, 'images/icon/88.jpg', 'images/cover/89.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: WQVGA, 2.6 inches<br>Hỗ trợ 2 sim 2 sóng<br>Danh bạ 500 số<br>Camera: 1.3 MP<br>Dung lượng pin: 800 mAh', 1),
(89, 'Lenovo Vibe Z K910L', 1, 2, 9, 8590000, 'images/icon/89.jpg', 'images/cover/89.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: Full HD, 5.5 inches<br>HĐH: Android<br>CPU: 4 nhân 2.2GHz, RAM 2GB<br>Camera: 13 MP<br>Dung lượng pin: 3000 mAh', 1),
(90, 'Lenovo S960', 1, 2, 9, 7590000, 'images/icon/90.jpg', 'images/cover/90.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: Full HD, 5.0 inches<br>HĐH: Android<br>CPU: 4 nhân 1.5GHz, RAM 2GB<br>Camera: 13 MP<br>Dung lượng pin: 2000 mAh', 1),
(91, 'Lenovo S860', 1, 2, 9, 7490000, 'images/icon/91.jpg', 'images/cover/91.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: HD, 5.3 inches<br>HĐH: Android<br>CPU: 4 nhân 1.3GHz, RAM 2GB<br>Camera: 8.0 MP, 2 sim<br>Dung lượng pin: 4000 mAh', 1),
(92, 'Lenovo P780 8GB', 1, 2, 9, 5890000, 'images/icon/92.jpg', 'images/cover/92.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: HD, 5.0 inches<br>HĐH: Android<br>CPU: 4 nhân 1.2GHz, RAM 1GB<br>Camera: 8.0 MP, 2 sim<br>Dung lượng pin: 4000 mAh', 1),
(93, 'Lenovo S930', 1, 2, 9, 5290000, 'images/icon/93.jpg', 'images/cover/93.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: HD, 6.0 inches<br>HĐH: Android<br>CPU: 4 nhân 1.3GHz, RAM 1GB<br>Camera: 8.0 MP, 2 sim<br>Dung lượng pin: 3000 mAh', 1),
(94, 'Lenovo S660', 1, 2, 9, 4790000, 'images/icon/94.jpg', 'images/cover/94.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: qHD, 4.7 inches<br>HĐH: Android<br>CPU: 4 nhân 1.3GHz, RAM 1GB<br>Camera: 8.0 MP, 2 sim<br>Dung lượng pin: 3000 mAh', 1),
(95, 'Lenovo A859', 1, 2, 9, 4290000, 'images/icon/95.jpg', 'images/cover/95.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: HD, 5.0 inches<br>HĐH: Android<br>CPU: 4 nhân 1.3GHz, RAM 1GB<br>Camera: 8.0 MP, 2 sim<br>Dung lượng pin: 2250 mAh', 1),
(96, 'Lenovo S650', 1, 2, 9, 3990000, 'images/icon/96.jpg', 'images/cover/96.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: qHD, 4.7 inches<br>HĐH: Android<br>CPU: 4 nhân 1.3GHz, RAM 1GB<br>Camera: 8.0 MP, 2 sim<br>Dung lượng pin: 2000 mAh', 1),
(97, 'Lenovo A850', 1, 2, 9, 3790000, 'images/icon/97.jpg', 'images/cover/97.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: qHD, 5.5 inches<br>HĐH: Android<br>CPU: 4 nhân 1.3GHz, RAM 1GB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 2250 mAh', 1),
(98, 'Lenovo A680', 1, 2, 9, 3190000, 'images/icon/98.jpg', 'images/cover/98.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: FWVGA, 5.0 inches<br>HĐH: Android<br>CPU: 4 nhân 1.3GHz, RAM 1GB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 2000 mAh', 1),
(99, 'Lenovo A526', 1, 2, 9, 2890000, 'images/icon/99.jpg', 'images/cover/99.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: FWVGA, 4.5 inches<br>HĐH: Android<br>CPU: 4 nhân 1.3GHz, RAM 1GB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 2000 mAh', 1),
(100, 'Lenovo A516', 1, 2, 9, 2490000, 'images/icon/100.jpg', 'images/cover/100.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: FWVGA, 4.5 inches<br>HĐH: Android<br>CPU: 2 nhân 1.3GHz, RAM 512MB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 2000 mAh', 1),
(101, 'Lenovo A369i', 1, 2, 9, 1890000, 'images/icon/101.jpg', 'images/cover/101.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: WVGA, 4.0 inches<br>HĐH: Android<br>CPU: 2 nhân 1.3GHz, RAM 512MB<br>Camera: 2.0 MP, 2 sim<br>Dung lượng pin: 1500 mAh', 1),
(102, 'Lenovo A269i', 1, 2, 9, 1390000, 'images/icon/102.jpg', 'images/cover/102.jpg', 'Trung Quốc', 20, 0, 0, 'Màn hình: WVGA, 3.5 inches<br>HĐH: Android<br>CPU: 2 nhân 1GHz, RAM 256MB<br>Camera: 2.0 MP, 2 sim<br>Dung lượng pin: 1300 mAh', 1),
(103, 'Mobell S98', 1, 2, 10, 2990000, 'images/icon/103.jpg', 'images/cover/103.jpg', 'Singapore', 20, 0, 0, 'Màn hình: FWVGA, 5.3 inches<br>HĐH: Android<br>CPU: Quad-core 1.2GHz<br>Camera: 8.0 MP<br>Dung lượng pin: 2100 mAh', 1),
(104, 'Mobell Nova F', 1, 2, 10, 2590000, 'images/icon/104.jpg', 'images/cover/104.jpg', 'Singapore', 20, 0, 0, 'Màn hình: FWVGA, 5.0 inches<br>HĐH: Android<br>CPU: 2 nhân 1.2GHz, RAM 512MB<br>Camera: 8.0 MP, 2 sim<br>Dung lượng pin: 2000 mAh', 1),
(105, 'Mobell Nova F Mini', 1, 2, 10, 2190000, 'images/icon/105.jpg', 'images/cover/105.jpg', 'Singapore', 20, 0, 0, 'Màn hình: FWVGA, 4.5 inches<br>HĐH: Android<br>CPU: 2 nhân 1.2GHz, RAM 512MB<br>Camera: 8.0 MP, 2 sim<br>Dung lượng pin: 1500 mAh', 1),
(106, 'Mobell Nova A', 1, 2, 10, 1390000, 'images/icon/106.jpg', 'images/cover/106.jpg', 'Singapore', 20, 0, 0, 'Màn hình: HVGA, 3.5 inches<br>HĐH: Android<br>CPU: 2 nhân 1GHz, RAM 512MB<br>Camera: 3.0 MP, 2 sim<br>Dung lượng pin: 1200 mAh', 1),
(107, 'Mobell Nova E', 1, 2, 10, 990000, 'images/icon/107.jpg', 'images/cover/107.jpg', 'Singapore', 20, 0, 0, 'Màn hình: WVGA, 4.0 inches<br>HĐH: Android<br>CPU: 2 nhân 1.2GHz, RAM 512MB<br>Camera: 3.0 MP, 2 sim<br>Dung lượng pin: 1500 mAh', 1),
(108, 'Mobiistar Touch Lai 504Q', 1, 2, 11, 2990000, 'images/icon/108.jpg', 'images/cover/108.jpg', 'Việt Nam', 20, 0, 0, 'Màn hình: FWVGA, 5.0 inches<br>HĐH: Android<br>CPU: 4 nhân 1.2GHz, RAM 1GB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 2000 mAh', 1),
(109, 'Mobiistar Touch Lai 512', 1, 2, 11, 2490000, 'images/icon/109.jpg', 'images/cover/109.jpg', 'Việt Nam', 20, 0, 0, 'Màn hình: FWVGA, 5.0 inches<br>HĐH: Android<br>CPU: 2 nhân 1.3GHz, RAM 512MB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 2000 mAh', 1),
(110, 'Mobiistar Touch Bean 452T', 1, 2, 11, 1790000, 'images/icon/110.jpg', 'images/cover/110.jpg', 'Việt Nam', 20, 0, 0, 'Màn hình: FWVGA, 4.5 inches<br>HĐH: Android<br>CPU: 2 nhân 1.2GHz, RAM 512MB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 1600 mAh', 1),
(111, 'Mobiistar Touch Bean 402S', 1, 2, 11, 1890000, 'images/icon/111.jpg', 'images/cover/111.jpg', 'Việt Nam', 20, 0, 0, 'Màn hình: WVGA, 4.0 inches<br>HĐH: Android<br>CPU: 2 nhân 1.3GHz, RAM 512MB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 1400 mAh', 1),
(112, 'Mobiistar Touch Bean 402C', 1, 2, 11, 1650000, 'images/icon/112.jpg', 'images/cover/112.jpg', 'Việt Nam', 20, 0, 0, 'Màn hình: WVGA, 4.0 inches<br>HĐH: Android<br>CPU: 2 nhân 1GHz, RAM 512MB<br>Camera: 3.0 MP, 2 sim<br>Dung lượng pin: 1200 mAh', 1),
(113, 'Mobiistar Touch Bean 402M', 1, 2, 11, 1490000, 'images/icon/113.jpg', 'images/cover/113.jpg', 'Việt Nam', 20, 0, 0, 'Màn hình: HVGA, 4.0 inches<br>HĐH: Android<br>CPU: 2 nhân 1GHz, RAM 512MB<br>Camera: 2.0 MP, 2 sim<br>Dung lượng pin: 1200 mAh', 1),
(114, 'Mobiistar B620', 2, 4, 11, 550000, 'images/icon/114.jpg', 'images/cover/114.jpg', 'Việt Nam', 20, 0, 0, 'Màn hình: QVGA, 2.6 inches<br>Hỗ trợ 2 sim 2 sóng<br>Danh bạ 500 số<br>Camera: 1.3 MP<br>Dung lượng pin: 1400 mAh', 1),
(115, 'Mobiistar B232', 2, 4, 11, 440000, 'images/icon/115.jpg', 'images/cover/115.jpg', 'Việt Nam', 20, 0, 0, 'Màn hình: QVGA, 2.4 inches<br>Hỗ trợ 2 sim 2 sóng<br>Danh bạ 200 số<br>Camera: VGA 0.3 MP<br>Dung lượng pin: 1900 mAh', 1),
(116, 'Mobiistar B207', 2, 4, 11, 350000, 'images/icon/116.jpg', 'images/cover/116.jpg', 'Việt Nam', 20, 0, 0, 'Màn hình: QVGA, 1.8 inches<br>Hỗ trợ 2 sim 2 sóng<br>Danh bạ 200 số<br>Camera: VGA 0.3 MP<br>Dung lượng pin: 1000 mAh', 1),
(117, 'Q-Smart Dream SI', 1, 2, 12, 4590000, 'images/icon/117.jpg', 'images/cover/117.jpg', 'Việt Nam', 20, 0, 0, 'Màn hình: Full HD, 5.0 inches<br>HĐH: Android<br>CPU: 4 nhân 1.5GHz, RAM 1GB<br>Camera: 13 MP, 2 sim<br>Dung lượng pin: 2300 mAh', 1),
(118, 'Q-Smart Dream EIII', 1, 2, 12, 3690000, 'images/icon/118.jpg', 'images/cover/118.jpg', 'Việt Nam', 20, 0, 0, 'Màn hình: HD, 4.7 inches<br>HĐH: Android<br>CPU: 4 nhân 1.2GHz, RAM 1GB<br>Camera: 8.0 MP, 2 sim<br>Dung lượng pin: 2000 mAh', 1),
(119, 'Q-Smart S19', 1, 2, 12, 1590000, 'images/icon/119.jpg', 'images/cover/119.jpg', 'Việt Nam', 20, 0, 0, 'Màn hình: WVGA, 4.0 inches<br>HĐH: Android<br>CPU: 2 nhân 1.2GHz, RAM 512MB<br>Camera: 5.0 MP, 2 sim<br>Dung lượng pin: 1400 mAh', 1),
(120, 'Q-Smart QS05', 1, 2, 12, 1190000, 'images/icon/120.jpg', 'images/cover/120.jpg', 'Việt Nam', 20, 0, 0, 'Màn hình: HVGA, 3.5 inches<br>HĐH: Android<br>CPU: 2 nhân 1GHz, RAM 256MB<br>Camera: 2.0 MP, 2 sim<br>Dung lượng pin: 1400 mAh', 1),
(121, 'Q-Mobile C500', 2, 4, 12, 590000, 'images/icon/121.jpg', 'images/cover/121.jpg', 'Việt Nam', 20, 0, 0, 'Màn hình: QVGA, 2.6 inches<br>Hỗ trợ 2 sim 2 sóng<br>Danh bạ 300 số<br>Camera: VGA 0.3 MP<br>Dung lượng pin: 950 mAh', 1),
(122, 'Q-Mobile LIM 10i', 2, 4, 12, 490000, 'images/icon/122.jpg', 'images/cover/122.jpg', 'Việt Nam', 20, 0, 0, 'Màn hình: QVGA, 2.4 inches<br>Hỗ trợ 2 sim 2 sóng<br>Bộ nhớ trong 32MB<br>Camera: VGA 0.3 MP<br>Dung lượng pin: 1150 mAh', 1),
(123, 'Q-Mobile LIM 03', 2, 4, 12, 490000, 'images/icon/123.jpg', 'images/cover/123.jpg', 'Việt Nam', 20, 0, 0, 'Màn hình: QQVGA, 1.77 inches<br>Hỗ trợ 2 sim 2 sóng<br>Danh bạ 300 số<br>Camera: VGA 0.3 MP<br>Dung lượng pin: 1000 mAh', 1),
(124, 'Q-Mobile Q150', 2, 4, 12, 440000, 'images/icon/124.jpg', 'images/cover/124.jpg', 'Việt Nam', 20, 0, 0, 'Màn hình: QVGA, 2.4 inches<br>Hỗ trợ 2 sim 2 sóng<br>Danh bạ 300 số<br>Camera: VGA<br>Dung lượng pin: 1500 mAh', 1),
(125, 'Q-Mobile Q114', 2, 4, 12, 340000, 'images/icon/125.jpg', 'images/cover/125.jpg', 'Việt Nam', 20, 0, 0, 'Màn hình: QQVGA, 1.8 inches<br>Hỗ trợ 2 sim 2 sóng<br>Danh bạ 300 số<br>Camera: VGA 0.3 MP<br>Dung lượng pin: 800 mAh', 1),
(126, 'Q-Mobile Q113', 2, 4, 12, 300000, 'images/icon/126.jpg', 'images/cover/126.jpg', 'Việt Nam', 20, 0, 0, 'Màn hình: QQVGA, 1.8 inches<br>Hỗ trợ 2 sim 2 sóng<br>Danh bạ 300 số<br>Camera: VGA 0.3 MP<br>Dung lượng pin: 800 mAh', 1),
(127, 'Q-Mobile Q119', 2, 4, 12, 290000, 'images/icon/127.jpg', 'images/cover/127.jpg', 'Việt Nam', 20, 0, 0, 'Màn hình: QQVGA, 1.77 inches<br>Hỗ trợ 2 sim 2 sóng<br>Danh bạ 300 số<br>Camera: VGA 0.3 MP<br>Dung lượng pin: 800 mAh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE IF NOT EXISTS `dondathang` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `mauser` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tongtien` double NOT NULL,
  `ngaydat` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tinhtrang` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`ma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hedieuhanh`
--

CREATE TABLE IF NOT EXISTS `hedieuhanh` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hedieuhanh`
--

INSERT INTO `hedieuhanh` (`ma`, `ten`) VALUES
(1, 'iOS'),
(2, 'Android'),
(3, 'Windows Phone'),
(4, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `ma` int(11) NOT NULL,
  `mauser` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ngaynhan` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tongtien` double NOT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaidienthoai`
--

CREATE TABLE IF NOT EXISTS `loaidienthoai` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `loaidienthoai`
--

INSERT INTO `loaidienthoai` (`ma`, `ten`) VALUES
(1, 'Cảm ứng'),
(2, 'Phím bấm'),
(3, 'Nắp gập');

-- --------------------------------------------------------

--
-- Table structure for table `nhasanxuat`
--

CREATE TABLE IF NOT EXISTS `nhasanxuat` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`ma`, `ten`, `logo`) VALUES
(1, 'Apple', 'images/nsx/1.jpg'),
(2, 'Samsung', 'images/nsx/2.jpg'),
(3, 'Nokia', 'images/nsx/3.jpg'),
(4, 'Sony', 'images/nsx/4.jpg'),
(5, 'HTC', 'images/nsx/5.jpg'),
(6, 'LG', 'images/nsx/6.jpg'),
(7, 'OPPO', 'images/nsx/7.jpg'),
(8, 'Gionee', 'images/nsx/8.jpg'),
(9, 'Lenovo', 'images/nsx/9.jpg'),
(10, 'Mobell', 'images/nsx/10.jpg'),
(11, 'Mobiistar', 'images/nsx/11.jpg'),
(12, 'Q-Mobile', 'images/nsx/12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE IF NOT EXISTS `slideshow` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `madt` int(11) NOT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`ma`, `link`, `madt`) VALUES
(1, 'images/slideshow/1.jpg', 2),
(2, 'images/slideshow/2.jpg', 6),
(3, 'images/slideshow/3.jpg', 21),
(4, 'images/slideshow/4.jpg', 43),
(5, 'images/slideshow/5.jpg', 28),
(6, 'images/slideshow/6.jpg', 53),
(7, 'images/slideshow/7.jpg', 75);

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrang`
--

CREATE TABLE IF NOT EXISTS `tinhtrang` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tinhtrang`
--

INSERT INTO `tinhtrang` (`ma`, `ten`) VALUES
(1, 'Bình thường'),
(2, 'Hot'),
(3, 'Bán chạy');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `loai` tinyint(1) NOT NULL DEFAULT '1',
  `hoten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `noio` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `loai`, `hoten`, `ngaysinh`, `noio`) VALUES
('admin', '202cb962ac59075b964b07152d234b70', 0, 'Phạm Chung Tú', '31-08-1994', 'TPHCM'),
('user', '202cb962ac59075b964b07152d234b70', 1, 'xyz', '10-01-1994', 'TPHCM'),
('user2', '202cb962ac59075b964b07152d234b70', 1, 'abc', '2-2-1950', 'TPHCM');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
