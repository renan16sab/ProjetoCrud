<?php
require_once('conexao.php');
$userid = '10';

$pdo = $dbconn->prepare("DELETE FROM usuario WHERE userid = :userid");
$pdo->bindParam(":userid", $userid);

$pdo->execute();


?>