-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 14, 2021 lúc 03:27 AM
-- Phiên bản máy phục vụ: 10.0.38-MariaDB
-- Phiên bản PHP: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hailienkt_02`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `keypass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_type` tinyint(4) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `daycrea` date NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `keypass`, `id_type`, `name`, `email`, `phone`, `daycrea`, `active`) VALUES
(18, 'admin', 'L21hQTJ5ck5wRW9PR2tWcDkwd1dKQT09', '15c85d38497004', 1, 'Nguyen Van A', 'abc@gmail.com', '0909090909', '2021-03-01', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `link_go` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `tt` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `name`, `image`, `link_go`, `tt`, `active`) VALUES
(7, 'Cửa cuốn Hải Liên', 'images/khoanh/thum_16172776070.jpg', '', 1, 1),
(6, 'Cửa cuốn Hải Liên', 'images/khoanh/thum_16172776020.jpg', '', 3, 1),
(8, 'Cửa cuốn Hải Liên', 'images/khoanh/thum_16172776130.jpg', '', 2, 1),
(9, 'Cửa cuốn Hải Liên', 'images/khoanh/thum_16172776170.jpg', '', 4, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chiphi`
--

CREATE TABLE `chiphi` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `chiphi` int(11) NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  `code_time` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `daycrea` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

CREATE TABLE `dichvu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_type` smallint(6) NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image_slide` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `short_info` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `info` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `key_search` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dayup` datetime NOT NULL,
  `daycrea` date NOT NULL,
  `race` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dichvu`
--

INSERT INTO `dichvu` (`id`, `name`, `id_type`, `image`, `image_slide`, `short_info`, `info`, `key_search`, `dayup`, `daycrea`, `race`, `active`) VALUES
(1, 'Sửa các loại mô tơ cửa cuốn', 0, 'dich_vu_1617285291.jpg', '', 'Nhận sửa các loại Mô tơ cửa cuốn', '<p><strong><span style=\"font-size:10.5pt\">Sửa motor cửa cuốn</span></strong><span style=\"font-size:10.5pt\">&nbsp;</span><span style=\"font-size:10.5pt\">l&agrave; dịch vụ khắc phục sự cố motor cửa dẫn đến những kh&oacute; khăn trong qu&aacute; tr&igrave;nh vận h&agrave;nh. Động cơ gặp vấn đề kh&ocirc;ng chỉ l&agrave;m cho cửa hoạt động chậm lại m&agrave; c&ograve;n c&oacute; thể g&acirc;y n&ecirc;n nhiều nguy hiểm cho người sử dụng.</span><br />\r\n&nbsp;&nbsp; &nbsp;<strong><span style=\"font-size:10.5pt\">Dịch vụ sửa chữa động cơ điện cửa cuốn</span></strong><span style=\"font-size:10.5pt\">&nbsp;</span><span style=\"font-family:&lt;br /&gt;; font-size:10.5pt\">l&agrave; điều bạn cần l&uacute;c n&agrave;y. Với kinh nghiệm l&acirc;u năm cung cấp dịch vụ&nbsp;<strong><span style=\"color:#3366ff; font-size:10.5pt\"><span style=\"color:#3366ff\">sửa cửa cuốn</span></span></strong></span><span style=\"font-size:10.5pt\">&nbsp;chuy&ecirc;n nghiệp, Hải Li&ecirc;n chắc chắn sẽ l&agrave;m bạn h&agrave;i l&ograve;ng.</span><br />\r\n&nbsp; &nbsp;<br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:10.5pt\"><img alt=\"\" src=\"data:image/jpeg;base64,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\" style=\"height:194px; width:259px\" /></span><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>1. Dịch vụ sửa motor cửa cuốn nhanh ch&oacute;ng</strong></span></span><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Sửa chữa động cơ cửa cuốn c&oacute; thể mất cả ng&agrave;y, thậm ch&iacute; l&acirc;u hơn nếu như bạn kh&ocirc;ng c&oacute; những điều kiện cần thiết. Với dịch vụ trọn g&oacute;i được Hải Li&ecirc;n cung cấp, bạn sẽ kh&ocirc;ng phải lo về điều n&agrave;y. C&ocirc;ng nghệ cao c&ugrave;ng thiết bị hỗ trợ chuy&ecirc;n dụng gi&uacute;p bạn việc sửa chữa động cơ điện nhanh ch&oacute;ng, hiệu quả.</span></span><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>2. Hiệu quả l&acirc;u d&agrave;i</strong></span></span><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Motor sau khi được sửa chữa sẽ hoạt động hiệu quả, li&ecirc;n tục trong thời gian d&agrave;i sau đ&oacute;. T&iacute;nh hiệu quả được thể hiện khi động cơ c&oacute; thể hoạt động li&ecirc;n tục trong thời gian d&agrave;i m&agrave; kh&ocirc;ng c&oacute; bất cứ trục trặc n&agrave;o. Điều n&agrave;y v&igrave;&nbsp;<strong>dịch vụ sửa motor cửa cuốn</strong>&nbsp;tại Hải Li&ecirc;n sử dụng ho&agrave;n to&agrave;n bằng m&aacute;y, n&acirc;ng cao độ ch&iacute;nh x&aacute;c v&agrave; c&oacute; những bảo đảm cần thiết.</span></span><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>3. Đội ngũ nh&acirc;n vi&ecirc;n tr&ecirc;n 5 năm kinh nghiệm</strong></span></span><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Đội thợ sửa chữa động cơ điện tại Sao Việt đ&atilde; c&oacute; nhiều năm kinh nghiệm, tay nghề cao v&agrave; li&ecirc;n tục được bồi dưỡng tu nghiệp. Thợ sửa motor của ch&uacute;ng t&ocirc;i c&oacute; khả năng sửa tất cả c&aacute;c loại động cơ hiện c&oacute; tr&ecirc;n thị trường. Bạn ho&agrave;n to&agrave;n y&ecirc;n t&acirc;m với đội sửa chữa motor của Hải Li&ecirc;n.</span></span><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>4.&nbsp;Hộ trợ sửa chữa động cơ v&agrave;o ng&agrave;y lễ</strong></span></span><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>Sửa chữa motor cửa cuốn</strong>&nbsp;sẽ l&agrave; v&ocirc; c&ugrave;ng cần thiết trong thời điểm lễ tết &ndash; thời gian m&agrave; bạn sẽ kh&oacute; t&igrave;m được một địa chỉ uy t&iacute;n.&nbsp;Hiểu được điều đ&oacute; n&ecirc;n&nbsp;<strong>Cửa h&agrave;ng Hải Li&ecirc;n</strong>&nbsp;cung cấp dịch vụ sửa motor điện ngay trong những ng&agrave;y lễ tết m&agrave; kh&ocirc;ng tăng th&ecirc;m chi ph&iacute; đặc biệt.</span></span><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>5. Bảo h&agrave;nh d&agrave;i hạn sau sửa chữa cửa cuốn</strong></span></span><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Đội ngũ chuy&ecirc;n nghiệp c&oacute; kinh nghiệm thực tế hơn 5 năm c&ugrave;ng bộ đồ nghề sửa chữa đầy đủ c&oacute; khả năng khắc phục được tất cả c&aacute;c hư hỏng của motor với chất lượng cao, l&acirc;u d&agrave;i.&nbsp;<strong>Để đảm bảo&nbsp;chất lượng sửa chữa motor </strong>ch&uacute;ng t&ocirc;i đưa ra dịch vụ bảo h&agrave;nh d&agrave;i hạn cho linh kiện thay thế hoặc những phần đ&atilde; sửa.</span></span><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>Quy tr&igrave;nh sửa motor cửa cuốn tại Hải Li&ecirc;n</strong></span></span></p>\r\n\r\n<ul>\r\n	<li>&nbsp;<span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Tiếp nhận th&ocirc;ng tin li&ecirc;n hệ y&ecirc;u cầu hỗ trợ sửa chữa motor của kh&aacute;ch h&agrave;ng</span></span></li>\r\n	<li>&nbsp;<span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Sau 15 ph&uacute;t thợ sẽ c&oacute; mặt tại địa chỉ kh&aacute;ch h&agrave;ng cum cấp v&agrave; t&igrave;m kiếm nguy&ecirc;n nh&acirc;n g&acirc;y ra hư hỏng</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Khắc phục nguy&ecirc;n nh&acirc;n g&acirc;y ra hư hỏng v&agrave; sửa motor cửa cuố</span></span></li>\r\n	<li>&nbsp;<span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Vận h&agrave;nh lại v&agrave; kiểm tra t&igrave;nh trạng hoạt động của động cơ điện</span></span>&nbsp;</li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Ho&agrave;n th&agrave;nh giấy tờ v&agrave; thanh to&aacute;n dịch vụ sửa chữa</span></span>&nbsp; &nbsp; &nbsp; &nbsp;</li>\r\n</ul>\r\n\r\n<p>&nbsp; &nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n&nbsp;&nbsp; &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><br />\r\n&nbsp;&nbsp; &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 'sua cac loai mo to cua cuon nhan sua cac loai mo to cua cuon', '2021-04-01 20:54:51', '2021-03-31', 22, 1),
(2, 'Nhận sơn tĩnh điện cửa sắt gia công', 0, 'dich_vu_1617285277.jpg', '', 'Dịch vụ nhận sơn tĩnh điện cửa sắt gia công giá mềm', '<p><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>Với nhiều năm kinh nghiệm trong ng&agrave;nh sơn tĩnh điện c&ugrave;ng 2 d&acirc;y chuyền sơn tĩnh điện hiện đại, mặt bằng xưởng rộng lớn, Qu&yacute; kh&aacute;ch sẽ y&ecirc;n t&acirc;m về chất lượng, tiến độ v&agrave; gi&aacute; th&agrave;nh của C&ocirc;ng ty ch&uacute;ng t&ocirc;i.</strong></span></span><br />\r\n&nbsp;&nbsp; &nbsp;<strong>Nhận sơn tĩnh điện cửa, cổng, h&agrave;ng r&agrave;o, lan can,...với đa dạng m&agrave;u sắc, qu&yacute; kh&aacute;ch c&oacute; thể lựa chọn m&agrave;u y&ecirc;u th&iacute;ch, ph&ugrave; hợp với ng&ocirc;i nh&agrave; của m&igrave;nh, ch&uacute;ng t&ocirc;i đảm bảo mang đến sự h&agrave;i l&ograve;ng tuyệt đối với gi&aacute; cả hợp l&yacute; nhất.</strong><br />\r\n&nbsp;&nbsp; &nbsp;<strong>Nhận v&agrave; giao h&agrave;ng tận nơi.</strong><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 'nhan son tinh dien cua sat gia cong dich vu nhan son tinh dien cua sat gia cong gia mem', '2021-04-01 20:54:37', '2021-04-01', 22, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doitac`
--

