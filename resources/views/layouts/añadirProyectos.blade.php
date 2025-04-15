<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">
</body>

<div class="w-50 m-auto bg-dark text-white mt-4">
    <form action="{{route('agregarProyecto')}}" method="POST">
        @csrf
        <div class="m-2">
            <label for="titulo" class="form-label">Título proyecto</label>
            <input type="text" class="form-control" 
            name="titulo" 
            placeholder="Introducir nombre del proyecto">
        </div>

        <div class="m-2">
            <label for="descripcion" class="form-label">Descripción del proyecto</label>
            <input type="text" class="form-control" 
            name="descripcion" 
            placeholder="Introducir descripcion sobre el proyecto">
        </div>


        <div class="m-2">
            <label for="enlace_proyecto" class="form-label">Enlace proyecto</label>
            <input type="text" class="form-control" 
            name="enlace_proyecto" 
            placeholder="Introducir enlace al proyecto">
        </div>


        <button type="submit" class="btn btn-warning">Añadir proyecto</button>

    </form>
</div>
