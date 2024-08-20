@extends('layouts.app')


@section('content')
    <div class="container">
        <h1 class="my-4">Livros</h1>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <a class="btn btn-success mb-2" href="{{ route('livros.create') }}"> Criar Novo Livro</a>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Foto</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Gênero</th>
                <th>Ano</th>
                <th width="280px">Ação</th>
            </tr>
            @foreach ($livros as $livro)
            <tr>
                <td>{{ $livro->id }}</td>
                <td><img src="{{ $livro->urlImg }}" height="120px"></img></td>
                <td>{{ $livro->titulo }}</td>
                <td>{{ $livro->autor }}</td>
                <td>{{ $livro->genero}}</td>
                <td>{{ $livro->ano }}</td>
                <td>
                    <form action="{{ route('livros.destroy', $livro->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('livros.edit', $livro->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
