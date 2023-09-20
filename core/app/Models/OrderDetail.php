<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderDetail
 * 
 * @property int $id
 * @property int|null $id_order
 * @property int|null $id_product
 * @property string|null $photo
 * @property string|null $name
 * @property string|null $code
 * @property string|null $color
 * @property string|null $size
 * @property float|null $regular_price
 * @property float|null $sale_price
 * @property int|null $quantity
 *
 * @package App\Models
 */
class OrderDetail extends Model
{
	protected $table = 'table_order_detail';
	public $timestamps = false;

	protected $casts = [
		'id_order' => 'int',
		'id_product' => 'int',
		'regular_price' => 'float',
		'sale_price' => 'float',
		'quantity' => 'int'
	];

	protected $fillable = [
		'id_order',
		'id_product',
		'photo',
		'name',
		'code',
		'color',
		'size',
		'regular_price',
		'sale_price',
		'quantity'
	];
}
