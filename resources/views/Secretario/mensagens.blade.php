@extends('layouts.dashboard')

@section('titulo')
    Mensagens De Clientes
@endsection

@section('content')
            <h1 class="display-4 text-center m-0 p-0" style="font-size: 3em;">Mensagens Enviadas Por Clientes</h1>
                <hr class="m-0 my-1 p-0">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12 offset-sm-0 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    @foreach($messages as $message)
                      <div class="card mb-3">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <p class="lead p-0 m-0">{{$message->category()->first()->nome}}</p>
                  

                                <div class="d-flex">
                                  <form action="{{ route('manager.messages.destroy', ['message'=>$message]) }}" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-danger rounded-circle px-2 mr-1">
                                      <div class="material-icons float-left">delete</div>
                                    </button>
                                  </form>

                                  <!-- PERMISSOES PUBLICAS E PRIVADAS PARA DUVIDAS -->
                                  @if($message->category()->first()->nome == "Duvida" && $message->permissao_publica !== 1 && !empty($message->resposta))
                                  <form action="{{ route('manager.messages.bepublic', ['message'=>$message]) }}" method="post">
                                    @csrf
                                    {{method_field('PUT')}}
                                    <button class="btn btn-success px-2">
                                      <div class="material-icons float-left">lock_open</div>
                                      Tornar Publico
                                    </button>
                                  </form>
                                  @endif

                                  @if($message->category()->first()->nome == "Duvida" && $message->permissao_publica == 1)
                                  <form action="{{ route('manager.messages.beprivate', ['message'=>$message]) }}" method="post">
                                    @csrf
                                    {{method_field('PUT')}}
                                    <button class="btn btn-warning px-2">
                                      <div class="material-icons float-left">lock</div>
                                      Tornar Privado
                                    </button>
                                  </form>
                                  @endif

                                  <!-- PERMISSOES PUBLICAS E PRIVADAS PARA DEPOIMENTOS -->

                                  @if($message->category()->first()->nome == "Depoimento" && $message->permissao_publica !== 1)
                                  <form action="{{ route('manager.messages.bepublic', ['message'=>$message]) }}" method="post">
                                    @csrf
                                    {{method_field('PUT')}}
                                    <button class="btn btn-success px-2">
                                      <div class="material-icons float-left">lock_open</div>
                                      Tornar Publico
                                    </button>
                                  </form>
                                  @endif

                                  @if($message->category()->first()->nome == "Depoimento" && $message->permissao_publica == 1)
                                  <form action="{{ route('manager.messages.beprivate', ['message'=>$message]) }}" method="post">
                                    @csrf
                                    {{method_field('PUT')}}
                                    <button class="btn btn-warning px-2">
                                      <div class="material-icons float-left">lock</div>
                                      Tornar Privado
                                    </button>
                                  </form>
                                  @endif

                                </div>
                                
                            </div>
                        </div>

                        <ul class="list-group">
                          <li class="list-group-item">Emissor: {{$message->emailEmissor}}</li>
                          <li class="list-group-item">Nome do Emissor: {{$message->nome}}</li>
                          <li class="list-group-item">Mensagem: {{$message->message}}</li>

                          @if($message->category()->first()->nome == "Duvida" && $message->resposta === null)
                          <li class="list-group-item">
                            <form action="{{ route('manager.messages.update', ['message'=>$message->id]) }}" method="post">
                                @csrf
                                {{method_field('PUT')}}
                              <div class="d-flex">
                                <input type="text" name="resposta" class="form-control form-control-sm" placeholder="Digite Aqui A Resposta...">

                                <button class="btn btn-info btn-sm">Enviar</button>
                              </div> 

                              <input type="hidden" name="id" value="{{ $message->id }}">

                            </form>
                          </li>
                          @endif
                          
                          @if(!empty($message->resposta))
                          <li class="list-group-item">
                            Resposta: <br> {{ $message->resposta }}
                          </li>
                          @endif
                        </ul>
                      </div>
                    @endforeach    
                    </div>

                  </div>

                  <div class="row justify-content-center">
                    {{ $messages }}
                  </div>
                </div>
@endsection