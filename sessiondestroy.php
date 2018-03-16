<?php
// require('conexao.php');
//         session_start();
//         echo session_id();
//         // $_SESSION['logged_in'] = false;
//         if(isset($_SESSION['logged_in'])){
//         session_destroy();
//         // echo session_id();
//         header("Location: index.php"); 
// } else {
//         echo"Fodeu";
// }
   session_start();
   echo session_id();
   $_SESSION = session_id();
   echo $_SESSION;
if(isset($_SESSION)){
        // echo session_id();
        session_destroy();
        header("Location: index.php");
        exit();
    }
?>