<?php

require_once('../config.php'); //on récupere la confi
require_once('../model/reservation.model.php'); //on récupere le model de la reservation contenant la class
require_once('../model/reservation.repository.php'); // on récupere le repository contenant la fonction findReservationForUser


$reservationForUser = findReservationForUser(); // on cree la variable afin d'afficher le récapitulatif de la commande grace a la fonction
$comentText = ""; // Initialisation par défaut

if ($_SERVER["REQUEST_METHOD"] === "POST") { // si on reçoit une info via POST
    try {
        $comentText = ($_POST['comment']); // on récupere le commentaire 

        if (!is_null($reservationForUser)) { //si $reservationForUser n'est pas null 
            $reservationForUser->leaveComment($comentText); // On appel la function leavCommand avec en parametre le commentaire
            persistReservation($reservationForUser); // on sauvegarde via la function persistReservation
            $comentMessage = "Votre commentaire a été enregistré."; // on creer une variable a laquelle on  ajoute un commentaire 
        } else {
            $comentMessage = "Erreur : la réservation n'a pas été trouvée."; //sinon  un autre message 
        }
    } catch (Exception $e) { // on attrappe l'exception $e pour y changer le message de commentaire
        $comentMessage = "Erreur inattendue : " . $e->getMessage();
    }
}

require_once ("../view/coment-reservation.view.php") ;
