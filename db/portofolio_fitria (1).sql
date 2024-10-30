-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Okt 2024 pada 23.58
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio_fitria`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `isi_about` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `isi_about`, `foto`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"text-align: justify; \">Someone who comes from a <b>Public Administration</b> graduate with a strong interest in learning new things and always open to new opportunities. Currently, I am <b>focused</b> on exploring my skills in web programming, starting from <b>basic HTML, CSS, JavaScript and PHP</b>. Although still in the early stages, I’m fully committed to refining my abilities in this field. I believe that my diverse background allows me to bring a unique perspective to every project I take on.</p>', 'profil-about.jpeg', '2024-10-30 05:33:17', '2024-10-30 06:21:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `ket_act` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `activity`
--

INSERT INTO `activity` (`id`, `ket_act`, `foto`, `created_at`, `update_at`) VALUES
(1, '<p>Dokumentasi pada saat kegiatan Relawan Pajak 2022</p>', 'relawan (1).jpeg', '2024-10-30 18:22:05', '2024-10-30 18:27:36'),
(2, '<p>Dokumentasi pada saat kegiatan JAMKOPNAS 2022</p>', 'jamkopnas.jpg', '2024-10-30 18:28:07', '2024-10-30 18:28:07'),
(3, '<p>Dokumentasi kegiatan pada saat P2MW 2023</p>', 'jalaninaja.jpeg', '2024-10-30 18:28:37', '2024-10-30 18:28:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `last_edu` text NOT NULL,
  `level_name` text NOT NULL,
  `isi_edu` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `education`
--

INSERT INTO `education` (`id`, `last_edu`, `level_name`, `isi_edu`, `updated_at`, `created_at`) VALUES
(1, 'Bachelor of Public Administration', 'STIAMI INSTITUTE (2020 - 2024)', '<ul><li>Skills : Management, Administration, Public Service, Government Tax</li><li>BNSP certificate of competency as a Public Policy Analyst</li><li>P2MW 2023 awardee organized by Ditjen Diktiristek, Kemendikbudristek in the Services and Trade category</li><li>Active in tax paper competition</li></ul>', '2024-10-30 07:19:17', '2024-10-30 07:19:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `nama_exp` text NOT NULL,
  `tempat_exp` text NOT NULL,
  `kegiatan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `experience`
--

