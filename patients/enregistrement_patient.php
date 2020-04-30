<?php

//connexion à la BDD
include '../connexion.php';

// récupération des valeurs du formulaire
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$birthdate = $_POST['birthdate'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];

var_dump($lastname);
var_dump($firstname);
var_dump($birthdate);
var_dump($phone);
var_dump($mail);

// requête en code SQL 'brut'
// $bdd->exec("INSERT INTO patients(lastname, firstname, birthdate, phone, mail)
//             VALUES ('".$lastname."', '".$firstname."','".$birthdate."','". $phone ."','". $mail ."') ");

//préparation d'une requête

$inserClient = $bdd->prepare("  INSERT INTO patients(lastname, firstname, birthdate, phone, mail)
                                VALUES (?,?,?,?,?) ");
                            
$inserClient->execute([
        $lastname ,
        $firstname ,
        $birthdate ,
        $phone ,
        $mail
]);

header( 'location: liste-patient.php');