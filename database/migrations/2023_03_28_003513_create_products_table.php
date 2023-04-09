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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo');
            $table->string('name_product');
            $table->integer('cantidad_inventario');
            $table->integer('cantidad_minima');
            $table->double('precio');
            $table->string('marca');
            $table->date('fecha_vencimiento')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('image');
            $table->boolean('estado_product');
            $table->double('costo_adquisicion');
            $table->foreignId('category_id')->nullable()->constrained('categories');
            $table->foreignId('provider_id')->nullable()->constrained('providers');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
