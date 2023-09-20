<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Newsletter
 * 
 * @property int $id
 * @property string|null $fullname
 * @property string|null $file_attach
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $subject
 * @property string|null $content
 * @property string|null $notes
 * @property string|null $confirm_status
 * @property string|null $address
 * @property string|null $type
 * @property string|null $status
 * @property int|null $date_created
 * @property int|null $date_updated
 * @property int|null $numb
 *
 * @package App\Models
 */
class Newsletter extends Model
{
	protected $table = 'table_newsletter';
	public $timestamps = false;

	protected $casts = [
		'date_created' => 'int',
		'date_updated' => 'int',
		'numb' => 'int'
	];

	protected $fillable = [
		'fullname',
		'file_attach',
		'email',
		'phone',
		'subject',
		'content',
		'notes',
		'confirm_status',
		'address',
		'type',
		'status',
		'date_created',
		'date_updated',
		'numb'
	];
}
