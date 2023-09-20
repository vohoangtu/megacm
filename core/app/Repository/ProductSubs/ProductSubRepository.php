<?php
namespace App\Repository\ProductSubs;

use App\Repository\BaseRepository;
use App\Models\ProductSub;

class ProductSubRepository extends BaseRepository implements ProductSubRepositoryContract{

    public function model(): string
    {
        return ProductSub::class;
    }
}
