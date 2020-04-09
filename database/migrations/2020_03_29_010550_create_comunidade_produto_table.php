<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComunidadeProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunidade_produto', function (Blueprint $table) {
            $table->integer('comunidade_id');
            $table->integer('produto_id');
            $table->integer('estoque');
            $table->decimal('preco');
            $table->decimal('comissao');
            $table->foreign('produto_id')
                ->references('id')
                ->on("produtos");
            $table->foreign('comunidade_id')
                ->references('id')
                ->on("comunidades");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_comunidade');
    }
}
