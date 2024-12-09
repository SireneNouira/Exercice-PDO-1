<?php
require_once './utils/db-name.php';

$sql = "SELECT lastName, firstName FROM `clients` WHERE lastName LIKE 'M%'ORDER BY lastName ASC, firstName ASC";

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
    <h1>Clients dont le nom commence par M</h1>
<?php 
foreach ($clients as $client) {?>
  <p><strong>Nom :</strong><?=$client['lastName'];?></p>
  
  <p><strong>Prénom :</strong><?=$client['firstName'];?></p>
  <br>
  <?php
}
    ?>

</body>
</html>