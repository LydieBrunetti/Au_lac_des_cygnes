<?php 
require_once 'vendor/autoload.php';
require_once 'Templates/header.php'; 
require_once 'Templates/navbar.php';
require_once 'Templates/main_header.php'; 


use App\Provider\ProductDBProvider;
use App\Service\ProductService;
use App\View;

?>

<div class="row">

<aside class="order-2 order-sm-1 col-sm-4 col-md-3 bg-light">
<h2>Nos coups de coeur</h2>

<?php
$productList = new ProductService(new ProductDBProvider);

echo View::render(
    'Templates/Users/list.php',
    ['products' => $productList->findHomeProduct()]
);?>
</aside>



<section class="order-1 order-sm-2 col-sm-8 col-md-9 corps">
<div class="row">


<div class="col-md-6 col-sm-12">
    <div class="card m-3 bg-light" style="max-width: 540px">
        <div class="row">
            <div class="col-md-4">
                <img src="Images/classique.jpg" class="card-img" alt="classique">
            </div>
            <div class="col-md-8 d-flex align-items-center">
                <div class="card-body">
                    <h5 class="card-title text-center">Classique</h5>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="col-md-6 col-sm-12">
        <div class="card m-3 bg-light" style="max-width: 540px;">
            <div class="row">
                <div class="col-md-4">
                    <img src="Images/jazzDanse.jpg" class="card-img" alt="jazz">
                </div>
                <div class="col-md-8 d-flex align-items-center">
                    <div class="card-body">
                        <h5 class="card-title text-center">Jazz</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="card m-3 bg-light" style="max-width: 540px;">
            <div class="row">
                <div class="col-md-4">
                    <img src="Images/vetement.jpg" class="card-img" alt="vetements">
                </div>
                <div class="col-md-8 d-flex align-items-center">
                    <div class="card-body">
                        <h5 class="card-title text-center">Vêtements</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="col-md-6 col-sm-12">
        <div class="card m-3 bg-light" style="max-width: 540px;">
            <div class="row">
                <div class="col-md-4">
                    <img src="Images/chaussure.jpg" class="card-img" alt="chaussure">
                </div>
                <div class="col-md-8 d-flex align-items-center">
                    <div class="card-body">
                        <h5 class="card-title text-center">Chaussures</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row"></div>

    <div class="jumbotron">
	    <h2>Au service de la danse</h2>
            <br><br>

        <p class="mb-0 text-center">Boutique d'articles de Danse depuis plus de 36 ans. <br>
        Afin de répondre aux attentes et exigences des Professeurs, Professionnels et Amateurs, nous mettons à leur disposition, 
        ainsi qu'à vous-même, les marques les plus représentatives du monde de la Danse:<br>
        Merlet, Degas, Repetto, Temps Danse, Capézio, Bloch, Mirella, Sansha, Wear Moi, <br>
        Grishko, DanzArt, Port Dance, Intermezzo, Ballet Rosa, Sheddo, Rumos, Werner Kern... </p>
    </div>

</section>

</div>

<?php require_once 'Templates/footer.php'; ?>
