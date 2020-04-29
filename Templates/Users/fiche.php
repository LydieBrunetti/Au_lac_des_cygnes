<div class="card" style="width: 18rem; border: 2px solid cornflowerblue; margin:1%;">
<img class="card-img-top" src="<?php echo $card['image']?>" alt="Produit danse">
  <div class="card-body">
    <h5 class="card-title" style="color: cornflowerblue;">
    <?php echo $card['nom']; ?>
    </h5>
    <p class="card-text">
    <?php echo $card['prix'] . " euros"; ?>
    </p>
    <p class="card-text">
    <?php echo $card['description']; ?>
    </p>
    <?php 
    if($card['categorie_1'] != 0){

    if($card['categorie_1'] == 1){
        $bagdecategorie1 = 'badge-light';
    }elseif($card['categorie_1'] == 2){
      $bagdecategorie1 = 'badge-dark';
    }
  }

  if($card['categorie_2'] != 0){
 if($card['categorie_2'] == 3){
        $bagdecategorie2 = 'badge-success';
    }elseif($card['categorie_2'] == 4){
      $bagdecategorie2 = 'badge-danger';
    }
  }  
    ?>
    
<?php if($card['categorie_1'] != 0){ ?>
    <p class="card-text">
        <span class="badge <?php echo $bagdecategorie1 ?>"><?php 
        if ($card['categorie_1'] == 1){
          echo "Classique";
         }elseif($card['categorie_1'] == 2){
           echo "Jazz";
         } ?></span>
</p>
        <?php } ?>

<?php if($card['categorie_2'] != 0){ ?>
<p class="card-text">
    <span class="badge <?php echo $bagdecategorie2 ?>"><?php 
        if ($card['categorie_2'] == 3){
          echo "Vêtement"; 
        }elseif($card['categorie_2'] == 4){
          echo "Chaussure";
        }?></span>
</p>

<?php } ?>

    <p class="card-text">
      <form action="panier_process.php" method="POST">
    <div class="form-check">
    <input type="checkbox" class="form-check-input" name="produit" id="choix" value="<?php echo $card['nom'] ?>">
    <label class="form-check-label" for="choix">Je commande</label>
  </div>
  <button type="submit" class="btn btn-primary">Ajouter au panier</button>
  </form>
	</p>
    </div>
    </div>