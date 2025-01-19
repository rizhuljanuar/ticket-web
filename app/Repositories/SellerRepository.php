<?php

namespace App\Repositories;

use App\Models\Seller;
use App\Repositories\Contracts\SellerRepositoryInterface;

class SellerRepository implements SellerRepositoryInterface
{
    public function getAllSelers()
    {
        return Seller::latest()->get();
    }
}

