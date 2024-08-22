@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="title">Dashboard de Livros</h1>


    <form method="GET" action="{{ route('dashboard') }}">
        <input type="text" name="search" placeholder="Pesquisar livros..." value="{{ request('search') }}">
        <button type="submit">Pesquisar</button>
    </form>


    <div class="row">
        @foreach ($livros as $livro)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ $livro->urlImg }}" class="card-img-top" alt="{{ $livro->titulo }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $livro->titulo }}</h5>
                        <h5 class="card-title">{{ $livro->autor }}</h5>
                        <p class="card-text">{{ $livro->genero }}</p>
                        <p class="card-text">{{ $livro->ano }}</p>
                        <a href="{{ route('livros.show', $livro->id) }}" class="btn btn-primary">Ver livro</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

