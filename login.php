<?php
 session_start();
 $_SESSION["logged in"] = true; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="icon" type="image/x-icon" href="/c/web/img/about.png">-->
    <link rel="icon" type="image/x-icon" href=img/vendor-3.png>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="enregistrer.css">
    <title>Enregistrer</title>
</head>
<body>
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <p>LuxCar Rentals</p>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Se Connecter</button>
            <button class="btn" id="registerBtn" onclick="register()">S'inscrire</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>

<!----------------------------- Form box ----------------------------------->    
    <div class="form-box" >
        
        <!--------------- login form -------------------------->
      
        <div class="login-container" id="login">
            <form id="form" action="authentification.php" method="post">
            <?php
               if(isset($_GET["login"]) && ($_GET["login"])=="exist" )
               {
                       echo "<p style='color:white;font-weight:bold;text-align:center'>Le compte gmail existe déja </p>";
               }if(isset($_GET["login"]) && ($_GET["login"])=="fail" )
              {
                      echo "<p style='color:white;font-weight:bold;text-align:center'>erreur d'authentification </p>";
              }else if(isset($_GET["logout"]) && ($_GET["logout"])== "oui" )
              {
                      echo "<p style='color:white;font-weight:bold;text-align:center'>Au revoir </p>";
              }
             ?>
            <div class="top">
                <span> Vous n'avez pas de compte ?<a href="#" onclick="register()">S'inscrire</a></span>
                <header>Connexion</header>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name="mail" placeholder="Email">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" name="mdp" placeholder="Mot de passe">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Se Connecter">
            </div>
            </form>
            <div class="two-col">
                <div class="one">
                      <label><a>Connectez-Vous</a></label>
                </div>
                <div class="two">
                    <label><a>LuxCar Rentals</a></label>
                </div>
            </div>
        </div>
       
  
        <!------------------- registration form -------------------------->

        <div class="register-container" id="register">
          <form id="form" action="insert.php" method="post" onsubmit="return validateForm()" >
            <div class="top">
                <span> Avez-Vous un compte?<a href="#" onclick="login()">Se Connecter</a></span>
                <header>S'inscrire</header>
            </div>
            <div class="two-forms">
                <div>
                <div class="input-box">
                    <input type="text"  class="input-field" id="name" name="nom" placeholder="Nom">
                    <i class="bx bx-user"></i>   
                </div>
                </div>  
                <div class="input-box">
                    <input type="text" class="input-field" id="firstname" name="prenom" placeholder="Prenom">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" id="email" name="mail" placeholder="Email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" id="password" name="mdp" placeholder="Mot de passe">
                <i class="bx bx-lock-alt"></i>  
            </div>
           <div class="input-box">
                <input type="password" class="input-field" id="cpassword" name="cmdp" placeholder="Confirmer votre mot de passe">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Enregistrer">
            </div>
            </form>
            <div class="two-col">
                <div class="one">
                    <label><a >Connectez-Vous</a></label>
                </div>
                <div class="two">
                    <label><a>LuxCar Rentals</a></label>
                </div>
            </div>
        </div>
    
    </div>
</div> 


<script>
    // Fonction de validation du formulaire
    function validateForm() {
        // Récupérer les valeurs des champs
        var name = document.getElementById('name').value;
        var firstname = document.getElementById('firstname').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var cpassword = document.getElementById('cpassword').value;

        // Expression régulière pour vérifier les noms
        var namePattern = /^[a-zA-Z\s]+$/;

        // Vérifier si les champs sont vides
        if (name.trim() == '' || firstname.trim() == '' || email.trim() == '' || password.trim() == '' || cpassword.trim() == '') {
            alert('Tous les champs doivent être remplis');
            return false;
        }//trim(): pour supprimer les espaces

        // Vérifier si le nom et le prénom ne contiennent que des caractères alphabétiques
        if (!namePattern.test(name) || !namePattern.test(firstname)) {
            alert('Le nom et le prénom doivent contenir uniquement des lettres');
            return false;
        }

        // Vérifier si le mot de passe et sa confirmation correspondent
        if (password != cpassword) {
            alert('Les mots de passe ne correspondent pas');
            return false;
        }

        // Vérifier la validité de l'adresse email
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert('Adresse email invalide');
            return false;
        }
        if (password.length < 8) {
        alert('Le mot de passe doit comporter au moins 8 caractères');
        return false;
    }

        // Si la validation réussit, soumettre le formulaire
        return true;
    }
</script>




<script>
   //ce code JavaScript permet de basculer entre un menu de navigation réactif et non réactif en ajoutant ou en supprimant une classe spécifique à l'élément du menu de navigation. Cela se produit en réponse à une action déclenchée par l'utilisateur, telle que le clic sur un bouton de menu ou un autre élément interactif.
   //s'adapte a la taille d'ecran de l'utilisateur
   function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
   }
 
</script>

<script>
//ce script permet de basculer entre l'affichage du formulaire de connexion et du formulaire d'inscription en modifiant les styles CSS pour les faire apparaître ou disparaître de l'écran lorsque l'utilisateur interagit avec les boutons correspondants.

    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");

    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;//invisible
    }

    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;//invisible
        y.style.opacity = 1;

    }
</script>



</body>
</html>
            