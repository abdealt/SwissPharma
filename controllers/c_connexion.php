<?php
require 'models/m_connexion.php';

$erreur = false;
// $user = getUserBy(1);
// var_dump($user); vraiment super util

if(isset($_POST['username'])&&isset($_POST['password'])){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $user = getUserBy($username);
    if($user){
        if (password_verify($password, $user['pass'])){ // Utilise BCRYPT
            session_start();
            $_SESSION['username'] = $user['username'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            $_SESSION['date_embauche'] = $user['date_embauche'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['matricule'] = $user['matricule'];
            header("Location: "."index.php?page=frais");
        }else{
            $erreur = true;
            $erreurMessage = 'Utilisateur ou le mot de passe est inccorect.';
        }
    }else{
        $erreur = true;
        $erreurMessage = 'Utilisateur ou le mot de passe est inccorect.';
    }
}

require 'views/v_connexion.php';
?>