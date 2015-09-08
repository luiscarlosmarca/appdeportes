
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        {!!Html::style('css/reset.css')!!}
          {!!Html::style('css/supersized.css')!!}
            {!!Html::style('css/style.css')!!}
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        

         
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>
@if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Por favor corrige los errores<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

        <div class="page-container">
            <h1>Iniciar sección</h1>
    <form method="POST" action="{{ url('/auth/login') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
          

                <input type="text" name="email" class="username" placeholder="Digite su email">
                <input type="password" name="password" class="password" placeholder="ingrese la contraseeña">
                <button type="submit">Entrar</button>
                <div class="error"><span>+</span></div>
            </form>
            
        </div>





        <!-- Javascript -->
        <script src="js/jquery-1.8.2.min.js"></script>
        <script src="js/supersized.3.2.7.min.js"></script>
        <script src="js/supersized-init.js"></script>
        <script src="js/scripts.js"></script>

    </body>

</html>

