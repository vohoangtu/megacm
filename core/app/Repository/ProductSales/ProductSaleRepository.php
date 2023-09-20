<?php
namespace App\Repository\ProductSales;

use App\Repository\BaseRepository;
use App\Models\ProductSale;

class ProductSaleRepository extends BaseRepository implements ProductSaleRepositoryContract{

    public function model(): string
    {
        return ProductSale::class;
    }
}
