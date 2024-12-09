<?php
require_once './utils/db-name.php';

$sql = "SELECT * FROM `showtypes`";

try {
    $stmt = $pdo->query($sql);
    $showTypes = $stmt->fetchAll(PDO::FETCH_ASSOC); // ou fetch si vous savez que vous n'allez avoir qu'un seul résultat

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
    <h1>Tous les types de spectacles possibles.</h1>
    <ol>
        <?php
        foreach ($showTypes as $type) {?>
           <li>
<?= $type['type'];?>
        </li>
        <?php
        }
        ?>
    </ol>
</body>
</html>