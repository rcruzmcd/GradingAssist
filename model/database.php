<?php
$dsn = 'mysql:host=localhost;dbname=rcruz000_gradeAssist';
$username="rcruz000_admin";
$password="hBHz+I(1$JTZ";
global $db;
$db = new PDO($dsn,$username,$password);
try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo"<p>$error_message </p>";
}


?>