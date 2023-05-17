-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2023 pada 06.18
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_blog_v8_2_1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barcodeqr`
--

CREATE TABLE `barcodeqr` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barcodeqr`
--

INSERT INTO `barcodeqr` (`id`, `nama`, `kode_nama`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'dafid', 'dafid', NULL, '2023-04-30 18:27:55', '2023-04-30 18:27:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `nama_kategori`, `slug`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Berita', 'berita', NULL, '2023-04-27 19:30:51', '2023-04-27 19:30:51'),
(2, 'Php', 'php', NULL, '2023-04-27 19:30:54', '2023-04-27 19:30:54'),
(3, 'belajar', 'belajar', NULL, '2023-04-27 19:31:05', '2023-04-27 19:31:05'),
(4, 'PHP_HTML', 'php-html', NULL, '2023-04-27 19:31:09', '2023-04-27 19:31:09'),
(5, 'Hacker', 'hacker', NULL, '2023-04-27 19:31:18', '2023-04-27 19:31:18'),
(6, 'programmer', 'programmer', 'adalah jago coding', '2023-04-27 19:31:43', '2023-04-27 19:31:43'),
(7, 'okok', 'okok', NULL, '2023-04-30 17:39:58', '2023-04-30 17:39:58'),
(8, 'siap', 'siap', NULL, '2023-04-30 17:42:03', '2023-04-30 17:42:03'),
(9, 'kj', 'kj', NULL, '2023-04-30 17:59:43', '2023-04-30 17:59:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_11_22_183929_create_category_table', 1),
(5, '2022_11_22_185010_create_tags_table', 1),
(6, '2022_12_19_195949_create_posts_table', 1),
(7, '2022_12_19_200551_create_posts_tags_table', 1),
(8, '2023_01_02_192724_add_softdeletes_to_posts_table', 1),
(9, '2023_02_16_193201_add_tipe_akun_to_users_table', 1),
(10, '2023_02_16_201939_add_user_id_to_posts_table', 1),
(11, '2023_02_26_190853_add_googleid_to_users_table', 1),
(12, '2023_02_27_183912_add_facebook_id_to_users_table', 1),
(13, '2023_03_06_201815_create_pengaturan_table', 1),
(14, '2023_03_06_211155_add_foto_profile_to_users_table', 1),
(15, '2023_03_15_214559_add_fitur_email_to_users', 1),
(16, '2023_04_18_221231_create_barcodeqr_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_situs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_situs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_situs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `judul_situs`, `deskripsi_situs`, `icon_situs`, `created_at`, `updated_at`) VALUES
(1, 'Website Kampungku untuk indonesia', 'Website ini di rancang untuk masyarakat indonesia agar lebih dekat mengerti lebih jauh perkembangan teknologi pada masa sekarang dan selanjutnya. untuk itu saya membangun website ini bertujuan membantu masyaeakat indonesia yang awalnya tidak terlalu mengerti mengenai teknologi menjadi mahir dan pintar. terimakasih mohon untuk dukungan anda seikhlasnya. alamat paypal saya : paypal.me//dafidalfian1998', NULL, NULL, '2023-05-17 04:10:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `isi_postingan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_postingan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `judul`, `category_id`, `isi_postingan`, `slug`, `foto_postingan`, `created_at`, `updated_at`, `deleted_at`, `user_id`) VALUES
(1, 'Berita indonesia', 4, 'Kampungku merupakah sebuah wilayah yang sangat luas', 'berita-indonesia', 'postingan_foto/LdOQxDcXPwVIHIdvdjIXXhgBZhbbhay1rE53Y9HF.jpg', '2023-04-27 19:33:02', '2023-04-27 19:33:02', NULL, '1'),
(2, 'Belajar agar bisa menjadi hacker terbaik', 5, 'Hacker merupakan orang yang ahli di budang komputer dan teknologi. selai itu hacker juga seorang yang mempunyai kemampuan lebih dari orang yang menguasai programmin dan juga jaringan komputer. maka tak heran jika memanfaatkan kemampuannya untuk mengeksploitasi suatu system den menemukan celah pada suatu sistem baik berupa sistem web maupun mobile.', 'belajar-agar-bisa-menjadi-hacker-terbaik', 'postingan_foto/uT5MCwTCgV6Zw3CjP4kttWMuxSQsigrOJFjWRADU.jpg', '2023-04-27 19:34:06', '2023-05-02 21:08:03', NULL, '1'),
(3, 'Perang antara ukrasina yang tak kunjung selesai hingga sekarang', 1, 'Perang antara ukrasina  Perang antara ukrasina yang tak kunjung selesai hingga sekarangtak kunjung selesai hingga sekarangPerang antara ukrasina yang tak kunjung selesai h ingga sekarang', 'perang-antara-ukrasina-yang-tak-kunjung-selesai-hingga-sekarang', 'postingan_foto/ArBWgyf1deNyXJNwsl1Gja0X97YSUhJSyOpV3Goq.jpg', '2023-04-27 19:35:02', '2023-04-27 19:35:02', NULL, '1'),
(4, 'Orang baik adalah orang tulus', 1, 'Orang baik adalah orang tulus yang merasa dirinya tidak pernah ada sifat buruk pada orang lain sehingga orang baik tadi selalu diremehkan karena sangking baiknya.', 'orang-baik-adalah-orang-tulus', 'postingan_foto/nrhnBiF7z8BjUnvUv7Jeolr0vDujlhSIKZducqbG.jpg', '2023-05-07 19:46:37', '2023-05-07 19:46:37', NULL, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts_tags`
--

CREATE TABLE `posts_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `posts_id` int(11) NOT NULL,
  `tags_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts_tags`
--

INSERT INTO `posts_tags` (`id`, `posts_id`, `tags_id`, `created_at`, `updated_at`) VALUES
(3, 1, 4, NULL, NULL),
(4, 2, 1, NULL, NULL),
(8, 3, 2, NULL, NULL),
(12, 4, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tags`
--

INSERT INTO `tags` (`id`, `nama_tag`, `slug`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'kampung', 'kampung', NULL, '2023-04-27 19:29:37', '2023-04-27 19:29:37'),
(2, 'Berita', 'berita', NULL, '2023-04-27 19:29:52', '2023-04-27 19:29:52'),
(3, 'PHP', 'php', NULL, '2023-04-27 19:30:12', '2023-04-27 19:30:12'),
(4, 'Hacker', 'hacker', 'anonoymous adalah hacker', '2023-04-27 19:30:35', '2023-04-27 19:30:35'),
(5, 'jkkjkj', 'jkkjkj', NULL, '2023-04-30 17:39:46', '2023-04-30 17:39:46'),
(6, 'kjsd', 'kjsd', NULL, '2023-04-30 18:00:05', '2023-04-30 18:00:05'),
(7, 'tag html', 'tag-html', NULL, '2023-05-09 19:36:17', '2023-05-09 19:36:17'),
(8, 'belajar php', 'belajar-php', NULL, '2023-05-09 19:36:30', '2023-05-09 19:36:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipe_akun` tinyint(1) NOT NULL DEFAULT 0,
  `id_google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_pengguna` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `verify_key`, `username`, `active`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `tipe_akun`, `id_google`, `facebook_id`, `foto_pengguna`) VALUES
(1, 'Dafid A', NULL, 'masdafid123', NULL, 'sdwi02467@gmail.com', '2023-04-26 19:52:52', '$2y$10$HK389ogHwURtE4fVpLK9y.YCA4m2OVeGsoWhWE1IxtPCW4NSrTy.i', NULL, '2023-04-26 19:52:52', '2023-05-17 04:12:29', 1, '116594077536669847695', '1210401466517141', 'profile/iwEkLKXvBwfOu61dnFqf4zhp4PgyBHmD8zleu5Q0.jpg'),
(2, 'bagas', NULL, 'xdark_404', NULL, 'bagas@gmail.com', '2023-04-26 19:54:25', '$2y$10$qbEGbIRSKMsbDmli8rjne.Uwfq2ZDtg2HcVuv9toN07X7XvY/Gj1y', NULL, '2023-04-26 19:54:25', '2023-04-26 20:45:22', 0, NULL, NULL, NULL),
(3, 'dafid alfian', NULL, NULL, NULL, 'id.dafidalfian@gmail.com', NULL, '$2y$10$g7goNPLOo0FnqiHu3ggtv.wqafu8y0eBc92cLJEriOrjzHIHa3an.', NULL, '2023-04-27 17:36:45', '2023-04-27 17:36:45', 0, '101103689470290779762', NULL, 'profile/101103689470290779762.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barcodeqr`
--
ALTER TABLE `barcodeqr`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts_tags`
--
ALTER TABLE `posts_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barcodeqr`
--
ALTER TABLE `barcodeqr`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `posts_tags`
--
ALTER TABLE `posts_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
