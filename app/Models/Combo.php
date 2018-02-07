<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 06 Feb 2018 02:54:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Combo
 * 
 * @property int $idcombo
 * @property string $nombre
 * @property int $lleva
 * @property int $paga
 *
 * @package App\Models
 */
class Combo extends Eloquent
{
	protected $table = 'combo';
	protected $primaryKey = 'idcombo';
	public $timestamps = false;

	protected $casts = [
		'lleva' => 'int',
		'paga' => 'int'
	];

	protected $fillable = [
		'nombre',
		'lleva',
		'paga'
	];
}
