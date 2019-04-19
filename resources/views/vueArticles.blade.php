
@extends('layouts/main') <!--IMPORT LE FICHIER MAIN DU DOSSIER LAYOUTS-->
@section('content')<!--AFICHE CONTENT -->
<h1> ikram articles</h1>
@foreach( $posts as $post)
<li><a href="/Articles/{{$post->id}}"> {{$post->post_titre}}</a></li>
<div>{{$post->post_content}}</div>
@endforeach
@endsection

 