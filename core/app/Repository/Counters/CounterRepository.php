<?php
namespace App\Repository\Counters;

use App\Repository\BaseRepository;
use App\Models\Counter;

class CounterRepository extends BaseRepository implements CounterRepositoryContract{

    public function model(): string
    {
        return Counter::class;
    }
}
