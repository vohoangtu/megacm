<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 * 
 * @property int $id
 * @property string|null $fullname
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $file_attach
 * @property string|null $subject
 * @property string|null $content
 * @property string|null $notes
 * @property string|null $address
 * @property string|null $status
 * @property int|null $date_created
 * @property int|null $date_updated
 * @property int|null $numb
 *
 * @package App\Models
 */
class Contact extends Model
{
	protected $table = 'table_contact';
	public $timestamps = false;

	protected $casts = [
		'date_created' => 'int',
		'date_updated' => 'int',
		'numb' => 'int'
	];

	protected $fillable = [
		'fullname',
		'email',
		'phone',
		'file_attach',
		'subject',
		'content',
		'notes',
		'address',
		'status',
		'date_created',
		'date_updated',
		'numb'
	];
}
