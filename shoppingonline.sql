-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2020 lúc 05:28 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoppingonline`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(5) NOT NULL,
  `adminname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `adminname`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `cateId` int(5) UNSIGNED NOT NULL,
  `cateName` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `isShow` tinyint(1) DEFAULT NULL,
  `createDate` date DEFAULT NULL,
  `modifyDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`cateId`, `cateName`, `isShow`, `createDate`, `modifyDate`) VALUES
(1, 'Váy trễ vai', 0, '2020-09-06', '2020-09-06'),
(2, 'Váy hoa nhí', 0, '2020-09-06', '2020-09-06'),
(3, 'Váy cổ vuông', 0, '2020-09-06', '2020-09-06'),
(4, 'Váy bánh bèo', 0, '2020-09-06', '2020-09-06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `customerId` int(5) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `modifyDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioithieu`
--

CREATE TABLE `gioithieu` (
  `text` varchar(10000) NOT NULL,
  `textID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `gioithieu`
--

INSERT INTO `gioithieu` (`text`, `textID`) VALUES
('Quý khách hoàn toàn có thể yên tâm về chất lượng của từng sản phẩm mà chúng tôi cung cấp. Với đội ngũ nhân viên thân thiện, nhiệt tình, có trình độ chuyên môn về lĩnh vực Kinh doanh xuất ở chúng tôi hi vọng sẽ mang lại cho quý khách nhiều sự lựa chọn trong việc tìm kiếm và thưởng thức những cuốn sách hay, có giá trị.\r\n\r\nNobita.vn cam kết rằng sẽ không ngừng cải tiến và nâng cao chất lượng dịch vụ nhằm thỏa mãn tối đa nhu cầu của khách hàng. Cụ thể là:\r\n\r\n- Về hàng hóa:\r\n\r\n+ Hàng hóa phong phú, có giá trị cao.\r\n\r\n+ Sản phẩm mới được cập nhật thường xuyên.\r\n\r\n+ Sản phẩm đến tay khách hàng luôn đúng với những thông tin mô tả trên website Nobita.vn. \r\n\r\n- Về giá cả:\r\n\r\n+ Gía bán luôn thấp hơn hoặc bằng với giá bìa. Nobita.vn luôn có những chương trình giảm giá 30% cho những sản phẩm mới.\r\n\r\n- Dịch vụ:\r\n\r\n+ Bao sách Plastic Miễn Phí (Trừ những tựa sách quá khổ, quá nhỏ, sách dạng Hộp hoặc Flash card, sách bìa cứng)\r\n\r\n+ Hỗ trợ khách hàng từ 8h - 21h các ngày trong tuần.\r\n\r\n+ Giao hàng thu tiền tận nơi\r\n\r\n+ Giao hàng nhanh từ 1 – 2 ngày trên toàn quốc. Miễn phí vận chuyển với những đơn hàng ≥ 80.000đ \r\n\r\n+ Đặt hàng theo yêu cầu của Qúy khách.\r\n\r\n+ Phương thức thanh toán linh hoạt,…\r\n\r\nKhi cần sự giúp đỡ hoặc góp ý về chất lượng và dịch vụ của Nobita.vn,\r\n Quý khách có thể liên hệ với chúng tôi theo những địa chỉ sau để được giải đáp trong thời gian nhanh nhất:\r\n\r\nHotline: 0938 424 289\r\n\r\nEmail: admin@nobita.vn\r\n\r\nWebsite: http://www.nobita.vn\r\n\r\nFanpage: https://www.facebook.com/Nobita.vn\r\n\r\nĐịa chỉ: 25/5 Thăng Long, Phường 4, Quận Tân Bình, TP. Hồ Chí Minh\r\n\r\nNobita.vn – Nhà sách trên mạng hân hạnh được phục vụ Quý khách', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `orderId` int(5) UNSIGNED NOT NULL,
  `customerId` int(5) UNSIGNED DEFAULT NULL,
  `orderDate` date DEFAULT NULL,
  `orderCostTotal` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `orderId` int(5) UNSIGNED NOT NULL,
  `proId` int(5) UNSIGNED NOT NULL,
  `number` int(11) DEFAULT NULL,
  `orderDetailCost` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `proId` int(5) UNSIGNED NOT NULL,
  `proCateID` int(5) UNSIGNED NOT NULL,
  `proImage` varchar(255) DEFAULT NULL,
  `proName` varchar(255) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `proDesc` varchar(500) DEFAULT NULL,
  `proContent` text CHARACTER SET utf8 DEFAULT NULL,
  `proMadeIn` varchar(50) DEFAULT NULL,
  `proCost` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `isShow` tinyint(1) DEFAULT NULL,
  `createDate` date DEFAULT NULL,
  `modifyDate` date DEFAULT NULL,
  `proOrdered` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`proId`, `proCateID`, `proImage`, `proName`, `proDesc`, `proContent`, `proMadeIn`, `proCost`, `number`, `isShow`, `createDate`, `modifyDate`, `proOrdered`) VALUES
(1, 4, '101444845_172554990912347_5898551659086417205_n.jpg', 'MS01', NULL, 'Váy bánh bèo xinh xắn', NULL, 272000, NULL, NULL, NULL, NULL, NULL),
(2, 2, '104758710_145116247175794_7679352129476643985_n.jpg', 'MS02', NULL, 'Váy hoa nhí giảm giá', NULL, 177000, NULL, NULL, NULL, NULL, NULL),
(3, 3, '104674632_144518567235562_6438255612192137057_n.jpg', 'MS03', NULL, 'Váy cổ vuông xinh ', NULL, 210000, NULL, NULL, NULL, NULL, NULL),
(4, 1, '79260666_2719222445068341_5722217979576858903_n.jpg', 'MS04', NULL, 'Váy trễ vai mới về', NULL, 189000, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cateId`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`);

--
-- Chỉ mục cho bảng `gioithieu`
--
ALTER TABLE `gioithieu`
  ADD PRIMARY KEY (`textID`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `FK1` (`customerId`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`orderId`,`proId`),
  ADD KEY `proId` (`proId`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`proId`),
  ADD KEY `FK2` (`proCateID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `cateId` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `orderId` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `proId` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK1` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customerId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `order` (`orderId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`proId`) REFERENCES `product` (`proId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK2` FOREIGN KEY (`proCateID`) REFERENCES `category` (`cateId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
