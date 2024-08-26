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
                    <span  style="color:white; margin-right: 10px;"> | </span><br>
                    <a  style="color:white; margin-right: 10px;" href=""><i class="fa fa-envelope mr-2"></i>locationVoiture@gmail.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a style="color:#F77D0A; margin-right: 35px" >
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a style="color:#F77D0A; margin-right: 35px" >
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a style="color:#F77D0A; margin-right: 35px" >
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a style="color:#F77D0A; margin-right: 35px">
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
                        <a href="about.php" class="nav-item nav-link">À propos</a>
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

    <!-- Search Start -->
    <div class="container-fluid bg-white pt-3 px-lg-5">
    </div>
    <!-- Search End -->

    <!-- Related Car Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <h2 class="mb-4">Voitures associées</h2>
            <div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">
                <div class="rent-item">
                    <img class="img-fluid mb-4" src="img/car-rent-6.png" alt="">
                    <h4 class="text-uppercase mb-4">Audi R8</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2008</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>25K</span>
                        </div>
                    </div>
                </div>
                <div class="rent-item">
                    <img class="img-fluid mb-4" src="img/car-rent-5.png" alt="">
                    <h4 class="text-uppercase mb-4">Mercedes Benz Class-C</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2021</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>25K</span>
                        </div>
                    </div>
                </div>
                <div class="rent-item">
                    <img class="img-fluid mb-4" src="img/car-rent-2.png" alt="">
                    <h4 class="text-uppercase mb-4">BMW IX1 U11</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2022</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>25K</span>
                        </div>
                    </div>
                </div>
                <div class="rent-item">
                    <img class="img-fluid mb-4" src="img/car-rent-4.png" alt="">
                    <h4 class="text-uppercase mb-4">Audi Q3</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2011</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>25K</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Related Car End -->



    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Liste des voitures</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="index.php">Acceuil</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Liste des voitures</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Rent A Car Start -->
    <div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-4 text-uppercase text-center mb-5">Trouvez votre voiture</h1>
        <div class="row">
            <?php
            // Connexion à la base de données
            include "dbconnect.php";

            // Requête SQL pour sélectionner toutes les voitures disponibles
            $query = "SELECT * FROM voiture";
            $result = mysqli_query($con, $query);

            // Vérifie s'il y a des résultats à afficher
            if (mysqli_num_rows($result) > 0) {
                // Initialisation du compteur pour les colonnes
                $col_counter = 0;
                
                // Tant qu'il y a des lignes à récupérer
                while ($row = mysqli_fetch_assoc($result)) {
                    // Affiche une nouvelle ligne de tableau chaque fois que le compteur atteint 3
                    if ($col_counter % 3 == 0) {
                        echo '<div class="row">';
                    }
                    
                    // Affiche la voiture dans une colonne
                    echo '<div class="col-lg-4 col-md-6 mb-2">';
                    echo '<div class="rent-item mb-4">';
                    echo '<img class="img-fluid mb-4" src="data:image;base64,' . base64_encode($row['image']) . '" alt="" style="width: 100%; height: auto;" >';
                    echo '<h4 class="text-uppercase mb-4">' . $row['modele'] . '</h4>';
                    echo '<div class="d-flex justify-content-center mb-4">';
                    echo '<div class="px-2">';
                    echo '<i class="fa fa-car text-primary mr-1"></i>';
                    echo '<span>'. $row['date_creation'] .'</span>';
                    echo '</div>';
                    echo '<div class="px-2 border-left border-right">';
                    echo '<i class="fa fa-cogs text-primary mr-1"></i>';
                    echo '<span>AUTO</span>';
                    echo '</div>';
                    echo '<div class="px-2">';
                    echo '<i class="fa fa-road text-primary mr-1"></i>';
                    echo '<span>25K</span>';
                    echo '</div>';
                    echo '</div>';
                    
                    // Affichage du prix si l'utilisateur est connecté, sinon affichage du bouton "Créer un compte"
                    if (isset($_SESSION["logged in"])===true && $_SESSION["mail"] = $mail ) {
                        echo '<a class="btn btn-primary px-3" href="booking.php?id=' . $row['id'] . '">'. $row['prix'] . '  TND/Jour</a>';
       
                    } else {
                        echo '<a class="btn btn-primary px-3" href="booking.php?id=' . $row['id'] . '" >Voir Details</a>';
                    }
                    
                    echo '</div>';
                    echo '</div>';
                    
                    // Incrémente le compteur de colonnes
                    $col_counter++;
                    
                    // Ferme la ligne de tableau si le compteur atteint 3
                    if ($col_counter % 3 == 0) {
                        echo '</div>';
                    }
                }
                
                // Ferme la dernière ligne de tableau si le nombre total de voitures est inférieur à 3
                if ($col_counter % 3 != 0) {
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
</div>

    <!-- Rent A Car End -->


<!--partie voiture non disponible affichage d'alert voiture non disponible-->

<script>
    // Récupérer le paramètre GET 'availability' de l'URL
    const urlParams1 = new URLSearchParams(window.location.search);
    const availability1 = urlParams1.get('availability');
    const nom = urlParams1.get('nom');
    const prenom = urlParams1.get('prenom');
    const datealler = urlParams1.get('datealler');
    const dateretour = urlParams1.get('dateretour');
    const prix = urlParams1.get('prix');
    const modele = urlParams1.get('modele');

    // Construire le message à afficher dans l'alerte
    const message = `Salut ${prenom} ${nom}, 
    Votre réservation pour le modèle ${modele}, du ${datealler} au ${dateretour}, pour un prix de ${prix} /par jour a été enregistrée avec succès.`;

    // Afficher l'alerte en fonction de la disponibilité
    if (availability1 === 'available') {
        // Personnaliser le style de l'alerte
        const style = `
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 18px;
            border-radius: 5px;
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000;
        `;
        // Créer un élément div pour l'alerte
        const alertDiv = document.createElement('div');
        alertDiv.textContent = message;
        alertDiv.style.cssText = style;

        // Ajouter l'alerte à la page
        document.body.appendChild(alertDiv);

        // Supprimer l'alerte après quelques secondes
        setTimeout(() => {
            alertDiv.remove();
        }, 5000);
    }
</script>
<script>
    // Récupérer le paramètre GET 'availability' de l'URL
    const urlParams = new URLSearchParams(window.location.search);
    const availability = urlParams.get('availability');

    // Afficher l'alerte en fonction de la disponibilité
    if (availability === 'unavailable') {
        // Personnaliser le style de l'alerte
        const style = `
            background-color:#f44336 ;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 18px;
            border-radius: 5px;
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000;
        `;
        // Créer un élément div pour l'alerte
        const alertDiv = document.createElement('div');
        alertDiv.textContent = 'Désolé, cette voiture n\'est pas disponible pour la période choisie.';
        alertDiv.style.cssText = style;

        // Ajouter l'alerte à la page
        document.body.appendChild(alertDiv);

        // Supprimer l'alerte après quelques secondes
        setTimeout(() => {
            alertDiv.remove();
        }, 5000);
    }
</script>



     <!-- Banner Start -->
     <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-banner py-5 px-4 text-center">
                <div class="py-5">
                    <h1 class="display-1 text-uppercase text-primary mb-4">DES PRIX EXCEPTIONNEL</h1>
                    <h1 class="text-uppercase text-light mb-4">CHEZ LuxCar Rentals</h1>
                    <p class="mb-4">Devenez Un Membre</p>
                    <?php
                        // Vérifie si l'utilisateur est un administrateur
                        if (isset($_SESSION["logged in"])===true && $_SESSION["mail"] = $mail ) {
                        // Affiche le bouton "Log Out" pour les administrateurs
                         echo '<a style="color:orange" >Profitez Maintenant</a>';
                        }else{
                            // Afficher le bouton de connexion
                            echo '<a class="btn btn-primary mt-2 py-3 px-5" href="login.php">Reserver Maintenant</a>';
                        }
                        ?>
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
                    <img src="img/vendor-8.png">
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
                        <a href=""><img class="w-100" src="img/gallery-3.jpg"></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-4.jpg" ></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-5.jpg"></a>
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
    

