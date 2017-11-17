-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 16 Novembre 2017 à 07:45
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_brusselswebfest`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_filmlikes`
--

CREATE TABLE `t_filmlikes` (
  `t_filmLike` tinyint(3) UNSIGNED NOT NULL,
  `id_user` tinyint(4) UNSIGNED NOT NULL,
  `id_film` tinyint(3) UNSIGNED NOT NULL,
  `nbLikes` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Contenu de la table `t_filmlikes`
--

INSERT INTO `t_filmlikes` (`t_filmLike`, `id_user`, `id_film`, `nbLikes`) VALUES
(1, 3, 9, 10),
(2, 4, 18, 20),
(3, 4, 9, 50);

-- --------------------------------------------------------

--
-- Structure de la table `t_films`
--

CREATE TABLE `t_films` (
  `id_film` tinyint(3) UNSIGNED NOT NULL,
  `categorie` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `titre` varchar(80) COLLATE utf8mb4_bin NOT NULL,
  `realisateur` varchar(80) COLLATE utf8mb4_bin NOT NULL,
  `origine` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `diffusion` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `genre` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `saison` tinyint(2) NOT NULL,
  `duree` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `langue` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `synopsis` varchar(2000) COLLATE utf8mb4_bin NOT NULL,
  `ressourceImage` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `ressourceVideo` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Contenu de la table `t_films`
--

INSERT INTO `t_films` (`id_film`, `categorie`, `titre`, `realisateur`, `origine`, `diffusion`, `genre`, `saison`, `duree`, `langue`, `synopsis`, `ressourceImage`, `ressourceVideo`) VALUES
(1, 'webdoc', 'These memories won''t last', 'Stuart Campbell', 'Australie', '27-11-2017', '', 0, '', 'Anglais', '', '', ''),
(2, 'transmedia', 'Gentriville', 'M.Sterlin & E.Walter', 'Canada', '27-11-2017', '', 0, '', 'Français', 'Gentriville est une ville fictive qui ressemble furieusement à Montréal, et un jeu documentaire dont l’internaute, de Montréal ou d’ailleurs, sera le héros ou l’héroïne. Le sujet ? La gentrification, ce phénomène qui voit des quartiers modestes s’embourgeoiser aux plans immobilier, commercial, urbanistique. L’expérience Gentriville, c’est 7 quartiers à traverser, 25 états d’âme à éprouver, 40 fins différentes, 32 vidéos avec des chercheurs, des militants, des commerçants, des locataires, des propriétaires, des résidents de Saint-Henri, du Mile End, d’Hochelaga-Maisonneuve, de Verdun, de Rosemont. Et des plongées à Paris, Buenos Aires, Londres et Vancouver.', '', ''),
(3, 'webserie', 'Nanaroscope', 'Régis Brochier', '', '27-11-2017', 'Mauvais film', 1, '', '', 'Nanaroscope est un éclat de rire.  Zombies nazis, ninjas américains, gitans cannibales, cow-boys nains, sosies de Bruce Lee... Magnifiquement ratés, ce sont de sublimes accidents, imputables à des producteurs hasardeux et des réalisateurs improbables, que l''on remercie ici par une fine sélection de leurs chefs-d''œuvre. Leurs réalisateurs et leurs acteurs, nous sont inconnus mais ces films sont des œuvres qui à leur manière ne sont pas dénuées de panache, d’esprit et d’une forme de beauté.', '', 'https://www.youtube.com/embed/9otvDXjsfHI'),
(4, 'webserie', 'Vlogvember', 'Adrian Bliss', '', '27-11-2017', 'Vlog', 0, '2-10min', 'Anglais', '', '', 'https://www.youtube.com/embed/F8nUe8D5-w0 '),
(5, 'webdoc', 'Alma, a tale of violence', 'Ruben Korenfeld', '', '27-11-2017', '', 0, '', '', '', '', ''),
(6, 'transmedia', 'Altération', 'Jérôme Blanquet ', '', '27-11-2017', 'VR-Fiction', 0, '20min', 'Anglais', 'Alexandro se porte volontaire pour une expérience sur l''étude des rêves. Il ne se doute pas qu''il va subir l''intrusion d''Elsa, une Intelligence Artificielle qui va numériser et assimiler son inconscient pour s''humaniser.', '', 'https://www.youtube.com/embed/EPW8HfQTNv4 '),
(7, 'webserie', 'Brown girls', 'Sam Bailey', 'USA', '27-11-2017', 'Comédie', 1, '7min', 'Anglais', '"Brown Girls" est l''histoire intime d''une amitié entre deux femmes de couleur. Ayant grandi dans des milieux foncièrement différents, Leila (Nabila Hossain) et Patricia (Sonia Denis) savent cependant qu''elles peuvent compter l''une sur l''autre pour affronter le joyeux bordel qu''est la vingtaine. Établir des ressemblances entre "Brown Girls", "Girls", "Awkward Black Girl" (la websérie qui a propulsé Issa Rae, créatrice de la série "Insecure"), ou encore "Broad City" ne serait que proposer un raccourci maladroit, car, si ces (web)séries ont pour unique point commun de mettre en scène des protagonistes de sexe féminin, leurs univers sont aussi riches que les psychologies de leurs personnages et les différentes pattes de leurs créateurs. Dans "Brown Girls", la diversité et l''univers LGBT sont également au rendez-vous, ancrés dans un Chicago contemporain.', '', 'https://player.vimeo.com/video/189724238?color=fe5f55 '),
(8, 'webserie', 'C’est ça l’histoire, LSN et RLX ', 'LSN et RLX ', '', '27-11-2017', '', 0, '3min', 'Français', 'C’est ça l’histoire, ce sont des films racontés sur YouTube façon punchline en accéléré. Cette chaîne a été créée il y a à peine un mois et propose déjà cinq vidéos avec une identité bien marquée. À chaque fois, le principe est le même : un film de la pop-culture est raconté pas tout à fait parfaitement… Comprenez : ça part en gros n’importe quoi avec des clins d’œil à la culture Web, et au féminisme ! Ce sont bien les références qui font le sel de cette série de vidéos. Résumer des films de manière humoristique n’est pas nouveau. Les résumer comme cela, si. Un exemple ? Harry Potter devient un rappeur présent dans le YouTube Game dans C’est ça l’histoire… normal.', '', 'https://www.youtube.com/embed/6Y_zPqZlEoE '),
(9, 'webserie', 'Click to your heart', 'Min Du Sik', 'Corée du Sud', '28-11-2017', 'Ecole-Romance', 1, '15min', 'Coréen', 'Min Ah, jeune lycéenne très maladroite ayant pour réputation de porter malheur, se fait transférer dans un nouveau lycée. Elle y retrouve son ami d''enfance Da Won et fait la rencontre de trois autres garçons : Ro Wun, Cha Hee et Ju Ho. Alors que tout le monde l''évite, Min Ah ne pourrait-elle pas avoir des prétendants ?', '', 'https://www.youtube.com/embed/CCbZYb38VzY '),
(10, 'webdoc', 'Down the Deep, Dark web', 'Duki Dror & Tzachi Schiff', '', '28-11-2017', '', 0, '', '', '', '', ''),
(11, 'webdoc', 'Do not track', 'Brett Gaylor', '', '28-11-2017', '', 0, '', '', '', '', ''),
(12, 'webdoc', 'Facebookistan', 'Jakob Gottschau', '', '28-11-2017', '', 0, '', '', '', '', ''),
(13, 'webserie', 'Falling for challenge', 'Lee Hyeong Min', 'Corée du sud', '28-11-2017', 'Romance', 1, '10min', 'Coréen', 'Na Do Jeon est un garçon timide travaillant à temps partiel comme "clown Pierrot" car il adore faire rire les gens. Ban Ha Na est une fille qui rêve de lancer son propre camion-restaurant. Les deux jeunes gens finiront par se rencontrer et tomber amoureux l''un de l''autre. Nous suivrons ainsi leur combat afin d''empêcher le club nommé "One Plus", l''endroit où est né leur amour, de fermer ses portes.', '', 'https://www.youtube.com/embed/5EG_7_4ffYI'),
(14, 'webserie', 'La théorie des balls', 'Slimane-Baptiste Berhoun', 'France', '28-11-2017', 'Comédie', 1, '9min', 'Français', 'Mitch, devenu DRH dans l''entreprise de Stan (clochard étant en fait un riche patron héritier d''une grosse fortune familiale), décide de créer en parallèle de son travail et grâce à ses employés, la « théorie des Balls » ; une théorie soi-disant scientifique qui explique le comportement des gens grâce à des particules quantiques (les « Balls ») qui influent sur notre personnalité et nos relations.\r\n\r\nMitch essaie donc de faire publier sa thèse dans la maison d''édition de son ancienne amie de lycée Héloïse, devenue éditrice. Mais entre un patron hyperactif, un comptable amateur de pornographie et bien d''autres employés tous plus incompétents les uns que les autres, la théorie des Balls devient vite un défi de taille.', '', 'https://www.youtube.com/embed/w6SraeFJl-8?rel=0&amp;controls=0&amp;showinfo=0'),
(15, 'transmedia', 'Le grand complot ', 'Junge Römer ', '', '28-11-2017', '', 0, '', '', '', '', ''),
(16, 'webdoc', 'La méthode de Ken Loach', 'Emmanuel Roy', '', '28-11-2017', '', 0, '', '', '', '', ''),
(17, 'transmedia', 'Seances', 'Phyllis Liang, Guy Maddin, Phoebe Greenberg, Penny Mancuso', '', '28-11-2017', '', 0, '', '', '', '', ''),
(18, 'webdoc', 'Terreur 404', 'Sébastien Diaz', '', '29-11-2017', '', 0, '', '', '', '', ''),
(19, 'webserie', 'The foxy five', 'Jabu Nadia Newman', 'Afrique du Sud', '28-11-2017', 'Feminism, Comedy, Black Women''s Issues, Intersectionality', 1, '15min', 'Anglais', 'The Foxy Five met en scène cinq jeunes femmes sud-africaines, noires et étudiantes, se lançant dans une guerre contre le sexisme et préparant une révolution. Les personnages de Blaq Beauty, Femme Fatale, Unibond, Prolly Plebs et WomxnWe, incarnent cinq archétypes de la femme féministe poussés à l’extrême mais facilement identifiables au quotidien. Chaque épisode d’une quinzaine de minutes aborde un sujet avec une problématique spécifique que de nombreuses femmes noires peuvent se poser.', '', 'https://www.youtube.com/embed/mA-B1t1KOmE '),
(20, 'webserie', 'To be continued ', 'Jeon Yong Wu', 'Corée du Sud', '29-11-2017', 'Comédie-Fantastique-Romance', 1, '15min', 'Coréen', 'Ce drama raconte l''histoire d''un boys band composé de Cha Eun Wu, Mun Bin, Jin Jin, MJ, Yun San Ha et Rocky, qui remontera soudainement le temps pour se retrouver à la veille de ses débuts. C''est avec l''aide de Jeong Ah Rin que ceux-ci feront tout afin de rétablir l''ordre des choses.', '', 'https://www.youtube.com/embed/XFUSh4tBrsE '),
(21, 'webdoc', 'Waynak', '', '', '29-11-2017', '', 0, '', '', '', '', ''),
(22, 'webserie', 'We are fathers ', 'Anastasia Griffith, Jay Thames, David Lee McInnis, and Daniel Brothers', 'USA', '29-11-2017', '', 1, '10min', '', '', '', 'https://www.youtube.com/embed/1wslpDcHdKM '),
(23, 'webdoc', 'Raconte ta ville', '', '', '', '', 5, '2min', 'Français', 'Depuis 2012, le réseau Canopé pilote l’opération "Raconte ta ville" qui consiste en la production par les élèves de webdocs qui traitent de leur environnement proche. Pour voir l’ensemble des réalisations, et pourquoi pas s’inspirer de cette opération pour réaliser ses propres projets avec les élèves, rendez-vous sur le site de"Raconte ta ville".', '', ''),
(24, 'webdoc', 'Network Effect', '', '', '', '', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `t_users`
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
-- Contenu de la table `t_users`
--

INSERT INTO `t_users` (`id_user`, `Nom`, `Prenom`, `Pseudo`, `Email`, `MotDePasse`) VALUES
(3, 'a', 'a', '', '', ''),
(4, 'b', 'b', '', '', ''),
(5, 'c', 'c', 'c', 'c', 'c');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `t_filmlikes`
--
ALTER TABLE `t_filmlikes`
  ADD PRIMARY KEY (`t_filmLike`),
  ADD KEY `c_foreignkey1` (`id_film`),
  ADD KEY `c_foreignkey2` (`id_user`);

--
-- Index pour la table `t_films`
--
ALTER TABLE `t_films`
  ADD PRIMARY KEY (`id_film`);

--
-- Index pour la table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `t_filmlikes`
--
ALTER TABLE `t_filmlikes`
  MODIFY `t_filmLike` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `t_films`
--
ALTER TABLE `t_films`
  MODIFY `id_film` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id_user` tinyint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `t_filmlikes`
--
ALTER TABLE `t_filmlikes`
  ADD CONSTRAINT `c_foreignkey1` FOREIGN KEY (`id_film`) REFERENCES `t_films` (`id_film`),
  ADD CONSTRAINT `c_foreignkey2` FOREIGN KEY (`id_user`) REFERENCES `t_users` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
