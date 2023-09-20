<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Counter
 * 
 * @property int $id
 * @property int|null $tm
 * @property string|null $ip
 *
 * @package App\Models
 */
class Counter extends Model
{
	protected $table = 'table_counter';
	public $timestamps = false;

	protected $casts = [
		'tm' => 'int'
	];

	protected $fillable = [
		'tm',
		'ip'
	];
}
