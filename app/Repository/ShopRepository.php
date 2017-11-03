<?php

declare(strict_types = 1);

namespace App\Repository;

use App\Models\Shop;

class ShopRepository
{
    protected $shop;

    public function __construct(Shop $shop)
    {
        $this->shop = $shop;
    }

    public function show($id)
    {
        $shop = $this->shop->find($id);

        return $shop;
    }

    public function search($where)
    {
        $shop = $this->shop->where($where)->get();
        return $shop;
    }

    public function findAll()
    {
        $shop = $this->shop->all();

        return $shop;
    }

    public function store($rows)
    {
        $result = $this->shop->insert($rows);
    }

}
