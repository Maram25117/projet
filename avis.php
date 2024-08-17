<?php
include "dbconnect.php";//contient connexion a la base de donnee
//partie insertion des donnees de la page contacte dans la base de donnee

if(isset($_POST["name"]) && ($_POST["email"]) && ($_POST["message"]))//Cette ligne vérifie si les données du formulaire "name", "email" et "message" ont été soumises via la méthode POST.
{
    $name=$_POST["name"];//Ces lignes récupèrent les valeurs des champs "name", "email" et "message" envoyées via le formulaire et les stockent dans des variables PHP.
    $email=$_POST["email"];
    $message=$_POST["message"];

    $stmt = mysqli_prepare($con, "INSERT INTO contact (name, email, message) VALUES (?, ?, ?)");//Cette ligne prépare une instruction SQL pour insérer les données dans la table "contact". Les valeurs des champs sont des paramètres marqués par des points d'interrogation.
    
    // Liaison des paramètres
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);//: Cette ligne lie les valeurs des variables PHP aux paramètres de la requête préparée.

    // Exécution de la requête
    $result = mysqli_stmt_execute($stmt);// Cette ligne exécute la requête préparée pour insérer les données dans la base de données.

    if($result)//Cette ligne vérifie si l'exécution de la requête a réussi.
    {   header("location:contact.php");
        echo "insertion effectuée";
    }
    else
    {
        echo "Erreur d'insertion : " . mysqli_error($link);
    }

    // Fermeture de la requête préparée
    mysqli_stmt_close($stmt);
}
else
{
    echo "Tous les champs doivent être remplis";
}
   
?>