-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2017 at 12:04 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_brusselswebfest`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_filmlikes`
--

CREATE TABLE `t_filmlikes` (
  `t_filmLike` tinyint(3) UNSIGNED NOT NULL,
  `t_film` tinyint(3) UNSIGNED NOT NULL,
  `t_user` tinyint(4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `t_films`
--

CREATE TABLE `t_films` (
  `id_film` tinyint(3) UNSIGNED NOT NULL,
  `catégorie` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `titre` varchar(80) COLLATE utf8mb4_bin NOT NULL,
  `realisateur` varchar(80) COLLATE utf8mb4_bin NOT NULL,
  `origine` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `diffusion` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `genre` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `saison` tinyint(2) NOT NULL,
  `duree` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `langue` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `synopsis` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `ressourceImage` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `ressourceVideo` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `t_films`
--

INSERT INTO `t_films` (`id_film`, `catégorie`, `titre`, `realisateur`, `origine`, `diffusion`, `genre`, `saison`, `duree`, `langue`, `synopsis`, `ressourceImage`, `ressourceVideo`, `likes`) VALUES
(1, 'Webdoc', 'These memories won\'t last', 'Stuart Campbell', '', '', '', 0, '', '', '', '', '', 0),
(2, 'Transmedia', 'Gentriville', 'M.Sterlin & E.Walter', '', '', '', 0, '', '', '', '', '', 0),
(3, 'Webserie', 'Nanaroscope', 'Régis Brochier', '', '', '', 0, '', '', '', '', '', 0),
(4, 'Webserie', 'Vlogvember', 'Adrian Bliss', '', '', '', 0, '', '', '', '', '', 0),
(5, 'Webdoc', 'Alma, a tale of violence', 'Ruben Korenfeld', '', '', '', 0, '', '', '', '', '', 0),
(6, 'Transmedia', 'Altération', 'Jérôme Blanquet ', '', '', '', 0, '', '', '', '', '', 0),
(7, 'Webserie', 'Brown girls', 'Sam Bailey', '', '', '', 0, '', '', '', '', '', 0),
(8, 'Webserie', 'C’est ça l’histoire, LSN et RLX ', 'LSN et RLX ', '', '', '', 0, '', '', '', '', '', 0),
(9, 'Webserie', 'Click to your heart', '', '', '', '', 0, '', '', '', '', '', 0),
(10, 'Webdoc', 'Down the Deep, Dark web', 'Duki Dror & Tzachi Schiff', '', '', '', 0, '', '', '', '', '', 0),
(11, 'Webdoc', 'Do not track', 'Brett Gaylor', '', '', '', 0, '', '', '', '', '', 0),
(12, 'Webdoc', 'Facebookistan', 'Jakob Gottschau', '', '', '', 0, '', '', '', '', '', 0),
(13, 'Webserie', 'Falling for challenge', '', '', '', '', 0, '', '', '', '', '', 0),
(14, 'Webserie', 'La théorie des balls', 'Slimane-Baptiste Berhoun', '', '', '', 0, '', '', '', '', '', 0),
(15, 'Transmedia', 'Le grand complot ', 'Junge Römer ', '', '', '', 0, '', '', '', '', '', 0),
(16, 'Webdoc', 'La méthode de Ken Loach', 'Emmanuel Roy', '', '', '', 0, '', '', '', '', '', 0),
(17, 'Transmedia', 'Seances', 'Guy Maddin', '', '', '', 0, '', '', '', '', '', 0),
(18, 'Webdoc', 'Terreur 404', 'Sébastien Diaz', '', '', '', 0, '', '', '', '', '', 0),
(19, 'Webserie', 'The foxy five', 'Jabu Nadia Newman', '', '', '', 0, '', '', '', '', '', 0),
(20, 'Webserie', 'To be continued ', '', '', '', '', 0, '', '', '', '', '', 0),
(21, 'Webdoc', 'Waynak', '', '', '', '', 0, '', '', '', '', '', 0),
(22, 'Webserie', 'We are fathers ', 'Jerry Ying ', '', '', '', 0, '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_users`
--

CREATE TABLE `t_users` (
  `id_user` tinyint(4) UNSIGNED NOT NULL,
  `Nom` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `Prenom` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `Pseudo` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Email` varchar(80) COLLATE utf8mb4_bin NOT NULL,
  `MotDePasse` varchar(80) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_filmlikes`
--
ALTER TABLE `t_filmlikes`
  ADD PRIMARY KEY (`t_filmLike`),
  ADD KEY `c_foreignkey1` (`t_film`),
  ADD KEY `c_foreignkey2` (`t_user`);

--
-- Indexes for table `t_films`
--
ALTER TABLE `t_films`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_filmlikes`
--
ALTER TABLE `t_filmlikes`
  MODIFY `t_filmLike` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_films`
--
ALTER TABLE `t_films`
  MODIFY `id_film` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id_user` tinyint(4) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_filmlikes`
--
ALTER TABLE `t_filmlikes`
  ADD CONSTRAINT `c_foreignkey1` FOREIGN KEY (`t_film`) REFERENCES `t_films` (`id_film`),
  ADD CONSTRAINT `c_foreignkey2` FOREIGN KEY (`t_user`) REFERENCES `t_users` (`id_user`);

--
-- Constraints for table `t_users`
--
ALTER TABLE `t_users`
  ADD CONSTRAINT `t_users_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `t_filmlikes` (`t_filmLike`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
