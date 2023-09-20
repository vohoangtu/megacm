<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Excel
 * 
 * @property int $id
 * @property string|null $photo
 * @property string|null $type
 * @property int|null $numb
 *
 * @package App\Models
 */
class Excel extends Model
{
	protected $table = 'table_excel';
	public $timestamps = false;

	protected $casts = [
		'numb' => 'int'
	];

	protected $fillable = [
		'photo',
		'type',
		'numb'
	];
}
