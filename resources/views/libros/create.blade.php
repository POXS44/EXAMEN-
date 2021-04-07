@extends('layouts.plantillaBase')

@section('contenido')

    <h1>CREAR REGISTRO</h1>

    <form action="/Libros" method="POST">

        @csrf()

        <div class="mb-3">
            <label for="" class="form-label">Titulo</label>
            <input type="text" id="Titulo" name="Titulo" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Editorial</label>
            <input type="text" id="Editorial" name="Editorial" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Autor</label>
            <input type="text" id="Autor" name="Autor" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Edicion</label>
            <input type="text" id="Edicion" name="Edicion" step="any" value="0.00" class="form-control" tabindex="4">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fecha</label>
            <input type="text" id="text" name="text" step="any" value="0.00" class="form-control" tabindex="5">
        </div>
        <a href="/Libros" class="btn btn-secondary" tabindex="5"> Cancelar </a>
        <button type="submit" class="btn btn-primary" tabindex="4"> Guardar </button>

    </form>

@endsection