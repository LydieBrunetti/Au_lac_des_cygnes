<?php require_once __DIR__ . '/../../vendor/autoload.php';
use App\View;
?>

<div class="container fluid">
    <div class="row">
    <div class="w-100 d-flex flex-row justify-content-around align-items-center mt-4">
    <?php foreach($products as $productCard){ 
        echo View::render(
            'Templates/Users/fiche.php',
            ['card' => $productCard]
        );
    } ?>
    </div>
    </div>
</div>