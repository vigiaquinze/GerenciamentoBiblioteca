<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use Illuminate\Support\Facades\Auth;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livros = Livro::all();

        return view('livros.index',compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('livros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->validate([
            'urlImg'=> 'required|url',
            'titulo'=> 'required|max:100',
            'autor'=> 'required',
            'genero'=> 'required',
            'ano'=>'required|numeric',
        ]);
        Livro::create($dados);

        return redirect()->route('livros.index')
            ->with('success', 'Livro criado com sucesso.');

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livro $livro)
    {
        return view('livros.edit',compact('livro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livro $livro)
    {
        $dados = $request->validate([
            'urlImg'=> 'required|url',
            'titulo'=> 'required|max:100',
            'autor'=> 'required',
            'genero'=> 'required',
            'ano'=>'required|numeric',
        ]);
        $livro->update($dados);

        return redirect()->route('livros.index')
            ->with('success', 'Livro atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livro $livro)
    {
        $livro->delete($livro);

        return redirect()->route('livros.index')
            ->with('success', 'Livro deletado com sucesso.');
    }

    public function show(Livro $livro){
        return view('livros.show',compact('livro'));
    }
}
