-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 05, 2023 lúc 04:41 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sanpham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dshd`
--

CREATE TABLE `dshd` (
  `namehd` varchar(255) NOT NULL,
  `mahd` varchar(10) NOT NULL,
  `soluong` int(10) NOT NULL,
  `namekh` varchar(255) NOT NULL,
  `sdt` int(10) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `tong` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dshd`
--

INSERT INTO `dshd` (`namehd`, `mahd`, `soluong`, `namekh`, `sdt`, `diachi`, `tong`) VALUES
('THANH TOÁN SỮA TH TRUE MILK CÓ ĐƯỜNG ', 'TTST001', 1, 'Nguyễn Văn A', 123456789, '123 le thi rieng', 12000),
('THANH TOÁN SỮA TH TRUE MILK KHÔNG ĐƯỜNG ', 'TTST002', 2, 'Nguyễn Thị B', 987654321, '987 le dinh can', 24000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dssp`
--

CREATE TABLE `dssp` (
  `name` varchar(255) NOT NULL,
  `image` char(50) NOT NULL,
  `masp` varchar(5) NOT NULL,
  `Soluong` int(10) NOT NULL,
  `gia` int(10) NOT NULL,
  `nsx` varchar(255) NOT NULL,
  `hsd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dssp`
--

INSERT INTO `dssp` (`name`, `image`, `masp`, `Soluong`, `gia`, `nsx`, `hsd`) VALUES
('SỮA TH TRUE MILK CÓ ĐƯỜNG', 'suatrangcoduong.png.png', 'ST001', 1, 12000, '20/12/2002', '27/12/2002'),
('TH TRUE MILK ÍT ĐƯƠNG', 'suatrangcoduong.png.png', 'ST002', 2, 12000, '20/12/2002', '27/12/2002'),
('TH TRUE MILK NGUYÊN CHẤT', 'suatrangcoduong.png.png', 'ST003', 3, 12000, '20/12/2002', '27/12/2002');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `masize` varchar(50) NOT NULL,
  `tensize` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`masize`, `tensize`) VALUES
('KL01', '90ml'),
('KL02', '100ml'),
('KL03', '110ml'),
('KL04', '180ml'),
('KL05', '220ml'),
('KL06', '300ml'),
('KL07', '500ml'),
('KL08', '950ml'),
('KL09', '1l'),
('KL10', '1.5l'),
('KL11', '2l'),
('KL12', '5l'),
('KL13', '46g'),
('KL14', '50g'),
('KL15', '60g'),
('KL16', '73g'),
('KL17', '100g'),
('KL18', '110g'),
('KL19', '180g');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
