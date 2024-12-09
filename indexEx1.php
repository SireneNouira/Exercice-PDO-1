<?php
require_once './utils/db-name.php';

$sql = "SELECT * FROM `clients`";

try {
    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC); // ou fetch si vous savez que vous n'allez avoir qu'un seul résultat

} catch (PDOException $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}


?>


<!-- EXERCICE 1 -->
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Listes de tout les clients</h1> 

   <ol>
    <?php
foreach ($users as $user) { ?>
    <li><?= $user['lastName'];?></li>
    <?php
} ?>

   </ol>
</body>
</html>