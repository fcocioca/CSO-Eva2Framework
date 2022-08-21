<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imageController extends Controller
{
    public function store(Request $request){
        //validamos
        
        $this->validate($request,[
            'image' => 'required',

        ]);
        $imagen =$request->file('image')
        //creamos
        $image = new Image();
        $image->imagen = $request->image;
        $image->save();

        //obtenemos registros
        $producto = Producto::get();

        //enviamos a la vista principal
        return view('productos/listado', [
            'productos' => $producto
        ]);
    }
    


}
