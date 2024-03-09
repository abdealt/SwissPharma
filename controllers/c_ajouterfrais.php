<?php

if(!isset($_SESSION['matricule'])){
    header("Location: index.php?page=connexion");
}

require 'models/m_ajouterfrais.php';




require 'views/v_ajouterfrais.php';

if(isset($_POST['dateFrais'])&&isset($_POST['coutFrais'])&&isset($_POST['nomFrais'])&&isset($_POST['idFrais'])){
    $ajoutFrais = setFrais($_POST['dateFrais'],$_POST['coutFrais'],$_POST['nomFrais'],$_POST['idFrais']);
    echo '<p style="text-align:center;">Les frais ont bien été ajouté</p>';
}




?>