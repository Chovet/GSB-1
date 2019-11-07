<?php
//Menu déroulant pour choisir le mois pour voir l'état Frais
    $mouths = array(
        '01' => 'janvier',
        '02' => 'fevrier',
        '03' => 'mars',
        '04' => 'avril',
        '05' => 'mai',
        '06' => 'juin',
        '07' => 'juillet',
        '08' => 'aout',
        '09' => 'septembre',
        '10' => 'octobre',
        '11' => 'novembre',
        '12' => 'decembre',
    );
?>
<br>
<h3>
    Fiche de frais du mois de
    <?php
    //Affiche les frais du mois grace au menu déroulant.
        foreach ($lesMois as $unMois) {
            $mois = $unMois['mois'];
        }
        echo $mouths[$mois].' '.$numAnnee;
    ?>
</h3>
<p>

    <!--Affiche l'état, la date de modification -->
    Etat : <?php echo $libEtat?> depuis le <?php echo $dateModif?>
</p>


<!--Affiche tous les elements forfaitisés-->
<table class="table">
    <thead class="thead-dark">
    <h4>Eléments forfaitisés</h4>
        <tr>
            <?php
            //Recupere le libelle inscrite dans la saisie des frais
            foreach ( $lesFraisForfait as $unFraisForfait )
            {
            $libelle = $unFraisForfait['libelle'];
            ?>
            <th> <?php echo $libelle?></th>
            <?php
            }
            ?>
        </tr>
        <tr>
            <?php
            //recupere la quantité inscrite dans la saisie des frais
            foreach (  $lesFraisForfait as $unFraisForfait  )
            {
            $quantite = $unFraisForfait['quantite'];
            ?>
            <td class="qteForfait"><?php echo $quantite?> </td>
            <?php
            }
            ?>
        </tr>
    </thead>
</table>

<!--Affiche les éléments hors forfaits-->
<table class="table">
    <thead class="thead-dark">
    <h4>Descriptif des éléments hors forfait</h4>
    <p><?php echo $nbJustificatifs ?> justificatifs reçus du mois de <?php echo $mouths[$numMois]?></p>
        <tr>
            <th class="date">Date</th>
            <th class="libelle">Libellé</th>
            <th class='montant'>Montant</th>
            <th class='paiement'>Paiement</th>
        </tr>
        <?php
        //Recupere la date, le libelle, le montant ainsi que le paiement
        foreach ( $lesFraisHorsForfait as $unFraisHorsForfait ) {
            $date = $unFraisHorsForfait['date'];
            $libelle = $unFraisHorsForfait['libelle'];
            $montant = $unFraisHorsForfait['montant'];
            //idPaiement = 1,2 ou 3
            $idpaiement = $unFraisHorsForfait['idpaiement'];
            ?>
            <tr>
              <!--Affiche le frais avec la date, le libelle et le montant-->
                <td><?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
                <td>
                    <?php
                    //Verifie la valeur de idPaiement et affiche le mode de paiement
                    if ($idpaiement == 3){
                        echo "Carte Bancaire";
                    } elseif ($idpaiement == 2){
                        echo "Espèces";
                    } else {
                        echo "Chèque";
                    }
                    ?>
                </td>
            </tr>
            <?php
        }
        ?>
    </thead>
</table>
