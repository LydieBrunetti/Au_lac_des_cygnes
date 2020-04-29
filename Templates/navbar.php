<?php 
require_once 'vendor/autoload.php';

use App\Session;

$session = Session::getInstance();
?>

<div class="container-fluid">

<nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light">

	<img src="Images\danseuse.png" width="30" height="30" class="d-inline-block align-top mr-2" alt="logo">
	<a class="navbar-brand" href="index.php" id="logo" style="font-family:'Aclonica', 'Arial Narrow', Arial, sans-serif; color:#ff66b3;">
        Au lac des Cygnes
    </a>                       
	
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <a class="btn btn-light nav-link mr-2" href="catalogue.php">Catalogue</a>
            <a class="btn btn-light nav-link" href="panier.php">
				<img src="Images/panier.png" width="30" height="30">
			</a> 
        </ul>
            <?php if(!empty ($session->connected) && ($session->connected)){?>
                <a class="btn btn-secondary nav-link" href="logout.php">Déconnexion</a>
            <?php }else{?>
                <a class="btn btn-secondary nav-link" href="login.php">Connexion</a>
            <?php }?>       
    </div>
</nav>

