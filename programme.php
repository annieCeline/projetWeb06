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

$sql_films = $pdo->query('SELECT * FROM t_films WHERE projet=0 ORDER BY titre ASC');

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



                $('#idTous').addClass('buttonSelected');



                $('#catalogueFilms button').click(function(e) {
                    //console.log("click");


                    var visibleTag = $(this).data('cat');
                    console.log(visibleTag);


                    $('#catalogueFilms button').removeClass('buttonSelected');
                    $(this).addClass('buttonSelected');



                    //LI//
                    $('#thumbnails > li').each(function(e) {

                        //$('#catalogueFilms button').addClass('noBorderButton');

                        $(this).css('display', 'block');
                        //console.log(this);
                        if (visibleTag != 'tous' && $(this).data('tag') != visibleTag) {

                            $(this).css('display', 'none');
                        }
                    });
                });
				
				
				
                $('nav > div').click(function(e) {
                    $('nav > ul').toggleClass("visible");

                });

                //		 $("nav ul li a").on("click", function() {
                //        $(this).siblings().removeClass('active');
                //        $(this).addClass("active");
                //    });	



            });
        </script>


</head>

<body>
   
    <?php 
    include "./nav.php";
    ?>
    
	<!--HEADER-->

	<header>
		<h1>Le <br>Programme</h1>

		<p>Plongez dans la séléction officielle du festival. Des &#156uvres au format court ou long, de tous horizons abordant des thématiques originales à découvrir au cinéma ! </p>
	</header>


	<!-- Les réseaux sociaux -->

	<main>

	     <div id="nav_laterale">
            <div id="profil_recherche">
                <a href="./login.php"><i class="fa fa-user" aria-hidden="true"></i></a>
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>
            <div id="reseaux_sociaux">
                <a href="twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
        </div>

	            <!--Download programme-->
            <section id="downloadProgramme">

                <div class="downloadProgrammeParent">

                    <div class="downloadProgrammeFirstChild">

                        <p>Télécharger votre agenda ici</p>
                        <a href="./assets/document/agendaNoprint.pdf"><img src="./assets/images/logos/fileMainBlanc64.png" alt=""></a>




                    </div>

                    <div class="downloadProgrammendChild">
                       

                        <h2>En salle</h2>
                    </div>


                </div>

            </section>

		<!--Catalogue des films-->

		<section id="catalogueFilms">
			<h2>Le catalogue</h2>
			<div id="tagsFilms">
				<!--Les buttons tags-->

				<button data-cat="tous" id="idTous">Tous</button>

				<button data-cat="webdoc">Web Doc</button>

				<button data-cat="webserie">Web Serie</button>

				<button data-cat="transmedia">Transmedia</button>

<!--				<button data-cat="projet">Projet</button>-->
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