@extends('plantilla')

@section('content')
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<div class="conteiner-fluid">
            <div class="container-fluid">
            </div>
            <div class="row">
                <div class="col-4 "></div>
                <img class="img-responsive" src="imagenes/construccion.jpg">
                <div class="col-4 "></div>
            </div>
    </div>

@endsection
