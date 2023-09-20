<?php
namespace App\Repository\ProductItems;

use App\Repository\BaseRepository;
use App\Models\ProductItem;

class ProductItemRepository extends BaseRepository implements ProductItemRepositoryContract{

    public function model(): string
    {
        return ProductItem::class;
    }
}
