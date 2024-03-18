<?php
require 'data/conn.php';

function getUserBy($username){
    $sql = 'SELECT * FROM employer em
    INNER JOIN role r ON r.id=em.role_id
    WHERE username = :username;';
    $conn = connDB();
    $req = $conn->prepare($sql);
    $req->bindParam('username', $username);
    $req->execute();
    return $req->fetch($conn::FETCH_ASSOC);
}
?>