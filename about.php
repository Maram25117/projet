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
                    <a style="color:#F77D0A; margin-right: 35px">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a style="color:#F77D0A; margin-right: 35px" >
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a style="color:#F77D0A; margin-right: 35px" >
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
                        <a href="about.php" class="nav-item nav-link active">À propos</a>
                        <div class="nav-item dropdown">
                            <a href="dashboard.php" class="nav-item nav-link">Nos Voitures</a>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="nav-button">
                        <div class="nav-button">
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


   

    <!--search start-->
    <div class="container-fluid bg-white pt-3 px-lg-5">
    </div>
    <!-- Search End -->
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">BIENVENUE AU <span class="text-primary">LuxCar Rentals</span></h1>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <img class="w-75 mb-4" src="img/reserver.jpg" alt="">
                    <p style="color: #2B2E4A;"><strong> chez LuxCar Rentals, votre destination ultime pour une expérience de location de voitures inégalée. Plongez dans le monde de l'élégance et du luxe avec notre gamme exclusive de véhicules prestigieux, conçus pour surpasser toutes vos attentes en matière de style, de confort et de performance.

Chez LuxCar Rentals, nous croyons que chaque trajet devrait être une expérience mémorable. C'est pourquoi nous mettons à votre disposition une sélection soigneusement choisie de voitures de luxe, des berlines élégantes aux SUV spacieux, en passant par les cabriolets sportifs. Chaque véhicule incarne l'essence même du raffinement, offrant une conduite sans pareil pour tous vos déplacements.</strong></p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-headset text-secondary"></i>
                        </div>
                        <h4 class="text-uppercase m-0">Assistance pour la location de voiture 24h/24 et 7j/7</h4>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-secondary p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-car text-secondary"></i>
                        </div>
                        <h4 class="text-light text-uppercase m-0">Réservation de voiture à tout moment</h4>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-map-marker-alt text-secondary"></i>
                        </div>
                        <h4 class="text-uppercase m-0">De nombreux lieux de ramassage</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
        

    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">A propos</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="index.php">Acceuil</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">A propos</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    

    <!-- Banner Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0">
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;">
                        <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="img/banner-left.png" alt="">
                        <div class="text-right">
                            <h3 class="text-uppercase text-light mb-3">Vous voulez être chauffeur ?</h3>
                            <p class="mb-4">Découvrez le luxe redéfini avec LuxCar Rentals . Ne ratez pas cette occasion</p>
                            <a class="btn btn-primary py-2 px-4" href="dashboard.php">Commencer Maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                        <div class="text-left">
                            <h3 class="text-uppercase text-light mb-3">Vous cherchez une voiture ?</h3>
                            <p class="mb-4">Nous mettons à votre disposition une sélection soigneusement choisie de voitures de luxe</p>
                            <a class="btn btn-primary py-2 px-4" href="dashboard.php">Commencer Maintenant</a>
                        </div>
                        <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="img/banner-right.png" >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    


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
                    <img src="img/vendor-4.png">
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
                    <a class="btn btn-lg btn-dark btn-lg-square" ><i class="fab fa-instagram"></i></a>
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
                        <a href=""><img class="w-100" src="img/gallery-4.jpg" ></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-5.jpg"></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-6.jpg"></a>
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