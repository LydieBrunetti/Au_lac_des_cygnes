<?php require_once __DIR__ . '/../../vendor/autoload.php';
use App\View;
?>


<div class="table-responsive">
	<table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">Nom du produit</th>
      <th scope="col">Pour supprimer un produit, cochez-le puis cliquez sur "Supprimer"</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($products as $productRow){ 
        echo View::render(
            'Templates/Users/row.php',
            ['row' => $productRow]
        );
    } ?>
     </tbody>
    </table>
    <form action="delete_process.php" method="POST">
    <input type="submit" name="delete" value= "Vider le panier" class="btn btn-danger">
    </form>
</div>
  
