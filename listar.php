<?php

require_once('conexao.php');
// $userid = '8';

$pdo = $dbconn->prepare("SELECT * FROM usuario");
// $pdo->bindParam(':userid', $userid);
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
echo "<form action = 'deletar.php' method = 'POST'>";
echo "<table style = 'border: 1px solid'>";
echo "<tr>";
echo "<th> Nome </th>" .  "<th> Sobrenome </th>" .  "<th> Email </th> ";
echo "</tr>";
while ($rows = $pdo->fetch(PDO::FETCH_ASSOC)) {
    
    echo "<tr>";
    echo  "<td>{$rows['userid']}</td>" . "<td>{$rows['nome']}</td>" . " ". "<td>{$rows['sobrenome']}</td>" . " " . "<td>{$rows['email']}</td>" . "<td><input type='submit' name='userid' value='Excluir'></td>" . "<td><button><a href='atualizar.php'>Atualizar</button></a></td>" . "<br>";
    echo "<input type='hidden' name='userid' value='{$rows['userid']}'/>";
    echo "</tr>";
    echo "</table>";
    echo "</form>";
}
?>
<!-- <button> <a href="deletar.php"> Bla</a> </button> -->
<!-- <input type = 'submit' value = 'Excluir'> -->
</body>
</html>