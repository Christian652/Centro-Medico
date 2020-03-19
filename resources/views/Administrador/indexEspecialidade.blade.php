@extends('layouts.dashboard')

@section('titulo')
    Listar Especialidades
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
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
                                <img src="http://localhost/Consultorio/public/storage/especialidadeImgs/{{ $especialidade->foto }}" alt="" class="w-25">
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('admin.especialidades.edit', ['especialidade'=>$especialidade]) }}" class="btn btn-success">Update</a>

                                    <form action="{{ route('admin.especialidades.destroy', ['especialidade'=>$especialidade]) }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
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