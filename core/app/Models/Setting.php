<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Models\Traits\ShortAttributes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Setting
 * 
 * @property int $id
 * @property string|null $options
 * @property string|null $mastertool
 * @property string|null $headjs
 * @property string|null $bodyjs
 * @property string|null $namevi
 * @property string|null $nameen
 * @property string|null $analytics
 *
 * @package App\Models
 */
class Setting extends Model
{
    use ShortAttributes;

	protected $table = 'table_setting';
	public $timestamps = false;

	protected $fillable = [
		'options',
		'mastertool',
		'headjs',
		'bodyjs',
		'namevi',
		'nameen',
		'analytics'
	];
}
