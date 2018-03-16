<?php
// require('../session.php');
  session_start();
//  echo session_id();

  if(!$_SESSION) {
    header("Location: .././index.php");
    exit;
  }
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style> 
    #fontlink{
        font-family: "Times New Roman", Times, serif;
    }
    </style>
</head>
<body>
<div style="margin-bottom:30px;" class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
    <li class="nav-item">
    <a class="navbar-brand" href="index.php"> <img style="width:25px;" src=".././img/link.png"><span id = "fontlink"> LinkIzi</span> </a> 
    
      <li class="nav-item">
        <a class="nav-link" href="">Links  Salvos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="../sessiondestroy.php">Sair</a>
      </li>
      
    </ul>
  </div>
</div>  
