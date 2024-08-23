@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="marquee" data-bs-ride="carousel">
            <marquee behavior="behavior" direction="right" truespeed="320ms" scrolldelay="18" scrollamount="20">libriloco libriloco libriloco libriloco libriloco libriloco libriloco libriloco</marquee>
        </div>
    </div>
    <h1 class="title">Livros disponíveis</h1>
    <div class="row">
        @foreach ($livros as $livro)
            <div class="card m10">
                <div class="cardTop">
                    <img src="{{ $livro->urlImg }}" class="cardImg" alt="{{ $livro->titulo }}">
                    <div class="cardBody">
                        <h3 class="cardTitle title">{{ $livro->titulo }}</h3>
                        <h5 class="cardText">{{ $livro->autor }}</h5>
                        <br>
                        <p class="cardText">Gênero: <strong>{{ $livro->genero }}</strong></p>
                        <p class="cardText">Lançamento: <strong>{{ $livro->ano }}</strong></p>
                        <a href="{{ route('livros.show', $livro->id) }}" class="cardButton">Ver livro</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
