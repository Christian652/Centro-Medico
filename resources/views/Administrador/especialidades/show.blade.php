@extends('layouts.dashboard')

@section('titulo')
    Detalhes Da Especialidade
@endsection

@section('content')


    <div class="container">
        <h1 class="display-4 text-center" style="font-size: 2.8em">Posts Da Categoria {{ $especialidade->nome }}</h1>
        <hr>
        <div class="row justify-content-center mb-3">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white p-0 m-0 text-center">Adicionar Post</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.posts.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" maxlength="255" name="titulo" class="form-control text-center text-capitalize" placeholder="Digite Aqui O Titulo Do Post">
                            </div>

                            <div class="form-group">
                                <input type="text" maxlength="255" name="conteudo" class="form-control text-center text-capitalize" placeholder="Digite Aqui O Conteudo Do Post">
                            </div>

                            <input type="hidden" name="especialidade" value="{{ $especialidade->id }}">

                            <button class="btn btn-info">Publicar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mb-2">
        @foreach($especialidade->posts()->get() as $post)
            <div class="col-sm-12 col-lg-6 mb-2">
                <div class="card shadow">
                    <div class="card-header d-flex justify-content-end py-1">
                        <form action="{{ route('admin.posts.destroy', ['post'=>$post->id]) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger rounded-circle p-1">
                                <div class="material-icons float-left" style="font-size: 1.2em;">delete</div>
                            </button>
                        </form>

                        <a href="{{ route('admin.posts.edit', ['post'=>$post->id]) }}" class="ml-2 btn btn-success rounded-circle p-1">
                            <div class="material-icons float-left" style="font-size: 1.2em;">edit</div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h3>{{ $post->titulo }}</h3>
                        <hr>
                        <p class="lead">{{ $post->conteudo }}</p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <hr>
        <a href="{{ route('admin.especialidades.index') }}" class="btn btn-outline-primary btn-lg px-5">Voltar</a>
    </div>
         
    


@endsection