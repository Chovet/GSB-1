<!--Bootstrap-->
<div class="container">
  <div class="jumbotron">
  <h2><center>Modes de paiements :</h2>



    <?php
    //Boucle affichant les moyens de paiements
    foreach($ModesPaiements as $ModePaiement) {
        $idPaiement = $ModePaiement['idPaiement'];
        $libelle = $ModePaiement['modePaiement'];
        ?>



        <ul class="list-group"><?php
        echo "<th><li class='list-group-item'><h4><div class='d-flex justify-content-left'><option value='$idPaiement'>" . $libelle . "</div></option></h4></li>";

        ?>

      </ul>
        <!--Bouton pour supprimer un mode de paiement -->
        <div class='d-flex justify-content-end'><a href="index.php?uc=modePaiement&action=supprimerModePaiement&idPaiement=<?php echo $idPaiement ?>"
          onclick="return confirm('Voulez-vous vraiment supprimer ce mode de paiement?');">Supprimer ce mode de paiement</a></td>
        </div>
<?php } ?>

</div>
</div>

<br>

<!--Menu pour ajouter un mode de paiement-->
<div class="container">
    <div class="jumbotron">
        <div class="container">
<div class='d-flex justify-content-center'>
       <h2>Ajouter un nouveau mode de paiement</h2>
     </div>
       <form action="index.php?uc=modePaiement&action=ajouterModePaiement" method="post">
       <div class="form-group">
         <div class='d-flex justify-content-center'>
           <label for="txtPaiementHF"><h5>Nom du mode de paiement :</h5></label>
         </div>
          <div class='d-flex justify-content-center'>
           <input class='d-flex justify-content-center'type="text" id="txtPaiementHF" name="nomPaiement" size="20" maxlength="40" value="" />
           <button class="btn btn-outline-primary" id="ajouter" type="submit" value="Ajouter">Ajouter</button>
         </div>
       </div>
        </form>




<?php
