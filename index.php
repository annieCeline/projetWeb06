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
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Brussels WebFest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--    STYLE-->
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/screen.css">

    <!--    GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Space+Mono:400,700,700i" rel="stylesheet">


    <!--    jQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!--     jQueryUi et sa feuille de style-->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="./jquery-ui-1.12.1.custom/jquery-ui.theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!--    MENU "HAMBURGER"-->
    <script>
        $(document).ready(function() {


            $('nav > div').click(function(e) {
                $('nav > ul').toggleClass("visible");

            });	
        });
    </script>
    
    <!--    Autocomplete-->
    <script>
  $( function() {
    var availableTags = [
<?php
  for ($i=0; $i < count($data); $i++){
      echo '"' . substr($data[$i]['titre'], 0, 24) . '",';
  }      
?>        
    ];
    $( "#tags" ).autocomplete({
      source: availableTags,
      minLength: 2,    
    });
  } );
    </script>    
</head>

<body>

    <!--NAVIGATION-->

    <?php 
    include "./nav.php";
    ?>

   
    <!--HEADER-->

    <header>
        <h1>Le <br>Festival</h1>
             
       <div>
       
        <div class="ui-widget">
            <label for="tags"></label>
            <i class="fa fa-search" aria-hidden="true"></i> &nbsp;
            <input id="tags" placeholder="Rechercher un film"> 
        </div> 
              
        <p>
        Nouvelles écritures et créations visuelles sur le web. <br> Webdocumentaires - Webséries - Projets transmedia. <br> Du 15/11 au 28/11 au Cinéma Galeries à Bruxelles.</p>
        
      </div>  

    </header>

    <main>
        <!--NAVIGATION SOCIAUX ET PROFIL-->

        <div id="nav_laterale">
            <div id="profil_recherche">
                <a href="./login.php"><i class="fa fa-user" aria-hidden="true"></i></a>
                <i id="searchFilms" class="fa fa-search" aria-hidden="true"></i>
<!--                        <input id="rechercheFilms" type="text" placeholder="Rechercher un film">-->
            </div>
            <div id="reseaux_sociaux">
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
        </div>

        <!--SECTION PROGRAMME-->
        <section>
            <div class="programme">

                <div class="programme_images">
                    <img src="./assets/images/films/Facebookistan.png" alt="Facebookistan">
                    <img src="./assets/images/films/Thesememorieswontlast.png" alt="These memories won't last">
                    <img src="./assets/images/films/thefoxyfive.png" alt="The Foxy Five">
                </div>

                <h2><a href="programme.php">Programme</a></h2>

            </div>

            <p>Le web, un terrain de jeux qui permet des explorations originales portées par des créateurs innovants. Découvrez le programme des projections en salle de ces oeuvres d'une nouvelle ère.</p>
        </section>

        <!--SECTION COUP DE COEUR-->

        <div id="coupDeCoeur_container">
            <div>
                <q> Un web drama sympa pour faire connaitre le futur groupe Astro. Ces jeunes ont un sacré talent aussi bien en chant qu'en danse. C’est frais, original, drôle et ça chante. </q>
              

               
                    <p><img src="./assets/images/logos/symbolePlay.png" alt="Play"><a href="">To be continued</a> - Coup de coeur de Mélissa</p>
            



            </div>
        </div>

        <section>
            <!--SECTION REGARDER EN LIGNE-->

            <div class="programme">
                <h2>Regarder <br> en ligne</h2>

                <div class="programme_images">
                    <img src="./assets/images/films/Facebookistan.png" alt="Facebookistan">
                    <img src="./assets/images/films/Thesememorieswontlast.png" alt="These memories won't last">
                    <img src="./assets/images/films/thefoxyfive.png" alt="The Foxy Five">
                </div>
            </div>

            <p>&#192 l'occasion du festival et suite à l'appel à projets, les internautes présentent leurs dernières &#156uvres. Découvrez en ligne ces nouvelles voix de la création.</p>
        </section>
    </main>

    <!--FOOTER-->

    <footer>
        <p>&copy;Interface3 - 2017</p>
        <p>info@brusselswebfest.com</p>
    </footer>

</body>

</html>