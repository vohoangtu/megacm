<?php
namespace App\Repository\ProductLists;

use App\Repository\BaseRepository;
use App\Models\ProductList;

class ProductListRepository extends BaseRepository implements ProductListRepositoryContract{

    public function model(): string
    {
        return ProductList::class;
    }
}
