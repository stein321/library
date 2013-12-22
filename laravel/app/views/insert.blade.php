@extends('newlayout')
<form action='insert' method='GET'>

		Title:<input type="text" name="title">
		ISBN:<input type="text" name="isbn" >
		Synopsis:<input type="text" name="synposis">
		Date published:<input type="text" name="date_published">
        <input type='submit'>
</form>
@section('content')


@stop