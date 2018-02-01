<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catalogo;

class CatalogoController extends Controller
{
    //
    public function index(){
        // $cat = new catalogo();
        // $cat ->nombreproducto = 'producto 01';
        // $cat ->precio = 2000;
        // if ($cat->save()) {
        //     print_r('<h2>Salvo</h2>');
        // }
        // else {
        //     print_r('<h2>Nonoono</h2>');
        // }
        $catalogo = catalogo::orderBy('id','DESC')->get();
        // print_r($catalogo);
        // return view('web.index')->with('catalogos',$catalogo);
        return view('web.index')->with('catalogos',$catalogo);
    }
}
