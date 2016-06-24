@extends ('layout')

@section ('content')

@foreach ($cards as $card)
<div><a href='{{$card->path()}}'>{{$card->title}}</a></div>{{-- 
<p>{{$card->title}}</p> --}}

@endforeach

@stop
