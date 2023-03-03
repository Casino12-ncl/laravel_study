@extends('layouts.app')

@section('title')Главная@endsection

@section('content')
<h1>main</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, accusantium error saepe doloremque vitae quidem culpa omnis, laboriosam eaque, molestias illo maiores quam! Explicabo necessitatibus doloribus cum eveniet rem dolor?</p>
@endsection

@section('aside')
    @parent<p>что-то еще</p>
@endsection