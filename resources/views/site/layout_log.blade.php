<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  

<!--    
    <style>
      th:first-child, td:first-child
        {
          position:sticky;
          left:0px;
        }
    </style>
  -->

  <style>
    .cell-with-button {
      position: relative;
      text-align: center; /* Alinha o botão ao centro */
    }

    .btn-overlay {
      position: absolute;
      top: 50%;
      left: 50%;
      
      
      transform: translate(-50%, -50%);
      z-index: 1;
      width: 100%; /* Largura de 70% da célula */
      white-space: nowrap; /* Impede que o texto seja quebrado em várias linhas */
    }
  </style>

 
</head>
<body>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                
                <div class="dropdown">
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown link
                  </a>
                
                  <ul class="dropdown-menu">
                    @foreach ($categoriasMenu as $categoriaM)
                      <li><a class="dropdown-item" href="#">{{ $categoriaM->nome }}</a></li>    
                    @endforeach
                  </ul>
                </div>
              </li>

                <li class="nav-item">
                @auth
                <div class="dropdown">
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ola {{ auth()->user()->firstName }}
                  </a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}"> Dashboard </a></li>    
                      <li><a class="dropdown-item" href="{{ route('admin.calendario') }}"> Calendario </a></li>
                      <li><a class="dropdown-item" href="{{ route('admin.timeline') }}"> Linha do tempo </a></li>

                      <li><a class="dropdown-item" href="{{ route('login.logout') }}"> Sair </a></li>    
                  </ul>
                </div>

                @else
                <div class="dropdown">
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Bem vindo 
                  </a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('login.form') }}"> Login </a></li>  
                  </ul>
                </div>
                @endauth

              </li>
            </ul>
          </div>
        </div>
      </nav>


    @yield('conteudo')

    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    

 
</body>
</html>