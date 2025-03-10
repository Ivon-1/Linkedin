<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenido') }}
        </h2>
    </x-slot>

    <!-- menu de opciones -->
    <nav class="navbar navbar-expand-lg bg-dark ">
        <div class="container-fluid text-center m-auto">
            <a class="navbar-brand text-white" href="#">Opciones disponibles</a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav text-center m-auto">
                    <li class="nav-item">
                        <a class="nav-link  text-white" href="{{ route('gestionPerfiles') }}">
                            Crear perfil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white" href="{{ route('gestionarExperiencia') }}">Añadir experiencia
                            laboral</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white" href="{{ route('mostrarFormulario') }}">Añadir formación
                            académica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white" href="{{ route('mostrarHabilidades') }}">Añadir habilidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white" href="{{ route('verProyectos') }}">Gestionar portafolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white" href="{{ route('mostrarCurriculum') }}">Página pública CV</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- datos personales  -->
    <div class="text-center mt-2">
        <h3>Buscar cv de persona registrada en la base de datos</h3>
        <form action="{{ route('localizar') }}" method="POST">
            @csrf
            <input type="search" name="nombre_completo" placeholder="buscar_cv">
            <button type="submit" class="btn btn-dark mt-2">Buscar CV</button>
        </form>
        @foreach ($perfil as $per)
        <div class="p-4">
            <ul class="list-group bg-black">
                <li class="list-group-item  bg-dark text-white bold">Experiencia laboral</li>
                <li class="list-group-item">Nombre completo:  {{ $per->nombre_completo }}</li>
                <li class="list-group-item">Profesion : {{ $per->profesion }}</li>
                <li class="list-group-item">Sobre mi : {{ $per->sobre_mi }}</li>
                <li class="list-group-item">Telefono : {{ $per->telefono }}</li>
                <li class="list-group-item">Correo electronico : {{ $per->correo_electronico }}</li>
                <li class="list-group-item"><a class="text-primary" href="{{$per->sitio_web}}" target="blank">Sitio web : {{ $per->sitio_web }}</a></li>
                <li class="list-group-item"><a class="text-primary" href="{{$per->linkedin}}" target="blank">Linkedin : {{ $per->linkedin }}</a></li>
                <li class="list-group-item"><a class="text-primary" href="{{$per->github}}" target="blank">Github : {{ $per->github }}</a></li>
            </ul>
        </div>
        @endforeach
    </div>



</x-app-layout>
