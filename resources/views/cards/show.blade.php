@extends ('layout')

@section ('content')

		<div>{{$card->id}}.) {{$card->title}} </div>

		<ul>
		@foreach ($card->notes as $note)
		<li>{{$note->body}} (<a href="/note/{{$note->id}}/edit">edit</a>) </li>
		@endforeach
		</ul>
		<form action = "/cards/{{$card->id}}/notes" name = "addNote" method = "POST">
		<h4>Add notes</h4>
		<textarea name = "body">Please add your note over here </textarea><br>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type = "submit" value = "Add note"></input>
		</form>
@stop
