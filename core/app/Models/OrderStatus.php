<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderStatus
 * 
 * @property int $id
 * @property string|null $namevi
 * @property string|null $nameen
 * @property string|null $class_order
 *
 * @package App\Models
 */
class OrderStatus extends Model
{
	protected $table = 'table_order_status';
	public $timestamps = false;

	protected $fillable = [
		'namevi',
		'nameen',
		'class_order'
	];
}
