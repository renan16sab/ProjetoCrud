<?php

require_once('conexao.php');
$userid = '8';

$pdo = $dbconn->prepare("SELECT * FROM usuario WHERE userid = :userid");
$pdo->bindParam(':userid', $userid);
$pdo->execute();
// $rows = $pdo->fetchAll(PDO::FETCH_ASSOC);
// $total->rowCount($rows);
// print_r($total);
// while ($rows = $pdo->fetch(PDO::FETCH_ASSOC)) {
//     echo "<table>";
//     echo "<tr>";
//     echo "<th> Nome </th>" .  "<th> Sobrenome </th>" .  "<th> Email </th> ";
//     echo "</tr>";
//     echo "<tr>";
//     echo "<td>{$rows['nome']}</td>" . "<td>{$rows['sobrenome']}</td>" . "<td>{$rows['email']}</td>" ;
//     echo "</tr>";
//     echo "</table>";
// }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
<?php
while ($rows = $pdo->fetch(PDO::FETCH_ASSOC)) {
    echo "<table>";
    echo "<tr>";
    echo "<th> Nome </th>" .  "<th> Sobrenome </th>" .  "<th> Email </th> ";
    echo "</tr>";
    echo "<tr>";
    echo "<td>{$rows['nome']}</td>" . "<td>{$rows['sobrenome']}</td>" . "<td>{$rows['email']}</td>" ;
    echo "</tr>";
    echo "</table>";
}
?>

</body>
</html>