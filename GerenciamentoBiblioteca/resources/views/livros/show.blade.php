@extends('layouts.app')

@section('content')
    <div class="container navBarMargin">
        <div class="bookInfo">
            <div class="col-md-6">
                <img src="{{ $livro->urlImg }}" class="img-fluid" alt="{{ $livro->titulo }}" width="300px">
            </div>
            <div class="col-md-6">
                <h1 style="font-weight: 900" class="title">{{ $livro->titulo }}</h1>
                <p>Autor: <strong>{{ $livro->autor }}</strong></h3>
                <p>Gênero: <strong>{{ $livro->genero }}</strong></h5>
                <p>Ano de lançamento: <strong>{{ $livro->ano }}</strong></p>

                @if($livro->status === 'Disponível')
                    <form method="POST" action="{{ route('emprestimo.add', $livro->id) }}">
                        @csrf
                        <button type="submit" class="navbarButton">Alugar livro</button>
                    </form>
                @else
                    <button class="buttonDisabled" disabled>Livro emprestado</button>
                @endif
            </div>
        </div>
    </div>
@endsection
