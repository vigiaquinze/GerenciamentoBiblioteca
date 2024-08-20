@extends('layouts.app')


@section('content')
<div class="container">
    <h1 class="my-4">Editar Livro</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Houve alguns problemas com sua entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('livros.update', $livro->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="urlImg">URL da imagem do livro:</label>
            <input type="text" name="urlImg" class="form-control" value="{{$livro->urlImg}}">
        </div>

        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" class="form-control" value="{{$livro->titulo}}">
        </div>

        <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" name="autor" class="form-control" value="{{$livro->autor}}">
        </div>

        <div class="form-group">
            <label for="genero">Gênero:</label>
            <input type="text" name="genero" class="form-control" value="{{$livro->genero}}">
        </div>

        <div class="form-group">
            <label for="ano">Ano:</label>
            <input type="text" name="ano" class="form-control" value="{{$livro->ano}}">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
