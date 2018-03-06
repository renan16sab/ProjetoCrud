<?php
$username = 'root';
$password = '';

try {
    $dbconn = new PDO('mysql:host=localhost;dbname=linkizi', $username, $password);
} catch (PDOException $e) {

    print "Error!: " . $e->getMessage() . "<br/>";

    die();

} 

?>