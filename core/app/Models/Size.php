<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Size
 * 
 * @property int $id
 * @property string|null $namevi
 * @property string|null $nameen
 * @property string|null $type
 * @property int|null $numb
 * @property string|null $status
 * @property int|null $date_created
 * @property int|null $date_updated
 *
 * @package App\Models
 */
class Size extends Model
{
	protected $table = 'table_size';
	public $timestamps = false;

	protected $casts = [
		'numb' => 'int',
		'date_created' => 'int',
		'date_updated' => 'int'
	];

	protected $fillable = [
		'namevi',
		'nameen',
		'type',
		'numb',
		'status',
		'date_created',
		'date_updated'
	];
}
