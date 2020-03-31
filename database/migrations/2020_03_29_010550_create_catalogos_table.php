<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogos', function (Blueprint $table) {
            $table->integer('produto_id');
            $table->integer('comunidade_id');
            $table->decimal('preco');
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
        Schema::dropIfExists('catalogos');
    }
}
