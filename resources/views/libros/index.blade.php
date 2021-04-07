
@extends('layouts.plantillabase')

@section('contenido')
<a href="Libros/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">

    <thead>
    <tr>
    <th>ID</th>
    <th>Código</th>
    <th>Descripción</th>
    <th>Cantidad</th>
    <th>Precio</th>
    <th>Acciones</th>

    </tr>
    </thead>

    <tbody>
        @foreach($articulos as $articulo)
            <tr>
                <td>{{$Libros->Titulo}}</td>
                <td>{{$Libros->Editorial}}</td>
                <td>{{$Libros->Autor}}</td>
                <td>{{$Libros->Edicion}}</td>
                <td>{{$Libros->Fecha}}</td>

                <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary">Down</button>
                      
                     <button type="button" class="btn btn-primary">Up</button>
                </div>
                </td>
                <td>
                    <form action="{{ route ('Libros.destroy', $Libros->Titulo)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="/Libros/{{ $Libros->Titulo }}/edit" class="btn btn-info">Editar</a>\
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection            