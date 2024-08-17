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
   
    <!-- police -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href=img/vendor-3.png>
    <!--Icon :comme linkedin , insta , facebook  -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet"><!--pour apporter les icones-->

    <!-- bibliothéque Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- bibliothéque bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- style CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
      <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
       <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a  style="color:white; margin-right: 10px; "href=""><i class="fa fa-phone-alt mr-2"></i>+216 56000777</a><!--La classe "fa" est souvent utilisée avec la bibliothèque Font Awesome, qui fournit des icônes vectorielles-->
                    <span style="color:white; margin-right: 10px; ">|</span>
                    <a  style="color:white; margin-right: 10px;" href=""><i class="fa fa-envelope mr-2"></i>locationVoiture@gmail.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a style="color:#F77D0A; margin-right: 35px">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <br>
                    <a style="color:#F77D0A; margin-right: 35px">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a style="color:#F77D0A; margin-right:35px" >
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a style="color:#F77D0A; margin-right: 35px">
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




    <!-- début partie blanche sous-navbar  -->
    <div class="container-fluid bg-white pt-3 px-lg-5">
    </div>
    <!--fin partie blanche sous-navbar -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-4 text-uppercase text-center mb-5">Les Avis De Nos Clients</h1>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <img class="img-fluid ml-n4" src="img/testimonial-1.jpg" alt="">
                        <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                    </div>
                    <h4 class="text-uppercase mb-2">Amine Ben Soltan</h4>
                    <p class="m-0">LuxCar Rentals a rendu notre voyage en famille encore plus spécial avec leur service exceptionnel. Nous avons loué une Range spacieuse pour nos vacances et nous avons été très satisfaits de la qualité du véhicule et de la convivialité de l'équipe.</p>
                </div>
                <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <img class="img-fluid ml-n4" src="img/testimonial-2.jpg" alt="">
                        <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                    </div>
                    <h4 class="text-uppercase mb-2">Nihel Kamoun</h4>
                    <p class="m-0">je suis une cliente fidèle de LuxCar Rentals et je n'ai jamais été déçu par leur service. Leur gamme de voitures de luxe est impressionnante et leur personnel est toujours amical et professionnel. J'ai loué plusieurs fois chez eux et à chaque fois, l'expérience a été impeccable.</p>
                </div>
                <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <img class="img-fluid ml-n4" src="img/testimonial-3.jpg" alt="">
                        <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                    </div>
                    <h4 class="text-uppercase mb-2">Tarek Hachicha</h4>
                    <p class="m-0">J'ai loué un BMW IX1 U11  pour un voyage d'affaires et j'ai été ravi de mon expérience avec LuxCar Rentals. Le personnel était très serviable et courtois, et le processus de récupération et de restitution du véhicule était très efficace.</p>
                </div>
                <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <img class="img-fluid ml-n4" src="img/testimonial-4.jpg" alt="">
                        <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                    </div>
                    <h4 class="text-uppercase mb-2">Asma Masmoudi</h4>
                    <p class="m-0">J'ai loué une Audi Q3 de luxe pour un week-end en famille et je dois dire que j'ai été impressionnée par la qualité du service de LuxCar Rentals. La voiture était impeccable, le processus de réservation était simple et l'équipe sur place était très professionnelle.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- début Page Header  -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Contact</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="index.php">Acceuil</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Contact</h6>
        </div>
    </div>
    <!-- fin Page Header  -->


    <!-- début Contact  -->
    <div class="container-fluid py-5">
    <form id="form" action="avis.php" method="post" onsubmit="return validateForm()" > <!--Controle sur les champs-->
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Contactez-Nous</h1>
            <div class="row">
                <div class="col-lg-7 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px;">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control p-4" id="name" name="name" placeholder="Nom utilisateur complet" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="email" class="form-control p-4" id="email" name="email" placeholder="Email" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="message"  name="message" placeholder="Message" required="required"></textarea>
                            <!--rows: indique l'hauteur de la partie message-->
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit">Envoyer</button>
                            </div>
    </form>
                    </div>
                </div>
                <div class="col-lg-5 mb-2">
                    <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height: 435px;">
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Localisation Primaire</h5>
                                <p>123 Lac 2,Tunis, Tunisia</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Localisation Secondaire </h5>
                                <p>123 Enasser,Ariana, Tunisia</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Remboursement de retour</h5>
                                <p class="m-0">locationVoiture@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin Contact -->


<!--controle sur le formulaire-->
<script>
    function validateForm() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var message = document.getElementById('message').value;
        
         // Expression régulière pour vérifier les noms
         var namePattern = /^[a-zA-Z\s]+$/;

        if (name.trim() == '' || email.trim() == '' || message.trim() == '' ) {
            alert('Tous les champs doivent être remplis');
            return false;
        }//trim(): pour supprimer les espaces
        // Vérifier si le nom et le prénom ne contiennent que des caractères alphabétiques
        if (!namePattern.test(name)) {
            alert('Le nom doit contenir uniquement des lettres');
            return false;
        }
        // Vérifier la validité de l'adresse email
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert('Adresse email invalide');
            return false;
        }
        

        // Validation du message (non vide)
        if (message.trim() == '') {
            alert('Please enter your message.');
            return false;
        }//trim(): pour supprimer les espaces
        
        return true; // Soumission du formulaire si tous les champs sont valides
    }

    
</script>
<!--partie voiture disponible affichage d'alert disponible-->

   
    <!-- partie les logos des marques des voitures -->
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
    <!-- fin partie les logos des marques des voitures -->


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
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2"><i class="fab fa-linkedin-in"></i></a>
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
            <!--partie photo au dessous-->
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
                        <a href=""><img class="w-100" src="img/gallery-5.jpg" ></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-6.jpg" ></a>
                    </div>
                </div>
            </div>
            <!--fin partie photo-->
           
            <!--partie paragraphe-->
            
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
    <!--fin partie mail au dessous -->


    <!-- bouton qui vous prend en entete de la page -->
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