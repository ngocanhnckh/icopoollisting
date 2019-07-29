-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 29, 2019 lúc 06:54 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `icopool`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ads`
--

CREATE TABLE `ads` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguoithue` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenhinh` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ads`
--

INSERT INTO `ads` (`id`, `name`, `nguoithue`, `tenhinh`, `description`) VALUES
(1, 'Kymco 50cc', 'bình', 'Huong dan Hoc gioi song tot 2019 (2)_1564324756.jpeg', '<p>abc</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ico`
--

CREATE TABLE `ico` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teamnpartner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `average` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Market` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ico`
--

INSERT INTO `ico` (`id`, `name`, `slug`, `Product`, `teamnpartner`, `average`, `Market`, `Description`) VALUES
(1, 'Oasis Labs', 'oasis-labs', '8.1', '9.8', '8.6', '8.5', NULL),
(2, 'CertiK', 'certik', '8.5', '9.5', '8.7', '9.5', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `icoactive`
--

CREATE TABLE `icoactive` (
  `id` int(11) NOT NULL,
  `icopool` varchar(255) NOT NULL,
  `ico` varchar(255) NOT NULL,
  `mincap` varchar(255) NOT NULL,
  `bonus` varchar(255) NOT NULL,
  `comm` varchar(255) NOT NULL,
  `raised` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `icoactive`
--

INSERT INTO `icoactive` (`id`, `icopool`, `ico`, `mincap`, `bonus`, `comm`, `raised`) VALUES
(1, 'ICO Dach', 'Oasis Labs', '-', '-', '-', 'ND'),
(2, 'ICO Dach', 'CertiK', '123', '321', '123', '321123'),
(3, 'Omega Block', 'Arcana', '0.15 ETH', '40%', '4%', '56 / 310 ETH');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `icopool`
--

CREATE TABLE `icopool` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numofparticipants` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tok_distr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `icopool`
--

INSERT INTO `icopool` (`id`, `name`, `slug`, `activeico`, `numofparticipants`, `tok_distr`, `rating`, `lang`, `access`, `created`, `addr`, `description`) VALUES
(1, 'ICO Dach', 'ico-dach', 'Oasis Labs', '2775', '46', '9', 'EN', 'unlock', '17.06.17', 'https://t.me/ICODACH_EN', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_07_24_065452_ico', 2),
(3, '2019_07_24_071831_admininfo', 3),
(4, '2019_07_24_082304_create_users', 4),
(6, '2019_07_24_084651_icopool', 5),
(7, '2019_07_24_090007_ico', 6),
(8, '2019_07_24_153249_ads', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `remember_token`, `created_at`, `updated_at`, `view`) VALUES
(1, 'Admin', 'admin', '$2y$10$O8N1uncd7nOyVMHBD1onwOHR/WSs566NgsoZYC23l60qMDu.uul7.', 'admin@gmail.com', NULL, NULL, '2019-07-26 05:49:11', 4);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ico`
--
ALTER TABLE `ico`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `icoactive`
--
ALTER TABLE `icoactive`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `icopool`
--
ALTER TABLE `icopool`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `ico`
--
ALTER TABLE `ico`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `icoactive`
--
ALTER TABLE `icoactive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `icopool`
--
ALTER TABLE `icopool`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
