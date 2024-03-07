<?php
require 'data/conn.php';

function getUserBy($username){
    $sql = 'SELECT * FROM employer WHERE username = :username ;';
    $conn = connDB();
    $req = $conn->prepare($sql);
    $req->bindParam('username', $username);
    $req->execute();
    return $req->fetch($conn::FETCH_ASSOC);
}



?>