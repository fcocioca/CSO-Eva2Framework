@extends('layouts.master')
@section('title','Bucar productos')
@section('header')
<h2>Busqueda </h2>
@stop


@section('content')
<hr>
<div class="row">
   

    


    <div class="col-3">
       <div class="card" style="whdth:  20rem;">
       <div class="card-body">
       
       <form method="POST">
       
       <label for="id" class="form-label">Busqueda</label>
      
       <input type="text" class="form-control" id="id" name="id" value="">


        
           <div class="btn-group" role="group" aria-label="Basic mixed styles example">
           <div class="card-footer">    
                     
           <a href="/verProductosSucursales/{id}" class="btn btn-primary">Buscar</a>
        
                    </div>
                    </div>
                </div>
            </div>
           
       </div>
 
      
    
      
       
    @stop