-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2024 at 10:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_virtual_internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_groups`
--

CREATE TABLE `access_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `group_description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filament_user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_locations`
--

CREATE TABLE `applicant_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kota` varchar(255) NOT NULL,
  `alamat_lengkap` varchar(255) NOT NULL,
  `pos_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_locations`
--

INSERT INTO `applicant_locations` (`id`, `kota`, `alamat_lengkap`, `pos_code`, `created_at`, `updated_at`) VALUES
(1, 'Pekanbaru', 'Jl. Air Dingin', '31513', '2024-06-20 05:52:53', '2024-06-20 05:52:53'),
(2, 'Pekanbaru', 'ndosanfasf', '23525', '2024-06-20 06:12:44', '2024-06-20 06:12:44'),
(3, 'Bekasi', 'Jl. Air Dingin', '25123', '2024-06-20 17:17:16', '2024-06-20 17:17:16'),
(4, 'Bogor', 'Jl. Tunas Bangsa', '25314', '2024-06-20 17:27:01', '2024-06-20 17:27:01'),
(5, 'Kalimantan Timur', 'Jl. Karya', '25231', '2024-06-20 17:36:10', '2024-06-20 17:36:10'),
(6, 'Pekanbaru', 'Jl. Tunas Bangsa', '29012', '2024-06-20 18:09:32', '2024-06-20 18:09:32'),
(7, 'Dumai', 'Jl. Adisucipto', '32012', '2024-06-21 04:04:32', '2024-06-21 04:04:32'),
(8, 'Pekanbaru', 'Bukittiman', '22135', '2024-06-21 04:19:27', '2024-06-21 04:19:27'),
(9, 'Jakarta Barat', 'Jl. Gergopol', '21324', '2024-06-21 04:25:34', '2024-06-21 04:25:34'),
(10, 'Pekanbaru', 'Jl. Air Dingin', '25234', '2024-06-21 09:14:17', '2024-06-21 09:14:17'),
(11, 'Bogor', 'Jl. Bukit timah', '24124', '2024-06-22 00:50:48', '2024-06-22 00:50:48'),
(12, 'Surabaya', 'Jl. Diponegoro', '25534', '2024-06-22 23:57:10', '2024-06-22 23:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_seeker_id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `cover_letter` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `komentar` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `filament_password_resets`
--

CREATE TABLE `filament_password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `filament_users`
--

CREATE TABLE `filament_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`roles`)),
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `filament_users`
--

INSERT INTO `filament_users` (`id`, `avatar`, `email`, `is_admin`, `name`, `password`, `roles`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'gioks@gmail.com', 1, 'gioks', '$2y$10$Pemw5YK.SMWgqg9R7OFuZ.5e8C2g6WVCLJO1.LIXop1a4XUFW1k5K', NULL, NULL, '2024-06-21 02:55:49', '2024-06-21 02:55:49');

-- --------------------------------------------------------

--
-- Table structure for table `informasi_lainnyas`
--

CREATE TABLE `informasi_lainnyas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `pengalaman` text NOT NULL,
  `posisi` varchar(255) DEFAULT NULL,
  `jenjang_pendidikan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informasi_lainnyas`
--

INSERT INTO `informasi_lainnyas` (`id`, `jenis_kelamin`, `pengalaman`, `posisi`, `jenjang_pendidikan`, `created_at`, `updated_at`) VALUES
(1, 'Laki-laki', '4 tahun backend', 'backend', 's1 atau setara', '2024-06-10 06:43:23', '2024-06-10 06:43:23'),
(2, 'Laki-laki', '2 tahun bekerja', 'data', 's1 atau setara', '2024-06-10 06:46:40', '2024-06-10 06:46:40'),
(3, 'Laki-laki', 'bekerja 4 tahun di bidang game', 'igl', 's2', '2024-06-12 10:14:41', '2024-06-12 10:14:41'),
(4, 'perempuan', '4 tahun software engineer', 'hrd', 's1', '2024-06-12 10:17:32', '2024-06-12 10:17:32'),
(5, 'Laki-laki', 'game', 'team lead', 's2', '2024-06-12 11:35:38', '2024-06-12 11:35:38'),
(6, 'Laki-laki', '2 tahun bekerja', 'hrd', 'minimal s1', '2024-06-12 11:42:43', '2024-06-12 11:42:43'),
(7, 'perempuan', '2 tahun bekerja bidang data', 'data', 's1 atau setara', '2024-06-13 19:53:26', '2024-06-13 19:53:26'),
(8, 'Laki-laki dan Perempuan', 'bekerja 4 tahun di bidang backend', 'backend', 's1 atau setara', '2024-06-13 19:58:05', '2024-06-13 19:58:05'),
(9, 'Laki-Laki', '4 tahun software engineer', NULL, 'Pendidikan nonformal', '2024-06-20 03:42:03', '2024-06-20 03:42:03'),
(10, 'Prempuan', '2 Tahun Bekerja', NULL, 'Pendidikan Menengah', '2024-06-20 03:50:36', '2024-06-20 03:50:36'),
(11, 'Laki-Laki', '3 Tahun Bekerja', NULL, 'Pendidikan Tinggi', '2024-06-20 03:55:13', '2024-06-20 03:55:13'),
(12, 'Prempuan', '4 tahun software engineer', NULL, 'Pendidikan Menengah', '2024-06-21 10:29:49', '2024-06-21 10:29:49'),
(13, 'Prempuan', '4 tahun backend', NULL, 'Pendidikan Menengah', '2024-06-22 08:20:32', '2024-06-22 08:20:32'),
(14, 'Laki-Laki', '2 tahun bekerja', NULL, 'Pendidikan informal', '2024-06-23 00:23:17', '2024-06-23 00:23:17');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `company` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_providers`
--

