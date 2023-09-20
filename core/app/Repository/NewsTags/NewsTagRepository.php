<?php
namespace App\Repository\NewsTags;

use App\Repository\BaseRepository;
use App\Models\NewsTag;

class NewsTagRepository extends BaseRepository implements NewsTagRepositoryContract{

    public function model(): string
    {
        return NewsTag::class;
    }
}
