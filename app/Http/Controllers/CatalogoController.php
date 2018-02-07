<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catalogo;
// use App\Models\Compra;

class CatalogoController extends Controller
{

    public function index(){
        $catalogo = catalogo::orderBy('id','asc')->get();
		return View('catalogo.index')->with('catalogos',$catalogo);
    }

    public function create()
	{
		return View('catalogo.create');
    }
    
    public function show($id = null)
	{
        $catalogo = catalogo::find($id);
		return View('catalogo.show')->with('catalogo',$catalogo);
	}


    public function save(Request $request){
        $catalogo = new catalogo();
		$catalogo->nombreproducto = $request->get('nombre');
        $catalogo->precio = $request->get('precio');
		if ($catalogo->save()) {
            $request->session()->flash('message', 'Guardado correctamente!!');
            $request->session()->flash('class', 'success');
		} else {
            $request->session()->flash('message', 'Ha ocurrido un error!');
            $request->session()->flash('class', 'danger');
		}
		return View('catalogo.create');
    }

    public function destroy($id,Request $request)
	{
		$catalogo = catalogo::find($id);
		if ($catalogo->delete()) {
			$request->session()->flash('message','Eliminado correctamente!');
			$request->session()->flash('class','success');
		} else {
			$request->session()->flash('message','Ha ocurrido un error!');
			$request->session()->flash('class','danger');
		}
		$catalogo = catalogo::orderBy('id','asc')->get();
		return View('catalogo.index')->with('catalogos',$catalogo);
    }
    
    public function showUpdate($id = null)
	{
        $catalogo = catalogo::find($id);
		return View('catalogo.edit')->with('catalogo',$catalogo);
    }

    public function update($id ,Request $request)
	{
        $catalogo = catalogo::find($id);
        $catalogo->nombreproducto = $request->get('nombreproducto');
        $catalogo->precio = $request->get('precio');
		if ($catalogo->update()) {
			$request->session()->flash('message','Actualizado correctamente!');
			$request->session()->flash('class','success');
		} else {
			$request->session()->flash('message','Ha ocurrido un error!');
			$request->session()->flash('class','danger');
		}
		$catalogo = catalogo::find($id);
		return View('catalogo.edit')->with('catalogo',$catalogo);
    }
}
