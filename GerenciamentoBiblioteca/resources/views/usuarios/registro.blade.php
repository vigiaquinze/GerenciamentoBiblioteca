@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')
    {{-- formulario --}}
    <div class="container navBarMargin">
        <h1 class="title">Registrar-se</h1>
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
            <div class="formGroups">
                <div class="formGroup">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control" required>
                </div>

                <div class="formGroup">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="formGroup">
                    <label for="password">Senha</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="formGroup">
                    <label for="password_confirmation">Confirme a Senha</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>

                <div class="formGroup">
                    <label for="password_confirmation">Tipo de Usuário</label>
                    <select name="tipo" id="tipo">
                        <option value="usuario">Usuário</option>
                        <option value="bibliotecario">Bibliotecário</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Registrar-se</button>
            </div>
        </form>
    </div>

@endsection
