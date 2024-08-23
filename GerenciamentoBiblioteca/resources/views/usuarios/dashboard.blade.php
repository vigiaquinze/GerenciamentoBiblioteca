@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container navBarMargin">
        <h1 class="title">Dashboard de Livros</h1>


        <form method="GET" action="{{ route('dashboard') }}">
            <input type="text" name="search" placeholder="Pesquisar livros..." value="{{ request('search') }}">
            <button type="submit">Pesquisar</button>
        </form>


        <div class="row">
            @foreach ($livros as $livro)
                <div class="card m10">
                    <div class="cardTop">
                        <img src="{{ $livro->urlImg }}" class="cardImg" alt="{{ $livro->titulo }}">
                        <div class="cardBody">
                            <h5 class="cardTitle title">{{ $livro->titulo }}</h5>
                            <h5 class="cardText">{{ $livro->autor }}</h5>
                            <p class="cardText">Gênero: <strong>{{ $livro->genero }}</strong></p>
                            <p class="cardText">Lançamento: <strong>{{ $livro->ano }}</strong></p>
                            <a href="{{ route('livros.show', $livro->id) }}" class="cardButton">Ver livro</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
