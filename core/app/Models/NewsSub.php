<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NewsSub
 * 
 * @property int $id
 * @property int|null $id_list
 * @property int|null $id_cat
 * @property int|null $id_item
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
 * @property int|null $date_updated
 * @property int|null $date_created
 *
 * @package App\Models
 */
class NewsSub extends Model
{
	protected $table = 'table_news_sub';
	public $timestamps = false;

	protected $casts = [
		'id_list' => 'int',
		'id_cat' => 'int',
		'id_item' => 'int',
		'numb' => 'int',
		'date_updated' => 'int',
		'date_created' => 'int'
	];

	protected $fillable = [
		'id_list',
		'id_cat',
		'id_item',
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
		'date_updated',
		'date_created'
	];
}
