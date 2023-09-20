<?php
namespace App\Repository\Seopages;

use App\Repository\BaseRepository;
use App\Models\Seopage;

class SeopageRepository extends BaseRepository implements SeopageRepositoryContract{

    public function model(): string
    {
        return Seopage::class;
    }
}
