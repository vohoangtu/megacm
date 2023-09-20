<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Variant
 * 
 * @property int $id
 * @property int $id_parent
 * @property int $color
 * @property string $photo
 *
 * @package App\Models
 */
class Variant extends Model
{
	protected $table = 'table_variants';
	public $timestamps = false;

	protected $casts = [
		'id_parent' => 'int',
		'color' => 'int'
	];

	protected $fillable = [
		'id_parent',
		'color',
		'photo'
	];
}
