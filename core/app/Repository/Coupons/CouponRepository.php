<?php
namespace App\Repository\Coupons;

use App\Repository\BaseRepository;
use App\Models\Coupon;

class CouponRepository extends BaseRepository implements CouponRepositoryContract{

    public function model(): string
    {
        return Coupon::class;
    }
}
