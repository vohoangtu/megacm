<?php
namespace App\Repository\Photos;

use App\Repository\BaseRepository;
use App\Models\Photo;

class PhotoRepository extends BaseRepository implements PhotoRepositoryContract{

    public function model(): string
    {
        return Photo::class;
    }
}