CREATE TABLE `doitac` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `key_search` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `daycrea` date NOT NULL,
  `dayup` datetime NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `doitac`
--

INSERT INTO `doitac` (`id`, `name`, `phone`, `email`, `birthday`, `address`, `key_search`, `daycrea`, `dayup`, `active`) VALUES
(1, 'Nam Phong', '0706020825', 'ngocgia.82@gmail.com', '1999/11/28', '882 Phan Đình Phùng, TP. KonTum', 'nam phong 0706020825 ngocgia.82@gmail.com 882 phan dinh phung, tp. kontum', '2021-04-01', '2021-04-01 20:18:14', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoatdong`
--

CREATE TABLE `hoatdong` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_type` smallint(6) NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image_slide` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `short_info` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `info` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `key_search` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `dayup` datetime NOT NULL,
  `daycrea` date NOT NULL,
  `race` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoatdong`
--

INSERT INTO `hoatdong` (`id`, `name`, `id_type`, `image`, `image_slide`, `short_info`, `info`, `key_search`, `dayup`, `daycrea`, `race`, `active`) VALUES
(11, 'CỬA CUỐN CÔNG NGHỆ HIỆN ĐẠI - THÔNG MINH NĂM 2019', 0, 'hoat_dong_1555689037.jpg', '', 'Việt Nam chính thức bước vào giai đoạn già hóa dân số năm 2011, Việt Nam chính thức bước vào giai đoạn già hóa dân số năm 2011,', '<p>Chi tiết hoạt động soạn tại đ&acirc;y.</p>', 'cua cuon cong nghe hien dai - thong minh nam 2019 viet nam chinh thuc buoc vao giai doan gia hoa dan so nam 2011, viet nam chinh thuc buoc vao giai doan gia hoa dan so nam 2011,', '2019-04-19 22:50:37', '2019-04-19', 45, 1),
(12, 'CỬA CUỐN CÔNG NGHỆ HIỆN ĐẠI - THÔNG MINH NĂM 2019', 0, 'hoat_dong_1555689052.jpg', '', 'Việt Nam chính thức bước vào giai đoạn già hóa dân số năm 2011, Việt Nam chính thức bước vào giai đoạn già hóa dân số năm 2011,', '<p>Chi tiết hoạt động soạn tại đ&acirc;y.</p>', 'cua cuon cong nghe hien dai - thong minh nam 2019 viet nam chinh thuc buoc vao giai doan gia hoa dan so nam 2011, viet nam chinh thuc buoc vao giai doan gia hoa dan so nam 2011,', '2019-04-19 22:50:52', '2019-04-19', 44, 1),
(13, 'CỬA CUỐN CÔNG NGHỆ HIỆN ĐẠI - THÔNG MINH NĂM 2019', 0, 'hoat_dong_1555689053.jpg', '', 'Việt Nam chính thức bước vào giai đoạn già hóa dân số năm 2011, Việt Nam chính thức bước vào giai đoạn già hóa dân số năm 2011,', '<p>Chi tiết hoạt động soạn tại đ&acirc;y.</p>', 'cua cuon cong nghe hien dai - thong minh nam 2019 viet nam chinh thuc buoc vao giai doan gia hoa dan so nam 2011, viet nam chinh thuc buoc vao giai doan gia hoa dan so nam 2011,', '2019-04-19 22:50:53', '2019-04-19', 45, 1),
(14, 'CỬA CUỐN CÔNG NGHỆ HIỆN ĐẠI - THÔNG MINH NĂM 2019', 0, 'hoat_dong_1555689054.jpg', '', 'Việt Nam chính thức bước vào giai đoạn già hóa dân số năm 2011, Việt Nam chính thức bước vào giai đoạn già hóa dân số năm 2011,', '<p>Chi tiết hoạt động soạn tại đ&acirc;y.</p>', 'cua cuon cong nghe hien dai - thong minh nam 2019 viet nam chinh thuc buoc vao giai doan gia hoa dan so nam 2011, viet nam chinh thuc buoc vao giai doan gia hoa dan so nam 2011,', '2019-04-19 22:50:54', '2019-04-19', 46, 1),
(15, 'CỬA CUỐN CÔNG NGHỆ HIỆN ĐẠI - THÔNG MINH NĂM 2019', 0, 'hoat_dong_1555689054.jpg', '', 'Việt Nam chính thức bước vào giai đoạn già hóa dân số năm 2011, Việt Nam chính thức bước vào giai đoạn già hóa dân số năm 2011,', '<p>Chi tiết hoạt động soạn tại đ&acirc;y.</p>', 'cua cuon cong nghe hien dai - thong minh nam 2019 viet nam chinh thuc buoc vao giai doan gia hoa dan so nam 2011, viet nam chinh thuc buoc vao giai doan gia hoa dan so nam 2011,', '2019-04-19 22:50:54', '2019-04-19', 42, 1),
(16, 'CỬA CUỐN CÔNG NGHỆ HIỆN ĐẠI - THÔNG MINH NĂM 2019', 0, 'hoat_dong_1555689055.jpg', '', 'Việt Nam chính thức bước vào giai đoạn già hóa dân số năm 2011, Việt Nam chính thức bước vào giai đoạn già hóa dân số năm 2011,', '<p>Chi tiết hoạt động soạn tại đ&acirc;y.</p>', 'cua cuon cong nghe hien dai - thong minh nam 2019 viet nam chinh thuc buoc vao giai doan gia hoa dan so nam 2011, viet nam chinh thuc buoc vao giai doan gia hoa dan so nam 2011,', '2019-04-19 22:50:55', '2019-04-19', 43, 1),
(17, 'CỬA CUỐN CÔNG NGHỆ HIỆN ĐẠI - THÔNG MINH NĂM 2019', 0, 'hoat_dong_1555689056.jpg', '', 'Việt Nam chính thức bước vào giai đoạn già hóa dân số năm 2011, Việt Nam chính thức bước vào giai đoạn già hóa dân số năm 2011,', '<p>Chi tiết hoạt động soạn tại đ&acirc;y.</p>', 'cua cuon cong nghe hien dai - thong minh nam 2019 viet nam chinh thuc buoc vao giai doan gia hoa dan so nam 2011, viet nam chinh thuc buoc vao giai doan gia hoa dan so nam 2011,', '2019-04-19 22:50:56', '2019-04-19', 49, 1),
(18, 'CỬA CUỐN CÔNG NGHỆ HIỆN ĐẠI - THÔNG MINH NĂM 2019', 0, 'hoat_dong_1555689056.jpg', '', 'Việt Nam chính thức bước vào giai đoạn già hóa dân số năm 2011, Việt Nam chính thức bước vào giai đoạn già hóa dân số năm 2011,', '<p>Chi tiết hoạt động soạn tại đ&acirc;y.</p>', 'cua cuon cong nghe hien dai - thong minh nam 2019 viet nam chinh thuc buoc vao giai doan gia hoa dan so nam 2011, viet nam chinh thuc buoc vao giai doan gia hoa dan so nam 2011,', '2019-04-19 22:50:56', '2019-04-19', 44, 1),
(19, 'CỬA CUỐN CÔNG NGHỆ HIỆN ĐẠI - THÔNG MINH NĂM 2019', 0, 'hoat_dong_1555689057.jpg', '', 'Việt Nam chính thức bước vào giai đoạn già hóa dân số năm 2011, Việt Nam chính thức bước vào giai đoạn già hóa dân số năm 2011,', '<p>Chi tiết hoạt động soạn tại đ&acirc;y.</p>', 'cua cuon cong nghe hien dai - thong minh nam 2019 viet nam chinh thuc buoc vao giai doan gia hoa dan so nam 2011, viet nam chinh thuc buoc vao giai doan gia hoa dan so nam 2011,', '2019-04-19 22:50:57', '2019-04-19', 210, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `key_search` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `daycrea` date NOT NULL,
  `dayup` datetime NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoanh`
--

CREATE TABLE `khoanh` (
  `id` int(11) NOT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `daycrea` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoanh`
--

INSERT INTO `khoanh` (`id`, `image`, `daycrea`) VALUES
(5, 'thum_15556677891.png', '2019-04-19'),
(6, 'thum_15556677892.png', '2019-04-19'),
(51, 'thum_16172776020.jpg', '2021-04-01'),
(52, 'thum_16172776070.jpg', '2021-04-01'),
(53, 'thum_16172776130.jpg', '2021-04-01'),
(54, 'thum_16172776170.jpg', '2021-04-01'),
(55, 'thum_16172807500.jpg', '2021-04-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luotxem`
--

CREATE TABLE `luotxem` (
  `id` int(11) NOT NULL,
  `race` int(11) NOT NULL,
  `dayup` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `luotxem`
--

INSERT INTO `luotxem` (`id`, `race`, `dayup`) VALUES
(1, 81, '2019-04-22'),
(2, 43, '2019-04-23'),
(3, 44, '2019-04-24'),
(4, 22, '2019-04-25'),
(5, 28, '2019-04-26'),
(6, 34, '2019-04-27'),
(7, 24, '2019-04-28'),
(8, 25, '2019-04-29'),
(9, 10, '2019-04-30'),
(10, 15, '2019-05-01'),
(11, 11, '2019-05-02'),
(12, 14, '2019-05-03'),
(13, 14, '2019-05-04'),
(14, 17, '2019-05-05'),
(15, 33, '2019-05-06'),
(16, 20, '2019-05-07'),
(17, 23, '2019-05-08'),
(18, 29, '2019-05-09'),
(19, 23, '2019-05-10'),
(20, 21, '2019-05-11'),
(21, 22, '2019-05-12'),
(22, 13, '2019-05-13'),
(23, 16, '2019-05-14'),
(24, 15, '2019-05-15'),
(25, 36, '2019-05-16'),
(26, 20, '2019-05-17'),
(27, 18, '2019-05-18'),
(28, 28, '2019-05-19'),
(29, 14, '2019-05-20'),
(30, 24, '2019-05-21'),
(31, 35, '2019-05-22'),
(32, 39, '2019-05-23'),
(33, 30, '2019-05-24'),
(34, 18, '2019-05-25'),
(35, 24, '2019-05-26'),
(36, 53, '2019-05-27'),
(37, 77, '2019-05-28'),
(38, 140, '2019-05-29'),
(39, 112, '2019-05-30'),
(40, 293, '2019-05-31'),
(41, 27, '2019-06-01'),
(42, 30, '2019-06-02'),
(43, 83, '2019-06-03'),
(44, 96, '2019-06-04'),
(45, 79, '2019-06-05'),
(46, 121, '2019-06-06'),
(47, 83, '2019-06-07'),
(48, 31, '2019-06-08'),
(49, 27, '2019-06-09'),
(50, 45, '2019-06-10'),
(51, 142, '2019-06-11'),
(52, 115, '2019-06-12'),
(53, 72, '2019-06-13'),
(54, 81, '2019-06-14'),
(55, 69, '2019-06-15'),
(56, 80, '2019-06-16'),
(57, 77, '2019-06-17'),
(58, 70, '2019-06-18'),
(59, 72, '2019-06-19'),
(60, 65, '2019-06-20'),
(61, 45, '2019-06-21'),
(62, 49, '2019-06-22'),
(63, 77, '2019-06-23'),
(64, 60, '2019-06-24'),
(65, 43, '2019-06-25'),
(66, 35, '2019-06-26'),
(67, 30, '2019-06-27'),
(68, 35, '2019-06-28'),
(69, 41, '2019-06-29'),
(70, 81, '2019-06-30'),
(71, 98, '2019-07-01'),
(72, 54, '2019-07-02'),
(73, 28, '2019-07-03'),
(74, 34, '2019-07-04'),
(75, 48, '2019-07-05'),
(76, 45, '2019-07-06'),
(77, 38, '2019-07-07'),
(78, 52, '2019-07-08'),
(79, 62, '2019-07-09'),
(80, 75, '2019-07-10'),
(81, 84, '2019-07-11'),
(82, 93, '2019-07-12'),
(83, 57, '2019-07-13'),
(84, 42, '2019-07-14'),
(85, 103, '2019-07-15'),
(86, 95, '2019-07-16'),
(87, 54, '2019-07-17'),
(88, 59, '2019-07-18'),
(89, 82, '2019-07-19'),
(90, 232, '2019-07-20'),
(91, 57, '2019-07-21'),
(92, 47, '2019-07-22'),
(93, 47, '2019-07-23'),
(94, 51, '2019-07-24'),
(95, 51, '2019-07-25'),
(96, 86, '2019-07-26'),
(97, 53, '2019-07-27'),
(98, 66, '2019-07-28'),
(99, 49, '2019-07-29'),
(100, 57, '2019-07-30'),
(101, 52, '2019-07-31'),
(102, 50, '2019-08-01'),
(103, 62, '2019-08-02'),
(104, 46, '2019-08-03'),
(105, 48, '2019-08-04'),
(106, 51, '2019-08-05'),
(107, 48, '2019-08-06'),
(108, 61, '2019-08-07'),
(109, 62, '2019-08-08'),
(110, 55, '2019-08-09'),
(111, 52, '2019-08-10'),
(112, 45, '2019-08-11'),
(113, 49, '2019-08-12'),
(114, 48, '2019-08-13'),
(115, 64, '2019-08-14'),
(116, 49, '2019-08-15'),
(117, 51, '2019-08-16'),
(118, 38, '2019-08-17'),
(119, 57, '2019-08-18'),
(120, 111, '2019-08-19'),
(121, 44, '2019-08-20'),
(122, 66, '2019-08-21'),
(123, 43, '2019-08-22'),
(124, 945, '2019-08-23'),
(125, 178, '2019-08-24'),
(126, 76, '2019-08-25'),
(127, 64, '2019-08-26'),
(128, 58, '2019-08-27'),
(129, 108, '2019-08-28'),
(130, 53, '2019-08-29'),
(131, 78, '2019-08-30'),
(132, 93, '2019-08-31'),
(133, 95, '2019-09-01'),
(134, 71, '2019-09-02'),
(135, 71, '2019-09-03'),
(136, 480, '2019-09-04'),
(137, 138, '2019-09-05'),
(138, 137, '2019-09-06'),
(139, 113, '2019-09-07'),
(140, 58, '2019-09-08'),
(141, 736, '2019-09-09'),
(142, 78, '2019-09-10'),
(143, 73, '2019-09-11'),
(144, 69, '2019-09-12'),
(145, 73, '2019-09-13'),
(146, 72, '2019-09-14'),
(147, 62, '2019-09-15'),
(148, 97, '2019-09-16'),
(149, 157, '2019-09-17'),
(150, 74, '2019-09-18'),
(151, 55, '2019-09-19'),
(152, 176, '2019-09-20'),
(153, 59, '2019-09-21'),
(154, 41, '2019-09-22'),
(155, 54, '2019-09-23'),
(156, 70, '2019-09-24'),
(157, 54, '2019-09-25'),
(158, 99, '2019-09-26'),
(159, 71, '2019-09-27'),
(160, 79, '2019-09-28'),
(161, 94, '2019-09-29'),
(162, 76, '2019-09-30'),
(163, 236, '2019-10-01'),
(164, 138, '2019-10-02'),
(165, 55, '2019-10-03'),
(166, 80, '2019-10-04'),
(167, 132, '2019-10-05'),
(168, 441, '2019-10-06'),
(169, 195, '2019-10-07'),
(170, 102, '2019-10-08'),
(171, 235, '2019-10-09'),
(172, 58, '2019-10-10'),
(173, 67, '2019-10-11'),
(174, 64, '2019-10-12'),
(175, 57, '2019-10-13'),
(176, 84, '2019-10-14'),
(177, 75, '2019-10-15'),
(178, 91, '2019-10-16'),
(179, 88, '2019-10-17'),
(180, 104, '2019-10-18'),
(181, 103, '2019-10-19'),
(182, 94, '2019-10-20'),
(183, 77, '2019-10-21'),
(184, 72, '2019-10-22'),
(185, 43, '2019-10-23'),
(186, 77, '2019-10-24'),
(187, 51, '2019-10-25'),
(188, 71, '2019-10-26'),
(189, 77, '2019-10-27'),
(190, 56, '2019-10-28'),
(191, 95, '2019-10-29'),
(192, 67, '2019-10-30'),
(193, 66, '2019-10-31'),
(194, 58, '2019-11-01'),
(195, 60, '2019-11-02'),
(196, 53, '2019-11-03'),
(197, 83, '2019-11-04'),
(198, 714, '2019-11-05'),
(199, 183, '2019-11-06'),
(200, 190, '2019-11-07'),
(201, 77, '2019-11-08'),
(202, 198, '2019-11-09'),
(203, 56, '2019-11-10'),
(204, 49, '2019-11-11'),
(205, 37, '2019-11-12'),
(206, 71, '2019-11-13'),
(207, 83, '2019-11-14'),
(208, 166, '2019-11-15'),
(209, 39, '2019-11-16'),
(210, 118, '2019-11-17'),
(211, 158, '2019-11-18'),
(212, 188, '2019-11-19'),
(213, 85, '2019-11-20'),
(214, 83, '2019-11-21'),
(215, 106, '2019-11-22'),
(216, 92, '2019-11-23'),
(217, 42, '2019-11-24'),
(218, 69, '2019-11-25'),
(219, 54, '2019-11-26'),
(220, 94, '2019-11-27'),
(221, 74, '2019-11-28'),
(222, 60, '2019-11-29'),
(223, 74, '2019-11-30'),
(224, 104, '2019-12-01'),
(225, 73, '2019-12-02'),
(226, 53, '2019-12-03'),
(227, 193, '2019-12-04'),
(228, 55, '2019-12-05'),
(229, 41, '2019-12-06'),
(230, 52, '2019-12-07'),
(231, 58, '2019-12-08'),
(232, 119, '2019-12-09'),
(233, 70, '2019-12-10'),
(234, 177, '2019-12-11'),
(235, 50, '2019-12-12'),
(236, 54, '2019-12-13'),
(237, 48, '2019-12-14'),
(238, 35, '2019-12-15'),
(239, 91, '2019-12-16'),
(240, 168, '2019-12-17'),
(241, 55, '2019-12-18'),
(242, 48, '2019-12-19'),
(243, 58, '2019-12-20'),
(244, 70, '2019-12-21'),
(245, 66, '2019-12-22'),
(246, 52, '2019-12-23'),
(247, 69, '2019-12-24'),
(248, 128, '2019-12-25'),
(249, 89, '2019-12-26'),
(250, 88, '2019-12-27'),
(251, 112, '2019-12-28'),
(252, 67, '2019-12-29'),
(253, 54, '2019-12-30'),
(254, 64, '2019-12-31'),
(255, 64, '2020-01-01'),
(256, 254, '2020-01-02'),
(257, 49, '2020-01-03'),
(258, 69, '2020-01-04'),
(259, 132, '2020-01-05'),
(260, 72, '2020-01-06'),
(261, 64, '2020-01-07'),
(262, 39, '2020-01-08'),
(263, 74, '2020-01-09'),
(264, 80, '2020-01-10'),
(265, 44, '2020-01-11'),
(266, 55, '2020-01-12'),
(267, 45, '2020-01-13'),
(268, 79, '2020-01-14'),
(269, 84, '2020-01-15'),
(270, 33, '2020-01-16'),
(271, 32, '2020-01-17'),
(272, 42, '2020-01-18'),
(273, 46, '2020-01-19'),
(274, 112, '2020-01-20'),
(275, 119, '2020-01-21'),
(276, 117, '2020-01-22'),
(277, 34, '2020-01-23'),
(278, 88, '2020-01-24'),
(279, 96, '2020-01-25'),
(280, 73, '2020-01-26'),
(281, 51, '2020-01-27'),
(282, 71, '2020-01-28'),
(283, 98, '2020-01-29'),
(284, 53, '2020-01-30'),
(285, 67, '2020-01-31'),
(286, 87, '2020-02-01'),
(287, 49, '2020-02-02'),
(288, 147, '2020-02-03'),
(289, 140, '2020-02-04'),
(290, 77, '2020-02-05'),
(291, 33, '2020-02-06'),
(292, 56313, '2020-02-07'),
(293, 60, '2020-02-08'),
(294, 51, '2020-02-09'),
(295, 53485, '2020-02-10'),
(296, 473, '2020-02-11'),
(297, 44, '2020-02-12'),
(298, 56, '2020-02-13'),
(299, 69, '2020-02-14'),
(300, 48, '2020-02-15'),
(301, 45, '2020-02-16'),
(302, 84, '2020-02-17'),
(303, 49, '2020-02-18'),
(304, 57, '2020-02-19'),
(305, 62, '2020-02-20'),
(306, 84, '2020-02-21'),
(307, 59, '2020-02-22'),
(308, 146, '2020-02-23'),
(309, 106, '2020-02-24'),
(310, 53, '2020-02-25'),
(311, 60, '2020-02-26'),
(312, 81, '2020-02-27'),
(313, 200, '2020-02-28'),
(314, 92, '2020-02-29'),
(315, 163, '2020-03-01'),
(316, 100, '2020-03-02'),
(317, 59, '2020-03-03'),
(318, 67, '2020-03-04'),
(319, 68, '2020-03-05'),
(320, 72, '2020-03-06'),
(321, 74, '2020-03-07'),
(322, 64, '2020-03-08'),
(323, 56, '2020-03-09'),
(324, 54, '2020-03-10'),
(325, 73, '2020-03-11'),
(326, 73, '2020-03-12'),
(327, 61, '2020-03-13'),
(328, 57, '2020-03-14'),
(329, 180, '2020-03-15'),
(330, 82, '2020-03-16'),
(331, 77, '2020-03-17'),
(332, 146, '2020-03-18'),
(333, 82, '2020-03-19'),
(334, 89, '2020-03-20'),
(335, 120, '2020-03-21'),
(336, 99, '2020-03-22'),
(337, 83, '2020-03-23'),
(338, 76, '2020-03-24'),
(339, 93, '2020-03-25'),
(340, 87, '2020-03-26'),
(341, 104, '2020-03-27'),
(342, 65, '2020-03-28'),
(343, 287, '2020-03-29'),
(344, 77, '2020-03-30'),
(345, 70, '2020-03-31'),
(346, 71, '2020-04-01'),
(347, 89, '2020-04-02'),
(348, 59, '2020-04-03'),
(349, 13, '2020-04-04'),
(350, 10, '2020-04-05'),
(351, 10, '2020-04-06'),
(352, 11, '2020-04-07'),
(353, 10, '2020-04-09'),
(354, 10, '2020-04-10'),
(355, 11, '2020-04-11'),
(356, 10, '2020-04-12'),
(357, 10, '2020-04-13'),
(358, 6, '2020-04-14'),
(359, 5, '2020-04-15'),
(360, 1, '2020-04-17'),
(361, 1, '2020-04-22'),
(362, 1, '2020-04-24'),
(363, 1, '2020-04-29'),
(364, 1, '2020-05-03'),
(365, 1, '2020-05-05'),
(366, 1, '2020-05-07'),
(367, 1, '2020-05-08'),
(368, 1, '2020-08-24'),
(369, 1, '2020-09-29'),
(370, 245, '2021-03-31'),
(371, 535, '2021-04-01'),
(372, 205, '2021-04-02'),
(373, 106, '2021-04-03'),
(374, 204, '2021-04-04'),
(375, 311, '2021-04-05'),
(376, 174, '2021-04-06'),
(377, 204, '2021-04-07'),
(378, 230, '2021-04-08'),
(379, 178, '2021-04-09'),
(380, 92, '2021-04-10'),
(381, 132, '2021-04-11'),
(382, 129, '2021-04-12'),
(383, 615, '2021-04-13'),
(384, 11, '2021-04-14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `luong` int(11) NOT NULL,
  `cmnd1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cmnd2` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `daycrea` date NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien_luong`
--

CREATE TABLE `nhanvien_luong` (
  `id` int(11) NOT NULL,
  `id_nv` int(11) NOT NULL,
  `luong` int(11) NOT NULL,
  `luong_thuc` int(11) NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  `code_time` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `daycrea` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaphang`
--

CREATE TABLE `nhaphang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_dt` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tratruoc` int(11) NOT NULL,
  `daycrea` date NOT NULL,
  `dayup` datetime NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhaphang`
--

INSERT INTO `nhaphang` (`id`, `id_user`, `id_dt`, `total`, `tratruoc`, `daycrea`, `dayup`, `active`) VALUES
(1, 18, 1, 1000000, 0, '2021-04-01', '2021-04-01 20:20:37', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaphang_detail`
--

CREATE TABLE `nhaphang_detail` (
  `id` int(11) NOT NULL,
  `id_nh` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `daycrea` date NOT NULL,
  `dayup` datetime NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhaphang_detail`
--

INSERT INTO `nhaphang_detail` (`id`, `id_nh`, `id_sp`, `soluong`, `price`, `daycrea`, `dayup`, `active`) VALUES
(1, 1, 139, 1, 1000000, '2021-04-01', '2021-04-01 20:20:37', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `id_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image_slide` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `key_search` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `news` tinyint(4) NOT NULL,
  `sale` tinyint(4) NOT NULL,
  `price` int(11) NOT NULL,
  `short_info` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `info` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `thongso` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `daycrea` date NOT NULL,
  `dayup` datetime NOT NULL,
  `race` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `id_type`, `image`, `image_slide`, `key_search`, `news`, `sale`, `price`, `short_info`, `info`, `thongso`, `daycrea`, `dayup`, `race`, `active`) VALUES
(138, 'Cửa kéo công nghệ Đài Loan', '31.51', 'tmkt_1617277822.jpg', '', 'cua keo cong nghe dai loan cua keo cua keo cong nghe dai loan ', 0, 0, 1000000, '', '', '<p>&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">U : d&agrave;y từ 0.6 mm &ndash; 0.7 mm &ndash; 0.8 mm &ndash; 0.9 mm &ndash; 1 mm</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">M&agrave;u : kem, xanh ngọc, x&aacute;m.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">Nh&iacute;p d&agrave;y : 1.8mm, m&agrave;u : trắng, kem</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">Độ d&agrave;y của l&aacute; : 0.24 mm &ndash; 0.26 mm &ndash; 0.28 mm &ndash; 0.3 mm &ndash; 0.35 mm &ndash; 0.4 mm</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">Độ d&agrave;y của nan (nh&iacute;p):</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nh&iacute;p (nan) &eacute;p: 0.45 mm &ndash; 0.5 mm &ndash; 0.6 mm &ndash; 0.7 mm &ndash; 0.8 mm.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nan (nh&iacute;p) đặc: 1.8 mm &ndash; 2 mm &ndash; 2.3 mm - 2.4 mm &ndash; 2.5 mm.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;&nbsp; &nbsp;</p>\r\n\r\n<p>&nbsp;\r\n<p>&nbsp;\r\n<p>&nbsp;</p>\r\n</p>\r\n</p>\r\n\r\n<p>&nbsp;</p>', '2021-04-01', '2021-04-01 19:25:12', 0, 1),
(139, 'Bình lưu điện YH', '34.55', 'tmkt_1617278176.jpg', '', 'binh luu dien yh binh luu dien binh luu dien chinh hang ', 0, 0, 1000000, '', '', '', '2021-04-01', '2021-04-01 18:56:43', 0, 1),
(140, 'Mô tơ JG 400kg', '33.56', 'tmkt_1617278344.jpg', '', 'mo to jg 400kg mo to mo to chinh hang ', 1, 5, 1000000, '', '', '', '2021-04-01', '2021-04-01 18:59:04', 0, 1),
(141, 'Newmatic (300kg-500kg-600kg)', '33.56', 'tmkt_1617278404.jpg', '', 'newmatic (300kg-500kg-600kg) mo to mo to chinh hang ', 1, 5, 1000000, '', '', '', '2021-04-01', '2021-04-01 19:00:04', 0, 1),
(142, 'Cửa kéo công nghệ Đức', '31.52', 'tmkt_1617280225.jpg', '', 'cua keo cong nghe duc cua keo cua keo cong nghe duc ', 0, 5, 1000000, '', '<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n&nbsp;&nbsp; &nbsp;- <span style=\"font-size:14px\">To&agrave;n bộ nguy&ecirc;n liệu nhập từ Đức, sử dụng c&ocirc;ng nghệ Sơn tĩnh điện&nbsp;cao cấp n&ecirc;n rất bền với thời gian, kh&ocirc;ng bị rỉ s&eacute;t, sản phẩm sử dụng l&acirc;u d&agrave;i kh&ocirc;ng phải sơn sửa lại h&agrave;ng năm như c&aacute;c loại cửa xếp sắt th&ocirc;ng thường, m&agrave;u sắc phong ph&uacute;.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">- Tr&ecirc;n th&acirc;n U, l&aacute; v&agrave; nh&iacute;p được tạo g&acirc;n to&agrave;n bộ, l&agrave;m cho khung cửa chắc chắn hơn.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">- Nan ch&eacute;o ( Nh&iacute;p ) cửa đan ch&eacute;o 5&nbsp;(Ch&eacute;o 5 d&agrave;i 90cm giằng 5 cặp U với nhau) c&oacute; t&iacute;nh ưu việt hơn so với cửa ch&eacute;o 3: Tạo cho cửa chắc, đẹp hơn, c&aacute;c cặp U được k&eacute;o ra đều hơn.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">- Ma s&aacute;t giữa c&aacute;c chi tiết cửa được giảm nhờ c&aacute;c đệm nhựa PA chịu m&agrave;i m&ograve;n. Do đ&oacute; sẽ kh&ocirc;ng c&oacute; tiếng ồn, l&agrave;m cho cửa rất &ecirc;m khi hoạt động.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">- Mỗi cặp U cửa c&oacute; một v&ograve;ng bi treo Nhật n&ecirc;n rất nhẹ nh&agrave;ng v&agrave; si&ecirc;u nhẹ khi k&eacute;o cửa.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">- M&agrave;u sắc, kiểu d&aacute;ng phong ph&uacute;, nhờ sự phối m&agrave;u h&agrave;i h&ograve;a giữa U, l&aacute; v&agrave; nh&iacute;p cửa.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;&nbsp; &nbsp;</p>\r\n\r\n<p>&nbsp;\r\n<p>&nbsp;\r\n<p>&nbsp;</p>\r\n</p>\r\n</p>\r\n\r\n<p>&nbsp;</p>', '<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">Độ d&agrave;y của U : 1mm - 1.2mm &ndash; 1.3mm &ndash; 1.4mm &ndash; 1.5mm</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">Độ d&agrave;y của l&aacute; : 0.3mm &ndash; 0.35mm &ndash; 0.4mm</span></p>\r\n\r\n<p>&nbsp;\r\n<p>&nbsp;\r\n<p>&nbsp;</p>\r\n</p>\r\n</p>\r\n\r\n<p>&nbsp;</p>', '2021-04-01', '2021-04-01 19:31:07', 0, 1),
(145, 'Cửa cuốn công nghệ Úc', '32.50', 'tmkt_1617280952.jpg', '', 'cua cuon cong nghe uc cua cuon cua cuon cong nghe uc ', 0, 0, 1000000, '', '<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;&nbsp;<br />\r\n&nbsp;&nbsp; &nbsp;<strong><span style=\"color:#b22222\"><span style=\"font-size:14px\">Thiết bị điều khiển</span></span></strong><br />\r\n&nbsp;&nbsp; &nbsp;<strong><span style=\"color:#b22222\"><span style=\"font-size:14px\">Đặc t&iacute;nh sản phẩm</span></span></strong><br />\r\n<br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"color:#b22222\"><strong><span style=\"font-size:14px\">Hệ thống l&ocirc; cuốn &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span></strong></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#b22222\"><strong><span style=\"font-size:14px\">&nbsp;Hệ thống cửa ti&ecirc;u chuẩn</span></strong></span><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"color:#b22222\"><strong><span style=\"font-size:14px\">Hệ thống thanh đấy, gi&aacute; đỡ, ray dẫn hướng</span></strong></span><br />\r\n&nbsp;&nbsp; &nbsp;<strong><span style=\"color:#b22222\"><span style=\"font-size:14px\">Hệ thống m&ocirc; tơ</span></span></strong><br />\r\n&nbsp;&nbsp; &nbsp;<strong><span style=\"color:#b22222\"><span style=\"font-size:14px\">K&iacute;ch thước lắp đặt cơ bản</span></span></strong><br />\r\n&nbsp;&nbsp; &nbsp;<strong><span style=\"color:#b22222\"><span style=\"font-size:14px\">Bản vẽ lắp đặt cơ bản</span></span></strong><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"color:#b22222\"><strong><span style=\"font-size:14px\">Ray lắp &acirc;m tường</span></strong></span></p>', '<p><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">Th&acirc;n cửa l&agrave;m bằng th&eacute;p hợp kim Newmax&nbsp;&ndash; Technology of Australia</span><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">M&agrave;u sắc: V&agrave;ng kem(NC#2) &ndash; Xanh ngọc( NC#3)</span><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">Độ d&agrave;y: 0.50 &ndash; 0.52mm</span><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">Kích thước t&ocirc;́i đa: 30m2 ( cao 5m x rộng 6m)</span></p>', '2021-04-01', '2021-04-05 08:02:30', 0, 1),
(144, 'Cửa cuốn công nghệ Đài Loan', '32.49', 'tmkt_1617280587.jpg', '', 'cua cuon cong nghe dai loan cua cuon cua cuon cong nghe dai loan ', 0, 0, 0, '', '<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;<span style=\"font-size:14px\">L&aacute; cửa cuốn với c&aacute;c độ d&agrave;y kh&aacute;c nhau.</span><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '<p><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">M&agrave;u sắc: V&agrave;ng Kem</span><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">Độ d&agrave;y: 0.7mm( +- 0,05mm )</span><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">Chất liệu: Th&eacute;p mạ m&agrave;u, inox.</span><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">Nan l&aacute; được l&agrave;m từ th&eacute;p mạ kẽm sơn tĩnh điện kh&ocirc;ng gỉ sắt n&ecirc;n rất bền với thời gian</span></p>\r\n\r\n<p><br />\r\n&nbsp;&nbsp; &nbsp;<span style=\"font-size:14px\">L&aacute; cửa cuốn với c&aacute;c độ d&agrave;y kh&aacute;c nhau.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2021-04-01', '2021-04-08 08:52:28', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham_type_1`
--

CREATE TABLE `sanpham_type_1` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dayup` datetime NOT NULL,
  `active` tinyint(4) NOT NULL,
  `id_out` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham_type_1`
--

INSERT INTO `sanpham_type_1` (`id`, `name`, `dayup`, `active`, `id_out`) VALUES
(34, 'Bình lưu điện', '2021-04-01 18:39:10', 1, 0),
(33, 'Mô tơ', '2021-04-01 18:39:04', 1, 0),
(32, 'Cửa cuốn', '2021-04-01 18:38:53', 1, 0),
(31, 'Cửa kéo', '2021-04-01 18:38:44', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham_type_2`
--

CREATE TABLE `sanpham_type_2` (
  `id` int(11) NOT NULL,
  `id_1` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dayup` datetime NOT NULL,
  `active` tinyint(4) NOT NULL,
  `id_out` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham_type_2`
--

INSERT INTO `sanpham_type_2` (`id`, `id_1`, `name`, `dayup`, `active`, `id_out`) VALUES
(49, 32, 'Cửa cuốn công nghệ Đài Loan', '2021-04-01 18:39:41', 1, 0),
(50, 32, 'Cửa cuốn công nghệ Úc', '2021-04-01 18:40:00', 1, 0),
(51, 31, 'Cửa kéo công nghệ Đài Loan', '2021-04-01 18:40:17', 1, 1),
(52, 31, 'Cửa kéo công nghệ Đức', '2021-04-01 18:40:31', 1, 1),
(53, 32, 'Cửa cuốn mô tơ', '2021-04-01 18:40:42', 1, 0),
(54, 32, 'Cửa cuốn kéo tay', '2021-04-01 18:40:55', 1, 0),
(55, 34, 'Bình lưu điện chính hãng', '2021-04-01 18:54:30', 1, 1),
(56, 33, 'Mô tơ chính hãng', '2021-04-01 18:58:13', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtin`
--

CREATE TABLE `thongtin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtin`
--

INSERT INTO `thongtin` (`id`, `name`, `info`) VALUES
(1, 'name', 'CÔNG TY THNN MTV HẢI LIÊN KT'),
(2, 'address', '212 Hùng Vương, TT. Plei Kần, H. Ngọc Hồi, Tỉnh Kon Tum'),
(3, 'phone', '0359 114 124'),
(5, 'facebook', 'https://www.facebook.com/Quangcaokontum77/'),
(4, 'email', 'lananh9292@gmail.com'),
(6, 'website', 'hailienkt.com'),
(7, 'zalo', '0986058964'),
(8, 'address1', '325 Phạm Văn Đồng, Tp Pleiku'),
(9, 'phone1', '0260 3 586 386');
INSERT INTO `thongtin` (`id`, `name`, `info`) VALUES
(10, 'gioithieu', '<p style=\"text-align:center\"><strong>C&Ocirc;NG TY TNHH MTV HẢI LI&Ecirc;N KT</strong></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p><strong>Cơ sở Ch&uacute;ng&nbsp; t&ocirc;i chuy&ecirc;n thi c&ocirc;ng, lắp đặt, tư vấn về:</strong></p>\r\n\r\n<p><strong>Cửa nh&ocirc;m &ndash; Cửa cuốn &ndash; Cửa k&eacute;o Đ&agrave;i Loan - Cửa k&eacute;o c&ocirc;ng nghệ Đức.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"data:image/jpeg;base64,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\" />&nbsp; &nbsp; &nbsp;<img alt=\"Kết quả hình ảnh cho cơ sở sản xuất  cửa kéo\" src=\"data:image/jpeg;base64,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\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Với một đội ngũ thợ chuy&ecirc;n nghiệp, đảm bảo đem đến cho kh&aacute;ch h&agrave;ng sản phẩm với kỹ thuật ti&ecirc;n tiến, thời gian nhanh ch&oacute;ng. Sản phẩm của ch&uacute;ng t&ocirc;i c&oacute; nhiều gi&aacute; th&agrave;nh để kh&aacute;ch h&agrave;ng lựa chọn, ph&ugrave; hợp cho c&aacute;c kh&aacute;ch h&agrave;ng y&ecirc;u cầu sản phẩm cao cấp đến c&aacute;c c&ocirc;ng ty thu&ecirc; văn ph&ograve;ng, thu&ecirc; nh&agrave; cần gi&aacute; mềm, gi&aacute; th&agrave;nh cạnh tranh.</p>\r\n\r\n<p>Ph&aacute;t triển c&ugrave;ng phương ch&acirc;m &ldquo;Kh&aacute;ch h&agrave;ng l&agrave; thượng đế&rdquo;, ch&uacute;ng t&ocirc;i mang đến cho kh&aacute;ch h&agrave;ng những sản phẩm, dịch vụ tốt nhất. Từ đ&oacute; l&agrave;m nền m&oacute;ng x&acirc;y dựng sự tin cậy, t&iacute;n nhiệm của kh&aacute;ch h&agrave;ng đối với sản phẩm dịch vụ, bước đầu tạo n&ecirc;n sự th&agrave;nh c&ocirc;ng của doanh nghiệp ch&uacute;ng t&ocirc;i. C&ocirc;ng ty&nbsp;<strong>chuy&ecirc;n cung cấp, sản xuất v&agrave; lắp đặt cửa cuốn, cửa k&eacute;o tại Kon Tum</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;<img alt=\"Kết quả hình ảnh cho cửa kéo\" src=\"data:image/jpeg;base64,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\" /><img alt=\"Kết quả hình ảnh cho cơ sở làm cửa kéo\" src=\"data:image/jpeg;base64,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\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>-&nbsp;Tư vấn lắp đặt c&aacute;c loại cửa cuốn - cửa k&eacute;o</p>\r\n\r\n			<p>- Vận chuyển v&agrave; lắp đặt</p>\r\n\r\n			<p>- Bảo h&agrave;nh</p>\r\n\r\n			<p><strong>Chuy&ecirc;n sản xuất &ndash;Lắp đặt:</strong></p>\r\n\r\n			<p>- Cửa nh&ocirc;m</p>\r\n\r\n			<p>- Cửa cuốn</p>\r\n\r\n			<p>- Sửa chữa c&aacute;c loại m&ocirc; tơ cửa cuốn&nbsp;</p>\r\n\r\n			<p>- Cửa k&eacute;o Đ&agrave;i Loan</p>\r\n\r\n			<p>- Sơn tĩnh điện cửa sắt gia c&ocirc;ng</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Sản phẩm dịch vụ:</strong></p>\r\n\r\n			<p>- Cửa k&eacute;o c&ocirc;ng nghệ Đ&agrave;i Loan</p>\r\n\r\n			<p>- Cửa cuốn c&ocirc;ng nghệ Đ&agrave;i Loan</p>\r\n\r\n			<p>- Cửa cuốn c&ocirc;ng nghệ Đức</p>\r\n\r\n			<p>- Cửa cuốn tấm liền c&ocirc;ng nghệ Australia</p>\r\n\r\n			<p>- Cửa k&eacute;o c&ocirc;ng nghệ Đức</p>\r\n\r\n			<p>- C&aacute;c loại m&ocirc; tơ</p>\r\n\r\n			<p>- B&igrave;nh lưu điện YH</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&Ocirc;NG TY TNHH MTV HẢI LI&Ecirc;N KT</strong></p>\r\n\r\n<p><strong>CƠ SỞ 1:</strong></p>\r\n\r\n<p><strong>Địa chỉ : Số 318 Phan Đ&igrave;nh Ph&ugrave;ng &ndash; Tổ 3 &ndash; P.Ng&ocirc; M&acirc;y - Tp.Kon Tum</strong></p>\r\n\r\n<p><strong>Điện thoại: 0603 856 368 &ndash; 0986 058 961</strong></p>\r\n\r\n<p><strong>CƠ SỞ 2:</strong></p>\r\n\r\n<p><strong>Địa chỉ:&nbsp;212 H&ugrave;ng Vương - T4 - TT Pleikần - Huyện Ngọc Hồ - Tỉnh Kon Tum</strong></p>\r\n\r\n<p><strong>Điện thoại:&nbsp;0603 881 714 - DĐ: 0988 527 815</strong></p>\r\n\r\n<p><strong>Email :&nbsp;</strong><strong><a href=\"mailto:hailien@gmail.com\">hailienkt@gmail.com</a></strong></p>');
INSERT INTO `thongtin` (`id`, `name`, `info`) VALUES
(11, 'ads', '<div class=\"block-banner\">\r\n       <div><img src=\"images/khoanh/thum_16172807500.jpg\" alt=\"\"></div>\r\n</div>'),
(12, 'the_title', 'Hải Liên Kon Tum'),
(13, 'the_keyword', 'cua cuon kon tum, cua keo kon tum'),
(14, 'the_descrip', 'Công ty TNHH MTV Hải Liên Kon Tum chuyên: Sản xuất và thi công cửa cuốn, cửa kéo các loại. Uy tín - Chất lượng - Giá cả hợp lý'),
(15, 'baoduong', '<p>Soạn chi tiết tại đ&acirc;y!</p>'),
(16, 'youtube', 'https://www.youtube.com/'),
(17, 'mst', '6101157294'),
(18, 'giamdoc', 'Vũ Thị Nguyên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tieuchi`
--

CREATE TABLE `tieuchi` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `short_info` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `tt` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tieuchi`
--

INSERT INTO `tieuchi` (`id`, `name`, `image`, `short_info`, `tt`, `active`) VALUES
(1, 'AN TOÀN - TIỆN DỤNG', 'images/khoanh/thum_15556884831.png', 'Tích hợp công nghệ truyền động tiên tiến với khả năng mở cửa thoát hiểm khi khẩn cấp nhờ bộ chốt li hợp. Kết hợp hệ thống đảo chiều khi gặp chướng ngại vật giúp sản phẩm vận hành an toàn, không gây nguy hiểm.', 1, 1),
(2, 'HIỆN ĐẠI - THÔNG MINH', 'images/khoanh/thum_15556884832.png', 'Sở hữu dây chuyền sản xuất hiện đại và đội ngũ kỹ sư chất lượng cao, Cửa Phúc Quang tự hào mang tới cho bạn sản phẩm cao cấp, chính hãng đáp ứng các tiêu chí HIỆN ĐẠI - THÔNG MINH vượt trội', 3, 1),
(10, 'ĐỒNG BỘ - ĐA DẠNG', 'images/khoanh/thum_15556884830.png', 'Được sản xuất, lắp ráp đồng bộ tại nhà máy, cửa cuốn Mitadoor đảm bảo chính xác 100% các thông số kỹ thuật giúp cửa vận hành ổn định, tuổi thọ cao.', 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `website`
--

CREATE TABLE `website` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `link_go` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `tt` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `website`
--

INSERT INTO `website` (`id`, `name`, `image`, `link_go`, `tt`, `active`) VALUES
(11, 'abbot', 'images/khoanh/thum_15556677892.png', '', 1, 1),
(12, 'beurer', 'images/khoanh/thum_15556677891.png', '', 2, 1),
(13, 'abbot', 'images/khoanh/thum_15556677892.png', '', 3, 1),
(14, 'abbot', 'images/khoanh/thum_15556677892.png', '', 5, 1),
(15, 'abbot', 'images/khoanh/thum_15556677892.png', '', 7, 1),
(16, 'beurer', 'images/khoanh/thum_15556677891.png', '', 4, 1),
(17, 'beurer', 'images/khoanh/thum_15556677891.png', '', 6, 1),
(18, 'beurer', 'images/khoanh/thum_15556677891.png', '', 8, 1),
(10, 'titadoor', 'images/khoanh/thum_15598148220.jpg', '', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xuathang`
--

CREATE TABLE `xuathang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `sale_percent` tinyint(4) NOT NULL,
  `sale_money` int(11) NOT NULL,
  `tratruoc` int(11) NOT NULL,
  `daycrea` date NOT NULL,
  `dayup` datetime NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `xuathang`
--

INSERT INTO `xuathang` (`id`, `id_user`, `id_kh`, `total`, `sale_percent`, `sale_money`, `tratruoc`, `daycrea`, `dayup`, `active`) VALUES
(1, 1, 0, 2000000, 0, 0, 0, '2019-04-19', '2019-04-19 23:38:22', 1),
(2, 18, 0, 0, 0, 0, 0, '2021-03-31', '2021-03-31 22:42:23', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xuathang_detail`
--

CREATE TABLE `xuathang_detail` (
  `id` int(11) NOT NULL,
  `id_xh` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `daycrea` date NOT NULL,
  `dayup` datetime NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `xuathang_detail`
--

INSERT INTO `xuathang_detail` (`id`, `id_xh`, `id_sp`, `soluong`, `price`, `daycrea`, `dayup`, `active`) VALUES
(1, 1, 4, 1, 1000000, '2019-04-19', '2019-04-19 23:38:22', 1),
(2, 1, 1, 1, 1000000, '2019-04-19', '2019-04-19 23:38:22', 1),
(3, 2, 131, 1, 0, '2021-03-31', '2021-03-31 22:42:23', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `youtube`
--

CREATE TABLE `youtube` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `link_go` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `tt` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chiphi`
--
ALTER TABLE `chiphi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `doitac`
--
ALTER TABLE `doitac`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoatdong`
--
ALTER TABLE `hoatdong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khoanh`
--
ALTER TABLE `khoanh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `luotxem`
--
ALTER TABLE `luotxem`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanvien_luong`
--
ALTER TABLE `nhanvien_luong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhaphang`
--
ALTER TABLE `nhaphang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhaphang_detail`
--
ALTER TABLE `nhaphang_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham_type_1`
--
ALTER TABLE `sanpham_type_1`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham_type_2`
--
ALTER TABLE `sanpham_type_2`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tieuchi`
--
ALTER TABLE `tieuchi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `xuathang`
--
ALTER TABLE `xuathang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `xuathang_detail`
--
ALTER TABLE `xuathang_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `chiphi`
--
ALTER TABLE `chiphi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `doitac`
--
ALTER TABLE `doitac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hoatdong`
--
ALTER TABLE `hoatdong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `khoanh`
--
ALTER TABLE `khoanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `luotxem`
--
ALTER TABLE `luotxem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=385;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhanvien_luong`
--
ALTER TABLE `nhanvien_luong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhaphang`
--
ALTER TABLE `nhaphang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `nhaphang_detail`
--
ALTER TABLE `nhaphang_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT cho bảng `sanpham_type_1`
--
ALTER TABLE `sanpham_type_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `sanpham_type_2`
--
ALTER TABLE `sanpham_type_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tieuchi`
--
ALTER TABLE `tieuchi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `website`
--
ALTER TABLE `website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `xuathang`
--
ALTER TABLE `xuathang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `xuathang_detail`
--
ALTER TABLE `xuathang_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
