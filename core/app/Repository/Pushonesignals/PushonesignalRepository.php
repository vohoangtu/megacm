<?php
namespace App\Repository\Pushonesignals;

use App\Repository\BaseRepository;
use App\Models\Pushonesignal;

class PushonesignalRepository extends BaseRepository implements PushonesignalRepositoryContract{

    public function model(): string
    {
        return Pushonesignal::class;
    }
}
