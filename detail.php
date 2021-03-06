<?php
require_once('./config/config.php');

try {
    $pdo = new PDO(MYSQL_DSN, DB_USER, DB_PWD);
} catch (PDOException $e) {
    //echo $e->getMessage();     
    $pdo = null;               
    die('Problème technique'); 
}

$sql_films = $pdo->prepare('SELECT * FROM t_films WHERE id_film = :idfilm');          
$sql_films->bindValue(':idfilm', $_GET['id'], PDO::PARAM_INT);
$sql_films->execute();

//session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Brussels WebFest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/screenFiche.css">

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
     
        <h1>Web <br>Série</h1>
           
    </header>

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
               <?php 
        
        
        if($sql_films->errorInfo()[0] == "00000"){
            $data = $sql_films->fetchAll(PDO::FETCH_ASSOC);
        echo '<div class="video-container">';
//var_dump($data); 
            if (count($data) == 1) { 
            echo '<div>';
                echo '<h2 id="trailer">' . $data[0]['titre'] . '</h2>';
                echo '<div>';
                    echo '<iframe src="' . $data[0]['ressourceVideo'] . '"></iframe>';
                echo '</div>';
                echo '<div>';
                    echo '<div id="like1">';
                        echo '<div><img id="like" src="./assets/images/logos/applause32.png" alt="like"></div>';
                        echo '<p id="nbLikes"></p>';
                    echo '</div>';
                    echo '<div id="messageLike">Veuillez vous connecter pour liker</div>';
                echo '<input id="id_film" type="hidden" value="'.$data[0]['id_film'] . '">';
                
                    if (isset ($_SESSION['id_user'])){
                echo '<input id="id_user" type="hidden" value="'. $_SESSION['id_user'] . '">';
                    } 

                echo '</div>';
                echo '<div id="diffusion">';
                    echo '<p><span>Diffusion :</span> ' . $data[0]['diffusion'] . '</p>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
        echo '<section>';
            echo'<div class="programme">';
                echo '<div>';
                    echo '<p><span>Réalisateur :</span> ' . $data[0]['realisateur'] . '</p>';
                    echo '<p><span>Origine :</span> ' . $data[0]['origine'] . '</p>';
                    echo '<p><span>Genre :</span> ' . $data[0]['genre'] . '</p>';
                    echo '<p><span>Saison :</span> ' . $data[0]['saison'] . '</p>';
                    echo '<p><span>Durée :</span> ' . $data[0]['duree'] . '</p>';
                    echo '<p><span>Langue :</span> ' . $data[0]['langue'] . '</p>';
                echo '</div>';

                echo '<h2>Information</h2>';
            echo '</div>';
            echo '</section>';

        echo '<section>';
            echo '<div class="programme">';
                echo '<h2>Synopsis</h2>';

            echo '<p>' . $data[0]['synopsis'] . '</p>';
            echo '</div>';
        echo '</section>';
        
    } else {
        echo 'Veuillez ne pas changer l\'URL';
        }    
}else {
            echo 'Veuillez ne pas changer l\'URL svp';
};    
    ?>
    </main>

    <footer>
        <p>&copy;Interface3 - 2017</p>
        <p>info@brusselswebfest.com</p>
    </footer>
</body>

<script src="./like.js"></script>
</html>
