<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 06 Feb 2018 02:54:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Compra
 * 
 * @property int $id
 * @property int $idusuario
 * @property int $cantidad
 * @property int $precio
 * @property int $idcatalogo
 *
 * @package App\Models
 */
class Compra extends Eloquent
{
	protected $table = 'compra';
	public $timestamps = false;

	protected $casts = [
		'idusuario' => 'int',
		'cantidad' => 'int',
		'precio' => 'int',
		'idcatalogo' => 'int'
	];

	protected $fillable = [
		'idusuario',
		'cantidad',
		'precio',
		'idcatalogo'
	];
}
