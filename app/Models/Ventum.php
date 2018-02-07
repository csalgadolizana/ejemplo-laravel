<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 06 Feb 2018 02:54:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Ventum
 * 
 * @property int $idventa
 * @property \Carbon\Carbon $fecha_venta
 * @property int $valor
 *
 * @package App\Models
 */
class Ventum extends Eloquent
{
	protected $primaryKey = 'idventa';
	public $timestamps = false;

	protected $casts = [
		'valor' => 'int'
	];

	protected $dates = [
		'fecha_venta'
	];

	protected $fillable = [
		'fecha_venta',
		'valor'
	];
}
