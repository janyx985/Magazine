<<<<<<< HEAD
<<<<<<< HEAD
@extends('admin/layout')

@section('content')
<h1>Publicaciones</h1>
<a href="posts/create" class="btn btn-primary">Crear una publicacion</a>
<a href="{{ route('admin.users.index') }}" class="btn btn-info">Administrar usuarios</a>

{{--<a href="posts/create">Agregar</a>--}}
<br/><br/>
@include('posts/partials/postfinder')
<ul>
	<hr/><br/>
=======
=======
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
@extends('layout')

@section ('title') Publicaciones @stop

@section('content')
<a href="posts/create">Agregar publicación</a>
<ul>
<<<<<<< HEAD
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
=======
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
	@foreach($posts as $post)
	<li>
		<!-- <a href="posts/{{ $post->id }}">{{ $post->title }}</a> -->

<<<<<<< HEAD
<<<<<<< HEAD
		<a href="{{ URL::to('admin/posts/' . $post->id) }}">{{ $post->title }}</a>
=======
		<a href="{{ URL::to('/posts/' . $post->id) }}">{{ $post->title }}</a>
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
=======
		<a href="{{ URL::to('/posts/' . $post->id) }}">{{ $post->title }}</a>
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6

	</li>
	@endforeach
	
</ul>
@stop