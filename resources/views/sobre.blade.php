@extends('layouts.site')

@section('titulo')
    Sobre A Centro Medico
@endsection

@section('content')

<section class="container">
        <div class="row">
            <div class="col">
                <h2 class="my-3">Onde Nos Localizamos?</h2>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d850.9745881754897!2d-38.71373317085203!3d-4.222951262344115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7bf358cc6ff1c7b%3A0xca3736233f6a3720!2sPolyspase!5e1!3m2!1spt-BR!2sbr!4v1582156153823!5m2!1spt-BR!2sbr"  class="rounded shadow w-100 h-100" frameborder="0" style="border:0; min-height: 20em;" allowfullscreen=""></iframe>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 mt-4">
                <hr>
                <h2 class="text-center my-4">Valores Da-<span class="text-info">Centro Medico</span></h2>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-1">
                        <div class="card girar shadow">
                            <div class="card-header bg-info text-white">
                                <h3 class="text-center m-0 p-0">Amor</h3>
                            </div>

                            <div class="card-body text-center">
                                
                                
                                <div class="material-icons text-danger" style="font-size: 4em;">favorite</div>
                                
                                <p class="lead text-capitalize">para fazer com que nossas ações sejam unicas</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-1">
                        <div class="card girar shadow">
                            <div class="card-header bg-info text-white">
                                <h3 class="text-center m-0 p-0">Cuidado</h3>
                            </div>

                            <div class="card-body text-center">
                                <div class="material-icons text-info" style="font-size: 4em;">healing</div>
                                
                                <p class="lead text-capitalize">Para zelar da vida com dignidade.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-1">
                        <div class="card girar shadow">
                            <div class="card-header bg-info text-white">
                                <h3 class="text-center m-0 p-0">Honestidade</h3>
                            </div>

                            <div class="card-body text-center">
                                <div class="material-icons text-success" style="font-size: 4em;">verified_user</div>

                                <p class="lead text-capitalize">para tratar das pessoas com respeito e responsabilidade</p>
                            </div>
                        </div>
                    </div>
                </div>
<!-- 
                <div class="row">
                    <div class="col-12">
                        <p class="lead mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur accusantium nulla magni beatae ut exercitationem eaque dolorum quidem et non consequuntur quia ex, corrupti aut. Esse culpa sint laudantium obcaecati!</p>
                    </div>
                </div> -->

                <hr class="mt-4">

                <h2 class="mt-4">Missão</h2>
                
                <p class="lead text-capitalize">Nossa missão é levar com acessibilidade consultas e serviços em várias áreas da saúde com profissionais qualificados. Valorizamos a transparência em nossas ações e desejamos sempre a melhor experiência aos nossos pacientes, sempre com uma ótima qualidade em nosso atendimento e com um preço bem acessível. Atuando sempre com seriedade, respeito e responsabilidade com a vida das pessoas, trabalhando com muita dedicação e competência.</p>
            </div>
        </div>
    </section>


@endsection