<?php

require_once('conexao.php');

// $userid = 1;
// $nome = "Olaa";
// $sobrenome = "ola";
// $email = "eu@eu.com";
// $senha = "54545";
@$userid = $_POST['userid'];
@$nome = $_POST['nome'];
@$sobrenome = $_POST['sobrenome'];
@$email = $_POST['email'];
@$senha = $_POST['senha'];

$pdo = $dbconn->prepare("UPDATE usuario SET userid=:userid, nome=:nome, sobrenome=:sobrenome, email=:email, senha=:senha WHERE userid = :userid");
$pdo->bindParam(':userid', $userid);
$pdo->bindParam(':nome', $nome);
$pdo->bindParam(':sobrenome', $sobrenome);
$pdo->bindParam(':email', $email);
$pdo->bindParam(':senha', $senha);
$pdo->execute();

header("Location: listar.php");


?>

