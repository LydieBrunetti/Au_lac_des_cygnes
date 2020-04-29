
<?php 
require_once 'vendor/autoload.php';

use App\Session;

$session = Session::getInstance();
?>
<?php require_once 'Templates/header.php'; ?>
<?php require_once 'Templates/main_header.php';?>
<?php require_once 'Templates/navbar.php'; ?>


<div class="row corps">
    <div class="col-12 align-items-center mt-5">
        <h1 class="text-center" style="color:cornflowerblue;">Connexion</h1>
	</div>
<br>

<?php if(!empty($session->login_error)){ ?>
<p class="alert alert-danger">
  <?php echo $session->login_error; 
  unset($session->login_error);
  ?>
</p>
<?php } ?>


  
<div class="col-12 align-items-center mb-5">
<form action="login_process.php" method="POST" style="border: 2px solid cornflowerblue; border-radius:10px; padding:2%;">
  <div class="form-group row">
    <label for="pass" class="col-form-label">Veuillez entrer votre mot de passe</label>
    <input type="password" name="pass" class="form-control" id="pass" placeholder="Mot de passe">
	
 <br><br>
  <button type="submit" class="btn btn-primary">Soumettre</button>
</div>
</form>
</div>
</div>


<?php require_once 'Templates/footer.php'; ?>