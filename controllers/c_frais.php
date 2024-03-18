<?php
require 'models/m_frais.php';

if(!isset($_SESSION['matricule'])){
    header("Location: index.php?page=connexion");
}

if(isset($_GET['id'])){
    $fraisforfait = getAllFraisForfait($_GET['id']);

    $fraisHForfait = getAllHForfait($_GET['id']);
}

require 'views/v_frais.php';

?>