@extends('plantilla')
@section('titulo')
	Inicio
@endsection
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