@extends('layout')

@section('content')
		<table class="table table-bordered">
		<tr>
		<td>Number</td>
		<td>Author ID</td>
		<td>Book Title</td>
		<td>Author </td>
		<td>Book ISBN</td>
		<td>Book Description</td>
		</tr>
		@foreach($books as $key=>$book)
		<tr>
		<td>{{$key + 1}}</td>
		<td>{{$book->id}}</td>
    	<td>{{$book->title}}</td> 
    	<td>{{$book->first_name}} {{$book->last_name}}</td>
    	<td>{{$book->ISBN}}</td> 
    	<td>{{$book->description}}</td> 
    	
    	</tr>
    	@endforeach
    	</table>
@stop