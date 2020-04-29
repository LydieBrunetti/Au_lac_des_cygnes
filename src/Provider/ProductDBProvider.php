<?php
namespace App\Provider;

use App\Db;

require_once __DIR__ . '/../Db/functions.php';



class ProductDBProvider 
{

    public function findAll(): array
    {
        try{
        $pdo = getPDOInstance();
        }catch(\PDOException $e){
            throw $e;
        }

        $res = $pdo->query('SELECT * FROM produit');
        $products = $res->fetchAll(\PDO::FETCH_ASSOC);
        return $products;
    }

    public function findHome(): array
    {
        try{
            $pdo = getPDOInstance();
            }catch(\PDOException $e){
                throw $e;
            }
    
            $res = $pdo->query('SELECT * FROM produit WHERE page_accueil = 1');
            $products = $res->fetchAll(\PDO::FETCH_ASSOC);
            return $products;
    }
	
	public function findVisible(): array
    {
        try{
            $pdo = getPDOInstance();
            }catch(\PDOException $e){
                throw $e;
            }
    
            $res = $pdo->query('SELECT * FROM produit WHERE visible = 1');
            $products = $res->fetchAll(\PDO::FETCH_ASSOC);
            return $products;
    }
	
	public function findProduct(string $produit): array
    {
        try{
            $pdo = getPDOInstance();
            }catch(\PDOException $e){
                throw $e;
            }

            $res = $pdo->query("SELECT * FROM produit WHERE nom = ('$produit')");
            $products = $res->fetchAll(\PDO::FETCH_ASSOC);
            return $products;
    }
        



}