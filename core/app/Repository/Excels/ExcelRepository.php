<?php
namespace App\Repository\Excels;

use App\Repository\BaseRepository;
use App\Models\Excel;

class ExcelRepository extends BaseRepository implements ExcelRepositoryContract{

    public function model(): string
    {
        return Excel::class;
    }
}
