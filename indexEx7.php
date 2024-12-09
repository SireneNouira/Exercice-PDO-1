<?php
require_once './utils/db-name.php';

$sql = "SELECT * FROM `clients` ";

try {
    $stmt = $pdo->query($sql);
    $clients = $stmt->fetchAll(PDO::FETCH_ASSOC); // ou fetch si vous savez que vous n'allez avoir qu'un seul résultat

} catch (PDOException $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Infos clients</h1>
    <?php
    foreach ($clients as $client) {
        if ($client['card'] === 1) {
            $client['card'] = 'Oui';
        } else {
            $client['card'] = 'Non';
            $client['cardNumber'] = 'Pas de carte';
        } ?>
        <p><strong>Nom : </strong> <?= $client['lastName']; ?></p>
        <p><strong>Prénom : </strong> <?= $client['firstName']; ?></p>
        <p><strong>Date de naisssance : </strong> <?= $client['birthDate']; ?></p>
        <p><strong>Carte de fidélité : </strong> <?= $client['card']; ?></p>
        <p><strong>Numéro de carte : </strong> <?= $client['cardNumber']; ?></p>
        <br>
    <?php
    }
    ?>
</body>

</html>