// rutas

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

// ruta de recurso para el crud
Route::get('/', [ProductoController::class, 'index']);

//establecer la pagina de inicio  como la lista de productos
Route::resource('productos', ProductoController::class);
