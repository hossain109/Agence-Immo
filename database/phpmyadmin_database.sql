-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 11 déc. 2023 à 23:06
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `agance_immo`
--

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_07_234655_create_properties_table', 1),
(6, '2023_11_10_111841_create_options_table', 1),
(7, '2023_11_12_150841_create_pictures_table', 1),
(8, '2023_11_12_182442_create_option_property_table', 1),
(9, '2023_11_18_222622_uniquekeyforimageprperty', 1),
(10, '2023_11_21_134910_ajoterpropertysoftdelete', 2);

-- --------------------------------------------------------

--
-- Structure de la table `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `options`
--

INSERT INTO `options` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Ascensseur', '2023-11-18 21:41:55', '2023-11-18 21:41:55'),
(2, 'Gardian', '2023-11-18 21:42:05', '2023-11-18 21:42:05'),
(3, 'Gerdin', '2023-11-18 21:42:11', '2023-11-18 21:42:11'),
(4, 'Escallier', '2023-11-18 21:42:19', '2023-11-18 21:42:19'),
(5, 'Lumiere', '2023-11-18 21:42:25', '2023-11-18 21:42:25');

-- --------------------------------------------------------

--
-- Structure de la table `option_property`
--

CREATE TABLE `option_property` (
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `option_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `option_property`
--

INSERT INTO `option_property` (`property_id`, `option_id`) VALUES
(25, 1),
(26, 1),
(28, 1),
(23, 2),
(24, 2),
(27, 2),
(29, 2),
(30, 2),
(23, 3),
(24, 3),
(26, 3),
(27, 3),
(28, 3),
(29, 3),
(30, 3),
(23, 4),
(25, 4),
(26, 4),
(30, 4),
(24, 5),
(25, 5),
(26, 5),
(27, 5);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

CREATE TABLE `pictures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alt` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pictures`
--

INSERT INTO `pictures` (`id`, `alt`, `path`, `created_at`, `updated_at`) VALUES
(48, 'image1', '1zEFsJ9FQZ5xjo4HxsmNmDZzRGdGuOg5cTlaaWCv.jpg', '2023-11-20 14:37:39', '2023-11-20 14:37:39'),
(49, 'image2', '0AThBG7YXCxZxH3bEXOsYNz36d1Ffa9ycrH3BiQ3.jpg', '2023-11-20 14:37:50', '2023-11-20 14:37:50'),
(50, 'image3', 'p8Xhbo8aYjgHawHHjih0Pfo2Z2j4eErtzRHT3moQ.jpg', '2023-11-20 14:38:01', '2023-11-20 14:38:01'),
(51, 'image4', 'xxbxbxQb4H06cQmrKcisQ7umUdCb80CVU6ShKbff.jpg', '2023-11-20 14:38:12', '2023-11-20 14:38:12'),
(52, 'imag5', 'UFSUUg7KVwsFWw2d7o9PXJW3zT75SUQ32XmMuItq.jpg', '2023-11-20 14:38:22', '2023-11-20 14:38:22'),
(53, 'imag6', 'GvfGOcah2wu3EtORyFoo2z0y0nrTIDb5JJHy1NqP.jpg', '2023-11-20 14:38:30', '2023-11-20 14:38:30'),
(54, 'imag7', 'JqJKxlmmp0xjoCD2tJLYs0duc5JTI2As947H81xT.jpg', '2023-11-20 14:38:46', '2023-11-20 14:38:46'),
(55, 'image8', 'CTNPdUXRqWhtf95L6DLqjpndPBti1KuX6RHM1mNo.jpg', '2023-11-20 14:38:58', '2023-11-20 14:38:58'),
(56, 'image9', 'RGqSVzFyLa1glvW6rHsUkHAGVFIzMTWqpYIHOu6F.jpg', '2023-11-20 14:39:06', '2023-11-20 14:39:06'),
(57, 'image10', 'brUXdbUPmMJPetWbLRzUQKp2F6wvHzK45zBJFm7C.jpg', '2023-11-20 14:39:17', '2023-11-20 14:39:17'),
(58, 'image11', 'Lu7AdOiT67qCM7Al4coq2r4eknmR0MO3owbRVqZZ.jpg', '2023-11-20 14:39:27', '2023-11-20 14:39:27'),
(59, 'image12', 'vrruW4qORgNk1IajgWkxxIbjZep7DiC7hJj0pN5U.jpg', '2023-11-20 14:39:37', '2023-11-20 14:39:37'),
(60, 'image13', 'OuON2kykxM64eq90euRl7AmXUrSU9WuLpTz6SHUU.jpg', '2023-11-20 14:39:50', '2023-11-20 14:39:50'),
(61, 'image14', '2Zd5WqD9vJNfabNEoNzPAEBysNlH9xBDrQK7FkwQ.jpg', '2023-11-20 14:40:03', '2023-11-20 14:40:03'),
(62, 'image15', 'kzRp9N3X9TP6gq3G83p40CCvOfsodDn1cvS7deHS.jpg', '2023-11-20 14:40:13', '2023-11-20 14:40:13'),
(63, 'image16', '4IFdknFikJUxC33jdOyzvGykU9RdMimw54Q3ddVd.jpg', '2023-11-20 14:40:20', '2023-11-20 14:40:20'),
(64, 'ssss', 'xTZ8PvembSa3rV9UGmtpAzg0Q53wZ3DtFBncSCvG.jpg', '2023-11-21 12:55:55', '2023-11-21 12:55:55');

-- --------------------------------------------------------

--
-- Structure de la table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `surface` int(11) NOT NULL,
  `rooms` int(11) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `sold` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `picture_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `properties`
