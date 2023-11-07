-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 07 nov. 2023 à 14:28
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `citruslife`
--

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `date_post` date NOT NULL,
  `author_name_post` varchar(100) NOT NULL,
  `text_post` longtext NOT NULL,
  `pic_post` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`date_post`, `author_name_post`, `text_post`, `pic_post`, `id`) VALUES
('2023-11-07', 'Valentin', 'Bonjour,\r\nJe suis nouveau sur ce site, quelqu\'un peut-il m\'expliquer le fonctionnement svp?', 'Array', 16),
('2023-11-07', 'Valentin', 'Nouvelle publication les frères', 'Array', 17),
('2023-11-07', 'Valentin', 'Salut David ça va fréro de la téci?', 'Array', 18),
('2023-11-07', 'David', 'Salut à tous!', 'Array', 19),
('0000-00-00', 'David', 'Un nouveau test', 'Array', 20);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `mail`, `password`, `name`, `lastname`, `birthday`) VALUES
(1, 'Gab@gmail.com', '2018', 'Gabin', 'Onraet', '2018-01-08'),
(2, 'Cam@gmail.com', '2018', 'Camille', 'Vanborre', '2017-05-30'),
(3, 'Val@gmail.com', '2018', 'Valentin', 'Onraet', '2016-08-22'),
(5, 'matt@gmail.com', '2018', 'Matthieu', 'Onraet', '1986-01-07'),
(6, 'Lau@gmail.com', '2018', 'Laurence', 'Onraet', '2000-05-30'),
(7, 'Dav@gmail.com', '2018', 'David', 'De Castro', '2235-01-07');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
