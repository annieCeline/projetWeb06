<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Le Festival</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
                    <!--    STYLE-->
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/screenFestival.css">
    
                    <!--    GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Space+Mono:400,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    
                    <!--    jQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
                    <!--    MENU "HAMBURGER"   -->
    <script>
    $(document).ready(function(){
    
        
    $('nav > div').click(function(e){
        $('nav > ul').toggleClass("visible"); 
   
    });    
        
    });
    </script>

</head>
<body>
   
                    <!--   NAVIGATION-->
    
    <?php 
    include "./nav.php";
    ?>
    
                        <!--HEADER-->
                    
    <header>
        <h1>Le <br>Festival</h1>

        <p> Nouvelles écritures et créations visuelles sur le web. <br> Webdocumentaires - Webséries - Projets transmedia. <br> Du 15/11 au 28/11 au Cinéma Galeries à Bruxelles.</p>
    </header>
    
    <main>
                    <!--NAVIGATION SOCIAUX ET PROFIL-->
                    
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
           
                    <!--SECTION EQUIPE-->
                    
            <section>        
            <div class="programme">

                <div class="programme_images">
                    <img src="./assets/images/avatar/amelie.png" alt="Amélie">
                    <img src="./assets/images/avatar/annie.png" alt="Annie">
                    <img src="./assets/images/avatar/melissa.png" alt="Mélissa">
                </div>

                <h2>L'Equipe</h2>
            </div>
            </section>   

                    <!--SECTION CONTACT-->
                    
            <section>
            <div class="programme">
                <h2>Contact</h2> 
                
                <p>Cinéma Galeries: Galerie de la Reine 26, 1000 Bruxelles<br> Brussels WebFest: info@brusselswebfest.com</p>
            </div>    
            </section>
        
                    <!--  SECTION PARTENAIRES   -->
                    
            <section>        
            <div class="programme">

                <div id="partenaires">
        
                <img src="./assets/images/logos/partenaires/logo-80x80/logo-arts-numeriques-80x80.png" alt="Arts numériques">
                <img src="./assets/images/logos/partenaires/logo-80x80/logo-bam-festival-80x80.png" alt="BAM Festival">
                <img src="./assets/images/logos/partenaires/logo-80x80/logo-cinema-galleries-80x80.png" alt="Cinema Galleries">
                <img src="./assets/images/logos/partenaires/logo-80x80/logo-cu-festival-80x80.png" alt="CU Festival">
                <img src="./assets/images/logos/partenaires/logo-80x80/logo-federation-wallonie-bruxelles-80x80.png" alt="Fédération Wallonie-Bruxelles">
                <img src="./assets/images/logos/partenaires/logo-80x80/logo-kisskissbankbank-80x80.png" alt="KissKissBankBank">
                <img src="./assets/images/logos/partenaires/logo-80x80/logo-ladeux-80x80.png" alt="La Deux">
                <img src="./assets/images/logos/partenaires/logo-80x80/logo-montreal-webfest-80x80.png" alt="Montreal Webfest">
                <img src="./assets/images/logos/partenaires/logo-80x80/logo-roma-webfest-80x80.png" alt="Roma Webfest">
                <img src="./assets/images/logos/partenaires/logo-80x80/logo-rtbf-80x80.png" alt="RTBF">
                <img src="./assets/images/logos/partenaires/logo-80x80/logo-sacd-scam-sofam-80x80.png" alt="sacd-scam-sofam">
                <img src="./assets/images/logos/partenaires/logo-80x80/logo-videographies-80x80.png" alt="Videographies">
                <img src="./assets/images/logos/partenaires/logo-80x80/logo-wallimages-80x80.png" alt="Wallimages">
                <img src="./assets/images/logos/partenaires/logo-80x80/regionbruxelles.png" alt="Region Bruxelles">
                
                
                <img src="./assets/images/logos/partenaires/logo-80x80/logo-cw.png" alt="Creative Wallonia">

                </div>

                <h2>Partenaires</h2>
            </div>
            </section>
          </main>
                        
                 <!--FOOTER-->
                
    <footer>
        <p>&copy;Interface3 - 2017</p>
        <p>info@brusselswebfest.com</p>                             
    </footer>                    
  
</body>

</html>