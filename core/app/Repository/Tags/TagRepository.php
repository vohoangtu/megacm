<?php
namespace App\Repository\Tags;

use App\Repository\BaseRepository;
use App\Models\Tag;

class TagRepository extends BaseRepository implements TagRepositoryContract{

    public function model(): string
    {
        return Tag::class;
    }
}
