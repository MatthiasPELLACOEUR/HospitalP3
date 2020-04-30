<?php
    include '../connexion.php';

    $request = $bdd->query("SELECT * from appointments");
    $rdvs = $request->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste rendez-vous</title>
</head>
<body>
    <h1>liste des rendez-vous</h1>
    <a href="ajout-rendezvous.php"> Ajouter un rendez-vous</a> <br>
    <a href="http://hospitalp3.test/index.php"> index </a>
    <br>

    <?php 
    foreach($rdvs as $rdv){ 
        echo '<ul>
            <li>Numéro du patient : '.$rdv['idPatients'].' </li>
            <li>Heure du rendez-vous : '.$rdv['dateHour'].' </li>
            <li>Numéro du rendez-vous  : '.$rdv['id'].' </li>
            
            </ul>';
    }
        
    ?>
        

    <h3>Selectionnez l'id du rendez-vous</h3>
    <form action="rendezvous.php" method="GET">
        <select name="id">
           <?php 
            //boucle qui affiche une liste d'option pour chaque id patients
            foreach($rdvs as $rdv){
                echo "<option>". $rdv['id'] ."</option>";
            }
           ?>
        </select>
        <button type="submit">Ok</button>
    </form>
</body>
</html>