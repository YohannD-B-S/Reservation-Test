<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservation</title>
</head>

<body>
    <main>

        <h1>Annulation de votre séjour</h1> <!-- titre annulation de la reservation-->

        <?php require_once('../view/partiel/_resum-reservation.view.php')?>


        <form method="post">
            <button type="submit">Annuler la réservation</button> <!--Bouton annuler la reservation -->
        </form>

        <p><?php echo $cancelMessage?></p>


    </main>
</body>

</html>