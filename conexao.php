<?php
$username = 'root';
$password = '';

try {
    $dbconn = new PDO('mysql:host=localhost;dbname=linkizi', $username, $password);
} catch (PDOException $e) {

    print "Error!: " . $e->getMessage() . "<br/>";

    die();

} 



    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        return false;
    }
 
    return true;


?>