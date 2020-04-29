<?php

namespace App\Service;

use App\Provider\BasketDBProvider;


class BasketService
{
    private $basketProvider;

    public function __construct(BasketDBProvider $basketProvider)
    {
        $this->basketProvider = $basketProvider;
    }

    public function findAllBasket(): array
    {
        return $this->basketProvider->findBasket();
    }
    
}