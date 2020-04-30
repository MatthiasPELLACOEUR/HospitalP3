<?php 
    include '../connexion.php';

    $request = $bdd->prepare("SELECT * from appointments WHERE id = ? ");
    $request->execute([$_POST['id']]);

    $rdv = $request->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Formulaire d'ajout des rendez vous avec 3 inputs -->
    <form action="update-rendezvous.php" method="post">
        <input type="hidden" name="id" value="<?=$rdv['id']?>">
        <input type="datetime-local" value="<?=$rdv['dateHour']?>" name="dateHour" >
        <input type="text" value="<?=$rdv['idPatients']?>" name="idPatients" >
        <button type="submit"> Valider </button>
    </form>


</body>
</html>