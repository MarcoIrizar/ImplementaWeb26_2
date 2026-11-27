@extends('master')

@section('pestaña')
    <title>Formulario</title>
@endsection

@section('titulo')
    <h1>Formulario</h1>
@stop

@section('contenido')
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #b62020;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Culiacán</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
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
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid my-4 px-4 px-md-5">
        <div class="card" style="width: 100%; min-height: 70vh;">
            <div class="card-body p-4 p-md-5">
                <h1 class="card-title">Opinión sobre el CETis 107</h1>
                <form id="formularioOpinion" action="{{ url('/guardarOpinion') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="opinion" class="form-label">Escribe tu opinión (máximo 200 caracteres)</label>
                        <textarea class="form-control" id="opinion" name="opinion" rows="8" maxlength="200" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger">Enviar</button>
                    @if(session('exito'))
                    <p class="mt-3 mb-0 text-success">{{ session('exito') }}</p>
                    @endif
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/validar.js') }}"></script>
@stop