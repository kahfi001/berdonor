-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 06:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donor`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `user_id`, `tittle`, `slug`, `image`, `excerpt`, `body`, `publish_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Yuk Kenalan dengan Donor Plasma Konvalesen', 'donor-plasma-kevalen', NULL, 'Selama pandemi COVID-19 ini, kita mungkin pernah mendapatkan pesan broadcast pada aplikasi chat atau media sosial mengenai pasien yang membutuhkan plasma konvalesen. Lalu apa itu plasma konvalesen? Apakah semua orang bisa mendonorkan plasma konvalesen? Kita bahas selengkapnya melalui artikel ini ya.', 'Apa saja syarat untuk donor plasma konvalesen?\r\n            Pernah terkonfirmasi dan sembuh dari COVID-19\r\n            Membawa dokumen hasil swab positif dan negatif, atau surat keterangan sehat dari Dinkes setempat\r\n            Berusia 17-60 tahun, berat badan minimal 55 kg\r\n            Diutamakan laki-laki. Untuk perempuan, belum pernah hamil (antibodi HLA negatif)\r\n            Bebas keluhan atau gejala minimal 14 hari\r\n            Jika sudah vaksin, maka perlu menunggu minimal 2 minggu setelah vaksin dosis kedua\r\n            Jika memenuhi syarat-syarat tersebut, kita bisa datang ke UTD PMI yang memfasilitasi donor plasma konvalesen.\r\n            Datang ke UTD PMI untuk donor plasma konvalesen dengan mesin apheresis\r\n\r\n            Donor plasma konvalesen ini memang berbeda dengan donor darah biasa. Calon pendonor harus dua kali ke PMI untuk bisa mendonorkan plasma konvalesen. Namun, jika kita tidak memenuhi syarat untuk donor plasma konvalesen, apa yang bisa kita lakukan? Kita masih tetap bisa mendonorkan darah biasa di PMI karena kebutuhan donor darah biasa juga masih tinggi selama pandemi ini. Baik donor plasma konvalesen maupun donor darah biasa, keduanya sama-sama penting dan bermanfaat. Jadi, sudah waktunya donor nih? Yuk kita donor di Unit Transfusi Darah (UTD) PMI atau jadwal mobil unit PMI terdekat, cek jadwalnya di', NULL, '2022-06-04 03:11:13', '2022-06-04 03:11:13'),
(2, 3, 'Cara Meningkatkan Hemoglobin untuk Donor Darah', 'cara-meningkatkan-hemoglobin', NULL, 'Selama pandemi COVID-19 ini, kita mungkin pernah mendapatkan pesan broadcast pada aplikasi chat atau media sosial mengenai pasien yang membutuhkan plasma konvalesen. Lalu apa itu plasma konvalesen? Apakah semua orang bisa mendonorkan plasma konvalesen? Kita bahas selengkapnya melalui artikel ini ya.', 'Apa saja syarat untuk donor plasma konvalesen?\r\n            Pernah terkonfirmasi dan sembuh dari COVID-19\r\n            Membawa dokumen hasil swab positif dan negatif, atau surat keterangan sehat dari Dinkes setempat\r\n            Berusia 17-60 tahun, berat badan minimal 55 kg\r\n            Diutamakan laki-laki. Untuk perempuan, belum pernah hamil (antibodi HLA negatif)\r\n            Bebas keluhan atau gejala minimal 14 hari\r\n            Jika sudah vaksin, maka perlu menunggu minimal 2 minggu setelah vaksin dosis kedua\r\n            Jika memenuhi syarat-syarat tersebut, kita bisa datang ke UTD PMI yang memfasilitasi donor plasma konvalesen.\r\n            Datang ke UTD PMI untuk donor plasma konvalesen dengan mesin apheresis\r\n\r\n            Donor plasma konvalesen ini memang berbeda dengan donor darah biasa. Calon pendonor harus dua kali ke PMI untuk bisa mendonorkan plasma konvalesen. Namun, jika kita tidak memenuhi syarat untuk donor plasma konvalesen, apa yang bisa kita lakukan? Kita masih tetap bisa mendonorkan darah biasa di PMI karena kebutuhan donor darah biasa juga masih tinggi selama pandemi ini. Baik donor plasma konvalesen maupun donor darah biasa, keduanya sama-sama penting dan bermanfaat. Jadi, sudah waktunya donor nih? Yuk kita donor di Unit Transfusi Darah (UTD) PMI atau jadwal mobil unit PMI terdekat, cek jadwalnya di', NULL, '2022-06-04 03:11:13', '2022-06-04 03:11:13'),
(3, 2, 'Apakah aman untuk donor darah selama pandemi COVID-19?', 'aman-donor-darah-ketika-pandemi', NULL, 'Banyak dari kita yang takut untuk keluar rumah selama pandemi COVID-19 ini. Hal ini juga berdampak pada sedikitnya pendonor yang datang ke Unit Transfusi Darah atau mobil unit PMI untuk mendonorkan darah. Padahal kebutuhan darah tidak menurun, tapi terus meningkat setiap harinya. PMI telah menerapkan protokol kesehatan yang ketat, agar pendonor tetap aman dan nyaman untuk mendonorkan darahnya. Lalu, bagaimana jika kita masih takut?', 'Banyak dari kita yang takut untuk keluar rumah selama pandemi COVID-19 ini. Hal ini juga berdampak pada sedikitnya pendonor yang datang ke Unit Transfusi Darah atau mobil unit PMI untuk mendonorkan darah. Padahal kebutuhan darah tidak menurun, tapi terus meningkat setiap harinya. PMI telah menerapkan protokol kesehatan yang ketat, agar pendonor tetap aman dan nyaman untuk mendonorkan darahnya. Lalu, bagaimana jika kita masih takut?\r\n            Jangan takut donor darah.\r\nAyo jangan takut berdonor darah. Donor darah tidak menularkan virus COVID-19. Saat ini belum ada bukti bahwa transfusi bisa menularkan virus COVID-19.\r\n\r\nDonor darah aman.\r\nOrang yang berdonor darah adalah orang yang sehat. Kemudian darah yang didonorkan akan melalui uji saring untuk memastikan darah yang siap ditransfusi adalah darah yang sehat dan aman.\r\n\r\nAda pasien yang harus diselamatkan.\r\nProsedur yang dijalankan oleh PMI dalam pengelolaan darah adalah untuk menghasilkan darah yang aman bagi pasien yang harus diselamatkan.\r\n\r\nPelajari hal-hal berikut ini sebelum donor darah.\r\n\r\nAnda dalam kondisi sehat\r\nTidak habis bepergian dari luar negeri\r\nTidak memiliki kontak dengan ODP (Orang Dalam Pengawasan) atau PDP (Pasien Dalam Pengawasan)\r\nPasien yang menderita kanker, thalassemia, demam berdarah, serta ibu melahirkan tetap membutuhkan darah untuk penanganan medis. Yuk, yang sudah saatnya donor, segera datang ke PMI terdekat ya.', NULL, '2022-06-04 03:11:13', '2022-06-04 03:11:13'),
(4, 1, 'Donor Darah Bisa Menurunkan Berat Badan', 'donor-dapat-menurunkan-berat-badan', NULL, 'Apakah donor darah bisa menurunkan berat badan? Apakah benar-benar fakta, dan bukan mitos? Memang benar bahwa, salah satu manfaat donor darah yaitu bisa membakar kalori secara teratur.', 'Apakah donor darah bisa menurunkan berat badan? Apakah benar-benar fakta, dan bukan mitos? Memang benar bahwa, salah satu manfaat donor darah yaitu bisa membakar kalori secara teratur.\r\n\r\n            Penelitian yang dilakukan oleh University of California, San Diego, menyatakan bahwa seseorang yang rutin donor darah akan kehilangan berat badan sesuai volume darah yang didonorkan, karena ada sekitar 650 kalori yang terbakar dalam tubuh.\r\n\r\n            Namun, hal ini tidak bisa menjadikan donor darah sebagai program diet bagi kita, karena donor darah hanya bisa dilakukan maksimal sekali dalam dua bulan. Oleh karena itu, kita harus tetap menjaga gaya hidup sehat dengan makan dan minum teratur yang cukup dan rutin berolahraga untuk menurunkan berat badan kita hingga memiliki berat badan ideal.', NULL, '2022-06-04 03:11:13', '2022-06-04 03:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `donor_terakhir` date NOT NULL,
  `skrdonor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_donor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_donor` date NOT NULL,
  `jam` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `pertanyaan`, `jawaban`, `created_at`, `updated_at`) VALUES
