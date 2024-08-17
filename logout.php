<?php
//fermeture de la session lorsque l'utilisateur clique sur deconnexion
session_start();

// Déconnexion de l'utilisateur
$_SESSION = array();
session_destroy();

// Rediriger vers la page de connexion avec un message de déconnexion réussie
header("location:login.php?logout=oui");
exit;
?>
