<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Models\Traits\ScopeAttribute;
use App\Models\Traits\ShortAttributes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $id
 * @property int|null $id_list
 * @property int|null $id_item
 * @property int|null $id_cat
 * @property int|null $id_sub
 * @property int|null $id_brand
 * @property string|null $photo
 * @property string|null $photo2
 * @property string|null $options
 * @property string|null $slugvi
 * @property string|null $slugen
 * @property string|null $old_slug
 * @property string|null $contenten
 * @property string|null $contentvi
 * @property string|null $descen
 * @property string|null $descvi
 * @property string|null $nameen
 * @property string|null $namevi
 * @property string|null $code
 * @property float|null $regular_price
 * @property float|null $discount
 * @property float|null $sale_price
 * @property int|null $numb
 * @property string|null $status
 * @property string|null $type
 * @property int|null $date_created
 * @property int|null $date_updated
 * @property int|null $view
 * @property string $size
 * @property string $color
 * @property string $xuatxu
 *
 * @package App\Models
 */
class Product extends Model
{
    use HasFactory, ScopeAttribute, ShortAttributes;

	protected $table = 'table_product';
	public $timestamps = false;

	protected $casts = [
		'id_list' => 'int',
		'id_item' => 'int',
		'id_cat' => 'int',
		'id_sub' => 'int',
		'id_brand' => 'int',
		'regular_price' => 'float',
		'discount' => 'float',
		'sale_price' => 'float',
		'numb' => 'int',
		'date_created' => 'int',
		'date_updated' => 'int',
		'view' => 'int'
	];

	protected $fillable = [
		'id_list',
		'id_item',
		'id_cat',
		'id_sub',
		'id_brand',
		'photo',
		'photo2',
		'options',
		'slugvi',
		'slugen',
		'old_slug',
		'contenten',
		'contentvi',
		'descen',
		'descvi',
		'nameen',
		'namevi',
		'code',
		'regular_price',
		'discount',
		'sale_price',
		'numb',
		'status',
		'type',
		'date_created',
		'date_updated',
		'view',
		'size',
		'color',
		'xuatxu'
	];
}
