<?php
    session_start();//Cette fonction démarre une session PHP. Une session est une façon de stocker des informations côté serveur pour une utilisation ultérieure. 
    if(isset($_SESSION["logged in"]) && $_SESSION["logged in"]===true)//verifie si la cle logged in definie dans la session et si il est true
    {
     $mail=$_SESSION["mail"];
    }
        
?>
<!--si l'utlilisateur est connecte on recupere son adresse email-->
<!DOCTYPE html>
<head>
    <meta charset="utf-8"><!--specifie les caracteres de la page web-->
    <title>LuxCar Rentals</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"><!--Cette partie spécifie que la largeur de la page doit correspondre à la largeur de l'appareil-->
    <!--Cet attribut name  vous permettez au navigateur de s'ajuster correctement à différentes tailles d'écran et de résolutions sur les appareils mobiles, améliorant ainsi l'expérience utilisateur.-->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 
    <link rel="icon" type="image/x-icon" href=img/vendor-3.png>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap DateTimePicker CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">

<!-- Bootstrap DateTimePicker JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

    <!--  Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a  style="color:white; margin-right: 10px;" href=""><i class="fa fa-phone-alt mr-2"></i>+216 56000777</a>
                    <span  style="color:white; margin-right: 10px;">|</span>
                    <a  style="color:white; margin-right: 10px;" href=""><i class="fa fa-envelope mr-2"></i>locationVoiture@gmail.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a style="color:#F77D0A; margin-right: 35px" >
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a style="color:#F77D0A; margin-right: 35px" >
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a style="color:#F77D0A; margin-right: 35px" >
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a style="color:#F77D0A; margin-right: 35px" >
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a style="color:#F77D0A; margin-right: 35px">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;"> <!--aura un z-index de 9, ce qui signifie qu'il sera empilé au-dessus des éléments avec un z-index-->
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">LuxCar Rentals</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Acceuil</a>
                        <a href="about.php" class="nav-item nav-link">À propos</a>
                        <div class="nav-item dropdown">
                            <a href="dashboard.php" class="nav-item nav-link">Nos Voitures</a>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                        <div class="nav-button">
                            <!--<div class="nav-button">-->
                        <?php
                        // Vérifie si l'utilisateur est un administrateur
                        if (isset($_SESSION["logged in"])===true && $_SESSION["mail"] = $mail ) {
                        // Affiche le bouton "Log Out" pour les administrateurs
                         echo '<a href="logout.php"><button class="btn white-btn" id="logoutBtn">Déconnexion</button></a>';
                        }else{
                            // Afficher le bouton de connexion
                            echo '<a href="login.php"><button class="btn white-btn" id="loginBtn">Connexion</button></a>';
                        }
                        ?>
                        </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Search Start -->
    <div class="container-fluid bg-white pt-3 px-lg-5">
    </div>
    <!-- Search End -->


   <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Réservation</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="index.php">Acceuil</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Réservation</h6>
        </div>
    </div>
    <!-- Page Header Start -->
   
    


    <!-- Detail Start -->
    <!--import des données des voitres a partir de la base de donnees en fontion d'un tableau-->
    <?php
include "dbconnect.php";

