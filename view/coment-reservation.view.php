<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation</title>
</head>
<body>
    <main>
        <h1>Ajouter un commentaire</h1> <!-- Titre -->

        <?php require_once('../view/partiel/_resum-reservation.view.php'); ?>

        <form method="post">
            <label for="comment">Votre commentaire :</label>
            <textarea id="comment" name="comment" required></textarea>
            <button type="submit">Ajouter un commentaire</button>
        </form>
    </main>
</body>
</html>