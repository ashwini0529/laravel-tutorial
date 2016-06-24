@extends('layout')

@section('content')

Edit your note 

<form action = "/note/{{$note->id}}" method = "POST">

{{method_field('PATCH')}}

<textarea name = "body"  >{{$note->body}}</textarea>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type = "submit" value = "Update Note"></input>

</form>
@stop