<?php
require 'models/m_frais.php';

if(!isset($_SESSION['matricule'])){
    header("Location: index.php?page=connexion");
}

$mesFrais = getFicheBy($_SESSION['matricule']);
// var_dump($mesFrais);

require 'views/v_frais.php';
?>