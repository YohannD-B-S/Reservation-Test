<?php

function persistReservation($reservation){ //creation d'une fonction afin d'ouvrir une session et de donner la valeur $reservation à la partie "reservation" de la session
    session_start();
    $_SESSION ["reservation"] = $reservation;
}

function findReservationForUser(){ // creation d'une fonction afin de retourner la valeur reservation de la session 
    session_start();
    return $_SESSION["reservation"];
}
//complementaire la premiere function