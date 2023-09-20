<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserOnline
 * 
 * @property string|null $session
 * @property int|null $time
 * @property string|null $ip
 *
 * @package App\Models
 */
class UserOnline extends Model
{
	protected $table = 'table_user_online';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'time' => 'int'
	];

	protected $fillable = [
		'session',
		'time',
		'ip'
	];
}
