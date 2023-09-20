<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property int|null $id_permission
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
 * @property string|null $user_token
 * @property string|null $lastlogin
 * @property string|null $status
 * @property bool|null $role
 * @property string|null $secret_key
 * @property int|null $birthday
 * @property int|null $numb
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'table_user';
	public $timestamps = false;

	protected $casts = [
		'id_permission' => 'int',
		'gender' => 'bool',
		'role' => 'bool',
		'birthday' => 'int',
		'numb' => 'int'
	];

	protected $hidden = [
		'password',
		'user_token',
		'secret_key'
	];

	protected $fillable = [
		'id_permission',
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
		'user_token',
		'lastlogin',
		'status',
		'role',
		'secret_key',
		'birthday',
		'numb'
	];
}
