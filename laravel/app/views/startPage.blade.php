@extends('layout')
   <script>
      $(document).ready(function(){
          $("button").click(function(){
            $.ajax({
                url: "books",
                context: document.body
            }).done(function(result) {
                 $("div#content").html(result);
              });
          });
      });
</script>
<body>
        <h1>Laravel Quickstart</h1>
            <INPUT TYPE="text" NAME="inputbox" id='searchBox' VALUE=""><P>
            <button>Send</button>

          <div id="content"></div>

    </body>
</html>