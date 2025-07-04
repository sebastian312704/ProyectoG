@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <script>
            window.location.href = "{{ url('/home') }}";
        </script>
    @endif

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">

                            {{-- Formulario --}}
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="{{ asset('assets/logo.png.png') }}"
                                            style="width: 185px; border-radius: 50%; border: 5px solid #ffffff;"
                                            alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">CREÁ TU CUENTA EN VENNOT FRAGANCES</h4>
                                    </div>

                                    {{-- Mensajes de error --}}
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul class="mb-0">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    {{-- FORMULARIO DE REGISTRO --}}
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-outline mb-4">
                                            <label for="name" class="form-label">Nombre completo</label>
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autofocus />
                                            @error('name')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label for="email" class="form-label">Correo electrónico</label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required />
                                            @error('email')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label for="password" class="form-label">Contraseña</label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required />
                                            @error('password')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label for="password-confirm" class="form-label">Confirmar contraseña</label>
                                            <input id="password-confirm" type="password"
                                                class="form-control" name="password_confirmation" required />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1 d-flex justify-content-center gap-2">
                                            <button class="btn custom-button w-100" type="submit">
                                                Registrarse
                                            </button>
                                        </div>

                                        <div class="text-center">
                                            ¿Ya tenés cuenta?
                                            <a href="{{ route('login') }}" class="text-decoration-none">Iniciar sesión</a>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            {{-- Imagen y slider --}}
                            <div class="col-lg-6 d-flex align-items-center position-relative overflow-hidden"
                                style="border-radius: .3rem;">
                                <div class="bg-slider position-absolute w-100 h-100 top-0 start-0" id="bg1"></div>
                                <div class="bg-slider position-absolute w-100 h-100 top-0 start-0" id="bg2"></div>
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4 position-relative z-1">
                                    {{-- Contenido opcional --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Script del slider --}}
    <script>
        const images = [
            "{{ asset('assets/fondo1.jpeg') }}",
            "{{ asset('assets/fondo2.jpeg') }}",
            "{{ asset('assets/fondo3.jpeg') }}",
            "{{ asset('assets/fondo4.jpeg') }}",
            "{{ asset('assets/fondo5.jpeg') }}",
            "{{ asset('assets/fondo6.jpeg') }}",
            "{{ asset('assets/fondo7.jpeg') }}",
            "{{ asset('assets/fondo8.jpeg') }}"
        ];

        let index = 0;
        const bg1 = document.getElementById("bg1");
        const bg2 = document.getElementById("bg2");
        let current = bg1;
        let next = bg2;

        function changeBackground() {
            next.style.backgroundImage = `url('${images[index]}')`;
            next.classList.add("active");
            current.classList.remove("active");

            [current, next] = [next, current];
            index = (index + 1) % images.length;
        }

        current.style.backgroundImage = `url('${images[index]}')`;
        current.classList.add("active");
        index++;

        setInterval(changeBackground, 5000);
    </script>
@endsection
