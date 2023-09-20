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
 * Class News
 * 
 * @property int $id
 * @property int|null $id_list
 * @property int|null $id_item
 * @property int|null $id_cat
 * @property int|null $id_sub
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
 * @property int|null $numb
 * @property string|null $status
 * @property string|null $type
 * @property int|null $date_created
 * @property int|null $date_updated
 * @property int|null $view
 * @property string|null $link_video
 *
 * @package App\Models
 */
class News extends Model
{
    use HasFactory, ShortAttributes, ScopeAttribute;

	protected $table = 'table_news';
	public $timestamps = false;

	protected $casts = [
		'id_list' => 'int',
		'id_item' => 'int',
		'id_cat' => 'int',
		'id_sub' => 'int',
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
		'numb',
		'status',
		'type',
		'date_created',
		'date_updated',
		'view',
		'link_video'
	];

    public function list(){
        return $this->belongsTo(NewsList::class, "id_list", "id");
    }
}
