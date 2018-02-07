<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 06 Feb 2018 02:54:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Login
 * 
 * @property int $id
 * @property string $username
 * @property string $password
 *
 * @package App\Models
 */
class Login extends Eloquent
{
	protected $table = 'login';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'password'
	];
}
