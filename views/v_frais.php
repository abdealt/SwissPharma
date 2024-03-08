<?php require 'helpers/help.php'; ?>
<div class="container">
    <h1>Bienvenue <?php echo $_SESSION['nom']." " .$_SESSION['prenom']?></h1>
    <p>Voici, ci dessous les frais vous concernant:</p>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Etat</th>
            <th scope="col">Jour de création</th>
            <th scope="col">Nombre de justificatifs</th>
            <th scope="col">Montant valide</th>
            <th scope="col">Date de modification</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($mesFrais as $m){ ?>
                <tr>
                    <th scope="row"><?php echo $m['lib'] ?></th>
                    <td><?php echo convertDate($m['moisAnnee']) ?></td>
                    <td><?php echo $m['nbJustificatifs'] ?></td>
                    <td><?php echo $m['montantValide'] ?>€</td>
                    <td><?php echo convertDate($m['dateModif']) ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <button type="button" class="btn btn-primary" href="index.php?page=ajouterfrais">Ajouter un frais</button>
</div>