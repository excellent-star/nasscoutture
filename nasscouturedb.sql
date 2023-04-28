-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 10:26 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nasscouturedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `qte` double(8,2) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `pu` double(8,2) NOT NULL,
  `remise` double(8,2) NOT NULL DEFAULT 0.00,
  `commande_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `qte`, `designation`, `pu`, `remise`, `commande_id`) VALUES
(191, 10.00, 'tunique', 10000.00, 0.00, 118),
(190, 5.00, 'veste', 10000.00, 0.00, 118),
(189, 2.00, 'chemise', 5000.00, 0.00, 117),
(188, 1.00, 'jupe', 5000.00, 0.00, 117),
(187, 1.00, 'veste', 5000.00, 0.00, 117),
(192, 5.00, 'veste', 10000.00, 0.00, 118),
(193, 10.00, 'tunique', 10000.00, 0.00, 118);

-- --------------------------------------------------------

--
-- Table structure for table `avances`
--

CREATE TABLE `avances` (
  `id` int(10) UNSIGNED NOT NULL,
  `montantav` double(8,2) NOT NULL,
  `dateav` date NOT NULL,
  `reste` double DEFAULT NULL,
  `commande_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `avances`
--

INSERT INTO `avances` (`id`, `montantav`, `dateav`, `reste`, `commande_id`) VALUES
(90, 25000.00, '2023-04-28', 125000, 118);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `sexe` varchar(2) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `mesure_id` int(11) DEFAULT NULL,
  `mesuresfem_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `sexe`, `tel`, `mesure_id`, `mesuresfem_id`) VALUES
(4326, 'hede', 'chris', 'M', '074689467', 4484, NULL),
(4327, 'betouda', 'masra', 'F', '044444', NULL, 123),
(4333, 'mawa', 'bousavou', 'M', '074589684', NULL, NULL),
(4328, 'jean', 'bernard', 'M', '0123466', 4485, NULL),
(4329, 'makitas', 'laurame', 'M', '02265987', NULL, NULL),
(4330, 'mwekassa', 'jack', 'M', '0777777', NULL, NULL),
(4331, 'makaya', 'levi', 'M', '08795455', NULL, NULL),
(4332, 'dominique', 'marseille', 'M', '55666555555', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(11) NOT NULL,
  `datedepot` date DEFAULT NULL,
  `facture` varchar(255) DEFAULT NULL,
  `dateretrait` date DEFAULT NULL,
  `dateretire` date DEFAULT NULL,
  `montant_total` varchar(255) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `etat` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commandes`
--

