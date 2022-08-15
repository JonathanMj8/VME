@extends('layouts.dashboard')

@section('titulo')
	Ver Memorias
@endsection

@section('content')
    <br><br>
    <table class="table"  >
        <thead>
            <tr >
            <th scope="col">Titulo </th>
              <th scope="col">Autor</th>
              <th scope="col">Año</th>
              <th scope="col">Carrera</th>
              <th scope="col">Acciones</th>
            </tr>
      </thead>
      <tbody>
        @foreach($memorias as $itememorias)
            <tr>
                <td>{{$itememorias->Titulo}}</td>
                <td>{{$itememorias->Autor}}</td>
                <td>{{$itememorias->Año}}</td>
                <td>{{$item->Carrera}}</td>   
            </tr>
        @endforeach  
    </table>
@endsection