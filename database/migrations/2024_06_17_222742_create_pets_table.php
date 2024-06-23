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
        Schema::create('pets', function (Blueprint $table) {
            $table->id(); 
            $table->string('nombre', 50); 
            $table->string('especie', 20); 
            $table->string('raza', 20)->nullable(); 
            $table->char('sexo', 1); 
            $table->date('fechaNacimiento');
            $table->integer('numeroAtenciones'); 
            $table->boolean('enTratamiento')->default(false); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
