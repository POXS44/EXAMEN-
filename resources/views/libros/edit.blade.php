@extends('layouts.plantillabase')

@section('contenido')
<h1> Crear registros</h1>

<form action="/Libros/{{$Libros->id}}" method="post">
@csrf
@method('PUT')
<div class="mb-3">
        <label for="" class="form-label">Titulo</label>
        <input type="text" id="codigo" name="codigo" class="form-control" tabindex="1" value="{{$Libros->codigo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Editorial</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control" tabindex="2" value="{{$Libros->descripcion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Autor</label>
        <input type="number" id="cantidad" name="cantidad" class="form-control" tabindex="3" value="{{$Libros->cantidad}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Edicion</label>
        <input type="number" id="precio" name="precio" step="any" class="form-control" tabindex="4" value="{{$Libros->precio}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha</label>
        <input type="number" id="precio" name="precio" step="any" class="form-control" tabindex="5" value="{{$Libros->precio}}">
    </div>
    <a href="/Libros" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection