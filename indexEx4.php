<?php
require_once './utils/db-name.php';

$sql = "SELECT * FROM `clients` JOIN cardtypes WHERE `type` = 'Fidélité';";

try {
    $stmt = $pdo->query($sql);
    $cards = $stmt->fetchAll(PDO::FETCH_ASSOC); // ou fetch si vous savez que vous n'allez avoir qu'un seul résultat

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
    <h1>Les clients possédant une carte de fidélité.</h1>
<ol>

<?php
foreach ($cards as $client) {?>
    <li><?= $client['lastName'];?></li>
    <?php
}
?>

</ol>

</body>
</html>