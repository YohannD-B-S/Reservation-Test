<?php

require_once('../config.php');

// récupère l'url actuelle:
$requestUri = $_SERVER['REQUEST_URI'];


// je découpe l'url actuelle pour en récurperer que la fin.
// si l'url demandée est "http://localhost/tp-Reservation/controller/"
//$enUri contient
$uri = parse_url($requestUri, PHP_URL_PATH);
$endUri = str_replace('tp-Reservation/public/', '', $uri);
$endUri = trim($endUri, '/');


//en fonction de la valeur $uri on charge le bon controlleur 
if ($endUri === "nouvelle-reservation") { // si on demznde une fin d'url "nouvelle-reservation" 
    require_once('../controller/create-reservation.controller.php');//on se dirigera vers cette page 
} else if ($endUri === "commenter-la-reservation") {
    require_once('../controller/coment-reservation.controller.php');
} else if ($endUri === "payer-la-reservation") {
    require_once('../controller/pay-reservation.controller.php');
} else if ($endUri === "annuler-la-reservation") {
    require_once('../controller/cancel-reservation.controller.php');
} else {
    require_once('../controller/404-error.controller.php');
}
