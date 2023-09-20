<?php
namespace App\Repository\NewsItems;

use App\Repository\BaseRepository;
use App\Models\NewsItem;

class NewsItemRepository extends BaseRepository implements NewsItemRepositoryContract{

    public function model(): string
    {
        return NewsItem::class;
    }
}
