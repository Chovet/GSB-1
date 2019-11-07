<?php
echo ?>
<!--Formulaire pour ajouter un frais hors forfait -->
<h3>Ajouter un nouveau frais hors forfait</h3>
<form method='POST' action='index.php?uc=modePaiement&action=ajouterModePaiment'>
    <table class='table'>
        <tr>
            <td>Nom du moyen de paiement</td>
            <td><input  type='text' name=nomPaiement  size='30' maxlength='45'/></td>
        </tr>

    </table>

</form>
<li class="nav-item">
    <a class="nav-link" href="index.php?uc=modePaiement&action=ajouterModePaiement&nomPaiement" title="Consultation de mes fiches de frais">Ajouter moyen de paiement</a>
</li>
<?php
;
?>
