<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id(); // ID auto-incremental
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('senha');
            $table->enum('tipo',['usuario','bibliotecario'])->default('usuario'); // Campo 'tipo' só pode ter duas entradas: usuário ou bibliotecário
            $table->timestamps(); // Adiciona created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
