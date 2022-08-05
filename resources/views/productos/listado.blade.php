@extends('layouts.master')
@section('title','lista productos')
@section('header')
<h2>Listado </h2>
@stop


@section('content')
<hr>
<div class="container mt-3">
  <h2>Listado Productos</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre Producto</th>
        <th>Codigo</th>
        <th>Categoria</th>
        <th>Descripcion</th>
        <th>Accion</th>
      </tr>
    </thead>
    <tbody>
     @foreach($productos as $producto)
     <tr>
        <td>{{$producto->nombre}}</td>
        <td>{{$producto->coduni}}</td>
        <td>{{$producto->categoria_id}}</td>   
        <td>{{$producto->desc}}</td> 
        <td><a href="" class="btn btn-outline-secondary">Editar</a><a href="/eliminarProductos/{{ $producto->id }}" class="btn btn-outline-danger">Eliminar</a></td>   
       </tr>
       @endforeach
            </tbody>
        </table>
       </div>
       
    @stop