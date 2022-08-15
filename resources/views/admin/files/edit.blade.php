@extends('layouts.dashboard')

@section('titulos')
    Admin|Editar
@endsection

@section('content')
<div class="container-fluid">
    <br>
    <h2>Editar Memorias de Estadías</h2>
    <div class="card-body">
        <form action="{{route('admin.files.update', $memorias->id)}}" method="PUT" enctype="multipart/form-data">
            <div class="form-group container">
                <input type="file" name="pdf" value="{{$memorias->url}}">
                @error('file')
                <small class="text-danger">{{$message}}</small>
                @enderror
                <input class="form-control" type="text" name="Titulo" placeholder="Título"  value="{{$memorias->Titulo}}"><br>
                <input class="form-control" type="text" name="Autor" placeholder="Autor"  value="{{$memorias->Autor}}"><br>
                <input class="form-control" type="text" name="Año" placeholder="Año"  value="{{$memorias->Año}}"><br>
                <input class="form-control" type="text" name="Carrera" placeholder="Carrera"  value="{{$memorias->Carrera}}"><br>
                
            </div>
            <br>
            <button type="submit" class="btn btn-primary"> Guardar </button>
        </form>
    </div>
</div>

@endsection