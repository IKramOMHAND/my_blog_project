@extends('layouts/main')
@section('content')
@foreach( $posts as $post)
<li><a href="/Articles/{{$post->id}}"> {{$post->post_titre}}</a></li>
<div>{{$post->post_content}}</div>
@endforeach
@endsection 









