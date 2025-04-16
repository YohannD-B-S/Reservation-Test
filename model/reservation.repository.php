<?php

function persistReservation($reservation) {
    // Vérifie si une session est déjà active avant de l'ouvrir
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start(); // Démarrer la session si elle n'est pas active
    }
    $_SESSION["reservation"] = $reservation; // Sauvegarder la réservation dans la session
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