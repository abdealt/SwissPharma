<?php require 'helpers/help.php'; ?>
<div class="container">
    <p class="mt-4">Voici, ci dessous les fiches de frais vous concernant:</p>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Etat</th>
            <th scope="col">Jour de création</th>
            <th scope="col">Nombre de justificatifs</th>
            <th scope="col">Montant valide</th>
            <th scope="col">Date de modification</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($mesFrais as $m){?>
                <tr>
                    <td><?php echo $m['libelle'] ?></td>
                    <td><?php echo $m['moisAnnee'] ?></td>
                    <td><?php echo $m['nbJustificatifs'] ?></td>
                    <td><?php echo $m['montantValide'] ?>€</td>
                    <td><?php echo convertDate($m['dateModif']) ?></td>
                    <td><a href="index.php?page=frais&id=<?php echo $m['ID'] ?>">Voir plus</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <button class="btn btn-primary mt-3"><a style="text-decoration:none; color:#fff;" href="index.php?page=ajouterfrais">Ajouter des frais</a></button>
</div>