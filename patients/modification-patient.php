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
    <title>Document</title>
</head>
<body>

    <!-- Formulaire d'ajout des rendez vous avec 5 inputs -->
    <form action="update-patient.php" method="post">
        <input type="hidden" name="id" value="<?=$patient['id']?>">
        <input type="text" value="<?=$patient['firstname']?>" name="firstname" >
        <input type="text" value="<?=$patient['lastname']?>" name="lastname" >
        <input type="date" value="<?=$patient['birthdate']?>" name="birthdate" >
        <input type="text" value="<?=$patient['phone']?>" name="phone" >
        <input type="text" value="<?=$patient['mail']?>" name="mail" >
        <button type="submit"> Valider </button>
    </form>


</body>
</html>