<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductSaleSize
 * 
 * @property int $id
 * @property int $id_parent
 * @property int $id_size
 *
 * @package App\Models
 */
class ProductSaleSize extends Model
{
	protected $table = 'table_product_sale_size';
	public $timestamps = false;

	protected $casts = [
		'id_parent' => 'int',
		'id_size' => 'int'
	];

	protected $fillable = [
		'id_parent',
		'id_size'
	];
}
