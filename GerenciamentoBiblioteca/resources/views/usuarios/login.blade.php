@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="container navBarMargin">
        <h1 class="title">Login</h1>
        <form method="POST" action="{{ route('usuarios.login') }}">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Oops!</strong> Erro no login.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="formGroups">
                <div class="formGroup">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required autofocus>
                </div>

                <div class="formGroup">
                    <label for="password">Senha</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
@endsection
