<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmprestimosTable extends Migration
{
    public function up()
    {
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->id(); // ID auto-incremental
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
            $table->foreignId('livro_id')->constrained('livros')->onDelete('cascade');
            $table->date('data_emprestimo');
            $table->date('data_devolucao')->nullable(); // Pode ser nulo
            $table->string('status')->nullable(); // Pode ser nulo
            $table->timestamps(); // Adiciona created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('emprestimos');
    }
}
