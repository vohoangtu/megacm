<?php
namespace App\Repository\OrderDetails;

use App\Repository\BaseRepository;
use App\Models\OrderDetail;

class OrderDetailRepository extends BaseRepository implements OrderDetailRepositoryContract{

    public function model(): string
    {
        return OrderDetail::class;
    }
}
