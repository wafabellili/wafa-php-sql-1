<?php
function connect_to_db(){
    
    $database = "testdb";
    $server = "localhost";
    $username = "root";
    $password = "";
    $dns = "mysql:host=$server;dbname=$database";

    try {
        $connector = new PDO($dns,$username,$password);

        return $connector;

    } catch (PDOException $e) {
        die('Erreur : '.$e->getMessage());
    }
    
}
?>