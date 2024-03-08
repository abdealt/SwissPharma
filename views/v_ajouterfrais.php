<div class="container">
    <form action="index.php?page=ajouterfrais" method="POST">
        <label for="">Date du frais</label>
        <input type="date" name="dateFrais">
        
        <label for="">Coût du frais</label>
        <input type="number" name="coutFrais">
        
        <label for="">Nom du frais</label>
        <input type="text" name="nomFrais">
        
        <label for="">ID fiche frais</label>
        <input type="number" name="idFrais">

        <button type="submit">Ajouter</button>
    </form>
</div>
<?php
?>