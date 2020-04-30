<?php

//connexion à la BDD
include '../connexion.php';

// récupération des valeurs du formulaire
$idPatients = $_POST['idPatients'];
$dateHour = $_POST['dateHour'];

var_dump($idPatients);
var_dump($dateHour);

// requête en code SQL 'brut'
// $bdd->exec("INSERT INTO patients(lastname, firstname, birthdate, phone, mail)
//             VALUES ('".$lastname."', '".$firstname."','".$birthdate."','". $phone ."','". $mail ."') ");

//préparation d'une requête

$inserRdv = $bdd->prepare("  INSERT INTO appointments(idPatients, dateHour)
                                VALUES (?,?) ");
                            
$inserRdv->execute([
        $idPatients ,
        $dateHour ,
]);

header( 'location: liste-rendezvous.php');