// Vérifier si l'ID de la voiture est défini dans l'URL 
if (isset($_GET['id'])) {
    // Récupérer l'ID de la voiture depuis l'URL
    $car_id = $_GET['id'];

    // Requête SQL pour récupérer les détails de la voiture à partir de son ID
    $query = "SELECT * FROM voiture WHERE id = $car_id";
    $result = mysqli_query($con, $query);

    // Vérifier si la requête a réussi et s'il y a des résultats
    if ($result && mysqli_num_rows($result) > 0) {
        // Récupérer les informations de la voiture
        $car = mysqli_fetch_assoc($result);

        // Afficher les détails de la voiture
        echo '<div class="container-fluid pt-5">';
        echo '<div class="container pt-5 pb-3">';
        echo '<h1 class="display-4 text-uppercase mb-5">' . $car['modele'] . '</h1>';
        echo '<div class="row align-items-center pb-2">';
        echo '<div class="col-lg-6 mb-4">';
        echo '<img class="img-fluid" src="data:image;base64,' . base64_encode($car['image']) . '" alt="' . $car['modele'] . '">';
        echo '</div>';
        echo '<div class="col-lg-6 mb-4">';
        echo '<h4 class="mb-2">' . $car['prix'] . '  TND/Jour</h4>';
        echo '<div class="d-flex mb-3">';
        // Le reste du contenu HTML pour les détails de la voiture
        echo '<h6 class="mr-2">Rating:</h6>';
        echo '<div class="d-flex align-items-center justify-content-center mb-1">';
        echo '<small class="fa fa-star text-primary mr-1"></small>';
        echo '<small class="fa fa-star text-primary mr-1"></small>';
        echo '<small class="fa fa-star text-primary mr-1"></small>';
        echo '<small class="fa fa-star text-primary mr-1"></small>';
        echo '<small class="fa fa-star-half-alt text-primary mr-1"></small>';
        echo '<small>(250)</small>';
        echo '</div>';
        echo '</div>';
        echo '<p>' . $car['commentaire'] . '</p>'; // Afficher le commentaire de la voiture
        echo '<div class="d-flex pt-1">';
        // Le reste du contenu HTML
        echo '<h6>Share on:</h6>';
        echo '<div class="d-inline-flex">';
        echo '<a class="px-2" ><i class="fab fa-facebook-f"></i></a>';
        echo '<a class="px-2" ><i class="fab fa-twitter"></i></a>';
        echo '<a class="px-2" ><i class="fab fa-linkedin-in"></i></a>';
        echo '<a class="px-2" ><i class="fab fa-pinterest"></i></a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        // Section des caractéristiques de la voiture
        echo '<div class="container">';
        echo '<div class="row mt-n3 mt-lg-0 pb-4 justify-content-center">';
        echo '<div class="col-md-3 col-6 mb-2">';
        echo '<i class="fa fa-car text-primary mr-2"></i>';
        echo '<span>Model: ' . $car['date_creation'] . '</span>';
        echo '</div>';
        echo '<div class="col-md-3 col-6 mb-2">';
        echo '<i class="fa fa-cogs text-primary mr-2"></i>';
        echo '<span>Automatic</span>';
        echo '</div>';
        echo '<div class="col-md-3 col-6 mb-2">';
        echo '<i class="fa fa-road text-primary mr-2"></i>';
        echo '<span>20km/liter</span>';
        echo '</div>';
        echo '<div class="col-md-3 col-6 mb-2">';
        echo '<i class="fa fa-eye text-primary mr-2"></i>';
        echo '<span>GPS Navigation</span>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    } 
} 
?>


    <!-- Detail End -->
    

    <!-- Car Booking Start -->
    <div class="container-fluid pb-5">
        <form id="form" action="book.php" method="post" onsubmit="return validateForm()" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="mb-4">Détail personnel</h2>
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" name="nom" placeholder="Nom" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" name="prenom" placeholder="Prenom" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="email" class="form-control p-4" name="email" placeholder="Email" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="number" class="form-control p-4" name="tel" placeholder="Numéro de télephone" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="number" class="form-control p-4" name="cin" placeholder="CIN" required="required">
                            </div>
                        </div>
                    </div>
                    <h2 class="mb-4">Détails de la réservation</h2>
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-6 form-group">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text" class="form-control p-4 datetimepicker-input" name="datealler" placeholder="Date Aller"
                                        data-target="#date1" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <div class="time" id="time1" data-target-input="nearest">
                                    <input type="text" class="form-control p-4 datetimepicker-input"name="tempsaller" placeholder="Temps aller"
                                        data-target="#time1" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <div class="date" id="date2" data-target-input="nearest">
                                    <input type="text" class="form-control p-4 datetimepicker-input"name="dateretour" placeholder="Date retour"
                                        data-target="#date2" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <div class="time" id="time2" data-target-input="nearest">
                                    <input type="text" class="form-control p-4 datetimepicker-input" name="tempsretour" placeholder="Temps retour"
                                        data-target="#time2" data-toggle="datetimepicker" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control py-3 px-4" rows="3" name="msg" placeholder="demande spéciale"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="bg-secondary p-5 mb-5 ">
                        <h2 class="text-primary mb-4">Paiement</h2>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" value="espece" id="directcheck">
                                <label class="custom-control-label" for="directcheck">Espece</label>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" value="check" id="banktransfer">
                                <label class="custom-control-label" for="banktransfer">Chéque</label>
                            </div>
                        </div>

                        

<?php


include "dbconnect.php";

// Vérifier si l'ID de la voiture est défini dans l'URL
if (isset($_GET['id'])) {
    $id_v = $_GET['id'];

    // Requête pour récupérer les détails de la voiture à partir de son ID
    $query = "SELECT * FROM voiture WHERE id = $id_v";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $car = mysqli_fetch_assoc($result);
        $modele = $car['modele'];
        $prix = $car['prix'];
        $id_v= $car['id'];
        $response = isset($_GET['response']) ? $_GET['response'] : '';
        // Insérer le modèle, le prix et l'ID de la voiture dans les champs cachés du formulaire
        echo '<input type="hidden" name="modele" value="' . htmlspecialchars($modele) . '">';
        echo '<input type="hidden" name="prix" value="' . htmlspecialchars($prix) . '">';
        echo '<input type="hidden" name="car_id" value="' . htmlspecialchars($id_v) . '">';
        
    }
}

