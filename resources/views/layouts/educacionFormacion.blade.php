<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body class="bg-dark">
</body>

<div>
    <div class="w-50 m-auto bg-dark text-white mt-4">
        <h4>Creación y edición de perfiles</h4>
        <form action="{{route('agregarEducacion')}}" method="POST">
            @csrf
            <div class="m-2">
                <label for="institucion" class="form-label">Institución</label>
                <input type="text" class="form-control" name="institucion" placeholder="Introducir institucion educativa">
            </div>
    
            <div class="m-2">
                <label for="titulo_obtenido" class="form-label">Título obtenido</label>
                <input type="text" class="form-control" name="titulo_obtenido" placeholder="Introducir titulo">
            </div>
    
            <div class="m-2">
                <label for="fecha_inicio" class="form-label">Fecha de inicio</label>
                <input type="date" class="form-control" name="fecha_inicio" placeholder="Introducir fecha de inicio">
            </div>

            <div class="m-2">
                <label for="fecha_fin" class="form-label">Fecha de finalizacion</label>
                <input type="date" class="form-control" name="fecha_fin" placeholder="Introducir fecha de fin">
            </div>
    
            <button type="submit" class="btn btn-warning">Añadir formación</button>
    
        </form>
</div>
