<?php
namespace App\Repository\Contacts;

use App\Repository\BaseRepository;
use App\Models\Contact;

class ContactRepository extends BaseRepository implements ContactRepositoryContract{

    public function model(): string
    {
        return Contact::class;
    }
}
