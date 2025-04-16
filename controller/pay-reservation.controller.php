<?php
require_once("../config.php");

require_once("../model/reservation.model.php");

require_once("../model/reservation.repository.php");

require_once('../view/partiel/_header.view.php');




$reservationForUser = findReservationForUser(); // on cree la variable afin d'afficher le récapitulatif de la commande grace a la fonction

$payMessage = "";


if ($_SERVER["REQUEST_METHOD"] === "POST") { 
    // Vérification de la méthode POST
    
    // d'appeler la méthode 'pay correctement
    if (!is_null ($reservationForUser)) {
        $reservationForUser->pay(); // Ajout des parenthèses pour appeler la méthode
        $payMessage = "Votre séjour est bien réglé"; // Correction des espaces et amélioration de la lisibilité
        persistReservation($reservationForUser);
        
    } else {
        echo "Erreur : la réservation n'a pas été trouvée."; // Message d'erreur en cas de problème
    }
}


require_once('../view/pay-reservation.view.php');
