<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 06 Feb 2018 02:54:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Catalogo
 * 
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $nombreproducto
 * @property int $precio
 *
 * @package App\Models
 */
class Catalogo extends Eloquent
{
	protected $table = 'Catalogo';
	public $timestamps = false;

	protected $casts = [
		'precio' => 'int'
	];

	protected $fillable = [
		'nombreproducto',
		'precio'
	];
}
