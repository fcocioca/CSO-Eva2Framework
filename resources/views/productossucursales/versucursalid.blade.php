@extends('layouts.master')
@section('title','Sucursal x Producto')
@section('header')
<h2>Datos de sucursal consultados por ID </h2>
@stop


@section('content')
<hr>
<div class="container mt-3">
    <h2>Listado Productos</h2>
    <table class="table table-striped">
        <thead>
            <tr>
            <th>Nombre Producto</th>
            <th>Nombre Sucursal</th>
            <th>Valor</th>
            <th>Cantidad disponible</th>
            <th>Accion</th>
            </tr>
        </thead>
        <tbody>
     @foreach($productossucursales as $productosucursal)
     <tr>
        <td>{{$productosucursal->producto->nombre}}</td>
        <td>{{$productosucursal->sucursal->nombre}}</td>
        <td>${{$productosucursal->precio}}</td>
        <td>{{$productosucursal->cantidad}}</td>
        <td><a href="" class="btn btn-outline-secondary">Editar</a><a href="/eliminarProductosSucursales/{{ $productosucursal->id }}" class="btn btn-outline-danger">Eliminar</a></td>    
      
    </tr> 
       @endforeach
      
       </tbody>
    </table>
</div>

       
    @stop