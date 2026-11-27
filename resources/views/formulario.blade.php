@extends('master')

@section('pestaña')
<<<<<<< HEAD
    <title>Formulario</title>
@endsection

@section('titulo')
    <h1>Formulario</h1>
@stop

@section('contenido')
=======
    <title>Editar Alumnos</title>
@endsection

@section('titulo')
    <h1>Editar Alumnos</h1>
@stop

@section('contenido')
    <form action="{{ url('/formulario') }}" method="POST">
    </form>

>>>>>>> fd817f8cb92629bca7de6db4f379a41140b0a190
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #b62020;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Culiacán</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
<<<<<<< HEAD
                        <a class="nav-link" href="{{ url('/') }}">Presentación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/caracteristicas') }}">Características</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/historia') }}">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/ubicacion') }}">Ubicación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/formulario') }}">Formulario</a>
=======
                        <a class="nav-link" href="presentacion.html">Presentación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="caracteristicas.html">Características</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="historia.html">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ubicacion.html">Ubicacion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="formulario.html">Formulario</a>
>>>>>>> fd817f8cb92629bca7de6db4f379a41140b0a190
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid my-4 px-4 px-md-5">
        <div class="card" style="width: 100%; min-height: 70vh;">
            <div class="card-body p-4 p-md-5">
                <h1 class="card-title">Opinión sobre el CETis 107</h1>
<<<<<<< HEAD
                <form id="formularioOpinion" action="{{ url('/guardarOpinion') }}" method="POST">
                    @csrf
=======
                <form id="formularioOpinion">
>>>>>>> fd817f8cb92629bca7de6db4f379a41140b0a190
                    <div class="mb-3">
                        <label for="opinion" class="form-label">Escribe tu opinión (máximo 200 caracteres)</label>
                        <textarea class="form-control" id="opinion" name="opinion" rows="8" maxlength="200" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger">Enviar</button>
<<<<<<< HEAD
                    @if(session('exito'))
                    <p class="mt-3 mb-0 text-success">{{ session('exito') }}</p>
                    @endif
=======
                    <p id="mensajeEnvio" class="mt-3 mb-0" role="status" aria-live="polite"></p>
>>>>>>> fd817f8cb92629bca7de6db4f379a41140b0a190
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<<<<<<< HEAD
    <script src="{{ asset('js/validar.js') }}"></script>
=======
    <script>
        document.getElementById("formularioOpinion").addEventListener("submit", function (evento) {
            evento.preventDefault();
            this.reset();
            document.getElementById("mensajeEnvio").textContent = "Opinión enviada. Gracias por compartirla.";
        });
    </script>
>>>>>>> fd817f8cb92629bca7de6db4f379a41140b0a190
@stop