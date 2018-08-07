@extends('layouts.pags')

@section('content')
    <section class="cuerpo">
      <div class="info-usuario">
        <div class="imagen-perfil">
          @if (Auth::check())
        	  <img src="./images/avatar/{{Auth::user()->avatar}}" alt="avatar" width=200px height=200px  style=border-radius:50% >
          @endif
        </div>
        @if (Auth::check())
        <p>{{Auth::user()->name}}</p>
        <p class="email-usuario">{{Auth::user()->email}}</p>
        @endif
      </div>

      <div class="container">

        @foreach (\App\Receta::all() as $receta)
        <div class="posteos">
          <h3>{{$receta->nombre}}</h3>
          <img class="imagen_posteo"src="\images\fotos_recetas\photobrownie.jpg" alt="imagen_posteo">
          <p>Tipo de receta: {{$receta->tipo}}</p>
          <textarea name="descripcion" rows="8" cols="80" >{{$receta->descripcion}}</textarea>
          <a href="\app\Http\Controllers\RecetasController">Eliminar publicacion</a>
        </div>
        @endforeach

@endsection
