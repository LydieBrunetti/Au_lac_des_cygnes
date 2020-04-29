

<form action="update_process.php" method="POST" class="mb-5" style="border: 2px solid cornflowerblue; border-radius:10px; padding:2%;">

<div class="form-group">
    <label for="nom">Numero du produit</label>
    <input type="text" class="form-control" id="id" name="id" value=" <?php echo $item['id']; ?>">
  </div>

  <div class="form-group">
    <label for="nom">Nom du produit</label>
    <input type="text" class="form-control" id="nom" name="nom" value=" <?php echo $item['nom']; ?>">
  </div>

  <div class="form-group">
    <label for="image">Image du produit</label>
    <input type="text" class="form-control" id="image" name="image" value=" <?php echo $item['image']; ?>">
  </div>

  <div class="form-group">
    <label for="prix">Prix du produit en euros</label>
    <input type="text" class="form-control" id="prix" name="prix" value=" <?php echo $item['prix']; ?>">
  </div>

  <div class="form-group">
    <label for="description">Description du produit</label>
    <input type="text" class="form-control" id="description" name="description" value=" <?php echo $item['description']; ?>">
  </div>

  <div class="form-group">
    <label for="date">Date de création de la fiche</label>
    <input type="date" class="form-control" id="date" name="date" value=" <?php echo $item['date']; ?>">
  </div>
  
  <div class="form-check">
  <label for="visible">Visible dans le catalogue ?</label><br>

  <?php if($item['visible'] == 1){ ?>
  <input class="form-check-input" type="radio" name="visible" id="visible" value="1" checked>
  <label class="form-check-label" for="visible">
    Oui
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="visible" id="visible" value="0">
  <label class="form-check-label" for="visible">
    Non
  </label>
</div>
<?php }else{ ?>
  <input class="form-check-input" type="radio" name="visible" id="visible" value="1">
  <label class="form-check-label" for="visible">
    Oui
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="visible" id="visible" value="0" checked>
  <label class="form-check-label" for="visible">
    Non
  </label>
</div>
  <?php } ?>
<br>
<div class="form-check">
  <label for="page_accueil">Affichage en page d'accueil ?</label><br>

  <?php if($item['page_accueil'] == 1){ ?>
  <input class="form-check-input" type="radio" name="page_accueil" id="page_accueil" value="1" checked>
  <label class="form-check-label" for="page_accueil">
    Oui
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="page_accueil" id="page_accueil" value="0">
  <label class="form-check-label" for="page_accueil">
    Non
  </label>
</div>
<?php }else{ ?>
  <input class="form-check-input" type="radio" name="page_accueil" id="page_accueil" value="1">
  <label class="form-check-label" for="page_accueil">
    Oui
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="page_accueil" id="page_accueil" value="0" checked>
  <label class="form-check-label" for="page_accueil">
    Non
  </label>
</div>
<?php } ?>

<br>

<div class="form-group">

    <label for="categorie_1">Choisissez la catégorie de danse</label>

    <select class="form-control" id="categorie_1" name="categorie_1">

      <?php if($item['categorie_1'] == 1){ ?>
      <option value="0">Aucune</option>
      <option value="1" selected="selected">Classique</option>
      <option value="2">Jazz</option>

      <?php }elseif($item['categorie_1'] == 2){ ?>
        <option value="0">Aucune</option>
      <option value="1">Classique</option>
      <option value="2" selected="selected">Jazz</option>

      <?php }else{ ?>
        <option value="0" selected="selected">Aucune</option>
      <option value="1">Classique</option>
      <option value="2">Jazz</option>
      <?php } ?>
    </select>
  </div>

<br>

<div class="form-group">

    <label for="categorie_2">Choisissez la catégorie d'article</label>

    <select class="form-control" id="categorie_2" name="categorie_2">

    <?php if($item['categorie_2'] == 3){ ?>
      <option value="0">Aucune</option>
      <option value="3" selected="selected">Vêtements</option>
      <option value="4">Chaussure</option>

      <?php }elseif($item['categorie_2'] == 4){ ?>

        <option value="0">Aucune</option>
      <option value="3">Vêtements</option>
      <option value="4" selected="selected">Chaussure</option>

      <?php }else{ ?>

        <option value="0" selected="selected">Aucune</option>
      <option value="3">Vêtements</option>
      <option value="4">Chaussure</option>
      <?php } ?>
    </select>
  
  </div>

<button type="submit" class="btn btn-success">Modifier la fiche du produit</button>

</form>


