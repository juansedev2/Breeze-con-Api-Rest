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
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id(); // Id del registro
            $table->string("nombre_lector");
            $table->string("cedula");
            $table->string("codigo_libro");
            $table->string("estado");
            $table->string("comentario");
            $table->timestamps(); // Fechas de inserción de registros
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_prestamos');
    }
};
