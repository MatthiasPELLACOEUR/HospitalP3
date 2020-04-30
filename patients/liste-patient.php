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
    <title>Liste des patients</title>
</head>
<body>
    <h1>Liste des patients</h1>
    <a href="http://hospitalp3.test/index.php"> Index </a><br>
    <a href="ajout-patient.php"> Ajouter un nouveau patient</a> <br>
    <br>

    <?php 
    foreach($patients as $patient){ 
        echo '<ul>
            <li>numéro du patient : '.$patient['id'].' </li>
            <li>nom du patient : '.$patient['lastname'].' </li>
            <li>prénom du patient : '.$patient['firstname'].'</li>
            <li><a href="profil-patient.php?id= '.$patient['id'].'"> accéder au profil</a></li>
        </ul>';
    }
        
    ?>
        

    <h3>Choisissez l'ID du Patient pour voir son profil :</h3>
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