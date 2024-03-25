<div class="container">
    <form action="index.php?page=ajouterfrais" method="POST">

        <h2>Frais forfait</h2>
        <!-- Frais forfait -->
        <!-- Repas -->
        <label for="repasLib" class="form-label">Libelle :</label>
        <input type="text" class="form-control" id="repasLib" name="repasLib" value="Repas" disabled readonly>

        <label for="repasMontant" class="form-label">Coût du frais :</label>
        <input type="number" class="form-control" id="repasMontant" name="repasMontant" value="10" disabled readonly>

        <!-- Quantite (LigneFraisForfait) -->
        <label for="repasQuantite" class="form-label">Quantité :</label>
        <input type="number" class="form-control" id="repasQuantite" name="repasQuantite" required>

        <!-- Nuité -->
        <label for="nuitLib" class="form-label">Libelle :</label>
        <input type="text" class="form-control" id="nuitLib" name="nuitLib" value="Nuité" disabled readonly>

        <label for="nuitMontant" class="form-label">Coût du frais :</label>
        <input type="number" class="form-control" id="nuitMontant" name="nuitMontant" value="40" disabled readonly>

        <!-- Quantite (LigneFraisForfait) -->
        <label for="nuitQuantite" class="form-label">Quantité :</label>
        <input type="number" class="form-control" id="nuitQuantite" name="nuitQuantite" required>


        <!-- Kilomètre -->
        <label for="kilomLib" class="form-label">Libelle :</label>
        <input type="text" class="form-control" id="kilomLib" name="kilomLib" value="Kilomètre" disabled readonly>

        <label for="kilomMontant" class="form-label">Coût du frais :</label>
        <input type="number" class="form-control" id="kilomMontant" name="kilomMontant" value="10" disabled readonly>

        <!-- Quantite (LigneFraisForfait) -->
        <label for="kilomQuantite" class="form-label">Quantité :</label>
        <input type="number" class="form-control" id="kilomQuantite" name="kilomQuantite" required>
  

        <h2>Frais hors forfait</h2>
        <!-- Frais Hors Forfait -->
        <!-- 1 -->
        <label for="DateHF1" class="form-label">Date :</label>
        <input type="date" class="form-control" id="kilomLib" name="DateHF1">
        
        <label for="montantHF1" class="form-label">Montant :</label>
        <input type="number" class="form-control" id="kilomLib" name="montantHF1">

        <label for="libHF1" class="form-label">Libelle :</label>
        <input type="text" class="form-control" id="libHF1" name="libHF1">

        <!-- 2 -->
        <label for="DateHF2" class="form-label">Date :</label>
        <input type="date" class="form-control" id="DateHF2" name="DateHF2">
        
        <label for="montantHF2" class="form-label">Montant :</label>
        <input type="number" class="form-control" id="montantHF2" name="montantHF2">

        <label for="libHF2" class="form-label">Libelle :</label>
        <input type="text" class="form-control" id="libHF2" name="libHF2">

        <!-- 3 -->
        <label for="DateHF3" class="form-label">Date :</label>
        <input type="date" class="form-control" id="DateHF3" name="DateHF3">
        
        <label for="montantHF3" class="form-label">Montant :</label>
        <input type="number" class="form-control" id="montantHF3" name="montantHF3">

        <label for="libHF3" class="form-label">Libelle :</label>
        <input type="text" class="form-control" id="libHF3" name="libHF3">

        <!-- 4 -->
        <label for="DateHF4" class="form-label">Date :</label>
        <input type="date" class="form-control" id="DateHF4" name="DateHF4">
        
        <label for="montantHF4" class="form-label">Montant :</label>
        <input type="number" class="form-control" id="kilomLib" name="montantHF4">

        <label for="libHF4" class="form-label">Libelle :</label>
        <input type="text" class="form-control" id="libHF4" name="libHF4">

        <!-- 5 -->
        <label for="DateHF5" class="form-label">Date :</label>
        <input type="date" class="form-control" id="DateHF5" name="DateHF5">
        
        <label for="montantHF5" class="form-label">Montant :</label>
        <input type="number" class="form-control" id="montantHF5" name="montantHF5">

        <label for="libHF5" class="form-label">Libelle :</label>
        <input type="text" class="form-control" id="libHF5" name="libHF5">


        <input type="submit" class="btn btn-primary mt-3" value="Ajouter les frais">

        <?php if($msg){?><p><?php echo $msg ?></p><?php } ?>

    </form>
</div>
