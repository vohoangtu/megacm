<?php
namespace App\Repository\OrderStatuses;

use App\Repository\BaseRepository;
use App\Models\OrderStatus;

class OrderStatusRepository extends BaseRepository implements OrderStatusRepositoryContract{

    public function model(): string
    {
        return OrderStatus::class;
    }
}
