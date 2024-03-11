<?php
require 'data/conn.php';

function getFicheBy($idUser){
    $sql = '
    SELECT dateHF,montant,libelle,fichefrais_id
    FROM lignefraishorsforfait
    AS lhf LEFT JOIN fichefrais AS f ON lhf.fichefrais_id = f.ID
    LEFT JOIN employer AS em ON f.employer_id = em.matricule
    WHERE f.employer_id = :matricule';
    
    $conn = connDB();
    $req = $conn->prepare($sql);
    $req->bindParam('matricule', $idUser);
    $req->execute();
    return $req->fetchAll($conn::FETCH_ASSOC);
}
?>