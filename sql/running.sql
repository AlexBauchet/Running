-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Ven 19 Février 2016 à 12:38
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `running`
--

-- --------------------------------------------------------

--
-- Structure de la table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8 NOT NULL,
  `birthdate` date NOT NULL,
  `home_town` varchar(255) CHARACTER SET utf8 NOT NULL,
  `home_country` varchar(255) CHARACTER SET utf8 NOT NULL,
  `language` varchar(50) CHARACTER SET utf8 NOT NULL,
  `avg_speed` int(11) NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `blablarun` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `profiles`
--

INSERT INTO `profiles` (`id`, `firstname`, `lastname`, `gender`, `birthdate`, `home_town`, `home_country`, `language`, `avg_speed`, `description`, `blablarun`, `rate`, `created_at`, `updated_at`, `user_id`) VALUES
(3, 'pauline', 'servant', 'f', '1987-02-19', '', '', 'f', 5, 'descripion', 0, 4, '2016-02-19', '0000-00-00', 2);

-- --------------------------------------------------------

--
-- Structure de la table `runnings`
--

CREATE TABLE `runnings` (
  `id` int(11) NOT NULL,
  `run_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `run_level` varchar(255) CHARACTER SET utf8 NOT NULL,
  `distance_km` int(11) NOT NULL,
  `date` date NOT NULL,
  `latitude` int(13) NOT NULL,
  `longitude` int(13) NOT NULL,
  `created_at` date NOT NULL,
  `upgrated_at` date NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`) VALUES
(1, 'test1@gmail.com', 'azerty1&', '0'),
(2, 'p@g.com', '$2y$10$ZfhZEyobMpQJxVFeiLbVROxsr0bLWUlkLdLCLcRUUjMB4foaG2joK', '0');

-- --------------------------------------------------------

--
-- Structure de la table `user_running`
--

CREATE TABLE `user_running` (
  `user_id` int(11) NOT NULL,
  `running_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `runnings`
--
ALTER TABLE `runnings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `runnings`
--
ALTER TABLE `runnings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
