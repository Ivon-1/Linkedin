<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body class="bg-dark">
</body>

<div class="w-50 m-auto bg-dark text-white mt-4">
    <h4>Formulario de editar experiencia</h4>
    <form action="{{ route('editarPorId', ['id' => $experiencia->id]) }}" method="POST">
        @csrf
        @method('put')
        <div class="row g-3">
            <div class="col">
                <label for="empresa">Empresa</label>
                <input type="text" name="empresa" class="form-control" placeholder="First name"
                    aria-label="First name" value="{{ $experiencia->empresa }}">
            </div>

            <div class="col">
                <label for="puesto">Puesto</label>
                <input type="text" name="puesto" class="form-control" placeholder="Last name"
                    aria-label="Last name" value="{{ $experiencia->puesto }}">
            </div>
        </div>

        <div class="row g-3">
            <div class="col">
                <label for="fecha_inicio">Fecha de inicio</label>
                <input type="date" name="fecha_inicio" class="form-control" placeholder="Fecha de inicio"
                    aria-label="First name" value="{{ $experiencia->fecha_inicio }}">
            </div>

            <div class="col">
                <label for="fecha_fin">Fecha de fin</label>
                <input type="date" name="fecha_fin" class="form-control" placeholder="Fecha de fin"
                    aria-label="Last name" value="{{ $experiencia->fecha_inicio }}">
            </div>
        </div>

        <div class="row g-3">
            <div class="col">
                <label for="descripcion">Descripcion de actividades</label>
                <input type="text" name="descripcion" class="form-control" placeholder="Actividades"
                    aria-label="First name" value="{{ $experiencia->fecha_fin }}">
            </div>
        </div>

        <button type="submit" class="btn btn-danger mt-2">Confirmar cambios</button>

    </form>
</div>
