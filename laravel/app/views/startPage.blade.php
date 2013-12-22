@extends('layout')
   
<body>
        <h1>Book Search</h1>
            <input name="inputbox" id='searchBox'>
            <select id="criteria">
            		<option value="title">Title</option>
					<option value="isbn">ISBN</option>
					<option value="author">Author</option>
            </select>
            <button class="btn btn-primary btn-sm" >Send</button>
            


          <div id="content"></div>

    </body>
</html>