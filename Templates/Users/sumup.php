<div class="card" style="width: 18rem; margin:1%;">
<img class="card-img-top" src="<?php echo $card['image']?>" alt="Produit danse">
  <div class="card-body">
    <h5 class="card-title" style="color: cornflowerblue;">
    <?php echo $card['nom']; ?>
    </h5>
    <p class="card-text">
    <?php echo $card['prix'] . " euros"; ?>
    </p>
	    <p class="card-text">
        <p>Cliquez pour voir la fiche produit</p>
      <form action="fiche.php" method="POST">
    <input type="submit" name="fiche" value= "<?php echo $card['nom']; ?>" class="btn btn-danger">
    </form>
    </p>
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