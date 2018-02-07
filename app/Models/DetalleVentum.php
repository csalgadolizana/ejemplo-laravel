<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 06 Feb 2018 02:54:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DetalleVentum
 * 
 * @property int $id_detalle
 * @property int $id_venta
 * @property int $id_producto
 * @property int $id_promocion
 * @property int $id_combo
 * @property int $cantidad_producto
 *
 * @package App\Models
 */
class DetalleVentum extends Eloquent
{
	protected $primaryKey = 'id_detalle';
	public $timestamps = false;

	protected $casts = [
		'id_venta' => 'int',
		'id_producto' => 'int',
		'id_promocion' => 'int',
		'id_combo' => 'int',
		'cantidad_producto' => 'int'
	];

	protected $fillable = [
		'id_venta',
		'id_producto',
		'id_promocion',
		'id_combo',
		'cantidad_producto'
	];
}
