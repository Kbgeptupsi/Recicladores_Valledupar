@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card mb-3">
                        {{-- verificar la ruta de la imagen --}}
                        <img src="data:image/png;base64,iVBO
                        Rw0KGgoAAAANSUhEUgAAAOAAAADhCAMAAADmr0l2AAABqlBMVEX////y
                        kgDjBxO/FSIAcLgAcrnfAAABdrzhAAABecEBd8AAfcMAa7PVDRoAf8YAfsHKEh4AktcAh8s
                        BZ7EBhs3eCBQAi9DcChcBYq3RDhzwxMfZAADhUlkBktgAm97YChfNEB3/+frEFB/kAAD4///5szXviwDOAAD/6ev/
                        //r4kgD/4uX/9PblAA70o6j///Xoa3F9ttrI3+7t/P/5rCvymAzvw8XkP0j6u7/tfILxk5jfIyzgSU/FAAC4AAClwtarzufe7/he
                        mcW5AA73tbi93u6RxOOp1Op2uuBGns8pjsska6xDf7OXudbN1trx4tP91dgAVKAASp94a2HomSjgn1Hjs3vz2LTjMDuogE3jqGom
                        ndkAVprBiDLwrUTy27gnW5Jku+VEYn/wbSKt3/RrbHHjLxWafV/3jzHoVCHRjSv7pDUzYYvjkRxTZ3bwfCzreHCxhj2Nz+6Je2bU
                        OB7NjDffXCdNcId2dnSZgFToc3nSRx/yWGH9pa3tiY7icCzSX2Hei4fUbnVQkMB2fWxBdpr71J35wniMg2X+8db606GXYGafIyzJb3
                        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
                        RF4psp74Tz5d24irEYz5fWk4I+iIcFIcNIbmMx+tCIY8HJgoNJ0x0nO8Awd/S42lri2mfbVH9xblSsaskYH6xCOrsm1oogbeA10AoxtlBF5PwGjteXcYrEpopN
                        ZxQXezACL4YH61rMa3yEwo8yUpxlEouY+KpO0a+7vAI6QWhxEXghSKPGcQYd8XzjWeM49+GdMHdrrXFzLaivyDqDktN8IQ4oZJgfkVdIY8WpbgZZ/Ap5dlWopB
                        c1muXp45rXSC49Gldhs6e/P7vlCSX8O+MBAFGC+HJs0w0woXZiBHS8TXefKBECwV4g47mcEVUXrn16GexiT4Yt7SYluUnRiuRgNaZhJEmlo3wGJ0GdQuFUgHEk
                        zzOGLSdPLxBRXN1p5hcPuCUUITQYx62pfw28OM5yMoME5CrFfL8tZ0EOCRKBXyZTQpQkbxKeW4mdoqNTRRf6+qAu930uh38zC7BumRyeZFlYp7XYAl1eNh4E8X
                        majRRgeVmfLGxiQLzvR29v46nn9nBD9IxiX/lx8uudJGFRy3E9aQeh6ixJhqfF0rzcFR+J49TBmzhZIFH6l3Fg86ZgAj+MG62mNnt9+VyEGoBKQol1g2TRkDUE
                        u5UQ0IRd+AssQM7ShjePG7FVZ2FVJjRDzopdJmuz9Ov7BC/v4bkxa6lh2l+Kz9b/WD8QiH+l6yhK0CT2wlgBxZq662d34/OlTdv7t69/c
                        fr3d3dFeBmjZVbu28OeU+h9yveYuzph9EJhd6AFTjdvJlOt43WaEtvbKyA2i3w3b21cohhfOD3cWwxs3++14EfmdDd12CWRh9Ta2Vld/f1H
                        3ffAJb8PCxT5weefIn3RzatvysrbaNt421cDLxuo1XzottHfukBtJirf9rTT/gDAodqaHblRGcofgu38vasP2R3dGP39gnVOMXnz/w2nv9e
                        755GDkm8eDpr1/wUcKI77RkS/7Vt/b0bEv+zb36+E8I2nf/eGZG/d/wIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiA
                        IgiAIgiAIgiAIgiCI4/B/iQ/cOCMZ8B0AAAAASUVORK5CYII=" width="100" height="250" class="card-img-top" alt="Logo Alcaldia">
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
