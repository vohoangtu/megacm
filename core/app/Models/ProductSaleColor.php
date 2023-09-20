<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductSaleColor
 * 
 * @property int $id
 * @property int $id_parent
 * @property int $id_color
 *
 * @package App\Models
 */
class ProductSaleColor extends Model
{
	protected $table = 'table_product_sale_color';
	public $timestamps = false;

	protected $casts = [
		'id_parent' => 'int',
		'id_color' => 'int'
	];

	protected $fillable = [
		'id_parent',
		'id_color'
	];
}
