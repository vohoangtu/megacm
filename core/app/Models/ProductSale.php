<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductSale
 * 
 * @property int $id
 * @property int|null $id_parent
 * @property int|null $id_color
 * @property int|null $id_size
 *
 * @package App\Models
 */
class ProductSale extends Model
{
	protected $table = 'table_product_sale';
	public $timestamps = false;

	protected $casts = [
		'id_parent' => 'int',
		'id_color' => 'int',
		'id_size' => 'int'
	];

	protected $fillable = [
		'id_parent',
		'id_color',
		'id_size'
	];
}
