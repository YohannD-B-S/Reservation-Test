<?php

class Reservation { // creation d'une class reservation

    public $firstName; // creation de la variable firstName dans la classe reservation

    public $name; // creation de la variable name dans la classe reservation

	public $place; // creation de la variable place dans la classe reservation


 	public $startDate; // creation de la variable date de début dans la classe reservation


	public $endDate; // creation de la variable date de fin dans la classe reservation


	public $totalPrice; // creation de la variable prix total dans la classe reservation


	public $nightPrice; // creation de la variable prix de la nuit  dans la classe reservation

    public $bookedAt; // creationd de la variable determinant la date de commande de la reservation.

	public $status; // creation de la variable status dans la classe reservation


	public $cleaningOption; // creation de la variable prix du ménage dans la classe reservation

    public function __construct() {


$this->firstName = "Emmanuel"; //ici la variable firstname deviens un prenom 
$this->name = "Macron"; // ici la variable name devient un nom de famille.
$this->place = "2017 Autoroute de la ruine"; //ici nous avons le lieu du séjour 
$this->startDate = new DateTime("25-04-15"); // ici on donne une valeur au début du sejour via startDate
$this->endDate = new DateTime("25-05-17"); // ici on y donne la fin du séjour 
$this->cleaningOption = true; //on demande de prendre en compte l'option de menage

$this->nightPrice = 1000; //on determine le prix de la nuit 

// on donne une une valeur via une variable et un calcul automtique du prix total du séjour.
$totalPrice = (($this->endDate->getTimestamp() - $this->startDate->getTimestamp()) / (3600 * 24) * $this->nightPrice) + 5000;

$this->totalPrice = $totalPrice; // ici dans la class reservation on vient chercher le total price a qui on attribut la valeur du calcul juste au dessus
$this->bookedAt = new DateTime(); // la date de reservation 
$this->status = "CART"; // status de la commande.
//$this peut etre utilisé a l'interieur d'une class. ce qui permet de ne pas appeler la class sans arret et juste mettre $this
    }

}

$reservation = new Reservation();
var_dump($reservation);
?>

