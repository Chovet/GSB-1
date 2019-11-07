<!--Affiche le formulaire de frais de forfait-->
<br>
<br>
<div class="container">
    <div class="jumbotron">
        <div class="container">
          <h2 style="text-align: center;">Renseigner ma fiche de frais du <?php echo $numMois."/".$numAnnee ?></h2>

<form method="POST"  action="index.php?uc=gererFrais&action=validerMajFraisForfait">
    <br>
    <h3>Eléments forfaitisés</h3>
    <div class="form-group">
        <?php
        foreach ($lesFraisForfait as $unFrais)
        {
        //recupere les elements
        $idFrais = $unFrais['idfrais'];
        $libelle = $unFrais['libelle'];
        $quantite = $unFrais['quantite'];
        ?>
        <!--Affiche les frais -->
        <label for="idFrais"><?php echo $libelle ?></label><br>
        <input type="text" id="idFrais" class="form-control" name="lesFrais[<?php echo $idFrais?>]" value="<?php echo $quantite?>" >
        <br>

        <?php
        }
        ?>
    </div>
    <div style="float: right;">
        <button class="btn btn-outline-primary" id="ok" type="submit" value="Valider">Valider</button>
        <button class="btn btn-outline-secondary" id="annuler" type="reset" value="Effacer">Annuler</button>
    </div>
</form>
<br>
<br>
