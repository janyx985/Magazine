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
{{ Form::open(array('url' => 'posts/'. $post->id, 'method' => 'put')) }}
    {{ Form::text('title', $post->title) }}<br />
    {{ Form::textArea('content', $post->content) }}<br />
    {{ Form::submit('Guardar') }}
{{ Form::close() }}
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
=======

>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
@stop