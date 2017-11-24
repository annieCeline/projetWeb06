-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 22 nov. 2017 à 15:32
-- Version du serveur :  10.1.22-MariaDB
-- Version de PHP :  7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Déchargement des données de la table `t_filmlikes`
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
  `genre` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `saison` tinyint(2) NOT NULL,
  `duree` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `langue` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `synopsis` varchar(2000) COLLATE utf8mb4_bin NOT NULL,
  `ressourceImage` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `ressourceVideo` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `projet` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `t_films`
--

INSERT INTO `t_films` (`id_film`, `categorie`, `titre`, `realisateur`, `origine`, `diffusion`, `genre`, `saison`, `duree`, `langue`, `synopsis`, `ressourceImage`, `ressourceVideo`, `projet`) VALUES
(1, 'webdoc', 'These memories won\'t last', 'Stuart Campbell', 'Australie', '27-11-2017', 'documentaire', 0, '', 'Anglais', 'Présentée comme une BD en ligne, These Memories Won’t Last raconte l’histoire d’un grand-père souffrant de démence. Alors que ses souvenirs passés et présents se confondent, il s\'interroge sur l’utilité même de la mémoire.', '', '', 0),
(2, 'transmedia', 'Gentriville', 'M.Sterlin & E.Walter', 'Canada', '27-11-2017', 'Webdoc', 0, '', 'Français', 'Gentriville est une ville fictive qui ressemble furieusement à Montréal, et un jeu documentaire dont l’internaute, de Montréal ou d’ailleurs, sera le héros ou l’héroïne. Le sujet ? La gentrification, ce phénomène qui voit des quartiers modestes s’embourgeoiser aux plans immobilier, commercial, urbanistique.\r\n\r\nL’expérience Gentriville, c’est 7 quartiers à traverser, 25 états d’âme à éprouver, 40 fins différentes, 32 vidéos avec des chercheurs, des militants, des commerçants, des locataires, des propriétaires, des résidents de Saint-Henri, du Mile End, d’Hochelaga-Maisonneuve, de Verdun, de Rosemont. Et des plongées à Paris, Buenos Aires, Londres et Vancouver\r\n', '', '', 0),
(3, 'webserie', 'Nanaroscope', 'Régis Brochier', '', '27-11-2017', 'Mauvais film', 1, '', '', 'Nanaroscope est un éclat de rire.  Zombies nazis, ninjas américains, gitans cannibales, cow-boys nains, sosies de Bruce Lee... Magnifiquement ratés, ce sont de sublimes accidents, imputables à des producteurs hasardeux et des réalisateurs improbables, que l\'on remercie ici par une fine sélection de leurs chefs-d\'œuvre. Leurs réalisateurs et leurs acteurs, nous sont inconnus mais ces films sont des œuvres qui à leur manière ne sont pas dénuées de panache, d’esprit et d’une forme de beauté.', '', 'https://www.youtube.com/embed/9otvDXjsfHI', 0),
(4, 'webserie', 'Vlogvember', 'Adrian Bliss', '', '27-11-2017', '', 1, '2 à 10min', 'Anglais', '', '', '', 0),
(5, 'webdoc', 'Alma, a tale of violence', 'Ruben Korenfeld', 'France', '27-11-2017', 'Doccumentaire', 0, '52 min', 'Français/Anglais', 'Alma a appartenu pendant 5 ans à l’un des gangs les plus violents\r\ndu Guatemala, pays aujourd’hui décimé par une guerre qui ne dit pas son nom.\r\nUne confession sans fard, les yeux dans les yeux.\r\nUn témoignage unique, dans lequel les mots de la jeune femme\r\nouvrent sur les images de ses souvenirs, du quotidien du Guatemala\r\net de l’intérieur des gangs.\r\n', '', 'https://player.vimeo.com/video/52080899', 0),
(6, 'transmedia', 'Altération', 'Jérôme Blanquet ', 'France', '27-11-2017', 'VR/Fiction', 0, '20 min', 'Anglais', 'Alexandro se porte volontaire pour une expérience sur l\'étude des rêves. Il ne se doute pas qu\'il va subir l\'intrusion d\'Elsa, une Intelligence Artificielle qui va numériser et assimiler son inconscient pour s\'humaniser.', '', 'https://www.youtube.com/embed/EPW8HfQTNv4', 0),
(7, 'webserie', 'Brown girls', 'Sam Bailey', 'Americaine', '27-11-2017', 'Comédie', 1, '7 min', 'Anglais', '\"Brown Girls\" est l\'histoire intime d\'une amitié entre deux femmes de couleur. Ayant grandi dans des milieux foncièrement différents, Leila (Nabila Hossain) et Patricia (Sonia Denis) savent cependant qu\'elles peuvent compter l\'une sur l\'autre pour affronter le joyeux bordel qu\'est la vingtaine.\r\nÉtablir des ressemblances entre \"Brown Girls\", \"Girls\", \"Awkward Black Girl\" (la websérie qui a propulsé Issa Rae, créatrice de la série \"Insecure\"), ou encore \"Broad City\" ne serait que proposer un raccourci maladroit, car, si ces (web)séries ont pour unique point commun de mettre en scène des protagonistes de sexe féminin, leurs univers sont aussi riches que les psychologies de leurs personnages et les différentes pattes de leurs créateurs. Dans \"Brown Girls\", la diversité et l\'univers LGBT sont également au rendez-vous, ancrés dans un Chicago contemporain.\r\n', '', 'https://player.vimeo.com/video/189724238?color=fe5f55', 0),
(8, 'webserie', 'C’est ça l’histoire, LSN et RLX ', 'LSN et RLX ', 'France', '27-11-2017', 'Humour', 1, '3 min', 'Français', 'C’est ça l’histoire, ce sont des films racontés sur YouTube façon punchline en accéléré. Cette chaîne a été créée il y a à peine un mois et propose déjà cinq vidéos avec une identité bien marquée.\r\n\r\nÀ chaque fois, le principe est le même : un film de la pop-culture est raconté pas tout à fait parfaitement… Comprenez : ça part en gros n’importe quoi avec des clins d’œil à la culture Web, et au féminisme !\r\n', '', 'https://www.youtube.com/embed/6Y_zPqZlEoE', 0),
(9, 'webserie', 'Click to your heart', 'Min Du Sik', 'Corée du sud', '28-11-2017', 'Ecole/Romance', 1, '15 min', 'Coréen', 'Min Ah, jeune lycéenne très maladroite ayant pour réputation de porter malheur, se fait transférer dans un nouveau lycée. Elle y retrouve son ami d\'enfance Da Won et fait la rencontre de trois autres garçons : Ro Wun, Cha Hee et Ju Ho. Alors que tout le monde l\'évite, Min Ah ne pourrait-elle pas avoir des prétendants ?', '', 'https://www.youtube.com/embed/CCbZYb38VzY', 0),
(10, 'webdoc', 'Down the Deep, Dark web', 'Duki Dror & Tzachi Schiff', '', '28-11-2017', 'Documentaire', 0, '56 min', 'Anglais', 'Pendant un voyage qui nous emmène à Tel Aviv, Prague et Berlin, le journaliste et scénariste Yuval Orr rencontre divers experts et un groupe de crypto-anarchistes clandestins combattant pour le droit à la vie privée. Down the Deep, Dark Web interroge les dérives de notre sociétés sous surveillance : au delà des spéculations financières et humaines, le film est une investigation personnelle à travers le Darknet.', '', 'https://www.youtube.com/embed/PWrXoippwP0', 0),
(11, 'webdoc', 'Do not track', 'Brett Gaylor', 'Canada', '28-11-2017', 'Documentaire', 0, '', 'Français/Anglais/Allemand', '\r\nTraque interdite est une série documentaire personnalisée consacrée à la vie privée et à l\'économie du Web. Découvrez ce que le Web sait sur vous… en partageant vos données avec nous.\r\n', '', 'https://www.youtube.com/embed/65VrjlD_UNM', 0),
(12, 'webdoc', 'Facebookistan', 'Jakob Gottschau', 'Danemark/Finlande', '28-11-2017', '', 0, '59 min', 'Allemand/Anglais/Danois', 'Si Facebook était un État il serait le plus puissant du monde. Avec 1,4 milliard d’utilisateurs, Facebook connecte deux tiers de la planète et possède un grand potentiel démocratique. Le film met en lumière les lois, le pouvoir, l’influence de Facebook sur la vie privée et la liberté d’expression. Le réseau social le plus important du monde nous incite à tout partager, pourtant cette société est loin d’être transparente et stocke toutes les informations de ses utilisateurs.', '', 'https://www.youtube.com/embed/mXyVxbGHa94', 0),
(13, 'webserie', 'Falling for challenge', 'Lee Hyeong Min', 'Corée du sud', '28-11-2017', 'Romance', 1, '10 min', 'Coréen', 'Na Do Jeon est un garçon timide travaillant à temps partiel comme \"clown Pierrot\" car il adore faire rire les gens. Ban Ha Na est une fille qui rêve de lancer son propre camion-restaurant. Les deux jeunes gens finiront par se rencontrer et tomber amoureux l\'un de l\'autre.\r\n\r\nNous suivrons ainsi leur combat afin d\'empêcher le club nommé \"One Plus\", l\'endroit où est né leur amour, de fermer ses portes.\r\n', '', 'https://www.youtube.com/embed/5EG_7_4ffYI', 0),
(14, 'webserie', 'La théorie des balls', 'Slimane-Baptiste Berhoun', 'France', '28-11-2017', 'Comédie', 1, '9 min', 'Français', 'Mitch, devenu DRH dans l\'entreprise de Stan (clochard étant en fait un riche patron héritier d\'une grosse fortune familiale), décide de créer en parallèle de son travail et grâce à ses employés, la « théorie des Balls » ; une théorie soi-disant scientifique qui explique le comportement des gens grâce à des particules quantiques (les « Balls ») qui influent sur notre personnalité et nos relations.\r\n\r\nMitch essaie donc de faire publier sa thèse dans la maison d\'édition de son ancienne amie de lycée Héloïse, devenue éditrice. Mais entre un patron hyperactif, un comptable amateur de pornographie et bien d\'autres employés tous plus incompétents les uns que les autres, la théorie des Balls devient vite un défi de taille.', '', 'https://www.youtube.com/embed/w6SraeFJl-8?rel=0&amp;controls=0&amp;showinfo=0', 0),
(15, 'transmedia', 'Le grand complot ', 'Junge Römer ', 'Autriche', '28-11-2017', 'Transmédia', 0, '1h10', 'Allemand', 'Le projet porte sur les théories du complot, qui connaissent une véritable renaissance numérique à l’ère des réseaux sociaux. L’abondance d’informations contradictoires et parfois inventées de toutes pièces qui nous parviennent chaque jour de multiples sources a donné naissance à une jungle de l’information, dans laquelle nous nous retrouvons totalement désorientés.\r\nAlors à quoi devons-nous ou pouvons-nous encore croire ? Qui nous fournit ces différentes informations ? Et à qui profite notre peur de l’incertitude ? \r\n', '', 'https://www.arte.tv/player/v3/index.php?json_url=https%3A%2F%2Fapi.arte.tv%2Fapi%2Fplayer%2Fv1%2Fconfig%2Ffr%2F078074-000-A%3Fautostart%3D1%26lifeCycle%3D1&amp;lang=fr_FR&amp;embed=1&amp;mute=0', 0),
(16, 'webdoc', 'La méthode de Ken Loach', 'Emmanuel Roy', 'France/Royaume-Uni', '28-11-2017', 'Documentaire', 0, 'Au choix', 'Anglais', 'A travers la fabrication de « Moi, Daniel Blake », le dernier film de Ken Loach primé à Cannes en 2016, et de ses précédents films, explorez comment ce cinéaste emblématique met en scène sa vision du réel. « La Méthode Ken Loach » est un film interactif dont le spectateur peut choisir la durée et la composition. ', '', 'https://player.vimeo.com/video/186901196?title=0&byline=0&portrait=0', 0),
(17, 'transmedia', 'Seances', 'Guy Maddin', 'France/Canada', '28-11-2017', 'Drame/Thriller', 2, '', 'Anglais', 'Guy Maddin invite chaque jour les visiteurs du Centre Pompidou à assister au tournage d’un film inédit, dont le scénario est inspiré d’un film perdu, réalisé par de grands noms de l’histoire du cinéma, Vigo, Lubitsch, Mizoguchi, von Stroheim, Naruse. \r\nLeurs disparitions peinent Guy Maddin autant qu’elles le hantent. Il convoque l’esprit errant de ces films-fantômes lors de « séances de spiritisme » charlatanesques et performatives.\r\n', '', 'https://www.youtube.com/embed/B0OSGE0_JfU', 0),
(18, 'webdoc', 'Terreur 404', 'Sébastien Diaz', 'Canada', '29-11-2017', '', 1, '9 min', 'Français', 'Terreur 404, c’est le code des pages qui n’existent pas, le seuil au-delà duquel le quotidien dans ce qu’il a de plus banal bascule vers l’étrange, l’inquiétant, l’horrible. Terreur 404, c’est une série de courtes fictions où nos pires cauchemars s’incarnent à travers les technologies avec lesquelles nous communiquons aujourd’hui les uns avec les autres. Pas la peine d’ajuster votre appareil, il est déjà trop tard. La série a remporté deux prix au Festival Webfest Berlin 2017 : le grand prix du jury et le prix de la meilleure série action, thriller, suspense.', '', 'https://www.youtube.com/embed/azNqZs4C1UU', 0),
(19, 'webserie', 'The foxy five', 'Jabu Nadia Newman', '', '28-11-2017', 'Feminism/Comedy', 1, '15 min', 'Anglais', 'The Foxy Five met en scène cinq jeunes femmes sud-africaines, noires et étudiantes, se lançant dans une guerre contre le sexisme et préparant une révolution. Les personnages de Blaq Beauty, Femme Fatale, Unibond, Prolly Plebs et WomxnWe, incarnent cinq archétypes de la femme féministe poussés à l’extrême mais facilement identifiables au quotidien. Chaque épisode d’une quinzaine de minutes aborde un sujet avec une problématique spécifique que de nombreuses femmes noires peuvent se poser', '', 'https://www.youtube.com/embed/mA-B1t1KOmE', 0),
(20, 'webserie', 'To be continued ', 'Jeon Yong Wu', 'Corée du Sud', '29-11-2017', 'Comédie/Fantastique', 1, '15 min', 'Coréen', 'Ce drama raconte l\'histoire d\'un boys band composé de Cha Eun Wu, Mun Bin, Jin Jin, MJ, Yun San Ha et Rocky, qui remontera soudainement le temps pour se retrouver à la veille de ses débuts. C\'est avec l\'aide de Jeong Ah Rin que ceux-ci feront tout afin de rétablir l\'ordre des choses.', '', 'https://www.youtube.com/embed/XFUSh4tBrsE', 0),
(21, 'webdoc', 'Waynak', '', '', '29-11-2017', 'Documentaire', 0, '52 min', '', '“Waynak”, c’est le ‘t’es où ?’” en arabe, une question anodine que l’on prononce souvent au téléphone, mais qui devient plus lourde de sens au moment où des millions de personnes fuient les conflits au Moyen-Orient et se trouvent dispersés à des milliers de kilomètres les uns des autres.\r\n\r\n“Waynak”, c’est donc aussi un webdocumentaire en six épisodes qui cherche à ouvrir des perspectives nouvelles sur la crise des réfugiés et dont Courrier international est partenaire.\r\n', '', 'https://www.youtube.com/embed/WlMXcXwlCb4', 0),
(22, 'webserie', 'We are fathers ', 'Jerry Ying ', 'Americaine', '29-11-2017', '', 1, '10 min', 'Anglais', 'We Are Fathers is a character driven, scripted comedy inspired by the real life pain of co-creator, Jin Namkung. What do you do when you\'re in your late twenties, your wife has left you, and you have a 4 year old?? Somehow we came up with, \"Make a web series!\" Not normal, but in LA, totally normal. So we formed Bad Daddy Films and now we\'re here with three episodes we\'re really proud of in our back pockets and our sights set on shooting the rest of the season!!', '', 'https://www.youtube.com/embed/1wslpDcHdKM', 0),
(23, 'webdoc', 'Raconte ta ville', '', 'France', '', 'Webdoc', 5, '2 min', 'Français', 'Depuis 2012, le réseau Canopé pilote l’opération \"Raconte ta ville\" qui consiste en la production par les élèves de webdocs qui traitent de leur environnement proche.\r\nPour voir l’ensemble des réalisations, et pourquoi pas s’inspirer de cette opération pour réaliser ses propres projets avec les élèves, rendez-vous sur le site de\"Raconte ta ville\".\r\n', '', '', 0),
(24, 'webdoc', 'Network Effect', '', '', '', '', 0, '', '', '', '', '', 0),
(25, 'webdoc', 'Strolling', 'Cecile Emeke', 'Royaume-Uni', '', '', 0, '', 'Anglais', 'Strolling est une série documentaire créée par Cecile Emeke, dans laquelle nous découvrons des gens originaires de plusieurs villes et pays , qui ont des conversations brutes et honnêtes sur différents problèmes de société. Ils évoquent des thèmes comme le féminisme, la sexualité, le genre, l’appartenance ethnique, la politique, mais aussi la philosophie, l’art, l’histoire, le capitalisme, la guerre ou la pauvreté… et tout ce qui est digne d’être pensé.', '', '', 1),
(26, 'webserie', 'Savannah Brown', 'Savannah Brown', 'Royaume-Uni', '', '', 0, '', 'Anglais', '', '', 'Savannah Brown est poète, auteur et youtubeuse.', 1),
(28, 'webserie', 'How to basic', 'Anonyme', 'Australie', '', '', 0, '', 'Anglais', 'Ames sensibles s\'abstenir ! Crée en 2011 par un australien anonyme, la chaîne Youtube aux plus de 8 millions d\'abonnés, présente un concept aussi simple que singulier : une série de sketchs habilement déguisés en vidéos didactiques.', '', '', 1),
(29, 'webdoc', 'Passé Sauvage', 'Clothilde Chamussy', 'France', '', '', 0, '', 'Français', 'Passé Sauvage est une chaîne Youtube de vulgarisation scientifique traitant d\'archéologie, d\'histoire et d\'anthropologie.', '', '', 1),
(30, 'webserie', 'Frannerd', 'Fran Meneses', 'Chilli - Royaume-Uni', '', '', 0, '', 'Anglais - Espagnol', 'chaine youtube d\'une illustratrice chilienne vivant à Hastings (UK). Elle partage son travail et son quotidien.', '', '', 1),
(31, 'webserie', 'Danooct1', 'Daniel', 'USA', '', '', 0, '', 'Anglais', 'Les virus informatiques, les chevaux de Troie et les vers en action. Du méfait numérique à la destruction pure et simple, Danooct1 explore et nous fait découvrir la richesse des anciens logiciels malveillants. ', '', '', 1),
(32, 'webdoc', 'Tout est politique', 'Buffy Mars', 'France', '', '', 0, '', 'Français', 'Analyse et critiques les séries TV en parlant sociologie et féminisme ! Parce que oui, même les séries TV sont politiques !', '', '', 1),
(33, 'webdoc', 'Les petits aventuriers', 'Clem', 'France', '', '', 0, '', 'Français', 'Découvrir le monde en vidéo pour les enfants (et les grands enfants) Clem et son bonnet, TukTuk, racontent leurs aventures, font découvrir des lieux incroyables aux futurs explorateurs. Comprendre les villes et leur histoire, découvrir les animaux de la planète, s\'étonner devant des événements... Chaque vidéo est l\'occasion d\'en savoir un peu plus sur le monde qui nous entoure. Pars découvrir le monde avec nous !', '', '', 1),
(34, 'webdoc', 'Marinette Femmes et féminisme', 'Marine Périn', 'France', '', '', 0, '', 'Français', 'Des vidéos sur les droits des femmes par Marine Périn.', '', '', 1),
(35, '', 'Vic Berger Presents President Trump', 'Vic Berger ', 'USA', '', '', 0, '', 'Anglais', 'Vic Berger est un monteur vidéo, satiriste et musicien reconnu pour ses éditions humoristiques publiées sur youtube durant la Primaire présidentielle 2016. ', '', '', 1),
(36, 'webdoc', 'Elles prennent la parole', 'Léa Bordier', 'France', '', '', 0, '', 'Français', 'Réalisé par deux jeunes femmes piquées aux affres du YouTube Game, ses traditions et son monde, « Elles prennent la parole » est un documentaire rare et important. Dévoilé après plus d\'une année de travail par l\'association Les Internettes, le reportage retrace différents parcours de YouTubeuses et aborde la question de l\'émancipation féminine, sans tabous.', '', '', 1);

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
-- Déchargement des données de la table `t_users`
--

INSERT INTO `t_users` (`id_user`, `Nom`, `Prenom`, `Pseudo`, `Email`, `MotDePasse`) VALUES
(3, 'a', 'a', '', '', ''),
(4, 'b', 'b', '', '', ''),
(5, 'c', 'c', 'c', 'c', 'c');

--
-- Index pour les tables déchargées
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
-- AUTO_INCREMENT pour les tables déchargées
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
  MODIFY `id_film` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT pour la table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id_user` tinyint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_filmlikes`
--
ALTER TABLE `t_filmlikes`
  ADD CONSTRAINT `c_foreignkey1` FOREIGN KEY (`id_film`) REFERENCES `t_films` (`id_film`),
  ADD CONSTRAINT `c_foreignkey2` FOREIGN KEY (`id_user`) REFERENCES `t_users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
