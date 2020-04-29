<?php 
require_once 'vendor/autoload.php';
require_once 'Templates/header.php'; 
require_once 'Templates/main_header.php'; 
require_once 'Templates/navbar.php';


?>

<div class="row corps">

<div class="col-12">
<h1 style="color:cornflowerblue; text-align: center;" class="mt-5 mb-3" >Formulaire d'ajout d'un produit</h1>
</div>


<div class="col-12">
<form action="add_process.php" method="POST" class="mb-5" style="border: 2px solid cornflowerblue; border-radius:10px; padding:2%;">

<div class="form-group">
    <label for="nom">Nom du produit</label>
    <input type="text" class="form-control" id="nom" name="nom" required>
  </div>

  <div class="form-group">
    <label for="image">Image du produit</label>
    <input type="text" class="form-control" id="image" name="image" required>
  </div>

  <div class="form-group">
    <label for="prix">Prix du produit en euros</label>
    <input type="text" class="form-control" id="prix" name="prix" required>
  </div>

  <div class="form-group">
    <label for="description">Description du produit</label>
    <input type="text" class="form-control" id="description" name="description" required>
  </div>

  <div class="form-group">
    <label for="date">Date de création de la fiche</label>
    <input type="date" class="form-control" id="date" name="date" required>
  </div>
  
  <div class="form-check">
  <label for="visible">Visible dans le catalogue ?</label><br>
  <input class="form-check-input" type="radio" name="visible" id="visible" value="1">
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
<br>
<div class="form-check">
  <label for="page_accueil">Affichage en page d'accueil ?</label><br>
  <input class="form-check-input" type="radio" name="page_accueil" id="page_accueil" value="1">
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
<br>
<div class="form-group">
    <label for="categorie_1">Choisissez la catégorie de danse</label>
    <select class="form-control" id="categorie_1" name="categorie_1">
      <option value="0">Aucune</option>
      <option value="1">Classique</option>
      <option value="2">Jazz</option>
    </select>
  </div>
<br>
<div class="form-group">
    <label for="categorie_2">Choisissez la catégorie d'article</label>
    <select class="form-control" id="categorie_2" name="categorie_2">
      <option value="0">Aucune</option>
      <option value="3">Vêtements</option>
      <option value="4">Chaussure</option>
    </select>
  </div>

 <br><br>
  <button type="submit" class="btn btn-success">Ajouter le produit</button>

</form>
</div>

</div>

<?php require_once 'Templates/footer.php'; ?>