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

    <!--    MENU "HAMBURGER"-->
    <script>
        $(document).ready(function() {


            $('nav > div').click(function(e) {
                $('nav > ul').toggleClass("visible");

            });
			
			

        });
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

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt nobis, at neque nostrum. Dolorum porro totam aut cumque distinctio, ipsa, iusto sequi. Quis assumenda, repellendus.</p>
    </header>

    <main>
        <!--NAVIGATION SOCIAUX ET PROFIL-->

        <div id="nav_laterale">
            <div id="profil_recherche">
                <a href="./inscription.php"><i class="fa fa-user" aria-hidden="true"></i></a>
                <i class="fa fa-search" aria-hidden="true"></i>
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
                    <img src="./assets/images/films/facebookistan-redimensionne60.jpg" alt="Facebookistan">
                    <img src="./assets/images/films/memories1-redimensionne60.jpg" alt="These memories won't last">
                    <img src="./assets/images/films/The-Foxy-Five-redimensionne60.jpg" alt="The Foxy Five">
                </div>

                <h2><a href="programme.php">Programme</a></h2>

            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt nobis, at neque nostrum. Dolorum porro totam aut cumque distinctio, ipsa, iusto sequi. Quis assumenda, repellendus.</p>
        </section>

        <!--SECTION COUP DE COEUR-->

        <div id="coupDeCoeur_container">
            <div>
                <q>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quisquam in, consequatur distinctio odio natus hic porro? Consectetur sed commodi blanditiis mollitia rerum similique voluptatum dignissimos nisi eum id, tenetur.</q>

<!--                                <p><img src="./assets/images/logo/symbolePlay.png" alt="Play"><a href="">To be continued</a> - Coup de coeur de Mélissa</p>-->


                <div>
                   <a href="#"><img src="./assets/images/logo/symbolePlay.png" alt="Play"></a>
                    
                    <p>To be continued</p>

                    <p>Coup de coeur de Mélissa</p>
                </div>


            </div>
        </div>

        <section>
            <!--SECTION REGARDER EN LIGNE-->

            <div class="programme">
                <h2>Regarder <br> en ligne</h2>

                <div class="programme_images">
                    <img src="./assets/images/films/facebookistan-redimensionne60.jpg" alt="Facebookistan">
                    <img src="./assets/images/films/memories1-redimensionne60.jpg" alt="These memories won't last">
                    <img src="./assets/images/films/The-Foxy-Five-redimensionne60.jpg" alt="The Foxy Five">
                </div>
            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt nobis, at neque nostrum. Dolorum porro totam aut cumque distinctio, ipsa, iusto sequi. Quis assumenda, repellendus.</p>
        </section>
    </main>

    <!--FOOTER-->

    <footer>
        <p>&copy;Interface3 - 2017</p>
        <p>info@brusselswebfest.com</p>
    </footer>

</body>

</html>