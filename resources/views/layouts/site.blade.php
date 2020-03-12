<!doctype html>
<html lang="pt-br">
  <head>
    <title>@yield('titulo')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body class="bg-light">
    <header class="w-100">
        <div class="w-100 bg-secondary p-2 d-flex justify-content-end text-white">
            <div class="d-flex">
                <span class="mr-2"><div class="material-icons float-left">phone</div> 55 85 - 8888-8888 |</span>
                <span class="mr-2"><div class="material-icons float-left">place</div> av br pois é |</span>
                <span class="mr-2"><div class="material-icons float-left">mail</div> CentroMedico@gmail.com</span>
            </div>
        </div>

        <nav class="navbar navbar-expand-sm navbar-dark bg-info py-4">
            <a class="navbar-brand" href="#">Consultorio</a>
            
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('/')}}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#modalLogin" data-toggle="modal">Login</a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('sobre')}}">Sobre Nós</a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contatos')}}">Contatos</a>
                    </li>
    
                    <li class="nav-item dropleft drop-left">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Serviços</a>
                        
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Fisioterapia</a>
                            <a class="dropdown-item" href="#">Oculista</a>
                            <a class="dropdown-item" href="#">Cardiologia</a>
                            <a class="dropdown-item" href="#">Clinico Geral</a>
                            <a class="dropdown-item" href="#">Otorrinolaringologia</a>
                            <a class="dropdown-item" href="#">Dermatologista</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
    @yield('content')

    <footer class="container-fluid bg-dark p-3 text-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    Redes Sociais
                    <ul>
                        <li>Facebook: Centro Medico</li>
                        <li>Instagram: @CentroMedico</li>
                        <li>LinkedIn: CentroMedico</li>
                    </ul>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4">
                    Contatos
                    <ul>
                        <li>Phone: 55 85 - 8888-8888</li>
                        <li>Place: avenida Brasil</li>
                        <li>Mail: CentroMedico@contato.com</li>
                    </ul>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4">
                    Ideais
                    <ul>
                        <li>Alegria</li>
                        <li>e</li>
                        <li>Ousadia</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    <div class="modal fade" id="modalLogin" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="lead text-center">Login</h5>

                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container">
                        <form action="{{route('login')}}" method="post" class="mb-2">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="email" placeholder="Email" class="form-control much-rounded form-control-lg">
                            </div>

                            <div class="form-group">
                                <input type="text" name="password" placeholder="Password" class="form-control much-rounded form-control-lg">
                            </div>

                            <button class="btn btn-primary much-rounded px-3">Login</button>

                            <a href="#registre-se" data-toggle="collapse" class="btn btn-outline-info much-rounded">Registre-se</a>
                        </form>

                        <div class="collapse" id="registre-se">
                            <hr>
                            <form action="{{route('register')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Digite Aqui Seu Nome" class="much-rounded form-control form-control-lg">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="email" placeholder="Digite Aqui O Email A Cadastrar" class="much-rounded form-control form-control-lg">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" name="password" placeholder="Digite Aqui A Senha A Cadastrar" class="much-rounded form-control form-control-lg">
                                </div>

                                <div class="form-group">
                                    <input type="" placeholder="Confirme A Senha" class="much-rounded form-control form-control-lg" name="password_confirmation" required>
                                </div>

                                <button class="btn btn-info much-rounded">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
  </body>
</html>