<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    // Nome da tabela associada ao model
    protected $table = 'livros';

    // Atributos que podem ser atribuídos em massa
    protected $fillable = ['urlImg', 'titulo', 'autor', 'genero', 'ano', 'status'];

    // Relacionamentos

    /**
     * Relacionamento: Um livro pode ter muitos empréstimos.
     *
     */
    public function emprestimos()
    {
        return $this->hasMany(Emprestimo::class);
    }
}
