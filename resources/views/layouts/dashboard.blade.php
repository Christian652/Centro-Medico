<!doctype html>
<html lang="pt-br">
  <head>
    <title>@yield('titulo')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="icon" href="{{ asset('img/iconelogo.png') }}">
    
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body class="bg-light">

    <nav class="navbar navbar-expand navbar-dark bg-info">

        <a class="sidebar-toggle text-light mr-3">
            <span class="navbar-toggler-icon"></span>
        </a>

        <a class="navbar-brand" href="">{{Auth::user()->roles()->first()->nome}}</a>

        <form action="{{route('logout')}}" method="post" class="ml-auto">
            @csrf
            <button class="btn btn-outline-light btn-sm px-2">Logout
              <div class="material-icons float-left">logout</div>
            </button>
        </form>
    </nav>
  
      <div class="d-flex">
          <nav class="sidebar">
              <ul class="list-unstyled">
                  <li class="p-3 text-center text-white font-weight-bold">
                    Usuario:
                    {{Auth::user()->name}}
                  </li>
                  
                    <li>
                      <a href="{{route('dashboard')}}">
                      <div class="material-icons float-left mr-2">home</div>
                      Home
                      </a>
                    </li>
                  @can('acesso-administrador')
                    <li>
                      <a href="#especialidades" data-toggle="collapse">
                        <div class="material-icons float-left mr-2">arrow_drop_down</div>
                        Especialidades
                      </a>

                      <ul class="collapse pl-0" id="especialidades">
                          <li>
                            <a href="{{ route('admin.especialidades.create') }}">
                              Nova
                              <div class="material-icons float-left">add</div>
                            </a>
                          </li>

                          <li>
                            <a href="{{ route('admin.especialidades.index') }}">
                              Listar Todas
                              <div class="material-icons float-left">list</div>
                            </a>
                          </li>
                      </ul>
                    </li> 
                  @endcan

                  @can('acesso-medico')
                    <li><a href="">link 1 medico</a></li>
                    <li><a href="">link 2 medico</a></li>
                    <li><a href="">link 3 medico</a></li>
                  @endcan

                  @can('acesso-secretario')
                    <li><a href="{{route('manager.messages.index')}}">Mensagens</a></li>
                  @endcan

                  @can('acesso-paciente')
                    <li><a href="">link 1 paciente</a></li>
                    <li><a href="">link 2 paciente</a></li>
                    <li><a href="">link 3 paciente</a></li>
                  @endcan
              </ul>
          </nav>
  
          <div class="content p-1 w-100">
              <div class="list-group-item">
                  
                @yield('content')
                  
              </div>
          </div>
      </div>
    
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/dashboard.js')}}"></script>
  </body>
</html>