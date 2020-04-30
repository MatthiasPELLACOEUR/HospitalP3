<?php 
    include '../connexion.php';

    $request = $bdd->prepare("SELECT * from patients WHERE id = ? ");
    $request->execute([$_POST['id']]);

    $patient = $request->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification du profil patient</title>
</head>
<body>

    <!-- Formulaire d'ajout des rendez vous avec 5 inputs -->
    <form action="update-patient.php" method="post">
        <input type="hidden" name="id" value="<?=$patient['id']?>">
        <label for="firstname">Prénom : </label>
        <input type="text" value="<?=$patient['firstname']?>" name="firstname" ><br>
        <label for="lastname">Nom : </label>
        <input type="text" value="<?=$patient['lastname']?>" name="lastname" ><br>
        <label for="birthdate">Date de naissance : </label>
        <input type="date" value="<?=$patient['birthdate']?>" name="birthdate" ><br>
        <label for="phone">Téléphone : </label>
        <input type="text" value="<?=$patient['phone']?>" name="phone" ><br>
        <label for="mail">Email : </label>
        <input type="text" value="<?=$patient['mail']?>" name="mail" ><br>
        <button type="submit"> Valider </button>
    </form>


</body>
</html>