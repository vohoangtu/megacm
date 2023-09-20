<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Member
 * 
 * @property int $id
 * @property bool|null $id_social
 * @property string|null $username
 * @property string|null $password
 * @property string|null $confirm_code
 * @property string|null $avatar
 * @property string|null $fullname
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $address
 * @property bool|null $gender
 * @property string|null $login_session
 * @property string|null $lastlogin
 * @property string|null $status
 * @property int|null $birthday
 * @property int|null $numb
 *
 * @package App\Models
 */
class Member extends Model
{
	protected $table = 'table_member';
	public $timestamps = false;

	protected $casts = [
		'id_social' => 'bool',
		'gender' => 'bool',
		'birthday' => 'int',
		'numb' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'id_social',
		'username',
		'password',
		'confirm_code',
		'avatar',
		'fullname',
		'phone',
		'email',
		'address',
		'gender',
		'login_session',
		'lastlogin',
		'status',
		'birthday',
		'numb'
	];
}
