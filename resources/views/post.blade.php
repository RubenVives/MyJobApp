@extends('PlantillaPrincipal')

@section('content')
    <h1 class="titulos">{{ $post->title}}</h1>
    {{ $post->body}}
@endsection