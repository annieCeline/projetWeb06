<?php
$info = '';
if (isset($_POST['nom'], $_POST['email'], $_POST['sujet'], $_POST['message'])){
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) !== false && strlen($_POST['nom']) > 0 && strlen($_POST['sujet']) > 0 && strlen($_POST['message']) > 0 ){
        $msg = strip_tags($_POST['message']);
        $nom = strip_tags($_POST['nom']);
        $sujet = strip_tags($_POST['sujet']);
        //$_POST['newsLetter'] = 'Je souhaite recevoir la newsletter';
        
        $result = @mail('brusselswebfest@gmail.com', $sujet, $_POST['email'], 'Message de ' . $nom . ': ' . $msg . ' '. $_POST['newsLetter']);
        
        if($result){
            $info = 'Message bien envoyer';
        } else{
            $info = 'Problème Technique';
        }
    }else{
        $info = 'Vous avez oublier de remplir un champ!';
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

    <nav>
        <div>
            <img src="./assets/images/logo/symboleMenu50x76.png" alt="Menu">
        </div>
   
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="programme.html">Programme</a></li>
            <li><a href="infospratiques.html">Infos Pratiques</a></li>
            <li><a href="palmares.html">Palmares</a></li>
            <li><a href="festival.html">Le Festival</a></li>
        </ul>
    
    </nav>


    <header>

        <h1>Info <br>Pratiques</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt nobis, at neque nostrum. Dolorum porro totam aut cumque distinctio, ipsa, iusto sequi. Quis assumenda, repellendus.</p>
    </header>

    <main>

        <div id="nav_laterale">
            <div id="reseaux_sociaux">
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>

            <div id="profil_recherche">
                <i class="fa fa-user" aria-hidden="true"></i>
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>
        </div>

        <section>
            <div class="programme">

                <div>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam molestias, explicabo ipsa veniam officiis laboriosam itaque voluptate laudantium, earum optio. Vel nostrum aliquam dicta maiores ducimus quod ea velit unde?
                    </p>
                </div>

                <h2>Ticket</h2>

            </div>
            <div id="don">
                <button>Faite un don</button>
                <div id="logoDon">
                    <img src="assets/images/logo/Maestro.png" alt="maestro">
                    <img src="assets/images/logo/Mastercard.png" alt="mastercard">
                    <img src="assets/images/logo/Paypal.png" alt="paypal">
                    <img src="assets/images/logo/Visa.png" alt="visa">
                </div>
            </div>

        </section>

        <section>
            <div class="programme">
                <h2>Plan</h2>

                <div id="carte">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.2354310726582!2d4.358573615585128!3d50.863841065372704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c37b0b18e0ab%3A0xa7dcedc9c29a0d35!2sInterface3+asbl!5e0!3m2!1sfr!2sbe!4v1507812180019" width="600" height="450" style="border:0" allowfullscreen></iframe>
                    <p>Au fond de la cour, 25 <br> 1050 Ixelles
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
