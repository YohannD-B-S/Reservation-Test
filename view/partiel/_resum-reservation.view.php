<?php $reservationForUser = findReservationForUser() ?>

<?php if (!is_null($reservationForUser)) { ?> <!-- si $reservation n'est pas nulle (! avant le "is") -->

<div>

    <h2>récapitulatif de la réservation :</h2> <!-- on affiche le titre pour le récap de la reservation-->
    <p>Prénom : <?php echo $reservationForUser->firstName; ?></p> <!-- on affiche le prénom contenu dans la reservation -->
    <p>Nom : <?php echo $reservationForUser->name; ?></p> <!-- on affiche le nom -->
    <p>Lieu : <?php echo $reservationForUser->place; ?></p> <!-- on afiche le lieu de reservation -->
    <p>Dates : <?php echo $reservationForUser->startDate->format('d-m-y'); ?> / <?php echo $reservationForUser->endDate->format('d-m-y'); ?> </p> <!--on affiche la daate d'arrivé et celle de départ au format jours mois année-->
    <p>Prix Total : <?php echo $reservationForUser->totalPrice; ?></p> <!-- on affiche le prix total via la fonction totalprice se trouvant dans la foncton du model-->
    <p>Option de ménage : <?php echo $reservationForUser->cleaningOption ? "oui" : "non" ?></p> <!--on affihe si oui ou non il ya les options ménages-->
    <p>status :<?php echo $reservationForUser->status;?> </p>
    
    <p><?php if (!is_null($reservationForUser->comment)){?>
        commentaire : <?php echo $reservationForUser->comment;
    }?></p>

</div>

<?php } ?>