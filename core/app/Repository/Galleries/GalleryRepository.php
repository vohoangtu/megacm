<?php
namespace App\Repository\Galleries;

use App\Repository\BaseRepository;
use App\Models\Gallery;

class GalleryRepository extends BaseRepository implements GalleryRepositoryContract{

    public function model(): string
    {
        return Gallery::class;
    }
}
