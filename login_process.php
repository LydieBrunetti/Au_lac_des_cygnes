<?php 
require_once 'src/Db/functions.php';
require_once 'vendor/autoload.php';

use App\Utils;
use App\Session;


$session = Session::getInstance();

try{
    $pdo=getPDOInstance();
}catch(PDOException $e)
{
    echo "Erreur lors de la connexion à la base de données" . $e->getMessage();
        die;
}



$pass=$_POST['pass'];

$stmt=$pdo->prepare("SELECT id FROM admin WHERE pass = ('$pass')");

$res = $stmt->execute([
    'pass' => $pass
]);


$result = $stmt->fetch(PDO::FETCH_ASSOC);


if($result)
{
    $session->connected = true;
    $session->id = $result['id'];
    
    Utils::redirect('admin.php');

}else
{
    $session->connected = false;
    $session->login_error = "Ces informations ne permettent pas de vous identifier";
    Utils::redirect('login.php');

}

