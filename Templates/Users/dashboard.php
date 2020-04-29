<?php require_once __DIR__ . '/../../vendor/autoload.php';
use App\View;
?>


<div class="table-responsive">
	<table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">Nom du produit</th>
      <th scope="col">Pour modifier un produit, cochez-le puis cliquez sur "Modifier"</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($products as $entity){ 
        echo View::render(
            'Templates/Users/entity.php',
            ['row' => $entity]
        );
    } ?>
     </tbody>
    </table>
  </div>
    <form action="add_form.php" method="POST">
    <input type="submit" name="add" value= "Ajouter un produit" class="btn btn-primary m-3">
    </form>
<br><br>
    <form action="remove_product.php" method="POST">
    <div class="form-group">
    <label for="produit">Sélectionner un produit à supprimer :</label>
    <select class="form-control" id="produit" name="produit">

      <?php  foreach($products as $entity){ 
      echo View::render(
        'Templates/Users/option.php',
        ['option' => $entity]
    );

   } ?>
    </select>
  </div>
    <input type="submit" value= "Supprimer un produit" class="btn btn-danger m-3">
    </form>

</div>
</div>