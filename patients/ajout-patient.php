<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajout patients</title>
</head>
<body>

    <a href="liste-patient.php"> liste des patients </a> <br>
    <a href="http://hospitalp3.test/index.php"> index </a>

    
    <!-- Formulaire d'ajout des patients avec 5 inputs -->
    <form action="enregistrement_patient.php" method="post">
        <label for="firstname">Prénom</label>
        <input type="text"  name="firstname" ><br>
        <label for="lastname">Nom :</label>
        <input type="text"  name="lastname" ><br>
        <label for="birthdate">Date de naissance :</label>
        <input type="date"  name="birthdate" ><br>
        <label for="phone">Téléphone :</label>
        <input type="text"  name="phone" ><br>
        <label for="mail">Email :</label>
        <input type="text"  name="mail" ><br>
        <button type="submit"> Valider </button>
    </form>


</body>
</html>