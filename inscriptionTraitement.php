<?php

//on récupère le fichier de config
require_once('./config/config.php');

//récupérer les données du formulaire
$nom = $_POST['Nom'];
$prenom = $_POST['Prenom'];
$email = $_POST['Email'];
$pseudo = $_POST['Pseudo'];
$password = password_hash($_POST['MotDePasse'], PASSWORD_DEFAULT, ['COST'=>12]);

//on se connecte à la base de données
try {
    $pdo = new PDO(MYSQL_DSN, DB_USER, DB_PWD);
} catch (PDOException $e) {
    //echo $e->getMessage();     
    $pdo = null;               
    die('Problème technique'); 
}

//créer et préparer la requête
$sql = "INSERT INTO t_users (id_user, Nom, Prenom, Pseudo, Email, MotDePasse) VALUES (NULL, :Nom, :Prenom, :Pseudo, :Email, :MotDePasse)";


$resultat = $pdo->prepare ($sql);
$resultat->bindValue(":Nom", $nom);
$resultat->bindValue(":Prenom", $prenom);
$resultat->bindValue(":Pseudo", $pseudo);
$resultat->bindValue(":Email", $email);
$resultat->bindValue(":MotDePasse", $password);

if ($resultat->execute()) {
    echo "ok";
} else {
    echo "error";
}
?>