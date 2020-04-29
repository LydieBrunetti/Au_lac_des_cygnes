<?php 
require_once 'vendor/autoload.php';
require_once 'Templates/header.php'; 
require_once 'Templates/main_header.php'; 
require_once 'Templates/navbar.php';

use App\Provider\BasketDBProvider;
use App\Service\BasketService;
use App\View;
?>

<div class="row corps">

<div class="col-12">
<h1 style="color:cornflowerblue; text-align: center;" class="m-3">Votre panier</h1>
<br><br>
</div>

<div class="col-12">
<?php
$basketList = new BasketService(new BasketDBProvider);

echo View::render(
    'Templates/Users/tab.php',
    ['products' => $basketList->findAllBasket()]
);?>
</div>

</div>

<?php require_once 'Templates/footer.php'; ?>