<?php 
require_once 'src/Db/functions.php';
require_once 'vendor/autoload.php';

use App\Utils;


try{
    $pdo=getPDOInstance();
}catch(PDOException $e)
{
    echo "Erreur lors de la connexion à la base de données" . $e->getMessage();
        die;
}

$delete=$_POST['delete'];
$produit=$_POST['produit'];



if($delete == "Vider le panier"){
$sql = "DELETE FROM panier";
$pdo->exec($sql);
}elseif($delete == "Supprimer"){
$sql = "DELETE FROM panier WHERE produit = '$produit'";
$pdo->exec($sql);
}



Utils::redirect('panier.php');