<?php 
require_once 'vendor/autoload.php';
require_once 'Templates/header.php'; 
require_once 'Templates/main_header.php'; 
require_once 'Templates/navbar.php';

use App\Provider\ProductDBProvider;
use App\Service\ProductService;
use App\View;

?>

<div class="row corps">

<h2 class="text-center m-3">Catalogue des produits disponibles</h2>


<?php
$productList = new ProductService(new ProductDBProvider);

echo View::render(
    'Templates/Users/list.php',
    ['products' => $productList->findVisibleProduct()]
);
?>

</div>

<?php require_once 'Templates/footer.php'; ?>