INSERT INTO `commandes` (`id`, `datedepot`, `facture`, `dateretrait`, `dateretire`, `montant_total`, `client_id`, `etat`) VALUES
(107, '2023-04-07', '20', '2023-05-06', NULL, NULL, 4326, NULL),
(108, NULL, NULL, NULL, NULL, NULL, 4326, NULL),
(117, '2023-04-28', '1682643976', NULL, NULL, '20000', 4327, NULL),
(118, '2023-04-28', '1682649511', NULL, NULL, '150000', 4326, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mesures`
--

CREATE TABLE `mesures` (
  `id` int(10) UNSIGNED NOT NULL,
  `page` varchar(30) DEFAULT NULL,
  `h_epaulev` int(11) DEFAULT 0,
  `h_longueurmanchev` int(11) DEFAULT 0,
  `poitrinev` int(11) DEFAULT 0,
  `ventrev` int(11) DEFAULT 0,
  `h_longueurhautv` int(11) DEFAULT 0,
  `h_tourmanchev` int(11) DEFAULT 0,
  `dosv` int(11) DEFAULT 0,
  `h_colv` int(11) DEFAULT 0,
  `taillep` int(11) DEFAULT 0,
  `bassinp` int(11) DEFAULT 0,
  `h_cuissep` int(11) DEFAULT 0,
  `fermeturep` int(11) DEFAULT 0,
  `h_longueurp` int(11) DEFAULT 0,
  `h_genouxp` int(11) DEFAULT 0,
  `h_piedp` int(11) DEFAULT 0,
  `fondp` int(11) DEFAULT 0,
  `h_epaulech` int(11) DEFAULT 0,
  `h_longueurmanchech` int(11) DEFAULT 0,
  `poitrinech` int(11) DEFAULT 0,
  `ventrech` int(11) DEFAULT 0,
  `h_longueurhautch` int(11) DEFAULT 0,
  `h_poignetch` int(11) DEFAULT 0,
  `tourmanchech` int(11) DEFAULT 0,
  `h_coudech` int(11) DEFAULT 0,
  `h_colch` int(11) DEFAULT 0,
  `epauleg` int(11) DEFAULT 0,
  `poitrineg` int(11) DEFAULT 0,
  `ventreg` int(11) DEFAULT 0,
  `longueurg` int(11) DEFAULT 0,
  `h_commentaire` text DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `h_commentairev` varchar(200) DEFAULT NULL,
  `h_commentairep` text DEFAULT NULL,
  `h_molletp` int(11) NOT NULL DEFAULT 0,
  `h_commentairech` text DEFAULT NULL,
  `h_commentaireg` text DEFAULT NULL,
  `epaul_tun` int(10) DEFAULT 0,
  `longueurmanch_tun` int(10) DEFAULT 0,
  `poitrine_tun` int(11) DEFAULT 0,
  `ventre_tun` int(11) DEFAULT 0,
  `longueurhaut_tun` int(11) DEFAULT 0,
  `poignet_tun` int(11) DEFAULT 0,
  `tourmanche_tun` int(11) DEFAULT 0,
  `coude_tun` int(11) DEFAULT 0,
  `col_tun` int(11) DEFAULT 0,
  `h_commentaire_tun` text DEFAULT NULL,
  `epaule_tun` int(11) DEFAULT 0,
  `longueurmanche_tun` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mesures`
--

INSERT INTO `mesures` (`id`, `page`, `h_epaulev`, `h_longueurmanchev`, `poitrinev`, `ventrev`, `h_longueurhautv`, `h_tourmanchev`, `dosv`, `h_colv`, `taillep`, `bassinp`, `h_cuissep`, `fermeturep`, `h_longueurp`, `h_genouxp`, `h_piedp`, `fondp`, `h_epaulech`, `h_longueurmanchech`, `poitrinech`, `ventrech`, `h_longueurhautch`, `h_poignetch`, `tourmanchech`, `h_coudech`, `h_colch`, `epauleg`, `poitrineg`, `ventreg`, `longueurg`, `h_commentaire`, `client_id`, `h_commentairev`, `h_commentairep`, `h_molletp`, `h_commentairech`, `h_commentaireg`, `epaul_tun`, `longueurmanch_tun`, `poitrine_tun`, `ventre_tun`, `longueurhaut_tun`, `poignet_tun`, `tourmanche_tun`, `coude_tun`, `col_tun`, `h_commentaire_tun`, `epaule_tun`, `longueurmanche_tun`) VALUES
(4485, NULL, 4, 4, 4, 0, 5, 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 4328, 'r', NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0),
(4484, NULL, 3, 2, 0, 0, 0, 0, 0, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 4326, 'dd', 'afsfd', 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mesuresfem`
--

CREATE TABLE `mesuresfem` (
  `id` int(10) UNSIGNED NOT NULL,
  `page` varchar(30) DEFAULT NULL,
  `epaulev` int(11) DEFAULT 0,
  `longueurmanchev` int(11) DEFAULT 0,
  `tourpoitrinev` int(11) DEFAULT 0,
  `tourtaillev` int(11) DEFAULT 0,
  `longueurpincev` int(11) DEFAULT 0,
  `longueurtaillev` int(11) DEFAULT 0,
  `longueurhautv` int(11) DEFAULT 0,
  `tourmanchev` int(11) DEFAULT 0,
  `colv` int(11) DEFAULT 0,
  `commentairev` text DEFAULT NULL,
  `tourtaillep` int(11) DEFAULT 0,
  `tourfessep` int(11) DEFAULT 0,
  `cuissep` int(11) DEFAULT 0,
  `genouxp` int(11) DEFAULT 0,
  `longueurp` int(11) DEFAULT 0,
  `piedp` int(11) DEFAULT 0,
  `commentairep` text DEFAULT NULL,
  `tourtaillej` int(11) DEFAULT 0,
  `tourfessej` int(11) DEFAULT 0,
  `longueurj` int(11) DEFAULT 0,
  `commentairej` text DEFAULT NULL,
  `epauler` int(11) DEFAULT 0,
  `longueurmancher` int(11) DEFAULT 0,
  `tourpoitriner` int(11) DEFAULT 0,
  `tourtailler` int(11) DEFAULT 0,
  `longueurpincer` int(11) DEFAULT 0,
  `longueurtailler` int(11) DEFAULT 0,
  `longueurrober` int(11) DEFAULT 0,
  `tourfesser` int(11) DEFAULT 0,
  `tourmancher` int(11) DEFAULT 0,
  `commentairer` text DEFAULT NULL,
  `epaulech` int(11) DEFAULT 0,
  `longueurmanchech` int(11) DEFAULT 0,
  `tourpoitrinech` int(11) DEFAULT 0,
  `tourtaillech` int(11) DEFAULT 0,
  `longueurpincech` int(11) DEFAULT 0,
  `longueurtaillech` int(11) DEFAULT 0,
  `longueurhautch` int(11) DEFAULT 0,
  `poignetch` int(11) DEFAULT 0,
  `coudech` int(11) DEFAULT 0,
  `colch` int(11) DEFAULT 0,
  `tourmanchech` int(11) DEFAULT 0,
  `f_tourmanchech` int(11) DEFAULT 0,
  `commentairech` text DEFAULT NULL,
  `commentaire` text DEFAULT NULL,
  `f_epaule_tun` int(10) DEFAULT 0,
  `f_loongueurmanche_tun` int(11) DEFAULT 0,
  `f_poitrine_tun` int(11) NOT NULL DEFAULT 0,
  `ff_ventre_tun` int(11) DEFAULT 0,
  `f_longueurhhaut_tun` int(11) DEFAULT 0,
  `f_poignet_tun` int(11) DEFAULT 0,
  `f_tourmanche_tun` int(11) DEFAULT 0,
  `f_coude_tunn` int(11) DEFAULT 0,
  `f_col_tun` int(11) DEFAULT 0,
  `commentaire_tun` text DEFAULT NULL,
  `f_longueurmanche_tun` int(11) NOT NULL DEFAULT 0,
  `f_ventre_tun` int(11) NOT NULL DEFAULT 0,
  `f_longueurhaut_tun` int(11) NOT NULL DEFAULT 0,
  `f_coude_tun` int(11) NOT NULL DEFAULT 0,
  `client_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mesuresfem`
--

INSERT INTO `mesuresfem` (`id`, `page`, `epaulev`, `longueurmanchev`, `tourpoitrinev`, `tourtaillev`, `longueurpincev`, `longueurtaillev`, `longueurhautv`, `tourmanchev`, `colv`, `commentairev`, `tourtaillep`, `tourfessep`, `cuissep`, `genouxp`, `longueurp`, `piedp`, `commentairep`, `tourtaillej`, `tourfessej`, `longueurj`, `commentairej`, `epauler`, `longueurmancher`, `tourpoitriner`, `tourtailler`, `longueurpincer`, `longueurtailler`, `longueurrober`, `tourfesser`, `tourmancher`, `commentairer`, `epaulech`, `longueurmanchech`, `tourpoitrinech`, `tourtaillech`, `longueurpincech`, `longueurtaillech`, `longueurhautch`, `poignetch`, `coudech`, `colch`, `tourmanchech`, `f_tourmanchech`, `commentairech`, `commentaire`, `f_epaule_tun`, `f_loongueurmanche_tun`, `f_poitrine_tun`, `ff_ventre_tun`, `f_longueurhhaut_tun`, `f_poignet_tun`, `f_tourmanche_tun`, `f_coude_tunn`, `f_col_tun`, `commentaire_tun`, `f_longueurmanche_tun`, `f_ventre_tun`, `f_longueurhaut_tun`, `f_coude_tun`, `client_id`) VALUES
(123, NULL, 5, 3, 3, 3, 0, 0, 2, 2, 2, 'fsfds', 3, 2, 2, 2, 2, 2, 'fsf', 2, 2, 2, 'dd', 3, 3, 3, 2, 0, 0, 0, 0, 0, 'sffa', 2, 2, 2, 2, 0, 0, 0, 2, 2, 0, 0, 0, 'sfsf', NULL, 3, 3, 2, 2, 2, 3, 0, 0, 0, 'saf', 0, 0, 0, 0, 4327);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(80, '2014_10_12_000000_create_users_table', 1),
(81, '2014_10_12_100000_create_password_resets_table', 1),
(82, '2019_08_19_000000_create_failed_jobs_table', 1),
(83, '2019_12_21_091425_create_clients_table', 1),
(84, '2019_12_21_095435_create_mesures_table', 1),
(85, '2019_12_25_095413_create_mesuresfem_table', 1),
(86, '2019_12_30_044552_create_commandes_table', 2),
(87, '2019_12_30_052204_create_articles_table', 3),
(88, '2019_12_30_052748_create_avances_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_commande_id_foreign` (`commande_id`);

--
-- Indexes for table `avances`
--
ALTER TABLE `avances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `avances_commande_id_foreign` (`commande_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_tel_unique` (`tel`),
  ADD KEY `clients_mesure_id_foreign` (`mesure_id`),
  ADD KEY `clients_mesuresfem_id_foreign` (`mesuresfem_id`);

--
-- Indexes for table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commandes_client_id_foreign` (`client_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mesures`
--
ALTER TABLE `mesures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mesures_client_id_foreign` (`client_id`);

--
-- Indexes for table `mesuresfem`
--
ALTER TABLE `mesuresfem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mesuresfem_client_id_foreign` (`client_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `avances`
--
ALTER TABLE `avances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4334;

--
-- AUTO_INCREMENT for table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mesures`
--
ALTER TABLE `mesures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4486;

--
-- AUTO_INCREMENT for table `mesuresfem`
--
ALTER TABLE `mesuresfem`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
