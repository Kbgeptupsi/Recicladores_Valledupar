@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Iniciar sesion') }}</div>
                    <div class="card mb-3">
                        <img src="..\resources\images\logo.jpg" class="card-img-top" alt="Logo Alcaldia">
                        <div class="card-body">
                          <h3  style="text-align:center" class="card-title">Secretaria De Desarrollo, Ambiente y Turismo</h3>
                          <p> </p> 
                          <h4 style="text-align: center">Inicia Sesión</h4>
                        </div>
                      </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                        
                                <div class="col-md-6">
                                    <input id="email" type="text"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Nombre usuario">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                               
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Contraseña">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button   style="--bs-btn-padding-y: .55rem;  --bs-btn-padding-x: 120px; --bs-btn-font-size: .85rem; --bs-btn-bg: var(--bs-green); --bs-btn-color: var(--bs-white);" type="submit" class="btn">
                                        {{ __('Iniciar Sesión') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
