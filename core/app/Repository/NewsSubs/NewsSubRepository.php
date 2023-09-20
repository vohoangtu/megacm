<?php
namespace App\Repository\NewsSubs;

use App\Repository\BaseRepository;
use App\Models\NewsSub;

class NewsSubRepository extends BaseRepository implements NewsSubRepositoryContract{

    public function model(): string
    {
        return NewsSub::class;
    }
}
