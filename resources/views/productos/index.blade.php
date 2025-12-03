@extends('layouts.app')

@section('content')
    <h2>Lista de productos</h2>

    <div class="mb-3">
        <a class="btn btn-primary" href="{{ route('productos.create') }}">Crear nuevo producto</a>
    </div>
    
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Costo</th>
                <th>Venta</th>
                <th>Stock</th>
                <th width="280px">Acciones</th>
            </tr>
        </thead>
    </tbody>
        @foreach ($productos as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ number_format($producto->precio_costo, 2) }}</td>
            <td>{{ number_format($producto->precio_venta, 2) }}</td>
            <td>{{ <span class="badge bg-{{ $producto->stock > 10 ? 'success' : ($producto->stock > 0 ? 'warning' : 'danger') }}">{{ $producto->stock }}</span></td>
            <td>
                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                    <a class="btn btn-sm btn-info" hreft="#"></a>
                    <a class="btn btn-sm btn-primary" hreft="{{ route('productos.edit', $producto->id }}">Editar</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estas seguro de que quieres eliminar este producto?');">Eliminar</button>
                </from>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
