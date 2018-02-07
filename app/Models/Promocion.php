<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 06 Feb 2018 02:54:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Promocion
 * 
 * @property int $idpromocion
 * @property string $nombre
 * @property int $porce_descuento
 *
 * @package App\Models
 */
class Promocion extends Eloquent
{
	protected $table = 'promocion';
	protected $primaryKey = 'idpromocion';
	public $timestamps = false;

	protected $casts = [
		'porce_descuento' => 'int'
	];

	protected $fillable = [
		'nombre',
		'porce_descuento'
	];
}
