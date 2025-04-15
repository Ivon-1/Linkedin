<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">
</body>

<div class="w-50 m-auto bg-dark text-white mt-4">
    <h4>Creación y edición de perfiles</h4>
    <form action="{{ route('agregarPerfil') }}" method="POST">
        @csrf
        <div class="m-2">
            <label for="profesion" class="form-label">Profesión</label>
            <input type="text" class="form-control" name="profesion" placeholder="Introducir profesion">
        </div>

        <div class="m-2">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" name="telefono" placeholder="Introducir telefono">
        </div>

        <div class="m-2">
            <label for="sobre_mi" class="form-label">Sobre mi</label>
            <input type="text" class="form-control" name="sobre_mi" placeholder="Sobre mi">
        </div>

        <div class="m-2">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" placeholder="email">
        </div>


        <div class="m-2">
            <label for="sitio_web" class="form-label">Sitio web</label>
            <input type="text" class="form-control" name="sitio_web" placeholder="sitio web">
        </div>

        <div class="m-2">
            <label for="linkedin" class="form-label">Linkedin</label>
            <input type="text" class="form-control" name="linkedin" placeholder="Linkedin">
        </div>

        <div class="m-2">
            <label for="github" class="form-label">Github</label>
            <input type="text" class="form-control" name="github" placeholder="Github">
        </div>

        <button type="submit" class="btn btn-warning">Crear perfil</button>

    </form>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif



</div>
