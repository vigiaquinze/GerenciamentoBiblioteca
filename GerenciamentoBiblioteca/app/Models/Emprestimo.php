<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    // Nome da tabela associada ao model
    protected $table = 'emprestimos';

    // Atributos que podem ser atribuídos em massa
    protected $fillable = ['usuario_id', 'livro_id', 'data_emprestimo', 'data_devolucao', 'status'];

    // Relacionamentos

    /**
     * Relacionamento: Um empréstimo pertence a um livro.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function livro()
    {
        return $this->belongsTo(Livro::class);
    }

    /**
     * Relacionamento: Um empréstimo pertence a um usuário.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
