<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invpro', function (Blueprint $table) {
            $table->id();
            $table->text('Titulo');
            $table->text('Descripcion');
            $table->text('Parrafo1');
            $table->text('Parrafo2');
            $table->text('Parrafo3');
            $table->text('Parrafo4');
            $table->text('Parrafo5');
            $table->text('Parrafo6');
            $table->text('Parrafo7');
            $table->text('Parrafo8');
            $table->text('Parrafo9');
            $table->text('Parrafo10');
            $table->text('Parrafo11');
            $table->text('Parrafo12');
            $table->text('Parrafo13');
            $table->text('Parrafo14');
            $table->text('Parrafo15');
            $table->text('Parrafo16');
            $table->text('Parrafo17');
            $table->text('Parrafo18');
            $table->text('Parrafo19');
            $table->text('Parrafo20');
            $table->text('Parrafo21');
            $table->text('Unidad');
            $table->text('Imagen');
            $table->text('slug');
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
        Schema::dropIfExists('invpro');
    }
};
