<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NewsTag
 * 
 * @property int $id
 * @property int|null $id_parent
 * @property int|null $id_tags
 *
 * @package App\Models
 */
class NewsTag extends Model
{
	protected $table = 'table_news_tags';
	public $timestamps = false;

	protected $casts = [
		'id_parent' => 'int',
		'id_tags' => 'int'
	];

	protected $fillable = [
		'id_parent',
		'id_tags'
	];
}
