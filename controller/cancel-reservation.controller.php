<?php

require_once('../config.php'); //on récupere la confi
require_once('../model/reservation.model.php'); //on récupere le model de la reservation contenant la class
require_once('../model/reservation.repository.php'); // on récupere le repository contenant la fonction findReservationForUser

$reservationForUser = findReservationForUser(); // on cree la variable afin d'afficher le récapitulatif de la commande grace a la fonction  

require_once('../view/cancel-reservation.view.php'); // on récupere la view annuler la commande contenant la page annuler la commande 
