<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CommentVideo
 * 
 * @property int $id
 * @property int|null $id_parent
 * @property string|null $photo
 * @property string|null $video
 *
 * @package App\Models
 */
class CommentVideo extends Model
{
	protected $table = 'table_comment_video';
	public $timestamps = false;

	protected $casts = [
		'id_parent' => 'int'
	];

	protected $fillable = [
		'id_parent',
		'photo',
		'video'
	];
}
