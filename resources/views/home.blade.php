@extends('layouts.plantilla')
@section('titulos')
    Inicio
@endsection
@section('inicio')
<div class="container">
    <div class="row">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://raw.githubusercontent.com/JonathanMj8/ImagenesVME/master/assets/delfin.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://raw.githubusercontent.com/JonathanMj8/ImagenesVME/master/assets/titulacion.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://raw.githubusercontent.com/JonathanMj8/ImagenesVME/master/assets/delfin.png" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6 inicio">
            <p class="card-text lh-lg text-justify ">
                <b>Objetivos de Calidad: </b>
                <br> 
                El principal objetivo de calidad de este proyecto es dar acceso a los estudiantes de la Universidad
                Tecnológica de Nayarit para consultar memorias de estadías por medio de un sitio web dinámico,
                implementando buenas prácticas de seguridad para los datos y las memorias de cada uno de los
                estudiantes.
                <br><br> 
                <b>Organigrama:</b>
                <br> 
                Líder del Proyecto: Carlos Daniel Rosales Pérez. <br>
                Programador: Juan Pablo Sánchez Lomelí. <br>
                Programador Auxiliar: Jonathan Alejandro Meza Enciso. <br>
                Diseñador: José Manuel Ramos Cebrera. <br>
                Auxiliar General: Johan Alberto Sotero Matias. <br>
            </p>
        </div>
        <div class="col-12 col-md-6 col-lg-6 img-bsa">
            <img src="https://raw.githubusercontent.com/JonathanMj8/ImagenesVME/master/assets/organigrama.png" class="img-fluid" alt="...">
        </div>
    </div>
</div>
<br>
<div id="map"></div>
<!-- PIE DE PAGINA -->
@endsection