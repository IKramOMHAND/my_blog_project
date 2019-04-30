@extends('layouts/main')<!-- Permet d'étendre le modèle layouts/main  -->
@section('content')<!-- Permet d'insérer nos propres éléments  dans la vue -->
@foreach( $posts as $post)
<li><a href="/Articles/{{$post->id}}"> {{$post->post_titre}}</a></li> <!--Boucle pour afficher trois premiers articles par id-->
<div>{{$post->post_content}}</div>
@endforeach
@endsection 










