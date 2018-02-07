<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catalogo extends Model
{
    protected $table = 'catalogos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nombreproducto', 'precio',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
