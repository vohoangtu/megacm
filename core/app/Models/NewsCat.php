<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NewsCat
 * 
 * @property int $id
 * @property int|null $id_list
 * @property string|null $slugvi
 * @property string|null $slugen
 * @property string|null $contenten
 * @property string|null $contentvi
 * @property string|null $descen
 * @property string|null $descvi
 * @property string|null $nameen
 * @property string|null $namevi
 * @property string|null $photo
 * @property string|null $options
 * @property int|null $numb
 * @property string|null $status
 * @property string|null $type
 * @property int|null $date_created
 * @property string|null $old_slug
 * @property int|null $date_updated
 *
 * @package App\Models
 */
class NewsCat extends Model
{
	protected $table = 'table_news_cat';
	public $timestamps = false;

	protected $casts = [
		'id_list' => 'int',
		'numb' => 'int',
		'date_created' => 'int',
		'date_updated' => 'int'
	];

	protected $fillable = [
		'id_list',
		'slugvi',
		'slugen',
		'contenten',
		'contentvi',
		'descen',
		'descvi',
		'nameen',
		'namevi',
		'photo',
		'options',
		'numb',
		'status',
		'type',
		'date_created',
		'old_slug',
		'date_updated'
	];
}
