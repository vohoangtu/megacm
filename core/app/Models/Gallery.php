<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gallery
 * 
 * @property int $id
 * @property int|null $id_parent
 * @property string|null $photo
 * @property string|null $hash
 * @property string|null $nameen
 * @property string|null $namevi
 * @property int|null $id_color
 * @property string|null $file_attach
 * @property string|null $link_video
 * @property int|null $numb
 * @property string|null $type
 * @property string|null $com
 * @property string|null $kind
 * @property string|null $val
 * @property string|null $status
 * @property int|null $date_created
 * @property int|null $date_updated
 *
 * @package App\Models
 */
class Gallery extends Model
{
	protected $table = 'table_gallery';
	public $timestamps = false;

	protected $casts = [
		'id_parent' => 'int',
		'id_color' => 'int',
		'numb' => 'int',
		'date_created' => 'int',
		'date_updated' => 'int'
	];

	protected $fillable = [
		'id_parent',
		'photo',
		'hash',
		'nameen',
		'namevi',
		'id_color',
		'file_attach',
		'link_video',
		'numb',
		'type',
		'com',
		'kind',
		'val',
		'status',
		'date_created',
		'date_updated'
	];
}
