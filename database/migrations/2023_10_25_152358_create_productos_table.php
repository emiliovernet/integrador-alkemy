<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255)->nullable(false);
            $table->double('precio');
            $table->string('imagen', 255)->nullable();
            $table->string('descripcion', 255)->nullable();
            $table->unsignedBigInteger('categoria_id')->nullable();
            //$table->foreignId('categoria_id')->constrained();
            //$table->foreign('categoria_id')->references('id')->on('categorias');
            $table->boolean('habilitado')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
