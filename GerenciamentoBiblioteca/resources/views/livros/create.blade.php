@extends('layouts.app')


@section('content')
<div class="container navBarMargin">
    <h1 class="title">Criar Livro</h1>

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

    <form class="formGroups" action="{{ route('livros.store') }}" method="POST">
        @csrf
        <div class="formGroup">
            <label for="urlImg">URL da imagem do livro:</label>
            <input type="text" name="urlImg" class="form-control" placeholder="URL da imagem">
        </div>

        <div class="formGroup">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" class="form-control" placeholder="Título">
        </div>

        <div class="formGroup">
            <label for="autor">Autor:</label>
            <input name="autor" class="form-control" placeholder="Autor do livro">
        </div>

        <div class="formGroup">
            <label for="genero">Gênero:</label>
            <input type="text" name="genero" class="form-control" placeholder="Gênero">
        </div>

        <div class="formGroup">
            <label for="ano">Ano:</label>
            <input type="text" name="ano" class="form-control" placeholder="Ano de lançamento">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
