<?php

require_once('conexao.php');
// $userid = '17';

$pdo = $dbconn->prepare("SELECT * FROM usuario WHERE userid = :userid");
$pdo->bindParam(':userid', $userid);
$pdo->execute();
$rows = $pdo->fetchAll(PDO::FETCH_ASSOC);
print_r($rows);

?>