<?php
$info = '';
if (isset($_POST['nom'], $_POST['email'], $_POST['sujet'], $_POST['message'])){
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) !== false && strlen($_POST['nom']) > 0 && strlen($_POST['sujet']) > 0 && strlen($_POST['message']) > 0 ){
        $msg = strip_tags($_POST['message']);
        $nom = strip_tags($_POST['nom']);
        $sujet = strip_tags($_POST['sujet']);
        
        if(isset($_POST['newsLetter'])){
            $_POST['newsLetter'] = 'Je souhaite recevoir la newsletter';
        }else{
            $_POST['newsLetter'] = 'Je ne souhaite pas recevoir la newsletter';
        }
        
        
        $result = @mail('brusselswebfest@gmail.com', $sujet, $_POST['email'], 'Message de ' . $nom . ': ' . $msg . ' '. $_POST['newsLetter']);
        
        if($result){
            $info = 'Message bien envoyé';
        } else{
            $info = 'Problème Technique';
        }
    }else{
        $info = 'Vous avez oublié de remplir un champ!';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Brussels WebFest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/screenInfo.css">

    <link href="https://fonts.googleapis.com/css?family=Space+Mono:400,700,700i" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script>
    $(document).ready(function(){
    
        
    $('nav > div').click(function(e){
        $('nav > ul').toggleClass("visible"); 
   
    });    
        
    });
    </script>
</head>

<body>

    <?php 
    include "./nav.php";
    ?>


    <header>

        <h1>Info <br>Pratiques</h1>

        <p>Nouvelles écritures et créations visuelles sur le web.
        Webdocumentaires - Webséries - Projets transmedia.<br>
        Du 15/11 au 28/11 au Cinéma Galeries à Bruxelles.</p>
    </header>

    <main>

           <div id="nav_laterale">
            <div id="profil_recherche">
                <a href="./login.php"><i class="fa fa-user" aria-hidden="true"></i></a>
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>
            <div id="reseaux_sociaux">
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
        </div>
        
      

        <section>
            <div class="programme">

                <div>
                    <p>
                     Le festival est gratuit !<br> 
                     Mais si vous voulez nous soutenir, vous pouvez nous faire un don.
                    </p>
                </div>

                <h2>Ticket</h2>

            </div>
            <div id="don">
                <button>Faite un don</button>
                <div id="logoDon">
                    <img src="assets/images/logos/Maestro.png" alt="maestro">
                    <img src="assets/images/logos/Mastercard.png" alt="mastercard">
                    <img src="assets/images/logos/Paypal.png" alt="paypal">
                    <img src="assets/images/logos/Visa.png" alt="visa">
                </div>
            </div>

        </section>

        <section>
            <div class="programme">
                <h2>Plan</h2>

                <div id="carte">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.120221613309!2d4.3524353157458044!3d50.84745797953215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c47f64b4b03b%3A0xb60ed3be0edcc0f!2sCin%C3%A9ma+GALERIES!5e0!3m2!1sfr!2sbe!4v1511959592334"></iframe>
                    <p>Galerie de la Reine 26,  <br> 1000 Bruxelles
                    </p>
                </div>
            </div>


        </section>

        <section>
            <div class="programme">
                <form action="" method="POST">
                    <input type="text" name="nom" placeholder="Nom">
                    <input type="email" name="email" placeholder="E-mail">
                    <input type="text" name="sujet" placeholder="Sujet">
                    <textarea name="message" id="" placeholder="Message"></textarea>
                    <div>
                        <input type="checkbox" name="newsLetter"> Abonne toi à notre Newsletter <button>Envoyer</button>
                    </div>
                    <p><?php echo $info; ?></p>
                </form>
                <h2>Contact</h2>

            </div>

        </section>
    </main>

    <footer>
        <p>&copy;Interface3 - 2017</p>
        <p>info@brusselswebfest.com</p>
    </footer>
</body>
</html>
