<<<<<<< HEAD
<<<<<<< HEAD
@extends('layout')
@section('title'){{ $post->title }}@stop
@section('content')
=======
=======
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
@extends ('layout')

@section ('title') {{ $post->title }} @stop

@section ('content')

<<<<<<< HEAD
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
=======
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
<a href="{{ $post->id }}/edit">Editar</a>

{{ Form::open(array('url' => 'posts/' . $post->id, 'method' => 'delete')) }}
{{ Form::submit('Eliminar')}}
{{ Form::close() }}
<<<<<<< HEAD
<<<<<<< HEAD
<h2>{{ $post->title }}</h2>
<p>{{ $post->content }}</p>
=======
<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>

>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
=======
<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>

>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
@stop