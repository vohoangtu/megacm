<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Seo
 * 
 * @property int $id
 * @property int|null $id_parent
 * @property string|null $com
 * @property string|null $act
 * @property string|null $type
 * @property string|null $titlevi
 * @property string|null $keywordsvi
 * @property string|null $descriptionvi
 * @property string|null $titleen
 * @property string|null $keywordsen
 * @property string|null $descriptionen
 * @property string|null $schemavi
 * @property string|null $schemaen
 *
 * @package App\Models
 */
class Seo extends Model
{
	protected $table = 'table_seo';
	public $timestamps = false;

	protected $casts = [
		'id_parent' => 'int'
	];

	protected $fillable = [
		'id_parent',
		'com',
		'act',
		'type',
		'titlevi',
		'keywordsvi',
		'descriptionvi',
		'titleen',
		'keywordsen',
		'descriptionen',
		'schemavi',
		'schemaen'
	];
}
