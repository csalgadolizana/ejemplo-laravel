<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 06 Feb 2018 02:54:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Personal
 * 
 * @property int $idpersonal
 * @property string $nombre
 * @property string $apellido
 * @property \Carbon\Carbon $fecha_nacimiento
 *
 * @package App\Models
 */
class Personal extends Eloquent
{
	protected $table = 'personal';
	protected $primaryKey = 'idpersonal';
	public $timestamps = false;

	protected $dates = [
		'fecha_nacimiento'
	];

	protected $fillable = [
		'nombre',
		'apellido',
		'fecha_nacimiento'
	];
}
