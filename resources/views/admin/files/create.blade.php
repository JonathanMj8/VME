@extends('layouts.dashboard')
@section('titulos')
Admin|Subir
@endsection
@section('content')
<div class="container-fluid">
    <div class="card flex-container">
        <br>
        <h2>Subir Memorias de Estadías</h2>
        <div class="card-body">
            <form action="{{route('admin.files.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group container">
                    <input class="form-control" type="text" name="Titulo" placeholder="Título"><br>
                    <input class="form-control" type="text" name="Autor" placeholder="Autor"><br>
                    <input class="form-control" type="text" name="Año" placeholder="Año"><br>
                    <select class="form-control" name="Carrera" placeholder="Carrera">
                        @foreach ($memorias as $item)
                        <option value="{{$item-> id_carreras}}">{{$item->Nombre}}</option>
                        @endforeach
                    </select>
                    <input type="file" name="pdf">
                    @error('file')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <br>
                <button type="submit" class="btn btn-primary"> Subir </button>
            </form>
        </div>
    </div>
</div>
@endsection