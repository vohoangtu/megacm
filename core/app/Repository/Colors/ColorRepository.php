<?php
namespace App\Repository\Colors;

use App\Repository\BaseRepository;
use App\Models\Color;

class ColorRepository extends BaseRepository implements ColorRepositoryContract{

    public function model(): string
    {
        return Color::class;
    }
}
