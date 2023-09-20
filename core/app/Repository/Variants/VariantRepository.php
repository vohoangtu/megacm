<?php
namespace App\Repository\Variants;

use App\Repository\BaseRepository;
use App\Models\Variant;

class VariantRepository extends BaseRepository implements VariantRepositoryContract{

    public function model(): string
    {
        return Variant::class;
    }
}
