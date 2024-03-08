<?php
require 'data/conn.php';

function setFrais($dateFrais,$coutFrais,$nomFrais,$idFrais){
    $sql = 'INSERT INTO lignefraishorsforfait (dateHF, montant, libelle, fichefrais_id) VALUES (:dateFrais, :coutFrais, :nomFrais, :idFrais);';
    $conn = connDB();
    $req = $conn->prepare($sql);
    $req->bindParam(':dateFrais', $dateFrais);
    $req->bindParam(':coutFrais', $coutFrais);
    $req->bindParam(':nomFrais', $nomFrais);
    $req->bindParam(':idFrais', $idFrais);
    $req->execute();
}
?>