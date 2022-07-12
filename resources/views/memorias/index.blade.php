@extends('plantilla')

@section('section')
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
    <div class="card-body text-center" >
        <h1 class="card-title">MEMORIAS DE ESTADÍAS</h1>
        <div class="ldiv"></div>
        <h4 class="tn2"></h4><br> 
    </div>

    {{--buscador--}}
        <div class="container-fluid">
            <form class="d-flex" >
                <input name="buscarpor" class="form-control me-2" type="search" placeholder="Ingresa una categoría" aria-label="Search" >
                <button class="btn btn-outline-success" type="submit" >Buscar</button>            
            </form>
        </div>
        <div class="container contenedor-bs">
            <div class="row">
                @foreach($memorias as $itememorias)
                    <div class="col-12 col-md-6 col-lg-4">
                         <img src="{{$itemproductos->url}}" alt="...">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-center">{{$itememorias->Autor}}</h5>
                                <p class="card-text  text-center lh-lg ">{{$itememorias->Titulo}}</p>
                                <p class="card-text fw-bold">Año: ${{$itememorias->Año}}</p>
                                <p class="card-text fw-bold text-info ">Categoria:  {{$itememorias->Categoria}}</p>  
                            </div>                         
                        </div>
                    </div>
                @endforeach  
            </div>
        </div>
    <br><br> 
@endsection