// Vérifie si l'utilisateur est un administrateur
if (isset($_SESSION["logged in"])===true && $_SESSION["mail"] = $mail ) {
    // Affiche le bouton reserver pour les administrateurs
    echo '<button onclick="verifierReservation()" class="btn btn-block btn-primary py-3">Reserver Maintenant</button>';
    }else{
      // Afficher le bouton creer compte   
    echo '<a href="login.php" class="btn btn-block btn-primary py-3">Create Account</a>';
    }
?>

                    </div>
            </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    function validateForm() {
        var nom = document.forms["form"]["nom"].value;
        var prenom = document.forms["form"]["prenom"].value;
        var email = document.forms["form"]["email"].value;
        var tel = document.forms["form"]["tel"].value;
        var cin = document.forms["form"]["cin"].value;
        var datealler = document.forms["form"]["datealler"].value;
        var dateretour = document.forms["form"]["dateretour"].value; 
        
        // Validation du nom et prénom (champs non vides et uniquement des lettres)
        var nameRegex = /^[a-zA-Z\s]+$/;
        if (nom == "" || prenom == "" || !nom.match(nameRegex) || !prenom.match(nameRegex)) {
            alert("Veuillez saisir un nom et un prénom valides.");
            return false;
        }

        // Validation de l'email (format valide)
        var emailRegex = /\S+@\S+\.\S+/;
        if (!email.match(emailRegex)) {
            alert("Veuillez saisir une adresse e-mail valide.");
            return false;
        }

        // Validation du numéro de téléphone et du CIN (longueur 8 chiffres)
        if (tel.length != 8 || cin.length != 8) {
            alert("Le numéro de téléphone et le CIN doivent contenir exactement 8 chiffres.");
            return false;
        }

        // Validation de la date de retour après la date d'aller
        if (new Date(dateretour) <= new Date(datealler)) {
            alert("La date de retour doit être ultérieure à la date de départ.");
            return false;
        }

        // Validation de la sélection du mode de paiement
        var modePaiement = document.querySelector('input[name="payment"]:checked');
        if (!modePaiement) {
            alert("Veuillez sélectionner un mode de paiement pour effectuer la réservation.");
            return false;
        }

        // Si toutes les validations passent, le formulaire est valide
        return true;
    }
</script>


</script> 

    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="img/vendor-1.png" >
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-2.png" >
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-3.png" >
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-4.png" >
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-5.png" >
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-6.png" >
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-7.png" >
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-8.png" >
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>123 Lac 2,Tunis, Tunisia</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>+216 56000777</p>
                <p><i class="fa fa-envelope text-white mr-3"></i>locationvoiture@gmail.com</p>
                <h6 class="text-uppercase text-white py-2">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" ><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" ><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" ><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Usefull Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Private Policy</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Term & Conditions</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>New Member Registration</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Affiliate Programme</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Return & Refund</a>
                    <a class="text-body" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Help & FQAs</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Car Gallery</h4>
                <div class="row mx-n1">
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-1.jpg" ></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/xj.jpg" ></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-3.jpg" ></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-4.jpg"></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-5.jpg" ></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-6.jpg" ></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-uppercase text-light mb-4"></h4>
                <p class="mb-4">Découvrez le luxe redéfini avec LuxCar Rentals - où chaque trajet devient un moment de pur plaisir et d'élégance.
                Que vous planifiiez un voyage d'affaires, une escapade en famille ou une aventure spontanée, LuxCar Rentals est votre partenaire de confiance pour une expérience de location de voitures exceptionnelle.
                </p>
                <div class="w-100 mb-3">
                </div>
                <i style="color:#F77D0A; margin-right: 35px">LuxCar Rentals</i>
            </div>
        </div>
    </div>
   
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!--  Javascript -->
    <script src="js/main.js"></script>
</body>

</html>











