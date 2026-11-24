@extends('master')

@section('pestaña')
    <title>Editar Alumnos</title>
@endsection

@section('titulo')
    <h1>Editar Alumnos</h1>
@stop

@section('contenido')
    <form action="{{ url('/caracteristicas') }}" method="POST">
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
                        <a class="nav-link active" aria-current="page" href="caracteristicas.html">Características</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="historia.html">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ubicacion.html">Ubicacion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formulario.html">Formulario</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="card mb-3" style="width: 100%;">
  <div class="card-body">
    <img src="img/EntradaCafeteria.webp"
         style="float: left; width: 800px; margin-right: 30px; border-radius: .375rem;">

        <h1>Cafetería</h1>
        <p>La cafetería es un espacio para que los estudiantes puedan disfrutar sus alimentos y convivir durante la jornada escolar.</p>
    <ul>
            <li>Ofrece un lugar para tomar un descanso entre clases.</li>
            <li>Permite compartir un momento con compañeros y amigos.</li>
            <li>Forma parte de los espacios que utilizan los alumnos en su vida escolar.</li>
            <li>Tiene aires acondicionados para que los alumnos no pasen calor.</li>
    </ul>

    <div style="clear: both;"></div>
  </div>
</div>   

<div class="card mb-3" style="width: 100%;">
    <div class="card-body">
        
        <img src="img/CC2.webp"
         style="float: left; width: 800px; margin-right: 30px; border-radius: .375rem;">

        <h1>CC2</h1>
        <p>La sala de cómputo número 2 es uno de los espacios donde los estudiantes pueden realizar actividades escolares relacionadas con la informática y la tecnología.</p>
        <ul>
            <li>Apoya el aprendizaje práctico en temas de computación.</li>
            <li>Permite trabajar en actividades y proyectos escolares.</li>
            <li>Brinda un espacio para desarrollar habilidades tecnológicas.</li>
        </ul>
    </div>
</div>
@stop