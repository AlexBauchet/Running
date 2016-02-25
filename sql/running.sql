-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Jeu 25 Février 2016 à 14:57
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
  `profile_picture` varchar(500) NOT NULL,
  `time_10km` int(10) NOT NULL,
  `time_20km` int(10) NOT NULL,
  `time_half` int(10) NOT NULL,
  `time_marathon` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `profiles`
--

INSERT INTO `profiles` (`id`, `firstname`, `lastname`, `gender`, `birthdate`, `home_town`, `home_country`, `language`, `avg_speed`, `description`, `blablarun`, `rate`, `profile_picture`, `time_10km`, `time_20km`, `time_half`, `time_marathon`, `created_at`, `updated_at`, `user_id`) VALUES
(3, 'pauline', 'servant', '2', '1987-02-19', 'paris', 'france', 'es', 5, 'j''adore courir et voyager', 0, 4, '', 4, 5, 0, 0, '2016-02-19 00:00:00', '2016-02-25 14:34:28', 2),
(5, 'alex', 'b', 'm', '1990-05-17', 'nanterre', 'france', 'francais', 6, 'je n aime pas les roux', 1, 4, '', 0, 0, 0, 0, '2016-01-19 00:00:00', '2016-02-19 00:00:00', 3),
(7, 'david', 'deeck', 'm', '1960-12-08', '', '', '', 5, '', 1, 1, '', 0, 0, 0, 0, '2016-01-01 00:00:00', '2016-01-01 00:00:00', 1),
(8, 'pau', 'svt', '', '0000-00-00', 'nanterre', 'France', '', 0, 'modif user', 0, 0, '', 0, 0, 0, 0, '0000-00-00 00:00:00', '2016-02-25 14:19:51', 4),
(9, 'pau4', 'ser', '1', '0000-00-00', 'Paris', 'France', '', 0, 'test p4@g.com', 0, 0, '', 3, 3, 0, 0, '2016-02-25 14:54:14', '2016-02-25 14:54:14', 5);

-- --------------------------------------------------------

--
-- Structure de la table `runnings`
--

CREATE TABLE `runnings` (
  `id` int(11) NOT NULL,
  `run_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `zip_code` int(10) NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 NOT NULL,
  `country` varchar(255) CHARACTER SET utf8 NOT NULL,
  `distance` int(11) NOT NULL,
  `speed` int(11) NOT NULL,
  `departure_date` date NOT NULL,
  `departure_time` int(13) NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `runnings`
--

INSERT INTO `runnings` (`id`, `run_name`, `address`, `zip_code`, `city`, `country`, `distance`, `speed`, `departure_date`, `departure_time`, `latitude`, `longitude`, `created_at`, `updated_at`, `description`, `user_id`) VALUES
(13, 'test1', '136 avenue pablo picasso', 0, 'nanterre', 'France', 4, 7, '2016-02-25', 0, '48.88829580', '2.22755360', '2016-02-24', '2016-02-24', '', 2),
(14, 'test1', '136 avenue pablo picasso', 0, 'nanterre', 'France', 4, 7, '2016-02-25', 0, '48.88829580', '2.22755360', '2016-02-24', '2016-02-24', '', 2),
(15, 'test1', '136 avenue pablo picasso', 0, 'nanterre', 'France', 4, 7, '2016-02-25', 0, '48.88829580', '2.22755360', '2016-02-24', '2016-02-24', '', 2),
(16, 'Paris - Motte Piquet', '69 avenue de Suffren', 0, 'PARIS', 'france', 12, 4, '2016-02-26', 0, '48.85190470', '2.30014090', '2016-02-24', '2016-02-24', 'Motte Piquet -> Quais de Seine -> Ile aux Cygnes -> Trocadero -> Tour Eiffel -> Champs de Mars -> Ecole Militaire -> Retour Ave de Suffren', 2),
(17, 'test2', 'rue des poupees', 0, 'paris', 'france', 11, 7, '2016-02-28', 0, '48.85661400', '2.35222190', '2016-02-24', '2016-02-24', '', 2),
(18, 'test2', 'rue des poupees', 0, 'paris', 'france', 11, 7, '2016-02-28', 0, '48.85661400', '2.35222190', '2016-02-24', '2016-02-24', '', 2),
(19, 'Paris 10eme', '46 rue de Paradis', 0, '75010', 'Paris', 10, 6, '2016-02-28', 0, '48.87585990', '2.35005770', '2016-02-25', '2016-02-25', 'Rue du Paradis Quai de Valmy Canal St Martin Retour 10eme', 2),
(20, 'Paris 9eme', '30 faubourg poissonniere', 0, 'Paris', 'france', 19, 5, '2016-03-08', 17, '48.87295720', '2.34851580', '2016-02-25', '2016-02-25', 'Poissoniere Gare du Nord Canal St Martin retour 9eme', 2),
(21, 'Fractionn&eacute;', '95 boulevard de grenelle', 0, 'Paris', 'France', 8, 5, '2016-03-05', 22, '48.84983130', '2.29624010', '2016-02-25', '2016-02-25', 'Depart 21h15 Ecole Militaire Motte-Piquet Champs de Mars', 4);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`) VALUES
(1, 'test1@gmail.com', 'azerty1&', 'member'),
(2, 'p@g.com', '$2y$10$ZfhZEyobMpQJxVFeiLbVROxsr0bLWUlkLdLCLcRUUjMB4foaG2joK', 'member'),
(3, 'p2@g.com', '$2y$10$yl43e5WrOI6kyWyaDIvBKuoM46.SL8yXQ.mmwMuO4JqFQQj9BcDrO', 'member'),
(4, 'p3@g.com', '$2y$10$yGy.IRcCI5jMKC3ahIeDVO6fsUnBzhuaW7VBRtbZLGgNUdfln5loC', 'member'),
(5, 'p4@g.com', '$2y$10$JrzlUUpmYLaTgI7uiM0wXeSX0XaYDAZE/ZQzmlhMQinNgU/ooMIRe', 'member');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `runnings`
--
ALTER TABLE `runnings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
