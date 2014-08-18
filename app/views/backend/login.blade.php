<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('app/views/fe_base/css/bootstrap.min.css') }}

    <!-- Custom styles for this template -->
    {{ HTML::style('app/views/backend/css/signin.css') }}
    

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

    <div class="container">
        
          <form class="form-signin" role="form">
            <h2 class="form-signin-heading">TicWebKit</h2>
            <input type="email" class="form-control" placeholder="Email address" required autofocus>
            <input type="password" class="form-control" placeholder="Password" required>

              {{ Form::submit('Entrar', array("class" => "btn btn-lg btn-primary btn-block")) }}
            <a href="/">Volver a Inicio</a>
          </form>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}
    {{ HTML::style('app/views/fe_base/js/bootstrap.min.js') }}
    {{ HTML::style('app/views/fe_base/js/docs.min.js') }}
  </body>
</html>