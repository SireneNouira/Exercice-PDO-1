<?php
require_once './utils/db-name.php';

$sql = "SELECT title, performer, date, startTime FROM `shows` ORDER BY title ASC ";

try {
    $stmt = $pdo->query($sql);
    $shows = $stmt->fetchAll(PDO::FETCH_ASSOC); // ou fetch si vous savez que vous n'allez avoir qu'un seul résultat

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
    <h1>Spectables</h1>
<?php
foreach ($shows as $show) {?>
     <u>
        <li>Spactacle par artiste <?= $show['performer'];?> </li>
        <li>Date <?= $show['date'];?> </li>
        <li>Heure <?= $show['startTime'];?> </li>
        <br>
    </u>
    <?php
}
?>
  
</body>
</html>