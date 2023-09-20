<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Permission
 * 
 * @property int $id
 * @property int|null $id_permission_group
 * @property string|null $permission
 *
 * @package App\Models
 */
class Permission extends Model
{
	protected $table = 'table_permission';
	public $timestamps = false;

	protected $casts = [
		'id_permission_group' => 'int'
	];

	protected $fillable = [
		'id_permission_group',
		'permission'
	];
}
