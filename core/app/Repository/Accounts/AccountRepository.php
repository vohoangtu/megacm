<?php
namespace App\Repository\Accounts;

use App\Repository\BaseRepository;
use App\Models\Account;

class AccountRepository extends BaseRepository implements AccountRepositoryContract{

    public function model(): string
    {
        return Account::class;
    }
}
