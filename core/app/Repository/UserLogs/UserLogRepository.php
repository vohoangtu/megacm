<?php
namespace App\Repository\UserLogs;

use App\Repository\BaseRepository;
use App\Models\UserLog;

class UserLogRepository extends BaseRepository implements UserLogRepositoryContract{

    public function model(): string
    {
        return UserLog::class;
    }
}
