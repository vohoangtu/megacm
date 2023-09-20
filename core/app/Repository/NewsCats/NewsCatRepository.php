<?php
namespace App\Repository\NewsCats;

use App\Repository\BaseRepository;
use App\Models\NewsCat;

class NewsCatRepository extends BaseRepository implements NewsCatRepositoryContract{

    public function model(): string
    {
        return NewsCat::class;
    }
}
