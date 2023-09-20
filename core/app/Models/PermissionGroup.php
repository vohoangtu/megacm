<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PermissionGroup
 * 
 * @property int $id
 * @property string|null $name
 * @property int|null $numb
 * @property string|null $status
 * @property int|null $date_created
 * @property int|null $date_updated
 *
 * @package App\Models
 */
class PermissionGroup extends Model
{
	protected $table = 'table_permission_group';
	public $timestamps = false;

	protected $casts = [
		'numb' => 'int',
		'date_created' => 'int',
		'date_updated' => 'int'
	];

	protected $fillable = [
		'name',
		'numb',
		'status',
		'date_created',
		'date_updated'
	];
}
