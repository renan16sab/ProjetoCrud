<?php 
  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro</title>
  <link rel="stylesheet" type="text/css" href="../resources/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
  // save comment to database
  $(document).on('click', '#submit_btn', function(){
    // var userid = $('#userid').val();
    var nome = $('#nome').val();
    var sobrenome = $('#sobrenome').val();
    var email = $('#email').val();
    var senha = $('#senha').val();
    $.ajax({
      url: '../cadastro.php',
      type: 'POST',
      data: {
        
        // 'userid': userid,
        'nome': nome,
        'sobrenome': sobrenome,
        'email': email,
        'senha': senha,
      },
      success: function(response){
        // $('#userid').val('userid');
        $('#nome').val('nome');
        $('#sobrenome').val('sobrenome');
        $('#email').val('email');
        $('#senha').val('senha');
        $('#display_area').append(response);
      }
    });
  });
}); -->

</script>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><img src="../resources/images/logo_preto.png" width="150px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
      </ul>
   	  <a class="btn btn-danger mr-sm-2 my-sm-0" href="../index.php" role="button">Voltar</a>
    </div>
  </nav>

  <form method="POST" action="cadastro.php">
    <label><h1>Crie uma conta</h1></label>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome">
    </div>
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
  </div>
    <br>
    <button type="submit"  class="btn btn-success">Enviar</button>
    <button type="submit" class="btn btn-danger">Limpar</button>
</form>
</body>
</html>
<?php include('../_include/footer.php');?>