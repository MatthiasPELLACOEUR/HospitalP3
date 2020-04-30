<?php
    include '../connexion.php';

    $request = $bdd->query("SELECT * from patients");
    $patients = $request->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>liste des patients</h1>
    <a href="ajout-patient.php"> Ajouter un nouveau patient</a>
    <?php foreach($patients as $patient){ ?>
        <ul>
            <li>numéro du patient : <?php echo($patient['id']) ?></li>
            <li>nom du patient : <?=$patient['lastname']?></li>
            <li>prénom du patient : <?=$patient['firstname']?></li>
            <li><a href="profil-patient.php?id=<?=$patient['id']?>"> acceder au profil</a></li>
        </ul>
        
    <?php } ?>
        

    <h3>Selection du Patient pour plus d'informations</h3>
    <form action="profil-patient.php" method="GET">
        <select name="id">
           <?php 
            //boucle qui affiche une liste d'option pour chaque id patients
            foreach($patients as $patient){
                echo "<option>". $patient['id'] ."</option>";
            }
           ?>
        </select>
        <button type="submit">Ok</button>
    </form>
</body>
</html>