INSERT INTO `experience` (`id`, `nama_exp`, `tempat_exp`, `kegiatan`, `created_at`, `update_at`) VALUES
(1, 'Tax Volunteer', 'Public Service, KPP Pratama Jakarta Menteng Dua, (April, 2022)', '<ul><li>Responsible for assisting taxpayers in filing individual income tax returns with forms 1770 and 1770S</li><li>Directing taxpayers to apply for EFIN for those who dont have or forget their EFIN</li><li>Answering questions from taxpayers about taxation.</li></ul>', '2024-10-30 07:52:00', '2024-10-30 07:58:07'),
(2, 'Jambore Koperasi Nasional (JAMKOPNAS) organized by FKKMI ', 'Public Relations and LO division, Graha Ragunan (Jul-Aug, 2022)', '<ul><li>Coordinated requests and delivered official letters to the Pemprov Jakarta and relevant ministries for venue and event permits.</li><li>Follow-up with the KEMENPORA regarding the request for trophies and certificates for JAMKOPNAS participants.</li><li>Established and maintained communication with government and private sectors for necessary event permissions and sponsorship arrangements.</li></ul>', '2024-10-30 07:53:11', '2024-10-30 07:58:29'),
(3, 'Jalaninaja.com (business plan)', 'as a leader, P2MW 2023', '<ul><li>Developed a business plan for an electric bike rental service.</li><li>Submitted business progress reports through the P2MW 2023 platform.</li><li>Established agreements with event organizers to set up promotional booths to enhance brand visibility.</li></ul>', '2024-10-30 07:55:06', '2024-10-30 07:55:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `judul_home` varchar(200) NOT NULL,
  `isi_home` varchar(300) NOT NULL,
  `nomor_wa` varchar(20) NOT NULL,
  `wa_link` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id`, `judul_home`, `isi_home`, `nomor_wa`, `wa_link`, `created_at`, `update_at`) VALUES
(4, 'FITRIA NUR AZIZAH', '<p>\"Web Programming is new thing for me to learn. However, I enjoy every process that I go through, as I believe that every process will not betray the results\"</p>', 'WA : 085893864638', 'https://wa.me/6285893864638', '2024-10-30 04:07:55', '2024-10-30 04:11:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `judul_project` text NOT NULL,
  `ket_project` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `portfolio`
--

INSERT INTO `portfolio` (`id`, `judul_project`, `ket_project`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'PPKD Jakarta Pusat Login Page', '<p style=\"text-align: justify; \">Halaman login PPKD ini dirancang menggunakan HTML dan Bootstrap, menampilkan logo PPKD Jakarta Pusat, navbar dengan tautan utama, dan form registrasi yang memungkinkan pengguna memasukkan email, username, serta password. Dilengkapi teks berjalan (marquee) untuk informasi kegiatan dan footer berisi copyright, halaman ini diatur agar responsif dan mudah diakses di berbagai perangkat.</p>', 'PPKD Login Page.jpeg', '2024-10-30 16:17:03', '2024-10-30 17:34:49'),
(2, 'Perpustakaan CRUD', '<div class=\"flex max-w-full flex-col flex-grow\"><div data-message-author-role=\"assistant\" data-message-id=\"35c2bd7b-0490-4520-ac53-9862672613c9\" dir=\"auto\" class=\"min-h-8 text-message flex w-full flex-col items-end gap-2 whitespace-normal break-words [.text-message+&amp;]:mt-5\" data-message-model-slug=\"gpt-4o-mini\"><div class=\"flex w-full flex-col gap-1 empty:hidden first:pt-[3px]\"><div class=\"markdown prose w-full break-words dark:prose-invert light\"><p><span style=\"\" apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" \"noto=\"\" emoji\";=\"\" font-size:=\"\" 16px;=\"\" background-color:=\"\" rgba(244,=\"\" 244,=\"\" 245,=\"\" 0.5);\"=\"\">Halaman perpustakaan ini dibuat dengan PHP dan MySQL untuk mengelola data peminjaman buku. Pengguna dapat menambah data peminjaman dengan informasi seperti nomor peminjaman, anggota, dan tanggal. Data disimpan dalam tabel detail_peminjaman, dan pengguna dapat melihat detail peminjaman berdasarkan nomor yang dipilih. Fitur soft delete diterapkan untuk penghapusan data, dengan desain user-friendly menggunakan form dan tabel.</span></p></div></div></div></div>', 'Perpustakaan CRUD.jpeg', '2024-10-30 16:25:40', '2024-10-30 17:32:17'),
(5, 'IPDC Landing Page', '<p>Halaman landing page IPDC Banking dibuat menggunakan HTML dan Bootstrap 5.3.3. Halaman ini juga mencakup kategori pengalaman pelanggan, carousel mitra bisnis, informasi tentang perusahaan, serta bagian layanan dengan gambar dan deskripsi singkat. Selain itu, terdapat newsletter untuk langganan pembaruan dan footer dengan informasi tambahan.</p>', 'IPDC Banking Landing Page.png', '2024-10-30 17:03:35', '2024-10-30 17:03:35'),
(8, 'Namori Landing Page', '<p>&nbsp;\"Namori\" Landing Page dirancang menggunakan HTML dan CSS, menampilkan header dengan menu navigasi, section \"New Arrivals\" dengan tombol \"Shop now\", dan fitur layanan seperti pengiriman gratis. Bagian produk menampilkan item lengkap dengan gambar, deskripsi, dan harga, serta banner promosi untuk diskon t-shirt.</p>', 'namori e-commerce.png', '2024-10-30 17:19:51', '2024-10-30 17:36:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `foto`, `created_at`, `update_at`) VALUES
(2, 'Azizah', 'azizah@gmail.com', '12345678', '0', '2024-10-28 01:28:30', '2024-10-28 01:28:30'),
(4, 'nur', 'nur@gmail.com', '123', 'FNA logo.png', '2024-10-29 06:59:19', '2024-10-29 06:59:19'),
(7, 'Fitria', 'fitriaa@gmail.com', '123456', 'my-profile.jpg', '2024-10-29 07:07:40', '2024-10-29 07:07:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
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
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
