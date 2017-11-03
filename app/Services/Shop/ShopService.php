<?php

declare(strict_types = 1);
namespace App\Services\Shop;

use App\Repository\ShopRepository;

class ShopService
{
    protected $shopRepo;

    public function __construct(ShopRepository $shopRepo) {
        $this->shopRepo = $shopRepo;
    }

    public function findAll() {
        return $this->shopRepo->findAll();
    }
}