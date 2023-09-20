<?php
namespace App\Repository\StaticModels;

use App\Repository\BaseRepository;
use App\Models\StaticModel;

class StaticModelRepository extends BaseRepository implements StaticModelRepositoryContract{

    public function model(): string
    {
        return StaticModel::class;
    }
}
