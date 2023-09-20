<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 * 
 * @property int $id
 * @property string|null $photo
 * @property string|null $options
 * @property string|null $slugvi
 * @property string|null $slugen
 * @property string|null $contenten
 * @property string|null $contentvi
 * @property string|null $descen
 * @property string|null $descvi
 * @property string|null $nameen
 * @property string|null $namevi
 * @property int|null $numb
 * @property string|null $type
 * @property string|null $status
 * @property int|null $date_created
 * @property string|null $old_slug
 * @property int|null $date_updated
 *
 * @package App\Models
 */
class Tag extends Model
{
	protected $table = 'table_tags';
	public $timestamps = false;

	protected $casts = [
		'numb' => 'int',
		'date_created' => 'int',
		'date_updated' => 'int'
	];

	protected $fillable = [
		'photo',
		'options',
		'slugvi',
		'slugen',
		'contenten',
		'contentvi',
		'descen',
		'descvi',
		'nameen',
		'namevi',
		'numb',
		'type',
		'status',
		'date_created',
		'old_slug',
		'date_updated'
	];
}
