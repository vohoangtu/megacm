<?php
namespace App\Repository\ProductCats;

use App\Repository\BaseRepository;
use App\Models\ProductCat;

class ProductCatRepository extends BaseRepository implements ProductCatRepositoryContract{

    public function model(): string
    {
        return ProductCat::class;
    }
}
