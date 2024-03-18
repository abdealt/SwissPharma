<?php
require 'models/m_frais.php';

if(!isset($_SESSION['matricule'])){
    header("Location: index.php?page=connexion");
}

if($_SESSION['role'] == "Comptable"){
    $mesFrais = getAllFiche();
}else{
    $mesFrais = getFicheBy($_SESSION['matricule']);
}


require 'views/v_fichefrais.php';

?>