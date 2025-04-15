<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<div class="bg-black p-4 text-white">
    <h3>Curriculum Vitae</h3> <button type="button" class="btn btn-dark"><a href="dashboard" class="text-white">Volver</a></button>

    <!-- DATOS PERSONALES -->
    <div class="p-4">
        <ul class="list-group bg-black">
            <li class="list-group-item  bg-dark text-white bold">Datos personales</li>
            <li
                class="list-group-item >Nombre completo : {{ $perfil->nombre_completo }}</li>
            <li class="list-group-item">
                Profesion : {{ $perfil->profesion }}</li>
            <li class="list-group-item">Teléfono de contacto : {{ $perfil->telefono }}</li>
            <li class="list-group-item">Correo electrónico : {{ $perfil->correo_electronico }}</li>
            <li class="list-group-item">Sobre mi : {{ $perfil->sobre_mi }}</li>
            <li class="list-group-item">Sitio web : {{ $perfil->sitio_web }}</li>
            <li class="list-group-item">Perfil de linkedin : <a href="https://www.linkedin.com/in/ivan-alvarez-garcia2" target="blank">{{ $perfil->linkedin }}</a></li>
            <li class="list-group-item">Perfil de github : <a href="https://github.com/Ivon-1" target="blank">{{ $perfil->github }}</a></li>    
        </ul>
    </div>
    <!-- EXPERIENCA LABORAL -->
    @foreach ($experiencia as $experiencia)
        <div class="p-4">
            <ul class="list-group bg-black">
                <li class="list-group-item  bg-dark text-white bold">Experiencia laboral</li>
                <li class="list-group-item">Empresa : {{ $experiencia->empresa }}</li>
                <li class="list-group-item">Puesto desempeñado : {{ $experiencia->puesto }}</li>
                <li class="list-group-item">Fecha de inicio : {{ $experiencia->fecha_inicio }}</li>
                <li class="list-group-item">Fecha de fin : {{ $experiencia->fecha_fin }}</li>
                <li class="list-group-item">Descripcion del puesto : {{ $experiencia->descripcion }}</li>
            </ul>
        </div>
    @endforeach

    <!-- FORMACION -->
    @foreach ($educacion as $educacion)
        <div class="p-4">
            <ul class="list-group bg-black">
                <li class="list-group-item  bg-dark text-white bold">Educación y formación</li>
                <li class="list-group-item">{{ $educacion->institucion }}</li>
                <li class="list-group-item">{{ $educacion->titulo_obtenido }}</li>
                <li class="list-group-item">{{ $educacion->fecha_inicio }}</li>
                <li class="list-group-item">{{ $educacion->fecha_fin }}</li>
            </ul>
        </div>
    @endforeach

    <!-- habilidades -->
    <div class="p-4">
        <ul class="list-group bg-black">
            <li class="list-group-item  bg-dark text-white bold">Habilidades</li>
            @foreach ($habilidad as $habilidad)
                <li class="list-group-item  bg-dark text-white bold"><button
                        class="btn btn-danger">{{ $habilidad->nombre_habilidad }}</button> <button
                        class="btn btn btn-info">{{ $habilidad->nivel }}</button></li>
            @endforeach
        </ul>
    </div>

    <!-- proyectos -->
    <div class="p-4">
        @foreach ($proyecto as $proyecto)
            <ul class="list-group bg-black mt-3">
                <li class="list-group-item  bg-dark text-white bold">Proyectos</li>
                <li class="list-group-item">Título del proyecto: {{ $proyecto->titulo }}</li>
                <li class="list-group-item">Descripcion del proyecto: {{ $proyecto->descripcion }}</li>
                <li class="list-group-item">Enlace del proyecto: <a href="{{ $proyecto->enlace_proyecto }}"
                        target="blank">{{ $proyecto->enlace_proyecto }}</a></li>
            </ul>
        @endforeach
    </div>

</div>
