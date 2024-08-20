<?php

namespace App\Http\Controllers;

use App\Models\Emprestimo;
use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmprestimoController extends Controller
{
    public function add(Request $request, $livroId)
    {
        // Validação para garantir que o livro realmente existe
        $livro = Livro::findOrFail($livroId);

        // Cria um novo empréstimo
        $emprestimo = Emprestimo::create([
            'usuario_id' => Auth::id(), // ID do usuário autenticado
            'livro_id' => $livro->id, // ID do livro passado na rota
            'data_emprestimo' => now()->toDateString(), // Data atual
            'data_devolucao' => null, // Inicialmente nulo, se ainda não foi devolvido
            'status' => 'ativo', // Status do empréstimo
        ]);

        // Atualiza o status do livro para 'emprestado'
        $livro->update(['status' => 'Alugado']);

        return redirect()->route('livros.show', $livro->id)
            ->with('success', 'Livro alugado com sucesso.');
    }
}
