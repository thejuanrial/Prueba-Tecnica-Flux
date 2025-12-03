// rutas

use App\Http\Controllers\ProductoController
use Illimunate\Support\Facades\Route;


// ruta de recurso para el crud
Route::resource('productos', ProductoController::class),

//establecer la pagina de inicio  como la lista de productos
Route::get('/', function () {
    return redirect()->route('productos.index');
});
