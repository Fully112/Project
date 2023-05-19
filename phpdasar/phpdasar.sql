-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2023 pada 04.30
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarnovel`
--

CREATE TABLE `daftarnovel` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `author` varchar(100) NOT NULL,
  `sinopsis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daftarnovel`
--

INSERT INTO `daftarnovel` (`id`, `judul`, `author`, `sinopsis`) VALUES
(1, 'Solo Leveling', 'Chugong', 'Mengambil latar di dunia dimana muncul “Gate” yang menghubungkan antara dunia monster dan dunia manusia. Sejak Gate muncul, beberapa orang yang menerima kemampuan khusus atau disebut sebagai “Hunter” akan bertugas membasmi monster yang ada di dalam Gate.'),
(2, 'Second Life Ranker', 'Sa Do-Yeon', 'Yeon-woo memiliki saudara kembar yang menghilang lima tahun yang lalu. Suatu hari, arloji saku yang ditinggalkan oleh saudaranya kembali ke miliknya. Di dalam, ia menemukan buku harian tersembunyi yang direkam “Pada saat kamu mendengar ini, kurasa aku sudah mati ....”\r\n\r\nObelisk, Menara Dewa Matahari, sebuah dunia tempat beberapa alam semesta dan dimensi bersilangan. Di dunia ini, saudaranya menjadi korban pengkhianatan saat memanjat menara. Setelah mengetahui kebenaran, Yeon-woo memutuskan untuk memanjat menara bersama dengan buku harian saudara lelakinya.\r\n\r\n“Mulai sekarang, aku Cha Jeong-woo.”'),
(3, 'Nano Machine', 'Han Joong Wueol Ya', 'Chun Yeo Woon sejak kecil selalu ditimpa kemalangan. Setelah Ibunya meninggal, dia selalu di-bully dan menjadi target pembunuhan dari 6 klan di Demonic Cult yang membenci dia dan ibunya. Malangnya lagi, dia memiliki kemampuan bela diri yang paling buruk di antara anak-anak Pemimpin Demonic Cult lainnya. Sehingga kecil kemungkinan baginya untuk menjadi calon terkuat Lord Demonic Cult berikutnya.  Hingga kehidupannya berubah drastis setelah keturunannya dari masa depan muncul dihadapannya dan meng-install mesin Nano di tubuhnya.  Mesin Nano adalah mesin dengan teknologi termutakhir yang ditemukan di masa depan, yang bisa dipasang dan menyatu dengan tubuh seseorang.  Setelah menerima mesin Nano, kehidupannya pun berubah dan dia bersiap untuk merebut takhta Lord Demonic Cult.'),
(9, 'Max Level Returner', '--', '---                                       '),
(10, 'Omniscient Readers Viewpoint', 'Sing Shong', 'Omniscient Reader’s Viewpoint (ORV) karangan Sing Shong merupakan novel yang bercerita mengenai cerita dari novel favorit tokoh utama yang berjudul “The Ways to Survive in a Ruined World”, yang tiba-tiba jadi kenyataan'),
(11, 'The Divine Hunter', '--', '--'),
(12, 'Helmut The Forsaken Child', '--', '--'),
(13, 'Foreigner On The Periphery', 'Frost', 'Aku tidak ingin bekerja sama sekali. Tapi aku tidak punya pilihan. Di bumi di mana Manusia, Peri, Orc, Troll, Naga, dan imigran Alien tinggal, itu adalah pengulangan insiden yang tak ada habisnya. Ini adalah kisah tentang seorang pria yang harus bekerja secara rahasia selama 800 tahun karena dia akan mati jika tidak bekerja.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'aji', '$2y$10$/SCiQE23JNJqkEcSwim6SuANKzRdfLcVaWFCl7sEXI97iPfjPHcue'),
(2, 'ihwan', '$2y$10$Ft3s7.eCgEuFY4SH/FF3nOQG52Evm/UtRNi.jucgxw3NmZoZB.kXC'),
(4, 'rafi', '$2y$10$OhJhWEp5VEhwlXI8elmQxe29qNNbIHaVs6USiyAuopc4KS2Fy0cDa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftarnovel`
--
ALTER TABLE `daftarnovel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftarnovel`
--
ALTER TABLE `daftarnovel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
