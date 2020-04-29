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

?>


<div class="row corps">

<div class="col-12">
<h1 class="mt-5 mb-3" style="color:cornflowerblue; text-align: center;">Formulaire de modification d'un produit</h1>
</div>


<div class="col-12">
<?php

try{
    $pdo=getPDOInstance();
}catch(PDOException $e)
{
    echo "Erreur lors de la connexion à la base de données" . $e->getMessage();
        die;
}


$edit=$_POST['edit'];
$produit=$_POST['produit'];




$editForm = new ProductService(new ProductDBProvider);

echo View::render(
    'Templates/Users/productForm.php',
    ['products' => $editForm->findFicheProduct($produit)]
);
    
?>
</div>
</div>

<?php require_once 'Templates/footer.php'; ?>
