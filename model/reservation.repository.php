<?php

function persistReservation($reservation) {

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
//on cree une fonction afin de trouver la derniere reservation d'une personne precise dans la BDD
function findReservationForUser() {

    $pdo=connectToDB(); //on donne le resultat de la fonction connectToDB comme valeur a la variable $pdo

    /* SQL la variable $query est égal à */
   $query = "SELECT * FROM `reservation`  /* on selectionne tout depuis la colonne reservation*/
                        WHERE reservation.name = 'Dubuis'/*la ou le nom dans la reservation est Dubuis*/
                        ORDER BY id DESC /*on le mets dans l'ordre descendant (plus grand au plus prtit) */
                        LIMIT 1"; /*et on selectionne le plus grand qui est aussi le plus recent*/


// Exécute une requête SQL en utilisant l'objet PDO (ici, $pdo) 
// La méthode query() envoie la requête contenue dans $query à la base de données
// PDO::FETCH_ASSOC signifie que les résultats seront retournés sous forme de tableau associatif 
$result = $pdo->query($query, PDO::FETCH_ASSOC); 

// Récupère une seule ligne du résultat de la requête
// La méthode fetch() permet d'extraire la première ligne du tableau résultant
$reservation = $result->fetch(); 

// Retourne la ligne récupérée pour être utilisée dans le reste du programme
return $reservation; 
}

