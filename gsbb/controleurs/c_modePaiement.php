<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];

switch($action){
  case 'afficherModePaiement':{
    $ModesPaiements = $pdo->ModePaiement();
    include("vues/v_modePaiement.php");
    break;

  }
  case 'supprimerModePaiement':{
    $idPaiement = $_REQUEST['idPaiement'];
    $supprimerPaiement = $pdo->supprimerModePaiement($idPaiement);
    break;
  }
  case 'ajouterModePaiement':{
    $modePaiement = $_REQUEST['nomPaiement'];
    $ajouterPaiement = $pdo->ajouterModePaiement($modePaiement);

    break;

  }
}
