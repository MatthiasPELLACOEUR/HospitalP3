<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajout rendezvous</title>
</head>
<body>
    
    <a href="liste-rendezvous.php"> liste des rendez-vous </a> <br>
    <a href="http://hospitalp3.test/patients/liste-patient.php"> liste des patients </a> <br>
    <a href="http://hospitalp3.test/index.php"> index </a>

    <!-- Formulaire d'ajout des rendez vous avec 2 inputs -->
    <form action="enregistrement_rendezvous.php" method="post">
        <label for="idPatients">ID du Patient :</label>
        <input type="text" name="idPatients"><br>
        <label for="dateHour">Date et heure du rendez-vous :</label>
        <input type="datetime-local" name="dateHour"><br>
        <button type="submit">Valider</button>
    </form>

</body>
</html>
