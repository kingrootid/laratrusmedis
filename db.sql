-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Feb 2022 pada 16.44
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.14
SET
    SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
    time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `larastrusmedis`
--
-- --------------------------------------------------------
--
-- Struktur dari tabel `doctors`
--
CREATE TABLE `doctors` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
    `specialist_id` int(11) NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `doctors`
--
INSERT INTO
    `doctors` (
        `id`,
        `name`,
        `images`,
        `specialist_id`,
        `created_at`,
        `updated_at`
    )
VALUES
    (
        1,
        'Dr. Nurul',
        'RSBP-Dokter_41.-dr.-Nurul-Widiati-Sp.M-585x618.png',
        1,
        NULL,
        NULL
    ),
    (
        2,
        'Dr. Simon',
        'cba7b68a-c95b-46b5-a2e6-66ba7449cfd7_43.jpeg',
        2,
        NULL,
        NULL
    ),
    (
        3,
        'Dr. Bobby Singh',
        'Dr-Bobby-Singh.jpg',
        2,
        NULL,
        NULL
    ),
    (
        4,
        'Dr. Luthfi Saad',
        'Dr-Luthfi-Saad.jpg',
        3,
        NULL,
        NULL
    ),
    (5, 'Dr. Mona', 'dr-mona.png', 4, NULL, NULL);

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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------
--
-- Struktur dari tabel `migrations`
--
CREATE TABLE `migrations` (
    `id` int(10) UNSIGNED NOT NULL,
    `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `batch` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--
INSERT INTO
    `migrations` (`id`, `migration`, `batch`)
VALUES
    (11, '2014_10_12_000000_create_users_table', 1),
    (
        12,
        '2014_10_12_100000_create_password_resets_table',
        1
    ),
    (
        13,
        '2019_08_19_000000_create_failed_jobs_table',
        1
    ),
    (
        14,
        '2019_12_14_000001_create_personal_access_tokens_table',
        1
    ),
    (
        15,
        '2022_02_04_124916_create_spesialists_table',
        1
    ),
    (16, '2022_02_05_121337_create_doctors_table', 1),
    (18, '2022_02_05_153720_create_products_table', 2);

-- --------------------------------------------------------
--
-- Struktur dari tabel `password_resets`
--
CREATE TABLE `password_resets` (
    `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------
--
-- Struktur dari tabel `personal_access_tokens`
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `personal_access_tokens`
--
INSERT INTO
    `personal_access_tokens` (
        `id`,
        `tokenable_type`,
        `tokenable_id`,
        `name`,
        `token`,
        `abilities`,
        `last_used_at`,
        `created_at`,
        `updated_at`
    )
VALUES
    (
        1,
        'App\\Models\\User',
        1,
        'token',
        'f8d1cca183a38617dc136f4662a59af619a017b9b131fcc899e3301a5b2cc13f',
        '[\"*\"]',
        NULL,
        '2022-02-05 07:28:20',
        '2022-02-05 07:28:20'
    );

-- --------------------------------------------------------
--
-- Struktur dari tabel `products`
--
CREATE TABLE `products` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `doctor_id` int(11) NOT NULL,
    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
    `price` double NOT NULL,
    `breakdown_price` text COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------
--
-- Struktur dari tabel `spesialists`
--
CREATE TABLE `spesialists` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `images` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `spesialists`
--
INSERT INTO
    `spesialists` (
        `id`,
        `name`,
        `images`,
        `created_at`,
        `updated_at`
    )
VALUES
    (1, 'Neurology', 'neurology.png', NULL, NULL),
    (
        2,
        'Dentist',
        '360_F_302681154_9HOWdvGLtCKpfwO5B85yESszG7MfmlUl.jpg',
        NULL,
        NULL
    ),
    (3, 'Urulogist', '6490656.png', NULL, NULL),
    (
        4,
        'Cardiology',
        'Breast-Cance-92.jpg',
        NULL,
        NULL
    ),
    (5, 'Radiology', 'images.jpg', NULL, NULL);

-- --------------------------------------------------------
--
-- Struktur dari tabel `users`
--
CREATE TABLE `users` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `email_verified_at` timestamp NULL DEFAULT NULL,
    `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `role` enum('Admin', 'Pasien') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pasien',
    `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
    `dob` date NOT NULL,
    `gender` enum('Male', 'Female') COLLATE utf8mb4_unicode_ci NOT NULL,
    `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
    `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--
INSERT INTO
    `users` (
        `id`,
        `name`,
        `email`,
        `email_verified_at`,
        `password`,
        `role`,
        `address`,
        `dob`,
        `gender`,
        `phone`,
        `remember_token`,
        `created_at`,
        `updated_at`
    )
VALUES
    (
        1,
        'IQBAL',
        'dustwork.id@gmail.com',
        NULL,
        '$2y$10$4i0aavKvwdQdXAp9tqeRC.bbHzmIk9wDBxmbuN.Re5Vp1ZAjAeMzq',
        'Pasien',
        '',
        '2021-01-05',
        'Male',
        '082335078685',
        NULL,
        '2022-02-05 05:33:17',
        '2022-02-05 05:33:17'
    );

--
-- Indexes for dumped tables
--
--
-- Indeks untuk tabel `doctors`
--
ALTER TABLE
    `doctors`
ADD
    PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE
    `failed_jobs`
ADD
    PRIMARY KEY (`id`),
ADD
    UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE
    `migrations`
ADD
    PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE
    `password_resets`
ADD
    KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE
    `personal_access_tokens`
ADD
    PRIMARY KEY (`id`),
ADD
    UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
ADD
    KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`, `tokenable_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE
    `products`
ADD
    PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `spesialists`
--
ALTER TABLE
    `spesialists`
ADD
    PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE
    `users`
ADD
    PRIMARY KEY (`id`),
ADD
    UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--
--
-- AUTO_INCREMENT untuk tabel `doctors`
--
ALTER TABLE
    `doctors`
MODIFY
    `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE
    `failed_jobs`
MODIFY
    `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE
    `migrations`
MODIFY
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 19;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE
    `personal_access_tokens`
MODIFY
    `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE
    `products`
MODIFY
    `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `spesialists`
--
ALTER TABLE
    `spesialists`
MODIFY
    `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE
    `users`
MODIFY
    `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;