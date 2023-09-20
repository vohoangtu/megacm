<?php
namespace App\Repository\ProductSaleColors;

use App\Repository\BaseRepository;
use App\Models\ProductSaleColor;

class ProductSaleColorRepository extends BaseRepository implements ProductSaleColorRepositoryContract{

    public function model(): string
    {
        return ProductSaleColor::class;
    }
}
