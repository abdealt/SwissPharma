<?php require 'helpers/help.php'; ?>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Date</th>
            <th scope="col">Montant</th>
            <th scope="col">Libelle</th>
            <th scope="col">Numero de fiche frais</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($mesFrais as $m){ ?>
                <tr>
                    <th scope="row"><?php echo convertDate($m['dateHF']) ?></th>
                    <td><?php echo $m['montant'] ?>€</td>
                    <td><?php echo $m['libelle'] ?></td>
                    <td><?php echo $m['fichefrais_id'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <button type="button" class="btn btn-primary"><a class="link" href="index.php?page=ajouterfrais">Ajouter un frais</a></button>
</div>