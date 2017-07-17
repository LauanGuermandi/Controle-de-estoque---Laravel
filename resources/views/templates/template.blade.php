
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
              <ul class="nav navbar-nav navbar-right">
                <li><a href="{{action('ProdutoController@lista')}}">Listagem</a></li>
                <li><a href="{{action('ProdutoController@novo')}}">Novo</a></li>
              </ul>
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
