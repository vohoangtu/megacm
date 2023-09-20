<?php
namespace App\Repository\PermissionGroups;

use App\Repository\BaseRepository;
use App\Models\PermissionGroup;

class PermissionGroupRepository extends BaseRepository implements PermissionGroupRepositoryContract{

    public function model(): string
    {
        return PermissionGroup::class;
    }
}
