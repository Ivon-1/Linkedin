<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">
</body>

<div class="w-50 m-auto bg-dark text-white mt-4">
    <form action="{{route('agregarHabilidad')}}" method="POST">
        @csrf
        <div class="m-2">
            <label for="nombre_habilidad" class="form-label">Nombre habilidad</label>
            <input type="text" class="form-control" name="nombre_habilidad"
                placeholder="Introducir nombre de la habilidad">
        </div>

        <div class="m-2">
            <label for="nivel" class="form-label">Nivel habilidad</label>
            <select name="nivel" class="form-select" aria-label="Default select example">
                <option selected>Seleccionar opcion</option>
                <option value="Básico">Básico</option>
                <option value="Intermedio">Intermedio</option>
                <option value="Avanzado">Avanzado</option>
                <option value="Experto">Experto</option>
            </select>
        </div>

        <button type="submit" class="btn btn-warning">Añadir habilidad</button>

    </form>
</div>
