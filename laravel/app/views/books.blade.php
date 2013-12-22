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
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modalTitle">Modal title</h4>
      </div>
      <div class="modal-body">
        <div id="date_published"></div>
        <div id="description"> </div>
        <div id="authors">Author: </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@stop