<div class="container">
    <form action="index.php?page=ajouterfrais" method="POST">
        <label for="dateFrais" class="form-label">Date du frais :</label>
        <input type="date" class="form-control" id="dateFrais" name="dateFrais">

        <label for="coutFrais" class="form-label">Coût du frais :</label>
        <input type="number" class="form-control" id="coutFrais" name="coutFrais">

        
        <label for="nomFrais" class="form-label">Nom du frais :</label>
        <input type="text" class="form-control" id="nomFrais" name="nomFrais">

        <label for="idFrais" class="form-label">ID fiche frais :</label>
        <input type="number" class="form-control" id="idFrais" name="idFrais">

        <input type="submit" class="btn btn-primary mt-3" value="Ajouter">
    </form>
</div>
<?php
?>