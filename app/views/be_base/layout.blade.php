<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('app/views/fe_base/css/bootstrap.min.css') }}

    <!-- Custom styles for this template -->
    {{ HTML::style('app/views/be_base/css/dashboard.css') }}

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    {{ HTML::script('app/views/backend/js/ie-emulation-modes-warning') }}

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {{ HTML::script('app/views/fe_base/js/ie10-viewport-bug-workaround.js') }}
   

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Abogado en Reus</a>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li>{{ HTML::link(URL::to('/dashboard'), 'Panel de Control') }}</li>
            <li>{{ HTML::link(URL::to('/seo'), 'SEO') }}</li>
            <li>{{ HTML::link(URL::to('/config'), 'Configuración') }}</li>
            <li>{{ HTML::link(URL::to('/logout'), 'Logout') }}</li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Panel de Control</h1>
          <h2 class="sub-header">@yield('subtitle')</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#id</th>
                  <th>Título</th>
                  <th>Subtítulo</th>
                  <th>SEO</th>
                  <th>Modificado</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Abogado en Reus</td>
                  <td>Sin definir</td>
                  <td>NO</td>
                  <td>-</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}
    {{ HTML::style('app/views/fe_base/js/bootstrap.min.js') }}
    {{ HTML::style('app/views/fe_base/js/docs.min.js') }}
  </body>
</html>
