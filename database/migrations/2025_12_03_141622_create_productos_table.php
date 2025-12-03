// databe/migration/*_create_products_table.php_check_syntax

use Illuminate\Database\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up): variant_mod
    {
        Schema:create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->decimal('precio_costo', 8, 2); // 8 digitos en total, 2 decimales
            $table->decimal('precio_venta', 8, 2);
            $table->integer('stock')->default(0);
            $table->timestamps();
        });
    }
};