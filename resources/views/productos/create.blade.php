@extend('layouts.app')

@section('content')
    </h2>Crear nuevo producto</h2>

    <a class="btn btn-secundary mb-3" href="{{ route('productos.inde') }}">Volver a la lista</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>ERROR</strong>Hay problemas con los datos ingresados<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}<li>
                @endforeach
            </ul>
        </div>
    @endif

        <form action="{{ route('productos.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-xs-12 col sm-12 col-md-6 mb-3">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre del producto" value="{{ old('nombre') }}">
                    </div>
                </div>

                <div class="col-xs-12 col sm-12 col-md-6 mb-3">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        <input type="number" name="stock" class="form-control" placeholder="0" value="{{ old('nombre') }}">
                    </div>
                </div>

                <div class="col-xs-12 col sm-12 col-md-6 mb-3">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre del producto" value="{{ old('nombre') }}">
                    </div>
                </div>