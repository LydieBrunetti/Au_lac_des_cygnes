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

<div class="col-12">
<h1 class="mt-5 mb-3" style="color:cornflowerblue; text-align: center;">Votre tableau de bord</h1>
</div>

<div class="col-12">
<?php
$productList = new ProductService(new ProductDBProvider);

echo View::render(
    'Templates/Users/dashboard.php',
    ['products' => $productList->findAllProduct()]
);




require_once 'Templates/footer.php'; ?>