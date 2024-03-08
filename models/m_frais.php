<?php
require 'data/conn.php';

function getFicheBy($idUser){
    $sql = 'SELECT f.ID, et.libelle, f.moisAnnee, f.nbJustificatifs, f.montantValide, f.dateModif
            FROM fichefrais AS f
            LEFT JOIN etat AS et ON f.etat_id = et.id
            LEFT JOIN employer AS em ON f.employer_id = em.matricule
            WHERE f.employer_id = :matricule';
    
    $conn = connDB();
    $req = $conn->prepare($sql);
    $req->bindParam('matricule', $idUser);
    $req->execute();
    return $req->fetchAll($conn::FETCH_ASSOC);
}
?>