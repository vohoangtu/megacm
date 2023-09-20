<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pushonesignal
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $link
 * @property string|null $photo
 * @property string|null $description
 * @property int|null $date_created
 * @property int|null $numb
 *
 * @package App\Models
 */
class Pushonesignal extends Model
{
	protected $table = 'table_pushonesignal';
	public $timestamps = false;

	protected $casts = [
		'date_created' => 'int',
		'numb' => 'int'
	];

	protected $fillable = [
		'name',
		'link',
		'photo',
		'description',
		'date_created',
		'numb'
	];
}
