<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Photo
 * 
 * @property int $id
 * @property string|null $photo
 * @property string|null $contenten
 * @property string|null $contentvi
 * @property string|null $descen
 * @property string|null $descvi
 * @property string|null $nameen
 * @property string|null $namevi
 * @property string|null $link
 * @property string|null $link_video
 * @property string|null $options
 * @property string|null $type
 * @property string|null $act
 * @property int|null $numb
 * @property string|null $status
 * @property int|null $date_created
 * @property int|null $date_updated
 *
 * @package App\Models
 */
class Photo extends Model
{
	protected $table = 'table_photo';
	public $timestamps = false;

	protected $casts = [
		'numb' => 'int',
		'date_created' => 'int',
		'date_updated' => 'int'
	];

	protected $fillable = [
		'photo',
		'contenten',
		'contentvi',
		'descen',
		'descvi',
		'nameen',
		'namevi',
		'link',
		'link_video',
		'options',
		'type',
		'act',
		'numb',
		'status',
		'date_created',
		'date_updated'
	];
}
