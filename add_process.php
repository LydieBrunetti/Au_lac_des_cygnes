<?php 
require_once 'src/Db/functions.php';
require_once 'vendor/autoload.php';

use App\Utils;


try{
    $pdo=getPDOInstance();
}catch(PDOException $e)
{
    echo "Erreur lors de la connexion à la base de données" . $e->getMessage();
        die;
}



$nom=$_POST['nom'];
$image=$_POST['image'];
$prix=$_POST['prix'];
$description=$_POST['description'];
$date=$_POST['date'];
$visible=$_POST['visible'];
$page_accueil=$_POST['page_accueil'];
$categorie_1=$_POST['categorie_1'];
$categorie_2=$_POST['categorie_2'];


$stmt = $pdo->prepare("INSERT INTO produit (nom, image, prix, description, visible, date, page_accueil, categorie_1, categorie_2) 
VALUES (:nom, :image, :prix, :description, :visible, :date, :page_accueil, :categorie_1, :categorie_2)");

$res = $stmt->execute([
    'nom' => $nom,
    'image' => $image,
    'prix' => $prix,
    'description' => $description,
    'visible' => $visible,
    'date' => $date,
    'page_accueil' => $page_accueil,
    'categorie_1' => $categorie_1,
    'categorie_2' => $categorie_2,
]);



Utils::redirect('admin.php');