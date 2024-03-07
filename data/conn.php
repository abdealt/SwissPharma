<?php
//Connexion à la base de donné
function connDB(){
    $username = DB_USER;
    $password = DB_PASSWORD;
    $host = DB_HOST;
    $dbname = DB_NAME;

    try {
        return new PDO("mysql:host=".$host.";dbname=".$dbname.";charset=utf8",$username,$password);
    } catch (PDOException $e) {
        die('Erreur de connexion à la base de données : ' . $e->getMessage());
    }    
}
?>