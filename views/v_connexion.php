<?php

?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>SwissPharma</title>
  </head>
  <body>
<div class="login-container">
  <div class="login-image">
    <img src=".\assets\img\LogoSwissPharma.png" alt="Image">
  </div>
  
  <div class="login-form">
    <h2>Connexion</h2>
    <form action="index.php?page=connexion" method="POST">
      <div class="form-group">
        <label for="username">Identifiant :</label>
        <input type="text" id="username" name="username">
      </div>
      <div class="form-group">
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password">
      </div>
      <div class="form-group">
        <a href="#" class="forgot-password">Mot de passe oublié?</a>
      </div>
      <input type="submit" value="Connexion">
      <?php if($erreur){ ?>
        <p class="company-info"><?php echo $erreurMessage ?></p>
      <?php } ?>
    </form>
  </div>
</div>
