-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2017 at 09:12 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `handmade`
--
CREATE DATABASE IF NOT EXISTS `handmade` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `handmade`;

-- --------------------------------------------------------

--
-- Table structure for table `bai_viet`
--

CREATE TABLE IF NOT EXISTS `bai_viet` (
  `stt_bai_dang` int(100) NOT NULL AUTO_INCREMENT,
  `MKH` int(50) DEFAULT NULL,
  `tieu_de` text,
  `noi_dung` varchar(4000) DEFAULT NULL,
  `ngay_dang` datetime DEFAULT NULL,
  `luot_xem` int(11) DEFAULT NULL,
  PRIMARY KEY (`stt_bai_dang`),
  UNIQUE KEY `MKH` (`MKH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_don_dat_hang`
--

CREATE TABLE IF NOT EXISTS `chi_tiet_don_dat_hang` (
  `ma_don_hang` int(100) NOT NULL AUTO_INCREMENT,
  `ma_san_pham` int(200) NOT NULL DEFAULT '0',
  `so_luong` int(11) DEFAULT NULL,
  `don_gia` double DEFAULT NULL,
  `thanh_tien` double DEFAULT NULL,
  PRIMARY KEY (`ma_don_hang`,`ma_san_pham`),
  UNIQUE KEY `MS` (`ma_san_pham`),
  UNIQUE KEY `MS_2` (`ma_san_pham`),
  KEY `masp` (`ma_san_pham`),
  KEY `MS_3` (`ma_san_pham`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `chi_tiet_don_dat_hang`
--

INSERT INTO `chi_tiet_don_dat_hang` (`ma_don_hang`, `ma_san_pham`, `so_luong`, `don_gia`, `thanh_tien`) VALUES
(2, 3, 4, 50000, NULL),
(2, 4, 5, 80000, NULL),
(2, 9, 1, 150000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `don_dat_hang`
--

CREATE TABLE IF NOT EXISTS `don_dat_hang` (
  `ma_don_hang` int(100) NOT NULL AUTO_INCREMENT,
  `MKH` int(11) DEFAULT NULL,
  `ngay_dat_hang` datetime DEFAULT NULL,
  `tri_gia` float DEFAULT NULL,
  `ho_nguoi_nhan` varchar(50) DEFAULT NULL,
  `ten_nguoi_nhan` varchar(50) DEFAULT NULL,
  `dia_chi_nhan_hang` varchar(100) DEFAULT NULL,
  `email_nguoi_nhan` varchar(100) DEFAULT NULL,
  `dien_thoai` int(11) DEFAULT NULL,
  `ngay_giao_hang` datetime DEFAULT NULL,
  `da_giao_hang` tinyint(1) DEFAULT NULL,
  `ma_hinh_thuc_thanh_toan` int(11) NOT NULL,
  PRIMARY KEY (`ma_don_hang`),
  UNIQUE KEY `ma_hinh_thuc_thanh_toan` (`ma_hinh_thuc_thanh_toan`),
  UNIQUE KEY `MKH` (`MKH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `don_dat_hang`
--

INSERT INTO `don_dat_hang` (`ma_don_hang`, `MKH`, `ngay_dat_hang`, `tri_gia`, `ho_nguoi_nhan`, `ten_nguoi_nhan`, `dia_chi_nhan_hang`, `email_nguoi_nhan`, `dien_thoai`, `ngay_giao_hang`, `da_giao_hang`, `ma_hinh_thuc_thanh_toan`) VALUES
(2, 3, '2017-09-10 00:00:00', NULL, 'Lê Ngọc Bảo', 'Anh', 'Hoàng Quốc Việt', 'anh@gmail.com', 965417245, '2017-12-10 00:00:00', 0, 1),
(4, 1, '2017-10-20 00:00:00', NULL, 'Lê Thu Bạch', 'Yến', 'Quận 7, TP.HCM', '', 933568689, '2017-10-23 00:00:00', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `hinh_thuc_thanh_toan`
--

CREATE TABLE IF NOT EXISTS `hinh_thuc_thanh_toan` (
  `ma_hinh_thuc_thanh_toan` int(11) NOT NULL AUTO_INCREMENT,
  `ma_don_hang` int(100) DEFAULT NULL,
  `ten_hinh_thuc_thanh_toan` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`ma_hinh_thuc_thanh_toan`),
  UNIQUE KEY `ma_don_hang` (`ma_don_hang`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hinh_thuc_thanh_toan`
--

INSERT INTO `hinh_thuc_thanh_toan` (`ma_hinh_thuc_thanh_toan`, `ma_don_hang`, `ten_hinh_thuc_thanh_toan`) VALUES
(1, NULL, 'Chuyển khoản'),
(2, NULL, 'Thanh toán trực tiếp'),
(3, NULL, 'Giao hàng thì nhận tiền');

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE IF NOT EXISTS `khach_hang` (
  `MKH` int(50) NOT NULL AUTO_INCREMENT,
  `ho_khach_hang` varchar(50) DEFAULT NULL,
  `ten_khach_hang` varchar(50) DEFAULT NULL,
  `ten_dang_nhap` varchar(30) DEFAULT NULL,
  `ngay_sinh` datetime DEFAULT NULL,
  `gioi_tinh` tinyint(1) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mat_khau` varchar(30) DEFAULT NULL,
  `dien_thoai` varchar(11) DEFAULT NULL,
  `dia_chi` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`MKH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`MKH`, `ho_khach_hang`, `ten_khach_hang`, `ten_dang_nhap`, `ngay_sinh`, `gioi_tinh`, `email`, `mat_khau`, `dien_thoai`, `dia_chi`) VALUES
(1, 'Lê Thu Bạch ', 'Yến', 'yentbl', NULL, NULL, 'ggg@gmail.com', '123', '0933568689', 'TP.HCM'),
(2, 'Trần Anh', 'Tuấn', 'tuantbl', NULL, NULL, 'trananhtuan@gmail.com', '123', '098356864', 'Vĩnh Phúc'),
(3, 'Lê Ngọc Bảo', 'Anh', 'anhle', NULL, NULL, 'anh@gmail.com', '123', '0965417245', 'Hà Nội'),
(4, 'Kiều Trần Thúy', 'Vy', 'vytbl', '1996-04-01 00:00:00', NULL, NULL, '123', '01646237452', 'Cần Thơ'),
(5, 'Trương Ngọc Huyền', 'Trang', 'tranghuyen', NULL, NULL, NULL, '123', NULL, 'Mê Linh'),
(8, 'Hà Minh', 'đức', 'ductbl', NULL, NULL, NULL, NULL, NULL, 'Hà Nội'),
(9, 'Vũ Thị Bích', 'Ngọc', 'ngocabc', '1998-09-24 00:00:00', NULL, 'bich@GMAIL.COM', '123', '01237496472', 'Hà Tây'),
(10, 'Trần Kiều', 'An', 'anhp', NULL, NULL, NULL, '123', '0974598743', NULL),
(11, 'Hồ Vĩnh', 'Ngọc', 'ngocho', NULL, NULL, NULL, '123', '01657458953', NULL),
(12, 'đàm Diệu ', 'Linh', 'linhdam', NULL, NULL, 'linh@gmIL.COM', '123', '098765352', 'Bắc Ninh'),
(13, 'đinh mạnh', 'Linh', 'linh79', NULL, NULL, NULL, NULL, '01698745632', 'Hà Nội'),
(14, 'Ngô Thị Duy ', 'Ly', 'lymap', NULL, NULL, NULL, '123', '01674567891', 'Hà Nội'),
(15, 'Nguyễn Thị Thanh', 'Vân', 'ngulam', '1998-04-29 00:00:00', NULL, NULL, '123', '01233478526', 'Vĩnh Phúc'),
(16, 'Nguyễn Thị Thanh', 'Hồng', 'hongbaby', NULL, NULL, 'hongnguyen@gmail.com', '123', NULL, 'Vĩnh Phúc'),
(17, 'Nguyễn Thị ', 'Văn', 'lematto', NULL, NULL, NULL, NULL, '0967815513', 'Hà Tây'),
(18, 'Nguyễn Thị ', 'Yến', 'yenls', NULL, NULL, NULL, NULL, NULL, 'Lạng Sơn'),
(19, 'Phạm Thanh', 'Loan', 'loannd', NULL, NULL, NULL, NULL, NULL, 'Nam định'),
(20, 'Dương Thanh', 'Minh', 'minhduong', NULL, NULL, NULL, '123', NULL, 'Hà Nội'),
(21, 'Kiều Thị Như ', 'Quỳnh', 'quynhkieu', '1998-03-07 00:00:00', NULL, 'kieuquynh198@gmail.com', '123', '0965398745', 'Hà Nội'),
(22, 'Phạm Thị Hồng', 'Thu', 'thu', NULL, NULL, NULL, '123', NULL, 'TP.HCM'),
(23, 'Kiều Duy', 'Hiến', NULL, NULL, NULL, 'hienkieu@gmail.com', NULL, '0164938744', 'Mê Linh Hà Nội'),
(24, 'pham', NULL, 'loan pham', NULL, NULL, 'loan@gmail.com', '123', '123456789', 'Ha Noi'),
(25, 'g', NULL, 'fgg', NULL, NULL, 'fgg', '1', '123', '23424');

-- --------------------------------------------------------

--
-- Table structure for table `phan_loai`
--

CREATE TABLE IF NOT EXISTS `phan_loai` (
  `MCL` int(20) NOT NULL AUTO_INCREMENT,
  `ten_ma_loai_san_pham` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`MCL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `phan_loai`
--

INSERT INTO `phan_loai` (`MCL`, `ten_ma_loai_san_pham`) VALUES
(1, 'Vòng tay'),
(2, 'Vòng cổ'),
(3, 'Hoa Handmade'),
(4, 'Móc treo chìa khóa'),
(5, 'Bao điện thoại'),
(6, 'Ví'),
(7, 'Túi xách'),
(8, 'Giày, dép'),
(9, 'áo'),
(10, 'Mỹ phẩm'),
(11, 'Quà lưu niệm'),
(12, 'Túi thơm handmade'),
(13, 'Túi đựng bút'),
(14, 'Khuyên tai'),
(15, 'Nhẫn'),
(16, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `quantri website`
--

CREATE TABLE IF NOT EXISTS `quantri website` (
  `id` int(11) NOT NULL DEFAULT '0',
  `username` varchar(400) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE IF NOT EXISTS `san_pham` (
  `ma_san_pham` int(200) NOT NULL AUTO_INCREMENT,
  `ten_san_pham` varchar(50) DEFAULT NULL,
  `MCL` int(20) DEFAULT NULL,
  `gia_ban` double DEFAULT NULL,
  `chi_tiet_san_pham` varchar(4000) DEFAULT NULL,
  `hinh_minh_hoa` varchar(200) DEFAULT NULL,
  `hinh_1` varchar(101) NOT NULL,
  `hinh_2` varchar(102) NOT NULL,
  `noi_dung` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung1` varchar(10000) NOT NULL,
  `noi_dung_2` mediumtext NOT NULL,
  `noi_dung_3` int(11) NOT NULL,
  PRIMARY KEY (`ma_san_pham`),
  KEY `san_pham_ibfk_1` (`MCL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=146 ;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`ma_san_pham`, `ten_san_pham`, `MCL`, `gia_ban`, `chi_tiet_san_pham`, `hinh_minh_hoa`, `hinh_1`, `hinh_2`, `noi_dung`, `noi_dung1`, `noi_dung_2`, `noi_dung_3`) VALUES
(3, 'Vòng tay vương miện', 1, 5467878, NULL, '3.png', 'vong1', 'vong2', '', '', '', 0),
(4, 'Vòng tay mỏ neo', 1, 50000, NULL, '4.png', 'neo1', 'neo2', '', '', '', 0),
(5, 'Vòng tay 1', 1, 40000, NULL, '5.png', 'vong1', 'vong2', '', '', '', 0),
(6, 'Vòng tay 2', 1, 40000, NULL, '6.png', 'vong1', 'vong2', '', '', '', 0),
(7, 'Vòng tay 3', 1, 40000, NULL, '7.png', 'vong1', 'vong2', '', '', '', 0),
(8, 'Vòng tay 4', 1, 45000, NULL, '8.png', 'vong1', 'vong2', '', '', '', 0),
(9, 'Vòng tay 5', 1, 55000, NULL, '9.png', 'vong1', 'vong2', '', '', '', 0),
(10, 'Vòng cổ 1', 2, 50000, NULL, '10.png', 'vong1', 'vong2', '', '', '', 0),
(11, 'Vòng cổ 2', 2, 40000, NULL, '11.png', 'vong1', 'vong2', '', '', '', 0),
(12, 'Vòng cổ 3', 2, 450, NULL, '12.png', 'vong1', 'vong2', '', '', '', 0),
(13, 'Vòng cổ 4', 2, 45000, NULL, '13.png', 'vong1', 'vong2', '', '', '', 0),
(14, 'Vòng cổ 5', 2, 50000, NULL, '14.png', 'vong1', 'vong2', '', '', '', 0),
(15, 'Vòng cổ 6', 2, 50000, NULL, '16.png', 'vong1', 'vong2', '', '', '', 0),
(17, 'Hoa Tuylip handmade', 3, 120, NULL, '17.png', 'tylip1', 'tylip2', '', '', '', 0),
(18, 'Hoa mẫu đơn handmade', 3, 140000, NULL, '18.png', 'maudon1', 'maudon2', '', '', '', 0),
(19, 'Hoa hồng handmade', 3, 145000, NULL, '19.png', 'hong1', 'hong2', '', '', '', 0),
(20, 'Hoa oải hương handmade', 3, 90000, NULL, '20.png', 'oaihuong1', 'oaihuong2', '', '', '', 0),
(23, 'Hoa tiên ông handmade', 3, 140000, NULL, '23.png', 'tienong1', 'tienong2', '', '', '', 0),
(25, 'Móc khóa handmade 1', 4, 45000, NULL, '25.png', 'khoa1', 'khoa2', '', '', '', 0),
(26, 'Móc khóa handmade 2', 4, 45000, NULL, '26.png', 'khoa1', 'khoa2', '', '', '', 0),
(28, 'Móc khóa in ảnh', 4, 50000, NULL, '28.png', 'khoaanh1', 'khoaanh2', '', '', '', 0),
(29, 'Ví handmade 1', 6, 90000, NULL, '29.png', 'vi1', 'vi2', '', '', '', 0),
(30, 'Bao điện thoại handmade', 5, 85000, NULL, '30.png', 'baodt1', 'baodt2', '', '', '', 0),
(38, 'Túi thơm', 12, 45000, NULL, '36.png', 'thom1', 'thom2', '', '', '', 0),
(40, 'Giày trẻ em len móc handmade', 8, 95000, NULL, '38.png', 'giay1', 'giay2', '', '', '', 0),
(47, 'Giày thổ cẩm', 8, 175000, '', '115.png', 'thocam1', 'thocam2', '', '', '', 0),
(53, 'Giép đi trong nhà doraemon', 8, 60000, '', '87.png', '', '', '', '', '', 0),
(56, 'Túi xách handmade 2 ', 7, 15500, '', '47.png', '', '', '', '', '', 0),
(57, 'Túi đeo chéo bằng cói ', 7, 55000, '', '50.png', '', '', '', '', '', 0),
(59, 'Áo 1', 9, 175000, '', '60.png', '', '', '', '', '', 0),
(60, 'Áo 2', 9, 175000, '', '61.png', '', '', '', '', '', 0),
(61, 'Áo 3', 9, 160000, '', '62.png', '', '', '', '', '', 0),
(62, 'Áo 4', 9, 1560000, '', '63.png', '', '', '', '', '', 0),
(63, 'Đầm len 1', 9, 255000, '', '68.png', '', '', '', '', '', 0),
(64, 'Đầm len 2 ', 9, 35500, '', '69.png', '', '', '', '', '', 0),
(65, 'Đầm len 3 ', 9, 255000, '', '70.png', '', '', '', '', '', 0),
(66, 'Đầm len 4', 9, 225000, '', '71.png', '', '', '', '', '', 0),
(67, 'Áo len tay dài', 9, 175000, '', '67.png', '', '', '', '', '', 0),
(68, 'Croptop', 9, 175000, '', '66.png', '', '', '', '', '', 0),
(69, 'Áo len Bikini', 9, 275000, '', '65.png', '', '', '', '', '', 0),
(70, 'Bộ Bikini len màu vàng', 9, 275000, '', '64.png', '', '', '', '', '', 0),
(71, 'Khuyên tai lông vũ', 14, 50000, '', '53.png', '', '', '', '', '', 0),
(73, 'Khuyên tai đồng handmade 1', 14, 50000, '', '89.png', '', '', '', '', '', 0),
(74, 'Khuyên tai ồng handmade 2', 14, 50000, '', '106.png', '', '', '', '', '', 0),
(75, 'Khuyên tai ồng handmade 1', 14, 50000, '', '107.png', '', '', '', '', '', 0),
(76, 'Khuyên tai Ren', 14, 50000, '', '105.png', '', '', '', '', '', 0),
(77, 'Khuyên tai handmade 1', 14, 50000, '', '106.png', '', '', '', '', '', 0),
(78, 'Khuyên tai handmade 2', 14, 50000, '', '107.png', '', '', '', '', '', 0),
(79, 'Khuyên tai handmade 3', 14, 50000, '', '105.png', '', '', '', '', '', 0),
(80, 'Vòng cổ hoa', 2, 100000, '', '49.png', '', '', '', '', '', 0),
(81, 'Vòng cổ handmade màu', 2, 60000, '', '88.png', '', '', '', '', '', 0),
(82, 'Vòng cổ cung hoàng đạo', 2, 45000, '', '90.png', '', '', '', '', '', 0),
(83, 'Vòng cổ handmade 1', 2, 80000, '', '91.png', '', '', '', '', '', 0),
(84, 'Vòng cổ handmade 2', 2, 100000, '', '92.png', '', '', '', '', '', 0),
(85, 'Vòng cổ handmade 3', 2, 150000, '', '93.png', '', '', '', '', '', 0),
(86, 'Vòng cổ handmade 4', 2, 150000, '', '94.png', '', '', '', '', '', 0),
(87, 'Vòng cổ handmade 5', 2, 165000, '', '95.png', '', '', '', '', '', 0),
(88, 'Vòng cổ handmade 6', 2, 180000, '', '96.png', '', '', '', '', '', 0),
(89, 'Vòng tay handmade 1', 1, 60000, '', '97.png', '', '', '', '', '', 0),
(90, 'Vòng tay handmade 2', 1, 650000, '', '98.png', '', '', '', '', '', 0),
(91, 'Vòng tay handmade 3', 1, 35000, '', '99.png', '', '', '', '', '', 0),
(92, 'Vòng tay handmade 4', 1, 80000, '', '100.png', '', '', '', '', '', 0),
(93, 'Vòng tay handmade 5 ', 1, 80000, '', '101.png', '', '', '', '', '', 0),
(94, 'Vòng tay handmade 6', 1, 35000, '', '102.png', '', '', '', '', '', 0),
(95, 'Vòng tay handmade 7', 1, 50000, '', '103.png', '', '', '', '', '', 0),
(96, 'Vòng tay handmade 8', 1, 45000, '', '104.png', '', '', '', '', '', 0),
(97, 'Son handmade', 10, 0, '', '40.png', '', '', '', '', '', 0),
(98, 'Tinh dầu dừa', 10, 150000, '', '41.png', '', '', '', '', '', 0),
(99, 'Tinh dầu hoa cúc', 10, 140000, '', '42.png', '', '', '', '', '', 0),
(100, 'Tinh dầu bơ', 10, 180000, '', '43.png', '', '', '', '', '', 0),
(101, 'Tinh dầu hoa hướng dương', 10, 190000, '', '45.png', '', '', '', '', '', 0),
(102, 'Đồng hồ gỗ handmade', 16, 250000, '', '51.png', '', '', '', '', '', 0),
(103, 'Tranh gỗ', 16, 300000, '', '52.png', '', '', '', '', '', 0),
(104, 'Đèn ngủ đính cúc', 16, 350000, '', '54.png', '', '', '', '', '', 0),
(105, 'Đèn ngủ trang trí', 16, 240000, '', '56.png', '', '', '', '', '', 0),
(106, 'Chai nhựa hoa văn handmade', 16, 100000, '', '57.png', '', '', '', '', '', 0),
(107, 'Khuy cài áo vet', 16, 120000, '', '58.png', '', '', '', '', '', 0),
(108, 'Đèn bằng bìa catton', 16, 150000, '', '175.png', '', '', '', '', '', 0),
(109, 'Ống tre trang trí', 16, 200000, '', '135.png', '', '', '', '', '', 0),
(110, 'Chuông gió cừu', 11, 80000, '', '131.png', '', '', '', '', '', 0),
(111, 'Mô hình thuyền bằng tăm', 11, 160000, '', '134.png', '', '', '', '', '', 0),
(112, 'Gối thêu hình các loại', 11, 75000, '', '140', '', '', '', '', '', 0),
(113, 'Kệ để rượu bằng ống sắt', 16, 290000, '', '160.png', '', '', '', '', '', 0),
(114, 'Lơ buộc tóc', 11, 15000, '', '163.png', '', '', '', '', '', 0),
(115, 'Bông cài áo', 16, 75000, '', '164.png', '', '', '', '', '', 0),
(116, 'Đèn chùm bằng chén', 16, 250000, '', '156.png', '', '', '', '', '', 0),
(118, 'Đèn đám mây', 16, 230000, '', '157.png', '', '', '', '', '', 0),
(119, 'Balo rút', 7, 60000, '', '162.png', '', '', '', '', '', 0),
(120, 'Tranh bằng hạt cafe', 16, 350000, '', '145.png', '', '', '', '', '', 0),
(121, 'Tranh gập bằng giấy', 16, 210000, '', '147.png', '', '', '', '', '', 0),
(122, 'Thiệp chúc mừng', 11, 0, '', '48.png', '', '', '', '', '', 0),
(123, 'Origami Minion', 11, 35000, '', '119.png', '', '', '', '', '', 0),
(124, 'Origami các hình', 11, 35000, '', '139.png', '', '', '', '', '', 0),
(125, 'Origami Doraemon', 11, 35000, '', '149.png', '', '', '', '', '', 0),
(126, 'Origami hình con công', 11, 45000, '', '150.png', '', '', '', '', '', 0),
(127, 'Origami lồng đèn nhiều màu', 11, 30000, '', '151.png', '', '', '', '', '', 0),
(128, 'Origami lâu đài', 11, 50000, '', '127.png', '', '', '', '', '', 0),
(129, 'Origami hình bươm bướm', 11, 35000, '', '153.png', '', '', '', '', '', 0),
(130, 'Origami quả cầu', 11, 45000, '', '154.png', '', '', '', '', '', 0),
(131, 'Quả cầu trang trí', 16, 50000, '', '155.png', '', '', '', '', '', 0),
(132, 'Khuy cài áo hình bông hoa', 16, 50000, '', '166.png', '', '', '', '', '', 0),
(133, 'Quà lưu niệm', 11, 55000, '', '120.png', '', '', '', '', '', 0),
(134, 'Quà lưu niệm 2', 11, 55000, '', '121.png', '', '', '', '', '', 0),
(135, 'Quà lưu niệm 3', 11, 45000, '', '122.png', '', '', '', '', '', 0),
(136, 'Cây chuối bằng giấy nhún', 11, 55000, '', '123.png', '', '', '', '', '', 0),
(137, 'Quà lưu niệm 4', 11, 55000, '', '138.png', '', '', '', '', '', 0),
(138, 'Quà lưu niệm 5', 11, 75000, '', '159.png', '', '', '', '', '', 0),
(140, 'Quà lưu niệm 6', 11, 85000, '', '143.png', '', '', '', '', '', 0),
(141, 'Quà lưu niệm 7', 11, 70000, '', '136.png', '', '', '', '', '', 0),
(142, 'Đèn gấu', 16, 55000, '', '123.png', '', '', '', '', '', 0),
(143, 'Móc khóa bút chì khắc', 4, 35000, '', '128.png', '', '', '', '', '', 0),
(145, 'Banh trung thu', NULL, 30, NULL, NULL, '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE IF NOT EXISTS `tintuc` (
  `MTT` int(100) NOT NULL,
  `tieu_de` varchar(100) NOT NULL,
  `ngay_cap_nhat` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nd_cap_nhat` varchar(10000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung1` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `noi_dung_2` varchar(10000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung_3` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung_4` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `y_kien_phan_hoi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinh_minh_hoa` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinh_1` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinh_2` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MTT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`MTT`, `tieu_de`, `ngay_cap_nhat`, `nd_cap_nhat`, `noi_dung`, `noi_dung1`, `noi_dung_2`, `noi_dung_3`, `noi_dung_4`, `y_kien_phan_hoi`, `hinh_minh_hoa`, `hinh_1`, `hinh_2`) VALUES
(0, 'Con rồng hình thù kỳ lạ ở Hải Phòng không phải trị giá 60 tỷ đồng', '10/10', 'Về thông tin cho rằng chi phí lắp đặt con rồng lên đến gần 60 tỷ đồng, . Con rồng đó đặt ở khu vực đường Lê Hồng Phong nhiều năm nay rồi".', 'Những ngày qua hình ảnh hai con rồng lạ xuất hiện ở đường Lê Hồng Phong (quận Hải An, Hải Phòng) đã gây xôn xao cộng đồng. Sau khi xuất hiện nhiều người hài hước cho rằng đây là rồng "lai" Pikachu trong phim hoạt hình, và thay nhau đặt tên cho con vật kỳ lạ này. Bên cạnh đó các "thánh" chế ảnh đã trổ tài để cho ra lò những bức ảnh hài hước', 'Trước đó hai con rồng bằng cây xanh giữa đường Lê Hồng Phong bị dán hoa vàng phủ kín. \n\nNhiều đã đưa ra nhiều ý kiến trái chiều và bày tỏ thắc mắc về hình thù khó hiểu trên. Đa phần đều cho rằng khó có thể hình dung đây là con gì', 'Nhưng ít người biết đó là tác phẩm rồng vàng trang trí đường phố Hải Phòng là không mới. <p>Người ta chỉ phủ lớp hoa giả màu vàng lên con rồng màu xanh đã được tạo hình trước đó bằng cách cắt tỉa các cây xanh.Vậy tại sao đôi rồng xanh cũng với chiếc đầu, thân hình như</p> vậy đã xuất hiện khá lâu tại Hải Phòng mà không gây nhiều tranh cãi?', 'Nhiều lời đồn thổi  rằng dự án trang trí rồng này trị giá hàng chục tỷ đồng. Tuy nhiên ông Nguyễn Khắc Hà tổng kinh phí để làm hai mô hình rồng trên chỉ vào khoảng 100 triệu đồng chứ không phải 60 tỷ đồng.', 'Ngày 9/1, trên mạng xã hội xuất hiện hình ảnh chụp lại hai tấm áp phích tuyên truyền về kỷ niệm chiến thắng Điện Biên Phủ sai mốc thời gian. Cả hai bảng đều ghi nội dung “Kỷ niệm 42 năm ngày chiến thắng Điện Biên Phủ 7/5/1975 - 7/5/2017” trong khi thực tế chiến thắng Điện Biên Phủ diễn ra vào ngày 7/5/1954 (tức là phải kỷ niệm 63 năm). Đây là lỗi kỹ thuật hay lỗi nhận thức?', 'Tuyet voi', '9.jpg', 'rong1.PNG', 'rong2.PNG'),
(1, 'Cẩn thận với bánh trung thu handmade', '10/4', 'Báo VTC-24 thg 9, 2017\nCẩn trọng với bánh trung thu handmade. Thứ hai , 25/09/2017 06:56 AM GMT+7. Tết trung Thu 2017. (VTC News) - Nhiều người cho rằng, các loại bánh tự làm ...', 'Vài năm trở lại đây, nhiều người thích sử dụng bánh trung thu “handmade” (làm bằng tay). Một phần, do các loại bánh này có mẫu mã đẹp, nhiều màu sắc, nhiều chủng loại. Phần nữa, người dân lo ngại chất lượng an toàn thực phẩm (ATTP) của các loại bánh trên thị trường, nhất là khi cơ quan chức năng liên tục phát hiện nhiều vụ vi phạm tại các cơ sở sản xuất bánh trung thu.', 'Anh Trần Văn Lâm, chủ một hãng sản xuất bánh trung thu tại Hà Nội, cho biết, chi phí để sản xuất một chiếc bánh trung thu không cao. Anh Lâm phân tích: Với bánh dẻo, nếu dùng 1kg bột, 1kg nước đường sẽ cho 2kg vỏ bánh nguyên liệu. Mỗi chiếc bánh 200g sẽ dùng đến 100g vỏ bánh. Theo giá bán hiện tại, thì chi phí mua bột và đường hết khoảng 60.000 đồng. Như thế, 1kg bột sẽ làm được 20 chiếc bánh.', 'Để sản xuất 20 chiếc bánh loại 200g thì cần 1kg nhân. Chi phí nhân bánh gồm mứt bí, mứt dừa, bột nếp, thịt, xá xíu, hạt sen, hạt dưa và các gia vị khác chi phí hết khoảng 80.000 đồng. Ngoài ra, bao bì, nhân công hết 10.000 đồng.', 'Còn theo bật mý của chị Lê Thị Hoa (khu đô thị Linh Đàm, quận Hoàng Mai) đã 3 năm nay, hễ gần đến Tết Trung thu chị lại làm bánh để bán. Để chào hàng, chị quảng cáo trên mạng xã hội hoặc thông qua giới thiệu của người thân, bạn bè. Tùy theo trọng lượng chiếc bánh, như 100g, 200g, 250g, mà giá bán khác nhau. Trung bình từ 40.000 đồng đến 60.000 đồng/chiếc. Chị cũng tiết lộ, mỗi vụ Trung thu kéo dài khoảng 1,5 tháng, sau khi trừ các chi phí, chị cũng lời được khoảng 70 triệu đồng.', 'rong làm bánh trung thu, nước đường là thành phần quan trọng bởi quyết định đến chất lượng bánh. Thông thường, nước đường chỉ phải nấu trước vài ngày và bảo quản rất cẩn thận để đảm bảo chất lượng bánh. Tuy nhiên, tại chợ Đồng Xuân nước đường đựng trong can. Khi chúng tôi hỏi mua, chủ cửa hàng chắt ra từ một can nhựa to không nhãn mác với giá 50.000 đồng/kg. Chủ cửa hàng quảng cáo “Nước đường này đảm bảo chất lượng, không có thêm bất kì chất phụ gia nào cả”.', 'Tuyet voi can phat huy', '1.jpg', 'trungthu1.PNG', 'trungthu2.PNG'),
(3, 'Chiêm ngưỡng các mẫu loa handmade bằng gốm đẹp ngất ngây của một Startup Việt', '20/1', 'Maybelle là một Startup về loa handmade đã được cộng đồng biết đến và đón nhận cách đây ít lâu, hôm nay hãng này tiếp tục mang đến hàng ...\nCận cảnh bộ sưu tập loa điện động handmade đầu tiên tại Việt Nam', 'Maybelle là công ty khởi nghiệp chuyên về sản xuất các loại loa được làm thủ công bằng chất liệu gốm sứ và gỗ, vốn là 2 chất liệu chính trong các sản phẩm thủ công mỹ nghệ.', 'Hôm nay, Maybelle đã có buổi họp báo giới thiệu hàng loạt mẫu loa và amply hoàn toàn mới sẽ được tung ra thị trường trong thời gian tới.', 'Khác với 1 mẫu loa gốm đơn điệu được giới thiệu từ lâu, lần này Maybelle tung ra 1 chuỗi sản phẩm với nhiều thể loại khác nhau bao gồm loa điện động, loa khuếch đại thụ động và amply cho các bộ loa.', 'Bên cạnh các mẫu loa điện động và amply đã giới thiệu, Maybelle còn mang tới một số mẫu loa khuếch đại thụ động, thực chất đây là những chiếc loa có thiết kế đặc biệt để phóng đại âm thanh phát ra từ điện thoại để âm thanh này phát đi xa và to hơn.', 'Được thiết kế hoàn toàn bằng gỗ, với núm điều chỉnh được làm bằng gốm hoặc được thiết kế dạng cánh quạt cối xay gió độc đáo, ERAMP ngoài việc trợ lực cho đôi loa gốm, chiếc amply này còn trở thành một món đồ trang trí bắt mắt vô cùng.', 'Tuyet voi can phat huy', '2.jpg', 'lo1.PNG', 'lo2.PNG'),
(4, 'Giáng sinh 2016: Những món đồ Handmade kiếm bội tiền', '20/10', 'Không chỉ được ưa chuông bởi mẫu mã đẹp và tiện ích. Những món đồ Handmade Giáng sinh còn giúp nhiều bạn sinh viên kiếm bội tiền tiêu ...', 'Giáng sinh 2016 đã cận kề. Không chỉ tại các cửa hàng trên nhiều tuyến phố ngập tràn hàng hóa với đa dạng mẫu mã, chủng loại. Ở một thị phần khác, với những bạn sinh viên tại Hà Nội, đây còn là dịp giúp các bạn kiếm thêm bội tiền tiêu Tết nhờ bán đồ Hanmade. Hơn hết, đây là những món quà tặng Giáng sinh có giá khá rẻ, nhiều món đồ chưa đến 100.000 đồng.', 'Thiệp Giáng sinh là mặt hàng khá thông dụng và có giá ‘rẻ như bèo’. Tuy nhiên, không vì thế mà thiệp Giáng sinh kém đi phần sang trọng. Thậm chí, nhiều bạn sinh viên còn sáng tạo nên những chiếc thiệp độc đáo với phong cách và cá tính riêng biệt', 'Làm thiệp đòi hỏi sự tỉ mỉ và chịu khó. Hơn hết, cũng cần sáng tạo nên các dạng thiệp với nội dung và mẫu mã khác nhau để làm sao không bị nhàm chán. Thiệp Handmade quan trọng nhất là nguyên liệu và sự tỉ mỉ. Năm nay, do nguyên liệu đắt nên em bán thiệp giá cao hơn một chút so với năm ngoái” – Thu Hương nói.', 'Một nhóm bạn trẻ của Học viện Tài Chính đã tự tay làm những chiếc bờm nhung hươi, vòng tay, móc chìa khóa gấu bông Noel để kiếm thêm thu nhập tiêu Tết. Mỗi ngày, nhóm bạn này cũng bán được hơn 200 món hàng với giá dao động từ 15.000 – 50.000 đồng/sản phẩm. Khách hàng chủ yếu là các bạn sinh viên, kênh bán hàng chủ yếu thông qua Facebook và tiếp thị trực tiếp tại trường. Ngoài ra, còn có một bộ phận không nhỏ khách hàng do bạn bè giới thiệu.', 'ăm ngoái, trước khi Giáng sinh, chúng em có ý tưởng làm bánh tặng cô giáo, bạn bè và người thân. Sau đó, bốn đứa bắt đầu triển khai làm thử bánh. Tuy nhiên, ngay lần đầu tiên làm thử nghiệm và mang đến lớp mời các bạn ăn và cho ý kiến trước. Được các bạn khen ngon và nhiều bạn ngỏ ý muốn đặt bánh để làm quà tặng cho người thân. Thế là chúng em nảy ra ý định làm bánh Handmade tặng Giáng sinh theo yêu cầu. Không ngờ rằng, chỉ sau 1 tuần, số lượng đặt hàng đã lên đến con số hơn 200 đơn hàng. Khách hàng chủ yếu là các bạn trong lớp, trong trường và sau đó là mọi người giới thiệu nhau.” – Thúy Na nói.', 'NOT NULL', '3.jpg', 'giangsinh1.PNG', 'giangsinh2.PNG'),
(6, 'Những kinh nghiệm kinh doanh online tại nhà', '2/10', 'Trang công nghệ - Trangcongnghe.com-4 thg 1, 2017\nSon và mỹ phẩm handmade kinh doanh online tại nhà là lựa chọn của nhiều bạn trẻ hiện nay bởi tính tiết kiệm từ nguyên liệu đầu vào và các ...', 'Vip88, Baivip, Bigkool, Lott-vip, Vip777, Zu69, Game dân gian, Thần bài 888, Vua bài... là những “sới bạc” online sôi động hiện nay trên internet. Trên các trang mạng xã hội, những trò này được quảng cáo rầm rộ, công khai danh sách các đại lý thu mua tiền ảo (xu), kèm theo địa chỉ, số điện thoại; phương thức giao dịch mua bán “xu”. Gần đây, để chuẩn bị ra mắt cổng game cờ bạc Bonplay, nhà phát triển game này đã tổ chức cả một “đại hội khách hàng” tại khách sạn Mariot, ngay cạnh Trung tâm Hội nghị Quốc gia, thu hút hàng nghìn “con bạc”, hàng trăm đại lý trong toàn quốc về phô trương thanh thế cho lễ ra mắt vào ngày 30-10-2017.', 'Khác với những sới bạc truyền thống phải hoạt động lén lút thì những đại lý kinh doanh “xu”, “nhà cái” online lại hoạt động công khai. Nhiều đại lý hoạt động ngay tại nhà riêng; có đại lý hoạt động tại cửa hàng, quán nét; có đại lý núp dưới bóng quán cà phê, có nơi treo biển quảng cáo công khai. Tất cả “sới bạc” này đều có chung một phương thức hoạt động. Bước đầu, nhà phát triển xây dựng một cổng game với rất nhiều trò chơi như: Tiến lên đếm lá, Sâm lốc, Tá lả, Ba cây, Xì tố, Xóc đĩa… Trong game, nhà phát triển cho phép “con bạc” đổi “xu” ra thẻ điện thoại; các vật phẩm giá trị khác như điện thoại, xe máy, thậm chí là ô tô. Cùng với đó, mỗi cổng game, nhà phát triển còn xây dựng hệ thống đại lý thu mua “xu” hùng hậu, cấp một, cấp hai, cấp ba…', 'Ông Lê Quang Tự Do, Phó cục trưởng Cục Phát thanh, Truyền hình và Thông tin điện tử (Bộ Thông tin và Truyền thông) từng khẳng định với phóng viên: Các trò chơi đánh bài trên thị trường Việt Nam hiện nay đều hoạt động trái phép. Đối với trò chơi cờ bạc, tức là người chơi với nhau có thể đổi thưởng tiền ảo thành tiền thật thì cục chưa bao giờ cấp phép. Còn trò chơi trực tuyến có lá bài, khoảng 5-6 năm trở lại đây đã dừng không cấp phép.', 'Vậy đại lý cấp một hưởng lợi nhuận từ đâu? Nguyễn Văn Chinh giải thích: “Đại lý cấp một không hưởng lợi từ việc mua bán “xu”, mà hưởng 1% hoa hồng trên tổng số “xu” giao dịch. Số “xu” này được nhà phát triển thanh toán trực tiếp vào tài khoản trong game theo tháng". Tổng số “xu” một tháng của đại lý Chinh vào khoảng 20 tỷ “xu”. Tiền hoa hồng mỗi tháng quy đổi ra tiền thật vào khoảng 175 triệu đồng.  Chinh cho biết thêm: “Doanh thu của game Lott-vip một tháng vào khoảng 600 tỷ đồng, Rikvip vào khoảng 1.600 tỷ đồng, Vinplay khoảng 1.000 tỷ đồng...”.', ' Bước đầu, nhà phát triển xây dựng một cổng game với rất nhiều trò chơi như: Tiến lên đếm lá, Sâm lốc, Tá lả, Ba cây, Xì tố, Xóc đĩa… Trong game, nhà phát triển cho phép “con bạc” đổi “xu” ra thẻ điện thoại; các vật phẩm giá trị khác như điện thoại, xe máy, thậm chí là ô tô. Cùng với đó, mỗi cổng game, nhà phát triển còn xây dựng hệ thống đại lý thu mua “xu” hùng hậu, cấp một, cấp hai, cấp ba…', 'NOT NULL', '4.jpg', 'kinhnghiem1.PNG', 'kinhnghiem2.PNG'),
(7, 'Mỹ phẩm handmade có đáng tin cậy', '5/1', 'Son, sữa rửa mặt, nước hoa... là những mỹ phẩm handmade được nhiều ... Thỏi son handmade chỉ sau 2 tháng đã bị nổi mẩn, vón cục khiến ...', 'Tuy nhiên, mỹ phẩm tự tay làm theo phương pháp thủ công và theo… kinh nghiệm học lóm, có thể mang lại điều kỳ diệu cho khách hàng hay không, vẫn là một ẩn số. Tự mình làm rồi tự mình xài, thì không sao. Thế nhưng, một khi đã rao bán rộng rãi thì mỹ phẩm handmade lại phát sinh nhiều hệ lụy khó kiểm soát!', 'Được quảng cáo là nguồn gốc hoàn toàn thiên nhiên, an toàn cho người sử dụng, giá thành lại rẻ, thời gian gần đây mỹ phẩm “handmade” đang làm mưa làm gió trên thị trường cũng như các diễn đàn mạng. Điều đáng bàn là các loại mỹ phẩm này không có cơ quan nào kiểm định được độ an toàn, tất cả khách hàng chỉ mua với niềm tin vào lời quảng cáo của người bán.\n\n', 'Thực tế là, chỉ với một vài nguyên liệu cơ bản và công thức có sẵn trên mạng, ai cũng có thể tự làm ra một hũ mỹ phẩm cho riêng mình. Chính vì sự dễ dàng này mà thị trường mỹ phẩm handmade đang bùng nổ. Tuy nhiên, ngay cả khi đã có trong tay các nguyên liệu hoàn toàn lành tính, thì việc cho ra đời một thành phẩm có kết cấu lý tưởng như của các thương hiệu mỹ phẩm nổi tiếng thế giới lại là điều mà không phải nhãn hiệu handmade nào cũng làm được. ', 'Trước tình trạng mỹ phẩm “handmade” được rao bán tràn lan trên thị trường không được kiểm định chất lượng, mới đây đại diện Cục Quản lý Dược (Bộ Y tế) cho biết sẽ siết chặt quản lý loại mỹ phẩm này. Theo đại diện Cục Quản lý Dược, Thông tư số 06/2011/TT-BYT của Bộ Y tế về quản lý mỹ phẩm đã chỉ rõ, các tổ chức, cá nhân sản xuất, kinh doanh mỹ phẩm phải có giấy phép đăng ký kinh doanh', 'Phải có đội ngũ nhân sự có kiến thức chuyên môn đáp ứng yêu cầu của CGMP; có hệ thống quản lý, kiểm tra chất lượng đầy đủ… Khi đưa bất cứ sản phẩm mỹ phẩm nào ra thị trường, sản phẩm này phải được cơ quan quản lý nhà nước có thẩm quyền cấp số tiếp nhận Phiếu công bố sản phẩm mỹ phẩm. Các cá nhân sản xuất, kinh doanh mỹ phẩm tự chế phải hoàn toàn chịu trách nhiệm trước pháp luật về tính an toàn, hiệu quả và chất lượng của sản phẩm.', 'NOT NULL', '5.jpg', 'miphan1.PNG', 'mipham2.PNG'),
(8, 'Sản phẩm “handmade” hút khách mùa Valentine', '1/12', 'Dù tốn công một chút nhưng món quà này sẽ được người bạn yêu trân trọng hơn cả. Hãy cùng tham khảo một số ý tưởng quà tặng handmade ...\nNhững món quà handmade ''bá đạo'' mùa Valentine\nTiền Phong-8 thg 2, 2017\nXem tất cả', 'Hôm nay (14/2) là ngày Lễ Tình nhân (Valentine), ngày lễ khá đặc biệt ở một số nước phương Tây và đã du nhập vào các nước châu Á. Tại Việt Nam, thị trường quà tặng cho mùa Valentine năm nay khá phong phú về sản phẩm và có nhiều mức giá dành cho khách hàng', 'Những sản phẩm tự làm độc đáo như cuốn album được thiết kề hoàn toàn bằng tay, hộp nhạc với các ca khúc tình ca lãng mạn là những sản phẩm "cháy hàng" trong mùa Lễ Tình nhân năm nay. Ngoài ra, sản phẩm chocolate "handmade" cũng được các bạn trẻ lựa chọn.', 'Dù là quà tặng hay hình thức thể hiện nào, dường như ai cũng mong muốn có thể trao tặng yêu thương ngọt ngào và trọn vẹn nhất cho nửa kia của mình trong ngày Lễ Tình nhân.', 'Những ngày này, ở khắp các cửa hàng, mạng xã hội đều rao bán đầy đủ mẫu thiệp handmade dành tặng những người phụ nữ yêu thương nhân ngày Quốc tế phụ nữ 8/3. Những mẫu thiệp dành tặng bà, mẹ, tặng cô giáo, tặng người yêu hay bạn bè… được thiết kế sáng tạo, phù hợp với từng nhu cầu của người mua.', 'Khác với mọi năm, những mẫu thiệp handmade ngày càng được sáng tạo đa dạng từ hình thức đến nội dung bên trong. Những hình ảnh đời thường như bông hồng, bông mai, con vật ngộ nghĩnh hay hình ảnh những chiếc váy áo... đều được người làm sáng tạo trong từng bức thiệp. Chị Lê Hồng Nhung - chủ tài khoản Facebook làm đồ hanmade - cho biết: "Chỉ trong hai ngày 6 và 7/3, tôi đã nhận được gần 400 đơn hàng đặt làm thiệp handmade. Nhân viên làm việc hết công suất, thậm chí có hôm làm đến 2 - 3h sáng để kịp giao cho khách hàng những tấm thiệp độc đáo và ưng ý nhất".', 'NOT NULL', '7.jpg', 'ty1.PNG', 'ty2.PNG'),
(9, 'Phong bao lì xì “made in Vietnam” lên ngôi Tết Đinh Dậu 2017', '9/11', 'Lì xì tết là phong tục không thể thiếu trong ngày tết cổ truyền. Và hơn hết những mẫu phong bao lì xì tết giá rẻ vừa đẹp và độc handmade 2018 sẽ là lựa chọn số ...', 'Tuy còn 15 ngày nữa cả nước sẽ đón Tết Nguyên Đán Đinh Dậu nhưng thị trường phong bao lì xì đã nhộn nhịp từ gần 2 tháng trước. Năm nay, những sản phẩm mang đậm chất Việt do chính các bạn trẻ Việt Nam sản xuất rất được ưa chuộng trên thị trường.', 'Mừng tuổi đầu năm là một phong tục chứa đựng nhiều nét đẹp của người Việt Nam. Vào dịp Tết đến xuân về, mọi người trao cho nhau phong bao lì xì kèm theo những lời chúc tốt đẹp, với mong muốn một năm mới may mắn và bình an. Chính vì vậy, những ngày cuối năm âm lịch luôn là thời điểm nhộn nhịp nhất của mặt hàng này.', 'Nhận thấy trong những năm gần đây, khách hàng có xu hướng chuộng những mẫu phong bao lì xì lạ và bắt mắt, các cơ sở sản xuất luôn tìm cách cải tiến mẫu mã, đồng thời chất lượng và nguyên liệu cũng được coi trọng hơn.', 'Những câu nói "cửa miệng" của giới trẻ cũng được “chế” lại và in trên phong bao lì xì như “Người Việt Nam nói là làm”, “Mình thích thì mình lì xì thôi”, “Tết xưa đẹp lắm con ơi/ Lì xì nhau một xu thôi là nhớ nhau cả đời”; hay ghi những mục tiêu phải đạt được trong năm 2017: Thoát ế, tỏa sáng, tăng lương, giảm cân, đưa gấu đi trốn…', '“Đa dạng về mẫu mã nên lì xì này phù hợp với rất nhiều đối tượng. Người lớn tuổi thường ưa chuộng những mẫu có in tranh Đông Hồ hay những lời chúc truyền thống. Trong khi đó, các bạn trẻ thích mới lạ nên lại chọn mẫu có những câu nói đang rất phổ biến”.', 'NOT NULL', '8.jpg', 'lixi2.PNG', 'lixi1.PNG');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD CONSTRAINT `bai_viet_ibfk_1` FOREIGN KEY (`MKH`) REFERENCES `khach_hang` (`MKH`);

--
-- Constraints for table `chi_tiet_don_dat_hang`
--
ALTER TABLE `chi_tiet_don_dat_hang`
  ADD CONSTRAINT `chi_tiet_don_dat_hang_ibfk_1` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma_san_pham`),
  ADD CONSTRAINT `chi_tiet_don_dat_hang_ibfk_2` FOREIGN KEY (`ma_don_hang`) REFERENCES `don_dat_hang` (`ma_don_hang`);

--
-- Constraints for table `don_dat_hang`
--
ALTER TABLE `don_dat_hang`
  ADD CONSTRAINT `don_dat_hang_ibfk_1` FOREIGN KEY (`MKH`) REFERENCES `khach_hang` (`MKH`),
  ADD CONSTRAINT `don_dat_hang_ibfk_2` FOREIGN KEY (`ma_hinh_thuc_thanh_toan`) REFERENCES `hinh_thuc_thanh_toan` (`ma_hinh_thuc_thanh_toan`);

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`MCL`) REFERENCES `phan_loai` (`MCL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
