<?php
namespace App\Repository\Sizes;

use App\Repository\BaseRepository;
use App\Models\Size;

class SizeRepository extends BaseRepository implements SizeRepositoryContract{

    public function model(): string
    {
        return Size::class;
    }
}
