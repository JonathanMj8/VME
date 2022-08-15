@extends('layouts.plantilla')
@section('titulos')
Iniciar Sesion
@endsection

@section('login')
<div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
                <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="inicio">
                        <div class="">
                            <div class="card-header ">
                                <h3 class="header text-center">{{ __('Iniciar sesión') }}</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text  bg-success" style="color: white;"><b>{{ __('Correo') }}</b>
                                        <i class="nc-icon nc-single-02"></i>
                                    </span>
                                </div>
                                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email"
                                    name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div><br>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-success" style="color: white;"><b>{{ __('Contraseña') }}</b>
                                        <i class="nc-icon nc-single-02"></i>
                                    </span>
                                </div>
                                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                    type="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div><br>
                            <div class="input-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" name="remember" type="checkbox" value=""
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <span class="form-check-sign"></span>
                                        {{ __('Recordar') }}
                                    </label>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="form-check">
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
                        </div>
                        <br>
                        <div class="card-footer">
                            <div class="text-center">
                                <button type="submit"
                                    class="btn btn-success bg-success"><b>{{ __('Iniciar sesión') }}</b></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection