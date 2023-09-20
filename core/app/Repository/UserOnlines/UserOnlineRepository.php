<?php
namespace App\Repository\UserOnlines;

use App\Repository\BaseRepository;
use App\Models\UserOnline;

class UserOnlineRepository extends BaseRepository implements UserOnlineRepositoryContract{

    public function model(): string
    {
        return UserOnline::class;
    }
}
