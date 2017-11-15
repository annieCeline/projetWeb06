<?php

//on récupère le fichier de config
require_once('./config/config.php');

// sessionstart

//on se connecte à la base de données
try {
    $pdo = new PDO(MYSQL_DSN, DB_USER, DB_PWD);
} catch (PDOException $e) {
    //echo $e->getMessage();     
    $pdo = null;               
    die('Problème technique'); 
}


// incrementer le nombre de likes
$sql ="UPDATE t_filmlikes SET t_filmlikes.nbLikes =  t_filmlikes.nbLikes + 1 WHERE t_filmlikes.id_film = :idfilm"; 
// AND t_filmlikes.id_user = unId";
$resultat = $pdo->prepare($sql);
$resultat->bindValue(":idfilm", $_POST['id_film']);
if (!$resultat->execute()){
    echo $resultat->errorInfo();
} 





// obtenir et renvoyer le nombre de likes
$sql = "SELECT SUM(nblikes) AS nombreLikes FROM t_filmlikes WHERE t_filmlikes.id_film = :idfilm";
$resultat = $pdo->prepare($sql);
// pour vérifier si on reçoit les params d'AJAX: var_dump ($_POST);
$resultat->bindValue(":idfilm", $_POST['id_film']);

if ($resultat->execute()){
    $tableau = $resultat->fetchAll (PDO::FETCH_ASSOC);
    echo json_encode($tableau);
} else {
    $arrayVide [] = ["Erreur"];
    echo json_encode($arrayVide);
};


?>