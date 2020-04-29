<?php 
require_once 'vendor/autoload.php';
require_once 'Templates/header.php'; 
require_once 'Templates/main_header.php'; 
require_once 'Templates/navbar.php';
require_once 'src/Db/functions.php';
require_once 'vendor/autoload.php';


use App\Provider\ProductDBProvider;
use App\Service\ProductService;
use App\View;

?>

<div class="row corps">

<div class="col m-3">
<h2>Fiche produit</h2>



<?php

try{
    $pdo=getPDOInstance();
}catch(PDOException $e)
{
    echo "Erreur lors de la connexion à la base de données" . $e->getMessage();
        die;
}


$fiche=$_POST['fiche'];


$productFiche = new ProductService(new ProductDBProvider);

echo View::render(
    'Templates/Users/listFiche.php',
    ['products' => $productFiche->findFicheProduct($fiche)]
);
?>
</div>


</div>


<?php require_once 'Templates/footer.php'; ?>