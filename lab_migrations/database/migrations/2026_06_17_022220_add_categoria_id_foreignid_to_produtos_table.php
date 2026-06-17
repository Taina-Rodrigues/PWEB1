<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddCategoriaIdForeignidToProdutosTable extends Migration
{
    public function up()
    {
        Schema::create('produtos_new', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->timestamps();
        });

        DB::table('produtos_new')->insertUsing(['nome', 'categoria_id'], DB::table('produtos')->select('nome', 'categoria_id'));

        Schema::dropIfExists('produtos');
        Schema::rename('produtos_new', 'produtos');
    }

    public function down()
    {
        Schema::create('produtos_old', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->timestamps();
        });

        DB::table('produtos_old')->insertUsing(['nome', 'categoria_id'], DB::table('produtos')->select('nome', 'categoria_id'));

        Schema::dropIfExists('produtos');
        Schema::rename('produtos_old', 'produtos');
    }
}
