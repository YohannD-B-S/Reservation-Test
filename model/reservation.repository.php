<?php

function persistReservation($reservation) {

	session_start();

	// je récupère une instance de la classe PDO connectée à la base de données du projet
	$pdo = connectToDB();

	// je formate les dates à insérer dans la table, pour qu'elles correspondent au format attendu par le type date de la colonne
	$startDateFormatted =  $reservation->startDate->format('d-m-y');
	$endDateFormatted =  $reservation->endDate->format('d-m-y');
	$bookedAtFormatted =  $reservation->bookedAt->format('d-m-y');

	// je créé la requête SQL permettant d'insérer dans la table reservation
	// les données de la réservation (issue de l'instance de classe Reservation)
	$query = "INSERT INTO reservation
	(first_name, name, place, start_date, end_date, clean_option,
	 night_price, total_price, booked_at, status)
	VALUES
	(
        '$reservation->firstName',  
		'$reservation->name',
		'$reservation->place',
		'$startDateFormatted',
		'$endDateFormatted',
		$reservation->cleaningOption,
		$reservation->nightPrice,
		$reservation->totalPrice,
		'$bookedAtFormatted',
		'$reservation->status'
	)";

	$pdo->query($query);

}

function findReservationForUser() {
    // Vérifie si une session est déjà active avant de l'ouvrir
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start(); // Démarrer la session si elle n'est pas active
    }

    // Vérifie si l'index 'reservation' existe dans la session pour éviter les erreurs
    if (isset($_SESSION['reservation'])) {
        return $_SESSION["reservation"]; // Retourne la réservation si elle existe
    } else {
        return null; // Retourne null si aucune réservation n'est trouvée
    }
}