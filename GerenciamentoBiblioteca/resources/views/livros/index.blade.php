@extends('layouts.app')


@section('content')
    <div class="container">
        <h1 class="title">Livros</h1>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <a class="navbarButton" href="{{ route('livros.create') }}"> Criar Novo Livro</a>

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Gênero</th>
                <th>Ano</th>
                <th>Ação</th>
            </tr>
            @foreach ($livros as $livro)
            <tr>
                <td>{{ $livro->id }}</td>
                <td>{{ $livro->titulo }}</td>
                <td>{{ $livro->autor }}</td>
                <td>{{ $livro->genero}}</td>
                <td>{{ $livro->ano }}</td>
                <td>
                    <form class="tabButtons" action="{{ route('livros.destroy', $livro->id) }}" method="POST">
                        <a class="navbarButton m5" href="{{ route('livros.edit', $livro->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="navbarButton m5">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
