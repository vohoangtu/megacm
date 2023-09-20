<?php
namespace App\Repository\ProductBrands;

use App\Repository\BaseRepository;
use App\Models\ProductBrand;

class ProductBrandRepository extends BaseRepository implements ProductBrandRepositoryContract{

    public function model(): string
    {
        return ProductBrand::class;
    }
}
