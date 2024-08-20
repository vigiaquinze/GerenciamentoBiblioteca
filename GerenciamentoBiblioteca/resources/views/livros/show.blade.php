@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $livro->urlImg }}" class="img-fluid" alt="{{ $livro->titulo }}">
            </div>
            <div class="col-md-6">
                <h1 style="font-weight: 900">{{ $livro->titulo }}</h1>
                <h3>Autor: <strong>{{ $livro->autor }}</strong></h3>
                <h5>Gênero: <strong>{{ $livro->genero }}</strong></h5>
                <p>Ano de lançamento: <strong>{{ $livro->ano }}</strong></p>

                @if($livro->status === 'disponível')
                    <form method="POST" action="{{ route('emprestimo.add', $livro->id) }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">Alugar livro</button>
                    </form>
                @else
                    <button class="btn btn-secondary" disabled>Livro emprestado</button>
                @endif
            </div>
        </div>
    </div>
@endsection
