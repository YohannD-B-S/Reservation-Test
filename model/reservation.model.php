<?php

use Dom\Comment;

class Reservation
{ // creation d'une class reservation

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

    public $canceledDate; // creation d'une variable date d'annulation de la reservation

    public $payedDate; // creation d'une variable qui indique la date de paiment

    public $comment; // creation d'une variable comment pour les commentaires 

    public $commentDate;

    public function __construct ( $firstName, $name, $place, $startDate, $endDate, $cleaningOption, $status){
        // je donne des parametres a ma fonction construct.

    if (strlen ($name)<2){ //si le nombre de caractère est inferieur a 2
        throw new Exception('Le nom doit contenir au moins 2 caractères'); //on cree une nouvelle exception avec comme message : 'le nom doit contenir au moins 2 caractere
    } 

        $this->firstName = $firstName; // j'associe chaque parametre à une partie de ma class. ici firstName est associer au parametre $firstName
        $this->name = $name; //j'associe chaque parametre à une partie de ma class. name = $name 
        $this->place = $place; //j'associe chaque parametre à une partie de ma class. place = $place 
        $this->startDate =$startDate; //j'associe chaque parametre à une partie de ma class. startDate = $startDate
        $this->endDate = $endDate; //j'associe chaque parametre à une partie de ma class. endDate = $endDate
        $this->cleaningOption = $cleaningOption;  //j'associe chaque parametre à une partie de ma class. cleanOption = $cleanOption
        $this->status = $status;

        $this->nightPrice = 1000; //on determine le prix de la nuit 

        // on donne une une valeur via une variable et un calcul automtique du prix total du séjour.
        $totalPrice = (($this->endDate->getTimestamp() - $this->startDate->getTimestamp()) / (3600 * 24) * $this->nightPrice) + 5000;

        $this->totalPrice = $totalPrice; // ici dans la class reservation on vient chercher le total price a qui on attribut la valeur du calcul juste au dessus
        $this->bookedAt = new DateTime(); // la date de reservation 
        $this->status = "CART"; // status de la commande.
        //$this peut etre utilisé a l'interieur d'une class. ce qui permet de ne pas appeler la class sans arret et juste mettre $this
    }
    public function cancel(){ //creation d'une function pour annuler une commande
        if ($this->status =="CART" and $this->status !=="PAYED"){ //si le status == cart 
            $this->status = "CANCELED"; //alors status devient canceled
            $this->canceledDate = new DateTime(); // creation de la date d'annulation
        }   
    }
    public function pay(){
        if ($this->status =="CART" and $this->status !== "CANCELED" ){ // si le status est egal a cart et n'est pas egal a canceled 
            $this->status ="PAYED"; //alors le status devient payed 
            $this->payedDate = new DateTime(); // et on ajoute une date au moment de la reservation.
        }

            
    }


    public function leaveCommand($commentText){
        if ($this->status == "PAYED") { // si le status est payed 
            $this->comment = $commentText; // Attribue le texte directement
            $this->commentDate = new DateTime(); // attribue une date au commentaire
        }
    }
}