<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Models\Traits\ScopeAttribute;
use App\Models\Traits\ShortAttributes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Static
 * 
 * @property int $id
 * @property string|null $photo
 * @property string|null $photo2
 * @property string|null $options
 * @property string|null $slugvi
 * @property string|null $slugen
 * @property string|null $contenten
 * @property string|null $contentvi
 * @property string|null $descen
 * @property string|null $descvi
 * @property string|null $nameen
 * @property string|null $namevi
 * @property string|null $file_attach
 * @property string|null $type
 * @property string|null $status
 * @property int|null $date_created
 * @property string|null $old_slug
 * @property int|null $date_updated
 *
 * @package App\Models
 */
class StaticModel extends Model
{
    use ShortAttributes, ScopeAttribute;
	protected $table = 'table_static';
	public $timestamps = false;

	protected $casts = [
		'date_created' => 'int',
		'date_updated' => 'int'
	];

	protected $fillable = [
		'photo',
		'photo2',
		'options',
		'slugvi',
		'slugen',
		'contenten',
		'contentvi',
		'descen',
		'descvi',
		'nameen',
		'namevi',
		'file_attach',
		'type',
		'status',
		'date_created',
		'old_slug',
		'date_updated'
	];
}
