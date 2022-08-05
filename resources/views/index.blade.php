@extends('layouts.master')
@section('title','Inicio')
@section('content')
<br>
<div class="container p-5 my-5 border">
<h2> Bienvenido</h2>
<p>Conoce nuestro stock</p>
<img src="https://st.depositphotos.com/2097531/2163/i/950/depositphotos_21635353-stock-photo-inside-warehouse.jpg" class="rounded img-fluid" alt="Imagen Bodega Stock Online">
</div>
<div class="container p-5 my-5 border">
<h4> Accesos rapidos</h4>
                <a href="/productos/create">Agregar un producto</a>
                <a href="/productossucursales/create">Ingresa Producto a Sucursal</a>   
                
                <a href="/productos">Listar Productos</a>
                <a href="/productossucursales">Listar Productos por Sucursal</a>  
                <a href="/productossucursales/show">Buscar Productos</a>

</div>

@stop