--

INSERT INTO `properties` (`id`, `title`, `description`, `surface`, `rooms`, `bedrooms`, `floor`, `price`, `city`, `address`, `postal_code`, `sold`, `created_at`, `updated_at`, `picture_id`, `deleted_at`) VALUES
(23, 'Mon premiere biens', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.', 40, 4, 2, 0, 120000, 'Le Kremlin-Bicêtre', '11 avenue Charles Gide', '94270', 0, '2023-11-20 14:46:20', '2023-11-20 14:46:20', 48, NULL),
(24, 'mon seconde bien', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.', 40, 4, 2, 2, 521000, 'saint denis', '19 rue pinel', '93200', 0, '2023-11-20 14:50:26', '2023-11-20 14:50:26', 49, NULL),
(25, 'Mon troiseme bien', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.', 100, 10, 8, 2, 32000, 'paris', '81 avenue philippe auguste', '75011', 0, '2023-11-20 18:08:08', '2023-11-20 18:08:08', 50, NULL),
(26, 'Mon quarteme bien', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.', 80, 8, 6, 5, 72000, 'Paris', '11 avenue nation', '75012', 1, '2023-11-20 18:09:12', '2023-11-20 18:09:12', 51, NULL),
(27, 'Mon cinqeme bien', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.', 60, 3, 2, 10, 160000, 'Nantere', '11 avenue Charles Gide', '94270', 0, '2023-11-20 18:10:01', '2023-11-20 18:10:01', 52, NULL),
(28, 'Mon sixeme bien', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.', 35, 3, 1, 6, 125000, 'Cergy', '25 av pontoise', '95000', 0, '2023-11-20 18:11:05', '2023-11-20 18:11:05', 53, NULL),
(29, 'Mon septeme bien', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.', 25, 2, 1, 1, 120000, 'Le Kremlin-Bicêtre', '11 avenue Charles Gide', '94270', 1, '2023-11-20 18:11:46', '2023-11-20 18:11:46', 54, NULL),
(30, 'sd sdf sdfsdf fs', 'sd sdf sdfsdf fssd sdf sdfsdf fssd sdf sdfsdf fs', 40, 4, 2, 0, 785421, 'Le Kremlin-Bicêtre', '11 avenue Charles Gide', '94270', 0, '2023-11-21 12:56:15', '2023-11-21 12:56:34', 64, '2023-11-21 13:56:34');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sorhab hossain', 'sohrab_sust_cse@yahoo.com', NULL, '$2y$12$s1fUnmEjg7b/dN0sA447E.h6klEVLTHdin4fMH0iCLu5.zqHQ/XuW', NULL, '2023-11-18 21:41:22', '2023-11-18 21:41:22');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `option_property`
--
ALTER TABLE `option_property`
  ADD PRIMARY KEY (`option_id`,`property_id`),
  ADD KEY `option_property_property_id_foreign` (`property_id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pictures_alt_unique` (`alt`);

--
-- Index pour la table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `properties_picture_id_unique` (`picture_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT pour la table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `option_property`
--
ALTER TABLE `option_property`
  ADD CONSTRAINT `option_property_option_id_foreign` FOREIGN KEY (`option_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `option_property_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_picture_id_foreign` FOREIGN KEY (`picture_id`) REFERENCES `pictures` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
