<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">
</body>

<form action="{{route('agregarExperiencia')}}" method="POST" class="w-50 m-auto mt-2">
    @csrf
    <h3>Añadir o editar experiencia laboral</h3>
    <div class="row g-3">
        <div class="col">
            <label for="empresa">Empresa</label>
            <input type="text" name="empresa" class="form-control" placeholder="First name" aria-label="First name">
        </div>

        <div class="col">
            <label for="puesto">Puesto</label>
            <input type="text" name="puesto" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
    </div>

    <div class="row g-3">
        <div class="col">
            <label for="fecha_inicio">Fecha de inicio</label>
            <input type="date" name="fecha_inicio" class="form-control" placeholder="First name" aria-label="First name">
        </div>

        <div class="col">
            <label for="fecha_fin">Fecha de fin</label>
            <input type="date" name="fecha_fin" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
    </div>

    <div class="row g-3">
        <div class="col">
            <label for="descripcion">Descripcion de actividades</label>
            <input type="text" name="descripcion" class="form-control" placeholder="First name" aria-label="First name">
        </div>
    </div>

    <button type="submit" class="btn btn-warning mt-2">Añadir</button>
    <button class=" btn btn-danger mt-2"><a href="{{route('formularioEditar')}}" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hove">Editar datos</a></button>
</form>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

</div>
