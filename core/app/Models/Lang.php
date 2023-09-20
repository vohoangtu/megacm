<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lang
 * 
 * @property int $id
 * @property string|null $lang_define
 * @property string|null $langvi
 * @property string|null $langen
 * @property int|null $numb
 *
 * @package App\Models
 */
class Lang extends Model
{
	protected $table = 'table_lang';
	public $timestamps = false;

	protected $casts = [
		'numb' => 'int'
	];

	protected $fillable = [
		'lang_define',
		'langvi',
		'langen',
		'numb'
	];
}
