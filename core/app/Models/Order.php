<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $id
 * @property int|null $id_user
 * @property string|null $code
 * @property string|null $fullname
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $email
 * @property int|null $order_payment
 * @property float|null $temp_price
 * @property float|null $total_price
 * @property int|null $city
 * @property int|null $district
 * @property int|null $ward
 * @property float|null $ship_price
 * @property string|null $requirements
 * @property string|null $notes
 * @property int|null $date_created
 * @property int|null $order_status
 * @property int|null $numb
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'table_order';
	public $timestamps = false;

	protected $casts = [
		'id_user' => 'int',
		'order_payment' => 'int',
		'temp_price' => 'float',
		'total_price' => 'float',
		'city' => 'int',
		'district' => 'int',
		'ward' => 'int',
		'ship_price' => 'float',
		'date_created' => 'int',
		'order_status' => 'int',
		'numb' => 'int'
	];

	protected $fillable = [
		'id_user',
		'code',
		'fullname',
		'phone',
		'address',
		'email',
		'order_payment',
		'temp_price',
		'total_price',
		'city',
		'district',
		'ward',
		'ship_price',
		'requirements',
		'notes',
		'date_created',
		'order_status',
		'numb'
	];
}
