<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Formulaire d'ajout des rendez vous avec 5 inputs -->
    <form action="enregistrement_patient.php" method="post">
        <input type="text" placeholder="prénom" name="firstname" >
        <input type="text" placeholder="nom" name="lastname" >
        <input type="date" placeholder="date de naissance" name="birthdate" >
        <input type="text" placeholder="téléphone" name="phone" >
        <input type="text" placeholder="email" name="mail" >
        <button type="submit"> Valider </button>
    </form>


</body>
</html>