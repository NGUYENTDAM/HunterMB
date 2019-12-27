-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2019 at 05:03 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhunter`
--

-- --------------------------------------------------------

--
-- Table structure for table `ct_dondathang`
--

CREATE TABLE `ct_dondathang` (
  `GiaBan` int(11) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `MaChiTietDonDatHang` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `MaDonDatHang` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `MaSanPham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE `dondathang` (
  `MaDonDatHang` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `NgayLap` datetime DEFAULT NULL,
  `TongThanhTien` int(11) DEFAULT NULL,
  `MaTaiKhoan` int(11) NOT NULL,
  `MaTinhTrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hangsanxuat`
--

CREATE TABLE `hangsanxuat` (
  `MaHangSanXuat` int(11) NOT NULL,
  `TenHangSanXuat` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LogoURL` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hangsanxuat`
--

INSERT INTO `hangsanxuat` (`MaHangSanXuat`, `TenHangSanXuat`, `LogoURL`, `BiXoa`) VALUES
(1, 'Apple', 'iphone.jpg', 0),
(2, 'Samsung', 'samsung.jpg', 0),
(3, 'Oppo', 'oppo.jpg', 0),
(4, 'Xiaomi', 'xiaomi.jpg', 0),
(5, 'Realme', 'realme.jpg', 0),
(6, 'Lenovo', 'Lenovo.jpg', 0),
(7, 'Apple tb', NULL, 0),
(8, 'Samsung tb', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLoaiSanPham` int(11) NOT NULL,
  `TenLoaiSanPham` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoaiSanPham`, `TenLoaiSanPham`, `BiXoa`) VALUES
(1, 'Điện Thoại', 0),
(2, 'Tablet', 0),
(3, 'Phụ Kiện', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaitaikhoan`
--

CREATE TABLE `loaitaikhoan` (
  `MaLoaiTaiKhoan` int(11) NOT NULL,
  `TenLoaiTaiKhoan` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaitaikhoan`
--

INSERT INTO `loaitaikhoan` (`MaLoaiTaiKhoan`, `TenLoaiTaiKhoan`) VALUES
(1, 'User'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhURL` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GiaSanPham` int(11) DEFAULT NULL,
  `NgayNhap` datetime DEFAULT NULL,
  `SoLuongTon` int(11) DEFAULT NULL,
  `SoLuongBan` int(11) DEFAULT NULL,
  `SoLuocXem` int(11) DEFAULT NULL,
  `MoTa` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT 0,
  `MaLoaiSanPham` int(11) NOT NULL,
  `MaHangSanXuat` int(11) NOT NULL,
  `XuatXu` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `NhaSanXuat` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSanPham`, `TenSanPham`, `HinhURL`, `GiaSanPham`, `NgayNhap`, `SoLuongTon`, `SoLuongBan`, `SoLuocXem`, `MoTa`, `BiXoa`, `MaLoaiSanPham`, `MaHangSanXuat`, `XuatXu`, `NhaSanXuat`) VALUES
(1, 'iPhone 11 128GB', 'iphone-11-128gb-black.jpg', 23990000, '0000-00-00 00:00:00', 200, 100, 44, 'Màn hình 6.1\"\r\nCamera sau Chính 12 MP & Phụ 12 MP\r\nPin 3110 mAh', 0, 1, 1, 'Việt Nam', 'Apple'),
(2, 'iPhone 11 Pro Max 128GB', 'iphone-11-pro-256gb-black.jpg', 0, '0000-00-00 00:00:00', 0, 0, 1, 'Màn hình 6.1\"\r\nCamera sau Chính 12 MP & Phụ 12 MP\r\nPin 3110 mAh', 0, 1, 1, 'Việt Nam', 'Iphone'),
(3, 'iPhone 11 Pro 64GB', 'iphone-11-pro-black.jpg', 0, '0000-00-00 00:00:00', 1, 1, 8, 'Màn hình 6.1\"\r\nCamera sau Chính 12 MP & Phụ 12 MP\r\nPin 3110 mAh', 0, 1, 1, 'Việt Nam', 'Iphone'),
(4, 'iPhone 11 Pro Max 512GB', 'iphone-11-pro-max-512gb-gold.jpg', 1, '0000-00-00 00:00:00', 1, 1, 3, 'Màn hình 6.1\"\r\nCamera sau Chính 12 MP & Phụ 12 MP\r\nPin 3110 mAh', 0, 1, 1, 'Lào', 'Iphone'),
(5, 'iPhone 11 Pro 64GB', 'iphone-11-red.jpg', 0, '0000-00-00 00:00:00', 1, 1, 2, 'Màn hình 6.1\"\r\nCamera sau Chính 12 MP & Phụ 12 MP\r\nPin 3110 mAh', 0, 1, 1, 'Lào', 'Iphone'),
(6, 'iPhone Xs 256GB', 'iphone-xs-256gb-white.jpg', 1, '0000-00-00 00:00:00', 1, 1, 2, 'Màn hình 6.1\"\r\nCamera sau Chính 12 MP & Phụ 12 MP\r\nPin 3110 mAh', 0, 1, 1, 'Việt Nam', 'Iphone'),
(7, 'iPhone Xs 64GB', 'iphone-xs-gold.jpg', 1, '0000-00-00 00:00:00', 1, 1, 2, 'Màn hình 6.1\"\r\nCamera sau Chính 12 MP & Phụ 12 MP\r\nPin 3110 mAh', 0, 1, 1, 'USA', 'Iphone'),
(8, 'iPhone Xs Max 256GB', 'iphone-xs-max-256gb-white.jpg', 1, '0000-00-00 00:00:00', 1, 1, 2, 'Màn hình 6.1\"\r\nCamera sau Chính 12 MP & Phụ 12 MP\r\nPin 3110 mAh', 0, 1, 1, 'USA', 'Iphone'),
(9, 'iPhone Xs Max 64 GB', 'iphone-xs-max-gold.jpg', 1, '0000-00-00 00:00:00', 1, 1, 1, 'Màn hình 6.1\"\r\nCamera sau Chính 12 MP & Phụ 12 MP\r\nPin 3110 mAh', 0, 1, 1, 'USA', 'Iphone'),
(10, 'iPhone 7plus 32GB', 'iphone-7-plus-32gb-gold.jpg', 1, '0000-00-00 00:00:00', 1, 1, 1, 'Màn hình 6.1\"\r\nCamera sau Chính 12 MP & Phụ 12 MP\r\nPin 3110 mAh', 0, 1, 1, 'USA', 'Iphone'),
(11, 'Samsung galaxy A70', 'samsung-galaxy-a70-white.jpg', 1, '0000-00-00 00:00:00', 1, 1, 4, 'Màn hình 6.1\"\r\nCamera sau Chính 12 MP & Phụ 12 MP\r\nPin 3110 mAh', 0, 1, 2, '', ''),
(12, 'Samsung galaxy s10 plus', 'samsung-galaxy-s10-plus-black.jpg', 10, '2019-12-19 00:00:00', 1, 1, 2, NULL, 0, 1, 2, 'Trung Quốc', 'Samsung'),
(13, 'Samsung galaxy note 9', 'samsung-galaxy-note-9-black.jpg', 1, '2019-12-19 00:00:00', 1, 1, 1, NULL, 0, 1, 2, 'Trung Quốc', 'Samsung'),
(14, 'Samsung galaxy note 10', 'samsung-galaxy-note-10-silver.jpg', 14, '2019-12-20 00:00:00', 5, 5, 5, 'Màn hình: 6.6\", Full HD+\r\nCPU: Snapdragon 855 8 nhân\r\nRAM: 8 GB, ROM: 256 GB\r\nCamera: Chính 48 MP & Phụ 13 MP, 8 MP\r\nSelfie: 16 MP\r\nPIN: 4065 mAh, có sạc nhanh', 0, 1, 2, 'Trung Quốc', 'Samsung'),
(15, 'Samsung galaxy a70', 'samsung-galaxy-a70-white.jpg', 1, '2019-12-20 00:00:00', 1, 1, 1, 'Màn hình: 6.6\", Full HD+\r\nCPU: Snapdragon 855 8 nhân\r\nRAM: 8 GB, ROM: 256 GB\r\nCamera: Chính 48 MP & Phụ 13 MP, 8 MP\r\nSelfie: 16 MP\r\nPIN: 4065 mAh, có sạc nhanh', 0, 1, 2, 'Trung Quốc', 'Samsung'),
(16, 'Oppo F11', 'oppo-f11-mtp.jpg', 1, '2019-12-20 00:00:00', 1, 1, 1, 'Màn hình: 6.6\", Full HD+\r\nCPU: Snapdragon 855 8 nhân\r\nRAM: 8 GB, ROM: 256 GB\r\nCamera: Chính 48 MP & Phụ 13 MP, 8 MP\r\nSelfie: 16 MP\r\nPIN: 4065 mAh, có sạc nhanh', 0, 1, 3, 'Việt Nam', 'Oppo'),
(17, 'Oppo f11 Pro 128Gb', 'oppo-f11-pro-128gb.jpg', 1, '2019-12-27 00:00:00', 1, 1, 1, 'Màn hình: 6.6\", Full HD+\r\nCPU: Snapdragon 855 8 nhân\r\nRAM: 8 GB, ROM: 256 GB\r\nCamera: Chính 48 MP & Phụ 13 MP, 8 MP\r\nSelfie: 16 MP\r\nPIN: 4065 mAh, có sạc nhanh', 0, 1, 3, 'VN', 'Oppo'),
(18, 'Oppo reno', 'oppo-reno2.jpg', 1, '2019-12-26 00:00:00', 1, 1, 1, 'Màn hình: 6.6\", Full HD+\r\nCPU: Snapdragon 855 8 nhân\r\nRAM: 8 GB, ROM: 256 GB\r\nCamera: Chính 48 MP & Phụ 13 MP, 8 MP\r\nSelfie: 16 MP\r\nPIN: 4065 mAh, có sạc nhanh', 0, 1, 3, 'VN', 'Oppo'),
(19, 'Xiaomi Mi 9', 'xiaomi-mi-9-se-1.jpg', 1, '2019-12-24 00:00:00', 1, 1, 1, 'Màn hình: 6.6\", Full HD+\r\nCPU: Snapdragon 855 8 nhân\r\nRAM: 8 GB, ROM: 256 GB\r\nCamera: Chính 48 MP & Phụ 13 MP, 8 MP\r\nSelfie: 16 MP\r\nPIN: 4065 mAh, có sạc nhanh', 0, 1, 4, 'VN', 'Xiaomi'),
(20, 'Xiaomi Mi Note 10', 'xiaomi-mi-note-10-pro-black.jpg', 1, '0000-00-00 00:00:00', 1, 1, 1, 'Màn hình: 6.6\", Full HD+\r\nCPU: Snapdragon 855 8 nhân\r\nRAM: 8 GB, ROM: 256 GB\r\nCamera: Chính 48 MP & Phụ 13 MP, 8 MP\r\nSelfie: 16 MP\r\nPIN: 4065 mAh, có sạc nhanh', 0, 1, 4, 'VN', 'Xiaomi'),
(21, 'Realme Me Green Isaac', 'realme-3-green-isaac.jpg', 1, '2019-12-25 00:00:00', 1, 1, 1, 'Màn hình: 6.6\", Full HD+\r\nCPU: Snapdragon 855 8 nhân\r\nRAM: 8 GB, ROM: 256 GB\r\nCamera: Chính 48 MP & Phụ 13 MP, 8 MP\r\nSelfie: 16 MP\r\nPIN: 4065 mAh, có sạc nhanh', 0, 1, 5, 'VN', 'Realme'),
(22, 'ipad air 105 inch gold 2019', 'ipad-air-105-inch-wifi-2019-gold.jpg', 111, '2019-12-25 00:00:00', 1, 1, 1, 'Màn hình: 10.1\", IPS LCD\r\nCPU: Snapdragon 210 4 nhân, Android 8.0\r\nRAM: 2 GB, Bộ nhớ: 16 GB\r\nCamera: 5 MP, Selfie 2 MP\r\nKết nối mạng WiFi, 3G, 4G LTE\r\nPIN: 4850 mAh, SIM: 1 SIM\r\nGIẢM 400.000₫MUA MUA TRẢ GÓP\r\n', 0, 2, 7, 'USA', 'Apple'),
(23, 'samsung galaxy tab 2019 silver', 'samsung-galaxy-tab-a8-t295-2019-silver.jpg', 1, '2019-12-25 00:00:00', 1, 1, 1, 'Màn hình: 10.1\", IPS LCD\r\nCPU: Snapdragon 210 4 nhân, Android 8.0\r\nRAM: 2 GB, Bộ nhớ: 16 GB\r\nCamera: 5 MP, Selfie 2 MP\r\nKết nối mạng WiFi, 3G, 4G LTE\r\nPIN: 4850 mAh, SIM: 1 SIM\r\nGIẢM 400.000₫MUA MUA TRẢ GÓP\r\n', 0, 2, 8, 'USA', 'Samsung'),
(24, 'sạc dự phòng 10000mh', 'sac-du-phong-polymer-10000mah.jpg', 1, '2019-12-26 00:00:00', 1, 1, 1, NULL, 0, 3, 2, 'Trung Quốc', 'Samsung'),
(25, 'Sạc dự phòng 10000mah', 'sac-du-phong-10000mah.jpg', 1, '2019-12-31 00:00:00', 1, 1, 1, NULL, 0, 3, 2, 'Trung Quốc', 'Samsung'),
(26, 'samsung galaxy a8 plus p205 black', 'samsung-galaxy-tab-a8-plus-p205-black.jpg', 1, '2019-12-19 00:00:00', 1, 1, 1, 'Màn hình: 10.1\", IPS LCD\r\nCPU: Snapdragon 210 4 nhân, Android 8.0\r\nRAM: 2 GB, Bộ nhớ: 16 GB\r\nCamera: 5 MP, Selfie 2 MP\r\nKết nối mạng WiFi, 3G, 4G LTE\r\nPIN: 4850 mAh, SIM: 1 SIM\r\nGIẢM 400.000₫MUA MUA TRẢ GÓP\r\n', 0, 2, 8, 'TQ', 'Samsung'),
(27, 'lenovo tab e7 7104i thumb', 'lenovo-tab-e7-tb-7104i-33397-thumb1.jpg', 1, '2019-12-27 00:00:00', 1, 1, 1, 'Màn hình: 10.1\", IPS LCD\r\nCPU: Snapdragon 210 4 nhân, Android 8.0\r\nRAM: 2 GB, Bộ nhớ: 16 GB\r\nCamera: 5 MP, Selfie 2 MP\r\nKết nối mạng WiFi, 3G, 4G LTE\r\nPIN: 4850 mAh, SIM: 1 SIM\r\nGIẢM 400.000₫MUA MUA TRẢ GÓP\r\n', 0, 2, 6, 'USA', 'Lenovo'),
(28, 'lenovo tab 48 8504x thumb', 'lenovo-tab-4-8-tb-8504x-thumb.jpg', 1111111, '2019-12-18 00:00:00', 1, 1, 1, 'Màn hình: 10.1\", IPS LCD\r\nCPU: Snapdragon 210 4 nhân, Android 8.0\r\nRAM: 2 GB, Bộ nhớ: 16 GB\r\nCamera: 5 MP, Selfie 2 MP\r\nKết nối mạng WiFi, 3G, 4G LTE\r\nPIN: 4850 mAh, SIM: 1 SIM\r\nGIẢM 400.000₫MUA MUA TRẢ GÓP\r\n', 0, 2, 6, 'TQ', 'lenovo'),
(29, 'Cáp sạc apple watch', 'cap-sac-apple-watch.jpg', 12, '2019-12-20 00:00:00', 1, 1, 1, NULL, 0, 3, 1, 'USA', 'Apple'),
(30, ' Loa bluetooth', 'loa-bluetooth-mozard.jpg', 1, '2019-12-20 00:00:00', 1, 1, 1, NULL, 0, 3, 2, 'Trung Quốc', 'Samsung');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTaiKhoan` int(11) NOT NULL,
  `TenDangNhap` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MatKhau` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TenHienThi` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT 0,
  `MaLoaiTaiKhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MaTaiKhoan`, `TenDangNhap`, `MatKhau`, `TenHienThi`, `BiXoa`, `MaLoaiTaiKhoan`) VALUES
(1, 'admin', 'admin', 'admin', 0, 2),
(2, 'user', 'user', 'user', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `MaTinhTrang` int(11) NOT NULL,
  `TenTinhTrang` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tinhtrang`
--

INSERT INTO `tinhtrang` (`MaTinhTrang`, `TenTinhTrang`) VALUES
(1, 'Đặt hàng'),
(2, 'Đang giao hàng'),
(3, 'Thanh toán'),
(4, 'Hủy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ct_dondathang`
--
ALTER TABLE `ct_dondathang`
  ADD PRIMARY KEY (`MaChiTietDonDatHang`);

--
-- Indexes for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`MaDonDatHang`),
  ADD KEY `fk_DonDatHang_TaiKhoan1_idx` (`MaTaiKhoan`),
  ADD KEY `fk_DonDatHang_TinhTrang1_idx` (`MaTinhTrang`);

--
-- Indexes for table `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  ADD PRIMARY KEY (`MaHangSanXuat`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLoaiSanPham`);

--
-- Indexes for table `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  ADD PRIMARY KEY (`MaLoaiTaiKhoan`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `fk_SanPham_LoaiSanPham1_idx` (`MaLoaiSanPham`),
  ADD KEY `fk_SanPham_HangSanXuat1_idx` (`MaHangSanXuat`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTaiKhoan`),
  ADD KEY `fk_TaiKhoan_LoaiTaiKhoan_idx` (`MaLoaiTaiKhoan`);

--
-- Indexes for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`MaTinhTrang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  MODIFY `MaHangSanXuat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLoaiSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  MODIFY `MaLoaiTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  MODIFY `MaTinhTrang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `fk_DonDatHang_TaiKhoan1` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `taikhoan` (`MaTaiKhoan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DonDatHang_TinhTrang1` FOREIGN KEY (`MaTinhTrang`) REFERENCES `tinhtrang` (`MaTinhTrang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_SanPham_HangSanXuat1` FOREIGN KEY (`MaHangSanXuat`) REFERENCES `hangsanxuat` (`MaHangSanXuat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SanPham_LoaiSanPham1` FOREIGN KEY (`MaLoaiSanPham`) REFERENCES `loaisanpham` (`MaLoaiSanPham`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `fk_TaiKhoan_LoaiTaiKhoan` FOREIGN KEY (`MaLoaiTaiKhoan`) REFERENCES `loaitaikhoan` (`MaLoaiTaiKhoan`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
