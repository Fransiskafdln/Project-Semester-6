-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Agu 2021 pada 11.54
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_skm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_admin`
--

CREATE TABLE `d_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `admin_telp` int(20) NOT NULL,
  `admin_email` varchar(225) NOT NULL,
  `admin_alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `d_admin`
--

INSERT INTO `d_admin` (`admin_id`, `admin_nama`, `username`, `password`, `admin_telp`, `admin_email`, `admin_alamat`) VALUES
(3, 'Fransiska Fedelina Christover', 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 231333546, 'fransiskafdln@gmail.com', 'Jl.Permai Raya Blok N9/8 Cirebon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_kategori`
--

CREATE TABLE `d_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `d_kategori`
--

INSERT INTO `d_kategori` (`kategori_id`, `kategori_name`) VALUES
(1, 'Neon Box'),
(2, 'Huruf Timbul'),
(3, 'Shopsign'),
(4, 'Stand Banner\r\n'),
(10, 'Canopy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_produk`
--

CREATE TABLE `d_produk` (
  `produk_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `produk_nama` varchar(225) NOT NULL,
  `produk_harga` int(30) NOT NULL,
  `produk_deskripsi` text NOT NULL,
  `produk_img` varchar(225) NOT NULL,
  `produk_status` tinyint(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `d_produk`
--

INSERT INTO `d_produk` (`produk_id`, `kategori_id`, `produk_nama`, `produk_harga`, `produk_deskripsi`, `produk_img`, `produk_status`, `date_created`) VALUES
(18, 4, 'Paket Stand Banner 60 x 160 cm', 80000, '<p>&nbsp;</p>\r\n\r\n<p>Ukuran 60x160 cm</p>\r\n\r\n<p>harga <strong>sudah termasuk</strong> - tiang / stand - banner dengan bahan (<em><strong>premium</strong></em>)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>- bisa pilih desain dari katalog (tinggal kirim foto)</p>\r\n\r\n<p>- bisa file dari pembeli sendiri (pastikan resolusi file tinggi)</p>\r\n', 'produk1628774186.jpg', 1, '2021-08-12 13:16:26'),
(19, 2, 'Huruf Timbul Stainles LED 10cm 7 huruf', 560000, '<p>- Inisial Huruf timbul LED</p>\r\n\r\n<p>- Bahan dari sainles, kuningan, akrilik</p>\r\n\r\n<p>- Ketebalan pinising 2 cm dengan didalam nya di taman lampu LED yg bagus</p>\r\n', 'produk1628774532.jpg', 1, '2021-08-12 13:22:12'),
(20, 3, 'Shop Sign Ukuran 1,5m x 0,8m', 450000, '<p>Bahan Rangka Besi + Plat + Banner</p>\r\n', 'produk1628777722.jpg', 1, '2021-08-12 14:15:34'),
(21, 4, 'Stand Banner', 80000, '<p>sdf</p>\r\n', 'produk1629444191.jpg', 1, '2021-08-20 07:23:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `last` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `last`, `email`, `phone`, `password`) VALUES
(1, 'lala', 'lala', 'la@gmail.com', '087', '$2y$10$JhXxnrqKd3dHi77nFhw4G.WLwP8o8I9Wl7.yG9igmZ/HwldHzKNQu'),
(2, 'manda', 'nda', 'manda@gmail.com', '087', '$2y$10$0U0L/MImUoWVKQ9LsQprR.FWQy4sJLIazWgrNK1jep5eYj585EJ8e'),
(3, 'asyfa', 'gunawan', 'asyfagp@gmail.com', '085158511546', '$2y$10$Ch.mi3USrnP/W.seLSP7FeYYA8v3WIRmg0K9YsgQuOkqmyJ5JPgvq'),
(4, 'nica', 'jefanya', 'nj@gmail.com', '089519361436', '$2y$10$EvlO79YM8u9TrJFynkjHDOS0H3zJtCgI2PX0mM8qquqpjckEkgwL.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `d_admin`
--
ALTER TABLE `d_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `d_kategori`
--
ALTER TABLE `d_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `d_produk`
--
ALTER TABLE `d_produk`
  ADD PRIMARY KEY (`produk_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `d_admin`
--
ALTER TABLE `d_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `d_kategori`
--
ALTER TABLE `d_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `d_produk`
--
ALTER TABLE `d_produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