CREATE TABLE `job_providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_description` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `required_skills` varchar(255) NOT NULL,
  `berkas` varchar(225) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_providers`
--

INSERT INTO `job_providers` (`id`, `job_title`, `job_description`, `job_type`, `company_name`, `required_skills`, `berkas`, `email`, `created_at`, `updated_at`) VALUES
(6, 'Web Developer', 'Memiliki pengetahuan dan keterampilan baik di frontend maupun backend, memungkinkan mereka untuk mengembangkan seluruh stack teknologi yang diperlukan untuk sebuah proyek web, mulai dari tampilan pengguna hingga logika server.', 'Full Stack', 'Web Company', 'Paham Seluruh Framework', NULL, 'Web@gmail.com', '2024-06-12 11:42:31', '2024-06-12 11:42:31'),
(7, 'Data Science', 'Menganalisa Data', 'Data Scientest', 'Data Tech', 'Ahli dalam excel dan lain-lain', NULL, 'Data@gmail.com', '2024-06-13 19:52:04', '2024-06-13 19:52:04'),
(8, 'Backend Developer', 'Bekerja sama dengan frontend developers, UI/UX designers, dan stakeholders lainnya untuk memastikan aplikasi sesuai dengan kebutuhan dan spesifikasi.', 'Backend', 'Web Tech Company', 'Berpengalaman dengan framework backend seperti Django (Python), Spring (Java), Express (Node.js), Ruby on Rails (Ruby), atau Laravel (PHP).', NULL, 'Back@gmail.com', '2024-06-13 19:57:38', '2024-06-13 19:57:38'),
(9, 'Engineering', 'Ahli', 'Full Stack', 'EngineerTech', 'Ahli Engineer', NULL, 'Engineer@gmail.com', '2024-06-20 03:34:25', '2024-06-20 03:34:25'),
(11, 'Data Engineer', 'Data', 'Data Analyst', 'Data Tech', 'Mahir Menganalisa Data', NULL, 'DataTech@gmail.com', '2024-06-20 03:50:23', '2024-06-20 03:50:23'),
(12, 'Dosen', 'Mengajar', 'Full Time', 'Universitas XXXX', 'Public Speaking', NULL, 'Dosen@gmail.com', '2024-06-20 03:54:58', '2024-06-20 03:54:58'),
(13, 'Game Development', 'dsoandosa', 'developer', 'google', 'aowdnwadwa', 'berkas_images/SlxmQ8g0r40cplzYIKQKwHdUlHvs6szFjF0EGq0n.png', 'gvani510@gmail.com', '2024-06-21 10:28:08', '2024-06-21 10:28:08'),
(14, 'Laravel', 'Laravel', 'Full Stack', 'laravel company', 'paham dengan laravel', NULL, 'laravel@gmail.com', '2024-06-22 08:20:23', '2024-06-22 08:20:23'),
(15, 'Arsitek', 'Arsitek', 'Arsitek', 'arsitech', 'sadnanpdnapsdsa', NULL, 's@gmail.com', '2024-06-23 00:23:02', '2024-06-23 00:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `job_seekers`
--

CREATE TABLE `job_seekers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `skills` text NOT NULL,
  `experience` int(11) NOT NULL,
  `resume` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_types`
--

CREATE TABLE `job_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_types`
--

INSERT INTO `job_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Full-time', NULL, NULL),
(2, 'Part-time', NULL, NULL),
(3, 'Kontrak', NULL, NULL),
(4, 'Freelance', NULL, NULL),
(5, 'Magang', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_vacancies`
--

CREATE TABLE `job_vacancies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `salary_range` varchar(255) NOT NULL,
  `posting_date` datetime NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `experience_level` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kehidupan_budayas`
--

CREATE TABLE `kehidupan_budayas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `negara` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pos_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `job_provider_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `negara`, `alamat`, `pos_code`, `created_at`, `updated_at`, `job_provider_id`) VALUES
(6, 'Indonesia', 'Jakarta', '20318', '2024-06-12 11:42:58', '2024-06-12 11:42:58', 6),
(7, 'Indonesia', 'Kalimantan', '21412', '2024-06-13 19:54:10', '2024-06-13 19:54:10', 7),
(8, 'Indonesia', 'Surabaya', '25123', '2024-06-13 19:58:27', '2024-06-13 19:58:27', 8),
(9, 'Indonesia', 'Jakarta Selatan', '21512', '2024-06-20 03:45:43', '2024-06-20 03:45:43', 9),
(10, 'Indonesia', 'Jakarta Utara', '25123', '2024-06-20 03:50:52', '2024-06-20 03:50:52', 11),
(11, 'indonesia', 'Pekanbaru', '25235', '2024-06-20 03:55:28', '2024-06-20 03:55:28', 12),
(12, 'Indonesia', 'Dumai', '28826', '2024-06-21 10:29:57', '2024-06-21 10:29:57', 13),
(13, 'Indonesia', 'Bogor', '28826', '2024-06-22 08:20:46', '2024-06-22 08:20:46', NULL),
(14, 'Indonesia', 'Pontianak', '24211', '2024-06-23 00:23:35', '2024-06-23 00:23:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0000_00_00_000000_create_filament_users_table', 1),
(2, '0000_00_00_000001_create_filament_password_resets_table', 1),
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2024_05_13_125849_registeruser', 1),
(8, '2024_05_13_145223_create_registers_table', 1),
(9, '2024_05_13_190730_admin', 1),
(10, '2024_05_16_134630_create_blogs_table', 1),
(11, '2024_05_16_135010_blog', 1),
(12, '2024_05_16_183148_perusahaan', 1),
(13, '2024_05_16_183551_create_perusahaans_table', 1),
(14, '2024_05_20_171945_add_facebook_id_column', 1),
(15, '2024_05_27_173856_create_kehidupan_budayas_table', 1),
(16, '2024_05_28_140559_create_roles_table', 1),
(17, '2024_05_28_163254_create_access_groups_table', 1),
(18, '2024_05_28_163614_create_job_vacancies_table', 1),
(19, '2024_05_30_083239_create_jobs_table', 1),
(20, '2024_05_30_085446_create_job_seekers_table', 1),
(21, '2024_05_30_085501_create_job_providers_table', 1),
(22, '2024_05_30_085519_create_applications_table', 1),
(23, '2024_05_30_095443_create_informasi_lainnyas_table', 1),
(24, '2024_05_30_100906_create_locations_table', 1),
(25, '2024_06_03_192419_create_self_descriptions_table', 1),
(26, '2024_06_03_195554_create_applicant_locations_table', 1),
(27, '2024_06_03_201646_create_more_information_table', 1),
(28, '2024_06_06_172139_create_job_types_table', 1),
(29, '2024_06_09_171800_add_job_provider_id_to_locations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `more_information`
--

CREATE TABLE `more_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gaji` varchar(255) NOT NULL,
  `sertifikat` varchar(255) DEFAULT NULL,
  `img_sertifikat` varchar(255) NOT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `img_cv` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `more_information`
--

INSERT INTO `more_information` (`id`, `gaji`, `sertifikat`, `img_sertifikat`, `cv`, `img_cv`, `reason`, `created_at`, `updated_at`) VALUES
(1, '200000', 'lasds;amd', 'sertifikat_images/Zu8qnlxoh0QLkYKQtL2dkKqDrr8GpyaJUg3vrLGC.png', '22fqwfwfa', 'cv_images/734IZGJFMegr5aNIgE0xVAw3UiAwxhwzxBGJUx6P.png', 'awdknwapdwan', '2024-06-20 06:00:35', '2024-06-20 06:00:35'),
(6, '300000', 'doand[we', 'sertifikat_images/DtGVCuxTquNP9e3XNrgvQt6xITsuYAp3edyjU4nu.png', 'dansdpsa', 'cv_images/yiRhmeSTnebpXDratsELeagyN44p9GmhXY7cN8Js.png', 'apdsapdmas', '2024-06-20 06:13:11', '2024-06-20 06:13:11'),
(7, '9000000', 'Sertifikasi', 'sertifikat_images/iUQGnM18zyS4Ri5Wl4AoCae4IBC8zDA5GWV6Ja5J.png', 'CV', 'cv_images/078sBNXpH2Ql1gXP8hkb8x0dWxtqr8Yc5xffRsLM.png', 'Penasaran', '2024-06-20 17:17:57', '2024-06-20 17:17:57'),
(8, '1000000', 'Sertifikatt', 'sertifikat_images/SzRfnSNuh05qMhzgsIKJvVAIpS4SCIjrLHoubBFO.png', 'Portofolio', 'cv_images/wQEfMpfRuTR2oOvNnuYH0RgmuYdMQvhYewCA1QXO.png', 'Pengen', '2024-06-20 17:27:35', '2024-06-20 17:27:35'),
(9, '200000', 'sertifikat', 'sertifikat_images/XSjTOpudpkIIrxvdNaGtHjahS2KZ54rAlkZlc6mp.png', '22fqwfwfa', 'cv_images/ndVZLgJiSA6OgwUIkMjrqRA7Hjs6HxNVAvRNfiex.png', 'Karna saya tertarik dengan ini', '2024-06-20 17:36:45', '2024-06-20 17:36:45'),
(10, '9500000', 'doand[we', 'sertifikat_images/248bKDZBHtaBbqb7AuXTqnNQFsOj9VEPML9dSyqX.png', '22fqwfwfa', 'cv_images/LjXi7zXTXG9Pp4iX9ryuvLp7sKaalHq53R1h0DoY.png', 'awdknwapdwan', '2024-06-20 18:10:01', '2024-06-20 18:10:01'),
(11, '200000', '2ajcsonaca', 'sertifikat_images/ayKbW2d6mWBYusmUNyazsfBtn4X02kGaKjV8k5NC.png', 'pmacwa', 'cv_images/kIi5yWQslAk4UxHLnO40pHO9IOkJzqCTcwceKk02.png', 'pengen', '2024-06-21 04:05:00', '2024-06-21 04:05:00'),
(12, 'ddwf', 'cwew', 'sertifikat_images/HsynxRo6FgkaOAV6q0Z8lLK0y51vOdxdhwB1PkAc.png', 'wcew', 'cv_images/D0CHLxnhpZbOLvqlNW5olzdX6dfpeXJi60uxOfkY.png', 'cwcew', '2024-06-21 04:16:37', '2024-06-21 04:16:37'),
(13, '1000000', 'fawfwa', 'img/EqjD7LNoxLMf34EO3vfIHAE6ewtJPu2VdLEZWbkc.png', 'fafa', 'img/FrRtb5z7W6F7poySLMlvy7Xeg2bbq3ud26Jy8Ker.png', 'feafae', '2024-06-21 04:19:48', '2024-06-21 04:19:48'),
(14, '2000000', 'fawfwa', 'sertifikat_images/BFkrz7PhIr04JjfjfrOoI0CglvnJ9VzPO9s43Ooi.png', 'pmacwa', 'cv_images/aLG7xVPuc19NBWUyrCEa4ukVUJ3LAMK8tneyrcyd.png', 'asdasdsa', '2024-06-21 04:25:54', '2024-06-21 04:25:54'),
(15, '5500000', NULL, 'sertifikat_images/1wwwFemV7lcNzuUPd4iKoC6zzw5aXxfUTAsFbXzF.png', NULL, 'cv_images/TCXAhOPJ1xyBnUOYwmkvN8JrIYsBMBbdWe8OvuN4.png', 'karena perusahaan ini sudah saya incar dari dulu', '2024-06-21 09:18:33', '2024-06-21 09:18:33'),
(16, '300000', NULL, 'sertifikat_images/szvVSDy5FUtRouSce8SGvOeZIDyQRq30Qlas7QA9.png', NULL, 'cv_images/W3dnvXKRd3DJl17lMOkhSGsT5toEzhHCj3vYa5nj.png', 'karena perusahaan ini sudah saya incar dari dulu', '2024-06-22 00:51:10', '2024-06-22 00:51:10'),
(17, '10000000', NULL, 'sertifikat_images/rvq7pQoHDuLKA24PGBPqrd1nWnJC3ymij6wyJv5S.png', NULL, 'cv_images/Jl4iTl11z5nv8F5VfVsf4owr1exRJofHPiSeP0JT.png', 'Karena perusahaan ini nomor 1', '2024-06-22 23:57:46', '2024-06-22 23:57:46');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaans`
--

CREATE TABLE `perusahaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registerusers`
--

CREATE TABLE `registerusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `self_descriptions`
--

CREATE TABLE `self_descriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `deskripsi_diri` varchar(255) NOT NULL,
  `pengalaman` varchar(255) NOT NULL,
  `soft_skills` varchar(255) NOT NULL,
  `hard_skills` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `self_descriptions`
--

INSERT INTO `self_descriptions` (`id`, `nama`, `email`, `no_hp`, `deskripsi_diri`, `pengalaman`, `soft_skills`, `hard_skills`, `created_at`, `updated_at`) VALUES
(1, 'Diaz Divarhea', 'diazdivarhea@gmail.com', '082738473621', 'Mahir Bahasa C++', '2 Tahun Bekerja', '1. fwafaw', '1. ifnoqwfqw', '2024-06-20 05:52:27', '2024-06-20 05:52:27'),
(2, 'Siska', 'siska@gmail.com', '082726354723', 'osandpsafs', 'fiajsdfnsaofs', 'fsiafdsipfansf', 'osanfsdfsa', '2024-06-20 06:12:15', '2024-06-20 06:12:15'),
(3, 'Rian', 'rian@gmail.com', '089273625372', 'Aku seorang Programmer', '2 tahun bekerja sebagai backend developer', '12345', '12345', '2024-06-20 17:17:02', '2024-06-20 17:17:02'),
(4, 'Cahyo', 'cahyo@gmail.com', '086253627127', 'Seorang Programmer Ahli', '2 Tahun', 'sfafsafsa', 'aosjnfasfa', '2024-06-20 17:26:43', '2024-06-20 17:26:43'),
(5, 'Cika', 'cika@gmail.com', '082736152637', 'Programmer Handal', '3 Tahun', '12345678910', '12345678910', '2024-06-20 17:35:46', '2024-06-20 17:35:46'),
(7, 'Kartika Sindi', 'kartika@gmail.com', '082638729383', 'Seorang Programmer Ahli', '4 Tahun Backend Developer', 'blablabla', 'blablabla', '2024-06-20 18:09:13', '2024-06-20 18:09:13'),
(8, 'Budiono Siregar', 'budiono@gmail.com', '082736182734', 'Seorang Public Speaker', '3 Tahun Bekerja', '32fafsa', 'f424fa', '2024-06-21 04:04:15', '2024-06-21 04:04:15'),
(9, 'Syawalian Dinata', 'Syawalian@gmail.com', '082736103847', 'Teknik Kimia', '2 Tahun Bekerja', '32521', 'rwfawfaw', '2024-06-21 04:19:13', '2024-06-21 04:19:13'),
(10, 'Audrey Putri', 'audrey@gmail.com', '082739652021', 'Teknik Sipil', 'bekerja 4 tahun di bidang arsitek', '21r1r', 'r21rs', '2024-06-21 04:25:14', '2024-06-21 04:25:14'),
(11, 'Syahrul Ramadhan', 'syahrul@gmail.com', '082736402919', 'blablabla', '4 Tahun', 'critical thinking', 'management project', '2024-06-21 09:13:43', '2024-06-21 09:13:43'),
(12, 'Muhammad Fadli Hazazi', 'fadli@gmail.com', '082918273021', 'Seorang Programmer yang telah bekerja lebih dari 3 tahun', 'Backend developer di perusahaan xxx', 'management project, time execution', 'hardskill', '2024-06-22 00:49:49', '2024-06-22 00:49:49'),
(13, 'Andi Setiawan', 'andi@gmail.com', '08273617461', 'Programmer yang sudah bekerja lebih dari 4 tahun', 'Pernah bekerja di perusahaan xxx', 'laravel, react native, dll', 'dapat blalbla', '2024-06-22 23:56:46', '2024-06-22 23:56:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facebook_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`, `facebook_id`) VALUES
(2, 'uang', 'uang@gmail.com', NULL, '$2y$10$I51D8gt/UAFm.fM2TnxZKe.DtA9Hrtjt9I0wODUTDnm06Myx2pP6.', 1, NULL, '2024-06-10 10:55:19', '2024-06-10 10:55:19', NULL),
(3, 'company1', 'company1@gmail.com', NULL, '$2y$10$9ktG8RFjEfvcPOHiVllBPeaIxL32OmwvwKEEML/oFF9H5.q05XwFO', 2, NULL, '2024-06-10 10:57:04', '2024-06-10 10:57:04', NULL),
(4, 'company2', 'company2@gmail.com', NULL, '$2y$10$SzOOlPP0eXj3MRkz9YuOVudbSgEKEInun75AZjmeEeUgWhKdcAaJG', 2, NULL, '2024-06-10 11:00:04', '2024-06-10 11:00:04', NULL),
(5, 'company3', 'company3@gmail.com', NULL, '$2y$10$a6ubjlflKWlo9xV.IEtKEOt93auLPJ9e2FqS.WAjTBdXCaRnlbwMm', 2, NULL, '2024-06-10 11:02:07', '2024-06-10 11:02:07', NULL),
(6, 'company4', 'company4@gmail.com', NULL, '$2y$10$P02Gj6sEDnI33Ar/LAH8q.smIC22j1fHCeZPNcF7Qj88Mc0GLJE/u', 2, NULL, '2024-06-10 11:05:34', '2024-06-10 11:05:34', NULL),
(7, 'company5', 'company5@gmail.com', NULL, '$2y$10$gIrMUu3TOGO0EO.0EApSQuAm/0PaHKhwPfhHEobX5GVYs0YaIBTaC', 2, NULL, '2024-06-10 11:08:41', '2024-06-10 11:08:41', NULL),
(8, 'company6', 'company6@gmail.com', NULL, '$2y$10$noZ6jbFrkCC3jibTCrwWxeZ9MfH6R3AHtpH.ATodeGXfg7M.C6iJC', 2, NULL, '2024-06-10 11:09:47', '2024-06-10 11:09:47', NULL),
(9, 'diaz divarhea', 'diadiaz@gmail.com', NULL, '$2y$10$.mGP5fTKBvP6Gmm2m1VMfOmw4qd88kwOkjBTSIrTn76wdIi8vHD6.', 1, NULL, '2024-06-10 12:05:49', '2024-06-10 12:05:49', NULL),
(10, 'diaz suhanda', 'suhanda@gmail.com', NULL, '$2y$10$mr42KXgK8On0b3LIxS2g5O.d52tqcdZxh1RExIiaogCJeIpCS4VcS', 1, NULL, '2024-06-10 12:07:47', '2024-06-10 12:07:47', NULL),
(11, 'Tech Company', 'TechCompany@gmail.com', NULL, '$2y$10$SFtQ29KugQ8olTzoxsnRU.tK7KnfWOib.oMFZXHzJYOq5bad9G.xW', 2, NULL, '2024-06-20 03:58:07', '2024-06-20 03:58:07', NULL),
(12, 'syawalian', 'syawalian@gmail.com', '2024-06-21 07:11:00', '$2y$10$uZGrm/YuGps8B3cyemjFZ.OtmhT85clO5nv.XQFl9uwjYQdt1heT.', 1, NULL, '2024-06-21 07:08:59', '2024-06-21 07:11:00', NULL),
(13, 'Muhammad Fadli', 'fadli@gmail.com', '2024-06-21 07:29:02', '$2y$10$fdnemT7z0Dns/i6PdilY2uj9wgE/4iaNnppvFAOuVnrMOPOQscJb2', 1, NULL, '2024-06-21 07:27:33', '2024-06-21 07:29:02', NULL),
(14, 'naufal adli', 'naufaladli@gmail.com', '2024-06-21 08:07:23', '$2y$10$2KnRnqoGdmiyZmOi6mVly.cKQvn3/L/bhUyoTDs.qnJwqJXDy0Rma', 1, NULL, '2024-06-21 08:06:39', '2024-06-21 08:07:23', NULL),
(15, 'Giovanni Febian Panggabean', 'gvani510@gmail.com', NULL, '$2y$10$khDgi3B2c7pBpmJPHNn1euZz3QPEUyUfoRofOugtwRgMtWkowBEjG', 1, 'eNv7vksWMxU0fBNqZyjvssPFEJTKeG5D58xeta4EgTZRulmqI2k9oa6kv6Rx', '2024-06-21 08:47:18', '2024-06-21 08:47:18', '1197337338311812'),
(16, 'kue basah', 'kuebasah@gmail.com', NULL, '$2y$10$1/hfstjbKFhOImGiQXaFgOYMq46u0qgCbtui1x0JlX74u1xgdZL9K', 1, NULL, '2024-06-22 08:18:11', '2024-06-22 08:18:11', NULL),
(17, 'Andi', 'andi@gmail.com', NULL, '$2y$10$xJyFYeQKmSctR.jCICGe4eWE.M6HyFvHLcAS1mAnQJceadFYW795K', 1, NULL, '2024-06-22 23:51:57', '2024-06-22 23:51:57', NULL),
(18, 'company35', 'company35@gmail.com', NULL, '$2y$10$IcDqWfMJEZzZ/k4vpHAXzey3br5IOE.shik1ZifvigF4fZhV05.Yi', 2, NULL, '2024-06-22 23:58:46', '2024-06-22 23:58:46', NULL),
(19, 'company45', 'company45@gmail.com', NULL, '$2y$10$WtFJqFZMv6QE7Qrgq8FQo.9zdcO04bERCW8/Gt3lqnBParmyieFgm', 2, NULL, '2024-06-23 00:03:17', '2024-06-23 00:03:17', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_groups`
--
ALTER TABLE `access_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_filament_user_id_foreign` (`filament_user_id`);

--
-- Indexes for table `applicant_locations`
--
ALTER TABLE `applicant_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applications_job_seeker_id_foreign` (`job_seeker_id`),
  ADD KEY `applications_job_id_foreign` (`job_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `filament_password_resets`
--
ALTER TABLE `filament_password_resets`
  ADD KEY `filament_password_resets_email_index` (`email`);

--
-- Indexes for table `filament_users`
--
ALTER TABLE `filament_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `filament_users_email_unique` (`email`);

--
-- Indexes for table `informasi_lainnyas`
--
ALTER TABLE `informasi_lainnyas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_user_id_foreign` (`user_id`);

--
-- Indexes for table `job_providers`
--
ALTER TABLE `job_providers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `job_providers_email_unique` (`email`);

--
-- Indexes for table `job_seekers`
--
ALTER TABLE `job_seekers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `job_seekers_email_unique` (`email`);

--
-- Indexes for table `job_types`
--
ALTER TABLE `job_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `job_types_name_unique` (`name`);

--
-- Indexes for table `job_vacancies`
--
ALTER TABLE `job_vacancies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kehidupan_budayas`
--
ALTER TABLE `kehidupan_budayas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locations_ibfk_1` (`job_provider_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `more_information`
--
ALTER TABLE `more_information`
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
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `perusahaan_email_unique` (`email`);

--
-- Indexes for table `perusahaans`
--
ALTER TABLE `perusahaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerusers`
--
ALTER TABLE `registerusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registerusers_email_unique` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `self_descriptions`
--
ALTER TABLE `self_descriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_groups`
--
ALTER TABLE `access_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicant_locations`
--
ALTER TABLE `applicant_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filament_users`
--
ALTER TABLE `filament_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `informasi_lainnyas`
--
ALTER TABLE `informasi_lainnyas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_providers`
--
ALTER TABLE `job_providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `job_seekers`
--
ALTER TABLE `job_seekers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_types`
--
ALTER TABLE `job_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_vacancies`
--
ALTER TABLE `job_vacancies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kehidupan_budayas`
--
ALTER TABLE `kehidupan_budayas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `more_information`
--
ALTER TABLE `more_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perusahaans`
--
ALTER TABLE `perusahaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registerusers`
--
ALTER TABLE `registerusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `self_descriptions`
--
ALTER TABLE `self_descriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_filament_user_id_foreign` FOREIGN KEY (`filament_user_id`) REFERENCES `filament_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`),
  ADD CONSTRAINT `applications_job_seeker_id_foreign` FOREIGN KEY (`job_seeker_id`) REFERENCES `job_seekers` (`id`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_ibfk_1` FOREIGN KEY (`job_provider_id`) REFERENCES `job_providers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