(1, 'Apakah Boleh Mendonorkan Darah Apabila Saya Memiliki Riwayat Penyakit? ', 'Apabila bukan suatu penyakit yang parah dan anda masih dalam\r\n            kondisi yang cukup stabil dan memenuhi semua persyaratan.', '2022-06-04 03:11:13', '2022-06-04 03:11:13'),
(2, 'Apakah Website Memerlukan KTP Untuk Registration User? ', 'Tidak, NIK KTP akan dibutuhkan ketika mendaftar untuk berdonor', '2022-06-04 03:11:13', '2022-06-04 03:11:13'),
(3, 'Apakah Saya Perlu Memiliki Akun di Berdonor? ', 'Jika kebutuhan anda adalah menerima  atau menyumbang, Ya.', '2022-06-04 03:11:13', '2022-06-04 03:11:13'),
(4, 'Bagaimana Cara Membatalkan Formulir Pendaftaran?  ', 'Silahkan buka halaman pendaftaran. Lalu silahkan pilih riwayat pendaftaran  ', '2022-06-04 03:11:13', '2022-06-04 03:11:13'),
(5, 'Apakah Saya Bisa Mengakses Website Berdonor Melalui SmartPhone?', 'Tentu saja, Website berdonor dapat diakses melalui smartphone anda.', '2022-06-04 03:11:13', '2022-06-04 03:11:13'),
(6, 'Apakah Privasi Data User Aman ? ', 'Tenang, data privasi anda akan terjamin di tangan kami.', '2022-06-04 03:11:13', '2022-06-04 03:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_15_153749_create_artikels_table', 1),
(6, '2022_05_24_040415_create_stokdarahs_table', 1),
(7, '2022_05_26_035655_create_donors_table', 1),
(8, '2022_06_02_080407_create_faqs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stokdarahs`
--

CREATE TABLE `stokdarahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `o` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stokdarahs`
--

INSERT INTO `stokdarahs` (`id`, `a`, `b`, `ab`, `o`, `created_at`, `updated_at`) VALUES
(1, '2', '1', '3', '4', '2022-06-04 03:11:13', '2022-06-04 03:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$oCEWRXJk3wJVVRRyLFtLquARK7zoDaYQ6esOKv/1PBaGYwpMABc9.', NULL, '2022-06-04 03:11:13', '2022-06-04 03:11:13'),
(2, 'Dr. Bernadette Pagac DDS', 'dell23', 'russel.jerrold@example.org', '2022-06-04 03:11:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2GHyTsCEVz', '2022-06-04 03:11:13', '2022-06-04 03:11:13'),
(3, 'Prof. Myah Berge PhD', 'xdavis', 'dejon18@example.net', '2022-06-04 03:11:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3IQZVtQEA0', '2022-06-04 03:11:13', '2022-06-04 03:11:13'),
(4, 'Herman Runolfsson', 'lew.mitchell', 'monty94@example.net', '2022-06-04 03:11:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Bd8f32ndIs', '2022-06-04 03:11:13', '2022-06-04 03:11:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `artikels_slug_unique` (`slug`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `stokdarahs`
--
ALTER TABLE `stokdarahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stokdarahs`
--
ALTER TABLE `stokdarahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikels`
--
ALTER TABLE `artikels`
  ADD CONSTRAINT `artikels_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `donors`
--
ALTER TABLE `donors`
  ADD CONSTRAINT `donors_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `stokdarahs`
--
ALTER TABLE `stokdarahs`
  ADD CONSTRAINT `stokdarahs_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
