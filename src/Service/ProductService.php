<?php

namespace App\Service;

use App\Provider\ProductDBProvider;


class ProductService
{
    private $productProvider;

    public function __construct(ProductDBProvider $productProvider)
    {
        $this->productProvider = $productProvider;
    }

    public function findAllProduct(): array
    {
        return $this->productProvider->findAll();
    }

    public function findHomeProduct(): array
    {
        return $this->productProvider->findHome();
    }
	
	public function findVisibleProduct(): array
    {
        return $this->productProvider->findVisible();
    }

    public function findFicheProduct(string $produit): array
    {
        return $this->productProvider->findProduct($produit);
    }
}