@extends('layouts/main')
@section('content')
<form action="{{ url('/Contacts') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control {{ $errors->has('contact_name') ? 'is-invalid' : '' }}" name="contact_name" id="contact_name" placeholder="nom"
                                value="{{ old('contact_name') }}"> {!! $errors->first('contact_name', '
                            <div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control {{ $errors->has('contact_email') ? 'is-invalid' : '' }}" name="contact_email" id="contact_email" placeholder="email"
                                value="{{ old('contact_email') }}"> {!! $errors->first('contact_email', '
                            <div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            <textarea class="form-control {{ $errors->has('contact_message') ? 'is-invalid' : '' }}" name="contact_message" id="contact_message" placeholder="message">{{ old('contact_message') }}</textarea>                            {!! $errors->first('contact_message', '
                            <div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <button type="submit" style ="text-align: center ; color: blue; " class="btn btn-secondary">Envoyer !</button>
</form>
<p style=""> affichage contact </p>
@foreach( $contacts as $contact)
<li> Auteur <a href=""> {{$contact->contact_name}}</a></li>
<div> message : {{$contact->contact_message}}</div>
@endforeach

@endsection
