<?php
namespace App\Provider;

use App\Db;

require_once __DIR__ . '/../Db/functions.php';

class BasketDBProvider
{
    public function findBasket(): array
    {
        try{
        $pdo = getPDOInstance();
        }catch(\PDOException $e){
            throw $e;
        }

        $res = $pdo->query('SELECT * FROM panier');
        $basket = $res->fetchAll(\PDO::FETCH_ASSOC);
        return $basket;
    }




}