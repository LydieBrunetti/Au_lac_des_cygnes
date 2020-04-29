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



$produit=$_POST['produit'];

$stmt = $pdo->prepare("INSERT INTO panier (produit) VALUES (:produit)");

$res = $stmt->execute([
    'produit' => $produit,
]);



Utils::redirect('catalogue.php');


