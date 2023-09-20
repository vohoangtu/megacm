<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CommentPhoto
 * 
 * @property int $id
 * @property int|null $id_parent
 * @property string|null $photo
 *
 * @package App\Models
 */
class CommentPhoto extends Model
{
	protected $table = 'table_comment_photo';
	public $timestamps = false;

	protected $casts = [
		'id_parent' => 'int'
	];

	protected $fillable = [
		'id_parent',
		'photo'
	];
}
