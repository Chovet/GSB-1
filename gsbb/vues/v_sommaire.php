<?php
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
?>
<!--Menu sélection saisie/consultation -->

<nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
            </li>
            <?php
            //Si la personne connecté est 'admin', il peut gerer les modes de paiements
            if ($idVisiteur == a895){

             ?>
            <li class="nav-item">
                <a class="nav-link" href="index.php?uc=modePaiement&action=afficherModePaiement" title="Gérer les modes de paiements">Gérer les modes de paiements</a>
            </li>
<?php } ?>
        </ul>
    </div>
    <span class="navbar-text">
            Bienvenue <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?> - <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
    </span>
</nav>
