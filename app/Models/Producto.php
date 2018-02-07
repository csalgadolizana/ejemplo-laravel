<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 06 Feb 2018 02:54:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Producto
 * 
 * @property int $idproducto
 * @property string $nombre
 * @property int $stock
 * @property \Carbon\Carbon $fecha_entrada
 *
 * @package App\Models
 */
class Producto extends Eloquent
{
	protected $table = 'producto';
	protected $primaryKey = 'idproducto';
	public $timestamps = false;

	protected $casts = [
		'stock' => 'int'
	];

	protected $dates = [
		'fecha_entrada'
	];

	protected $fillable = [
		'nombre',
		'stock',
		'fecha_entrada'
	];
}
