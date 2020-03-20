@extends('layouts.site')

@section('title')
    Categoria de Consulta tal
@endsection

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-6">
                <img src="{{ asset('img/fisio.jpg') }}" alt="" class="w-100 rounded shadow-sm">
            </div>

            <div class="col-6">
                <h2>Sobre A Area</h2>

                <p class="lead mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At saepe cumque quam fugit aliquam, voluptatum assumenda enim! Exercitationem distinctio fugiat, id maxime ipsam dignissimos incidunt! Accusantium nesciunt voluptas quae repellendus.</p>

                <h2>Nossos Serviços Da Area</h2>

                <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia fugiat cupiditate, expedita quaerat, alias blanditiis reprehenderit beatae iusto aut delectus vitae quia fugit animi quam. Delectus veniam quam aperiam! Ex?</p>
            </div>
        </div>
    </div>
@endsection