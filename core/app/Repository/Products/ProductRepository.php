<?php
namespace App\Repository\Products;

use App\Repository\BaseRepository;
use App\Models\Product;

class ProductRepository extends BaseRepository implements ProductRepositoryContract{

    public function model(): string
    {
        return Product::class;
    }
}
