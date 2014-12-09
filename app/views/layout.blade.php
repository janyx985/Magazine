<html lang="en">
  <head>
<<<<<<< HEAD
<<<<<<< HEAD
    <title>@yield('title', 'Revista Digital')</title>

    <meta charset="utf-8">
    <title>(-title-layout-)</title>
=======
    <meta charset="utf-8">
    <title>@yield('title', '(-title-layout-)')</title>
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
=======
    <meta charset="utf-8">
    <title>@yield('title', '(-title-layout-)')</title>
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
    <link rel="shortcut icon" type="image/x-icon" href="http://transparencia.utem.cl/wp-content/themes/transparenciautem/favicon.ico">
    {{ HTML::style('css/bootstrap.min.css'); }}
  </head>
  <body>
  	 <h2>(-Header-layout-)</h2>
<<<<<<< HEAD
<<<<<<< HEAD
     <a href="{{ url('admin/logout') }}">Cerrar sesión.</a><br />

      @yield('content')
      <a href="{{ route('admin.users.index') }}" class="btn btn-info">Administrar usuarios</a>
=======
=======
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
     <a href="logout">Cerrar sesión.</a><br />
      <p>
    <a href="{{ route('admin.users.index') }}" class="btn btn-info">Usuarios</a>
  </p>
      @yield('content')
<<<<<<< HEAD
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
=======
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
      <hr />
      (-Footer-layout-) layout.blade.php - proyecto_en_blanco: Copyright 2013 - Todos los... reservados.
  </body>
</html>