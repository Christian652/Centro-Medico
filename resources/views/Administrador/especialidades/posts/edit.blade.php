@extends('layouts.dashboard')

@section('titulo')
    Editar Post
@endsection

@section('content')
<div class="container">
    <h1 class="display-4 text-center" style="font-size: 2.8em">Editar Post Da Categoria - {{ $post->especialidade()->first()->nome }}</h1>

    <div class="row justify-content-center">
        <div class="col-sm-8">
            <form action="{{ route('admin.posts.update', ['post'=>$post->id]) }}" method="post">
                @csrf
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label>Titulo</label>

                    <input type="text" required name="titulo" maxlength="255" class="form-control" value="{{ $post->titulo }}">
                </div>

                <div class="form-group">
                    <label>Conteudo</label>

                    <input type="text" required name="conteudo" maxlength="255" class="form-control" value="{{ $post->conteudo }}">
                </div>

                <div class="form-group">
                    <label>Especialidade</label>

                    <select required name="especialidade" class="form-control">
                        <option value="{{ $post->especialidade()->first()->id }}">{{ $post->especialidade()->first()->nome }}</option>
                        @foreach($especialidades as $especialidade)
                        @if($especialidade->id !== $post->especialidade()->first()->id)
                        <option value="{{ $especialidade->id }}">{{ $especialidade->nome }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>

                <button class="btn btn-info">Salvar</button>
            </form>
        </div>
    </div>
</div>

@endsection