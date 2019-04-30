
@extends('layouts/main') <!--Permet d'étendre le modèle layouts/main  -->
@section('content')<!--AFICHE CONTENT -->
<h1> ikram articles</h1>
@foreach( $posts as $post)
<li><a href="/Articles/{{$post->id}}"> {{$post->post_titre}}</a></li> <!--Boucle pour afficher tous les posts tie, par id-->
<div>{{$post->post_content}}</div>
@endforeach
@endsection

 