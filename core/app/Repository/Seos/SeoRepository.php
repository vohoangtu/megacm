<?php
namespace App\Repository\Seos;

use App\Repository\BaseRepository;
use App\Models\Seo;

class SeoRepository extends BaseRepository implements SeoRepositoryContract{

    public function model(): string
    {
        return Seo::class;
    }
}
