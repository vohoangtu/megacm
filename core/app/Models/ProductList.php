<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductList
 * 
 * @property int $id
 * @property string|null $slugvi
 * @property string|null $slugen
 * @property string|null $old_slug
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
 * @property int|null $date_updated
 *
 * @package App\Models
 */
class ProductList extends Model
{
	protected $table = 'table_product_list';
	public $timestamps = false;

	protected $casts = [
		'numb' => 'int',
		'date_created' => 'int',
		'date_updated' => 'int'
	];

	protected $fillable = [
		'slugvi',
		'slugen',
		'old_slug',
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
		'date_updated'
	];
}
