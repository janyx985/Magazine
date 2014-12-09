<<<<<<< HEAD
<<<<<<< HEAD
@extends('layout')

@section('content')
=======
=======
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
@extends ('layout')

@section ('title') Nueva publicacón @stop

@section ('content')
<<<<<<< HEAD
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
=======
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
{{ Form::open(array('url' => 'posts')) }}
    {{ Form::text('title') }}<br />
    {{ Form::textArea('content') }}<br />
    {{ Form::submit('Guardar') }}
{{ Form::close() }}
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
=======

>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
@stop