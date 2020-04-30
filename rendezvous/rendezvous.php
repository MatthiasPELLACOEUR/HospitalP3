<?php
    include '../connexion.php';

    $request = $bdd->prepare("SELECT * from appointments WHERE id = ? ");
    $request->execute([$_GET['id']]);

    $rdvs = $request->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Informations du  rendez-vous</h1>
    <a href="liste-rendezvous.php"> revenir à la liste des rendez-vous</a>
    <?php foreach($rdvs as $rdv){ ?>
        <ul>
            <li>numéro du patient : <?php echo($rdv['idPatients']) ?></li>
            <li>Heure du rendez-vous : <?= $rdv['dateHour'] ?></li>
        </ul>
        <form action="modification-rendezvous.php" target="_blank" method="post">
        <input type="hidden" name="id" value="<?php echo($rdv['id']) ?>">
        <button type="submit">Modifier le rendez-vous</button>
        </form>
        
    <?php } ?>

</body>
</html>