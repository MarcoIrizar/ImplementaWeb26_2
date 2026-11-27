@extends('master')

@section('pestaña')
    <title>Historia</title>
@endsection

@section('titulo')
    <h1>Historia</h1>
@stop

@section('contenido')
    <form action="{{ url('/historia') }}" method="POST">
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
                        <a class="nav-link" href="{{ url('/') }}">Presentación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/caracteristicas') }}">Características</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/historia') }}">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/ubicacion') }}">Ubicación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/formulario') }}">Formulario</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="card mb-3" style="width: 100%;">
        <div class="card-body" style="font-size: 1.2rem; line-height: 1.5;">
            <img src="img/ReconocimientoHISTORIA.webp" alt="Imagen relacionada con la historia del CETis 107"
                 style="float: left; width: 500px; margin-right: 30px; border-radius: .375rem;">

            <h1>Historia del CETis No. 107</h1>
            <p>El Centro de Estudios Tecnológicos Industriales y de Servicios No. 107, ubicado en la colonia Infonavit Humaya de Culiacán, Sinaloa, inició sus actividades el 5 de octubre de 1981. Al principio, sus clases se impartían en el módulo social de la colonia.</p>
            <p>A lo largo de su historia, el plantel ha cambiado sus programas y especialidades para responder a las necesidades de sus estudiantes:</p>
            <ul class="border-start border-danger border-2 ps-4">
                <li><strong>1981:</strong> Inicia actividades con la modalidad terminal de Técnicos Profesionales.</li>
                <li><strong>1982:</strong> Se traslada a sus instalaciones actuales, en avenida José C. Valadez y calle Tierra, sin número.</li>
                <li><strong>1984:</strong> Implementa el Bachillerato Tecnológico con especialidades en Aire Acondicionado y Refrigeración, Construcción y Electrónica.</li>
                <li><strong>1991:</strong> Agrega Computación Fiscal Contable y liquida Aire Acondicionado y Refrigeración.</li>
                <li><strong>1998:</strong> Cambia Computación Fiscal Contable por Computación y Contabilidad.</li>
                <li><strong>2003:</strong> Establece el Sistema Abierto de Educación Tecnológica Industrial (S.A.E.T.I.), que concluye en 2013.</li>
                <li><strong>2004:</strong> Implementa la Reforma Curricular basada en Competencias.</li>
                <li><strong>2006:</strong> Adopta la Reforma Integral de la Educación Media Superior (RIEMS).</li>
                <li><strong>2011:</strong> Liquida la especialidad de Informática y la cambia por Programación.</li>
                <li><strong>2015:</strong> Abre la especialidad de Ofimática.</li>
            </ul>
            <p>Actualmente, el CETis No. 107 ofrece las especialidades de Electrónica, Contabilidad, Construcción e Informática.</p>

            <div style="clear: both;"></div>
        </div>
    </div>
@stop