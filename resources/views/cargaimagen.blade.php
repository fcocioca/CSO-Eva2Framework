@extends('layouts.master')
@section('title','Carga Imagen')
@section('content')
<br>
<div class="container p-5 my-5 border">
<h2> Storage</h2>
<p>Carga una Imagen</p>

<form action="{{ url('/productossucursales')}}" method="POST" enctype="multipart/format" >
        @csrf
      
        <div class="mb-3">
        <label for="image" class="form-label">Carga la Imagen. Solo formato .jpg</label>
            <input type="file" class="form-control" id="image" name="image" accept=".jpg">
        </div>
   
        <button type="submit" class="btn btn-primary">Cargar Imagen</button>




</div>



<div class="container p-5 my-5 border">



</div>

@stop