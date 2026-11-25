@extends('master')

@section('pestaña')
    <title>Editar Alumnos</title>
@endsection

@section('titulo')
    <h1>Editar Alumnos</h1>
@stop

@section('contenido')
    <form action="{{ url('/ubicacion') }}" method="POST">
    </form>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #b62020;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Culiacán</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="presentacion.html">Presentación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="caracteristicas.html">Características</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="historia.html">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="ubicacion.html">Ubicacion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formulario.html">Formulario</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-5">
                <div class="card-body" style="font-size: 2rem; line-height: 1.5;">
                    <h1 class="h2">Ubicación del CETis 107</h1>
                    <p>El CETis No. 107 se encuentra en la colonia Infonavit Humaya, en Culiacán Rosales, Sinaloa.</p>
                    <p><strong>Calle:</strong> Tierra s/n<br>
                    <strong>Colonia:</strong> Infonavit Humaya<br>
                    <strong>Municipio:</strong> Culiacán Rosales<br>
                    <strong>Estado:</strong> Sinaloa<br>
                    <strong>Código postal:</strong> 80020</p>
                    <a href="https://www.google.com/maps/search/?api=1&query=CETIS+107%2C+C.+Tierra+sn%2C+Infonavit+Humaya%2C+80020+Culiac%C3%A1n+Rosales%2C+Sin."
                       class="btn btn-danger btn-lg" target="_blank" rel="noopener noreferrer">Ver en Google Maps</a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="ratio ratio-4x3">
                    <iframe src="https://maps.google.com/maps?q=CETIS+107%2C+C.+Tierra+sn%2C+Infonavit+Humaya%2C+80020+Culiac%C3%A1n+Rosales%2C+Sin.&amp;z=17&amp;output=embed"
                            title="Mapa de Google Maps con la ubicación del CETis 107"
                            loading="lazy" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@stop