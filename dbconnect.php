<?php
//fait la connexion a la base de donnee
//fait la connexion du projet web avec la base de donnee a l'aide du php
$con=mysqli_connect("localhost","root","changeme");// Cette ligne utilise la fonction mysqli_connect() pour établir une connexion avec le serveur de base de données MySQL. Les paramètres passés sont respectivement le nom d'hôte (localhost), le nom d'utilisateur (root) et le mot de passe (vide dans ce cas).
$db=mysqli_select_db($con,"projet web");//Cette ligne sélectionne la base de données spécifiée (projet web) pour être utilisée avec la connexion établie ($con). Elle utilise la fonction mysqli_select_db() pour cela.

if(!$con){

   die("probléme de connexion au serveur de base de données : " .mysqli_connect_error());

}
//Cette ligne vérifie si la connexion à la base de données a été établie avec succès. Si la connexion échoue, elle affiche un message d'erreur indiquant le problème rencontré en utilisant mysqli_connect_error() et arrête l'exécution du script en utilisant die().
?>
