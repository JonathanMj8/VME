@extends('plantilla')
@section('titulo')
	Subir Memorias
@endsection
@section('create')
            <section class="header-bs">
                <div>
                    <a id="boton" href="/"><img class="img_header" src="imagenes/logo.JPEG"/></a>
                    <h1 class="site-heading text-center text-faded d-none d-lg-block">
                            <span class="site-heading-upper text-primary mb-3">VISOR DE MEMORIAS DE ESTADÍAS</span>
                            <h3 class="card-text text-center fw-bold text-danger">ADMINISTRADOR</h3>
                    </h1>
                </div>
            </section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h1>Subir Imagenes</h1>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('memorias.index')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="file" name="file" id="" accept="image/*"><br>
                                    @error('file')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                    <br>
                                <input class="form-control" type="text" name="autor" placeholder="Autor"><br> 
                                <input class="form-control"  type="text" name="titulo" placeholder="Título"><br> 
                                <input class="form-control"  type="text" name="año" placeholder="Año"><br> 
                                <input class="form-control"  type="text" name="categoria" placeholder="Categoria"><br> 
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Subir </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection