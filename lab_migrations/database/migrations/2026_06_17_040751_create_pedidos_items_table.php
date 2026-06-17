<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreatePedidosItemsTable extends Migration
{
    public function up()
    {
        Schema::create('pedidos_items', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade'); // corrigido: era string
            $table->decimal('preco', 8, 2); // corrigido: era decimal(4) sem precisão
            $table->unsignedBigInteger('pedido_id');
            $table->foreign('pedido_id')
                ->references('id')
                ->on('pedidos'); // corrigido: era 'pedido'
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('pedidos_items');
    }
}