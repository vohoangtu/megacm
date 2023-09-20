<?php
namespace App\Repository\ProductTags;

use App\Repository\BaseRepository;
use App\Models\ProductTag;

class ProductTagRepository extends BaseRepository implements ProductTagRepositoryContract{

    public function model(): string
    {
        return ProductTag::class;
    }
}
