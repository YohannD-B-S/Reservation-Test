<?php

function persistReservation($reservation){ //creation d'une fonction afin d'ouvrir une session et de donner la valeur $reservation à la partie "reservation" de la session
    session_start();
    $_SESSION ["reservation"] = $reservation;
}

function findReservationForUser(){ // creation d'une fonction afin de retourner la valeur reservation de la session 
    session_start();

    if (array_key_exists('reservation', $_SESSION) ){
    return $_SESSION["reservation"];
}else{
    return null;
}
}//complementaire la premiere function