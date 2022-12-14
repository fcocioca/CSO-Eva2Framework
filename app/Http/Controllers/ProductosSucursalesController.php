<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productosucursal;
use App\Models\Producto;
use App\Models\Sucursal;
use Illuminate\Support\Facade\DB;
class ProductosSucursalesController extends Controller
{
    
    public function index(){
        $productossucursales = Productosucursal::get();

        return view('productossucursales/listado', [
            'productossucursales' => $productossucursales
        ]);
    }
    public function producto(){
        return $this->belongsTo(Producto::class)
        ;
    }
    public function sucursal(){
        return $this->belongsTo(Sucursal::class)
        ;
    }
    public function create(){
        return view('productossucursales/agregar');
    }

    public function store(Request $request){
        //validamos
        $this->validate($request,[
            'precio' => 'required',
            'cantidad' => 'required',
            'productos_id' => 'required',
            'sucursales_id' => 'required'

       ]);

        //creamos
        $productossucursales = new Productosucursal();
        $productossucursales->precio = $request->precio;
        $productossucursales->cantidad = $request->cantidad;
        $productossucursales->productos_id= $request->productos_id;
        $productossucursales->sucursales_id= $request->sucursales_id;
        $productossucursales->save();

        //obtenemos registros
        $productossucursales = Productosucursal::get();

        //enviamos a la vista principal
        return view('productossucursales/listado', [
            'productossucursales' => $productossucursales
        ]);
    }

    public function delete($id){
                   
    
        Productosucursal::where('id', '=', $id)->delete();
         $productossucursales = Productosucursal::get();
    return view('productossucursales/listado', [
        'productossucursales' => $productossucursales
    ]);
        
 }




public function show(){
   // Productosucursal::where('id', '=', $id)->get();
    $productossucursales = Productosucursal::get();
   
       return view('productossucursales/buscador',[
           'productossucursales' => $productossucursales
       ]);
   }



   public function ver($id){
    // Productosucursal::where('id', '=', $id)->get();
     $productossucursales = Productosucursal::where('productossucursales_id',$id);
    
        return view('productossucursales/buscador',[
            'productossucursales' => $productossucursales
        ]);
    }
                               
}
