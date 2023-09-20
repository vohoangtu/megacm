<?php
namespace App\Repository\Members;

use App\Repository\BaseRepository;
use App\Models\Member;

class MemberRepository extends BaseRepository implements MemberRepositoryContract{

    public function model(): string
    {
        return Member::class;
    }
}
