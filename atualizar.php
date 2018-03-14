<?php

require_once('conexao.php');


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form  action="alterar.php" method="post">
      <input type='text' name='userid' id="userid"/>
      <label>Nome:</label><input type="text" name="nome" id="nome" />
      <label>Sobrenome:</label><input type="text" name="sobrenome" id="sobrenome" />
      <label>Email:</label><input type="text" name="email" id="email" />
      <label>Senha:</label> <input type="text" name="senha" id="senha" />
      <br/><br/>
      <input type="submit" value="Salvar" />
</body>
</html>