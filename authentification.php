<?php
include "dbconnect.php";
// si lutilisateur contient un email et une mot de passe dans la base de donnees pour faire le login
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







?>