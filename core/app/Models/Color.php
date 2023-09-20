<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Color
 * 
 * @property int $id
 * @property string|null $photo
 * @property string|null $namevi
 * @property string|null $nameen
 * @property string|null $color
 * @property bool|null $type_show
 * @property string|null $type
 * @property int|null $numb
 * @property string|null $status
 * @property int|null $date_created
 * @property int|null $date_updated
 *
 * @package App\Models
 */
class Color extends Model
{
	protected $table = 'table_color';
	
	public $timestamps = false;

	protected $casts = [
		'type_show' => 'bool',
		'numb' => 'int',
		'date_created' => 'int',
		'date_updated' => 'int'
	];

	protected $fillable = [
		'photo',
		'namevi',
		'nameen',
		'color',
		'type_show',
		'type',
		'numb',
		'status',
		'date_created',
		'date_updated'
	];
}
