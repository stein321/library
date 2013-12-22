<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap-theme.min.css">

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:300,400,700);

        body {
            margin:0;
            font-family:'Lato', sans-serif;
            text-align:center;
            color: #999;
        }

        .welcome {
           width: 300px;
           height: 300px;
           position: relative;
           left: 50%;
           top: 50%; 
           margin-left: -150px;
           margin-top: -150px;
        }

        a, a:visited {
            color:#FF5949;
            text-decoration:none;
        }

        a:hover {
            text-decoration:underline;
        }

        ul li {
            display:inline;
            margin:0 1.2em;
        }

        p {
            margin:2em 0;
            color:#555;
        }
    </style>
    <script>

       
</script>
</head>
<div class="trigger">Trigger</div>
<div class="result"></div>
<div class="log"></div>

    <body>
     <!--    <h1>Laravel Quickstart</h1>
		<FORM  ACTION="books" METHOD="GET">Enter something in the box: <BR>
            <INPUT TYPE="text" NAME="inputbox" id='searchBox' VALUE=""><P>
            <Input type="submit">
          </Form> -->
		          @yield('content')

    </body>
</html>



<?php
//echo Form::text('search',"Ender's Game");
//echo Form::select('size', array('title' => 'Book Title', 'isbn' => 'ISBN' ,'author' => 'Author' ));
//echo Form::submit('Submit');
?>