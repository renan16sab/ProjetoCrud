<?php
require_once('../conexao.php');



// Pegando os parametros
@$userid = $_POST['userid'];
@$nome = $_POST['nome'];
@$link = $_POST['link'];
// @$userid = 12;
// @$nome = "Renan";
// @$link = "www.google.com";



$pdo = $dbconn->prepare("INSERT INTO link (userid, nome, link) VALUES (:userid, :nome, :link)");
$pdo->bindParam(':nome', $nome);
$pdo->bindParam(':link', $link);
$pdo->bindParam(':userid', $userid);
$pdo->execute();
// http://codewithawa.com/posts/ajax-crud-%5Bcreate-update-delete%5D-with-php-and-mysql-database
?>