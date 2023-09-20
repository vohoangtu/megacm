<?php
namespace App\Repository\Variants1s;

use App\Repository\BaseRepository;
use App\Models\Variants1;

class Variants1Repository extends BaseRepository implements Variants1RepositoryContract{

    public function model(): string
    {
        return Variants1::class;
    }
}
