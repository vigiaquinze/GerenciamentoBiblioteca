<?php

namespace App\Http\Controllers;

use App\Models\Emprestimo;
use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmprestimoController extends Controller
{
    public function add(Request $request, Livro $livro){
        $emprestimo = Emprestimo::create([
            'usuario_id' => Auth::id(), 'vaga_id' => $livro->id
        ]);

        return redirect()->route('vagas.show', $emprestimo->id)
        ->with('success', 'Emprestimo adicionado a vaga.');
    }

}
