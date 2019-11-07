<!--Affiche les hors forfaits-->
<h4>Descriptif des éléments hors forfait</h4>
<table class="table">
    <thead class="thead-dark">
        <tr>
          <!--Tableau sur l'affichage-->
            <th scope="col">Date</th>
            <th scope="col">Libellé</th>
            <th scope="col">Montant</th>
            <th scope="col">Mode de paiement</th>
            <th scope="col">&nbsp</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach( $lesFraisHorsForfait as $unFraisHorsForfait)
        {
            $libelle = $unFraisHorsForfait['libelle'];
            $date = $unFraisHorsForfait['date'];
            $montant = $unFraisHorsForfait['montant'];
            $idpaiement = $unFraisHorsForfait['idpaiement'];
            $id = $unFraisHorsForfait['id'];
            ?>
            <tr>
              <!--Affiche les valeurs sous le tableau créé plus haut -->
                <td> <?php echo $date; ?></td>
                <td><?php echo $libelle; ?></td>
                <td><?php echo $montant; ?> €</td>
                <td>
                    <?php
                        if ($idpaiement == 3){
                            echo "Carte Bancaire";
                        } elseif ($idpaiement == 2){
                            echo "Espèces";
                        } else {
                            echo "Chèque";
                        }
                        ?>
                </td>
                <td style="float:right;"><a href="index.php?uc=gererFrais&action=supprimerFrais&idFrais=<?php echo $id ?>"
                       onclick="return confirm('Voulez-vous vraiment supprimer ce frais?');">Supprimer ce frais</a></td>
            </tr>
        <?php

        }
        ?>
    </tbody>
</table>
<!--Formulaire sur la création d'un hors forfait -->
<form action="index.php?uc=gererFrais&action=validerCreationFrais" method="post">
    <div class="corpsForm">
        <h4>Nouvel élément hors forfait</h4>
        <div class="form-group">
            <label for="txtDateHF">Date (jj/mm/aaaa): </label>
            <input class="form-control" type="text" id="txtDateHF" name="dateFrais" size="10" maxlength="10" value=""  />
        </div>
        <div class="form-group">
            <label for="txtLibelleHF">Libellé :</label>
            <input class="form-control" type="text" id="txtLibelleHF" name="libelle" size="70" maxlength="256" value="" />
        </div>
        <div class="form-group">
            <label for="txtMontantHF">Montant : </label>
            <input class="form-control" type="text" id="txtMontantHF" name="montant" size="10" maxlength="10" value="" />
        </div>
        <div class="form-group">
            <label>Mode de paiement : </label>
            <select class="form-control" id="txtpaiementHF" name="paiement">
                <?php
                //Affiche le mode de paiement venant de la table ModeDePaiement
                    foreach($lesModesDePaiements as $unModeDePaiement) {
                        $idPaiement = $unModeDePaiement['idPaiement'];
                        $libelle = $unModeDePaiement['modePaiement'];

                        echo "<option value='$idPaiement'>" . $libelle . "</option>";
                    }
                ?>
            </select>
        </div>
    </div>
    <div style="float:right;">
        <button class="btn btn-outline-primary" id="ajouter" type="submit" value="Ajouter">Ajouter</button>
        <button class="btn btn-outline-secondary" id="effacer" type="reset" value="Effacer">Effacer</button>
    </div>
</form>
<br>
