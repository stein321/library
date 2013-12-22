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
        table {
          max-width: 50%;
          margin-right: auto;
          margin-left: auto;
        }
    </style>
<script>
      $(document).ready(function(){
          $("button").click(function(){
            var formData = {description: document.getElementById("searchBox").value ,criteria:document.getElementById("criteria").value}; //Array 
            $.ajax({
                url: "books",
                type:"GET",
                data: formData,
                context: document.body
            }).done(function(result) {
              // console.log(result);
                 $("div#content").html(result);
              });
          });
          //when a row is clicked
          $("td#book").click(function(){
           
            var data = {isbn: $(this).attr('value')};
             
             $.ajax({
                url:"get_a_book",
                type:"GET",
                data: data,
             }).done(function(result) {
                console.log(result);
                $('h4#modalTitle').text(result[0].title);
                $('div#date_published').text("Date published: " + result[0].date_published );
                $('div#description').text("Description: " +  result[0].description);
                $('div#authors').text(result[0].first_name + ' ' + result[0].last_name);
                $('#myModal').modal(result);
             });

          });
      });
</script>
</head>
<!-- Button trigger modal -->
<!-- <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button> -->


