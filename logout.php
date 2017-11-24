<?php
//détruie ttes les variables de session
session_start(); //pour détruire la session il faut d'abord la lancer
session_destroy();

header("location: ./index.php");
//si on veut juste détruire le panier par ex. on écrit (et pas de session_destroy):
//unset($_SESSION['panier']);
?>