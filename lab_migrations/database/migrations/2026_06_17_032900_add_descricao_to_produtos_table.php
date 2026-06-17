<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class AddDescricaoToProdutosTable extends Migration
{
    public function up()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->text('descricao')->nullable()->after('nome');
        });
    }
    public function down()
    {
        Schema::create('produtos_backup', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->decimal('preco', 8, 2);
            $table->integer('quantidade');
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });
        \DB::statement('INSERT INTO produtos_backup SELECT id, nome, preco, quantidade, ativo, created_at, updated_at FROM produtos');
        Schema::dropIfExists('produtos');
        Schema::rename('produtos_backup', 'produtos');
    }
}