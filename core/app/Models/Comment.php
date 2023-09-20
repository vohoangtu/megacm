<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * 
 * @property int $id
 * @property int|null $id_parent
 * @property int|null $id_variant
 * @property int|null $star
 * @property string|null $title
 * @property string|null $content
 * @property string|null $fullname
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $poster
 * @property string|null $status
 * @property string|null $type
 * @property int|null $date_posted
 *
 * @package App\Models
 */
class Comment extends Model
{
	protected $table = 'table_comment';
	public $timestamps = false;

	protected $casts = [
		'id_parent' => 'int',
		'id_variant' => 'int',
		'star' => 'int',
		'date_posted' => 'int'
	];

	protected $fillable = [
		'id_parent',
		'id_variant',
		'star',
		'title',
		'content',
		'fullname',
		'phone',
		'email',
		'poster',
		'status',
		'type',
		'date_posted'
	];
}
