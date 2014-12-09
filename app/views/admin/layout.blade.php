<!DOCTYPE html>
<html>
  <head>
<<<<<<< HEAD
<<<<<<< HEAD
    <title>@yield('title', 'Revista Digital')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="http://transparencia.utem.cl/wp-content/themes/transparenciautem/favicon.ico">
    
=======
    <title>@yield('title', 'Aprendiendo Laravel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
=======
    <title>@yield('title', 'Aprendiendo Laravel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
    <!-- Bootstrap -->
  {{ HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen')) }}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  {{--tenemos que llamar al script (para el boto Eliminar) --}}

  <body>
    <div id="wrap">
      <div class="container">
<<<<<<< HEAD
<<<<<<< HEAD
        <a href="{{ url('admin/logout') }}">Cerrar sesión.</a><br />
        @yield('content')
        <br/><hr />
        (-Footer-layout-) layout.blade.php - proyecto_en_blanco: Copyright 2013 - Todos los... reservados.
      </div>
    </div>
    
=======
=======
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6

      <br/>
      <a href="{{ route('posts.index') }}" class="btn btn-info">Publicaciones</a>
        @yield('content')
      </div>
    </div>
<<<<<<< HEAD
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
=======
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/admin.js') }}
  </body>
</html>