<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservation</title>
</head>

<body>

    <h1>Reservation de votre séjour</h1>

    <form method="post">

        <!-- je creer un formyulaire dans la view -->
        <label>Prenom
            <input type="text" placeholder="firstName" name="firstName">
        </label>

        <Label>Nom
            <input type="text" placeholder="Name"  name="name">
        </Label>

        <label>Lieu
            <select name="place" id="" name="place">
                <option value="Chateau de versailles">Chateau de versailles</option>
                <option value="Tour Eifel">Tour Eifel</option>
                <option value="Arc de triomphe">Arc de triomphe</option>
                <option value="Invalide">Invalide</option>
                <option value="Quai de seines">Quai de seines</option>
                <option value="Balard">Balard</option>
                <option value="Issy les Moulineaux">Issy les Moulineaux</option>
            </select>
        </label>

        <label > Date d'arrivée
            <input type="date" name="start-date">
        </label>


        <label > Date de départ
            <input type="date" name="end-date">
        </label>

        <label>Option de ménage ?
            <input type="checkbox" name="cleaning-option">
        </label>

        <button type="submit">Créer la réservation</button>





    </form>





</body>

</html>