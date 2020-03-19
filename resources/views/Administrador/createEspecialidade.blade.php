@extends('layouts.dashboard')

@section('titulo')
    Adicionar Nova Especialidade
@endsection

@section('content')

    <div class="container">
        
        <h1 class="display-4 text-center">Cadastrar Nova Especialidade</h1>

        <div class="row">
            <div class="col-8 offset-2">

                <form action="{{ route('admin.especialidades.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="nome" class="form-control" placeholder="Digite o Nome Da Especialidade!">
                    </div>

                    <div class="form-group">
                        <label for="">Uma Foto Representativa</label><br>

                        <input type="file" name="foto" >
                    </div>

                    <button class="btn btn-info">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection