
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Controle de Estoque</title>
    <link href="../css/app.css" rel="stylesheet"/>
    <link href="../css/custom.css" rel="stylesheet"/>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <nav class="navbar navbar-header">
            <ul>
              <div class="navbar-header">
                  <a class="navbar-brand" href="/produtos">
                    Controle de estoque - Laravel
                  </a>
              </div>
              <div class="nav navbar-nav">
                <li><a href="{{action('ProdutoController@lista')}}">Listagem</a></li>
                @if(!Auth::guest())
                  <li><a href="{{action('ProdutoController@novo')}}">Novo</a><
                  <li><a href="{{action('LoginController@registro')}}">Registrar</a></li>
                  <li id="sair">
                  <a href="{{action('LoginController@logout')}}">{{Auth::user()->name}}
                  , Sair<spam class="caret"></spam></a>
                  </li>
                @else
                  <li><a href="{{action('LoginController@login')}}">Entrar</a></li>
                @endif
              </div>
            </ul>
          </nav>
        </div>
      </nav>
    </div>
    <div class="container">
      @yield('content')
      <footer class="footer">
        <p>© Lauan B Guermandi.</p>
      </footer>
    </div>
  </body>
</html>
