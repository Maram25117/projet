<?php

include "dbconnect.php";//contient connexion a la base de donnee
//partie réservation d'une voiture , insertion des donnees dans la base de donnee

// Vérifie si l'ID de la voiture et les dates sont définies dans la requête POST
if (isset($_POST['car_id']) && isset($_POST['datealler']) && isset($_POST['dateretour'])) {
    // Récupérer l'ID de la voiture, les dates de début et de fin de la période spécifiée
    $car_id = $_POST['car_id'];
    $start_date = $_POST['datealler'];
    $end_date = $_POST['dateretour'];
    $modele=$_POST['modele'];
    $prix=$_POST['prix'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];

    // Requête pour récupérer le nombre total de voitures pour ce modèle
    $query_total_cars = "SELECT nombre FROM voiture WHERE id = $car_id";
    $result_total_cars = mysqli_query($con, $query_total_cars);
    $row_total_cars = mysqli_fetch_assoc($result_total_cars);
    $total_cars = $row_total_cars['nombre'];

    // Requête pour compter le nombre de réservations pour ce modèle pendant la période spécifiée
    $query_total_reservations = "SELECT COUNT(*) AS total_reservations 
                                FROM reservation 
                                WHERE id_v = $car_id 
                                AND (datealler BETWEEN '$start_date' AND '$end_date' 
                                    OR dateretour BETWEEN '$start_date' AND '$end_date')";
    $result_total_reservations = mysqli_query($con, $query_total_reservations);
    $row_total_reservations = mysqli_fetch_assoc($result_total_reservations);
    $total_reservations = $row_total_reservations['total_reservations'];

    // Vérifier si des voitures sont disponibles pour ce modèle dans la période spécifiée
    if ($total_cars - $total_reservations >= 0) {
        // La voiture est disponible
        $response = true;
        header("location:dashboard.php?availability=available&nom=$nom&prenom=$prenom&datealler=$start_date&dateretour=$end_date&prix=$prix&modele=$modele");
       



        // Insérer la réservation dans la base de données
        include "cnx.php";

        // Assurez-vous que toutes les données du formulaire sont définies
        if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["tel"]) && isset($_POST["cin"]) && isset($_POST["datealler"]) && isset($_POST["tempsaller"]) && isset($_POST["dateretour"]) && isset($_POST["tempsretour"]) && isset($_POST["msg"]) && isset($_POST["payment"])  && isset($_POST["modele"]) && isset($_POST["prix"]) && isset($_POST["car_id"])) 
        {
            // Récupération des données du formulaire
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $email = $_POST["email"];
            $tel = $_POST["tel"];
            $cin = $_POST["cin"];
            $datealler = $_POST["datealler"];
            $tempsaller = $_POST["tempsaller"];
            $dateretour = $_POST["dateretour"];
            $tempsretour = $_POST["tempsretour"];
            $msg = $_POST["msg"];
            $payment = $_POST["payment"];
            $modele = $_POST["modele"];
            $prix_par_jour= $_POST["prix"];
            $id_v = $_POST["car_id"]; // Utilisation de car_id récupéré du formulaire

            // Calcul du nombre de jours loués (à adapter en fonction de votre logique de réservation)
            $date_depart = strtotime($datealler); //convertissent en secondes
            $date_retour = strtotime($dateretour);
            $nombre_jours = ($date_retour - $date_depart) / (60 * 60 * 24); //convertissent en jour

            // Calcul du prix total
            $prix= $nombre_jours * $prix_par_jour;

            // Préparation de la requête d'insertion avec la colonne prix_total
            $stmt = mysqli_prepare($con, "INSERT INTO reservation (nom, prenom, email, tel, cin, datealler, tempsaller, dateretour, tempsretour, msg, payment, modele, prix, id_v) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            // Liaison des paramètres
            mysqli_stmt_bind_param($stmt, "sssssssssssssi", $nom, $prenom, $email, $tel, $cin, $datealler, $tempsaller, $dateretour, $tempsretour, $msg, $payment, $modele, $prix, $id_v);
            /*"s" : Chaîne de caractères (string)
              "i" : Entier (integer)
              "d" : Nombre décimal (double)
              "b" : Binaire (blob) */
             //ici prix est chaine de caractere car dans le tableau voiture le prix est de type chaine de caractere 
            // Exécution de la requête
            $result = mysqli_stmt_execute($stmt);

            if($result)
            {
                exit; // Sortir après l'insertion et la redirection
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
    } else {
        // La voiture n'est pas disponible
        $response = false;
       
        header("location:dashboard.php?availability=unavailable");
    }
} else {
    
    header("Location: booking.php");
    exit;
}


?>
