@extends('layouts.dashboard')
@section('titulos')
    Registro de Usuarios
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form method="POST" action="{{ route('register') }}" >
                @csrf
                <div class="card card-login">
                    <div class="card-header ">
                        <div class="card-header ">
                            <h3 class="header text-center">{{ __('Registro de Usuarios') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Nombre: ') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Correo:') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Contraseña:') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Confirmar contraseña:') }}</label>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="mb-3">
                            <label class=""></label>
                            <div class="">
                                <label class="form-check-label">
                                    @csrf
                                    {!! htmlFormSnippet([
                                    "theme" => "light",
                                    "size" => "normal",
                                    "tabindex" => "3",
                                    "callback" => "callbackFunction",
                                    "expired-callback" => "expiredCallbackFunction",
                                    "error-callback" => "errorCallbackFunction",
                                    ]) !!}
                                </label>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection