@extends('layouts.dashboard')

@section('titulo')
    Editar Especialidade
@endsection

@section('content')

<div class="container">
    <h1 class="display-4 text-center" style="font-size: 2.8em">Editar - {{ $especialidade->nome }}</h1>

    <div class="row justify-content-center">
        <div class="col-sm-8">
            <form action="{{ route('admin.especialidades.update', ['especialidade'=>$especialidade->id]) }}" method="post">
                @csrf
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label>Nome</label>

                    <input type="text" name="nome" class="form-control" value="{{ $especialidade->nome }}">
                </div>

                <div class="form-group">
                    <label>Foto</label>

                    <input type="file" name="foto">
                </div>

                <button class="btn btn-info">Salvar</button>
            </form>
        </div>
    </div>
</div>


@endsection