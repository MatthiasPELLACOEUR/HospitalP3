<?php

//connexion à la BDD
include '../connexion.php';

// récupération des valeurs du formulaire
$id = $_POST['id'];
$dateHour = $_POST['dateHour'];
$idPatients = $_POST['idPatients'];


// requête en code SQL 'brut'
// $bdd->exec("INSERT INTO patients(lastname, firstname, birthdate, phone, mail)
//             VALUES ('".$lastname."', '".$firstname."','".$birthdate."','". $phone ."','". $mail ."') ");

//préparation d'une requête

$inserRdv = $bdd->prepare("  UPDATE appointments
                                SET dateHour = ?, idPatients = ?
                                WHERE id = ? ");
                                
$inserRdv->execute([
        $dateHour,
        $idPatients,
        $id
]);

header( 'location: rendezvous.php?id='.$id.'');