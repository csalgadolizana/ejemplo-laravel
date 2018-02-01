<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate;

class FrontController extends Controller
{
    public function index(){
        $catalogo = Catalogo::orderBy('id','DESC')->get();
        print_r($catalogo);
        return view('web.index');
    }
}
