-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2022 lúc 07:30 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ad`
--

CREATE TABLE `ad` (
  `idAdmin` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ad`
--

INSERT INTO `ad` (`idAdmin`, `username`, `email`, `password`) VALUES
(1, 'dang', 'dangdinh@gmail.com', 'abc123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `idCmt` int(11) NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  `idPost` int(11) DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `idGroup` int(11) NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  `idPost` int(11) DEFAULT NULL,
  `groupName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `postcategory`
--

CREATE TABLE `postcategory` (
  `idPCate` int(11) NOT NULL,
  `namePC` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `idPost` int(11) NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  `idPCate` int(11) DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'None',
  `created` datetime NOT NULL DEFAULT curdate(),
  `openDay` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`idPost`, `idUser`, `idPCate`, `title`, `content`, `images`, `address`, `created`, `openDay`) VALUES
(25, 2, NULL, 'Midtown Murder Mystery Scavenger Hunt', 'Time do something different', 'midtown.png', 'New York, NY', '2022-01-11 23:10:23', '2022-01-20'),
(26, NULL, NULL, 'Grand Central Murder Mystery & Scavenger Hunt', 'error', 'Sahaja Yoga.jpeg', 'New York, NY', '2022-01-12 09:34:04', '2022-01-20'),
(27, NULL, NULL, 'test ts', 'test ts', 'event-5.jpg', 'New York, NY', '2022-01-12 23:04:32', '2022-01-22'),
(30, NULL, NULL, 'Grand Central Murder Mystery & Scavenger Hunt', '\r\náđâsdấđa', 'Hunt-event.png', 'New York, NY', '2022-01-13 20:39:01', '2022-01-28'),
(31, NULL, NULL, 'Phong don', 'Phong Donn', 'Intro-2.jpg', 'Ha Noi', '2022-01-14 14:54:02', '2022-01-28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'Male',
  `birthday` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `email_verification_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`idUser`, `username`, `password`, `email`, `avatar`, `gender`, `birthday`, `status`, `email_verification_link`, `email_verified_at`) VALUES
(2, 'admin', 'abc123', 'admin@gmail.com', 'Meetup.png', 'Male', '0000-00-00', 0, '', NULL),
(8, 'pham trong bang', '12345', 'trongbang1501@gmail.com', NULL, 'Male', NULL, 0, 'cb6ac1006a55ce7a15bf5fe566cf1740832', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`idCmt`),
  ADD KEY `fk_cmt_user` (`idUser`),
  ADD KEY `fk_cmt_post` (`idPost`);

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`idGroup`),
  ADD KEY `fk_groups_user` (`idUser`),
  ADD KEY `fk_groups_post` (`idPost`);

--
-- Chỉ mục cho bảng `postcategory`
--
ALTER TABLE `postcategory`
  ADD PRIMARY KEY (`idPCate`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`idPost`),
  ADD KEY `fk_post_user` (`idUser`),
  ADD KEY `fk_pc_post` (`idPCate`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ad`
--
ALTER TABLE `ad`
  MODIFY `idAdmin` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `idCmt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `idGroup` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `postcategory`
--
ALTER TABLE `postcategory`
  MODIFY `idPCate` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `idPost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_cmt_post` FOREIGN KEY (`idPost`) REFERENCES `posts` (`idPost`),
  ADD CONSTRAINT `fk_cmt_user` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

--
-- Các ràng buộc cho bảng `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `fk_groups_post` FOREIGN KEY (`idPost`) REFERENCES `posts` (`idPost`),
  ADD CONSTRAINT `fk_groups_user` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_pc_post` FOREIGN KEY (`idPCate`) REFERENCES `postcategory` (`idPCate`),
  ADD CONSTRAINT `fk_post_user` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
