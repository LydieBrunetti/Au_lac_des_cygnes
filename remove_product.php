<?php 
require_once 'src/Db/functions.php';
require_once 'vendor/autoload.php';
require_once 'Templates/header.php'; 
require_once 'Templates/main_header.php';
require_once 'Templates/navbar.php'; 


use App\Utils;
use App\Provider\ProductDBProvider;
use App\Service\ProductService;
use App\View;



try{
    $pdo=getPDOInstance();
}catch(PDOException $e)
{
    echo "Erreur lors de la connexion à la base de données" . $e->getMessage();
        die;
}




$produit=$_POST['produit'];

    $sql = "DELETE FROM produit WHERE nom = '$produit'";
    $pdo->exec($sql);
    Utils::redirect('admin.php');
