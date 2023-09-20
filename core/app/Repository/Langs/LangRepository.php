<?php
namespace App\Repository\Langs;

use App\Repository\BaseRepository;
use App\Models\Lang;

class LangRepository extends BaseRepository implements LangRepositoryContract{

    public function model(): string
    {
        return Lang::class;
    }
}
