-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  lun. 29 jan. 2018 à 18:59
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `db_name`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

CREATE TABLE `adherent` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idcarte` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `iddistri` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `datecreation` date NOT NULL,
  `ordre_passage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`id`, `nom`, `prenom`, `idcarte`, `iddistri`, `datecreation`, `ordre_passage`) VALUES
(4, 'LE GOUIX', 'Clement', '3', '3', '2018-01-22', 0),
(5, 'LE GOUIX', 'Clement', '4', '4', '2018-01-22', 0),
(6, 'LE GOUIX', 'Clement', '5', '5', '2018-01-22', 0),
(7, 'LE GOUIX', 'Clement', '6', '6', '2018-01-22', 0),
(8, 'LE GOUIX', 'Clement', '7', '7', '2018-01-22', 0),
(9, 'LE GOUIX', 'Clement', '8', '8', '2018-01-22', 0),
(10, 'LE GOUIX', 'Clement', '9', '9', '2018-01-22', 0),
(11, 'LE GOUIX', 'Clement', '10', '10', '2018-01-22', 0),
(12, 'LE GOUIX', 'Clement', '11', '11', '2018-01-22', 0),
(13, 'LE GOUIX', 'Clement', '12', '12', '2018-01-22', 0),
(14, 'LE GOUIX', 'Clement', '13', '13', '2018-01-22', 0),
(15, 'LE GOUIX', 'Clement', '14', '14', '2018-01-22', 0),
(16, 'LE GOUIX', 'Clement', '15', '15', '2018-01-22', 0),
(17, 'LE GOUIX', 'Clement', '16', '16', '2018-01-22', 0),
(18, 'LE GOUIX', 'Clement', '17', '17', '2018-01-22', 0),
(19, 'LE GOUIX', 'Clement', '18', '18', '2018-01-22', 0),
(20, 'LE GOUIX', 'Clement', '19', '19', '2018-01-22', 0),
(21, 'LE GOUIX', 'Clement', '20', '20', '2018-01-22', 0),
(22, 'LE GOUIX', 'Clement', '21', '21', '2018-01-22', 0),
(23, 'LE GOUIX', 'Clement', '22', '22', '2018-01-22', 0),
(25, 'LE GOUIX', 'Clement', '24', '24', '2018-01-22', 0),
(26, 'LE GOUIX', 'Clement', '25', '25', '2018-01-22', 0),
(27, 'LE GOUIX', 'Clement', '26', '26', '2018-01-22', 0),
(28, 'LE GOUIX', 'Clement', '27', '27', '2018-01-22', 0),
(29, 'LE GOUIX', 'Clement', '28', '28', '2018-01-22', 0),
(30, 'LE GOUIX', 'Clement', '29', '29', '2018-01-22', 0),
(31, 'LE GOUIX', 'Clement', '30', '30', '2018-01-22', 0),
(32, 'LE GOUIX', 'Clement', '31', '31', '2018-01-22', 0),
(33, 'LE GOUIX', 'Clement', '32', '32', '2018-01-22', 0),
(34, 'LE GOUIX', 'Clement', '33', '33', '2018-01-22', 0),
(35, 'LE GOUIX', 'Clement', '34', '34', '2018-01-22', 0),
(36, 'LE GOUIX', 'Clement', '35', '35', '2018-01-22', 0),
(37, 'LE GOUIX', 'Clement', '36', '36', '2018-01-22', 0),
(38, 'LE GOUIX', 'Clement', '37', '37', '2018-01-22', 0),
(39, 'LE GOUIX', 'Clement', '38', '38', '2018-01-22', 0),
(40, 'LE GOUIX', 'Clement', '39', '39', '2018-01-22', 0),
(41, 'LE GOUIX', 'Clement', '40', '40', '2018-01-22', 0),
(42, 'LE GOUIX', 'Clement', '41', '41', '2018-01-22', 0),
(43, 'LE GOUIX', 'Clement', '42', '42', '2018-01-22', 0),
(44, 'LE GOUIX', 'Clement', '43', '43', '2018-01-22', 0),
(45, 'LE GOUIX', 'Clement', '44', '44', '2018-01-22', 0),
(46, 'LE GOUIX', 'Clement', '45', '45', '2018-01-22', 0),
(47, 'LE GOUIX', 'Clement', '46', '46', '2018-01-22', 0),
(48, 'LE GOUIX', 'Clement', '47', '47', '2018-01-22', 0),
(49, 'LE GOUIX', 'Clement', '48', '48', '2018-01-22', 0),
(50, 'LE GOUIX', 'Clement', '49', '49', '2018-01-22', 0),
(51, 'test', 'test', 'test', 'test', '2013-01-01', 0),
(52, 'fgsf', 'gfsgsf', 'gfg', 'dfgdf', '2013-01-01', 0),
(53, 'Bougenat', 'Michel', '00002', '0008739', '2018-01-26', 1),
(54, 'kldshglsh', 'kjsfglksfhgl', 'kjsdlkgj', 'sfjglsfjlg', '2018-01-26', 1),
(55, 'lkxgfl', 'kfjgldf', 'mfsjgmkfj', 'mfkgjdlf', '2018-01-26', 0),
(56, 'toto', 'ofofo', '0003', '370-6778', '2018-01-26', 0),
(57, 'LAIGUILLON', 'Benoit', '00276', '2018-00276', '2018-01-29', 0),
(58, 'kdkd', 'f,dkf', ',dknfk', 'kfkdnkf', '2018-01-29', 0);

