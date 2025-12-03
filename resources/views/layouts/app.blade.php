<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8>
        <meta name="viewport" content="width=device-width, initia-scaled=1.0">
        <tittle>Inventario</tittle>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-4">
            <h1 class="mb-4"> Gestion de inventario</h1>

            @if ($message = Session::get('success'))
                <div class="alert alert=success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            @yield('content')
        </div>

        <script src="https://cdn.jsdlivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>