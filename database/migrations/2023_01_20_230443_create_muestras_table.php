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
        Schema::create('muestras', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('fecha');
            $table->unsignedBigInteger('institution_id')->nullable();
            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->string('paciente_name');
            $table->string('paciente_cedula');
            $table->integer('paciente_edad');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->string('tipo_pago');
            $table->float('dolares');
            $table->float('bolivares');
            $table->timestamps();
            $table->foreign('institution_id')->references('id')->on('institutions')->onDelete('set null');
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('set null');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->foreign('subcategory_id')->references('id')->on('sub_categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('muestras');
    }
};
