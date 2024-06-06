-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 03:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_fakultas`
--

CREATE TABLE `tb_fakultas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `dekan` varchar(255) NOT NULL,
  `ttd_dekan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_fakultas`
--

INSERT INTO `tb_fakultas` (`id`, `nama`, `dekan`, `ttd_dekan`) VALUES
(1, 'Ilmu Komputer', 'Hanif Al Fatta, M.Kom.', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi`
--

CREATE TABLE `tb_materi` (
  `id_materi` int(50) NOT NULL,
  `kode_matkul` varchar(50) NOT NULL,
  `pertemuan` int(50) NOT NULL,
  `judul_materi` varchar(255) NOT NULL,
  `cp_pembelajaran` varchar(100) NOT NULL,
  `des_materi` varchar(255) NOT NULL,
  `tgl_dibuat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_materi`
--

INSERT INTO `tb_materi` (`id_materi`, `kode_matkul`, `pertemuan`, `judul_materi`, `cp_pembelajaran`, `des_materi`, `tgl_dibuat`) VALUES
(1, 'DT180', 1, 'Pengenalan PHP', 'CPMK01', 'Mahasiswa dapat mengenal lebih dalam mengenai php dan dapat mengetahui cara kerjanya', '2023-10-28'),
(2, 'DT170', 2, 'Pengenalan', 'Dad', 'ini deskripsi dari materi.... sayaaaa.....', '2023-12-19'),
(3, 'DT170', 1, 'Pengenalan PHP', 'CPMK01', 'wretrgj', '2023-12-19'),
(17, 'DT170', 9, 'Wedus berkaki sikil', 'wedus', 'iki bossss kuuu sayaaa 9', '2023-12-19'),
(18, 'DT1789', 1, 'Pengenalan Framework Saya', 'CPMK02', 'ini deskripsi dari materi.... sayaaaa.....', '2023-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matkul`
--

CREATE TABLE `tb_matkul` (
  `id_matkul` bigint(20) UNSIGNED NOT NULL,
  `prodi_id` bigint(20) UNSIGNED NOT NULL,
  `nm_matkul` varchar(255) NOT NULL,
  `kode_matkul` varchar(50) NOT NULL,
  `prodi_matkul` varchar(100) NOT NULL,
  `dos_pengampu` varchar(100) NOT NULL,
  `bobot_sks` int(50) NOT NULL,
  `tipe_matkul` varchar(100) NOT NULL,
  `sem_matkul` int(50) NOT NULL,
  `des_matkul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_matkul`
--

INSERT INTO `tb_matkul` (`id_matkul`, `prodi_id`, `nm_matkul`, `kode_matkul`, `prodi_matkul`, `dos_pengampu`, `bobot_sks`, `tipe_matkul`, `sem_matkul`, `des_matkul`) VALUES
(1, 1, 'Perancangan Web 2', 'DT180', 'D3 Manajemen Informatika', 'Niko Saputra', 4, 'Teori & Praktikum', 3, 'ini adalah deskripsi mata kuliah perancangan web'),
(2, 1, 'Pengolahan Basis Data', 'DT170', 'D3 Teknik Informatika', 'Hastari Utama', 4, 'Teori & Praktikum', 3, 'ini deskripsi pengolahan basis data ....'),
(3, 1, 'Jaringan Komputer', 'DT1789', 'D3 Teknik Informatika', 'Ria Andriani', 4, 'Teori & Praktikum', 4, 'ini adalah deskripsi dari mata kuliah jaringan komputer ....');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fakultas_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kaprodi` varchar(255) NOT NULL,
  `fakultas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_prodi`
--

INSERT INTO `tb_prodi` (`id`, `fakultas_id`, `nama`, `kaprodi`, `fakultas`) VALUES
(1, 1, 'D3-Teknik Informatika', 'Barka Satya, M.Kom', 'Ilmu Komputer'),
(2, 1, 'D3-Manajemen Informatika', 'Barka Satya, M.Kom', 'Ilmu Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rps`
--

CREATE TABLE `tb_rps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dosen_penyusun_id` bigint(20) UNSIGNED NOT NULL,
  `id_matkul` bigint(20) UNSIGNED NOT NULL,
  `tgl_berlaku` date NOT NULL,
  `tgl_disusun` date NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `revisi` int(11) NOT NULL DEFAULT 0,
  `detail_penilaian` longtext NOT NULL,
  `gambaran_umum` longtext NOT NULL,
  `capaian` longtext NOT NULL,
  `prasyarat` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_rps`
--

INSERT INTO `tb_rps` (`id`, `dosen_penyusun_id`, `id_matkul`, `tgl_berlaku`, `tgl_disusun`, `nomor`, `revisi`, `detail_penilaian`, `gambaran_umum`, `capaian`, `prasyarat`, `created_at`, `updated_at`) VALUES
(1, 4, 1, '2024-01-13', '2024-01-10', 'RPS-D3TI-DT170', 0, '▪ Presensi 10%\r\n▪ Ujian Mid Semester 25 % \r\n▪ Ujian Akhir Semester 25 % \r\n▪ Tugas Teori 15 % \r\n▪ Tugas Praktik 15%\r\n▪ Responsi 10%', 'a. Perkuliahan ini diselenggarakan 14 kali pertemuan secara teori dan 14 kali pertemuan secara praktik. Ujian Tengah Semester dan Ujian Akhir Semester dilakukan secara sinkronus menggunakan Zoom atau Google Meet dan Asinkronus menggunakan LMS.\r\nb. Mata kuliah ini membahas mengenai bagaimana merancang web, teknologi web serta perancangan web II termasuk di dalamnya, yaitu HTML, CSS, PHP, Front-end framework dan Back-end framework. Pokok pembahasan mata kuliah ini adalah implementasi bahasa pemrograman HTML, CSS, PHP, dan Database untuk membangun sebuah Web secara Native maupun menggunakan Framework. • Hardskill : Mata kuliah ini bertujuan agar mahasiswa dapat menggunakan framework codeigniter, Dapat megnimplementasikan konsep OOP dalam Bahasa pemrograman PHP, Dapat menguasai bahasa pemrograman PHP (basic), serta membuat website dinamis dengan database MySql. • Softskill : Dapat menjelaskan secara detail proses pembangunan sebuah website. Dapat memahami sebuah brief projek pembangunan website.\r\nc. Matakuliah ini merupakan matakuliah konsentrasi., sehingga setelah menyelesaikan matakuliah ini diharapkan dapat menjadi Junior web developer.', 'a. Mampu menjelaskan definisi perancangan web 2, serta mampu mengimplementasikan dasar-dasar php.\r\nb. Mampu mengimplementasikan Array dalam php, Percabangan dan perulangan menggunakan Bahasa pemrograman PHP.\r\nc. Mampu membuat native web dengan database MySql.\r\nd. Mampu mengimplementasikan konsep OOP (Inheritance, Override, Overload, Encapsulasi)\r\ne. Mampu mengimplementasikan konsep MVC (Model, View, Controller). f. Mampu membuat sebuah web dinamis dengan framework Codeigniter.', 'Matakuliah ini dapat ditempuh dengan syarat sudah menempuh matakuliah perancangan web I. Sebelum mempelajari perancangan web II, mahasiswa diharapkan menguasai HTML, CSS, Javascript terlebih dahulu. Dalam perancangan web II terkait DOM Html dan penggunaan CSS serta Javascript.', '2024-01-10 16:40:24', '2024-01-10 16:40:24'),
(2, 4, 2, '2024-01-13', '2024-01-11', 'RPS-D3TI-DT180', 0, 'Matakuliah ini mempelajari konsep pemrograman web dasar seperti pemrograman menggunakan HTML, CSS dan Javascript. Perkuliahan diselenggarakan dalam 14 kali pertemuan teori dan 14 kali\r\npertemuan praktikum selama satu semester. Perkuliahan dilakukan secara luring. Media pembelajaran yang digunakan adalah modul dan video rekaman. Praktikum menggunakan tools sesuai petunjuk\r\ndosen.\r\nTugas kuliah akan diberikan secara individu dan berkelompok. Penilaian akhir diambil dari nilai tugas/kuis, UTS, UAS, dan Final Project.', 'Matakuliah ini mempelajari konsep pemrograman web dasar seperti pemrograman menggunakan HTML, CSS dan Javascript. Perkuliahan diselenggarakan dalam 14 kali pertemuan teori dan 14 kali\r\npertemuan praktikum selama satu semester. Perkuliahan dilakukan secara luring. Media pembelajaran yang digunakan adalah modul dan video rekaman. Praktikum menggunakan tools sesuai petunjuk\r\ndosen.\r\nTugas kuliah akan diberikan secara individu dan berkelompok. Penilaian akhir diambil dari nilai tugas/kuis, UTS, UAS, dan Final Project.', 'Matakuliah ini mempelajari konsep pemrograman web dasar seperti pemrograman menggunakan HTML, CSS dan Javascript. Perkuliahan diselenggarakan dalam 14 kali pertemuan teori dan 14 kali\r\npertemuan praktikum selama satu semester. Perkuliahan dilakukan secara luring. Media pembelajaran yang digunakan adalah modul dan video rekaman. Praktikum menggunakan tools sesuai petunjuk\r\ndosen.\r\nTugas kuliah akan diberikan secara individu dan berkelompok. Penilaian akhir diambil dari nilai tugas/kuis, UTS, UAS, dan Final Project.', 'Matakuliah ini mempelajari konsep pemrograman web dasar seperti pemrograman menggunakan HTML, CSS dan Javascript. Perkuliahan diselenggarakan dalam 14 kali pertemuan teori dan 14 kali\r\npertemuan praktikum selama satu semester. Perkuliahan dilakukan secara luring. Media pembelajaran yang digunakan adalah modul dan video rekaman. Praktikum menggunakan tools sesuai petunjuk\r\ndosen.\r\nTugas kuliah akan diberikan secara individu dan berkelompok. Penilaian akhir diambil dari nilai tugas/kuis, UTS, UAS, dan Final Project.', '2024-01-11 14:23:41', '2024-01-11 14:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rps_rencana_pelaksanaan`
--

CREATE TABLE `tb_rps_rencana_pelaksanaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rps_id` bigint(20) UNSIGNED NOT NULL,
  `pertemuan` int(11) NOT NULL,
  `kemampuan` longtext NOT NULL,
  `indikator` longtext NOT NULL,
  `topik` longtext NOT NULL,
  `aktivitas` longtext NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `penilaian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_rps_rencana_pelaksanaan`
--

INSERT INTO `tb_rps_rencana_pelaksanaan` (`id`, `rps_id`, `pertemuan`, `kemampuan`, `indikator`, `topik`, `aktivitas`, `waktu`, `penilaian`) VALUES
(1, 1, 1, '• Mahasiswa dapat mengetahui dan memahami perbedaan Web statis dengan Web dinamis.\r\n• Mahasiswa dapat membedakan native programing dengan framework programing.', '• Dapat menjelaskan perbedaan web statis dan web dinamis\r\n• Dapat memberikan contoh web statis dan web dinamis\r\n• Dapat menjelaskan perbedaan natif programing dan framework programing', 'Topik : Konsep dasar web dinamis Sub topik :\r\n\r\n1. Kontrak belajar dan tata cara perkuliahan.\r\n2. Konsep dasar website', 'Metode : Daring (Teori) Pembukaan (15 Menit)\r\n\r\n1. Dosen dan mahasiswa memulai sesi perkuliahan sesuai jadwal yang sudah ditentukan via Zoom Meeting atau Google Meet.\r\n2. Mahasiswa join ke meet room kemudian dosen membagikan kode presesnsi ke mahasiswa\r\n3. Memulai perkuliahan dengan berdo’a dan memperkenalkan diri', '100 Menit', 'Keaktifan Mahasiswa'),
(3, 2, 1, 'Matakuliah ini mempelajari konsep pemrograman web dasar seperti pemrograman menggunakan HTML, CSS dan Javascript. Perkuliahan diselenggarakan dalam 14 kali pertemuan teori dan 14 kali\r\npertemuan praktikum selama satu semester. Perkuliahan dilakukan secara luring. Media pembelajaran yang digunakan adalah modul dan video rekaman. Praktikum menggunakan tools sesuai petunjuk\r\ndosen.\r\nTugas kuliah akan diberikan secara individu dan berkelompok. Penilaian akhir diambil dari nilai tugas/kuis, UTS, UAS, dan Final Project.', 'Matakuliah ini mempelajari konsep pemrograman web dasar seperti pemrograman menggunakan HTML, CSS dan Javascript. Perkuliahan diselenggarakan dalam 14 kali pertemuan teori dan 14 kali\r\npertemuan praktikum selama satu semester. Perkuliahan dilakukan secara luring. Media pembelajaran yang digunakan adalah modul dan video rekaman. Praktikum menggunakan tools sesuai petunjuk\r\ndosen.\r\nTugas kuliah akan diberikan secara individu dan berkelompok. Penilaian akhir diambil dari nilai tugas/kuis, UTS, UAS, dan Final Project.', 'Matakuliah ini mempelajari konsep pemrograman web dasar seperti pemrograman menggunakan HTML, CSS dan Javascript. Perkuliahan diselenggarakan dalam 14 kali pertemuan teori dan 14 kali\r\npertemuan praktikum selama satu semester. Perkuliahan dilakukan secara luring. Media pembelajaran yang digunakan adalah modul dan video rekaman. Praktikum menggunakan tools sesuai petunjuk\r\ndosen.\r\nTugas kuliah akan diberikan secara individu dan berkelompok. Penilaian akhir diambil dari nilai tugas/kuis, UTS, UAS, dan Final Project.', 'Matakuliah ini mempelajari konsep pemrograman web dasar seperti pemrograman menggunakan HTML, CSS dan Javascript. Perkuliahan diselenggarakan dalam 14 kali pertemuan teori dan 14 kali\r\npertemuan praktikum selama satu semester. Perkuliahan dilakukan secara luring. Media pembelajaran yang digunakan adalah modul dan video rekaman. Praktikum menggunakan tools sesuai petunjuk\r\ndosen.\r\nTugas kuliah akan diberikan secara individu dan berkelompok. Penilaian akhir diambil dari nilai tugas/kuis, UTS, UAS, dan Final Project.', '100 Menit', ' Keaktifan Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rps_unit_pembelajaran`
--

CREATE TABLE `tb_rps_unit_pembelajaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rps_id` bigint(20) UNSIGNED NOT NULL,
  `kemampuan` varchar(255) NOT NULL,
  `indikator` longtext NOT NULL,
  `bahan_kajian` longtext NOT NULL,
  `metode` varchar(255) NOT NULL,
  `pertemuan` int(11) NOT NULL,
  `bahan_ajar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_rps_unit_pembelajaran`
--

INSERT INTO `tb_rps_unit_pembelajaran` (`id`, `rps_id`, `kemampuan`, `indikator`, `bahan_kajian`, `metode`, `pertemuan`, `bahan_ajar`) VALUES
(1, 1, 'Menjelaskan konsep dasar website', '• Dapat menjelaskan perbedaan web statis dan web dinamis• Dapat memberikan contoh web statis dan web dinamis• Dapat menjelaskan perbedaan natif programing dan framework programing', '• Kontrak belajar 1 semester• Konsep dasar web', 'Diskusi', 1, 'PPT Teori'),
(3, 2, 'Matakuliah ini mempelajari konsep pemrograman web dasar seperti pemrograman menggunakan HTML, CSS dan Javascript. Perkuliahan diselenggarakan dalam 14 kali pertemuan teori dan 14 kali\r\npertemuan praktikum selama satu semester. Perkuliahan dilakukan secara', 'Matakuliah ini mempelajari konsep pemrograman web dasar seperti pemrograman menggunakan HTML, CSS dan Javascript. Perkuliahan diselenggarakan dalam 14 kali pertemuan teori dan 14 kali\r\npertemuan praktikum selama satu semester. Perkuliahan dilakukan secara luring. Media pembelajaran yang digunakan adalah modul dan video rekaman. Praktikum menggunakan tools sesuai petunjuk\r\ndosen.\r\nTugas kuliah akan diberikan secara individu dan berkelompok. Penilaian akhir diambil dari nilai tugas/kuis, UTS, UAS, dan Final Project.', 'Matakuliah ini mempelajari konsep pemrograman web dasar seperti pemrograman menggunakan HTML, CSS dan Javascript. Perkuliahan diselenggarakan dalam 14 kali pertemuan teori dan 14 kali\r\npertemuan praktikum selama satu semester. Perkuliahan dilakukan secara luring. Media pembelajaran yang digunakan adalah modul dan video rekaman. Praktikum menggunakan tools sesuai petunjuk\r\ndosen.\r\nTugas kuliah akan diberikan secara individu dan berkelompok. Penilaian akhir diambil dari nilai tugas/kuis, UTS, UAS, dan Final Project.', 'Diskusi, Tanya jawab', 1, 'PPT');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rps_unit_tugas`
--

CREATE TABLE `tb_rps_unit_tugas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rps_id` bigint(20) UNSIGNED NOT NULL,
  `tugas` varchar(255) NOT NULL,
  `kemampuan` varchar(255) NOT NULL,
  `pertemuan` int(11) NOT NULL,
  `bobot` varchar(255) NOT NULL,
  `kriteria_penilaian` varchar(255) NOT NULL,
  `indikator_penilaian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_rps_unit_tugas`
--

INSERT INTO `tb_rps_unit_tugas` (`id`, `rps_id`, `tugas`, `kemampuan`, `pertemuan`, `bobot`, `kriteria_penilaian`, `indikator_penilaian`) VALUES
(1, 1, 'Membuat flowchart', 'Menjelaskan konsep dasar website', 1, '10% dari 15% nilai tugas', 'Sesuai dengan studi kasus yang diberikan', 'Kemampuan mahasiswa membuat alur proses web app sesuai studi kasus yang diberikan'),
(3, 2, 'Tugas ini tentang praktikum', 'Matakuliah ini mempelajari konsep pemrograman web dasar seperti pemrograman menggunakan HTML, CSS dan Javascript. Perkuliahan diselenggarakan dalam 14 kali pertemuan teori dan 14 kali\r\npertemuan praktikum selama satu semester. Perkuliahan dilakukan secara', 1, 'Matakuliah ini mempelajari konsep pemrograman web dasar seperti pemrograman menggunakan HTML, CSS dan Javascript. Perkuliahan diselenggarakan dalam 14 kali pertemuan teori dan 14 kali\r\npertemuan praktikum selama satu semester. Perkuliahan dilakukan secara', 'Matakuliah ini mempelajari konsep pemrograman web dasar seperti pemrograman menggunakan HTML, CSS dan Javascript. Perkuliahan diselenggarakan dalam 14 kali pertemuan teori dan 14 kali\r\npertemuan praktikum selama satu semester. Perkuliahan dilakukan secara', 'Matakuliah ini mempelajari konsep pemrograman web dasar seperti pemrograman menggunakan HTML, CSS dan Javascript. Perkuliahan diselenggarakan dalam 14 kali pertemuan teori dan 14 kali\r\npertemuan praktikum selama satu semester. Perkuliahan dilakukan secara');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `nik` int(100) NOT NULL,
  `user_password` varchar(300) NOT NULL,
  `user_akses` int(11) NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_name`, `user_email`, `nik`, `user_password`, `user_akses`, `user_status`) VALUES
(1, 'Admin', 'admin@gmail.com', 12345, 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1),
(2, 'Dosen', 'dosen@gmail.com', 22012024, 'ce3eaa938d09504bae9458dffb805f2de7c9da4e', 2, 2),
(3, 'Mahasiswa', 'mahasiswa@gmail.com', 22014897, '1d0dca67fef675f4ccc65570e80a5b7d9ec790ea', 3, 3),
(4, 'Niko Saputra', 'niko@gmail.com', 220148977, '8cb2237d0679ca88db6464eac60da96345513964', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_fakultas`
--
ALTER TABLE `tb_fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  ADD PRIMARY KEY (`id_matkul`),
  ADD KEY `prodi_id` (`prodi_id`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fakultas_id` (`fakultas_id`);

--
-- Indexes for table `tb_rps`
--
ALTER TABLE `tb_rps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosen_penyusun_id` (`dosen_penyusun_id`),
  ADD KEY `id_matkul` (`id_matkul`);

--
-- Indexes for table `tb_rps_rencana_pelaksanaan`
--
ALTER TABLE `tb_rps_rencana_pelaksanaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rps_unit_pembelajaran`
--
ALTER TABLE `tb_rps_unit_pembelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rps_id` (`rps_id`);

--
-- Indexes for table `tb_rps_unit_tugas`
--
ALTER TABLE `tb_rps_unit_tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_fakultas`
--
ALTER TABLE `tb_fakultas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `id_materi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  MODIFY `id_matkul` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_rps`
--
ALTER TABLE `tb_rps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_rps_rencana_pelaksanaan`
--
ALTER TABLE `tb_rps_rencana_pelaksanaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_rps_unit_pembelajaran`
--
ALTER TABLE `tb_rps_unit_pembelajaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_rps_unit_tugas`
--
ALTER TABLE `tb_rps_unit_tugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD CONSTRAINT `tb_prodi_ibfk_1` FOREIGN KEY (`fakultas_id`) REFERENCES `tb_fakultas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_rps`
--
ALTER TABLE `tb_rps`
  ADD CONSTRAINT `tb_rps_ibfk_1` FOREIGN KEY (`dosen_penyusun_id`) REFERENCES `tb_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rps_ibfk_2` FOREIGN KEY (`id_matkul`) REFERENCES `tb_matkul` (`id_matkul`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
