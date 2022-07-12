@extends('plantilla')
@section('titulo')
	Visor de Memorias
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
@section('inicio')
    <br><br>
    <div class="container">
        <div class="row" >
            <div class="col" ></div>
            <div class="col align-self-center">
                <img class="img-responsive"  src="imagenes/covid.jpeg">
            </div>       
            <div class="col" ></div>
        </div>
    </div>        
    <table class="table"  >
        <thead>
            <tr >
              <th scope="col">Autor</th>
              <th scope="col">Titulo </th>
              <th scope="col">Año</th>
              <th scope="col">Categoria</th>
            </tr>
      </thead>
      <tbody>
        @foreach($memorias as $itememorias)
            <tr>
                <td>{{$itememorias->Autor}}</td>
                <td>{{$itememorias->Titulo}}</td>
                <td>{{$itememorias->Año}}</td>
                <td>{{$itememorias->Categoria}}</td> 
            </tr>
        @endforeach  
    </table>
@endsection