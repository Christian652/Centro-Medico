@extends('layouts.site')

@section('title')
    Categoria de Consulta tal
@endsection

@section('content')
    <div class="container my-2">
        <h1 class="display-3">{{ $especialidade->nome }}</h1>
        <hr>
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <!-- <img src="http://localhost/Consultorio/storage/app/public/especialidadeImgs/{{ $especialidade->foto }}" class="w-100 rounded shadow-sm"> -->
                <img src="{{ asset('storage/especialidadeImgs') }}" alt="" class="w-100 rounded shadow-sm">
            </div>

            <div class="col-sm-12 col-lg-6">
            @foreach($especialidade->posts()->get() as $post)
                <h2>{{ $post->titulo }}</h2>

                <p class="lead mb-3">{{ $post->conteudo }}</p>
            @endforeach
            </div>
        </div>
        <hr>
    </div>
@endsection