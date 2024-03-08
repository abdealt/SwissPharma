<?php


require 'models/m_ajouterfrais.php';

if(!isset($_SESSION['matricule'])){
    header("Location: index.php?page=connexion");
}


require 'views/v_ajouterfrais.php';

$ajoutFrais = setFrais($_POST['dateFrais'],$_POST['coutFrais'],$_POST['nomFrais'],$_POST['idFrais']);
// echo $ajoutFrais;



?>