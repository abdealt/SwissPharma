<?php require 'helpers/help.php'; ?>
<div class="container">
    <p>Voici, ci dessous les frais vous concernant:</p>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Libelle</th>
            <th scope="col">Montant</th>
            <th scope="col">Quantite</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($fraisforfait as $m){ ?>
                <tr>
                    <td><?php echo $m['libelle'] ?></td>
                    <td><?php echo $m['montant'] ?>€</td>
                    <td><?php echo $m['quantite'] ?></td>
                    
                </tr>
            <?php } ?>
        </tbody>
    </table>
       

    <p>Voici, ci dessous les frais hors-forfait vous concernant:</p>
    
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Date</th>
            <th scope="col">Montant</th>
            <th scope="col">Libelle</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($fraisHForfait as $m){ ?>
                <tr>
                    <th scope="row"><?php echo convertDate($m['dateHF']) ?></th>
                    <td><?php echo $m['montant'] ?>€</td>
                    <td><?php echo $m['libelle'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


