<?php
//The code below demonstrates a PDO connection to a database and a try catch block that will display errors about the connection if an exception is thrown. You will need to add your own database name, user and password for this PDO to work on your own project.


    $dsn = 'mysql:host=localhost;dbname=st';
    $username = 'root';
    $password = '3QZK7k_.z7GSs]B5zgxjmr~2KUU%)hz<xFt_heGhgd5w4';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
