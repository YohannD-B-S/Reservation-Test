<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservation</title>
</head>

<body>
    <main>

        <h1>Paiement de votre séjour</h1> <!-- titre paiement de la reservation-->

        <?php require_once('../view/partiel/_resum-reservation.view.php')?>


        <form method="post">
            <button type="submit">Payer le sejour</button> <!--Bouton payer la reservation -->
        </form>

        <p><?php echo $payMessage?></p>


    </main>
</body>

</html>