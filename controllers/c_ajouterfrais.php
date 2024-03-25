<?php

if(!isset($_SESSION['matricule'])){
    header("Location: index.php?page=connexion");
}

require 'models/m_frais.php';

$msg = false;

if(isset($_POST['repasLib'])&&isset($_POST['repasMontant'])&&isset($_POST['repasQuantite'])&&isset($_POST['nuitLib'])&&isset($_POST['nuitMontant'])&&isset($_POST['kilomLib'])&&isset($_POST['kilomMontant'])&&isset($_POST['kilomQuantite'])){

    var_dump($_POST['kilomLib']);
    
    $liste = [
        1=>[$_POST['DateHF1'],$_POST['montantHF1'],$_POST['libHF1']],
        2=>[$_POST['DateHF2'],$_POST['montantHF2'],$_POST['libHF2']],
        3=>[$_POST['DateHF3'],$_POST['montantHF3'],$_POST['libHF3']],
        4=>[$_POST['DateHF4'],$_POST['montantHF4'],$_POST['libHF4']],
        5=>[$_POST['DateHF5'],$_POST['montantHF5'],$_POST['libHF5']]
    ];
    $total = $_POST['repasMontant']+$_POST['nuitMontant']+$_POST['kilomMontant'];
    var_dump(count($liste));
    // for($i=0; $i<count($liste))
    // createFrais($_POST['repasLib'],$_POST['repasMontant'],$_POST['repasQuantite'],$_POST['nuitLib'],$_POST['nuitMontant'],$_POST['kilomLib'],$_POST['kilomMontant'],$_POST['kilomQuantite'],$liste,$total);
    
    $msg = "Les frais ont bien été ajouté";
}

require 'views/v_ajouterfrais.php';
?>