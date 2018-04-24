<?php
require_once('../conexao.php');

// echo "$username"

// Pegando os parametros
@$nome = $_POST['nome'];
@$sobrenome = $_POST['sobrenome'];
@$email = $_POST['email'];
@$senha = md5($_POST['senha']);
// $nome = "Renan";
// $sobrenome = "Araujo";
// $email = "renan-ano10@bol.com.br";
// $senha = "12346";


$pdo = $dbconn->prepare("INSERT INTO usuario (nome, sobrenome, email, senha) VALUES (:nome, :sobrenome, :email, :senha)");
$pdo->bindParam(':nome', $nome);
$pdo->bindParam(':sobrenome', $sobrenome);
$pdo->bindParam(':email', $email);
$pdo->bindParam(':senha', $senha);
$pdo->execute();




$users = $pdo->fetchAll(PDO::FETCH_ASSOC);

if (count($users) <= 0)
{
    echo "<script>alert('Usuário cadastrado');
                top.location.href='../index.php';
                </script>";
    exit;
}
 

 
// header('Location: ./_link/link.php');





?>