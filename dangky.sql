-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 05, 2023 lúc 04:40 PM
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
-- Cơ sở dữ liệu: `dangky`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `username` varchar(255) NOT NULL,
  `maus` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `sex` char(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`username`, `maus`, `password`, `email`, `fullname`, `birthday`, `sex`) VALUES
('admin', '001', 'admin', 'admin@gmail.com', 'Nguyễn Văn A', '10/10/1999', 'Nam'),
('nvkho', '002', 'nvkho', 'nvkho@gmail.com', 'Nguyễn Văn C', '5/2/1999', 'Nam'),
('nvketoan', '003', 'nvketoan', 'nvketoan@gmail.com', 'Nguyễn Thị D', '03/02/2002', 'Nu'),
('linh', '005', '1234', 'linh@gmail.com', 'nguyen vu hoang linh', '14/05/1998', 'Nu'),
('nvnhansu', '004', 'nvnhansu', 'nvnhansu@gmail.com', 'Nguyễn Thị E', '14/06/1998', 'Nu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
