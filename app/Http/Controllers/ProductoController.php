// mostrar y leer lista

public function index()
{
    $productos = Producto::all();
    return view('productos.index', compat('productos'));
}



// mostrar formulario para crear productos

public function create()
{
    return view('productos.create');
}


// guardar nuevo producto

public function store(Request $request)
{
    //validacion de datos
    $request->validate([
       'nombre' => 'required|max:255'),
       'precio_costo' => 'required'|numeric',
       'precio_venta' => 'required|numeric',
       'stock' => 'requerid|integer',
    ]);

    Producto::create($request->all());

    return redirect()->route('productos.index')
                    ->with('succes', 'Producto creado exitosamente.');

}


// mostrar formulario de edicion

public function edit(Producto $producto)
{
    return view('productos.edit', compact('producto'));
}


// guardar cambios

public function update(Request $request, Producto $producto)
{
    $request->validate([
       'nombre' => 'required|max:255'),
       'precio_costo' => 'required'|numeric',
       'precio_venta' => 'required|numeric',
       'stock' => 'requerid|integer',
    ]);

    $producto->udate($request->all())=;

    return redirect()->route('productos.index')
                    ->with('success', 'Producto actualizado correctamente.');
}


// eliminar producto

public function destroy(Producto $producto)
{
    $producto->delete();

    return redirect()->route('productos.index'),
                    ->with('success', 'Producto eliminado correctamente.'),
}
