<?php
require_once './utils/db-name.php';

$sql = "SELECT * FROM `clients` ORDER BY id  ASC LIMIT 20";

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
    <h1>20 premiers clients</h1>
    <ol>
    <?php
     
    foreach ($clients as $client) {
        ?>
            <li><?= $client['lastName'];?></li>
          <?php  
    }
    ?>
    </ol>
</body>
</html>