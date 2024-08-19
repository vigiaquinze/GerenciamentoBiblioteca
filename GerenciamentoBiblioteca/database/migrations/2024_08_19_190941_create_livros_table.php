<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id(); // ID auto-incremental
            $table->string('titulo');
            $table->string('autor');
            $table->string('genero')->nullable(); // Pode ser nulo
            $table->integer('ano')->nullable(); // Pode ser nulo
            $table->string('status')->nullable(); // Pode ser nulo
            $table->timestamps(); // Adiciona created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('livros');
    }
}
