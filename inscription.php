<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Brussels WebFest: s'inscrire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
                    <!--    STYLE-->
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/screen.css">
    
                    <!--    GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Space+Mono:400,700,700i" rel="stylesheet"> 
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

            <!--FORMULAIRE D'INSCRIPTION-->
    <main>
    <h1>Inscription</h1>
    <form action="inscriptionTraitement.php" method="post" id="formInscription">
    Nom:<br>
    <input type="text" name="Nom"><br>
    Prenom:<br>
    <input type="text" name="Prenom"><br> 
    Pseudo:<br>
    <input type="text" name="Pseudo"><br>
    Email:<br> 
    <input type="email" name="Email"><br>
    Mot de passe:<br> 
    <input type="password" name="MotDePasse"><br> 
    Confirmer mot de passe:<br> 
    <input type="password" name="MotDePasse2"><br>

    <button type="submit" id="btnEnvoyer">Envoyer</button> 
    <div id="message"></div>  
    </form>
    
    <?php 
//    echo $message;
    ?>      
</main>
               
                <!--FOOTER-->
                
    <footer>
        <p>&copy;Interface3 - 2017</p>
        <p>info@brusselswebfest.com</p>
</footer>               
                
</body>

<script src="./inscription.js"></script>
</html>