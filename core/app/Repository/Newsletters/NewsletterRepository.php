<?php
namespace App\Repository\Newsletters;

use App\Repository\BaseRepository;
use App\Models\Newsletter;

class NewsletterRepository extends BaseRepository implements NewsletterRepositoryContract{

    public function model(): string
    {
        return Newsletter::class;
    }
}
