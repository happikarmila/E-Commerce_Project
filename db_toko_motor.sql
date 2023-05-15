-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2023 pada 06.18
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_motor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE `merk` (
  `id` int(11) NOT NULL,
  `merk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `merk`
--

INSERT INTO `merk` (`id`, `merk`) VALUES
(1, 'Honda'),
(2, 'Yamaha'),
(3, 'Suzuki'),
(4, 'Kawasaki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `motor`
--

CREATE TABLE `motor` (
  `id` int(11) NOT NULL,
  `nama_motor` varchar(191) NOT NULL,
  `cc` int(11) NOT NULL,
  `harga` int(45) NOT NULL,
  `merk_id` int(45) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `motor`
--

INSERT INTO `motor` (`id`, `nama_motor`, `cc`, `harga`, `merk_id`, `stok`) VALUES
(1, 'Honda Beat', 110, 17000000, 1, 34),
(2, 'Honda CB150', 149, 20900000, 1, 23),
(3, 'Honda Genio', 100, 18270000, 1, 30),
(4, 'Honda PCX', 149, 43290000, 1, 21),
(5, 'Honda CBR250RR', 145, 73430000, 1, 11),
(6, 'Honda CRF150L', 149, 34740000, 1, 20),
(7, 'Yamaha MT-25', 250, 55940000, 2, 20),
(8, 'Yamaha Mio Z', 125, 15800000, 2, 10),
(9, 'Yamaha Byson FI', 150, 22950000, 2, 17),
(10, 'Yamaha Nmax', 155, 32260000, 2, 14),
(11, 'Yamaha XSR 155', 155, 36950000, 2, 19),
(12, 'Yamaha Aerox Connexted', 155, 20500000, 2, 15),
(13, 'Suzuki Smash FI', 113, 16850000, 3, 20),
(14, 'Suzuki Address', 113, 18800000, 3, 20),
(15, 'Suzuki Address', 113, 18800000, 3, 20),
(16, 'Suzuki Next Crossover', 113, 19000000, 3, 12),
(17, 'Suzuki Satria F150', 147, 26760000, 3, 15),
(18, 'Suzuki GSX S150', 150, 27300000, 3, 12),
(20, 'Kawasaki KLX 150', 114, 39500000, 4, 20),
(21, 'Kawasaki W175', 177, 34700000, 4, 23),
(22, 'Kawasaki Ninja 250', 249, 77530000, 4, 20),
(23, 'Kawasaki Vulcan S', 649, 189900000, 4, 20),
(24, 'Kawasaki Z900', 948, 250000000, 4, 20),
(25, 'Kawasaki Ninja H2', 998, 820000000, 4, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(191) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `motor_id` int(45) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama_pelanggan`, `alamat_pelanggan`, `motor_id`, `quantity`) VALUES
(54, 'Najwa Ramadhani', 'Bogor', 10, 1),
(60, 'Ashaz Rafasya Pradipta', 'Bekasi', 10, 1),
(69, 'Ihsan Kamil', 'Tasik', 1, 1),
(73, 'Muhammad Yusuf Maulana', 'Jakarta', 10, 1),
(74, 'Ressa Karmilah', 'Bogor', 2, 1),
(76, 'Sukma Wijaya', 'Bandung', 3, 1),
(77, 'Inan Sri', 'Bogor', 2, 1),
(80, 'Ahmad Yakub', 'Tanggerang', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_motor2` (`merk_id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan1` (`motor_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `merk`
--
ALTER TABLE `merk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `motor`
--
ALTER TABLE `motor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `motor`
--
ALTER TABLE `motor`
  ADD CONSTRAINT `fk_motor2` FOREIGN KEY (`merk_id`) REFERENCES `merk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan1` FOREIGN KEY (`motor_id`) REFERENCES `motor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
