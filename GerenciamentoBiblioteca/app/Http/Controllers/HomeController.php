<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class HomeController extends Controller
{
    public function index(){
        $livros = Livro::latest()->take(3)->get();
        return view('home',compact('livros'));
    }
}
