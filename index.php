<?php
session_start();

require 'data/vars.php';
require 'views/v_header.php';


if(!isset($_REQUEST['page'])){
	$_REQUEST['page'] = 'connexion';
}	 
$page = $_REQUEST['page'];

switch($page){
	case 'connexion':{
		require "controllers/c_connexion.php";
		break;
	}

	case 'frais':{
		require "controllers/c_frais.php";
		break;
	}

	case 'ajouterfrais':{
		require "controllers/c_ajouterfrais.php";
		break;
	}

	case 'horsforfait':{
		require "controllers/c_consulterhosforfait.php";
		break;
	}
	
	case 'deconnecter':{
		require "controllers/c_deconnecter.php";
		break;
	}

	default :
		require "controllers/c_erreur404.php";
		break;
	
}

require "views/v_footer.php";
?>