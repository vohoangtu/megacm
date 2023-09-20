<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserLimit
 * 
 * @property int $id
 * @property string $login_ip
 * @property int $login_attempts
 * @property int $attempt_time
 * @property int $locked_time
 *
 * @package App\Models
 */
class UserLimit extends Model
{
	protected $table = 'table_user_limit';
	public $timestamps = false;

	protected $casts = [
		'login_attempts' => 'int',
		'attempt_time' => 'int',
		'locked_time' => 'int'
	];

	protected $fillable = [
		'login_ip',
		'login_attempts',
		'attempt_time',
		'locked_time'
	];
}
