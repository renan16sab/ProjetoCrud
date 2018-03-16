<?php
require_once('conexao.php');
@$email = $_POST['email'];
@$senha = md5($_POST['senha']);
// $email = "renan-ano10@bol.com.br";
// $senha = "12346";

$pdo = $dbconn->prepare("SELECT userid, nome FROM usuario WHERE email=:email and senha=:senha");
$pdo->bindParam(":email", $email);
$pdo->bindParam(":senha", $senha);
$pdo->execute();
// print_r ($pdo);

$users = $pdo->fetchAll(PDO::FETCH_ASSOC);
 
if (count($users) <= 0)
{
    echo "<script>alert('Email ou senha errados');
                top.location.href='./index.php';
                </script>";
    exit;
}
 
// pega o primeiro usuário
$user = $users[0];
 
session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['userid'];
$_SESSION['user_name'] = $user['nome'];
// print_r ($user);
echo session_id();
 
header('Location: ./_link/link.php');
// $query = $pdo->fetchAll(PDO::FETCH_ASSOC);
// print_r ($query);
// if($pdo->rowCount() == 1) {
//     $_SESSION['login'] = ['email'];

?>