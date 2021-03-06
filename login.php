<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Brussels WebFest: Se connecter</title>
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

            <!--FORMULAIRE DE CONNEXION-->
    <main>
    <div id="lienFormLogin">
        <p>Pas encore de compte ?<a href="inscription.php"> Inscrivez-vous par ici</a></p>
    </div>
    <h1>Connexion</h1>
    <form action="loginTraitement.php" method="post" id="formLogin">
    Email:<br> 
    <input type="email" name="Email"><br>
    Mot de passe:<br> 
    <input type="password" name="MotDePasse"><br> 

   <button type="submit" id="btnEnvoyer">Se connecter</button>
    <div id="message"></div>  
    </form>
          
</main>
               
                <!--FOOTER-->
                
    <footer>
        <p>&copy;Interface3 - 2017</p>
        <p>info@brusselswebfest.com</p>
</footer>               
                
</body>

<script src="./login.js"></script>
</html>