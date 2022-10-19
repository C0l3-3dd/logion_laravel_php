@extends('layouts.app-master')

@section('content')

    <h1 class="container">HOME</H1>

    @auth
        <p>Bienvenido {{auth()-> user()->name ?? auth()->user()->username }}, estas autenticado a la pagina</p>
        <p>
            <a href="/logout"> Cerrar Sesion</a>
        </p>
    @endauth

    @guest
        <p> Para ver el cotnenido  <a href="/login"> inicia sesion</a></p>
    @endguest

@endsection