-- --------------------------------------------------------

--
-- Structure de la table `app_users`
--

CREATE TABLE `app_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `app_users`
--

INSERT INTO `app_users` (`id`, `username`, `password`, `email`, `is_active`, `role_id`) VALUES
(2, 'clement', '$2y$13$aIa9cnoSw9L6T/dyX1kE1.vJxwPcHybdWGaAfApek6l7TYQPjblSC', 'c.lgouix@gmail.com', 1, 2),
(3, 'test', '$2y$13$Qf8nIer4tFVAHxtUW7hdUuEM36dvj1J19Fj8b9H1XZHKXQgrR0cFe', 'test@test.com', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`) VALUES
('20180122155440'),
('20180122162649'),
('20180123132147'),
('20180125133501'),
('20180126015509'),
('20180126021732'),
('20180126065800'),
('20180128055929');

-- --------------------------------------------------------

--
-- Structure de la table `passage`
--

CREATE TABLE `passage` (
  `id` int(11) NOT NULL,
  `adherent_id` int(11) DEFAULT NULL,
  `datepassage` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `passage`
--

INSERT INTO `passage` (`id`, `adherent_id`, `datepassage`, `user_id`) VALUES
(25, 11, '2018-01-28 06:06:53', 2),
(26, 12, '2018-01-28 06:22:22', 2),
(28, 51, '2018-01-29 11:05:58', 3),
(29, 53, '2018-01-29 11:06:54', 2);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `nom`) VALUES
(1, 'ROLE_USER'),
(2, 'ROLE_ADMIN');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `app_users`
--
ALTER TABLE `app_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C2502824F85E0677` (`username`),
  ADD UNIQUE KEY `UNIQ_C2502824E7927C74` (`email`),
  ADD KEY `IDX_C2502824D60322AC` (`role_id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `passage`
--
ALTER TABLE `passage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2B258F6725F06C53` (`adherent_id`),
  ADD KEY `IDX_2B258F67A76ED395` (`user_id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adherent`
--
ALTER TABLE `adherent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT pour la table `app_users`
--
ALTER TABLE `app_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `passage`
--
ALTER TABLE `passage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `app_users`
--
ALTER TABLE `app_users`
  ADD CONSTRAINT `FK_C2502824D60322AC` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Contraintes pour la table `passage`
--
ALTER TABLE `passage`
  ADD CONSTRAINT `FK_2B258F6725F06C53` FOREIGN KEY (`adherent_id`) REFERENCES `adherent` (`id`),
  ADD CONSTRAINT `FK_2B258F67A76ED395` FOREIGN KEY (`user_id`) REFERENCES `app_users` (`id`);
