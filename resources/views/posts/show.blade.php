<!-- VISTA SHOW: muestra los datos de 1 post -->
@extends('layouts.app')

@section('content')
<div class="container">
  <h1>{{$post->titulo}}</h1>
  <p>Creado el {{$post->created_at}}</p>
  <p>{{$post->texto}}</p>
</div>
@endsection