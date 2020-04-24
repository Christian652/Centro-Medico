@extends('layouts.dashboard')

@section('titulo')
    Listar Especialidades
@endsection

@section('content')

    <div class="container">
        <h1 class="display-4 text-center" style="font-size: 2.8em;">Especialidades De Consultas Da Clinica</h1>
        <hr>
        <div class="row justify-content-center">
            <div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Foto</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($especialidades as $especialidade)
                        <tr>
                            <td>{{ $especialidade->id }}</td>
                            <td>{{ $especialidade->nome }}</td>
                            <td>
                                <img src="http://localhost/Consultorio/storage/app/public/especialidadeImgs/{{ $especialidade->foto }}" alt="" class="w-25">
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('admin.especialidades.edit', ['especialidade'=>$especialidade]) }}" class="btn btn-success">Update</a>

                                    <form action="{{ route('admin.especialidades.destroy', ['especialidade'=>$especialidade->id]) }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger">Delete</button>
                                    </form>

                                    <a href="{{ route('admin.especialidades.show', ['especialidade'=>$especialidade]) }}" class="btn btn-info">Posts</a>
                                </div>    
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection