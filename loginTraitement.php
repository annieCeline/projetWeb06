<?php

//on récupère le fichier de config
require_once('./config/config.php');

// récupérer les données du formulaire
$email = $_POST['email'];
$passwordSansHasher = $_POST['MotDePasse'];

//on se connecte à la base de données
try {
    $pdo = new PDO(MYSQL_DSN, DB_USER, DB_PWD);
} catch (PDOException $e) {
    //echo $e->getMessage();     
    $pdo = null;               
    die('Problème technique'); 
}

// créer et preparer la requête
$sql = "SELECT email, MotDePasse FROM t_users  WHERE email=:email";

$resultat = $pdo->prepare ($sql);
$resultat->bindValue (":email", $email);
$resultat->execute();
$tableau = $resultat->fetchAll (PDO::FETCH_ASSOC);

if (password_verify ($passwordSansHasher, $tableau[0]['MotDePasse'])){
    session_start();
    $_SESSION['email']= $_POST['email'];
    
	echo "ok";
    
}
else {
	echo "error";
}
?>