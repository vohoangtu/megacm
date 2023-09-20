<?php
namespace App\Repository\UserLimits;

use App\Repository\BaseRepository;
use App\Models\UserLimit;

class UserLimitRepository extends BaseRepository implements UserLimitRepositoryContract{

    public function model(): string
    {
        return UserLimit::class;
    }
}
