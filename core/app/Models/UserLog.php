<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserLog
 * 
 * @property int $id
 * @property int|null $id_user
 * @property string|null $ip
 * @property int|null $timelog
 * @property string|null $user_agent
 *
 * @package App\Models
 */
class UserLog extends Model
{
	protected $table = 'table_user_log';
	public $timestamps = false;

	protected $casts = [
		'id_user' => 'int',
		'timelog' => 'int'
	];

	protected $fillable = [
		'id_user',
		'ip',
		'timelog',
		'user_agent'
	];
}
