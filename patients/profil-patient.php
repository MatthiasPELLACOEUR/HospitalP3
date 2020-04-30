<?php
    include '../connexion.php';

    $request = $bdd->prepare("SELECT * from patients WHERE id = ? ");
    $request->execute([$_GET['id']]);

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
    <a href="liste-patient.php"> revenir à la liste des patients</a>
    <?php foreach($patients as $patient){ ?>
        <ul>
            <li>numéro du patient : <?php echo($patient['id']) ?></li>
            <li>nom du patient : <?=$patient['lastname']?></li>
            <li>prénom du patient : <?=$patient['firstname']?></li>
            <li>date de naissance : <?=$patient['birthdate']?></li>
            <li>téléphone : <?=$patient['phone']?></li>
            <li>email : <?=$patient['mail']?></li>
        </ul>
        <form action="modification-patient.php" method="post">
        <input type="hidden" name="id" value="<?php echo($patient['id']) ?>">
        <button type="submit">Modifier le patient</button>
        </form>
        
    <?php } ?>

</body>
</html>