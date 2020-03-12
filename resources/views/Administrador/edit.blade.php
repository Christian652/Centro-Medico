@extends('layouts.dashboard')

@section('title')
    Editar Usuarios
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">Edit User - {{ $user->name }}</div>

                <div class="card-body">
                    <form action="{{ route('admin.users.update', $user->id) }}" method="post">
                        @csrf
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <input type="text" name="email" value="{{$user->email}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" name="name" value="{{$user->name}}" class="form-control">
                        </div>

                        @foreach($roles as $role)

                        <div class="form-check">
                            <input type="checkbox" name="roles[]" value="{{$role->id}}" @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                            <label for="">{{$role->nome}}</label>
                        </div>

                        @endforeach
                        
                        <button class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
