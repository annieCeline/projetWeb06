<?php

//on récupère le fichier de config
require_once('./config/config.php');

//on se connecte à la base de données
try {
    $pdo = new PDO(MYSQL_DSN, DB_USER, DB_PWD);
} catch (PDOException $e) {
    //echo $e->getMessage();     
    $pdo = null;               
    die('Problème technique'); 
}

//on selectionne tous les films (par ordre alphabétique ascendant) de la bdd via une requête sql statique
$sql_films = $pdo->query('SELECT * FROM t_films ORDER BY titre ASC');

//le tout est stocké dans un tableau ($data)
$data = $sql_films->fetchAll(PDO::FETCH_ASSOC); // tableau associatif à 2 dimensions
//var_dump($data); // L'entièreté de nos données
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" /> 
	<title>Programme</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="./css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="./css/screenProgramme.css" />

	<link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css?family=Space+Mono:400,700,700i" rel="stylesheet">

<!--	<link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


	<script>
		$(document).ready(function() {
            
            // ajouter la classe pour que le bouton Tout soit active
            // blablablabla
            
            $('#catalogueFilms button').click(function() {
				//				console.log("click");

				var visibleTag = $(this).data('cat');
				//				console.log(visibleTag);

				$('#thumbnails > li').each(function() {

					$(this).css('display', 'block');

					if (visibleTag != 'tout' && $(this).data('tag') != visibleTag) {

						$(this).css('display', 'none');
					}
				});
			});
		});
	</script>



</head>

<body>

	<nav>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="programme.html">Programme</a></li>
			<li><a href="infospratiques.html">Infos Pratiques</a></li>
			<li><a href="palmares.html">Palmares</a></li>
			<li><a href="lefestival.html">Le Festival</a></li>
		</ul>
	</nav>
	<!--HEADER-->

	<header>
		<h1>Le <br>Festival</h1>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt nobis, at neque nostrum. Dolorum porro totam aut cumque distinctio, ipsa, iusto sequi. Quis assumenda, repellendus.</p>
	</header>


	<!-- Les réseaux sociaux -->

	<main>

		<section id="nav_laterale">
			<div id="reseaux_sociaux">
				<i class="fa fa-twitter" aria-hidden="true"></i>
				<i class="fa fa-facebook" aria-hidden="true"></i>
			</div>
			<div id="profil_recherche">
				<i class="fa fa-user" aria-hidden="true"></i>
				<i class="fa fa-search" aria-hidden="true"></i>
			</div>
		</section>


		<!--Download programme-->
		<section id="downloadProgramme">


			<div>


				<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>

				<a href=""><img src="./assets/images/logo/blackDownload.png" alt=""></a>

				<!--PDF-->
				<!-- <a href=".pdf">Programme à télécharger</a>-->
			</div>


			<h2>Les Lives</h2>


		</section>

		<!--Catalogue des films-->

		<section id="catalogueFilms">
			<h2>Le catalogue</h2>
			<div id="tagsFilms">
				<!--Les buttons tags-->
				<button data-cat="tout">Tout</button>

				<button data-cat="webdoc">Web Doc</button>

				<button data-cat="webserie">Web Serie</button>

				<button data-cat="transmedia">Transmedia</button>

				<button data-cat="projet">Projet</button>
			</div>
		</section>

		<!--THUMBNAIL-->
		<section id="sectionFilms">
			<ul id="thumbnails">
			<?php

// On boucle à travers le tableau data(qui contient tous les films de la bdd) et pour chaque itération on affiche l'image et on récupère les infos qui s'affichent avec le hover (catégorie, titre, diffusion, etc.)

//Pour afficher l'image, les noms de fichiers ont été harmonisés dans le dossier thumbnail (en un mot sans espace), ainsi on récypère le titre et on l'incruste dans la source de l'image

//Quand on clique sur l'image, elle renvoie à une page detail.php?id='l'id du film dans la bdd'                 
                for ($i = 0; $i < count($data); $i++) {
                    echo '<li data-tag="' . $data[$i]['categorie'] . '">';
                    echo '<a href="detail.php?id=' . $data[$i]['id_film']. '">';
                    echo '<img src="./assets/images/films/thumbnail/' . str_replace(' ', '', $data[$i]['titre']) . '.png" alt="' . $data[$i]['titre'] . '">';

           
                    //Hover info
						echo '<div class="hoverInfo">';
							echo '<div class="infoFilm">';
								echo '<h3>' . $data[$i]['titre'] . '</h3>';
								echo '<h3>' . $data[$i]['realisateur'] . '</h3>';
							echo '</div>';
							echo '<div class="infosAnnexes">';
								echo '<div class="dateLieu">';
                                    echo '<h4>' . $data[$i]['diffusion'] . '</h4>';
									echo '<h4>Cinema Galeries</h4>';
								echo '</div>';
								echo '<div class="moreInfo">';
									echo '<h4>More info</h4>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</a>';
				echo '</li>'; 
                                               }
?>
            </ul>                

		</section>
	</main>
	
	<!--FOOTER-->
	<footer>
		<p>&copy;Interface3 - 2017</p>
		<p>info@brusselswebfest.be</p>
	</footer>

</body>

</html>