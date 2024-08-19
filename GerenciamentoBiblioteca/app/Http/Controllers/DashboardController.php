<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
        $search = $request->input('search');
        $livros = Livro::when($search, function ($query, $search) {
            return $query->where('titulo', 'like', "%{$search}%")
                         ->orWhere('genero', 'like', "%{$search}%")
                         ->orWhere('autor', 'like', "%{$search}%")
                         ->orWhere('ano', 'like', "%{$search}%");
        })->get();

        return view('usuarios.dashboard', compact('livros'));
    }
}
