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
                    <a style="color:#F77D0A; margin-right: 35px" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a style="color:#F77D0A; margin-right: 35px" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a style="color:#F77D0A; margin-right: 35px" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a style="color:#F77D0A; margin-right: 35px"href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a style="color:#F77D0A; margin-right: 35px" href="">
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
                        <a href="index.php" class="nav-item nav-link active">Acceuil</a>
                        <a href="about.php" class="nav-item nav-link">À propos</a>
                        <div class="nav-item dropdown">
                            <a href="dashboard.php" class="nav-item nav-link" >Nos Voitures</a>
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


    <!-- Search Start -->
    <div class="container-fluid bg-white pt-3 px-lg-5">
    </div>
    <!-- Search End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0" style="margin-bottom:50px;">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/v.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">LOUER UNE VOITURE</h4>
                            <h1 class="display-1 text-white mb-md-4">Meilleures voitures de location dans votre région</h1>
                            <a href="dashboard.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Reserver maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/luxe.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">LOUER UNE VOITURE</h4>
                            <h1 class="display-1 text-white mb-md-4">Des voitures de qualité avec des miles illimités</h1>
                            <a href="dashboard.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Reserver maintenant</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Avantage -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Nos Avantages</h1>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-taxi text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">01</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">modele</h4>
                        <p class="m-0">Nous Disposons d'une vaste sélection de modèles de voitures, allant des voitures économiques aux voitures de luxe, pour répondre aux besoins et aux préférences de tous les clients.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item active d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-money-check-alt text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">02</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Prix Compétitifs</h4>
                        <p class="m-0">Offrir des tarifs compétitifs par rapport aux autres agences de location de voitures dans la région.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-car text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">03</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Actualité</h4>
                        <p class="m-0">Nous Renouvelons régulièrement la flotte pour inclure les derniers modèles de voitures et offrir un choix varié.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-cogs text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">04</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Mécanique</h4>
                        <p class="m-0">Nous investissons dans les dernières technologies de diagnostic et de réparation pour assurer des réparations rapides et efficaces en cas de besoin.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-spray-can text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">05</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Varieté De Couleur</h4>
                        <p class="m-0">Nous Proposons une variété de couleurs de voitures pour permettre aux clients de choisir celle qui correspond le mieux à leurs préférences esthétiques.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-pump-soap text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">06</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Performances de Nos Voitures</h4>
                        <p class="m-0">Nous Proposons des voitures bien entretenues et en excellent état pour assurer la sécurité et le confort des clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Avantage -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top:  10px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Get in touch</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>123 Lac 2,Tunis, Tunisia</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>+216 56000777</p>
                <p><i class="fa fa-envelope text-white mr-3"></i>locationvoiture@gmail.com</p>
                <h6 class="text-uppercase text-white py-2">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Liens utiles</h4>
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
                        <a href=""><img class="w-100" src="img/gallery-1.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/xj.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-3.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-4.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-5.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-6.jpg" alt=""></a>
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