<?php

require_once('conexao.php');

// $userid = 1;
// $nome = "Olaa";
// $sobrenome = "ola";
// $email = "eu@eu.com";
// $senha = "54545";

$pdo = $dbconn->prepare("UPDATE usuario SET nome=:nome, sobrenome=:sobrenome, email=:email, senha=:senha WHERE userid = :userid");
$pdo->bindParam(':userid', $userid);
$pdo->bindParam(':nome', $nome);
$pdo->bindParam(':sobrenome', $sobrenome);
$pdo->bindParam(':email', $email);
$pdo->bindParam(':senha', $senha);
$pdo->execute();

?>