-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2024 at 09:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `isi_about` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `isi_about`, `foto`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"text-align: justify; \">Someone who comes from a <b>Public Administration</b> graduate with a strong interest in learning new things and always open to new opportunities. Currently, I am <b>focused</b> on exploring my skills in web programming, starting from <b>basic HTML, CSS, JavaScript and PHP</b>. Although still in the early stages, I’m fully committed to refining my abilities in this field. I believe that my diverse background allows me to bring a unique perspective to every project I take on.</p>', 'profil-about.jpeg', '2024-10-30 05:33:17', '2024-10-30 06:21:41');

-- --------------------------------------------------------

--
-- Table structure for table `education`
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
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `last_edu`, `level_name`, `isi_edu`, `updated_at`, `created_at`) VALUES
(1, 'Bachelor of Public Administration', 'STIAMI INSTITUTE (2020 - 2024)', '<ul><li>Skills : Management, Administration, Public Service, Government Tax</li><li>BNSP certificate of competency as a Public Policy Analyst</li><li>P2MW 2023 awardee organized by Ditjen Diktiristek, Kemendikbudristek in the Services and Trade category</li><li>Active in tax paper competition</li></ul>', '2024-10-30 07:19:17', '2024-10-30 07:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
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
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `nama_exp`, `tempat_exp`, `kegiatan`, `created_at`, `update_at`) VALUES
(1, 'Tax Volunteer', 'Public Service, KPP Pratama Jakarta Menteng Dua, (April, 2022)', '<ul><li>Responsible for assisting taxpayers in filing individual income tax returns with forms 1770 and 1770S</li><li>Directing taxpayers to apply for EFIN for those who dont have or forget their EFIN</li><li>Answering questions from taxpayers about taxation.</li></ul>', '2024-10-30 07:52:00', '2024-10-30 07:58:07'),
(2, 'Jambore Koperasi Nasional (JAMKOPNAS) organized by FKKMI ', 'Public Relations and LO division, Graha Ragunan (Jul-Aug, 2022)', '<ul><li>Coordinated requests and delivered official letters to the Pemprov Jakarta and relevant ministries for venue and event permits.</li><li>Follow-up with the KEMENPORA regarding the request for trophies and certificates for JAMKOPNAS participants.</li><li>Established and maintained communication with government and private sectors for necessary event permissions and sponsorship arrangements.</li></ul>', '2024-10-30 07:53:11', '2024-10-30 07:58:29'),
(3, 'Jalaninaja.com (business plan)', 'as a leader, P2MW 2023', '<ul><li>Developed a business plan for an electric bike rental service.</li><li>Submitted business progress reports through the P2MW 2023 platform.</li><li>Established agreements with event organizers to set up promotional booths to enhance brand visibility.</li></ul>', '2024-10-30 07:55:06', '2024-10-30 07:55:06');

-- --------------------------------------------------------

--
-- Table structure for table `home`
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
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `judul_home`, `isi_home`, `nomor_wa`, `wa_link`, `created_at`, `update_at`) VALUES
(4, 'FITRIA NUR AZIZAH', '<p>\"Web Programming is new thing for me to learn. However, I enjoy every process that I go through, as I believe that every process will not betray the results\"</p>', 'WA : 085893864638', 'https://wa.me/6285893864638', '2024-10-30 04:07:55', '2024-10-30 04:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `foto`, `created_at`, `update_at`) VALUES
(2, 'Azizah', 'azizah@gmail.com', '12345678', '0', '2024-10-28 01:28:30', '2024-10-28 01:28:30'),
(4, 'nur', 'nur@gmail.com', '123', 'FNA logo.png', '2024-10-29 06:59:19', '2024-10-29 06:59:19'),
(7, 'Fitria', 'fitriaa@gmail.com', '123456', 'my-profile.jpg', '2024-10-29 07:07:40', '2024-10-29 07:07:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
