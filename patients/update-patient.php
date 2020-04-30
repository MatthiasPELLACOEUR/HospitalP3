<?php

//connexion à la BDD
include '../connexion.php';

// récupération des valeurs du formulaire
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$birthdate = $_POST['birthdate'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$id = $_POST['id'];


// requête en code SQL 'brut'
// $bdd->exec("INSERT INTO patients(lastname, firstname, birthdate, phone, mail)
//             VALUES ('".$lastname."', '".$firstname."','".$birthdate."','". $phone ."','". $mail ."') ");

//préparation d'une requête

$inserClient = $bdd->prepare("  UPDATE patients
                                SET lastname = ?, firstname = ?, birthdate = ?, phone = ?, mail = ?
                                WHERE id = ? ");
                                
$inserClient->execute([
        $lastname ,
        $firstname ,
        $birthdate ,
        $phone ,
        $mail,
        $id
]);

header( 'location: profil-patient.php?id='.$id.'');