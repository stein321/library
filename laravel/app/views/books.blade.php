@extends('book_table')
@section('content')
		<table class="table table-striped table-hover ">
			<tr>
			<td>Number</td>
			<!-- <td>Author ID</td> -->
			<td>Book Title</td>
			</tr>
			
			@foreach($books as $key=>$book)
				<tr>
				<td id="book" value={{$book->ISBN}}>{{$key + 1}}</td>
		    	<td id="book" value={{$book->ISBN}}>{{$book->title}}</td> 
		    	<!-- <td id="book" value={{$book->ISBN}}>{{ isset($book->first_name) ? $book->first_name.' '.$book->last_name : 'Default' }}</td>  -->
		    	</tr>
    		@endforeach
    	</table>

@stop