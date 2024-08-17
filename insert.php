<?php
include "dbconnect.php";

if(isset($_POST["nom"]) && ($_POST["prenom"]) && ($_POST["mail"]) && ($_POST["mdp"]) && ($_POST["cmdp"]))
{
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $mail=$_POST["mail"];
    $mdp=$_POST["mdp"];
    $cmdp=$_POST["cmdp"];

    $req = mysqli_query($con, "SELECT * FROM user WHERE mail='$mail'");

    if(mysqli_num_rows($req) > 0)
    {
        // L'utilisateur existe déjà dans la base de données, rediriger vers la page de création de compte avec un message d'erreur
        header("location:login.php?login=exist");
        exit;
    }

    $stmt = mysqli_prepare($con, "INSERT INTO user (nom, prenom, mail, mdp, cmdp) VALUES (?, ?, ?, ?, ?)");
    
    // Liaison des paramètres
    mysqli_stmt_bind_param($stmt, "sssss", $nom, $prenom, $mail, $mdp, $cmdp);

    // Exécution de la requête
    $result = mysqli_stmt_execute($stmt);

    if($result)
    {   // si l'utilisateur est connectee avec son email ou non , partie login , pour l'affichage du bouton de déconnexion
        if(isset($_POST["mail"]) && isset($_POST["mdp"]) )
        {
           $mail =$_POST["mail"];
           $password =$_POST["mdp"];
        
        
           $req =mysqli_query($con,"select * from user where mail='$mail' and mdp='$password'");
        
           if(mysqli_num_rows($req)==1)
           {
                 session_start();
                 $_SESSION["logged in"]=true;
                 $_SESSION["mail"]=$mail;
                 header("location:index.php"); 
                 echo"bienvenue";
           
           
           
            }else
            {
                  header("location: login.php?login=fail");
                  exit;
            }
        
        
        
        }
        
        
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
