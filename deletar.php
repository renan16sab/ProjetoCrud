<?php
require_once('conexao.php');

// $userid = '2';
$userid = $_POST['userid'];
// echo $userid;



$pdo = $dbconn->prepare("DELETE FROM usuario WHERE userid=:userid");
$pdo->bindParam(":userid", $userid);

$pdo->execute();

header("Location: listar.php");


?>