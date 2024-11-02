-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Bulan Mei 2024 pada 08.04
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formmbul`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `form`
--

CREATE TABLE `form` (
  `namaLengkap` varchar(60) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) DEFAULT NULL,
  `passwordHash` varchar(60) DEFAULT NULL,
  `noTelepon` varchar(15) DEFAULT NULL,
  `jenisKelamin` enum('pria','wanita') DEFAULT NULL,
  `tanggalLahir` varchar(12) DEFAULT NULL,
  `waktuSubmit` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `form`
--

INSERT INTO `form` (`namaLengkap`, `email`, `password`, `passwordHash`, `noTelepon`, `jenisKelamin`, `tanggalLahir`, `waktuSubmit`) VALUES
('DDDD', 'ddddddddd@DD', 'lllllllll', '$2y$10$iV6WVtXJY3iYLFewsBpFXOuHAaXCLk27yW2Uxs4XD/8vXsCT0.8.O', '0192029201', 'pria', '2024-05-28', '2024-05-20 06:00:17'),
('Indonesia', 'mms@gmail.com', 'gantengbingit', '$2y$10$C1oxfIAcLg.80OO5ZF9zy.0L/k0F2CkWWxXmA30WkCXJ5oqQmEMX.', '0192029201', 'pria', '2024-06-04', '2024-05-20 04:21:44'),
('coba lagi', 'muhGanteng@fs', 'lllllllllllll', '$2y$10$./ih/JhqHn7GVBwkjojz.u7Fb6npZVhLozRjQ/VPoP76c7B9JQz92', '00000000000', 'pria', '2024-05-28', '2024-05-20 05:57:57'),
('Muhammad Makbul N', 'muhmakbul6@gmail.com', 'dddddddddddddd', '$2y$10$/sDQN889JtRxQExW3FLtFOwt/sxLRWNr78rDOv8hZPEKrZmZI2gH2', '085342181132', 'pria', '2024-05-21', '2024-05-20 05:55:34'),
('Muhammad Makbul N', 'muhmakbul@gmail.com', 'kitakita', '$2y$10$WZvgCgWZr.Hc0JOM6myazu5/OVvHJk29efQc3W0Pj78Kr275wYwqS', '085342181132', 'pria', '2024-05-21', '2024-05-20 05:55:34'),
('makbul kita', 'sya@gmail.com', ',,,,,,,,,,,,,', '$2y$10$ZP9aiDdw1cVhvZGuO9wzEeUbD3L8xpYDCVBs0KrnmEAyRrr9q5Mkq', '043434343', 'pria', '2024-06-05', '2024-05-20 05:58:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
