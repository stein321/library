@extends('book_table')
@section('content')
		<table class="table table-striped table-hover">
			<tr>
			<td>Number</td>
			<!-- <td>Author ID</td> -->
			<td>Book Title</td>
			<td>Author </td>
			<!-- <td>Book ISBN</td> -->
			<!-- <td>Book Description</td> -->
			</tr>
			
			@foreach($books as $key=>$book)
				<tr>
				<td>{{$key + 1}}</td>
				<!-- <td>{{ isset($book->id) ? $book->id : 'Default' }}</td>  -->
		    	<td>{{$book->title}}</td> 
		    	<td>{{ isset($book->first_name) ? $book->first_name.' '.$book->last_name : 'Default' }}</td> 
		    	<!-- <td>{{ isset($book->ISBN) ? $book->ISBN : 'Default' }}</td>  -->
		    	<!-- <td>{{$book->description}}</td>  -->
		    	</tr>
    		@endforeach
    	</table>
@stop