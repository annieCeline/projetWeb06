-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 04:32 PM
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
  `id_user` tinyint(4) UNSIGNED NOT NULL,
  `id_film` tinyint(3) UNSIGNED NOT NULL,
  `nbLikes` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `t_filmlikes`
--

INSERT INTO `t_filmlikes` (`t_filmLike`, `id_user`, `id_film`, `nbLikes`) VALUES
(1, 3, 9, 10),
(2, 4, 18, 20),
(3, 4, 9, 50);

-- --------------------------------------------------------

--
-- Table structure for table `t_films`
--

CREATE TABLE `t_films` (
  `id_film` tinyint(3) UNSIGNED NOT NULL,
  `categorie` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `titre` varchar(80) COLLATE utf8mb4_bin NOT NULL,
  `realisateur` varchar(80) COLLATE utf8mb4_bin NOT NULL,
  `origine` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `diffusion` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `genre` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `saison` tinyint(2) NOT NULL,
  `duree` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `langue` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `synopsis` varchar(2000) COLLATE utf8mb4_bin NOT NULL,
  `ressourceImage` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `ressourceVideo` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `t_films`
--

INSERT INTO `t_films` (`id_film`, `categorie`, `titre`, `realisateur`, `origine`, `diffusion`, `genre`, `saison`, `duree`, `langue`, `synopsis`, `ressourceImage`, `ressourceVideo`) VALUES
(1, 'webdoc', 'These memories won\'t last', 'Stuart Campbell', '', '27-11-2017', '', 0, '', '', '', '', ''),
(2, 'transmedia', 'Gentriville', 'M.Sterlin & E.Walter', '', '27-11-2017', '', 0, '', '', '', '', ''),
(3, 'webserie', 'Nanaroscope', 'Régis Brochier', '', '27-11-2017', '', 0, '', '', '', '', ''),
(4, 'webserie', 'Vlogvember', 'Adrian Bliss', '', '27-11-2017', '', 0, '', '', '', '', ''),
(5, 'webdoc', 'Alma, a tale of violence', 'Ruben Korenfeld', '', '27-11-2017', '', 0, '', '', '', '', ''),
(6, 'transmedia', 'Altération', 'Jérôme Blanquet ', '', '27-11-2017', '', 0, '', '', '', '', ''),
(7, 'webserie', 'Brown girls', 'Sam Bailey', '', '27-11-2017', '', 0, '', '', '', '', ''),
(8, 'webserie', 'C’est ça l’histoire, LSN et RLX ', 'LSN et RLX ', '', '27-11-2017', '', 0, '', '', '', '', ''),
(9, 'webserie', 'Click to your heart', '', '', '28-11-2017', '', 0, '', '', '', '', ''),
(10, 'webdoc', 'Down the Deep, Dark web', 'Duki Dror & Tzachi Schiff', '', '28-11-2017', '', 0, '', '', '', '', ''),
(11, 'webdoc', 'Do not track', 'Brett Gaylor', '', '28-11-2017', '', 0, '', '', '', '', ''),
(12, 'webdoc', 'Facebookistan', 'Jakob Gottschau', '', '28-11-2017', '', 0, '', '', '', '', ''),
(13, 'webserie', 'Falling for challenge', '', '', '28-11-2017', '', 0, '', '', '', '', ''),
(14, 'webserie', 'La théorie des balls', 'Slimane-Baptiste Berhoun', 'France', '28-11-2017', 'Comédie', 1, '9min', 'Français', 'Mitch, devenu DRH dans l\'entreprise de Stan (clochard étant en fait un riche patron héritier d\'une grosse fortune familiale), décide de créer en parallèle de son travail et grâce à ses employés, la « théorie des Balls » ; une théorie soi-disant scientifique qui explique le comportement des gens grâce à des particules quantiques (les « Balls ») qui influent sur notre personnalité et nos relations.\r\n\r\nMitch essaie donc de faire publier sa thèse dans la maison d\'édition de son ancienne amie de lycée Héloïse, devenue éditrice. Mais entre un patron hyperactif, un comptable amateur de pornographie et bien d\'autres employés tous plus incompétents les uns que les autres, la théorie des Balls devient vite un défi de taille.', '', 'https://www.youtube.com/embed/w6SraeFJl-8?rel=0&amp;controls=0&amp;showinfo=0'),
(15, 'transmedia', 'Le grand complot ', 'Junge Römer ', '', '28-11-2017', '', 0, '', '', '', '', ''),
(16, 'webdoc', 'La méthode de Ken Loach', 'Emmanuel Roy', '', '28-11-2017', '', 0, '', '', '', '', ''),
(17, 'transmedia', 'Seances', 'Guy Maddin', '', '28-11-2017', '', 0, '', '', '', '', ''),
(18, 'webdoc', 'Terreur 404', 'Sébastien Diaz', '', '29-11-2017', '', 0, '', '', '', '', ''),
(19, 'webserie', 'The foxy five', 'Jabu Nadia Newman', '', '28-11-2017', '', 0, '', '', '', '', ''),
(20, 'webserie', 'To be continued ', '', '', '29-11-2017', '', 0, '', '', '', '', ''),
(21, 'webdoc', 'Waynak', '', '', '29-11-2017', '', 0, '', '', '', '', ''),
(22, 'webserie', 'We are fathers ', 'Jerry Ying ', '', '29-11-2017', '', 0, '', '', '', '', '');

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
-- Dumping data for table `t_users`
--

INSERT INTO `t_users` (`id_user`, `Nom`, `Prenom`, `Pseudo`, `Email`, `MotDePasse`) VALUES
(3, 'a', 'a', '', '', ''),
(4, 'b', 'b', '', '', ''),
(5, 'c', 'c', 'c', 'c', 'c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_filmlikes`
--
ALTER TABLE `t_filmlikes`
  ADD PRIMARY KEY (`t_filmLike`),
  ADD KEY `c_foreignkey1` (`id_film`),
  ADD KEY `c_foreignkey2` (`id_user`);

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
  MODIFY `t_filmLike` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_films`
--
ALTER TABLE `t_films`
  MODIFY `id_film` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id_user` tinyint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_filmlikes`
--
ALTER TABLE `t_filmlikes`
  ADD CONSTRAINT `c_foreignkey1` FOREIGN KEY (`id_film`) REFERENCES `t_films` (`id_film`),
  ADD CONSTRAINT `c_foreignkey2` FOREIGN KEY (`id_user`) REFERENCES `t_users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
