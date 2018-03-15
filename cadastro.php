<?php
require_once('conexao.php');

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

$pdo = $dbconn->prepare("SELECT userid FROM usuario WHERE email=:email and senha=:senha");
$pdo->bindParam(":email", $email);
$pdo->bindParam(":senha", $senha);
$pdo->execute();
// print_r ($pdo);

if($pdo->rowCount() == 1)
    {
       
        
            @$_SESSION['userid'] = $userid;
            @$_SESSION['email'] = $email;
            @$_SESSION['senha'] = $senha;
            @$_SESSION['nome'] = $nome;
            @$_SESSION['sobrenome'] = $sobrenome;

                       

            echo "<script>alert('Logado Com Sucesso!');
                top.location.href='./_link/link.php';
                </script>";
       
      }
    else
    {
        echo "<script>alert('Usuarios Ou Senha Incorretos!');
            top.location.href='index.php';
            </script>";
    }






?>