<?php
ob_start();

header("Cache-Control: no-cache"); 

//on récupère le fichier de config
require_once('./config/config.php');

// récupérer les données du formulaire
if (isset ($_POST['Email'], $_POST['MotDePasse'])){
$email = $_POST['Email'];
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
$sql = "SELECT id_user, Nom, Prenom, Email, MotDePasse FROM t_users  WHERE Email=:Email";

$resultat = $pdo->prepare ($sql);
$resultat->bindValue (":Email", $email);
$resultat->execute();
$tableau = $resultat->fetchAll (PDO::FETCH_ASSOC);
//var_dump($tableau) ;
//if ($email = $tableau[0]['Email']) {
    if (count($tableau)!=0 && password_verify ($passwordSansHasher, $tableau[0]['MotDePasse'])){
        session_start();
        $_SESSION['Email']= $_POST['Email'];
        $_SESSION['Prenom']= $tableau[0]['Prenom'];
        $_SESSION['Nom']= $tableau[0]['Nom']; 
        $_SESSION['id_user']= $tableau[0]['id_user'];
        echo "ok";   
    }    
    else {
	   echo "error";
    }
//} else {
//    echo "compteinexistant";
//}
}
else {
    echo "error";
}
ob_flush();
?>