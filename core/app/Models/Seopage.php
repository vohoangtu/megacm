<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Seopage
 * 
 * @property int $id
 * @property string|null $photo
 * @property string|null $options
 * @property string|null $type
 * @property string|null $titlevi
 * @property string|null $keywordsvi
 * @property string|null $descriptionvi
 * @property string|null $titleen
 * @property string|null $keywordsen
 * @property string|null $descriptionen
 *
 * @package App\Models
 */
class Seopage extends Model
{
	protected $table = 'table_seopage';
	public $timestamps = false;

	protected $fillable = [
		'photo',
		'options',
		'type',
		'titlevi',
		'keywordsvi',
		'descriptionvi',
		'titleen',
		'keywordsen',
		'descriptionen'
	];
}
