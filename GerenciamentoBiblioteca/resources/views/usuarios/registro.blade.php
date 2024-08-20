@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')
{{-- formulario --}}
<div class="container">
    <h1>Registrar-se</h1>
    <form method="POST" action="{{ route('usuarios.registro') }}">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oops!</strong> Erro no registro.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="senha" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="senha_confirmation">Confirme a Senha</label>
            <input type="password" name="senha_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrar-se</button>
    </form>
</div>

@endsection
