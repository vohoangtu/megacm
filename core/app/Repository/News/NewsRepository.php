<?php
namespace App\Repository\News;

use App\Repository\BaseRepository;
use App\Models\News;

class NewsRepository extends BaseRepository implements NewsRepositoryContract{

    public function model(): string
    {
        return News::class;
    }
}
