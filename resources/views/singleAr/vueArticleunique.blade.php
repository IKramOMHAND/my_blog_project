@extends('layouts/main')
@section('content')

<div class="row medium-8 large-7 columns">
<div class="blog-post">
<h3>{{ $post->post_titre}}<small> Date : {{$post->post_date}}</small></h3>
<img class="thumbnail" src="https://placehold.it/850x350">
<p>{{ $post->post_content }}</p>
<div class="callout">
<ul class="menu simple">
<li><a href="#"> Commentaire</a></li>
</ul>
</div>
<!--champs de formulaire de commentaire -->

<form action="/Articles/comment/{{$post->id}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control {{ $errors->has('comment_name') ? 'is-invalid' : '' }}" name="comment_name" id="comment_name" placeholder="nom"
                                value="{{ old('comment_name') }}"> {!! $errors->first('comment_name', '
                            <div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control {{ $errors->has('contact_email') ? 'is-invalid' : '' }}" name="comment_email" id="comment_email" placeholder="email"
                                value="{{ old('comment_email') }}"> {!! $errors->first('contact_email', '
                            <div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            <textarea class="form-control {{ $errors->has('comment_content') ? 'is-invalid' : '' }}" name="comment_content" id="comment_content" placeholder="message">{{ old('comment_content') }}</textarea>                            {!! $errors->first('comment_content', '
                            <div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <button type="submit" style ="text-align: center ; color: blue; " class="btn btn-secondary"> Soummettre </button>
</form>
<?php die('ici'); ?>
@foreach( $coms as $com )
<li> nom de commontaire: {{$com->comment_name}} </li>
<p>{{$com->comment_content}}</p>
@endforeach
@endsection
