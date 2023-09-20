<?php
namespace App\Repository\ProductSaleSizes;

use App\Repository\BaseRepository;
use App\Models\ProductSaleSize;

class ProductSaleSizeRepository extends BaseRepository implements ProductSaleSizeRepositoryContract{

    public function model(): string
    {
        return ProductSaleSize::class;
    }
}
