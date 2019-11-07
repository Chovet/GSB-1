<?php
//Liste des mois dans le mois à sélectionner
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
<br>
<!--Affiche chaque renseignement venant du mois choisi -->
<div class="container">
    <div class="jumbotron">
        <div class="container">
            <h2 style="text-align: center;">Mes fiches de frais</h2>
            <h3>Mois à sélectionner :</h3>
            <form action="index.php?uc=etatFrais&action=voirEtatFrais" method="post">
                <label for="lstMois" accesskey="n">Mois : </label>
                <select class="form-control" id="lstMois" name="lstMois">
                <?php
                //Menu déroulant sur le mois à selectionner, affiche le mois actuel
                    foreach ($lesMois as $unMois) {
                        $mois = $unMois['mois'];
                        $numAnnee = $unMois['numAnnee'];
                        if($mois == $moisASelectionner) {
                            ?>
                            <option selected value="<?php echo $mois ?>"><?php echo $mouths[$mois]; ?></option>
                            <?php
                        } else { ?>
                            <option value="<?php echo $mois ?>"><?php echo $mouths[$mois]; ?></option>
                            <?php
                        }
                    }
                ?>
                </select>
                <br>
                <div style="float: right;">
                    <button class="btn btn-outline-primary" id="ajouter" type="submit" value="Ajouter">Afficher</button>
                </div>
            </form>
            <br>
