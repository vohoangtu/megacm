<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Variants1
 * 
 * @property int $id
 * @property int $id_parent
 * @property int $size
 * @property float $price_new
 * @property float $price_old
 *
 * @package App\Models
 */
class Variants1 extends Model
{
	protected $table = 'table_variants1';
	public $timestamps = false;

	protected $casts = [
		'id_parent' => 'int',
		'size' => 'int',
		'price_new' => 'float',
		'price_old' => 'float'
	];

	protected $fillable = [
		'id_parent',
		'size',
		'price_new',
		'price_old'
	];
}
