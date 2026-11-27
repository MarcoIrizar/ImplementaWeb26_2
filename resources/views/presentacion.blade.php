@extends('master')

@section('pestaña')
<<<<<<< HEAD
    <title>Presentación</title>
@endsection

@section('titulo')
    <h1>Presentación</h1>
=======
    <title>Editar Alumnos</title>
@endsection

@section('titulo')
    <h1>Editar Alumnos</h1>
>>>>>>> fd817f8cb92629bca7de6db4f379a41140b0a190
@stop

@section('contenido')
    <form action="{{ url('/presentacion') }}" method="POST">
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
<<<<<<< HEAD
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Presentación</a>
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
                        <a class="nav-link" href="{{ url('/formulario') }}">Formulario</a>
=======
                        <a class="nav-link active" aria-current="page" href="presentacion.html">Presentación</a>
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
                        <a class="nav-link" href="formulario.html">Formulario</a>
>>>>>>> fd817f8cb92629bca7de6db4f379a41140b0a190
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        <main class="presentation">
            <section class="card presentation-card">
                <div class="row g-0 presentation-row">
                    <div class="col-md-6 presentation-image-column">
                        <img src="img/EntradaCetis.png" class="img-fluid presentation-image" alt="Entrada del CETis 107 en Culiacán, Sinaloa">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body ps-4 presentation-copy">
                            <h1 class="card-title">CETis 107</h1>
                            <p>El Centro de Estudios Tecnológicos Industrial y de Servicios No. 107 es una escuela pública de nivel medio superior ubicada en Culiacán, Sinaloa. En ella, los jóvenes cursan el bachillerato y se preparan para continuar sus estudios o incorporarse al mundo laboral.</p>
                            <p>Su modelo de bachillerato tecnológico combina materias de formación general con conocimientos y habilidades técnicas. Así, los estudiantes desarrollan una preparación académica y práctica durante su etapa de preparatoria.</p>
                            <ul>
                                <li>Ofrece educación media superior con formación tecnológica.</li>
                                <li>Promueve el aprendizaje, la práctica y el desarrollo de habilidades.</li>
                                <li>Forma parte de la comunidad educativa de Culiacán.</li>
                            </ul>
                            <a href="https://www.google.com/goto?url=CAESWwHrOzAV_ukDvm-093fHzKoehYZW7TYDt-_08Wz4fuzLA1T1MF4awOBYqkdD2aKMOXRg4h9n0h5YxLeduZLupXoDOvW6vrhHdo1l1uvtw_8-1I42YNdCAIDMc0U" class="btn btn-primary align-self-start">Sitio Web Escolar</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
@stop