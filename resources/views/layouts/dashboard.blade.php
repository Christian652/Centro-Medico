<!doctype html>
<html lang="pt-br">
  <head>
    <title>@yield('titulo')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
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
            <button class="btn btn-outline-light much-rounded px-2">
              <div class="material-icons float-left">clear</div>
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
                  <!-- <li>
                      <a href="#submenu2" data-toggle="collapse">
                        Menu
                      </a>
                      <ul class="collapse pl-0" id="submenu2">
                          <li><a href="#">Paginas</a></li>
                          <li><a href="#">Item De Menu</a></li>
                      </ul>
                  </li> -->
                  @can('acesso-administrador')
                    <li class="active"><a href="">Home</a></li>
                    <li><a href="">link 1 admin</a></li>
                    <li><a href="">link 2 admin</a></li>
                    <li><a href="">link 3 admin</a></li>
                  @endcan

                  @can('acesso-medico')
                    <li class="active"><a href="">Home</a></li>
                    <li><a href="">link 1 medico</a></li>
                    <li><a href="">link 2 medico</a></li>
                    <li><a href="">link 3 medico</a></li>
                  @endcan

                  @can('acesso-secretario')
                    <li class="active"><a href="">Home</a></li>
                    <li><a href="">link 1 secretario</a></li>
                    <li><a href="">link 2 secretario</a></li>
                    <li><a href="">link 3 secretario</a></li>
                  @endcan

                  @can('acesso-paciente')
                    <li class="active"><a href="">Home</a></li>
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